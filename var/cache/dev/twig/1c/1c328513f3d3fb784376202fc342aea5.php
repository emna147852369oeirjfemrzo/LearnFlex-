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

/* front/forum.html.twig */
class __TwigTemplate_75d430c45b562fa443af1998f4acdfb2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/forum.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/forum.html.twig"));

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

        yield "Forum - LearnFlex+";
        
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

    .forum-container {
        max-width: 1400px;
        margin: 3rem auto;
        padding: 0 2rem;
    }

    .forum-header {
        margin-bottom: 2rem;
        animation: fadeInDown 0.6s;
    }

    .forum-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #1e293b;
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .btn-new-post {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        padding: 0.875rem 2rem;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s;
        border: none;
        cursor: pointer;
    }

    .btn-new-post:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(16, 185, 129, 0.3);
    }

    .forum-section {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        animation: fadeInUp 0.8s;
    }

    .section-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .section-title i {
        font-size: 1.75rem;
    }

    .communications-grid {
        display: grid;
        gap: 1rem;
    }

    .communication-item {
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        border-radius: 16px;
        padding: 1.5rem;
        transition: all 0.3s;
        border: 2px solid transparent;
        position: relative;
        overflow: hidden;
    }

    .communication-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(180deg, #10b981 0%, #059669 100%);
    }

    .communication-item:hover {
        transform: translateX(8px);
        box-shadow: 0 8px 24px rgba(16, 185, 129, 0.15);
        border-color: #d1fae5;
    }

    .comm-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 0.75rem;
    }

    .comm-title {
        font-size: 1.125rem;
        font-weight: 600;
        color: #1e293b;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .live-indicator {
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        font-size: 0.75rem;
        color: #10b981;
        font-weight: 600;
    }

    .live-dot {
        width: 8px;
        height: 8px;
        background: #10b981;
        border-radius: 50%;
        animation: pulse 2s infinite;
    }

    .comm-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .comm-time {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #94a3b8;
        font-size: 0.875rem;
    }

    .btn-join {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
        color: white;
        padding: 0.5rem 1.25rem;
        border-radius: 10px;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.875rem;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s;
    }

    .btn-join:hover {
        transform: translateX(3px);
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
    }

    .publications-grid {
        display: grid;
        gap: 1.5rem;
    }

    .publication-card {
        background: white;
        border-radius: 16px;
        padding: 1.75rem;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
        transition: all 0.3s;
        border: 2px solid transparent;
    }

    .publication-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px rgba(37, 99, 235, 0.12);
        border-color: #e0e7ff;
    }

    .pub-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1rem;
    }

    .pub-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1e293b;
    }

    .pub-category {
        display: inline-block;
        padding: 0.35rem 0.875rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .category-reclamation {
        background: #fef3c7;
        color: #92400e;
    }

    .category-autre {
        background: #dbeafe;
        color: #1e40af;
    }

    .pub-content {
        color: #64748b;
        margin-bottom: 1rem;
        line-height: 1.6;
    }

    .pub-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 1rem;
        border-top: 1px solid #f1f5f9;
    }

    .pub-date {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #94a3b8;
        font-size: 0.875rem;
    }

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
        50% { opacity: 0.5; }
    }

    @media (max-width: 968px) {
        .main-nav {
            display: none;
        }
        .mobile-menu-btn {
            display: block;
        }
        .forum-header h1 {
            font-size: 2rem;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 501
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

        // line 502
        yield "<header class=\"landing-header\">
    <div class=\"container\">
        <div class=\"header-left\">
            <div class=\"logo\">
                <img src=\"";
        // line 506
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo1.png"), "html", null, true);
        yield "\" alt=\"Learnflexplus Logo\" class=\"main-logo\">
                <span class=\"logo-text\">LearnFlex +</span>
            </div>
        </div>
        <nav class=\"main-nav\">
            <ul>
                <li><a href=\"";
        // line 512
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\">Accueil</a></li>
                <li><a href=\"#\">Contenus pédagogiques</a></li>
                <li><a href=\"#\">Evaluation</a></li>
                <li><a href=\"#\">Questionnaire</a></li>
                <li><a href=\"#\">Orientation</a></li>
                
                <li class=\"dropdown active\">
                    <a href=\"";
        // line 519
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_index");
        yield "\" class=\"dropdown-toggle\">
                        Forum
                        <i class=\"fas fa-chevron-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 524
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_index");
        yield "\">
                            <i class=\"fas fa-comments\"></i>
                            Discussions
                        </a></li>
                        <li><a href=\"";
        // line 528
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("communication_chat");
        yield "\">
                            <i class=\"fas fa-message\"></i>
                            Chat en direct
                        </a></li>
                        <li><a href=\"";
        // line 532
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
        // line 541
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 541, $this->source); })()), "user", [], "any", false, false, false, 541) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 541, $this->source); })()), "user", [], "any", false, false, false, 541), "type", [], "any", false, false, false, 541) != "client"))) {
            // line 542
            yield "                <a href=\"#\" class=\"btn btn-outline dashboard-btn\">Dashboard</a>
            ";
        }
        // line 544
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 544, $this->source); })()), "user", [], "any", false, false, false, 544)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 545
            yield "                <a href=\"#\" class=\"btn btn-primary logout-btn\">Déconnexion</a>
            ";
        } else {
            // line 547
            yield "                <a href=\"#\" class=\"btn btn-primary\">Connexion</a>
            ";
        }
        // line 549
        yield "            <button class=\"mobile-menu-btn\">
                <i class=\"fas fa-bars\"></i>
            </button>
        </div>
    </div>
</header>

<div class=\"forum-container\">
    <div class=\"forum-header\">
        <h1>
            <i class=\"fas fa-comments\"></i>
            Forum
        </h1>
        <a href=\"";
        // line 562
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_publication_new");
        yield "\" class=\"btn-new-post\">
            <i class=\"fas fa-plus\"></i>
            Nouvelle publication
        </a>
    </div>

    <section class=\"forum-section\">
        <h2 class=\"section-title\">
            <i class=\"fas fa-broadcast-tower\"></i>
            Communications en direct
        </h2>
        
        <div class=\"communications-grid\">
            ";
        // line 575
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["live_communications"]) || array_key_exists("live_communications", $context) ? $context["live_communications"] : (function () { throw new RuntimeError('Variable "live_communications" does not exist.', 575, $this->source); })()))) {
            // line 576
            yield "                <p style=\"color: #64748b; text-align: center; padding: 2rem;\">
                    Aucune communication en direct pour le moment
                </p>
            ";
        } else {
            // line 580
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["live_communications"]) || array_key_exists("live_communications", $context) ? $context["live_communications"] : (function () { throw new RuntimeError('Variable "live_communications" does not exist.', 580, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["communication"]) {
                // line 581
                yield "                    <div class=\"communication-item\">
                        <div class=\"comm-header\">
                            <div class=\"comm-title\">
                                <i class=\"fas fa-video\"></i>
                                ";
                // line 585
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", true, true, false, 585)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", false, false, false, 585), "Communication sans titre")) : ("Communication sans titre")), 0, 50), "html", null, true);
                yield "
                            </div>
                            <div class=\"live-indicator\">
                                <span class=\"live-dot\"></span>
                                LIVE
                            </div>
                        </div>
                        <div class=\"comm-footer\">
                            <div class=\"comm-time\">
                                <i class=\"far fa-clock\"></i>
                                ";
                // line 595
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "duree", [], "any", false, false, false, 595)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 596
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "duree", [], "any", false, false, false, 596), "html", null, true);
                    yield " min
                                ";
                } else {
                    // line 598
                    yield "                                    En cours
                                ";
                }
                // line 600
                yield "                            </div>
                            <a href=\"";
                // line 601
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_communication_join", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "id", [], "any", false, false, false, 601)]), "html", null, true);
                yield "\" class=\"btn-join\">
                                <i class=\"fas fa-video\"></i>
                                Rejoindre
                            </a>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['communication'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 608
            yield "            ";
        }
        // line 609
        yield "        </div>
    </section>

    ";
        // line 612
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["upcoming_communications"]) || array_key_exists("upcoming_communications", $context) ? $context["upcoming_communications"] : (function () { throw new RuntimeError('Variable "upcoming_communications" does not exist.', 612, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 613
            yield "    <section class=\"forum-section\">
        <h2 class=\"section-title\">
            <i class=\"fas fa-calendar-alt\"></i>
            Communications à venir
        </h2>
        
        <div class=\"communications-grid\">
            ";
            // line 620
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["upcoming_communications"]) || array_key_exists("upcoming_communications", $context) ? $context["upcoming_communications"] : (function () { throw new RuntimeError('Variable "upcoming_communications" does not exist.', 620, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["communication"]) {
                // line 621
                yield "                <div class=\"communication-item\">
                    <div class=\"comm-header\">
                        <div class=\"comm-title\">
                            <i class=\"fas fa-calendar\"></i>
                            ";
                // line 625
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", true, true, false, 625)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", false, false, false, 625), "Communication sans titre")) : ("Communication sans titre")), 0, 50), "html", null, true);
                yield "
                        </div>
                    </div>
                    <div class=\"comm-footer\">
                        <div class=\"comm-time\">
                            <i class=\"far fa-clock\"></i>
                            ";
                // line 631
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "dateHeure", [], "any", false, false, false, 631), "d/m/Y H:i"), "html", null, true);
                yield "
                        </div>
                        <a href=\"";
                // line 633
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_communication_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "id", [], "any", false, false, false, 633)]), "html", null, true);
                yield "\" class=\"btn-join\">
                            <i class=\"fas fa-info-circle\"></i>
                            Détails
                        </a>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['communication'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 640
            yield "        </div>
    </section>
    ";
        }
        // line 643
        yield "
    <section class=\"forum-section\">
        <h2 class=\"section-title\">
            <i class=\"fas fa-newspaper\"></i>
            Publications récentes
        </h2>
        
        <div class=\"publications-grid\">
            ";
        // line 651
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 651, $this->source); })()))) {
            // line 652
            yield "                <p style=\"color: #64748b; text-align: center; padding: 2rem;\">
                    Aucune publication pour le moment
                </p>
            ";
        } else {
            // line 656
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 656, $this->source); })()), 0, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
                // line 657
                yield "                    <article class=\"publication-card\">
                        <div class=\"pub-header\">
                            <h3 class=\"pub-title\">";
                // line 659
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "titre", [], "any", false, false, false, 659), "html", null, true);
                yield "</h3>
                            <span class=\"pub-category category-";
                // line 660
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "categorie", [], "any", false, false, false, 660)), [" " => "-"]), "html", null, true);
                yield "\">
                                ";
                // line 661
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "categorie", [], "any", false, false, false, 661), "html", null, true);
                yield "
                            </span>
                        </div>
                        <div class=\"pub-content\">
                            ";
                // line 665
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "description", [], "any", false, false, false, 665), 0, 150), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "description", [], "any", false, false, false, 665)) > 150)) {
                    yield "...";
                }
                // line 666
                yield "                        </div>
                        <div class=\"pub-footer\">
                            <div class=\"pub-date\">
                                <i class=\"far fa-calendar\"></i>
                                ";
                // line 670
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "dateCreation", [], "any", false, false, false, 670), "d/m/Y"), "html", null, true);
                yield "
                            </div>
                            <a href=\"";
                // line 672
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_publication_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 672)]), "html", null, true);
                yield "\" class=\"btn-join\">
                                Voir plus
                            </a>
                        </div>
                    </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['publication'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 678
            yield "            ";
        }
        // line 679
        yield "        </div>
    </section>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 684
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

        // line 685
        yield "<script>
  document.querySelector('.mobile-menu-btn')?.addEventListener('click', function() {
    document.querySelector('.main-nav').classList.toggle('active');
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
        return "front/forum.html.twig";
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
        return array (  947 => 685,  934 => 684,  920 => 679,  917 => 678,  905 => 672,  900 => 670,  894 => 666,  889 => 665,  882 => 661,  878 => 660,  874 => 659,  870 => 657,  865 => 656,  859 => 652,  857 => 651,  847 => 643,  842 => 640,  829 => 633,  824 => 631,  815 => 625,  809 => 621,  805 => 620,  796 => 613,  794 => 612,  789 => 609,  786 => 608,  773 => 601,  770 => 600,  766 => 598,  760 => 596,  758 => 595,  745 => 585,  739 => 581,  734 => 580,  728 => 576,  726 => 575,  710 => 562,  695 => 549,  691 => 547,  687 => 545,  684 => 544,  680 => 542,  678 => 541,  666 => 532,  659 => 528,  652 => 524,  644 => 519,  634 => 512,  625 => 506,  619 => 502,  606 => 501,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Forum - LearnFlex+{% endblock %}

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

    .forum-container {
        max-width: 1400px;
        margin: 3rem auto;
        padding: 0 2rem;
    }

    .forum-header {
        margin-bottom: 2rem;
        animation: fadeInDown 0.6s;
    }

    .forum-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #1e293b;
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .btn-new-post {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        padding: 0.875rem 2rem;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s;
        border: none;
        cursor: pointer;
    }

    .btn-new-post:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(16, 185, 129, 0.3);
    }

    .forum-section {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        animation: fadeInUp 0.8s;
    }

    .section-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .section-title i {
        font-size: 1.75rem;
    }

    .communications-grid {
        display: grid;
        gap: 1rem;
    }

    .communication-item {
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        border-radius: 16px;
        padding: 1.5rem;
        transition: all 0.3s;
        border: 2px solid transparent;
        position: relative;
        overflow: hidden;
    }

    .communication-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(180deg, #10b981 0%, #059669 100%);
    }

    .communication-item:hover {
        transform: translateX(8px);
        box-shadow: 0 8px 24px rgba(16, 185, 129, 0.15);
        border-color: #d1fae5;
    }

    .comm-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 0.75rem;
    }

    .comm-title {
        font-size: 1.125rem;
        font-weight: 600;
        color: #1e293b;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .live-indicator {
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        font-size: 0.75rem;
        color: #10b981;
        font-weight: 600;
    }

    .live-dot {
        width: 8px;
        height: 8px;
        background: #10b981;
        border-radius: 50%;
        animation: pulse 2s infinite;
    }

    .comm-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .comm-time {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #94a3b8;
        font-size: 0.875rem;
    }

    .btn-join {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
        color: white;
        padding: 0.5rem 1.25rem;
        border-radius: 10px;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.875rem;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s;
    }

    .btn-join:hover {
        transform: translateX(3px);
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
    }

    .publications-grid {
        display: grid;
        gap: 1.5rem;
    }

    .publication-card {
        background: white;
        border-radius: 16px;
        padding: 1.75rem;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
        transition: all 0.3s;
        border: 2px solid transparent;
    }

    .publication-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px rgba(37, 99, 235, 0.12);
        border-color: #e0e7ff;
    }

    .pub-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1rem;
    }

    .pub-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1e293b;
    }

    .pub-category {
        display: inline-block;
        padding: 0.35rem 0.875rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .category-reclamation {
        background: #fef3c7;
        color: #92400e;
    }

    .category-autre {
        background: #dbeafe;
        color: #1e40af;
    }

    .pub-content {
        color: #64748b;
        margin-bottom: 1rem;
        line-height: 1.6;
    }

    .pub-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 1rem;
        border-top: 1px solid #f1f5f9;
    }

    .pub-date {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #94a3b8;
        font-size: 0.875rem;
    }

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
        50% { opacity: 0.5; }
    }

    @media (max-width: 968px) {
        .main-nav {
            display: none;
        }
        .mobile-menu-btn {
            display: block;
        }
        .forum-header h1 {
            font-size: 2rem;
        }
    }
</style>
{% endblock %}

{% block body %}
<header class=\"landing-header\">
    <div class=\"container\">
        <div class=\"header-left\">
            <div class=\"logo\">
                <img src=\"{{ asset('assets/images/logo1.png') }}\" alt=\"Learnflexplus Logo\" class=\"main-logo\">
                <span class=\"logo-text\">LearnFlex +</span>
            </div>
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

<div class=\"forum-container\">
    <div class=\"forum-header\">
        <h1>
            <i class=\"fas fa-comments\"></i>
            Forum
        </h1>
        <a href=\"{{ path('forum_publication_new') }}\" class=\"btn-new-post\">
            <i class=\"fas fa-plus\"></i>
            Nouvelle publication
        </a>
    </div>

    <section class=\"forum-section\">
        <h2 class=\"section-title\">
            <i class=\"fas fa-broadcast-tower\"></i>
            Communications en direct
        </h2>
        
        <div class=\"communications-grid\">
            {% if live_communications is empty %}
                <p style=\"color: #64748b; text-align: center; padding: 2rem;\">
                    Aucune communication en direct pour le moment
                </p>
            {% else %}
                {% for communication in live_communications %}
                    <div class=\"communication-item\">
                        <div class=\"comm-header\">
                            <div class=\"comm-title\">
                                <i class=\"fas fa-video\"></i>
                                {{ communication.descriptionDetaillee|default('Communication sans titre')|slice(0, 50) }}
                            </div>
                            <div class=\"live-indicator\">
                                <span class=\"live-dot\"></span>
                                LIVE
                            </div>
                        </div>
                        <div class=\"comm-footer\">
                            <div class=\"comm-time\">
                                <i class=\"far fa-clock\"></i>
                                {% if communication.duree %}
                                    {{ communication.duree }} min
                                {% else %}
                                    En cours
                                {% endif %}
                            </div>
                            <a href=\"{{ path('forum_communication_join', {id: communication.id}) }}\" class=\"btn-join\">
                                <i class=\"fas fa-video\"></i>
                                Rejoindre
                            </a>
                        </div>
                    </div>
                {% endfor %}
            {% endif %}
        </div>
    </section>

    {% if upcoming_communications is not empty %}
    <section class=\"forum-section\">
        <h2 class=\"section-title\">
            <i class=\"fas fa-calendar-alt\"></i>
            Communications à venir
        </h2>
        
        <div class=\"communications-grid\">
            {% for communication in upcoming_communications %}
                <div class=\"communication-item\">
                    <div class=\"comm-header\">
                        <div class=\"comm-title\">
                            <i class=\"fas fa-calendar\"></i>
                            {{ communication.descriptionDetaillee|default('Communication sans titre')|slice(0, 50) }}
                        </div>
                    </div>
                    <div class=\"comm-footer\">
                        <div class=\"comm-time\">
                            <i class=\"far fa-clock\"></i>
                            {{ communication.dateHeure|date('d/m/Y H:i') }}
                        </div>
                        <a href=\"{{ path('forum_communication_show', {id: communication.id}) }}\" class=\"btn-join\">
                            <i class=\"fas fa-info-circle\"></i>
                            Détails
                        </a>
                    </div>
                </div>
            {% endfor %}
        </div>
    </section>
    {% endif %}

    <section class=\"forum-section\">
        <h2 class=\"section-title\">
            <i class=\"fas fa-newspaper\"></i>
            Publications récentes
        </h2>
        
        <div class=\"publications-grid\">
            {% if publications is empty %}
                <p style=\"color: #64748b; text-align: center; padding: 2rem;\">
                    Aucune publication pour le moment
                </p>
            {% else %}
                {% for publication in publications|slice(0, 10) %}
                    <article class=\"publication-card\">
                        <div class=\"pub-header\">
                            <h3 class=\"pub-title\">{{ publication.titre }}</h3>
                            <span class=\"pub-category category-{{ publication.categorie|lower|replace({' ': '-'}) }}\">
                                {{ publication.categorie }}
                            </span>
                        </div>
                        <div class=\"pub-content\">
                            {{ publication.description|slice(0, 150) }}{% if publication.description|length > 150 %}...{% endif %}
                        </div>
                        <div class=\"pub-footer\">
                            <div class=\"pub-date\">
                                <i class=\"far fa-calendar\"></i>
                                {{ publication.dateCreation|date('d/m/Y') }}
                            </div>
                            <a href=\"{{ path('forum_publication_show', {id: publication.id}) }}\" class=\"btn-join\">
                                Voir plus
                            </a>
                        </div>
                    </article>
                {% endfor %}
            {% endif %}
        </div>
    </section>
</div>
{% endblock %}

{% block javascripts %}
<script>
  document.querySelector('.mobile-menu-btn')?.addEventListener('click', function() {
    document.querySelector('.main-nav').classList.toggle('active');
  });
</script>
{% endblock %}", "front/forum.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\front\\forum.html.twig");
    }
}
