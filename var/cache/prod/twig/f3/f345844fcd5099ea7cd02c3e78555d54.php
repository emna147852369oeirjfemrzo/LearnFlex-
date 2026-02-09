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

/* back/Publication/statistics.html.twig */
class __TwigTemplate_6d7c93a73ebe2e6d4d64601ea912a6ce extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        yield "Statistiques - Publications";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/dashboard.css"), "html", null, true);
        yield "\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\">
";
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "<div class=\"dashboard\">
    <aside class=\"sidebar\">
        <div class=\"sidebar-header\">
            <div class=\"logo\">
                <img src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo1.png"), "html", null, true);
        yield "\" alt=\"Learnflex+ Logo\" class=\"nav-logo\">
                <span>LearnFlex</span><span class=\"highlight\">+</span>
            </div>
            <button class=\"sidebar-toggle\">
                <i class=\"fas fa-bars\"></i>
            </button>
        </div>
        
        <div class=\"sidebar-content\">
            <nav class=\"sidebar-menu\">
                <ul>
                    <li>
                        <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back");
        yield "\">
                            <i class=\"fas fa-tachometer-alt\"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-users\"></i>
                            <span>Utilisateurs</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-book-open\"></i>
                            <span>Contenu pédagogique</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-graduation-cap\"></i>
                            <span>Evaluation</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-question-circle\"></i>
                            <span>Questionnaire</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\">
                            <i class=\"fas fa-directions\"></i>
                            <span>Orientation</span>
                        </a>
                    </li>
                    <li class=\"active\">
                        <a href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index");
        yield "\">
                            <i class=\"fas fa-comments\"></i>
                            <span>Forum</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        
        <div class=\"sidebar-footer\">
            <a href=\"#\" class=\"user-profile\">
                <img src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/placeholder-admin.png"), "html", null, true);
        yield "\" alt=\"Admin\" class=\"user-img\">
                <div class=\"user-info\">
                    <h4>Admin User</h4>
                    <p>Administrateur</p>
                </div>
            </a>
            <a href=\"#\" class=\"logout\">
                <i class=\"fas fa-sign-out-alt\"></i>
                <span>Déconnexion</span>
            </a>
        </div>
    </aside>
    
    <main class=\"main-content\">
        <header class=\"dashboard-header\">
            <div class=\"header-left\">
                <h1>Statistiques du Forum</h1>
                <p>Analyse des publications et engagement</p>
            </div>
            <div class=\"header-right\">
                <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour
                </a>
            </div>
        </header>
        
        <div class=\"dashboard-content\">
            ";
        // line 104
        yield "            <div class=\"row mb-4\">
                <div class=\"col-md-3\">
                    <div class=\"card text-center\" style=\"border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.1);\">
                        <div class=\"card-body\">
                            <i class=\"fas fa-file-alt fa-3x text-primary mb-3\"></i>
                            <h3 class=\"fw-bold\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "total", [], "any", false, false, false, 109), "html", null, true);
        yield "</h3>
                            <p class=\"text-muted mb-0\">Publications totales</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"card text-center\" style=\"border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.1);\">
                        <div class=\"card-body\">
                            <i class=\"fas fa-eye fa-3x text-info mb-3\"></i>
                            <h3 class=\"fw-bold\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "totalVues", [], "any", false, false, false, 118), "html", null, true);
        yield "</h3>
                            <p class=\"text-muted mb-0\">Vues totales</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"card text-center\" style=\"border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.1);\">
                        <div class=\"card-body\">
                            <i class=\"fas fa-heart fa-3x text-danger mb-3\"></i>
                            <h3 class=\"fw-bold\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "totalLikes", [], "any", false, false, false, 127), "html", null, true);
        yield "</h3>
                            <p class=\"text-muted mb-0\">Likes totaux</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"card text-center\" style=\"border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.1);\">
                        <div class=\"card-body\">
                            <i class=\"fas fa-chart-line fa-3x text-success mb-3\"></i>
                            <h3 class=\"fw-bold\">";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "moyenneVues", [], "any", false, false, false, 136), 1), "html", null, true);
        yield "</h3>
                            <p class=\"text-muted mb-0\">Vues moyennes</p>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 144
        yield "            <div class=\"card mb-4\" style=\"border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.1);\">
                <div class=\"card-header\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;\">
                    <h5 class=\"mb-0\"><i class=\"fas fa-chart-pie\"></i> Répartition par catégorie</h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead style=\"background-color: #f8f9fa;\">
                                <tr>
                                    <th>Catégorie</th>
                                    <th>Nombre</th>
                                    <th>Total Vues</th>
                                    <th>Total Likes</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["statsByCategory"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 161
            yield "                                <tr>
                                    <td><span class=\"badge bg-info\">";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "categorie", [], "any", false, false, false, 162), "html", null, true);
            yield "</span></td>
                                    <td><strong>";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "nombre", [], "any", false, false, false, 163), "html", null, true);
            yield "</strong></td>
                                    <td>";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "totalVues", [], "any", false, false, false, 164), "html", null, true);
            yield "</td>
                                    <td>";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "totalLikes", [], "any", false, false, false, 165), "html", null, true);
            yield "</td>
                                </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 167
        if (!$context['_iterated']) {
            // line 168
            yield "                                <tr>
                                    <td colspan=\"4\" class=\"text-center text-muted\">Aucune donnée disponible</td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            ";
        // line 179
        yield "            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card\" style=\"border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.1);\">
                        <div class=\"card-header bg-info text-white\">
                            <h5 class=\"mb-0\"><i class=\"fas fa-trophy\"></i> Top 10 - Plus vues</h5>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-sm\">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Vues</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["topVues"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["pub"]) {
            // line 196
            yield "                                    <tr>
                                        <td><strong>";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 197), "html", null, true);
            yield "</strong></td>
                                        <td>";
            // line 198
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "titre", [], "any", false, false, false, 198)) > 40)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "titre", [], "any", false, false, false, 198), 0, 40) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "titre", [], "any", false, false, false, 198), "html", null, true)));
            yield "</td>
                                        <td><span class=\"badge bg-primary\">";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "nombreVues", [], "any", false, false, false, 199), "html", null, true);
            yield "</span></td>
                                    </tr>
                                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 201
        if (!$context['_iterated']) {
            // line 202
            yield "                                    <tr>
                                        <td colspan=\"3\" class=\"text-center text-muted\">Aucune publication</td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pub'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"card\" style=\"border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.1);\">
                        <div class=\"card-header bg-danger text-white\">
                            <h5 class=\"mb-0\"><i class=\"fas fa-heart\"></i> Top 10 - Plus aimées</h5>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-sm\">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Titre</th>
                                        <th>Likes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["topLikes"] ?? null));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["pub"]) {
            // line 228
            yield "                                    <tr>
                                        <td><strong>";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 229), "html", null, true);
            yield "</strong></td>
                                        <td>";
            // line 230
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "titre", [], "any", false, false, false, 230)) > 40)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "titre", [], "any", false, false, false, 230), 0, 40) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "titre", [], "any", false, false, false, 230), "html", null, true)));
            yield "</td>
                                        <td><span class=\"badge bg-success\">";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pub"], "nombreLikes", [], "any", false, false, false, 231), "html", null, true);
            yield "</span></td>
                                    </tr>
                                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 233
        if (!$context['_iterated']) {
            // line 234
            yield "                                    <tr>
                                        <td colspan=\"3\" class=\"text-center text-muted\">Aucune publication</td>
                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pub'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        yield "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');

    if(sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
        });
    }
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
        return "back/Publication/statistics.html.twig";
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
        return array (  467 => 238,  458 => 234,  456 => 233,  441 => 231,  437 => 230,  433 => 229,  430 => 228,  412 => 227,  389 => 206,  380 => 202,  378 => 201,  363 => 199,  359 => 198,  355 => 197,  352 => 196,  334 => 195,  316 => 179,  308 => 172,  299 => 168,  297 => 167,  290 => 165,  286 => 164,  282 => 163,  278 => 162,  275 => 161,  270 => 160,  252 => 144,  242 => 136,  230 => 127,  218 => 118,  206 => 109,  199 => 104,  189 => 96,  166 => 76,  152 => 65,  113 => 29,  98 => 17,  92 => 13,  85 => 12,  76 => 7,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/Publication/statistics.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\Publication\\statistics.html.twig");
    }
}
