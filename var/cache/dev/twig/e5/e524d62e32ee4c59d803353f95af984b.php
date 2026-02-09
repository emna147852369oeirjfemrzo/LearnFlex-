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

/* back/Publication/pdf.html.twig */
class __TwigTemplate_fee075a0cac7cafbd8a93fc1d3902a36 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/Publication/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/Publication/pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Export PDF - Publications</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; margin: 20px; }
        h1 { color: #2c3e50; text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { background-color: #3498db; color: white; padding: 8px; }
        td { padding: 8px; border: 1px solid #ddd; }
        .text-center { text-align: center; }
    </style>
</head>
<body>
    <h1>Rapport des Publications</h1>
    <p><strong>Date d'export :</strong> ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateExport"]) || array_key_exists("dateExport", $context) ? $context["dateExport"] : (function () { throw new RuntimeError('Variable "dateExport" does not exist.', 17, $this->source); })()), "d/m/Y H:i"), "html", null, true);
        yield "</p>
    <p><strong>Total :</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 18, $this->source); })())), "html", null, true);
        yield " publications</p>

    ";
        // line 20
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 20, $this->source); })())) > 0)) {
            // line 21
            yield "        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Catégorie</th>
                    <th>Date création</th>
                    <th>Vues</th>
                    <th>Likes</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
                // line 34
                yield "                <tr>
                    <td>";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 35), "html", null, true);
                yield "</td>
                    <td>";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "titre", [], "any", false, false, false, 36), "html", null, true);
                yield "</td>
                    <td>";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "categorie", [], "any", false, false, false, 37), "html", null, true);
                yield "</td>
                    <td>";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "dateCreation", [], "any", false, false, false, 38), "d/m/Y"), "html", null, true);
                yield "</td>
                    <td class=\"text-center\">";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "nombreVues", [], "any", false, false, false, 39), "html", null, true);
                yield "</td>
                    <td class=\"text-center\">";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "nombreLikes", [], "any", false, false, false, 40), "html", null, true);
                yield "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['publication'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            yield "            </tbody>
        </table>
    ";
        } else {
            // line 46
            yield "        <p>Aucune publication trouvée.</p>
    ";
        }
        // line 48
        yield "</body>
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
        return "back/Publication/pdf.html.twig";
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
        return array (  136 => 48,  132 => 46,  127 => 43,  118 => 40,  114 => 39,  110 => 38,  106 => 37,  102 => 36,  98 => 35,  95 => 34,  91 => 33,  77 => 21,  75 => 20,  70 => 18,  66 => 17,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Export PDF - Publications</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; margin: 20px; }
        h1 { color: #2c3e50; text-align: center; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th { background-color: #3498db; color: white; padding: 8px; }
        td { padding: 8px; border: 1px solid #ddd; }
        .text-center { text-align: center; }
    </style>
</head>
<body>
    <h1>Rapport des Publications</h1>
    <p><strong>Date d'export :</strong> {{ dateExport|date('d/m/Y H:i') }}</p>
    <p><strong>Total :</strong> {{ publications|length }} publications</p>

    {% if publications|length > 0 %}
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Catégorie</th>
                    <th>Date création</th>
                    <th>Vues</th>
                    <th>Likes</th>
                </tr>
            </thead>
            <tbody>
                {% for publication in publications %}
                <tr>
                    <td>{{ publication.id }}</td>
                    <td>{{ publication.titre }}</td>
                    <td>{{ publication.categorie }}</td>
                    <td>{{ publication.dateCreation|date('d/m/Y') }}</td>
                    <td class=\"text-center\">{{ publication.nombreVues }}</td>
                    <td class=\"text-center\">{{ publication.nombreLikes }}</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>Aucune publication trouvée.</p>
    {% endif %}
</body>
</html>", "back/Publication/pdf.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\Publication\\pdf.html.twig");
    }
}
