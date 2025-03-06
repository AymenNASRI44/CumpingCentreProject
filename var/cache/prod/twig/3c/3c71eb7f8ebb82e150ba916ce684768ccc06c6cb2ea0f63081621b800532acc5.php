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
class __TwigTemplate_9046b55a4ed76c914b0b9d095f1af103c55c5be21f16cc2a50baafd764dcc999 extends Template
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
        $this->parent = $this->loadTemplate("lieucamping/index.html.twig", "lieucamping/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Modifier le centre de camping";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "
                            <div class=\"card-body\">
                                <div class=\"form-group row\">
                                    <label for=\"inputNom\" class=\"col-sm-2 col-form-label\">Nom</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "nom", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "id" => "inputNom"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputDescription\" class=\"col-sm-2 col-form-label\">Description</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control", "id" => "inputDescription"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "photo", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70), "html", null, true);
        yield "\" class=\"col-sm-2 col-form-label\">Photo</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "photo", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "photo", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72)]]);
        yield "
                                        
                                        ";
        // line 74
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["lieucamping"] ?? null), "photo", [], "any", false, false, false, 74)) {
            // line 75
            yield "                                            <div class=\"mt-3\">
                                                <label>Image actuelle :</label><br>
                                                <img src=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, ($context["lieucamping"] ?? null), "photo", [], "any", false, false, false, 77))), "html", null, true);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "capacite", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control", "id" => "inputCapacite"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputRegion\" class=\"col-sm-2 col-form-label\">Région</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "region_id", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control", "id" => "inputRegion"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputcoordonner\" class=\"col-sm-2 col-form-label\">Coordonner</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "coordonner", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-control", "id" => "inputcoordonner"]]);
        yield "
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"inputplace\" class=\"col-sm-2 col-form-label\">Places restantes</label>
                                    <div class=\"col-sm-10\">
                                        ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "PlacesRestantes", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-control", "id" => "inputplace"]]);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
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
        return array (  235 => 115,  229 => 112,  217 => 103,  208 => 97,  199 => 91,  190 => 85,  183 => 80,  177 => 77,  173 => 75,  171 => 74,  166 => 72,  161 => 70,  154 => 66,  145 => 60,  137 => 55,  117 => 38,  108 => 32,  99 => 26,  86 => 16,  80 => 13,  70 => 5,  63 => 4,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "lieucamping/new.html.twig", "C:\\xampp\\htdocs\\projetC\\templates\\lieucamping\\new.html.twig");
    }
}
