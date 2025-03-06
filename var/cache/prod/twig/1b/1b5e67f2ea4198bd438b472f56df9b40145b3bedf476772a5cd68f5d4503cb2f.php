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

/* @EasyAdmin/page/login.html.twig */
class __TwigTemplate_620a1733712b337e589582eadc04a9d6b29f74a8dcaf4afd238c2fc7830683be extends Template
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
            'body_class' => [$this, 'block_body_class'],
            'page_title' => [$this, 'block_page_title'],
            'head_favicon' => [$this, 'block_head_favicon'],
            'wrapper_wrapper' => [$this, 'block_wrapper_wrapper'],
            'header_logo' => [$this, 'block_header_logo'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return $this->loadTemplate(((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "hasContext", [], "any", false, false, false, 2)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "templatePath", ["layout"], "method", false, false, false, 2)) : ("@EasyAdmin/page/login_minimal.html.twig")), "@EasyAdmin/page/login.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        $context["__internal_f26e9e606c81a4807da201c5b8aea161bf281478ceda8de563e9d229a0264e37"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "hasContext", [], "any", false, false, false, 3)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "i18n", [], "any", false, false, false, 3), "translationDomain", [], "any", false, false, false, 3)) : (((array_key_exists("translation_domain", $context)) ? ((($context["translation_domain"]) ?? ("messages"))) : (""))));
        // line 2
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "page-login";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield ((array_key_exists("page_title", $context)) ? (($context["page_title"] ?? null)) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "hasContext", [], "any", false, false, false, 6)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardTitle", [], "any", false, false, false, 6)) : (""))));
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_favicon(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "    ";
        if (((array_key_exists("favicon_path", $context)) ? (Twig\Extension\CoreExtension::default(($context["favicon_path"] ?? null), false)) : (false))) {
            // line 10
            yield "        <link rel=\"shortcut icon\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["favicon_path"] ?? null), "html", null, true);
            yield "\">
    ";
        } else {
            // line 12
            yield "        ";
            yield from $this->yieldParentBlock("head_favicon", $context, $blocks);
            yield "
    ";
        }
        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_wrapper_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "    ";
        $context["page_title"] =         $this->unwrap()->renderBlock("page_title", $context, $blocks);
        // line 18
        yield "    ";
        $context["_username_label"] = ((array_key_exists("username_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["username_label"] ?? null), [],         // line 3
($context["__internal_f26e9e606c81a4807da201c5b8aea161bf281478ceda8de563e9d229a0264e37"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.username", [], "EasyAdminBundle")));
        // line 19
        yield "    ";
        $context["_password_label"] = ((array_key_exists("password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["password_label"] ?? null), [],         // line 3
($context["__internal_f26e9e606c81a4807da201c5b8aea161bf281478ceda8de563e9d229a0264e37"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.password", [], "EasyAdminBundle")));
        // line 20
        yield "    ";
        $context["_forgot_password_label"] = ((array_key_exists("forgot_password_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["forgot_password_label"] ?? null), [],         // line 3
($context["__internal_f26e9e606c81a4807da201c5b8aea161bf281478ceda8de563e9d229a0264e37"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.forgot_password", [], "EasyAdminBundle")));
        // line 21
        yield "    ";
        $context["_remember_me_label"] = ((array_key_exists("remember_me_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["remember_me_label"] ?? null), [],         // line 3
($context["__internal_f26e9e606c81a4807da201c5b8aea161bf281478ceda8de563e9d229a0264e37"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.remember_me", [], "EasyAdminBundle")));
        // line 22
        yield "    ";
        $context["_sign_in_label"] = ((array_key_exists("sign_in_label", $context)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["sign_in_label"] ?? null), [],         // line 3
($context["__internal_f26e9e606c81a4807da201c5b8aea161bf281478ceda8de563e9d229a0264e37"] ?? null))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("login_page.sign_in", [], "EasyAdminBundle")));
        // line 23
        yield "
    ";
        // line 24
        yield from         $this->loadTemplate("@EasyAdmin/flash_messages.html.twig", "@EasyAdmin/page/login.html.twig", 24)->unwrap()->yield($context);
        // line 25
        yield "
    <div class=\"login-wrapper\">
        <header class=\"main-header\">
            <div id=\"header-logo\">
                ";
        // line 29
        yield from $this->unwrap()->yieldBlock('header_logo', $context, $blocks);
        // line 42
        yield "            </div>
        </header>

        <section class=\"content\">

            ";
        // line 47
        if (((array_key_exists("error", $context)) ? (Twig\Extension\CoreExtension::default(($context["error"] ?? null), false)) : (false))) {
            // line 48
            yield "                <div class=\"w-100 alert alert-danger rounded mb-3\">
                    <i class=\"fas fa-times-circle mr-1\"></i>
                    ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 50), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 50), "security"), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 53
        yield "
            <form method=\"post\" action=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("action", $context)) ? (Twig\Extension\CoreExtension::default(($context["action"] ?? null), "")) : ("")), "html", null, true);
        yield "\">
                ";
        // line 55
        if (((array_key_exists("csrf_token_intention", $context)) ? (Twig\Extension\CoreExtension::default(($context["csrf_token_intention"] ?? null), false)) : (false))) {
            // line 56
            yield "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(($context["csrf_token_intention"] ?? null)), "html", null, true);
            yield "\">
                ";
        }
        // line 58
        yield "
                <input type=\"hidden\" name=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("target_path_parameter", $context)) ? (Twig\Extension\CoreExtension::default(($context["target_path_parameter"] ?? null), "_target_path")) : ("_target_path")), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("target_path", $context)) ? (Twig\Extension\CoreExtension::default(($context["target_path"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "hasContext", [], "any", false, false, false, 59)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 59))) : ("/")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "hasContext", [], "any", false, false, false, 59)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 59))) : ("/")))), "html", null, true);
        yield "\" />

                <div class=\"form-group\">
                    <label class=\"form-control-label required\" for=\"username\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_username_label"] ?? null), "html", null, true);
        yield "</label>
                    <div class=\"form-widget\">
                        <input type=\"text\" id=\"username\" name=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("username_parameter", $context)) ? (Twig\Extension\CoreExtension::default(($context["username_parameter"] ?? null), "_username")) : ("_username")), "html", null, true);
        yield "\" class=\"form-control\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("last_username", $context)) ? (Twig\Extension\CoreExtension::default(($context["last_username"] ?? null), "")) : ("")), "html", null, true);
        yield "\" required autofocus autocomplete=\"username\">
                    </div>
                </div>

                <div class=\"form-group\">
                    <label class=\"form-control-label required\" for=\"password\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_password_label"] ?? null), "html", null, true);
        yield "</label>
                    <div class=\"form-widget\">
                        <input type=\"password\" id=\"password\" name=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("password_parameter", $context)) ? (Twig\Extension\CoreExtension::default(($context["password_parameter"] ?? null), "_password")) : ("_password")), "html", null, true);
        yield "\" class=\"form-control\" required autocomplete=\"current-password\">
                    </div>

                    ";
        // line 74
        if (((array_key_exists("forgot_password_enabled", $context)) ? (Twig\Extension\CoreExtension::default(($context["forgot_password_enabled"] ?? null), false)) : (false))) {
            // line 75
            yield "                        <div class=\"form-text\">
                            <a href=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("forgot_password_path", $context)) ? (Twig\Extension\CoreExtension::default(($context["forgot_password_path"] ?? null), "#")) : ("#")), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_forgot_password_label"] ?? null), "html", null, true);
            yield "</a>
                        </div>
                    ";
        }
        // line 79
        yield "                </div>

                ";
        // line 81
        if (((array_key_exists("remember_me_enabled", $context)) ? (Twig\Extension\CoreExtension::default(($context["remember_me_enabled"] ?? null), false)) : (false))) {
            // line 82
            yield "                    <div class=\"form-group\">
                        <input class=\"form-check-input\" type=\"checkbox\" id=\"remember_me\" name=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("remember_me_parameter", $context)) ? (Twig\Extension\CoreExtension::default(($context["remember_me_parameter"] ?? null), "_remember_me")) : ("_remember_me")), "html", null, true);
            yield "\" ";
            yield ((((array_key_exists("remember_me_checked", $context)) ? (Twig\Extension\CoreExtension::default(($context["remember_me_checked"] ?? null), false)) : (false))) ? ("checked") : (""));
            yield ">
                        <label class=\"form-check-label\" for=\"remember_me\">
                            ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_remember_me_label"] ?? null), "html", null, true);
            yield "
                        </label>
                    </div>
                ";
        }
        // line 89
        yield "
                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["_sign_in_label"] ?? null), "html", null, true);
        yield "</button>
            </form>

            <script src=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("login.js", Twig\Extension\CoreExtension::constant("EasyCorp\\Bundle\\EasyAdminBundle\\Asset\\AssetPackage::PACKAGE_NAME")), "html", null, true);
        yield "\"></script>
        </section>
    </div>
";
        yield from [];
    }

    // line 29
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_logo(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 30
        yield "                    ";
        if (($context["page_title"] ?? null)) {
            // line 31
            yield "                        ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "hasContext", [], "any", false, false, false, 31)) {
                // line 32
                yield "                            <a class=\"logo ";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["page_title"] ?? null)) > 14)) ? ("logo-long") : (""));
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags(($context["page_title"] ?? null)), "html", null, true);
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, ($context["ea"] ?? null), "dashboardRouteName", [], "any", false, false, false, 32));
                yield "\">
                                ";
                // line 33
                yield ($context["page_title"] ?? null);
                yield "
                            </a>
                        ";
            } else {
                // line 36
                yield "                            <div class=\"logo ";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["page_title"] ?? null)) > 14)) ? ("logo-long") : (""));
                yield "\">
                                ";
                // line 37
                yield ($context["page_title"] ?? null);
                yield "
                            </div>
                        ";
            }
            // line 40
            yield "                    ";
        }
        // line 41
        yield "                ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/page/login.html.twig";
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
        return array (  314 => 41,  311 => 40,  305 => 37,  300 => 36,  294 => 33,  285 => 32,  282 => 31,  279 => 30,  272 => 29,  263 => 93,  257 => 90,  254 => 89,  247 => 85,  240 => 83,  237 => 82,  235 => 81,  231 => 79,  223 => 76,  220 => 75,  218 => 74,  212 => 71,  207 => 69,  197 => 64,  192 => 62,  184 => 59,  181 => 58,  175 => 56,  173 => 55,  169 => 54,  166 => 53,  160 => 50,  156 => 48,  154 => 47,  147 => 42,  145 => 29,  139 => 25,  137 => 24,  134 => 23,  132 => 3,  130 => 22,  128 => 3,  126 => 21,  124 => 3,  122 => 20,  120 => 3,  118 => 19,  116 => 3,  114 => 18,  111 => 17,  104 => 16,  95 => 12,  89 => 10,  86 => 9,  79 => 8,  68 => 6,  57 => 5,  53 => 2,  51 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@EasyAdmin/page/login.html.twig", "C:\\xampp\\htdocs\\projetC\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\page\\login.html.twig");
    }
}
