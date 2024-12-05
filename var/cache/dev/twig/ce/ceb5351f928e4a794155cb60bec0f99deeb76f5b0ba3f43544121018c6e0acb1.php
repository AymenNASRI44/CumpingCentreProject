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
class __TwigTemplate_93ef23920dfb9c7702447aaae9fd1206055077b56f06a57668fc5515aed92cff extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieu_camping_contloller/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieu_camping_contloller/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lieu_camping_contloller/detail.html.twig", 1);
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

        yield "Détail du Lieu de Camping";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("lieu/details.css"), "html", null, true);
        yield "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "    <section class=\"blog-post\">
        <div class=\"container\">
            <!-- Article principal du blog -->
            <article class=\"post\">
                <header class=\"post-header\">
                    <h1 class=\"post-title\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieuCamping"]) || array_key_exists("lieuCamping", $context) ? $context["lieuCamping"] : (function () { throw new RuntimeError('Variable "lieuCamping" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "html", null, true);
        yield "</h1>
                    <div class=\"post-meta\">
                        <span class=\"post-location\"><strong>Coordonnées :</strong> ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieuCamping"]) || array_key_exists("lieuCamping", $context) ? $context["lieuCamping"] : (function () { throw new RuntimeError('Variable "lieuCamping" does not exist.', 17, $this->source); })()), "coordonner", [], "any", false, false, false, 17), "html", null, true);
        yield "</span>
                    </div>
                </header>

                <!-- Image principale du lieu -->
                <div class=\"post-image\">
                    <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieuCamping"]) || array_key_exists("lieuCamping", $context) ? $context["lieuCamping"] : (function () { throw new RuntimeError('Variable "lieuCamping" does not exist.', 23, $this->source); })()), "photo", [], "any", false, false, false, 23))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieuCamping"]) || array_key_exists("lieuCamping", $context) ? $context["lieuCamping"] : (function () { throw new RuntimeError('Variable "lieuCamping" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), "html", null, true);
        yield "\" class=\"img-fluid\">
                </div>

                <div class=\"post-meta\">
                    <span class=\"post-location\"><strong>Capacité :</strong> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieuCamping"]) || array_key_exists("lieuCamping", $context) ? $context["lieuCamping"] : (function () { throw new RuntimeError('Variable "lieuCamping" does not exist.', 27, $this->source); })()), "capacite", [], "any", false, false, false, 27), "html", null, true);
        yield " personnes</span>
                </div>    

                <!-- Bouton Réserver -->
                <a href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieuCamping"]) || array_key_exists("lieuCamping", $context) ? $context["lieuCamping"] : (function () { throw new RuntimeError('Variable "lieuCamping" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">Réserver Maintenant</a>

                <!-- Description du lieu -->
                <div class=\"post-content\">
                    <h2>Description</h2>
                    <p>";
        // line 36
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieuCamping"]) || array_key_exists("lieuCamping", $context) ? $context["lieuCamping"] : (function () { throw new RuntimeError('Variable "lieuCamping" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36);
        yield "</p>
                </div>

                <!-- Section footer avec bouton retour -->
                <footer class=\"post-footer\">
                    <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_camping");
        yield "\" class=\"btn btn-primary\">Retour à la liste des lieux</a>
                    <a href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieuCamping"]) || array_key_exists("lieuCamping", $context) ? $context["lieuCamping"] : (function () { throw new RuntimeError('Variable "lieuCamping" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        yield "\" class=\"btn btn-success\">Donner un avis</a>
                </footer>

                <!-- Affichage des avis -->
                ";
        // line 46
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 46, $this->source); })()))) {
            // line 47
            yield "                    <p>Aucun avis pour ce lieu de camping.</p>
                ";
        } else {
            // line 49
            yield "                    <ul class=\"comment-list\">
                        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 51
                yield "                            <li>
                                <strong>";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "user", [], "any", false, false, false, 52), "nom", [], "any", false, false, false, 52), "html", null, true);
                yield "</strong> a écrit le ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "date", [], "any", false, false, false, 52), "d/m/Y"), "html", null, true);
                yield " :
                                <p>";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "commentaire", [], "any", false, false, false, 53), "html", null, true);
                yield "</p>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "                    </ul>
                ";
        }
        // line 58
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
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  227 => 58,  223 => 56,  214 => 53,  208 => 52,  205 => 51,  201 => 50,  198 => 49,  194 => 47,  192 => 46,  185 => 42,  181 => 41,  173 => 36,  165 => 31,  158 => 27,  149 => 23,  140 => 17,  135 => 15,  128 => 10,  115 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détail du Lieu de Camping{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('lieu/details.css') }}\">
{% endblock %}

{% block body %}
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
                    <a href=\"{{ path('app_lieu_camping') }}\" class=\"btn btn-primary\">Retour à la liste des lieux</a>
                    <a href=\"{{ path('app_avis', { id: lieuCamping.id }) }}\" class=\"btn btn-success\">Donner un avis</a>
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
