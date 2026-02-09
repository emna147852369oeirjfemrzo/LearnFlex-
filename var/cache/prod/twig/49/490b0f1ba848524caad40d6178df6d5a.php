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
class __TwigTemplate_c636cb2ab6797543942fa5776f87f64e extends Template
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["dateExport"] ?? null), "d/m/Y H:i"), "html", null, true);
        yield "</p>
    <p><strong>Total :</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["publications"] ?? null)), "html", null, true);
        yield " publications</p>

    ";
        // line 20
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["publications"] ?? null)) > 0)) {
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
            $context['_seq'] = CoreExtension::ensureTraversable(($context["publications"] ?? null));
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
        return array (  130 => 48,  126 => 46,  121 => 43,  112 => 40,  108 => 39,  104 => 38,  100 => 37,  96 => 36,  92 => 35,  89 => 34,  85 => 33,  71 => 21,  69 => 20,  64 => 18,  60 => 17,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/Publication/pdf.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\Publication\\pdf.html.twig");
    }
}
