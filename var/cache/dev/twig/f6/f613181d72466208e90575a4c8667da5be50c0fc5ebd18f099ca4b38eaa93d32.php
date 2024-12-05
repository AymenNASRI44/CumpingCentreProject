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

/* admin/statistics/index.html.twig */
class __TwigTemplate_b32cb9aa729b5bfa33f46c9e638beed1cd92eb089c79d1c69f85c5bbb6ddb02a extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/statistics/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/statistics/index.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 5
        yield " 


";
        // line 8
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        
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
        yield "<!-- Inclure Bootstrap Icons -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        yield "    <h1 class=\"page-title\">Statistiques</h1>
    <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        yield "\" class=\"btn btn-primary\">
        <i class=\"bi bi-house-door\"></i> 
    </a>
    
    <div class=\"charts-container\">
       
        <div class=\"chart-wrapper\">
            <h2>Nombre de Réservations par Lieu de Camping</h2>
            <canvas id=\"reservationsChart\"></canvas>
        </div>

        <!-- Graphique des utilisateurs par région -->
        <div class=\"chart-wrapper\">
            <h2>Nombre d'Utilisateurs par Région</h2>
            <canvas id=\"usersChart\"></canvas>
        </div>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        // Graphique des réservations par lieu de camping
        var ctx1 = document.getElementById('reservationsChart').getContext('2d');
        var reservationsChart = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ";
        // line 35
        yield (isset($context["lieuNames"]) || array_key_exists("lieuNames", $context) ? $context["lieuNames"] : (function () { throw new RuntimeError('Variable "lieuNames" does not exist.', 35, $this->source); })());
        yield ",
                datasets: [{
                    label: 'Nombre de Réservations',
                    data: ";
        // line 38
        yield (isset($context["reservationCounts"]) || array_key_exists("reservationCounts", $context) ? $context["reservationCounts"] : (function () { throw new RuntimeError('Variable "reservationCounts" does not exist.', 38, $this->source); })());
        yield ",
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.raw + ' réservations';
                            }
                        }
                    }
                }
            }
        });

        // Graphique des utilisateurs par région
        var ctx2 = document.getElementById('usersChart').getContext('2d');
        var usersChart = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ";
        // line 66
        yield (isset($context["regions"]) || array_key_exists("regions", $context) ? $context["regions"] : (function () { throw new RuntimeError('Variable "regions" does not exist.', 66, $this->source); })());
        yield ",
                datasets: [{
                    label: 'Nombre d\\'Utilisateurs',
                    data: ";
        // line 69
        yield (isset($context["userCounts"]) || array_key_exists("userCounts", $context) ? $context["userCounts"] : (function () { throw new RuntimeError('Variable "userCounts" does not exist.', 69, $this->source); })());
        yield ",
                    backgroundColor: 'rgba(255, 159, 64, 0.2)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.raw + ' utilisateurs';
                            }
                        }
                    }
                }
            }
        });
    </script>

    <style>
        .charts-container {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .chart-wrapper {
            flex: 1;
            min-width: 45%;
            max-width: 600px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .chart-wrapper h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.5rem;
            color: #333;
        }

        canvas {
            width: 100% !important;
            height: 400px !important;
        }

        .page-title {
            text-align: center;
            font-size: 2rem;
            color: #333;
            margin-bottom: 30px;
        }
    </style>
   

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
        return "admin/statistics/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  181 => 69,  175 => 66,  144 => 38,  138 => 35,  110 => 10,  107 => 9,  94 => 8,  81 => 2,  68 => 1,  57 => 8,  52 => 5,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block head %}
<!-- Inclure Bootstrap Icons -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\" rel=\"stylesheet\">
{% endblock head %}
 


{% block content %}
    <h1 class=\"page-title\">Statistiques</h1>
    <a href=\"{{ path('admin') }}\" class=\"btn btn-primary\">
        <i class=\"bi bi-house-door\"></i> 
    </a>
    
    <div class=\"charts-container\">
       
        <div class=\"chart-wrapper\">
            <h2>Nombre de Réservations par Lieu de Camping</h2>
            <canvas id=\"reservationsChart\"></canvas>
        </div>

        <!-- Graphique des utilisateurs par région -->
        <div class=\"chart-wrapper\">
            <h2>Nombre d'Utilisateurs par Région</h2>
            <canvas id=\"usersChart\"></canvas>
        </div>
    </div>

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        // Graphique des réservations par lieu de camping
        var ctx1 = document.getElementById('reservationsChart').getContext('2d');
        var reservationsChart = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: {{ lieuNames|raw }},
                datasets: [{
                    label: 'Nombre de Réservations',
                    data: {{ reservationCounts|raw }},
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.raw + ' réservations';
                            }
                        }
                    }
                }
            }
        });

        // Graphique des utilisateurs par région
        var ctx2 = document.getElementById('usersChart').getContext('2d');
        var usersChart = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: {{ regions|raw }},
                datasets: [{
                    label: 'Nombre d\\'Utilisateurs',
                    data: {{ userCounts|raw }},
                    backgroundColor: 'rgba(255, 159, 64, 0.2)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.raw + ' utilisateurs';
                            }
                        }
                    }
                }
            }
        });
    </script>

    <style>
        .charts-container {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            flex-wrap: wrap;
            margin-top: 30px;
        }

        .chart-wrapper {
            flex: 1;
            min-width: 45%;
            max-width: 600px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .chart-wrapper h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.5rem;
            color: #333;
        }

        canvas {
            width: 100% !important;
            height: 400px !important;
        }

        .page-title {
            text-align: center;
            font-size: 2rem;
            color: #333;
            margin-bottom: 30px;
        }
    </style>
   

{% endblock %}
", "admin/statistics/index.html.twig", "C:\\xampp\\htdocs\\projetC\\templates\\admin\\statistics\\index.html.twig");
    }
}
