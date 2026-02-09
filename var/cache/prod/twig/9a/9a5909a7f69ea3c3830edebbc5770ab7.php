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

/* back/Publication/show.html.twig */
class __TwigTemplate_ff1744ecdd266bb6e01acc56a5e0982f extends Template
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
        yield "Publication #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["publication"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
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
<style>
    .detail-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 8px 32px rgba(0,0,0,0.1);
        border: 1px solid #e9ecef;
    }
    
    .detail-header {
        background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
        color: white;
        padding: 2rem;
        position: relative;
    }
    
    .detail-header::after {
        content: '';
        position: absolute;
        bottom: -20px;
        left: 5%;
        right: 5%;
        height: 40px;
        background: white;
        border-radius: 20px;
    }
    
    .detail-body {
        padding: 3rem 2rem 2rem;
        position: relative;
        z-index: 1;
    }
    
    .info-card {
        background: #f8fafc;
        border-radius: 16px;
        padding: 1.5rem;
        border: 1px solid #e2e8f0;
        transition: all 0.3s ease;
    }
    
    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0,0,0,0.1);
    }
    
    .info-label {
        color: #64748b;
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 0.5rem;
    }
    
    .info-value {
        color: #1e293b;
        font-size: 1.25rem;
        font-weight: 700;
    }
    
    .description-box {
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        border-radius: 16px;
        padding: 2rem;
        border: 1px solid #e2e8f0;
        line-height: 1.8;
        color: #475569;
        font-size: 1.05rem;
    }
    
    .stats-card {
        background: white;
        border-radius: 16px;
        padding: 1.5rem;
        border: 1px solid #e2e8f0;
        text-align: center;
        transition: all 0.3s ease;
    }
    
    .stats-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0,0,0,0.1);
    }
    
    .stats-icon {
        width: 60px;
        height: 60px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        font-size: 1.5rem;
    }
    
    .views-icon {
        background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        color: white;
    }
    
    .likes-icon {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        color: white;
    }
    
    .stats-number {
        font-size: 2rem;
        font-weight: 800;
        color: #1e293b;
        margin-bottom: 0.25rem;
    }
    
    .stats-label {
        color: #64748b;
        font-size: 0.9rem;
        font-weight: 600;
    }
    
    .badge-detail {
        padding: 0.75rem 1.25rem;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.9rem;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        border: none;
    }
    
    .badge-cours {
        background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
        color: white;
    }
    
    .badge-question {
        background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        color: white;
    }
    
    .badge-discussion {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        color: white;
    }
    
    .btn-action-detail {
        padding: 0.75rem 1.5rem;
        border-radius: 12px;
        font-weight: 600;
        border: none;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    
    .btn-edit-detail {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        color: white;
    }
    
    .btn-back-detail {
        background: white;
        color: #64748b;
        border: 2px solid #e2e8f0;
    }
    
    .btn-edit-detail:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(245, 158, 11, 0.3);
    }
    
    .btn-back-detail:hover {
        background: #f8fafc;
        border-color: #cbd5e1;
    }
</style>
";
        yield from [];
    }

    // line 188
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 189
        yield "<div class=\"dashboard\">
    <!-- Sidebar -->
    <aside class=\"sidebar\">
        <div class=\"sidebar-header\">
            <div class=\"logo\">
                <img src=\"";
        // line 194
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
        // line 206
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
                            <span>contenu pédagogique</span>
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
        // line 242
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
        // line 253
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
    
    <!-- Main Content -->
    <main class=\"main-content\">
        <header class=\"dashboard-header\">
            <div class=\"header-left\">
                <h1>Détails de la Publication</h1>
                <p>Informations complètes sur la publication</p>
            </div>
            <div class=\"header-right\">
                <div class=\"search-bar\">
                    <input type=\"text\" placeholder=\"Rechercher...\">
                    <button><i class=\"fas fa-search\"></i></button>
                </div>
                <button class=\"notification-btn\">
                    <i class=\"fas fa-bell\"></i>
                    <span class=\"badge\">3</span>
                </button>
            </div>
        </header>
        
        <div class=\"dashboard-content\">
            <div class=\"detail-card\">
                <!-- Header -->
                <div class=\"detail-header\">
                    <div class=\"d-flex justify-content-between align-items-start\">
                        <div>
                            <h1 class=\"h3 mb-2\">";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["publication"] ?? null), "titre", [], "any", false, false, false, 291), "html", null, true);
        yield "</h1>
                            <p class=\"mb-0 opacity-90\">Publication #";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["publication"] ?? null), "id", [], "any", false, false, false, 292), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"d-flex gap-2\">
                            <a href=\"";
        // line 295
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["publication"] ?? null), "id", [], "any", false, false, false, 295)]), "html", null, true);
        yield "\" class=\"btn-action-detail btn-edit-detail\">
                                <i class=\"fas fa-edit\"></i> Modifier
                            </a>
                            <a href=\"";
        // line 298
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index");
        yield "\" class=\"btn-action-detail btn-back-detail\">
                                <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Body -->
                <div class=\"detail-body\">
                    <!-- Description -->
                    <div class=\"mb-5\">
                        <h3 class=\"h5 mb-3 fw-bold\">Description</h3>
                        <div class=\"description-box\">
                            ";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["publication"] ?? null), "description", [], "any", false, false, false, 311), "html", null, true);
        yield "
                        </div>
                    </div>
                    
                    <!-- Informations -->
                    <div class=\"row mb-5\">
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"info-card h-100\">
                                <div class=\"info-label\">ID</div>
                                <div class=\"info-value\">#";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["publication"] ?? null), "id", [], "any", false, false, false, 320), "html", null, true);
        yield "</div>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"info-card h-100\">
                                <div class=\"info-label\">Catégorie</div>
                                <div class=\"info-value\">
                                    ";
        // line 327
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["publication"] ?? null), "categorie", [], "any", false, false, false, 327) == "cours")) {
            // line 328
            yield "                                        <span class=\"badge-detail badge-cours\">
                                            <i class=\"fas fa-graduation-cap me-1\"></i> Cours
                                        </span>
                                    ";
        } elseif (((CoreExtension::getAttribute($this->env, $this->source,         // line 331
($context["publication"] ?? null), "categorie", [], "any", false, false, false, 331) == "question") || (CoreExtension::getAttribute($this->env, $this->source, ($context["publication"] ?? null), "categorie", [], "any", false, false, false, 331) == "question_examen"))) {
            // line 332
            yield "                                        <span class=\"badge-detail badge-question\">
                                            <i class=\"fas fa-question-circle me-1\"></i> Question
                                        </span>
                                    ";
        } else {
            // line 336
            yield "                                        <span class=\"badge-detail badge-discussion\">
                                            <i class=\"fas fa-comments me-1\"></i> Discussion
                                        </span>
                                    ";
        }
        // line 340
        yield "                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3\">
                            <div class=\"info-card h-100\">
                                <div class=\"info-label\">Date de création</div>
                                <div class=\"info-value\">";
        // line 346
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["publication"] ?? null), "dateCreation", [], "any", false, false, false, 346), "d/m/Y"), "html", null, true);
        yield "</div>
                                <small class=\"text-muted\">";
        // line 347
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["publication"] ?? null), "dateCreation", [], "any", false, false, false, 347), "H:i:s"), "html", null, true);
        yield "</small>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Statistiques -->
                    <h3 class=\"h5 mb-4 fw-bold\">Statistiques</h3>
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-4\">
                            <div class=\"stats-card\">
                                <div class=\"stats-icon views-icon\">
                                    <i class=\"fas fa-eye\"></i>
                                </div>
                                <div class=\"stats-number\">";
        // line 360
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["publication"] ?? null), "nombreVues", [], "any", false, false, false, 360), "html", null, true);
        yield "</div>
                                <div class=\"stats-label\">Vues</div>
                            </div>
                        </div>
                        <div class=\"col-md-6 mb-4\">
                            <div class=\"stats-card\">
                                <div class=\"stats-icon likes-icon\">
                                    <i class=\"fas fa-heart\"></i>
                                </div>
                                <div class=\"stats-number\">";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["publication"] ?? null), "nombreLikes", [], "any", false, false, false, 369), "html", null, true);
        yield "</div>
                                <div class=\"stats-label\">Likes</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Métriques d'engagement -->
                    <div class=\"row mt-4\">
                        <div class=\"col-md-12\">
                            <div class=\"info-card\">
                                <h4 class=\"h6 mb-3 fw-bold\">Métriques d'engagement</h4>
                                <div class=\"row\">
                                    <div class=\"col-md-4\">
                                        <div class=\"text-center\">
                                            <div class=\"stats-number\">";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["publication"] ?? null), "nombreVues", [], "any", false, false, false, 383), "html", null, true);
        yield "</div>
                                            <div class=\"stats-label\">Vues totales</div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"text-center\">
                                            <div class=\"stats-number\">";
        // line 389
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["publication"] ?? null), "nombreLikes", [], "any", false, false, false, 389), "html", null, true);
        yield "</div>
                                            <div class=\"stats-label\">Likes totaux</div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <div class=\"text-center\">
                                            <div class=\"stats-number\">
                                                ";
        // line 396
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["publication"] ?? null), "nombreVues", [], "any", false, false, false, 396) > 0)) {
            // line 397
            yield "                                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["publication"] ?? null), "nombreLikes", [], "any", false, false, false, 397) / CoreExtension::getAttribute($this->env, $this->source, ($context["publication"] ?? null), "nombreVues", [], "any", false, false, false, 397)) * 100), 1), "html", null, true);
            yield "%
                                                ";
        } else {
            // line 399
            yield "                                                    0%
                                                ";
        }
        // line 401
        yield "                                            </div>
                                            <div class=\"stats-label\">Taux d'engagement</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
        return "back/Publication/show.html.twig";
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
        return array (  548 => 401,  544 => 399,  538 => 397,  536 => 396,  526 => 389,  517 => 383,  500 => 369,  488 => 360,  472 => 347,  468 => 346,  460 => 340,  454 => 336,  448 => 332,  446 => 331,  441 => 328,  439 => 327,  429 => 320,  417 => 311,  401 => 298,  395 => 295,  389 => 292,  385 => 291,  344 => 253,  330 => 242,  291 => 206,  276 => 194,  269 => 189,  262 => 188,  77 => 7,  72 => 6,  65 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/Publication/show.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\Publication\\show.html.twig");
    }
}
