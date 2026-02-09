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

/* back/publication/edit.html.twig */
class __TwigTemplate_c92d14e778b779144d740efd5160341a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/publication/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/publication/edit.html.twig"));

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

        yield "Modifier la publication";
        
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
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\">
<style>
    .category-card {
        border: 2px solid #e9ecef;
        border-radius: 16px;
        padding: 2rem;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        background: white;
    }
    
    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        border-color: #667eea;
    }
    
    .category-card.selected {
        border-color: #667eea;
        background: #f8f9ff;
        box-shadow: 0 5px 20px rgba(102, 126, 234, 0.3);
    }
    
    .category-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 45
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

        // line 46
        yield "<div class=\"dashboard\">
    <aside class=\"sidebar\">
        <div class=\"sidebar-header\">
            <div class=\"logo\">
                <img src=\"";
        // line 50
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
                    <li>
                        <a href=\"";
        // line 62
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
                    <li class=\"active\">
                        <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index");
        yield "\">
                            <i class=\"fas fa-comments\"></i>
                            <span>Forum</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        
        <div class=\"sidebar-footer\">
            <a href=\"#\" class=\"user-profile\">
                <img src=\"";
        // line 109
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

    <main class=\"main-content\">
        <header class=\"dashboard-header\">
            <div class=\"header-left\">
                <h1>Modifier la publication</h1>
                <p>Publication #";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 126, $this->source); })()), "id", [], "any", false, false, false, 126), "html", null, true);
        yield "</p>
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
            <div class=\"card\">
                <div class=\"card-body\">
                    ";
        // line 143
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), 'form_start');
        yield "
                        <div class=\"mb-4\">
                            ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "titre", [], "any", false, false, false, 145), 'label');
        yield "
                            ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "titre", [], "any", false, false, false, 146), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "titre", [], "any", false, false, false, 147), 'errors');
        yield "
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "description", [], "any", false, false, false, 151), 'label');
        yield "
                            ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "description", [], "any", false, false, false, 152), 'widget', ["attr" => ["class" => "form-control", "rows" => 5]]);
        yield "
                            ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "description", [], "any", false, false, false, 153), 'errors');
        yield "
                        </div>

                        <div class=\"mb-4\">
                            <label class=\"form-label\"><i class=\"fas fa-folder\"></i> Catégorie</label>
                            
                            ";
        // line 160
        yield "                            <div class=\"row g-3 mb-3\">
                                <div class=\"col-md-4\">
                                    <div class=\"category-card ";
        // line 162
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 162, $this->source); })()), "categorie", [], "any", false, false, false, 162) == "question_cours")) ? ("selected") : (""));
        yield "\" onclick=\"selectCategory('question_cours')\">
                                        <div class=\"category-icon\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\">
                                            <i class=\"fas fa-graduation-cap fa-2x text-white\"></i>
                                        </div>
                                        <h5 class=\"mt-3\">Cours</h5>
                                        <p class=\"text-muted small\">Partage de connaissances et tutoriels</p>
                                    </div>
                                </div>
                                
                                <div class=\"col-md-4\">
                                    <div class=\"category-card ";
        // line 172
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 172, $this->source); })()), "categorie", [], "any", false, false, false, 172) == "question_examen")) ? ("selected") : (""));
        yield "\" onclick=\"selectCategory('question_examen')\">
                                        <div class=\"category-icon\" style=\"background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);\">
                                            <i class=\"fas fa-question-circle fa-2x text-white\"></i>
                                        </div>
                                        <h5 class=\"mt-3\">Question</h5>
                                        <p class=\"text-muted small\">Demande d'aide ou de clarification</p>
                                    </div>
                                </div>
                                
                                <div class=\"col-md-4\">
                                    <div class=\"category-card ";
        // line 182
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 182, $this->source); })()), "categorie", [], "any", false, false, false, 182) == "reclamation")) ? ("selected") : (""));
        yield "\" onclick=\"selectCategory('reclamation')\">
                                        <div class=\"category-icon\" style=\"background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);\">
                                            <i class=\"fas fa-comments fa-2x text-white\"></i>
                                        </div>
                                        <h5 class=\"mt-3\">Discussion</h5>
                                        <p class=\"text-muted small\">Échange d'idées et débats</p>
                                    </div>
                                </div>
                            </div>
                            
                            ";
        // line 193
        yield "                            <div style=\"display: none;\">
                                ";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "categorie", [], "any", false, false, false, 194), 'widget', ["attr" => ["id" => "categorie-select"]]);
        yield "
                            </div>
                            ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "categorie", [], "any", false, false, false, 196), 'errors');
        yield "
                        </div>

                        <div class=\"mt-4\">
                            <button type=\"submit\" class=\"btn btn-warning btn-lg\">
                                <i class=\"fas fa-save\"></i> Enregistrer les modifications
                            </button>
                            <a href=\"";
        // line 203
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index");
        yield "\" class=\"btn btn-secondary btn-lg\">
                                <i class=\"fas fa-times-circle\"></i> Annuler
                            </a>
                        </div>
                    ";
        // line 207
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </main>
</div>

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
});

function selectCategory(value) {
    // Retirer la sélection de toutes les cartes
    document.querySelectorAll('.category-card').forEach(card => {
        card.classList.remove('selected');
    });
    
    // Sélectionner la carte cliquée
    event.currentTarget.classList.add('selected');
    
    // Mettre à jour le select caché
    document.getElementById('categorie-select').value = value;
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
        return "back/publication/edit.html.twig";
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
        return array (  386 => 207,  379 => 203,  369 => 196,  364 => 194,  361 => 193,  348 => 182,  335 => 172,  322 => 162,  318 => 160,  309 => 153,  305 => 152,  301 => 151,  294 => 147,  290 => 146,  286 => 145,  281 => 143,  261 => 126,  241 => 109,  227 => 98,  188 => 62,  173 => 50,  167 => 46,  154 => 45,  106 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier la publication{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/styles.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/dashboard.css') }}\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\">
<style>
    .category-card {
        border: 2px solid #e9ecef;
        border-radius: 16px;
        padding: 2rem;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        background: white;
    }
    
    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        border-color: #667eea;
    }
    
    .category-card.selected {
        border-color: #667eea;
        background: #f8f9ff;
        box-shadow: 0 5px 20px rgba(102, 126, 234, 0.3);
    }
    
    .category-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"dashboard\">
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
                    <li>
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
                    <li class=\"active\">
                        <a href=\"{{ path('back_publication_index') }}\">
                            <i class=\"fas fa-comments\"></i>
                            <span>Forum</span>
                        </a>
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

    <main class=\"main-content\">
        <header class=\"dashboard-header\">
            <div class=\"header-left\">
                <h1>Modifier la publication</h1>
                <p>Publication #{{ publication.id }}</p>
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
            <div class=\"card\">
                <div class=\"card-body\">
                    {{ form_start(form) }}
                        <div class=\"mb-4\">
                            {{ form_label(form.titre) }}
                            {{ form_widget(form.titre, {'attr': {'class': 'form-control'}}) }}
                            {{ form_errors(form.titre) }}
                        </div>

                        <div class=\"mb-4\">
                            {{ form_label(form.description) }}
                            {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': 5}}) }}
                            {{ form_errors(form.description) }}
                        </div>

                        <div class=\"mb-4\">
                            <label class=\"form-label\"><i class=\"fas fa-folder\"></i> Catégorie</label>
                            
                            {# Cartes visuelles pour les catégories #}
                            <div class=\"row g-3 mb-3\">
                                <div class=\"col-md-4\">
                                    <div class=\"category-card {{ publication.categorie == 'question_cours' ? 'selected' : '' }}\" onclick=\"selectCategory('question_cours')\">
                                        <div class=\"category-icon\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\">
                                            <i class=\"fas fa-graduation-cap fa-2x text-white\"></i>
                                        </div>
                                        <h5 class=\"mt-3\">Cours</h5>
                                        <p class=\"text-muted small\">Partage de connaissances et tutoriels</p>
                                    </div>
                                </div>
                                
                                <div class=\"col-md-4\">
                                    <div class=\"category-card {{ publication.categorie == 'question_examen' ? 'selected' : '' }}\" onclick=\"selectCategory('question_examen')\">
                                        <div class=\"category-icon\" style=\"background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);\">
                                            <i class=\"fas fa-question-circle fa-2x text-white\"></i>
                                        </div>
                                        <h5 class=\"mt-3\">Question</h5>
                                        <p class=\"text-muted small\">Demande d'aide ou de clarification</p>
                                    </div>
                                </div>
                                
                                <div class=\"col-md-4\">
                                    <div class=\"category-card {{ publication.categorie == 'reclamation' ? 'selected' : '' }}\" onclick=\"selectCategory('reclamation')\">
                                        <div class=\"category-icon\" style=\"background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);\">
                                            <i class=\"fas fa-comments fa-2x text-white\"></i>
                                        </div>
                                        <h5 class=\"mt-3\">Discussion</h5>
                                        <p class=\"text-muted small\">Échange d'idées et débats</p>
                                    </div>
                                </div>
                            </div>
                            
                            {# Select caché pour la soumission du formulaire #}
                            <div style=\"display: none;\">
                                {{ form_widget(form.categorie, {'attr': {'id': 'categorie-select'}}) }}
                            </div>
                            {{ form_errors(form.categorie) }}
                        </div>

                        <div class=\"mt-4\">
                            <button type=\"submit\" class=\"btn btn-warning btn-lg\">
                                <i class=\"fas fa-save\"></i> Enregistrer les modifications
                            </button>
                            <a href=\"{{ path('back_publication_index') }}\" class=\"btn btn-secondary btn-lg\">
                                <i class=\"fas fa-times-circle\"></i> Annuler
                            </a>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </main>
</div>

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
});

function selectCategory(value) {
    // Retirer la sélection de toutes les cartes
    document.querySelectorAll('.category-card').forEach(card => {
        card.classList.remove('selected');
    });
    
    // Sélectionner la carte cliquée
    event.currentTarget.classList.add('selected');
    
    // Mettre à jour le select caché
    document.getElementById('categorie-select').value = value;
}
</script>
{% endblock %}", "back/publication/edit.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\Publication\\edit.html.twig");
    }
}
