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

/* aboutus.html.twig */
class __TwigTemplate_5f7ec7aef76f2e186e02437119588fea9b4bf554b06082fc00ff44df23c2fbf3 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "aboutus.html.twig", 1);
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
            <img src=\"/images/aboutus.jpg\" alt=\"image\" width=\"450rem\" class=\"col-md-6\"/>
            <div class=\"col-md-6\">
                <div class=\"contact-info\">
                    <h3>Parkbud</h3>
                    <p></p>
                    <p>Parkbud.ca is a parking rule sharing website that can be used to view the 
                    parking rules and signage from any location.  It will feature a member page 
                    which will allow you to log in and submit the rules and times for public parking.  
                    You can enter the information manually, and submit a photo for verification.  
                    Anyone can view the rules, you will be greeted by a map and address bar on the 
                    front page where you can search up any location using the Google maps API.</p>

                </div>
            </div>
            
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "aboutus.html.twig";
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
            <img src=\"/images/aboutus.jpg\" alt=\"image\" width=\"450rem\" class=\"col-md-6\"/>
            <div class=\"col-md-6\">
                <div class=\"contact-info\">
                    <h3>Parkbud</h3>
                    <p></p>
                    <p>Parkbud.ca is a parking rule sharing website that can be used to view the 
                    parking rules and signage from any location.  It will feature a member page 
                    which will allow you to log in and submit the rules and times for public parking.  
                    You can enter the information manually, and submit a photo for verification.  
                    Anyone can view the rules, you will be greeted by a map and address bar on the 
                    front page where you can search up any location using the Google maps API.</p>

                </div>
            </div>
            
        </div>
    </div>

{% endblock content %}", "aboutus.html.twig", "E:\\Xampp\\htdocs\\parkbud\\parkbud\\templates\\aboutus.html.twig");
    }
}
