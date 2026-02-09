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

/* back/communication/index.html.twig */
class __TwigTemplate_2aca74d991f07b03b936d1be41434682 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        yield "Gestion des Communications";
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
        yield "<style>
.table-container {
    background: white;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    overflow: hidden;
}

.table-header {
    padding: 20px;
    border-bottom: 1px solid #e9ecef;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.table-responsive {
    overflow-x: auto;
}

.table th {
    background: #f8f9fa;
    border-bottom: 2px solid #dee2e6;
    font-weight: 600;
    color: #495057;
    padding: 12px 15px;
}

.table td {
    padding: 12px 15px;
    vertical-align: middle;
}

.badge {
    font-size: 12px;
    font-weight: 500;
    padding: 4px 8px;
}

.badge-success { background: #d4edda; color: #155724; }
.badge-warning { background: #fff3cd; color: #856404; }
.badge-danger { background: #f8d7da; color: #721c24; }
.badge-info { background: #d1ecf1; color: #0c5460; }
.badge-primary { background: #d1e7ff; color: #0a58ca; }

.actions {
    display: flex;
    gap: 8px;
}

.action-btn {
    width: 32px;
    height: 32px;
    border-radius: 6px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
    transition: all 0.2s;
}

.action-btn:hover {
    transform: translateY(-1px);
}

.action-btn.view { background: #e7f5ff; color: #0d6efd; }
.action-btn.edit { background: #fff3bf; color: #f59f00; }
.action-btn.delete { background: #ffe3e3; color: #fa5252; }

/* Style pour les filtres actifs */
.filter-badge a {
    text-decoration: none;
    opacity: 0.8;
}
.filter-badge a:hover {
    opacity: 1;
}

/* Pagination */
.pagination .page-link {
    color: #2c3e50;
}
.pagination .page-item.active .page-link {
    background-color: #2c3e50;
    border-color: #2c3e50;
    color: white;
}
</style>
";
        yield from [];
    }

    // line 96
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 97
        yield "<div class=\"container-fluid py-4\">
    <!-- Header -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <h1 class=\"h3 mb-2\">Gestion des Communications</h1>
            <p class=\"mb-0\">Gérez les communications et réclamations des étudiants</p>
        </div>
        <a href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_new");
        yield "\" class=\"btn btn-primary\">
            <i class=\"fas fa-plus me-2\"></i>Nouvelle communication
        </a>
    </div>
    
    <!-- Formulaire de recherche -->
    <div class=\"card border-0 shadow-sm mb-4\">
        <div class=\"card-header bg-white\">
            <h5 class=\"mb-0\">
                <i class=\"fas fa-search me-2\"></i>Recherche
            </h5>
        </div>
        <div class=\"card-body\">
            ";
        // line 117
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["searchForm"] ?? null), 'form_start', ["attr" => ["class" => "row g-3"]]);
        yield "
                <div class=\"col-md-4\">
                    ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["searchForm"] ?? null), "keyword", [], "any", false, false, false, 119), 'row', ["label" => false, "attr" => ["placeholder" => "Rechercher par description, lien...", "class" => "form-control"]]);
        // line 125
        yield "
                </div>
                <div class=\"col-md-2\">
                    ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["searchForm"] ?? null), "type", [], "any", false, false, false, 128), 'row', ["label" => false, "attr" => ["class" => "form-select"]]);
        // line 131
        yield "
                </div>
                <div class=\"col-md-2\">
                    ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["searchForm"] ?? null), "etat", [], "any", false, false, false, 134), 'row', ["label" => false, "attr" => ["class" => "form-select"]]);
        // line 137
        yield "
                </div>
                <div class=\"col-md-2\">
                    ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["searchForm"] ?? null), "dateFrom", [], "any", false, false, false, 140), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "Date début"]]);
        // line 146
        yield "
                </div>
                <div class=\"col-md-2\">
                    ";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["searchForm"] ?? null), "dateTo", [], "any", false, false, false, 149), 'row', ["label" => false, "attr" => ["class" => "form-control", "placeholder" => "Date fin"]]);
        // line 155
        yield "
                </div>
                <div class=\"col-md-12\">
                    <div class=\"d-flex gap-2\">
                        <button type=\"submit\" name=\"communication_search[rechercher]\" class=\"btn btn-primary\">
                            <i class=\"fas fa-search me-1\"></i>Rechercher
                        </button>
                        <button type=\"submit\" name=\"communication_search[reset]\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-redo me-1\"></i>Réinitialiser
                        </button>
                        ";
        // line 165
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["searchCriteria"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 166
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_index");
            yield "\" class=\"btn btn-outline-danger\">
                                <i class=\"fas fa-times me-1\"></i>Effacer tous les filtres
                            </a>
                        ";
        }
        // line 170
        yield "                    </div>
                </div>
            ";
        // line 172
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["searchForm"] ?? null), 'form_end');
        yield "
            
            <!-- Affichage des filtres actifs -->
            ";
        // line 175
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["searchCriteria"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 176
            yield "            <div class=\"mt-3\">
                <small class=\"text-muted\">Filtres actifs :</small>
                <div class=\"d-flex flex-wrap gap-2 mt-1\">
                    ";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["searchCriteria"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 180
                yield "                        ";
                if (( !Twig\Extension\CoreExtension::testEmpty($context["value"]) && !CoreExtension::inFilter($context["key"], ["rechercher", "reset"]))) {
                    // line 181
                    yield "                        <span class=\"badge bg-info filter-badge\">
                            ";
                    // line 182
                    if (($context["key"] == "keyword")) {
                        yield "Mot-clé: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                        yield "
                            ";
                    } elseif ((                    // line 183
$context["key"] == "type")) {
                        yield "Type: ";
                        yield ((($context["value"] == "live")) ? ("En direct") : ("Enregistré"));
                        yield "
                            ";
                    } elseif ((                    // line 184
$context["key"] == "etat")) {
                        yield "État: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["value"], ["_" => " "])), "html", null, true);
                        yield "
                            ";
                    } elseif ((                    // line 185
$context["key"] == "dateFrom")) {
                        yield "Du: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($context["value"], "d/m/Y"), "html", null, true);
                        yield "
                            ";
                    } elseif ((                    // line 186
$context["key"] == "dateTo")) {
                        yield "Au: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate($context["value"], "d/m/Y"), "html", null, true);
                        yield "
                            ";
                    } else {
                        // line 187
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                        yield ": ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                        yield "
                            ";
                    }
                    // line 189
                    yield "                            <a href=\"#\" class=\"text-white ms-2\" onclick=\"removeFilter('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "')\">
                                <i class=\"fas fa-times\"></i>
                            </a>
                        </span>
                        ";
                }
                // line 194
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            yield "                </div>
            </div>
            ";
        }
        // line 198
        yield "        </div>
    </div>
    
    <!-- Tableau -->
    <div class=\"table-container mb-4\">
        <div class=\"table-header\">
            <h5 class=\"mb-0\">Liste des communications</h5>
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 206
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_search_advanced");
        yield "\" class=\"btn btn-outline-secondary btn-sm\">
                    <i class=\"fas fa-search-plus me-1\"></i>Recherche avancée
                </a>
                <a href=\"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_export_pdf", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 209), "query", [], "any", false, false, false, 209), "all", [], "any", false, false, false, 209)), "html", null, true);
        yield "\" class=\"btn btn-outline-danger btn-sm\">
                    <i class=\"fas fa-file-pdf me-1\"></i>Exporter PDF
                </a>
                <a href=\"";
        // line 212
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_statistics");
        yield "\" class=\"btn btn-outline-info btn-sm\">
                    <i class=\"fas fa-chart-bar me-1\"></i>Statistiques
                </a>
            </div>
        </div>
        
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th width=\"60\">ID</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th width=\"150\">Date/Heure</th>
                        <th width=\"100\">État</th>
                        <th width=\"100\" class=\"text-center\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["communications"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["communication"]) {
            // line 232
            yield "                    <tr>
                        <td class=\"fw-semibold\">#";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "id", [], "any", false, false, false, 233), "html", null, true);
            yield "</td>
                        <td>
                            <span class=\"badge ";
            // line 235
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "type", [], "any", false, false, false, 235) == "live")) {
                yield "badge-danger";
            } else {
                yield "badge-info";
            }
            yield "\">
                                ";
            // line 236
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "type", [], "any", false, false, false, 236) == "live")) ? ("En direct") : ("Enregistré"));
            yield "
                            </span>
                        </td>
                        <td>
                            <a href=\"";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "id", [], "any", false, false, false, 240)]), "html", null, true);
            yield "\" class=\"text-decoration-none\">
                                ";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", true, true, false, 241)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", false, false, false, 241), "Sans titre")) : ("Sans titre")), 0, 50) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", true, true, false, 241)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "descriptionDetaillee", [], "any", false, false, false, 241), "")) : (""))) > 50)) ? ("...") : (""))), "html", null, true);
            yield "
                            </a>
                            ";
            // line 243
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "lien", [], "any", false, false, false, 243)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 244
                yield "                            <br><small class=\"text-muted\"><i class=\"fas fa-link\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "lien", [], "any", false, false, false, 244), 0, 30) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "lien", [], "any", false, false, false, 244)) > 30)) ? ("...") : (""))), "html", null, true);
                yield "</small>
                            ";
            }
            // line 246
            yield "                        </td>
                        <td>";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "dateHeure", [], "any", false, false, false, 247), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                        <td>
                            <span class=\"badge 
                                ";
            // line 250
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "etat", [], "any", false, false, false, 250) == "planifie")) {
                yield "badge-warning
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 251
$context["communication"], "etat", [], "any", false, false, false, 251) == "en_cours")) {
                yield "badge-success
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 252
$context["communication"], "etat", [], "any", false, false, false, 252) == "termine")) {
                yield "badge-info
                                ";
            } else {
                // line 253
                yield "badge-danger";
            }
            yield "\">
                                ";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "etat", [], "any", false, false, false, 254), ["_" => " "])), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td class=\"text-center\">
                            <div class=\"actions\">
                                <a href=\"";
            // line 259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "id", [], "any", false, false, false, 259)]), "html", null, true);
            yield "\" class=\"action-btn view\" title=\"Voir\">
                                    <i class=\"fas fa-eye\"></i>
                                </a>
                                <a href=\"";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "id", [], "any", false, false, false, 262)]), "html", null, true);
            yield "\" class=\"action-btn edit\" title=\"Modifier\">
                                    <i class=\"fas fa-edit\"></i>
                                </a>
                                <form method=\"post\" action=\"";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_communication_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "id", [], "any", false, false, false, 265)]), "html", null, true);
            yield "\" 
                                      onsubmit=\"return confirm('Supprimer cette communication ?');\" class=\"d-inline\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["communication"], "id", [], "any", false, false, false, 267))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"action-btn delete\" title=\"Supprimer\">
                                        <i class=\"fas fa-trash\"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 275
        if (!$context['_iterated']) {
            // line 276
            yield "                    <tr>
                        <td colspan=\"6\" class=\"text-center py-5\">
                            <div class=\"py-4\">
                                <i class=\"fas fa-comments fa-3x text-muted mb-3\"></i>
                                <h5 class=\"text-muted\">Aucune communication trouvée</h5>
                                <p class=\"text-muted mb-0\">
                                    ";
            // line 282
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["searchCriteria"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 283
                yield "                                        Aucun résultat pour votre recherche. Essayez d'autres critères.
                                    ";
            } else {
                // line 285
                yield "                                        Commencez par créer une nouvelle communication
                                    ";
            }
            // line 287
            yield "                                </p>
                            </div>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['communication'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        yield "                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        ";
        // line 297
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["communications"] ?? null), "getTotalItemCount", [], "any", false, false, false, 297) > 0)) {
            // line 298
            yield "        <div class=\"p-3 border-top d-flex justify-content-between align-items-center\">
            <div class=\"text-muted\">
                Affichage de ";
            // line 300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["communications"] ?? null), "getItemNumberPerPage", [], "any", false, false, false, 300) * (CoreExtension::getAttribute($this->env, $this->source, ($context["communications"] ?? null), "getCurrentPageNumber", [], "any", false, false, false, 300) - 1)) + 1), "html", null, true);
            yield " 
                à ";
            // line 301
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(min((CoreExtension::getAttribute($this->env, $this->source, ($context["communications"] ?? null), "getItemNumberPerPage", [], "any", false, false, false, 301) * CoreExtension::getAttribute($this->env, $this->source, ($context["communications"] ?? null), "getCurrentPageNumber", [], "any", false, false, false, 301)), CoreExtension::getAttribute($this->env, $this->source, ($context["communications"] ?? null), "getTotalItemCount", [], "any", false, false, false, 301)), "html", null, true);
            yield " 
                sur ";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["communications"] ?? null), "getTotalItemCount", [], "any", false, false, false, 302), "html", null, true);
            yield " communication(s)
            </div>
            <div>
                ";
            // line 305
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, ($context["communications"] ?? null));
            yield "
            </div>
        </div>
        ";
        }
        // line 309
        yield "    </div>
</div>
";
        yield from [];
    }

    // line 313
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 314
        yield "<script>
// Supprimer un filtre
function removeFilter(filterName) {
    const url = new URL(window.location.href);
    
    // Supprimer le paramètre spécifique
    url.searchParams.delete('communication_search[' + filterName + ']');
    
    // Si c'est une date, supprimer aussi les parties individuelles
    if (filterName === 'dateFrom' || filterName === 'dateTo') {
        url.searchParams.delete('communication_search[' + filterName + '][year]');
        url.searchParams.delete('communication_search[' + filterName + '][month]');
        url.searchParams.delete('communication_search[' + filterName + '][day]');
    }
    
    window.location.href = url.toString();
}

// Initialiser les datepickers (si vous utilisez une bibliothèque)
document.addEventListener('DOMContentLoaded', function() {
    // Exemple avec HTML5 date input
    const dateInputs = document.querySelectorAll('input[type=\"date\"]');
    dateInputs.forEach(input => {
        if (!input.value) {
            input.type = 'text';
            input.placeholder = input.getAttribute('placeholder') || 'jj/mm/aaaa';
        }
    });
    
    // Formater les dates existantes pour l'affichage
    const dateFields = document.querySelectorAll('input[name*=\"date\"]');
    dateFields.forEach(field => {
        if (field.value && field.type === 'date') {
            const date = new Date(field.value);
            field.value = date.toISOString().split('T')[0];
        }
    });
});

// Confirmation avant réinitialisation
document.querySelector('button[name=\"communication_search[reset]\"]')?.addEventListener('click', function(e) {
    if (!confirm('Voulez-vous vraiment réinitialiser tous les filtres ?')) {
        e.preventDefault();
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
        return "back/communication/index.html.twig";
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
        return array (  571 => 314,  564 => 313,  557 => 309,  550 => 305,  544 => 302,  540 => 301,  536 => 300,  532 => 298,  530 => 297,  523 => 292,  513 => 287,  509 => 285,  505 => 283,  503 => 282,  495 => 276,  493 => 275,  480 => 267,  475 => 265,  469 => 262,  463 => 259,  455 => 254,  450 => 253,  445 => 252,  441 => 251,  437 => 250,  431 => 247,  428 => 246,  422 => 244,  420 => 243,  415 => 241,  411 => 240,  404 => 236,  396 => 235,  391 => 233,  388 => 232,  383 => 231,  361 => 212,  355 => 209,  349 => 206,  339 => 198,  334 => 195,  328 => 194,  319 => 189,  312 => 187,  305 => 186,  299 => 185,  293 => 184,  287 => 183,  281 => 182,  278 => 181,  275 => 180,  271 => 179,  266 => 176,  264 => 175,  258 => 172,  254 => 170,  246 => 166,  244 => 165,  232 => 155,  230 => 149,  225 => 146,  223 => 140,  218 => 137,  216 => 134,  211 => 131,  209 => 128,  204 => 125,  202 => 119,  197 => 117,  181 => 104,  172 => 97,  165 => 96,  72 => 6,  65 => 5,  54 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "back/communication/index.html.twig", "C:\\Users\\aouam\\Desktop\\projet\\learnflex\\templates\\back\\communication\\index.html.twig");
    }
}
