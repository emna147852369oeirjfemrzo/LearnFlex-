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
class __TwigTemplate_308b307e0d2a3e166a9666d4abb3e45b extends Template
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
        yield "Statistiques des Communications";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["liveCount"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["recordCount"] ?? null), "html", null, true);
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
        if ((($context["total"] ?? null) > 0)) {
            // line 63
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((($context["liveCount"] ?? null) / ($context["total"] ?? null)) * 100), 1), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["livePlanifie"] ?? null), "html", null, true);
        yield "</span>
                            </td>
                            <td>
                                ";
        // line 100
        $context["liveEnCours"] = 0;
        // line 101
        yield "                                <span class=\"badge bg-success\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["liveEnCours"] ?? null), "html", null, true);
        yield "</span>
                            </td>
                            <td>
                                ";
        // line 104
        $context["liveTermine"] = 0;
        // line 105
        yield "                                <span class=\"badge bg-info\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["liveTermine"] ?? null), "html", null, true);
        yield "</span>
                            </td>
                            <td>
                                ";
        // line 108
        $context["liveAnnule"] = 0;
        // line 109
        yield "                                <span class=\"badge bg-danger\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["liveAnnule"] ?? null), "html", null, true);
        yield "</span>
                            </td>
                            <td><strong>";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["liveCount"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["recordPlanifie"] ?? null), "html", null, true);
        yield "</span>
                            </td>
                            <td>
                                ";
        // line 120
        $context["recordEnCours"] = 0;
        // line 121
        yield "                                <span class=\"badge bg-success\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["recordEnCours"] ?? null), "html", null, true);
        yield "</span>
                            </td>
                            <td>
                                ";
        // line 124
        $context["recordTermine"] = 0;
        // line 125
        yield "                                <span class=\"badge bg-info\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["recordTermine"] ?? null), "html", null, true);
        yield "</span>
                            </td>
                            <td>
                                ";
        // line 128
        $context["recordAnnule"] = 0;
        // line 129
        yield "                                <span class=\"badge bg-danger\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["recordAnnule"] ?? null), "html", null, true);
        yield "</span>
                            </td>
                            <td><strong>";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["recordCount"] ?? null), "html", null, true);
        yield "</strong></td>
                        </tr>
                        <tr class=\"table-light\">
                            <td><strong>Total</strong></td>
                            <td><strong>";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["livePlanifie"] ?? null) + ($context["recordPlanifie"] ?? null)), "html", null, true);
        yield "</strong></td>
                            <td><strong>";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["liveEnCours"] ?? null) + ($context["recordEnCours"] ?? null)), "html", null, true);
        yield "</strong></td>
                            <td><strong>";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["liveTermine"] ?? null) + ($context["recordTermine"] ?? null)), "html", null, true);
        yield "</strong></td>
                            <td><strong>";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["liveAnnule"] ?? null) + ($context["recordAnnule"] ?? null)), "html", null, true);
        yield "</strong></td>
                            <td><strong class=\"text-primary\">";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total"] ?? null), "html", null, true);
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
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        return array (  332 => 167,  321 => 166,  312 => 160,  305 => 156,  285 => 139,  281 => 138,  277 => 137,  273 => 136,  269 => 135,  262 => 131,  256 => 129,  254 => 128,  247 => 125,  245 => 124,  238 => 121,  236 => 120,  229 => 117,  227 => 116,  219 => 111,  213 => 109,  211 => 108,  204 => 105,  202 => 104,  195 => 101,  193 => 100,  186 => 97,  184 => 96,  153 => 67,  149 => 65,  143 => 63,  141 => 62,  125 => 49,  110 => 37,  95 => 25,  79 => 12,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/communication/statistics.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\communication\\statistics.html.twig");
    }
}
