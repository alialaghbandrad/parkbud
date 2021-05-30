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

/* main.html.twig */
class __TwigTemplate_9d14041729514938296c79d19b2fa320682dc1ae4145d8cb43ac5f4a1d1179bb extends \Twig\Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "main.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<script src=\"https://polyfill.io/v3/polyfill.min.js?features=default\"></script>
<!-- Async script executes immediately and must be after any DOM elements used in callback. -->

    

    <style type=\"text/css\">
    #map {
        height: 100%;
      }

    /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
        
      }
    </style>

    
    <h3 id=\"mainParkHeader\" >Where would you like to park today?</h3>

    <input
      id=\"pac-input\"
      class=\"controls\"
      type=\"text\"
      placeholder=\"Search Box\"
    />
    
    <div id=\"mainMapContainer\">
      <div id=\"map\" style=\"height:600px;width:1200px;border-radius: 25px;\"></div>
    </div>
    <p id=\"demo\"></p>

<script>
  let map;

function initMap() {

    map = new google.maps.Map(document.getElementById(\"map\"), {
        center: { lat: 45.484173, lng: -73.610487 },  
        zoom: 10,
        mapTypeId: \"roadmap\",
    });

    // Create the search box and link it to the UI element.
    const input = document.getElementById(\"pac-input\");
    const searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
    // Bias the SearchBox results towards current map's viewport.
    map.addListener(\"bounds_changed\", () => {
        searchBox.setBounds(map.getBounds());
    });
    let markers = [];
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener(\"places_changed\", () => {
        const places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }
        // Clear out the old markers.
        markers.forEach((marker) => {
            marker.setMap(null);
        });
        markers = [];
        // For each place, get the icon, name and location.
        const bounds = new google.maps.LatLngBounds();
        places.forEach((place) => {
            if (!place.geometry || !place.geometry.location) {
                console.log(\"Returned place contains no geometry\");
                return;
            }
            const icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25),
            };
                
            // Create a marker for each place.
            markers.push(
                new google.maps.Marker({
                    map,
                    icon,
                    title: place.name,
                    position: place.geometry.location,
                })
            );
                
            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.fitBounds(bounds);
    });
        const iconBase =
          \"https://developers.google.com/maps/documentation/javascript/examples/full/images/\";
        const icons = {
          parking: {
            icon: iconBase + \"parking_lot_maps.png\",
          },
          library: {
            icon: iconBase + \"library_maps.png\",
          },
          info: {
            icon: iconBase + \"info-i_maps.png\",
          },
        };
  
      var marker;
      var markerLatLng;
      const features = [];

      var InfoObj = [];
      // addMarkerInfo();

      ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rulesList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
            // line 131
            echo "
      features.push(         
                {
                  placeName: '<b>Parking rule:</b> <br>Coordinates: (";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "latitude", [], "any", false, false, false, 134), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "longitude", [], "any", false, false, false, 134), "html", null, true);
            echo ")<br> Street name: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "streetName", [], "any", false, false, false, 134), "html", null, true);
            echo "',
                  periodStartEnd: 'Period start: ";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "periodStart", [], "any", false, false, false, 135), "html", null, true);
            echo "<br>Period end: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "periodEnd", [], "any", false, false, false, 135), "html", null, true);
            echo "',
                
                  parkingMeterEvenOdd: 'Parking meter(No:0/Yes:1): ";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "parkingMeter", [], "any", false, false, false, 137), "html", null, true);
            echo "<br>Even side:0/Odd side:1: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "sideFlag", [], "any", false, false, false, 137), "html", null, true);
            echo "',
                  days: 'Monday: ";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "mondayStart", [], "any", false, false, false, 138), "html", null, true);
            echo " to ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "mondayEnd", [], "any", false, false, false, 138), "html", null, true);
            echo "<br>Tuesday: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "tuesdayStart", [], "any", false, false, false, 138), "html", null, true);
            echo " to ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "tuesdayEnd", [], "any", false, false, false, 138), "html", null, true);
            echo "<br>Wednesday: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "wednesdayStart", [], "any", false, false, false, 138), "html", null, true);
            echo " to ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "wednesdayEnd", [], "any", false, false, false, 138), "html", null, true);
            echo "<br>Thursday: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "thursdayStart", [], "any", false, false, false, 138), "html", null, true);
            echo " to ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "thursdayEnd", [], "any", false, false, false, 138), "html", null, true);
            echo "<br>Friday: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "fridayStart", [], "any", false, false, false, 138), "html", null, true);
            echo " to ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "fridayEnd", [], "any", false, false, false, 138), "html", null, true);
            echo "<br>Saturday: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "saturdayStart", [], "any", false, false, false, 138), "html", null, true);
            echo " to ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "saturdayEnd", [], "any", false, false, false, 138), "html", null, true);
            echo "<br>Sunday: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "sundayStart", [], "any", false, false, false, 138), "html", null, true);
            echo " to ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "sundayEnd", [], "any", false, false, false, 138), "html", null, true);
            echo "',
                  createdAt: 'Posted on: ";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "createdTS", [], "any", false, false, false, 139), "html", null, true);
            echo "',
                  image: '";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "image", [], "any", false, false, false, 140), "html", null, true);
            echo "',
                  position: new google.maps.LatLng(
                    ";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "latitude", [], "any", false, false, false, 142), "html", null, true);
            echo ",
                    ";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "longitude", [], "any", false, false, false, 143), "html", null, true);
            echo "
                  ),
                  type: \"parking\",
      });
    
      // Create markers.
      for (let i = 0; i < features.length; i++) {
            var contentString = '<p>' + features[i].placeName + '</p>' + '<p>' + features[i].periodStartEnd + '</p>' + '</p>' + '<p>' + features[i].parkingMeterEvenOdd + '</p>' + '<p>' + features[i].days + '</p>' + '<p>' + features[i].createdAt + '</p>' + '<a href=\"/uploads/' + features[i].image + '\"><img class=\"img-fluid\"  src=\"/uploads/' + features[i].image + '\" width=\"200rem\" alt=\"Current image\"></a>'
            ;

            const marker = new google.maps.Marker({
              position: features[i].position,
              icon: icons[features[i].type].icon,
              
              map: map,
            });
            

            const infowindow = new google.maps.InfoWindow({
                content:  contentString,
                
            });

            marker.addListener(\"click\", function() {
              closeOtherInfo();
              infowindow.open(marker.get('map'), marker);
              InfoObj[0] = infowindow;
            });

            function closeOtherInfo() {
              if( InfoObj.length > 0 ) {
                InfoObj[0].set(\"marker\", null);
                InfoObj[0].close();
                InfoObj[0].length = 0;
              }
            }

    }

    

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "  
  }
  

</script>

<body>
    

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    

      <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCaIDYagxIULOH3ghDCLMJvuGLGQ9hXJh8&libraries=places&callback=initMap\"
    type=\"text/javascript\"></script>

  </body>


";
    }

    public function getTemplateName()
    {
        return "main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 185,  259 => 143,  255 => 142,  250 => 140,  246 => 139,  216 => 138,  210 => 137,  203 => 135,  195 => 134,  190 => 131,  186 => 130,  60 => 6,  56 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %} {{title}} {% endblock title %}

{% block content %}

<script src=\"https://polyfill.io/v3/polyfill.min.js?features=default\"></script>
<!-- Async script executes immediately and must be after any DOM elements used in callback. -->

    

    <style type=\"text/css\">
    #map {
        height: 100%;
      }

    /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
        
      }
    </style>

    
    <h3 id=\"mainParkHeader\" >Where would you like to park today?</h3>

    <input
      id=\"pac-input\"
      class=\"controls\"
      type=\"text\"
      placeholder=\"Search Box\"
    />
    
    <div id=\"mainMapContainer\">
      <div id=\"map\" style=\"height:600px;width:1200px;border-radius: 25px;\"></div>
    </div>
    <p id=\"demo\"></p>

<script>
  let map;

function initMap() {

    map = new google.maps.Map(document.getElementById(\"map\"), {
        center: { lat: 45.484173, lng: -73.610487 },  
        zoom: 10,
        mapTypeId: \"roadmap\",
    });

    // Create the search box and link it to the UI element.
    const input = document.getElementById(\"pac-input\");
    const searchBox = new google.maps.places.SearchBox(input);
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
    // Bias the SearchBox results towards current map's viewport.
    map.addListener(\"bounds_changed\", () => {
        searchBox.setBounds(map.getBounds());
    });
    let markers = [];
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener(\"places_changed\", () => {
        const places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }
        // Clear out the old markers.
        markers.forEach((marker) => {
            marker.setMap(null);
        });
        markers = [];
        // For each place, get the icon, name and location.
        const bounds = new google.maps.LatLngBounds();
        places.forEach((place) => {
            if (!place.geometry || !place.geometry.location) {
                console.log(\"Returned place contains no geometry\");
                return;
            }
            const icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25),
            };
                
            // Create a marker for each place.
            markers.push(
                new google.maps.Marker({
                    map,
                    icon,
                    title: place.name,
                    position: place.geometry.location,
                })
            );
                
            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
        });
        map.fitBounds(bounds);
    });
        const iconBase =
          \"https://developers.google.com/maps/documentation/javascript/examples/full/images/\";
        const icons = {
          parking: {
            icon: iconBase + \"parking_lot_maps.png\",
          },
          library: {
            icon: iconBase + \"library_maps.png\",
          },
          info: {
            icon: iconBase + \"info-i_maps.png\",
          },
        };
  
      var marker;
      var markerLatLng;
      const features = [];

      var InfoObj = [];
      // addMarkerInfo();

      {% for rule in rulesList %}

      features.push(         
                {
                  placeName: '<b>Parking rule:</b> <br>Coordinates: ({{rule.latitude}}, {{rule.longitude}})<br> Street name: {{rule.streetName}}',
                  periodStartEnd: 'Period start: {{rule.periodStart}}<br>Period end: {{rule.periodEnd}}',
                
                  parkingMeterEvenOdd: 'Parking meter(No:0/Yes:1): {{rule.parkingMeter}}<br>Even side:0/Odd side:1: {{rule.sideFlag}}',
                  days: 'Monday: {{rule.mondayStart}} to {{rule.mondayEnd}}<br>Tuesday: {{rule.tuesdayStart}} to {{rule.tuesdayEnd}}<br>Wednesday: {{rule.wednesdayStart}} to {{rule.wednesdayEnd}}<br>Thursday: {{rule.thursdayStart}} to {{rule.thursdayEnd}}<br>Friday: {{rule.fridayStart}} to {{rule.fridayEnd}}<br>Saturday: {{rule.saturdayStart}} to {{rule.saturdayEnd}}<br>Sunday: {{rule.sundayStart}} to {{rule.sundayEnd}}',
                  createdAt: 'Posted on: {{rule.createdTS}}',
                  image: '{{rule.image}}',
                  position: new google.maps.LatLng(
                    {{rule.latitude}},
                    {{rule.longitude}}
                  ),
                  type: \"parking\",
      });
    
      // Create markers.
      for (let i = 0; i < features.length; i++) {
            var contentString = '<p>' + features[i].placeName + '</p>' + '<p>' + features[i].periodStartEnd + '</p>' + '</p>' + '<p>' + features[i].parkingMeterEvenOdd + '</p>' + '<p>' + features[i].days + '</p>' + '<p>' + features[i].createdAt + '</p>' + '<a href=\"/uploads/' + features[i].image + '\"><img class=\"img-fluid\"  src=\"/uploads/' + features[i].image + '\" width=\"200rem\" alt=\"Current image\"></a>'
            ;

            const marker = new google.maps.Marker({
              position: features[i].position,
              icon: icons[features[i].type].icon,
              
              map: map,
            });
            

            const infowindow = new google.maps.InfoWindow({
                content:  contentString,
                
            });

            marker.addListener(\"click\", function() {
              closeOtherInfo();
              infowindow.open(marker.get('map'), marker);
              InfoObj[0] = infowindow;
            });

            function closeOtherInfo() {
              if( InfoObj.length > 0 ) {
                InfoObj[0].set(\"marker\", null);
                InfoObj[0].close();
                InfoObj[0].length = 0;
              }
            }

    }

    

    {% endfor %}
  
  }
  

</script>

<body>
    

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    

      <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCaIDYagxIULOH3ghDCLMJvuGLGQ9hXJh8&libraries=places&callback=initMap\"
    type=\"text/javascript\"></script>

  </body>


{% endblock %}


 ", "main.html.twig", "E:\\Xampp\\htdocs\\parkbud\\parkbud\\templates\\main.html.twig");
    }
}
