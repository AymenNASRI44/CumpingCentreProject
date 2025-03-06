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
class __TwigTemplate_8a27820a594c857882a7ecbff8ce90431eeaa02808e6657e0ed4c1e4c3c3ef00 extends Template
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
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "contact/index.html.twig", "C:\\xampp\\htdocs\\projetC\\templates\\contact\\index.html.twig");
    }
}
