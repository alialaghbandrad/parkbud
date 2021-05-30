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

/* error_internal.html.twig */
class __TwigTemplate_fe2a59244e25a9c716797c31043dc930ac07248bfc68757f1450e0dff9cc1008 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("master.html.twig", "error_internal.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Internal error";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div class=\"d-flex flex-column col-md-6 mb-3\">
        <h2>Internal error occured.</h2> 
        <p>Our team has been notified.</p>
        <p><a href=\"/\">Click here</a> to continue.</p>
        <img src=\"/images/technical-support.jpg\" width=\"400\">
    </div>
";
    }

    public function getTemplateName()
    {
        return "error_internal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Internal error{% endblock %}

{% block content %}

    <div class=\"d-flex flex-column col-md-6 mb-3\">
        <h2>Internal error occured.</h2> 
        <p>Our team has been notified.</p>
        <p><a href=\"/\">Click here</a> to continue.</p>
        <img src=\"/images/technical-support.jpg\" width=\"400\">
    </div>
{% endblock %}", "error_internal.html.twig", "E:\\Xampp\\htdocs\\parkbud\\parkbud\\templates\\error_internal.html.twig");
    }
}
