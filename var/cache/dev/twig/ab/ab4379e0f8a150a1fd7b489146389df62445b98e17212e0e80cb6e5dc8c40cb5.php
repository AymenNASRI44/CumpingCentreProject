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

/* @EasyAdmin/symfony-form-themes/README.txt */
class __TwigTemplate_ae0bcbb98f9688dcc2c43bf709b663172131136fccd46dc80e972a16fde0f556 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/symfony-form-themes/README.txt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/symfony-form-themes/README.txt"));

        // line 1
        yield "This is a copy of Symfony 5.4 form themes available in
https://github.com/symfony/symfony/blob/5.4/src/Symfony/Bridge/Twig/Resources/views/Form

Copyright (c) Fabien Potencier
License: https://github.com/symfony/symfony/blob/5.4/src/Symfony/Bridge/Twig/LICENSE

We need to copy these files instead of relying on the templates available via the
Symfony Twig Bridge to ensure that all applications building backends with EasyAdmin
use the same version of the templates, even those still using Symfony 4.4.
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
        return "@EasyAdmin/symfony-form-themes/README.txt";
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
        return new Source("This is a copy of Symfony 5.4 form themes available in
https://github.com/symfony/symfony/blob/5.4/src/Symfony/Bridge/Twig/Resources/views/Form

Copyright (c) Fabien Potencier
License: https://github.com/symfony/symfony/blob/5.4/src/Symfony/Bridge/Twig/LICENSE

We need to copy these files instead of relying on the templates available via the
Symfony Twig Bridge to ensure that all applications building backends with EasyAdmin
use the same version of the templates, even those still using Symfony 4.4.
", "@EasyAdmin/symfony-form-themes/README.txt", "C:\\xampp\\htdocs\\projetC\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\symfony-form-themes\\README.txt");
    }
}
