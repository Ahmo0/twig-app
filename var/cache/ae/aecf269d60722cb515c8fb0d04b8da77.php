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

/* dashboard.html.twig */
class __TwigTemplate_316186372abf503b5811539fc0a43ea4 extends Template
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
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
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
        yield "Dashboard - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["app_name"] ?? null), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"dashboard\">
    <!-- Header -->
    <header class=\"header\">
        <div class=\"container\">
            <div class=\"header-content\">
                <!-- Logo -->
                <div class=\"logo\">
                    <div class=\"logo-icon\">TM</div>
                    <h1 class=\"logo-text\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["app_name"] ?? null), "html", null, true);
        yield "</h1>
                </div>

                <!-- Search Bar -->
                <div class=\"search-container\">
                    <i class=\"fas fa-search search-icon\"></i>
                    <input
                        type=\"text\"
                        placeholder=\"Search tickets...\"
                        id=\"search-input\"
                        class=\"search-input\"
                    />
                </div>

                <!-- Desktop Actions -->
                <div class=\"desktop-actions\">
                    <button onclick=\"showTicketForm()\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus\"></i>
                        New Ticket
                    </button>
                    
                    <button onclick=\"toggleFilters()\" class=\"btn btn-outline\" id=\"filters-btn\">
                        <i class=\"fas fa-filter\"></i>
                        Filters
                    </button>

                    <button class=\"btn btn-outline\">
                        <i class=\"fas fa-bell\"></i>
                    </button>

                    <div class=\"user-info\">
                        <i class=\"fas fa-user\"></i>
                        <div>
                            <div class=\"user-name\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 47), "html", null, true);
        yield "</div>
                            <div class=\"user-role\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "role", [], "any", false, false, false, 48), "html", null, true);
        yield "</div>
                        </div>
                    </div>

                    <button onclick=\"handleLogout()\" class=\"btn btn-outline\">
                        <i class=\"fas fa-sign-out-alt\"></i>
                        Logout
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <button onclick=\"toggleMobileMenu()\" class=\"btn btn-outline mobile-menu-btn\">
                    <i class=\"fas fa-bars\" id=\"mobile-menu-icon\"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id=\"mobile-menu\" class=\"mobile-menu\" style=\"display: none;\">
                <div class=\"mobile-menu-content\">
                    <button onclick=\"showTicketForm()\" class=\"btn btn-primary mobile-btn\">
                        <i class=\"fas fa-plus\"></i>
                        New Ticket
                    </button>
                    
                    <button onclick=\"toggleFilters()\" class=\"btn btn-outline mobile-btn\">
                        <i class=\"fas fa-filter\"></i>
                        Filters
                    </button>

                    <button onclick=\"handleLogout()\" class=\"btn btn-outline mobile-btn\">
                        <i class=\"fas fa-sign-out-alt\"></i>
                        Logout
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class=\"main-content\">
        <div class=\"container\">
            <!-- Analytics Cards -->
            <div class=\"analytics-grid\">
                <div class=\"analytics-card\">
                    <div class=\"card-pattern\" style=\"background-color: rgba(99, 102, 241, 0.1)\"></div>
                    <div class=\"card-content\">
                        <div class=\"card-header\">
                            <div class=\"card-icon\" style=\"background-color: rgba(99, 102, 241, 0.1); color: var(--primary)\">
                                <i class=\"fas fa-ticket-alt\"></i>
                            </div>
                            <div class=\"card-change positive\">↗ +12%</div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-value\">";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analytics"] ?? null), "totalTickets", [], "any", false, false, false, 101), "html", null, true);
        yield "</div>
                            <div class=\"card-title\">Total Tickets</div>
                        </div>
                    </div>
                </div>

                <div class=\"analytics-card\">
                    <div class=\"card-pattern\" style=\"background-color: rgba(245, 158, 11, 0.1)\"></div>
                    <div class=\"card-content\">
                        <div class=\"card-header\">
                            <div class=\"card-icon\" style=\"background-color: rgba(245, 158, 11, 0.1); color: var(--warning)\">
                                <i class=\"fas fa-clock\"></i>
                            </div>
                            <div class=\"card-change negative\">↘ +5%</div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-value\">";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analytics"] ?? null), "openTickets", [], "any", false, false, false, 117), "html", null, true);
        yield "</div>
                            <div class=\"card-title\">Open Tickets</div>
                        </div>
                    </div>
                </div>

                <div class=\"analytics-card\">
                    <div class=\"card-pattern\" style=\"background-color: rgba(139, 92, 246, 0.1)\"></div>
                    <div class=\"card-content\">
                        <div class=\"card-header\">
                            <div class=\"card-icon\" style=\"background-color: rgba(139, 92, 246, 0.1); color: var(--secondary)\">
                                <i class=\"fas fa-chart-line\"></i>
                            </div>
                            <div class=\"card-change positive\">↗ +8%</div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-value\">";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analytics"] ?? null), "inProgressTickets", [], "any", false, false, false, 133), "html", null, true);
        yield "</div>
                            <div class=\"card-title\">In Progress</div>
                        </div>
                    </div>
                </div>

                <div class=\"analytics-card\">
                    <div class=\"card-pattern\" style=\"background-color: rgba(16, 185, 129, 0.1)\"></div>
                    <div class=\"card-content\">
                        <div class=\"card-header\">
                            <div class=\"card-icon\" style=\"background-color: rgba(16, 185, 129, 0.1); color: var(--success)\">
                                <i class=\"fas fa-check-circle\"></i>
                            </div>
                            <div class=\"card-change positive\">↗ +15%</div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-value\">";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analytics"] ?? null), "resolvedTickets", [], "any", false, false, false, 149), "html", null, true);
        yield "</div>
                            <div class=\"card-title\">Resolved</div>
                        </div>
                    </div>
                </div>

                <div class=\"analytics-card\">
                    <div class=\"card-pattern\" style=\"background-color: rgba(100, 116, 139, 0.1)\"></div>
                    <div class=\"card-content\">
                        <div class=\"card-header\">
                            <div class=\"card-icon\" style=\"background-color: rgba(100, 116, 139, 0.1); color: var(--text-secondary)\">
                                <i class=\"fas fa-times-circle\"></i>
                            </div>
                            <div class=\"card-change positive\">↗ +3%</div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-value\">";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analytics"] ?? null), "closedTickets", [], "any", false, false, false, 165), "html", null, true);
        yield "</div>
                            <div class=\"card-title\">Closed</div>
                        </div>
                    </div>
                </div>

                <div class=\"analytics-card\">
                    <div class=\"card-pattern\" style=\"background-color: rgba(239, 68, 68, 0.1)\"></div>
                    <div class=\"card-content\">
                        <div class=\"card-header\">
                            <div class=\"card-icon\" style=\"background-color: rgba(239, 68, 68, 0.1); color: var(--error)\">
                                <i class=\"fas fa-exclamation-triangle\"></i>
                            </div>
                            <div class=\"card-change positive\">↗ -2%</div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-value\">";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analytics"] ?? null), "highPriorityTickets", [], "any", false, false, false, 181), "html", null, true);
        yield "</div>
                            <div class=\"card-title\">High Priority</div>
                        </div>
                    </div>
                </div>

                <div class=\"analytics-card\">
                    <div class=\"card-pattern\" style=\"background-color: rgba(239, 68, 68, 0.1)\"></div>
                    <div class=\"card-content\">
                        <div class=\"card-header\">
                            <div class=\"card-icon\" style=\"background-color: rgba(239, 68, 68, 0.1); color: var(--error)\">
                                <i class=\"fas fa-clock\"></i>
                            </div>
                            <div class=\"card-change ";
        // line 194
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["analytics"] ?? null), "overdueTickets", [], "any", false, false, false, 194) > 0)) ? ("negative") : ("positive"));
        yield "\">
                                ";
        // line 195
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["analytics"] ?? null), "overdueTickets", [], "any", false, false, false, 195) > 0)) ? ("Urgent") : ("None"));
        yield "
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-value\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["analytics"] ?? null), "overdueTickets", [], "any", false, false, false, 199), "html", null, true);
        yield "</div>
                            <div class=\"card-title\">Overdue</div>
                        </div>
                    </div>
                </div>

                <div class=\"analytics-card\">
                    <div class=\"card-pattern\" style=\"background-color: rgba(99, 102, 241, 0.1)\"></div>
                    <div class=\"card-content\">
                        <div class=\"card-header\">
                            <div class=\"card-icon\" style=\"background-color: rgba(99, 102, 241, 0.1); color: var(--primary)\">
                                <i class=\"fas fa-users\"></i>
                            </div>
                            <div class=\"card-change positive\">↗ +2</div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-value\">8</div>
                            <div class=\"card-title\">Team Members</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filters -->
            <div id=\"filters-container\" class=\"filters-container\" style=\"display: none;\">
                <div class=\"card\">
                    <div class=\"filters-header\">
                        <h3 class=\"filters-title\">
                            <i class=\"fas fa-filter\"></i>
                            Filters
                        </h3>
                        <button onclick=\"clearFilters()\" class=\"btn btn-outline clear-btn\" id=\"clear-filters-btn\" style=\"display: none;\">
                            <i class=\"fas fa-times\"></i>
                            Clear All
                        </button>
                    </div>

                    <div class=\"filters-grid\">
                        <div class=\"form-group\">
                            <label class=\"form-label\">Status</label>
                            <select id=\"status-filter\" class=\"form-input\" onchange=\"applyFilters()\">
                                <option value=\"\">All Statuses</option>
                                <option value=\"open\">Open</option>
                                <option value=\"in-progress\">In Progress</option>
                                <option value=\"resolved\">Resolved</option>
                                <option value=\"closed\">Closed</option>
                            </select>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label\">Priority</label>
                            <select id=\"priority-filter\" class=\"form-input\" onchange=\"applyFilters()\">
                                <option value=\"\">All Priorities</option>
                                <option value=\"low\">Low</option>
                                <option value=\"medium\">Medium</option>
                                <option value=\"high\">High</option>
                            </select>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label\">Assignee</label>
                            <select id=\"assignee-filter\" class=\"form-input\" onchange=\"applyFilters()\">
                                <option value=\"\">All Assignees</option>
                                <option value=\"John Doe\">John Doe</option>
                                <option value=\"Jane Smith\">Jane Smith</option>
                                <option value=\"Mike Johnson\">Mike Johnson</option>
                                <option value=\"Sarah Wilson\">Sarah Wilson</option>
                                <option value=\"Unassigned\">Unassigned</option>
                            </select>
                        </div>
                    </div>

                    <div id=\"active-filters\" class=\"active-filters\" style=\"display: none;\">
                        <div class=\"active-filters-label\">Active Filters:</div>
                        <div class=\"filter-tags\" id=\"filter-tags\"></div>
                    </div>
                </div>
            </div>

            <!-- Ticket List -->
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2 class=\"card-title\">
                        Tickets (<span id=\"ticket-count\">";
        // line 282
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["tickets"] ?? null)), "html", null, true);
        yield "</span>)
                    </h2>
                </div>
                <div id=\"tickets-container\">
                    ";
        // line 286
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["tickets"] ?? null)) == 0)) {
            // line 287
            yield "                    <div class=\"empty-state\">
                        <div class=\"empty-icon\">
                            <i class=\"fas fa-clock\"></i>
                        </div>
                        <h3 class=\"empty-title\">No tickets found</h3>
                        <p>Try adjusting your filters or create a new ticket to get started.</p>
                    </div>
                    ";
        } else {
            // line 295
            yield "                    <div class=\"table\">
                        <table>
                            <thead>
                                <tr>
                                    <th>Ticket</th>
                                    <th>Status</th>
                                    <th>Priority</th>
                                    <th>Assignee</th>
                                    <th>Created</th>
                                    <th>Due Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 309
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tickets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                // line 310
                yield "                                <tr class=\"ticket-row\" data-ticket-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 310), "html", null, true);
                yield "\">
                                    <td>
                                        <div class=\"ticket-info\">
                                            <div class=\"ticket-title\">";
                // line 313
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "title", [], "any", false, false, false, 313), "html", null, true);
                yield "</div>
                                            <div class=\"ticket-description\">";
                // line 314
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "description", [], "any", false, false, false, 314), "html", null, true);
                yield "</div>
                                            ";
                // line 315
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "tags", [], "any", false, false, false, 315)) > 0)) {
                    // line 316
                    yield "                                            <div class=\"ticket-tags\">
                                                ";
                    // line 317
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "tags", [], "any", false, false, false, 317), 0, 3));
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 318
                        yield "                                                <span class=\"tag\">
                                                    <i class=\"fas fa-tag\"></i>
                                                    ";
                        // line 320
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tag"], "html", null, true);
                        yield "
                                                </span>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 323
                    yield "                                                ";
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "tags", [], "any", false, false, false, 323)) > 3)) {
                        // line 324
                        yield "                                                <span class=\"tag-more\">+";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "tags", [], "any", false, false, false, 324)) - 3), "html", null, true);
                        yield "</span>
                                                ";
                    }
                    // line 326
                    yield "                                            </div>
                                            ";
                }
                // line 328
                yield "                                        </div>
                                    </td>
                                    
                                    <td>
                                        <span class=\"status-badge ";
                // line 332
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "getStatusColor", [], "method", false, false, false, 332), "html", null, true);
                yield "\">
                                            ";
                // line 333
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 333), ["-" => " "])), "html", null, true);
                yield "
                                        </span>
                                    </td>
                                    
                                    <td>
                                        <span class=\"status-badge ";
                // line 338
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "getPriorityColor", [], "method", false, false, false, 338), "html", null, true);
                yield "\">
                                            ";
                // line 339
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "priority", [], "any", false, false, false, 339)), "html", null, true);
                yield "
                                        </span>
                                    </td>
                                    
                                    <td>
                                        <div class=\"assignee-info\">
                                            <i class=\"fas fa-user\"></i>
                                            ";
                // line 346
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "assignee", [], "any", false, false, false, 346)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "assignee", [], "any", false, false, false, 346), "html", null, true)) : ("Unassigned"));
                yield "
                                        </div>
                                    </td>
                                    
                                    <td>
                                        <div class=\"date-info\">
                                            <i class=\"fas fa-calendar\"></i>
                                            ";
                // line 353
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "createdAt", [], "any", false, false, false, 353), "M j, Y g:i A"), "html", null, true);
                yield "
                                        </div>
                                    </td>
                                    
                                    <td>
                                        ";
                // line 358
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "dueDate", [], "any", false, false, false, 358)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 359
                    yield "                                        <div class=\"date-info ";
                    yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "isOverdue", [], "method", false, false, false, 359)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("overdue") : (""));
                    yield "\">
                                            <i class=\"fas fa-calendar\"></i>
                                            ";
                    // line 361
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "dueDate", [], "any", false, false, false, 361), "M j, Y g:i A"), "html", null, true);
                    yield "
                                            ";
                    // line 362
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "isOverdue", [], "method", false, false, false, 362)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 363
                        yield "                                            <span class=\"overdue-badge\">OVERDUE</span>
                                            ";
                    }
                    // line 365
                    yield "                                        </div>
                                        ";
                } else {
                    // line 367
                    yield "                                        <span class=\"no-date\">No due date</span>
                                        ";
                }
                // line 369
                yield "                                    </td>
                                    
                                    <td>
                                        <div class=\"actions-container\">
                                            <button onclick=\"showTicketActions('";
                // line 373
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 373), "html", null, true);
                yield "')\" class=\"actions-button\">
                                                <i class=\"fas fa-ellipsis-v\"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ticket'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 380
            yield "                            </tbody>
                        </table>
                    </div>
                    ";
        }
        // line 384
        yield "                </div>
            </div>
        </div>
    </main>

    <!-- Ticket Form Modal -->
    <div id=\"ticket-form-modal\" class=\"modal-overlay\" style=\"display: none;\" onclick=\"hideTicketForm()\">
        <div class=\"modal\" onclick=\"event.stopPropagation()\">
            <div class=\"modal-header\">
                <h3 id=\"ticket-form-title\">Create New Ticket</h3>
                <button onclick=\"hideTicketForm()\" class=\"close-button\">
                    <i class=\"fas fa-times\"></i>
                </button>
            </div>

            <form id=\"ticket-form\" onsubmit=\"handleTicketSubmit(event)\">
                <div class=\"modal-body\">
                    <div id=\"ticket-errors\" class=\"error-message\" style=\"display: none;\"></div>

                    <div class=\"form-group\">
                        <label for=\"ticket-title\" class=\"form-label\">Title *</label>
                        <input
                            type=\"text\"
                            id=\"ticket-title\"
                            name=\"title\"
                            class=\"form-input\"
                            placeholder=\"Enter ticket title\"
                            required
                        />
                    </div>

                    <div class=\"form-group\">
                        <label for=\"ticket-description\" class=\"form-label\">Description *</label>
                        <textarea
                            id=\"ticket-description\"
                            name=\"description\"
                            class=\"form-input\"
                            placeholder=\"Describe the issue or request\"
                            rows=\"4\"
                            style=\"resize: vertical; min-height: 100px\"
                            required
                        ></textarea>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label for=\"ticket-priority\" class=\"form-label\">Priority *</label>
                            <select id=\"ticket-priority\" name=\"priority\" class=\"form-input\" required>
                                <option value=\"low\">Low</option>
                                <option value=\"medium\" selected>Medium</option>
                                <option value=\"high\">High</option>
                            </select>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"ticket-assignee\" class=\"form-label\">Assignee</label>
                            <input
                                type=\"text\"
                                id=\"ticket-assignee\"
                                name=\"assignee\"
                                class=\"form-input\"
                                placeholder=\"Assign to team member\"
                            />
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"ticket-due-date\" class=\"form-label\">Due Date</label>
                        <input
                            type=\"datetime-local\"
                            id=\"ticket-due-date\"
                            name=\"dueDate\"
                            class=\"form-input\"
                        />
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-label\">Tags</label>
                        <div class=\"tag-input-container\">
                            <input
                                type=\"text\"
                                id=\"tag-input\"
                                class=\"form-input\"
                                placeholder=\"Add a tag\"
                                style=\"flex: 1\"
                                onkeypress=\"handleTagKeyPress(event)\"
                            />
                            <button type=\"button\" onclick=\"addTag()\" class=\"btn btn-outline\">
                                Add
                            </button>
                        </div>
                        <div id=\"tags-display\" class=\"tags-display\"></div>
                        <div class=\"tag-help\">Maximum 5 tags allowed</div>
                    </div>
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" onclick=\"hideTicketForm()\" class=\"btn btn-outline\">
                        Cancel
                    </button>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <span id=\"ticket-loading\" style=\"display: none;\">
                            <div class=\"spinner\"></div>
                            Creating...
                        </span>
                        <span id=\"ticket-text\">Create Ticket</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 498
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 499
        yield "<script>
let currentTags = [];
let showFiltersState = false;

function toggleFilters() {
    const container = document.getElementById('filters-container');
    const btn = document.getElementById('filters-btn');
    
    showFiltersState = !showFiltersState;
    container.style.display = showFiltersState ? 'block' : 'none';
    btn.classList.toggle('btn-primary', showFiltersState);
    btn.classList.toggle('btn-outline', !showFiltersState);
}

function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    const icon = document.getElementById('mobile-menu-icon');
    
    if (menu.style.display === 'none') {
        menu.style.display = 'block';
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-times');
    } else {
        menu.style.display = 'none';
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
    }
}

function applyFilters() {
    const status = document.getElementById('status-filter').value;
    const priority = document.getElementById('priority-filter').value;
    const assignee = document.getElementById('assignee-filter').value;
    
    const hasFilters = status || priority || assignee;
    document.getElementById('clear-filters-btn').style.display = hasFilters ? 'flex' : 'none';
    document.getElementById('active-filters').style.display = hasFilters ? 'block' : 'none';
    
    if (hasFilters) {
        updateActiveFilters();
    }
    
    // In a real app, this would make an API call to filter tickets
    console.log('Filters applied:', { status, priority, assignee });
}

function clearFilters() {
    document.getElementById('status-filter').value = '';
    document.getElementById('priority-filter').value = '';
    document.getElementById('assignee-filter').value = '';
    document.getElementById('clear-filters-btn').style.display = 'none';
    document.getElementById('active-filters').style.display = 'none';
}

function updateActiveFilters() {
    const status = document.getElementById('status-filter').value;
    const priority = document.getElementById('priority-filter').value;
    const assignee = document.getElementById('assignee-filter').value;
    
    const tagsContainer = document.getElementById('filter-tags');
    tagsContainer.innerHTML = '';
    
    if (status) {
        addFilterTag('Status', status, 'status');
    }
    if (priority) {
        addFilterTag('Priority', priority, 'priority');
    }
    if (assignee) {
        addFilterTag('Assignee', assignee, 'assignee');
    }
}

function addFilterTag(label, value, type) {
    const tagsContainer = document.getElementById('filter-tags');
    const tag = document.createElement('span');
    tag.className = `filter-tag \${type}`;
    tag.innerHTML = `\${label}: \${value} <button onclick=\"removeFilterTag('\${type}')\"><i class=\"fas fa-times\"></i></button>`;
    tagsContainer.appendChild(tag);
}

function removeFilterTag(type) {
    document.getElementById(`\${type}-filter`).value = '';
    applyFilters();
}

function showTicketForm() {
    document.getElementById('ticket-form-modal').style.display = 'flex';
}

function hideTicketForm() {
    document.getElementById('ticket-form-modal').style.display = 'none';
    document.getElementById('ticket-form').reset();
    currentTags = [];
    updateTagsDisplay();
}

function handleTagKeyPress(event) {
    if (event.key === 'Enter') {
        event.preventDefault();
        addTag();
    }
}

function addTag() {
    const input = document.getElementById('tag-input');
    const tag = input.value.trim();
    
    if (tag && !currentTags.includes(tag) && currentTags.length < 5) {
        currentTags.push(tag);
        input.value = '';
        updateTagsDisplay();
    }
}

function removeTag(tag) {
    currentTags = currentTags.filter(t => t !== tag);
    updateTagsDisplay();
}

function updateTagsDisplay() {
    const container = document.getElementById('tags-display');
    container.innerHTML = '';
    
    currentTags.forEach(tag => {
        const span = document.createElement('span');
        span.className = 'tag-item';
        span.innerHTML = `\${tag} <button type=\"button\" onclick=\"removeTag('\${tag}')\"><i class=\"fas fa-times\"></i></button>`;
        container.appendChild(span);
    });
}

async function handleTicketSubmit(event) {
    event.preventDefault();
    
    const form = event.target;
    const formData = new FormData(form);
    formData.append('tags', currentTags.join(','));
    formData.append('_token', '";
        // line 637
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "');
    
    const loading = document.getElementById('ticket-loading');
    const text = document.getElementById('ticket-text');
    const errorsDiv = document.getElementById('ticket-errors');
    
    loading.style.display = 'flex';
    text.style.display = 'none';
    errorsDiv.style.display = 'none';
    
    try {
        const response = await fetch('/api/tickets', {
            method: 'POST',
            body: formData
        });
        
        const data = await response.json();
        
        if (data.success) {
            hideTicketForm();
            location.reload(); // In a real app, you'd update the UI dynamically
        } else {
            errorsDiv.textContent = data.error || 'Failed to create ticket';
            errorsDiv.style.display = 'flex';
        }
    } catch (error) {
        errorsDiv.textContent = 'An error occurred. Please try again.';
        errorsDiv.style.display = 'flex';
    } finally {
        loading.style.display = 'none';
        text.style.display = 'inline';
    }
}

function showTicketActions(ticketId) {
    // In a real app, this would show a dropdown with actions
    console.log('Show actions for ticket:', ticketId);
}

async function handleLogout() {
    try {
        const response = await fetch('/auth/logout', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: '_token=";
        // line 683
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["csrf_token"] ?? null), "html", null, true);
        yield "'
        });
        
        const data = await response.json();
        
        if (data.success) {
            window.location.href = data.redirect;
        }
    } catch (error) {
        console.error('Logout error:', error);
    }
}

// Search functionality
document.getElementById('search-input').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const rows = document.querySelectorAll('.ticket-row');
    
    rows.forEach(row => {
        const title = row.querySelector('.ticket-title').textContent.toLowerCase();
        const description = row.querySelector('.ticket-description').textContent.toLowerCase();
        
        if (title.includes(searchTerm) || description.includes(searchTerm)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
    
    // Update ticket count
    const visibleRows = document.querySelectorAll('.ticket-row[style=\"\"], .ticket-row:not([style])');
    document.getElementById('ticket-count').textContent = visibleRows.length;
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
        return "dashboard.html.twig";
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
        return array (  889 => 683,  840 => 637,  700 => 499,  693 => 498,  576 => 384,  570 => 380,  557 => 373,  551 => 369,  547 => 367,  543 => 365,  539 => 363,  537 => 362,  533 => 361,  527 => 359,  525 => 358,  517 => 353,  507 => 346,  497 => 339,  493 => 338,  485 => 333,  481 => 332,  475 => 328,  471 => 326,  465 => 324,  462 => 323,  453 => 320,  449 => 318,  445 => 317,  442 => 316,  440 => 315,  436 => 314,  432 => 313,  425 => 310,  421 => 309,  405 => 295,  395 => 287,  393 => 286,  386 => 282,  300 => 199,  293 => 195,  289 => 194,  273 => 181,  254 => 165,  235 => 149,  216 => 133,  197 => 117,  178 => 101,  122 => 48,  118 => 47,  82 => 14,  72 => 6,  65 => 5,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard - {{ app_name }}{% endblock %}

{% block content %}
<div class=\"dashboard\">
    <!-- Header -->
    <header class=\"header\">
        <div class=\"container\">
            <div class=\"header-content\">
                <!-- Logo -->
                <div class=\"logo\">
                    <div class=\"logo-icon\">TM</div>
                    <h1 class=\"logo-text\">{{ app_name }}</h1>
                </div>

                <!-- Search Bar -->
                <div class=\"search-container\">
                    <i class=\"fas fa-search search-icon\"></i>
                    <input
                        type=\"text\"
                        placeholder=\"Search tickets...\"
                        id=\"search-input\"
                        class=\"search-input\"
                    />
                </div>

                <!-- Desktop Actions -->
                <div class=\"desktop-actions\">
                    <button onclick=\"showTicketForm()\" class=\"btn btn-primary\">
                        <i class=\"fas fa-plus\"></i>
                        New Ticket
                    </button>
                    
                    <button onclick=\"toggleFilters()\" class=\"btn btn-outline\" id=\"filters-btn\">
                        <i class=\"fas fa-filter\"></i>
                        Filters
                    </button>

                    <button class=\"btn btn-outline\">
                        <i class=\"fas fa-bell\"></i>
                    </button>

                    <div class=\"user-info\">
                        <i class=\"fas fa-user\"></i>
                        <div>
                            <div class=\"user-name\">{{ user.name }}</div>
                            <div class=\"user-role\">{{ user.role }}</div>
                        </div>
                    </div>

                    <button onclick=\"handleLogout()\" class=\"btn btn-outline\">
                        <i class=\"fas fa-sign-out-alt\"></i>
                        Logout
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <button onclick=\"toggleMobileMenu()\" class=\"btn btn-outline mobile-menu-btn\">
                    <i class=\"fas fa-bars\" id=\"mobile-menu-icon\"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id=\"mobile-menu\" class=\"mobile-menu\" style=\"display: none;\">
                <div class=\"mobile-menu-content\">
                    <button onclick=\"showTicketForm()\" class=\"btn btn-primary mobile-btn\">
                        <i class=\"fas fa-plus\"></i>
                        New Ticket
                    </button>
                    
                    <button onclick=\"toggleFilters()\" class=\"btn btn-outline mobile-btn\">
                        <i class=\"fas fa-filter\"></i>
                        Filters
                    </button>

                    <button onclick=\"handleLogout()\" class=\"btn btn-outline mobile-btn\">
                        <i class=\"fas fa-sign-out-alt\"></i>
                        Logout
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class=\"main-content\">
        <div class=\"container\">
            <!-- Analytics Cards -->
            <div class=\"analytics-grid\">
                <div class=\"analytics-card\">
                    <div class=\"card-pattern\" style=\"background-color: rgba(99, 102, 241, 0.1)\"></div>
                    <div class=\"card-content\">
                        <div class=\"card-header\">
                            <div class=\"card-icon\" style=\"background-color: rgba(99, 102, 241, 0.1); color: var(--primary)\">
                                <i class=\"fas fa-ticket-alt\"></i>
                            </div>
                            <div class=\"card-change positive\">↗ +12%</div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-value\">{{ analytics.totalTickets }}</div>
                            <div class=\"card-title\">Total Tickets</div>
                        </div>
                    </div>
                </div>

                <div class=\"analytics-card\">
                    <div class=\"card-pattern\" style=\"background-color: rgba(245, 158, 11, 0.1)\"></div>
                    <div class=\"card-content\">
                        <div class=\"card-header\">
                            <div class=\"card-icon\" style=\"background-color: rgba(245, 158, 11, 0.1); color: var(--warning)\">
                                <i class=\"fas fa-clock\"></i>
                            </div>
                            <div class=\"card-change negative\">↘ +5%</div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-value\">{{ analytics.openTickets }}</div>
                            <div class=\"card-title\">Open Tickets</div>
                        </div>
                    </div>
                </div>

                <div class=\"analytics-card\">
                    <div class=\"card-pattern\" style=\"background-color: rgba(139, 92, 246, 0.1)\"></div>
                    <div class=\"card-content\">
                        <div class=\"card-header\">
                            <div class=\"card-icon\" style=\"background-color: rgba(139, 92, 246, 0.1); color: var(--secondary)\">
                                <i class=\"fas fa-chart-line\"></i>
                            </div>
                            <div class=\"card-change positive\">↗ +8%</div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-value\">{{ analytics.inProgressTickets }}</div>
                            <div class=\"card-title\">In Progress</div>
                        </div>
                    </div>
                </div>

                <div class=\"analytics-card\">
                    <div class=\"card-pattern\" style=\"background-color: rgba(16, 185, 129, 0.1)\"></div>
                    <div class=\"card-content\">
                        <div class=\"card-header\">
                            <div class=\"card-icon\" style=\"background-color: rgba(16, 185, 129, 0.1); color: var(--success)\">
                                <i class=\"fas fa-check-circle\"></i>
                            </div>
                            <div class=\"card-change positive\">↗ +15%</div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-value\">{{ analytics.resolvedTickets }}</div>
                            <div class=\"card-title\">Resolved</div>
                        </div>
                    </div>
                </div>

                <div class=\"analytics-card\">
                    <div class=\"card-pattern\" style=\"background-color: rgba(100, 116, 139, 0.1)\"></div>
                    <div class=\"card-content\">
                        <div class=\"card-header\">
                            <div class=\"card-icon\" style=\"background-color: rgba(100, 116, 139, 0.1); color: var(--text-secondary)\">
                                <i class=\"fas fa-times-circle\"></i>
                            </div>
                            <div class=\"card-change positive\">↗ +3%</div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-value\">{{ analytics.closedTickets }}</div>
                            <div class=\"card-title\">Closed</div>
                        </div>
                    </div>
                </div>

                <div class=\"analytics-card\">
                    <div class=\"card-pattern\" style=\"background-color: rgba(239, 68, 68, 0.1)\"></div>
                    <div class=\"card-content\">
                        <div class=\"card-header\">
                            <div class=\"card-icon\" style=\"background-color: rgba(239, 68, 68, 0.1); color: var(--error)\">
                                <i class=\"fas fa-exclamation-triangle\"></i>
                            </div>
                            <div class=\"card-change positive\">↗ -2%</div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-value\">{{ analytics.highPriorityTickets }}</div>
                            <div class=\"card-title\">High Priority</div>
                        </div>
                    </div>
                </div>

                <div class=\"analytics-card\">
                    <div class=\"card-pattern\" style=\"background-color: rgba(239, 68, 68, 0.1)\"></div>
                    <div class=\"card-content\">
                        <div class=\"card-header\">
                            <div class=\"card-icon\" style=\"background-color: rgba(239, 68, 68, 0.1); color: var(--error)\">
                                <i class=\"fas fa-clock\"></i>
                            </div>
                            <div class=\"card-change {{ analytics.overdueTickets > 0 ? 'negative' : 'positive' }}\">
                                {{ analytics.overdueTickets > 0 ? 'Urgent' : 'None' }}
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-value\">{{ analytics.overdueTickets }}</div>
                            <div class=\"card-title\">Overdue</div>
                        </div>
                    </div>
                </div>

                <div class=\"analytics-card\">
                    <div class=\"card-pattern\" style=\"background-color: rgba(99, 102, 241, 0.1)\"></div>
                    <div class=\"card-content\">
                        <div class=\"card-header\">
                            <div class=\"card-icon\" style=\"background-color: rgba(99, 102, 241, 0.1); color: var(--primary)\">
                                <i class=\"fas fa-users\"></i>
                            </div>
                            <div class=\"card-change positive\">↗ +2</div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"card-value\">8</div>
                            <div class=\"card-title\">Team Members</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filters -->
            <div id=\"filters-container\" class=\"filters-container\" style=\"display: none;\">
                <div class=\"card\">
                    <div class=\"filters-header\">
                        <h3 class=\"filters-title\">
                            <i class=\"fas fa-filter\"></i>
                            Filters
                        </h3>
                        <button onclick=\"clearFilters()\" class=\"btn btn-outline clear-btn\" id=\"clear-filters-btn\" style=\"display: none;\">
                            <i class=\"fas fa-times\"></i>
                            Clear All
                        </button>
                    </div>

                    <div class=\"filters-grid\">
                        <div class=\"form-group\">
                            <label class=\"form-label\">Status</label>
                            <select id=\"status-filter\" class=\"form-input\" onchange=\"applyFilters()\">
                                <option value=\"\">All Statuses</option>
                                <option value=\"open\">Open</option>
                                <option value=\"in-progress\">In Progress</option>
                                <option value=\"resolved\">Resolved</option>
                                <option value=\"closed\">Closed</option>
                            </select>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label\">Priority</label>
                            <select id=\"priority-filter\" class=\"form-input\" onchange=\"applyFilters()\">
                                <option value=\"\">All Priorities</option>
                                <option value=\"low\">Low</option>
                                <option value=\"medium\">Medium</option>
                                <option value=\"high\">High</option>
                            </select>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"form-label\">Assignee</label>
                            <select id=\"assignee-filter\" class=\"form-input\" onchange=\"applyFilters()\">
                                <option value=\"\">All Assignees</option>
                                <option value=\"John Doe\">John Doe</option>
                                <option value=\"Jane Smith\">Jane Smith</option>
                                <option value=\"Mike Johnson\">Mike Johnson</option>
                                <option value=\"Sarah Wilson\">Sarah Wilson</option>
                                <option value=\"Unassigned\">Unassigned</option>
                            </select>
                        </div>
                    </div>

                    <div id=\"active-filters\" class=\"active-filters\" style=\"display: none;\">
                        <div class=\"active-filters-label\">Active Filters:</div>
                        <div class=\"filter-tags\" id=\"filter-tags\"></div>
                    </div>
                </div>
            </div>

            <!-- Ticket List -->
            <div class=\"card\">
                <div class=\"card-header\">
                    <h2 class=\"card-title\">
                        Tickets (<span id=\"ticket-count\">{{ tickets|length }}</span>)
                    </h2>
                </div>
                <div id=\"tickets-container\">
                    {% if tickets|length == 0 %}
                    <div class=\"empty-state\">
                        <div class=\"empty-icon\">
                            <i class=\"fas fa-clock\"></i>
                        </div>
                        <h3 class=\"empty-title\">No tickets found</h3>
                        <p>Try adjusting your filters or create a new ticket to get started.</p>
                    </div>
                    {% else %}
                    <div class=\"table\">
                        <table>
                            <thead>
                                <tr>
                                    <th>Ticket</th>
                                    <th>Status</th>
                                    <th>Priority</th>
                                    <th>Assignee</th>
                                    <th>Created</th>
                                    <th>Due Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for ticket in tickets %}
                                <tr class=\"ticket-row\" data-ticket-id=\"{{ ticket.id }}\">
                                    <td>
                                        <div class=\"ticket-info\">
                                            <div class=\"ticket-title\">{{ ticket.title }}</div>
                                            <div class=\"ticket-description\">{{ ticket.description }}</div>
                                            {% if ticket.tags|length > 0 %}
                                            <div class=\"ticket-tags\">
                                                {% for tag in ticket.tags|slice(0, 3) %}
                                                <span class=\"tag\">
                                                    <i class=\"fas fa-tag\"></i>
                                                    {{ tag }}
                                                </span>
                                                {% endfor %}
                                                {% if ticket.tags|length > 3 %}
                                                <span class=\"tag-more\">+{{ ticket.tags|length - 3 }}</span>
                                                {% endif %}
                                            </div>
                                            {% endif %}
                                        </div>
                                    </td>
                                    
                                    <td>
                                        <span class=\"status-badge {{ ticket.getStatusColor() }}\">
                                            {{ ticket.status|replace({'-': ' '})|upper }}
                                        </span>
                                    </td>
                                    
                                    <td>
                                        <span class=\"status-badge {{ ticket.getPriorityColor() }}\">
                                            {{ ticket.priority|upper }}
                                        </span>
                                    </td>
                                    
                                    <td>
                                        <div class=\"assignee-info\">
                                            <i class=\"fas fa-user\"></i>
                                            {{ ticket.assignee ?: 'Unassigned' }}
                                        </div>
                                    </td>
                                    
                                    <td>
                                        <div class=\"date-info\">
                                            <i class=\"fas fa-calendar\"></i>
                                            {{ ticket.createdAt|date('M j, Y g:i A') }}
                                        </div>
                                    </td>
                                    
                                    <td>
                                        {% if ticket.dueDate %}
                                        <div class=\"date-info {{ ticket.isOverdue() ? 'overdue' : '' }}\">
                                            <i class=\"fas fa-calendar\"></i>
                                            {{ ticket.dueDate|date('M j, Y g:i A') }}
                                            {% if ticket.isOverdue() %}
                                            <span class=\"overdue-badge\">OVERDUE</span>
                                            {% endif %}
                                        </div>
                                        {% else %}
                                        <span class=\"no-date\">No due date</span>
                                        {% endif %}
                                    </td>
                                    
                                    <td>
                                        <div class=\"actions-container\">
                                            <button onclick=\"showTicketActions('{{ ticket.id }}')\" class=\"actions-button\">
                                                <i class=\"fas fa-ellipsis-v\"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </main>

    <!-- Ticket Form Modal -->
    <div id=\"ticket-form-modal\" class=\"modal-overlay\" style=\"display: none;\" onclick=\"hideTicketForm()\">
        <div class=\"modal\" onclick=\"event.stopPropagation()\">
            <div class=\"modal-header\">
                <h3 id=\"ticket-form-title\">Create New Ticket</h3>
                <button onclick=\"hideTicketForm()\" class=\"close-button\">
                    <i class=\"fas fa-times\"></i>
                </button>
            </div>

            <form id=\"ticket-form\" onsubmit=\"handleTicketSubmit(event)\">
                <div class=\"modal-body\">
                    <div id=\"ticket-errors\" class=\"error-message\" style=\"display: none;\"></div>

                    <div class=\"form-group\">
                        <label for=\"ticket-title\" class=\"form-label\">Title *</label>
                        <input
                            type=\"text\"
                            id=\"ticket-title\"
                            name=\"title\"
                            class=\"form-input\"
                            placeholder=\"Enter ticket title\"
                            required
                        />
                    </div>

                    <div class=\"form-group\">
                        <label for=\"ticket-description\" class=\"form-label\">Description *</label>
                        <textarea
                            id=\"ticket-description\"
                            name=\"description\"
                            class=\"form-input\"
                            placeholder=\"Describe the issue or request\"
                            rows=\"4\"
                            style=\"resize: vertical; min-height: 100px\"
                            required
                        ></textarea>
                    </div>

                    <div class=\"form-row\">
                        <div class=\"form-group\">
                            <label for=\"ticket-priority\" class=\"form-label\">Priority *</label>
                            <select id=\"ticket-priority\" name=\"priority\" class=\"form-input\" required>
                                <option value=\"low\">Low</option>
                                <option value=\"medium\" selected>Medium</option>
                                <option value=\"high\">High</option>
                            </select>
                        </div>

                        <div class=\"form-group\">
                            <label for=\"ticket-assignee\" class=\"form-label\">Assignee</label>
                            <input
                                type=\"text\"
                                id=\"ticket-assignee\"
                                name=\"assignee\"
                                class=\"form-input\"
                                placeholder=\"Assign to team member\"
                            />
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"ticket-due-date\" class=\"form-label\">Due Date</label>
                        <input
                            type=\"datetime-local\"
                            id=\"ticket-due-date\"
                            name=\"dueDate\"
                            class=\"form-input\"
                        />
                    </div>

                    <div class=\"form-group\">
                        <label class=\"form-label\">Tags</label>
                        <div class=\"tag-input-container\">
                            <input
                                type=\"text\"
                                id=\"tag-input\"
                                class=\"form-input\"
                                placeholder=\"Add a tag\"
                                style=\"flex: 1\"
                                onkeypress=\"handleTagKeyPress(event)\"
                            />
                            <button type=\"button\" onclick=\"addTag()\" class=\"btn btn-outline\">
                                Add
                            </button>
                        </div>
                        <div id=\"tags-display\" class=\"tags-display\"></div>
                        <div class=\"tag-help\">Maximum 5 tags allowed</div>
                    </div>
                </div>

                <div class=\"modal-footer\">
                    <button type=\"button\" onclick=\"hideTicketForm()\" class=\"btn btn-outline\">
                        Cancel
                    </button>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <span id=\"ticket-loading\" style=\"display: none;\">
                            <div class=\"spinner\"></div>
                            Creating...
                        </span>
                        <span id=\"ticket-text\">Create Ticket</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}

{% block scripts %}
<script>
let currentTags = [];
let showFiltersState = false;

function toggleFilters() {
    const container = document.getElementById('filters-container');
    const btn = document.getElementById('filters-btn');
    
    showFiltersState = !showFiltersState;
    container.style.display = showFiltersState ? 'block' : 'none';
    btn.classList.toggle('btn-primary', showFiltersState);
    btn.classList.toggle('btn-outline', !showFiltersState);
}

function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    const icon = document.getElementById('mobile-menu-icon');
    
    if (menu.style.display === 'none') {
        menu.style.display = 'block';
        icon.classList.remove('fa-bars');
        icon.classList.add('fa-times');
    } else {
        menu.style.display = 'none';
        icon.classList.remove('fa-times');
        icon.classList.add('fa-bars');
    }
}

function applyFilters() {
    const status = document.getElementById('status-filter').value;
    const priority = document.getElementById('priority-filter').value;
    const assignee = document.getElementById('assignee-filter').value;
    
    const hasFilters = status || priority || assignee;
    document.getElementById('clear-filters-btn').style.display = hasFilters ? 'flex' : 'none';
    document.getElementById('active-filters').style.display = hasFilters ? 'block' : 'none';
    
    if (hasFilters) {
        updateActiveFilters();
    }
    
    // In a real app, this would make an API call to filter tickets
    console.log('Filters applied:', { status, priority, assignee });
}

function clearFilters() {
    document.getElementById('status-filter').value = '';
    document.getElementById('priority-filter').value = '';
    document.getElementById('assignee-filter').value = '';
    document.getElementById('clear-filters-btn').style.display = 'none';
    document.getElementById('active-filters').style.display = 'none';
}

function updateActiveFilters() {
    const status = document.getElementById('status-filter').value;
    const priority = document.getElementById('priority-filter').value;
    const assignee = document.getElementById('assignee-filter').value;
    
    const tagsContainer = document.getElementById('filter-tags');
    tagsContainer.innerHTML = '';
    
    if (status) {
        addFilterTag('Status', status, 'status');
    }
    if (priority) {
        addFilterTag('Priority', priority, 'priority');
    }
    if (assignee) {
        addFilterTag('Assignee', assignee, 'assignee');
    }
}

function addFilterTag(label, value, type) {
    const tagsContainer = document.getElementById('filter-tags');
    const tag = document.createElement('span');
    tag.className = `filter-tag \${type}`;
    tag.innerHTML = `\${label}: \${value} <button onclick=\"removeFilterTag('\${type}')\"><i class=\"fas fa-times\"></i></button>`;
    tagsContainer.appendChild(tag);
}

function removeFilterTag(type) {
    document.getElementById(`\${type}-filter`).value = '';
    applyFilters();
}

function showTicketForm() {
    document.getElementById('ticket-form-modal').style.display = 'flex';
}

function hideTicketForm() {
    document.getElementById('ticket-form-modal').style.display = 'none';
    document.getElementById('ticket-form').reset();
    currentTags = [];
    updateTagsDisplay();
}

function handleTagKeyPress(event) {
    if (event.key === 'Enter') {
        event.preventDefault();
        addTag();
    }
}

function addTag() {
    const input = document.getElementById('tag-input');
    const tag = input.value.trim();
    
    if (tag && !currentTags.includes(tag) && currentTags.length < 5) {
        currentTags.push(tag);
        input.value = '';
        updateTagsDisplay();
    }
}

function removeTag(tag) {
    currentTags = currentTags.filter(t => t !== tag);
    updateTagsDisplay();
}

function updateTagsDisplay() {
    const container = document.getElementById('tags-display');
    container.innerHTML = '';
    
    currentTags.forEach(tag => {
        const span = document.createElement('span');
        span.className = 'tag-item';
        span.innerHTML = `\${tag} <button type=\"button\" onclick=\"removeTag('\${tag}')\"><i class=\"fas fa-times\"></i></button>`;
        container.appendChild(span);
    });
}

async function handleTicketSubmit(event) {
    event.preventDefault();
    
    const form = event.target;
    const formData = new FormData(form);
    formData.append('tags', currentTags.join(','));
    formData.append('_token', '{{ csrf_token }}');
    
    const loading = document.getElementById('ticket-loading');
    const text = document.getElementById('ticket-text');
    const errorsDiv = document.getElementById('ticket-errors');
    
    loading.style.display = 'flex';
    text.style.display = 'none';
    errorsDiv.style.display = 'none';
    
    try {
        const response = await fetch('/api/tickets', {
            method: 'POST',
            body: formData
        });
        
        const data = await response.json();
        
        if (data.success) {
            hideTicketForm();
            location.reload(); // In a real app, you'd update the UI dynamically
        } else {
            errorsDiv.textContent = data.error || 'Failed to create ticket';
            errorsDiv.style.display = 'flex';
        }
    } catch (error) {
        errorsDiv.textContent = 'An error occurred. Please try again.';
        errorsDiv.style.display = 'flex';
    } finally {
        loading.style.display = 'none';
        text.style.display = 'inline';
    }
}

function showTicketActions(ticketId) {
    // In a real app, this would show a dropdown with actions
    console.log('Show actions for ticket:', ticketId);
}

async function handleLogout() {
    try {
        const response = await fetch('/auth/logout', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: '_token={{ csrf_token }}'
        });
        
        const data = await response.json();
        
        if (data.success) {
            window.location.href = data.redirect;
        }
    } catch (error) {
        console.error('Logout error:', error);
    }
}

// Search functionality
document.getElementById('search-input').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const rows = document.querySelectorAll('.ticket-row');
    
    rows.forEach(row => {
        const title = row.querySelector('.ticket-title').textContent.toLowerCase();
        const description = row.querySelector('.ticket-description').textContent.toLowerCase();
        
        if (title.includes(searchTerm) || description.includes(searchTerm)) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
    
    // Update ticket count
    const visibleRows = document.querySelectorAll('.ticket-row[style=\"\"], .ticket-row:not([style])');
    document.getElementById('ticket-count').textContent = visibleRows.length;
});
</script>
{% endblock %}
", "dashboard.html.twig", "C:\\Users\\THIS PC\\Desktop\\ticket-manager-apps\\twig-app\\templates\\dashboard.html.twig");
    }
}
