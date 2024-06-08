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

/* page/accueil.html.twig */
class __TwigTemplate_d7701bdfef849b29dd28e7246662ed78 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/accueil.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/accueil.min.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Accueil - DiD Kustom Garage";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "<h1 class=\"harley_style text-center\">Did Kustom Garage</h1>
<section class=\"row mt-1 buble_size text-center\">
    <div class=\"col reveal-right\">
        <img class=\"img-fluid acc_buble_img\" src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/reparation.webp"), "html", null, true);
        yield "\" alt=\"Réparation de motos\" width=\"300\" height=\"200\">
    </div>
    <div class=\"col reveal-left buble_size\">
        <img class=\"img-fluid acc_buble_img\" src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Entretien.webp"), "html", null, true);
        yield "\" alt=\"Entretien de motos\" width=\"300\" height=\"200\">
    </div>
</section>
<section class=\"row reveal-bot buble_size text-center\">
    <div class=\"col\">
        <img class=\"img-fluid acc_buble_img\" src=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Preparation.webp"), "html", null, true);
        yield "\" alt=\"Préparation de motos\" width=\"300\" height=\"200\">
    </div>
</section>
<address class=\"row my-5 joinme_background py-2\">
    <div class=\"col px-5 text-center  mt-5\">
        <div class=\"col mt-2\">
            <p class=\"harley_style mt-2\">Contactez-nous</p>
        </div>
        <div class=\"row\">
            <a href=\"tel:0647517650\">
                <p class=\"text_adress icon_color\"><i class=\"fa-solid fa-phone icon_color \"></i>Téléphone : 0647517650</p>
            </a>
        </div>
        <div class=\"row\">
            <a href=\"https://www.facebook.com/p/Did-Kustom-Garage-100088832258671/\">
                <p class=\"text_adress icon_color\"><i class=\"fa-brands fa-facebook icon_color \"></i>Facebook</p>
            </a>
        </div>
        <div class=\"row\">
            <p class=\"adress_title\"><i class=\"fa-solid fa-envelope\"></i> Newsletter <i class=\"fa-solid fa-envelope\"></i></p>
        </div>
        <div class=\"row\">
            <div id=\"success_request\"></div>
            <form id=\"email_form\">
                <input class=\"rounded\" type=\"email\" id=\"email\" name=\"email\" placeholder=\"Votre email\" required>
                <button class=\"btn btn-dark\" id=\"submit_email\" type=\"submit\">Envoyer</button>
            </form>
        </div>
    </div>
    <div class=\"col text-center mt-5\">
        <a class=\"mt-3\" target='_blank' href=\"https://www.google.com/maps/place/Did+Kustom+Garage/@50.0633835,1.6462635,17z/data=!3m1!4b1!4m6!3m5!1s0x47ddf78a98859721:0x5c7e647903e85314!8m2!3d50.0633835!4d1.6462635!16s%2Fg%2F11txt_b6f0?entry=ttu\">
            <p class=\"text_adress icon_color\"><i class=\"fa-solid fa-location-dot icon_color\"></i>93 Pl. de Eglise, 80210 Chepy</p>
            <img height=\"75%\" width=\"75%\" src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/Map.webp"), "html", null, true);
        yield "\" alt=\"Localisation du garage\" width=\"600\" height=\"450\">
        </a>
    </div>
</address>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 59
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        yield "   ";
        // line 61
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/mail.min.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "page/accueil.html.twig";
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
        return array (  199 => 61,  197 => 60,  187 => 59,  170 => 53,  135 => 21,  127 => 16,  121 => 13,  116 => 10,  106 => 9,  86 => 7,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/accueil.min.css') }}\">
{% endblock %}

{% block title %}Accueil - DiD Kustom Garage{% endblock %}

{% block body %}
<h1 class=\"harley_style text-center\">Did Kustom Garage</h1>
<section class=\"row mt-1 buble_size text-center\">
    <div class=\"col reveal-right\">
        <img class=\"img-fluid acc_buble_img\" src=\"{{ asset('assets/img/reparation.webp') }}\" alt=\"Réparation de motos\" width=\"300\" height=\"200\">
    </div>
    <div class=\"col reveal-left buble_size\">
        <img class=\"img-fluid acc_buble_img\" src=\"{{ asset('assets/img/Entretien.webp') }}\" alt=\"Entretien de motos\" width=\"300\" height=\"200\">
    </div>
</section>
<section class=\"row reveal-bot buble_size text-center\">
    <div class=\"col\">
        <img class=\"img-fluid acc_buble_img\" src=\"{{ asset('assets/img/Preparation.webp') }}\" alt=\"Préparation de motos\" width=\"300\" height=\"200\">
    </div>
</section>
<address class=\"row my-5 joinme_background py-2\">
    <div class=\"col px-5 text-center  mt-5\">
        <div class=\"col mt-2\">
            <p class=\"harley_style mt-2\">Contactez-nous</p>
        </div>
        <div class=\"row\">
            <a href=\"tel:0647517650\">
                <p class=\"text_adress icon_color\"><i class=\"fa-solid fa-phone icon_color \"></i>Téléphone : 0647517650</p>
            </a>
        </div>
        <div class=\"row\">
            <a href=\"https://www.facebook.com/p/Did-Kustom-Garage-100088832258671/\">
                <p class=\"text_adress icon_color\"><i class=\"fa-brands fa-facebook icon_color \"></i>Facebook</p>
            </a>
        </div>
        <div class=\"row\">
            <p class=\"adress_title\"><i class=\"fa-solid fa-envelope\"></i> Newsletter <i class=\"fa-solid fa-envelope\"></i></p>
        </div>
        <div class=\"row\">
            <div id=\"success_request\"></div>
            <form id=\"email_form\">
                <input class=\"rounded\" type=\"email\" id=\"email\" name=\"email\" placeholder=\"Votre email\" required>
                <button class=\"btn btn-dark\" id=\"submit_email\" type=\"submit\">Envoyer</button>
            </form>
        </div>
    </div>
    <div class=\"col text-center mt-5\">
        <a class=\"mt-3\" target='_blank' href=\"https://www.google.com/maps/place/Did+Kustom+Garage/@50.0633835,1.6462635,17z/data=!3m1!4b1!4m6!3m5!1s0x47ddf78a98859721:0x5c7e647903e85314!8m2!3d50.0633835!4d1.6462635!16s%2Fg%2F11txt_b6f0?entry=ttu\">
            <p class=\"text_adress icon_color\"><i class=\"fa-solid fa-location-dot icon_color\"></i>93 Pl. de Eglise, 80210 Chepy</p>
            <img height=\"75%\" width=\"75%\" src=\"{{ asset('assets/img/Map.webp') }}\" alt=\"Localisation du garage\" width=\"600\" height=\"450\">
        </a>
    </div>
</address>

{% endblock %}
{% block javascripts %}
   {# script #}
<script src=\"{{ asset('assets/js/mail.min.js') }}\"></script>
{% endblock %}", "page/accueil.html.twig", "/home/deblox/Desktop/Did Custom/webappDid/templates/page/accueil.html.twig");
    }
}
