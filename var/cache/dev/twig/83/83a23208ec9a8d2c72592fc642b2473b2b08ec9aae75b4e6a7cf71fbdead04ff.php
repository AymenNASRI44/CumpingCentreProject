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
class __TwigTemplate_cb6b47b92e0167d016951569ff1dcffba474e2ce174fff5341eeff043aedcf5f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Contactez-nous</title>
    <link rel=\"stylesheet\" href=\"/path/to/your/css/styles.css\">
</head>
<body>
    <header>
        <h1>Contactez-nous</h1>
    </header>
    <main>
        <form action=\"/path/to/your/form/handler\" method=\"post\">
            <div>
                <label for=\"name\">Nom:</label>
                <input type=\"text\" id=\"name\" name=\"name\" required>
            </div>
            <div>
                <label for=\"email\">Email:</label>
                <input type=\"email\" id=\"email\" name=\"email\" required>
            </div>
            <div>
                <label for=\"message\">Message:</label>
                <textarea id=\"message\" name=\"message\" required></textarea>
            </div>
            <div>
                <button type=\"submit\">Envoyer</button>
            </div>
        </form>
    </main>
    <footer>
        <p>&copy; 2023 Votre Entreprise</p>
    </footer>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Contactez-nous</title>
    <link rel=\"stylesheet\" href=\"/path/to/your/css/styles.css\">
</head>
<body>
    <header>
        <h1>Contactez-nous</h1>
    </header>
    <main>
        <form action=\"/path/to/your/form/handler\" method=\"post\">
            <div>
                <label for=\"name\">Nom:</label>
                <input type=\"text\" id=\"name\" name=\"name\" required>
            </div>
            <div>
                <label for=\"email\">Email:</label>
                <input type=\"email\" id=\"email\" name=\"email\" required>
            </div>
            <div>
                <label for=\"message\">Message:</label>
                <textarea id=\"message\" name=\"message\" required></textarea>
            </div>
            <div>
                <button type=\"submit\">Envoyer</button>
            </div>
        </form>
    </main>
    <footer>
        <p>&copy; 2023 Votre Entreprise</p>
    </footer>
</body>
</html>", "contact/index.html.twig", "C:\\xampp\\htdocs\\projetC\\templates\\contact\\index.html.twig");
    }
}
