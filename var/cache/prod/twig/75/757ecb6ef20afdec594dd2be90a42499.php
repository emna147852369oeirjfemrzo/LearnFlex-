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
class __TwigTemplate_e9e3cafa3204a275ba52dc3f3bdc3311 extends Template
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
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Dashboard";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 165
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  259 => 166,  252 => 165,  242 => 158,  160 => 77,  157 => 76,  153 => 73,  146 => 72,  77 => 7,  72 => 6,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/index.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\index.html.twig");
    }
}
