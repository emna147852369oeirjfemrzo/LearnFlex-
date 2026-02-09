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
class __TwigTemplate_745bdfa3a39201da41c77665f2d8b111 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/sidebar.html.twig"));

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
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "attributes", [], "any", false, false, false, 15), "get", ["_route"], "method", false, false, false, 15) == "app_back")) ? ("active") : (""));
        yield "\">
                    <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back");
        yield "\">
                        <i class=\"fas fa-tachometer-alt\"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class=\"";
        // line 21
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "attributes", [], "any", false, false, false, 21), "get", ["_route"], "method", false, false, false, 21) == "user_index")) ? ("active") : (""));
        yield "\">
                    <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        yield "\">
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
        // line 53
        yield "                ";
        $context["isInForumSection"] = ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 54
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "attributes", [], "any", false, false, false, 54), "get", ["_route"], "method", false, false, false, 54)) && is_string($_v1 = "back_publication") && str_starts_with($_v0, $_v1)) || (is_string($_v2 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 55
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "attributes", [], "any", false, false, false, 55), "get", ["_route"], "method", false, false, false, 55)) && is_string($_v3 = "back_communication") && str_starts_with($_v2, $_v3)));
        // line 57
        yield "                
                <li class=\"has-submenu ";
        // line 58
        if ((($tmp = (isset($context["isInForumSection"]) || array_key_exists("isInForumSection", $context) ? $context["isInForumSection"] : (function () { throw new RuntimeError('Variable "isInForumSection" does not exist.', 58, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "open active";
        }
        yield "\">
                    <a href=\"#\" class=\"forum-toggle\">
                        <i class=\"fas fa-comments\"></i>
                        <span>Forum</span>
                        <i class=\"fas fa-chevron-right submenu-arrow\"></i>
                    </a>
                    <ul class=\"submenu ";
        // line 64
        if ((($tmp = (isset($context["isInForumSection"]) || array_key_exists("isInForumSection", $context) ? $context["isInForumSection"] : (function () { throw new RuntimeError('Variable "isInForumSection" does not exist.', 64, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "show";
        }
        yield "\">
                        <li class=\"";
        // line 65
        yield (((is_string($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "attributes", [], "any", false, false, false, 65), "get", ["_route"], "method", false, false, false, 65)) && is_string($_v5 = "back_publication") && str_starts_with($_v4, $_v5))) ? ("active") : (""));
        yield "\">
                            <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index");
        yield "\">
                                <i class=\"fas fa-bullhorn\"></i>
                                <span>Publication</span>
                            </a>
                        </li>
                        <li class=\"";
        // line 71
        yield (((is_string($_v6 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "request", [], "any", false, false, false, 71), "attributes", [], "any", false, false, false, 71), "get", ["_route"], "method", false, false, false, 71)) && is_string($_v7 = "back_communication") && str_starts_with($_v6, $_v7))) ? ("active") : (""));
        yield "\">
                            <a href=\"";
        // line 72
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
        // line 85
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
</aside>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  173 => 85,  157 => 72,  153 => 71,  145 => 66,  141 => 65,  135 => 64,  124 => 58,  121 => 57,  119 => 55,  118 => 54,  116 => 53,  83 => 22,  79 => 21,  71 => 16,  67 => 15,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<aside class=\"sidebar\">
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
                <li class=\"{{ app.request.attributes.get('_route') == 'user_index' ? 'active' : '' }}\">
                    <a href=\"{{ path('user_index') }}\">
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
                
                {# MENU FORUM - CORRIGÉ #}
                {% set isInForumSection = 
                    app.request.attributes.get('_route') starts with 'back_publication' 
                    or app.request.attributes.get('_route') starts with 'back_communication'
                %}
                
                <li class=\"has-submenu {% if isInForumSection %}open active{% endif %}\">
                    <a href=\"#\" class=\"forum-toggle\">
                        <i class=\"fas fa-comments\"></i>
                        <span>Forum</span>
                        <i class=\"fas fa-chevron-right submenu-arrow\"></i>
                    </a>
                    <ul class=\"submenu {% if isInForumSection %}show{% endif %}\">
                        <li class=\"{{ app.request.attributes.get('_route') starts with 'back_publication' ? 'active' : '' }}\">
                            <a href=\"{{ path('back_publication_index') }}\">
                                <i class=\"fas fa-bullhorn\"></i>
                                <span>Publication</span>
                            </a>
                        </li>
                        <li class=\"{{ app.request.attributes.get('_route') starts with 'back_communication' ? 'active' : '' }}\">
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
</aside>", "back/sidebar.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\sidebar.html.twig");
    }
}
