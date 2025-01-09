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

/* lieu_camping_contloller/index.html.twig */
class __TwigTemplate_0e045c5f63c00681a7fabce68a5e9b3b61a5fb29907e79fea9a98cab81a82d22 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieu_camping_contloller/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieu_camping_contloller/index.html.twig"));

        // line 1
        yield "


";
        // line 4
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 9
        yield "

";
        // line 11
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 79
        yield "
";
        // line 80
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lieu/stylelieu.css"), "html", null, true);
        yield "\">
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lieu/nav.css"), "html", null, true);
        yield "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container\">
        <!-- Logo ou nom -->
        <a class=\"navbar-brand\" href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Camping</a>
        
        <!-- Bouton pour petits écrans -->
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        
        <!-- Liens de navigation -->
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_camping");
        yield "\">Lieux de Camping</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <h1 >Liste des Lieux de Camping</h1>
    <div class=\"lieux-container\">
        ";
        // line 41
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["lieuxCamping"]) || array_key_exists("lieuxCamping", $context) ? $context["lieuxCamping"] : (function () { throw new RuntimeError('Variable "lieuxCamping" does not exist.', 41, $this->source); })()))) {
            // line 42
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lieuxCamping"]) || array_key_exists("lieuxCamping", $context) ? $context["lieuxCamping"] : (function () { throw new RuntimeError('Variable "lieuxCamping" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
                // line 43
                yield "                <div class=\"lieu-card\">
                    <!-- Section gauche : Image et nom -->
                    <div class=\"lieu-left\">
                        <h2>
                            <a href=\"";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_camping_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                yield "\">   
                                ";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 48), "html", null, true);
                yield "
                            </a>
                        </h2>
                        ";
                // line 51
                if (CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "photo", [], "any", false, false, false, 51)) {
                    // line 52
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "photo", [], "any", false, false, false, 52))), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 52), "html", null, true);
                    yield "\">
                        ";
                }
                // line 54
                yield "                     
                    </div>

                    <!-- Section droite : Description et informations -->
                    <div class=\"lieu-right\">
                        

                        <p>
                            <span class=\"icon-map\"></span>
                            Coordonnées : ";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "coordonner", [], "any", false, false, false, 63), "html", null, true);
                yield "
                        </p>
                        <p>
                            <span class=\"icon-person\"></span>
                            Capacité : ";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "capacite", [], "any", false, false, false, 67), "html", null, true);
                yield " personnes
                        </p>
                        <p>Région : ";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "regionId", [], "any", false, false, false, 69), "getNomRegion", [], "method", false, false, false, 69), "html", null, true);
                yield "</p>
                    </div>
                    place restante : ";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "PlacesRestantes", [], "any", false, false, false, 71), "html", null, true);
                yield "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lieu'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "        ";
        } else {
            // line 75
            yield "            <p>Aucun lieu de camping n'a été trouvé.</p>
        ";
        }
        // line 77
        yield "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 81
        yield "<!-- Pied de page -->
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
        return "lieu_camping_contloller/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  268 => 81,  255 => 80,  243 => 77,  239 => 75,  236 => 74,  227 => 71,  222 => 69,  217 => 67,  210 => 63,  199 => 54,  191 => 52,  189 => 51,  183 => 48,  179 => 47,  173 => 43,  168 => 42,  166 => 41,  154 => 32,  148 => 29,  142 => 26,  128 => 15,  123 => 12,  110 => 11,  97 => 7,  78 => 4,  67 => 80,  64 => 79,  62 => 11,  58 => 9,  56 => 4,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("


{%block stylesheets%}<link rel=\"stylesheet\" href=\"{{ asset('lieu/stylelieu.css') }}\">
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>
    <link rel=\"stylesheet\" href=\"{{ asset('lieu/nav.css') }}\">
{% endblock %}


{% block body %}
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container\">
        <!-- Logo ou nom -->
        <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">Camping</a>
        
        <!-- Bouton pour petits écrans -->
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        
        <!-- Liens de navigation -->
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav ms-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('app_home') }}\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_lieu_camping') }}\">Lieux de Camping</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_contact') }}\">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <h1 >Liste des Lieux de Camping</h1>
    <div class=\"lieux-container\">
        {% if lieuxCamping is not empty %}
            {% for lieu in lieuxCamping %}
                <div class=\"lieu-card\">
                    <!-- Section gauche : Image et nom -->
                    <div class=\"lieu-left\">
                        <h2>
                            <a href=\"{{ path('app_lieu_camping_detail', {'id': lieu.id}) }}\">   
                                {{ lieu.nom }}
                            </a>
                        </h2>
                        {% if lieu.photo %}
                            <img src=\"{{ asset('uploads/photos/' ~ lieu.photo) }}\" alt=\"{{ lieu.nom }}\">
                        {% endif %}
                     
                    </div>

                    <!-- Section droite : Description et informations -->
                    <div class=\"lieu-right\">
                        

                        <p>
                            <span class=\"icon-map\"></span>
                            Coordonnées : {{ lieu.coordonner }}
                        </p>
                        <p>
                            <span class=\"icon-person\"></span>
                            Capacité : {{ lieu.capacite }} personnes
                        </p>
                        <p>Région : {{ lieu.regionId.getNomRegion() }}</p>
                    </div>
                    place restante : {{lieu.PlacesRestantes }}
                </div>
            {% endfor %}
        {% else %}
            <p>Aucun lieu de camping n'a été trouvé.</p>
        {% endif %}
    </div>
{% endblock %}

{% block footer %}
<!-- Pied de page -->
{% endblock %}
", "lieu_camping_contloller/index.html.twig", "C:\\xampp\\htdocs\\projetC\\templates\\lieu_camping_contloller\\index.html.twig");
    }
}
