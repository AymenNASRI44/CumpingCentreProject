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
class __TwigTemplate_6f7d079238c600139664a254b03551bf3567766dd87fecf4c0f33a7c9292ca6d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieucamping/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieucamping/edit.html.twig"));

        $this->parent = $this->loadTemplate("lieucamping/index.html.twig", "lieucamping/edit.html.twig", 1);
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

        yield "Edit Lieucamping";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 5
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        yield "
                                <div class=\"card-body\">
                                    <!-- Nom -->
                                    <div class=\"form-group row\">
                                        <label for=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "nom", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Nom</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "nom", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "nom", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68)]]);
        yield "
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class=\"form-group row\">
                                        <label for=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "description", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Description</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "description", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "description", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76)]]);
        yield "
                                        </div>
                                    </div>

                                    <!-- Coordonnées -->
                                    <div class=\"form-group row\">
                                        <label for=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "coordonner", [], "any", false, false, false, 82), "vars", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Coordonnées</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "coordonner", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "coordonner", [], "any", false, false, false, 84), "vars", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84)]]);
        yield "
                                        </div>
                                    </div>

                                    <!-- Photo -->
                                    <<!-- edit.html.twig -->

                                    <div class=\"form-group row\">
                                        <label for=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "photo", [], "any", false, false, false, 92), "vars", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Photo</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "photo", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "photo", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94)]]);
        yield "
                                            
                                            ";
        // line 96
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieucamping"]) || array_key_exists("lieucamping", $context) ? $context["lieucamping"] : (function () { throw new RuntimeError('Variable "lieucamping" does not exist.', 96, $this->source); })()), "photo", [], "any", false, false, false, 96)) {
            // line 97
            yield "                                                <div class=\"mt-3\">
                                                    <label>Image actuelle :</label><br>
                                                    <img src=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieucamping"]) || array_key_exists("lieucamping", $context) ? $context["lieucamping"] : (function () { throw new RuntimeError('Variable "lieucamping" does not exist.', 99, $this->source); })()), "photo", [], "any", false, false, false, 99))), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "capacite", [], "any", false, false, false, 107), "vars", [], "any", false, false, false, 107), "id", [], "any", false, false, false, 107), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Capacité</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "capacite", [], "any", false, false, false, 109), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "capacite", [], "any", false, false, false, 109), "vars", [], "any", false, false, false, 109), "id", [], "any", false, false, false, 109)]]);
        yield "
                                        </div>
                                    </div>

                                    <!-- Places Restantes -->
                                    <div class=\"form-group row\">
                                        <label for=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "PlacesRestantes", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "id", [], "any", false, false, false, 115), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Places restantes</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "PlacesRestantes", [], "any", false, false, false, 117), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "PlacesRestantes", [], "any", false, false, false, 117), "vars", [], "any", false, false, false, 117), "id", [], "any", false, false, false, 117)]]);
        yield "
                                        </div>
                                    </div>

                                    <!-- Région -->
                                    <div class=\"form-group row\">
                                        <label for=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "region_id", [], "any", false, false, false, 123), "vars", [], "any", false, false, false, 123), "id", [], "any", false, false, false, 123), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Région</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "region_id", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "region_id", [], "any", false, false, false, 125), "vars", [], "any", false, false, false, 125), "id", [], "any", false, false, false, 125)]]);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), 'form_end');
        yield "
                            <!-- Form End -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
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
        return array (  306 => 139,  300 => 136,  286 => 125,  281 => 123,  272 => 117,  267 => 115,  258 => 109,  253 => 107,  246 => 102,  240 => 99,  236 => 97,  234 => 96,  229 => 94,  224 => 92,  213 => 84,  208 => 82,  199 => 76,  194 => 74,  185 => 68,  180 => 66,  173 => 62,  147 => 39,  139 => 34,  129 => 27,  116 => 17,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'lieucamping/index.html.twig' %}

{% block title %}Edit Lieucamping{% endblock %}

{% block body %}
<div class=\"wrapper\">
    <<!-- Navbar -->
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
                        <a href=\"{{ path('app_reservation_crud_index') }}\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-calendar\"></i>
                            <p>Réservation</p>
                        </a>
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
                            {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
                                <div class=\"card-body\">
                                    <!-- Nom -->
                                    <div class=\"form-group row\">
                                        <label for=\"{{ form.nom.vars.id }}\" class=\"col-sm-2 col-form-label\">Nom</label>
                                        <div class=\"col-sm-10\">
                                            {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'id': form.nom.vars.id}}) }}
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class=\"form-group row\">
                                        <label for=\"{{ form.description.vars.id }}\" class=\"col-sm-2 col-form-label\">Description</label>
                                        <div class=\"col-sm-10\">
                                            {{ form_widget(form.description, {'attr': {'class': 'form-control', 'id': form.description.vars.id}}) }}
                                        </div>
                                    </div>

                                    <!-- Coordonnées -->
                                    <div class=\"form-group row\">
                                        <label for=\"{{ form.coordonner.vars.id }}\" class=\"col-sm-2 col-form-label\">Coordonnées</label>
                                        <div class=\"col-sm-10\">
                                            {{ form_widget(form.coordonner, {'attr': {'class': 'form-control', 'id': form.coordonner.vars.id}}) }}
                                        </div>
                                    </div>

                                    <!-- Photo -->
                                    <<!-- edit.html.twig -->

                                    <div class=\"form-group row\">
                                        <label for=\"{{ form.photo.vars.id }}\" class=\"col-sm-2 col-form-label\">Photo</label>
                                        <div class=\"col-sm-10\">
                                            {{ form_widget(form.photo, {'attr': {'class': 'form-control', 'id': form.photo.vars.id }} ) }}
                                            
                                            {% if lieucamping.photo %}
                                                <div class=\"mt-3\">
                                                    <label>Image actuelle :</label><br>
                                                    <img src=\"{{ asset('uploads/photos/' ~ lieucamping.photo) }}\" alt=\"Photo\" width=\"100\">
                                                </div>
                                            {% endif %}
                                        </div>
                                    </div>
                                    
                                    <!-- Capacité -->
                                    <div class=\"form-group row\">
                                        <label for=\"{{ form.capacite.vars.id }}\" class=\"col-sm-2 col-form-label\">Capacité</label>
                                        <div class=\"col-sm-10\">
                                            {{ form_widget(form.capacite, {'attr': {'class': 'form-control', 'id': form.capacite.vars.id}}) }}
                                        </div>
                                    </div>

                                    <!-- Places Restantes -->
                                    <div class=\"form-group row\">
                                        <label for=\"{{ form.PlacesRestantes.vars.id }}\" class=\"col-sm-2 col-form-label\">Places restantes</label>
                                        <div class=\"col-sm-10\">
                                            {{ form_widget(form.PlacesRestantes, {'attr': {'class': 'form-control', 'id': form.PlacesRestantes.vars.id}}) }}
                                        </div>
                                    </div>

                                    <!-- Région -->
                                    <div class=\"form-group row\">
                                        <label for=\"{{ form.region_id.vars.id }}\" class=\"col-sm-2 col-form-label\">Région</label>
                                        <div class=\"col-sm-10\">
                                            {{ form_widget(form.region_id, {'attr': {'class': 'form-control', 'id': form.region_id.vars.id}}) }}
                                        </div>
                                    </div>

                                    
                                </div>
                                <!-- /.card-body -->

                                <!-- Card Footer -->
                                <div class=\"card-footer\">
                                    <button type=\"submit\" class=\"btn btn-info\">Mettre à jour</button>
                                    <a href=\"{{ path('app_lieucamping_index') }}\" class=\"btn btn-default float-right\">Annuler</a>
                                </div>
                                <!-- /.card-footer -->
                            {{ form_end(form) }}
                            <!-- Form End -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
{% endblock %}
", "lieucamping/edit.html.twig", "C:\\xampp\\htdocs\\projetC\\templates\\lieucamping\\edit.html.twig");
    }
}
