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

/* back/communication/index.html.twig */
class __TwigTemplate_f1d7b767d8db1f038f68a207f714294a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/communication/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/communication/index.html.twig"));

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

        yield "Gestion des Communications";
        
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
<link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/dashboard.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">

<style>
/* Styles spécifiques pour la page communication */
.dashboard-content {
    padding: 30px;
}

.table-container {
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    overflow: hidden;
}

.table-header {
    padding: 20px;
    border-bottom: 1px solid #e9ecef;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.table-responsive {
    overflow-x: auto;
}

.table th {
    background: #f8f9fa;
    border-bottom: 2px solid #dee2e6;
    font-weight: 600;
    color: #495057;
    padding: 12px 15px;
}

.table td {
    padding: 12px 15px;
    vertical-align: middle;
}

.badge {
    font-size: 12px;
    font-weight: 500;
    padding: 4px 8px;
}

.badge-success { background: #d4edda; color: #155724; }
.badge-warning { background: #fff3cd; color: #856404; }
.badge-danger { background: #f8d7da; color: #721c24; }
.badge-info { background: #d1ecf1; color: #0c5460; }
.badge-primary { background: #d1e7ff; color: #0a58ca; }
.badge-chat { 
    background: #d1ecf1; 
    color: #0c5460; 
    border: 1px solid #bee5eb;
}

.actions {
    display: flex;
    gap: 8px;
}

.action-btn {
    width: 32px;
    height: 32px;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
    transition: all 0.2s;
}

.action-btn:hover {
    transform: translateY(-1px);
}

.action-btn.view { background: #e7f5ff; color: #0d6efd; }
.action-btn.edit { background: #fff3bf; color: #f59f00; }
.action-btn.delete { background: #ffe3e3; color: #fa5252; }

.filter-badge a {
    text-decoration: none;
    opacity: 0.8;
}
.filter-badge a:hover {
    opacity: 1;
}

.pagination .page-link {
    color: #2c3e50;
}
.pagination .page-item.active .page-link {
    background-color: #2c3e50;
    border-color: #2c3e50;
    color: white;
}

/* Sous-menu Forum (identique au dashboard) */
.sidebar-menu .has-submenu {
    position: relative;
}

.sidebar-menu .has-submenu > a {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.submenu-arrow {
    font-size: 0.7rem;
    transition: transform 0.3s ease;
    margin-left: auto;
}

.sidebar-menu .has-submenu:hover .submenu-arrow {
    transform: rotate(90deg);
}

.sidebar-menu .submenu {
    display: none;
    list-style: none;
    padding: 0;
    margin: 0;
    background: rgba(0, 0, 0, 0.2);
}

.sidebar-menu .has-submenu:hover .submenu {
    display: block;
}

.sidebar-menu .submenu li {
    padding: 0;
}

.sidebar-menu .submenu li a {
    padding: 12px 20px 12px 55px;
    display: flex;
    align-items: center;
    color: rgba(255, 255, 255, 0.7);
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 0.9rem;
}

.sidebar-menu .submenu li a:hover {
    background: rgba(255, 255, 255, 0.15);
    color: white;
    padding-left: 60px;
}

.sidebar-menu .submenu li a i {
    margin-right: 10px;
    font-size: 0.85rem;
}

/* Style pour les messages chat */
.chat-message {
    color: #0c5460;
    background: #f8f9fa;
    padding: 5px 10px;
    border-radius: 5px;
    border-left: 3px solid #0dcaf0;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 176
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

        // line 177
        yield "<div class=\"dashboard\">

    ";
        // line 180
        yield "    ";
        yield from $this->load("back/sidebar.html.twig", 180)->unwrap()->yield($context);
        // line 181
        yield "
    <main class=\"main-content\">
        <header class=\"dashboard-header\">
            <div class=\"header-left\">
                <h1>Gestion des Communications</h1>
                <p>Gérez les communications et réclamations des étudiants</p>
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
            <!-- Header -->
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <div>
                    <h2 class=\"h4 mb-2\">Communications</h2>
                    <p class=\"text-muted mb-0\">Liste des communications disponibles</p>
                </div>
                <a href=\"";
        // line 207
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_new");
        yield "\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-2\"></i>Nouvelle communication
                </a>
            </div>
            
            <!-- Formulaire de recherche -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-search me-2\"></i>Recherche
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 220
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 220, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3"]]);
        yield "
                        <div class=\"col-md-4\">
                            ";
        // line 222
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 222, $this->source); })()), "keyword", [], "any", false, false, false, 222), 'row', ["label" => false, "attr" => ["placeholder" => "Rechercher par description, lien...", "class" => "form-control"]]);
        // line 228
        yield "
                        </div>
                        <div class=\"col-md-2\">
                            ";
        // line 231
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 231, $this->source); })()), "type", [], "any", false, false, false, 231), 'row', ["label" => false, "attr" => ["class" => "form-select"]]);
        // line 234
        yield "
                        </div>
                        <div class=\"col-md-2\">
                            ";
        // line 237
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 237, $this->source); })()), "etat", [], "any", false, false, false, 237), 'row', ["label" => false, "attr" => ["class" => "form-select"]]);
        // line 240
        yield "
                        </div>
                        <div class=\"col-md-2\">
                            ";
        // line 243
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 243, $this->source); })()), "dateFrom", [], "any", false, false, false, 243), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "Date début"]]);
        // line 249
        yield "
                        </div>
                        <div class=\"col-md-2\">
                            ";
        // line 252
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 252, $this->source); })()), "dateTo", [], "any", false, false, false, 252), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "Date fin"]]);
        // line 258
        yield "
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"d-flex gap-2\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-search me-1\"></i>Rechercher
                                </button>
                                <button type=\"reset\" class=\"btn btn-secondary\">
                                    <i class=\"fas fa-redo me-1\"></i>Réinitialiser
                                </button>
                                ";
        // line 268
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["searchCriteria"]) || array_key_exists("searchCriteria", $context) ? $context["searchCriteria"] : (function () { throw new RuntimeError('Variable "searchCriteria" does not exist.', 268, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 269
            yield "                                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_index");
            yield "\" class=\"btn btn-outline-danger\">
                                        <i class=\"fas fa-times me-1\"></i>Effacer tous les filtres
                                    </a>
                                ";
        }
        // line 273
        yield "                            </div>
                        </div>
                    ";
        // line 275
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 275, $this->source); })()), 'form_end');
        yield "
                    
                    <!-- Affichage des filtres actifs -->
                    ";
        // line 278
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["searchCriteria"]) || array_key_exists("searchCriteria", $context) ? $context["searchCriteria"] : (function () { throw new RuntimeError('Variable "searchCriteria" does not exist.', 278, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 279
            yield "                    <div class=\"mt-3\">
                        <small class=\"text-muted\">Filtres actifs :</small>
                        <div class=\"d-flex flex-wrap gap-2 mt-1\">
                            ";
            // line 282
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["searchCriteria"]) || array_key_exists("searchCriteria", $context) ? $context["searchCriteria"] : (function () { throw new RuntimeError('Variable "searchCriteria" does not exist.', 282, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 283
                yield "                                ";
                if (( !Twig\Extension\CoreExtension::testEmpty($context["value"]) && !CoreExtension::inFilter($context["key"], ["rechercher", "reset"]))) {
                    // line 284
                    yield "                                <span class=\"badge bg-info filter-badge\">
                                    ";
                    // line 285
                    if (($context["key"] == "keyword")) {
                        yield "Mot-clé: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                        yield "
                                    ";
                    } elseif ((                    // line 286
$context["key"] == "type")) {
                        // line 287
                        yield "                                        Type: 
                                        ";
                        // line 288
                        if (($context["value"] == "live")) {
                            yield "En direct
                                        ";
                        } elseif ((                        // line 289
$context["value"] == "chat")) {
                            yield "Chat
                                        ";
                        } else {
                            // line 290
                            yield "Enregistré
                                        ";
                        }
                        // line 292
                        yield "                                    ";
                    } elseif (($context["key"] == "etat")) {
                        yield "État: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["value"], ["_" => " "])), "html", null, true);
                        yield "
                                    ";
                    } elseif ((                    // line 293
$context["key"] == "dateFrom")) {
                        yield "Du: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($context["value"], "d/m/Y"), "html", null, true);
                        yield "
                                    ";
                    } elseif ((                    // line 294
$context["key"] == "dateTo")) {
                        yield "Au: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($context["value"], "d/m/Y"), "html", null, true);
                        yield "
                                    ";
                    } else {
                        // line 295
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                        yield ": ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                        yield "
                                    ";
                    }
                    // line 297
                    yield "                                    <a href=\"#\" class=\"text-white ms-2\" onclick=\"removeFilter('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "')\">
                                        <i class=\"fas fa-times\"></i>
                                    </a>
                                </span>
                                ";
                }
                // line 302
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            yield "                        </div>
                    </div>
                    ";
        }
        // line 306
        yield "                </div>
            </div>
            
            <!-- Tableau -->
            <div class=\"table-container mb-4\">
                <div class=\"table-header\">
                    <h5 class=\"mb-0\">Liste des communications</h5>
                    <div class=\"d-flex gap-2\">
                        <a href=\"";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_export_pdf", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 314, $this->source); })()), "request", [], "any", false, false, false, 314), "query", [], "any", false, false, false, 314), "all", [], "any", false, false, false, 314)), "html", null, true);
        yield "\" class=\"btn btn-outline-danger btn-sm\">
                            <i class=\"fas fa-file-pdf me-1\"></i>Exporter PDF
                        </a>
                        <a href=\"";
        // line 317
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_statistics");
        yield "\" class=\"btn btn-outline-info btn-sm\">
                            <i class=\"fas fa-chart-bar me-1\"></i>Statistiques
                        </a>
                    </div>
                </div>
                
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th width=\"60\">ID</th>
                                <th>Type</th>
                                <th>Description</th>
                                <th width=\"150\">Date/Heure</th>
                                <th width=\"100\">État</th>
                                <th width=\"100\" class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 336
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["communications"]) || array_key_exists("communications", $context) ? $context["communications"] : (function () { throw new RuntimeError('Variable "communications" does not exist.', 336, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["communication"]) {
            // line 337
            yield "                            <tr>
                                <td class=\"fw-semibold\">#";
            // line 338
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "id", [], "any", false, false, false, 338), "html", null, true);
            yield "</td>
                                <td>
                                    <!-- CHANGEMENT ICI : Afficher correctement le type \"chat\" -->
                                    ";
            // line 341
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "type", [], "any", false, false, false, 341) == "live")) {
                // line 342
                yield "                                        <span class=\"badge badge-danger\">
                                            <i class=\"fas fa-broadcast-tower\"></i> En direct
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 345
$context["communication"], "type", [], "any", false, false, false, 345) == "chat")) {
                // line 346
                yield "                                        <span class=\"badge badge-chat\">
                                            <i class=\"fas fa-comments\"></i> Chat
                                        </span>
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 349
$context["communication"], "type", [], "any", false, false, false, 349) == "record")) {
                // line 350
                yield "                                        <span class=\"badge badge-warning\">
                                            <i class=\"fas fa-video\"></i> Enregistré
                                        </span>
                                    ";
            } else {
                // line 354
                yield "                                        <span class=\"badge badge-info\">
                                            ";
                // line 355
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "type", [], "any", true, true, false, 355)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "type", [], "any", false, false, false, 355), "Autre")) : ("Autre")), "html", null, true);
                yield "
                                        </span>
                                    ";
            }
            // line 358
            yield "                                </td>
                                <td>
                                    <!-- CHANGEMENT ICI : Mieux afficher les messages chat -->
                                    <a href=\"";
            // line 361
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "id", [], "any", false, false, false, 361)]), "html", null, true);
            yield "\" class=\"text-decoration-none\">
                                        ";
            // line 362
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "type", [], "any", false, false, false, 362) == "chat")) {
                // line 363
                yield "                                            <div class=\"chat-message\">
                                                <i class=\"fas fa-comment me-1\"></i>
                                                <strong>Message chat:</strong> 
                                                ";
                // line 366
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", true, true, false, 366)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", false, false, false, 366), "")) : ("")), 0, 60), "html", null, true);
                yield "
                                                ";
                // line 367
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", true, true, false, 367)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", false, false, false, 367), "")) : (""))) > 60)) ? ("...") : (""));
                yield "
                                            </div>
                                        ";
            } else {
                // line 370
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", true, true, false, 370)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", false, false, false, 370), "Sans titre")) : ("Sans titre")), 0, 50), "html", null, true);
                yield "
                                            ";
                // line 371
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", true, true, false, 371)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", false, false, false, 371), "")) : (""))) > 50)) ? ("...") : (""));
                yield "
                                        ";
            }
            // line 373
            yield "                                    </a>
                                    ";
            // line 374
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "lien", [], "any", false, false, false, 374)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 375
                yield "                                    <br>
                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-link\"></i> 
                                        ";
                // line 378
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "lien", [], "any", false, false, false, 378) == "chat_front")) {
                    // line 379
                    yield "                                            <span class=\"text-info\">Message du chat</span>
                                        ";
                } else {
                    // line 381
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "lien", [], "any", false, false, false, 381), 0, 30), "html", null, true);
                    yield "
                                            ";
                    // line 382
                    yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "lien", [], "any", false, false, false, 382)) > 30)) ? ("...") : (""));
                    yield "
                                        ";
                }
                // line 384
                yield "                                    </small>
                                    ";
            }
            // line 386
            yield "                                </td>
                                <td>
                                    ";
            // line 388
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "dateHeure", [], "any", false, false, false, 388)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 389
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "dateHeure", [], "any", false, false, false, 389), "d/m/Y"), "html", null, true);
                yield "<br>
                                        <small>";
                // line 390
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "dateHeure", [], "any", false, false, false, 390), "H:i:s"), "html", null, true);
                yield "</small>
                                    ";
            }
            // line 392
            yield "                                </td>
                                <td>
                                    <span class=\"badge 
                                        ";
            // line 395
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "etat", [], "any", false, false, false, 395) == "planifie")) {
                yield "badge-warning
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 396
$context["communication"], "etat", [], "any", false, false, false, 396) == "en_cours")) {
                yield "badge-success
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 397
$context["communication"], "etat", [], "any", false, false, false, 397) == "termine")) {
                yield "badge-info
                                        ";
            } else {
                // line 398
                yield "badge-danger";
            }
            yield "\">
                                        ";
            // line 399
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "etat", [], "any", false, false, false, 399), ["_" => " "])), "html", null, true);
            yield "
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"actions\">
                                        <a href=\"";
            // line 404
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "id", [], "any", false, false, false, 404)]), "html", null, true);
            yield "\" class=\"action-btn view\" title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
            // line 407
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "id", [], "any", false, false, false, 407)]), "html", null, true);
            yield "\" class=\"action-btn edit\" title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <form method=\"post\" action=\"";
            // line 410
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "id", [], "any", false, false, false, 410)]), "html", null, true);
            yield "\" 
                                              onsubmit=\"return confirm('Supprimer cette communication ?');\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 412
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "id", [], "any", false, false, false, 412))), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"action-btn delete\" title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 420
        if (!$context['_iterated']) {
            // line 421
            yield "                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5\">
                                    <div class=\"py-4\">
                                        <i class=\"fas fa-comments fa-3x text-muted mb-3\"></i>
                                        <h5 class=\"text-muted\">Aucune communication trouvée</h5>
                                        <p class=\"text-muted mb-0\">
                                            ";
            // line 427
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["searchCriteria"]) || array_key_exists("searchCriteria", $context) ? $context["searchCriteria"] : (function () { throw new RuntimeError('Variable "searchCriteria" does not exist.', 427, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 428
                yield "                                                Aucun résultat pour votre recherche. Essayez d'autres critères.
                                            ";
            } else {
                // line 430
                yield "                                                Commencez par créer une nouvelle communication
                                            ";
            }
            // line 432
            yield "                                        </p>
                                    </div>
                                </td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['communication'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 437
        yield "                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                ";
        // line 442
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["communications"]) || array_key_exists("communications", $context) ? $context["communications"] : (function () { throw new RuntimeError('Variable "communications" does not exist.', 442, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 442) > 0)) {
            // line 443
            yield "                <div class=\"p-3 border-top d-flex justify-content-between align-items-center\">
                    <div class=\"text-muted\">
                        Affichage de ";
            // line 445
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["communications"]) || array_key_exists("communications", $context) ? $context["communications"] : (function () { throw new RuntimeError('Variable "communications" does not exist.', 445, $this->source); })()), "getItemNumberPerPage", [], "any", false, false, false, 445) * (CoreExtension::getAttribute($this->env, $this->source, (isset($context["communications"]) || array_key_exists("communications", $context) ? $context["communications"] : (function () { throw new RuntimeError('Variable "communications" does not exist.', 445, $this->source); })()), "getCurrentPageNumber", [], "any", false, false, false, 445) - 1)) + 1), "html", null, true);
            yield " 
                        à ";
            // line 446
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min((CoreExtension::getAttribute($this->env, $this->source, (isset($context["communications"]) || array_key_exists("communications", $context) ? $context["communications"] : (function () { throw new RuntimeError('Variable "communications" does not exist.', 446, $this->source); })()), "getItemNumberPerPage", [], "any", false, false, false, 446) * CoreExtension::getAttribute($this->env, $this->source, (isset($context["communications"]) || array_key_exists("communications", $context) ? $context["communications"] : (function () { throw new RuntimeError('Variable "communications" does not exist.', 446, $this->source); })()), "getCurrentPageNumber", [], "any", false, false, false, 446)), CoreExtension::getAttribute($this->env, $this->source, (isset($context["communications"]) || array_key_exists("communications", $context) ? $context["communications"] : (function () { throw new RuntimeError('Variable "communications" does not exist.', 446, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 446)), "html", null, true);
            yield " 
                        sur ";
            // line 447
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communications"]) || array_key_exists("communications", $context) ? $context["communications"] : (function () { throw new RuntimeError('Variable "communications" does not exist.', 447, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 447), "html", null, true);
            yield " communication(s)
                    </div>
                    <div>
                        ";
            // line 450
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["communications"]) || array_key_exists("communications", $context) ? $context["communications"] : (function () { throw new RuntimeError('Variable "communications" does not exist.', 450, $this->source); })()));
            yield "
                    </div>
                </div>
                ";
        }
        // line 454
        yield "            </div>
        </div>
    </main>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 460
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

        // line 461
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
// Supprimer un filtre
function removeFilter(filterName) {
    const url = new URL(window.location.href);
    
    url.searchParams.delete('communication_search[' + filterName + ']');
    
    if (filterName === 'dateFrom' || filterName === 'dateTo') {
        url.searchParams.delete('communication_search[' + filterName + '][year]');
        url.searchParams.delete('communication_search[' + filterName + '][month]');
        url.searchParams.delete('communication_search[' + filterName + '][day]');
    }
    
    window.location.href = url.toString();
}

// Confirmation avant réinitialisation
document.querySelector('button[type=\"reset\"]')?.addEventListener('click', function(e) {
    if (!confirm('Voulez-vous vraiment réinitialiser tous les filtres ?')) {
        e.preventDefault();
    }
});

// Gestion de la sidebar
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
        return "back/communication/index.html.twig";
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
        return array (  825 => 461,  812 => 460,  797 => 454,  790 => 450,  784 => 447,  780 => 446,  776 => 445,  772 => 443,  770 => 442,  763 => 437,  753 => 432,  749 => 430,  745 => 428,  743 => 427,  735 => 421,  733 => 420,  720 => 412,  715 => 410,  709 => 407,  703 => 404,  695 => 399,  690 => 398,  685 => 397,  681 => 396,  677 => 395,  672 => 392,  667 => 390,  662 => 389,  660 => 388,  656 => 386,  652 => 384,  647 => 382,  642 => 381,  638 => 379,  636 => 378,  631 => 375,  629 => 374,  626 => 373,  621 => 371,  616 => 370,  610 => 367,  606 => 366,  601 => 363,  599 => 362,  595 => 361,  590 => 358,  584 => 355,  581 => 354,  575 => 350,  573 => 349,  568 => 346,  566 => 345,  561 => 342,  559 => 341,  553 => 338,  550 => 337,  545 => 336,  523 => 317,  517 => 314,  507 => 306,  502 => 303,  496 => 302,  487 => 297,  480 => 295,  473 => 294,  467 => 293,  460 => 292,  456 => 290,  451 => 289,  447 => 288,  444 => 287,  442 => 286,  436 => 285,  433 => 284,  430 => 283,  426 => 282,  421 => 279,  419 => 278,  413 => 275,  409 => 273,  401 => 269,  399 => 268,  387 => 258,  385 => 252,  380 => 249,  378 => 243,  373 => 240,  371 => 237,  366 => 234,  364 => 231,  359 => 228,  357 => 222,  352 => 220,  336 => 207,  308 => 181,  305 => 180,  301 => 177,  288 => 176,  110 => 8,  106 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des Communications{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/styles.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/dashboard.css') }}\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">

<style>
/* Styles spécifiques pour la page communication */
.dashboard-content {
    padding: 30px;
}

.table-container {
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    overflow: hidden;
}

.table-header {
    padding: 20px;
    border-bottom: 1px solid #e9ecef;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.table-responsive {
    overflow-x: auto;
}

.table th {
    background: #f8f9fa;
    border-bottom: 2px solid #dee2e6;
    font-weight: 600;
    color: #495057;
    padding: 12px 15px;
}

.table td {
    padding: 12px 15px;
    vertical-align: middle;
}

.badge {
    font-size: 12px;
    font-weight: 500;
    padding: 4px 8px;
}

.badge-success { background: #d4edda; color: #155724; }
.badge-warning { background: #fff3cd; color: #856404; }
.badge-danger { background: #f8d7da; color: #721c24; }
.badge-info { background: #d1ecf1; color: #0c5460; }
.badge-primary { background: #d1e7ff; color: #0a58ca; }
.badge-chat { 
    background: #d1ecf1; 
    color: #0c5460; 
    border: 1px solid #bee5eb;
}

.actions {
    display: flex;
    gap: 8px;
}

.action-btn {
    width: 32px;
    height: 32px;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
    transition: all 0.2s;
}

.action-btn:hover {
    transform: translateY(-1px);
}

.action-btn.view { background: #e7f5ff; color: #0d6efd; }
.action-btn.edit { background: #fff3bf; color: #f59f00; }
.action-btn.delete { background: #ffe3e3; color: #fa5252; }

.filter-badge a {
    text-decoration: none;
    opacity: 0.8;
}
.filter-badge a:hover {
    opacity: 1;
}

.pagination .page-link {
    color: #2c3e50;
}
.pagination .page-item.active .page-link {
    background-color: #2c3e50;
    border-color: #2c3e50;
    color: white;
}

/* Sous-menu Forum (identique au dashboard) */
.sidebar-menu .has-submenu {
    position: relative;
}

.sidebar-menu .has-submenu > a {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.submenu-arrow {
    font-size: 0.7rem;
    transition: transform 0.3s ease;
    margin-left: auto;
}

.sidebar-menu .has-submenu:hover .submenu-arrow {
    transform: rotate(90deg);
}

.sidebar-menu .submenu {
    display: none;
    list-style: none;
    padding: 0;
    margin: 0;
    background: rgba(0, 0, 0, 0.2);
}

.sidebar-menu .has-submenu:hover .submenu {
    display: block;
}

.sidebar-menu .submenu li {
    padding: 0;
}

.sidebar-menu .submenu li a {
    padding: 12px 20px 12px 55px;
    display: flex;
    align-items: center;
    color: rgba(255, 255, 255, 0.7);
    text-decoration: none;
    transition: all 0.3s ease;
    font-size: 0.9rem;
}

.sidebar-menu .submenu li a:hover {
    background: rgba(255, 255, 255, 0.15);
    color: white;
    padding-left: 60px;
}

.sidebar-menu .submenu li a i {
    margin-right: 10px;
    font-size: 0.85rem;
}

/* Style pour les messages chat */
.chat-message {
    color: #0c5460;
    background: #f8f9fa;
    padding: 5px 10px;
    border-radius: 5px;
    border-left: 3px solid #0dcaf0;
}
</style>
{% endblock %}

{% block body %}
<div class=\"dashboard\">

    {# Sidebar inclus depuis fichier séparé #}
    {% include 'back/sidebar.html.twig' %}

    <main class=\"main-content\">
        <header class=\"dashboard-header\">
            <div class=\"header-left\">
                <h1>Gestion des Communications</h1>
                <p>Gérez les communications et réclamations des étudiants</p>
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
            <!-- Header -->
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <div>
                    <h2 class=\"h4 mb-2\">Communications</h2>
                    <p class=\"text-muted mb-0\">Liste des communications disponibles</p>
                </div>
                <a href=\"{{ path('back_communication_new') }}\" class=\"btn btn-primary\">
                    <i class=\"fas fa-plus me-2\"></i>Nouvelle communication
                </a>
            </div>
            
            <!-- Formulaire de recherche -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-search me-2\"></i>Recherche
                    </h5>
                </div>
                <div class=\"card-body\">
                    {{ form_start(searchForm, {'attr': {'class': 'row g-3'}}) }}
                        <div class=\"col-md-4\">
                            {{ form_row(searchForm.keyword, {
                                'label': false,
                                'attr': {
                                    'placeholder': 'Rechercher par description, lien...',
                                    'class': 'form-control'
                                }
                            }) }}
                        </div>
                        <div class=\"col-md-2\">
                            {{ form_row(searchForm.type, {
                                'label': false,
                                'attr': {'class': 'form-select'}
                            }) }}
                        </div>
                        <div class=\"col-md-2\">
                            {{ form_row(searchForm.etat, {
                                'label': false,
                                'attr': {'class': 'form-select'}
                            }) }}
                        </div>
                        <div class=\"col-md-2\">
                            {{ form_row(searchForm.dateFrom, {
                                'label': false,
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Date début'
                                }
                            }) }}
                        </div>
                        <div class=\"col-md-2\">
                            {{ form_row(searchForm.dateTo, {
                                'label': false,
                                'attr': {
                                    'class': 'form-control',
                                    'placeholder': 'Date fin'
                                }
                            }) }}
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"d-flex gap-2\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-search me-1\"></i>Rechercher
                                </button>
                                <button type=\"reset\" class=\"btn btn-secondary\">
                                    <i class=\"fas fa-redo me-1\"></i>Réinitialiser
                                </button>
                                {% if searchCriteria is not empty %}
                                    <a href=\"{{ path('back_communication_index') }}\" class=\"btn btn-outline-danger\">
                                        <i class=\"fas fa-times me-1\"></i>Effacer tous les filtres
                                    </a>
                                {% endif %}
                            </div>
                        </div>
                    {{ form_end(searchForm) }}
                    
                    <!-- Affichage des filtres actifs -->
                    {% if searchCriteria is not empty %}
                    <div class=\"mt-3\">
                        <small class=\"text-muted\">Filtres actifs :</small>
                        <div class=\"d-flex flex-wrap gap-2 mt-1\">
                            {% for key, value in searchCriteria %}
                                {% if value is not empty and key not in ['rechercher', 'reset'] %}
                                <span class=\"badge bg-info filter-badge\">
                                    {% if key == 'keyword' %}Mot-clé: {{ value }}
                                    {% elseif key == 'type' %}
                                        Type: 
                                        {% if value == 'live' %}En direct
                                        {% elseif value == 'chat' %}Chat
                                        {% else %}Enregistré
                                        {% endif %}
                                    {% elseif key == 'etat' %}État: {{ value|replace({'_': ' '})|title }}
                                    {% elseif key == 'dateFrom' %}Du: {{ value|date('d/m/Y') }}
                                    {% elseif key == 'dateTo' %}Au: {{ value|date('d/m/Y') }}
                                    {% else %}{{ key }}: {{ value }}
                                    {% endif %}
                                    <a href=\"#\" class=\"text-white ms-2\" onclick=\"removeFilter('{{ key }}')\">
                                        <i class=\"fas fa-times\"></i>
                                    </a>
                                </span>
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div>
                    {% endif %}
                </div>
            </div>
            
            <!-- Tableau -->
            <div class=\"table-container mb-4\">
                <div class=\"table-header\">
                    <h5 class=\"mb-0\">Liste des communications</h5>
                    <div class=\"d-flex gap-2\">
                        <a href=\"{{ path('back_communication_export_pdf', app.request.query.all) }}\" class=\"btn btn-outline-danger btn-sm\">
                            <i class=\"fas fa-file-pdf me-1\"></i>Exporter PDF
                        </a>
                        <a href=\"{{ path('back_communication_statistics') }}\" class=\"btn btn-outline-info btn-sm\">
                            <i class=\"fas fa-chart-bar me-1\"></i>Statistiques
                        </a>
                    </div>
                </div>
                
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th width=\"60\">ID</th>
                                <th>Type</th>
                                <th>Description</th>
                                <th width=\"150\">Date/Heure</th>
                                <th width=\"100\">État</th>
                                <th width=\"100\" class=\"text-center\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for communication in communications %}
                            <tr>
                                <td class=\"fw-semibold\">#{{ communication.id }}</td>
                                <td>
                                    <!-- CHANGEMENT ICI : Afficher correctement le type \"chat\" -->
                                    {% if communication.type == 'live' %}
                                        <span class=\"badge badge-danger\">
                                            <i class=\"fas fa-broadcast-tower\"></i> En direct
                                        </span>
                                    {% elseif communication.type == 'chat' %}
                                        <span class=\"badge badge-chat\">
                                            <i class=\"fas fa-comments\"></i> Chat
                                        </span>
                                    {% elseif communication.type == 'record' %}
                                        <span class=\"badge badge-warning\">
                                            <i class=\"fas fa-video\"></i> Enregistré
                                        </span>
                                    {% else %}
                                        <span class=\"badge badge-info\">
                                            {{ communication.type|default('Autre') }}
                                        </span>
                                    {% endif %}
                                </td>
                                <td>
                                    <!-- CHANGEMENT ICI : Mieux afficher les messages chat -->
                                    <a href=\"{{ path('back_communication_show', {'id': communication.id}) }}\" class=\"text-decoration-none\">
                                        {% if communication.type == 'chat' %}
                                            <div class=\"chat-message\">
                                                <i class=\"fas fa-comment me-1\"></i>
                                                <strong>Message chat:</strong> 
                                                {{ communication.descriptionDetaillee|default('')|slice(0, 60) }}
                                                {{ communication.descriptionDetaillee|default('')|length > 60 ? '...' : '' }}
                                            </div>
                                        {% else %}
                                            {{ communication.descriptionDetaillee|default('Sans titre')|slice(0, 50) }}
                                            {{ communication.descriptionDetaillee|default('')|length > 50 ? '...' : '' }}
                                        {% endif %}
                                    </a>
                                    {% if communication.lien %}
                                    <br>
                                    <small class=\"text-muted\">
                                        <i class=\"fas fa-link\"></i> 
                                        {% if communication.lien == 'chat_front' %}
                                            <span class=\"text-info\">Message du chat</span>
                                        {% else %}
                                            {{ communication.lien|slice(0, 30) }}
                                            {{ communication.lien|length > 30 ? '...' : '' }}
                                        {% endif %}
                                    </small>
                                    {% endif %}
                                </td>
                                <td>
                                    {% if communication.dateHeure %}
                                        {{ communication.dateHeure|date('d/m/Y') }}<br>
                                        <small>{{ communication.dateHeure|date('H:i:s') }}</small>
                                    {% endif %}
                                </td>
                                <td>
                                    <span class=\"badge 
                                        {% if communication.etat == 'planifie' %}badge-warning
                                        {% elseif communication.etat == 'en_cours' %}badge-success
                                        {% elseif communication.etat == 'termine' %}badge-info
                                        {% else %}badge-danger{% endif %}\">
                                        {{ communication.etat|replace({'_': ' '})|title }}
                                    </span>
                                </td>
                                <td class=\"text-center\">
                                    <div class=\"actions\">
                                        <a href=\"{{ path('back_communication_show', {'id': communication.id}) }}\" class=\"action-btn view\" title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('back_communication_edit', {'id': communication.id}) }}\" class=\"action-btn edit\" title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <form method=\"post\" action=\"{{ path('back_communication_delete', {'id': communication.id}) }}\" 
                                              onsubmit=\"return confirm('Supprimer cette communication ?');\" class=\"d-inline\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ communication.id) }}\">
                                            <button type=\"submit\" class=\"action-btn delete\" title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            {% else %}
                            <tr>
                                <td colspan=\"6\" class=\"text-center py-5\">
                                    <div class=\"py-4\">
                                        <i class=\"fas fa-comments fa-3x text-muted mb-3\"></i>
                                        <h5 class=\"text-muted\">Aucune communication trouvée</h5>
                                        <p class=\"text-muted mb-0\">
                                            {% if searchCriteria is not empty %}
                                                Aucun résultat pour votre recherche. Essayez d'autres critères.
                                            {% else %}
                                                Commencez par créer une nouvelle communication
                                            {% endif %}
                                        </p>
                                    </div>
                                </td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                {% if communications.getTotalItemCount > 0 %}
                <div class=\"p-3 border-top d-flex justify-content-between align-items-center\">
                    <div class=\"text-muted\">
                        Affichage de {{ communications.getItemNumberPerPage * (communications.getCurrentPageNumber - 1) + 1 }} 
                        à {{ min(communications.getItemNumberPerPage * communications.getCurrentPageNumber, communications.getTotalItemCount) }} 
                        sur {{ communications.getTotalItemCount }} communication(s)
                    </div>
                    <div>
                        {{ knp_pagination_render(communications) }}
                    </div>
                </div>
                {% endif %}
            </div>
        </div>
    </main>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
// Supprimer un filtre
function removeFilter(filterName) {
    const url = new URL(window.location.href);
    
    url.searchParams.delete('communication_search[' + filterName + ']');
    
    if (filterName === 'dateFrom' || filterName === 'dateTo') {
        url.searchParams.delete('communication_search[' + filterName + '][year]');
        url.searchParams.delete('communication_search[' + filterName + '][month]');
        url.searchParams.delete('communication_search[' + filterName + '][day]');
    }
    
    window.location.href = url.toString();
}

// Confirmation avant réinitialisation
document.querySelector('button[type=\"reset\"]')?.addEventListener('click', function(e) {
    if (!confirm('Voulez-vous vraiment réinitialiser tous les filtres ?')) {
        e.preventDefault();
    }
});

// Gestion de la sidebar
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
});
</script>
{% endblock %}", "back/communication/index.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\communication\\index.html.twig");
    }
}
