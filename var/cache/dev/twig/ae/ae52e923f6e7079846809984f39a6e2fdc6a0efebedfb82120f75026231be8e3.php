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

/* base.html.twig */
class __TwigTemplate_33261ec038afb9d04ae373235e564b4d7d2db3b122f77245edb0b1f91e73f7cb extends Template
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
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'nav' => [$this, 'block_nav'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
    ";
        // line 3
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 25
        yield "
    ";
        // line 26
        yield from $this->unwrap()->yieldBlock('nav', $context, $blocks);
        // line 47
        yield "
    <body>
        ";
        // line 49
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 245
        yield "    </body>

    ";
        // line 247
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 270
        yield "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        yield "    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title>Grayscale - Start Bootstrap Theme</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/favicon.ico"), "html", null, true);
        yield "\" />
        
        <!-- Font Awesome icons (free version) -->
        <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
        
        <!-- Google fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Varela+Round\" rel=\"stylesheet\" />
        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\" />
        
        <!-- Core theme CSS (includes Bootstrap) -->
        ";
        // line 20
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 23
        yield "    </head>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 20
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

        // line 21
        yield "        <link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 27
        yield "    <!-- Navigation Bar -->
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
        <div class=\"container px-4 px-lg-5\">
            <a class=\"navbar-brand\" href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Cumping Time</a>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                Menu
                <i class=\"fas fa-bars\"></i>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#about\">About</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#projects\">Camp Center</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#signup\">Contact</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#service\">Service</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Login/SignUp</a></li>
                </ul>
            </div>
        </div>
    </nav>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 49
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

        // line 50
        yield "        <body id=\"page-top\">
            <!-- Navigation-->
           
            <!-- Masthead-->
            <header class=\"masthead\">
                <div class=\"container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center\">
                    <div class=\"d-flex justify-content-center\">
                        <div class=\"text-center\">
                            <h1 class=\"mx-auto my-0 text-uppercase\">Cumping Time </h1>
                            <h2 class=\"text-white-50 mx-auto mt-2 mb-5\">Lets descoring our Tunisia  .</h2>
                            <a class=\"btn btn-primary\" href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lieu_camping");
        yield "\">Get Started</a>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About-->
            <section class=\"about-section text-center\" id=\"about\">
                <div class=\"container px-4 px-lg-5\">
                    <div class=\"row gx-4 gx-lg-5 justify-content-center\">
                        <div class=\"col-lg-8\">
                            <h2 class=\"text-white mb-4\"> About us</h2>
                            
                            <p class=\"text-white-50\">
                            notre application web consiste a faciliter les recherches pour avoir un bon endroit pour camper en tunisie 
                            </p>
                        </div>
                    </div>
                    <img class=\"img-fluid\" src=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/ipad.png"), "html", null, true);
        yield "\" alt=\"...\" />
                </div>
            </section>
            <!-- Projects-->
            <section class=\"projects-section bg-light\" id=\"projects\">
                <div class=\"container px-4 px-lg-5\">
                    <!-- Featured Project Row-->
                    <div class=\"row gx-0 mb-4 mb-lg-5 align-items-center\">
                        <div class=\"col-xl-8 col-lg-7\"><img class=\"img-fluid mb-3 mb-lg-0\" src=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bg.jpg"), "html", null, true);
        yield "\" alt=\"...\" /></div>
                        <div class=\"col-xl-4 col-lg-5\">
                            <div class=\"featured-text text-center text-lg-left\">
                                <h4>Shoreline</h4>
                                <p class=\"text-black-50 mb-0\">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
                            </div>
                        </div>
                    </div>
                    <!-- Project One Row-->
                    <div class=\"row gx-0 mb-5 mb-lg-0 justify-content-center\">
                        ";
        // line 95
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["lieuxCamping"]) || array_key_exists("lieuxCamping", $context) ? $context["lieuxCamping"] : (function () { throw new RuntimeError('Variable "lieuxCamping" does not exist.', 95, $this->source); })()))) {
            // line 96
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lieuxCamping"]) || array_key_exists("lieuxCamping", $context) ? $context["lieuxCamping"] : (function () { throw new RuntimeError('Variable "lieuxCamping" does not exist.', 96, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
                // line 97
                yield "                                <div class=\"col-lg-6\">
                                    <img class=\"img-fluid\" src=\"";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "photo", [], "any", false, false, false, 98))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 98), "html", null, true);
                yield "\" >
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"bg-black text-center h-100 project\">
                                        <div class=\"d-flex h-100\">
                                            <div class=\"project-text w-100 my-auto text-center text-lg-left\">
                                                 <h4 class=\"text-white\">";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "nom", [], "any", false, false, false, 104), "html", null, true);
                yield "<br>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "regionId", [], "any", false, false, false, 104), "getNomRegion", [], "method", false, false, false, 104), "html", null, true);
                yield "</h4>
                                                
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lieu'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            yield "    
                        ";
        }
        // line 112
        yield "                    </div>
                 
                
                    <!-- Project Two Row-->
                    
                    
                </div>
          
                
            </section>
            <!-- Signup-->
            <section class=\"signup-section\" id=\"signup\">
                <div class=\"container px-4 px-lg-5\">
                    <div class=\"row gx-4 gx-lg-5\">
                        <div class=\"col-md-10 col-lg-8 mx-auto text-center\">
                            <i class=\"far fa-paper-plane fa-2x mb-2 text-white\"></i>
                            <h2 class=\"text-white mb-5\">Subscribe to receive updates!</h2>
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form class=\"form-signup\" id=\"contactForm\" data-sb-form-api-token=\"API_TOKEN\">
                                <!-- Email address input-->
                                <div class=\"row input-group-newsletter\">
                                    <div class=\"col\"><input class=\"form-control\" id=\"emailAddress\" type=\"email\" placeholder=\"Enter email address...\" aria-label=\"Enter email address...\" data-sb-validations=\"required,email\" /></div>
                                    <div class=\"col-auto\"><button class=\"btn btn-primary disabled\" id=\"submitButton\" type=\"submit\">Notify Me!</button></div>
                                </div>
                                <div class=\"invalid-feedback mt-2\" data-sb-feedback=\"emailAddress:required\">An email is required.</div>
                                <div class=\"invalid-feedback mt-2\" data-sb-feedback=\"emailAddress:email\">Email is not valid.</div>
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class=\"d-none\" id=\"submitSuccessMessage\">
                                    <div class=\"text-center mb-3 mt-2 text-white\">
                                        <div class=\"fw-bolder\">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br />
                                        <a href=\"https://startbootstrap.com/solution/contact-forms\">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class=\"d-none\" id=\"submitErrorMessage\">
                                    <div class=\"text-center text-danger mb-3 mt-2\">Error sending message!</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Services-->
            <section class=\"services-section bg-light\" id=\"service\">
                <div class=\"container px-4 px-lg-5\">
                    <div class=\"row gx-4 gx-lg-5\">
                        <div class=\"col-lg-3 col-md-6 text-center\">
                            <div class=\"mt-5\">
                                <div class=\"mb-2\"><i class=\"fas fa-4x fa-gem text-primary\"></i></div>
                                <h3 class=\"h4 mb-2\">Sturdy Themes</h3>
                                <p class=\"text-muted mb-0\">Our themes are updated regularly to keep them bug free!</p>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6 text-center\">
                            <div class=\"mt-5\">
                                <div class=\"mb-2\"><i class=\"fas fa-4x fa-laptop-code text-primary\"></i></div>
                                <h3 class=\"h4 mb-2\">Up to Date</h3>
                                <p class=\"text-muted mb-0\">All dependencies are kept current to keep things fresh.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6 text-center\">
                            <div class=\"mt-5\">
                                <div class=\"mb-2\"><i class=\"fas fa-4x fa-globe text-primary\"></i></div>
                                <h3 class=\"h4 mb-2\">Ready to Publish</h3>
                                <p class=\"text-muted mb-0\">You can use this design as is, or you can make changes!</p>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6 text-center\">
                            <div class=\"mt-5\">
                                <div class=\"mb-2\"><i class=\"fas fa-4x fa-heart text-primary\"></i></div>
                                <h3 class=\"h4 mb-2\">Made with Love</h3>
                                <p class=\"text-muted mb-0\">Is it really open source if it's not made with love?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>    
        
        
        
            <!-- Contact-->
            <section class=\"contact-section bg-black\">
                <div class=\"container px-4 px-lg-5\">
                    <div class=\"row gx-4 gx-lg-5\">
                        <div class=\"col-md-4 mb-3 mb-md-0\">
                            <div class=\"card py-4 h-100\">
                                <div class=\"card-body text-center\">
                                    <i class=\"fas fa-map-marked-alt text-primary mb-2\"></i>
                                    <h4 class=\"text-uppercase m-0\">Address</h4>
                                    <hr class=\"my-4 mx-auto\" />
                                    <div class=\"small text-black-50\">4923 Market Street, Orlando FL</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3 mb-md-0\">
                            <div class=\"card py-4 h-100\">
                                <div class=\"card-body text-center\">
                                    <i class=\"fas fa-envelope text-primary mb-2\"></i>
                                    <h4 class=\"text-uppercase m-0\">Email</h4>
                                    <hr class=\"my-4 mx-auto\" />
                                    <div class=\"small text-black-50\"><a href=\"#!\">hello@yourdomain.com</a></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3 mb-md-0\">
                            <div class=\"card py-4 h-100\">
                                <div class=\"card-body text-center\">
                                    <i class=\"fas fa-mobile-alt text-primary mb-2\"></i>
                                    <h4 class=\"text-uppercase m-0\">Phone</h4>
                                    <hr class=\"my-4 mx-auto\" />
                                    <div class=\"small text-black-50\">+1 (555) 902-8832</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 247
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 248
        yield "    <!-- Footer -->
    <div class=\"social d-flex justify-content-center\">
        <a class=\"mx-2\" href=\"#!\"><i class=\"fab fa-twitter\"></i></a>
        <a class=\"mx-2\" href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a>
        <a class=\"mx-2\" href=\"#!\"><i class=\"fab fa-github\"></i></a>
    </div>

    <footer class=\"footer bg-black small text-center text-white-50\">
        <div class=\"container px-4 px-lg-5\">
            Copyright &copy; Your Website 2023
        </div>
    </footer>

    <!-- Bootstrap core JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\"></script>

    <!-- Core theme JS -->
    <script src=\"";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        yield "\"></script>

    <!-- SB Forms JS (Contact forms) -->
    <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
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
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  496 => 265,  477 => 248,  464 => 247,  321 => 112,  317 => 110,  302 => 104,  291 => 98,  288 => 97,  283 => 96,  281 => 95,  268 => 85,  257 => 77,  237 => 60,  225 => 50,  212 => 49,  195 => 41,  181 => 30,  176 => 27,  163 => 26,  149 => 21,  136 => 20,  124 => 23,  122 => 20,  109 => 10,  101 => 4,  88 => 3,  76 => 270,  74 => 247,  70 => 245,  68 => 49,  64 => 47,  62 => 26,  59 => 25,  57 => 3,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    {% block head %}
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title>Grayscale - Start Bootstrap Theme</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/favicon.ico') }}\" />
        
        <!-- Font Awesome icons (free version) -->
        <script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>
        
        <!-- Google fonts -->
        <link href=\"https://fonts.googleapis.com/css?family=Varela+Round\" rel=\"stylesheet\" />
        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\" />
        
        <!-- Core theme CSS (includes Bootstrap) -->
        {% block stylesheets %}
        <link href=\"{{ asset('css/styles.css') }}\" rel=\"stylesheet\" />
        {% endblock %}
    </head>
    {% endblock %}

    {% block nav %}
    <!-- Navigation Bar -->
    <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
        <div class=\"container px-4 px-lg-5\">
            <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">Cumping Time</a>
            <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                Menu
                <i class=\"fas fa-bars\"></i>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#about\">About</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#projects\">Camp Center</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#signup\">Contact</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#service\">Service</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_login') }}\">Login/SignUp</a></li>
                </ul>
            </div>
        </div>
    </nav>
    {% endblock %}

    <body>
        {% block body %}
        <body id=\"page-top\">
            <!-- Navigation-->
           
            <!-- Masthead-->
            <header class=\"masthead\">
                <div class=\"container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center\">
                    <div class=\"d-flex justify-content-center\">
                        <div class=\"text-center\">
                            <h1 class=\"mx-auto my-0 text-uppercase\">Cumping Time </h1>
                            <h2 class=\"text-white-50 mx-auto mt-2 mb-5\">Lets descoring our Tunisia  .</h2>
                            <a class=\"btn btn-primary\" href=\"{{ path('app_lieu_camping') }}\">Get Started</a>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About-->
            <section class=\"about-section text-center\" id=\"about\">
                <div class=\"container px-4 px-lg-5\">
                    <div class=\"row gx-4 gx-lg-5 justify-content-center\">
                        <div class=\"col-lg-8\">
                            <h2 class=\"text-white mb-4\"> About us</h2>
                            
                            <p class=\"text-white-50\">
                            notre application web consiste a faciliter les recherches pour avoir un bon endroit pour camper en tunisie 
                            </p>
                        </div>
                    </div>
                    <img class=\"img-fluid\" src=\"{{asset('assets/img/ipad.png')}}\" alt=\"...\" />
                </div>
            </section>
            <!-- Projects-->
            <section class=\"projects-section bg-light\" id=\"projects\">
                <div class=\"container px-4 px-lg-5\">
                    <!-- Featured Project Row-->
                    <div class=\"row gx-0 mb-4 mb-lg-5 align-items-center\">
                        <div class=\"col-xl-8 col-lg-7\"><img class=\"img-fluid mb-3 mb-lg-0\" src=\"{{asset('assets/img/bg.jpg')}}\" alt=\"...\" /></div>
                        <div class=\"col-xl-4 col-lg-5\">
                            <div class=\"featured-text text-center text-lg-left\">
                                <h4>Shoreline</h4>
                                <p class=\"text-black-50 mb-0\">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
                            </div>
                        </div>
                    </div>
                    <!-- Project One Row-->
                    <div class=\"row gx-0 mb-5 mb-lg-0 justify-content-center\">
                        {% if lieuxCamping is not empty %}
                            {% for lieu in lieuxCamping %}
                                <div class=\"col-lg-6\">
                                    <img class=\"img-fluid\" src=\"{{ asset('uploads/photos/' ~ lieu.photo) }}\" alt=\"{{ lieu.nom }}\" >
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"bg-black text-center h-100 project\">
                                        <div class=\"d-flex h-100\">
                                            <div class=\"project-text w-100 my-auto text-center text-lg-left\">
                                                 <h4 class=\"text-white\">{{ lieu.nom }}<br>{{ lieu.regionId.getNomRegion() }}</h4>
                                                
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}    
                        {%endif%}
                    </div>
                 
                
                    <!-- Project Two Row-->
                    
                    
                </div>
          
                
            </section>
            <!-- Signup-->
            <section class=\"signup-section\" id=\"signup\">
                <div class=\"container px-4 px-lg-5\">
                    <div class=\"row gx-4 gx-lg-5\">
                        <div class=\"col-md-10 col-lg-8 mx-auto text-center\">
                            <i class=\"far fa-paper-plane fa-2x mb-2 text-white\"></i>
                            <h2 class=\"text-white mb-5\">Subscribe to receive updates!</h2>
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form class=\"form-signup\" id=\"contactForm\" data-sb-form-api-token=\"API_TOKEN\">
                                <!-- Email address input-->
                                <div class=\"row input-group-newsletter\">
                                    <div class=\"col\"><input class=\"form-control\" id=\"emailAddress\" type=\"email\" placeholder=\"Enter email address...\" aria-label=\"Enter email address...\" data-sb-validations=\"required,email\" /></div>
                                    <div class=\"col-auto\"><button class=\"btn btn-primary disabled\" id=\"submitButton\" type=\"submit\">Notify Me!</button></div>
                                </div>
                                <div class=\"invalid-feedback mt-2\" data-sb-feedback=\"emailAddress:required\">An email is required.</div>
                                <div class=\"invalid-feedback mt-2\" data-sb-feedback=\"emailAddress:email\">Email is not valid.</div>
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <div class=\"d-none\" id=\"submitSuccessMessage\">
                                    <div class=\"text-center mb-3 mt-2 text-white\">
                                        <div class=\"fw-bolder\">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br />
                                        <a href=\"https://startbootstrap.com/solution/contact-forms\">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <div class=\"d-none\" id=\"submitErrorMessage\">
                                    <div class=\"text-center text-danger mb-3 mt-2\">Error sending message!</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Services-->
            <section class=\"services-section bg-light\" id=\"service\">
                <div class=\"container px-4 px-lg-5\">
                    <div class=\"row gx-4 gx-lg-5\">
                        <div class=\"col-lg-3 col-md-6 text-center\">
                            <div class=\"mt-5\">
                                <div class=\"mb-2\"><i class=\"fas fa-4x fa-gem text-primary\"></i></div>
                                <h3 class=\"h4 mb-2\">Sturdy Themes</h3>
                                <p class=\"text-muted mb-0\">Our themes are updated regularly to keep them bug free!</p>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6 text-center\">
                            <div class=\"mt-5\">
                                <div class=\"mb-2\"><i class=\"fas fa-4x fa-laptop-code text-primary\"></i></div>
                                <h3 class=\"h4 mb-2\">Up to Date</h3>
                                <p class=\"text-muted mb-0\">All dependencies are kept current to keep things fresh.</p>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6 text-center\">
                            <div class=\"mt-5\">
                                <div class=\"mb-2\"><i class=\"fas fa-4x fa-globe text-primary\"></i></div>
                                <h3 class=\"h4 mb-2\">Ready to Publish</h3>
                                <p class=\"text-muted mb-0\">You can use this design as is, or you can make changes!</p>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6 text-center\">
                            <div class=\"mt-5\">
                                <div class=\"mb-2\"><i class=\"fas fa-4x fa-heart text-primary\"></i></div>
                                <h3 class=\"h4 mb-2\">Made with Love</h3>
                                <p class=\"text-muted mb-0\">Is it really open source if it's not made with love?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>    
        
        
        
            <!-- Contact-->
            <section class=\"contact-section bg-black\">
                <div class=\"container px-4 px-lg-5\">
                    <div class=\"row gx-4 gx-lg-5\">
                        <div class=\"col-md-4 mb-3 mb-md-0\">
                            <div class=\"card py-4 h-100\">
                                <div class=\"card-body text-center\">
                                    <i class=\"fas fa-map-marked-alt text-primary mb-2\"></i>
                                    <h4 class=\"text-uppercase m-0\">Address</h4>
                                    <hr class=\"my-4 mx-auto\" />
                                    <div class=\"small text-black-50\">4923 Market Street, Orlando FL</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3 mb-md-0\">
                            <div class=\"card py-4 h-100\">
                                <div class=\"card-body text-center\">
                                    <i class=\"fas fa-envelope text-primary mb-2\"></i>
                                    <h4 class=\"text-uppercase m-0\">Email</h4>
                                    <hr class=\"my-4 mx-auto\" />
                                    <div class=\"small text-black-50\"><a href=\"#!\">hello@yourdomain.com</a></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4 mb-3 mb-md-0\">
                            <div class=\"card py-4 h-100\">
                                <div class=\"card-body text-center\">
                                    <i class=\"fas fa-mobile-alt text-primary mb-2\"></i>
                                    <h4 class=\"text-uppercase m-0\">Phone</h4>
                                    <hr class=\"my-4 mx-auto\" />
                                    <div class=\"small text-black-50\">+1 (555) 902-8832</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
        {% endblock %}
    </body>

    {% block footer %}
    <!-- Footer -->
    <div class=\"social d-flex justify-content-center\">
        <a class=\"mx-2\" href=\"#!\"><i class=\"fab fa-twitter\"></i></a>
        <a class=\"mx-2\" href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a>
        <a class=\"mx-2\" href=\"#!\"><i class=\"fab fa-github\"></i></a>
    </div>

    <footer class=\"footer bg-black small text-center text-white-50\">
        <div class=\"container px-4 px-lg-5\">
            Copyright &copy; Your Website 2023
        </div>
    </footer>

    <!-- Bootstrap core JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\"></script>

    <!-- Core theme JS -->
    <script src=\"{{ asset('js/scripts.js') }}\"></script>

    <!-- SB Forms JS (Contact forms) -->
    <script src=\"https://cdn.startbootstrap.com/sb-forms-latest.js\"></script>
    {% endblock %}
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\projetC\\templates\\base.html.twig");
    }
}
