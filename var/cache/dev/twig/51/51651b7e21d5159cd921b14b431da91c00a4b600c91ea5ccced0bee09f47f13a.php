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

/* lieucamping/new.html.twig */
class __TwigTemplate_f484e761bf6bb3c5ba8cba7c6aed9873d87a7b72f60845a345e3590814b2bb0c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieucamping/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lieucamping/new.html.twig"));

        $this->parent = $this->loadTemplate("lieucamping/index.html.twig", "lieucamping/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
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

        yield "Modifier le centre de camping";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "    <div class=\"wrapper\">
        <<!-- Navbar -->
        <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
                </li>
                <li class=\"nav-item d-none d-sm-inline-block\">
                    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\">Home</a>
                </li>
                <li class=\"nav-item d-none d-sm-inline-block\">
                    <a href=\"";
        // line 16
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
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"d-block\">Camping Center</a>
                    </div>
                </div>
                <nav class=\"mt-2\">
                    <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieucamping_index");
        yield "\" class=\"nav-link\">
                                <i class=\"nav-icon fas fa-mountain\"></i>
                                <p>Centre de camping</p>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"";
        // line 38
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
                <div class=\"col-12\">
                    <div class=\"card card-info\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">Formulaire de modification</h3>
                        </div>
                        <!-- /.card-header -->
                        ";
        // line 55
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_start');
        yield "
                            <div class=\"card-body\">
                                <div class=\"form-group row\">
                                    <label for=\"inputNom\" class=\"col-sm-2 col-form-label\">Nom</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "nom", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "id" => "inputNom"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputDescription\" class=\"col-sm-2 col-form-label\">Description</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "description", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control", "id" => "inputDescription"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "photo", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Photo</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "photo", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "photo", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72)]]);
        yield "
                                        
                                        ";
        // line 74
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieucamping"]) || array_key_exists("lieucamping", $context) ? $context["lieucamping"] : (function () { throw new RuntimeError('Variable "lieucamping" does not exist.', 74, $this->source); })()), "photo", [], "any", false, false, false, 74)) {
            // line 75
            yield "                                            <div class=\"mt-3\">
                                                <label>Image actuelle :</label><br>
                                                <img src=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["lieucamping"]) || array_key_exists("lieucamping", $context) ? $context["lieucamping"] : (function () { throw new RuntimeError('Variable "lieucamping" does not exist.', 77, $this->source); })()), "photo", [], "any", false, false, false, 77))), "html", null, true);
            yield "\" alt=\"Photo\" width=\"100\">
                                            </div>
                                        ";
        }
        // line 80
        yield "                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputCapacite\" class=\"col-sm-2 col-form-label\">Capacité</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "capacite", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control", "id" => "inputCapacite"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputRegion\" class=\"col-sm-2 col-form-label\">Région</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "region_id", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control", "id" => "inputRegion"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputcoordonner\" class=\"col-sm-2 col-form-label\">Coordonner</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "coordonner", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-control", "id" => "inputcoordonner"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputplace\" class=\"col-sm-2 col-form-label\">Places restantes</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "PlacesRestantes", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-control", "id" => "inputplace"]]);
        yield "
                                    </div>
                                </div>
        

                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer\">
                                
                                <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieucamping_index");
        yield "\" class=\"btn btn-default float-right\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-info\">Mettre à jour</button>
                            </div>
                        ";
        // line 115
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), 'form_end');
        yield "
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "lieucamping/new.html.twig";
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
        return array (  265 => 115,  259 => 112,  247 => 103,  238 => 97,  229 => 91,  220 => 85,  213 => 80,  207 => 77,  203 => 75,  201 => 74,  196 => 72,  191 => 70,  184 => 66,  175 => 60,  167 => 55,  147 => 38,  138 => 32,  129 => 26,  116 => 16,  110 => 13,  100 => 5,  87 => 4,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'lieucamping/index.html.twig' %}
{% block title %}Modifier le centre de camping{% endblock %}

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
                            <a href=\"{{ path('app_lieucamping_index') }}\" class=\"nav-link\">
                                <i class=\"nav-icon fas fa-mountain\"></i>
                                <p>Centre de camping</p>
                            </a>
                        </li>
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
                <div class=\"col-12\">
                    <div class=\"card card-info\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">Formulaire de modification</h3>
                        </div>
                        <!-- /.card-header -->
                        {{ form_start(form) }}
                            <div class=\"card-body\">
                                <div class=\"form-group row\">
                                    <label for=\"inputNom\" class=\"col-sm-2 col-form-label\">Nom</label>
                                    <div class=\"col-sm-10\">
                                        {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'id': 'inputNom'}}) }}
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputDescription\" class=\"col-sm-2 col-form-label\">Description</label>
                                    <div class=\"col-sm-10\">
                                        {{ form_widget(form.description, {'attr': {'class': 'form-control', 'id': 'inputDescription'}}) }}
                                    </div>
                                </div>
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
                                <div class=\"form-group row\">
                                    <label for=\"inputCapacite\" class=\"col-sm-2 col-form-label\">Capacité</label>
                                    <div class=\"col-sm-10\">
                                        {{ form_widget(form.capacite, {'attr': {'class': 'form-control', 'id': 'inputCapacite'}}) }}
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputRegion\" class=\"col-sm-2 col-form-label\">Région</label>
                                    <div class=\"col-sm-10\">
                                        {{ form_widget(form.region_id, {'attr': {'class': 'form-control', 'id': 'inputRegion'}}) }}
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputcoordonner\" class=\"col-sm-2 col-form-label\">Coordonner</label>
                                    <div class=\"col-sm-10\">
                                        {{ form_widget(form.coordonner, {'attr': {'class': 'form-control', 'id': 'inputcoordonner'}}) }}
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputplace\" class=\"col-sm-2 col-form-label\">Places restantes</label>
                                    <div class=\"col-sm-10\">
                                        {{ form_widget(form.PlacesRestantes, {'attr': {'class': 'form-control', 'id': 'inputplace'}}) }}
                                    </div>
                                </div>
        

                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer\">
                                
                                <a href=\"{{ path('app_lieucamping_index') }}\" class=\"btn btn-default float-right\">Annuler</a>
                                <button type=\"submit\" class=\"btn btn-info\">Mettre à jour</button>
                            </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "lieucamping/new.html.twig", "C:\\xampp\\htdocs\\projetC\\templates\\lieucamping\\new.html.twig");
    }
}
