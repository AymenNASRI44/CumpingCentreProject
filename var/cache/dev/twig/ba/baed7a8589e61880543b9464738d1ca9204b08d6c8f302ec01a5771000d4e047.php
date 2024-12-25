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

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieucamping/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieucamping/index.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 15
        yield "


";
        // line 18
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 141
        yield "
";
        // line 142
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 151
        yield "<!-- ./wrapper -->
";
        // line 152
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 2
        yield "  <!-- Google Font: Source Sans Pro -->
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
  <!-- Font Awesome Icons -->
  <link rel=\"stylesheet\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        yield "\">
  <!-- overlayScrollbars -->
  <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        yield "\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/dist/css/adminlte.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"), "html", null, true);
        yield "\">
</head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 18
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

        // line 19
        yield "    <div class=\"wrapper\">
        <!-- Navbar -->
        <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
                </li>
                <li class=\"nav-item d-none d-sm-inline-block\">
                    <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\">Home</a>
                </li>
                <li class=\"nav-item d-none d-sm-inline-block\">
                    <a href=\"";
        // line 30
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
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"d-block\">Camping Center</a>
                    </div>
                </div>
                <nav class=\"mt-2\">
                    <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieucamping_index");
        yield "\" class=\"nav-link\">
                                <i class=\"nav-icon fas fa-mountain\"></i>
                                <p>Centre de camping</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 52
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
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lieucampings"]) || array_key_exists("lieucampings", $context) ? $context["lieucampings"] : (function () { throw new RuntimeError('Variable "lieucampings" does not exist.', 103, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lieucamping"]) {
            // line 104
            yield "                                                <tr>
                                                    <td>";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieucamping"], "id", [], "any", false, false, false, 105), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieucamping"], "nom", [], "any", false, false, false, 106), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 107
            yield CoreExtension::getAttribute($this->env, $this->source, $context["lieucamping"], "description", [], "any", false, false, false, 107);
            yield "</td>
                                                    <td>";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieucamping"], "coordonner", [], "any", false, false, false, 108), "html", null, true);
            yield "</td>
                                                    <td>
                                                        ";
            // line 110
            if (CoreExtension::getAttribute($this->env, $this->source, $context["lieucamping"], "photo", [], "any", false, false, false, 110)) {
                // line 111
                yield "                                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, $context["lieucamping"], "photo", [], "any", false, false, false, 111))), "html", null, true);
                yield "\" alt=\"Photo\" width=\"50\" height=\"50\">
                                                        ";
            } else {
                // line 113
                yield "                                                            <span>No Photo</span>
                                                        ";
            }
            // line 115
            yield "                                                    </td>
                                                    <td>";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieucamping"], "capacite", [], "any", false, false, false, 116), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieucamping"], "PlacesRestantes", [], "any", false, false, false, 117), "html", null, true);
            yield "</td>
                                                    <td>
                                                        <a href=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieucamping_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lieucamping"], "id", [], "any", false, false, false, 119)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Show</a>
                                                        <a href=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieucamping_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lieucamping"], "id", [], "any", false, false, false, 120)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Edit</a>
                                                    </td>
                                                </tr>
                                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 124
            yield "                                                <tr>
                                                    <td colspan=\"8\">No records found</td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lieucamping'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieucamping_new");
        yield "\" class=\"btn btn-success\">Create new</a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 142
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

        // line 143
        yield "    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
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

    // line 152
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 153
        yield "<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
<!-- Bootstrap -->
<script src=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
<!-- overlayScrollbars -->
<script src=\"";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        yield "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/dist/js/adminlte.js"), "html", null, true);
        yield "\"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/jquery-mousewheel/jquery.mousewheel.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/raphael/raphael.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/jquery-mapael/jquery.mapael.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/jquery-mapael/maps/usa_states.min.js"), "html", null, true);
        yield "\"></script>
<!-- ChartJS -->
<script src=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/chart.js/Chart.min.js"), "html", null, true);
        yield "\"></script>

<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/dist/js/demo.js"), "html", null, true);
        yield "\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/dist/js/pages/dashboard2.js"), "html", null, true);
        yield "\"></script>
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
    public function getDebugInfo(): array
    {
        return array (  443 => 175,  438 => 173,  432 => 170,  427 => 168,  423 => 167,  419 => 166,  415 => 165,  408 => 161,  403 => 159,  398 => 157,  393 => 155,  389 => 153,  376 => 152,  358 => 143,  345 => 142,  330 => 137,  319 => 128,  310 => 124,  301 => 120,  297 => 119,  292 => 117,  288 => 116,  285 => 115,  281 => 113,  275 => 111,  273 => 110,  268 => 108,  264 => 107,  260 => 106,  256 => 105,  253 => 104,  248 => 103,  194 => 52,  185 => 46,  176 => 40,  163 => 30,  157 => 27,  147 => 19,  134 => 18,  120 => 12,  116 => 11,  112 => 10,  108 => 9,  103 => 7,  98 => 5,  93 => 2,  80 => 1,  69 => 152,  66 => 151,  64 => 142,  61 => 141,  59 => 18,  54 => 15,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block head %}
  <!-- Google Font: Source Sans Pro -->
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
  <!-- Font Awesome Icons -->
  <link rel=\"stylesheet\" href=\"{{ asset('admintmp/plugins/fontawesome-free/css/all.min.css')}}\">
  <!-- overlayScrollbars -->
  <link rel=\"stylesheet\" href=\"{{ asset('admintmp/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"{{ asset('admintmp/dist/css/adminlte.min.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('admintmp/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('admintmp/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}\">
  <link rel=\"stylesheet\" href=\"{{asset('admintmp/plugins/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}\">
</head>
{% endblock head %}



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
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$('#lieucampingTable').DataTable();
        });
    </script>
{% endblock %}
<!-- ./wrapper -->
{% block scripts %}
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src=\"{{ asset('admintmp/plugins/jquery/jquery.min.js')}}\"></script>
<!-- Bootstrap -->
<script src=\"{{ asset('admintmp/plugins/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
<!-- overlayScrollbars -->
<script src=\"{{ asset('admintmp/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}\"></script>
<!-- AdminLTE App -->
<script src=\"{{ asset('admintmp/dist/js/adminlte.js')}}\"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src=\"{{ asset('admintmp/plugins/jquery-mousewheel/jquery.mousewheel.js')}}\"></script>
<script src=\"{{ asset('admintmp/plugins/raphael/raphael.min.js')}}\"></script>
<script src=\"{{ asset('admintmp/plugins/jquery-mapael/jquery.mapael.min.js')}}\"></script>
<script src=\"{{ asset('admintmp/plugins/jquery-mapael/maps/usa_states.min.js')}}\"></script>
<!-- ChartJS -->
<script src=\"{{ asset('admintmp/plugins/chart.js/Chart.min.js')}}\"></script>

<!-- AdminLTE for demo purposes -->
<script src=\"{{ asset('admintmp/dist/js/demo.js')}}\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"{{ asset('admintmp/dist/js/pages/dashboard2.js')}}\"></script>
{% endblock scripts %}
", "lieucamping/index.html.twig", "C:\\xampp\\htdocs\\projetC\\templates\\lieucamping\\index.html.twig");
    }
}
