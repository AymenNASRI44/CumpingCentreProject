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

/* reservation/index.html.twig */
class __TwigTemplate_acb222c35e8815d3cb8db462720df9a9c5fe87af3a75325058bd7e680c519fb7 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
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

        yield "Réserver un centre de camping";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <h1>Faire une réservation</h1>

    ";
        // line 11
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "session", [], "any", false, false, false, 11), "flashbag", [], "any", false, false, false, 11), "has", ["success"], "method", false, false, false, 11)) {
            // line 12
            yield "        <div class=\"alert alert-success\">
            ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "session", [], "any", false, false, false, 13), "flashbag", [], "any", false, false, false, 13), "get", ["success"], "method", false, false, false, 13), 0, [], "array", false, false, false, 13), "html", null, true);
            yield "
        </div>
    ";
        }
        // line 16
        yield "
    ";
        // line 18
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 18, $this->source); })()), 'form_start');
        yield "
    
        <div class=\"reservationForm-group\">
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 21, $this->source); })()), "date_d", [], "any", false, false, false, 21), 'row', ["label" => "Date de début"]);
        yield "
        </div>
        
        <div class=\"reservationForm-group\">
            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 25, $this->source); })()), "date_f", [], "any", false, false, false, 25), 'row', ["label" => "Date de fin"]);
        yield "
        </div>
        
        <div class=\"reservationForm-group\">
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 29, $this->source); })()), "lieu_camping", [], "any", false, false, false, 29), 'row', ["label" => "Lieu de camping"]);
        yield "
        </div>

        <div class=\"reservationForm-group\">
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), 'row', ["label" => "Utilisateur"]);
        yield "
        </div>

        <div class=\"reservationForm-group\">
            <button class=\"btn btn-primary\" type=\"submit\">Réserver</button>
        </div>

    ";
        // line 40
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 40, $this->source); })()), 'form_end');
        yield "

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
        return "reservation/index.html.twig";
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
        return array (  157 => 40,  147 => 33,  140 => 29,  133 => 25,  126 => 21,  119 => 18,  116 => 16,  110 => 13,  107 => 12,  104 => 11,  100 => 8,  87 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/reservation/new.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Réserver un centre de camping{% endblock %}

{% block body %}
    <h1>Faire une réservation</h1>

    {# Vérifier si le formulaire a été soumis et afficher un message de succès #}
    {% if app.session.flashbag.has('success') %}
        <div class=\"alert alert-success\">
            {{ app.session.flashbag.get('success')[0] }}
        </div>
    {% endif %}

    {# Afficher le formulaire #}
    {{ form_start(reservationForm) }}
    
        <div class=\"reservationForm-group\">
            {{ form_row(reservationForm.date_d, { 'label': 'Date de début' }) }}
        </div>
        
        <div class=\"reservationForm-group\">
            {{ form_row(reservationForm.date_f, { 'label': 'Date de fin' }) }}
        </div>
        
        <div class=\"reservationForm-group\">
            {{ form_row(reservationForm.lieu_camping, { 'label': 'Lieu de camping' }) }}
        </div>

        <div class=\"reservationForm-group\">
            {{ form_row(reservationForm.user, { 'label': 'Utilisateur' }) }}
        </div>

        <div class=\"reservationForm-group\">
            <button class=\"btn btn-primary\" type=\"submit\">Réserver</button>
        </div>

    {{ form_end(reservationForm) }}

{% endblock %}
", "reservation/index.html.twig", "C:\\xampp\\htdocs\\projetC\\templates\\reservation\\index.html.twig");
    }
}
