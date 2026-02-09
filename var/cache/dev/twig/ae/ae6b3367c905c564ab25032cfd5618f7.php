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

/* front/index.html.twig */
class __TwigTemplate_0bd1ba00effea437fa8374cc54f77c8b extends Template
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
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "front/home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $this->parent = $this->load("front/home.html.twig", 1);
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

        yield "Accueil - Learnflexplus";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 6
        yield "<header class=\"landing-header\">
    <div class=\"container\">
        <div class=\"header-left\">
            <div class=\"logo\">
                <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo1.png"), "html", null, true);
        yield "\" alt=\"Learnflexplus Logo\" class=\"main-logo\">
                <span class=\"logo-text\">LearnFlex +</span>
            </div>
        </div>
        <nav class=\"main-nav\">
            <ul>
                <li class=\"active\"><a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        yield "\">Accueil</a></li>
                <li><a href=\"#\">Contenus pédagogiques</a></li>
                <li><a href=\"#\">Evaluation</a></li>
                <li><a href=\"#\">Questionnaire</a></li>
                <li><a href=\"#\">Orientation</a></li>
                <li><a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_index");
        yield "\">Forum</a></li>  <!-- MODIFICATION ICI -->
            </ul>
        </nav>
        <div class=\"header-right\">
            ";
        // line 25
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "type", [], "any", false, false, false, 25) != "client"))) {
            // line 26
            yield "                <a href=\"#\" class=\"btn btn-outline dashboard-btn\">Dashboard</a>
            ";
        }
        // line 28
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "                <a href=\"#\" class=\"btn btn-primary logout-btn\">Déconnexion</a>
            ";
        } else {
            // line 31
            yield "                <a href=\"#\" class=\"btn btn-primary\">Connexion</a>
            ";
        }
        // line 33
        yield "            <button class=\"mobile-menu-btn\">
                <i class=\"fas fa-bars\"></i>
            </button>
        </div>
    </div>
</header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 41
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

        // line 42
        yield "<main>
    <!-- Hero Section -->
    <section class=\"hero-section\">
      <div class=\"container\">
        <div class=\"hero-content\">
<h1>Apprends malin ,Ton bac en main.</h1>
        <p>
  LearnFlex+ aide les élèves du bac avec des cours interactifs, des quiz et un accompagnement intelligent.
</p>

          <div class=\"hero-buttons\">
           <a href=\"#\" class=\"btn btn-primary\">
  Commencer à apprendre
  <i class=\"fas fa-arrow-right\"></i>
</a>
<a href=\"#\" class=\"btn btn-outline\">
  Explorer les cours
</a>
          </div>
        </div>
        <div class=\"hero-image\">
<img src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/learnflexplus.png"), "html", null, true);
        yield "\" alt=\"Learnflexplus Sustainable Mobility\">
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section class=\"features-section\">
      <div class=\"container\">
        <div class=\"feature-cards\">
          <div class=\"feature-card\">
            <div class=\"feature-icon\">
             <i class=\"fas fa-book-open\"></i>
  </div>
  <h3>Cours interactifs</h3>
  <p>Des cours clairs et structurés adaptés au programme du bac.</p>
</div>
          <div class=\"feature-card\">
  <div class=\"feature-icon\">
    <i class=\"fas fa-question-circle\"></i>
  </div>
  <h3>Quiz & Exercices</h3>
  <p>Testez vos connaissances avec des quiz corrigés automatiquement.</p>
</div>
          <div class=\"feature-card\">
  <div class=\"feature-icon\">
    <i class=\"fas fa-compass\"></i>
  </div>
  <h3>Orientation intelligente</h3>
  <p>Découvrez les filières qui correspondent à votre profil et vos résultats.</p>
</div>
        </div>
      </div>
    </section>

    <!-- Benefits Section -->
    <section class=\"benefits-section\">
      <div class=\"container\">
        <div class=\"section-header\">
          <span class=\"badge\">Nos avantages</span>
          <h2>Pourquoi choisir LearnFlex+ ?</h2>
      <p>Des outils et contenus conçus pour réussir ton bac facilement et efficacement.</p>
        </div>
        <div class=\"benefits-grid\">
          <div class=\"benefit-item\">
            <div class=\"benefit-icon\">
          <i class=\"fas fa-clock\"></i>
            </div>
            <div class=\"benefit-content\">
          <h3>Gain de temps</h3>
          <p>Apprends à ton rythme avec des cours et quiz interactifs, sans perte de temps.</p>
        </div>
      </div>
      <div class=\"benefit-item\">
        <div class=\"benefit-icon\">
          <i class=\"fas fa-book\"></i>
        </div>
        <div class=\"benefit-content\">
          <h3>Cours complets</h3>
          <p>Accède à tous les cours du programme du bac, expliqués clairement et avec exemples.</p>
        </div>
      </div>
          <div class=\"benefit-item\">
        <div class=\"benefit-icon\">
          <i class=\"fas fa-tasks\"></i>
        </div>
        <div class=\"benefit-content\">
          <h3>Quiz et évaluations</h3>
          <p>Testez vos connaissances avec des quiz interactifs et des évaluations régulières.</p>
        </div>
      </div>
      <div class=\"benefit-item\">
        <div class=\"benefit-icon\">
          <i class=\"fas fa-user-graduate\"></i>
        </div>
            <div class=\"benefit-content\">
              <h3>Fiabilité</h3>
              <p>Des services ponctuels et fiables, avec des notifications en cas de retard ou d'imprévu.</p>
            </div>
          </div>
          
          <div class=\"benefit-item\">
        <div class=\"benefit-icon\">
          <i class=\"fas fa-chart-line\"></i>
        </div>
        <div class=\"benefit-content\">
          <h3>Suivi de progrès</h3>
          <p>Visualisez vos progrès et identifiez les points à améliorer grâce à nos outils.</p>
        </div>
      </div>
      <div class=\"benefit-item\">
        <div class=\"benefit-icon\">
          <i class=\"fas fa-comments\"></i>
        </div>
        <div class=\"benefit-content\">
          <h3>Forum d’entraide</h3>
          <p>Pose tes questions et échange avec d’autres élèves et enseignants.</p>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- Services Section -->
<section class=\"services-section\">
  <div class=\"container\">
    <div class=\"section-header\">
      <h2>Nos Services</h2>
      <p>Tout ce dont tu as besoin pour réussir ton bac en un seul endroit.</p>
    </div>

    <!-- Cours interactifs -->
    <div class=\"service-item\">
      <div class=\"service-content\">
        <span class=\"badge\">Cours</span>
        <h3>Apprends facilement</h3>
        <p>Des cours interactifs pour tous les sujets du bac, avec exemples et exercices pratiques.</p>
        <a href=\"";
        // line 179
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_index");
        yield "\" class=\"btn btn-primary\">  <!-- MODIFICATION ICI -->
          Accéder au forum
          <i class=\"fas fa-arrow-right\"></i>
        </a>
      </div>
      <div class=\"service-image\">
        <img src=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/cours-service.jpg"), "html", null, true);
        yield "\" alt=\"Cours LearnFlex+\">
      </div>
    </div>

    <!-- Quiz et évaluations -->
    <div class=\"service-item reverse\">
      <div class=\"service-image\">
        <img src=\"";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/quiz-service.jpg"), "html", null, true);
        yield "\" alt=\"Quiz LearnFlex+\">
      </div>
      <div class=\"service-content\">
        <span class=\"badge\">Quiz & Evaluations</span>
        <h3>Testez vos connaissances</h3>
        <p>Évaluez vos acquis avec des quiz interactifs et des examens blancs pour chaque matière.</p>
        <a href=\"#\" class=\"btn btn-primary\">
          Passer un quiz
          <i class=\"fas fa-arrow-right\"></i>
        </a>
      </div>
    </div>

    <!-- Forum d'entraide -->
    <div class=\"service-item\">
      <div class=\"service-content\">
        <span class=\"badge\">Forum</span>
        <h3>Échangez et progressez</h3>
        <p>Discutez avec d’autres élèves et enseignants pour poser vos questions et partager vos astuces.</p>
        <a href=\"";
        // line 211
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_index");
        yield "\" class=\"btn btn-primary\">  <!-- MODIFICATION ICI -->
          Accéder au forum
          <i class=\"fas fa-arrow-right\"></i>
        </a>
      </div>
      <div class=\"service-image\">
        <img src=\"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/forum-service.jpg"), "html", null, true);
        yield "\" alt=\"Forum LearnFlex+\">
      </div>
    </div>
  </div>
</section>
  </main>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 225
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 226
        yield "<footer class=\"main-footer\">
  <div class=\"container\">
    <div class=\"footer-top\">
      <div class=\"footer-logo\">
        <img src=\"";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo1.png"), "html", null, true);
        yield "\" alt=\"LearnFlex+ Logo\" class=\"footer-logo-img\">
        <span>LearnFlex+</span>
      </div>
      <div class=\"footer-slogan\">
        <p>Apprends malin, ton bac en main</p>
      </div>
      <div class=\"footer-social\">
        <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
        <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
        <a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
      </div>
    </div>

    <div class=\"footer-middle\">
      <div class=\"footer-column\">
        <h4>Services</h4>
        <ul>
          <li><a href=\"#\">Cours</a></li>
          <li><a href=\"#\">Quiz & Evaluations</a></li>
          <li><a href=\"";
        // line 250
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum_index");
        yield "\">Forum</a></li>  <!-- MODIFICATION ICI -->
        </ul>
      </div>
      <div class=\"footer-column\">
        <h4>À propos</h4>
        <ul>
          <li><a href=\"#\">Notre mission</a></li>
          <li><a href=\"#\">Orientation</a></li>
        </ul>
      </div>
      <div class=\"footer-column\">
        <h4>Légal</h4>
        <ul>
          <li><a href=\"#\">Conditions d'utilisation</a></li>
          <li><a href=\"#\">Politique de confidentialité</a></li>
          <li><a href=\"#\">Cookies</a></li>
        </ul>
      </div>
      <div class=\"footer-column\">
        <h4>Contact</h4>
        <ul>
          <li><i class=\"fas fa-map-marker-alt\"></i> 123 Avenue Habib Bourguiba, Tunis</li>
          <li><i class=\"fas fa-phone\"></i> +216 71 123 456</li>
          <li><i class=\"fas fa-envelope\"></i> contact@learnflexplus.com</li>
        </ul>
      </div>
    </div>

    <div class=\"footer-bottom\">
      <p>&copy; 2026 LearnFlex+. Tous droits réservés.</p>
    </div>
  </div>
</footer>

";
        // line 284
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 291
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 284
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 285
        yield "<script>
  document.querySelector('.mobile-menu-btn')?.addEventListener('click', function() {
    document.querySelector('.main-nav').classList.toggle('active');
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
        return "front/index.html.twig";
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
        return array (  496 => 285,  483 => 284,  471 => 291,  469 => 284,  432 => 250,  409 => 230,  403 => 226,  390 => 225,  372 => 217,  363 => 211,  341 => 192,  331 => 185,  322 => 179,  203 => 63,  180 => 42,  167 => 41,  150 => 33,  146 => 31,  142 => 29,  139 => 28,  135 => 26,  133 => 25,  126 => 21,  118 => 16,  109 => 10,  103 => 6,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/home.html.twig' %}

{% block title %}Accueil - Learnflexplus{% endblock %}

{% block header %}
<header class=\"landing-header\">
    <div class=\"container\">
        <div class=\"header-left\">
            <div class=\"logo\">
                <img src=\"{{ asset('assets/images/logo1.png') }}\" alt=\"Learnflexplus Logo\" class=\"main-logo\">
                <span class=\"logo-text\">LearnFlex +</span>
            </div>
        </div>
        <nav class=\"main-nav\">
            <ul>
                <li class=\"active\"><a href=\"{{ path('app_front') }}\">Accueil</a></li>
                <li><a href=\"#\">Contenus pédagogiques</a></li>
                <li><a href=\"#\">Evaluation</a></li>
                <li><a href=\"#\">Questionnaire</a></li>
                <li><a href=\"#\">Orientation</a></li>
                <li><a href=\"{{ path('forum_index') }}\">Forum</a></li>  <!-- MODIFICATION ICI -->
            </ul>
        </nav>
        <div class=\"header-right\">
            {% if app.user and app.user.type != 'client' %}
                <a href=\"#\" class=\"btn btn-outline dashboard-btn\">Dashboard</a>
            {% endif %}
            {% if app.user %}
                <a href=\"#\" class=\"btn btn-primary logout-btn\">Déconnexion</a>
            {% else %}
                <a href=\"#\" class=\"btn btn-primary\">Connexion</a>
            {% endif %}
            <button class=\"mobile-menu-btn\">
                <i class=\"fas fa-bars\"></i>
            </button>
        </div>
    </div>
</header>
{% endblock %}

{% block body %}
<main>
    <!-- Hero Section -->
    <section class=\"hero-section\">
      <div class=\"container\">
        <div class=\"hero-content\">
<h1>Apprends malin ,Ton bac en main.</h1>
        <p>
  LearnFlex+ aide les élèves du bac avec des cours interactifs, des quiz et un accompagnement intelligent.
</p>

          <div class=\"hero-buttons\">
           <a href=\"#\" class=\"btn btn-primary\">
  Commencer à apprendre
  <i class=\"fas fa-arrow-right\"></i>
</a>
<a href=\"#\" class=\"btn btn-outline\">
  Explorer les cours
</a>
          </div>
        </div>
        <div class=\"hero-image\">
<img src=\"{{ asset('assets/images/learnflexplus.png') }}\" alt=\"Learnflexplus Sustainable Mobility\">
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section class=\"features-section\">
      <div class=\"container\">
        <div class=\"feature-cards\">
          <div class=\"feature-card\">
            <div class=\"feature-icon\">
             <i class=\"fas fa-book-open\"></i>
  </div>
  <h3>Cours interactifs</h3>
  <p>Des cours clairs et structurés adaptés au programme du bac.</p>
</div>
          <div class=\"feature-card\">
  <div class=\"feature-icon\">
    <i class=\"fas fa-question-circle\"></i>
  </div>
  <h3>Quiz & Exercices</h3>
  <p>Testez vos connaissances avec des quiz corrigés automatiquement.</p>
</div>
          <div class=\"feature-card\">
  <div class=\"feature-icon\">
    <i class=\"fas fa-compass\"></i>
  </div>
  <h3>Orientation intelligente</h3>
  <p>Découvrez les filières qui correspondent à votre profil et vos résultats.</p>
</div>
        </div>
      </div>
    </section>

    <!-- Benefits Section -->
    <section class=\"benefits-section\">
      <div class=\"container\">
        <div class=\"section-header\">
          <span class=\"badge\">Nos avantages</span>
          <h2>Pourquoi choisir LearnFlex+ ?</h2>
      <p>Des outils et contenus conçus pour réussir ton bac facilement et efficacement.</p>
        </div>
        <div class=\"benefits-grid\">
          <div class=\"benefit-item\">
            <div class=\"benefit-icon\">
          <i class=\"fas fa-clock\"></i>
            </div>
            <div class=\"benefit-content\">
          <h3>Gain de temps</h3>
          <p>Apprends à ton rythme avec des cours et quiz interactifs, sans perte de temps.</p>
        </div>
      </div>
      <div class=\"benefit-item\">
        <div class=\"benefit-icon\">
          <i class=\"fas fa-book\"></i>
        </div>
        <div class=\"benefit-content\">
          <h3>Cours complets</h3>
          <p>Accède à tous les cours du programme du bac, expliqués clairement et avec exemples.</p>
        </div>
      </div>
          <div class=\"benefit-item\">
        <div class=\"benefit-icon\">
          <i class=\"fas fa-tasks\"></i>
        </div>
        <div class=\"benefit-content\">
          <h3>Quiz et évaluations</h3>
          <p>Testez vos connaissances avec des quiz interactifs et des évaluations régulières.</p>
        </div>
      </div>
      <div class=\"benefit-item\">
        <div class=\"benefit-icon\">
          <i class=\"fas fa-user-graduate\"></i>
        </div>
            <div class=\"benefit-content\">
              <h3>Fiabilité</h3>
              <p>Des services ponctuels et fiables, avec des notifications en cas de retard ou d'imprévu.</p>
            </div>
          </div>
          
          <div class=\"benefit-item\">
        <div class=\"benefit-icon\">
          <i class=\"fas fa-chart-line\"></i>
        </div>
        <div class=\"benefit-content\">
          <h3>Suivi de progrès</h3>
          <p>Visualisez vos progrès et identifiez les points à améliorer grâce à nos outils.</p>
        </div>
      </div>
      <div class=\"benefit-item\">
        <div class=\"benefit-icon\">
          <i class=\"fas fa-comments\"></i>
        </div>
        <div class=\"benefit-content\">
          <h3>Forum d’entraide</h3>
          <p>Pose tes questions et échange avec d’autres élèves et enseignants.</p>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- Services Section -->
<section class=\"services-section\">
  <div class=\"container\">
    <div class=\"section-header\">
      <h2>Nos Services</h2>
      <p>Tout ce dont tu as besoin pour réussir ton bac en un seul endroit.</p>
    </div>

    <!-- Cours interactifs -->
    <div class=\"service-item\">
      <div class=\"service-content\">
        <span class=\"badge\">Cours</span>
        <h3>Apprends facilement</h3>
        <p>Des cours interactifs pour tous les sujets du bac, avec exemples et exercices pratiques.</p>
        <a href=\"{{ path('forum_index') }}\" class=\"btn btn-primary\">  <!-- MODIFICATION ICI -->
          Accéder au forum
          <i class=\"fas fa-arrow-right\"></i>
        </a>
      </div>
      <div class=\"service-image\">
        <img src=\"{{ asset('assets/images/cours-service.jpg') }}\" alt=\"Cours LearnFlex+\">
      </div>
    </div>

    <!-- Quiz et évaluations -->
    <div class=\"service-item reverse\">
      <div class=\"service-image\">
        <img src=\"{{ asset('assets/images/quiz-service.jpg') }}\" alt=\"Quiz LearnFlex+\">
      </div>
      <div class=\"service-content\">
        <span class=\"badge\">Quiz & Evaluations</span>
        <h3>Testez vos connaissances</h3>
        <p>Évaluez vos acquis avec des quiz interactifs et des examens blancs pour chaque matière.</p>
        <a href=\"#\" class=\"btn btn-primary\">
          Passer un quiz
          <i class=\"fas fa-arrow-right\"></i>
        </a>
      </div>
    </div>

    <!-- Forum d'entraide -->
    <div class=\"service-item\">
      <div class=\"service-content\">
        <span class=\"badge\">Forum</span>
        <h3>Échangez et progressez</h3>
        <p>Discutez avec d’autres élèves et enseignants pour poser vos questions et partager vos astuces.</p>
        <a href=\"{{ path('forum_index') }}\" class=\"btn btn-primary\">  <!-- MODIFICATION ICI -->
          Accéder au forum
          <i class=\"fas fa-arrow-right\"></i>
        </a>
      </div>
      <div class=\"service-image\">
        <img src=\"{{ asset('assets/images/forum-service.jpg') }}\" alt=\"Forum LearnFlex+\">
      </div>
    </div>
  </div>
</section>
  </main>
  {% endblock %}

{% block footer %}
<footer class=\"main-footer\">
  <div class=\"container\">
    <div class=\"footer-top\">
      <div class=\"footer-logo\">
        <img src=\"{{ asset('assets/images/logo1.png') }}\" alt=\"LearnFlex+ Logo\" class=\"footer-logo-img\">
        <span>LearnFlex+</span>
      </div>
      <div class=\"footer-slogan\">
        <p>Apprends malin, ton bac en main</p>
      </div>
      <div class=\"footer-social\">
        <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
        <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
        <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
        <a href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
      </div>
    </div>

    <div class=\"footer-middle\">
      <div class=\"footer-column\">
        <h4>Services</h4>
        <ul>
          <li><a href=\"#\">Cours</a></li>
          <li><a href=\"#\">Quiz & Evaluations</a></li>
          <li><a href=\"{{ path('forum_index') }}\">Forum</a></li>  <!-- MODIFICATION ICI -->
        </ul>
      </div>
      <div class=\"footer-column\">
        <h4>À propos</h4>
        <ul>
          <li><a href=\"#\">Notre mission</a></li>
          <li><a href=\"#\">Orientation</a></li>
        </ul>
      </div>
      <div class=\"footer-column\">
        <h4>Légal</h4>
        <ul>
          <li><a href=\"#\">Conditions d'utilisation</a></li>
          <li><a href=\"#\">Politique de confidentialité</a></li>
          <li><a href=\"#\">Cookies</a></li>
        </ul>
      </div>
      <div class=\"footer-column\">
        <h4>Contact</h4>
        <ul>
          <li><i class=\"fas fa-map-marker-alt\"></i> 123 Avenue Habib Bourguiba, Tunis</li>
          <li><i class=\"fas fa-phone\"></i> +216 71 123 456</li>
          <li><i class=\"fas fa-envelope\"></i> contact@learnflexplus.com</li>
        </ul>
      </div>
    </div>

    <div class=\"footer-bottom\">
      <p>&copy; 2026 LearnFlex+. Tous droits réservés.</p>
    </div>
  </div>
</footer>

{% block javascripts %}
<script>
  document.querySelector('.mobile-menu-btn')?.addEventListener('click', function() {
    document.querySelector('.main-nav').classList.toggle('active');
  });
</script>
{% endblock %}

{% endblock %}", "front/index.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\front\\index.html.twig");
    }
}
