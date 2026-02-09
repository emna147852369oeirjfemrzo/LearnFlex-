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

/* back/communication/export_pdf.html.twig */
class __TwigTemplate_0e75e8ebe32b9eea50804382a6a2db6a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/communication/export_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/communication/export_pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Export Communications - ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            font-size: 12px; 
            margin: 20px;
        }
        .header { 
            text-align: center; 
            margin-bottom: 20px; 
            border-bottom: 2px solid #333; 
            padding-bottom: 10px; 
        }
        .header h1 { 
            margin: 0; 
            color: #2c3e50; 
            font-size: 24px;
        }
        .header .date {
            color: #6c757d;
            font-size: 14px;
            margin-top: 5px;
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-bottom: 20px; 
        }
        table th { 
            background-color: #2c3e50; 
            color: white; 
            padding: 10px; 
            border: 1px solid #ddd;
            text-align: left;
            font-weight: bold;
        }
        table td { 
            padding: 8px 10px; 
            border: 1px solid #ddd;
            vertical-align: top;
        }
        .badge { 
            padding: 3px 8px; 
            border-radius: 3px; 
            font-size: 11px; 
            font-weight: bold;
            display: inline-block;
        }
        .badge-live { background-color: #dc3545; color: white; }
        .badge-record { background-color: #0d6efd; color: white; }
        .footer { 
            margin-top: 30px; 
            text-align: center; 
            font-size: 10px; 
            color: #6c757d; 
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Rapport des Communications</h1>
        <div class=\"date\">Généré le ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "</div>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Description</th>
                <th>Date/Heure</th>
                <th>Durée</th>
                <th>Publication</th>
                <th>État</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["communications"]) || array_key_exists("communications", $context) ? $context["communications"] : (function () { throw new RuntimeError('Variable "communications" does not exist.', 84, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["communication"]) {
            // line 85
            yield "            <tr>
                <td>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "id", [], "any", false, false, false, 86), "html", null, true);
            yield "</td>
                <td>
                    <span class=\"badge ";
            // line 88
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "type", [], "any", false, false, false, 88) == "live")) {
                yield "badge-live";
            } else {
                yield "badge-record";
            }
            yield "\">
                        ";
            // line 89
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "type", [], "any", false, false, false, 89) == "live")) ? ("En direct") : ("Enregistré"));
            yield "
                    </span>
                </td>
                <td>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", true, true, false, 92)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", false, false, false, 92), "Sans description")) : ("Sans description")), "html", null, true);
            yield "</td>
                <td>";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "dateHeure", [], "any", false, false, false, 93), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                <td>";
            // line 94
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "duree", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "duree", [], "any", false, false, false, 94) . " min"), "html", null, true)) : ("-"));
            yield "</td>
                <td>
                    ";
            // line 96
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "publication", [], "any", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 97
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "publication", [], "any", false, true, false, 97), "titre", [], "any", true, true, false, 97)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "publication", [], "any", false, false, false, 97), "titre", [], "any", false, false, false, 97), ("Publication #" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "publication", [], "any", false, false, false, 97), "id", [], "any", false, false, false, 97)))) : (("Publication #" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "publication", [], "any", false, false, false, 97), "id", [], "any", false, false, false, 97)))), "html", null, true);
                yield "
                    ";
            } else {
                // line 99
                yield "                        -
                    ";
            }
            // line 101
            yield "                </td>
                <td>";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "etat", [], "any", false, false, false, 102), ["_" => " "])), "html", null, true);
            yield "</td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 104
        if (!$context['_iterated']) {
            // line 105
            yield "            <tr>
                <td colspan=\"7\" style=\"text-align: center;\">Aucune communication trouvée</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['communication'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "        </tbody>
    </table>

    <div class=\"footer\">
        Document généré par LEARNFLEX - Système de gestion des communications
        <br>
        Total : ";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["communications"]) || array_key_exists("communications", $context) ? $context["communications"] : (function () { throw new RuntimeError('Variable "communications" does not exist.', 115, $this->source); })())), "html", null, true);
        yield " communication(s)
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/communication/export_pdf.html.twig";
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
        return array (  220 => 115,  212 => 109,  203 => 105,  201 => 104,  194 => 102,  191 => 101,  187 => 99,  181 => 97,  179 => 96,  174 => 94,  170 => 93,  166 => 92,  160 => 89,  152 => 88,  147 => 86,  144 => 85,  139 => 84,  120 => 68,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Export Communications - {{ \"now\"|date('d/m/Y H:i') }}</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            font-size: 12px; 
            margin: 20px;
        }
        .header { 
            text-align: center; 
            margin-bottom: 20px; 
            border-bottom: 2px solid #333; 
            padding-bottom: 10px; 
        }
        .header h1 { 
            margin: 0; 
            color: #2c3e50; 
            font-size: 24px;
        }
        .header .date {
            color: #6c757d;
            font-size: 14px;
            margin-top: 5px;
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-bottom: 20px; 
        }
        table th { 
            background-color: #2c3e50; 
            color: white; 
            padding: 10px; 
            border: 1px solid #ddd;
            text-align: left;
            font-weight: bold;
        }
        table td { 
            padding: 8px 10px; 
            border: 1px solid #ddd;
            vertical-align: top;
        }
        .badge { 
            padding: 3px 8px; 
            border-radius: 3px; 
            font-size: 11px; 
            font-weight: bold;
            display: inline-block;
        }
        .badge-live { background-color: #dc3545; color: white; }
        .badge-record { background-color: #0d6efd; color: white; }
        .footer { 
            margin-top: 30px; 
            text-align: center; 
            font-size: 10px; 
            color: #6c757d; 
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Rapport des Communications</h1>
        <div class=\"date\">Généré le {{ \"now\"|date('d/m/Y H:i') }}</div>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Description</th>
                <th>Date/Heure</th>
                <th>Durée</th>
                <th>Publication</th>
                <th>État</th>
            </tr>
        </thead>
        <tbody>
            {% for communication in communications %}
            <tr>
                <td>{{ communication.id }}</td>
                <td>
                    <span class=\"badge {% if communication.type == 'live' %}badge-live{% else %}badge-record{% endif %}\">
                        {{ communication.type == 'live' ? 'En direct' : 'Enregistré' }}
                    </span>
                </td>
                <td>{{ communication.descriptionDetaillee|default('Sans description') }}</td>
                <td>{{ communication.dateHeure|date('d/m/Y H:i') }}</td>
                <td>{{ communication.duree ? communication.duree ~ ' min' : '-' }}</td>
                <td>
                    {% if communication.publication %}
                        {{ communication.publication.titre|default('Publication #' ~ communication.publication.id) }}
                    {% else %}
                        -
                    {% endif %}
                </td>
                <td>{{ communication.etat|replace({'_': ' '})|title }}</td>
            </tr>
            {% else %}
            <tr>
                <td colspan=\"7\" style=\"text-align: center;\">Aucune communication trouvée</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class=\"footer\">
        Document généré par LEARNFLEX - Système de gestion des communications
        <br>
        Total : {{ communications|length }} communication(s)
    </div>
</body>
</html>", "back/communication/export_pdf.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\communication\\export_pdf.html.twig");
    }
}
