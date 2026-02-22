"""
Telegram Bot - Handles all Telegram-related logic.

This module is responsible for:
1. Receiving messages from Telegram
2. Sending responses back
3. Handling basic commands like /start
"""

import time
import logging
import json
import os
from pathlib import Path
import threading
import telebot
from telebot import apihelper
from requests.exceptions import ConnectionError, Timeout
from typing import List, Optional

from agent.agent import ChatAgent
from config.settings import Settings

# Configure API helper with better timeout settings
apihelper.SESSION_TIMEOUT = 10

# Set up logging
logging.basicConfig(level=logging.INFO)
logger = logging.getLogger(__name__)


class TelegramBot:
    """Telegram bot that uses our agent to respond to messages."""

    def __init__(self):
        """Initialize the bot and agent."""
        self.agent = ChatAgent()
        # Create bot instance with standard token
        self.bot = telebot.TeleBot(Settings.TELEGRAM_BOT_TOKEN)
        # Paths for event data and registrations
        self.base_path = Path(__file__).parent
        self.events_file = self.base_path / "events.json"
        self.reg_file = self.base_path / "registrations.json"
        self._lock = threading.Lock()
        # Load events into memory (DB preferred; JSON fallback)
        self.events = self._load_events()
        
        # Register handlers (what to do when something happens)
        @self.bot.message_handler(commands=['start'])
        def handle_start(message):
            """Handle /start command for the événement module."""
            welcome_message = (
                "👋 Welcome to LearnFlex — Événements Module\n\n"
                "Welcome! This module helps you discover, register for, and manage live events, workshops, and webinars offered on LearnFlew.\n\n"
                "Available commands:\n"
                "• /events — List upcoming events\n"
                "• /event <id> — Show details for a specific event (e.g. /event E1)\n"
        
                "Quick tips:\n"
                "• Use /event <id> to see full event details and capacity.\n"
                "• After registering you will receive a confirmation message.\n\n"
                "If you need help, ask me any question about events or the platform and I'll assist you. 🎟️"
            )
            self.bot.reply_to(message, welcome_message)

        @self.bot.message_handler(commands=['events', 'evenements'])
        def handle_list_events(message):
            """List available events."""
            events = self.events
            if not events:
                self.bot.reply_to(message, "No upcoming events found.")
                return
            lines = [f"Upcoming events ({len(events)}):"]
            for i, ev in enumerate(events, start=1):
                # Show a short description preview (max 80 chars)
                desc = ev.get('description', '')
                preview = (desc[:77] + '...') if len(desc) > 80 else desc
                lines.append(f"{i}. {ev['title']} — {ev['date']}\n   {preview}")

            lines.append("\nTo see full details: /event <number> — e.g. /event 1")
            lines.append("To register: /register <number> — e.g. /register 1")
            self.bot.reply_to(message, "\n\n".join(lines))

        @self.bot.message_handler(commands=['event'])
        def handle_event_details(message):
            """Show details for a single event. Usage: /event E1"""
            parts = message.text.split()
            if len(parts) < 2:
                self.bot.reply_to(message, "Usage: /event <number> — e.g. /event 1")
                return
            ref = parts[1].strip()
            ev = self._resolve_event_ref(ref)
            if not ev:
                self.bot.reply_to(message, "Event not found. Use /events to see the list with numbers.")
                return

            details = (
                f"{ev['title']}\n"
                f"Date: {ev['date']}\n"
                f"Capacity: {ev.get('capacity', 'N/A')}\n\n"
                f"{ev.get('description','No description available.') }"
            )
            self.bot.reply_to(message, details)

        @self.bot.message_handler(commands=['register'])
        def handle_register(message):
            """Register the user for an event. Usage: /register E1"""
            parts = message.text.split()
            if len(parts) < 2:
                self.bot.reply_to(message, "Usage: /register <number> — e.g. /register 1")
                return
            ref = parts[1].strip()
            ev = self._resolve_event_ref(ref)
            if not ev:
                self.bot.reply_to(message, "Event not found. Use /events to see the list with numbers.")
                return
            event_id = ev.get('id')
            user_id = str(message.from_user.id)
            success, msg = self._register_user(user_id, event_id)
            self.bot.reply_to(message, msg)

        @self.bot.message_handler(commands=['my_registrations'])
        def handle_my_regs(message):
            """List the events the user registered for."""
            user_id = str(message.from_user.id)
            regs = self._list_user_registrations(user_id)
            if not regs:
                self.bot.reply_to(message, "You have no registrations.")
                return
            lines = ["Your registrations:"]
            for ev in regs:
                lines.append(f"- {ev['title']} — {ev['date']}")
            self.bot.reply_to(message, "\n".join(lines))
        
        @self.bot.message_handler(func=lambda message: True)
        def handle_message(message):
            """Handle incoming user messages."""
            try:
                # Show typing indicator (nice UX touch)
                self.bot.send_chat_action(message.chat.id, 'typing')
                # For non-event commands, delegate to agent
                response = self.agent.process_message(message.text)
                self.bot.reply_to(message, response)
            except Exception as e:
                print(f"❌ Error processing message: {e}")
                self.bot.reply_to(message, "Sorry, I encountered an error processing your message. Please try again.")

    # ---- Event helpers -------------------------------------------------
    def _load_events(self):
        # Try DB first.
        # If DB is configured, do not silently fall back to demo JSON data.
        db_configured = bool(Settings.DB_USER and Settings.DB_NAME)
        db_events = self._load_events_from_db()
        if db_events is not None:
            return db_events
        if db_configured:
            logger.warning("DB is configured but events could not be loaded. Skipping JSON fallback.")
            return []

        # Fallback to local JSON file
        try:
            if not self.events_file.exists():
                return []
            with open(self.events_file, 'r', encoding='utf-8') as f:
                return json.load(f)
        except Exception:
            return []

    def _load_events_from_db(self) -> Optional[List[dict]]:
        # Load events from MySQL/MariaDB 'evenement' table if DB config present
        host = Settings.DB_HOST
        port = int(Settings.DB_PORT) if getattr(Settings, 'DB_PORT', None) else 3306
        user = Settings.DB_USER
        password = Settings.DB_PASSWORD
        database = Settings.DB_NAME

        if not (user and database):
            return None

        try:
            try:
                import mysql.connector
            except Exception:
                logger.warning("mysql.connector not installed; skipping DB load")
                return None

            conn = mysql.connector.connect(host=host, port=port, user=user, password=password, database=database)
            cursor = conn.cursor()
            # Match the actual `evenement` schema and alias to bot field names.
            query = (
                "SELECT "
                "id, "
                "titre AS title, "
                "description, "
                "datedebut AS date, "
                "datefin, "
                "lieu, "
                "mode, "
                "capacitemax AS capacity, "
                "publiccible, "
                "lieninscription, "
                "contactemail, "
                "contacttelephone "
                "FROM evenement "
                "ORDER BY datedebut ASC"
            )
            cursor.execute(query)
            rows = cursor.fetchall()
            cols = [c[0] for c in cursor.description]
            events = []
            for row in rows:
                ev = dict(zip(cols, row))
                # Ensure string types for presentation
                ev['id'] = str(ev.get('id'))
                ev['title'] = ev.get('title') or 'Untitled'
                ev['date'] = str(ev.get('date') or '')
                ev['description'] = ev.get('description') or ''
                ev['capacity'] = ev.get('capacity')
                ev['datefin'] = str(ev.get('datefin') or '')
                ev['lieu'] = ev.get('lieu') or ''
                ev['mode'] = ev.get('mode') or ''
                events.append(ev)

            cursor.close()
            conn.close()
            if events:
                logger.info(f"Loaded {len(events)} events from DB {database}.evenement")
            return events
        except Exception as e:
            logger.warning(f"Failed to load events from DB: {e}")
            return None

    def _get_event(self, event_id: str):
        for ev in self.events:
            if ev.get('id') == event_id:
                return ev
        return None

    def _resolve_event_ref(self, ref: str):
        """Resolve a user-provided reference (number or id) to an event object.

        Accepts either a 1-based numeric index (as string) or the internal event id.
        Returns the event dict or None if not found.
        """
        # numeric reference (1-based)
        if ref.isdigit():
            idx = int(ref) - 1
            if 0 <= idx < len(self.events):
                return self.events[idx]

        # try matching by id (fallback)
        return self._get_event(ref)

    def _read_registrations(self):
        try:
            if not self.reg_file.exists():
                return {}
            with open(self.reg_file, 'r', encoding='utf-8') as f:
                return json.load(f)
        except Exception:
            return {}

    def _write_registrations(self, data: dict):
        # Simple thread-safe write
        with self._lock:
            tmp = self.reg_file.with_suffix('.tmp')
            with open(tmp, 'w', encoding='utf-8') as f:
                json.dump(data, f, ensure_ascii=False, indent=2)
            os.replace(tmp, self.reg_file)

    def _register_user(self, user_id: str, event_id: str):
        ev = self._get_event(event_id)
        if not ev:
            return False, f"Event '{event_id}' not found."

        regs = self._read_registrations()
        event_regs = regs.get(event_id, [])
        if user_id in event_regs:
            return False, f"You are already registered for {event_id}."

        capacity = ev.get('capacity')
        if capacity is not None and len(event_regs) >= int(capacity):
            return False, f"Event {event_id} is full."

        event_regs.append(user_id)
        regs[event_id] = event_regs
        try:
            self._write_registrations(regs)
            return True, f"✅ Registration confirmed for {ev['title']} ({event_id})."
        except Exception as e:
            return False, f"Failed to save registration: {e}"

    def _list_user_registrations(self, user_id: str):
        regs = self._read_registrations()
        user_ev_ids = [eid for eid, users in regs.items() if user_id in users]
        return [ev for ev in self.events if ev['id'] in user_ev_ids]

    def test_connection(self) -> bool:
        """Test if bot can connect to Telegram API."""
        print("\n🔍 Testing connection to Telegram API...")
        max_retries = 3
        retry_delay = 2
        
        for attempt in range(1, max_retries + 1):
            try:
                # Try to get bot info - simplest API call
                bot_info = self.bot.get_me()
                print(f"✅ Connection successful! Bot: @{bot_info.username}")
                print(f"   Bot ID: {bot_info.id}")
                return True
            except (ConnectionError, Timeout) as e:
                print(f"⚠️  Connection attempt {attempt}/{max_retries} failed: {type(e).__name__}")
                if attempt < max_retries:
                    print(f"   Retrying in {retry_delay} seconds...")
                    time.sleep(retry_delay)
                    retry_delay *= 2  # Exponential backoff
                else:
                    print(f"\n❌ Unable to connect to Telegram API after {max_retries} attempts.")
                    print("   Possible causes:")
                    print("   • No internet connection")
                    print("   • Firewall or network blocking")
                    print("   • VPN or proxy issues")
                    print("   • Invalid bot token in .env file")
                    print("   • Telegram servers temporarily unavailable")
                    return False
            except Exception as e:
                print(f"❌ Unexpected error: {e}")
                return False
        
        return False

    def start(self) -> None:
        """Start the bot and keep it running."""
        print("🤖 Bot is starting...")
        
        # Test connection before starting polling
        if not self.test_connection():
            print("\n⚠️  Cannot start bot without internet connection.")
            print("    Please check your network and try again.")
            return
        
        print("Press Ctrl+C to stop the bot")
        print("Waiting for incoming messages...\n")

        # Run the bot with simple error handling
        try:
            self.bot.infinity_polling()
        except KeyboardInterrupt:
            print("\n\n👋 Bot stopped by user.")
        except Exception as e:
            print(f"\n❌ Error: {e}")
            print(f"Error type: {type(e).__name__}")
