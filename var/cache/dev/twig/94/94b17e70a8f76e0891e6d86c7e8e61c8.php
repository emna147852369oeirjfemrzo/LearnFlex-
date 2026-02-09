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
class __TwigTemplate_5f1d5010d0c40572c93b8b57a1f13c3c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/Publication/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/Publication/statistics.html.twig"));

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

        yield "Statistiques - Publications";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 109, $this->source); })()), "total", [], "any", false, false, false, 109), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 118, $this->source); })()), "totalVues", [], "any", false, false, false, 118), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 127, $this->source); })()), "totalLikes", [], "any", false, false, false, 127), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 136, $this->source); })()), "moyenneVues", [], "any", false, false, false, 136), 1), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statsByCategory"]) || array_key_exists("statsByCategory", $context) ? $context["statsByCategory"] : (function () { throw new RuntimeError('Variable "statsByCategory" does not exist.', 160, $this->source); })()));
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topVues"]) || array_key_exists("topVues", $context) ? $context["topVues"] : (function () { throw new RuntimeError('Variable "topVues" does not exist.', 195, $this->source); })()));
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topLikes"]) || array_key_exists("topLikes", $context) ? $context["topLikes"] : (function () { throw new RuntimeError('Variable "topLikes" does not exist.', 227, $this->source); })()));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  509 => 238,  500 => 234,  498 => 233,  483 => 231,  479 => 230,  475 => 229,  472 => 228,  454 => 227,  431 => 206,  422 => 202,  420 => 201,  405 => 199,  401 => 198,  397 => 197,  394 => 196,  376 => 195,  358 => 179,  350 => 172,  341 => 168,  339 => 167,  332 => 165,  328 => 164,  324 => 163,  320 => 162,  317 => 161,  312 => 160,  294 => 144,  284 => 136,  272 => 127,  260 => 118,  248 => 109,  241 => 104,  231 => 96,  208 => 76,  194 => 65,  155 => 29,  140 => 17,  134 => 13,  121 => 12,  106 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Statistiques - Publications{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/styles.css') }}\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/dashboard.css') }}\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\">
{% endblock %}

{% block body %}
<div class=\"dashboard\">
    <aside class=\"sidebar\">
        <div class=\"sidebar-header\">
            <div class=\"logo\">
                <img src=\"{{ asset('assets/images/logo1.png') }}\" alt=\"Learnflex+ Logo\" class=\"nav-logo\">
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
                        <a href=\"{{ path('app_back') }}\">
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
                        <a href=\"{{ path('back_publication_index') }}\">
                            <i class=\"fas fa-comments\"></i>
                            <span>Forum</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        
        <div class=\"sidebar-footer\">
            <a href=\"#\" class=\"user-profile\">
                <img src=\"{{ asset('assets/images/placeholder-admin.png') }}\" alt=\"Admin\" class=\"user-img\">
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
                <a href=\"{{ path('back_publication_index') }}\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour
                </a>
            </div>
        </header>
        
        <div class=\"dashboard-content\">
            {# STATISTIQUES GLOBALES #}
            <div class=\"row mb-4\">
                <div class=\"col-md-3\">
                    <div class=\"card text-center\" style=\"border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.1);\">
                        <div class=\"card-body\">
                            <i class=\"fas fa-file-alt fa-3x text-primary mb-3\"></i>
                            <h3 class=\"fw-bold\">{{ stats.total }}</h3>
                            <p class=\"text-muted mb-0\">Publications totales</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"card text-center\" style=\"border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.1);\">
                        <div class=\"card-body\">
                            <i class=\"fas fa-eye fa-3x text-info mb-3\"></i>
                            <h3 class=\"fw-bold\">{{ stats.totalVues }}</h3>
                            <p class=\"text-muted mb-0\">Vues totales</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"card text-center\" style=\"border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.1);\">
                        <div class=\"card-body\">
                            <i class=\"fas fa-heart fa-3x text-danger mb-3\"></i>
                            <h3 class=\"fw-bold\">{{ stats.totalLikes }}</h3>
                            <p class=\"text-muted mb-0\">Likes totaux</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <div class=\"card text-center\" style=\"border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.1);\">
                        <div class=\"card-body\">
                            <i class=\"fas fa-chart-line fa-3x text-success mb-3\"></i>
                            <h3 class=\"fw-bold\">{{ stats.moyenneVues|number_format(1) }}</h3>
                            <p class=\"text-muted mb-0\">Vues moyennes</p>
                        </div>
                    </div>
                </div>
            </div>

            {# STATISTIQUES PAR CATÉGORIE #}
            <div class=\"card mb-4\" style=\"border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.1);\">
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
                                {% for stat in statsByCategory %}
                                <tr>
                                    <td><span class=\"badge bg-info\">{{ stat.categorie }}</span></td>
                                    <td><strong>{{ stat.nombre }}</strong></td>
                                    <td>{{ stat.totalVues }}</td>
                                    <td>{{ stat.totalLikes }}</td>
                                </tr>
                                {% else %}
                                <tr>
                                    <td colspan=\"4\" class=\"text-center text-muted\">Aucune donnée disponible</td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {# TOP PUBLICATIONS #}
            <div class=\"row\">
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
                                    {% for pub in topVues %}
                                    <tr>
                                        <td><strong>{{ loop.index }}</strong></td>
                                        <td>{{ pub.titre|length > 40 ? pub.titre|slice(0, 40) ~ '...' : pub.titre }}</td>
                                        <td><span class=\"badge bg-primary\">{{ pub.nombreVues }}</span></td>
                                    </tr>
                                    {% else %}
                                    <tr>
                                        <td colspan=\"3\" class=\"text-center text-muted\">Aucune publication</td>
                                    </tr>
                                    {% endfor %}
                                </tbody>
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
                                    {% for pub in topLikes %}
                                    <tr>
                                        <td><strong>{{ loop.index }}</strong></td>
                                        <td>{{ pub.titre|length > 40 ? pub.titre|slice(0, 40) ~ '...' : pub.titre }}</td>
                                        <td><span class=\"badge bg-success\">{{ pub.nombreLikes }}</span></td>
                                    </tr>
                                    {% else %}
                                    <tr>
                                        <td colspan=\"3\" class=\"text-center text-muted\">Aucune publication</td>
                                    </tr>
                                    {% endfor %}
                                </tbody>
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
{% endblock %}", "back/Publication/statistics.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\Publication\\statistics.html.twig");
    }
}
