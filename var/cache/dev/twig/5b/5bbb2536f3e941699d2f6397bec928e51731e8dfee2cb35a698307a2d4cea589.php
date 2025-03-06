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

/* lieu_camping_contloller/detail.html.twig */
class __TwigTemplate_22dba7b9caf2aedc078fc09dbbae778b5c211283ab0a342aa764136ab230ddf2 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieu_camping_contloller/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieu_camping_contloller/detail.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 9
        yield "
";
        // line 10
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    // line 1
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

        // line 2
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lieu/details.css"), "html", null, true);
        yield "\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lieu/nav.css"), "html", null, true);
        yield "\">


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container\">
        <!-- Logo ou nom -->
        <a class=\"navbar-brand\" href=\"";
        // line 14
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
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_camping");
        yield "\">Lieux de Camping</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieuCamping"]) || array_key_exists("lieuCamping", $context) ? $context["lieuCamping"] : (function () { throw new RuntimeError('Variable "lieuCamping" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        yield "\">Réservations</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <section class=\"blog-post\">
        <div class=\"container\">
            <!-- Article principal du blog -->
            <article class=\"post\">
                <header class=\"post-header\">
                    <h1 class=\"post-title\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieuCamping"]) || array_key_exists("lieuCamping", $context) ? $context["lieuCamping"] : (function () { throw new RuntimeError('Variable "lieuCamping" does not exist.', 46, $this->source); })()), "nom", [], "any", false, false, false, 46), "html", null, true);
        yield "</h1>
                    <div class=\"post-meta\">
                        <span class=\"post-location\"><strong>Coordonnées :</strong> ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieuCamping"]) || array_key_exists("lieuCamping", $context) ? $context["lieuCamping"] : (function () { throw new RuntimeError('Variable "lieuCamping" does not exist.', 48, $this->source); })()), "coordonner", [], "any", false, false, false, 48), "html", null, true);
        yield "</span>
                    </div>
                </header>

                <!-- Image principale du lieu -->
                <div class=\"post-image\">
                    <img src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieuCamping"]) || array_key_exists("lieuCamping", $context) ? $context["lieuCamping"] : (function () { throw new RuntimeError('Variable "lieuCamping" does not exist.', 54, $this->source); })()), "photo", [], "any", false, false, false, 54))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieuCamping"]) || array_key_exists("lieuCamping", $context) ? $context["lieuCamping"] : (function () { throw new RuntimeError('Variable "lieuCamping" does not exist.', 54, $this->source); })()), "nom", [], "any", false, false, false, 54), "html", null, true);
        yield "\" class=\"img-fluid\">
                </div>

                <div class=\"post-meta\">
                    <span class=\"post-location\"><strong>Capacité :</strong> ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieuCamping"]) || array_key_exists("lieuCamping", $context) ? $context["lieuCamping"] : (function () { throw new RuntimeError('Variable "lieuCamping" does not exist.', 58, $this->source); })()), "capacite", [], "any", false, false, false, 58), "html", null, true);
        yield " personnes</span>
                </div>    

                <!-- Bouton Réserver -->
                <a href=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieuCamping"]) || array_key_exists("lieuCamping", $context) ? $context["lieuCamping"] : (function () { throw new RuntimeError('Variable "lieuCamping" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">Réserver Maintenant</a>

                <!-- Description du lieu -->
                <div class=\"post-content\">
                    <h2>Description</h2>
                    <p>";
        // line 67
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieuCamping"]) || array_key_exists("lieuCamping", $context) ? $context["lieuCamping"] : (function () { throw new RuntimeError('Variable "lieuCamping" does not exist.', 67, $this->source); })()), "description", [], "any", false, false, false, 67);
        yield "</p>
                </div>

                <!-- Section footer avec bouton retour -->
                <footer class=\"post-footer\">
                    <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_camping");
        yield "\" class=\"btn btn-\">Retour à la liste des lieux</a>
                    <a href=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieuCamping"]) || array_key_exists("lieuCamping", $context) ? $context["lieuCamping"] : (function () { throw new RuntimeError('Variable "lieuCamping" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "html", null, true);
        yield "\" class=\"btn btn-\">Donner un avis</a>
                </footer>

                <!-- Affichage des avis -->
                ";
        // line 77
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 77, $this->source); })()))) {
            // line 78
            yield "                    <p>Aucun avis pour ce lieu de camping.</p>
                ";
        } else {
            // line 80
            yield "                    <ul class=\"comment-list\">
                        ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 81, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 82
                yield "                            <li>
                                <strong>";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "user", [], "any", false, false, false, 83), "nom", [], "any", false, false, false, 83), "html", null, true);
                yield "</strong> a écrit le ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "date", [], "any", false, false, false, 83), "d/m/Y"), "html", null, true);
                yield " :
                                <p>";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "commentaire", [], "any", false, false, false, 84), "html", null, true);
                yield "</p>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            yield "                    </ul>
                ";
        }
        // line 89
        yield "            </article>
        </div>
    </section>
    
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
        return "lieu_camping_contloller/detail.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  258 => 89,  254 => 87,  245 => 84,  239 => 83,  236 => 82,  232 => 81,  229 => 80,  225 => 78,  223 => 77,  216 => 73,  212 => 72,  204 => 67,  196 => 62,  189 => 58,  180 => 54,  171 => 48,  166 => 46,  151 => 34,  145 => 31,  139 => 28,  133 => 25,  119 => 14,  114 => 11,  101 => 10,  86 => 5,  79 => 2,  66 => 1,  55 => 10,  52 => 9,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('lieu/details.css') }}\">
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
                    <a class=\"nav-link\" href=\"{{ path('app_reservation', { 'id': lieuCamping.id }) }}\">Réservations</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('app_contact') }}\">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    <section class=\"blog-post\">
        <div class=\"container\">
            <!-- Article principal du blog -->
            <article class=\"post\">
                <header class=\"post-header\">
                    <h1 class=\"post-title\">{{ lieuCamping.nom }}</h1>
                    <div class=\"post-meta\">
                        <span class=\"post-location\"><strong>Coordonnées :</strong> {{ lieuCamping.coordonner }}</span>
                    </div>
                </header>

                <!-- Image principale du lieu -->
                <div class=\"post-image\">
                    <img src=\"{{ asset('uploads/photos/' ~ lieuCamping.photo) }}\" alt=\"{{ lieuCamping.nom }}\" class=\"img-fluid\">
                </div>

                <div class=\"post-meta\">
                    <span class=\"post-location\"><strong>Capacité :</strong> {{ lieuCamping.capacite }} personnes</span>
                </div>    

                <!-- Bouton Réserver -->
                <a href=\"{{ path('app_reservation', { id: lieuCamping.id }) }}\" class=\"btn btn-primary\">Réserver Maintenant</a>

                <!-- Description du lieu -->
                <div class=\"post-content\">
                    <h2>Description</h2>
                    <p>{{ lieuCamping.description | raw }}</p>
                </div>

                <!-- Section footer avec bouton retour -->
                <footer class=\"post-footer\">
                    <a href=\"{{ path('app_lieu_camping') }}\" class=\"btn btn-\">Retour à la liste des lieux</a>
                    <a href=\"{{ path('app_avis', { id: lieuCamping.id }) }}\" class=\"btn btn-\">Donner un avis</a>
                </footer>

                <!-- Affichage des avis -->
                {% if avis is empty %}
                    <p>Aucun avis pour ce lieu de camping.</p>
                {% else %}
                    <ul class=\"comment-list\">
                        {% for commentaire in avis %}
                            <li>
                                <strong>{{ commentaire.user.nom }}</strong> a écrit le {{ commentaire.date | date('d/m/Y') }} :
                                <p>{{ commentaire.commentaire }}</p>
                            </li>
                        {% endfor %}
                    </ul>
                {% endif %}
            </article>
        </div>
    </section>
    
{% endblock %}
", "lieu_camping_contloller/detail.html.twig", "C:\\xampp\\htdocs\\projetC\\templates\\lieu_camping_contloller\\detail.html.twig");
    }
}
