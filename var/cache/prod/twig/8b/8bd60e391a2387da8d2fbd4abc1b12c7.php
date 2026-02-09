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

/* back/Publication/index.html.twig */
class __TwigTemplate_6fde1a2bfefc9a56fc1f5e5315b62473 extends Template
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
        yield "Gestion du Forum";
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
                <h1>Gestion du Forum</h1>
                <p>Gérer les publications et réclamations des étudiants</p>
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
            ";
        // line 109
        yield "            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h2>Publications</h2>
                <div>
                    <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_stats");
        yield "\" class=\"btn btn-info me-2\">
                        <i class=\"fas fa-chart-bar\"></i> Statistiques
                    </a>
                    <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_new");
        yield "\" class=\"btn btn-success\">
                        <i class=\"fas fa-plus-circle\"></i> Nouvelle Publication
                    </a>
                </div>
            </div>

            ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["success"], "method", false, false, false, 121));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 122
            yield "                <div class=\"alert alert-success alert-dismissible fade show\">
                    ";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "
            ";
        // line 129
        yield "            <div class=\"card mb-4\" style=\"border: none; box-shadow: 0 2px 4px rgba(0,0,0,0.1);\">
                <div class=\"card-header\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;\">
                    <h5 class=\"mb-0\">
                        <i class=\"fas fa-search\"></i> Recherche avancée
                    </h5>
                </div>
                <div class=\"card-body\">
                    <form method=\"get\" action=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index");
        yield "\" id=\"searchForm\">
                        <div class=\"row g-3\">
                            <div class=\"col-md-2\">
                                <label for=\"id\" class=\"form-label\">ID</label>
                                <input type=\"number\" class=\"form-control\" id=\"id\" name=\"id\" placeholder=\"ID\" value=\"";
        // line 140
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "id", [], "any", true, true, false, 140) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "id", [], "any", false, false, false, 140)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "id", [], "any", false, false, false, 140), "html", null, true)) : (""));
        yield "\">
                            </div>
                            
                            <div class=\"col-md-3\">
                                <label for=\"titre\" class=\"form-label\">Titre</label>
                                <input type=\"text\" class=\"form-control\" id=\"titre\" name=\"titre\" placeholder=\"Rechercher...\" value=\"";
        // line 145
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "titre", [], "any", true, true, false, 145) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "titre", [], "any", false, false, false, 145)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "titre", [], "any", false, false, false, 145), "html", null, true)) : (""));
        yield "\">
                            </div>
                            
                            <div class=\"col-md-2\">
                                <label for=\"categorie\" class=\"form-label\">Catégorie</label>
                                <select class=\"form-control\" id=\"categorie\" name=\"categorie\">
                                    <option value=\"\">-- Toutes --</option>
                                    <option value=\"question_cours\" ";
        // line 152
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "categorie", [], "any", false, false, false, 152) == "question_cours")) ? ("selected") : (""));
        yield ">Question cours</option>
                                    <option value=\"question_examen\" ";
        // line 153
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "categorie", [], "any", false, false, false, 153) == "question_examen")) ? ("selected") : (""));
        yield ">Question examen</option>
                                    <option value=\"reclamation\" ";
        // line 154
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "categorie", [], "any", false, false, false, 154) == "reclamation")) ? ("selected") : (""));
        yield ">Réclamation</option>
                                    <option value=\"aide\" ";
        // line 155
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "categorie", [], "any", false, false, false, 155) == "aide")) ? ("selected") : (""));
        yield ">Aide</option>
                                    <option value=\"autre\" ";
        // line 156
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "categorie", [], "any", false, false, false, 156) == "autre")) ? ("selected") : (""));
        yield ">Autre</option>
                                </select>
                            </div>
                            
                            <div class=\"col-md-2\">
                                <label for=\"dateDebut\" class=\"form-label\">Date début</label>
                                <input type=\"date\" class=\"form-control\" id=\"dateDebut\" name=\"dateDebut\" value=\"";
        // line 162
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "dateDebut", [], "any", true, true, false, 162) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "dateDebut", [], "any", false, false, false, 162)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "dateDebut", [], "any", false, false, false, 162), "html", null, true)) : (""));
        yield "\">
                            </div>
                            
                            <div class=\"col-md-2\">
                                <label for=\"dateFin\" class=\"form-label\">Date fin</label>
                                <input type=\"date\" class=\"form-control\" id=\"dateFin\" name=\"dateFin\" value=\"";
        // line 167
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "dateFin", [], "any", true, true, false, 167) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "dateFin", [], "any", false, false, false, 167)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "dateFin", [], "any", false, false, false, 167), "html", null, true)) : (""));
        yield "\">
                            </div>
                            
                            <div class=\"col-md-1 d-flex align-items-end\">
                                <button type=\"submit\" class=\"btn btn-success w-100\">
                                    <i class=\"fas fa-search\"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class=\"row mt-3\">
                            <div class=\"col-md-12\">
                                <a href=\"";
        // line 179
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index");
        yield "\" class=\"btn btn-sm btn-outline-secondary\">
                                    <i class=\"fas fa-redo\"></i> Réinitialiser
                                </a>
                                <button type=\"button\" class=\"btn btn-sm btn-danger\" id=\"exportPdfBtn\">
                                    <i class=\"fas fa-file-pdf\"></i> Exporter PDF
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            ";
        // line 192
        yield "            <div class=\"card mb-3\" style=\"border: none; box-shadow: 0 2px 4px rgba(0,0,0,0.1);\">
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-8\">
                            <strong><i class=\"fas fa-sort\"></i> Trier par :</strong>
                            <div class=\"btn-group ms-2\" role=\"group\">
                                <a href=\"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index", Twig\Extension\CoreExtension::merge(($context["searchParams"] ?? null), ["sortBy" => "dateCreation", "sortOrder" => "DESC"])), "html", null, true);
        yield "\" 
                                   class=\"btn btn-sm ";
        // line 199
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "sortBy", [], "any", false, false, false, 199) == "dateCreation")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\">
                                    Date
                                </a>
                                <a href=\"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index", Twig\Extension\CoreExtension::merge(($context["searchParams"] ?? null), ["sortBy" => "nombreVues", "sortOrder" => "DESC"])), "html", null, true);
        yield "\" 
                                   class=\"btn btn-sm ";
        // line 203
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "sortBy", [], "any", false, false, false, 203) == "nombreVues")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\">
                                    Vues
                                </a>
                                <a href=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index", Twig\Extension\CoreExtension::merge(($context["searchParams"] ?? null), ["sortBy" => "nombreLikes", "sortOrder" => "DESC"])), "html", null, true);
        yield "\" 
                                   class=\"btn btn-sm ";
        // line 207
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "sortBy", [], "any", false, false, false, 207) == "nombreLikes")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\">
                                    Likes
                                </a>
                                <a href=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_index", Twig\Extension\CoreExtension::merge(($context["searchParams"] ?? null), ["sortBy" => "titre", "sortOrder" => "ASC"])), "html", null, true);
        yield "\" 
                                   class=\"btn btn-sm ";
        // line 211
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["searchParams"] ?? null), "sortBy", [], "any", false, false, false, 211) == "titre")) ? ("btn-primary") : ("btn-outline-primary"));
        yield "\">
                                    Titre
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-4 text-end\">
                            <span class=\"badge bg-secondary fs-6\">";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["publications"] ?? null)), "html", null, true);
        yield " résultat(s)</span>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 224
        yield "            <div class=\"card\" style=\"border: none; box-shadow: 0 2px 4px rgba(0,0,0,0.1);\">
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover\">
                            <thead style=\"background-color: #f8f9fa;\">
                                <tr>
                                    <th>ID</th>
                                    <th>Titre</th>
                                    <th>Catégorie</th>
                                    <th>Date</th>
                                    <th>Vues</th>
                                    <th>Likes</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["publications"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 241
            yield "                                <tr>
                                    <td><strong>#";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 242), "html", null, true);
            yield "</strong></td>
                                    <td>";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "titre", [], "any", false, false, false, 243), "html", null, true);
            yield "</td>
                                    <td><span class=\"badge bg-info text-dark\">";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "categorie", [], "any", false, false, false, 244), "html", null, true);
            yield "</span></td>
                                    <td>";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "dateCreation", [], "any", false, false, false, 245), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                                    <td><span class=\"badge bg-primary\">";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "nombreVues", [], "any", false, false, false, 246), "html", null, true);
            yield "</span></td>
                                    <td><span class=\"badge bg-success\">";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "nombreLikes", [], "any", false, false, false, 247), "html", null, true);
            yield "</span></td>
                                    <td>
                                        <a href=\"";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 249)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-info\" title=\"Voir\">
                                            <i class=\"fas fa-eye\"></i>
                                        </a>
                                        <a href=\"";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 252)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\" title=\"Modifier\">
                                            <i class=\"fas fa-edit\"></i>
                                        </a>
                                        <form method=\"post\" action=\"";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 255)]), "html", null, true);
            yield "\" style=\"display:inline-block;\" onsubmit=\"return confirm('Supprimer ?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 256))), "html", null, true);
            yield "\">
                                            <button class=\"btn btn-sm btn-danger\" title=\"Supprimer\">
                                                <i class=\"fas fa-trash\"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                ";
            $context['_iterated'] = true;
        }
        // line 263
        if (!$context['_iterated']) {
            // line 264
            yield "                                <tr>
                                    <td colspan=\"7\" class=\"text-center text-muted py-4\">
                                        <i class=\"fas fa-inbox fa-3x mb-3\"></i>
                                        <p>Aucune publication trouvée</p>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['publication'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 271
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Sidebar Toggle
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');

    if(sidebarToggle) {
        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
        });
    }

    // Export PDF
    const exportPdfBtn = document.getElementById('exportPdfBtn');
    if(exportPdfBtn) {
        exportPdfBtn.addEventListener('click', function() {
            const form = document.getElementById('searchForm');
            const formData = new FormData(form);
            const params = new URLSearchParams(formData);
            window.location.href = '";
        // line 302
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_publication_export_pdf");
        yield "?' + params.toString();
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
        return "back/Publication/index.html.twig";
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
        return array (  524 => 302,  491 => 271,  479 => 264,  477 => 263,  465 => 256,  461 => 255,  455 => 252,  449 => 249,  444 => 247,  440 => 246,  436 => 245,  432 => 244,  428 => 243,  424 => 242,  421 => 241,  416 => 240,  398 => 224,  389 => 217,  380 => 211,  376 => 210,  370 => 207,  366 => 206,  360 => 203,  356 => 202,  350 => 199,  346 => 198,  338 => 192,  323 => 179,  308 => 167,  300 => 162,  291 => 156,  287 => 155,  283 => 154,  279 => 153,  275 => 152,  265 => 145,  257 => 140,  250 => 136,  241 => 129,  238 => 127,  228 => 123,  225 => 122,  221 => 121,  212 => 115,  206 => 112,  201 => 109,  166 => 76,  152 => 65,  113 => 29,  98 => 17,  92 => 13,  85 => 12,  76 => 7,  71 => 6,  64 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/Publication/index.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\Publication\\index.html.twig");
    }
}
