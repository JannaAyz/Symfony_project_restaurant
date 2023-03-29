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

/* partials/_nav.html.twig */
class __TwigTemplate_1727652c8255cae504744a209c088781 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_nav.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "partials/_nav.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<style>
  .nav-item {
    font-size:1.3em;
  }
  .boutons{
    display:flex;
    flex-direction:row;
    align-items:center;
  }
  .boutons a{
    font-size:1.3em;
  }
  .navbarflex{
    width:100%;
    display:flex;
    justify-content:space-around;
  }
 #navbarSupportedContent {
  
  justify-content: center;
}
.navbarflex{
  background-color: white;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "
<nav class=\"navbar navbar-expand-lg bg-light\">
    <div class=\"navbarflex\">
    ";
        // line 34
        echo "    <div>
    <a style=\"width:100px;\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\"><img style=\"width:100px; height:100px;\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/IMG/logotestrogne.png"), "html", null, true);
        echo "\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <div class=\"centernav\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href= \"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">La carte</a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            A propos de nous
          </a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" href=\"#\">Création</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Nos restaurants</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">L'équipe</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Le chef</a></li>
          </ul>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href= \"/contact\">Nous contacter</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href= \"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
        echo "\">Reservez une table</a>
        </li>
        <li class=\"nav-item\">
          ";
        // line 68
        echo "        </li>
      </ul>
      </div>
      </div>
      <div class=\"boutons\">
        ";
        // line 73
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73))) {
            // line 74
            echo "        
        <li>
        <a class=\"btn btn-outline-success button\" href= \"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a>
        </li>
        <li>
        <a class=\"btn btn-outline-success button\" href= \"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Register</a>
        </li>
        ";
        }
        // line 82
        echo "        ";
        // line 83
        echo "        ";
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83))) {
            // line 84
            echo "        <li> 
        <a class=\"btn btn-outline-success button\" href= \"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </li>
        <li>
        <a class=\"btn btn-outline-success button\" href= \"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "id", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\">My account</a>
        </li>
        ";
        }
        // line 91
        echo "        </div>
        </div>
</nav>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "partials/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 91,  204 => 88,  198 => 85,  195 => 84,  192 => 83,  190 => 82,  184 => 79,  178 => 76,  174 => 74,  172 => 73,  165 => 68,  159 => 64,  136 => 44,  122 => 35,  119 => 34,  114 => 30,  104 => 29,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
<style>
  .nav-item {
    font-size:1.3em;
  }
  .boutons{
    display:flex;
    flex-direction:row;
    align-items:center;
  }
  .boutons a{
    font-size:1.3em;
  }
  .navbarflex{
    width:100%;
    display:flex;
    justify-content:space-around;
  }
 #navbarSupportedContent {
  
  justify-content: center;
}
.navbarflex{
  background-color: white;
}
</style>
{% endblock %}
{% block body %}

<nav class=\"navbar navbar-expand-lg bg-light\">
    <div class=\"navbarflex\">
    {# <a class=\"navbar-brand logo\" href=\"{{ path('app_home') }}\">LOGO</a> #}
    <div>
    <a style=\"width:100px;\" href=\"{{ path('app_home') }}\"><img style=\"width:100px; height:100px;\" src=\"{{ asset('/IMG/logotestrogne.png') }}\"></a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <div class=\"centernav\">
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href= \"{{ path('app_home') }}\">Home</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">La carte</a>
        </li>
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            A propos de nous
          </a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" href=\"#\">Création</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Nos restaurants</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">L'équipe</a></li>
            <li><a class=\"dropdown-item\" href=\"#\">Le chef</a></li>
          </ul>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href= \"/contact\">Nous contacter</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href= \"{{ path('app_reservation') }}\">Reservez une table</a>
        </li>
        <li class=\"nav-item\">
          {# <a class=\"nav-link\" href= \"{{ path('app_recrutement') }}\">Nous rejoindre</a> #}
        </li>
      </ul>
      </div>
      </div>
      <div class=\"boutons\">
        {% if app.user is null %}
        
        <li>
        <a class=\"btn btn-outline-success button\" href= \"{{ path('app_login') }}\">Login</a>
        </li>
        <li>
        <a class=\"btn btn-outline-success button\" href= \"{{ path('app_register') }}\">Register</a>
        </li>
        {% endif %}
        {# OU #}
        {% if app.user is not null %}
        <li> 
        <a class=\"btn btn-outline-success button\" href= \"{{ path('app_logout') }}\">Logout</a>
        </li>
        <li>
        <a class=\"btn btn-outline-success button\" href= \"{{ path('app_account', {'id': app.user.id}) }}\">My account</a>
        </li>
        {% endif %}
        </div>
        </div>
</nav>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>
{% endblock %}", "partials/_nav.html.twig", "C:\\Users\\augus\\Symfony\\restaurant\\templates\\Partials\\_nav.html.twig");
    }
}
