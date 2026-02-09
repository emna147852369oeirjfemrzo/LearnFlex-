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
class __TwigTemplate_e2c83928d91c06f5ad1c7e89804db608 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/communication/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/communication/new.html.twig"));

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

        yield "Nouvelle Communication";
        
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
                
                <!-- AJOUT DE LA NOTE EXPLICATIVE -->
                <div class=\"card-body bg-light border-bottom\">
                    <div class=\"alert alert-info mb-0\">
                        <div class=\"d-flex\">
                            <div class=\"flex-shrink-0\">
                                <i class=\"fas fa-info-circle fa-2x\"></i>
                            </div>
                            <div class=\"flex-grow-1 ms-3\">
                                <h5 class=\"alert-heading\">💬 Nouvelle fonctionnalité !</h5>
                                <p class=\"mb-2\">
                                    <strong>Les communications que vous créez ici apparaîtront automatiquement dans le chat du forum !</strong>
                                </p>
                                <p class=\"mb-2\">
                                    Les utilisateurs pourront les voir dans : <br>
                                    <code>Forum → Chat → Section \"Communications officielles\"</code>
                                </p>
                                <hr class=\"my-2\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <strong><i class=\"fas fa-bullhorn text-primary\"></i> Pour une annonce texte :</strong>
                                        <ul class=\"mb-0 small\">
                                            <li><span class=\"badge bg-info\">Type : Enregistré</span></li>
                                            <li><span class=\"badge bg-secondary\">Lien : Optionnel</span></li>
                                            <li><span class=\"badge bg-success\">État : Terminé</span></li>
                                        </ul>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <strong><i class=\"fas fa-video text-danger\"></i> Pour un live/visio :</strong>
                                        <ul class=\"mb-0 small\">
                                            <li><span class=\"badge bg-danger\">Type : En direct</span></li>
                                            <li><span class=\"badge bg-primary\">Lien : URL obligatoire</span></li>
                                            <li><span class=\"badge bg-warning\">État : Planifié ou En cours</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"mt-3\">
                                    <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("communication_chat");
        yield "\" target=\"_blank\" class=\"btn btn-sm btn-outline-primary\">
                                        <i class=\"fas fa-external-link-alt me-1\"></i> Voir le chat maintenant
                                    </a>
                                    <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_index");
        yield "\" target=\"_blank\" class=\"btn btn-sm btn-outline-secondary\">
                                        <i class=\"fas fa-comments me-1\"></i> Aller au forum
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN DE LA NOTE -->
                
                <div class=\"card-body\">
                    <form method=\"post\" action=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_new");
        yield "\">
                        <!-- AJOUT DU TOKEN CSRF -->
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("communication_new"), "html", null, true);
        yield "\">
                        
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">
                                    <i class=\"fas fa-broadcast-tower me-1\"></i>
                                    Type *
                                </label>
                                <select name=\"type\" class=\"form-select\" required onchange=\"updateForm()\" id=\"typeSelect\">
                                    <option value=\"\">Choisir un type</option>
                                    <option value=\"live\">En direct (Visioconférence)</option>
                                    <option value=\"record\">Enregistré (Annonce texte)</option>
                                </select>
                                <small class=\"text-muted\" id=\"typeHelp\">
                                    Sélectionnez le type de communication
                                </small>
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">
                                    <i class=\"fas fa-newspaper me-1\"></i>
                                    Publication *
                                </label>
                                <select name=\"publication\" class=\"form-select\" required>
                                    <option value=\"\">Choisir une publication</option>
                                    ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 99, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 100
            yield "                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 100), "html", null, true);
            yield "\">
                                        ";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "titre", [], "any", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "titre", [], "any", false, false, false, 101), ((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "title", [], "any", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "title", [], "any", false, false, false, 101), ("Publication #" . CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 101)))) : (("Publication #" . CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 101)))))) : (((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "title", [], "any", true, true, false, 101)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "title", [], "any", false, false, false, 101), ("Publication #" . CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 101)))) : (("Publication #" . CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 101)))))), 0, 50), "html", null, true);
            yield "
                                        ";
            // line 102
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "titre", [], "any", true, true, false, 102)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "titre", [], "any", false, false, false, 102), ((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "title", [], "any", true, true, false, 102)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "title", [], "any", false, false, false, 102), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "title", [], "any", true, true, false, 102)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "title", [], "any", false, false, false, 102), "")) : (""))))) > 50)) {
                yield "...";
            }
            // line 103
            yield "                                    </option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['publication'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        yield "                                </select>
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">
                                    <i class=\"far fa-calendar-alt me-1\"></i>
                                    Date et heure *
                                </label>
                                <input type=\"datetime-local\" name=\"dateHeure\" class=\"form-control\" required>
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">
                                    <i class=\"far fa-clock me-1\"></i>
                                    Durée (minutes)
                                </label>
                                <input type=\"number\" name=\"duree\" class=\"form-control\" min=\"1\" placeholder=\"Ex: 60 pour 1 heure\">
                                <small class=\"text-muted\">Laisser vide si non applicable</small>
                            </div>
                            
                            <div class=\"col-md-12 mb-3\">
                                <label class=\"form-label\">
                                    <i class=\"fas fa-link me-1\"></i>
                                    Lien <span id=\"linkRequired\" class=\"text-danger\">*</span>
                                </label>
                                <input type=\"url\" name=\"lien\" class=\"form-control\" placeholder=\"https://meet.google.com/... ou https://zoom.us/...\" id=\"lienInput\">
                                <small class=\"text-muted\" id=\"linkHelp\">
                                    URL de la visioconférence pour les communications en direct
                                </small>
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">
                                    <i class=\"fas fa-tasks me-1\"></i>
                                    État *
                                </label>
                                <select name=\"etat\" class=\"form-select\" required id=\"etatSelect\">
                                    <option value=\"planifie\">Planifié</option>
                                    <option value=\"en_cours\">En cours</option>
                                    <option value=\"termine\">Terminé</option>
                                    <option value=\"annule\">Annulé</option>
                                </select>
                            </div>
                            
                            <div class=\"col-12 mb-3\">
                                <label class=\"form-label\">
                                    <i class=\"fas fa-align-left me-1\"></i>
                                    Description détaillée *
                                </label>
                                <textarea name=\"descriptionDetaillee\" class=\"form-control\" rows=\"4\" 
                                          placeholder=\"Description de la communication (sera visible dans le chat des utilisateurs)...\" 
                                          required></textarea>
                                <small class=\"text-muted\">
                                    Cette description apparaîtra dans le chat du forum. Soyez clair et concis.
                                </small>
                            </div>
                        </div>
                        
                        <div class=\"d-flex justify-content-between mt-4 pt-3 border-top\">
                            <a href=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_index");
        yield "\" class=\"btn btn-outline-secondary\">
                                <i class=\"fas fa-times me-1\"></i> Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-save me-2\"></i>
                                Créer la communication
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Script pour adapter le formulaire selon le type
function updateForm() {
    const typeSelect = document.getElementById('typeSelect');
    const lienInput = document.getElementById('lienInput');
    const linkRequired = document.getElementById('linkRequired');
    const linkHelp = document.getElementById('linkHelp');
    const etatSelect = document.getElementById('etatSelect');
    const typeHelp = document.getElementById('typeHelp');
    
    if (typeSelect.value === 'live') {
        // Mode \"En direct\" (visio)
        lienInput.required = true;
        linkRequired.style.display = 'inline';
        linkHelp.textContent = 'URL de la visioconférence obligatoire (Google Meet, Zoom, etc.)';
        typeHelp.innerHTML = '<span class=\"text-danger\"><i class=\"fas fa-video\"></i> Communication en direct avec lien de visioconférence</span>';
        
        // États suggérés pour live
        etatSelect.innerHTML = `
            <option value=\"planifie\">Planifié</option>
            <option value=\"en_cours\" selected>En cours</option>
            <option value=\"termine\">Terminé</option>
            <option value=\"annule\">Annulé</option>
        `;
        
    } else if (typeSelect.value === 'record') {
        // Mode \"Enregistré\" (annonce texte)
        lienInput.required = false;
        linkRequired.style.display = 'none';
        linkHelp.textContent = 'Optionnel - Lien vers une ressource complémentaire';
        typeHelp.innerHTML = '<span class=\"text-info\"><i class=\"fas fa-bullhorn\"></i> Annonce texte qui apparaîtra dans le chat</span>';
        
        // États suggérés pour record
        etatSelect.innerHTML = `
            <option value=\"planifie\">Planifié</option>
            <option value=\"en_cours\">En cours</option>
            <option value=\"termine\" selected>Terminé</option>
            <option value=\"annule\">Annulé</option>
        `;
    } else {
        // Aucun type sélectionné
        lienInput.required = false;
        linkRequired.style.display = 'inline';
        linkHelp.textContent = 'URL de la visioconférence pour les communications en direct';
        typeHelp.textContent = 'Sélectionnez le type de communication';
    }
}

// Initialiser au chargement
document.addEventListener('DOMContentLoaded', function() {
    updateForm();
    
    // Pré-remplir la date avec maintenant + 1 heure
    const now = new Date();
    now.setHours(now.getHours() + 1);
    const dateInput = document.querySelector('input[name=\"dateHeure\"]');
    dateInput.value = now.toISOString().slice(0, 16);
});
</script>

<style>
.alert-info {
    border-left: 4px solid #0dcaf0;
}
.badge {
    font-size: 0.75em;
}
.form-label {
    font-weight: 500;
    color: #495057;
}
</style>
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
        return array (  295 => 164,  234 => 105,  227 => 103,  223 => 102,  219 => 101,  214 => 100,  210 => 99,  182 => 74,  177 => 72,  163 => 61,  157 => 58,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle Communication{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">
                            <i class=\"fas fa-plus me-2\"></i>
                            Nouvelle communication
                        </h5>
                        <a href=\"{{ path('back_communication_index') }}\" class=\"btn btn-outline-secondary btn-sm\">
                            <i class=\"fas fa-arrow-left me-1\"></i>Retour
                        </a>
                    </div>
                </div>
                
                <!-- AJOUT DE LA NOTE EXPLICATIVE -->
                <div class=\"card-body bg-light border-bottom\">
                    <div class=\"alert alert-info mb-0\">
                        <div class=\"d-flex\">
                            <div class=\"flex-shrink-0\">
                                <i class=\"fas fa-info-circle fa-2x\"></i>
                            </div>
                            <div class=\"flex-grow-1 ms-3\">
                                <h5 class=\"alert-heading\">💬 Nouvelle fonctionnalité !</h5>
                                <p class=\"mb-2\">
                                    <strong>Les communications que vous créez ici apparaîtront automatiquement dans le chat du forum !</strong>
                                </p>
                                <p class=\"mb-2\">
                                    Les utilisateurs pourront les voir dans : <br>
                                    <code>Forum → Chat → Section \"Communications officielles\"</code>
                                </p>
                                <hr class=\"my-2\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <strong><i class=\"fas fa-bullhorn text-primary\"></i> Pour une annonce texte :</strong>
                                        <ul class=\"mb-0 small\">
                                            <li><span class=\"badge bg-info\">Type : Enregistré</span></li>
                                            <li><span class=\"badge bg-secondary\">Lien : Optionnel</span></li>
                                            <li><span class=\"badge bg-success\">État : Terminé</span></li>
                                        </ul>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <strong><i class=\"fas fa-video text-danger\"></i> Pour un live/visio :</strong>
                                        <ul class=\"mb-0 small\">
                                            <li><span class=\"badge bg-danger\">Type : En direct</span></li>
                                            <li><span class=\"badge bg-primary\">Lien : URL obligatoire</span></li>
                                            <li><span class=\"badge bg-warning\">État : Planifié ou En cours</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"mt-3\">
                                    <a href=\"{{ path('communication_chat') }}\" target=\"_blank\" class=\"btn btn-sm btn-outline-primary\">
                                        <i class=\"fas fa-external-link-alt me-1\"></i> Voir le chat maintenant
                                    </a>
                                    <a href=\"{{ path('forum_index') }}\" target=\"_blank\" class=\"btn btn-sm btn-outline-secondary\">
                                        <i class=\"fas fa-comments me-1\"></i> Aller au forum
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIN DE LA NOTE -->
                
                <div class=\"card-body\">
                    <form method=\"post\" action=\"{{ path('back_communication_new') }}\">
                        <!-- AJOUT DU TOKEN CSRF -->
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('communication_new') }}\">
                        
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">
                                    <i class=\"fas fa-broadcast-tower me-1\"></i>
                                    Type *
                                </label>
                                <select name=\"type\" class=\"form-select\" required onchange=\"updateForm()\" id=\"typeSelect\">
                                    <option value=\"\">Choisir un type</option>
                                    <option value=\"live\">En direct (Visioconférence)</option>
                                    <option value=\"record\">Enregistré (Annonce texte)</option>
                                </select>
                                <small class=\"text-muted\" id=\"typeHelp\">
                                    Sélectionnez le type de communication
                                </small>
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">
                                    <i class=\"fas fa-newspaper me-1\"></i>
                                    Publication *
                                </label>
                                <select name=\"publication\" class=\"form-select\" required>
                                    <option value=\"\">Choisir une publication</option>
                                    {% for publication in publications %}
                                    <option value=\"{{ publication.id }}\">
                                        {{ publication.titre|default(publication.title|default('Publication #' ~ publication.id))|slice(0, 50) }}
                                        {% if publication.titre|default(publication.title|default(''))|length > 50 %}...{% endif %}
                                    </option>
                                    {% endfor %}
                                </select>
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">
                                    <i class=\"far fa-calendar-alt me-1\"></i>
                                    Date et heure *
                                </label>
                                <input type=\"datetime-local\" name=\"dateHeure\" class=\"form-control\" required>
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">
                                    <i class=\"far fa-clock me-1\"></i>
                                    Durée (minutes)
                                </label>
                                <input type=\"number\" name=\"duree\" class=\"form-control\" min=\"1\" placeholder=\"Ex: 60 pour 1 heure\">
                                <small class=\"text-muted\">Laisser vide si non applicable</small>
                            </div>
                            
                            <div class=\"col-md-12 mb-3\">
                                <label class=\"form-label\">
                                    <i class=\"fas fa-link me-1\"></i>
                                    Lien <span id=\"linkRequired\" class=\"text-danger\">*</span>
                                </label>
                                <input type=\"url\" name=\"lien\" class=\"form-control\" placeholder=\"https://meet.google.com/... ou https://zoom.us/...\" id=\"lienInput\">
                                <small class=\"text-muted\" id=\"linkHelp\">
                                    URL de la visioconférence pour les communications en direct
                                </small>
                            </div>
                            
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"form-label\">
                                    <i class=\"fas fa-tasks me-1\"></i>
                                    État *
                                </label>
                                <select name=\"etat\" class=\"form-select\" required id=\"etatSelect\">
                                    <option value=\"planifie\">Planifié</option>
                                    <option value=\"en_cours\">En cours</option>
                                    <option value=\"termine\">Terminé</option>
                                    <option value=\"annule\">Annulé</option>
                                </select>
                            </div>
                            
                            <div class=\"col-12 mb-3\">
                                <label class=\"form-label\">
                                    <i class=\"fas fa-align-left me-1\"></i>
                                    Description détaillée *
                                </label>
                                <textarea name=\"descriptionDetaillee\" class=\"form-control\" rows=\"4\" 
                                          placeholder=\"Description de la communication (sera visible dans le chat des utilisateurs)...\" 
                                          required></textarea>
                                <small class=\"text-muted\">
                                    Cette description apparaîtra dans le chat du forum. Soyez clair et concis.
                                </small>
                            </div>
                        </div>
                        
                        <div class=\"d-flex justify-content-between mt-4 pt-3 border-top\">
                            <a href=\"{{ path('back_communication_index') }}\" class=\"btn btn-outline-secondary\">
                                <i class=\"fas fa-times me-1\"></i> Annuler
                            </a>
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fas fa-save me-2\"></i>
                                Créer la communication
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Script pour adapter le formulaire selon le type
function updateForm() {
    const typeSelect = document.getElementById('typeSelect');
    const lienInput = document.getElementById('lienInput');
    const linkRequired = document.getElementById('linkRequired');
    const linkHelp = document.getElementById('linkHelp');
    const etatSelect = document.getElementById('etatSelect');
    const typeHelp = document.getElementById('typeHelp');
    
    if (typeSelect.value === 'live') {
        // Mode \"En direct\" (visio)
        lienInput.required = true;
        linkRequired.style.display = 'inline';
        linkHelp.textContent = 'URL de la visioconférence obligatoire (Google Meet, Zoom, etc.)';
        typeHelp.innerHTML = '<span class=\"text-danger\"><i class=\"fas fa-video\"></i> Communication en direct avec lien de visioconférence</span>';
        
        // États suggérés pour live
        etatSelect.innerHTML = `
            <option value=\"planifie\">Planifié</option>
            <option value=\"en_cours\" selected>En cours</option>
            <option value=\"termine\">Terminé</option>
            <option value=\"annule\">Annulé</option>
        `;
        
    } else if (typeSelect.value === 'record') {
        // Mode \"Enregistré\" (annonce texte)
        lienInput.required = false;
        linkRequired.style.display = 'none';
        linkHelp.textContent = 'Optionnel - Lien vers une ressource complémentaire';
        typeHelp.innerHTML = '<span class=\"text-info\"><i class=\"fas fa-bullhorn\"></i> Annonce texte qui apparaîtra dans le chat</span>';
        
        // États suggérés pour record
        etatSelect.innerHTML = `
            <option value=\"planifie\">Planifié</option>
            <option value=\"en_cours\">En cours</option>
            <option value=\"termine\" selected>Terminé</option>
            <option value=\"annule\">Annulé</option>
        `;
    } else {
        // Aucun type sélectionné
        lienInput.required = false;
        linkRequired.style.display = 'inline';
        linkHelp.textContent = 'URL de la visioconférence pour les communications en direct';
        typeHelp.textContent = 'Sélectionnez le type de communication';
    }
}

// Initialiser au chargement
document.addEventListener('DOMContentLoaded', function() {
    updateForm();
    
    // Pré-remplir la date avec maintenant + 1 heure
    const now = new Date();
    now.setHours(now.getHours() + 1);
    const dateInput = document.querySelector('input[name=\"dateHeure\"]');
    dateInput.value = now.toISOString().slice(0, 16);
});
</script>

<style>
.alert-info {
    border-left: 4px solid #0dcaf0;
}
.badge {
    font-size: 0.75em;
}
.form-label {
    font-weight: 500;
    color: #495057;
}
</style>
{% endblock %}", "back/communication/new.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\communication\\new.html.twig");
    }
}
