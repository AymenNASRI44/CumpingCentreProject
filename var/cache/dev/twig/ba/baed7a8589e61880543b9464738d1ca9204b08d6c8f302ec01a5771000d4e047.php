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

/* lieucamping/index.html.twig */
class __TwigTemplate_9ba2c5465d98f0c1043307c564d4a4cadb34a192a5f105f4d060146eda1ffb68 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/dashboard/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieucamping/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieucamping/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard/index.html.twig", "lieucamping/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Lieucamping index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <div class=\"wrapper\">
        <!-- Navbar -->
        <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
                </li>
                <li class=\"nav-item d-none d-sm-inline-block\">
                    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\">Home</a>
                </li>
                <li class=\"nav-item d-none d-sm-inline-block\">
                    <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"nav-link\">dashborad</a>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
            <div class=\"sidebar\">
                <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                    <div class=\"info\">
                        <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"d-block\">Camping Center</a>
                    </div>
                </div>
                <nav class=\"mt-2\">
                    <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieucamping_index");
        yield "\" class=\"nav-link\">
                                <i class=\"nav-icon fas fa-mountain\"></i>
                                <p>Centre de camping</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"nav-link\">
                                <i class=\"nav-icon far fa-user\"></i>
                                <p>Utilisateurs</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class=\"content-wrapper\">
            <section class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                        <div class=\"col-sm-6\">
                            <h1>Lieucamping index</h1>
                        </div>
                        <div class=\"col-sm-6\">
                            <ol class=\"breadcrumb float-sm-right\">
                                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                                <li class=\"breadcrumb-item active\">Lieucamping index</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class=\"content\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\">Liste des Lieucampings</h3>
                                </div>
                                <div class=\"card-body\">
                                    <table id=\"lieucampingTable\" class=\"table table-bordered table-hover\">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nom</th>
                                                <th>Description</th>
                                                <th>Coordonnées</th>
                                                <th>Photo</th>
                                                <th>Capacité</th>
                                                <th>Places Restantes</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lieucampings"]) || array_key_exists("lieucampings", $context) ? $context["lieucampings"] : (function () { throw new RuntimeError('Variable "lieucampings" does not exist.', 90, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lieucamping"]) {
            // line 91
            yield "                                                <tr>
                                                    <td>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieucamping"], "id", [], "any", false, false, false, 92), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieucamping"], "nom", [], "any", false, false, false, 93), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 94
            yield CoreExtension::getAttribute($this->env, $this->source, $context["lieucamping"], "description", [], "any", false, false, false, 94);
            yield "</td>
                                                    <td>";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieucamping"], "coordonner", [], "any", false, false, false, 95), "html", null, true);
            yield "</td>
                                                    <td>
                                                        ";
            // line 97
            if (CoreExtension::getAttribute($this->env, $this->source, $context["lieucamping"], "photo", [], "any", false, false, false, 97)) {
                // line 98
                yield "                                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, $context["lieucamping"], "photo", [], "any", false, false, false, 98))), "html", null, true);
                yield "\" alt=\"Photo\" width=\"50\" height=\"50\">
                                                        ";
            } else {
                // line 100
                yield "                                                            <span>No Photo</span>
                                                        ";
            }
            // line 102
            yield "                                                    </td>
                                                    <td>";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieucamping"], "capacite", [], "any", false, false, false, 103), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieucamping"], "PlacesRestantes", [], "any", false, false, false, 104), "html", null, true);
            yield "</td>
                                                    <td>
                                                        <a href=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieucamping_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lieucamping"], "id", [], "any", false, false, false, 106)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Show</a>
                                                        <a href=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieucamping_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lieucamping"], "id", [], "any", false, false, false, 107)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Edit</a>
                                                    </td>
                                                </tr>
                                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 111
            yield "                                                <tr>
                                                    <td colspan=\"8\">No records found</td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lieucamping'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieucamping_new");
        yield "\" class=\"btn btn-success\">Create new</a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 130
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$('#lieucampingTable').DataTable();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "lieucamping/index.html.twig";
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
        return array (  312 => 130,  299 => 129,  284 => 124,  273 => 115,  264 => 111,  255 => 107,  251 => 106,  246 => 104,  242 => 103,  239 => 102,  235 => 100,  229 => 98,  227 => 97,  222 => 95,  218 => 94,  214 => 93,  210 => 92,  207 => 91,  202 => 90,  148 => 39,  139 => 33,  130 => 27,  117 => 17,  111 => 14,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/dashboard/index.html.twig' %}

{% block title %}Lieucamping index{% endblock %}

{% block body %}
    <div class=\"wrapper\">
        <!-- Navbar -->
        <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
                </li>
                <li class=\"nav-item d-none d-sm-inline-block\">
                    <a href=\"{{ path('app_home') }}\" class=\"nav-link\">Home</a>
                </li>
                <li class=\"nav-item d-none d-sm-inline-block\">
                    <a href=\"{{path('app_admin_dashboard')}}\" class=\"nav-link\">dashborad</a>
                </li>
            </ul>
        </nav>

        <!-- Sidebar -->
        <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
            <div class=\"sidebar\">
                <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                    <div class=\"info\">
                        <a href=\"{{ path('app_home') }}\" class=\"d-block\">Camping Center</a>
                    </div>
                </div>
                <nav class=\"mt-2\">
                    <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                        <li class=\"nav-item\">
                            <a href=\"{{ path('app_lieucamping_index') }}\" class=\"nav-link\">
                                <i class=\"nav-icon fas fa-mountain\"></i>
                                <p>Centre de camping</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"{{ path('app_user_index') }}\" class=\"nav-link\">
                                <i class=\"nav-icon far fa-user\"></i>
                                <p>Utilisateurs</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class=\"content-wrapper\">
            <section class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                        <div class=\"col-sm-6\">
                            <h1>Lieucamping index</h1>
                        </div>
                        <div class=\"col-sm-6\">
                            <ol class=\"breadcrumb float-sm-right\">
                                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                                <li class=\"breadcrumb-item active\">Lieucamping index</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class=\"content\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\">Liste des Lieucampings</h3>
                                </div>
                                <div class=\"card-body\">
                                    <table id=\"lieucampingTable\" class=\"table table-bordered table-hover\">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nom</th>
                                                <th>Description</th>
                                                <th>Coordonnées</th>
                                                <th>Photo</th>
                                                <th>Capacité</th>
                                                <th>Places Restantes</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% for lieucamping in lieucampings %}
                                                <tr>
                                                    <td>{{ lieucamping.id }}</td>
                                                    <td>{{ lieucamping.nom }}</td>
                                                    <td>{{ lieucamping.description| raw }}</td>
                                                    <td>{{ lieucamping.coordonner }}</td>
                                                    <td>
                                                        {% if lieucamping.photo %}
                                                            <img src=\"{{ asset('uploads/photos/' ~ lieucamping.photo) }}\" alt=\"Photo\" width=\"50\" height=\"50\">
                                                        {% else %}
                                                            <span>No Photo</span>
                                                        {% endif %}
                                                    </td>
                                                    <td>{{ lieucamping.capacite }}</td>
                                                    <td>{{ lieucamping.PlacesRestantes }}</td>
                                                    <td>
                                                        <a href=\"{{ path('app_lieucamping_show', {'id': lieucamping.id}) }}\" class=\"btn btn-info btn-sm\">Show</a>
                                                        <a href=\"{{ path('app_lieucamping_edit', {'id': lieucamping.id}) }}\" class=\"btn btn-warning btn-sm\">Edit</a>
                                                    </td>
                                                </tr>
                                            {% else %}
                                                <tr>
                                                    <td colspan=\"8\">No records found</td>
                                                </tr>
                                            {% endfor %}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <a href=\"{{ path('app_lieucamping_new') }}\" class=\"btn btn-success\">Create new</a>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$('#lieucampingTable').DataTable();
        });
    </script>
{% endblock %}
", "lieucamping/index.html.twig", "C:\\xampp\\htdocs\\projetC\\templates\\lieucamping\\index.html.twig");
    }
}
