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
        return "admin/dashboard/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieucamping/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieucamping/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard/index.html.twig", "lieucamping/edit.html.twig", 1);
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
        yield "    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Edit Lieucamping</h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieucamping_index");
        yield "\">Back to List</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
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
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        yield "
                                <div class=\"card-body\">
                                    <!-- Nom -->
                                    <div class=\"form-group row\">
                                        <label for=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Nom</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "nom", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "nom", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41)]]);
        yield "
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class=\"form-group row\">
                                        <label for=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "description", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Description</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49)]]);
        yield "
                                        </div>
                                    </div>

                                    <!-- Coordonnées -->
                                    <div class=\"form-group row\">
                                        <label for=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "coordonner", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Coordonnées</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "coordonner", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "coordonner", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57)]]);
        yield "
                                        </div>
                                    </div>

                                    <!-- Photo -->
                                    <<!-- edit.html.twig -->

                                    <div class=\"form-group row\">
                                        <label for=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "photo", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Photo</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "photo", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "photo", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67)]]);
        yield "
                                            
                                            ";
        // line 69
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieucamping"]) || array_key_exists("lieucamping", $context) ? $context["lieucamping"] : (function () { throw new RuntimeError('Variable "lieucamping" does not exist.', 69, $this->source); })()), "photo", [], "any", false, false, false, 69)) {
            // line 70
            yield "                                                <div class=\"mt-3\">
                                                    <label>Image actuelle :</label><br>
                                                    <img src=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieucamping"]) || array_key_exists("lieucamping", $context) ? $context["lieucamping"] : (function () { throw new RuntimeError('Variable "lieucamping" does not exist.', 72, $this->source); })()), "photo", [], "any", false, false, false, 72))), "html", null, true);
            yield "\" alt=\"Photo\" width=\"100\">
                                                </div>
                                            ";
        }
        // line 75
        yield "                                        </div>
                                    </div>
                                    
                                    <!-- Capacité -->
                                    <div class=\"form-group row\">
                                        <label for=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "capacite", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Capacité</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "capacite", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "capacite", [], "any", false, false, false, 82), "vars", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82)]]);
        yield "
                                        </div>
                                    </div>

                                    <!-- Places Restantes -->
                                    <div class=\"form-group row\">
                                        <label for=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "PlacesRestantes", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "id", [], "any", false, false, false, 88), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Places restantes</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "PlacesRestantes", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "PlacesRestantes", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "id", [], "any", false, false, false, 90)]]);
        yield "
                                        </div>
                                    </div>

                                    <!-- Région -->
                                    <div class=\"form-group row\">
                                        <label for=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "region_id", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "id", [], "any", false, false, false, 96), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Région</label>
                                        <div class=\"col-sm-10\">
                                            ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "region_id", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "region_id", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98)]]);
        yield "
                                        </div>
                                    </div>

                                    
                                </div>
                                <!-- /.card-body -->

                                <!-- Card Footer -->
                                <div class=\"card-footer\">
                                    <button type=\"submit\" class=\"btn btn-info\">Mettre à jour</button>
                                    <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieucamping_index");
        yield "\" class=\"btn btn-default float-right\">Annuler</a>
                                </div>
                                <!-- /.card-footer -->
                            ";
        // line 112
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), 'form_end');
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
        return array (  267 => 112,  261 => 109,  247 => 98,  242 => 96,  233 => 90,  228 => 88,  219 => 82,  214 => 80,  207 => 75,  201 => 72,  197 => 70,  195 => 69,  190 => 67,  185 => 65,  174 => 57,  169 => 55,  160 => 49,  155 => 47,  146 => 41,  141 => 39,  134 => 35,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/dashboard/index.html.twig' %}

{% block title %}Edit Lieucamping{% endblock %}

{% block body %}
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Edit Lieucamping</h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_lieucamping_index') }}\">Back to List</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
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
                                            {{ form_widget(form.photo, {'attr': {'class': 'form-control', 'id': form.photo.vars.id}}) }}
                                            
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
