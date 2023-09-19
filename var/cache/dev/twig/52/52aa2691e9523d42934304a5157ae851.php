<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_c370d7d405289a617fe4908b9ef6f69f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
";
        // line 7
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<div class=\"container\">
    <h3 id=\"projects\" class=\"h1 my-5\">";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Projects", [], "messages");
        echo "</h3>
    <div class=\"row\">

        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <img class=\"card-img-top\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/projets/tablet-coffee.jpg"), "html", null, true);
        echo "\" alt=\"Projet 1\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Card title</h5>
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <img class=\"card-img-top\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/projets/startup-desktop.jpg"), "html", null, true);
        echo "\" alt=\"Projet 1\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Card title</h5>
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <img class=\"card-img-top\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/projets/designers-desk.jpg"), "html", null, true);
        echo "\" alt=\"Projet 1\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Card title</h5>
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
                </div>
            </div>
        </div>

    </div>
</div>

<div class=\"container\">
    <h3 id=\"skills\" class=\"h1 my-5\">";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Skills", [], "messages");
        echo "</h3>
    <div class=\"row\">

        <div class=\"col-md-4 p-3\">
            <ul class=\"list-group\">
                <li class=\"list-group-item disabled\">
                    <h4>";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Languages / Technologies", [], "messages");
        echo "</h4>
                </li>
                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skills1"]) || array_key_exists("skills1", $context) ? $context["skills1"] : (function () { throw new RuntimeError('Variable "skills1" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 62
            echo "                <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "name", [], "any", false, false, false, 62), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "            </ul>
        </div>

        <div class=\"col-md-4 p-3\">
            <ul class=\"list-group\">
                <li class=\"list-group-item disabled\">
                    <h4>";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Frameworks / Libraries", [], "messages");
        echo "</h4>
                </li>
                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skills2"]) || array_key_exists("skills2", $context) ? $context["skills2"] : (function () { throw new RuntimeError('Variable "skills2" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 73
            echo "                <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "name", [], "any", false, false, false, 73), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            </ul>
        </div>

        <div class=\"col-md-4 p-3\">
            <ul class=\"list-group\">
                <li class=\"list-group-item disabled\">
                    <h4>";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Databases", [], "messages");
        echo "</h4>
                </li>
                ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skills3"]) || array_key_exists("skills3", $context) ? $context["skills3"] : (function () { throw new RuntimeError('Variable "skills3" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 84
            echo "                <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "name", [], "any", false, false, false, 84), "html", null, true);
            echo "</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "            </ul>
        </div>

    </div>

</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 86,  222 => 84,  218 => 83,  213 => 81,  205 => 75,  196 => 73,  192 => 72,  187 => 70,  179 => 64,  170 => 62,  166 => 61,  161 => 59,  152 => 53,  135 => 39,  120 => 27,  105 => 15,  97 => 10,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% trans %}Home{% endtrans %}{% endblock %}

{% block body %}

{{ parent() }}

<div class=\"container\">
    <h3 id=\"projects\" class=\"h1 my-5\">{% trans %}Projects{% endtrans %}</h3>
    <div class=\"row\">

        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <img class=\"card-img-top\" src=\"{{ asset('img/projets/tablet-coffee.jpg') }}\" alt=\"Projet 1\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Card title</h5>
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <img class=\"card-img-top\" src=\"{{ asset('img/projets/startup-desktop.jpg') }}\" alt=\"Projet 1\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Card title</h5>
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
                </div>
            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <img class=\"card-img-top\" src=\"{{ asset('img/projets/designers-desk.jpg') }}\" alt=\"Projet 1\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Card title</h5>
                    <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>
                </div>
            </div>
        </div>

    </div>
</div>

<div class=\"container\">
    <h3 id=\"skills\" class=\"h1 my-5\">{% trans %}Skills{% endtrans %}</h3>
    <div class=\"row\">

        <div class=\"col-md-4 p-3\">
            <ul class=\"list-group\">
                <li class=\"list-group-item disabled\">
                    <h4>{% trans %}Languages / Technologies{% endtrans %}</h4>
                </li>
                {% for skill in skills1 %}
                <li class=\"list-group-item\">{{ skill.name }}</li>
                {% endfor %}
            </ul>
        </div>

        <div class=\"col-md-4 p-3\">
            <ul class=\"list-group\">
                <li class=\"list-group-item disabled\">
                    <h4>{% trans %}Frameworks / Libraries{% endtrans %}</h4>
                </li>
                {% for skill in skills2 %}
                <li class=\"list-group-item\">{{ skill.name }}</li>
                {% endfor %}
            </ul>
        </div>

        <div class=\"col-md-4 p-3\">
            <ul class=\"list-group\">
                <li class=\"list-group-item disabled\">
                    <h4>{% trans %}Databases{% endtrans %}</h4>
                </li>
                {% for skill in skills3 %}
                <li class=\"list-group-item\">{{ skill.name }}</li>
                {% endfor %}
            </ul>
        </div>

    </div>

</div>

{% endblock %}", "home/index.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\home\\index.html.twig");
    }
}
