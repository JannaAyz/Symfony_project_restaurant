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

/* partials/modal.html.twig */
class __TwigTemplate_c52a9d761c4efe4e49afe9b15307179a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/modal.html.twig"));

        // line 1
        echo "    <!-- Modal -->
        <div id='modalParent' class='dontDisplay'>
            <div class=\"modal\" style=\"display:block\"  id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\" id=\"exampleModalLabel\">Merci pour votre message</h4>
                </div>
                <div class=\"modal-body\">
                    <h5>Nous reviendrons vers vous très prochainement !</h5><br>
                    Redirection en cours...
                </div>
                <!--  <div class=\"modal-footer\">
                    <button id=\"closeBtn\" onclick=\"closeModal()\" type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                </div> --!>
                </div>
            </div>
            </div>          
        </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <!-- Modal -->
        <div id='modalParent' class='dontDisplay'>
            <div class=\"modal\" style=\"display:block\"  id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h4 class=\"modal-title\" id=\"exampleModalLabel\">Merci pour votre message</h4>
                </div>
                <div class=\"modal-body\">
                    <h5>Nous reviendrons vers vous très prochainement !</h5><br>
                    Redirection en cours...
                </div>
                <!--  <div class=\"modal-footer\">
                    <button id=\"closeBtn\" onclick=\"closeModal()\" type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                </div> --!>
                </div>
            </div>
            </div>          
        </div>
", "partials/modal.html.twig", "C:\\Users\\augus\\Symfony\\restaurant\\templates\\Partials\\modal.html.twig");
    }
}
