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

/* master.html.twig */
class __TwigTemplate_d3b2532a9553140c4d94041989b7dde2e0560d1e767f59acb15ccd5028a5891f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
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
\t<head>
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js\"></script>
\t\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
\t\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.2.0/css/all.css\" integrity=\"sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ\" crossorigin=\"anonymous\">
\t\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t\t<link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap\" rel=\"stylesheet\">
\t\t\t<script src=\"https://kit.fontawesome.com/46f3607012.js\" crossorigin=\"anonymous\"></script>
\t\t\t<link rel=\"stylesheet\" href=\"/css/index.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/css/style.css\">

\t\t\t";
        // line 15
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 17
        echo "\t\t\t<title>
\t\t\t";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        // line 20
        echo "\t\t</title>
\t\t";
        // line 21
        $this->displayBlock('head', $context, $blocks);
        // line 22
        echo "\t\t
\t</head>
\t<body>

\t\t";
        // line 26
        $this->displayBlock('nav', $context, $blocks);
        // line 138
        echo "\t\t<div>";
        if (($context["userSession"] ?? null)) {
            echo "<p class=\"py-2 px-4 text-primary float-sm-right\">You are logged in as <b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "userName", [], "any", false, false, false, 138), "html", null, true);
            echo "</b></p>";
        }
        if (($context["flashMessage"] ?? null)) {
            // line 139
            echo "\t\t<div id=\"flashMessage\" class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, ($context["flashMessage"] ?? null), "html", null, true);
            echo "</div>";
        }
        echo "</div> 
\t\t";
        // line 140
        $this->displayBlock('content', $context, $blocks);
        // line 142
        echo "\t\t<!-- Footer -->
<footer class=\"text-center text-lg-start bg-light text-muted\">
  
  <section class=\"\">
  <div>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-facebook-f\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-twitter\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-google\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-instagram\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-linkedin\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-github\"></i>
      </a>
    </div>
    <div class=\"container text-center text-md-start mt-5\">
      <!-- Grid row -->
      <div class=\"row mt-3\">
        <!-- Grid column -->
        <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
          <!-- Content -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            <i class=\"fas fa-parking\"></i>Parkbud.ca
          </h6>
          <p>
            Parkbud is a crowd sourced parking rule database. Please share with friends and contribute!
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            Built With
          </h6>
          <p>
            <a href=\"#!\" class=\"text-reset\">Bootstrap</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">JQuery</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Twig</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">PHP</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            Useful links
          </h6>
          <p>
            <a href=\"https://www.algoseedlabs.com\" class=\"text-reset\">Inquiries</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">News</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Investors</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Careers</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            Contact
          </h6>
          <p><i class=\"fab fa-canadian-maple-leaf\"></i>CANADA</p>
          <p>
            <i class=\"fas fa-envelope me-3\"></i>
            info@parkbud.ca
          </p>
          
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class=\"text-center p-4\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
    © 2021 Copyright:
    <a class=\"text-reset fw-bold\" >Parkbud.ca</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
\t\t";
        // line 251
        $this->displayBlock('scripts', $context, $blocks);
        // line 252
        echo "\t</body>
</html>
";
    }

    // line 15
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "\t\t\t";
    }

    // line 18
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Parkbud
\t\t\t";
    }

    // line 21
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "\t\t";
    }

    // line 26
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "\t\t\t<nav
\t\t\t\tclass=\"navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark\">
\t\t\t\t<!-- <img src=\"/parkbudproject/parkbud/images/logo.png\" height=\"30rem\" alt=\"logo\"> -->
\t\t\t\t<a class=\"navbar-brand\" href=\"/\">Parkbud</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\tHome
\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/aboutus\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-university\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\"></span>
\t\t\t\t\t\t\t\tAbout us
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/addrule\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\">
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\tAdd parking rule
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/contact\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-phone\">
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 66
        if ((twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "role", [], "any", false, false, false, 66) == "admin")) {
            // line 67
            echo "\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/admin/users/list\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-id-card\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\"></span>
\t\t\t\t\t\t\t\t</i>Manage users</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>


\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/admin/rules/list\">
\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\">
\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\"></span>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\tManage parking rules
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 85
        echo "
\t\t\t\t";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, ($context["userSession"] ?? null), "role", [], "any", false, false, false, 86) == "user")) {
            // line 87
            echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/user/rules/list\">
\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\">
\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\"></span>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\tManage parking rules
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 96
        echo "
\t\t\t</ul>
\t\t\t<form class=\"form-inline my-2 my-lg-0\">
\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t<button class=\"btn btn-outline-primary my-2 my-sm-0 mr-3\" type=\"submit\">Search</button>
\t\t\t</form>
\t\t\t<ul
\t\t\t\tclass=\"navbar-nav \">
\t\t\t\t
\t\t\t\t<div class=\"d-flex \">
\t\t\t\t\t";
        // line 106
        if (($context["userSession"] ?? null)) {
            // line 107
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/account\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\tUpdate profile
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/logout\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\tSign Out
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        } else {
            // line 121
            echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/register\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\tRegister
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/login\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-in-alt\"></i>
\t\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 135
        echo "\t\t\t\t</div>
\t\t\t</nav>
\t\t";
    }

    // line 140
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "\t\t";
    }

    // line 251
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 251,  378 => 141,  374 => 140,  368 => 135,  352 => 121,  336 => 107,  334 => 106,  322 => 96,  311 => 87,  309 => 86,  306 => 85,  286 => 67,  284 => 66,  243 => 27,  239 => 26,  235 => 22,  231 => 21,  223 => 18,  219 => 16,  215 => 15,  209 => 252,  207 => 251,  96 => 142,  94 => 140,  87 => 139,  79 => 138,  77 => 26,  71 => 22,  69 => 21,  66 => 20,  64 => 18,  61 => 17,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js\"></script>
\t\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">
\t\t\t<link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.2.0/css/all.css\" integrity=\"sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ\" crossorigin=\"anonymous\">
\t\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
\t\t\t<link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap\" rel=\"stylesheet\">
\t\t\t<script src=\"https://kit.fontawesome.com/46f3607012.js\" crossorigin=\"anonymous\"></script>
\t\t\t<link rel=\"stylesheet\" href=\"/css/index.css\">
\t\t\t<link rel=\"stylesheet\" href=\"/css/style.css\">

\t\t\t{% block stylesheet %}
\t\t\t{% endblock stylesheet %}
\t\t\t<title>
\t\t\t{% block title %}Parkbud
\t\t\t{% endblock title %}
\t\t</title>
\t\t{% block head %}
\t\t{% endblock head %}\t\t
\t</head>
\t<body>

\t\t{% block nav %}
\t\t\t<nav
\t\t\t\tclass=\"navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark\">
\t\t\t\t<!-- <img src=\"/parkbudproject/parkbud/images/logo.png\" height=\"30rem\" alt=\"logo\"> -->
\t\t\t\t<a class=\"navbar-brand\" href=\"/\">Parkbud</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-home\"></i>
\t\t\t\t\t\t\t\tHome
\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/aboutus\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-university\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\"></span>
\t\t\t\t\t\t\t\tAbout us
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/addrule\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\">
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\tAdd parking rule
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/contact\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-phone\">
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\"></span>
\t\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\t\tContact
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% if userSession.role == 'admin' %}
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/admin/users/list\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-id-card\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\"></span>
\t\t\t\t\t\t\t\t</i>Manage users</li>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>


\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/admin/rules/list\">
\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\">
\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\"></span>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\tManage parking rules
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}

\t\t\t\t{% if userSession.role == 'user' %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"/user/rules/list\">
\t\t\t\t\t\t\t<i class=\"fas fa-map-marker-alt\">
\t\t\t\t\t\t\t\t<span class=\"badge badge-danger\"></span>
\t\t\t\t\t\t\t</i>
\t\t\t\t\t\t\tManage parking rules
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}

\t\t\t</ul>
\t\t\t<form class=\"form-inline my-2 my-lg-0\">
\t\t\t\t<input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t<button class=\"btn btn-outline-primary my-2 my-sm-0 mr-3\" type=\"submit\">Search</button>
\t\t\t</form>
\t\t\t<ul
\t\t\t\tclass=\"navbar-nav \">
\t\t\t\t
\t\t\t\t<div class=\"d-flex \">
\t\t\t\t\t{% if userSession %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/account\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\tUpdate profile
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/logout\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\tSign Out
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/register\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\tRegister
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"/login\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-in-alt\"></i>
\t\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</nav>
\t\t{% endblock nav %}
\t\t<div>{% if userSession %}<p class=\"py-2 px-4 text-primary float-sm-right\">You are logged in as <b>{{ userSession.userName }}</b></p>{% endif %}{% if flashMessage %}
\t\t<div id=\"flashMessage\" class=\"alert alert-info\">{{flashMessage}}</div>{% endif %}</div> 
\t\t{% block content %}
\t\t{% endblock content %}
\t\t<!-- Footer -->
<footer class=\"text-center text-lg-start bg-light text-muted\">
  
  <section class=\"\">
  <div>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-facebook-f\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-twitter\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-google\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-instagram\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-linkedin\"></i>
      </a>
      <a href=\"\" class=\"me-4 text-reset\">
        <i class=\"fab fa-github\"></i>
      </a>
    </div>
    <div class=\"container text-center text-md-start mt-5\">
      <!-- Grid row -->
      <div class=\"row mt-3\">
        <!-- Grid column -->
        <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
          <!-- Content -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            <i class=\"fas fa-parking\"></i>Parkbud.ca
          </h6>
          <p>
            Parkbud is a crowd sourced parking rule database. Please share with friends and contribute!
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            Built With
          </h6>
          <p>
            <a href=\"#!\" class=\"text-reset\">Bootstrap</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">JQuery</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Twig</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">PHP</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            Useful links
          </h6>
          <p>
            <a href=\"https://www.algoseedlabs.com\" class=\"text-reset\">Inquiries</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">News</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Investors</a>
          </p>
          <p>
            <a href=\"#!\" class=\"text-reset\">Careers</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
          <!-- Links -->
          <h6 class=\"text-uppercase fw-bold mb-4\">
            Contact
          </h6>
          <p><i class=\"fab fa-canadian-maple-leaf\"></i>CANADA</p>
          <p>
            <i class=\"fas fa-envelope me-3\"></i>
            info@parkbud.ca
          </p>
          
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class=\"text-center p-4\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
    © 2021 Copyright:
    <a class=\"text-reset fw-bold\" >Parkbud.ca</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
\t\t{% block scripts %}{% endblock scripts %}
\t</body>
</html>
", "master.html.twig", "E:\\Xampp\\htdocs\\parkbud\\parkbud\\templates\\master.html.twig");
    }
}
