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

/* @WebProfiler/Icon/form.svg */
class __TwigTemplate_98aedb377ded4cd99d5e67a4d661798d8bf4d6c1945621fdedf5ea37bb7d20d2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/form.svg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/form.svg"));

        // line 1
        yield "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M20.5 4H18V2.5c0-.8-.7-1.5-1.5-1.5h-9C6.7 1 6 1.7 6 2.5V4H3.5C2.7 4 2 4.7 2 5.5v16c0 .8.7 1.5 1.5 1.5h17c.8 0 1.5-.7 1.5-1.5v-16c0-.8-.7-1.5-1.5-1.5zM9 4h6v1H9V4zm10 16H5V7h1.1c.2.6.8 1 1.4 1h9c.7 0 1.2-.4 1.4-1H19v13zm-2-9c0 .6-.4 1-1 1H8c-.6 0-1-.4-1-1s.4-1 1-1h8c.6 0 1 .4 1 1zm0 3c0 .6-.4 1-1 1H8c-.6 0-1-.4-1-1s.4-1 1-1h8c.6 0 1 .4 1 1zm-4 3c0 .6-.4 1-1 1H8c-.6 0-1-.4-1-1s.4-1 1-1h4c.6 0 1 .4 1 1z\"/></svg>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Icon/form.svg";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M20.5 4H18V2.5c0-.8-.7-1.5-1.5-1.5h-9C6.7 1 6 1.7 6 2.5V4H3.5C2.7 4 2 4.7 2 5.5v16c0 .8.7 1.5 1.5 1.5h17c.8 0 1.5-.7 1.5-1.5v-16c0-.8-.7-1.5-1.5-1.5zM9 4h6v1H9V4zm10 16H5V7h1.1c.2.6.8 1 1.4 1h9c.7 0 1.2-.4 1.4-1H19v13zm-2-9c0 .6-.4 1-1 1H8c-.6 0-1-.4-1-1s.4-1 1-1h8c.6 0 1 .4 1 1zm0 3c0 .6-.4 1-1 1H8c-.6 0-1-.4-1-1s.4-1 1-1h8c.6 0 1 .4 1 1zm-4 3c0 .6-.4 1-1 1H8c-.6 0-1-.4-1-1s.4-1 1-1h4c.6 0 1 .4 1 1z\"/></svg>
", "@WebProfiler/Icon/form.svg", "C:\\xampp\\htdocs\\projetC\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Icon\\form.svg");
    }
}
