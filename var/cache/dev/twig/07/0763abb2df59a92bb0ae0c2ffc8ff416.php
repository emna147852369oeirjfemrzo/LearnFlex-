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

/* back/Publication/show.html.twig */
class __TwigTemplate_1502ccefb60c099b79d4e49f5f18a5e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/Publication/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/Publication/show.html.twig"));

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

        yield "Publication #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/dashboard.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
<style>
    /* Supprimez tous les anciens styles CSS et remplacez-les par ceux-ci */
    .dashboard-content {
        padding: 30px;
    }

    .detail-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        overflow: hidden;
    }
    
    .detail-header {
        background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
        color: white;
        padding: 1.5rem;
    }
    
    .detail-body {
        padding: 2rem;
    }
    
    .info-card {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 1rem;
        border: 1px solid #e9ecef;
    }
    
    .description-box {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 1.5rem;
        border: 1px solid #e9ecef;
    }
    
    .stats-card {
        text-align: center;
        padding: 1rem;
        border-radius: 8px;
        background: white;
        border: 1px solid #e9ecef;
    }
    
    /* SIDEBAR BLEU COMME COMMUNICATION */
    .sidebar {
        background: #1e40af !important;
        background: linear-gradient(180deg, #1e40af 0%, #1e3a8a 100%) !important;
    }
    
    .sidebar-menu li a {
        color: white !important;
    }
    
    .sidebar-menu li.active a {
        background: rgba(255, 255, 255, 0.15) !important;
        border-left: 3px solid #60a5fa !important;
    }
    
    .sidebar-menu li a:hover {
        background: rgba(255, 255, 255, 0.1) !important;
    }
    
    .sidebar-header .logo {
        color: white !important;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
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

        // line 80
        yield "<div class=\"dashboard\">
    <!-- Sidebar comme communication -->
    <aside class=\"sidebar\">
        <div class=\"sidebar-header\">
            <div class=\"logo\">
                <img src=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo1.png"), "html", null, true);
        yield "\" alt=\"Learnflex+ Logo\" class=\"nav-logo\">
                <span>LearnFlex</span><span class=\"highlight\">+</span>
            </div>
            <button class=\"sidebar-toggle\">
                <i class=\"fas fa-bars\"></i>
            </button>
        </div>
        
        <div class=\"sidebar-content\">
            <nav class=\"sidebar-menu\">
                <ul>
                    <li class=\"";
        // line 96
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "request", [], "any", false, false, false, 96), "attributes", [], "any", false, false, false, 96), "get", ["_route"], "method", false, false, false, 96) == "app_back")) ? ("active") : (""));
        yield "\">
                        <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back");
        yield "\">
                            <i class=\"fas fa-tachometer-alt\"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-users\"></i>
                            <span>Utilisateurs</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-book-open\"></i>
                            <span>Contenu pédagogique</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-graduation-cap\"></i>
                            <span>Evaluation</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-question-circle\"></i>
                            <span>Questionnaire</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-directions\"></i>
                            <span>Orientation</span>
                        </a>
                    </li>
                    
                    ";
        // line 134
        yield "                    ";
        $context["current_route"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "request", [], "any", false, false, false, 134), "attributes", [], "any", false, false, false, 134), "get", ["_route"], "method", false, false, false, 134);
        // line 135
        yield "                    ";
        $context["is_in_forum"] = ((is_string($_v0 =         // line 136
(isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 136, $this->source); })())) && is_string($_v1 = "back_publication") && str_starts_with($_v0, $_v1)) || (is_string($_v2 =         // line 137
(isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 137, $this->source); })())) && is_string($_v3 = "back_communication") && str_starts_with($_v2, $_v3)));
        // line 139
        yield "                    
                    <li class=\"has-submenu ";
        // line 140
        if ((($tmp = (isset($context["is_in_forum"]) || array_key_exists("is_in_forum", $context) ? $context["is_in_forum"] : (function () { throw new RuntimeError('Variable "is_in_forum" does not exist.', 140, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "open active";
        }
        yield "\">
                        <a href=\"#\" class=\"submenu-toggle\">
                            <i class=\"fas fa-comments\"></i>
                            <span>Forum</span>
                            <i class=\"fas fa-chevron-right submenu-arrow\"></i>
                        </a>
                        <ul class=\"submenu ";
        // line 146
        if ((($tmp = (isset($context["is_in_forum"]) || array_key_exists("is_in_forum", $context) ? $context["is_in_forum"] : (function () { throw new RuntimeError('Variable "is_in_forum" does not exist.', 146, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "show";
        }
        yield "\">
                            <li class=\"";
        // line 147
        yield (((is_string($_v4 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 147, $this->source); })())) && is_string($_v5 = "back_publication") && str_starts_with($_v4, $_v5))) ? ("active") : (""));
        yield "\">
                                <a href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index");
        yield "\">
                                    <i class=\"fas fa-bullhorn\"></i>
                                    <span>Publication</span>
                                </a>
                            </li>
                            <li class=\"";
        // line 153
        yield (((is_string($_v6 = (isset($context["current_route"]) || array_key_exists("current_route", $context) ? $context["current_route"] : (function () { throw new RuntimeError('Variable "current_route" does not exist.', 153, $this->source); })())) && is_string($_v7 = "back_communication") && str_starts_with($_v6, $_v7))) ? ("active") : (""));
        yield "\">
                                <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_index");
        yield "\">
                                    <i class=\"fas fa-video\"></i>
                                    <span>Communication</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        
        <div class=\"sidebar-footer\">
            <a href=\"#\" class=\"user-profile\">
                <img src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/placeholder-admin.png"), "html", null, true);
        yield "\" alt=\"Admin\" class=\"user-img\">
                <div class=\"user-info\">
                    <h4>Admin User</h4>
                    <p>Administrateur</p>
                </div>
            </a>
            <a href=\"#\" class=\"logout\">
                <i class=\"fas fa-sign-out-alt\"></i>
                <span>Déconnexion</span>
            </a>
        </div>
    </aside>
    
    <!-- Main Content -->
    <main class=\"main-content\">
        <header class=\"dashboard-header\">
            <div class=\"header-left\">
                <h1>Détails de la Publication</h1>
                <p>Informations complètes sur la publication</p>
            </div>
            <div class=\"header-right\">
                <div class=\"search-bar\">
                    <input type=\"text\" placeholder=\"Rechercher...\">
                    <button><i class=\"fas fa-search\"></i></button>
                </div>
                <button class=\"notification-btn\">
                    <i class=\"fas fa-bell\"></i>
                    <span class=\"badge\">3</span>
                </button>
            </div>
        </header>
        
        <div class=\"dashboard-content\">
            <div class=\"detail-card\">
                <!-- Header -->
                <div class=\"detail-header\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h1 class=\"h3 mb-2\">";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 205, $this->source); })()), "titre", [], "any", false, false, false, 205), "html", null, true);
        yield "</h1>
                            <p class=\"mb-0\">Publication #";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 206, $this->source); })()), "id", [], "any", false, false, false, 206), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"d-flex gap-2\">
                            <a href=\"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 209, $this->source); })()), "id", [], "any", false, false, false, 209)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                            <a href=\"";
        // line 212
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index");
        yield "\" class=\"btn btn-outline-secondary\">
                                <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Body -->
                <div class=\"detail-body\">
                    <!-- Description -->
                    <div class=\"mb-4\">
                        <h3 class=\"h5 mb-3\">Description</h3>
                        <div class=\"description-box\">
                            ";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 225, $this->source); })()), "description", [], "any", false, false, false, 225), "html", null, true);
        yield "
                        </div>
                    </div>
                    
                    <!-- Informations -->
                    <div class=\"row mb-4\">
                        <div class=\"col-md-3 mb-3\">
                            <div class=\"info-card h-100\">
                                <div class=\"text-muted small mb-2\">ID</div>
                                <div class=\"fw-bold\">#";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 234, $this->source); })()), "id", [], "any", false, false, false, 234), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-3 mb-3\">
                            <div class=\"info-card h-100\">
                                <div class=\"text-muted small mb-2\">Catégorie</div>
                                <div class=\"fw-bold\">
                                    ";
        // line 241
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 241, $this->source); })()), "categorie", [], "any", false, false, false, 241) == "cours")) {
            // line 242
            yield "                                        <span class=\"badge bg-primary\">Cours</span>
                                    ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 243
(isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 243, $this->source); })()), "categorie", [], "any", false, false, false, 243) == "question") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 243, $this->source); })()), "categorie", [], "any", false, false, false, 243) == "question_examen"))) {
            // line 244
            yield "                                        <span class=\"badge bg-danger\">Question</span>
                                    ";
        } else {
            // line 246
            yield "                                        <span class=\"badge bg-success\">Discussion</span>
                                    ";
        }
        // line 248
        yield "                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3 mb-3\">
                            <div class=\"info-card h-100\">
                                <div class=\"text-muted small mb-2\">Date de création</div>
                                <div class=\"fw-bold\">";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 254, $this->source); })()), "dateCreation", [], "any", false, false, false, 254), "d/m/Y"), "html", null, true);
        yield "</div>
                                <small class=\"text-muted\">";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 255, $this->source); })()), "dateCreation", [], "any", false, false, false, 255), "H:i"), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                        <div class=\"col-md-3 mb-3\">
                            <div class=\"info-card h-100\">
                                <div class=\"text-muted small mb-2\">Auteur</div>
                                <div class=\"fw-bold\">
                                    ";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["publication"] ?? null), "auteur", [], "any", true, true, false, 262)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 262, $this->source); })()), "auteur", [], "any", false, false, false, 262), "Anonyme")) : ("Anonyme")), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Statistiques -->
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6 mb-3\">
                            <div class=\"stats-card\">
                                <i class=\"fas fa-eye text-primary fa-2x mb-2\"></i>
                                <div class=\"fs-3 fw-bold\">";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 273, $this->source); })()), "nombreVues", [], "any", false, false, false, 273), "html", null, true);
        yield "</div>
                                <div class=\"text-muted\">Vues</div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <div class=\"stats-card\">
                                <i class=\"fas fa-heart text-danger fa-2x mb-2\"></i>
                                <div class=\"fs-3 fw-bold\">";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 280, $this->source); })()), "nombreLikes", [], "any", false, false, false, 280), "html", null, true);
        yield "</div>
                                <div class=\"text-muted\">Likes</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Actions -->
                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"";
        // line 288
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-list\"></i> Retour à la liste
                        </a>
                        <div class=\"d-flex gap-2\">
                            <a href=\"";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 292, $this->source); })()), "id", [], "any", false, false, false, 292)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                            <form method=\"post\" action=\"";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 295, $this->source); })()), "id", [], "any", false, false, false, 295)]), "html", null, true);
        yield "\" 
                                  onsubmit=\"return confirm('Supprimer cette publication ?');\" class=\"d-inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 297, $this->source); })()), "id", [], "any", false, false, false, 297))), "html", null, true);
        yield "\">
                                <button type=\"submit\" class=\"btn btn-danger\">
                                    <i class=\"fas fa-trash\"></i> Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

";
        // line 310
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

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

        // line 311
        yield "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');

    if(sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
        });
    }
    
    // Gestion du sous-menu
    const submenuToggle = document.querySelector('.submenu-toggle');
    if(submenuToggle) {
        submenuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            const parent = this.closest('.has-submenu');
            parent.classList.toggle('open');
            
            const submenu = parent.querySelector('.submenu');
            if(submenu.classList.contains('show')) {
                submenu.classList.remove('show');
                submenu.style.maxHeight = '0';
            } else {
                submenu.classList.add('show');
                submenu.style.maxHeight = submenu.scrollHeight + 'px';
            }
        });
    }
    
    // Ouvrir automatiquement le sous-menu Forum si on est dans publication
    if(window.location.pathname.includes('/back/publication')) {
        const forumMenu = document.querySelector('.has-submenu');
        if(forumMenu) {
            forumMenu.classList.add('open', 'active');
            const submenu = forumMenu.querySelector('.submenu');
            if(submenu) {
                submenu.classList.add('show');
                submenu.style.maxHeight = '200px';
                submenu.style.display = 'block';
            }
        }
    }
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
        return "back/Publication/show.html.twig";
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
        return array (  551 => 311,  528 => 310,  512 => 297,  507 => 295,  501 => 292,  494 => 288,  483 => 280,  473 => 273,  459 => 262,  449 => 255,  445 => 254,  437 => 248,  433 => 246,  429 => 244,  427 => 243,  424 => 242,  422 => 241,  412 => 234,  400 => 225,  384 => 212,  378 => 209,  372 => 206,  368 => 205,  327 => 167,  311 => 154,  307 => 153,  299 => 148,  295 => 147,  289 => 146,  278 => 140,  275 => 139,  273 => 137,  272 => 136,  270 => 135,  267 => 134,  228 => 97,  224 => 96,  210 => 85,  203 => 80,  190 => 79,  108 => 7,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Publication #{{ publication.id }}{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/styles.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/dashboard.css') }}\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
<style>
    /* Supprimez tous les anciens styles CSS et remplacez-les par ceux-ci */
    .dashboard-content {
        padding: 30px;
    }

    .detail-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        overflow: hidden;
    }
    
    .detail-header {
        background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
        color: white;
        padding: 1.5rem;
    }
    
    .detail-body {
        padding: 2rem;
    }
    
    .info-card {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 1rem;
        border: 1px solid #e9ecef;
    }
    
    .description-box {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 1.5rem;
        border: 1px solid #e9ecef;
    }
    
    .stats-card {
        text-align: center;
        padding: 1rem;
        border-radius: 8px;
        background: white;
        border: 1px solid #e9ecef;
    }
    
    /* SIDEBAR BLEU COMME COMMUNICATION */
    .sidebar {
        background: #1e40af !important;
        background: linear-gradient(180deg, #1e40af 0%, #1e3a8a 100%) !important;
    }
    
    .sidebar-menu li a {
        color: white !important;
    }
    
    .sidebar-menu li.active a {
        background: rgba(255, 255, 255, 0.15) !important;
        border-left: 3px solid #60a5fa !important;
    }
    
    .sidebar-menu li a:hover {
        background: rgba(255, 255, 255, 0.1) !important;
    }
    
    .sidebar-header .logo {
        color: white !important;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"dashboard\">
    <!-- Sidebar comme communication -->
    <aside class=\"sidebar\">
        <div class=\"sidebar-header\">
            <div class=\"logo\">
                <img src=\"{{ asset('assets/images/logo1.png') }}\" alt=\"Learnflex+ Logo\" class=\"nav-logo\">
                <span>LearnFlex</span><span class=\"highlight\">+</span>
            </div>
            <button class=\"sidebar-toggle\">
                <i class=\"fas fa-bars\"></i>
            </button>
        </div>
        
        <div class=\"sidebar-content\">
            <nav class=\"sidebar-menu\">
                <ul>
                    <li class=\"{{ app.request.attributes.get('_route') == 'app_back' ? 'active' : '' }}\">
                        <a href=\"{{ path('app_back') }}\">
                            <i class=\"fas fa-tachometer-alt\"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-users\"></i>
                            <span>Utilisateurs</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-book-open\"></i>
                            <span>Contenu pédagogique</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-graduation-cap\"></i>
                            <span>Evaluation</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-question-circle\"></i>
                            <span>Questionnaire</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-directions\"></i>
                            <span>Orientation</span>
                        </a>
                    </li>
                    
                    {# MENU FORUM AVEC SOUS-MENU #}
                    {% set current_route = app.request.attributes.get('_route') %}
                    {% set is_in_forum = 
                        current_route starts with 'back_publication' or 
                        current_route starts with 'back_communication' 
                    %}
                    
                    <li class=\"has-submenu {% if is_in_forum %}open active{% endif %}\">
                        <a href=\"#\" class=\"submenu-toggle\">
                            <i class=\"fas fa-comments\"></i>
                            <span>Forum</span>
                            <i class=\"fas fa-chevron-right submenu-arrow\"></i>
                        </a>
                        <ul class=\"submenu {% if is_in_forum %}show{% endif %}\">
                            <li class=\"{{ current_route starts with 'back_publication' ? 'active' : '' }}\">
                                <a href=\"{{ path('back_publication_index') }}\">
                                    <i class=\"fas fa-bullhorn\"></i>
                                    <span>Publication</span>
                                </a>
                            </li>
                            <li class=\"{{ current_route starts with 'back_communication' ? 'active' : '' }}\">
                                <a href=\"{{ path('back_communication_index') }}\">
                                    <i class=\"fas fa-video\"></i>
                                    <span>Communication</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        
        <div class=\"sidebar-footer\">
            <a href=\"#\" class=\"user-profile\">
                <img src=\"{{ asset('assets/images/placeholder-admin.png') }}\" alt=\"Admin\" class=\"user-img\">
                <div class=\"user-info\">
                    <h4>Admin User</h4>
                    <p>Administrateur</p>
                </div>
            </a>
            <a href=\"#\" class=\"logout\">
                <i class=\"fas fa-sign-out-alt\"></i>
                <span>Déconnexion</span>
            </a>
        </div>
    </aside>
    
    <!-- Main Content -->
    <main class=\"main-content\">
        <header class=\"dashboard-header\">
            <div class=\"header-left\">
                <h1>Détails de la Publication</h1>
                <p>Informations complètes sur la publication</p>
            </div>
            <div class=\"header-right\">
                <div class=\"search-bar\">
                    <input type=\"text\" placeholder=\"Rechercher...\">
                    <button><i class=\"fas fa-search\"></i></button>
                </div>
                <button class=\"notification-btn\">
                    <i class=\"fas fa-bell\"></i>
                    <span class=\"badge\">3</span>
                </button>
            </div>
        </header>
        
        <div class=\"dashboard-content\">
            <div class=\"detail-card\">
                <!-- Header -->
                <div class=\"detail-header\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h1 class=\"h3 mb-2\">{{ publication.titre }}</h1>
                            <p class=\"mb-0\">Publication #{{ publication.id }}</p>
                        </div>
                        <div class=\"d-flex gap-2\">
                            <a href=\"{{ path('back_publication_edit', {id: publication.id}) }}\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                            <a href=\"{{ path('back_publication_index') }}\" class=\"btn btn-outline-secondary\">
                                <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Body -->
                <div class=\"detail-body\">
                    <!-- Description -->
                    <div class=\"mb-4\">
                        <h3 class=\"h5 mb-3\">Description</h3>
                        <div class=\"description-box\">
                            {{ publication.description }}
                        </div>
                    </div>
                    
                    <!-- Informations -->
                    <div class=\"row mb-4\">
                        <div class=\"col-md-3 mb-3\">
                            <div class=\"info-card h-100\">
                                <div class=\"text-muted small mb-2\">ID</div>
                                <div class=\"fw-bold\">#{{ publication.id }}</div>
                            </div>
                        </div>
                        <div class=\"col-md-3 mb-3\">
                            <div class=\"info-card h-100\">
                                <div class=\"text-muted small mb-2\">Catégorie</div>
                                <div class=\"fw-bold\">
                                    {% if publication.categorie == 'cours' %}
                                        <span class=\"badge bg-primary\">Cours</span>
                                    {% elseif publication.categorie == 'question' or publication.categorie == 'question_examen' %}
                                        <span class=\"badge bg-danger\">Question</span>
                                    {% else %}
                                        <span class=\"badge bg-success\">Discussion</span>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3 mb-3\">
                            <div class=\"info-card h-100\">
                                <div class=\"text-muted small mb-2\">Date de création</div>
                                <div class=\"fw-bold\">{{ publication.dateCreation|date('d/m/Y') }}</div>
                                <small class=\"text-muted\">{{ publication.dateCreation|date('H:i') }}</small>
                            </div>
                        </div>
                        <div class=\"col-md-3 mb-3\">
                            <div class=\"info-card h-100\">
                                <div class=\"text-muted small mb-2\">Auteur</div>
                                <div class=\"fw-bold\">
                                    {{ publication.auteur|default('Anonyme') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Statistiques -->
                    <div class=\"row mb-4\">
                        <div class=\"col-md-6 mb-3\">
                            <div class=\"stats-card\">
                                <i class=\"fas fa-eye text-primary fa-2x mb-2\"></i>
                                <div class=\"fs-3 fw-bold\">{{ publication.nombreVues }}</div>
                                <div class=\"text-muted\">Vues</div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-3\">
                            <div class=\"stats-card\">
                                <i class=\"fas fa-heart text-danger fa-2x mb-2\"></i>
                                <div class=\"fs-3 fw-bold\">{{ publication.nombreLikes }}</div>
                                <div class=\"text-muted\">Likes</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Actions -->
                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"{{ path('back_publication_index') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-list\"></i> Retour à la liste
                        </a>
                        <div class=\"d-flex gap-2\">
                            <a href=\"{{ path('back_publication_edit', {id: publication.id}) }}\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                            <form method=\"post\" action=\"{{ path('back_publication_delete', {id: publication.id}) }}\" 
                                  onsubmit=\"return confirm('Supprimer cette publication ?');\" class=\"d-inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ publication.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger\">
                                    <i class=\"fas fa-trash\"></i> Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

{% block javascripts %}
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');

    if(sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
        });
    }
    
    // Gestion du sous-menu
    const submenuToggle = document.querySelector('.submenu-toggle');
    if(submenuToggle) {
        submenuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            const parent = this.closest('.has-submenu');
            parent.classList.toggle('open');
            
            const submenu = parent.querySelector('.submenu');
            if(submenu.classList.contains('show')) {
                submenu.classList.remove('show');
                submenu.style.maxHeight = '0';
            } else {
                submenu.classList.add('show');
                submenu.style.maxHeight = submenu.scrollHeight + 'px';
            }
        });
    }
    
    // Ouvrir automatiquement le sous-menu Forum si on est dans publication
    if(window.location.pathname.includes('/back/publication')) {
        const forumMenu = document.querySelector('.has-submenu');
        if(forumMenu) {
            forumMenu.classList.add('open', 'active');
            const submenu = forumMenu.querySelector('.submenu');
            if(submenu) {
                submenu.classList.add('show');
                submenu.style.maxHeight = '200px';
                submenu.style.display = 'block';
            }
        }
    }
});
</script>
{% endblock %}
{% endblock %}", "back/Publication/show.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\Publication\\show.html.twig");
    }
}
