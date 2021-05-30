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

/* login.html.twig */
class __TwigTemplate_d11340fe9e958e9f68503b3c4751901d48a122d652f66cdbc672607c264c0e16 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "login.html.twig", 1);
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
        echo "    Login to Parkbud
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <div class=\"py-5 container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"contact-info col-md-6\">
                    <img src=\"/images/login.png\" alt=\"image\" width=\"200\"/>
                    <p>To login please enter your email or username and password</p>
                </div>
            </div>
            <form method=\"POST\" class=\"col-md-9\">
                ";
        // line 19
        if (($context["errors"] ?? null)) {
            echo "  
                        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 21
                echo "                        <p class=\"form-control is-invalid text-white bg-danger\">";
                echo twig_escape_filter($this->env, $context["e"], "html", null, true);
                echo "</p>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo " 
                ";
        }
        // line 24
        echo "                <div class=\"form-group col-md-7\">
                    <label for=\"loginEmail\">Email/User name</label>
                    <input name=\"emailOrUsername\" type=\"text\" class=\"form-control\" id=\"loginEmail\" placeholder=\"Email or Username\">
                </div>
                <div class=\"form-group col-md-7\">
                    <label for=\"loginPassword\">Password</label>
                    <input name=\"password\" type=\"password\" class=\"form-control\" id=\"loginPassword\" placeholder=\"Password\">
                </div>
                <div class=\"col-md-6\">
                    <button type=\"submit \" class=\"btn btn-primary\">Log in</button>
                </div>
                <br>
            </form>
            
            <div class=\"col-md-6\">
                <a class=\"col-md-2\" href=\"/passreset_request\">Forgot password?</a>
                <p class=\"col-md-3\"></p>
                <p class=\"col-md-5\">Not registered? <a class=\"\" href=\"/register\">Sign up</a></p>
                <p class=\"col-md-4\"></p>
            </div>
            
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 24,  96 => 22,  87 => 21,  83 => 20,  79 => 19,  68 => 10,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block stylesheet %}<link rel=\"stylesheet\" href=\"/css/style.css\" />{% endblock stylesheet%}

{% block title %}
    Login to Parkbud
{% endblock title %}

{% block content %}
    <div class=\"py-5 container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"contact-info col-md-6\">
                    <img src=\"/images/login.png\" alt=\"image\" width=\"200\"/>
                    <p>To login please enter your email or username and password</p>
                </div>
            </div>
            <form method=\"POST\" class=\"col-md-9\">
                {% if errors %}  
                        {% for e in errors %}
                        <p class=\"form-control is-invalid text-white bg-danger\">{{ e }}</p>
                        {% endfor %} 
                {% endif %}
                <div class=\"form-group col-md-7\">
                    <label for=\"loginEmail\">Email/User name</label>
                    <input name=\"emailOrUsername\" type=\"text\" class=\"form-control\" id=\"loginEmail\" placeholder=\"Email or Username\">
                </div>
                <div class=\"form-group col-md-7\">
                    <label for=\"loginPassword\">Password</label>
                    <input name=\"password\" type=\"password\" class=\"form-control\" id=\"loginPassword\" placeholder=\"Password\">
                </div>
                <div class=\"col-md-6\">
                    <button type=\"submit \" class=\"btn btn-primary\">Log in</button>
                </div>
                <br>
            </form>
            
            <div class=\"col-md-6\">
                <a class=\"col-md-2\" href=\"/passreset_request\">Forgot password?</a>
                <p class=\"col-md-3\"></p>
                <p class=\"col-md-5\">Not registered? <a class=\"\" href=\"/register\">Sign up</a></p>
                <p class=\"col-md-4\"></p>
            </div>
            
        </div>
    </div>

{% endblock content %}", "login.html.twig", "E:\\Xampp\\htdocs\\parkbud\\parkbud\\templates\\login.html.twig");
    }
}
