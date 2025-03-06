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
class __TwigTemplate_0c8c705a83aa5cccfc6a60ba22f5e07bbfc74dda54b1742ff2a6a54848772570 extends Template
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
        // line 156
        yield "  
<!-- ./wrapper -->
";
        // line 158
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 261
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
  <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <div class=\"sidebar\">
        <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
            <div class=\"info\">
                <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"d-block\">Camping Center</a>
            </div>
        </div>
        <nav class=\"mt-2\">
            <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                <li class=\"nav-item\">
                    <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_crud_index");
        yield "\" class=\"nav-link\">
                      <i class=\"nav-icon fas fa-calendar\"></i>
                      <p>
                        Reservation 
                      </p>
                    </a>
                  </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"nav-link\">
                        <i class=\"nav-icon far fa-user\"></i>
                        <p>Utilisateurs</p>
                    </a>
                </li>
                <li class=\"nav-item\">
                  <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieucamping_index");
        yield "\" class=\"nav-link\">
                    <i class=\"nav-icon fas fa-mountain\"></i>
                    <p>
                      Centre de camping 
                    </p>
                  </a>
                </li>
            </ul>
        </nav>
    </div>
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
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservationsCount"]) || array_key_exists("reservationsCount", $context) ? $context["reservationsCount"] : (function () { throw new RuntimeError('Variable "reservationsCount" does not exist.', 97, $this->source); })()), "html", null, true);
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
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lieuxCampingCount"]) || array_key_exists("lieuxCampingCount", $context) ? $context["lieuxCampingCount"] : (function () { throw new RuntimeError('Variable "lieuxCampingCount" does not exist.', 108, $this->source); })()), "html", null, true);
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
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["utilisateursCount"]) || array_key_exists("utilisateursCount", $context) ? $context["utilisateursCount"] : (function () { throw new RuntimeError('Variable "utilisateursCount" does not exist.', 119, $this->source); })()), "html", null, true);
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

    // line 158
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

        // line 159
        yield "<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
<!-- Bootstrap -->
<script src=\"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
<!-- overlayScrollbars -->
<script src=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        yield "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/dist/js/adminlte.js"), "html", null, true);
        yield "\"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src=\"";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/jquery-mousewheel/jquery.mousewheel.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/raphael/raphael.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/jquery-mapael/jquery.mapael.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/jquery-mapael/maps/usa_states.min.js"), "html", null, true);
        yield "\"></script>
<!-- ChartJS -->
<script src=\"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/plugins/chart.js/Chart.min.js"), "html", null, true);
        yield "\"></script>

<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/dist/js/demo.js"), "html", null, true);
        yield "\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admintmp/dist/js/pages/dashboard2.js"), "html", null, true);
        yield "\"></script>
<script>
 
  // Données pour le graphique des utilisateurs par région
  const usersByRegionData = {
      labels: ";
        // line 186
        yield (isset($context["regions"]) || array_key_exists("regions", $context) ? $context["regions"] : (function () { throw new RuntimeError('Variable "regions" does not exist.', 186, $this->source); })());
        yield ", 
      datasets: [{
          label: 'Utilisateurs',
          backgroundColor: ['#f46e3f', '#1cffee', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc'],
          borderColor: '#ffffff',
          borderWidth: 1,
          data: ";
        // line 192
        yield (isset($context["userCounts"]) || array_key_exists("userCounts", $context) ? $context["userCounts"] : (function () { throw new RuntimeError('Variable "userCounts" does not exist.', 192, $this->source); })());
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
        // line 222
        yield (isset($context["lieuNames"]) || array_key_exists("lieuNames", $context) ? $context["lieuNames"] : (function () { throw new RuntimeError('Variable "lieuNames" does not exist.', 222, $this->source); })());
        yield ", 
      datasets: [{
          label: 'Utilisateurs',
          backgroundColor: ['#b8f43f', '#f56954', '#3ff4e6', '#b8f43f', '#f46e3f', '#3fd3f4'],
          borderColor: '#ffffff',
          borderWidth: 1,
          data: ";
        // line 228
        yield (isset($context["reservationCounts"]) || array_key_exists("reservationCounts", $context) ? $context["reservationCounts"] : (function () { throw new RuntimeError('Variable "reservationCounts" does not exist.', 228, $this->source); })());
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
      type: 'bar', // Vous pouvez changer ce type en 'pie' ou 'doughnut' pour d'autres graphiques
      data: resparlieuData,
      options: resparlieuOptions
  });
  
</script>
<script>
  


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
        return array (  440 => 228,  431 => 222,  398 => 192,  389 => 186,  381 => 181,  376 => 179,  370 => 176,  365 => 174,  361 => 173,  357 => 172,  353 => 171,  346 => 167,  341 => 165,  336 => 163,  331 => 161,  327 => 159,  314 => 158,  266 => 119,  252 => 108,  238 => 97,  186 => 48,  177 => 42,  166 => 34,  157 => 28,  149 => 22,  136 => 21,  122 => 18,  118 => 17,  114 => 16,  110 => 15,  105 => 13,  100 => 11,  95 => 8,  82 => 7,  69 => 261,  67 => 158,  63 => 156,  61 => 21,  59 => 7,  51 => 1,);
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
                    <a href=\"{{ path('app_reservation_crud_index') }}\" class=\"nav-link\">
                      <i class=\"nav-icon fas fa-calendar\"></i>
                      <p>
                        Reservation 
                      </p>
                    </a>
                  </li>
                <li class=\"nav-item\">
                    <a href=\"{{ path('app_user_index') }}\" class=\"nav-link\">
                        <i class=\"nav-icon far fa-user\"></i>
                        <p>Utilisateurs</p>
                    </a>
                </li>
                <li class=\"nav-item\">
                  <a href=\"{{path('app_lieucamping_index')}}\" class=\"nav-link\">
                    <i class=\"nav-icon fas fa-mountain\"></i>
                    <p>
                      Centre de camping 
                    </p>
                  </a>
                </li>
            </ul>
        </nav>
    </div>
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
      type: 'bar', // Vous pouvez changer ce type en 'pie' ou 'doughnut' pour d'autres graphiques
      data: resparlieuData,
      options: resparlieuOptions
  });
  
</script>
<script>
  


{% endblock scripts %}
</body>
</html>
", "admin/dashboard/index.html.twig", "C:\\xampp\\htdocs\\projetC\\templates\\admin\\dashboard\\index.html.twig");
    }
}
