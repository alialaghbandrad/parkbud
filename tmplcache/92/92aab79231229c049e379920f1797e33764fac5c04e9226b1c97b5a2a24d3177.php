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

/* admin/master_admin.html.twig */
class __TwigTemplate_bd81fe31687ee03374088d5e703d1501e5e5f35fef2d0b2d8c3137f9f5e6a83a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'title' => [$this, 'block_title'],
            'nav' => [$this, 'block_nav'],
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 19
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "Parkbud Admin Page</title>
    </head>

    <body>
        <div>
            ";
        // line 24
        $this->displayBlock('nav', $context, $blocks);
        // line 108
        echo "        </div>

    <div>
        ";
        // line 111
        if (($context["userSession"] ?? null)) {
            // line 112
            echo "            <p class=\"py-2 px-4 text-primary float-sm-right\">You are logged in as <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "userName", [], "any", false, false, false, 112), "html", null, true);
            echo "</b></p>
        ";
        }
        // line 114
        echo "        ";
        if (($context["flashMessage"] ?? null)) {
            // line 115
            echo "            <div id=\"flashMessage\" class=\"alert alert-info\">
                ";
            // line 116
            echo twig_escape_filter($this->env, ($context["flashMessage"] ?? null), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 119
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 122
        echo "    </div>

    
    </div>
    ";
        // line 126
        $this->displayBlock('scripts', $context, $blocks);
        // line 127
        echo "    </body>

</html>";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "            
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
                integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">

            <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.2.0/css/all.css\" integrity=\"sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"/css/index.css\">
            <link rel=\"stylesheet\" href=\"/css/style.css\">

            ";
        // line 17
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 18
        echo "        ";
    }

    // line 17
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 24
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                <nav class=\"navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark\">
                    <a class=\"navbar-brand\" href=\"/\">Parkbud</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"/\">
                                    <i class=\"fa fa-home\"></i>
                                    Home
                                    <span class=\"sr-only\">(current)</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/addrule\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\">
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\tAdd parking rule
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/admin/users/list\">
                                    <i class=\"fa fa-id-card\" aria-hidden=\"true\"></i>
                                    <span class=\"badge badge-danger\"></span>
                                    </i>
                                        Manage users
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/admin/rules/list\">
                                    <i class=\"fas fa-map-marker-alt\">
                                        <span class=\"badge badge-danger\"></span>
                                    </i>
                                    Manage parking rules
                                </a>
                            </li>     
                        </ul>
                        <form class=\"form-inline my-2 my-lg-0\">
                            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
                            <button class=\"btn btn-outline-primary my-2 my-sm-0\" type=\"submit\">Search</button>
                        </form>
                        <ul class=\"navbar-nav \">
                            ";
        // line 71
        echo "                            <div class=\"d-flex \">
                                ";
        // line 72
        if (($context["userSession"] ?? null)) {
            // line 73
            echo "                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/account\">
                                            <i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i>
                                            Update profile
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/logout\">
                                            <i class=\"fas fa-sign-in-alt\"></i>
                                            
                                            Sign Out
                                        </a>
                                    </li>
                                ";
        } else {
            // line 87
            echo "                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/register\">
                                            <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                            
                                            Register
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/login\">
                                            <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>
                                            
                                            Login
                                        </a>
                                    </li>
                                ";
        }
        // line 102
        echo "                            </div>
                            ";
        // line 104
        echo "                        </ul>
                    </div>
                </nav>
            ";
    }

    // line 119
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 120
        echo "
        ";
    }

    // line 126
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "admin/master_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 126,  242 => 120,  238 => 119,  231 => 104,  228 => 102,  211 => 87,  195 => 73,  193 => 72,  190 => 71,  143 => 25,  139 => 24,  133 => 19,  127 => 17,  123 => 18,  121 => 17,  107 => 5,  103 => 4,  97 => 127,  95 => 126,  89 => 122,  86 => 119,  80 => 116,  77 => 115,  74 => 114,  68 => 112,  66 => 111,  61 => 108,  59 => 24,  50 => 19,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        {% block head %}
            
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
                integrity=\"sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1\" crossorigin=\"anonymous\">

            <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.2.0/css/all.css\" integrity=\"sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"/css/index.css\">
            <link rel=\"stylesheet\" href=\"/css/style.css\">

            {% block stylesheet %}{% endblock stylesheet%}
        {% endblock %}
        <title>{% block title %}{% endblock %}Parkbud Admin Page</title>
    </head>

    <body>
        <div>
            {% block nav %}
                <nav class=\"navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark\">
                    <a class=\"navbar-brand\" href=\"/\">Parkbud</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav mr-auto\">
                            <li class=\"nav-item active\">
                                <a class=\"nav-link\" href=\"/\">
                                    <i class=\"fa fa-home\"></i>
                                    Home
                                    <span class=\"sr-only\">(current)</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/addrule\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\">
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\"></span>
\t\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\t\tAdd parking rule
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/admin/users/list\">
                                    <i class=\"fa fa-id-card\" aria-hidden=\"true\"></i>
                                    <span class=\"badge badge-danger\"></span>
                                    </i>
                                        Manage users
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"/admin/rules/list\">
                                    <i class=\"fas fa-map-marker-alt\">
                                        <span class=\"badge badge-danger\"></span>
                                    </i>
                                    Manage parking rules
                                </a>
                            </li>     
                        </ul>
                        <form class=\"form-inline my-2 my-lg-0\">
                            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
                            <button class=\"btn btn-outline-primary my-2 my-sm-0\" type=\"submit\">Search</button>
                        </form>
                        <ul class=\"navbar-nav \">
                            {# {% block header %} #}
                            <div class=\"d-flex \">
                                {% if userSession %}
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/account\">
                                            <i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i>
                                            Update profile
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/logout\">
                                            <i class=\"fas fa-sign-in-alt\"></i>
                                            
                                            Sign Out
                                        </a>
                                    </li>
                                {% else %}
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/register\">
                                            <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                            
                                            Register
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"/login\">
                                            <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i>
                                            
                                            Login
                                        </a>
                                    </li>
                                {% endif %}
                            </div>
                            {# {% endblock header %} #}
                        </ul>
                    </div>
                </nav>
            {% endblock nav %}
        </div>

    <div>
        {% if userSession %}
            <p class=\"py-2 px-4 text-primary float-sm-right\">You are logged in as <b>{{ userSession.userName }}</b></p>
        {% endif %}
        {% if flashMessage %}
            <div id=\"flashMessage\" class=\"alert alert-info\">
                {{flashMessage}}
            </div>
        {% endif %}
        {% block content %}

        {% endblock content %}
    </div>

    
    </div>
    {% block scripts %}{% endblock scripts %}
    </body>

</html>", "admin/master_admin.html.twig", "E:\\Xampp\\htdocs\\parkbud\\parkbud\\templates\\admin\\master_admin.html.twig");
    }
}
