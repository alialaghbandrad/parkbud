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

/* rules_list.html.twig */
class __TwigTemplate_869b87202047342b5a29ef591467810e3881a51f3b672041c42d93f6bf57b545 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "rules_list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Parking rules List";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div>
        <h3>List of parking rules</h3>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover overflow-auto\">
            <thead class=\"thead-dark align-top\">
                <tr class=\"table-primary align-top\" >
                    <th scope=\"col\" class=\"align-top\">ID</th>
                    <th scope=\"col\" class=\"align-top\">User ID</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Street name</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Period start</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Period End</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Parking Meter</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Side Flag (even/odd)</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Monday: Start-End</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Tuesday: Start-End</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Wednesday: Start-End</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Thursday: Start-End</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Friday: Start-End</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Saturday: Start-End</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Sunday: Start-End</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Coordinates (Longitude, Latitude)</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Image</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Created date</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rulesList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 35
            echo "                    <tr>
                        <th scope=\"row\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</th>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "userid", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "streetName", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "periodStart", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "periodEnd", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "parkingMeter", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "sideFlag", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["r"], "mondayStart", [], "any", false, false, false, 43) . " , ") . twig_get_attribute($this->env, $this->source, $context["r"], "mondayEnd", [], "any", false, false, false, 43)), "html", null, true);
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["r"], "tuesdayStart", [], "any", false, false, false, 44) . " , ") . twig_get_attribute($this->env, $this->source, $context["r"], "tuesdayEnd", [], "any", false, false, false, 44)), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["r"], "wednesdayStart", [], "any", false, false, false, 45) . " , ") . twig_get_attribute($this->env, $this->source, $context["r"], "wednesdayEnd", [], "any", false, false, false, 45)), "html", null, true);
            echo "</td>
                        <td>";
            // line 46
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["r"], "thursdayStart", [], "any", false, false, false, 46) . " , ") . twig_get_attribute($this->env, $this->source, $context["r"], "thursdayEnd", [], "any", false, false, false, 46)), "html", null, true);
            echo "</td>
                        <td>";
            // line 47
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["r"], "fridayStart", [], "any", false, false, false, 47) . " , ") . twig_get_attribute($this->env, $this->source, $context["r"], "fridayEnd", [], "any", false, false, false, 47)), "html", null, true);
            echo "</td>
                        <td>";
            // line 48
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["r"], "saturdayStart", [], "any", false, false, false, 48) . " , ") . twig_get_attribute($this->env, $this->source, $context["r"], "saturdayEnd", [], "any", false, false, false, 48)), "html", null, true);
            echo "</td>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["r"], "sundayStart", [], "any", false, false, false, 49) . " , ") . twig_get_attribute($this->env, $this->source, $context["r"], "sundayEnd", [], "any", false, false, false, 49)), "html", null, true);
            echo "</td>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["r"], "longitude", [], "any", false, false, false, 50) . " , ") . twig_get_attribute($this->env, $this->source, $context["r"], "latitude", [], "any", false, false, false, 50)), "html", null, true);
            echo "</td>
                        <td><a href=\"/uploads/";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "image", [], "any", false, false, false, 51), "html", null, true);
            echo "\"><img src=\"/uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "image", [], "any", false, false, false, 51), "html", null, true);
            echo "\" height=\"70rem\" alt=\"img\"></a><br><a href=\"/uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "image", [], "any", false, false, false, 51), "html", null, true);
            echo "\">View fullsize image</a> </td>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "createdTS", [], "any", false, false, false, 52), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\" href=\"/user/rules/edit/";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\">edit</a>
                            
                            <a class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\" href=\"/user/rules/delete/";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 56), "html", null, true);
            echo "\">delete</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "rules_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 60,  173 => 56,  168 => 54,  163 => 52,  155 => 51,  151 => 50,  147 => 49,  143 => 48,  139 => 47,  135 => 46,  131 => 45,  127 => 44,  123 => 43,  119 => 42,  115 => 41,  111 => 40,  107 => 39,  103 => 38,  99 => 37,  95 => 36,  92 => 35,  88 => 34,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %}Parking rules List{% endblock %}

{% block content %}
    <div>
        <h3>List of parking rules</h3>
    </div>
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover overflow-auto\">
            <thead class=\"thead-dark align-top\">
                <tr class=\"table-primary align-top\" >
                    <th scope=\"col\" class=\"align-top\">ID</th>
                    <th scope=\"col\" class=\"align-top\">User ID</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Street name</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Period start</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Period End</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Parking Meter</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Side Flag (even/odd)</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Monday: Start-End</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Tuesday: Start-End</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Wednesday: Start-End</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Thursday: Start-End</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Friday: Start-End</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Saturday: Start-End</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Sunday: Start-End</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Coordinates (Longitude, Latitude)</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Image</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Created date</th>
                    <th scope=\"col\" class=\"align-top\" style=\"min-width: 140px;\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for r in rulesList %}
                    <tr>
                        <th scope=\"row\">{{ r.id }}</th>
                        <td>{{ r.userid }}</td>
                        <td>{{ r.streetName }}</td>
                        <td>{{ r.periodStart }}</td>
                        <td>{{ r.periodEnd }}</td>
                        <td>{{ r.parkingMeter }}</td>
                        <td>{{ r.sideFlag }}</td>
                        <td>{{ r.mondayStart ~ ' , ' ~ r.mondayEnd }}</td>
                        <td>{{ r.tuesdayStart ~ ' , ' ~ r.tuesdayEnd }}</td>
                        <td>{{ r.wednesdayStart ~ ' , ' ~ r.wednesdayEnd  }}</td>
                        <td>{{ r.thursdayStart ~ ' , ' ~ r.thursdayEnd }}</td>
                        <td>{{ r.fridayStart ~ ' , ' ~ r.fridayEnd }}</td>
                        <td>{{ r.saturdayStart ~ ' , ' ~ r.saturdayEnd }}</td>
                        <td>{{ r.sundayStart ~ ' , ' ~ r.sundayEnd }}</td>
                        <td>{{ r.longitude ~ ' , ' ~ r.latitude }}</td>
                        <td><a href=\"/uploads/{{r.image}}\"><img src=\"/uploads/{{r.image}}\" height=\"70rem\" alt=\"img\"></a><br><a href=\"/uploads/{{r.image}}\">View fullsize image</a> </td>
                        <td>{{ r.createdTS|date(\"Y-m-d\") }}</td>
                        <td>
                            <a class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\" href=\"/user/rules/edit/{{ r.id }}\">edit</a>
                            
                            <a class=\"btn btn-primary btn-sm active\" role=\"button\" aria-pressed=\"true\" href=\"/user/rules/delete/{{ r.id }}\">delete</a>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}", "rules_list.html.twig", "E:\\Xampp\\htdocs\\parkbud\\parkbud\\templates\\rules_list.html.twig");
    }
}
