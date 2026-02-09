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
class __TwigTemplate_67b00a6806da7040e9499058736a9ced extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/communication/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/communication/show.html.twig"));

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

        yield "Communication #";
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
                            <i class=\"fas fa-eye me-2\"></i>
                            Détails de la communication #";
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
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label fw-bold\">Type</label>
                            <div>
                                <span class=\"badge ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 26, $this->source); })()), "type", [], "any", false, false, false, 26) == "live")) {
            yield "badge-danger";
        } else {
            yield "badge-info";
        }
        yield "\">
                                    ";
        // line 27
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 27, $this->source); })()), "type", [], "any", false, false, false, 27) == "live")) ? ("En direct") : ("Enregistré"));
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
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 36, $this->source); })()), "etat", [], "any", false, false, false, 36) == "planifie")) {
            yield "badge-warning
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 37
(isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 37, $this->source); })()), "etat", [], "any", false, false, false, 37) == "en_cours")) {
            yield "badge-success
                                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 38
(isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 38, $this->source); })()), "etat", [], "any", false, false, false, 38) == "termine")) {
            yield "badge-info
                                    ";
        } else {
            // line 39
            yield "badge-danger";
        }
        yield "\">
                                    ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 40, $this->source); })()), "etat", [], "any", false, false, false, 40), ["_" => " "])), "html", null, true);
        yield "
                                </span>
                            </div>
                        </div>
                        
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label fw-bold\">Publication</label>
                            <div>
                                ";
        // line 48
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 48, $this->source); })()), "publication", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "                                    <a href=\"#\" class=\"text-decoration-none\">
                                        ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "publication", [], "any", false, true, false, 50), "titre", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 50, $this->source); })()), "publication", [], "any", false, false, false, 50), "titre", [], "any", false, false, false, 50), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "publication", [], "any", false, true, false, 50), "title", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 50, $this->source); })()), "publication", [], "any", false, false, false, 50), "title", [], "any", false, false, false, 50), ("Publication #" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 50, $this->source); })()), "publication", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)))) : (("Publication #" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 50, $this->source); })()), "publication", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)))))) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["communication"] ?? null), "publication", [], "any", false, true, false, 50), "title", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 50, $this->source); })()), "publication", [], "any", false, false, false, 50), "title", [], "any", false, false, false, 50), ("Publication #" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 50, $this->source); })()), "publication", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)))) : (("Publication #" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 50, $this->source); })()), "publication", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)))))), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 60, $this->source); })()), "dateHeure", [], "any", false, false, false, 60), "d/m/Y H:i"), "html", null, true);
        yield "</div>
                        </div>
                        
                        ";
        // line 63
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 63, $this->source); })()), "duree", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label fw-bold\">Durée</label>
                            <div>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 66, $this->source); })()), "duree", [], "any", false, false, false, 66), "html", null, true);
            yield " minutes</div>
                        </div>
                        ";
        }
        // line 69
        yield "                        
                        ";
        // line 70
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 70, $this->source); })()), "lien", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "                        <div class=\"col-md-12 mb-3\">
                            <label class=\"form-label fw-bold\">Lien</label>
                            <div>
                                <a href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 74, $this->source); })()), "lien", [], "any", false, false, false, 74), "html", null, true);
            yield "\" target=\"_blank\" class=\"text-decoration-none\">
                                    <i class=\"fas fa-external-link-alt me-1\"></i>
                                    ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 76, $this->source); })()), "lien", [], "any", false, false, false, 76)), "truncate", [50, "..."], "method", false, false, false, 76), "html", null, true);
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 82, $this->source); })()), "descriptionDetaillee", [], "any", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 83
            yield "                        <div class=\"col-12 mb-3\">
                            <label class=\"form-label fw-bold\">Description détaillée</label>
                            <div class=\"border rounded p-3 bg-light\">
                                ";
            // line 86
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 86, $this->source); })()), "descriptionDetaillee", [], "any", false, false, false, 86), "html", null, true));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit me-1\"></i> Modifier
                            </a>
                            <form method=\"post\" action=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100)]), "html", null, true);
        yield "\" 
                                  onsubmit=\"return confirm('Supprimer cette communication ?');\" class=\"d-inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["communication"]) || array_key_exists("communication", $context) ? $context["communication"] : (function () { throw new RuntimeError('Variable "communication" does not exist.', 102, $this->source); })()), "id", [], "any", false, false, false, 102))), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  281 => 102,  276 => 100,  270 => 97,  263 => 93,  258 => 90,  251 => 86,  246 => 83,  244 => 82,  241 => 81,  233 => 76,  228 => 74,  223 => 71,  221 => 70,  218 => 69,  212 => 66,  208 => 64,  206 => 63,  200 => 60,  193 => 55,  189 => 53,  183 => 50,  180 => 49,  178 => 48,  167 => 40,  162 => 39,  157 => 38,  153 => 37,  149 => 36,  137 => 27,  129 => 26,  116 => 16,  111 => 14,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Communication #{{ communication.id }}{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">
                            <i class=\"fas fa-eye me-2\"></i>
                            Détails de la communication #{{ communication.id }}
                        </h5>
                        <a href=\"{{ path('back_communication_index') }}\" class=\"btn btn-outline-secondary btn-sm\">
                            <i class=\"fas fa-arrow-left me-1\"></i>Retour
                        </a>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label fw-bold\">Type</label>
                            <div>
                                <span class=\"badge {% if communication.type == 'live' %}badge-danger{% else %}badge-info{% endif %}\">
                                    {{ communication.type == 'live' ? 'En direct' : 'Enregistré' }}
                                </span>
                            </div>
                        </div>
                        
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label fw-bold\">État</label>
                            <div>
                                <span class=\"badge 
                                    {% if communication.etat == 'planifie' %}badge-warning
                                    {% elseif communication.etat == 'en_cours' %}badge-success
                                    {% elseif communication.etat == 'termine' %}badge-info
                                    {% else %}badge-danger{% endif %}\">
                                    {{ communication.etat|replace({'_': ' '})|title }}
                                </span>
                            </div>
                        </div>
                        
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label fw-bold\">Publication</label>
                            <div>
                                {% if communication.publication %}
                                    <a href=\"#\" class=\"text-decoration-none\">
                                        {{ communication.publication.titre|default(communication.publication.title|default('Publication #' ~ communication.publication.id)) }}
                                    </a>
                                {% else %}
                                    <span class=\"text-muted\">Non spécifiée</span>
                                {% endif %}
                            </div>
                        </div>
                        
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label fw-bold\">Date et heure</label>
                            <div>{{ communication.dateHeure|date('d/m/Y H:i') }}</div>
                        </div>
                        
                        {% if communication.duree %}
                        <div class=\"col-md-6 mb-3\">
                            <label class=\"form-label fw-bold\">Durée</label>
                            <div>{{ communication.duree }} minutes</div>
                        </div>
                        {% endif %}
                        
                        {% if communication.lien %}
                        <div class=\"col-md-12 mb-3\">
                            <label class=\"form-label fw-bold\">Lien</label>
                            <div>
                                <a href=\"{{ communication.lien }}\" target=\"_blank\" class=\"text-decoration-none\">
                                    <i class=\"fas fa-external-link-alt me-1\"></i>
                                    {{ communication.lien|u.truncate(50, '...') }}
                                </a>
                            </div>
                        </div>
                        {% endif %}
                        
                        {% if communication.descriptionDetaillee %}
                        <div class=\"col-12 mb-3\">
                            <label class=\"form-label fw-bold\">Description détaillée</label>
                            <div class=\"border rounded p-3 bg-light\">
                                {{ communication.descriptionDetaillee|nl2br }}
                            </div>
                        </div>
                        {% endif %}
                    </div>
                    
                    <div class=\"d-flex justify-content-between mt-4\">
                        <a href=\"{{ path('back_communication_index') }}\" class=\"btn btn-outline-secondary\">
                            <i class=\"fas fa-list me-1\"></i> Retour à la liste
                        </a>
                        <div class=\"d-flex gap-2\">
                            <a href=\"{{ path('back_communication_edit', {'id': communication.id}) }}\" class=\"btn btn-warning\">
                                <i class=\"fas fa-edit me-1\"></i> Modifier
                            </a>
                            <form method=\"post\" action=\"{{ path('back_communication_delete', {'id': communication.id}) }}\" 
                                  onsubmit=\"return confirm('Supprimer cette communication ?');\" class=\"d-inline\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ communication.id) }}\">
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
{% endblock %}", "back/communication/show.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\communication\\show.html.twig");
    }
}
