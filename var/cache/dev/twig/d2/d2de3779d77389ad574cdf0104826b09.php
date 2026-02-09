<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* front/communication_chat.html.twig */
class __TwigTemplate_f1d68a0ee47a4713228c6f3f828555f3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/communication_chat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/communication_chat.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Communications - LearnFlex+";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: linear-gradient(135deg, #f5f7fa 0%, #e4e9f2 100%);
        min-height: 100vh;
    }

    /* ===== HEADER NAVIGATION ===== */
    .landing-header {
        background: white;
        padding: 1rem 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .landing-header .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header-left {
        display: flex;
        align-items: center;
    }

    .logo {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        text-decoration: none;
    }

    .main-logo {
        height: 45px;
        width: auto;
    }

    .logo-text {
        font-size: 1.5rem;
        font-weight: 700;
        background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .main-nav ul {
        display: flex;
        list-style: none;
        gap: 2rem;
        align-items: center;
    }

    .main-nav ul li a {
        color: #64748b;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s;
        position: relative;
    }

    .main-nav ul li a:hover,
    .main-nav ul li.active a {
        color: #2563eb;
    }

    .main-nav ul li.active a::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
    }

    /* ===== DROPDOWN ===== */
    .dropdown {
        position: relative;
    }

    .dropdown-toggle {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .dropdown-toggle i {
        font-size: 0.75rem;
        transition: transform 0.3s;
    }

    .dropdown:hover .dropdown-toggle i {
        transform: rotate(180deg);
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        background: white;
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        padding: 0.5rem 0;
        min-width: 220px;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        margin-top: 1rem;
        z-index: 1000;
    }

    .dropdown:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        margin-top: 0.5rem;
    }

    .dropdown-menu li {
        list-style: none;
    }

    .dropdown-menu li a {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem 1.25rem;
        color: #475569;
        text-decoration: none;
        transition: all 0.2s;
        font-weight: 500;
    }

    .dropdown-menu li a:hover {
        background: linear-gradient(135deg, #e0e7ff 0%, #f3e8ff 100%);
        color: #2563eb;
    }

    .dropdown-menu li a i {
        font-size: 1rem;
        width: 20px;
    }

    .dropdown-menu::before {
        content: '';
        position: absolute;
        top: -8px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-bottom: 8px solid white;
    }

    .header-right {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .btn {
        padding: 0.75rem 1.5rem;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s;
        border: none;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .btn-primary {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
        color: white;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(37, 99, 235, 0.3);
    }

    .btn-outline {
        background: transparent;
        color: #2563eb;
        border: 2px solid #2563eb;
    }

    .btn-outline:hover {
        background: #2563eb;
        color: white;
    }

    .mobile-menu-btn {
        display: none;
        background: none;
        border: none;
        font-size: 1.5rem;
        color: #2563eb;
        cursor: pointer;
    }

    /* ===== COMMUNICATIONS CONTAINER ===== */
    .communications-container {
        max-width: 1400px;
        margin: 3rem auto;
        padding: 0 2rem;
        animation: fadeInUp 0.8s;
    }

    .communications-header {
        text-align: center;
        margin-bottom: 3rem;
        animation: fadeInDown 0.6s;
    }

    .communications-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1rem;
    }

    /* ===== FILTERS SECTION ===== */
    .filters-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        margin-bottom: 2rem;
    }

    .filters-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .filters-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .filter-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .filter-label {
        font-size: 0.875rem;
        font-weight: 600;
        color: #64748b;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .filter-select {
        padding: 0.75rem 1rem;
        border-radius: 12px;
        border: 2px solid #e2e8f0;
        background: white;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        color: #1e293b;
        transition: all 0.3s;
        cursor: pointer;
    }

    .filter-select:focus {
        outline: none;
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    .filter-select:hover {
        border-color: #cbd5e1;
    }

    .filter-btn-container {
        text-align: right;
        margin-top: 1rem;
    }

    .filter-btn {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
        color: white;
        padding: 0.75rem 2rem;
        border-radius: 12px;
        border: none;
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
    }

    .filter-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 16px rgba(37, 99, 235, 0.3);
    }

    /* ===== COMMUNICATIONS GRID ===== */
    .communications-grid {
        display: grid;
        gap: 1.5rem;
    }

    .communication-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border: 2px solid transparent;
        position: relative;
        overflow: hidden;
    }

    .communication-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(180deg, #2563eb 0%, #7c3aed 100%);
        opacity: 0;
        transition: opacity 0.3s;
    }

    .communication-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(37, 99, 235, 0.15);
        border-color: #e0e7ff;
    }

    .communication-card:hover::before {
        opacity: 1;
    }

    .card-header {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 1rem;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .type-badge {
        padding: 0.5rem 1.25rem;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .type-badge.record {
        background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        color: white;
    }

    .type-badge.live {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        color: white;
        animation: pulse 2s infinite;
    }

    .type-badge.message {
        background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
        color: white;
    }

    .status-badge {
        padding: 0.5rem 1.25rem;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
    }

    .status-badge.terminé {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
    }

    .status-badge.annulé {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        color: white;
    }

    .status-badge.en_cours {
        background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
        color: white;
    }

    .card-content {
        margin-bottom: 1.5rem;
    }

    .message-text {
        color: #475569;
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .message-text::before {
        content: '\"';
        font-size: 2rem;
        color: #cbd5e1;
        margin-right: 0.5rem;
    }

    .card-details {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        color: #64748b;
        font-size: 0.875rem;
        flex-wrap: wrap;
    }

    .detail-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .card-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 1.5rem;
        border-top: 1px solid #f1f5f9;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .publication-link {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #64748b;
        font-size: 0.875rem;
        text-decoration: none;
        transition: color 0.3s;
    }

    .publication-link:hover {
        color: #2563eb;
    }

    .btn-view {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s;
        border: none;
        cursor: pointer;
    }

    .btn-view:hover {
        transform: translateX(5px);
        box-shadow: 0 8px 16px rgba(37, 99, 235, 0.3);
    }

    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
    }

    .empty-state-icon {
        font-size: 4rem;
        margin-bottom: 1rem;
        opacity: 0.3;
        color: #2563eb;
    }

    .empty-state h3 {
        color: #64748b;
        margin-bottom: 0.5rem;
        font-weight: 600;
    }

    /* ===== ANIMATIONS ===== */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.7; }
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 968px) {
        .main-nav {
            display: none;
        }
        
        .mobile-menu-btn {
            display: block;
        }
        
        .filters-row {
            grid-template-columns: 1fr;
        }
        
        .card-header {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    @media (max-width: 768px) {
        .communications-header h1 {
            font-size: 2rem;
        }
        
        .communication-card {
            padding: 1.5rem;
        }
        
        .card-footer {
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
        }
        
        .btn-view {
            width: 100%;
            justify-content: center;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 603
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 604
        yield "<!-- Header Navigation -->
<header class=\"landing-header\">
    <div class=\"container\">
        <div class=\"header-left\">
            <a href=\"";
        // line 608
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\" class=\"logo\">
                <img src=\"";
        // line 609
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo1.png"), "html", null, true);
        yield "\" alt=\"Learnflexplus Logo\" class=\"main-logo\">
                <span class=\"logo-text\">LearnFlex +</span>
            </a>
        </div>
        <nav class=\"main-nav\">
            <ul>
                <li><a href=\"";
        // line 615
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\">Accueil</a></li>
                <li><a href=\"#\">Contenus pédagogiques</a></li>
                <li><a href=\"#\">Evaluation</a></li>
                <li><a href=\"#\">Questionnaire</a></li>
                <li><a href=\"#\">Orientation</a></li>
                
                <li class=\"dropdown active\">
                    <a href=\"";
        // line 622
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_index");
        yield "\" class=\"dropdown-toggle\">
                        Forum
                        <i class=\"fas fa-chevron-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 627
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_index");
        yield "\">
                            <i class=\"fas fa-comments\"></i>
                            Discussions
                        </a></li>
                        <li><a href=\"";
        // line 631
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("communication_chat");
        yield "\">
                            <i class=\"fas fa-message\"></i>
                            Chat en direct
                        </a></li>
                        <li><a href=\"";
        // line 635
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_communication_index");
        yield "\">
                            <i class=\"fas fa-bell\"></i>
                            Communications
                        </a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class=\"header-right\">
            ";
        // line 644
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 644, $this->source); })()), "user", [], "any", false, false, false, 644) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 644, $this->source); })()), "user", [], "any", false, false, false, 644), "type", [], "any", false, false, false, 644) != "client"))) {
            // line 645
            yield "                <a href=\"#\" class=\"btn btn-outline dashboard-btn\">Dashboard</a>
            ";
        }
        // line 647
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 647, $this->source); })()), "user", [], "any", false, false, false, 647)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 648
            yield "                <a href=\"#\" class=\"btn btn-primary logout-btn\">Déconnexion</a>
            ";
        } else {
            // line 650
            yield "                <a href=\"#\" class=\"btn btn-primary\">Connexion</a>
            ";
        }
        // line 652
        yield "            <button class=\"mobile-menu-btn\">
                <i class=\"fas fa-bars\"></i>
            </button>
        </div>
    </div>
</header>

<!-- Communications Container -->
<div class=\"communications-container\">
    <div class=\"communications-header\">
        <h1><span>📢</span> Toutes les communications</h1>
    </div>

    <!-- Filters Section -->
    <div class=\"filters-card\">
        <h3 class=\"filters-title\">
            <i class=\"fas fa-filter\"></i>
            Filtrer les communications
        </h3>
        
        <form method=\"get\" class=\"filters-form\">
            <div class=\"filters-row\">
                <div class=\"filter-group\">
                    <label class=\"filter-label\">
                        <i class=\"fas fa-tag\"></i>
                        Type
                    </label>
                    <select name=\"type\" class=\"filter-select\">
                        <option value=\"\">Tous les types</option>
                        <option value=\"live\">Live</option>
                        <option value=\"record\">Enregistré</option>
                        <option value=\"message\">Message</option>
                    </select>
                </div>
                
                <div class=\"filter-group\">
                    <label class=\"filter-label\">
                        <i class=\"fas fa-tag\"></i>
                        État
                    </label>
                    <select name=\"etat\" class=\"filter-select\">
                        <option value=\"\">Tous les états</option>
                        <option value=\"en_cours\">En cours</option>
                        <option value=\"terminé\">Terminé</option>
                        <option value=\"annulé\">Annulé</option>
                        <option value=\"programmee\">Programmée</option>
                    </select>
                </div>
            </div>
            
            <div class=\"filter-btn-container\">
                <button type=\"submit\" class=\"filter-btn\">
                    <i class=\"fas fa-sliders-h\"></i>
                    Filtrer
                </button>
            </div>
        </form>
    </div>

    <!-- Communications Grid -->
    <div class=\"communications-grid\">
        ";
        // line 713
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["communications"]) || array_key_exists("communications", $context) ? $context["communications"] : (function () { throw new RuntimeError('Variable "communications" does not exist.', 713, $this->source); })()))) {
            // line 714
            yield "            <div class=\"empty-state\">
                <div class=\"empty-state-icon\">📢</div>
                <h3>Aucune communication disponible</h3>
                <p>Les communications apparaîtront ici</p>
            </div>
        ";
        } else {
            // line 720
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["communications"]) || array_key_exists("communications", $context) ? $context["communications"] : (function () { throw new RuntimeError('Variable "communications" does not exist.', 720, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["communication"]) {
                // line 721
                yield "                <article class=\"communication-card\">
                    <div class=\"card-header\">
                        <span class=\"type-badge ";
                // line 723
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "type", [], "any", false, false, false, 723), "html", null, true);
                yield "\">
                            ";
                // line 724
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "type", [], "any", false, false, false, 724) == "live")) {
                    // line 725
                    yield "                                Live
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 726
$context["communication"], "type", [], "any", false, false, false, 726) == "record")) {
                    // line 727
                    yield "                                Record
                            ";
                } else {
                    // line 729
                    yield "                                Message
                            ";
                }
                // line 731
                yield "                        </span>
                        
                        <span class=\"status-badge ";
                // line 733
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "etat", [], "any", false, false, false, 733), "html", null, true);
                yield "\">
                            ";
                // line 734
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "etat", [], "any", false, false, false, 734) == "en_cours")) {
                    // line 735
                    yield "                                En cours
                            ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 736
$context["communication"], "etat", [], "any", false, false, false, 736) == "terminé") || (CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "etat", [], "any", false, false, false, 736) == "termine"))) {
                    // line 737
                    yield "                                Terminé
                            ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 738
$context["communication"], "etat", [], "any", false, false, false, 738) == "annulé") || (CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "etat", [], "any", false, false, false, 738) == "annule"))) {
                    // line 739
                    yield "                                Annulé
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 740
$context["communication"], "etat", [], "any", false, false, false, 740) == "programmee")) {
                    // line 741
                    yield "                                Programmé
                            ";
                } else {
                    // line 743
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "etat", [], "any", false, false, false, 743), "html", null, true);
                    yield "
                            ";
                }
                // line 745
                yield "                        </span>
                    </div>
                    
                    <div class=\"card-content\">
                        <p class=\"message-text\">
                            ";
                // line 750
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", true, true, false, 750)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", false, false, false, 750), ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "description", [], "any", true, true, false, 750)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "description", [], "any", false, false, false, 750), "Pas de description")) : ("Pas de description")))) : (((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "description", [], "any", true, true, false, 750)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "description", [], "any", false, false, false, 750), "Pas de description")) : ("Pas de description")))), 0, 150), "html", null, true);
                yield "
                            ";
                // line 751
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", true, true, false, 751)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", false, false, false, 751), ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "description", [], "any", true, true, false, 751)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "description", [], "any", false, false, false, 751), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "description", [], "any", true, true, false, 751)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "description", [], "any", false, false, false, 751), "")) : (""))))) > 150)) {
                    yield "...";
                }
                // line 752
                yield "                        </p>
                        
                        <div class=\"card-details\">
                            <div class=\"detail-item\">
                                <i class=\"far fa-calendar\"></i>
                                <span>";
                // line 757
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "dateHeure", [], "any", false, false, false, 757), "d/m/Y H:i"), "html", null, true);
                yield "</span>
                            </div>
                            
                            ";
                // line 760
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "duree", [], "any", false, false, false, 760)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 761
                    yield "                            <div class=\"detail-item\">
                                <i class=\"far fa-clock\"></i>
                                <span>";
                    // line 763
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "duree", [], "any", false, false, false, 763), "html", null, true);
                    yield " minutes</span>
                            </div>
                            ";
                }
                // line 766
                yield "                            
                            <div class=\"detail-item\">
                                <i class=\"fas fa-link\"></i>
                                <span>Liée à une publication</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"card-footer\">
                        <a href=\"";
                // line 775
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_publication_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "publication", [], "any", false, false, false, 775), "id", [], "any", false, false, false, 775)]), "html", null, true);
                yield "\" class=\"publication-link\">
                            <i class=\"fas fa-external-link-alt\"></i>
                            Voir la publication associée
                        </a>
                        
                        <button class=\"btn-view\">
                            <i class=\"far fa-eye\"></i>
                            Voir
                        </button>
                    </div>
                </article>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['communication'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 787
            yield "        ";
        }
        // line 788
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 792
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 793
        yield "<script>
    // Mobile menu toggle
    document.querySelector('.mobile-menu-btn')?.addEventListener('click', function() {
        document.querySelector('.main-nav').classList.toggle('active');
    });

    // Filter form submission
    document.querySelector('.filters-form')?.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const type = this.querySelector('[name=\"type\"]').value;
        const etat = this.querySelector('[name=\"etat\"]').value;
        
        // Build query string
        const params = new URLSearchParams();
        if (type) params.append('type', type);
        if (etat) params.append('etat', etat);
        
        // Reload page with filters
        window.location.href = '?' + params.toString();
    });

    // Pre-fill form values from URL
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        
        const type = urlParams.get('type');
        const etat = urlParams.get('etat');
        
        if (type) {
            document.querySelector('[name=\"type\"]').value = type;
        }
        
        if (etat) {
            document.querySelector('[name=\"etat\"]').value = etat;
        }
    });

    // View button click
    document.querySelectorAll('.btn-view').forEach(button => {
        button.addEventListener('click', function() {
            const card = this.closest('.communication-card');
            const communicationId = card.dataset.id; // You need to add data-id attribute to your cards
            
            if (communicationId) {
                window.location.href = `/communication/\${communicationId}`;
            }
        });
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/communication_chat.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1035 => 793,  1022 => 792,  1009 => 788,  1006 => 787,  988 => 775,  977 => 766,  971 => 763,  967 => 761,  965 => 760,  959 => 757,  952 => 752,  948 => 751,  944 => 750,  937 => 745,  931 => 743,  927 => 741,  925 => 740,  922 => 739,  920 => 738,  917 => 737,  915 => 736,  912 => 735,  910 => 734,  906 => 733,  902 => 731,  898 => 729,  894 => 727,  892 => 726,  889 => 725,  887 => 724,  883 => 723,  879 => 721,  874 => 720,  866 => 714,  864 => 713,  801 => 652,  797 => 650,  793 => 648,  790 => 647,  786 => 645,  784 => 644,  772 => 635,  765 => 631,  758 => 627,  750 => 622,  740 => 615,  731 => 609,  727 => 608,  721 => 604,  708 => 603,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Communications - LearnFlex+{% endblock %}

{% block stylesheets %}
<link href=\"https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: linear-gradient(135deg, #f5f7fa 0%, #e4e9f2 100%);
        min-height: 100vh;
    }

    /* ===== HEADER NAVIGATION ===== */
    .landing-header {
        background: white;
        padding: 1rem 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .landing-header .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .header-left {
        display: flex;
        align-items: center;
    }

    .logo {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        text-decoration: none;
    }

    .main-logo {
        height: 45px;
        width: auto;
    }

    .logo-text {
        font-size: 1.5rem;
        font-weight: 700;
        background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .main-nav ul {
        display: flex;
        list-style: none;
        gap: 2rem;
        align-items: center;
    }

    .main-nav ul li a {
        color: #64748b;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s;
        position: relative;
    }

    .main-nav ul li a:hover,
    .main-nav ul li.active a {
        color: #2563eb;
    }

    .main-nav ul li.active a::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
    }

    /* ===== DROPDOWN ===== */
    .dropdown {
        position: relative;
    }

    .dropdown-toggle {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .dropdown-toggle i {
        font-size: 0.75rem;
        transition: transform 0.3s;
    }

    .dropdown:hover .dropdown-toggle i {
        transform: rotate(180deg);
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        background: white;
        border-radius: 12px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        padding: 0.5rem 0;
        min-width: 220px;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        margin-top: 1rem;
        z-index: 1000;
    }

    .dropdown:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        margin-top: 0.5rem;
    }

    .dropdown-menu li {
        list-style: none;
    }

    .dropdown-menu li a {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem 1.25rem;
        color: #475569;
        text-decoration: none;
        transition: all 0.2s;
        font-weight: 500;
    }

    .dropdown-menu li a:hover {
        background: linear-gradient(135deg, #e0e7ff 0%, #f3e8ff 100%);
        color: #2563eb;
    }

    .dropdown-menu li a i {
        font-size: 1rem;
        width: 20px;
    }

    .dropdown-menu::before {
        content: '';
        position: absolute;
        top: -8px;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 8px solid transparent;
        border-right: 8px solid transparent;
        border-bottom: 8px solid white;
    }

    .header-right {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .btn {
        padding: 0.75rem 1.5rem;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s;
        border: none;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .btn-primary {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
        color: white;
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(37, 99, 235, 0.3);
    }

    .btn-outline {
        background: transparent;
        color: #2563eb;
        border: 2px solid #2563eb;
    }

    .btn-outline:hover {
        background: #2563eb;
        color: white;
    }

    .mobile-menu-btn {
        display: none;
        background: none;
        border: none;
        font-size: 1.5rem;
        color: #2563eb;
        cursor: pointer;
    }

    /* ===== COMMUNICATIONS CONTAINER ===== */
    .communications-container {
        max-width: 1400px;
        margin: 3rem auto;
        padding: 0 2rem;
        animation: fadeInUp 0.8s;
    }

    .communications-header {
        text-align: center;
        margin-bottom: 3rem;
        animation: fadeInDown 0.6s;
    }

    .communications-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1rem;
    }

    /* ===== FILTERS SECTION ===== */
    .filters-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        margin-bottom: 2rem;
    }

    .filters-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .filters-row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .filter-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .filter-label {
        font-size: 0.875rem;
        font-weight: 600;
        color: #64748b;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .filter-select {
        padding: 0.75rem 1rem;
        border-radius: 12px;
        border: 2px solid #e2e8f0;
        background: white;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        color: #1e293b;
        transition: all 0.3s;
        cursor: pointer;
    }

    .filter-select:focus {
        outline: none;
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    .filter-select:hover {
        border-color: #cbd5e1;
    }

    .filter-btn-container {
        text-align: right;
        margin-top: 1rem;
    }

    .filter-btn {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
        color: white;
        padding: 0.75rem 2rem;
        border-radius: 12px;
        border: none;
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
    }

    .filter-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 16px rgba(37, 99, 235, 0.3);
    }

    /* ===== COMMUNICATIONS GRID ===== */
    .communications-grid {
        display: grid;
        gap: 1.5rem;
    }

    .communication-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border: 2px solid transparent;
        position: relative;
        overflow: hidden;
    }

    .communication-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(180deg, #2563eb 0%, #7c3aed 100%);
        opacity: 0;
        transition: opacity 0.3s;
    }

    .communication-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(37, 99, 235, 0.15);
        border-color: #e0e7ff;
    }

    .communication-card:hover::before {
        opacity: 1;
    }

    .card-header {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 1rem;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .type-badge {
        padding: 0.5rem 1.25rem;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .type-badge.record {
        background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        color: white;
    }

    .type-badge.live {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        color: white;
        animation: pulse 2s infinite;
    }

    .type-badge.message {
        background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
        color: white;
    }

    .status-badge {
        padding: 0.5rem 1.25rem;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
    }

    .status-badge.terminé {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
    }

    .status-badge.annulé {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        color: white;
    }

    .status-badge.en_cours {
        background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
        color: white;
    }

    .card-content {
        margin-bottom: 1.5rem;
    }

    .message-text {
        color: #475569;
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .message-text::before {
        content: '\"';
        font-size: 2rem;
        color: #cbd5e1;
        margin-right: 0.5rem;
    }

    .card-details {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        color: #64748b;
        font-size: 0.875rem;
        flex-wrap: wrap;
    }

    .detail-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .card-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 1.5rem;
        border-top: 1px solid #f1f5f9;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .publication-link {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #64748b;
        font-size: 0.875rem;
        text-decoration: none;
        transition: color 0.3s;
    }

    .publication-link:hover {
        color: #2563eb;
    }

    .btn-view {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s;
        border: none;
        cursor: pointer;
    }

    .btn-view:hover {
        transform: translateX(5px);
        box-shadow: 0 8px 16px rgba(37, 99, 235, 0.3);
    }

    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
    }

    .empty-state-icon {
        font-size: 4rem;
        margin-bottom: 1rem;
        opacity: 0.3;
        color: #2563eb;
    }

    .empty-state h3 {
        color: #64748b;
        margin-bottom: 0.5rem;
        font-weight: 600;
    }

    /* ===== ANIMATIONS ===== */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.7; }
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 968px) {
        .main-nav {
            display: none;
        }
        
        .mobile-menu-btn {
            display: block;
        }
        
        .filters-row {
            grid-template-columns: 1fr;
        }
        
        .card-header {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    @media (max-width: 768px) {
        .communications-header h1 {
            font-size: 2rem;
        }
        
        .communication-card {
            padding: 1.5rem;
        }
        
        .card-footer {
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
        }
        
        .btn-view {
            width: 100%;
            justify-content: center;
        }
    }
</style>
{% endblock %}

{% block body %}
<!-- Header Navigation -->
<header class=\"landing-header\">
    <div class=\"container\">
        <div class=\"header-left\">
            <a href=\"{{ path('app_front') }}\" class=\"logo\">
                <img src=\"{{ asset('assets/images/logo1.png') }}\" alt=\"Learnflexplus Logo\" class=\"main-logo\">
                <span class=\"logo-text\">LearnFlex +</span>
            </a>
        </div>
        <nav class=\"main-nav\">
            <ul>
                <li><a href=\"{{ path('app_front') }}\">Accueil</a></li>
                <li><a href=\"#\">Contenus pédagogiques</a></li>
                <li><a href=\"#\">Evaluation</a></li>
                <li><a href=\"#\">Questionnaire</a></li>
                <li><a href=\"#\">Orientation</a></li>
                
                <li class=\"dropdown active\">
                    <a href=\"{{ path('forum_index') }}\" class=\"dropdown-toggle\">
                        Forum
                        <i class=\"fas fa-chevron-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ path('forum_index') }}\">
                            <i class=\"fas fa-comments\"></i>
                            Discussions
                        </a></li>
                        <li><a href=\"{{ path('communication_chat') }}\">
                            <i class=\"fas fa-message\"></i>
                            Chat en direct
                        </a></li>
                        <li><a href=\"{{ path('forum_communication_index') }}\">
                            <i class=\"fas fa-bell\"></i>
                            Communications
                        </a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class=\"header-right\">
            {% if app.user and app.user.type != 'client' %}
                <a href=\"#\" class=\"btn btn-outline dashboard-btn\">Dashboard</a>
            {% endif %}
            {% if app.user %}
                <a href=\"#\" class=\"btn btn-primary logout-btn\">Déconnexion</a>
            {% else %}
                <a href=\"#\" class=\"btn btn-primary\">Connexion</a>
            {% endif %}
            <button class=\"mobile-menu-btn\">
                <i class=\"fas fa-bars\"></i>
            </button>
        </div>
    </div>
</header>

<!-- Communications Container -->
<div class=\"communications-container\">
    <div class=\"communications-header\">
        <h1><span>📢</span> Toutes les communications</h1>
    </div>

    <!-- Filters Section -->
    <div class=\"filters-card\">
        <h3 class=\"filters-title\">
            <i class=\"fas fa-filter\"></i>
            Filtrer les communications
        </h3>
        
        <form method=\"get\" class=\"filters-form\">
            <div class=\"filters-row\">
                <div class=\"filter-group\">
                    <label class=\"filter-label\">
                        <i class=\"fas fa-tag\"></i>
                        Type
                    </label>
                    <select name=\"type\" class=\"filter-select\">
                        <option value=\"\">Tous les types</option>
                        <option value=\"live\">Live</option>
                        <option value=\"record\">Enregistré</option>
                        <option value=\"message\">Message</option>
                    </select>
                </div>
                
                <div class=\"filter-group\">
                    <label class=\"filter-label\">
                        <i class=\"fas fa-tag\"></i>
                        État
                    </label>
                    <select name=\"etat\" class=\"filter-select\">
                        <option value=\"\">Tous les états</option>
                        <option value=\"en_cours\">En cours</option>
                        <option value=\"terminé\">Terminé</option>
                        <option value=\"annulé\">Annulé</option>
                        <option value=\"programmee\">Programmée</option>
                    </select>
                </div>
            </div>
            
            <div class=\"filter-btn-container\">
                <button type=\"submit\" class=\"filter-btn\">
                    <i class=\"fas fa-sliders-h\"></i>
                    Filtrer
                </button>
            </div>
        </form>
    </div>

    <!-- Communications Grid -->
    <div class=\"communications-grid\">
        {% if communications is empty %}
            <div class=\"empty-state\">
                <div class=\"empty-state-icon\">📢</div>
                <h3>Aucune communication disponible</h3>
                <p>Les communications apparaîtront ici</p>
            </div>
        {% else %}
            {% for communication in communications %}
                <article class=\"communication-card\">
                    <div class=\"card-header\">
                        <span class=\"type-badge {{ communication.type }}\">
                            {% if communication.type == 'live' %}
                                Live
                            {% elseif communication.type == 'record' %}
                                Record
                            {% else %}
                                Message
                            {% endif %}
                        </span>
                        
                        <span class=\"status-badge {{ communication.etat }}\">
                            {% if communication.etat == 'en_cours' %}
                                En cours
                            {% elseif communication.etat == 'terminé' or communication.etat == 'termine' %}
                                Terminé
                            {% elseif communication.etat == 'annulé' or communication.etat == 'annule' %}
                                Annulé
                            {% elseif communication.etat == 'programmee' %}
                                Programmé
                            {% else %}
                                {{ communication.etat }}
                            {% endif %}
                        </span>
                    </div>
                    
                    <div class=\"card-content\">
                        <p class=\"message-text\">
                            {{ communication.descriptionDetaillee|default(communication.description|default('Pas de description'))|slice(0, 150) }}
                            {% if communication.descriptionDetaillee|default(communication.description|default(''))|length > 150 %}...{% endif %}
                        </p>
                        
                        <div class=\"card-details\">
                            <div class=\"detail-item\">
                                <i class=\"far fa-calendar\"></i>
                                <span>{{ communication.dateHeure|date('d/m/Y H:i') }}</span>
                            </div>
                            
                            {% if communication.duree %}
                            <div class=\"detail-item\">
                                <i class=\"far fa-clock\"></i>
                                <span>{{ communication.duree }} minutes</span>
                            </div>
                            {% endif %}
                            
                            <div class=\"detail-item\">
                                <i class=\"fas fa-link\"></i>
                                <span>Liée à une publication</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"card-footer\">
                        <a href=\"{{ path('forum_publication_show', {'id': communication.publication.id}) }}\" class=\"publication-link\">
                            <i class=\"fas fa-external-link-alt\"></i>
                            Voir la publication associée
                        </a>
                        
                        <button class=\"btn-view\">
                            <i class=\"far fa-eye\"></i>
                            Voir
                        </button>
                    </div>
                </article>
            {% endfor %}
        {% endif %}
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
    // Mobile menu toggle
    document.querySelector('.mobile-menu-btn')?.addEventListener('click', function() {
        document.querySelector('.main-nav').classList.toggle('active');
    });

    // Filter form submission
    document.querySelector('.filters-form')?.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const type = this.querySelector('[name=\"type\"]').value;
        const etat = this.querySelector('[name=\"etat\"]').value;
        
        // Build query string
        const params = new URLSearchParams();
        if (type) params.append('type', type);
        if (etat) params.append('etat', etat);
        
        // Reload page with filters
        window.location.href = '?' + params.toString();
    });

    // Pre-fill form values from URL
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        
        const type = urlParams.get('type');
        const etat = urlParams.get('etat');
        
        if (type) {
            document.querySelector('[name=\"type\"]').value = type;
        }
        
        if (etat) {
            document.querySelector('[name=\"etat\"]').value = etat;
        }
    });

    // View button click
    document.querySelectorAll('.btn-view').forEach(button => {
        button.addEventListener('click', function() {
            const card = this.closest('.communication-card');
            const communicationId = card.dataset.id; // You need to add data-id attribute to your cards
            
            if (communicationId) {
                window.location.href = `/communication/\${communicationId}`;
            }
        });
    });
</script>
{% endblock %}", "front/communication_chat.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\front\\communication_chat.html.twig");
    }
}
