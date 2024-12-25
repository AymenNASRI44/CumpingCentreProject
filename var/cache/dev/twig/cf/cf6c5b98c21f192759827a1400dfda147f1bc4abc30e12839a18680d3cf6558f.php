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

/* user/edit.html.twig */
class __TwigTemplate_6a9ae12611d9d8d7940dd396087718306e2b40f586c6f3af4e085294bc920d26 extends Template
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
            'script' => [$this, 'block_script'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin/dashboard/index.html.twig", "user/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_script(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 4
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
    <script src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/alert.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 8
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

        yield "Modifier l'utilisateur";
        
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
        yield "    <div class=\"wrapper\">
        <!-- Sidebar -->
        <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
            <!-- Sidebar user (optional) -->
            <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                <div class=\"info\">
                    <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"d-block\">Camping Center</a>
                </div>
            </div>

            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                    <!-- Exemple de lien dans la sidebar -->
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-users\"></i>
                            <p>Liste des utilisateurs</p>
                        </a>
                    </li>
                    <!-- Ajouter d'autres éléments de menu si nécessaire -->
                </ul>
            </nav>
        </aside>

        <!-- Content Wrapper -->
        <div class=\"content-wrapper\">
            <!-- Content Header -->
            <section class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                        <div class=\"col-sm-6\">
                            <h1>Modifier l'utilisateur</h1>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main content -->
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card card-info\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">Formulaire de modification</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- Form start -->
                        ";
        // line 57
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        yield "
                            <div class=\"card-body\">
                                <div class=\"form-group row\">
                                    <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Email</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "email", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control", "id" => "inputEmail3"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">Mot de passe</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "password", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control", "id" => "inputPassword3"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputNom\" class=\"col-sm-2 col-form-label\">Nom</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "nom", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control", "id" => "inputNom"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputPrenom\" class=\"col-sm-2 col-form-label\">Prénom</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "prenom", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control", "id" => "inputPrenom"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputRegion\" class=\"col-sm-2 col-form-label\">Région</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "nom_region", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control", "id" => "inputRegion"]]);
        yield "
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer\">
                                <button type=\"submit\" class=\"btn btn-info\">Mettre à jour</button>
                                <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-default float-right\">Annuler</a>
                            </div>
                            <!-- /.card-footer -->
                        ";
        // line 96
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), 'form_end');
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
        return "user/edit.html.twig";
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
        return array (  244 => 96,  238 => 93,  228 => 86,  219 => 80,  210 => 74,  201 => 68,  192 => 62,  184 => 57,  149 => 25,  138 => 17,  130 => 11,  117 => 10,  94 => 8,  81 => 5,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/dashboard/index.html.twig' %}

{% block script %}
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
    <script src=\"{{ asset('js/alert.js') }}\"></script>
{% endblock script %}

{% block title %}Modifier l'utilisateur{% endblock %}

{% block body %}
    <div class=\"wrapper\">
        <!-- Sidebar -->
        <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
            <!-- Sidebar user (optional) -->
            <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                <div class=\"info\">
                    <a href=\"{{ path('app_home') }}\" class=\"d-block\">Camping Center</a>
                </div>
            </div>

            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                    <!-- Exemple de lien dans la sidebar -->
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_user_index') }}\" class=\"nav-link\">
                            <i class=\"nav-icon fas fa-users\"></i>
                            <p>Liste des utilisateurs</p>
                        </a>
                    </li>
                    <!-- Ajouter d'autres éléments de menu si nécessaire -->
                </ul>
            </nav>
        </aside>

        <!-- Content Wrapper -->
        <div class=\"content-wrapper\">
            <!-- Content Header -->
            <section class=\"content-header\">
                <div class=\"container-fluid\">
                    <div class=\"row mb-2\">
                        <div class=\"col-sm-6\">
                            <h1>Modifier l'utilisateur</h1>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main content -->
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"card card-info\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">Formulaire de modification</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- Form start -->
                        {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
                            <div class=\"card-body\">
                                <div class=\"form-group row\">
                                    <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Email</label>
                                    <div class=\"col-sm-10\">
                                        {{ form_widget(form.email, {'attr': {'class': 'form-control', 'id': 'inputEmail3'}}) }}
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">Mot de passe</label>
                                    <div class=\"col-sm-10\">
                                        {{ form_widget(form.password, {'attr': {'class': 'form-control', 'id': 'inputPassword3'}}) }}
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputNom\" class=\"col-sm-2 col-form-label\">Nom</label>
                                    <div class=\"col-sm-10\">
                                        {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'id': 'inputNom'}}) }}
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputPrenom\" class=\"col-sm-2 col-form-label\">Prénom</label>
                                    <div class=\"col-sm-10\">
                                        {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'id': 'inputPrenom'}}) }}
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputRegion\" class=\"col-sm-2 col-form-label\">Région</label>
                                    <div class=\"col-sm-10\">
                                        {{ form_widget(form.nom_region, {'attr': {'class': 'form-control', 'id': 'inputRegion'}}) }}
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer\">
                                <button type=\"submit\" class=\"btn btn-info\">Mettre à jour</button>
                                <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-default float-right\">Annuler</a>
                            </div>
                            <!-- /.card-footer -->
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "user/edit.html.twig", "C:\\xampp\\htdocs\\projetC\\templates\\user\\edit.html.twig");
    }
}
