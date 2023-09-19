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

/* base.html.twig */
class __TwigTemplate_648949c0ef0f6564a76dadc731c5c92c extends Template
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
        // line 91
        echo "
  ";
        // line 92
        $this->displayBlock('javascripts', $context, $blocks);
        // line 93
        echo "
  <div class=\"container\">
    <footer class=\"py-3 my-4\">
      <ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
        <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        echo "</a></li>
        ";
        // line 98
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 99
            echo "        <li class=\"nav-item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"nav-link px-2 text-muted\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", [], "messages");
            // line 100
            echo "</a></li>
        ";
        }
        // line 102
        echo "        <li class=\"nav-item\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"nav-link px-2 text-muted\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign in", [], "messages");
        // line 103
        echo "</a></li>
        <li class=\"nav-item\"><a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"nav-link px-2 text-muted\"><svg width=\"1em\"
              height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-envelope-fill\" fill=\"currentColor\"
              xmlns=\"http://www.w3.org/2000/svg\">
              <path fill-rule=\"evenodd\"
                d=\"M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z\" />
            </svg>
            Contact</a></li>
        <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("About", [], "messages");
        echo "</a></li>
      </ul>
      <p class=\"text-center text-muted\">";
        // line 113
        echo (isset($context["copyright"]) || array_key_exists("copyright", $context) ? $context["copyright"] : (function () { throw new RuntimeError('Variable "copyright" does not exist.', 113, $this->source); })());
        echo "</p>
    </footer>
  </div>

  <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
    integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
    crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
    integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
    crossorigin=\"anonymous\"></script>
  <script src=\"https://code.jquery.com/jquery-3.5.1.js\" integrity=\"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=\"
    crossorigin=\"anonymous\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js\"></script>
  <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>

</body>

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
    <div class=\"d-flex justify-content-between\">
      <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <a id=\"Home\" class=\"navbar-brand\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">ThomDev</a>

        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 24
            echo "        ";
            if (($context["locale"] != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "locale", [], "any", false, false, false, 24))) {
                // line 25
                echo "        <a class=\"navbar-brand\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_locale", ["locale" => $context["locale"]]), "html", null, true);
                echo "\">
          <img src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/drapeaux/drapeau_" . $context["locale"]) . ".png")), "html", null, true);
                echo "\" alt=\"drapeau ";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "\">
        </a>
        ";
            }
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\"
          aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
          <ul class=\"navbar-nav\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        echo "<span
                  class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#projects\">";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Projects", [], "messages");
        echo "</a>
              <!-- <a class=\"nav-link\" href=\"#projects\">Mes projets</a> -->
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#skills\">";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Skills", [], "messages");
        echo "</a>
              <!-- <a class=\"nav-link\" href=\"#skills\">Comp&eacute;tences</a> -->
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contact", [], "messages");
        echo "</a>
            </li>
            ";
        // line 53
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 54
            echo "            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", [], "messages");
            echo "</a>
            </li>
            ";
        }
        // line 58
        echo "          </ul>

          <div class=\"ml-auto p-2 bd-highlight\">
            ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61)) {
            // line 62
            echo "            <span class=\"navbar-text text-white px-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "username", [], "any", false, false, false, 62), "html", null, true);
            echo " -
              <a class=\"p-2 mb-2 bg-secondary text-dark\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign out", [], "messages");
            // line 64
            echo "</a>
            </span>
            ";
        }
        // line 67
        echo "          </div>
        </div>
      </nav>
    </div>

    <div class=\"titre\">
      <!-- <h2 class=\"text\">Thomas Neveu Web Developer &amp; Mobile Web</h2> -->
      <h1 class=\"text\">";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Thomas Neveu Web Developer &amp; Mobile Web", [], "messages");
        echo "</h1>
    </div>

  </header>




  <button onclick=\"topFunction()\" id=\"myBtn\" title=\"Go to top\" type=\"button\" class=\"btn btn-default\">
    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-up\" fill=\"currentColor\"
      xmlns=\"http://www.w3.org/2000/svg\">
      <path fill-rule=\"evenodd\"
        d=\"M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z\" />
    </svg>
  </button>

  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 92
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
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 92,  324 => 74,  315 => 67,  310 => 64,  306 => 63,  301 => 62,  299 => 61,  294 => 58,  286 => 55,  283 => 54,  281 => 53,  274 => 51,  267 => 47,  260 => 43,  251 => 39,  240 => 30,  234 => 29,  226 => 26,  221 => 25,  218 => 24,  214 => 23,  209 => 21,  204 => 18,  194 => 17,  176 => 13,  157 => 8,  142 => 127,  125 => 113,  120 => 111,  110 => 104,  107 => 103,  102 => 102,  98 => 100,  93 => 99,  91 => 98,  87 => 97,  81 => 93,  79 => 92,  76 => 91,  74 => 17,  69 => 14,  67 => 13,  62 => 11,  56 => 8,  47 => 1,);
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
              <a class=\"nav-link\" href=\"{{ path('home') }}\">{% trans %}Home{% endtrans %}<span
                  class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#projects\">{% trans %}Projects{% endtrans %}</a>
              <!-- <a class=\"nav-link\" href=\"#projects\">Mes projets</a> -->
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#skills\">{% trans %}Skills{% endtrans %}</a>
              <!-- <a class=\"nav-link\" href=\"#skills\">Comp&eacute;tences</a> -->
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('contact') }}\">{% trans %}Contact{% endtrans %}</a>
            </li>
            {% if is_granted('ROLE_ADMIN') %}
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('admin') }}\">{% trans %}Admin{% endtrans %}</a>
            </li>
            {% endif %}
          </ul>

          <div class=\"ml-auto p-2 bd-highlight\">
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
      <h1 class=\"text\">{% trans %}Thomas Neveu Web Developer &amp; Mobile Web{% endtrans %}</h1>
    </div>

  </header>




  <button onclick=\"topFunction()\" id=\"myBtn\" title=\"Go to top\" type=\"button\" class=\"btn btn-default\">
    <svg width=\"1em\" height=\"1em\" viewBox=\"0 0 16 16\" class=\"bi bi-chevron-up\" fill=\"currentColor\"
      xmlns=\"http://www.w3.org/2000/svg\">
      <path fill-rule=\"evenodd\"
        d=\"M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z\" />
    </svg>
  </button>

  {% endblock %}

  {% block javascripts %}{% endblock %}

  <div class=\"container\">
    <footer class=\"py-3 my-4\">
      <ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
        <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">{% trans %}Home{% endtrans %}</a></li>
        {% if is_granted('ROLE_ADMIN') %}
        <li class=\"nav-item\"><a href=\"{{ path('app_login') }}\" class=\"nav-link px-2 text-muted\">{% trans %}Admin{%
            endtrans %}</a></li>
        {% endif %}
        <li class=\"nav-item\"><a href=\"{{ path('app_login') }}\" class=\"nav-link px-2 text-muted\">{% trans %}Sign in{%
            endtrans %}</a></li>
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
    integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\"
    crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"
    integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\"
    crossorigin=\"anonymous\"></script>
  <script src=\"https://code.jquery.com/jquery-3.5.1.js\" integrity=\"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=\"
    crossorigin=\"anonymous\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js\"></script>
  <script src=\"{{ asset('js/main.js') }}\"></script>

</body>

</html>", "base.html.twig", "C:\\wamp64\\www\\portfolio\\templates\\base.html.twig");
    }
}
