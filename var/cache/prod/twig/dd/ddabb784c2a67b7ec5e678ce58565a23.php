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

/* back/Publication/new.html.twig */
class __TwigTemplate_a157a2a7b386af7561f47d1431061667 extends Template
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
        yield "Nouvelle Publication";
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
<style>
    .category-card {
        border: 2px solid #e9ecef;
        border-radius: 16px;
        padding: 2rem;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        background: white;
    }
    
    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        border-color: #667eea;
    }
    
    .category-card.selected {
        border-color: #667eea;
        background: #f8f9ff;
        box-shadow: 0 5px 20px rgba(102, 126, 234, 0.3);
    }
    
    .category-icon {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }
</style>
";
        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        yield "<div class=\"dashboard\">
    <aside class=\"sidebar\">
        <div class=\"sidebar-header\">
            <div class=\"logo\">
                <img src=\"";
        // line 50
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
        // line 62
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
        // line 98
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
        // line 109
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
                <h1>Nouvelle Publication</h1>
                <p>Créer une nouvelle publication dans le forum</p>
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
            <div class=\"card\">
                <div class=\"card-body\">
                    ";
        // line 143
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
                        <div class=\"mb-4\">
                            ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "titre", [], "any", false, false, false, 145), 'label');
        yield "
                            ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "titre", [], "any", false, false, false, 146), 'widget');
        yield "
                            ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "titre", [], "any", false, false, false, 147), 'errors');
        yield "
                        </div>
                        
                        <div class=\"mb-4\">
                            ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 151), 'label');
        yield "
                            ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 152), 'widget');
        yield "
                            ";
        // line 153
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 153), 'errors');
        yield "
                        </div>
                        
                        <div class=\"mb-4\">
                            <label class=\"form-label\"><i class=\"fas fa-folder\"></i> Catégorie</label>
                            
                            ";
        // line 160
        yield "                            <div class=\"row g-3 mb-3\">
                                <div class=\"col-md-4\">
                                    <div class=\"category-card\" onclick=\"selectCategory('question_cours')\">
                                        <div class=\"category-icon\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\">
                                            <i class=\"fas fa-graduation-cap fa-2x text-white\"></i>
                                        </div>
                                        <h5 class=\"mt-3\">Cours</h5>
                                        <p class=\"text-muted small\">Partage de connaissances et tutoriels</p>
                                    </div>
                                </div>
                                
                                <div class=\"col-md-4\">
                                    <div class=\"category-card\" onclick=\"selectCategory('question_examen')\">
                                        <div class=\"category-icon\" style=\"background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);\">
                                            <i class=\"fas fa-question-circle fa-2x text-white\"></i>
                                        </div>
                                        <h5 class=\"mt-3\">Question</h5>
                                        <p class=\"text-muted small\">Demande d'aide ou de clarification</p>
                                    </div>
                                </div>
                                
                                <div class=\"col-md-4\">
                                    <div class=\"category-card\" onclick=\"selectCategory('reclamation')\">
                                        <div class=\"category-icon\" style=\"background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);\">
                                            <i class=\"fas fa-comments fa-2x text-white\"></i>
                                        </div>
                                        <h5 class=\"mt-3\">Discussion</h5>
                                        <p class=\"text-muted small\">Échange d'idées et débats</p>
                                    </div>
                                </div>
                            </div>
                            
                            ";
        // line 193
        yield "                            <div style=\"display: none;\">
                                ";
        // line 194
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "categorie", [], "any", false, false, false, 194), 'widget', ["attr" => ["id" => "categorie-select"]]);
        yield "
                            </div>
                            ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "categorie", [], "any", false, false, false, 196), 'errors');
        yield "
                        </div>
                        
                        <div class=\"mt-4\">
                            <button type=\"submit\" class=\"btn btn-success btn-lg\">
                                <i class=\"fas fa-check-circle\"></i> Créer la Publication
                            </button>
                            <a href=\"";
        // line 203
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index");
        yield "\" class=\"btn btn-secondary btn-lg\">
                                <i class=\"fas fa-times-circle\"></i> Annuler
                            </a>
                        </div>
                    ";
        // line 207
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
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

function selectCategory(value) {
    // Retirer la sélection de toutes les cartes
    document.querySelectorAll('.category-card').forEach(card => {
        card.classList.remove('selected');
    });
    
    // Sélectionner la carte cliquée
    event.currentTarget.classList.add('selected');
    
    // Mettre à jour le select caché
    document.getElementById('categorie-select').value = value;
}
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/Publication/new.html.twig";
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
        return array (  332 => 207,  325 => 203,  315 => 196,  310 => 194,  307 => 193,  273 => 160,  264 => 153,  260 => 152,  256 => 151,  249 => 147,  245 => 146,  241 => 145,  236 => 143,  199 => 109,  185 => 98,  146 => 62,  131 => 50,  125 => 46,  118 => 45,  76 => 7,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/Publication/new.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\Publication\\new.html.twig");
    }
}
