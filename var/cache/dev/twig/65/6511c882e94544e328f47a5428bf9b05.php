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

/* front/communication_show.html.twig */
class __TwigTemplate_caec1a79cbf3d135e26d6cd95712f207 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/communication_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/communication_show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "descriptionDetaillee", [], "any", true, true, false, 3)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 3, $this->source); })()), "descriptionDetaillee", [], "any", false, false, false, 3), "Communication")) : ("Communication")), "html", null, true);
        yield " - LearnFlex+";
        
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

    /* ===== HEADER ===== */
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
        transition: all 0.3s;
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
        transition: all 0.2s;
    }

    .dropdown-menu li a:hover {
        background: linear-gradient(135deg, #e0e7ff 0%, #f3e8ff 100%);
        color: #2563eb;
    }

    .dropdown-menu::before {
        content: '';
        position: absolute;
        top: -8px;
        left: 50%;
        transform: translateX(-50%);
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

    /* ===== COMMUNICATION DETAIL ===== */
    .comm-detail-container {
        max-width: 900px;
        margin: 3rem auto;
        padding: 0 2rem;
    }

    .back-link {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        color: #64748b;
        text-decoration: none;
        font-weight: 500;
        margin-bottom: 2rem;
        transition: all 0.3s;
    }

    .back-link:hover {
        color: #2563eb;
        transform: translateX(-5px);
    }

    .comm-detail-card {
        background: white;
        border-radius: 24px;
        padding: 3rem;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        animation: fadeInUp 0.6s;
    }

    .comm-title {
        font-size: 2rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 1.5rem;
        line-height: 1.3;
    }

    .comm-badges {
        display: flex;
        gap: 0.75rem;
        margin-bottom: 2rem;
        flex-wrap: wrap;
    }

    .badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
    }

    .badge-live {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
    }

    .badge-record {
        background: #fef3c7;
        color: #92400e;
    }

    .badge-termine {
        background: #e0e7ff;
        color: #1e40af;
    }

    .badge-duration {
        background: #f1f5f9;
        color: #475569;
    }

    .comm-section {
        margin-bottom: 2.5rem;
        padding-bottom: 2.5rem;
        border-bottom: 1px solid #f1f5f9;
    }

    .comm-section:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .section-title {
        font-size: 1rem;
        font-weight: 600;
        color: #94a3b8;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .section-content {
        font-size: 1.125rem;
        color: #475569;
        line-height: 1.8;
    }

    .date-display {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 1.125rem;
        color: #475569;
    }

    .link-box {
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        border: 2px solid #e0e7ff;
        border-radius: 12px;
        padding: 1rem;
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .link-input {
        flex: 1;
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 0.75rem;
        font-family: 'Courier New', monospace;
        color: #2563eb;
        font-size: 0.875rem;
    }

    .btn-copy {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        border: none;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .btn-copy:hover {
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
    }

    .btn-join-large {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        padding: 1rem 2rem;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 700;
        font-size: 1.125rem;
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        transition: all 0.3s;
        margin-top: 1rem;
    }

    .btn-join-large:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(16, 185, 129, 0.3);
    }

    .publication-preview {
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        border-radius: 16px;
        padding: 1.5rem;
        margin-top: 1rem;
    }

    .publication-title {
        font-weight: 600;
        color: #1e293b;
        font-size: 1.125rem;
        margin-bottom: 0.5rem;
    }

    .publication-category {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        border-radius: 12px;
        font-size: 0.75rem;
        font-weight: 600;
        background: #dbeafe;
        color: #1e40af;
        margin-bottom: 1rem;
    }

    .publication-description {
        color: #64748b;
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .btn-view-publication {
        color: #2563eb;
        text-decoration: none;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s;
    }

    .btn-view-publication:hover {
        gap: 0.75rem;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1.5rem;
        margin-top: 1rem;
    }

    .info-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .info-icon {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #e0e7ff 0%, #f3e8ff 100%);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #2563eb;
    }

    .info-text {
        flex: 1;
    }

    .info-label {
        font-size: 0.75rem;
        color: #94a3b8;
        font-weight: 600;
        text-transform: uppercase;
    }

    .info-value {
        font-size: 1rem;
        color: #1e293b;
        font-weight: 600;
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
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 469
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

        // line 470
        yield "<!-- Header Navigation -->
<header class=\"landing-header\">
    <div class=\"container\">
        <div class=\"header-left\">
            <div class=\"logo\">
                <img src=\"";
        // line 475
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo1.png"), "html", null, true);
        yield "\" alt=\"Learnflexplus Logo\" class=\"main-logo\">
                <span class=\"logo-text\">LearnFlex +</span>
            </div>
        </div>
        <nav class=\"main-nav\">
            <ul>
                <li><a href=\"";
        // line 481
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\">Accueil</a></li>
                <li><a href=\"#\">Contenus pédagogiques</a></li>
                <li><a href=\"#\">Evaluation</a></li>
                <li><a href=\"#\">Questionnaire</a></li>
                <li><a href=\"#\">Orientation</a></li>
                
                <li class=\"dropdown active\">
                    <a href=\"";
        // line 488
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_index");
        yield "\" class=\"dropdown-toggle\">
                        Forum
                        <i class=\"fas fa-chevron-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
        // line 493
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_index");
        yield "\">
                            <i class=\"fas fa-comments\"></i>
                            Discussions
                        </a></li>
                        <li><a href=\"";
        // line 497
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("communication_chat");
        yield "\">
                            <i class=\"fas fa-message\"></i>
                            Chat en direct
                        </a></li>
                        <li><a href=\"";
        // line 501
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
        // line 510
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 510, $this->source); })()), "user", [], "any", false, false, false, 510) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 510, $this->source); })()), "user", [], "any", false, false, false, 510), "type", [], "any", false, false, false, 510) != "client"))) {
            // line 511
            yield "                <a href=\"#\" class=\"btn btn-outline\">Dashboard</a>
            ";
        }
        // line 513
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 513, $this->source); })()), "user", [], "any", false, false, false, 513)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 514
            yield "                <a href=\"#\" class=\"btn btn-primary\">Déconnexion</a>
            ";
        } else {
            // line 516
            yield "                <a href=\"#\" class=\"btn btn-primary\">Connexion</a>
            ";
        }
        // line 518
        yield "        </div>
    </div>
</header>

<!-- Communication Detail -->
<div class=\"comm-detail-container\">
    <a href=\"";
        // line 524
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("communication_chat");
        yield "\" class=\"back-link\">
        <i class=\"fas fa-arrow-left\"></i>
        Retour au chat
    </a>

    <div class=\"comm-detail-card\">
        <!-- Title -->
        <h1 class=\"comm-title\">";
        // line 531
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "descriptionDetaillee", [], "any", true, true, false, 531)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 531, $this->source); })()), "descriptionDetaillee", [], "any", false, false, false, 531), "Communication sans titre")) : ("Communication sans titre")), "html", null, true);
        yield "</h1>

        <!-- Badges -->
        <div class=\"comm-badges\">
            <span class=\"badge ";
        // line 535
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 535, $this->source); })()), "type", [], "any", false, false, false, 535) == "live")) {
            yield "badge-live";
        } else {
            yield "badge-record";
        }
        yield "\">
                <i class=\"fas fa-";
        // line 536
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 536, $this->source); })()), "type", [], "any", false, false, false, 536) == "live")) {
            yield "video";
        } else {
            yield "film";
        }
        yield "\"></i>
                ";
        // line 537
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 537, $this->source); })()), "type", [], "any", false, false, false, 537) == "live")) ? ("En direct") : ("Enregistrement"));
        yield "
            </span>
            
            <span class=\"badge ";
        // line 540
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 540, $this->source); })()), "etat", [], "any", false, false, false, 540) == "en_cours")) {
            yield "badge-live";
        } else {
            yield "badge-termine";
        }
        yield "\">
                ";
        // line 541
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 541, $this->source); })()), "etat", [], "any", false, false, false, 541) == "en_cours")) ? ("En cours") : ("Terminé"));
        yield "
            </span>
            
            ";
        // line 544
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 544, $this->source); })()), "duree", [], "any", false, false, false, 544)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 545
            yield "                <span class=\"badge badge-duration\">
                    <i class=\"far fa-clock\"></i>
                    ";
            // line 547
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 547, $this->source); })()), "duree", [], "any", false, false, false, 547), "html", null, true);
            yield " minutes
                </span>
            ";
        }
        // line 550
        yield "        </div>

        <!-- Date et heure -->
        <div class=\"comm-section\">
            <div class=\"section-title\">
                <i class=\"far fa-calendar\"></i>
                Date et heure
            </div>
            <div class=\"date-display\">
                <i class=\"fas fa-calendar-day\"></i>
                ";
        // line 560
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 560, $this->source); })()), "dateHeure", [], "any", false, false, false, 560), "d/m/Y à H:i"), "html", null, true);
        yield "
            </div>
        </div>

        <!-- Lien de participation -->
        ";
        // line 565
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 565, $this->source); })()), "lien", [], "any", false, false, false, 565)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 566
            yield "        <div class=\"comm-section\">
            <div class=\"section-title\">
                <i class=\"fas fa-link\"></i>
                Lien de participation
            </div>
            <div class=\"link-box\">
                <input type=\"text\" class=\"link-input\" value=\"";
            // line 572
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 572, $this->source); })()), "lien", [], "any", false, false, false, 572), "html", null, true);
            yield "\" readonly id=\"linkInput\">
                <button class=\"btn-copy\" onclick=\"copyLink()\">
                    <i class=\"fas fa-copy\"></i>
                    Copier
                </button>
            </div>
            
            ";
            // line 579
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 579, $this->source); })()), "etat", [], "any", false, false, false, 579) == "en_cours")) {
                // line 580
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_communication_join", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 580, $this->source); })()), "id", [], "any", false, false, false, 580)]), "html", null, true);
                yield "\" class=\"btn-join-large\">
                    <i class=\"fas fa-video\"></i>
                    Rejoindre la communication
                </a>
            ";
            }
            // line 585
            yield "        </div>
        ";
        }
        // line 587
        yield "
        <!-- Publication liée -->
        ";
        // line 589
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 589, $this->source); })()), "publication", [], "any", false, false, false, 589)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 590
            yield "        <div class=\"comm-section\">
            <div class=\"section-title\">
                <i class=\"fas fa-newspaper\"></i>
                Publication liée
            </div>
            <div class=\"publication-preview\">
                <h3 class=\"publication-title\">";
            // line 596
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 596, $this->source); })()), "publication", [], "any", false, false, false, 596), "titre", [], "any", false, false, false, 596), "html", null, true);
            yield "</h3>
                <span class=\"publication-category\">";
            // line 597
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 597, $this->source); })()), "publication", [], "any", false, false, false, 597), "categorie", [], "any", false, false, false, 597), "html", null, true);
            yield "</span>
                <p class=\"publication-description\">
                    ";
            // line 599
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 599, $this->source); })()), "publication", [], "any", false, false, false, 599), "description", [], "any", false, false, false, 599), 0, 200), "html", null, true);
            yield "...
                </p>
                <a href=\"";
            // line 601
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_publication_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 601, $this->source); })()), "publication", [], "any", false, false, false, 601), "id", [], "any", false, false, false, 601)]), "html", null, true);
            yield "\" class=\"btn-view-publication\">
                    Voir la publication complète
                    <i class=\"fas fa-arrow-right\"></i>
                </a>
            </div>
        </div>
        ";
        }
        // line 608
        yield "
        <!-- Détails / Informations -->
        <div class=\"comm-section\">
            <div class=\"section-title\">
                <i class=\"fas fa-info-circle\"></i>
                Détails
            </div>
            <div class=\"section-content\">
                ";
        // line 616
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 616, $this->source); })()), "descriptionDetaillee", [], "any", false, false, false, 616), "html", null, true);
        yield "
            </div>
        </div>

        <!-- Informations supplémentaires -->
        <div class=\"info-grid\">
            <div class=\"info-item\">
                <div class=\"info-icon\">
                    <i class=\"fas fa-tag\"></i>
                </div>
                <div class=\"info-text\">
                    <div class=\"info-label\">Type</div>
                    <div class=\"info-value\">";
        // line 628
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 628, $this->source); })()), "type", [], "any", false, false, false, 628) == "live")) ? ("En direct") : ("Enregistrement"));
        yield "</div>
                </div>
            </div>

            <div class=\"info-item\">
                <div class=\"info-icon\">
                    <i class=\"fas fa-signal\"></i>
                </div>
                <div class=\"info-text\">
                    <div class=\"info-label\">État</div>
                    <div class=\"info-value\">";
        // line 638
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 638, $this->source); })()), "etat", [], "any", false, false, false, 638) == "en_cours")) ? ("En cours") : ("Terminé"));
        yield "</div>
                </div>
            </div>

            ";
        // line 642
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 642, $this->source); })()), "duree", [], "any", false, false, false, 642)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 643
            yield "            <div class=\"info-item\">
                <div class=\"info-icon\">
                    <i class=\"far fa-clock\"></i>
                </div>
                <div class=\"info-text\">
                    <div class=\"info-label\">Durée</div>
                    <div class=\"info-value\">";
            // line 649
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 649, $this->source); })()), "duree", [], "any", false, false, false, 649), "html", null, true);
            yield " min</div>
                </div>
            </div>
            ";
        }
        // line 653
        yield "
            <div class=\"info-item\">
                <div class=\"info-icon\">
                    <i class=\"fas fa-calendar\"></i>
                </div>
                <div class=\"info-text\">
                    <div class=\"info-label\">Date</div>
                    <div class=\"info-value\">";
        // line 660
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 660, $this->source); })()), "dateHeure", [], "any", false, false, false, 660), "d/m/Y"), "html", null, true);
        yield "</div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 668
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

        // line 669
        yield "<script>
function copyLink() {
    const input = document.getElementById('linkInput');
    input.select();
    document.execCommand('copy');
    
    const btn = event.target.closest('.btn-copy');
    const originalText = btn.innerHTML;
    btn.innerHTML = '<i class=\"fas fa-check\"></i> Copié !';
    
    setTimeout(() => {
        btn.innerHTML = originalText;
    }, 2000);
}
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
        return "front/communication_show.html.twig";
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
        return array (  933 => 669,  920 => 668,  902 => 660,  893 => 653,  886 => 649,  878 => 643,  876 => 642,  869 => 638,  856 => 628,  841 => 616,  831 => 608,  821 => 601,  816 => 599,  811 => 597,  807 => 596,  799 => 590,  797 => 589,  793 => 587,  789 => 585,  780 => 580,  778 => 579,  768 => 572,  760 => 566,  758 => 565,  750 => 560,  738 => 550,  732 => 547,  728 => 545,  726 => 544,  720 => 541,  712 => 540,  706 => 537,  698 => 536,  690 => 535,  683 => 531,  673 => 524,  665 => 518,  661 => 516,  657 => 514,  654 => 513,  650 => 511,  648 => 510,  636 => 501,  629 => 497,  622 => 493,  614 => 488,  604 => 481,  595 => 475,  588 => 470,  575 => 469,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ communication.descriptionDetaillee|default('Communication') }} - LearnFlex+{% endblock %}

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

    /* ===== HEADER ===== */
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
        transition: all 0.3s;
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
        transition: all 0.2s;
    }

    .dropdown-menu li a:hover {
        background: linear-gradient(135deg, #e0e7ff 0%, #f3e8ff 100%);
        color: #2563eb;
    }

    .dropdown-menu::before {
        content: '';
        position: absolute;
        top: -8px;
        left: 50%;
        transform: translateX(-50%);
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

    /* ===== COMMUNICATION DETAIL ===== */
    .comm-detail-container {
        max-width: 900px;
        margin: 3rem auto;
        padding: 0 2rem;
    }

    .back-link {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        color: #64748b;
        text-decoration: none;
        font-weight: 500;
        margin-bottom: 2rem;
        transition: all 0.3s;
    }

    .back-link:hover {
        color: #2563eb;
        transform: translateX(-5px);
    }

    .comm-detail-card {
        background: white;
        border-radius: 24px;
        padding: 3rem;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        animation: fadeInUp 0.6s;
    }

    .comm-title {
        font-size: 2rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 1.5rem;
        line-height: 1.3;
    }

    .comm-badges {
        display: flex;
        gap: 0.75rem;
        margin-bottom: 2rem;
        flex-wrap: wrap;
    }

    .badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
    }

    .badge-live {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
    }

    .badge-record {
        background: #fef3c7;
        color: #92400e;
    }

    .badge-termine {
        background: #e0e7ff;
        color: #1e40af;
    }

    .badge-duration {
        background: #f1f5f9;
        color: #475569;
    }

    .comm-section {
        margin-bottom: 2.5rem;
        padding-bottom: 2.5rem;
        border-bottom: 1px solid #f1f5f9;
    }

    .comm-section:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .section-title {
        font-size: 1rem;
        font-weight: 600;
        color: #94a3b8;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .section-content {
        font-size: 1.125rem;
        color: #475569;
        line-height: 1.8;
    }

    .date-display {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 1.125rem;
        color: #475569;
    }

    .link-box {
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        border: 2px solid #e0e7ff;
        border-radius: 12px;
        padding: 1rem;
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .link-input {
        flex: 1;
        background: white;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 0.75rem;
        font-family: 'Courier New', monospace;
        color: #2563eb;
        font-size: 0.875rem;
    }

    .btn-copy {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        border: none;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .btn-copy:hover {
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
    }

    .btn-join-large {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
        padding: 1rem 2rem;
        border-radius: 12px;
        text-decoration: none;
        font-weight: 700;
        font-size: 1.125rem;
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        transition: all 0.3s;
        margin-top: 1rem;
    }

    .btn-join-large:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(16, 185, 129, 0.3);
    }

    .publication-preview {
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        border-radius: 16px;
        padding: 1.5rem;
        margin-top: 1rem;
    }

    .publication-title {
        font-weight: 600;
        color: #1e293b;
        font-size: 1.125rem;
        margin-bottom: 0.5rem;
    }

    .publication-category {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        border-radius: 12px;
        font-size: 0.75rem;
        font-weight: 600;
        background: #dbeafe;
        color: #1e40af;
        margin-bottom: 1rem;
    }

    .publication-description {
        color: #64748b;
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .btn-view-publication {
        color: #2563eb;
        text-decoration: none;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s;
    }

    .btn-view-publication:hover {
        gap: 0.75rem;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1.5rem;
        margin-top: 1rem;
    }

    .info-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .info-icon {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #e0e7ff 0%, #f3e8ff 100%);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #2563eb;
    }

    .info-text {
        flex: 1;
    }

    .info-label {
        font-size: 0.75rem;
        color: #94a3b8;
        font-weight: 600;
        text-transform: uppercase;
    }

    .info-value {
        font-size: 1rem;
        color: #1e293b;
        font-weight: 600;
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
</style>
{% endblock %}

{% block body %}
<!-- Header Navigation -->
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
                <a href=\"#\" class=\"btn btn-outline\">Dashboard</a>
            {% endif %}
            {% if app.user %}
                <a href=\"#\" class=\"btn btn-primary\">Déconnexion</a>
            {% else %}
                <a href=\"#\" class=\"btn btn-primary\">Connexion</a>
            {% endif %}
        </div>
    </div>
</header>

<!-- Communication Detail -->
<div class=\"comm-detail-container\">
    <a href=\"{{ path('communication_chat') }}\" class=\"back-link\">
        <i class=\"fas fa-arrow-left\"></i>
        Retour au chat
    </a>

    <div class=\"comm-detail-card\">
        <!-- Title -->
        <h1 class=\"comm-title\">{{ communication.descriptionDetaillee|default('Communication sans titre') }}</h1>

        <!-- Badges -->
        <div class=\"comm-badges\">
            <span class=\"badge {% if communication.type == 'live' %}badge-live{% else %}badge-record{% endif %}\">
                <i class=\"fas fa-{% if communication.type == 'live' %}video{% else %}film{% endif %}\"></i>
                {{ communication.type == 'live' ? 'En direct' : 'Enregistrement' }}
            </span>
            
            <span class=\"badge {% if communication.etat == 'en_cours' %}badge-live{% else %}badge-termine{% endif %}\">
                {{ communication.etat == 'en_cours' ? 'En cours' : 'Terminé' }}
            </span>
            
            {% if communication.duree %}
                <span class=\"badge badge-duration\">
                    <i class=\"far fa-clock\"></i>
                    {{ communication.duree }} minutes
                </span>
            {% endif %}
        </div>

        <!-- Date et heure -->
        <div class=\"comm-section\">
            <div class=\"section-title\">
                <i class=\"far fa-calendar\"></i>
                Date et heure
            </div>
            <div class=\"date-display\">
                <i class=\"fas fa-calendar-day\"></i>
                {{ communication.dateHeure|date('d/m/Y à H:i') }}
            </div>
        </div>

        <!-- Lien de participation -->
        {% if communication.lien %}
        <div class=\"comm-section\">
            <div class=\"section-title\">
                <i class=\"fas fa-link\"></i>
                Lien de participation
            </div>
            <div class=\"link-box\">
                <input type=\"text\" class=\"link-input\" value=\"{{ communication.lien }}\" readonly id=\"linkInput\">
                <button class=\"btn-copy\" onclick=\"copyLink()\">
                    <i class=\"fas fa-copy\"></i>
                    Copier
                </button>
            </div>
            
            {% if communication.etat == 'en_cours' %}
                <a href=\"{{ path('forum_communication_join', {id: communication.id}) }}\" class=\"btn-join-large\">
                    <i class=\"fas fa-video\"></i>
                    Rejoindre la communication
                </a>
            {% endif %}
        </div>
        {% endif %}

        <!-- Publication liée -->
        {% if communication.publication %}
        <div class=\"comm-section\">
            <div class=\"section-title\">
                <i class=\"fas fa-newspaper\"></i>
                Publication liée
            </div>
            <div class=\"publication-preview\">
                <h3 class=\"publication-title\">{{ communication.publication.titre }}</h3>
                <span class=\"publication-category\">{{ communication.publication.categorie }}</span>
                <p class=\"publication-description\">
                    {{ communication.publication.description|slice(0, 200) }}...
                </p>
                <a href=\"{{ path('forum_publication_show', {id: communication.publication.id}) }}\" class=\"btn-view-publication\">
                    Voir la publication complète
                    <i class=\"fas fa-arrow-right\"></i>
                </a>
            </div>
        </div>
        {% endif %}

        <!-- Détails / Informations -->
        <div class=\"comm-section\">
            <div class=\"section-title\">
                <i class=\"fas fa-info-circle\"></i>
                Détails
            </div>
            <div class=\"section-content\">
                {{ communication.descriptionDetaillee }}
            </div>
        </div>

        <!-- Informations supplémentaires -->
        <div class=\"info-grid\">
            <div class=\"info-item\">
                <div class=\"info-icon\">
                    <i class=\"fas fa-tag\"></i>
                </div>
                <div class=\"info-text\">
                    <div class=\"info-label\">Type</div>
                    <div class=\"info-value\">{{ communication.type == 'live' ? 'En direct' : 'Enregistrement' }}</div>
                </div>
            </div>

            <div class=\"info-item\">
                <div class=\"info-icon\">
                    <i class=\"fas fa-signal\"></i>
                </div>
                <div class=\"info-text\">
                    <div class=\"info-label\">État</div>
                    <div class=\"info-value\">{{ communication.etat == 'en_cours' ? 'En cours' : 'Terminé' }}</div>
                </div>
            </div>

            {% if communication.duree %}
            <div class=\"info-item\">
                <div class=\"info-icon\">
                    <i class=\"far fa-clock\"></i>
                </div>
                <div class=\"info-text\">
                    <div class=\"info-label\">Durée</div>
                    <div class=\"info-value\">{{ communication.duree }} min</div>
                </div>
            </div>
            {% endif %}

            <div class=\"info-item\">
                <div class=\"info-icon\">
                    <i class=\"fas fa-calendar\"></i>
                </div>
                <div class=\"info-text\">
                    <div class=\"info-label\">Date</div>
                    <div class=\"info-value\">{{ communication.dateHeure|date('d/m/Y') }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
function copyLink() {
    const input = document.getElementById('linkInput');
    input.select();
    document.execCommand('copy');
    
    const btn = event.target.closest('.btn-copy');
    const originalText = btn.innerHTML;
    btn.innerHTML = '<i class=\"fas fa-check\"></i> Copié !';
    
    setTimeout(() => {
        btn.innerHTML = originalText;
    }, 2000);
}
</script>
{% endblock %}", "front/communication_show.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\front\\communication_show.html.twig");
    }
}
