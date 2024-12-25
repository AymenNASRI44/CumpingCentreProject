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

/* user/index.html.twig */
class __TwigTemplate_052916306da88f14e5109a19333ec4c9512eb5ecad994e0ba28d3fea727a0cc2 extends Template
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
            'script' => [$this, 'block_script'],
            'body' => [$this, 'block_body'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        // line 1
        yield "
";
        // line 2
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 16
        yield from $this->unwrap()->yieldBlock('script', $context, $blocks);
        // line 21
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 167
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    // line 2
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

        // line 3
        yield "  <!-- Google Font: Source Sans Pro -->
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
  <!-- Font Awesome Icons -->
  <link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        yield "\">
  <!-- overlayScrollbars -->
  <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        yield "\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/dist/css/adminlte.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"), "html", null, true);
        yield "\">
</head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 17
        yield "<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 21
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

        // line 22
        yield "        
<nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
        </li>
        <li class=\"nav-item d-none d-sm-inline-block\">
            <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\">Home</a>
        </li>
        <li class=\"nav-item d-none d-sm-inline-block\">
            <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"nav-link\">dashborad</a>
        </li>
    </ul>
</nav>

        <!-- Main Sidebar Container -->
        <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
           

            <!-- Sidebar -->
            <div class=\"sidebar\">
                <!-- Sidebar user (optional) -->
                <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                    
                    <div class=\"info\">
                        <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"d-block\">Camping Center</a>
                    </div>
                      
                </div>
                <nav class=\"mt-2\">
                    <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                      <li class=\"nav-item\">
                        <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieucamping_index");
        yield "\" class=\"nav-link\">
                          <i class=\"nav-icon fas fa-mountain\"></i>
                          <p>
                            Centre de camping 
                          </p>
                        </a>
                      </li>
                      <li class=\"nav-item\">
                        <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"nav-link\">
                          <i class=\"nav-icon far fa-user\"></i>
                          <p>
                            Utilisateurs 
                          </p>
                        </a>
                      </li>
                      
                    
                     
              
            
                      
                    </ul>
                  </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                        <div class=\"col-sm-6\">
                            <h1>liste des utilisateurs </h1>
                        </div>
                        <div class=\"col-sm-6\">
                            <ol class=\"breadcrumb float-sm-right\">
                                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                                <li class=\"breadcrumb-item active\">liste des utilisateurs</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
           
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Liste des utilisateurs</h3>

                    <div class=\"card-tools\">
                        <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                            <input type=\"text\" name=\"table_search\" class=\"form-control float-right\" placeholder=\"Search\">
                            <div class=\"input-group-append\">
                                <button type=\"submit\" class=\"btn btn-default\">
                                    <i class=\"fas fa-search\"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class=\"card-body table-responsive p-0\">
                    <table class=\"table table-hover text-nowrap\">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 135, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 136
            yield "                                <tr>
                                    <td>";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 137), "html", null, true);
            yield "</td>
                                    <td>";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 138), "html", null, true);
            yield "</td>
                                    
                                    <td>";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 140), "html", null, true);
            yield "</td>
                                    <td>";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 141), "html", null, true);
            yield "</td>
                                    <td>
                                        
                                        <a href=\"";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 144)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                        <a href=\"";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 145)]), "html", null, true);
            yield " \" class=\"btn btn-danger btn-sm\">Supprimer</a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 149
            yield "                                <tr>
                                    <td colspan=\"6\" class=\"text-center\">Aucun utilisateur trouvé</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        yield "                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

   


   
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 167
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

        // line 168
        yield "<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
<!-- Bootstrap -->
<script src=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
<!-- overlayScrollbars -->
<script src=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        yield "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/dist/js/adminlte.js"), "html", null, true);
        yield "\"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src=\"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/jquery-mousewheel/jquery.mousewheel.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/raphael/raphael.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/jquery-mapael/jquery.mapael.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/jquery-mapael/maps/usa_states.min.js"), "html", null, true);
        yield "\"></script>
<!-- ChartJS -->
<script src=\"";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/chart.js/Chart.min.js"), "html", null, true);
        yield "\"></script>

<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/dist/js/demo.js"), "html", null, true);
        yield "\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"";
        // line 190
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
        return "user/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  436 => 190,  431 => 188,  425 => 185,  420 => 183,  416 => 182,  412 => 181,  408 => 180,  401 => 176,  396 => 174,  391 => 172,  386 => 170,  382 => 168,  369 => 167,  345 => 153,  336 => 149,  327 => 145,  323 => 144,  317 => 141,  313 => 140,  308 => 138,  304 => 137,  301 => 136,  296 => 135,  220 => 62,  209 => 54,  199 => 47,  181 => 32,  175 => 29,  166 => 22,  153 => 21,  139 => 17,  126 => 16,  112 => 13,  108 => 12,  104 => 11,  100 => 10,  95 => 8,  90 => 6,  85 => 3,  72 => 2,  61 => 167,  59 => 21,  57 => 16,  55 => 2,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% block head %}
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
{% block script %}
<script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>


{% endblock script %}
{% block body %}
        
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

        <!-- Main Sidebar Container -->
        <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
           

            <!-- Sidebar -->
            <div class=\"sidebar\">
                <!-- Sidebar user (optional) -->
                <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                    
                    <div class=\"info\">
                        <a href=\"{{path('app_home')}}\" class=\"d-block\">Camping Center</a>
                    </div>
                      
                </div>
                <nav class=\"mt-2\">
                    <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                      <li class=\"nav-item\">
                        <a href=\"{{path('app_lieucamping_index')}}\" class=\"nav-link\">
                          <i class=\"nav-icon fas fa-mountain\"></i>
                          <p>
                            Centre de camping 
                          </p>
                        </a>
                      </li>
                      <li class=\"nav-item\">
                        <a href=\"{{ path('app_user_index') }}\" class=\"nav-link\">
                          <i class=\"nav-icon far fa-user\"></i>
                          <p>
                            Utilisateurs 
                          </p>
                        </a>
                      </li>
                      
                    
                     
              
            
                      
                    </ul>
                  </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                        <div class=\"col-sm-6\">
                            <h1>liste des utilisateurs </h1>
                        </div>
                        <div class=\"col-sm-6\">
                            <ol class=\"breadcrumb float-sm-right\">
                                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                                <li class=\"breadcrumb-item active\">liste des utilisateurs</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
           
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">Liste des utilisateurs</h3>

                    <div class=\"card-tools\">
                        <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                            <input type=\"text\" name=\"table_search\" class=\"form-control float-right\" placeholder=\"Search\">
                            <div class=\"input-group-append\">
                                <button type=\"submit\" class=\"btn btn-default\">
                                    <i class=\"fas fa-search\"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class=\"card-body table-responsive p-0\">
                    <table class=\"table table-hover text-nowrap\">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for user in users %}
                                <tr>
                                    <td>{{ user.id }}</td>
                                    <td>{{ user.email }}</td>
                                    
                                    <td>{{ user.nom }}</td>
                                    <td>{{ user.prenom }}</td>
                                    <td>
                                        
                                        <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                        <a href=\"{{ path('app_user_delete',{'id': user.id}) }} \" class=\"btn btn-danger btn-sm\">Supprimer</a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"6\" class=\"text-center\">Aucun utilisateur trouvé</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>

   


   
</html>
{% endblock body %}
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
{% endblock scripts %}", "user/index.html.twig", "C:\\xampp\\htdocs\\projetC\\templates\\user\\index.html.twig");
    }
}
