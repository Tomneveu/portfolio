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

/* admin/admin.html.twig */
class __TwigTemplate_d07a7a805be270450b3782b38caf3bfb extends Template
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/admin.html.twig", 1);
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

        echo "Admin";
        
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
    <h3 id=\"projects\" class=\"h1 my-5\">Admin</h3>
    <div class=\"row\">

        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Compétences</h5>
                    <p class=\"card-text\">Voir le tableau de toutes les compétences.</p>
                    <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_skills");
        echo "\" class=\"btn btn-primary\">Voir liste</a>
                </div>
            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Ajouter compétences</h5>
                    <p class=\"card-text\">Formulaire pour ajouter de nouvelles compétences.</p>
                    <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("skill_create");
        echo "\" class=\"btn btn-primary\">Ajouter compétences</a>
                </div>
            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Inscription</h5>
                    <p class=\"card-text\">...</p>
                    <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"btn btn-primary\">S'inscrire</a>
                </div>
            </div>
        </div>

    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 38,  118 => 28,  105 => 18,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Admin{% endblock %}

{% block body %}

{{ parent() }}

<div class=\"container\">
    <h3 id=\"projects\" class=\"h1 my-5\">Admin</h3>
    <div class=\"row\">

        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Compétences</h5>
                    <p class=\"card-text\">Voir le tableau de toutes les compétences.</p>
                    <a href=\"{{ path('admin_skills') }}\" class=\"btn btn-primary\">Voir liste</a>
                </div>
            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Ajouter compétences</h5>
                    <p class=\"card-text\">Formulaire pour ajouter de nouvelles compétences.</p>
                    <a href=\"{{ path('skill_create') }}\" class=\"btn btn-primary\">Ajouter compétences</a>
                </div>
            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card bg-light mb-3\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Inscription</h5>
                    <p class=\"card-text\">...</p>
                    <a href=\"{{ path('app_register') }}\" class=\"btn btn-primary\">S'inscrire</a>
                </div>
            </div>
        </div>

    </div>
</div>

{% endblock %}", "admin/admin.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\admin\\admin.html.twig");
    }
}
