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
        yield "    <h1 class=\"harley_style text-center\">Nos Occasions</h1>

    <form id=\"filterForm\">
        <section class=\"border px-5 my-auto py-2 bg-secondary\">
            <h2 class=\"harley_style2 text-center\">Filtrer par marque :</h2>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["marques"]) || array_key_exists("marques", $context) ? $context["marques"] : (function () { throw new RuntimeError('Variable "marques" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 14
            yield "                <label>
            ";
            // line 15
            $context["img"] = (Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "name", [], "any", false, false, false, 15)) . ".webp");
            // line 16
            yield "                    <input type=\"checkbox\" class=\"marqueCheckbox\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "id", [], "any", false, false, false, 16), "html", null, true);
            yield "\">
                    <img src=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/logos_webp/" . (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 17, $this->source); })()))), "html", null, true);
            yield "\" class=\"img-fluid img_logo rounded-start my-auto rounded mx-1\" alt=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "name", [], "any", false, false, false, 17), "html", null, true);
            yield " title=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["marque"], "name", [], "any", false, false, false, 17), "html", null, true);
            yield ">
                </label>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "        </section>

        <section class=\"border px-5 my-auto py-2 bg-secondary\">
            <h2 class=\"harley_style2 text-center\">Filtrer par permis :</h2>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["permis"]);
        foreach ($context['_seq'] as $context["_key"] => $context["permis"]) {
            // line 25
            yield "                <label>
                    <input type=\"checkbox\" class=\"marqueCheckboxpermis\" value=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["permis"], "name", [], "any", false, false, false, 26), "html", null, true);
            yield "\">
                   <p>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["permis"], "name", [], "any", false, false, false, 27), "html", null, true);
            yield "</p>
                </label>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "        </section>
    </form>
<div class=\"my-5 row row-cols-1 row-cols-md-2 g-4\" id=\"moto_list\">
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["motos"]) || array_key_exists("motos", $context) ? $context["motos"] : (function () { throw new RuntimeError('Variable "motos" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["moto"]) {
            // line 34
            yield "  <div class=\"col\">
  ";
            // line 36
            yield "    <div class=\"card mb-3 text-white bg-secondary border-white\">
        <div class=\"row g-0\">
            <div class=\"col-md-4 my-auto\">
            <img  src=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "motoPicture", [], "any", false, false, false, 39))), "html", null, true);
            yield "\" class=\"img-fluid rounded-start my-auto rounded mx-1\" alt=\"...\">
            </div>
            <div class=\"col-md-8\">
            <div class=\"card-body\">
                <h5 class=\"card-title text-center\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "MotoName", [], "any", false, false, false, 43), "html", null, true);
            yield "</h5>
                <p class=\"card-text text-center\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "marque", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
            yield "</p>
                <hr class=\"my-1\">
                <div class=\"row\">
                    <div class=\"col\">
                        <p class=\"card-text text-center\">Option</p>
                        <p class=\"card-text\">
                            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "MotoOption", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 51
                yield "                                <li class='text_ocass'>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                yield "</li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "</p>
                    </div>
                    <div class=\"col\">
                        <p class=\"card-text text-center\">Description</p>
                        <p class=\"card-text text-center\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "motoDesc", [], "any", false, false, false, 56), "html", null, true);
            yield "</p>
                    </div>
                </div>
                <hr class=\"my-1\">
                <div class=\"row \">
                    <div class=\"col\">
                        <p class=\"card-text text-center\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "MotoYear", [], "any", false, false, false, 62), "html", null, true);
            yield "</p>
                    </div>
                    <div class=\"col\">
                        <p class=\"card-text text-center\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "MotoPrice", [], "any", false, false, false, 65), 2, ",", " "), "html", null, true);
            yield " €</p>
                    </div>
                </div>
                <div class=\"row mt-1 \">
                    <a class=\"card-text text-end\" href=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detail_occasion", ["moto_id" => CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\">
                        <button class=\"btn btn-outline-dark btn-sm\">Voir plus... ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["moto"], "id", [], "any", false, false, false, 70), "html", null, true);
            yield "</button>
                    </a>
                </div>
            </div>
            </div>
        </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "</div>

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
        return array (  275 => 84,  265 => 83,  252 => 79,  237 => 70,  233 => 69,  226 => 65,  220 => 62,  211 => 56,  205 => 52,  196 => 51,  192 => 50,  183 => 44,  179 => 43,  172 => 39,  167 => 36,  164 => 34,  160 => 33,  155 => 30,  146 => 27,  142 => 26,  139 => 25,  135 => 24,  129 => 20,  116 => 17,  111 => 16,  109 => 15,  106 => 14,  102 => 13,  95 => 8,  85 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/occasion.min.css') }}\">
{% endblock %}

{% block body %}
    <h1 class=\"harley_style text-center\">Nos Occasions</h1>

    <form id=\"filterForm\">
        <section class=\"border px-5 my-auto py-2 bg-secondary\">
            <h2 class=\"harley_style2 text-center\">Filtrer par marque :</h2>
            {% for marque in marques %}
                <label>
            {% set img = (marque.name|lower) ~ '.webp' %}
                    <input type=\"checkbox\" class=\"marqueCheckbox\" value=\"{{ marque.id }}\">
                    <img src=\"{{ asset('assets/img/logos_webp/' ~ img) }}\" class=\"img-fluid img_logo rounded-start my-auto rounded mx-1\" alt={{marque.name}} title={{marque.name}}>
                </label>
            {% endfor %}
        </section>

        <section class=\"border px-5 my-auto py-2 bg-secondary\">
            <h2 class=\"harley_style2 text-center\">Filtrer par permis :</h2>
            {% for permis in permis %}
                <label>
                    <input type=\"checkbox\" class=\"marqueCheckboxpermis\" value=\"{{permis.name}}\">
                   <p>{{permis.name}}</p>
                </label>
            {% endfor %}
        </section>
    </form>
<div class=\"my-5 row row-cols-1 row-cols-md-2 g-4\" id=\"moto_list\">
{% for moto in motos %}
  <div class=\"col\">
  {# card #}
    <div class=\"card mb-3 text-white bg-secondary border-white\">
        <div class=\"row g-0\">
            <div class=\"col-md-4 my-auto\">
            <img  src=\"{{ asset('assets/img/' ~ moto.motoPicture) }}\" class=\"img-fluid rounded-start my-auto rounded mx-1\" alt=\"...\">
            </div>
            <div class=\"col-md-8\">
            <div class=\"card-body\">
                <h5 class=\"card-title text-center\">{{moto.MotoName}}</h5>
                <p class=\"card-text text-center\">{{moto.marque.name}}</p>
                <hr class=\"my-1\">
                <div class=\"row\">
                    <div class=\"col\">
                        <p class=\"card-text text-center\">Option</p>
                        <p class=\"card-text\">
                            {% for option in moto.MotoOption %}
                                <li class='text_ocass'>{{ option }}</li>
                            {% endfor %}</p>
                    </div>
                    <div class=\"col\">
                        <p class=\"card-text text-center\">Description</p>
                        <p class=\"card-text text-center\">{{moto.motoDesc}}</p>
                    </div>
                </div>
                <hr class=\"my-1\">
                <div class=\"row \">
                    <div class=\"col\">
                        <p class=\"card-text text-center\">{{moto.MotoYear}}</p>
                    </div>
                    <div class=\"col\">
                        <p class=\"card-text text-center\">{{ moto.MotoPrice|number_format(2, ',', ' ' ) }} €</p>
                    </div>
                </div>
                <div class=\"row mt-1 \">
                    <a class=\"card-text text-end\" href=\"{{ path(\"app_detail_occasion\", {\"moto_id\" :moto.id }) }}\">
                        <button class=\"btn btn-outline-dark btn-sm\">Voir plus... {{moto.id}}</button>
                    </a>
                </div>
            </div>
            </div>
        </div>
    </div>
  </div>
{% endfor %}
</div>

{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('assets/js/select.min.js') }}\"></script>
{% endblock %}
", "page/occasion.html.twig", "/home/deblox/Desktop/Did Custom/webappDid/templates/page/occasion.html.twig");
    }
}
