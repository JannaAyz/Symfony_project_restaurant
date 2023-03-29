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

/* account/index.html.twig */
class __TwigTemplate_1396069b88549eaa0bc004abd3a12afc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        $this->loadTemplate("partial/_nav.html.twig", "account/index.html.twig", 2)->display($context);
        // line 3
        echo "    <h1 style=\"text-align:center;\">Mon profil</h1>

    <div class=\"row\">

        <div class=\"col-md-4\">
                <h2 class=\"h3 mb-3 font-weight-normal\">Les informations de mon profil.</h2>
            <ul class=\"list-group mb-3\">
                <li class=\"list-group-item\"><strong>Nom complet : </strong> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "firstname", [], "any", false, false, false, 10), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "lastname", [], "any", false, false, false, 10), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\"><strong>Email : </strong> ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "email", [], "any", false, false, false, 11), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\"><strong>Téléphone : </strong> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "phone", [], "any", false, false, false, 12), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\"><strong>Genre : </strong> ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "gender", [], "any", false, false, false, 13), "html", null, true);
        echo "</li>

                <li class=\"list-group-item\"><strong>Adresse de livraison : </strong></li>
                <li class=\"list-group-item\">Rue : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "address", [], "any", false, false, false, 16), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Code postal : ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "zipcode", [], "any", false, false, false, 17), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Ville : ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "city", [], "any", false, false, false, 18), "html", null, true);
        echo "</li>
                <li class=\"list-group-item\">Pays : ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "country", [], "any", false, false, false, 19), "html", null, true);
        echo "</li>
                

            </ul>
        </div>
        </div>
        <div class=\"row\">

            <div class=\"col-md-4\">
            <h2 class=\"h3 mb-3 font-weight-normal\">Mes réservations</h2>
                <ul class=\"list-group mb-3\">
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservatione"]) {
            // line 31
            echo "                    <li>
                    <div>
                        <p>Date: ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservatione"], "date", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
                        <p>Nom de la réservation : ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservatione"], "reservation_name", [], "any", false, false, false, 34), "html", null, true);
            echo "</p>
                        <p>Nom du restaurant : ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservatione"], "restaurant_name", [], "any", false, false, false, 35), "html", null, true);
            echo "</p>
                    </div>
                    <li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservatione'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </ul>
            </div>
        </div>
         <div class=\"row\">

            <div class=\"col-md-4\">
            
            </div>
        </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "account/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  146 => 39,  136 => 35,  132 => 34,  128 => 33,  124 => 31,  120 => 30,  106 => 19,  102 => 18,  98 => 17,  94 => 16,  88 => 13,  84 => 12,  80 => 11,  74 => 10,  65 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
{% include \"partial/_nav.html.twig\" %}
    <h1 style=\"text-align:center;\">Mon profil</h1>

    <div class=\"row\">

        <div class=\"col-md-4\">
                <h2 class=\"h3 mb-3 font-weight-normal\">Les informations de mon profil.</h2>
            <ul class=\"list-group mb-3\">
                <li class=\"list-group-item\"><strong>Nom complet : </strong> {{ user.firstname }} {{ user.lastname }}</li>
                <li class=\"list-group-item\"><strong>Email : </strong> {{ user.email }}</li>
                <li class=\"list-group-item\"><strong>Téléphone : </strong> {{ user.phone }}</li>
                <li class=\"list-group-item\"><strong>Genre : </strong> {{ user.gender }}</li>

                <li class=\"list-group-item\"><strong>Adresse de livraison : </strong></li>
                <li class=\"list-group-item\">Rue : {{ user.address }}</li>
                <li class=\"list-group-item\">Code postal : {{ user.zipcode }}</li>
                <li class=\"list-group-item\">Ville : {{ user.city }}</li>
                <li class=\"list-group-item\">Pays : {{ user.country }}</li>
                

            </ul>
        </div>
        </div>
        <div class=\"row\">

            <div class=\"col-md-4\">
            <h2 class=\"h3 mb-3 font-weight-normal\">Mes réservations</h2>
                <ul class=\"list-group mb-3\">
                {% for reservatione in reservations %}
                    <li>
                    <div>
                        <p>Date: {{ reservatione.date }}</p>
                        <p>Nom de la réservation : {{ reservatione.reservation_name }}</p>
                        <p>Nom du restaurant : {{ reservatione.restaurant_name }}</p>
                    </div>
                    <li>
                {% endfor %}
            </ul>
            </div>
        </div>
         <div class=\"row\">

            <div class=\"col-md-4\">
            
            </div>
        </div>
{% endblock %}", "account/index.html.twig", "C:\\Users\\augus\\Symfony\\restaurant\\templates\\account\\index.html.twig");
    }
}
