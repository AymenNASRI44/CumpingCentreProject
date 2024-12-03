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

/* @EasyAdmin/flash_messages.html.twig */
class __TwigTemplate_6a31633e0e08c4a3198dada72017dc0c82c2d9e818690fc94697a7dd5c5d4bf3 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/flash_messages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/flash_messages.html.twig"));

        // line 2
        $context["__internal_94030f5f7a06ff877bc25e9a46950ff1a9537076db8e9c763032f719a26787fe"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 2, $this->source); })()), "hasContext", [], "any", false, false, false, 2)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 2, $this->source); })()), "i18n", [], "any", false, false, false, 2), "translationDomain", [], "any", false, false, false, 2)) : (((array_key_exists("translation_domain", $context)) ? ((($context["translation_domain"]) ?? ("messages"))) : (""))));
        // line 3
        yield "
";
        // line 4
        $context["flash_messages"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "flashes", [], "any", false, false, false, 4);
        // line 5
        yield "
";
        // line 6
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["flash_messages"]) || array_key_exists("flash_messages", $context) ? $context["flash_messages"] : (function () { throw new RuntimeError('Variable "flash_messages" does not exist.', 6, $this->source); })())) > 0)) {
            // line 7
            yield "    <div id=\"flash-messages\">
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["flash_messages"]) || array_key_exists("flash_messages", $context) ? $context["flash_messages"] : (function () { throw new RuntimeError('Variable "flash_messages" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 9
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 10
                    yield "                <div class=\"alert alert-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                    yield " alert-dismissible fade show\" role=\"alert\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    ";
                    // line 12
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], [],                     // line 2
(isset($context["__internal_94030f5f7a06ff877bc25e9a46950ff1a9537076db8e9c763032f719a26787fe"]) || array_key_exists("__internal_94030f5f7a06ff877bc25e9a46950ff1a9537076db8e9c763032f719a26787fe", $context) ? $context["__internal_94030f5f7a06ff877bc25e9a46950ff1a9537076db8e9c763032f719a26787fe"] : (function () { throw new RuntimeError('Variable "__internal_94030f5f7a06ff877bc25e9a46950ff1a9537076db8e9c763032f719a26787fe" does not exist.', 2, $this->source); })()));
                    // line 12
                    yield "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/flash_messages.html.twig";
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
        return array (  95 => 16,  89 => 15,  81 => 12,  79 => 2,  78 => 12,  72 => 10,  67 => 9,  63 => 8,  60 => 7,  58 => 6,  55 => 5,  53 => 4,  50 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider #}
{% trans_default_domain ea.hasContext ? ea.i18n.translationDomain : (translation_domain is defined ? translation_domain ?? 'messages') %}

{% set flash_messages = app.flashes %}

{% if flash_messages|length > 0 %}
    <div id=\"flash-messages\">
        {% for label, messages in flash_messages %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    {{ message|trans|raw }}
                </div>
            {% endfor %}
        {% endfor %}
    </div>
{% endif %}
", "@EasyAdmin/flash_messages.html.twig", "C:\\xampp\\htdocs\\projetC\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\flash_messages.html.twig");
    }
}
