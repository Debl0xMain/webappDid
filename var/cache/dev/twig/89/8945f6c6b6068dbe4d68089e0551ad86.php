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

/* page/ocassion_detail.html.twig */
class __TwigTemplate_b5ca6d9c48599c7197b52897cfe56159 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/ocassion_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/ocassion_detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/ocassion_detail.html.twig", 1);
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
        yield "<link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/occasion_detail.min.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["MotoFind"]) || array_key_exists("MotoFind", $context) ? $context["MotoFind"] : (function () { throw new RuntimeError('Variable "MotoFind" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["moto"]) {
            // line 10
            yield "    <h1 class=\"moto_title text-center\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "motoName", [], "any", false, false, false, 10), "html", null, true);
            yield "</h1>

";
            // line 13
            yield "<div class=\"block_responsive row\">

    <section class=\"carrousel size_carrousel col rounded\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img  src=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "motoPicture", [], "any", false, false, false, 19))), "html", null, true);
            yield "\" class=\"img-fluid rounded-start my-auto rounded mx-1 img_carrousel\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "motoPicture", [], "any", false, false, false, 19), "html", null, true);
            yield "\">
            </div>
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "carousel", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 22
                yield "                <div class=\"carousel-item\">
                    <img src=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . $context["img"])), "html", null, true);
                yield "\" class=\"d-block w-100 rounded\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["img"], "html", null, true);
                yield "\">
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
        </button>
        </div>
    </section>

    <section class=\"col text-center text_bg bg-secondary border-white border rounded\">
        <div class=\"row mt-4\">
            <div class=\"col\">
                <p class='text_desc'>Marque : ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "marque", [], "any", false, false, false, 41), "html", null, true);
            yield "</p>
            </div>
            <div class=\"col\">
                <p class='text_desc'>Année : ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "motoYear", [], "any", false, false, false, 44), "html", null, true);
            yield "</p>
            </div>
        </div>
        <hr class=\"text_desc\">
        <div class=\"row\">
            <div class=\"col\">
                <p class='text_desc'>Prix : ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "motoPrice", [], "any", false, false, false, 50), 2, ",", " "), "html", null, true);
            yield "€</p>
            </div>
            <div class=\"col\">
                <p class='text_desc'>Cylindrée : ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "cylindre", [], "any", false, false, false, 53), "html", null, true);
            yield "</p>
            </div>    
        </div>
        <hr class=\"text_desc\">
        <div class=\"row\">
            <div class=\"col\">
                <p class='text_desc'>Permis : ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "permis", [], "any", false, false, false, 59), "html", null, true);
            yield "</p>
            </div>
        </div>
        <hr class=\"text_desc\">
        <div class=\"row\">
            <div class=\"col\">
            <p class=\"text_desc my-2\">Option :</p>
            <ul class=\"text_desc mx-2\">
            ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "motoOption", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 68
                yield "                <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                yield "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            yield "            </ul>
        </div>
        <div class=\"col\">
            <p class='text_desc my-2'>Description :</p>
            <p class='text_desc'>";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "motoDesc", [], "any", false, false, false, 74), "html", null, true);
            yield "</p>
        </div>
    </section>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 83
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        yield "
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
        return "page/ocassion_detail.html.twig";
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
        return array (  252 => 84,  242 => 83,  229 => 79,  218 => 74,  212 => 70,  203 => 68,  199 => 67,  188 => 59,  179 => 53,  173 => 50,  164 => 44,  158 => 41,  141 => 26,  130 => 23,  127 => 22,  123 => 21,  116 => 19,  108 => 13,  102 => 10,  98 => 9,  95 => 8,  85 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/occasion_detail.min.css') }}\">
{% endblock %}

{% block body %}

{% for moto in MotoFind %}
    <h1 class=\"moto_title text-center\">{{moto.motoName}}</h1>

{# Carrousel photo #}
<div class=\"block_responsive row\">

    <section class=\"carrousel size_carrousel col rounded\">
        <div id=\"carouselExampleIndicators\" class=\"carousel slide\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img  src=\"{{ asset('assets/img/' ~ moto.motoPicture) }}\" class=\"img-fluid rounded-start my-auto rounded mx-1 img_carrousel\" alt=\"{{moto.motoPicture}}\">
            </div>
            {% for img in moto.carousel %}
                <div class=\"carousel-item\">
                    <img src=\"{{ asset('assets/img/' ~ img) }}\" class=\"d-block w-100 rounded\" alt=\"{{img}}\">
                </div>
            {% endfor %}
        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
        </button>
        </div>
    </section>

    <section class=\"col text-center text_bg bg-secondary border-white border rounded\">
        <div class=\"row mt-4\">
            <div class=\"col\">
                <p class='text_desc'>Marque : {{ moto.marque }}</p>
            </div>
            <div class=\"col\">
                <p class='text_desc'>Année : {{ moto.motoYear }}</p>
            </div>
        </div>
        <hr class=\"text_desc\">
        <div class=\"row\">
            <div class=\"col\">
                <p class='text_desc'>Prix : {{ moto.motoPrice|number_format(2, ',', ' ' ) }}€</p>
            </div>
            <div class=\"col\">
                <p class='text_desc'>Cylindrée : {{ moto.cylindre }}</p>
            </div>    
        </div>
        <hr class=\"text_desc\">
        <div class=\"row\">
            <div class=\"col\">
                <p class='text_desc'>Permis : {{ moto.permis }}</p>
            </div>
        </div>
        <hr class=\"text_desc\">
        <div class=\"row\">
            <div class=\"col\">
            <p class=\"text_desc my-2\">Option :</p>
            <ul class=\"text_desc mx-2\">
            {% for option in moto.motoOption %}
                <li>{{ option }}</li>
            {% endfor %}
            </ul>
        </div>
        <div class=\"col\">
            <p class='text_desc my-2'>Description :</p>
            <p class='text_desc'>{{ moto.motoDesc }}</p>
        </div>
    </section>
</div>
{% endfor %}


{% endblock %}

{% block javascripts %}

{% endblock %}
", "page/ocassion_detail.html.twig", "/home/deblox/Desktop/Did Custom/webappDid/templates/page/ocassion_detail.html.twig");
    }
}
