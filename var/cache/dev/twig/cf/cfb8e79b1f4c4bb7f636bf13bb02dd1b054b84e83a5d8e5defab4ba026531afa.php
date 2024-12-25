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

/* admin/dashboard/index.html.twig */
class __TwigTemplate_e11f2a3cbc4247b6de69f78e6c26aa2617635b160cdcc092f1821124dbc8731b extends Template
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
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>AdminLTE 3 | Dashboard 2</title>
";
        // line 7
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 21
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 206
        yield "  
<!-- ./wrapper -->
";
        // line 208
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 309
        yield "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "  <!-- Google Font: Source Sans Pro -->
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback\">
  <!-- Font Awesome Icons -->
  <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        yield "\">
  <!-- overlayScrollbars -->
  <link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        yield "\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/dist/css/adminlte.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"), "html", null, true);
        yield "\">
  <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"), "html", null, true);
        yield "\">
</head>
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
        yield "<body class=\"hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed\">
<div class=\"wrapper\">
  <!-- Navbar -->
  <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
    <ul class=\"navbar-nav\">
      <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\">Home</a>
      </li>
      <li class=\"nav-item d-none d-sm-inline-block\">
        <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"nav-link\">dashborad</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class=\"form-inline ml-3\">
      <div class=\"input-group input-group-sm\">
        <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
        <div class=\"input-group-append\">
          <button class=\"btn btn-navbar\" type=\"submit\">
            <i class=\"fas fa-search\"></i>
          </button>
        </div>
      </div>
    </form>

    
  </nav>
  <!-- /.navbar -->
  
  <!-- Main Sidebar Container -->
  <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"index3.html\" class=\"brand-link\">
      <img src=\"dist/img/AdminLTELogo.png\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
      <span class=\"brand-text font-weight-light\">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    

      <!-- SidebarSearch Form -->
      <div class=\"form-inline\">
        <div class=\"input-group\" data-widget=\"sidebar-search\">
          <input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
          <div class=\"input-group-append\">
            <button class=\"btn btn-sidebar\">
              <i class=\"fas fa-search fa-fw\"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class=\"mt-2\">
        <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
          <li class=\"nav-item\">
            <a href=\"";
        // line 82
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
        // line 90
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
  
  <section class=\"content\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <!-- Carte pour la gestion des utilisateurs -->
            
        </div>
    </div>
</section>
</div>
  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <div class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1 class=\"m-0\">Camping Dashboard</h1>
          </div><!-- /.col -->
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item active\">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<div class=\"container-fluid\">
    <!-- Info boxes -->
    <div class=\"row\">
        <!-- Nombre de réservations -->
        <div class=\"col-12 col-sm-6 col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-info elevation-1\"><i class=\"fas fa-book\"></i></span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Réservations</span>
                    <span class=\"info-box-number\">";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationsCount"]) || array_key_exists("reservationsCount", $context) ? $context["reservationsCount"] : (function () { throw new RuntimeError('Variable "reservationsCount" does not exist.', 147, $this->source); })()), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>

        <!-- Nombre de lieux de camping -->
        <div class=\"col-12 col-sm-6 col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-success elevation-1\"><i class=\"fas fa-campground\"></i></span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Lieux de Camping</span>
                    <span class=\"info-box-number\">";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lieuxCampingCount"]) || array_key_exists("lieuxCampingCount", $context) ? $context["lieuxCampingCount"] : (function () { throw new RuntimeError('Variable "lieuxCampingCount" does not exist.', 158, $this->source); })()), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>

        <!-- Nombre d'utilisateurs -->
        <div class=\"col-12 col-sm-6 col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-warning elevation-1\"><i class=\"fas fa-users\"></i></span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Utilisateurs</span>
                    <span class=\"info-box-number\">";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["utilisateursCount"]) || array_key_exists("utilisateursCount", $context) ? $context["utilisateursCount"] : (function () { throw new RuntimeError('Variable "utilisateursCount" does not exist.', 169, $this->source); })()), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Graphiques -->
    <div class=\"container-fluid\">
      <!-- Graphiques Utilisateurs par Région et Répartition des Réservations par Lieu -->
      <div class=\"row\">
          <!-- Graphique Utilisateurs par Région -->
          <div class=\"col-md-6\">
              <div class=\"card card-info\">
                  <div class=\"card-header\">
                      <h3 class=\"card-title\">Utilisateurs par Région</h3>
                  </div>
                  <div class=\"card-body\">
                      <canvas id=\"usersByRegionChart\" style=\"min-height: 250px; height: 250px;\"></canvas>
                  </div>
              </div>
          </div>
  
          <!-- Graphique Répartition des Réservations par Lieu -->
          <div class=\"col-md-6\">
              <div class=\"card card-info\">
                  <div class=\"card-header\">
                      <h3 class=\"card-title\">Répartition des Réservations par Lieu</h3>
                  </div>
                  <div class=\"card-body\">
                      <canvas id=\"resparlieuChart\" style=\"min-height: 250px; height: 250px;\"></canvas>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 208
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

        // line 209
        yield "<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src=\"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
<!-- Bootstrap -->
<script src=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
<!-- overlayScrollbars -->
<script src=\"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        yield "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/dist/js/adminlte.js"), "html", null, true);
        yield "\"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src=\"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/jquery-mousewheel/jquery.mousewheel.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/raphael/raphael.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/jquery-mapael/jquery.mapael.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/jquery-mapael/maps/usa_states.min.js"), "html", null, true);
        yield "\"></script>
<!-- ChartJS -->
<script src=\"";
        // line 226
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/chart.js/Chart.min.js"), "html", null, true);
        yield "\"></script>

<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/dist/js/demo.js"), "html", null, true);
        yield "\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/dist/js/pages/dashboard2.js"), "html", null, true);
        yield "\"></script>
<script>
 
  // Données pour le graphique des utilisateurs par région
  const usersByRegionData = {
      labels: ";
        // line 236
        yield (isset($context["regions"]) || array_key_exists("regions", $context) ? $context["regions"] : (function () { throw new RuntimeError('Variable "regions" does not exist.', 236, $this->source); })());
        yield ", 
      datasets: [{
          label: 'Utilisateurs',
          backgroundColor: ['#f46e3f', '#1cffee', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc'],
          borderColor: '#ffffff',
          borderWidth: 1,
          data: ";
        // line 242
        yield (isset($context["userCounts"]) || array_key_exists("userCounts", $context) ? $context["userCounts"] : (function () { throw new RuntimeError('Variable "userCounts" does not exist.', 242, $this->source); })());
        yield " // Les nombres d'utilisateurs par région
      }]
  };

  // Configuration du graphique
  const usersByRegionOptions = {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
          y: {
              beginAtZero: true
          }
      },
      plugins: {
          legend: {
              display: false
          }
      }
  };

  // Initialisation du graphique
  new Chart(document.getElementById('usersByRegionChart'), {
      type: 'bar', 
      data: usersByRegionData,
      options: usersByRegionOptions
  });
</script>
<script>
 
  const resparlieuData = {
      labels: ";
        // line 272
        yield (isset($context["lieuNames"]) || array_key_exists("lieuNames", $context) ? $context["lieuNames"] : (function () { throw new RuntimeError('Variable "lieuNames" does not exist.', 272, $this->source); })());
        yield ", 
      datasets: [{
          label: 'Utilisateurs',
          backgroundColor: ['#b8f43f', '#f56954', '#3ff4e6', '#b8f43f', '#f46e3f', '#3fd3f4'],
          borderColor: '#ffffff',
          borderWidth: 1,
          data: ";
        // line 278
        yield (isset($context["reservationCounts"]) || array_key_exists("reservationCounts", $context) ? $context["reservationCounts"] : (function () { throw new RuntimeError('Variable "reservationCounts" does not exist.', 278, $this->source); })());
        yield " 
      }]
  };

  // Configuration du graphique
  const resparlieuOptions = {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
          y: {
              beginAtZero: true
          }
      },
      plugins: {
          legend: {
              display: false
          }
      }
  };

  // Initialisation du graphique
  new Chart(document.getElementById('resparlieuChart'), {
      type: 'pie', // Vous pouvez changer ce type en 'pie' ou 'doughnut' pour d'autres graphiques
      data: resparlieuData,
      options: resparlieuOptions
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
        return "admin/dashboard/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  490 => 278,  481 => 272,  448 => 242,  439 => 236,  431 => 231,  426 => 229,  420 => 226,  415 => 224,  411 => 223,  407 => 222,  403 => 221,  396 => 217,  391 => 215,  386 => 213,  381 => 211,  377 => 209,  364 => 208,  316 => 169,  302 => 158,  288 => 147,  228 => 90,  217 => 82,  167 => 35,  161 => 32,  149 => 22,  136 => 21,  122 => 18,  118 => 17,  114 => 16,  110 => 15,  105 => 13,  100 => 11,  95 => 8,  82 => 7,  69 => 309,  67 => 208,  63 => 206,  61 => 21,  59 => 7,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>AdminLTE 3 | Dashboard 2</title>
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
{% block body %}
<body class=\"hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed\">
<div class=\"wrapper\">
  <!-- Navbar -->
  <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
    <!-- Left navbar links -->
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

    <!-- SEARCH FORM -->
    <form class=\"form-inline ml-3\">
      <div class=\"input-group input-group-sm\">
        <input class=\"form-control form-control-navbar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
        <div class=\"input-group-append\">
          <button class=\"btn btn-navbar\" type=\"submit\">
            <i class=\"fas fa-search\"></i>
          </button>
        </div>
      </div>
    </form>

    
  </nav>
  <!-- /.navbar -->
  
  <!-- Main Sidebar Container -->
  <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Brand Logo -->
    <a href=\"index3.html\" class=\"brand-link\">
      <img src=\"dist/img/AdminLTELogo.png\" alt=\"AdminLTE Logo\" class=\"brand-image img-circle elevation-3\" style=\"opacity: .8\">
      <span class=\"brand-text font-weight-light\">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    

      <!-- SidebarSearch Form -->
      <div class=\"form-inline\">
        <div class=\"input-group\" data-widget=\"sidebar-search\">
          <input class=\"form-control form-control-sidebar\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
          <div class=\"input-group-append\">
            <button class=\"btn btn-sidebar\">
              <i class=\"fas fa-search fa-fw\"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
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
  
  <section class=\"content\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <!-- Carte pour la gestion des utilisateurs -->
            
        </div>
    </div>
</section>
</div>
  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <div class=\"content-header\">
      <div class=\"container-fluid\">
        <div class=\"row mb-2\">
          <div class=\"col-sm-6\">
            <h1 class=\"m-0\">Camping Dashboard</h1>
          </div><!-- /.col -->
          <div class=\"col-sm-6\">
            <ol class=\"breadcrumb float-sm-right\">
              <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
              <li class=\"breadcrumb-item active\">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<div class=\"container-fluid\">
    <!-- Info boxes -->
    <div class=\"row\">
        <!-- Nombre de réservations -->
        <div class=\"col-12 col-sm-6 col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-info elevation-1\"><i class=\"fas fa-book\"></i></span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Réservations</span>
                    <span class=\"info-box-number\">{{ reservationsCount }}</span>
                </div>
            </div>
        </div>

        <!-- Nombre de lieux de camping -->
        <div class=\"col-12 col-sm-6 col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-success elevation-1\"><i class=\"fas fa-campground\"></i></span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Lieux de Camping</span>
                    <span class=\"info-box-number\">{{ lieuxCampingCount }}</span>
                </div>
            </div>
        </div>

        <!-- Nombre d'utilisateurs -->
        <div class=\"col-12 col-sm-6 col-md-3\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-warning elevation-1\"><i class=\"fas fa-users\"></i></span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Utilisateurs</span>
                    <span class=\"info-box-number\">{{ utilisateursCount }}</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Graphiques -->
    <div class=\"container-fluid\">
      <!-- Graphiques Utilisateurs par Région et Répartition des Réservations par Lieu -->
      <div class=\"row\">
          <!-- Graphique Utilisateurs par Région -->
          <div class=\"col-md-6\">
              <div class=\"card card-info\">
                  <div class=\"card-header\">
                      <h3 class=\"card-title\">Utilisateurs par Région</h3>
                  </div>
                  <div class=\"card-body\">
                      <canvas id=\"usersByRegionChart\" style=\"min-height: 250px; height: 250px;\"></canvas>
                  </div>
              </div>
          </div>
  
          <!-- Graphique Répartition des Réservations par Lieu -->
          <div class=\"col-md-6\">
              <div class=\"card card-info\">
                  <div class=\"card-header\">
                      <h3 class=\"card-title\">Répartition des Réservations par Lieu</h3>
                  </div>
                  <div class=\"card-body\">
                      <canvas id=\"resparlieuChart\" style=\"min-height: 250px; height: 250px;\"></canvas>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
 {% endblock body %}
  
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
<script>
 
  // Données pour le graphique des utilisateurs par région
  const usersByRegionData = {
      labels: {{ regions|raw }}, 
      datasets: [{
          label: 'Utilisateurs',
          backgroundColor: ['#f46e3f', '#1cffee', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc'],
          borderColor: '#ffffff',
          borderWidth: 1,
          data: {{ userCounts|raw }} // Les nombres d'utilisateurs par région
      }]
  };

  // Configuration du graphique
  const usersByRegionOptions = {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
          y: {
              beginAtZero: true
          }
      },
      plugins: {
          legend: {
              display: false
          }
      }
  };

  // Initialisation du graphique
  new Chart(document.getElementById('usersByRegionChart'), {
      type: 'bar', 
      data: usersByRegionData,
      options: usersByRegionOptions
  });
</script>
<script>
 
  const resparlieuData = {
      labels: {{ lieuNames|raw }}, 
      datasets: [{
          label: 'Utilisateurs',
          backgroundColor: ['#b8f43f', '#f56954', '#3ff4e6', '#b8f43f', '#f46e3f', '#3fd3f4'],
          borderColor: '#ffffff',
          borderWidth: 1,
          data: {{ reservationCounts|raw }} 
      }]
  };

  // Configuration du graphique
  const resparlieuOptions = {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
          y: {
              beginAtZero: true
          }
      },
      plugins: {
          legend: {
              display: false
          }
      }
  };

  // Initialisation du graphique
  new Chart(document.getElementById('resparlieuChart'), {
      type: 'pie', // Vous pouvez changer ce type en 'pie' ou 'doughnut' pour d'autres graphiques
      data: resparlieuData,
      options: resparlieuOptions
  });
  
</script>


{% endblock scripts %}
</body>
</html>
", "admin/dashboard/index.html.twig", "C:\\xampp\\htdocs\\projetC\\templates\\admin\\dashboard\\index.html.twig");
    }
}
