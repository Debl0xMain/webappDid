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

/* page/occasion.html.twig */
class __TwigTemplate_224975ca8046227dc56f0f3b05a0e80a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/occasion.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/occasion.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/occasion.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/occasion.min.css"), "html", null, true);
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
        yield "    <h1>Liste des motos</h1>

    <form id=\"filterForm\">
        <h2>Filtrer par marque :</h2>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["marques"]) || array_key_exists("marques", $context) ? $context["marques"] : (function () { throw new RuntimeError('Variable "marques" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 13
            yield "            <label>
                <input type=\"checkbox\" class=\"marqueCheckbox\" value=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "id", [], "any", false, false, false, 14), "html", null, true);
            yield "\"> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "name", [], "any", false, false, false, 14), "html", null, true);
            yield "
            </label>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "    </form>

<div class=\"row row-cols-2 moto_list\" id='moto_list'>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["motos"]) || array_key_exists("motos", $context) ? $context["motos"] : (function () { throw new RuntimeError('Variable "motos" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["moto"]) {
            // line 21
            yield "        <section class='col my-3 border'>
            <div class=\"row\">
                <div class=\"col\">
                    <img class=\"img_ocass\" src=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "motoPicture", [], "any", false, false, false, 24))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "MotoName", [], "any", false, false, false, 24), "html", null, true);
            yield "\">
                </div>
                <div class=\"col\">
                    <div class=\"row\">
                        <p class='text_ocass'>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "</p>
                    </div>
                    <div class=\"row\">
                        <p class='text_ocass'>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "MotoName", [], "any", false, false, false, 31), "html", null, true);
            yield "</p>
                    </div>
                    <div class=\"row\">
                        <p class='text_ocass'>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "marque", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
            yield "</p>
                    </div>
                    <div class=\"row\">
                        <p class='text_ocass'>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "MotoYear", [], "any", false, false, false, 37), "html", null, true);
            yield "</p>
                    </div>
                    ";
            // line 40
            yield "                    <div class=\"row\">
                        <p class='text_ocass'>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "motoDesc", [], "any", false, false, false, 41), "html", null, true);
            yield "</p>
                    </div>
                    <div class=\"row\">
                        <p class='text_ocass'>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "MotoPrice", [], "any", false, false, false, 44), "html", null, true);
            yield "</p>
                    </div>
                    <div class=\"row\">
                        <ul>
                            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "MotoOption", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 49
                yield "                                <li class='text_ocass'>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                yield "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "                        </ul>
                    </div>                    
                </div>
            </div>
        </section>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        yield "</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/select.min.js"), "html", null, true);
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
        return "page/occasion.html.twig";
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
        return array (  228 => 62,  218 => 61,  205 => 57,  194 => 51,  185 => 49,  181 => 48,  174 => 44,  168 => 41,  165 => 40,  160 => 37,  154 => 34,  148 => 31,  142 => 28,  133 => 24,  128 => 21,  124 => 20,  119 => 17,  108 => 14,  105 => 13,  101 => 12,  95 => 8,  85 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/occasion.min.css') }}\">
{% endblock %}

{% block body %}
    <h1>Liste des motos</h1>

    <form id=\"filterForm\">
        <h2>Filtrer par marque :</h2>
        {% for marque in marques %}
            <label>
                <input type=\"checkbox\" class=\"marqueCheckbox\" value=\"{{ marque.id }}\"> {{ marque.name }}
            </label>
        {% endfor %}
    </form>

<div class=\"row row-cols-2 moto_list\" id='moto_list'>
        {% for moto in motos %}
        <section class='col my-3 border'>
            <div class=\"row\">
                <div class=\"col\">
                    <img class=\"img_ocass\" src=\"{{ asset('assets/img/' ~ moto.motoPicture) }}\" alt=\"{{moto.MotoName}}\">
                </div>
                <div class=\"col\">
                    <div class=\"row\">
                        <p class='text_ocass'>{{moto.id}}</p>
                    </div>
                    <div class=\"row\">
                        <p class='text_ocass'>{{moto.MotoName}}</p>
                    </div>
                    <div class=\"row\">
                        <p class='text_ocass'>{{moto.marque.name}}</p>
                    </div>
                    <div class=\"row\">
                        <p class='text_ocass'>{{moto.MotoYear}}</p>
                    </div>
                    {# affiche que le debut #}
                    <div class=\"row\">
                        <p class='text_ocass'>{{moto.motoDesc}}</p>
                    </div>
                    <div class=\"row\">
                        <p class='text_ocass'>{{moto.MotoPrice}}</p>
                    </div>
                    <div class=\"row\">
                        <ul>
                            {% for option in moto.MotoOption %}
                                <li class='text_ocass'>{{ option }}</li>
                            {% endfor %}
                        </ul>
                    </div>                    
                </div>
            </div>
        </section>
        {% endfor %}
</div>

{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('assets/js/select.min.js') }}\"></script>
{% endblock %}
", "page/occasion.html.twig", "/home/deblox/Desktop/Did Custom/webappDid/templates/page/occasion.html.twig");
    }
}
