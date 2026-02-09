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

/* back/sidebar.html.twig */
class __TwigTemplate_dcf1c00d69d845d088cd8bd0b42a0611 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<aside class=\"sidebar\">
    <div class=\"sidebar-header\">
        <div class=\"logo\">
            <img src=\"";
        // line 4
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
        // line 15
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 15), "attributes", [], "any", false, false, false, 15), "get", ["_route"], "method", false, false, false, 15) == "app_back")) ? ("active") : (""));
        yield "\">
                    <a href=\"";
        // line 16
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
                <li class=\"has-submenu ";
        // line 51
        yield ((((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 51), "attributes", [], "any", false, false, false, 51), "get", ["_route"], "method", false, false, false, 51)) && is_string($_v1 = "back_publication") && str_starts_with($_v0, $_v1)) || (is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 51), "attributes", [], "any", false, false, false, 51), "get", ["_route"], "method", false, false, false, 51)) && is_string($_v3 = "back_communication") && str_starts_with($_v2, $_v3)))) ? ("active") : (""));
        yield "\">
                    <a href=\"#\">
                        <i class=\"fas fa-comments\"></i>
                        <span>Forum</span>
                        <i class=\"fas fa-chevron-right submenu-arrow\"></i>
                    </a>
                    <ul class=\"submenu\">
                        <li class=\"";
        // line 58
        yield (((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 58), "attributes", [], "any", false, false, false, 58), "get", ["_route"], "method", false, false, false, 58)) && is_string($_v5 = "back_publication") && str_starts_with($_v4, $_v5))) ? ("active") : (""));
        yield "\">
                            <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index");
        yield "\">
                                <i class=\"fas fa-bullhorn\"></i>
                                <span>Publication</span>
                            </a>
                        </li>
                        <li class=\"";
        // line 64
        yield (((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 64), "attributes", [], "any", false, false, false, 64), "get", ["_route"], "method", false, false, false, 64)) && is_string($_v7 = "back_communication") && str_starts_with($_v6, $_v7))) ? ("active") : (""));
        yield "\">
                            <a href=\"";
        // line 65
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
        // line 78
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
    <a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_index");
        yield "\">
Communication
</a>

</aside>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/sidebar.html.twig";
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
        return array (  159 => 89,  145 => 78,  129 => 65,  125 => 64,  117 => 59,  113 => 58,  103 => 51,  65 => 16,  61 => 15,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/sidebar.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\sidebar.html.twig");
    }
}
