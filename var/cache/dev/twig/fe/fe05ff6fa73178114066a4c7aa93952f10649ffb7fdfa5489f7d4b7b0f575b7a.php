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

/* @DoctrineMigrations/Collector/migrations.html.twig */
class __TwigTemplate_4e7baf2c834dde1d9fb407c913efec56d71566ff787c30bdb85029cc88ed56d8 extends Template
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
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DoctrineMigrations/Collector/migrations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DoctrineMigrations/Collector/migrations.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@DoctrineMigrations/Collector/migrations.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 4), "unavailable_migrations_count", [], "any", true, true, false, 4)) {
            // line 5
            yield "        ";
            $context["unavailable_migrations"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 5, $this->source); })()), "data", [], "any", false, false, false, 5), "unavailable_migrations_count", [], "any", false, false, false, 5);
            // line 6
            yield "        ";
            $context["new_migrations"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "data", [], "any", false, false, false, 6), "new_migrations", [], "any", false, false, false, 6));
            // line 7
            yield "        ";
            if ((((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 7, $this->source); })()) > 0) || ((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 7, $this->source); })()) > 0))) {
                // line 8
                yield "            ";
                $context["executed_migrations"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "data", [], "any", false, false, false, 8), "executed_migrations", [], "any", false, false, false, 8));
                // line 9
                yield "            ";
                $context["available_migrations"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "data", [], "any", false, false, false, 9), "available_migrations_count", [], "any", false, false, false, 9);
                // line 10
                yield "            ";
                $context["status_color"] = ((((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 10, $this->source); })()) > 0)) ? ("yellow") : (""));
                // line 11
                yield "            ";
                $context["status_color"] = ((((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 11, $this->source); })()) > 0)) ? ("red") : ((isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 11, $this->source); })())));
                // line 12
                yield "
            ";
                // line 13
                $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 14
                    yield "                ";
                    if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 14, $this->source); })()) < 3)) {
                        // line 15
                        yield "                    ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, "@DoctrineMigrations/Collector/icon.svg");
                        yield "
                ";
                    } else {
                        // line 17
                        yield "                    ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, "@DoctrineMigrations/Collector/icon-v3.svg");
                        yield "
                ";
                    }
                    // line 19
                    yield "
                <span class=\"sf-toolbar-value\">";
                    // line 20
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 20, $this->source); })()) + (isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 20, $this->source); })())), "html", null, true);
                    yield "</span>
            ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 22
                yield "
            ";
                // line 23
                $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 24
                    yield "                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Current Migration</b>
                        <span>";
                    // line 27
                    ((((isset($context["executed_migrations"]) || array_key_exists("executed_migrations", $context) ? $context["executed_migrations"] : (function () { throw new RuntimeError('Variable "executed_migrations" does not exist.', 27, $this->source); })()) > 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 27, $this->source); })()), "data", [], "any", false, false, false, 27), "executed_migrations", [], "any", false, false, false, 27)), "version", [], "any", false, false, false, 27), "\\")), "html", null, true)) : (yield "n/a"));
                    yield "</span>
                    </div>
                </div>

                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <span class=\"sf-toolbar-header\">
                            <b>Database Migrations</b>
                        </span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Executed</b>
                        <span class=\"sf-toolbar-status\">";
                    // line 39
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["executed_migrations"]) || array_key_exists("executed_migrations", $context) ? $context["executed_migrations"] : (function () { throw new RuntimeError('Variable "executed_migrations" does not exist.', 39, $this->source); })()), "html", null, true);
                    yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Unavailable</b>
                        <span class=\"sf-toolbar-status ";
                    // line 43
                    yield ((((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 43, $this->source); })()) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 43, $this->source); })()), "html", null, true);
                    yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Available</b>
                        <span class=\"sf-toolbar-status\">";
                    // line 47
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["available_migrations"]) || array_key_exists("available_migrations", $context) ? $context["available_migrations"] : (function () { throw new RuntimeError('Variable "available_migrations" does not exist.', 47, $this->source); })()), "html", null, true);
                    yield "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>New</b>
                        <span class=\"sf-toolbar-status ";
                    // line 51
                    yield ((((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 51, $this->source); })()) > 0)) ? ("sf-toolbar-status-red") : (""));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 51, $this->source); })()), "html", null, true);
                    yield "</span>
                    </div>
                </div>
            ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 55
                yield "
            ";
                // line 56
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 56, $this->source); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 56, $this->source); })())]);
                yield "
        ";
            }
            // line 58
            yield "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 62
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 62), "unavailable_migrations_count", [], "any", true, true, false, 62)) {
            // line 63
            yield "        ";
            $context["unavailable_migrations"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 63, $this->source); })()), "data", [], "any", false, false, false, 63), "unavailable_migrations_count", [], "any", false, false, false, 63);
            // line 64
            yield "        ";
            $context["new_migrations"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 64, $this->source); })()), "data", [], "any", false, false, false, 64), "new_migrations", [], "any", false, false, false, 64));
            // line 65
            yield "        ";
            $context["label"] = ((((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 65, $this->source); })()) > 0)) ? ("label-status-warning") : (""));
            // line 66
            yield "        ";
            $context["label"] = ((((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 66, $this->source); })()) > 0)) ? ("label-status-error") : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 66, $this->source); })())));
            // line 67
            yield "        <span class=\"label ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 67, $this->source); })()), "html", null, true);
            yield "\">
            <span class=\"icon\">
                ";
            // line 69
            if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 69, $this->source); })()) < 3)) {
                // line 70
                yield "                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@DoctrineMigrations/Collector/icon.svg");
                yield "
                ";
            } else {
                // line 72
                yield "                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@DoctrineMigrations/Collector/icon-v3.svg");
                yield "
                ";
            }
            // line 74
            yield "            </span>

            <strong>Migrations</strong>
            ";
            // line 77
            if ((((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 77, $this->source); })()) > 0) || ((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 77, $this->source); })()) > 0))) {
                // line 78
                yield "                <span class=\"count\">
                    <span>";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 79, $this->source); })()) + (isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 79, $this->source); })())), "html", null, true);
                yield "</span>
                </span>
            ";
            }
            // line 82
            yield "        </span>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 87
        yield "    ";
        $context["num_executed_migrations"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 87, $this->source); })()), "data", [], "any", false, false, false, 87), "executed_migrations", [], "any", false, false, false, 87));
        // line 88
        yield "    ";
        $context["num_unavailable_migrations"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 88, $this->source); })()), "data", [], "any", false, false, false, 88), "unavailable_migrations_count", [], "any", false, false, false, 88);
        // line 89
        yield "    ";
        $context["num_available_migrations"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 89, $this->source); })()), "data", [], "any", false, false, false, 89), "available_migrations_count", [], "any", false, false, false, 89);
        // line 90
        yield "    ";
        $context["num_new_migrations"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 90, $this->source); })()), "data", [], "any", false, false, false, 90), "new_migrations", [], "any", false, false, false, 90));
        // line 91
        yield "
    <h2>Doctrine Migrations</h2>
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["num_executed_migrations"]) || array_key_exists("num_executed_migrations", $context) ? $context["num_executed_migrations"] : (function () { throw new RuntimeError('Variable "num_executed_migrations" does not exist.', 95, $this->source); })()), "html", null, true);
        yield "</span>
            <span class=\"label\">Executed</span>
        </div>

        ";
        // line 99
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 99, $this->source); })()) >= 3)) {
            // line 100
            yield "            <div class=\"metric-group\">
        ";
        }
        // line 102
        yield "
        <div class=\"metric\">
            <span class=\"value\">";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["num_unavailable_migrations"]) || array_key_exists("num_unavailable_migrations", $context) ? $context["num_unavailable_migrations"] : (function () { throw new RuntimeError('Variable "num_unavailable_migrations" does not exist.', 104, $this->source); })()), "html", null, true);
        yield "</span>
            <span class=\"label\">Unavailable</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["num_available_migrations"]) || array_key_exists("num_available_migrations", $context) ? $context["num_available_migrations"] : (function () { throw new RuntimeError('Variable "num_available_migrations" does not exist.', 108, $this->source); })()), "html", null, true);
        yield "</span>
            <span class=\"label\">Available</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["num_new_migrations"]) || array_key_exists("num_new_migrations", $context) ? $context["num_new_migrations"] : (function () { throw new RuntimeError('Variable "num_new_migrations" does not exist.', 112, $this->source); })()), "html", null, true);
        yield "</span>
            <span class=\"label\">New</span>
        </div>

        ";
        // line 116
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 116, $this->source); })()) >= 3)) {
            // line 117
            yield "            </div> ";
            // line 118
            yield "        ";
        }
        // line 119
        yield "    </div>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">
                Migrations
                <span class=\"badge ";
        // line 125
        yield ((((isset($context["num_new_migrations"]) || array_key_exists("num_new_migrations", $context) ? $context["num_new_migrations"] : (function () { throw new RuntimeError('Variable "num_new_migrations" does not exist.', 125, $this->source); })()) > 0)) ? ("status-error") : (((((isset($context["num_unavailable_migrations"]) || array_key_exists("num_unavailable_migrations", $context) ? $context["num_unavailable_migrations"] : (function () { throw new RuntimeError('Variable "num_unavailable_migrations" does not exist.', 125, $this->source); })()) > 0)) ? ("status-warning") : (""))));
        yield "\">
                    ";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((isset($context["num_new_migrations"]) || array_key_exists("num_new_migrations", $context) ? $context["num_new_migrations"] : (function () { throw new RuntimeError('Variable "num_new_migrations" does not exist.', 126, $this->source); })()) > 0)) ? ((isset($context["num_new_migrations"]) || array_key_exists("num_new_migrations", $context) ? $context["num_new_migrations"] : (function () { throw new RuntimeError('Variable "num_new_migrations" does not exist.', 126, $this->source); })())) : (((((isset($context["num_unavailable_migrations"]) || array_key_exists("num_unavailable_migrations", $context) ? $context["num_unavailable_migrations"] : (function () { throw new RuntimeError('Variable "num_unavailable_migrations" does not exist.', 126, $this->source); })()) > 0)) ? ((isset($context["num_unavailable_migrations"]) || array_key_exists("num_unavailable_migrations", $context) ? $context["num_unavailable_migrations"] : (function () { throw new RuntimeError('Variable "num_unavailable_migrations" does not exist.', 126, $this->source); })())) : ((isset($context["num_executed_migrations"]) || array_key_exists("num_executed_migrations", $context) ? $context["num_executed_migrations"] : (function () { throw new RuntimeError('Variable "num_executed_migrations" does not exist.', 126, $this->source); })()))))), "html", null, true);
        yield "
                </span>
            </h3>

            <div class=\"tab-content\">
                ";
        // line 131
        yield CoreExtension::callMacro($macros["_self"], "macro_render_migration_details", [(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 131, $this->source); })()), (isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 131, $this->source); })())], 131, $context, $this->getSourceContext());
        yield "
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Configuration</h3>

            <div class=\"tab-content\">
                ";
        // line 139
        yield CoreExtension::callMacro($macros["_self"], "macro_render_configuration_details", [(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 139, $this->source); })()), (isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 139, $this->source); })())], 139, $context, $this->getSourceContext());
        yield "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 145
    public function macro_render_migration_details($__collector__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "collector" => $__collector__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_migration_details"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_migration_details"));

            // line 146
            yield "    <table>
        <thead>
        <tr>
            <th class=\"colored font-normal\">Version</th>
            <th class=\"colored font-normal\">Description</th>
            <th class=\"colored font-normal\">Status</th>
            <th class=\"colored font-normal\">Executed at</th>
            <th class=\"colored font-normal text-right\">Execution time</th>
        </tr>
        </thead>
        ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 156, $this->source); })()), "data", [], "any", false, false, false, 156), "new_migrations", [], "any", false, false, false, 156));
            foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
                // line 157
                yield "            ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_migration", [$context["migration"]], 157, $context, $this->getSourceContext());
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['migration'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            yield "
        ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 160, $this->source); })()), "data", [], "any", false, false, false, 160), "executed_migrations", [], "any", false, false, false, 160)));
            foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
                // line 161
                yield "            ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_migration", [$context["migration"]], 161, $context, $this->getSourceContext());
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['migration'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            yield "    </table>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 166
    public function macro_render_configuration_details($__collector__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "collector" => $__collector__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_configuration_details"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_configuration_details"));

            // line 167
            yield "    <table>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"colored font-normal\">Storage</th>
        </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Type</td>
            <td class=\"font-normal\">";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 175, $this->source); })()), "data", [], "any", false, false, false, 175), "storage", [], "any", false, false, false, 175), "html", null, true);
            yield "</td>
        </tr>
        ";
            // line 177
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 177), "table", [], "any", true, true, false, 177)) {
                // line 178
                yield "            <tr>
                <td class=\"font-normal\">Table Name</td>
                <td class=\"font-normal\">";
                // line 180
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 180, $this->source); })()), "data", [], "any", false, false, false, 180), "table", [], "any", false, false, false, 180), "html", null, true);
                yield "</td>
            </tr>
        ";
            }
            // line 183
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 183), "column", [], "any", true, true, false, 183)) {
                // line 184
                yield "            <tr>
                <td class=\"font-normal\">Column Name</td>
                <td class=\"font-normal\">";
                // line 186
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 186, $this->source); })()), "data", [], "any", false, false, false, 186), "column", [], "any", false, false, false, 186), "html", null, true);
                yield "</td>
            </tr>
        ";
            }
            // line 189
            yield "    </table>

    <table>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"colored font-normal\">Database</th>
        </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Driver</td>
            <td class=\"font-normal\">";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 199, $this->source); })()), "data", [], "any", false, false, false, 199), "driver", [], "any", false, false, false, 199), "html", null, true);
            yield "</td>
        </tr>
        <tr>
            <td class=\"font-normal\">Name</td>
            <td class=\"font-normal\">";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 203, $this->source); })()), "data", [], "any", false, false, false, 203), "name", [], "any", false, false, false, 203), "html", null, true);
            yield "</td>
        </tr>
    </table>

    <table>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"colored font-normal\">Migration Namespaces</th>
        </tr>
        </thead>
        ";
            // line 213
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 213, $this->source); })()), "data", [], "any", false, false, false, 213), "namespaces", [], "any", false, false, false, 213));
            foreach ($context['_seq'] as $context["namespace"] => $context["directory"]) {
                // line 214
                yield "            <tr>
                <td class=\"font-normal\">";
                // line 215
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["namespace"], "html", null, true);
                yield "</td>
                <td class=\"font-normal\">";
                // line 216
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["directory"], "html", null, true);
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['namespace'], $context['directory'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            yield "    </table>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 222
    public function macro_render_migration($__migration__ = null, $__profiler_markup_version__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "migration" => $__migration__,
            "profiler_markup_version" => $__profiler_markup_version__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_migration"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_migration"));

            // line 223
            yield "    <tr>
        <td class=\"font-normal\">
            ";
            // line 225
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 225, $this->source); })()), "file", [], "any", false, false, false, 225)) {
                // line 226
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 226, $this->source); })()), "file", [], "any", false, false, false, 226), 1), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 226, $this->source); })()), "file", [], "any", false, false, false, 226), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 226, $this->source); })()), "version", [], "any", false, false, false, 226), "html", null, true);
                yield "</a>
            ";
            } else {
                // line 228
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 228, $this->source); })()), "version", [], "any", false, false, false, 228), "html", null, true);
                yield "
            ";
            }
            // line 230
            yield "        </td>
        <td class=\"font-normal\">";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 231, $this->source); })()), "description", [], "any", false, false, false, 231), "html", null, true);
            yield "</td>
        <td class=\"font-normal align-right\">
            ";
            // line 233
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 233, $this->source); })()), "is_new", [], "any", false, false, false, 233)) {
                // line 234
                yield "                <span class=\"";
                yield ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 234, $this->source); })()) >= 3)) ? ("badge badge-error") : ("label status-error"));
                yield "\">NOT EXECUTED</span>
            ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source,             // line 235
(isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 235, $this->source); })()), "is_unavailable", [], "any", false, false, false, 235)) {
                // line 236
                yield "                <span class=\"";
                yield ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 236, $this->source); })()) >= 3)) ? ("badge badge-warning") : ("label status-warning"));
                yield "\">UNAVAILABLE</span>
            ";
            } else {
                // line 238
                yield "                <span class=\"";
                yield ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 238, $this->source); })()) >= 3)) ? ("badge badge-success") : ("label status-success"));
                yield "\">EXECUTED</span>
            ";
            }
            // line 240
            yield "        </td>
        <td class=\"font-normal\">";
            // line 241
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 241, $this->source); })()), "executed_at", [], "any", false, false, false, 241)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 241, $this->source); })()), "executed_at", [], "any", false, false, false, 241), "M j, Y H:i"), "html", null, true)) : (yield "n/a"));
            yield "</td>
        <td class=\"font-normal text-right\">
            ";
            // line 243
            if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 243, $this->source); })()), "execution_time", [], "any", false, false, false, 243))) {
                // line 244
                yield "                n/a
            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 245
(isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 245, $this->source); })()), "execution_time", [], "any", false, false, false, 245) < 1)) {
                // line 246
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 246, $this->source); })()), "execution_time", [], "any", false, false, false, 246) * 1000), 0), "html", null, true);
                yield " ms
            ";
            } else {
                // line 248
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 248, $this->source); })()), "execution_time", [], "any", false, false, false, 248), 2), "html", null, true);
                yield " seconds
            ";
            }
            // line 250
            yield "        </td>
    </tr>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@DoctrineMigrations/Collector/migrations.html.twig";
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
        return array (  702 => 250,  696 => 248,  690 => 246,  688 => 245,  685 => 244,  683 => 243,  678 => 241,  675 => 240,  669 => 238,  663 => 236,  661 => 235,  656 => 234,  654 => 233,  649 => 231,  646 => 230,  640 => 228,  630 => 226,  628 => 225,  624 => 223,  605 => 222,  592 => 219,  583 => 216,  579 => 215,  576 => 214,  572 => 213,  559 => 203,  552 => 199,  540 => 189,  534 => 186,  530 => 184,  527 => 183,  521 => 180,  517 => 178,  515 => 177,  510 => 175,  500 => 167,  482 => 166,  469 => 163,  460 => 161,  456 => 160,  453 => 159,  444 => 157,  440 => 156,  428 => 146,  410 => 145,  394 => 139,  383 => 131,  375 => 126,  371 => 125,  363 => 119,  360 => 118,  358 => 117,  356 => 116,  349 => 112,  342 => 108,  335 => 104,  331 => 102,  327 => 100,  325 => 99,  318 => 95,  312 => 91,  309 => 90,  306 => 89,  303 => 88,  300 => 87,  287 => 86,  274 => 82,  268 => 79,  265 => 78,  263 => 77,  258 => 74,  252 => 72,  246 => 70,  244 => 69,  238 => 67,  235 => 66,  232 => 65,  229 => 64,  226 => 63,  223 => 62,  210 => 61,  198 => 58,  193 => 56,  190 => 55,  180 => 51,  173 => 47,  164 => 43,  157 => 39,  142 => 27,  137 => 24,  135 => 23,  132 => 22,  126 => 20,  123 => 19,  117 => 17,  111 => 15,  108 => 14,  106 => 13,  103 => 12,  100 => 11,  97 => 10,  94 => 9,  91 => 8,  88 => 7,  85 => 6,  82 => 5,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.data.unavailable_migrations_count is defined %}
        {% set unavailable_migrations = collector.data.unavailable_migrations_count %}
        {% set new_migrations = collector.data.new_migrations|length %}
        {% if unavailable_migrations > 0 or new_migrations > 0 %}
            {% set executed_migrations = collector.data.executed_migrations|length %}
            {% set available_migrations = collector.data.available_migrations_count %}
            {% set status_color = unavailable_migrations > 0 ? 'yellow' : '' %}
            {% set status_color = new_migrations > 0 ? 'red' : status_color %}

            {% set icon %}
                {% if profiler_markup_version < 3 %}
                    {{ include('@DoctrineMigrations/Collector/icon.svg') }}
                {% else %}
                    {{ include('@DoctrineMigrations/Collector/icon-v3.svg') }}
                {% endif %}

                <span class=\"sf-toolbar-value\">{{ new_migrations + unavailable_migrations }}</span>
            {% endset %}

            {% set text %}
                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Current Migration</b>
                        <span>{{ executed_migrations > 0 ? collector.data.executed_migrations|last.version|split('\\\\')|last : 'n/a' }}</span>
                    </div>
                </div>

                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <span class=\"sf-toolbar-header\">
                            <b>Database Migrations</b>
                        </span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Executed</b>
                        <span class=\"sf-toolbar-status\">{{ executed_migrations }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Unavailable</b>
                        <span class=\"sf-toolbar-status {{ unavailable_migrations > 0 ? 'sf-toolbar-status-yellow' }}\">{{ unavailable_migrations }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Available</b>
                        <span class=\"sf-toolbar-status\">{{ available_migrations }}</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>New</b>
                        <span class=\"sf-toolbar-status {{ new_migrations > 0 ? 'sf-toolbar-status-red' }}\">{{ new_migrations }}</span>
                    </div>
                </div>
            {% endset %}

            {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
        {% endif %}
    {% endif %}
{% endblock %}

{% block menu %}
    {% if collector.data.unavailable_migrations_count is defined %}
        {% set unavailable_migrations = collector.data.unavailable_migrations_count %}
        {% set new_migrations = collector.data.new_migrations|length %}
        {% set label = unavailable_migrations > 0 ? 'label-status-warning' : '' %}
        {% set label = new_migrations > 0 ? 'label-status-error' : label %}
        <span class=\"label {{ label }}\">
            <span class=\"icon\">
                {% if profiler_markup_version < 3 %}
                    {{ include('@DoctrineMigrations/Collector/icon.svg') }}
                {% else %}
                    {{ include('@DoctrineMigrations/Collector/icon-v3.svg') }}
                {% endif %}
            </span>

            <strong>Migrations</strong>
            {% if unavailable_migrations > 0 or new_migrations > 0 %}
                <span class=\"count\">
                    <span>{{ new_migrations + unavailable_migrations }}</span>
                </span>
            {% endif %}
        </span>
    {% endif %}
{% endblock %}

{% block panel %}
    {% set num_executed_migrations = collector.data.executed_migrations|length %}
    {% set num_unavailable_migrations = collector.data.unavailable_migrations_count %}
    {% set num_available_migrations = collector.data.available_migrations_count %}
    {% set num_new_migrations = collector.data.new_migrations|length %}

    <h2>Doctrine Migrations</h2>
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ num_executed_migrations }}</span>
            <span class=\"label\">Executed</span>
        </div>

        {% if profiler_markup_version >= 3 %}
            <div class=\"metric-group\">
        {% endif %}

        <div class=\"metric\">
            <span class=\"value\">{{ num_unavailable_migrations }}</span>
            <span class=\"label\">Unavailable</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ num_available_migrations }}</span>
            <span class=\"label\">Available</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ num_new_migrations }}</span>
            <span class=\"label\">New</span>
        </div>

        {% if profiler_markup_version >= 3 %}
            </div> {# closes the <div class=\"metric-group\"> #}
        {% endif %}
    </div>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">
                Migrations
                <span class=\"badge {{ num_new_migrations > 0 ? 'status-error' : num_unavailable_migrations > 0 ? 'status-warning' }}\">
                    {{ num_new_migrations > 0 ? num_new_migrations : num_unavailable_migrations > 0 ? num_unavailable_migrations : num_executed_migrations }}
                </span>
            </h3>

            <div class=\"tab-content\">
                {{ _self.render_migration_details(collector, profiler_markup_version) }}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Configuration</h3>

            <div class=\"tab-content\">
                {{ _self.render_configuration_details(collector, profiler_markup_version) }}
            </div>
        </div>
    </div>
{% endblock %}

{% macro render_migration_details(collector) %}
    <table>
        <thead>
        <tr>
            <th class=\"colored font-normal\">Version</th>
            <th class=\"colored font-normal\">Description</th>
            <th class=\"colored font-normal\">Status</th>
            <th class=\"colored font-normal\">Executed at</th>
            <th class=\"colored font-normal text-right\">Execution time</th>
        </tr>
        </thead>
        {% for migration in collector.data.new_migrations %}
            {{ _self.render_migration(migration) }}
        {% endfor %}

        {% for migration in collector.data.executed_migrations|reverse %}
            {{ _self.render_migration(migration) }}
        {% endfor %}
    </table>
{% endmacro %}

{% macro render_configuration_details(collector) %}
    <table>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"colored font-normal\">Storage</th>
        </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Type</td>
            <td class=\"font-normal\">{{ collector.data.storage }}</td>
        </tr>
        {% if collector.data.table is defined %}
            <tr>
                <td class=\"font-normal\">Table Name</td>
                <td class=\"font-normal\">{{ collector.data.table }}</td>
            </tr>
        {% endif %}
        {% if collector.data.column is defined %}
            <tr>
                <td class=\"font-normal\">Column Name</td>
                <td class=\"font-normal\">{{ collector.data.column }}</td>
            </tr>
        {% endif %}
    </table>

    <table>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"colored font-normal\">Database</th>
        </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Driver</td>
            <td class=\"font-normal\">{{ collector.data.driver }}</td>
        </tr>
        <tr>
            <td class=\"font-normal\">Name</td>
            <td class=\"font-normal\">{{ collector.data.name }}</td>
        </tr>
    </table>

    <table>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"colored font-normal\">Migration Namespaces</th>
        </tr>
        </thead>
        {% for namespace, directory in collector.data.namespaces %}
            <tr>
                <td class=\"font-normal\">{{ namespace }}</td>
                <td class=\"font-normal\">{{ directory }}</td>
            </tr>
        {% endfor %}
    </table>
{% endmacro %}

{% macro render_migration(migration, profiler_markup_version) %}
    <tr>
        <td class=\"font-normal\">
            {% if migration.file %}
                <a href=\"{{ migration.file|file_link(1) }}\" title=\"{{ migration.file }}\">{{ migration.version }}</a>
            {% else %}
                {{ migration.version }}
            {% endif %}
        </td>
        <td class=\"font-normal\">{{ migration.description }}</td>
        <td class=\"font-normal align-right\">
            {% if migration.is_new %}
                <span class=\"{{ profiler_markup_version >= 3 ? 'badge badge-error' : 'label status-error' }}\">NOT EXECUTED</span>
            {% elseif migration.is_unavailable %}
                <span class=\"{{ profiler_markup_version >= 3 ? 'badge badge-warning' : 'label status-warning' }}\">UNAVAILABLE</span>
            {% else %}
                <span class=\"{{ profiler_markup_version >= 3 ? 'badge badge-success' : 'label status-success' }}\">EXECUTED</span>
            {% endif %}
        </td>
        <td class=\"font-normal\">{{ migration.executed_at ? migration.executed_at|date('M j, Y H:i') : 'n/a' }}</td>
        <td class=\"font-normal text-right\">
            {% if migration.execution_time is null %}
                n/a
            {% elseif migration.execution_time < 1 %}
                {{ (migration.execution_time * 1000)|number_format(0) }} ms
            {% else %}
                {{ migration.execution_time|number_format(2) }} seconds
            {% endif %}
        </td>
    </tr>
{% endmacro %}
", "@DoctrineMigrations/Collector/migrations.html.twig", "C:\\xampp\\htdocs\\projetC\\vendor\\doctrine\\doctrine-migrations-bundle\\Resources\\views\\Collector\\migrations.html.twig");
    }
}
