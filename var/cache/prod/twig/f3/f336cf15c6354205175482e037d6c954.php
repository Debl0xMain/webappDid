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

/* base.html.twig */
class __TwigTemplate_9e0a82be7072e56c5eed66ac5f905f33 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    ";
        // line 5
        yield "    <meta charset=\"UTF-8\">
    <meta name=\"title\" content=\"DiD Kustom Garage | Garagiste Moto\">
    <meta name=\"description\" content=\"DiD Kustom Garage - Votre garagiste moto de confiance. Découvrez nos services de réparation, entretien et customisation de motos.\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"theme-color\" content=\"#3c790a\">
    <meta name=\"color-scheme\" content=\"dark light\">
    <meta property=\"og:title\" content=\"DiD Kustom Garage | Garagiste Moto\">
    <meta property=\"og:description\" content=\"DiD Kustom Garage - Votre garagiste moto de confiance. Découvrez nos services de réparation, entretien et customisation de motos.\">
    <meta property=\"og:image\" content=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_resize.webp"), "html", null, true);
        yield "\">
    <meta property=\"og:url\" content=\"https://127.0.0.1:8000/\">
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <link rel=\"canonical\" href=\"https://127.0.0.1:8000/\">
    <title>";
        // line 17
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    ";
        // line 20
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js\"></script>
    <script src=\"https://kit.fontawesome.com/3fd2d451cc.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" crossorigin=\"anonymous\"></script>
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_resize.webp"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/base.min.css"), "html", null, true);
        yield "\">
    
    ";
        // line 27
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 29
        yield "    
</head>
<body>
";
        // line 33
        yield "    <div id=\"background\"></div>
    ";
        // line 35
        yield "    <header>
        <nav class=\"navbar navbar-expand-lg\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <img src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo_resize.webp"), "html", null, true);
        yield "\" alt=\"DiD Kustom Garage\">
            </button>
            <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto nav_background\">
                    <li class=\"nav-item moto_rel me-5\">
                        <img class=\"moto_nav moto_left\" src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/navitemps.webp"), "html", null, true);
        yield "\" alt=\"Moto\" width=\"50\" height=\"50\">
                    </li>
                    <li class=\"nav-item my-auto\">
                        <a class=\"nav-link nav_text\" href=\"/dev\">Accueil</a>
                    </li>
                    <li class=\"nav-item my-auto\">
                        <p class=\"nav-link nav_text nav_point\">.</p>
                    </li>
                    <li class=\"nav-item my-auto\">
                        <a class=\"nav-link nav_text\" href=\"/dev\">Catalogue</a>
                    </li>
                    <li class=\"nav-item my-auto\">
                        <p class=\"nav-link nav_text nav_point\">.</p>
                    </li>
                    <li class=\"nav-item my-auto\">
                        <a class=\"nav-link nav_text\" href=\"/dev\">Occasion</a>
                    </li>
                    <li class=\"nav-item moto_rel ms-5\">
                        <img class=\"moto_nav moto_right\" src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/navitemps.webp"), "html", null, true);
        yield "\" alt=\"Moto\" width=\"50\" height=\"50\">
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    ";
        // line 68
        yield "    <main class=\"container\">
        ";
        // line 69
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 70
        yield "    </main>
    ";
        // line 71
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 73
        yield "</body>
</html>
";
        return; yield '';
    }

    // line 17
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "DiD Kustom Garage | Garagiste Moto";
        return; yield '';
    }

    // line 27
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    ";
        return; yield '';
    }

    // line 69
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  177 => 71,  170 => 69,  162 => 27,  154 => 17,  147 => 73,  145 => 71,  142 => 70,  140 => 69,  137 => 68,  128 => 61,  107 => 43,  99 => 38,  94 => 35,  91 => 33,  86 => 29,  84 => 27,  79 => 25,  74 => 23,  69 => 20,  64 => 17,  57 => 13,  47 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/deblox/Desktop/Did Custom/webappDid/templates/base.html.twig");
    }
}
