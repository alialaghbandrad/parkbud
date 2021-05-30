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

/* addrule.html.twig */
class __TwigTemplate_802f39ee3071aa78d277c2326e304c5ff5a32c6447a6b0d761a0924fd80328f6 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "addrule.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\t<link href=\"https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"/css/style.css\">
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t";
        if (($context["userSession"] ?? null)) {
            // line 9
            echo "\t\tAdd Rule
\t";
        } else {
            // line 11
            echo "\t\tRegister New User
\t";
        }
        // line 13
        echo "
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
\t<div class=\"container-fluid\">


\t\t<h3 class=\"logo row\">Add Rule</h1>
\t\t<div
\t\t\tclass=\"row\">

\t\t\t<!-- if Session -->


\t\t\t<div
\t\t\t\tclass=\"col-sm map col-md-6\">

\t\t\t\t<!--   MAP LEFT COLUMN -->

\t\t\t\t<script src=\"https://polyfill.io/v3/polyfill.min.js?features=default\"></script>
\t\t\t\t<!-- Async script executes immediately and must be after any DOM elements used in callback. -->

    
\t
\t\t\t\t<style type=\"text/css\">
\t\t\t\t#map {
\t\t\t\t\theight: 100%;
\t\t\t\t}

\t\t\t\t/* Optional: Makes the sample page fill the window. */
\t\t\t\thtml,
\t\t\t\tbody {
\t\t\t\t\theight: 100%;
\t\t\t\t\tmargin: 0;
\t\t\t\t\tpadding: 0;
\t\t\t\t\t
\t\t\t\t}
\t\t\t\t</style>

\t\t\t\t
\t\t\t\t<p id=\"mainParkHeader\" >Where would you like to add parking rule?</p>

\t\t\t\t<input
\t\t\t\tid=\"pac-input\"
\t\t\t\tclass=\"controls rounded center col-md-6\"
\t\t\t\ttype=\"text\"
\t\t\t\tplaceholder=\"Search Box\"
\t\t\t\t
\t\t\t\t/>
\t\t\t\t
\t\t\t\t<div id=\"mainMapContainer\">
\t\t\t\t<div id=\"map\" style=\"height:600px;width:800px;\"></div>
\t\t\t\t</div>
\t\t\t\t<p id=\"demo\"></p>

\t\t\t<script>
\t\t\tlet map;

\t\t\tfunction initMap() {
\t\t\t// start test
\t\t\t\tfunction sideRole(role) {
\t\t\t\t\$(\"#sideFlag\").val(role)
\t\t\t\t}
\t\t\t\tfunction pmRole(role) {
\t\t\t\t\$(\"#pmVal\").val(role)
\t\t\t\t}

\t\t\t// end test


\t\t\t\tmap = new google.maps.Map(document.getElementById(\"map\"), {
\t\t\t\t\tcenter: { lat: 45.484173, lng: -73.610487 },  
\t\t\t\t\tzoom: 10,
\t\t\t\t\tmapTypeId: \"roadmap\",
\t\t\t\t});

\t\t\t\t// Create the search box and link it to the UI element.
\t\t\t\tconst input = document.getElementById('pac-input');
\t\t\t\t// var autocomplete = new google.maps.places.Autocomplete(input);   // NEW
\t\t\t\tconst searchBox = new google.maps.places.SearchBox(input);
\t\t\t\tmap.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
\t\t\t\t


\t\t\t\t// Bias the SearchBox results towards current map's viewport.
\t\t\t\tmap.addListener(\"bounds_changed\", () => {
\t\t\t\t\tsearchBox.setBounds(map.getBounds());
\t\t\t\t});
\t\t\t\tlet markers = [];
\t\t\t\t// Listen for the event fired when the user selects a prediction and retrieve
\t\t\t\t// more details for that place.
\t\t\t\tsearchBox.addListener(\"places_changed\", () => {
\t\t\t\t\tconst places = searchBox.getPlaces();

\t\t\t\t\tif (places.length == 0) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\t// Clear out the old markers.
\t\t\t\t\tmarkers.forEach((marker) => {
\t\t\t\t\t\tmarker.setMap(null);
\t\t\t\t\t});
\t\t\t\t\tmarkers = [];
\t\t\t\t\t// For each place, get the icon, name and location.
\t\t\t\t\tconst bounds = new google.maps.LatLngBounds();
\t\t\t\t\tplaces.forEach((place) => {
\t\t\t\t\t\tif (!place.geometry || !place.geometry.location) {
\t\t\t\t\t\t\tconsole.log(\"Returned place contains no geometry\");
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\tconst icon = {
\t\t\t\t\t\t\turl: place.icon,
\t\t\t\t\t\t\tsize: new google.maps.Size(71, 71),
\t\t\t\t\t\t\torigin: new google.maps.Point(0, 0),
\t\t\t\t\t\t\tanchor: new google.maps.Point(17, 34),
\t\t\t\t\t\t\tscaledSize: new google.maps.Size(25, 25),
\t\t\t\t\t\t};
\t\t\t\t\t\t\t
\t\t\t\t\t\t// Create a marker for each place.
\t\t\t\t\t\tmarkers.push(
\t\t\t\t\t\t\tnew google.maps.Marker({
\t\t\t\t\t\t\t\tmap,
\t\t\t\t\t\t\t\ticon,
\t\t\t\t\t\t\t\ttitle: place.name,
\t\t\t\t\t\t\t\tposition: place.geometry.location,
\t\t\t\t\t\t\t})
\t\t\t\t\t\t);
\t\t\t\t\t\t\t
\t\t\t\t\t\tif (place.geometry.viewport) {
\t\t\t\t\t\t\t// Only geocodes have viewport.
\t\t\t\t\t\t\tbounds.union(place.geometry.viewport);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tbounds.extend(place.geometry.location);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tmap.fitBounds(bounds);
\t\t\t\t});
\t\t\t\t\tconst iconBase =
\t\t\t\t\t\"https://developers.google.com/maps/documentation/javascript/examples/full/images/\";
\t\t\t\t\tconst icons = {
\t\t\t\t\tparking: {
\t\t\t\t\t\ticon: iconBase + \"parking_lot_maps.png\",
\t\t\t\t\t},
\t\t\t\t\tlibrary: {
\t\t\t\t\t\ticon: iconBase + \"library_maps.png\",
\t\t\t\t\t},
\t\t\t\t\tinfo: {
\t\t\t\t\t\ticon: iconBase + \"info-i_maps.png\",
\t\t\t\t\t},
\t\t\t\t\t};
\t\t\t
\t\t\t\tvar marker;
\t\t\t\tvar markerLatLng;
\t\t\t\tconst features = [];

\t\t\t\tvar InfoObj = [];
\t\t\t\t// addMarkerInfo();

\t\t\t\t";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rulesList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
            // line 172
            echo "
\t\t\t\tfeatures.push(         
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\tplaceName: '<b>Parking rule:</b> <br>Coordinates: (";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "latitude", [], "any", false, false, false, 175), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "longitude", [], "any", false, false, false, 175), "html", null, true);
            echo ")<br> Street name: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "streetName", [], "any", false, false, false, 175), "html", null, true);
            echo "',
\t\t\t\t\t\t\tperiodStartEnd: 'Period start: ";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "periodStart", [], "any", false, false, false, 176), "html", null, true);
            echo "<br>Period end: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "periodEnd", [], "any", false, false, false, 176), "html", null, true);
            echo "',
\t\t\t\t\t\t\tparkingMeterEvenOdd: 'Parking meter(No:0/Yes:1): ";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "parkingMeter", [], "any", false, false, false, 177), "html", null, true);
            echo "<br>Even side:0/Odd side:1: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "sideFlag", [], "any", false, false, false, 177), "html", null, true);
            echo "',
\t\t\t\t\t\t\tdays: 'Monday: ";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "mondayStart", [], "any", false, false, false, 178), "html", null, true);
            echo " to ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "mondayEnd", [], "any", false, false, false, 178), "html", null, true);
            echo "<br>Tuesday: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "tuesdayStart", [], "any", false, false, false, 178), "html", null, true);
            echo " to ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "tuesdayEnd", [], "any", false, false, false, 178), "html", null, true);
            echo "<br>Wednesday: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "wednesdayStart", [], "any", false, false, false, 178), "html", null, true);
            echo " to ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "wednesdayEnd", [], "any", false, false, false, 178), "html", null, true);
            echo "<br>Thursday: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "thursdayStart", [], "any", false, false, false, 178), "html", null, true);
            echo " to ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "thursdayEnd", [], "any", false, false, false, 178), "html", null, true);
            echo "<br>Friday: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "fridayStart", [], "any", false, false, false, 178), "html", null, true);
            echo " to ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "fridayEnd", [], "any", false, false, false, 178), "html", null, true);
            echo "<br>Saturday: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "saturdayStart", [], "any", false, false, false, 178), "html", null, true);
            echo " to ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "saturdayEnd", [], "any", false, false, false, 178), "html", null, true);
            echo "<br>Sunday: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "sundayStart", [], "any", false, false, false, 178), "html", null, true);
            echo " to ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "sundayEnd", [], "any", false, false, false, 178), "html", null, true);
            echo "',
\t\t\t\t\t\t\tcreatedAt: 'Posted on: ";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "createdTS", [], "any", false, false, false, 179), "html", null, true);
            echo "',
\t\t\t\t\t\t\timage: '";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "image", [], "any", false, false, false, 180), "html", null, true);
            echo "',
\t\t\t\t\t\t\tposition: new google.maps.LatLng(
\t\t\t\t\t\t\t\t";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "latitude", [], "any", false, false, false, 182), "html", null, true);
            echo ",
\t\t\t\t\t\t\t\t";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "longitude", [], "any", false, false, false, 183), "html", null, true);
            echo "
\t\t\t\t\t\t\t),
\t\t\t\t\t\t\ttype: \"parking\",
\t\t\t\t});
\t\t\t\t
\t\t\t\t// Create markers.
\t\t\t\tfor (let i = 0; i < features.length; i++) {
\t\t\t\t\t\tvar contentString = '<p>' + features[i].placeName + '</p>' + '<p>' + features[i].periodStartEnd + '</p>' + '</p>' + '<p>' + features[i].parkingMeterEvenOdd + '</p>' + '<p>' + features[i].days + '</p>' + '<p>' + features[i].createdAt + '</p>' + '<a href=\"/uploads/' + features[i].image + '\"><img class=\"img-fluid\"  src=\"/uploads/' + features[i].image + '\" width=\"200rem\" alt=\"Current image\"></a>'
\t\t\t\t\t\t;

\t\t\t\t\t\tconst marker = new google.maps.Marker({
\t\t\t\t\t\tposition: features[i].position,
\t\t\t\t\t\ticon: icons[features[i].type].icon,
\t\t\t\t\t\t
\t\t\t\t\t\tmap: map,
\t\t\t\t\t\t});
\t\t\t\t\t\t

\t\t\t\t\t\tconst infowindow = new google.maps.InfoWindow({
\t\t\t\t\t\t\tcontent:  contentString,
\t\t\t\t\t\t\t
\t\t\t\t\t\t});

\t\t\t\t\t\tmarker.addListener(\"click\", function() {
\t\t\t\t\t\tcloseOtherInfo();
\t\t\t\t\t\tinfowindow.open(marker.get('map'), marker);
\t\t\t\t\t\tInfoObj[0] = infowindow;
\t\t\t\t\t\t});

\t\t\t\t\t\tfunction closeOtherInfo() {
\t\t\t\t\t\tif( InfoObj.length > 0 ) {
\t\t\t\t\t\t\tInfoObj[0].set(\"marker\", null);
\t\t\t\t\t\t\tInfoObj[0].close();
\t\t\t\t\t\t\tInfoObj[0].length = 0;
\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t}

\t\t\t\t

\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "\t\t\t
\t\t\t}
\t\t\t

\t\t\t</script>

\t\t\t<body>
\t\t\t\t

\t\t\t\t<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
\t\t\t\t

\t\t\t\t<script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCaIDYagxIULOH3ghDCLMJvuGLGQ9hXJh8&libraries=places&callback=initMap\"
\t\t\t\ttype=\"text/javascript\"></script>

\t\t\t</body>





\t\t\t<!--
\t\t\t\t\t\t\t<input id=\"pac-input\" class=\"controls rounded\" type=\"text\" placeholder=\"Type Adress or Street\"/>

\t\t\t\t\t\t\t<div id=\"mainMapContainer\">
\t\t\t\t\t\t\t\t<div class=\"map\" style=\"height:800px;width:100%;\" id=\"map\"></div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<script src=\"/index.js\"></script>

\t\t\t\t\t\t\t<script src=\"https://polyfill.io/v3/polyfill.min.js?features=default\"></script>
\t\t\t\t\t\t\t<!-- Async script executes immediately and must be after any DOM elements used in callback. 
\t\t\t\t\t\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCLoTwm91EVWlIY1yMAfFmLQVQeUB7espA&callback=initAutocomplete&libraries=places&v=weekly&callback=initAutocomplete\"></script>
\t\t\t-->
\t\t</div>

\t\t\t<div class=\"col-sm-1\"></div>
\t\t\t<div
\t\t\t\tclass=\"col-sm-5 \">
\t\t\t\t<!--   FORM Center COLUMN -->

\t\t\t\t<div>

\t\t\t\t\t<form
\t\t\t\t\t\tmethod=\"POST\" enctype=\"multipart/form-data\">

\t\t\t\t\t\t<!-- Display Street Name from Map Search -->
\t\t\t\t\t\t<input name=\"sideFlag\" id=\"sideFlag\" type=\"hidden\"/>
\t\t\t\t\t\t<input name=\"pmVal\" id=\"pmVal\" type=\"hidden\"/>
\t\t\t\t\t\t<input name=\"longitude\" id=\"longitude\" type=\"hidden\"/>
\t\t\t\t\t\t<input name=\"latitude\" id=\"latitude\" type=\"hidden\"/>
\t\t\t\t\t\t<div class=\"form-group row text-center\">
\t\t\t\t\t\t\t<label for=\"streetname\">Street Name</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"streetname\" name=\"streetName\" value=\"\" placeholder=\"street name\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Select Time Period For Applicable parking rules -->
\t\t\t\t\t\t<div class=\"form-group row text-center\">
\t\t\t\t\t\t\t<label for=\"dateStart\">Period start</label>
\t\t\t\t\t\t\t<input type=\"date\" name=\"periodStart\" class=\"form-control\" id=\"dateStart\" value=\"\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row text-center\">
\t\t\t\t\t\t\t<label for=\"dateEnd\">Period End</label>
\t\t\t\t\t\t\t<input type=\"date\" name=\"periodEnd\" class=\"form-control\" id=\"dateEnd\" value=\"\">

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"from-group row\">
\t\t\t\t\t\t\t<label for=\"parkingMeter\">Does This Space have a parking meter?</label>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t<input onclick=\"pmRole(0);\" class=\"form-check-input\" type=\"radio\" name=\"parkingMeter\" id=\"noPm\" value=\"0\" checked>
\t\t\t\t\t\t\t\t\t<label onclick=\"pmRole(1);\" class=\"form-check-label\" for=\"yes\">Yes</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"parkingMeter\" id=\"yesPm\" value=\"1\">
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"no\">No</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t<!-- TABS -->
\t\t\t\t\t\t\t\t<div class=\"ruleSect row form-group\">
\t\t\t\t\t\t\t\t\t<nav class=\"tabBar\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"side-tabs\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"siderole(0);\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#a\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Even</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"siderole(1);\" id=\"nav-profile-tab\" data-toggle=\"tab\" href=\"#b\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Odd</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</nav>

\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"a\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t<p>Please Upload picture of the Even Side Parking Sign</p>

\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"file\" id=\"myFile\" name=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<br><br>

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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span><input class=\"timeInput\" name=\"mondayStart\" id=\"mondayStart\" type=\"time\" mdp-time-picker/><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"mondayEnd\" id=\"mondayEnd\" type=\"time\" mdp-time-picker/>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span><input class=\"timeInput\" name=\"tuesdayStart\" id=\"tuesdayStart\" type=\"time\" mdp-time-picker/><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"tuesdayEnd\" id=\"tuesdayEnd\" type=\"time\" mdp-time-picker/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-pane\" id=\"wed\">


\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Set No Parking restriction times per Day -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Wednesday</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check container-fluid daySlot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span><input class=\"timeInput\" name=\"wednesdayStart\" id=\"wednesdayStart\" type=\"time\" mdp-time-picker/><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"wednesdayEnd\" id=\"wednesdayEnd\" type=\"time\" mdp-time-picker/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-pane\" id=\"thu\">


\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Set No Parking restriction times per Day -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Thursday</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check container-fluid daySlot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span><input class=\"timeInput\" name=\"thursdayStart\" id=\"thursdayStart\" type=\"time\" mdp-time-picker/><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"thursdayEnd\" id=\"thursdayEnd\" type=\"time\" mdp-time-picker/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-pane\" id=\"fri\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Set No Parking restriction times per Day -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Friday</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check container-fluid daySlot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span><input class=\"timeInput\" name=\"fridayStart\" id=\"fridayStart\" type=\"time\" mdp-time-picker/><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"fridayEnd\" id=\"fridayEnd\" type=\"time\" mdp-time-picker/>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span><input class=\"timeInput\" name=\"saturdayStart\" id=\"saturdayStart\" type=\"time\" mdp-time-picker/><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"saturdayEnd\" id=\"saturdayEnd\" type=\"time\" mdp-time-picker/>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span><input class=\"timeInput\" name=\"sundayStart\" id=\"sundayStart\" type=\"time\" mdp-time-picker/><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"sundayEnd\" id=\"sundayEnd\" type=\"time\" mdp-time-picker/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary form-control\"/>
\t\t\t\t\t\t\t\t";
        // line 536
        if (($context["errorList"] ?? null)) {
            // line 537
            echo "\t\t\t\t\t\t\t\t\t<ul class=\"errorMessage\">
\t\t\t\t\t\t\t\t\t\t";
            // line 538
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 539
                echo "\t\t\t\t\t\t\t\t\t\t\t<li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 541
            echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
        }
        // line 543
        echo "
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Else Log in -->


\t\t\t</div>
\t\t\t<div class=\"col-sm-1\"></div>
\t\t</div>

\t</div>

\t<p id=\"location\"></p>
\t";
        // line 561
        $this->displayBlock('scripts', $context, $blocks);
        // line 576
        echo "
";
    }

    // line 561
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 562
        echo "
\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\" integrity=\"sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p\" crossorigin=\"anonymous\"></script>

\t\t<script>
\t\t\t\tvar input = document.getElementById('pac-input');
\t\t\t\tvar autocomplete = new google.maps.places.Autocomplete(input);
\t\t\t\tgoogle.maps.event.addListener(autocomplete, 'place_changed', function () {
\t\t\t\tvar place = autocomplete.getPlace();
\t\t\t\t\$(\"#longitude\").val(place.geometry.viewport.La.g)
\t\t\t\t\$(\"#latitude\").val(place.geometry.viewport.Ua.g)
\t\t\t\t\$(\"#streetname\").val(place.address_components[1].short_name)
\t\t\t\t});
\t\t</script>
\t";
    }

    public function getTemplateName()
    {
        return "addrule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  725 => 562,  721 => 561,  716 => 576,  714 => 561,  694 => 543,  690 => 541,  681 => 539,  677 => 538,  674 => 537,  672 => 536,  359 => 225,  311 => 183,  307 => 182,  302 => 180,  298 => 179,  268 => 178,  262 => 177,  256 => 176,  248 => 175,  243 => 172,  239 => 171,  83 => 17,  79 => 16,  74 => 13,  70 => 11,  66 => 9,  63 => 8,  59 => 7,  53 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}
{% block stylesheet %}
\t<link href=\"https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"/css/style.css\">
{% endblock stylesheet %}

{% block title %}
\t{% if userSession %}
\t\tAdd Rule
\t{% else %}
\t\tRegister New User
\t{% endif %}

{% endblock title %}

{% block content %}

\t<div class=\"container-fluid\">


\t\t<h3 class=\"logo row\">Add Rule</h1>
\t\t<div
\t\t\tclass=\"row\">

\t\t\t<!-- if Session -->


\t\t\t<div
\t\t\t\tclass=\"col-sm map col-md-6\">

\t\t\t\t<!--   MAP LEFT COLUMN -->

\t\t\t\t<script src=\"https://polyfill.io/v3/polyfill.min.js?features=default\"></script>
\t\t\t\t<!-- Async script executes immediately and must be after any DOM elements used in callback. -->

    
\t
\t\t\t\t<style type=\"text/css\">
\t\t\t\t#map {
\t\t\t\t\theight: 100%;
\t\t\t\t}

\t\t\t\t/* Optional: Makes the sample page fill the window. */
\t\t\t\thtml,
\t\t\t\tbody {
\t\t\t\t\theight: 100%;
\t\t\t\t\tmargin: 0;
\t\t\t\t\tpadding: 0;
\t\t\t\t\t
\t\t\t\t}
\t\t\t\t</style>

\t\t\t\t
\t\t\t\t<p id=\"mainParkHeader\" >Where would you like to add parking rule?</p>

\t\t\t\t<input
\t\t\t\tid=\"pac-input\"
\t\t\t\tclass=\"controls rounded center col-md-6\"
\t\t\t\ttype=\"text\"
\t\t\t\tplaceholder=\"Search Box\"
\t\t\t\t
\t\t\t\t/>
\t\t\t\t
\t\t\t\t<div id=\"mainMapContainer\">
\t\t\t\t<div id=\"map\" style=\"height:600px;width:800px;\"></div>
\t\t\t\t</div>
\t\t\t\t<p id=\"demo\"></p>

\t\t\t<script>
\t\t\tlet map;

\t\t\tfunction initMap() {
\t\t\t// start test
\t\t\t\tfunction sideRole(role) {
\t\t\t\t\$(\"#sideFlag\").val(role)
\t\t\t\t}
\t\t\t\tfunction pmRole(role) {
\t\t\t\t\$(\"#pmVal\").val(role)
\t\t\t\t}

\t\t\t// end test


\t\t\t\tmap = new google.maps.Map(document.getElementById(\"map\"), {
\t\t\t\t\tcenter: { lat: 45.484173, lng: -73.610487 },  
\t\t\t\t\tzoom: 10,
\t\t\t\t\tmapTypeId: \"roadmap\",
\t\t\t\t});

\t\t\t\t// Create the search box and link it to the UI element.
\t\t\t\tconst input = document.getElementById('pac-input');
\t\t\t\t// var autocomplete = new google.maps.places.Autocomplete(input);   // NEW
\t\t\t\tconst searchBox = new google.maps.places.SearchBox(input);
\t\t\t\tmap.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
\t\t\t\t


\t\t\t\t// Bias the SearchBox results towards current map's viewport.
\t\t\t\tmap.addListener(\"bounds_changed\", () => {
\t\t\t\t\tsearchBox.setBounds(map.getBounds());
\t\t\t\t});
\t\t\t\tlet markers = [];
\t\t\t\t// Listen for the event fired when the user selects a prediction and retrieve
\t\t\t\t// more details for that place.
\t\t\t\tsearchBox.addListener(\"places_changed\", () => {
\t\t\t\t\tconst places = searchBox.getPlaces();

\t\t\t\t\tif (places.length == 0) {
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\t// Clear out the old markers.
\t\t\t\t\tmarkers.forEach((marker) => {
\t\t\t\t\t\tmarker.setMap(null);
\t\t\t\t\t});
\t\t\t\t\tmarkers = [];
\t\t\t\t\t// For each place, get the icon, name and location.
\t\t\t\t\tconst bounds = new google.maps.LatLngBounds();
\t\t\t\t\tplaces.forEach((place) => {
\t\t\t\t\t\tif (!place.geometry || !place.geometry.location) {
\t\t\t\t\t\t\tconsole.log(\"Returned place contains no geometry\");
\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t}
\t\t\t\t\t\tconst icon = {
\t\t\t\t\t\t\turl: place.icon,
\t\t\t\t\t\t\tsize: new google.maps.Size(71, 71),
\t\t\t\t\t\t\torigin: new google.maps.Point(0, 0),
\t\t\t\t\t\t\tanchor: new google.maps.Point(17, 34),
\t\t\t\t\t\t\tscaledSize: new google.maps.Size(25, 25),
\t\t\t\t\t\t};
\t\t\t\t\t\t\t
\t\t\t\t\t\t// Create a marker for each place.
\t\t\t\t\t\tmarkers.push(
\t\t\t\t\t\t\tnew google.maps.Marker({
\t\t\t\t\t\t\t\tmap,
\t\t\t\t\t\t\t\ticon,
\t\t\t\t\t\t\t\ttitle: place.name,
\t\t\t\t\t\t\t\tposition: place.geometry.location,
\t\t\t\t\t\t\t})
\t\t\t\t\t\t);
\t\t\t\t\t\t\t
\t\t\t\t\t\tif (place.geometry.viewport) {
\t\t\t\t\t\t\t// Only geocodes have viewport.
\t\t\t\t\t\t\tbounds.union(place.geometry.viewport);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tbounds.extend(place.geometry.location);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tmap.fitBounds(bounds);
\t\t\t\t});
\t\t\t\t\tconst iconBase =
\t\t\t\t\t\"https://developers.google.com/maps/documentation/javascript/examples/full/images/\";
\t\t\t\t\tconst icons = {
\t\t\t\t\tparking: {
\t\t\t\t\t\ticon: iconBase + \"parking_lot_maps.png\",
\t\t\t\t\t},
\t\t\t\t\tlibrary: {
\t\t\t\t\t\ticon: iconBase + \"library_maps.png\",
\t\t\t\t\t},
\t\t\t\t\tinfo: {
\t\t\t\t\t\ticon: iconBase + \"info-i_maps.png\",
\t\t\t\t\t},
\t\t\t\t\t};
\t\t\t
\t\t\t\tvar marker;
\t\t\t\tvar markerLatLng;
\t\t\t\tconst features = [];

\t\t\t\tvar InfoObj = [];
\t\t\t\t// addMarkerInfo();

\t\t\t\t{% for rule in rulesList %}

\t\t\t\tfeatures.push(         
\t\t\t\t\t\t\t{
\t\t\t\t\t\t\tplaceName: '<b>Parking rule:</b> <br>Coordinates: ({{rule.latitude}}, {{rule.longitude}})<br> Street name: {{rule.streetName}}',
\t\t\t\t\t\t\tperiodStartEnd: 'Period start: {{rule.periodStart}}<br>Period end: {{rule.periodEnd}}',
\t\t\t\t\t\t\tparkingMeterEvenOdd: 'Parking meter(No:0/Yes:1): {{rule.parkingMeter}}<br>Even side:0/Odd side:1: {{rule.sideFlag}}',
\t\t\t\t\t\t\tdays: 'Monday: {{rule.mondayStart}} to {{rule.mondayEnd}}<br>Tuesday: {{rule.tuesdayStart}} to {{rule.tuesdayEnd}}<br>Wednesday: {{rule.wednesdayStart}} to {{rule.wednesdayEnd}}<br>Thursday: {{rule.thursdayStart}} to {{rule.thursdayEnd}}<br>Friday: {{rule.fridayStart}} to {{rule.fridayEnd}}<br>Saturday: {{rule.saturdayStart}} to {{rule.saturdayEnd}}<br>Sunday: {{rule.sundayStart}} to {{rule.sundayEnd}}',
\t\t\t\t\t\t\tcreatedAt: 'Posted on: {{rule.createdTS}}',
\t\t\t\t\t\t\timage: '{{rule.image}}',
\t\t\t\t\t\t\tposition: new google.maps.LatLng(
\t\t\t\t\t\t\t\t{{rule.latitude}},
\t\t\t\t\t\t\t\t{{rule.longitude}}
\t\t\t\t\t\t\t),
\t\t\t\t\t\t\ttype: \"parking\",
\t\t\t\t});
\t\t\t\t
\t\t\t\t// Create markers.
\t\t\t\tfor (let i = 0; i < features.length; i++) {
\t\t\t\t\t\tvar contentString = '<p>' + features[i].placeName + '</p>' + '<p>' + features[i].periodStartEnd + '</p>' + '</p>' + '<p>' + features[i].parkingMeterEvenOdd + '</p>' + '<p>' + features[i].days + '</p>' + '<p>' + features[i].createdAt + '</p>' + '<a href=\"/uploads/' + features[i].image + '\"><img class=\"img-fluid\"  src=\"/uploads/' + features[i].image + '\" width=\"200rem\" alt=\"Current image\"></a>'
\t\t\t\t\t\t;

\t\t\t\t\t\tconst marker = new google.maps.Marker({
\t\t\t\t\t\tposition: features[i].position,
\t\t\t\t\t\ticon: icons[features[i].type].icon,
\t\t\t\t\t\t
\t\t\t\t\t\tmap: map,
\t\t\t\t\t\t});
\t\t\t\t\t\t

\t\t\t\t\t\tconst infowindow = new google.maps.InfoWindow({
\t\t\t\t\t\t\tcontent:  contentString,
\t\t\t\t\t\t\t
\t\t\t\t\t\t});

\t\t\t\t\t\tmarker.addListener(\"click\", function() {
\t\t\t\t\t\tcloseOtherInfo();
\t\t\t\t\t\tinfowindow.open(marker.get('map'), marker);
\t\t\t\t\t\tInfoObj[0] = infowindow;
\t\t\t\t\t\t});

\t\t\t\t\t\tfunction closeOtherInfo() {
\t\t\t\t\t\tif( InfoObj.length > 0 ) {
\t\t\t\t\t\t\tInfoObj[0].set(\"marker\", null);
\t\t\t\t\t\t\tInfoObj[0].close();
\t\t\t\t\t\t\tInfoObj[0].length = 0;
\t\t\t\t\t\t}
\t\t\t\t\t\t}

\t\t\t\t}

\t\t\t\t

\t\t\t\t{% endfor %}
\t\t\t
\t\t\t}
\t\t\t

\t\t\t</script>

\t\t\t<body>
\t\t\t\t

\t\t\t\t<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
\t\t\t\t

\t\t\t\t<script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCaIDYagxIULOH3ghDCLMJvuGLGQ9hXJh8&libraries=places&callback=initMap\"
\t\t\t\ttype=\"text/javascript\"></script>

\t\t\t</body>





\t\t\t<!--
\t\t\t\t\t\t\t<input id=\"pac-input\" class=\"controls rounded\" type=\"text\" placeholder=\"Type Adress or Street\"/>

\t\t\t\t\t\t\t<div id=\"mainMapContainer\">
\t\t\t\t\t\t\t\t<div class=\"map\" style=\"height:800px;width:100%;\" id=\"map\"></div>
\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t<script src=\"/index.js\"></script>

\t\t\t\t\t\t\t<script src=\"https://polyfill.io/v3/polyfill.min.js?features=default\"></script>
\t\t\t\t\t\t\t<!-- Async script executes immediately and must be after any DOM elements used in callback. 
\t\t\t\t\t\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCLoTwm91EVWlIY1yMAfFmLQVQeUB7espA&callback=initAutocomplete&libraries=places&v=weekly&callback=initAutocomplete\"></script>
\t\t\t-->
\t\t</div>

\t\t\t<div class=\"col-sm-1\"></div>
\t\t\t<div
\t\t\t\tclass=\"col-sm-5 \">
\t\t\t\t<!--   FORM Center COLUMN -->

\t\t\t\t<div>

\t\t\t\t\t<form
\t\t\t\t\t\tmethod=\"POST\" enctype=\"multipart/form-data\">

\t\t\t\t\t\t<!-- Display Street Name from Map Search -->
\t\t\t\t\t\t<input name=\"sideFlag\" id=\"sideFlag\" type=\"hidden\"/>
\t\t\t\t\t\t<input name=\"pmVal\" id=\"pmVal\" type=\"hidden\"/>
\t\t\t\t\t\t<input name=\"longitude\" id=\"longitude\" type=\"hidden\"/>
\t\t\t\t\t\t<input name=\"latitude\" id=\"latitude\" type=\"hidden\"/>
\t\t\t\t\t\t<div class=\"form-group row text-center\">
\t\t\t\t\t\t\t<label for=\"streetname\">Street Name</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"streetname\" name=\"streetName\" value=\"\" placeholder=\"street name\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Select Time Period For Applicable parking rules -->
\t\t\t\t\t\t<div class=\"form-group row text-center\">
\t\t\t\t\t\t\t<label for=\"dateStart\">Period start</label>
\t\t\t\t\t\t\t<input type=\"date\" name=\"periodStart\" class=\"form-control\" id=\"dateStart\" value=\"\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group row text-center\">
\t\t\t\t\t\t\t<label for=\"dateEnd\">Period End</label>
\t\t\t\t\t\t\t<input type=\"date\" name=\"periodEnd\" class=\"form-control\" id=\"dateEnd\" value=\"\">

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"from-group row\">
\t\t\t\t\t\t\t<label for=\"parkingMeter\">Does This Space have a parking meter?</label>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t<input onclick=\"pmRole(0);\" class=\"form-check-input\" type=\"radio\" name=\"parkingMeter\" id=\"noPm\" value=\"0\" checked>
\t\t\t\t\t\t\t\t\t<label onclick=\"pmRole(1);\" class=\"form-check-label\" for=\"yes\">Yes</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"parkingMeter\" id=\"yesPm\" value=\"1\">
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"no\">No</label>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t<!-- TABS -->
\t\t\t\t\t\t\t\t<div class=\"ruleSect row form-group\">
\t\t\t\t\t\t\t\t\t<nav class=\"tabBar\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"side-tabs\" role=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"siderole(0);\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#a\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Even</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"siderole(1);\" id=\"nav-profile-tab\" data-toggle=\"tab\" href=\"#b\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Odd</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</nav>

\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"a\" role=\"tablist\">
\t\t\t\t\t\t\t\t\t\t\t<br><br>
\t\t\t\t\t\t\t\t\t\t\t<p>Please Upload picture of the Even Side Parking Sign</p>

\t\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"file\" id=\"myFile\" name=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<br><br>

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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span><input class=\"timeInput\" name=\"mondayStart\" id=\"mondayStart\" type=\"time\" mdp-time-picker/><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"mondayEnd\" id=\"mondayEnd\" type=\"time\" mdp-time-picker/>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span><input class=\"timeInput\" name=\"tuesdayStart\" id=\"tuesdayStart\" type=\"time\" mdp-time-picker/><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"tuesdayEnd\" id=\"tuesdayEnd\" type=\"time\" mdp-time-picker/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-pane\" id=\"wed\">


\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Set No Parking restriction times per Day -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Wednesday</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check container-fluid daySlot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span><input class=\"timeInput\" name=\"wednesdayStart\" id=\"wednesdayStart\" type=\"time\" mdp-time-picker/><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"wednesdayEnd\" id=\"wednesdayEnd\" type=\"time\" mdp-time-picker/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-pane\" id=\"thu\">


\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Set No Parking restriction times per Day -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Thursday</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check container-fluid daySlot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span><input class=\"timeInput\" name=\"thursdayStart\" id=\"thursdayStart\" type=\"time\" mdp-time-picker/><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"thursdayEnd\" id=\"thursdayEnd\" type=\"time\" mdp-time-picker/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"tab-pane\" id=\"fri\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Set No Parking restriction times per Day -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>Friday</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check container-fluid daySlot\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"\">


\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span><input class=\"timeInput\" name=\"fridayStart\" id=\"fridayStart\" type=\"time\" mdp-time-picker/><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"fridayEnd\" id=\"fridayEnd\" type=\"time\" mdp-time-picker/>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span><input class=\"timeInput\" name=\"saturdayStart\" id=\"saturdayStart\" type=\"time\" mdp-time-picker/><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"saturdayEnd\" id=\"saturdayEnd\" type=\"time\" mdp-time-picker/>
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstart
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span><input class=\"timeInput\" name=\"sundayStart\" id=\"sundayStart\" type=\"time\" mdp-time-picker/><br><br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tend
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"timeInput\" name=\"sundayEnd\" id=\"sundayEnd\" type=\"time\" mdp-time-picker/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br><br>
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
\t\t\t<div class=\"col-sm-1\"></div>
\t\t</div>

\t</div>

\t<p id=\"location\"></p>
\t{% block scripts %}

\t\t<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js\" integrity=\"sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p\" crossorigin=\"anonymous\"></script>

\t\t<script>
\t\t\t\tvar input = document.getElementById('pac-input');
\t\t\t\tvar autocomplete = new google.maps.places.Autocomplete(input);
\t\t\t\tgoogle.maps.event.addListener(autocomplete, 'place_changed', function () {
\t\t\t\tvar place = autocomplete.getPlace();
\t\t\t\t\$(\"#longitude\").val(place.geometry.viewport.La.g)
\t\t\t\t\$(\"#latitude\").val(place.geometry.viewport.Ua.g)
\t\t\t\t\$(\"#streetname\").val(place.address_components[1].short_name)
\t\t\t\t});
\t\t</script>
\t{% endblock scripts %}

{% endblock %}


", "addrule.html.twig", "E:\\Xampp\\htdocs\\parkbud\\parkbud\\templates\\addrule.html.twig");
    }
}
