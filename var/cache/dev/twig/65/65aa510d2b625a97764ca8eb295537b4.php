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

/* back/index.html.twig */
class __TwigTemplate_a393fce17f623afd6e4e70da202ff5e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/index.html.twig"));

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

        yield "Dashboard";
        
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
/* Sous-menu Forum */
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

/* Sous-menu caché par défaut */
.sidebar-menu .submenu {
    display: none;
    list-style: none;
    padding: 0;
    margin: 0;
    background: rgba(0, 0, 0, 0.2);
}

/* Afficher le sous-menu au survol */
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
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 72
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

        // line 73
        yield "<div class=\"dashboard\">

    ";
        // line 76
        yield "    ";
        yield from $this->load("back/sidebar.html.twig", 76)->unwrap()->yield($context);
        // line 77
        yield "
    <main class=\"main-content\">
      <header class=\"dashboard-header\">
        <div class=\"header-left\">
          <h1>Dashboard</h1>
          <p>Bienvenue sur la plateforme d'apprentissage LearnFlex+</p>
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

        <!-- Stats Cards -->
        <div class=\"stats-cards\">
          <div class=\"stat-card\">
            <div class=\"stat-icon users\">
              <i class=\"fas fa-users\"></i>
            </div>
            <div class=\"stat-details\">
              <h3>1,423</h3>
              <p>Utilisateurs</p>
              <div class=\"stat-progress\">
                <i class=\"fas fa-arrow-up\"></i>
                <span>+12.5%</span>
              </div>
            </div>
          </div>

          <div class=\"stat-card\">
            <div class=\"stat-icon rides\">
              <i class=\"fas fa-book\"></i>
            </div>
            <div class=\"stat-details\">
              <h3>856</h3>
              <p>Cours disponibles</p>
              <div class=\"stat-progress\">
                <i class=\"fas fa-arrow-up\"></i>
                <span>+8.2%</span>
              </div>
            </div>
          </div>

          <div class=\"stat-card\">
            <div class=\"stat-icon parcels\">
              <i class=\"fas fa-laptop-code\"></i>
            </div>
            <div class=\"stat-details\">
              <h3>128</h3>
              <p>Evaluation</p>
              <div class=\"stat-progress negative\">
                <i class=\"fas fa-arrow-down\"></i>
                <span>-3.1%</span>
              </div>
            </div>
          </div>

          <div class=\"stat-card\">
            <div class=\"stat-icon complaints\">
              <i class=\"fas fa-question-circle\"></i>
            </div>
            <div class=\"stat-details\">
              <h3>24</h3>
              <p>Quiz actifs</p>
              <div class=\"stat-progress\">
                <i class=\"fas fa-arrow-up\"></i>
                <span>+5.7%</span>
              </div>
            </div>
          </div>
        </div>

        ";
        // line 158
        yield "
      </div>
    </main>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 165
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

        // line 166
        yield "<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
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
        return "back/index.html.twig";
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
        return array (  313 => 166,  300 => 165,  284 => 158,  202 => 77,  199 => 76,  195 => 73,  182 => 72,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/styles.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/dashboard.css') }}\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
<style>
/* Sous-menu Forum */
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

/* Sous-menu caché par défaut */
.sidebar-menu .submenu {
    display: none;
    list-style: none;
    padding: 0;
    margin: 0;
    background: rgba(0, 0, 0, 0.2);
}

/* Afficher le sous-menu au survol */
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
</style>
{% endblock %}

{% block body %}
<div class=\"dashboard\">

    {# Sidebar inclus depuis fichier séparé #}
    {% include 'back/sidebar.html.twig' %}

    <main class=\"main-content\">
      <header class=\"dashboard-header\">
        <div class=\"header-left\">
          <h1>Dashboard</h1>
          <p>Bienvenue sur la plateforme d'apprentissage LearnFlex+</p>
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

        <!-- Stats Cards -->
        <div class=\"stats-cards\">
          <div class=\"stat-card\">
            <div class=\"stat-icon users\">
              <i class=\"fas fa-users\"></i>
            </div>
            <div class=\"stat-details\">
              <h3>1,423</h3>
              <p>Utilisateurs</p>
              <div class=\"stat-progress\">
                <i class=\"fas fa-arrow-up\"></i>
                <span>+12.5%</span>
              </div>
            </div>
          </div>

          <div class=\"stat-card\">
            <div class=\"stat-icon rides\">
              <i class=\"fas fa-book\"></i>
            </div>
            <div class=\"stat-details\">
              <h3>856</h3>
              <p>Cours disponibles</p>
              <div class=\"stat-progress\">
                <i class=\"fas fa-arrow-up\"></i>
                <span>+8.2%</span>
              </div>
            </div>
          </div>

          <div class=\"stat-card\">
            <div class=\"stat-icon parcels\">
              <i class=\"fas fa-laptop-code\"></i>
            </div>
            <div class=\"stat-details\">
              <h3>128</h3>
              <p>Evaluation</p>
              <div class=\"stat-progress negative\">
                <i class=\"fas fa-arrow-down\"></i>
                <span>-3.1%</span>
              </div>
            </div>
          </div>

          <div class=\"stat-card\">
            <div class=\"stat-icon complaints\">
              <i class=\"fas fa-question-circle\"></i>
            </div>
            <div class=\"stat-details\">
              <h3>24</h3>
              <p>Quiz actifs</p>
              <div class=\"stat-progress\">
                <i class=\"fas fa-arrow-up\"></i>
                <span>+5.7%</span>
              </div>
            </div>
          </div>
        </div>

        {# le reste de ton code est inchangé #}

      </div>
    </main>

</div>
{% endblock %}

{% block javascripts %}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
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
</script>
{% endblock %}
", "back/index.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\index.html.twig");
    }
}
