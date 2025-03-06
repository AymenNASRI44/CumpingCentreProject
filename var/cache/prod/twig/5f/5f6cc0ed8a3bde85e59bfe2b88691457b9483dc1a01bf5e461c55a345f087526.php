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
class __TwigTemplate_a8f5f1fac271deed638ade7a7d07fc122ff5659b1870dcc5fa9347f46a1d9eff extends Template
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
        // line 1
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 9
        yield "
";
        // line 10
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["lieuCamping"] ?? null), "id", [], "any", false, false, false, 31)]), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["lieuCamping"] ?? null), "nom", [], "any", false, false, false, 46), "html", null, true);
        yield "</h1>
                    <div class=\"post-meta\">
                        <span class=\"post-location\"><strong>Coordonnées :</strong> ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["lieuCamping"] ?? null), "coordonner", [], "any", false, false, false, 48), "html", null, true);
        yield "</span>
                    </div>
                </header>

                <!-- Image principale du lieu -->
                <div class=\"post-image\">
                    <img src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, ($context["lieuCamping"] ?? null), "photo", [], "any", false, false, false, 54))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["lieuCamping"] ?? null), "nom", [], "any", false, false, false, 54), "html", null, true);
        yield "\" class=\"img-fluid\">
                </div>

                <div class=\"post-meta\">
                    <span class=\"post-location\"><strong>Capacité :</strong> ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["lieuCamping"] ?? null), "capacite", [], "any", false, false, false, 58), "html", null, true);
        yield " personnes</span>
                </div>    

                <!-- Bouton Réserver -->
                <a href=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["lieuCamping"] ?? null), "id", [], "any", false, false, false, 62)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">Réserver Maintenant</a>

                <!-- Description du lieu -->
                <div class=\"post-content\">
                    <h2>Description</h2>
                    <p>";
        // line 67
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["lieuCamping"] ?? null), "description", [], "any", false, false, false, 67);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_avis", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["lieuCamping"] ?? null), "id", [], "any", false, false, false, 73)]), "html", null, true);
        yield "\" class=\"btn btn-\">Donner un avis</a>
                </footer>

                <!-- Affichage des avis -->
                ";
        // line 77
        if (Twig\Extension\CoreExtension::testEmpty(($context["avis"] ?? null))) {
            // line 78
            yield "                    <p>Aucun avis pour ce lieu de camping.</p>
                ";
        } else {
            // line 80
            yield "                    <ul class=\"comment-list\">
                        ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["avis"] ?? null));
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
        return array (  228 => 89,  224 => 87,  215 => 84,  209 => 83,  206 => 82,  202 => 81,  199 => 80,  195 => 78,  193 => 77,  186 => 73,  182 => 72,  174 => 67,  166 => 62,  159 => 58,  150 => 54,  141 => 48,  136 => 46,  121 => 34,  115 => 31,  109 => 28,  103 => 25,  89 => 14,  84 => 11,  77 => 10,  68 => 5,  61 => 2,  54 => 1,  49 => 10,  46 => 9,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "lieu_camping_contloller/detail.html.twig", "C:\\xampp\\htdocs\\projetC\\templates\\lieu_camping_contloller\\detail.html.twig");
    }
}
