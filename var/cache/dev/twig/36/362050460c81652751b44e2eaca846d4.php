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

/* back/communication/statistics.html.twig */
class __TwigTemplate_70700df47c4eddf8dd88954f98297cc4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/communication/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/communication/statistics.html.twig"));

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

        yield "Statistiques des Communications";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"container-fluid py-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h3 mb-2\">Statistiques des Communications</h1>
            <p class=\"mb-0\">Analyse et données sur les communications</p>
        </div>
        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_index");
        yield "\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-2\"></i>Retour
        </a>
    </div>
    
    <!-- Cartes de statistiques -->
    <div class=\"row mb-4\">
        <div class=\"col-md-3\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <div class=\"text-primary mb-2\">
                        <i class=\"fas fa-comments fa-3x\"></i>
                    </div>
                    <h2 class=\"mb-0\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "</h2>
                    <p class=\"text-muted mb-0\">Total</p>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <div class=\"text-danger mb-2\">
                        <i class=\"fas fa-wifi fa-3x\"></i>
                    </div>
                    <h2 class=\"mb-0\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["liveCount"]) || array_key_exists("liveCount", $context) ? $context["liveCount"] : (function () { throw new RuntimeError('Variable "liveCount" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "</h2>
                    <p class=\"text-muted mb-0\">En direct</p>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <div class=\"text-info mb-2\">
                        <i class=\"fas fa-video fa-3x\"></i>
                    </div>
                    <h2 class=\"mb-0\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recordCount"]) || array_key_exists("recordCount", $context) ? $context["recordCount"] : (function () { throw new RuntimeError('Variable "recordCount" does not exist.', 49, $this->source); })()), "html", null, true);
        yield "</h2>
                    <p class=\"text-muted mb-0\">Enregistrées</p>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <div class=\"text-success mb-2\">
                        <i class=\"fas fa-chart-line fa-3x\"></i>
                    </div>
                    <h2 class=\"mb-0\">
                        ";
        // line 62
        if (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 62, $this->source); })()) > 0)) {
            // line 63
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((((isset($context["liveCount"]) || array_key_exists("liveCount", $context) ? $context["liveCount"] : (function () { throw new RuntimeError('Variable "liveCount" does not exist.', 63, $this->source); })()) / (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 63, $this->source); })())) * 100), 1), "html", null, true);
            yield "%
                        ";
        } else {
            // line 65
            yield "                            0%
                        ";
        }
        // line 67
        yield "                    </h2>
                    <p class=\"text-muted mb-0\">Taux en direct</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Tableau récapitulatif -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white\">
            <h5 class=\"mb-0\">Répartition par état</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Planifié</th>
                            <th>En cours</th>
                            <th>Terminé</th>
                            <th>Annulé</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>En direct</strong></td>
                            <td>
                                ";
        // line 96
        $context["livePlanifie"] = 0;
        // line 97
        yield "                                <span class=\"badge bg-warning\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["livePlanifie"]) || array_key_exists("livePlanifie", $context) ? $context["livePlanifie"] : (function () { throw new RuntimeError('Variable "livePlanifie" does not exist.', 97, $this->source); })()), "html", null, true);
        yield "</span>
                            </td>
                            <td>
                                ";
        // line 100
        $context["liveEnCours"] = 0;
        // line 101
        yield "                                <span class=\"badge bg-success\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["liveEnCours"]) || array_key_exists("liveEnCours", $context) ? $context["liveEnCours"] : (function () { throw new RuntimeError('Variable "liveEnCours" does not exist.', 101, $this->source); })()), "html", null, true);
        yield "</span>
                            </td>
                            <td>
                                ";
        // line 104
        $context["liveTermine"] = 0;
        // line 105
        yield "                                <span class=\"badge bg-info\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["liveTermine"]) || array_key_exists("liveTermine", $context) ? $context["liveTermine"] : (function () { throw new RuntimeError('Variable "liveTermine" does not exist.', 105, $this->source); })()), "html", null, true);
        yield "</span>
                            </td>
                            <td>
                                ";
        // line 108
        $context["liveAnnule"] = 0;
        // line 109
        yield "                                <span class=\"badge bg-danger\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["liveAnnule"]) || array_key_exists("liveAnnule", $context) ? $context["liveAnnule"] : (function () { throw new RuntimeError('Variable "liveAnnule" does not exist.', 109, $this->source); })()), "html", null, true);
        yield "</span>
                            </td>
                            <td><strong>";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["liveCount"]) || array_key_exists("liveCount", $context) ? $context["liveCount"] : (function () { throw new RuntimeError('Variable "liveCount" does not exist.', 111, $this->source); })()), "html", null, true);
        yield "</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Enregistré</strong></td>
                            <td>
                                ";
        // line 116
        $context["recordPlanifie"] = 0;
        // line 117
        yield "                                <span class=\"badge bg-warning\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recordPlanifie"]) || array_key_exists("recordPlanifie", $context) ? $context["recordPlanifie"] : (function () { throw new RuntimeError('Variable "recordPlanifie" does not exist.', 117, $this->source); })()), "html", null, true);
        yield "</span>
                            </td>
                            <td>
                                ";
        // line 120
        $context["recordEnCours"] = 0;
        // line 121
        yield "                                <span class=\"badge bg-success\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recordEnCours"]) || array_key_exists("recordEnCours", $context) ? $context["recordEnCours"] : (function () { throw new RuntimeError('Variable "recordEnCours" does not exist.', 121, $this->source); })()), "html", null, true);
        yield "</span>
                            </td>
                            <td>
                                ";
        // line 124
        $context["recordTermine"] = 0;
        // line 125
        yield "                                <span class=\"badge bg-info\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recordTermine"]) || array_key_exists("recordTermine", $context) ? $context["recordTermine"] : (function () { throw new RuntimeError('Variable "recordTermine" does not exist.', 125, $this->source); })()), "html", null, true);
        yield "</span>
                            </td>
                            <td>
                                ";
        // line 128
        $context["recordAnnule"] = 0;
        // line 129
        yield "                                <span class=\"badge bg-danger\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recordAnnule"]) || array_key_exists("recordAnnule", $context) ? $context["recordAnnule"] : (function () { throw new RuntimeError('Variable "recordAnnule" does not exist.', 129, $this->source); })()), "html", null, true);
        yield "</span>
                            </td>
                            <td><strong>";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recordCount"]) || array_key_exists("recordCount", $context) ? $context["recordCount"] : (function () { throw new RuntimeError('Variable "recordCount" does not exist.', 131, $this->source); })()), "html", null, true);
        yield "</strong></td>
                        </tr>
                        <tr class=\"table-light\">
                            <td><strong>Total</strong></td>
                            <td><strong>";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["livePlanifie"]) || array_key_exists("livePlanifie", $context) ? $context["livePlanifie"] : (function () { throw new RuntimeError('Variable "livePlanifie" does not exist.', 135, $this->source); })()) + (isset($context["recordPlanifie"]) || array_key_exists("recordPlanifie", $context) ? $context["recordPlanifie"] : (function () { throw new RuntimeError('Variable "recordPlanifie" does not exist.', 135, $this->source); })())), "html", null, true);
        yield "</strong></td>
                            <td><strong>";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["liveEnCours"]) || array_key_exists("liveEnCours", $context) ? $context["liveEnCours"] : (function () { throw new RuntimeError('Variable "liveEnCours" does not exist.', 136, $this->source); })()) + (isset($context["recordEnCours"]) || array_key_exists("recordEnCours", $context) ? $context["recordEnCours"] : (function () { throw new RuntimeError('Variable "recordEnCours" does not exist.', 136, $this->source); })())), "html", null, true);
        yield "</strong></td>
                            <td><strong>";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["liveTermine"]) || array_key_exists("liveTermine", $context) ? $context["liveTermine"] : (function () { throw new RuntimeError('Variable "liveTermine" does not exist.', 137, $this->source); })()) + (isset($context["recordTermine"]) || array_key_exists("recordTermine", $context) ? $context["recordTermine"] : (function () { throw new RuntimeError('Variable "recordTermine" does not exist.', 137, $this->source); })())), "html", null, true);
        yield "</strong></td>
                            <td><strong>";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["liveAnnule"]) || array_key_exists("liveAnnule", $context) ? $context["liveAnnule"] : (function () { throw new RuntimeError('Variable "liveAnnule" does not exist.', 138, $this->source); })()) + (isset($context["recordAnnule"]) || array_key_exists("recordAnnule", $context) ? $context["recordAnnule"] : (function () { throw new RuntimeError('Variable "recordAnnule" does not exist.', 138, $this->source); })())), "html", null, true);
        yield "</strong></td>
                            <td><strong class=\"text-primary\">";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 139, $this->source); })()), "html", null, true);
        yield "</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class=\"alert alert-info mt-3\">
                <i class=\"fas fa-info-circle me-2\"></i>
                <strong>Note :</strong> Ces statistiques sont basiques. Pour des statistiques détaillées par état, 
                il faudrait modifier le repository pour compter par type ET par état.
            </div>
        </div>
    </div>
    
    <!-- Actions -->
    <div class=\"d-flex justify-content-between mt-4\">
        <div>
            <a href=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_export_pdf");
        yield "\" class=\"btn btn-success\" target=\"_blank\">
                <i class=\"fas fa-file-pdf me-2\"></i>Exporter en PDF
            </a>
        </div>
        <a href=\"";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_index");
        yield "\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
        </a>
    </div>
</div>

";
        // line 166
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

        // line 167
        yield "<script>
// Simple animation for stats cards
document.addEventListener('DOMContentLoaded', function() {
    const statsCards = document.querySelectorAll('.card h2');
    statsCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(10px)';
        
        setTimeout(() => {
            card.style.transition = 'all 0.5s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 100);
    });
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
        return "back/communication/statistics.html.twig";
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
        return array (  374 => 167,  351 => 166,  342 => 160,  335 => 156,  315 => 139,  311 => 138,  307 => 137,  303 => 136,  299 => 135,  292 => 131,  286 => 129,  284 => 128,  277 => 125,  275 => 124,  268 => 121,  266 => 120,  259 => 117,  257 => 116,  249 => 111,  243 => 109,  241 => 108,  234 => 105,  232 => 104,  225 => 101,  223 => 100,  216 => 97,  214 => 96,  183 => 67,  179 => 65,  173 => 63,  171 => 62,  155 => 49,  140 => 37,  125 => 25,  109 => 12,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Statistiques des Communications{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h3 mb-2\">Statistiques des Communications</h1>
            <p class=\"mb-0\">Analyse et données sur les communications</p>
        </div>
        <a href=\"{{ path('back_communication_index') }}\" class=\"btn btn-outline-secondary\">
            <i class=\"fas fa-arrow-left me-2\"></i>Retour
        </a>
    </div>
    
    <!-- Cartes de statistiques -->
    <div class=\"row mb-4\">
        <div class=\"col-md-3\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <div class=\"text-primary mb-2\">
                        <i class=\"fas fa-comments fa-3x\"></i>
                    </div>
                    <h2 class=\"mb-0\">{{ total }}</h2>
                    <p class=\"text-muted mb-0\">Total</p>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <div class=\"text-danger mb-2\">
                        <i class=\"fas fa-wifi fa-3x\"></i>
                    </div>
                    <h2 class=\"mb-0\">{{ liveCount }}</h2>
                    <p class=\"text-muted mb-0\">En direct</p>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <div class=\"text-info mb-2\">
                        <i class=\"fas fa-video fa-3x\"></i>
                    </div>
                    <h2 class=\"mb-0\">{{ recordCount }}</h2>
                    <p class=\"text-muted mb-0\">Enregistrées</p>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-body text-center\">
                    <div class=\"text-success mb-2\">
                        <i class=\"fas fa-chart-line fa-3x\"></i>
                    </div>
                    <h2 class=\"mb-0\">
                        {% if total > 0 %}
                            {{ ((liveCount / total) * 100)|round(1) }}%
                        {% else %}
                            0%
                        {% endif %}
                    </h2>
                    <p class=\"text-muted mb-0\">Taux en direct</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Tableau récapitulatif -->
    <div class=\"card border-0 shadow-sm\">
        <div class=\"card-header bg-white\">
            <h5 class=\"mb-0\">Répartition par état</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Planifié</th>
                            <th>En cours</th>
                            <th>Terminé</th>
                            <th>Annulé</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>En direct</strong></td>
                            <td>
                                {% set livePlanifie = 0 %}
                                <span class=\"badge bg-warning\">{{ livePlanifie }}</span>
                            </td>
                            <td>
                                {% set liveEnCours = 0 %}
                                <span class=\"badge bg-success\">{{ liveEnCours }}</span>
                            </td>
                            <td>
                                {% set liveTermine = 0 %}
                                <span class=\"badge bg-info\">{{ liveTermine }}</span>
                            </td>
                            <td>
                                {% set liveAnnule = 0 %}
                                <span class=\"badge bg-danger\">{{ liveAnnule }}</span>
                            </td>
                            <td><strong>{{ liveCount }}</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Enregistré</strong></td>
                            <td>
                                {% set recordPlanifie = 0 %}
                                <span class=\"badge bg-warning\">{{ recordPlanifie }}</span>
                            </td>
                            <td>
                                {% set recordEnCours = 0 %}
                                <span class=\"badge bg-success\">{{ recordEnCours }}</span>
                            </td>
                            <td>
                                {% set recordTermine = 0 %}
                                <span class=\"badge bg-info\">{{ recordTermine }}</span>
                            </td>
                            <td>
                                {% set recordAnnule = 0 %}
                                <span class=\"badge bg-danger\">{{ recordAnnule }}</span>
                            </td>
                            <td><strong>{{ recordCount }}</strong></td>
                        </tr>
                        <tr class=\"table-light\">
                            <td><strong>Total</strong></td>
                            <td><strong>{{ livePlanifie + recordPlanifie }}</strong></td>
                            <td><strong>{{ liveEnCours + recordEnCours }}</strong></td>
                            <td><strong>{{ liveTermine + recordTermine }}</strong></td>
                            <td><strong>{{ liveAnnule + recordAnnule }}</strong></td>
                            <td><strong class=\"text-primary\">{{ total }}</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class=\"alert alert-info mt-3\">
                <i class=\"fas fa-info-circle me-2\"></i>
                <strong>Note :</strong> Ces statistiques sont basiques. Pour des statistiques détaillées par état, 
                il faudrait modifier le repository pour compter par type ET par état.
            </div>
        </div>
    </div>
    
    <!-- Actions -->
    <div class=\"d-flex justify-content-between mt-4\">
        <div>
            <a href=\"{{ path('back_communication_export_pdf') }}\" class=\"btn btn-success\" target=\"_blank\">
                <i class=\"fas fa-file-pdf me-2\"></i>Exporter en PDF
            </a>
        </div>
        <a href=\"{{ path('back_communication_index') }}\" class=\"btn btn-secondary\">
            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
        </a>
    </div>
</div>

{% block javascripts %}
<script>
// Simple animation for stats cards
document.addEventListener('DOMContentLoaded', function() {
    const statsCards = document.querySelectorAll('.card h2');
    statsCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(10px)';
        
        setTimeout(() => {
            card.style.transition = 'all 0.5s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 100);
    });
});
</script>
{% endblock %}
{% endblock %}", "back/communication/statistics.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\communication\\statistics.html.twig");
    }
}
