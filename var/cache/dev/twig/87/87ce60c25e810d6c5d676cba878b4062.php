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
class __TwigTemplate_ac6c8f7987972a4d57b3fcd0a24ff371 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->loadTemplate("partials/_nav.html.twig", "account/index.html.twig", 2)->display($context);
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        $context["currentDate"] = twig_date_converter($this->env, "now");
        // line 13
        echo "
        <section class=\"vh-100\" style=\"background-color: #f4f5f7;\">
            <h1 style=\"text-align:center; padding-top:30px;\">Mon profil</h1>
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col col-lg-6 mb-4 mb-lg-0\">
        <div class=\"card mb-3\" style=\"border-radius: .5rem;\">
          <div class=\"row g-0\">
            <div class=\"col-md-4 gradient-custom text-center text-white\"
              style=\"border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;\">
              ";
        // line 23
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "imageUrl", [], "any", false, false, false, 23))) {
            // line 24
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/img/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "imageUrl", [], "any", false, false, false, 24))), "html", null, true);
            echo "\"
                alt=\"Avatar\" class=\"img-fluid my-5\" style=\"width: 80px;\" />
              ";
        } else {
            // line 27
            echo "              <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("IMG/default.jpg"), "html", null, true);
            echo "\"
                alt=\"Avatar\" class=\"img-fluid my-5\" style=\"width: 80px;\" />
              ";
        }
        // line 30
        echo "              <h5> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "firstname", [], "any", false, false, false, 30), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "lastname", [], "any", false, false, false, 30), "html", null, true);
        echo "</h5>
              
             <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\" class=\"btn btn-primary\">Modifier</a>
            </div>
            <div class=\"col-md-8\">
              <div class=\"card-body p-4\">
                <h6>Information</h6>
                <hr class=\"mt-0 mb-4\">
                <div class=\"row pt-1\">
                  <div class=\"col-6 mb-3\">
                    <h6>Email</h6>
                    <p class=\"text-muted\"> ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
                  </div>
                  <div class=\"col-6 mb-3\">
                    <h6>Phone</h6>
                    <p class=\"text-muted\"> ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "phone", [], "any", false, false, false, 45), "html", null, true);
        echo "</p>
                  </div>
                </div>
                <h6>Livraison</h6>
                <hr class=\"mt-0 mb-4\">
                <div class=\"row pt-1\">
                  <div class=\"col-6 mb-3\">
                    <h6>Adresse</h6>
                    <p class=\"text-muted\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "address", [], "any", false, false, false, 53), "html", null, true);
        echo "</p>
                  </div>
                   <div class=\"col-6 mb-3\">
                    <h6>Pays</h6>
                    <p class=\"text-muted\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "country", [], "any", false, false, false, 57), "html", null, true);
        echo "</p>
                  </div>
                   <div class=\"col-6 mb-3\">
                    <h6>Code Postal</h6>
                    <p class=\"text-muted\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "zipcode", [], "any", false, false, false, 61), "html", null, true);
        echo "</p>
                  </div>
                  <div class=\"col-6 mb-3\">
                    <h6>Ville</h6>
                    <p class=\"text-muted\">";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "city", [], "any", false, false, false, 65), "html", null, true);
        echo "</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section style=\"background-color: #f4f5f7;\">
  <div class=\"row\">
    <div class=\"col-md-6\">
      <h2 style=\"text-align:center;\" class=\"h3 mb-3 font-weight-normal\">Mes réservations à venir</h2>
      <div class=\"row\">
        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 81, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 82
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 82) > (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 82, $this->source); })()))) {
                // line 83
                echo "            <div class=\"col-sm-6\">
              <div class=\"card mb-3\">
                <div class=\"card-body\">
                  <h5 class=\"card-title\">Au nom de ";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "reservationName", [], "any", false, false, false, 86), "html", null, true);
                echo "</h5>
                  <p class=\"card-text\">Date: ";
                // line 87
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 87), "d-m-Y"), "html", null, true);
                echo "</p>
                  <p class=\"card-text\">Heure: ";
                // line 88
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "heure", [], "any", false, false, false, 88), "H:i"), "html", null, true);
                echo "</p>
                  <p class=\"card-text\">Restaurant: ";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "restaurantName", [], "any", false, false, false, 89), "html", null, true);
                echo "</p>
                  <a href=\"";
                // line 90
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 90)]), "html", null, true);
                echo "\" class=\"btn gradient-custom\">Modifier</a>
                </div>
              </div>
            </div>
            ";
            }
            // line 95
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "      </div>
    </div>
    <div class=\"col-md-6\">
      <h2 style=\"text-align:center;\" class=\"h3 mb-3 font-weight-normal\">Mes réservations passées</h2>
      <div class=\"row\">
";
        // line 101
        $context["hasReservations"] = false;
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 103
            echo "  ";
            if ((twig_get_attribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 103) < (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 103, $this->source); })()))) {
                // line 104
                echo "    ";
                $context["hasReservations"] = true;
                // line 105
                echo "    <div class=\"col-sm-6\">
      <div class=\"card mb-3\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Au nom de ";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "reservationName", [], "any", false, false, false, 108), "html", null, true);
                echo "</h5>
          <p class=\"card-text\">Date: ";
                // line 109
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 109), "d-m-Y"), "html", null, true);
                echo "</p>
          <p class=\"card-text\">Heure: ";
                // line 110
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "heure", [], "any", false, false, false, 110), "H:i"), "html", null, true);
                echo "</p>
          <p class=\"card-text\">Restaurant: ";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "restaurantName", [], "any", false, false, false, 111), "html", null, true);
                echo "</p>
        </div>
      </div>
    </div>
  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "
";
        // line 118
        if ( !(isset($context["hasReservations"]) || array_key_exists("hasReservations", $context) ? $context["hasReservations"] : (function () { throw new RuntimeError('Variable "hasReservations" does not exist.', 118, $this->source); })())) {
            // line 119
            echo "  <p style=\"text-align:center; padding-top:100px;\">Vous n'avez pas encore mangé chez nous, nous avons hâte de vous retrouver.</p>
";
        }
        // line 121
        echo "      </div>
    </div>
  </div>
</section>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "<style>
.gradient-custom {
background: #f6d365;
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));
background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}
</style>
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
        return array (  302 => 4,  292 => 3,  275 => 121,  271 => 119,  269 => 118,  266 => 117,  254 => 111,  250 => 110,  246 => 109,  242 => 108,  237 => 105,  234 => 104,  231 => 103,  227 => 102,  225 => 101,  218 => 96,  212 => 95,  204 => 90,  200 => 89,  196 => 88,  192 => 87,  188 => 86,  183 => 83,  180 => 82,  176 => 81,  157 => 65,  150 => 61,  143 => 57,  136 => 53,  125 => 45,  118 => 41,  106 => 32,  98 => 30,  91 => 27,  84 => 24,  82 => 23,  70 => 13,  68 => 12,  66 => 3,  64 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}
{% include \"partials/_nav.html.twig\" %}
{% block stylesheets %}
<style>
.gradient-custom {
background: #f6d365;
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));
background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}
</style>
{% endblock %}
{% set currentDate = date(\"now\") %}

        <section class=\"vh-100\" style=\"background-color: #f4f5f7;\">
            <h1 style=\"text-align:center; padding-top:30px;\">Mon profil</h1>
  <div class=\"container py-5 h-100\">
    <div class=\"row d-flex justify-content-center align-items-center h-100\">
      <div class=\"col col-lg-6 mb-4 mb-lg-0\">
        <div class=\"card mb-3\" style=\"border-radius: .5rem;\">
          <div class=\"row g-0\">
            <div class=\"col-md-4 gradient-custom text-center text-white\"
              style=\"border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;\">
              {% if user.imageUrl is not null %}
              <img src=\"{{ asset('uploads/img/' ~ user.imageUrl) }}\"
                alt=\"Avatar\" class=\"img-fluid my-5\" style=\"width: 80px;\" />
              {% else %}
              <img src=\"{{ asset('IMG/default.jpg') }}\"
                alt=\"Avatar\" class=\"img-fluid my-5\" style=\"width: 80px;\" />
              {% endif %}
              <h5> {{ user.firstname }} {{ user.lastname }}</h5>
              
             <a href=\"{{ path('app_register_edit', {'id': user.id}) }}\" class=\"btn btn-primary\">Modifier</a>
            </div>
            <div class=\"col-md-8\">
              <div class=\"card-body p-4\">
                <h6>Information</h6>
                <hr class=\"mt-0 mb-4\">
                <div class=\"row pt-1\">
                  <div class=\"col-6 mb-3\">
                    <h6>Email</h6>
                    <p class=\"text-muted\"> {{ user.email }}</p>
                  </div>
                  <div class=\"col-6 mb-3\">
                    <h6>Phone</h6>
                    <p class=\"text-muted\"> {{ user.phone }}</p>
                  </div>
                </div>
                <h6>Livraison</h6>
                <hr class=\"mt-0 mb-4\">
                <div class=\"row pt-1\">
                  <div class=\"col-6 mb-3\">
                    <h6>Adresse</h6>
                    <p class=\"text-muted\">{{ user.address }}</p>
                  </div>
                   <div class=\"col-6 mb-3\">
                    <h6>Pays</h6>
                    <p class=\"text-muted\">{{ user.country }}</p>
                  </div>
                   <div class=\"col-6 mb-3\">
                    <h6>Code Postal</h6>
                    <p class=\"text-muted\">{{ user.zipcode }}</p>
                  </div>
                  <div class=\"col-6 mb-3\">
                    <h6>Ville</h6>
                    <p class=\"text-muted\">{{ user.city }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section style=\"background-color: #f4f5f7;\">
  <div class=\"row\">
    <div class=\"col-md-6\">
      <h2 style=\"text-align:center;\" class=\"h3 mb-3 font-weight-normal\">Mes réservations à venir</h2>
      <div class=\"row\">
        {% for reservation in reservations %}
          {% if reservation.date > currentDate %}
            <div class=\"col-sm-6\">
              <div class=\"card mb-3\">
                <div class=\"card-body\">
                  <h5 class=\"card-title\">Au nom de {{ reservation.reservationName }}</h5>
                  <p class=\"card-text\">Date: {{ reservation.date|date(\"d-m-Y\") }}</p>
                  <p class=\"card-text\">Heure: {{ reservation.heure|date('H:i') }}</p>
                  <p class=\"card-text\">Restaurant: {{ reservation.restaurantName }}</p>
                  <a href=\"{{ path('app_reservation_edit', {'id': reservation.id}) }}\" class=\"btn gradient-custom\">Modifier</a>
                </div>
              </div>
            </div>
            {% endif %}
          {% endfor %}
      </div>
    </div>
    <div class=\"col-md-6\">
      <h2 style=\"text-align:center;\" class=\"h3 mb-3 font-weight-normal\">Mes réservations passées</h2>
      <div class=\"row\">
{% set hasReservations = false %}
{% for reservation in reservations %}
  {% if reservation.date < currentDate %}
    {% set hasReservations = true %}
    <div class=\"col-sm-6\">
      <div class=\"card mb-3\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Au nom de {{ reservation.reservationName }}</h5>
          <p class=\"card-text\">Date: {{ reservation.date|date(\"d-m-Y\") }}</p>
          <p class=\"card-text\">Heure: {{ reservation.heure|date('H:i') }}</p>
          <p class=\"card-text\">Restaurant: {{ reservation.restaurantName }}</p>
        </div>
      </div>
    </div>
  {% endif %}
{% endfor %}

{% if not hasReservations %}
  <p style=\"text-align:center; padding-top:100px;\">Vous n'avez pas encore mangé chez nous, nous avons hâte de vous retrouver.</p>
{% endif %}
      </div>
    </div>
  </div>
</section>



{% endblock %}
", "account/index.html.twig", "C:\\Users\\augus\\Symfony\\restaurant\\templates\\account\\index.html.twig");
    }
}
