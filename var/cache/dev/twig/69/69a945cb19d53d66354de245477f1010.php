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

/* front/publication_new.html.twig */
class __TwigTemplate_e67a5011bfa34292fae145dc08c410ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/publication_new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/publication_new.html.twig"));

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

        yield "Nouvelle Publication";
        
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
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\">
<style>
/* Navbar comme sur la page d'accueil */
.main-navbar {
    background: white;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    padding: 1rem 0;
}

.main-navbar .navbar-brand {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 1.5rem;
    font-weight: 700;
    color: #1e3a5f;
}

.main-navbar .navbar-brand img {
    height: 40px;
}

.main-navbar .nav-link {
    color: #1e3a5f;
    font-weight: 500;
    padding: 0.5rem 1rem;
    transition: color 0.3s;
}

.main-navbar .nav-link:hover {
    color: #667eea;
}

.btn-connexion {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 0.5rem 1.5rem;
    border-radius: 25px;
    border: none;
    font-weight: 600;
}

/* Header */
.page-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 3rem 0;
    margin-bottom: 2rem;
}

/* Cartes de catégories */
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

.form-card {
    background: white;
    border-radius: 16px;
    box-shadow: 0 4px 16px rgba(0,0,0,0.1);
    padding: 2rem;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 100
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

        // line 102
        yield "<nav class=\"main-navbar\">
    <div class=\"container\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <a class=\"navbar-brand\" href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\">
                <img src=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo1.png"), "html", null, true);
        yield "\" alt=\"LearnFlex+\">
                <span>LearnFlex +</span>
            </a>
            <div class=\"d-flex gap-3 align-items-center\">
                <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\" class=\"nav-link\">Accueil</a>
                <a href=\"#\" class=\"nav-link\">Contenus pédagogiques</a>
                <a href=\"#\" class=\"nav-link\">Evaluation</a>
                <a href=\"#\" class=\"nav-link\">Questionnaire</a>
                <a href=\"#\" class=\"nav-link\">Orientation</a>
                <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_index");
        yield "\" class=\"nav-link\">Forum</a>
                <button class=\"btn btn-connexion\">Connexion</button>
            </div>
        </div>
    </div>
</nav>

";
        // line 123
        yield "<div class=\"page-header\">
    <div class=\"container\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 127
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\" class=\"text-white text-decoration-none\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 128
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_index");
        yield "\" class=\"text-white text-decoration-none\">Forum</a></li>
                <li class=\"breadcrumb-item active text-white\">Nouvelle Publication</li>
            </ol>
        </nav>
        <h1 class=\"display-5 fw-bold\">Créer une publication</h1>
        <p class=\"lead\">Partagez vos questions, connaissances ou discussions avec la communauté</p>
    </div>
</div>

<div class=\"container mb-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"form-card\">
                ";
        // line 141
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), 'form_start');
        yield "
                    <div class=\"mb-4\">
                        ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "titre", [], "any", false, false, false, 143), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Titre de la publication"]);
        yield "
                        ";
        // line 144
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "titre", [], "any", false, false, false, 144), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Comment résoudre cette équation ?"]]);
        yield "
                        ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "titre", [], "any", false, false, false, 145), 'errors');
        yield "
                    </div>
                    
                    <div class=\"mb-4\">
                        ";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "description", [], "any", false, false, false, 149), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Description"]);
        yield "
                        ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "description", [], "any", false, false, false, 150), 'widget', ["attr" => ["class" => "form-control", "rows" => 6, "placeholder" => "Décrivez votre question ou discussion en détail..."]]);
        yield "
                        ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "description", [], "any", false, false, false, 151), 'errors');
        yield "
                    </div>
                    
                    <div class=\"mb-4\">
                        <label class=\"form-label fw-bold\"><i class=\"fas fa-folder me-2\"></i> Catégorie</label>
                        
                        ";
        // line 158
        yield "                        <div class=\"row g-3 mb-3\">
                            <div class=\"col-md-4\">
                                <div class=\"category-card\" onclick=\"selectCategory('question_cours')\">
                                    <div class=\"category-icon\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\">
                                        <i class=\"fas fa-graduation-cap fa-2x text-white\"></i>
                                    </div>
                                    <h5 class=\"mt-3\">Cours</h5>
                                    <p class=\"text-muted small\">Partage de connaissances et tutoriels</p>
                                </div>
                            </div>
                            
                            <div class=\"col-md-4\">
                                <div class=\"category-card\" onclick=\"selectCategory('question_examen')\">
                                    <div class=\"category-icon\" style=\"background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);\">
                                        <i class=\"fas fa-question-circle fa-2x text-white\"></i>
                                    </div>
                                    <h5 class=\"mt-3\">Question</h5>
                                    <p class=\"text-muted small\">Demande d'aide ou de clarification</p>
                                </div>
                            </div>
                            
                            <div class=\"col-md-4\">
                                <div class=\"category-card\" onclick=\"selectCategory('reclamation')\">
                                    <div class=\"category-icon\" style=\"background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);\">
                                        <i class=\"fas fa-comments fa-2x text-white\"></i>
                                    </div>
                                    <h5 class=\"mt-3\">Discussion</h5>
                                    <p class=\"text-muted small\">Échange d'idées et débats</p>
                                </div>
                            </div>
                        </div>
                        
                        ";
        // line 191
        yield "                        <div style=\"display: none;\">
                            ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "categorie", [], "any", false, false, false, 192), 'widget', ["attr" => ["id" => "categorie-select"]]);
        yield "
                        </div>
                        ";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "categorie", [], "any", false, false, false, 194), 'errors');
        yield "
                    </div>
                    
                    <div class=\"d-flex gap-3\">
                        <button type=\"submit\" class=\"btn btn-success btn-lg\">
                            <i class=\"fas fa-paper-plane me-2\"></i>
                            Publier
                        </button>
                        <a href=\"";
        // line 202
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_index");
        yield "\" class=\"btn btn-secondary btn-lg\">
                            <i class=\"fas fa-times me-2\"></i>
                            Annuler
                        </a>
                    </div>
                ";
        // line 207
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js\"></script>
<script>
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
        return "front/publication_new.html.twig";
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
        return array (  377 => 207,  369 => 202,  358 => 194,  353 => 192,  350 => 191,  316 => 158,  307 => 151,  303 => 150,  299 => 149,  292 => 145,  288 => 144,  284 => 143,  279 => 141,  263 => 128,  259 => 127,  253 => 123,  243 => 115,  235 => 110,  228 => 106,  224 => 105,  219 => 102,  206 => 100,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle Publication{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/styles.css') }}\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\">
<style>
/* Navbar comme sur la page d'accueil */
.main-navbar {
    background: white;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    padding: 1rem 0;
}

.main-navbar .navbar-brand {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 1.5rem;
    font-weight: 700;
    color: #1e3a5f;
}

.main-navbar .navbar-brand img {
    height: 40px;
}

.main-navbar .nav-link {
    color: #1e3a5f;
    font-weight: 500;
    padding: 0.5rem 1rem;
    transition: color 0.3s;
}

.main-navbar .nav-link:hover {
    color: #667eea;
}

.btn-connexion {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 0.5rem 1.5rem;
    border-radius: 25px;
    border: none;
    font-weight: 600;
}

/* Header */
.page-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 3rem 0;
    margin-bottom: 2rem;
}

/* Cartes de catégories */
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

.form-card {
    background: white;
    border-radius: 16px;
    box-shadow: 0 4px 16px rgba(0,0,0,0.1);
    padding: 2rem;
}
</style>
{% endblock %}

{% block body %}
{# Navbar #}
<nav class=\"main-navbar\">
    <div class=\"container\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <a class=\"navbar-brand\" href=\"{{ path('app_front') }}\">
                <img src=\"{{ asset('assets/images/logo1.png') }}\" alt=\"LearnFlex+\">
                <span>LearnFlex +</span>
            </a>
            <div class=\"d-flex gap-3 align-items-center\">
                <a href=\"{{ path('app_front') }}\" class=\"nav-link\">Accueil</a>
                <a href=\"#\" class=\"nav-link\">Contenus pédagogiques</a>
                <a href=\"#\" class=\"nav-link\">Evaluation</a>
                <a href=\"#\" class=\"nav-link\">Questionnaire</a>
                <a href=\"#\" class=\"nav-link\">Orientation</a>
                <a href=\"{{ path('forum_index') }}\" class=\"nav-link\">Forum</a>
                <button class=\"btn btn-connexion\">Connexion</button>
            </div>
        </div>
    </div>
</nav>

{# Header #}
<div class=\"page-header\">
    <div class=\"container\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_front') }}\" class=\"text-white text-decoration-none\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"{{ path('forum_index') }}\" class=\"text-white text-decoration-none\">Forum</a></li>
                <li class=\"breadcrumb-item active text-white\">Nouvelle Publication</li>
            </ol>
        </nav>
        <h1 class=\"display-5 fw-bold\">Créer une publication</h1>
        <p class=\"lead\">Partagez vos questions, connaissances ou discussions avec la communauté</p>
    </div>
</div>

<div class=\"container mb-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"form-card\">
                {{ form_start(form) }}
                    <div class=\"mb-4\">
                        {{ form_label(form.titre, 'Titre de la publication', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.titre, {'attr': {'class': 'form-control', 'placeholder': 'Ex: Comment résoudre cette équation ?'}}) }}
                        {{ form_errors(form.titre) }}
                    </div>
                    
                    <div class=\"mb-4\">
                        {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                        {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': 6, 'placeholder': 'Décrivez votre question ou discussion en détail...'}}) }}
                        {{ form_errors(form.description) }}
                    </div>
                    
                    <div class=\"mb-4\">
                        <label class=\"form-label fw-bold\"><i class=\"fas fa-folder me-2\"></i> Catégorie</label>
                        
                        {# Cartes visuelles pour les catégories #}
                        <div class=\"row g-3 mb-3\">
                            <div class=\"col-md-4\">
                                <div class=\"category-card\" onclick=\"selectCategory('question_cours')\">
                                    <div class=\"category-icon\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\">
                                        <i class=\"fas fa-graduation-cap fa-2x text-white\"></i>
                                    </div>
                                    <h5 class=\"mt-3\">Cours</h5>
                                    <p class=\"text-muted small\">Partage de connaissances et tutoriels</p>
                                </div>
                            </div>
                            
                            <div class=\"col-md-4\">
                                <div class=\"category-card\" onclick=\"selectCategory('question_examen')\">
                                    <div class=\"category-icon\" style=\"background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);\">
                                        <i class=\"fas fa-question-circle fa-2x text-white\"></i>
                                    </div>
                                    <h5 class=\"mt-3\">Question</h5>
                                    <p class=\"text-muted small\">Demande d'aide ou de clarification</p>
                                </div>
                            </div>
                            
                            <div class=\"col-md-4\">
                                <div class=\"category-card\" onclick=\"selectCategory('reclamation')\">
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
                    
                    <div class=\"d-flex gap-3\">
                        <button type=\"submit\" class=\"btn btn-success btn-lg\">
                            <i class=\"fas fa-paper-plane me-2\"></i>
                            Publier
                        </button>
                        <a href=\"{{ path('forum_index') }}\" class=\"btn btn-secondary btn-lg\">
                            <i class=\"fas fa-times me-2\"></i>
                            Annuler
                        </a>
                    </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js\"></script>
<script>
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
{% endblock %}", "front/publication_new.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\front\\publication_new.html.twig");
    }
}
