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

/* back/communication/edit.html.twig */
class __TwigTemplate_90ca692e61162daa9f276761dba8890f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/communication/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/communication/edit.html.twig"));

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

        yield "Modifier Communication #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">
                            <i class=\"fas fa-edit me-2\"></i>
                            Modifier la communication #";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
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
                    <form method=\"post\" action=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
        yield "\">
                        <!-- AJOUTEZ CETTE LIGNE CI-DESSOUS -->
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("communication_edit_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24))), "html", null, true);
        yield "\">
                        
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Type *</label>
                                <select name=\"type\" class=\"form-select\" required>
                                    <option value=\"live\" ";
        // line 30
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 30, $this->source); })()), "type", [], "any", false, false, false, 30) == "live")) {
            yield "selected";
        }
        yield ">En direct</option>
                                    <option value=\"record\" ";
        // line 31
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 31, $this->source); })()), "type", [], "any", false, false, false, 31) == "record")) {
            yield "selected";
        }
        yield ">Enregistré</option>
                                </select>
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Publication *</label>
                                <select name=\"publication\" class=\"form-select\" required>
                                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 39
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 39), "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 39, $this->source); })()), "publication", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39) == CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 39))) {
                yield "selected";
            }
            yield ">
                                        ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "titre", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "titre", [], "any", false, false, false, 40), ((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "title", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "title", [], "any", false, false, false, 40), ("Publication #" . CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 40)))) : (("Publication #" . CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 40)))))) : (((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "title", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "title", [], "any", false, false, false, 40), ("Publication #" . CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 40)))) : (("Publication #" . CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 40)))))), "html", null, true);
            yield "
                                    </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['publication'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "                                </select>
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Date et heure *</label>
                                <input type=\"datetime-local\" name=\"dateHeure\" class=\"form-control\" 
                                       value=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 49, $this->source); })()), "dateHeure", [], "any", false, false, false, 49), "Y-m-d\\TH:i"), "html", null, true);
        yield "\" required>
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Durée (minutes)</label>
                                <input type=\"number\" name=\"duree\" class=\"form-control\" 
                                       value=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 55, $this->source); })()), "duree", [], "any", false, false, false, 55), "html", null, true);
        yield "\" min=\"1\" placeholder=\"Durée en minutes\">
                            </div>
                            
                            <div class=\"col-md-12 mb-3\">
                                <label class=\"form-label\">Lien</label>
                                <input type=\"url\" name=\"lien\" class=\"form-control\" 
                                       value=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 61, $this->source); })()), "lien", [], "any", false, false, false, 61), "html", null, true);
        yield "\" placeholder=\"https://...\">
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">État *</label>
                                <select name=\"etat\" class=\"form-select\" required>
                                    <option value=\"planifie\" ";
        // line 67
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 67, $this->source); })()), "etat", [], "any", false, false, false, 67) == "planifie")) {
            yield "selected";
        }
        yield ">Planifié</option>
                                    <option value=\"en_cours\" ";
        // line 68
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 68, $this->source); })()), "etat", [], "any", false, false, false, 68) == "en_cours")) {
            yield "selected";
        }
        yield ">En cours</option>
                                    <option value=\"termine\" ";
        // line 69
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 69, $this->source); })()), "etat", [], "any", false, false, false, 69) == "termine")) {
            yield "selected";
        }
        yield ">Terminé</option>
                                    <option value=\"annule\" ";
        // line 70
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 70, $this->source); })()), "etat", [], "any", false, false, false, 70) == "annule")) {
            yield "selected";
        }
        yield ">Annulé</option>
                                </select>
                            </div>
                            
                            <div class=\"col-12 mb-3\">
                                <label class=\"form-label\">Description détaillée</label>
                                <textarea name=\"descriptionDetaillee\" class=\"form-control\" rows=\"4\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 76, $this->source); })()), "descriptionDetaillee", [], "any", false, false, false, 76), "html", null, true);
        yield "</textarea>
                            </div>
                        </div>
                        
                        <div class=\"d-flex justify-content-between mt-4\">
                            <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_index");
        yield "\" class=\"btn btn-outline-secondary\">
                                Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-save me-2\"></i>
                                Modifier
                            </button>
                        </div>
                    </form>
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
        return "back/communication/edit.html.twig";
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
        return array (  251 => 81,  243 => 76,  232 => 70,  226 => 69,  220 => 68,  214 => 67,  205 => 61,  196 => 55,  187 => 49,  179 => 43,  170 => 40,  161 => 39,  157 => 38,  145 => 31,  139 => 30,  130 => 24,  125 => 22,  116 => 16,  111 => 14,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Communication #{{ communication.id }}{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">
                            <i class=\"fas fa-edit me-2\"></i>
                            Modifier la communication #{{ communication.id }}
                        </h5>
                        <a href=\"{{ path('back_communication_index') }}\" class=\"btn btn-outline-secondary btn-sm\">
                            <i class=\"fas fa-arrow-left me-1\"></i>Retour
                        </a>
                    </div>
                </div>
                <div class=\"card-body\">
                    <form method=\"post\" action=\"{{ path('back_communication_edit', {'id': communication.id}) }}\">
                        <!-- AJOUTEZ CETTE LIGNE CI-DESSOUS -->
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('communication_edit_' ~ communication.id) }}\">
                        
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Type *</label>
                                <select name=\"type\" class=\"form-select\" required>
                                    <option value=\"live\" {% if communication.type == 'live' %}selected{% endif %}>En direct</option>
                                    <option value=\"record\" {% if communication.type == 'record' %}selected{% endif %}>Enregistré</option>
                                </select>
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Publication *</label>
                                <select name=\"publication\" class=\"form-select\" required>
                                    {% for publication in publications %}
                                    <option value=\"{{ publication.id }}\" {% if communication.publication.id == publication.id %}selected{% endif %}>
                                        {{ publication.titre|default(publication.title|default('Publication #' ~ publication.id)) }}
                                    </option>
                                    {% endfor %}
                                </select>
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Date et heure *</label>
                                <input type=\"datetime-local\" name=\"dateHeure\" class=\"form-control\" 
                                       value=\"{{ communication.dateHeure|date('Y-m-d\\\\TH:i') }}\" required>
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">Durée (minutes)</label>
                                <input type=\"number\" name=\"duree\" class=\"form-control\" 
                                       value=\"{{ communication.duree }}\" min=\"1\" placeholder=\"Durée en minutes\">
                            </div>
                            
                            <div class=\"col-md-12 mb-3\">
                                <label class=\"form-label\">Lien</label>
                                <input type=\"url\" name=\"lien\" class=\"form-control\" 
                                       value=\"{{ communication.lien }}\" placeholder=\"https://...\">
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">État *</label>
                                <select name=\"etat\" class=\"form-select\" required>
                                    <option value=\"planifie\" {% if communication.etat == 'planifie' %}selected{% endif %}>Planifié</option>
                                    <option value=\"en_cours\" {% if communication.etat == 'en_cours' %}selected{% endif %}>En cours</option>
                                    <option value=\"termine\" {% if communication.etat == 'termine' %}selected{% endif %}>Terminé</option>
                                    <option value=\"annule\" {% if communication.etat == 'annule' %}selected{% endif %}>Annulé</option>
                                </select>
                            </div>
                            
                            <div class=\"col-12 mb-3\">
                                <label class=\"form-label\">Description détaillée</label>
                                <textarea name=\"descriptionDetaillee\" class=\"form-control\" rows=\"4\">{{ communication.descriptionDetaillee }}</textarea>
                            </div>
                        </div>
                        
                        <div class=\"d-flex justify-content-between mt-4\">
                            <a href=\"{{ path('back_communication_index') }}\" class=\"btn btn-outline-secondary\">
                                Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-save me-2\"></i>
                                Modifier
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "back/communication/edit.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\communication\\edit.html.twig");
    }
}
