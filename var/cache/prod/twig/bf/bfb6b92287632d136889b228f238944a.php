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

/* back/communication/show.html.twig */
class __TwigTemplate_5ecd1a17a2bcc238953999fcfbfe18d6 extends Template
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
        yield "Communication #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
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
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">
                            <i class=\"fas fa-eye me-2\"></i>
                            Détails de la communication #";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
        yield "
                        </h5>
                        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_index");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                            <i class=\"fas fa-arrow-left me-1\"></i>Retour
                        </a>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label fw-bold\">Type</label>
                            <div>
                                <span class=\"badge ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "type", [], "any", false, false, false, 26) == "live")) {
            yield "badge-danger";
        } else {
            yield "badge-info";
        }
        yield "\">
                                    ";
        // line 27
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "type", [], "any", false, false, false, 27) == "live")) ? ("En direct") : ("Enregistré"));
        yield "
                                </span>
                            </div>
                        </div>
                        
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label fw-bold\">État</label>
                            <div>
                                <span class=\"badge 
                                    ";
        // line 36
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "etat", [], "any", false, false, false, 36) == "planifie")) {
            yield "badge-warning
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 37
($context["communication"] ?? null), "etat", [], "any", false, false, false, 37) == "en_cours")) {
            yield "badge-success
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["communication"] ?? null), "etat", [], "any", false, false, false, 38) == "termine")) {
            yield "badge-info
                                    ";
        } else {
            // line 39
            yield "badge-danger";
        }
        yield "\">
                                    ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "etat", [], "any", false, false, false, 40), ["_" => " "])), "html", null, true);
        yield "
                                </span>
                            </div>
                        </div>
                        
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label fw-bold\">Publication</label>
                            <div>
                                ";
        // line 48
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "publication", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "                                    <a href=\"#\" class=\"text-decoration-none\">
                                        ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "publication", [], "any", false, true, false, 50), "titre", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "publication", [], "any", false, false, false, 50), "titre", [], "any", false, false, false, 50), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "publication", [], "any", false, true, false, 50), "title", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "publication", [], "any", false, false, false, 50), "title", [], "any", false, false, false, 50), ("Publication #" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "publication", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)))) : (("Publication #" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "publication", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)))))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "publication", [], "any", false, true, false, 50), "title", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "publication", [], "any", false, false, false, 50), "title", [], "any", false, false, false, 50), ("Publication #" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "publication", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)))) : (("Publication #" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "publication", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)))))), "html", null, true);
            yield "
                                    </a>
                                ";
        } else {
            // line 53
            yield "                                    <span class=\"text-muted\">Non spécifiée</span>
                                ";
        }
        // line 55
        yield "                            </div>
                        </div>
                        
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label fw-bold\">Date et heure</label>
                            <div>";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "dateHeure", [], "any", false, false, false, 60), "d/m/Y H:i"), "html", null, true);
        yield "</div>
                        </div>
                        
                        ";
        // line 63
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "duree", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label fw-bold\">Durée</label>
                            <div>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "duree", [], "any", false, false, false, 66), "html", null, true);
            yield " minutes</div>
                        </div>
                        ";
        }
        // line 69
        yield "                        
                        ";
        // line 70
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "lien", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "                        <div class=\"col-md-12 mb-3\">
                            <label class=\"form-label fw-bold\">Lien</label>
                            <div>
                                <a href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "lien", [], "any", false, false, false, 74), "html", null, true);
            yield "\" target=\"_blank\" class=\"text-decoration-none\">
                                    <i class=\"fas fa-external-link-alt me-1\"></i>
                                    ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "lien", [], "any", false, false, false, 76)), "truncate", [50, "..."], "method", false, false, false, 76), "html", null, true);
            yield "
                                </a>
                            </div>
                        </div>
                        ";
        }
        // line 81
        yield "                        
                        ";
        // line 82
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "descriptionDetaillee", [], "any", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 83
            yield "                        <div class=\"col-12 mb-3\">
                            <label class=\"form-label fw-bold\">Description détaillée</label>
                            <div class=\"border rounded p-3 bg-light\">
                                ";
            // line 86
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "descriptionDetaillee", [], "any", false, false, false, 86), "html", null, true));
            yield "
                            </div>
                        </div>
                        ";
        }
        // line 90
        yield "                    </div>
                    
                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_index");
        yield "\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-list me-1\"></i> Retour à la liste
                        </a>
                        <div class=\"d-flex gap-2\">
                            <a href=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "id", [], "any", false, false, false, 97)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit me-1\"></i> Modifier
                            </a>
                            <form method=\"post\" action=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "id", [], "any", false, false, false, 100)]), "html", null, true);
        yield "\" 
                                  onsubmit=\"return confirm('Supprimer cette communication ?');\" class=\"d-inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "id", [], "any", false, false, false, 102))), "html", null, true);
        yield "\">
                                <button type=\"submit\" class=\"btn btn-danger\">
                                    <i class=\"fas fa-trash me-1\"></i> Supprimer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/communication/show.html.twig";
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
        return array (  251 => 102,  246 => 100,  240 => 97,  233 => 93,  228 => 90,  221 => 86,  216 => 83,  214 => 82,  211 => 81,  203 => 76,  198 => 74,  193 => 71,  191 => 70,  188 => 69,  182 => 66,  178 => 64,  176 => 63,  170 => 60,  163 => 55,  159 => 53,  153 => 50,  150 => 49,  148 => 48,  137 => 40,  132 => 39,  127 => 38,  123 => 37,  119 => 36,  107 => 27,  99 => 26,  86 => 16,  81 => 14,  71 => 6,  64 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/communication/show.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\communication\\show.html.twig");
    }
}
