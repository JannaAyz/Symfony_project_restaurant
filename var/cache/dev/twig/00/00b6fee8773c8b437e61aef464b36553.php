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

/* reservation/confirm.html.twig */
class __TwigTemplate_57cf193b48faf419d825a5129cab4b55 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $_trait_0 = $this->loadTemplate("App\\Utils\\DateUtils", "reservation/confirm.html.twig", 2);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."App\\Utils\\DateUtils".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'title' => [$this, 'block_title'],
                'body' => [$this, 'block_body'],
            ]
        );
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/confirm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/confirm.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/confirm.html.twig", 1);
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

        echo "Formulaire de réservation";
        
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
        $context["moisEnLettres"] = twig_get_attribute($this->env, $this->source, (isset($context["DateUtils"]) || array_key_exists("DateUtils", $context) ? $context["DateUtils"] : (function () { throw new RuntimeError('Variable "DateUtils" does not exist.', 6, $this->source); })()), "moisEnLettres", [0 => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 6, $this->source); })()), "date", [], "any", false, false, false, 6), "m")], "method", false, false, false, 6);
        // line 7
        $this->loadTemplate("partial/_nav.html.twig", "reservation/confirm.html.twig", 7)->display($context);
        // line 8
        echo "    <h1 style='text-align:center;'>Merci pour votre réservation !</h1>
    <div>
    <h2>Voici le récapitulatif de votre réservation</h2>
    <p>Nom : ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 11, $this->source); })()), "reservationName", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
    <p>Email : ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 12, $this->source); })()), "email", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
    <p>Téléphone : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 13, $this->source); })()), "number", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
    <p>Date : ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 14, $this->source); })()), "date", [], "any", false, false, false, 14), "d/m/Y"), "html", null, true);
        echo "</p>
    <p>Heure : ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 15, $this->source); })()), "heure", [], "any", false, false, false, 15), "H:i"), "html", null, true);
        echo "</p>
    </div>
    <h3>Pour modifier votre réservation du ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 17, $this->source); })()), "date", [], "any", false, false, false, 17), "d"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["moisEnLettres"]) || array_key_exists("moisEnLettres", $context) ? $context["moisEnLettres"] : (function () { throw new RuntimeError('Variable "moisEnLettres" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " rendez vous sur votre <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_account");
        echo "\">profil.</a></h3>
    <h4>Si vous avez la moindre question n'hésitez pas à nous <a href=\"#\">contacter.</a></h4>
    <p> Nous avons hâte de vous retrouver</p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation/confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 17,  125 => 15,  121 => 14,  117 => 13,  113 => 12,  109 => 11,  104 => 8,  102 => 7,  100 => 6,  90 => 5,  71 => 3,  48 => 1,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% use 'App\\\\Utils\\\\DateUtils' %}
{% block title %}Formulaire de réservation{% endblock %}

{% block body %}
{% set moisEnLettres = DateUtils.moisEnLettres(reservation.date|date('m')) %}
{% include \"partial/_nav.html.twig\" %}
    <h1 style='text-align:center;'>Merci pour votre réservation !</h1>
    <div>
    <h2>Voici le récapitulatif de votre réservation</h2>
    <p>Nom : {{ reservation.reservationName }}</p>
    <p>Email : {{ reservation.email }}</p>
    <p>Téléphone : {{ reservation.number }}</p>
    <p>Date : {{ reservation.date|date('d/m/Y') }}</p>
    <p>Heure : {{ reservation.heure|date('H:i') }}</p>
    </div>
    <h3>Pour modifier votre réservation du {{ reservation.date|date('d') }} {{ moisEnLettres}} rendez vous sur votre <a href=\"{{ path('app_account') }}\">profil.</a></h3>
    <h4>Si vous avez la moindre question n'hésitez pas à nous <a href=\"#\">contacter.</a></h4>
    <p> Nous avons hâte de vous retrouver</p>
{% endblock %}
", "reservation/confirm.html.twig", "C:\\Users\\augus\\Symfony\\restaurant\\templates\\reservation\\confirm.html.twig");
    }
}
