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

/* lieucamping/edit.html.twig */
class __TwigTemplate_37b0aa4f66531dcb9f00f0299d47930ca67cdc38798c31598d3ff250483024f1 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "lieucamping/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("lieucamping/index.html.twig", "lieucamping/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Edit Lieucamping";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"wrapper\">
    <<!-- Navbar -->
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
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_crud_index");
        yield "\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-calendar\"></i>
                            <p>Réservation</p>
                        </a>
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

        <div class=\"content-wrapper\">

         <section class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"card card-info\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Formulaire de modification</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- Form Start -->
                            ";
        // line 62
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        yield "
                                <div class=\"card-body\">
                                    <!-- Nom -->
                                    <div class=\"form-group row\">
                                        <label for=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Nom</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68)]]);
        yield "
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class=\"form-group row\">
                                        <label for=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Description</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76)]]);
        yield "
                                        </div>
                                    </div>

                                    <!-- Coordonnées -->
                                    <div class=\"form-group row\">
                                        <label for=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "coordonner", [], "any", false, false, false, 82), "vars", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Coordonnées</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "coordonner", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "coordonner", [], "any", false, false, false, 84), "vars", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84)]]);
        yield "
                                        </div>
                                    </div>

                                    <!-- Photo -->
                                    <<!-- edit.html.twig -->

                                    <div class=\"form-group row\">
                                        <label for=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "photo", [], "any", false, false, false, 92), "vars", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Photo</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "photo", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "photo", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94)]]);
        yield "
                                            
                                            ";
        // line 96
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["lieucamping"] ?? null), "photo", [], "any", false, false, false, 96)) {
            // line 97
            yield "                                                <div class=\"mt-3\">
                                                    <label>Image actuelle :</label><br>
                                                    <img src=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, ($context["lieucamping"] ?? null), "photo", [], "any", false, false, false, 99))), "html", null, true);
            yield "\" alt=\"Photo\" width=\"100\">
                                                </div>
                                            ";
        }
        // line 102
        yield "                                        </div>
                                    </div>
                                    
                                    <!-- Capacité -->
                                    <div class=\"form-group row\">
                                        <label for=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "capacite", [], "any", false, false, false, 107), "vars", [], "any", false, false, false, 107), "id", [], "any", false, false, false, 107), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Capacité</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "capacite", [], "any", false, false, false, 109), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "capacite", [], "any", false, false, false, 109), "vars", [], "any", false, false, false, 109), "id", [], "any", false, false, false, 109)]]);
        yield "
                                        </div>
                                    </div>

                                    <!-- Places Restantes -->
                                    <div class=\"form-group row\">
                                        <label for=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "PlacesRestantes", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "id", [], "any", false, false, false, 115), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Places restantes</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "PlacesRestantes", [], "any", false, false, false, 117), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "PlacesRestantes", [], "any", false, false, false, 117), "vars", [], "any", false, false, false, 117), "id", [], "any", false, false, false, 117)]]);
        yield "
                                        </div>
                                    </div>

                                    <!-- Région -->
                                    <div class=\"form-group row\">
                                        <label for=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "region_id", [], "any", false, false, false, 123), "vars", [], "any", false, false, false, 123), "id", [], "any", false, false, false, 123), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Région</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "region_id", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "region_id", [], "any", false, false, false, 125), "vars", [], "any", false, false, false, 125), "id", [], "any", false, false, false, 125)]]);
        yield "
                                        </div>
                                    </div>

                                    
                                </div>
                                <!-- /.card-body -->

                                <!-- Card Footer -->
                                <div class=\"card-footer\">
                                    <button type=\"submit\" class=\"btn btn-info\">Mettre à jour</button>
                                    <a href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieucamping_index");
        yield "\" class=\"btn btn-default float-right\">Annuler</a>
                                </div>
                                <!-- /.card-footer -->
                            ";
        // line 139
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
                            <!-- Form End -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "lieucamping/edit.html.twig";
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
        return array (  276 => 139,  270 => 136,  256 => 125,  251 => 123,  242 => 117,  237 => 115,  228 => 109,  223 => 107,  216 => 102,  210 => 99,  206 => 97,  204 => 96,  199 => 94,  194 => 92,  183 => 84,  178 => 82,  169 => 76,  164 => 74,  155 => 68,  150 => 66,  143 => 62,  117 => 39,  109 => 34,  99 => 27,  86 => 17,  80 => 14,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "lieucamping/edit.html.twig", "C:\\xampp\\htdocs\\projetC\\templates\\lieucamping\\edit.html.twig");
    }
}
