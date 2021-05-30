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

/* ruleadd.html.twig */
class __TwigTemplate_362d65a65d901b034e8dc5bbe909f798e4ea3fe82aa79062a8db63eb0673ac3f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "ruleadd.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\t<link href=\"https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap\" rel=\"stylesheet\">\t\t
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t";
        if (($context["userSession"] ?? null)) {
            // line 8
            echo "\t\tAdd Rule
\t";
        } else {
            // line 10
            echo "\t\tRegister New User
\t";
        }
        // line 12
        echo "
";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "<h1 class=\"logo\">Add Rule</h1>
<div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"blue col-sm-6 \">
                <input id=\"pac-input\" class=\"controls\" type=\"text\" placeholder=\"Type Adress or Street\" />

                <div id=\"mainMapContainer\">
                    <div class=\"map\" style=\"height:800px;width:100%;\" id=\"map\"></div>
                </div>


                <script src=\"index.js\"></script>

                <script src=\"https://polyfill.io/v3/polyfill.min.js?features=default\"></script>
                <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
                <script
                    src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCLoTwm91EVWlIY1yMAfFmLQVQeUB7espA&callback=initAutocomplete&libraries=places&v=weekly&callback=initAutocomplete\">
                </script>
            </div>

            <div class=\"red col-sm-6 \">
                <form method=\"POST\" enctype=\"multipart/form-data\">

                    <!-- Display Street Name from Map Search -->
                    <input name=\"sideFlag\" id=\"sideFlag\" type=\"hidden\" />
                    <input name=\"longitude\" id=\"longitude\" type=\"hidden\" />
                    <input name=\"latitude\" id=\"latitude\" type=\"hidden\" />
                    <div class=\"form-group row text-center\">
                        <label for=\"streetname\">Street Name</label>
                        <input type=\"text\" class=\"form-control\" id=\"streetname\" name=\"streetName\" value=\"\"
                            placeholder=\"street name\">

                    </div>
                    <!-- Select Time Period For Applicable parking rules -->
                    <div class=\"form-group row text-center\">
                        <label for=\"dateStart\">Period start</label>
                        <input type=\"date\" name=\"periodStart\" class=\"form-control\" id=\"dateStart\" value=\"\">

                    </div>
                    <div class=\"form-group row text-center\">
                        <label for=\"dateEnd\">Period End</label>
                        <input type=\"date\" name=\"periodEnd\" class=\"form-control\" id=\"dateEnd\" value=\"\">

                    </div>

                    <div class=\"from-group row\">
                        <label for=\"parkingMeter\">Does This Space have a parking meter?</label>
                        <div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"parkingMeter\" id=\"noPm\" value=\"true\"
                                    checked>
                                <label class=\"form-check-label\" for=\"yes\">Yes</label>
                            </div>

                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"parkingMeter\" id=\"yesPm\"
                                    value=\"false\">
                                <label class=\"form-check-label\" for=\"no\">No</label>
                            </div>
                            <div></div>
                            <br>

                            <!-- TABS -->
                            <div class=\"ruleSect row form-group\">
                                <nav class=\"tabBar\">
                                    <ul class=\"nav nav-tabs\" id=\"side-tabs\" role=\"tab\">
                                        <li class=\"nav-item nav-link active\">
                                            <a onclick=\"sideRole(0);\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#a\"
                                                role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Even</a>
                                        </li>
                                        <li class=\"nav-item nav-link\">
                                            <a onclick=\"sideRole(1);\" id=\"nav-profile-tab\" data-toggle=\"tab\" href=\"#b\"
                                                role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Odd</a>
                                        </li>

                                    </ul>
                                </nav>

                                <div class=\"tab-content\">

                                    <div class=\"tab-pane active\" id=\"a\" role=\"tablist\">
                                        <br><br>
                                        <p>Please Upload picture of the Even Side Parking Sign</p>

                                        <input class=\"btn btn-primary\" type=\"file\" id=\"myFile\" name=\"image\">


                                        <nav class=\"tabBar\">

                                            <ul class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">

                                                <li class=\"nav-item nav-link active\">
                                                    <a data-toggle=\"tab\" href=\"#mon\" role=\"tab\"
                                                        aria-selected=\"true\">Mon</a>
                                                </li>
                                                <li class=\"nav-item nav-link\">
                                                    <a data-toggle=\"tab\" href=\"#tue\" role=\"tab\"
                                                        aria-selected=\"false\">Tue</a>
                                                </li>
                                                <li class=\"nav-item nav-link\">
                                                    <a data-toggle=\"tab\" href=\"#wed\" role=\"tab\"
                                                        aria-selected=\"false\">Wed</a>
                                                </li>
                                                <li class=\"nav-item nav-link\">
                                                    <a data-toggle=\"tab\" href=\"#thu\" role=\"tab\"
                                                        aria-selected=\"false\">Thu</a>
                                                </li>
                                                <li class=\"nav-item nav-link\">
                                                    <a data-toggle=\"tab\" href=\"#fri\" role=\"tab\"
                                                        aria-selected=\"false\">Fri</a>
                                                </li>
                                                <li class=\"nav-item nav-link\">
                                                    <a data-toggle=\"tab\" href=\"#sat\" role=\"tab\"
                                                        aria-selected=\"false\">Sat</a>
                                                </li>
                                                <li class=\"nav-item nav-link\">
                                                    <a data-toggle=\"tab\" href=\"#sun\" role=\"tab\"
                                                        aria-selected=\"false\">Sun</a>
                                                </li>


                                            </ul>
                                        </nav>


                                        <div class=\"tab-content\">

                                            <div class=\"tab-pane active\" id=\"mon\">


                                                <!-- Set No Parking restriction times per Day -->
                                                <h3>Monday</h3>
                                                <div class=\"form-check container-fluid daySlot\">
                                                    <div class=\"\">


                                                        <div class=\"col\">
                                                            start<input class=\"timeInput\" name=\"mondayStart\"
                                                                id=\"mondayStart\" type=\"time\" mdp-time-picker /><br> end
                                                            <input class=\"timeInput\" name=\"mondayEnd\" id=\"mondayEnd\"
                                                                type=\"time\" mdp-time-picker />
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>

                                            <div class=\"tab-pane\" id=\"tue\">


                                                <!-- Set No Parking restriction times per Day -->
                                                <h3>Tueday</h3>
                                                <div class=\"form-check container-fluid daySlot\">
                                                    <div class=\"\">


                                                        <div class=\"col\">
                                                            start<input class=\"timeInput\" name=\"tuesdayStart\"
                                                                id=\"tuesdayStart\" type=\"time\" mdp-time-picker /><br> end
                                                            <input class=\"timeInput\" name=\"tuesdayEnd\" id=\"tuesdayEnd\"
                                                                type=\"time\" mdp-time-picker />
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>
                                            <div class=\"tab-pane\" id=\"wed\">


                                                <!-- Set No Parking restriction times per Day -->
                                                <h3>Wednesday</h3>
                                                <div class=\"form-check container-fluid daySlot\">
                                                    <div class=\"\">


                                                        <div class=\"col\">
                                                            start<input class=\"timeInput\" name=\"wednesdayStart\"
                                                                id=\"wednesdayStart\" type=\"time\" mdp-time-picker /><br>
                                                            end
                                                            <input class=\"timeInput\" name=\"wednesdayEnd\"
                                                                id=\"wednesdayEnd\" type=\"time\" mdp-time-picker />
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane\" id=\"thu\">


                                                <!-- Set No Parking restriction times per Day -->
                                                <h3>Thursday</h3>
                                                <div class=\"form-check container-fluid daySlot\">
                                                    <div class=\"\">


                                                        <div class=\"col\">
                                                            start<input class=\"timeInput\" name=\"thursdayStart\"
                                                                id=\"thursdayStart\" type=\"time\" mdp-time-picker /><br>
                                                            end
                                                            <input class=\"timeInput\" name=\"thursdayEnd\" id=\"thursdayEnd\"
                                                                type=\"time\" mdp-time-picker />
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>
                                            <div class=\"tab-pane\" id=\"fri\">

                                                <!-- Set No Parking restriction times per Day -->
                                                <h3>Friday</h3>
                                                <div class=\"form-check container-fluid daySlot\">
                                                    <div class=\"\">


                                                        <div class=\"col\">
                                                            start<input class=\"timeInput\" name=\"fridayStart\"
                                                                id=\"fridayStart\" type=\"time\" mdp-time-picker /><br> end
                                                            <input class=\"timeInput\" name=\"fridayEnd\" id=\"fridayEnd\"
                                                                type=\"time\" mdp-time-picker />
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>
                                            <div class=\"tab-pane\" id=\"sat\">


                                                <!-- Set No Parking restriction times per Day -->
                                                <h3>Saturday</h3>
                                                <div class=\"form-check container-fluid daySlot\">
                                                    <div class=\"\">


                                                        <div class=\"col\">
                                                            start<input class=\"timeInput\" name=\"saturdayStart\"
                                                                id=\"saturdayStart\" type=\"time\" mdp-time-picker /><br>
                                                            end
                                                            <input class=\"timeInput\" name=\"saturdayEnd\" id=\"saturdayEnd\"
                                                                type=\"time\" mdp-time-picker />
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class=\"tab-pane\" id=\"sun\">


                                                <!-- Set No Parking restriction times per Day -->
                                                <h3>Sunday</h3>
                                                <div class=\"form-check container-fluid daySlot\">
                                                    <div class=\"\">


                                                        <div class=\"col\">
                                                            start<input class=\"timeInput\" name=\"sundayStart\"
                                                                id=\"sundayStart\" type=\"time\" mdp-time-picker /><br> end
                                                            <input class=\"timeInput\" name=\"sundayEnd\" id=\"sundayEnd\"
                                                                type=\"time\" mdp-time-picker />
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>


                                        </div>


                                    </div>

                                </div>

                            </div>



                </form>
            </div>
        </div>
    </div>


";
    }

    // line 309
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 310
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\" integrity=\"sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p\" crossorigin=\"anonymous\"></script>
<script>
function sideRole(role) {
\$(\"#sideFlag\").val(role)
}
var input = document.getElementById('pac-input');
var autocomplete = new google.maps.places.Autocomplete(input);
google.maps.event.addListener(autocomplete, 'place_changed', function () {
var place = autocomplete.getPlace();
\$(\"#longitude\").val(place.geometry.viewport.La.g)
\$(\"#latitude\").val(place.geometry.viewport.Ua.g)
\$(\"#streetname\").val(place.address_components[1].short_name)
});\t\t\t
";
    }

    public function getTemplateName()
    {
        return "ruleadd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 310,  379 => 309,  82 => 15,  78 => 14,  73 => 12,  69 => 10,  65 => 8,  62 => 7,  58 => 6,  53 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}
{% block stylesheet %}
\t<link href=\"https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap\" rel=\"stylesheet\">\t\t
{% endblock stylesheet %}

{% block title %}
\t{% if userSession %}
\t\tAdd Rule
\t{% else %}
\t\tRegister New User
\t{% endif %}

{% endblock title %}
{% block content %}
<h1 class=\"logo\">Add Rule</h1>
<div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"blue col-sm-6 \">
                <input id=\"pac-input\" class=\"controls\" type=\"text\" placeholder=\"Type Adress or Street\" />

                <div id=\"mainMapContainer\">
                    <div class=\"map\" style=\"height:800px;width:100%;\" id=\"map\"></div>
                </div>


                <script src=\"index.js\"></script>

                <script src=\"https://polyfill.io/v3/polyfill.min.js?features=default\"></script>
                <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
                <script
                    src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCLoTwm91EVWlIY1yMAfFmLQVQeUB7espA&callback=initAutocomplete&libraries=places&v=weekly&callback=initAutocomplete\">
                </script>
            </div>

            <div class=\"red col-sm-6 \">
                <form method=\"POST\" enctype=\"multipart/form-data\">

                    <!-- Display Street Name from Map Search -->
                    <input name=\"sideFlag\" id=\"sideFlag\" type=\"hidden\" />
                    <input name=\"longitude\" id=\"longitude\" type=\"hidden\" />
                    <input name=\"latitude\" id=\"latitude\" type=\"hidden\" />
                    <div class=\"form-group row text-center\">
                        <label for=\"streetname\">Street Name</label>
                        <input type=\"text\" class=\"form-control\" id=\"streetname\" name=\"streetName\" value=\"\"
                            placeholder=\"street name\">

                    </div>
                    <!-- Select Time Period For Applicable parking rules -->
                    <div class=\"form-group row text-center\">
                        <label for=\"dateStart\">Period start</label>
                        <input type=\"date\" name=\"periodStart\" class=\"form-control\" id=\"dateStart\" value=\"\">

                    </div>
                    <div class=\"form-group row text-center\">
                        <label for=\"dateEnd\">Period End</label>
                        <input type=\"date\" name=\"periodEnd\" class=\"form-control\" id=\"dateEnd\" value=\"\">

                    </div>

                    <div class=\"from-group row\">
                        <label for=\"parkingMeter\">Does This Space have a parking meter?</label>
                        <div>
                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"parkingMeter\" id=\"noPm\" value=\"true\"
                                    checked>
                                <label class=\"form-check-label\" for=\"yes\">Yes</label>
                            </div>

                            <div class=\"form-check\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"parkingMeter\" id=\"yesPm\"
                                    value=\"false\">
                                <label class=\"form-check-label\" for=\"no\">No</label>
                            </div>
                            <div></div>
                            <br>

                            <!-- TABS -->
                            <div class=\"ruleSect row form-group\">
                                <nav class=\"tabBar\">
                                    <ul class=\"nav nav-tabs\" id=\"side-tabs\" role=\"tab\">
                                        <li class=\"nav-item nav-link active\">
                                            <a onclick=\"sideRole(0);\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#a\"
                                                role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Even</a>
                                        </li>
                                        <li class=\"nav-item nav-link\">
                                            <a onclick=\"sideRole(1);\" id=\"nav-profile-tab\" data-toggle=\"tab\" href=\"#b\"
                                                role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Odd</a>
                                        </li>

                                    </ul>
                                </nav>

                                <div class=\"tab-content\">

                                    <div class=\"tab-pane active\" id=\"a\" role=\"tablist\">
                                        <br><br>
                                        <p>Please Upload picture of the Even Side Parking Sign</p>

                                        <input class=\"btn btn-primary\" type=\"file\" id=\"myFile\" name=\"image\">


                                        <nav class=\"tabBar\">

                                            <ul class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">

                                                <li class=\"nav-item nav-link active\">
                                                    <a data-toggle=\"tab\" href=\"#mon\" role=\"tab\"
                                                        aria-selected=\"true\">Mon</a>
                                                </li>
                                                <li class=\"nav-item nav-link\">
                                                    <a data-toggle=\"tab\" href=\"#tue\" role=\"tab\"
                                                        aria-selected=\"false\">Tue</a>
                                                </li>
                                                <li class=\"nav-item nav-link\">
                                                    <a data-toggle=\"tab\" href=\"#wed\" role=\"tab\"
                                                        aria-selected=\"false\">Wed</a>
                                                </li>
                                                <li class=\"nav-item nav-link\">
                                                    <a data-toggle=\"tab\" href=\"#thu\" role=\"tab\"
                                                        aria-selected=\"false\">Thu</a>
                                                </li>
                                                <li class=\"nav-item nav-link\">
                                                    <a data-toggle=\"tab\" href=\"#fri\" role=\"tab\"
                                                        aria-selected=\"false\">Fri</a>
                                                </li>
                                                <li class=\"nav-item nav-link\">
                                                    <a data-toggle=\"tab\" href=\"#sat\" role=\"tab\"
                                                        aria-selected=\"false\">Sat</a>
                                                </li>
                                                <li class=\"nav-item nav-link\">
                                                    <a data-toggle=\"tab\" href=\"#sun\" role=\"tab\"
                                                        aria-selected=\"false\">Sun</a>
                                                </li>


                                            </ul>
                                        </nav>


                                        <div class=\"tab-content\">

                                            <div class=\"tab-pane active\" id=\"mon\">


                                                <!-- Set No Parking restriction times per Day -->
                                                <h3>Monday</h3>
                                                <div class=\"form-check container-fluid daySlot\">
                                                    <div class=\"\">


                                                        <div class=\"col\">
                                                            start<input class=\"timeInput\" name=\"mondayStart\"
                                                                id=\"mondayStart\" type=\"time\" mdp-time-picker /><br> end
                                                            <input class=\"timeInput\" name=\"mondayEnd\" id=\"mondayEnd\"
                                                                type=\"time\" mdp-time-picker />
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>

                                            <div class=\"tab-pane\" id=\"tue\">


                                                <!-- Set No Parking restriction times per Day -->
                                                <h3>Tueday</h3>
                                                <div class=\"form-check container-fluid daySlot\">
                                                    <div class=\"\">


                                                        <div class=\"col\">
                                                            start<input class=\"timeInput\" name=\"tuesdayStart\"
                                                                id=\"tuesdayStart\" type=\"time\" mdp-time-picker /><br> end
                                                            <input class=\"timeInput\" name=\"tuesdayEnd\" id=\"tuesdayEnd\"
                                                                type=\"time\" mdp-time-picker />
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>
                                            <div class=\"tab-pane\" id=\"wed\">


                                                <!-- Set No Parking restriction times per Day -->
                                                <h3>Wednesday</h3>
                                                <div class=\"form-check container-fluid daySlot\">
                                                    <div class=\"\">


                                                        <div class=\"col\">
                                                            start<input class=\"timeInput\" name=\"wednesdayStart\"
                                                                id=\"wednesdayStart\" type=\"time\" mdp-time-picker /><br>
                                                            end
                                                            <input class=\"timeInput\" name=\"wednesdayEnd\"
                                                                id=\"wednesdayEnd\" type=\"time\" mdp-time-picker />
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane\" id=\"thu\">


                                                <!-- Set No Parking restriction times per Day -->
                                                <h3>Thursday</h3>
                                                <div class=\"form-check container-fluid daySlot\">
                                                    <div class=\"\">


                                                        <div class=\"col\">
                                                            start<input class=\"timeInput\" name=\"thursdayStart\"
                                                                id=\"thursdayStart\" type=\"time\" mdp-time-picker /><br>
                                                            end
                                                            <input class=\"timeInput\" name=\"thursdayEnd\" id=\"thursdayEnd\"
                                                                type=\"time\" mdp-time-picker />
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>
                                            <div class=\"tab-pane\" id=\"fri\">

                                                <!-- Set No Parking restriction times per Day -->
                                                <h3>Friday</h3>
                                                <div class=\"form-check container-fluid daySlot\">
                                                    <div class=\"\">


                                                        <div class=\"col\">
                                                            start<input class=\"timeInput\" name=\"fridayStart\"
                                                                id=\"fridayStart\" type=\"time\" mdp-time-picker /><br> end
                                                            <input class=\"timeInput\" name=\"fridayEnd\" id=\"fridayEnd\"
                                                                type=\"time\" mdp-time-picker />
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>
                                            <div class=\"tab-pane\" id=\"sat\">


                                                <!-- Set No Parking restriction times per Day -->
                                                <h3>Saturday</h3>
                                                <div class=\"form-check container-fluid daySlot\">
                                                    <div class=\"\">


                                                        <div class=\"col\">
                                                            start<input class=\"timeInput\" name=\"saturdayStart\"
                                                                id=\"saturdayStart\" type=\"time\" mdp-time-picker /><br>
                                                            end
                                                            <input class=\"timeInput\" name=\"saturdayEnd\" id=\"saturdayEnd\"
                                                                type=\"time\" mdp-time-picker />
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                            <div class=\"tab-pane\" id=\"sun\">


                                                <!-- Set No Parking restriction times per Day -->
                                                <h3>Sunday</h3>
                                                <div class=\"form-check container-fluid daySlot\">
                                                    <div class=\"\">


                                                        <div class=\"col\">
                                                            start<input class=\"timeInput\" name=\"sundayStart\"
                                                                id=\"sundayStart\" type=\"time\" mdp-time-picker /><br> end
                                                            <input class=\"timeInput\" name=\"sundayEnd\" id=\"sundayEnd\"
                                                                type=\"time\" mdp-time-picker />
                                                        </div>

                                                    </div>
                                                </div>


                                            </div>


                                        </div>


                                    </div>

                                </div>

                            </div>



                </form>
            </div>
        </div>
    </div>


{% endblock content %}
{% block scripts %}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\" integrity=\"sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p\" crossorigin=\"anonymous\"></script>
<script>
function sideRole(role) {
\$(\"#sideFlag\").val(role)
}
var input = document.getElementById('pac-input');
var autocomplete = new google.maps.places.Autocomplete(input);
google.maps.event.addListener(autocomplete, 'place_changed', function () {
var place = autocomplete.getPlace();
\$(\"#longitude\").val(place.geometry.viewport.La.g)
\$(\"#latitude\").val(place.geometry.viewport.Ua.g)
\$(\"#streetname\").val(place.address_components[1].short_name)
});\t\t\t
{% endblock scripts %}
", "ruleadd.html.twig", "E:\\Xampp\\htdocs\\parkbud\\parkbud\\templates\\ruleadd.html.twig");
    }
}
