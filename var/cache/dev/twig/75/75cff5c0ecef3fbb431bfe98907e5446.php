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
class __TwigTemplate_46bed69a2c7480f83d67aacb70859e81 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
                        <img class=\"img-fluid moto_nav moto_left\" src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/navitemps.webp"), "html", null, true);
        yield "\" alt=\"Moto\" width=\"50\" height=\"50\">
                    </li>
                    <li class=\"nav-item my-auto\">
                        <a class=\"nav-link nav_text\" href=\"/\">Accueil</a>
                    </li>
                    <li class=\"nav-item my-auto\">
                        <p class=\"nav-link nav_text nav_point\">.</p>
                    </li>
                    <li class=\"nav-item my-auto\">
                        <a class=\"nav-link nav_text\" href=\"/catalogue\">Catalogue</a>
                    </li>
                    <li class=\"nav-item my-auto\">
                        <p class=\"nav-link nav_text nav_point\">.</p>
                    </li>
                    <li class=\"nav-item my-auto\">
                        <a class=\"nav-link nav_text\" href=\"/occasion\">Occasion</a>
                    </li>
                    <li class=\"nav-item moto_rel ms-5\">
                        <img class=\"img-fluid moto_nav moto_right\" src=\"";
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 17
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "DiD Kustom Garage | Garagiste Moto";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 27
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 28
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 69
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  236 => 72,  226 => 71,  207 => 69,  196 => 28,  186 => 27,  166 => 17,  153 => 73,  151 => 71,  148 => 70,  146 => 69,  143 => 68,  134 => 61,  113 => 43,  105 => 38,  100 => 35,  97 => 33,  92 => 29,  90 => 27,  85 => 25,  80 => 23,  75 => 20,  70 => 17,  63 => 13,  53 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    {# Meta Balise #}
    <meta charset=\"UTF-8\">
    <meta name=\"title\" content=\"DiD Kustom Garage | Garagiste Moto\">
    <meta name=\"description\" content=\"DiD Kustom Garage - Votre garagiste moto de confiance. Découvrez nos services de réparation, entretien et customisation de motos.\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"theme-color\" content=\"#3c790a\">
    <meta name=\"color-scheme\" content=\"dark light\">
    <meta property=\"og:title\" content=\"DiD Kustom Garage | Garagiste Moto\">
    <meta property=\"og:description\" content=\"DiD Kustom Garage - Votre garagiste moto de confiance. Découvrez nos services de réparation, entretien et customisation de motos.\">
    <meta property=\"og:image\" content=\"{{ asset('assets/img/logo_resize.webp') }}\">
    <meta property=\"og:url\" content=\"https://127.0.0.1:8000/\">
    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <link rel=\"canonical\" href=\"https://127.0.0.1:8000/\">
    <title>{% block title %}DiD Kustom Garage | Garagiste Moto{% endblock %}</title>
    
    {# Links | Script #}
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js\"></script>
    <script src=\"https://kit.fontawesome.com/3fd2d451cc.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.7.1.min.js\" integrity=\"sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=\" crossorigin=\"anonymous\"></script>
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/img/logo_resize.webp') }}\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" integrity=\"sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/base.min.css') }}\">
    
    {% block stylesheets %}
    {% endblock %}
    
</head>
<body>
{# Background #}
    <div id=\"background\"></div>
    {# NavBar #}
    <header>
        <nav class=\"navbar navbar-expand-lg\">
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <img src=\"{{ asset('assets/img/logo_resize.webp') }}\" alt=\"DiD Kustom Garage\">
            </button>
            <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto nav_background\">
                    <li class=\"nav-item moto_rel me-5\">
                        <img class=\"img-fluid moto_nav moto_left\" src=\"{{ asset('assets/img/navitemps.webp') }}\" alt=\"Moto\" width=\"50\" height=\"50\">
                    </li>
                    <li class=\"nav-item my-auto\">
                        <a class=\"nav-link nav_text\" href=\"/\">Accueil</a>
                    </li>
                    <li class=\"nav-item my-auto\">
                        <p class=\"nav-link nav_text nav_point\">.</p>
                    </li>
                    <li class=\"nav-item my-auto\">
                        <a class=\"nav-link nav_text\" href=\"/catalogue\">Catalogue</a>
                    </li>
                    <li class=\"nav-item my-auto\">
                        <p class=\"nav-link nav_text nav_point\">.</p>
                    </li>
                    <li class=\"nav-item my-auto\">
                        <a class=\"nav-link nav_text\" href=\"/occasion\">Occasion</a>
                    </li>
                    <li class=\"nav-item moto_rel ms-5\">
                        <img class=\"img-fluid moto_nav moto_right\" src=\"{{ asset('assets/img/navitemps.webp') }}\" alt=\"Moto\" width=\"50\" height=\"50\">
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    {# Body #}
    <main class=\"container\">
        {% block body %}{% endblock %}
    </main>
    {% block javascripts %}
    {% endblock %}
</body>
</html>
", "base.html.twig", "/home/deblox/Desktop/Did Custom/webappDid/templates/base.html.twig");
    }
}
