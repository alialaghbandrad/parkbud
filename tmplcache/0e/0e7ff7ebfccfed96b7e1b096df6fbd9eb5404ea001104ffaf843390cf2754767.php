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

/* contact.html.twig */
class __TwigTemplate_878ccb9bcd87cc26bb0e3362604b9c960433ab22ec4229557b8988dafd2eabb7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $this->parent = $this->loadTemplate("master.html.twig", "contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<link rel=\"stylesheet\" href=\"/css/style.css\" />";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    Contact Parkbud
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <div class=\"py-5 container\">
        <div class=\"row\">
            <img src=\"/images/contact.jpg\" alt=\"image\" width=\"450rem\" class=\"col-md-6\"/>
            <div class=\"col-md-6\">
                <div class=\"contact-info\">
                    
                    <h3>Contact Us</h3>
                    <p></p>
                    <p>Email: info@parkbud.ca</p>
                    <p>Phone: +1-514-333-9955</p>
                    <p>Address:<br> 21 275 Rue Lakeshore Road, <br>Sainte-Anne-de-Bellevue, QC H9X 3L9</p>
                </div>
            </div>
            
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block stylesheet %}<link rel=\"stylesheet\" href=\"/css/style.css\" />{% endblock stylesheet%}

{% block title %}
    Contact Parkbud
{% endblock title %}

{% block content %}
    <div class=\"py-5 container\">
        <div class=\"row\">
            <img src=\"/images/contact.jpg\" alt=\"image\" width=\"450rem\" class=\"col-md-6\"/>
            <div class=\"col-md-6\">
                <div class=\"contact-info\">
                    
                    <h3>Contact Us</h3>
                    <p></p>
                    <p>Email: info@parkbud.ca</p>
                    <p>Phone: +1-514-333-9955</p>
                    <p>Address:<br> 21 275 Rue Lakeshore Road, <br>Sainte-Anne-de-Bellevue, QC H9X 3L9</p>
                </div>
            </div>
            
        </div>
    </div>

{% endblock content %}", "contact.html.twig", "E:\\Xampp\\htdocs\\parkbud\\parkbud\\templates\\contact.html.twig");
    }
}
