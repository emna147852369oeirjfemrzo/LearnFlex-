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

/* front/communication_new.html.twig */
class __TwigTemplate_99a40ba2f0cd4de7d3d5229689df6840 extends Template
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
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/communication_new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/communication_new.html.twig"));

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

        yield "Nouvelle communication - LearnFlex+";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<header class=\"landing-header\">
    <div class=\"container\">
        <div class=\"header-left\">
            <div class=\"logo\">
                <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo1.png"), "html", null, true);
        yield "\" alt=\"Learnflexplus Logo\" class=\"main-logo\">
                <span class=\"logo-text\">LearnFlex +</span>
            </div>
        </div>
        <nav class=\"main-nav\">
            <ul>
                <li><a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\">Accueil</a></li>
                <li><a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_index");
        yield "\">Forum</a></li>
                <li class=\"active\"><a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_communication_index");
        yield "\">Communications</a></li>
            </ul>
        </nav>
        <div class=\"header-right\">
            ";
        // line 22
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "type", [], "any", false, false, false, 22) != "client"))) {
            // line 23
            yield "                <a href=\"#\" class=\"btn btn-outline dashboard-btn\">Dashboard</a>
            ";
        }
        // line 25
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "                <a href=\"#\" class=\"btn btn-primary logout-btn\">Déconnexion</a>
            ";
        } else {
            // line 28
            yield "                <a href=\"#\" class=\"btn btn-primary\">Connexion</a>
            ";
        }
        // line 30
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

    // line 38
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

        // line 39
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card\">
                <div class=\"card-header bg-primary text-white\">
                    <h1 class=\"h3 mb-0\"><i class=\"fas fa-bullhorn\"></i> Nouvelle communication</h1>
                </div>
                <div class=\"card-body\">
                    ";
        // line 47
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_start');
        yield "
                    
                    <div class=\"mb-3\">
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "type", [], "any", false, false, false, 50), 'label');
        yield "
                        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "type", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    
                    <div class=\"mb-3\">
                        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "lien", [], "any", false, false, false, 55), 'label');
        yield "
                        ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "lien", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "https://meet.google.com/xxx-yyyy-zzz"]]);
        yield "
                        <small class=\"form-text text-muted\">Lien Zoom, Google Meet, Teams, etc.</small>
                    </div>
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "date_heure", [], "any", false, false, false, 62), 'label');
        yield "
                            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "date_heure", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "duree", [], "any", false, false, false, 66), 'label');
        yield "
                            <div class=\"input-group\">
                                ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "duree", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                <span class=\"input-group-text\">minutes</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mb-3\">
                        ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "etat", [], "any", false, false, false, 75), 'label');
        yield "
                        ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "etat", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    </div>
                    
                    <div class=\"mb-3\">
                        ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "description_detailllee", [], "any", false, false, false, 80), 'label');
        yield "
                        ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "description_detailllee", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control", "rows" => 6, "placeholder" => "Décrivez cette communication..."]]);
        yield "
                    </div>
                    
                    <div class=\"mb-3\">
                        ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "publication", [], "any", false, false, false, 85), 'label');
        yield "
                        ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "publication", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <small class=\"form-text text-muted\">Optionnel : lier à une publication existante</small>
                    </div>
                    
                    <div class=\"d-flex justify-content-between\">
                        <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_communication_index");
        yield "\" 
                           class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-times\"></i> Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save\"></i> Créer la communication
                        </button>
                    </div>
                    
                    ";
        // line 100
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_end');
        yield "
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/communication_new.html.twig";
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
        return array (  289 => 100,  277 => 91,  269 => 86,  265 => 85,  258 => 81,  254 => 80,  247 => 76,  243 => 75,  233 => 68,  228 => 66,  222 => 63,  218 => 62,  209 => 56,  205 => 55,  198 => 51,  194 => 50,  188 => 47,  178 => 39,  165 => 38,  148 => 30,  144 => 28,  140 => 26,  137 => 25,  133 => 23,  131 => 22,  124 => 18,  120 => 17,  116 => 16,  107 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/home.html.twig' %}

{% block title %}Nouvelle communication - LearnFlex+{% endblock %}

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
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card\">
                <div class=\"card-header bg-primary text-white\">
                    <h1 class=\"h3 mb-0\"><i class=\"fas fa-bullhorn\"></i> Nouvelle communication</h1>
                </div>
                <div class=\"card-body\">
                    {{ form_start(form) }}
                    
                    <div class=\"mb-3\">
                        {{ form_label(form.type) }}
                        {{ form_widget(form.type, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    
                    <div class=\"mb-3\">
                        {{ form_label(form.lien) }}
                        {{ form_widget(form.lien, {'attr': {'class': 'form-control', 'placeholder': 'https://meet.google.com/xxx-yyyy-zzz'}}) }}
                        <small class=\"form-text text-muted\">Lien Zoom, Google Meet, Teams, etc.</small>
                    </div>
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            {{ form_label(form.date_heure) }}
                            {{ form_widget(form.date_heure, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_label(form.duree) }}
                            <div class=\"input-group\">
                                {{ form_widget(form.duree, {'attr': {'class': 'form-control'}}) }}
                                <span class=\"input-group-text\">minutes</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mb-3\">
                        {{ form_label(form.etat) }}
                        {{ form_widget(form.etat, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    
                    <div class=\"mb-3\">
                        {{ form_label(form.description_detailllee) }}
                        {{ form_widget(form.description_detailllee, {'attr': {'class': 'form-control', 'rows': 6, 'placeholder': 'Décrivez cette communication...'}}) }}
                    </div>
                    
                    <div class=\"mb-3\">
                        {{ form_label(form.publication) }}
                        {{ form_widget(form.publication, {'attr': {'class': 'form-control'}}) }}
                        <small class=\"form-text text-muted\">Optionnel : lier à une publication existante</small>
                    </div>
                    
                    <div class=\"d-flex justify-content-between\">
                        <a href=\"{{ path('forum_communication_index') }}\" 
                           class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-times\"></i> Annuler
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save\"></i> Créer la communication
                        </button>
                    </div>
                    
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "front/communication_new.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\front\\communication_new.html.twig");
    }
}
