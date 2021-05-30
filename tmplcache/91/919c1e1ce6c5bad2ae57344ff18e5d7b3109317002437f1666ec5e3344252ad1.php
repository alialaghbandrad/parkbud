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

/* admin/rules_edit.html.twig */
class __TwigTemplate_c802aa5cc5c6023c3ef5cafc15300a6cdf1cbb1aa5637d12e34dfabc2b7d2dc5 extends \Twig\Template
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
            'scripts' => [$this, 'block_scripts'],
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
        $this->parent = $this->loadTemplate("master.html.twig", "admin/rules_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<link href=\"https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"/css/style.css\">
";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\tUpdate parking rule
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
\t<div class=\"container\">


\t\t<h3 class=\"logo col-sm-12 col-6\">Edit parking rule</h1>
\t\t<div
\t\t\tclass=\"row\">

\t\t\t<!-- if Session -->


\t\t\t<div
\t\t\t\tclass=\"col-sm map col-md-6\">

\t\t\t\t<!--   MAP LEFT COLUMN -->

\t\t\t\t<input id=\"pac-input\" class=\"controls\" type=\"text\" placeholder=\"Type Adress or Street\"/>

\t\t\t\t<div id=\"mainMapContainer\">
\t\t\t\t\t<div class=\"map\" style=\"height:800px;width:500px;\" id=\"map\"></div>
\t\t\t\t</div>


\t\t\t\t<script src=\"/index.js\"></script>

\t\t\t\t<script src=\"https://polyfill.io/v3/polyfill.min.js?features=default\"></script>
\t\t\t\t<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
\t\t\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCLoTwm91EVWlIY1yMAfFmLQVQeUB7espA&callback=initAutocomplete&libraries=places&v=weekly&callback=initAutocomplete\"></script>
                <p>longitude: ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "longitude", [], "any", false, false, false, 41), "html", null, true);
        echo " , latitude: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "latitude", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
\t\t\t</div>
            
\t\t\t<div class=\"col-1\"></div>

\t\t\t<div
\t\t\t\tclass=\"col-sm col-md-5\">
\t\t\t\t<!--   FORM Center COLUMN -->

\t\t\t\t<div>

\t\t\t\t\t<form
\t\t\t\t\t\tmethod=\"POST\" enctype=\"multipart/form-data\">

\t\t\t\t\t\t<!-- Display Street Name from Map Search -->
\t\t\t\t\t\t<input name=\"sideFlag\" id=\"sideFlag\" type=\"hidden\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "sideFlag", [], "any", false, false, false, 56), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<input name=\"longitude\" id=\"longitude\" type=\"hidden\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "longitude", [], "any", false, false, false, 57), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<input name=\"latitude\" id=\"latitude\" type=\"hidden\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "latitude", [], "any", false, false, false, 58), "html", null, true);
        echo "\"/>
\t\t\t\t\t\t<div class=\"form-group row text-center\">
\t\t\t\t\t\t\t<label for=\"streetname\">Street Name</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"streetname\" name=\"streetName\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "streetName", [], "any", false, false, false, 61), "html", null, true);
        echo "\" placeholder=\"street name\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Select Time Period For Applicable parking rules -->
\t\t\t\t\t\t<div class=\"form-group row text-center\">
\t\t\t\t\t\t\t<label for=\"dateStart\">Period start</label>
\t\t\t\t\t\t\t<input type=\"date\" name=\"periodStart\" class=\"form-control\" id=\"dateStart\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "periodStart", [], "any", false, false, false, 67), "html", null, true);
        echo "\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row text-center\">
\t\t\t\t\t\t\t<label for=\"dateEnd\">Period End</label>
\t\t\t\t\t\t\t<input type=\"date\" name=\"periodEnd\" class=\"form-control\" id=\"dateEnd\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "periodEnd", [], "any", false, false, false, 72), "html", null, true);
        echo "\">

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"from-group row\">
\t\t\t\t\t\t\t<label for=\"parkingMeter\">Does This Space have a parking meter?</label>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"parkingMeter\" id=\"noPm\" 
                                    ";
        // line 81
        if ((twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "parkingMeter", [], "any", false, false, false, 81) == 1)) {
            echo " checked ";
        }
        echo " >
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"yes\">Yes</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"parkingMeter\" id=\"yesPm\" 
                                    ";
        // line 87
        if ((twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "parkingMeter", [], "any", false, false, false, 87) == 0)) {
            echo " checked ";
        }
        echo " >
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"no\">No</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t<!-- TABS -->
\t\t\t\t\t\t\t\t<div class=\"ruleSect form-group\">
\t\t\t\t\t\t\t\t\t<nav class=\"tabBar\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"side-tabs\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"sideRole(0);\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#a\" role=\"tab\" aria-controls=\"nav-home\"
                                                ";
        // line 99
        if ((twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "sideFlag", [], "any", false, false, false, 99) == 0)) {
            echo " aria-selected=\"true\" ";
        }
        echo " >
                                                Even</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"sideRole(1);\" id=\"nav-profile-tab\" data-toggle=\"tab\" href=\"#b\" role=\"tab\" aria-controls=\"nav-profile\"
                                                ";
        // line 104
        if ((twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "sideFlag", [], "any", false, false, false, 104) != 0)) {
            echo " aria-selected=\"true\" ";
        }
        echo " >
                                                Odd</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</nav>

\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"a\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t<p>Please Upload picture of the Even Side Parking Sign</p>
                                            
                                            
                                            <a href=\"/uploads/";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "image", [], "any", false, false, false, 118), "html", null, true);
        echo "\"><img class=\"img-fluid\" src=\"/uploads/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "image", [], "any", false, false, false, 118), "html", null, true);
        echo "\" width=\"200rem\" alt=\"Current image\"></a><br>
                                            <a href=\"/uploads/";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "image", [], "any", false, false, false, 119), "html", null, true);
        echo "\">View fullsize current image</a>
                                            <p></p>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"file\" id=\"myFile\" name=\"image\" 
                                            value=\"/uploads/";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "image", [], "any", false, false, false, 122), "html", null, true);
        echo "\"
                                            >


\t\t\t\t\t\t\t\t\t\t\t<nav class=\"tabBar\">

\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#mon\" role=\"tab\" aria-selected=\"true\">Mon</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#tue\" role=\"tab\" aria-selected=\"false\">Tue</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#wed\" role=\"tab\" aria-selected=\"false\">Wed</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#thu\" role=\"tab\" aria-selected=\"false\">Thu</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#fri\" role=\"tab\" aria-selected=\"false\">Fri</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#sat\" role=\"tab\" aria-selected=\"false\">Sat</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#sun\" role=\"tab\" aria-selected=\"false\">Sun</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</nav>


\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-pane active\" id=\"mon\">


\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Set No Parking restriction times per Day -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Monday</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check container-fluid daySlot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart<input class=\"timeInput\" name=\"mondayStart\" id=\"mondayStart\" type=\"time\" mdp-time-picker
                                                                ";
        // line 171
        if ((twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "mondayStart", [], "any", false, false, false, 171) != 0)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "mondayStart", [], "any", false, false, false, 171), "html", null, true);
            echo "\" ";
        }
        // line 172
        echo "                                                                /><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"mondayEnd\" id=\"mondayEnd\" type=\"time\" mdp-time-picker
                                                                ";
        // line 175
        if ((twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "mondayEnd", [], "any", false, false, false, 175) != 0)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "mondayEnd", [], "any", false, false, false, 175), "html", null, true);
            echo "\" ";
        }
        // line 176
        echo "                                                                />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-pane\" id=\"tue\">


\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Set No Parking restriction times per Day -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Tueday</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check container-fluid daySlot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart<input class=\"timeInput\" name=\"tuesdayStart\" id=\"tuesdayStart\" type=\"time\" mdp-time-picker
                                                                ";
        // line 197
        if ((twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "tuesdayStart", [], "any", false, false, false, 197) != 0)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "tuesdayStart", [], "any", false, false, false, 197), "html", null, true);
            echo "\" ";
        }
        // line 198
        echo "                                                                /><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"tuesdayEnd\" id=\"tuesdayEnd\" type=\"time\" mdp-time-picker 
                                                                ";
        // line 201
        if ((twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "tuesdayEnd", [], "any", false, false, false, 201) != 0)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "tuesdayEnd", [], "any", false, false, false, 201), "html", null, true);
            echo "\" ";
        }
        // line 202
        echo "                                                                />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"wed\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Set No Parking restriction times per Day -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Wednesday</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check container-fluid daySlot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart<input class=\"timeInput\" name=\"wednesdayStart\" id=\"wednesdayStart\" type=\"time\" mdp-time-picker
                                                                ";
        // line 217
        if ((twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "wednesdayStart", [], "any", false, false, false, 217) != 0)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "wednesdayStart", [], "any", false, false, false, 217), "html", null, true);
            echo "\" ";
        }
        // line 218
        echo "                                                                /><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"wednesdayEnd\" id=\"wednesdayEnd\" type=\"time\" mdp-time-picker
                                                                ";
        // line 221
        if ((twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "wednesdayEnd", [], "any", false, false, false, 221) != 0)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "wednesdayEnd", [], "any", false, false, false, 221), "html", null, true);
            echo "\" ";
        }
        // line 222
        echo "                                                                />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"thu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Set No Parking restriction times per Day -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Thursday</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check container-fluid daySlot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart<input class=\"timeInput\" name=\"thursdayStart\" id=\"thursdayStart\" type=\"time\" mdp-time-picker
                                                                ";
        // line 234
        if ((twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "thursdayStart", [], "any", false, false, false, 234) != 0)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "thursdayStart", [], "any", false, false, false, 234), "html", null, true);
            echo "\" ";
        }
        // line 235
        echo "                                                                /><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"thursdayEnd\" id=\"thursdayEnd\" type=\"time\" mdp-time-picker
                                                                ";
        // line 238
        if ((twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "thursdayEnd", [], "any", false, false, false, 238) != 0)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "thursdayEnd", [], "any", false, false, false, 238), "html", null, true);
            echo "\" ";
        }
        // line 239
        echo "                                                                />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"fri\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Set No Parking restriction times per Day -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Friday</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check container-fluid daySlot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart<input class=\"timeInput\" name=\"fridayStart\" id=\"fridayStart\" type=\"time\" mdp-time-picker
                                                                ";
        // line 255
        if ((twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "fridayStart", [], "any", false, false, false, 255) != 0)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "fridayStart", [], "any", false, false, false, 255), "html", null, true);
            echo "\" ";
        }
        // line 256
        echo "                                                                /><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"fridayEnd\" id=\"fridayEnd\" type=\"time\" mdp-time-picker
                                                                ";
        // line 259
        if ((twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "fridayEnd", [], "any", false, false, false, 259) != 0)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "fridayEnd", [], "any", false, false, false, 259), "html", null, true);
            echo "\" ";
        }
        // line 260
        echo "                                                                />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-pane\" id=\"sat\">


\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Set No Parking restriction times per Day -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Saturday</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check container-fluid daySlot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart<input class=\"timeInput\" name=\"saturdayStart\" id=\"saturdayStart\" type=\"time\" mdp-time-picker
                                                                ";
        // line 278
        if ((twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "saturdayStart", [], "any", false, false, false, 278) != 0)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "saturdayStart", [], "any", false, false, false, 278), "html", null, true);
            echo "\" ";
        }
        // line 279
        echo "                                                                /><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"saturdayEnd\" id=\"saturdayEnd\" type=\"time\" mdp-time-picker
                                                                ";
        // line 282
        if ((twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "saturdayEnd", [], "any", false, false, false, 282) != 0)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "saturdayEnd", [], "any", false, false, false, 282), "html", null, true);
            echo "\" ";
        }
        // line 283
        echo "                                                                />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-pane\" id=\"sun\">


\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Set No Parking restriction times per Day -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Sunday</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check container-fluid daySlot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart<input class=\"timeInput\" name=\"sundayStart\" id=\"sundayStart\" type=\"time\" mdp-time-picker 
                                                                ";
        // line 302
        if ((twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "sundayStart", [], "any", false, false, false, 302) != 0)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "sundayStart", [], "any", false, false, false, 302), "html", null, true);
            echo "\" ";
        }
        // line 303
        echo "                                                                 /><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"sundayEnd\" id=\"sundayEnd\" type=\"time\" mdp-time-picker
                                                                ";
        // line 306
        if ((twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "sundayEnd", [], "any", false, false, false, 306) != 0)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rule"] ?? null), "sundayEnd", [], "any", false, false, false, 306), "html", null, true);
            echo "\" ";
        }
        // line 307
        echo "                                                                />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary form-control\"/>
\t\t\t\t\t\t\t\t";
        // line 327
        if (($context["errorList"] ?? null)) {
            // line 328
            echo "\t\t\t\t\t\t\t\t\t<ul class=\"errorMessage\">
\t\t\t\t\t\t\t\t\t\t";
            // line 329
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 330
                echo "\t\t\t\t\t\t\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 332
            echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
        }
        // line 334
        echo "
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Else Log in -->


\t\t\t</div>
\t\t\t<p id=\"location\"></p>
\t\t\t";
        // line 347
        $this->displayBlock('scripts', $context, $blocks);
        // line 366
        echo "
";
    }

    // line 347
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 348
        echo "
\t\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\" integrity=\"sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p\" crossorigin=\"anonymous\"></script>

\t\t\t\t<script>
\t\t\t\t\tfunction sideRole(role) {
                \$(\"#sideFlag\").val(role)
                }

                var input = document.getElementById('pac-input');
                var autocomplete = new google.maps.places.Autocomplete(input);
                google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var place = autocomplete.getPlace();
                \$(\"#longitude\").val(place.geometry.viewport.La.g)
                \$(\"#latitude\").val(place.geometry.viewport.Ua.g)
                \$(\"#streetname\").val(place.address_components[1].short_name)
                });
\t\t\t\t</script>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "admin/rules_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 348,  584 => 347,  579 => 366,  577 => 347,  562 => 334,  558 => 332,  549 => 330,  545 => 329,  542 => 328,  540 => 327,  518 => 307,  512 => 306,  507 => 303,  501 => 302,  480 => 283,  474 => 282,  469 => 279,  463 => 278,  443 => 260,  437 => 259,  432 => 256,  426 => 255,  408 => 239,  402 => 238,  397 => 235,  391 => 234,  377 => 222,  371 => 221,  366 => 218,  360 => 217,  343 => 202,  337 => 201,  332 => 198,  326 => 197,  303 => 176,  297 => 175,  292 => 172,  286 => 171,  234 => 122,  228 => 119,  222 => 118,  203 => 104,  193 => 99,  176 => 87,  165 => 81,  153 => 72,  145 => 67,  136 => 61,  130 => 58,  126 => 57,  122 => 56,  102 => 41,  72 => 13,  68 => 12,  63 => 9,  59 => 8,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block stylesheet %}
\t<link href=\"https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"/css/style.css\">
{% endblock stylesheet %}

{% block title %}
\tUpdate parking rule
{% endblock title %}

{% block content %}

\t<div class=\"container\">


\t\t<h3 class=\"logo col-sm-12 col-6\">Edit parking rule</h1>
\t\t<div
\t\t\tclass=\"row\">

\t\t\t<!-- if Session -->


\t\t\t<div
\t\t\t\tclass=\"col-sm map col-md-6\">

\t\t\t\t<!--   MAP LEFT COLUMN -->

\t\t\t\t<input id=\"pac-input\" class=\"controls\" type=\"text\" placeholder=\"Type Adress or Street\"/>

\t\t\t\t<div id=\"mainMapContainer\">
\t\t\t\t\t<div class=\"map\" style=\"height:800px;width:500px;\" id=\"map\"></div>
\t\t\t\t</div>


\t\t\t\t<script src=\"/index.js\"></script>

\t\t\t\t<script src=\"https://polyfill.io/v3/polyfill.min.js?features=default\"></script>
\t\t\t\t<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
\t\t\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCLoTwm91EVWlIY1yMAfFmLQVQeUB7espA&callback=initAutocomplete&libraries=places&v=weekly&callback=initAutocomplete\"></script>
                <p>longitude: {{ rule.longitude }} , latitude: {{ rule.latitude }}</p>
\t\t\t</div>
            
\t\t\t<div class=\"col-1\"></div>

\t\t\t<div
\t\t\t\tclass=\"col-sm col-md-5\">
\t\t\t\t<!--   FORM Center COLUMN -->

\t\t\t\t<div>

\t\t\t\t\t<form
\t\t\t\t\t\tmethod=\"POST\" enctype=\"multipart/form-data\">

\t\t\t\t\t\t<!-- Display Street Name from Map Search -->
\t\t\t\t\t\t<input name=\"sideFlag\" id=\"sideFlag\" type=\"hidden\" value=\"{{rule.sideFlag}}\"/>
\t\t\t\t\t\t<input name=\"longitude\" id=\"longitude\" type=\"hidden\" value=\"{{rule.longitude}}\"/>
\t\t\t\t\t\t<input name=\"latitude\" id=\"latitude\" type=\"hidden\" value=\"{{rule.latitude}}\"/>
\t\t\t\t\t\t<div class=\"form-group row text-center\">
\t\t\t\t\t\t\t<label for=\"streetname\">Street Name</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"streetname\" name=\"streetName\" value=\"{{ rule.streetName }}\" placeholder=\"street name\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Select Time Period For Applicable parking rules -->
\t\t\t\t\t\t<div class=\"form-group row text-center\">
\t\t\t\t\t\t\t<label for=\"dateStart\">Period start</label>
\t\t\t\t\t\t\t<input type=\"date\" name=\"periodStart\" class=\"form-control\" id=\"dateStart\" value=\"{{ rule.periodStart }}\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row text-center\">
\t\t\t\t\t\t\t<label for=\"dateEnd\">Period End</label>
\t\t\t\t\t\t\t<input type=\"date\" name=\"periodEnd\" class=\"form-control\" id=\"dateEnd\" value=\"{{ rule.periodEnd }}\">

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"from-group row\">
\t\t\t\t\t\t\t<label for=\"parkingMeter\">Does This Space have a parking meter?</label>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"parkingMeter\" id=\"noPm\" 
                                    {% if rule.parkingMeter == 1 %} checked {% endif %} >
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"yes\">Yes</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"parkingMeter\" id=\"yesPm\" 
                                    {% if rule.parkingMeter == 0 %} checked {% endif %} >
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"no\">No</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t<!-- TABS -->
\t\t\t\t\t\t\t\t<div class=\"ruleSect form-group\">
\t\t\t\t\t\t\t\t\t<nav class=\"tabBar\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"side-tabs\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"sideRole(0);\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#a\" role=\"tab\" aria-controls=\"nav-home\"
                                                {% if rule.sideFlag == 0 %} aria-selected=\"true\" {% endif %} >
                                                Even</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"sideRole(1);\" id=\"nav-profile-tab\" data-toggle=\"tab\" href=\"#b\" role=\"tab\" aria-controls=\"nav-profile\"
                                                {% if rule.sideFlag != 0 %} aria-selected=\"true\" {% endif %} >
                                                Odd</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</nav>

\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"a\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t<p>Please Upload picture of the Even Side Parking Sign</p>
                                            
                                            
                                            <a href=\"/uploads/{{rule.image}}\"><img class=\"img-fluid\" src=\"/uploads/{{rule.image}}\" width=\"200rem\" alt=\"Current image\"></a><br>
                                            <a href=\"/uploads/{{rule.image}}\">View fullsize current image</a>
                                            <p></p>
\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"file\" id=\"myFile\" name=\"image\" 
                                            value=\"/uploads/{{rule.image}}\"
                                            >


\t\t\t\t\t\t\t\t\t\t\t<nav class=\"tabBar\">

\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#mon\" role=\"tab\" aria-selected=\"true\">Mon</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#tue\" role=\"tab\" aria-selected=\"false\">Tue</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#wed\" role=\"tab\" aria-selected=\"false\">Wed</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#thu\" role=\"tab\" aria-selected=\"false\">Thu</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#fri\" role=\"tab\" aria-selected=\"false\">Fri</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#sat\" role=\"tab\" aria-selected=\"false\">Sat</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#sun\" role=\"tab\" aria-selected=\"false\">Sun</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>


\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</nav>


\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-pane active\" id=\"mon\">


\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Set No Parking restriction times per Day -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Monday</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check container-fluid daySlot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart<input class=\"timeInput\" name=\"mondayStart\" id=\"mondayStart\" type=\"time\" mdp-time-picker
                                                                {% if rule.mondayStart != 0 %} value=\"{{rule.mondayStart}}\" {% endif %}
                                                                /><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"mondayEnd\" id=\"mondayEnd\" type=\"time\" mdp-time-picker
                                                                {% if rule.mondayEnd != 0 %} value=\"{{rule.mondayEnd}}\" {% endif %}
                                                                />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-pane\" id=\"tue\">


\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Set No Parking restriction times per Day -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Tueday</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check container-fluid daySlot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart<input class=\"timeInput\" name=\"tuesdayStart\" id=\"tuesdayStart\" type=\"time\" mdp-time-picker
                                                                {% if rule.tuesdayStart != 0 %} value=\"{{rule.tuesdayStart}}\" {% endif %}
                                                                /><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"tuesdayEnd\" id=\"tuesdayEnd\" type=\"time\" mdp-time-picker 
                                                                {% if rule.tuesdayEnd != 0 %} value=\"{{rule.tuesdayEnd}}\" {% endif %}
                                                                />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"wed\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Set No Parking restriction times per Day -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Wednesday</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check container-fluid daySlot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart<input class=\"timeInput\" name=\"wednesdayStart\" id=\"wednesdayStart\" type=\"time\" mdp-time-picker
                                                                {% if rule.wednesdayStart != 0 %} value=\"{{rule.wednesdayStart}}\" {% endif %}
                                                                /><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"wednesdayEnd\" id=\"wednesdayEnd\" type=\"time\" mdp-time-picker
                                                                {% if rule.wednesdayEnd != 0 %} value=\"{{rule.wednesdayEnd}}\" {% endif %}
                                                                />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"thu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Set No Parking restriction times per Day -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Thursday</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check container-fluid daySlot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart<input class=\"timeInput\" name=\"thursdayStart\" id=\"thursdayStart\" type=\"time\" mdp-time-picker
                                                                {% if rule.thursdayStart != 0 %} value=\"{{rule.thursdayStart}}\" {% endif %}
                                                                /><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"thursdayEnd\" id=\"thursdayEnd\" type=\"time\" mdp-time-picker
                                                                {% if rule.thursdayEnd != 0 %} value=\"{{rule.thursdayEnd}}\" {% endif %}
                                                                />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"fri\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Set No Parking restriction times per Day -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Friday</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check container-fluid daySlot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart<input class=\"timeInput\" name=\"fridayStart\" id=\"fridayStart\" type=\"time\" mdp-time-picker
                                                                {% if rule.fridayStart != 0 %} value=\"{{rule.fridayStart}}\" {% endif %}
                                                                /><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"fridayEnd\" id=\"fridayEnd\" type=\"time\" mdp-time-picker
                                                                {% if rule.fridayEnd != 0 %} value=\"{{rule.fridayEnd}}\" {% endif %}
                                                                />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-pane\" id=\"sat\">


\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Set No Parking restriction times per Day -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Saturday</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check container-fluid daySlot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart<input class=\"timeInput\" name=\"saturdayStart\" id=\"saturdayStart\" type=\"time\" mdp-time-picker
                                                                {% if rule.saturdayStart != 0 %} value=\"{{rule.saturdayStart}}\" {% endif %}
                                                                /><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"saturdayEnd\" id=\"saturdayEnd\" type=\"time\" mdp-time-picker
                                                                {% if rule.saturdayEnd != 0 %} value=\"{{rule.saturdayEnd}}\" {% endif %}
                                                                />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-pane\" id=\"sun\">


\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Set No Parking restriction times per Day -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Sunday</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check container-fluid daySlot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart<input class=\"timeInput\" name=\"sundayStart\" id=\"sundayStart\" type=\"time\" mdp-time-picker 
                                                                {% if rule.sundayStart != 0 %} value=\"{{rule.sundayStart}}\" {% endif %}
                                                                 /><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"sundayEnd\" id=\"sundayEnd\" type=\"time\" mdp-time-picker
                                                                {% if rule.sundayEnd != 0 %} value=\"{{rule.sundayEnd}}\" {% endif %}
                                                                />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary form-control\"/>
\t\t\t\t\t\t\t\t{% if errorList %}
\t\t\t\t\t\t\t\t\t<ul class=\"errorMessage\">
\t\t\t\t\t\t\t\t\t\t{% for error in errorList %}
\t\t\t\t\t\t\t\t\t\t\t<li>{{error}}</li>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Else Log in -->


\t\t\t</div>
\t\t\t<p id=\"location\"></p>
\t\t\t{% block scripts %}

\t\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\" integrity=\"sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p\" crossorigin=\"anonymous\"></script>

\t\t\t\t<script>
\t\t\t\t\tfunction sideRole(role) {
                \$(\"#sideFlag\").val(role)
                }

                var input = document.getElementById('pac-input');
                var autocomplete = new google.maps.places.Autocomplete(input);
                google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var place = autocomplete.getPlace();
                \$(\"#longitude\").val(place.geometry.viewport.La.g)
                \$(\"#latitude\").val(place.geometry.viewport.Ua.g)
                \$(\"#streetname\").val(place.address_components[1].short_name)
                });
\t\t\t\t</script>
\t\t\t{% endblock scripts %}

{% endblock %}", "admin/rules_edit.html.twig", "E:\\Xampp\\htdocs\\parkbud\\parkbud\\templates\\admin\\rules_edit.html.twig");
    }
}
