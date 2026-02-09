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

/* back/publication/index.html.twig */
class __TwigTemplate_c5bf33886567202d8e99f8fa4dde8f18 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/publication/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/publication/index.html.twig"));

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

        yield "Gestion du Forum";
        
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
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\">

<style>
/* Styles spécifiques pour la page publication */
.dashboard-content {
    padding: 30px;
}

.card {
    border: none;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    border-radius: 10px;
}

.card-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 10px 10px 0 0 !important;
    padding: 1rem 1.5rem;
}

.card-header h5 {
    margin: 0;
}

.btn-group .btn {
    border-radius: 6px !important;
    margin: 0 2px;
}

.table-hover tbody tr:hover {
    background-color: #f8f9fa;
}

.badge {
    font-size: 0.85em;
    font-weight: 500;
    padding: 0.35em 0.65em;
}

.form-control, .form-select {
    border: 1px solid #ced4da;
    border-radius: 6px;
}

.form-control:focus, .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 62
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

        // line 63
        yield "<div class=\"dashboard\">

    ";
        // line 66
        yield "    ";
        yield from $this->load("back/sidebar.html.twig", 66)->unwrap()->yield($context);
        // line 67
        yield "
    <main class=\"main-content\">
        <header class=\"dashboard-header\">
            <div class=\"header-left\">
                <h1>Gestion du Forum</h1>
                <p>Gérer les publications et réclamations des étudiants</p>
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
            ";
        // line 88
        yield "            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h2 class=\"h4 mb-0\">Publications</h2>
                <div>
                    <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_stats");
        yield "\" class=\"btn btn-info me-2\">
                        <i class=\"fas fa-chart-bar\"></i> Statistiques
                    </a>
                    <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_new");
        yield "\" class=\"btn btn-success\">
                        <i class=\"fas fa-plus-circle\"></i> Nouvelle Publication
                    </a>
                </div>
            </div>

            ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "flashes", ["success"], "method", false, false, false, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 101
            yield "                <div class=\"alert alert-success alert-dismissible fade show\">
                    ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "
            ";
        // line 108
        yield "            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-search\"></i> Recherche avancée
                    </h5>
                </div>
                <div class=\"card-body\">
                    <form method=\"get\" action=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index");
        yield "\" id=\"searchForm\">
                        <div class=\"row g-3\">
                            <div class=\"col-md-2\">
                                <label for=\"id\" class=\"form-label\">ID</label>
                                <input type=\"number\" class=\"form-control\" id=\"id\" name=\"id\" placeholder=\"ID\" value=\"";
        // line 119
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "id", [], "any", true, true, false, 119) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchParams"]) || array_key_exists("searchParams", $context) ? $context["searchParams"] : (function () { throw new RuntimeError('Variable "searchParams" does not exist.', 119, $this->source); })()), "id", [], "any", false, false, false, 119)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchParams"]) || array_key_exists("searchParams", $context) ? $context["searchParams"] : (function () { throw new RuntimeError('Variable "searchParams" does not exist.', 119, $this->source); })()), "id", [], "any", false, false, false, 119), "html", null, true)) : (""));
        yield "\">
                            </div>
                            
                    
                            
                            <div class=\"col-md-2\">
                                <label for=\"categorie\" class=\"form-label\">Catégorie</label>
                                <select class=\"form-control\" id=\"categorie\" name=\"categorie\">
                                    <option value=\"\">-- Toutes --</option>
                                    <option value=\"question_cours\" ";
        // line 128
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchParams"]) || array_key_exists("searchParams", $context) ? $context["searchParams"] : (function () { throw new RuntimeError('Variable "searchParams" does not exist.', 128, $this->source); })()), "categorie", [], "any", false, false, false, 128) == "question_cours")) ? ("selected") : (""));
        yield ">Question cours</option>
                                    <option value=\"question_examen\" ";
        // line 129
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchParams"]) || array_key_exists("searchParams", $context) ? $context["searchParams"] : (function () { throw new RuntimeError('Variable "searchParams" does not exist.', 129, $this->source); })()), "categorie", [], "any", false, false, false, 129) == "question_examen")) ? ("selected") : (""));
        yield ">Question examen</option>
                                    <option value=\"reclamation\" ";
        // line 130
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchParams"]) || array_key_exists("searchParams", $context) ? $context["searchParams"] : (function () { throw new RuntimeError('Variable "searchParams" does not exist.', 130, $this->source); })()), "categorie", [], "any", false, false, false, 130) == "reclamation")) ? ("selected") : (""));
        yield ">Réclamation</option>
                                    <option value=\"aide\" ";
        // line 131
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchParams"]) || array_key_exists("searchParams", $context) ? $context["searchParams"] : (function () { throw new RuntimeError('Variable "searchParams" does not exist.', 131, $this->source); })()), "categorie", [], "any", false, false, false, 131) == "aide")) ? ("selected") : (""));
        yield ">Aide</option>
                                    <option value=\"autre\" ";
        // line 132
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchParams"]) || array_key_exists("searchParams", $context) ? $context["searchParams"] : (function () { throw new RuntimeError('Variable "searchParams" does not exist.', 132, $this->source); })()), "categorie", [], "any", false, false, false, 132) == "autre")) ? ("selected") : (""));
        yield ">Autre</option>
                                </select>
                            </div>
                            
                            <div class=\"col-md-2\">
                                <label for=\"dateDebut\" class=\"form-label\">Date début</label>
                                <input type=\"date\" class=\"form-control\" id=\"dateDebut\" name=\"dateDebut\" value=\"";
        // line 138
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "dateDebut", [], "any", true, true, false, 138) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchParams"]) || array_key_exists("searchParams", $context) ? $context["searchParams"] : (function () { throw new RuntimeError('Variable "searchParams" does not exist.', 138, $this->source); })()), "dateDebut", [], "any", false, false, false, 138)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchParams"]) || array_key_exists("searchParams", $context) ? $context["searchParams"] : (function () { throw new RuntimeError('Variable "searchParams" does not exist.', 138, $this->source); })()), "dateDebut", [], "any", false, false, false, 138), "html", null, true)) : (""));
        yield "\">
                            </div>
                            
                            <div class=\"col-md-2\">
                                <label for=\"dateFin\" class=\"form-label\">Date fin</label>
                                <input type=\"date\" class=\"form-control\" id=\"dateFin\" name=\"dateFin\" value=\"";
        // line 143
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "dateFin", [], "any", true, true, false, 143) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchParams"]) || array_key_exists("searchParams", $context) ? $context["searchParams"] : (function () { throw new RuntimeError('Variable "searchParams" does not exist.', 143, $this->source); })()), "dateFin", [], "any", false, false, false, 143)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchParams"]) || array_key_exists("searchParams", $context) ? $context["searchParams"] : (function () { throw new RuntimeError('Variable "searchParams" does not exist.', 143, $this->source); })()), "dateFin", [], "any", false, false, false, 143), "html", null, true)) : (""));
        yield "\">
                            </div>
                            
                            <div class=\"col-md-1 d-flex align-items-end\">
                                <button type=\"submit\" class=\"btn btn-success w-100\">
                                    <i class=\"fas fa-search\"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class=\"row mt-3\">
                            <div class=\"col-md-12\">
                                <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index");
        yield "\" class=\"btn btn-sm btn-outline-secondary\">
                                    <i class=\"fas fa-redo\"></i> Réinitialiser
                                </a>
                                <button type=\"button\" class=\"btn btn-sm btn-danger\" id=\"exportPdfBtn\">
                                    <i class=\"fas fa-file-pdf\"></i> Exporter PDF
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            ";
        // line 168
        yield "            <div class=\"card mb-3\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-8\">
                            <strong><i class=\"fas fa-sort\"></i> Trier par :</strong>
                            <div class=\"btn-group ms-2\" role=\"group\">
                                <a href=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index", Twig\Extension\CoreExtension::merge((isset($context["searchParams"]) || array_key_exists("searchParams", $context) ? $context["searchParams"] : (function () { throw new RuntimeError('Variable "searchParams" does not exist.', 174, $this->source); })()), ["sortBy" => "dateCreation", "sortOrder" => "DESC"])), "html", null, true);
        yield "\" 
                                   class=\"btn btn-sm ";
        // line 175
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchParams"]) || array_key_exists("searchParams", $context) ? $context["searchParams"] : (function () { throw new RuntimeError('Variable "searchParams" does not exist.', 175, $this->source); })()), "sortBy", [], "any", false, false, false, 175) == "dateCreation")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\">
                                    Date
                                </a>
                                <a href=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index", Twig\Extension\CoreExtension::merge((isset($context["searchParams"]) || array_key_exists("searchParams", $context) ? $context["searchParams"] : (function () { throw new RuntimeError('Variable "searchParams" does not exist.', 178, $this->source); })()), ["sortBy" => "nombreVues", "sortOrder" => "DESC"])), "html", null, true);
        yield "\" 
                                   class=\"btn btn-sm ";
        // line 179
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchParams"]) || array_key_exists("searchParams", $context) ? $context["searchParams"] : (function () { throw new RuntimeError('Variable "searchParams" does not exist.', 179, $this->source); })()), "sortBy", [], "any", false, false, false, 179) == "nombreVues")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\">
                                    Vues
                                </a>
                                <a href=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index", Twig\Extension\CoreExtension::merge((isset($context["searchParams"]) || array_key_exists("searchParams", $context) ? $context["searchParams"] : (function () { throw new RuntimeError('Variable "searchParams" does not exist.', 182, $this->source); })()), ["sortBy" => "nombreLikes", "sortOrder" => "DESC"])), "html", null, true);
        yield "\" 
                                   class=\"btn btn-sm ";
        // line 183
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchParams"]) || array_key_exists("searchParams", $context) ? $context["searchParams"] : (function () { throw new RuntimeError('Variable "searchParams" does not exist.', 183, $this->source); })()), "sortBy", [], "any", false, false, false, 183) == "nombreLikes")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\">
                                    Likes
                                </a>
                                <a href=\"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index", Twig\Extension\CoreExtension::merge((isset($context["searchParams"]) || array_key_exists("searchParams", $context) ? $context["searchParams"] : (function () { throw new RuntimeError('Variable "searchParams" does not exist.', 186, $this->source); })()), ["sortBy" => "titre", "sortOrder" => "ASC"])), "html", null, true);
        yield "\" 
                                   class=\"btn btn-sm ";
        // line 187
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["searchParams"]) || array_key_exists("searchParams", $context) ? $context["searchParams"] : (function () { throw new RuntimeError('Variable "searchParams" does not exist.', 187, $this->source); })()), "sortBy", [], "any", false, false, false, 187) == "titre")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\">
                                    Titre
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-4 text-end\">
                            <span class=\"badge bg-secondary fs-6\">";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 193, $this->source); })())), "html", null, true);
        yield " résultat(s)</span>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 200
        yield "            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead style=\"background-color: #f8f9fa;\">
                                <tr>
                                    <th>ID</th>
                                    <th>Titre</th>
                                    <th>Catégorie</th>
                                    <th>Date</th>
                                    <th>Vues</th>
                                    <th>Likes</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 216
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 216, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 217
            yield "                                <tr>
                                    <td><strong>#";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 218), "html", null, true);
            yield "</strong></td>
                                    <td>";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "titre", [], "any", false, false, false, 219), "html", null, true);
            yield "</td>
                                    <td><span class=\"badge bg-info text-dark\">";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "categorie", [], "any", false, false, false, 220), "html", null, true);
            yield "</span></td>
                                    <td>";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "dateCreation", [], "any", false, false, false, 221), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                    <td><span class=\"badge bg-primary\">";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "nombreVues", [], "any", false, false, false, 222), "html", null, true);
            yield "</span></td>
                                    <td><span class=\"badge bg-success\">";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "nombreLikes", [], "any", false, false, false, 223), "html", null, true);
            yield "</span></td>
                                    <td>
                                        <a href=\"";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 225)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\" title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 228)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\" title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <form method=\"post\" action=\"";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 231)]), "html", null, true);
            yield "\" style=\"display:inline-block;\" onsubmit=\"return confirm('Supprimer ?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 232))), "html", null, true);
            yield "\">
                                            <button class=\"btn btn-sm btn-danger\" title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 239
        if (!$context['_iterated']) {
            // line 240
            yield "                                <tr>
                                    <td colspan=\"7\" class=\"text-center text-muted py-4\">
                                        <i class=\"fas fa-inbox fa-3x mb-3\"></i>
                                        <p>Aucune publication trouvée</p>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['publication'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 257
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

        // line 258
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Sidebar Toggle
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');

    if(sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
        });
    }

    // Export PDF
    const exportPdfBtn = document.getElementById('exportPdfBtn');
    if(exportPdfBtn) {
        exportPdfBtn.addEventListener('click', function() {
            const form = document.getElementById('searchForm');
            const formData = new FormData(form);
            const params = new URLSearchParams(formData);
            window.location.href = '";
        // line 280
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_export_pdf");
        yield "?' + params.toString();
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
        return "back/publication/index.html.twig";
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
        return array (  557 => 280,  532 => 258,  519 => 257,  500 => 247,  488 => 240,  486 => 239,  474 => 232,  470 => 231,  464 => 228,  458 => 225,  453 => 223,  449 => 222,  445 => 221,  441 => 220,  437 => 219,  433 => 218,  430 => 217,  425 => 216,  407 => 200,  398 => 193,  389 => 187,  385 => 186,  379 => 183,  375 => 182,  369 => 179,  365 => 178,  359 => 175,  355 => 174,  347 => 168,  332 => 155,  317 => 143,  309 => 138,  300 => 132,  296 => 131,  292 => 130,  288 => 129,  284 => 128,  272 => 119,  265 => 115,  256 => 108,  253 => 106,  243 => 102,  240 => 101,  236 => 100,  227 => 94,  221 => 91,  216 => 88,  194 => 67,  191 => 66,  187 => 63,  174 => 62,  110 => 8,  106 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion du Forum{% endblock %}

{% block stylesheets %}
{{ parent() }}
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/styles.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/dashboard.css') }}\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\">

<style>
/* Styles spécifiques pour la page publication */
.dashboard-content {
    padding: 30px;
}

.card {
    border: none;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    border-radius: 10px;
}

.card-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 10px 10px 0 0 !important;
    padding: 1rem 1.5rem;
}

.card-header h5 {
    margin: 0;
}

.btn-group .btn {
    border-radius: 6px !important;
    margin: 0 2px;
}

.table-hover tbody tr:hover {
    background-color: #f8f9fa;
}

.badge {
    font-size: 0.85em;
    font-weight: 500;
    padding: 0.35em 0.65em;
}

.form-control, .form-select {
    border: 1px solid #ced4da;
    border-radius: 6px;
}

.form-control:focus, .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
}
</style>
{% endblock %}

{% block body %}
<div class=\"dashboard\">

    {# MÊME SIDEBAR QUE LE FICHIER COMMUNICATION #}
    {% include 'back/sidebar.html.twig' %}

    <main class=\"main-content\">
        <header class=\"dashboard-header\">
            <div class=\"header-left\">
                <h1>Gestion du Forum</h1>
                <p>Gérer les publications et réclamations des étudiants</p>
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
            {# VOTRE CONTENU PUBLICATION ICI - ÇA RESTE LE MÊME #}
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h2 class=\"h4 mb-0\">Publications</h2>
                <div>
                    <a href=\"{{ path('back_publication_stats') }}\" class=\"btn btn-info me-2\">
                        <i class=\"fas fa-chart-bar\"></i> Statistiques
                    </a>
                    <a href=\"{{ path('back_publication_new') }}\" class=\"btn btn-success\">
                        <i class=\"fas fa-plus-circle\"></i> Nouvelle Publication
                    </a>
                </div>
            </div>

            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success alert-dismissible fade show\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            {% endfor %}

            {# FORMULAIRE DE RECHERCHE #}
            <div class=\"card mb-4\">
                <div class=\"card-header\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-search\"></i> Recherche avancée
                    </h5>
                </div>
                <div class=\"card-body\">
                    <form method=\"get\" action=\"{{ path('back_publication_index') }}\" id=\"searchForm\">
                        <div class=\"row g-3\">
                            <div class=\"col-md-2\">
                                <label for=\"id\" class=\"form-label\">ID</label>
                                <input type=\"number\" class=\"form-control\" id=\"id\" name=\"id\" placeholder=\"ID\" value=\"{{ searchParams.id ?? '' }}\">
                            </div>
                            
                    
                            
                            <div class=\"col-md-2\">
                                <label for=\"categorie\" class=\"form-label\">Catégorie</label>
                                <select class=\"form-control\" id=\"categorie\" name=\"categorie\">
                                    <option value=\"\">-- Toutes --</option>
                                    <option value=\"question_cours\" {{ searchParams.categorie == 'question_cours' ? 'selected' : '' }}>Question cours</option>
                                    <option value=\"question_examen\" {{ searchParams.categorie == 'question_examen' ? 'selected' : '' }}>Question examen</option>
                                    <option value=\"reclamation\" {{ searchParams.categorie == 'reclamation' ? 'selected' : '' }}>Réclamation</option>
                                    <option value=\"aide\" {{ searchParams.categorie == 'aide' ? 'selected' : '' }}>Aide</option>
                                    <option value=\"autre\" {{ searchParams.categorie == 'autre' ? 'selected' : '' }}>Autre</option>
                                </select>
                            </div>
                            
                            <div class=\"col-md-2\">
                                <label for=\"dateDebut\" class=\"form-label\">Date début</label>
                                <input type=\"date\" class=\"form-control\" id=\"dateDebut\" name=\"dateDebut\" value=\"{{ searchParams.dateDebut ?? '' }}\">
                            </div>
                            
                            <div class=\"col-md-2\">
                                <label for=\"dateFin\" class=\"form-label\">Date fin</label>
                                <input type=\"date\" class=\"form-control\" id=\"dateFin\" name=\"dateFin\" value=\"{{ searchParams.dateFin ?? '' }}\">
                            </div>
                            
                            <div class=\"col-md-1 d-flex align-items-end\">
                                <button type=\"submit\" class=\"btn btn-success w-100\">
                                    <i class=\"fas fa-search\"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class=\"row mt-3\">
                            <div class=\"col-md-12\">
                                <a href=\"{{ path('back_publication_index') }}\" class=\"btn btn-sm btn-outline-secondary\">
                                    <i class=\"fas fa-redo\"></i> Réinitialiser
                                </a>
                                <button type=\"button\" class=\"btn btn-sm btn-danger\" id=\"exportPdfBtn\">
                                    <i class=\"fas fa-file-pdf\"></i> Exporter PDF
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            {# TRI #}
            <div class=\"card mb-3\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-8\">
                            <strong><i class=\"fas fa-sort\"></i> Trier par :</strong>
                            <div class=\"btn-group ms-2\" role=\"group\">
                                <a href=\"{{ path('back_publication_index', searchParams|merge({sortBy: 'dateCreation', sortOrder: 'DESC'})) }}\" 
                                   class=\"btn btn-sm {{ searchParams.sortBy == 'dateCreation' ? 'btn-primary' : 'btn-outline-primary' }}\">
                                    Date
                                </a>
                                <a href=\"{{ path('back_publication_index', searchParams|merge({sortBy: 'nombreVues', sortOrder: 'DESC'})) }}\" 
                                   class=\"btn btn-sm {{ searchParams.sortBy == 'nombreVues' ? 'btn-primary' : 'btn-outline-primary' }}\">
                                    Vues
                                </a>
                                <a href=\"{{ path('back_publication_index', searchParams|merge({sortBy: 'nombreLikes', sortOrder: 'DESC'})) }}\" 
                                   class=\"btn btn-sm {{ searchParams.sortBy == 'nombreLikes' ? 'btn-primary' : 'btn-outline-primary' }}\">
                                    Likes
                                </a>
                                <a href=\"{{ path('back_publication_index', searchParams|merge({sortBy: 'titre', sortOrder: 'ASC'})) }}\" 
                                   class=\"btn btn-sm {{ searchParams.sortBy == 'titre' ? 'btn-primary' : 'btn-outline-primary' }}\">
                                    Titre
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-4 text-end\">
                            <span class=\"badge bg-secondary fs-6\">{{ publications|length }} résultat(s)</span>
                        </div>
                    </div>
                </div>
            </div>

            {# TABLEAU #}
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead style=\"background-color: #f8f9fa;\">
                                <tr>
                                    <th>ID</th>
                                    <th>Titre</th>
                                    <th>Catégorie</th>
                                    <th>Date</th>
                                    <th>Vues</th>
                                    <th>Likes</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for publication in publications %}
                                <tr>
                                    <td><strong>#{{ publication.id }}</strong></td>
                                    <td>{{ publication.titre }}</td>
                                    <td><span class=\"badge bg-info text-dark\">{{ publication.categorie }}</span></td>
                                    <td>{{ publication.dateCreation|date('d/m/Y H:i') }}</td>
                                    <td><span class=\"badge bg-primary\">{{ publication.nombreVues }}</span></td>
                                    <td><span class=\"badge bg-success\">{{ publication.nombreLikes }}</span></td>
                                    <td>
                                        <a href=\"{{ path('back_publication_show', {id: publication.id}) }}\" class=\"btn btn-sm btn-info\" title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"{{ path('back_publication_edit', {id: publication.id}) }}\" class=\"btn btn-sm btn-warning\" title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <form method=\"post\" action=\"{{ path('back_publication_delete', {id: publication.id}) }}\" style=\"display:inline-block;\" onsubmit=\"return confirm('Supprimer ?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ publication.id) }}\">
                                            <button class=\"btn btn-sm btn-danger\" title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                {% else %}
                                <tr>
                                    <td colspan=\"7\" class=\"text-center text-muted py-4\">
                                        <i class=\"fas fa-inbox fa-3x mb-3\"></i>
                                        <p>Aucune publication trouvée</p>
                                    </td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
{% endblock %}

{% block javascripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Sidebar Toggle
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');

    if(sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
        });
    }

    // Export PDF
    const exportPdfBtn = document.getElementById('exportPdfBtn');
    if(exportPdfBtn) {
        exportPdfBtn.addEventListener('click', function() {
            const form = document.getElementById('searchForm');
            const formData = new FormData(form);
            const params = new URLSearchParams(formData);
            window.location.href = '{{ path('back_publication_export_pdf') }}?' + params.toString();
        });
    }
});
</script>
{% endblock %}", "back/publication/index.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\Publication\\index.html.twig");
    }
}
