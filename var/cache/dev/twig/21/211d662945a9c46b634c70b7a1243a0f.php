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

/* front/communication_index.html.twig */
class __TwigTemplate_30b77cdada25b8f64875398ce758b882 extends Template
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
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "front/home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/communication_index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/communication_index.html.twig"));

        $this->parent = $this->load("front/home.html.twig", 1);
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
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
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

    .btn-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
    }

    .btn-success:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(16, 185, 129, 0.3);
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

    /* Header with title and button */
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 3rem;
        flex-wrap: wrap;
        gap: 1.5rem;
        animation: fadeInDown 0.6s;
    }

    .page-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #1e293b;
        display: flex;
        align-items: center;
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
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
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
        display: flex;
        flex-direction: column;
        height: 100%;
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

    .type-badge.live {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        color: white;
        animation: pulse 2s infinite;
    }

    .type-badge.record {
        background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        color: white;
    }

    .status-badge {
        padding: 0.5rem 1.25rem;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
    }

    .status-badge.live {
        background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
        color: white;
    }

    .status-badge.terminé,
    .status-badge.finished {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
    }

    .status-badge.annulé,
    .status-badge.cancelled {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        color: white;
    }

    .status-badge.planned {
        background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
        color: white;
    }

    .card-content {
        flex-grow: 1;
        margin-bottom: 1.5rem;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 1rem;
        line-height: 1.4;
    }

    .card-details {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
        color: #64748b;
        font-size: 0.875rem;
    }

    .detail-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .detail-item i {
        width: 20px;
        color: #94a3b8;
    }

    .card-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 1.5rem;
        border-top: 1px solid #f1f5f9;
        flex-wrap: wrap;
        gap: 1rem;
        margin-top: auto;
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
        font-size: 0.875rem;
    }

    .btn-view:hover {
        transform: translateX(5px);
        box-shadow: 0 8px 16px rgba(37, 99, 235, 0.3);
    }

    .btn-join {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
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
        font-size: 0.875rem;
        animation: pulse 2s infinite;
    }

    .btn-join:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 16px rgba(239, 68, 68, 0.3);
    }

    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        grid-column: 1 / -1;
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

    .empty-state p {
        color: #94a3b8;
        margin-bottom: 1.5rem;
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
        
        .communications-grid {
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        }
        
        .page-header {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    @media (max-width: 768px) {
        .page-title {
            font-size: 2rem;
        }
        
        .communications-grid {
            grid-template-columns: 1fr;
        }
        
        .communication-card {
            padding: 1.5rem;
        }
        
        .card-footer {
            flex-direction: column;
            align-items: stretch;
            gap: 1rem;
        }
        
        .btn-view, .btn-join {
            width: 100%;
            justify-content: center;
        }
        
        .filters-row {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 576px) {
        .landing-header .container {
            padding: 0 1rem;
        }
        
        .communications-container {
            padding: 0 1rem;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 656
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 657
        yield "<header class=\"landing-header\">
    <div class=\"container\">
        <div class=\"header-left\">
            <div class=\"logo\">
                <img src=\"";
        // line 661
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo1.png"), "html", null, true);
        yield "\" alt=\"Learnflexplus Logo\" class=\"main-logo\">
                <span class=\"logo-text\">LearnFlex +</span>
            </div>
        </div>
        <nav class=\"main-nav\">
            <ul>
                <li><a href=\"";
        // line 667
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\">Accueil</a></li>
                <li><a href=\"";
        // line 668
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_index");
        yield "\">Forum</a></li>
                <li class=\"active\"><a href=\"";
        // line 669
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_communication_index");
        yield "\">Communications</a></li>
            </ul>
        </nav>
        <div class=\"header-right\">
            ";
        // line 673
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 673, $this->source); })()), "user", [], "any", false, false, false, 673) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 673, $this->source); })()), "user", [], "any", false, false, false, 673), "type", [], "any", false, false, false, 673) != "client"))) {
            // line 674
            yield "                <a href=\"#\" class=\"btn btn-outline dashboard-btn\">Dashboard</a>
            ";
        }
        // line 676
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 676, $this->source); })()), "user", [], "any", false, false, false, 676)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 677
            yield "                <a href=\"#\" class=\"btn btn-primary logout-btn\">Déconnexion</a>
            ";
        } else {
            // line 679
            yield "                <a href=\"#\" class=\"btn btn-primary\">Connexion</a>
            ";
        }
        // line 681
        yield "            <button class=\"mobile-menu-btn\">
                <i class=\"fas fa-bars\"></i>
            </button>
        </div>
    </div>
</header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 689
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

        // line 690
        yield "<!-- Communications Container -->
<div class=\"communications-container\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <h1 class=\"page-title\">
            <i class=\"fas fa-bullhorn\"></i>
            Toutes les communications
        </h1>
        
        ";
        // line 699
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 699, $this->source); })()), "user", [], "any", false, false, false, 699) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 699, $this->source); })()), "user", [], "any", false, false, false, 699), "type", [], "any", false, false, false, 699), ["enseignant", "admin"]))) {
            // line 700
            yield "            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_communication_new");
            yield "\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Nouvelle communication
            </a>
        ";
        }
        // line 704
        yield "    </div>

    <!-- Filters Section -->
    <div class=\"filters-card\">
        <h3 class=\"filters-title\">
            <i class=\"fas fa-filter\"></i>
            Filtrer les communications
        </h3>
        
        <form method=\"GET\" class=\"filters-form\">
            <div class=\"filters-row\">
                <div class=\"filter-group\">
                    <label class=\"filter-label\">
                        <i class=\"fas fa-tag\"></i>
                        Type
                    </label>
                    <select name=\"type\" class=\"filter-select\">
                        <option value=\"\">Tous les types</option>
                        <option value=\"live\" ";
        // line 722
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 722, $this->source); })()), "request", [], "any", false, false, false, 722), "query", [], "any", false, false, false, 722), "get", ["type"], "method", false, false, false, 722) == "live")) {
            yield "selected";
        }
        yield ">Live</option>
                        <option value=\"record\" ";
        // line 723
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 723, $this->source); })()), "request", [], "any", false, false, false, 723), "query", [], "any", false, false, false, 723), "get", ["type"], "method", false, false, false, 723) == "record")) {
            yield "selected";
        }
        yield ">Enregistrement</option>
                    </select>
                </div>
                
                <div class=\"filter-group\">
                    <label class=\"filter-label\">
                        <i class=\"fas fa-tag\"></i>
                        État
                    </label>
                    <select name=\"etat\" class=\"filter-select\">
                        <option value=\"\">Tous les états</option>
                        <option value=\"planned\" ";
        // line 734
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 734, $this->source); })()), "request", [], "any", false, false, false, 734), "query", [], "any", false, false, false, 734), "get", ["etat"], "method", false, false, false, 734) == "planned")) {
            yield "selected";
        }
        yield ">Planifié</option>
                        <option value=\"live\" ";
        // line 735
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 735, $this->source); })()), "request", [], "any", false, false, false, 735), "query", [], "any", false, false, false, 735), "get", ["etat"], "method", false, false, false, 735) == "live")) {
            yield "selected";
        }
        yield ">En direct</option>
                        <option value=\"finished\" ";
        // line 736
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 736, $this->source); })()), "request", [], "any", false, false, false, 736), "query", [], "any", false, false, false, 736), "get", ["etat"], "method", false, false, false, 736) == "finished")) {
            yield "selected";
        }
        yield ">Terminé</option>
                        <option value=\"cancelled\" ";
        // line 737
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 737, $this->source); })()), "request", [], "any", false, false, false, 737), "query", [], "any", false, false, false, 737), "get", ["etat"], "method", false, false, false, 737) == "cancelled")) {
            yield "selected";
        }
        yield ">Annulé</option>
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
        // line 753
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["communications"]) || array_key_exists("communications", $context) ? $context["communications"] : (function () { throw new RuntimeError('Variable "communications" does not exist.', 753, $this->source); })())) > 0)) {
            // line 754
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["communications"]) || array_key_exists("communications", $context) ? $context["communications"] : (function () { throw new RuntimeError('Variable "communications" does not exist.', 754, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["communication"]) {
                // line 755
                yield "                <article class=\"communication-card\">
                    <div class=\"card-header\">
                        <span class=\"type-badge ";
                // line 757
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "type", [], "any", true, true, false, 757)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "type", [], "any", false, false, false, 757), "record")) : ("record")), "html", null, true);
                yield "\">
                            ";
                // line 758
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "type", [], "any", false, false, false, 758) == "live")) {
                    // line 759
                    yield "                                Live
                            ";
                } else {
                    // line 761
                    yield "                                Record
                            ";
                }
                // line 763
                yield "                        </span>
                        
                        <span class=\"status-badge ";
                // line 765
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "etat", [], "any", true, true, false, 765)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "etat", [], "any", false, false, false, 765), "planned")) : ("planned")), "html", null, true);
                yield "\">
                            ";
                // line 766
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "etat", [], "any", false, false, false, 766) == "live")) {
                    // line 767
                    yield "                                En direct
                            ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 768
$context["communication"], "etat", [], "any", false, false, false, 768) == "finished") || (CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "etat", [], "any", false, false, false, 768) == "termine"))) {
                    // line 769
                    yield "                                Terminé
                            ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 770
$context["communication"], "etat", [], "any", false, false, false, 770) == "cancelled") || (CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "etat", [], "any", false, false, false, 770) == "annule"))) {
                    // line 771
                    yield "                                Annulé
                            ";
                } elseif (((CoreExtension::getAttribute($this->env, $this->source,                 // line 772
$context["communication"], "etat", [], "any", false, false, false, 772) == "planned") || (CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "etat", [], "any", false, false, false, 772) == "programmee"))) {
                    // line 773
                    yield "                                Planifié
                            ";
                } else {
                    // line 775
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "etat", [], "any", true, true, false, 775)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "etat", [], "any", false, false, false, 775), "Planifié")) : ("Planifié")), "html", null, true);
                    yield "
                            ";
                }
                // line 777
                yield "                        </span>
                    </div>
                    
                    <div class=\"card-content\">
                        <h3 class=\"card-title\">
                            ";
                // line 782
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", false, false, false, 782)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 783
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", false, false, false, 783), 0, 60), "html", null, true);
                    yield "
                                ";
                    // line 784
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", false, false, false, 784)) > 60)) {
                        yield "...";
                    }
                    // line 785
                    yield "                            ";
                } else {
                    // line 786
                    yield "                                Communication #";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "id", [], "any", false, false, false, 786), "html", null, true);
                    yield "
                            ";
                }
                // line 788
                yield "                        </h3>
                        
                        <div class=\"card-details\">
                            <div class=\"detail-item\">
                                <i class=\"far fa-calendar\"></i>
                                <span>
                                    ";
                // line 794
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "dateHeure", [], "any", false, false, false, 794)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 795
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "dateHeure", [], "any", false, false, false, 795), "d/m/Y H:i"), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 797
                    yield "                                        Date non définie
                                    ";
                }
                // line 799
                yield "                                </span>
                            </div>
                            
                            ";
                // line 802
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "duree", [], "any", false, false, false, 802)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 803
                    yield "                            <div class=\"detail-item\">
                                <i class=\"far fa-clock\"></i>
                                <span>";
                    // line 805
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "duree", [], "any", false, false, false, 805), "html", null, true);
                    yield " minutes</span>
                            </div>
                            ";
                }
                // line 808
                yield "                            
                            ";
                // line 809
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "publication", [], "any", false, false, false, 809)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 810
                    yield "                            <div class=\"detail-item\">
                                <i class=\"fas fa-link\"></i>
                                <span>Liée à une publication</span>
                            </div>
                            ";
                }
                // line 815
                yield "                        </div>
                    </div>
                    
                    <div class=\"card-footer\">
                        <a href=\"";
                // line 819
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_communication_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "id", [], "any", false, false, false, 819)]), "html", null, true);
                yield "\" 
                           class=\"btn-view\">
                            <i class=\"fas fa-eye\"></i> Voir
                        </a>
                        
                        ";
                // line 824
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "etat", [], "any", false, false, false, 824) == "live") && CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "lien", [], "any", false, false, false, 824))) {
                    // line 825
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_communication_join", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "id", [], "any", false, false, false, 825)]), "html", null, true);
                    yield "\" 
                               class=\"btn-join\">
                                <i class=\"fas fa-video\"></i> Rejoindre
                            </a>
                        ";
                }
                // line 830
                yield "                    </div>
                </article>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['communication'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 833
            yield "        ";
        } else {
            // line 834
            yield "            <div class=\"empty-state\">
                <div class=\"empty-state-icon\">📢</div>
                <h3>Aucune communication pour le moment</h3>
                <p class=\"mb-0\">Les communications apparaîtront ici lorsqu'elles seront créées.</p>
                ";
            // line 838
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 838, $this->source); })()), "user", [], "any", false, false, false, 838) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 838, $this->source); })()), "user", [], "any", false, false, false, 838), "type", [], "any", false, false, false, 838), ["enseignant", "admin"]))) {
                // line 839
                yield "                <div class=\"mt-3\">
                    <a href=\"";
                // line 840
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_communication_new");
                yield "\" class=\"btn btn-success\">
                        <i class=\"fas fa-plus\"></i> Créer la première communication
                    </a>
                </div>
                ";
            }
            // line 845
            yield "            </div>
        ";
        }
        // line 847
        yield "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 851
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

        // line 852
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
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

    // Pre-fill form values from URL (fallback for when JavaScript is disabled)
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
        return "front/communication_index.html.twig";
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
        return array (  1176 => 852,  1163 => 851,  1150 => 847,  1146 => 845,  1138 => 840,  1135 => 839,  1133 => 838,  1127 => 834,  1124 => 833,  1116 => 830,  1107 => 825,  1105 => 824,  1097 => 819,  1091 => 815,  1084 => 810,  1082 => 809,  1079 => 808,  1073 => 805,  1069 => 803,  1067 => 802,  1062 => 799,  1058 => 797,  1052 => 795,  1050 => 794,  1042 => 788,  1036 => 786,  1033 => 785,  1029 => 784,  1024 => 783,  1022 => 782,  1015 => 777,  1009 => 775,  1005 => 773,  1003 => 772,  1000 => 771,  998 => 770,  995 => 769,  993 => 768,  990 => 767,  988 => 766,  984 => 765,  980 => 763,  976 => 761,  972 => 759,  970 => 758,  966 => 757,  962 => 755,  957 => 754,  955 => 753,  934 => 737,  928 => 736,  922 => 735,  916 => 734,  900 => 723,  894 => 722,  874 => 704,  866 => 700,  864 => 699,  853 => 690,  840 => 689,  823 => 681,  819 => 679,  815 => 677,  812 => 676,  808 => 674,  806 => 673,  799 => 669,  795 => 668,  791 => 667,  782 => 661,  776 => 657,  763 => 656,  103 => 6,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/home.html.twig' %}

{% block title %}Communications - LearnFlex+{% endblock %}

{% block stylesheets %}
{{ parent() }}
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

    .btn-success {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
    }

    .btn-success:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(16, 185, 129, 0.3);
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

    /* Header with title and button */
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 3rem;
        flex-wrap: wrap;
        gap: 1.5rem;
        animation: fadeInDown 0.6s;
    }

    .page-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #1e293b;
        display: flex;
        align-items: center;
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
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
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
        display: flex;
        flex-direction: column;
        height: 100%;
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

    .type-badge.live {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        color: white;
        animation: pulse 2s infinite;
    }

    .type-badge.record {
        background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        color: white;
    }

    .status-badge {
        padding: 0.5rem 1.25rem;
        border-radius: 20px;
        font-size: 0.875rem;
        font-weight: 600;
    }

    .status-badge.live {
        background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
        color: white;
    }

    .status-badge.terminé,
    .status-badge.finished {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
    }

    .status-badge.annulé,
    .status-badge.cancelled {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        color: white;
    }

    .status-badge.planned {
        background: linear-gradient(135deg, #8b5cf6 0%, #7c3aed 100%);
        color: white;
    }

    .card-content {
        flex-grow: 1;
        margin-bottom: 1.5rem;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 1rem;
        line-height: 1.4;
    }

    .card-details {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
        color: #64748b;
        font-size: 0.875rem;
    }

    .detail-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .detail-item i {
        width: 20px;
        color: #94a3b8;
    }

    .card-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 1.5rem;
        border-top: 1px solid #f1f5f9;
        flex-wrap: wrap;
        gap: 1rem;
        margin-top: auto;
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
        font-size: 0.875rem;
    }

    .btn-view:hover {
        transform: translateX(5px);
        box-shadow: 0 8px 16px rgba(37, 99, 235, 0.3);
    }

    .btn-join {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
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
        font-size: 0.875rem;
        animation: pulse 2s infinite;
    }

    .btn-join:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 16px rgba(239, 68, 68, 0.3);
    }

    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: 20px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        grid-column: 1 / -1;
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

    .empty-state p {
        color: #94a3b8;
        margin-bottom: 1.5rem;
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
        
        .communications-grid {
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        }
        
        .page-header {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    @media (max-width: 768px) {
        .page-title {
            font-size: 2rem;
        }
        
        .communications-grid {
            grid-template-columns: 1fr;
        }
        
        .communication-card {
            padding: 1.5rem;
        }
        
        .card-footer {
            flex-direction: column;
            align-items: stretch;
            gap: 1rem;
        }
        
        .btn-view, .btn-join {
            width: 100%;
            justify-content: center;
        }
        
        .filters-row {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 576px) {
        .landing-header .container {
            padding: 0 1rem;
        }
        
        .communications-container {
            padding: 0 1rem;
        }
    }
</style>
{% endblock %}

{% block header %}
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
                <li><a href=\"{{ path('forum_index') }}\">Forum</a></li>
                <li class=\"active\"><a href=\"{{ path('forum_communication_index') }}\">Communications</a></li>
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
{% endblock %}

{% block body %}
<!-- Communications Container -->
<div class=\"communications-container\">
    <!-- Page Header -->
    <div class=\"page-header\">
        <h1 class=\"page-title\">
            <i class=\"fas fa-bullhorn\"></i>
            Toutes les communications
        </h1>
        
        {% if app.user and app.user.type in ['enseignant', 'admin'] %}
            <a href=\"{{ path('forum_communication_new') }}\" class=\"btn btn-success\">
                <i class=\"fas fa-plus\"></i> Nouvelle communication
            </a>
        {% endif %}
    </div>

    <!-- Filters Section -->
    <div class=\"filters-card\">
        <h3 class=\"filters-title\">
            <i class=\"fas fa-filter\"></i>
            Filtrer les communications
        </h3>
        
        <form method=\"GET\" class=\"filters-form\">
            <div class=\"filters-row\">
                <div class=\"filter-group\">
                    <label class=\"filter-label\">
                        <i class=\"fas fa-tag\"></i>
                        Type
                    </label>
                    <select name=\"type\" class=\"filter-select\">
                        <option value=\"\">Tous les types</option>
                        <option value=\"live\" {% if app.request.query.get('type') == 'live' %}selected{% endif %}>Live</option>
                        <option value=\"record\" {% if app.request.query.get('type') == 'record' %}selected{% endif %}>Enregistrement</option>
                    </select>
                </div>
                
                <div class=\"filter-group\">
                    <label class=\"filter-label\">
                        <i class=\"fas fa-tag\"></i>
                        État
                    </label>
                    <select name=\"etat\" class=\"filter-select\">
                        <option value=\"\">Tous les états</option>
                        <option value=\"planned\" {% if app.request.query.get('etat') == 'planned' %}selected{% endif %}>Planifié</option>
                        <option value=\"live\" {% if app.request.query.get('etat') == 'live' %}selected{% endif %}>En direct</option>
                        <option value=\"finished\" {% if app.request.query.get('etat') == 'finished' %}selected{% endif %}>Terminé</option>
                        <option value=\"cancelled\" {% if app.request.query.get('etat') == 'cancelled' %}selected{% endif %}>Annulé</option>
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
        {% if communications|length > 0 %}
            {% for communication in communications %}
                <article class=\"communication-card\">
                    <div class=\"card-header\">
                        <span class=\"type-badge {{ communication.type|default('record') }}\">
                            {% if communication.type == 'live' %}
                                Live
                            {% else %}
                                Record
                            {% endif %}
                        </span>
                        
                        <span class=\"status-badge {{ communication.etat|default('planned') }}\">
                            {% if communication.etat == 'live' %}
                                En direct
                            {% elseif communication.etat == 'finished' or communication.etat == 'termine' %}
                                Terminé
                            {% elseif communication.etat == 'cancelled' or communication.etat == 'annule' %}
                                Annulé
                            {% elseif communication.etat == 'planned' or communication.etat == 'programmee' %}
                                Planifié
                            {% else %}
                                {{ communication.etat|default('Planifié') }}
                            {% endif %}
                        </span>
                    </div>
                    
                    <div class=\"card-content\">
                        <h3 class=\"card-title\">
                            {% if communication.descriptionDetaillee %}
                                {{ communication.descriptionDetaillee|slice(0, 60) }}
                                {% if communication.descriptionDetaillee|length > 60 %}...{% endif %}
                            {% else %}
                                Communication #{{ communication.id }}
                            {% endif %}
                        </h3>
                        
                        <div class=\"card-details\">
                            <div class=\"detail-item\">
                                <i class=\"far fa-calendar\"></i>
                                <span>
                                    {% if communication.dateHeure %}
                                        {{ communication.dateHeure|date('d/m/Y H:i') }}
                                    {% else %}
                                        Date non définie
                                    {% endif %}
                                </span>
                            </div>
                            
                            {% if communication.duree %}
                            <div class=\"detail-item\">
                                <i class=\"far fa-clock\"></i>
                                <span>{{ communication.duree }} minutes</span>
                            </div>
                            {% endif %}
                            
                            {% if communication.publication %}
                            <div class=\"detail-item\">
                                <i class=\"fas fa-link\"></i>
                                <span>Liée à une publication</span>
                            </div>
                            {% endif %}
                        </div>
                    </div>
                    
                    <div class=\"card-footer\">
                        <a href=\"{{ path('forum_communication_show', {'id': communication.id}) }}\" 
                           class=\"btn-view\">
                            <i class=\"fas fa-eye\"></i> Voir
                        </a>
                        
                        {% if communication.etat == 'live' and communication.lien %}
                            <a href=\"{{ path('forum_communication_join', {'id': communication.id}) }}\" 
                               class=\"btn-join\">
                                <i class=\"fas fa-video\"></i> Rejoindre
                            </a>
                        {% endif %}
                    </div>
                </article>
            {% endfor %}
        {% else %}
            <div class=\"empty-state\">
                <div class=\"empty-state-icon\">📢</div>
                <h3>Aucune communication pour le moment</h3>
                <p class=\"mb-0\">Les communications apparaîtront ici lorsqu'elles seront créées.</p>
                {% if app.user and app.user.type in ['enseignant', 'admin'] %}
                <div class=\"mt-3\">
                    <a href=\"{{ path('forum_communication_new') }}\" class=\"btn btn-success\">
                        <i class=\"fas fa-plus\"></i> Créer la première communication
                    </a>
                </div>
                {% endif %}
            </div>
        {% endif %}
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
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

    // Pre-fill form values from URL (fallback for when JavaScript is disabled)
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
});
</script>
{% endblock %}", "front/communication_index.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\front\\communication_index.html.twig");
    }
}
