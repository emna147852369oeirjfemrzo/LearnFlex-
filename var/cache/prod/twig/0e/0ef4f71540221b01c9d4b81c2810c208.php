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

/* back/communication/new.html.twig */
class __TwigTemplate_ae87b7e9698decf594213538ec8cd537 extends Template
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
        yield "Nouvelle Communication";
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
                            <i class=\"fas fa-plus me-2\"></i>
                            Nouvelle communication
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
                    <form method=\"post\" action=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_new");
        yield "\">
                        <!-- AJOUT DU TOKEN CSRF -->
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("communication_new"), "html", null, true);
        yield "\">
                        
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Type *</label>
                                <select name=\"type\" class=\"form-select\" required>
                                    <option value=\"\">Choisir un type</option>
                                    <option value=\"live\">En direct</option>
                                    <option value=\"record\">Enregistré</option>
                                </select>
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Publication *</label>
                                <select name=\"publication\" class=\"form-select\" required>
                                    <option value=\"\">Choisir une publication</option>
                                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["publications"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 41
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 41), "html", null, true);
            yield "\">
                                        ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "titre", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "titre", [], "any", false, false, false, 42), ((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "title", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "title", [], "any", false, false, false, 42), ("Publication #" . CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 42)))) : (("Publication #" . CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 42)))))) : (((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "title", [], "any", true, true, false, 42)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "title", [], "any", false, false, false, 42), ("Publication #" . CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 42)))) : (("Publication #" . CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 42)))))), "html", null, true);
            yield "
                                    </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['publication'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                                </select>
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Date et heure *</label>
                                <input type=\"datetime-local\" name=\"dateHeure\" class=\"form-control\" required>
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Durée (minutes)</label>
                                <input type=\"number\" name=\"duree\" class=\"form-control\" min=\"1\" placeholder=\"Durée en minutes\">
                            </div>
                            
                            <div class=\"col-md-12 mb-3\">
                                <label class=\"form-label\">Lien</label>
                                <input type=\"url\" name=\"lien\" class=\"form-control\" placeholder=\"https://...\">
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">État *</label>
                                <select name=\"etat\" class=\"form-select\" required>
                                    <option value=\"planifie\">Planifié</option>
                                    <option value=\"en_cours\">En cours</option>
                                    <option value=\"termine\">Terminé</option>
                                    <option value=\"annule\">Annulé</option>
                                </select>
                            </div>
                            
                            <div class=\"col-12 mb-3\">
                                <label class=\"form-label\">Description détaillée</label>
                                <textarea name=\"descriptionDetaillee\" class=\"form-control\" rows=\"4\" placeholder=\"Description de la communication...\"></textarea>
                            </div>
                        </div>
                        
                        <div class=\"d-flex justify-content-between mt-4\">
                            <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_index");
        yield "\" class=\"btn btn-outline-secondary\">
                                Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-save me-2\"></i>
                                Créer
                            </button>
                        </div>
                    </form>
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
        return "back/communication/new.html.twig";
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
        return array (  170 => 80,  133 => 45,  124 => 42,  119 => 41,  115 => 40,  96 => 24,  91 => 22,  82 => 16,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/communication/new.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\communication\\new.html.twig");
    }
}
