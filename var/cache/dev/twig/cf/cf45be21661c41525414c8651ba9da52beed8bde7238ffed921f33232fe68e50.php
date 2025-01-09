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

/* contact/index.html.twig */
class __TwigTemplate_458312043101beeb3e649f6c863e6671f9753beeab5de750e80d2077347f853b extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        yield "Contactez-nous";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\">
    <style>
        .contact-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        yield from [];
    }

    // line 19
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

        // line 20
        yield "<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">Contactez-nous</h1>
    <p class=\"text-muted text-center\">Vous avez des questions ou des suggestions ? Envoyez-nous un message, nous serons ravis de vous aider.</p>

    <div class=\"contact-container\">
        ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 25, $this->source); })()), 'form_start');
        yield "
        
        <div class=\"mb-3\">
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom"]);
        yield "
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre nom"]]);
        yield "
            ";
        // line 30
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "errors", [], "any", false, false, false, 30)) > 0)) {
            // line 31
            yield "                <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31)), "html", null, true);
            yield "</div>
            ";
        }
        // line 33
        yield "        </div>

        <div class=\"mb-3\">
            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 36, $this->source); })()), "prenom", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prénom"]);
        yield "
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 37, $this->source); })()), "prenom", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre prénom"]]);
        yield "
            ";
        // line 38
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 38, $this->source); })()), "prenom", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "errors", [], "any", false, false, false, 38)) > 0)) {
            // line 39
            yield "                <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 39, $this->source); })()), "prenom", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "errors", [], "any", false, false, false, 39)), "html", null, true);
            yield "</div>
            ";
        }
        // line 41
        yield "        </div>

        <div class=\"mb-3\">
            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        yield "
            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre adresse email"]]);
        yield "
            ";
        // line 46
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "errors", [], "any", false, false, false, 46)) > 0)) {
            // line 47
            yield "                <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "errors", [], "any", false, false, false, 47)), "html", null, true);
            yield "</div>
            ";
        }
        // line 49
        yield "        </div>

        <div class=\"mb-3\">
            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 52, $this->source); })()), "message", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Message"]);
        yield "
            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 53, $this->source); })()), "message", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre message", "rows" => 5]]);
        yield "
            ";
        // line 54
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 54, $this->source); })()), "message", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "errors", [], "any", false, false, false, 54)) > 0)) {
            // line 55
            yield "                <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 55, $this->source); })()), "message", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "errors", [], "any", false, false, false, 55)), "html", null, true);
            yield "</div>
            ";
        }
        // line 57
        yield "        </div>

        <button type=\"submit\" class=\"btn btn-primary w-100\">Envoyer</button>

        ";
        // line 61
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 61, $this->source); })()), 'form_end');
        yield "
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
        return "contact/index.html.twig";
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
        return array (  234 => 61,  228 => 57,  222 => 55,  220 => 54,  216 => 53,  212 => 52,  207 => 49,  201 => 47,  199 => 46,  195 => 45,  191 => 44,  186 => 41,  180 => 39,  178 => 38,  174 => 37,  170 => 36,  165 => 33,  159 => 31,  157 => 30,  153 => 29,  149 => 28,  143 => 25,  136 => 20,  123 => 19,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contactez-nous{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\">
    <style>
        .contact-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"text-center mb-4\">Contactez-nous</h1>
    <p class=\"text-muted text-center\">Vous avez des questions ou des suggestions ? Envoyez-nous un message, nous serons ravis de vous aider.</p>

    <div class=\"contact-container\">
        {{ form_start(contactForm) }}
        
        <div class=\"mb-3\">
            {{ form_label(contactForm.nom, 'Nom', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(contactForm.nom, {'attr': {'class': 'form-control', 'placeholder': 'Votre nom'}}) }}
            {% if contactForm.nom.vars.errors|length > 0 %}
                <div class=\"text-danger mt-1\">{{ contactForm.nom.vars.errors|first }}</div>
            {% endif %}
        </div>

        <div class=\"mb-3\">
            {{ form_label(contactForm.prenom, 'Prénom', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(contactForm.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Votre prénom'}}) }}
            {% if contactForm.prenom.vars.errors|length > 0 %}
                <div class=\"text-danger mt-1\">{{ contactForm.prenom.vars.errors|first }}</div>
            {% endif %}
        </div>

        <div class=\"mb-3\">
            {{ form_label(contactForm.email, 'Email', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(contactForm.email, {'attr': {'class': 'form-control', 'placeholder': 'Votre adresse email'}}) }}
            {% if contactForm.email.vars.errors|length > 0 %}
                <div class=\"text-danger mt-1\">{{ contactForm.email.vars.errors|first }}</div>
            {% endif %}
        </div>

        <div class=\"mb-3\">
            {{ form_label(contactForm.message, 'Message', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(contactForm.message, {'attr': {'class': 'form-control', 'placeholder': 'Votre message', 'rows': 5}}) }}
            {% if contactForm.message.vars.errors|length > 0 %}
                <div class=\"text-danger mt-1\">{{ contactForm.message.vars.errors|first }}</div>
            {% endif %}
        </div>

        <button type=\"submit\" class=\"btn btn-primary w-100\">Envoyer</button>

        {{ form_end(contactForm) }}
    </div>
</div>
{% endblock %}
", "contact/index.html.twig", "C:\\xampp\\htdocs\\projetC\\templates\\contact\\index.html.twig");
    }
}
