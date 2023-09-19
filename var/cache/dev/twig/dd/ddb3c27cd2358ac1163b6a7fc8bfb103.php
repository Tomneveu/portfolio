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

/* baseAdmin.html.twig */
class __TwigTemplate_432c1e1695977684148214250942d210 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

  <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">

  ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>

<body>
  ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "</body>

";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "<div class=\"container\">
  <footer class=\"py-3 my-4\">
    <ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
      <li class=\"nav-item\"><a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link px-2 text-muted\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        // line 93
        echo "</a></li>
      <li class=\"nav-item\"><a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\" class=\"nav-link px-2 text-muted\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", [], "messages");
        // line 95
        echo "</a></li>
      <li class=\"nav-item\"><a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"nav-link px-2 text-muted\"><svg width=\"1em\"
            height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-envelope-fill\" fill=\"currentColor\"
            xmlns=\"http://www.w3.org/2000/svg\">
            <path fill-rule=\"evenodd\"
              d=\"M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z\" />
          </svg>
          Contact</a></li>
      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("About", [], "messages");
        echo "</a></li>
    </ul>
    <p class=\"text-center text-muted\">";
        // line 105
        echo (isset($context["copyright"]) || array_key_exists("copyright", $context) ? $context["copyright"] : (function () { throw new RuntimeError('Variable "copyright" does not exist.', 105, $this->source); })());
        echo "</p>
  </footer>
</div>

<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
  integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
  integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.5.1.js\" integrity=\"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=\"
  crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Welcome !", [], "messages");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "  <header>
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [["success", "danger"]], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 20
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 21
                echo "    <div class=\"flash-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " p-3 fixed-top bg-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " text-white text-center\">
      ";
                // line 22
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    <div class=\"d-flex justify-content-between\">
      <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <a id=\"Home\" class=\"navbar-brand\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">ThomDev</a>

        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 31
            echo "        ";
            if (($context["locale"] != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "locale", [], "any", false, false, false, 31))) {
                // line 32
                echo "        <a class=\"navbar-brand\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_locale", ["locale" => $context["locale"]]), "html", null, true);
                echo "\">
          <img src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/drapeaux/drapeau_" . $context["locale"]) . ".png")), "html", null, true);
                echo "\" alt=\"drapeau ";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "\">
        </a>
        ";
            }
            // line 36
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
          aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
          <ul class=\"navbar-nav\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home Page", [], "messages");
        echo "<span
                  class=\"sr-only\">(current)</span></a>
            </li>
            ";
        // line 49
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 50
            echo "            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home admin", [], "messages");
            echo "<span
                  class=\"sr-only\">(current)</span></a>
            </li>
            <!-- <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#projects\">Mes projets</a>
          </li> -->
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_skills");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List Skills", [], "messages");
            echo "</a>
            </li>
            ";
        }
        // line 61
        echo "          </ul>
          <div class=\"ml-auto p-1 bd-highlight\">
            ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63)) {
            // line 64
            echo "            <span class=\"navbar-text text-white px-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "username", [], "any", false, false, false, 64), "html", null, true);
            echo " -
              <a class=\"p-2 mb-2 bg-secondary text-dark\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign out", [], "messages");
            // line 66
            echo "</a>
            </span>
            ";
        }
        // line 69
        echo "          </div>
        </div>
      </nav>
    </div>


    <div class=\"titre\">
      <!-- <h2 class=\"text\">Thomas Neveu Web Developer &amp; Mobile Web</h2> -->
      <h1 class=\"text\">";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", [], "messages");
        echo "</h1>
    </div>

  </header>
  <div class=\"container\">
    <button onclick=\"window.history.back();\" type=\"button\" class=\"btn btn-outline-danger float-left\">";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Back", [], "messages");
        // line 83
        echo "</button>
  </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 88,  339 => 83,  337 => 82,  329 => 77,  319 => 69,  314 => 66,  310 => 65,  305 => 64,  303 => 63,  299 => 61,  291 => 58,  279 => 51,  276 => 50,  274 => 49,  266 => 46,  255 => 37,  249 => 36,  241 => 33,  236 => 32,  233 => 31,  229 => 30,  224 => 28,  220 => 26,  214 => 25,  205 => 22,  198 => 21,  193 => 20,  189 => 19,  186 => 18,  176 => 17,  158 => 13,  139 => 8,  116 => 105,  111 => 103,  101 => 96,  98 => 95,  94 => 94,  91 => 93,  87 => 92,  82 => 89,  80 => 88,  76 => 86,  74 => 17,  69 => 14,  67 => 13,  62 => 11,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

  <title>{% block title %}{% trans %}Welcome !{% endtrans %}{% endblock %}</title>

  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">

  {% block stylesheets %}{% endblock %}
</head>

<body>
  {% block body %}
  <header>
    {% for label, messages in app.flashes(['success', 'danger']) %}
    {% for message in messages %}
    <div class=\"flash-{{ label }} p-3 fixed-top bg-{{ label }} text-white text-center\">
      {{ message }}
    </div>
    {% endfor %}
    {% endfor %}
    <div class=\"d-flex justify-content-between\">
      <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <a id=\"Home\" class=\"navbar-brand\" href=\"{{ path('home') }}\">ThomDev</a>

        {% for locale in locales %}
        {% if locale != app.request.locale %}
        <a class=\"navbar-brand\" href=\"{{ path('change_locale', {'locale': locale}) }}\">
          <img src=\"{{ asset('img/drapeaux/drapeau_' ~ locale ~ '.png') }}\" alt=\"drapeau {{ locale }}\">
        </a>
        {% endif %}
        {% endfor %}

        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
          aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
          <ul class=\"navbar-nav\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"{{ path('home') }}\">{% trans %}Home Page{% endtrans %}<span
                  class=\"sr-only\">(current)</span></a>
            </li>
            {% if is_granted('ROLE_ADMIN') %}
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"{{ path('admin') }}\">{% trans %}Home admin{% endtrans %}<span
                  class=\"sr-only\">(current)</span></a>
            </li>
            <!-- <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#projects\">Mes projets</a>
          </li> -->
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('admin_skills') }}\">{% trans %}List Skills{% endtrans %}</a>
            </li>
            {% endif %}
          </ul>
          <div class=\"ml-auto p-1 bd-highlight\">
            {% if app.user %}
            <span class=\"navbar-text text-white px-2\">{{ app.user.username }} -
              <a class=\"p-2 mb-2 bg-secondary text-dark\" href=\"{{ path('app_logout') }}\">{% trans %}Sign out{% endtrans
                %}</a>
            </span>
            {% endif %}
          </div>
        </div>
      </nav>
    </div>


    <div class=\"titre\">
      <!-- <h2 class=\"text\">Thomas Neveu Web Developer &amp; Mobile Web</h2> -->
      <h1 class=\"text\">{% trans %}Admin{% endtrans %}</h1>
    </div>

  </header>
  <div class=\"container\">
    <button onclick=\"window.history.back();\" type=\"button\" class=\"btn btn-outline-danger float-left\">{% trans %}Back{%
      endtrans %}</button>
  </div>
  {% endblock %}
</body>

{% block javascripts %}{% endblock %}
<div class=\"container\">
  <footer class=\"py-3 my-4\">
    <ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
      <li class=\"nav-item\"><a href=\"{{ path('home') }}\" class=\"nav-link px-2 text-muted\">{% trans %}Home{% endtrans
          %}</a></li>
      <li class=\"nav-item\"><a href=\"{{ path('admin') }}\" class=\"nav-link px-2 text-muted\">{% trans %}Admin{% endtrans
          %}</a></li>
      <li class=\"nav-item\"><a href=\"{{ path('contact') }}\" class=\"nav-link px-2 text-muted\"><svg width=\"1em\"
            height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-envelope-fill\" fill=\"currentColor\"
            xmlns=\"http://www.w3.org/2000/svg\">
            <path fill-rule=\"evenodd\"
              d=\"M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z\" />
          </svg>
          Contact</a></li>
      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">{% trans %}About{% endtrans %}</a></li>
    </ul>
    <p class=\"text-center text-muted\">{{ copyright|raw }}</p>
  </footer>
</div>

<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
  integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
  integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.5.1.js\" integrity=\"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=\"
  crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>

</html>", "baseAdmin.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\baseAdmin.html.twig");
    }
}
