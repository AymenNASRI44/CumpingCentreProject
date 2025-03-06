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
class __TwigTemplate_eb66ef32b2c2d6fe6e4340feb01fa45e08520a105ef80222fd392f7b1e19540d extends Template
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
        return "user/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent = $this->loadTemplate("user/index.html.twig", "user/edit.html.twig", 1);
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
        <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"fas fa-bars\"></i></a>
                </li>
                <li class=\"nav-item d-none d-sm-inline-block\">
                    <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link\">Home</a>
                </li>
                <li class=\"nav-item d-none d-sm-inline-block\">
                    <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"nav-link\">dashborad</a>
                </li>
            </ul>
        </nav>
        
                <!-- Main Sidebar Container -->
                <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
                   
        
                    <!-- Sidebar -->
                    <div class=\"sidebar\">
                        <!-- Sidebar user (optional) -->
                        <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                            
                            <div class=\"info\">
                                <a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"d-block\">Camping Center</a>
                            </div>
                              
                        </div>
                        <nav class=\"mt-2\">
                            <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                              <li class=\"nav-item\">
                                <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieucamping_index");
        yield "\" class=\"nav-link\">
                                  <i class=\"nav-icon fas fa-mountain\"></i>
                                  <p>
                                    Centre de camping 
                                  </p>
                                </a>
                              </li>
                              <li class=\"nav-item\">
                                <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_crud_index");
        yield "\" class=\"nav-link\">
                                  <i class=\"nav-icon fas fa-calendar\"></i>
                                  <p>
                                    Reservation 
                                  </p>
                                </a>
                              </li>
                              
                            </ul>
                          </nav>
                        <!-- /.sidebar-menu -->
                    </div>
                    <!-- /.sidebar -->
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
        // line 89
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        yield "
                            <div class=\"card-body\">
                                <div class=\"form-group row\">
                                    <label for=\"inputEmail3\" class=\"col-sm-2 col-form-label\">Email</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "email", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control", "id" => "inputEmail3"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"form-group row\" style=\"display: none;\">
                                    <label for=\"inputPassword3\" class=\"col-sm-2 col-form-label\">Mot de passe</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "password", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "form-control", "id" => "inputPassword3"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"form-group row\">    
                                    <label for=\"inputNom\" class=\"col-sm-2 col-form-label\">Nom</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "nom", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control", "id" => "inputNom"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputPrenom\" class=\"col-sm-2 col-form-label\">Prénom</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "prenom", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control", "id" => "inputPrenom"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "id_region", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "id", [], "any", false, false, false, 116), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Région</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "id_region", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "id_region", [], "any", false, false, false, 118), "vars", [], "any", false, false, false, 118), "id", [], "any", false, false, false, 118)]]);
        yield "
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class=\"card-footer\">
                                <button type=\"submit\" class=\"btn btn-info\">Mettre à jour</button>
                                <a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-default float-right\">Annuler</a>
                            </div>
                            <!-- /.card-footer -->
                        ";
        // line 129
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), 'form_end');
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
        return array (  289 => 129,  283 => 126,  272 => 118,  267 => 116,  260 => 112,  251 => 106,  242 => 100,  233 => 94,  225 => 89,  184 => 51,  173 => 43,  163 => 36,  145 => 21,  139 => 18,  130 => 11,  117 => 10,  94 => 8,  81 => 5,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'user/index.html.twig' %}

{% block script %}
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
    <script src=\"{{ asset('js/alert.js') }}\"></script>
{% endblock script %}

{% block title %}Modifier l'utilisateur{% endblock %}

{% block body %}
    <div class=\"wrapper\">
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
        
                <!-- Main Sidebar Container -->
                <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
                   
        
                    <!-- Sidebar -->
                    <div class=\"sidebar\">
                        <!-- Sidebar user (optional) -->
                        <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                            
                            <div class=\"info\">
                                <a href=\"{{path('app_home')}}\" class=\"d-block\">Camping Center</a>
                            </div>
                              
                        </div>
                        <nav class=\"mt-2\">
                            <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                              <li class=\"nav-item\">
                                <a href=\"{{path('app_lieucamping_index')}}\" class=\"nav-link\">
                                  <i class=\"nav-icon fas fa-mountain\"></i>
                                  <p>
                                    Centre de camping 
                                  </p>
                                </a>
                              </li>
                              <li class=\"nav-item\">
                                <a href=\"{{ path('app_reservation_crud_index') }}\" class=\"nav-link\">
                                  <i class=\"nav-icon fas fa-calendar\"></i>
                                  <p>
                                    Reservation 
                                  </p>
                                </a>
                              </li>
                              
                            </ul>
                          </nav>
                        <!-- /.sidebar-menu -->
                    </div>
                    <!-- /.sidebar -->
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
                                <div class=\"form-group row\" style=\"display: none;\">
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
                                    <label for=\"{{ form.id_region.vars.id }}\" class=\"col-sm-2 col-form-label\">Région</label>
                                    <div class=\"col-sm-10\">
                                        {{ form_widget(form.id_region, {'attr': {'class': 'form-control', 'id': form.id_region.vars.id}}) }}
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
