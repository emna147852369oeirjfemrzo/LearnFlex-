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

/* front/publication_show.html.twig */
class __TwigTemplate_a313fbd5475a2710bafe3cd8dd05bd2c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/publication_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/publication_show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        
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
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\">
<style>
/* Navbar comme sur la page d'accueil */
.main-navbar {
    background: white;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    padding: 1rem 0;
}

.main-navbar .navbar-brand {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 1.5rem;
    font-weight: 700;
    color: #1e3a5f;
}

.main-navbar .navbar-brand img {
    height: 40px;
}

.main-navbar .nav-link {
    color: #1e3a5f;
    font-weight: 500;
    padding: 0.5rem 1rem;
    transition: color 0.3s;
}

.main-navbar .nav-link:hover {
    color: #667eea;
}

.btn-connexion {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 0.5rem 1.5rem;
    border-radius: 25px;
    border: none;
    font-weight: 600;
}

/* Header de la publication */
.publication-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 3rem 0;
    margin-bottom: 2rem;
}

.publication-card {
    background: white;
    border-radius: 16px;
    box-shadow: 0 4px 16px rgba(0,0,0,0.1);
    padding: 2rem;
    margin-bottom: 2rem;
}

.stat-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 1rem;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 12px;
    margin-right: 1rem;
    color: white;
}

.communication-item {
    border: 2px solid #e9ecef;
    border-radius: 12px;
    padding: 1.5rem;
    margin-bottom: 1rem;
    transition: all 0.3s ease;
}

.communication-item:hover {
    border-color: #667eea;
    box-shadow: 0 4px 12px rgba(102, 126, 234, 0.2);
}

.badge-live {
    background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-weight: 600;
}

.badge-record {
    background: linear-gradient(135deg, #4dabf7 0%, #339af0 100%);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-weight: 600;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 108
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

        // line 110
        yield "<nav class=\"main-navbar\">
    <div class=\"container\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <a class=\"navbar-brand\" href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\">
                <img src=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo1.png"), "html", null, true);
        yield "\" alt=\"LearnFlex+\">
                <span>LearnFlex +</span>
            </a>
            <div class=\"d-flex gap-3 align-items-center\">
                <a href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\" class=\"nav-link\">Accueil</a>
                <a href=\"#\" class=\"nav-link\">Contenus pédagogiques</a>
                <a href=\"#\" class=\"nav-link\">Evaluation</a>
                <a href=\"#\" class=\"nav-link\">Questionnaire</a>
                <a href=\"#\" class=\"nav-link\">Orientation</a>
                <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_index");
        yield "\" class=\"nav-link\">Forum</a>
                <button class=\"btn btn-connexion\">Connexion</button>
            </div>
        </div>
    </div>
</nav>

";
        // line 131
        yield "<div class=\"publication-header\">
    <div class=\"container\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 135
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\" class=\"text-white text-decoration-none\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_index");
        yield "\" class=\"text-white text-decoration-none\">Forum</a></li>
                <li class=\"breadcrumb-item active text-white\">";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 137, $this->source); })()), "titre", [], "any", false, false, false, 137), "html", null, true);
        yield "</li>
            </ol>
        </nav>
        <h1 class=\"display-5 fw-bold mb-3\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 140, $this->source); })()), "titre", [], "any", false, false, false, 140), "html", null, true);
        yield "</h1>
        <div class=\"d-flex gap-3 flex-wrap\">
            <div class=\"stat-badge\">
                <i class=\"fas fa-calendar\"></i>
                <span>";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 144, $this->source); })()), "dateCreation", [], "any", false, false, false, 144), "d/m/Y à H:i"), "html", null, true);
        yield "</span>
            </div>
            <div class=\"stat-badge\">
                <i class=\"fas fa-eye\"></i>
                <span>";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 148, $this->source); })()), "nombreVues", [], "any", false, false, false, 148), "html", null, true);
        yield " vues</span>
            </div>
            <div class=\"stat-badge\">
                <i class=\"fas fa-heart\"></i>
                <span>";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 152, $this->source); })()), "nombreLikes", [], "any", false, false, false, 152), "html", null, true);
        yield " likes</span>
            </div>
        </div>
    </div>
</div>

<div class=\"container mb-5\">
    <div class=\"row\">
        <div class=\"col-lg-8\">
            ";
        // line 162
        yield "            <div class=\"publication-card\">
                <div class=\"d-flex justify-content-between align-items-start mb-4\">
                    <h3 class=\"text-dark\">Description</h3>
                    <span class=\"badge bg-info fs-6\">";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 165, $this->source); })()), "categorie", [], "any", false, false, false, 165), "html", null, true);
        yield "</span>
                </div>
                <p class=\"lead text-dark\">";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 167, $this->source); })()), "description", [], "any", false, false, false, 167), "html", null, true);
        yield "</p>
            </div>

            ";
        // line 171
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["communications"]) || array_key_exists("communications", $context) ? $context["communications"] : (function () { throw new RuntimeError('Variable "communications" does not exist.', 171, $this->source); })())) > 0)) {
            // line 172
            yield "            <div class=\"publication-card\">
                <h3 class=\"mb-4 text-dark\">
                    <i class=\"fas fa-video me-2\"></i>
                    Communications associées
                </h3>
                
                ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["communications"]) || array_key_exists("communications", $context) ? $context["communications"] : (function () { throw new RuntimeError('Variable "communications" does not exist.', 178, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["communication"]) {
                // line 179
                yield "                <div class=\"communication-item\">
                    <div class=\"d-flex justify-content-between align-items-start mb-3\">
                        <div>
                            ";
                // line 182
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "type", [], "any", false, false, false, 182) == "live")) {
                    // line 183
                    yield "                                <span class=\"badge-live\">
                                    <i class=\"fas fa-circle me-1\" style=\"font-size: 0.6rem;\"></i>
                                    Live
                                </span>
                            ";
                } else {
                    // line 188
                    yield "                                <span class=\"badge-record\">
                                    <i class=\"fas fa-play-circle me-1\"></i>
                                    Enregistré
                                </span>
                            ";
                }
                // line 193
                yield "                        </div>
                        <div>
                            ";
                // line 195
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "etat", [], "any", false, false, false, 195) == "programmee")) {
                    // line 196
                    yield "                                <span class=\"badge bg-info\">Programmée</span>
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 197
$context["communication"], "etat", [], "any", false, false, false, 197) == "en_cours")) {
                    // line 198
                    yield "                                <span class=\"badge bg-warning\">En cours</span>
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 199
$context["communication"], "etat", [], "any", false, false, false, 199) == "terminee")) {
                    // line 200
                    yield "                                <span class=\"badge bg-success\">Terminée</span>
                            ";
                } else {
                    // line 202
                    yield "                                <span class=\"badge bg-danger\">Annulée</span>
                            ";
                }
                // line 204
                yield "                        </div>
                    </div>
                    
                    <div class=\"mb-3 text-dark\">
                        <div class=\"text-muted mb-2\">
                            <i class=\"fas fa-calendar-alt me-2\"></i>
                            ";
                // line 210
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "dateHeure", [], "any", false, false, false, 210), "d/m/Y à H:i"), "html", null, true);
                yield "
                            ";
                // line 211
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "duree", [], "any", false, false, false, 211)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 212
                    yield "                                <span class=\"ms-3\">
                                    <i class=\"fas fa-clock me-2\"></i>
                                    ";
                    // line 214
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "duree", [], "any", false, false, false, 214), "html", null, true);
                    yield " minutes
                                </span>
                            ";
                }
                // line 217
                yield "                        </div>
                        
                        ";
                // line 219
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", false, false, false, 219)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 220
                    yield "                        <p class=\"mb-0\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", false, false, false, 220), "html", null, true);
                    yield "</p>
                        ";
                }
                // line 222
                yield "                    </div>
                    
                    ";
                // line 224
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "lien", [], "any", false, false, false, 224)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 225
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "lien", [], "any", false, false, false, 225), "html", null, true);
                    yield "\" target=\"_blank\" class=\"btn btn-primary\">
                        <i class=\"fas fa-external-link-alt me-2\"></i>
                        Rejoindre la communication
                    </a>
                    ";
                }
                // line 230
                yield "                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['communication'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            yield "            </div>
            ";
        }
        // line 234
        yield "        </div>
        
        <div class=\"col-lg-4\">
            ";
        // line 238
        yield "            <div class=\"publication-card\">
                <h5 class=\"mb-3 text-dark\">Actions</h5>
                <div class=\"d-grid gap-2\">
                    <a href=\"";
        // line 241
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_index");
        yield "\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-arrow-left me-2\"></i>
                        Retour au forum
                    </a>
                    <button class=\"btn btn-outline-primary\">
                        <i class=\"fas fa-share-alt me-2\"></i>
                        Partager
                    </button>
                    <button class=\"btn btn-outline-danger\">
                        <i class=\"fas fa-heart me-2\"></i>
                        J'aime
                    </button>
                </div>
            </div>
            
            <div class=\"publication-card\">
                <h5 class=\"mb-3 text-dark\">Informations</h5>
                <ul class=\"list-unstyled text-dark\">
                    <li class=\"mb-2\">
                        <strong>ID:</strong> #";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 260, $this->source); })()), "id", [], "any", false, false, false, 260), "html", null, true);
        yield "
                    </li>
                    <li class=\"mb-2\">
                        <strong>Catégorie:</strong> ";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 263, $this->source); })()), "categorie", [], "any", false, false, false, 263), "html", null, true);
        yield "
                    </li>
                    <li class=\"mb-2\">
                        <strong>Date de création:</strong> ";
        // line 266
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 266, $this->source); })()), "dateCreation", [], "any", false, false, false, 266), "d/m/Y"), "html", null, true);
        yield "
                    </li>
                    <li class=\"mb-2\">
                        <strong>Vues:</strong> ";
        // line 269
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 269, $this->source); })()), "nombreVues", [], "any", false, false, false, 269), "html", null, true);
        yield "
                    </li>
                    <li class=\"mb-2\">
                        <strong>Likes:</strong> ";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 272, $this->source); })()), "nombreLikes", [], "any", false, false, false, 272), "html", null, true);
        yield "
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js\"></script>
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
        return "front/publication_show.html.twig";
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
        return array (  508 => 272,  502 => 269,  496 => 266,  490 => 263,  484 => 260,  462 => 241,  457 => 238,  452 => 234,  448 => 232,  441 => 230,  432 => 225,  430 => 224,  426 => 222,  420 => 220,  418 => 219,  414 => 217,  408 => 214,  404 => 212,  402 => 211,  398 => 210,  390 => 204,  386 => 202,  382 => 200,  380 => 199,  377 => 198,  375 => 197,  372 => 196,  370 => 195,  366 => 193,  359 => 188,  352 => 183,  350 => 182,  345 => 179,  341 => 178,  333 => 172,  330 => 171,  324 => 167,  319 => 165,  314 => 162,  302 => 152,  295 => 148,  288 => 144,  281 => 140,  275 => 137,  271 => 136,  267 => 135,  261 => 131,  251 => 123,  243 => 118,  236 => 114,  232 => 113,  227 => 110,  214 => 108,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ publication.titre }}{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/styles.css') }}\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\">
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css\">
<style>
/* Navbar comme sur la page d'accueil */
.main-navbar {
    background: white;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    padding: 1rem 0;
}

.main-navbar .navbar-brand {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 1.5rem;
    font-weight: 700;
    color: #1e3a5f;
}

.main-navbar .navbar-brand img {
    height: 40px;
}

.main-navbar .nav-link {
    color: #1e3a5f;
    font-weight: 500;
    padding: 0.5rem 1rem;
    transition: color 0.3s;
}

.main-navbar .nav-link:hover {
    color: #667eea;
}

.btn-connexion {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 0.5rem 1.5rem;
    border-radius: 25px;
    border: none;
    font-weight: 600;
}

/* Header de la publication */
.publication-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 3rem 0;
    margin-bottom: 2rem;
}

.publication-card {
    background: white;
    border-radius: 16px;
    box-shadow: 0 4px 16px rgba(0,0,0,0.1);
    padding: 2rem;
    margin-bottom: 2rem;
}

.stat-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 1rem;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 12px;
    margin-right: 1rem;
    color: white;
}

.communication-item {
    border: 2px solid #e9ecef;
    border-radius: 12px;
    padding: 1.5rem;
    margin-bottom: 1rem;
    transition: all 0.3s ease;
}

.communication-item:hover {
    border-color: #667eea;
    box-shadow: 0 4px 12px rgba(102, 126, 234, 0.2);
}

.badge-live {
    background: linear-gradient(135deg, #ff6b6b 0%, #ee5a6f 100%);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-weight: 600;
}

.badge-record {
    background: linear-gradient(135deg, #4dabf7 0%, #339af0 100%);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-weight: 600;
}
</style>
{% endblock %}

{% block body %}
{# Navbar comme sur la page d'accueil #}
<nav class=\"main-navbar\">
    <div class=\"container\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <a class=\"navbar-brand\" href=\"{{ path('app_front') }}\">
                <img src=\"{{ asset('assets/images/logo1.png') }}\" alt=\"LearnFlex+\">
                <span>LearnFlex +</span>
            </a>
            <div class=\"d-flex gap-3 align-items-center\">
                <a href=\"{{ path('app_front') }}\" class=\"nav-link\">Accueil</a>
                <a href=\"#\" class=\"nav-link\">Contenus pédagogiques</a>
                <a href=\"#\" class=\"nav-link\">Evaluation</a>
                <a href=\"#\" class=\"nav-link\">Questionnaire</a>
                <a href=\"#\" class=\"nav-link\">Orientation</a>
                <a href=\"{{ path('forum_index') }}\" class=\"nav-link\">Forum</a>
                <button class=\"btn btn-connexion\">Connexion</button>
            </div>
        </div>
    </div>
</nav>

{# Header de la publication #}
<div class=\"publication-header\">
    <div class=\"container\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_front') }}\" class=\"text-white text-decoration-none\">Accueil</a></li>
                <li class=\"breadcrumb-item\"><a href=\"{{ path('forum_index') }}\" class=\"text-white text-decoration-none\">Forum</a></li>
                <li class=\"breadcrumb-item active text-white\">{{ publication.titre }}</li>
            </ol>
        </nav>
        <h1 class=\"display-5 fw-bold mb-3\">{{ publication.titre }}</h1>
        <div class=\"d-flex gap-3 flex-wrap\">
            <div class=\"stat-badge\">
                <i class=\"fas fa-calendar\"></i>
                <span>{{ publication.dateCreation|date('d/m/Y à H:i') }}</span>
            </div>
            <div class=\"stat-badge\">
                <i class=\"fas fa-eye\"></i>
                <span>{{ publication.nombreVues }} vues</span>
            </div>
            <div class=\"stat-badge\">
                <i class=\"fas fa-heart\"></i>
                <span>{{ publication.nombreLikes }} likes</span>
            </div>
        </div>
    </div>
</div>

<div class=\"container mb-5\">
    <div class=\"row\">
        <div class=\"col-lg-8\">
            {# Contenu de la publication #}
            <div class=\"publication-card\">
                <div class=\"d-flex justify-content-between align-items-start mb-4\">
                    <h3 class=\"text-dark\">Description</h3>
                    <span class=\"badge bg-info fs-6\">{{ publication.categorie }}</span>
                </div>
                <p class=\"lead text-dark\">{{ publication.description }}</p>
            </div>

            {# Communications liées #}
            {% if communications|length > 0 %}
            <div class=\"publication-card\">
                <h3 class=\"mb-4 text-dark\">
                    <i class=\"fas fa-video me-2\"></i>
                    Communications associées
                </h3>
                
                {% for communication in communications %}
                <div class=\"communication-item\">
                    <div class=\"d-flex justify-content-between align-items-start mb-3\">
                        <div>
                            {% if communication.type == 'live' %}
                                <span class=\"badge-live\">
                                    <i class=\"fas fa-circle me-1\" style=\"font-size: 0.6rem;\"></i>
                                    Live
                                </span>
                            {% else %}
                                <span class=\"badge-record\">
                                    <i class=\"fas fa-play-circle me-1\"></i>
                                    Enregistré
                                </span>
                            {% endif %}
                        </div>
                        <div>
                            {% if communication.etat == 'programmee' %}
                                <span class=\"badge bg-info\">Programmée</span>
                            {% elseif communication.etat == 'en_cours' %}
                                <span class=\"badge bg-warning\">En cours</span>
                            {% elseif communication.etat == 'terminee' %}
                                <span class=\"badge bg-success\">Terminée</span>
                            {% else %}
                                <span class=\"badge bg-danger\">Annulée</span>
                            {% endif %}
                        </div>
                    </div>
                    
                    <div class=\"mb-3 text-dark\">
                        <div class=\"text-muted mb-2\">
                            <i class=\"fas fa-calendar-alt me-2\"></i>
                            {{ communication.dateHeure|date('d/m/Y à H:i') }}
                            {% if communication.duree %}
                                <span class=\"ms-3\">
                                    <i class=\"fas fa-clock me-2\"></i>
                                    {{ communication.duree }} minutes
                                </span>
                            {% endif %}
                        </div>
                        
                        {% if communication.descriptionDetaillee %}
                        <p class=\"mb-0\">{{ communication.descriptionDetaillee }}</p>
                        {% endif %}
                    </div>
                    
                    {% if communication.lien %}
                    <a href=\"{{ communication.lien }}\" target=\"_blank\" class=\"btn btn-primary\">
                        <i class=\"fas fa-external-link-alt me-2\"></i>
                        Rejoindre la communication
                    </a>
                    {% endif %}
                </div>
                {% endfor %}
            </div>
            {% endif %}
        </div>
        
        <div class=\"col-lg-4\">
            {# Sidebar #}
            <div class=\"publication-card\">
                <h5 class=\"mb-3 text-dark\">Actions</h5>
                <div class=\"d-grid gap-2\">
                    <a href=\"{{ path('forum_index') }}\" class=\"btn btn-outline-secondary\">
                        <i class=\"fas fa-arrow-left me-2\"></i>
                        Retour au forum
                    </a>
                    <button class=\"btn btn-outline-primary\">
                        <i class=\"fas fa-share-alt me-2\"></i>
                        Partager
                    </button>
                    <button class=\"btn btn-outline-danger\">
                        <i class=\"fas fa-heart me-2\"></i>
                        J'aime
                    </button>
                </div>
            </div>
            
            <div class=\"publication-card\">
                <h5 class=\"mb-3 text-dark\">Informations</h5>
                <ul class=\"list-unstyled text-dark\">
                    <li class=\"mb-2\">
                        <strong>ID:</strong> #{{ publication.id }}
                    </li>
                    <li class=\"mb-2\">
                        <strong>Catégorie:</strong> {{ publication.categorie }}
                    </li>
                    <li class=\"mb-2\">
                        <strong>Date de création:</strong> {{ publication.dateCreation|date('d/m/Y') }}
                    </li>
                    <li class=\"mb-2\">
                        <strong>Vues:</strong> {{ publication.nombreVues }}
                    </li>
                    <li class=\"mb-2\">
                        <strong>Likes:</strong> {{ publication.nombreLikes }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js\"></script>
{% endblock %}", "front/publication_show.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\front\\publication_show.html.twig");
    }
}
