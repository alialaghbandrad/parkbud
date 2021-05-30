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

/* markers.html.twig */
class __TwigTemplate_39acff60ada4023dbace00089d94f6a6039a4e058aac237c06cd6f65c6b55aac extends \Twig\Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "markers.html.twig", 1);
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
        echo "<p>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["longitude"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "toString", [], "any", false, false, false, 6), "html", null, true);
        echo "</p>
<script src=\"https://polyfill.io/v3/polyfill.min.js?features=default\"></script>
    <style type=\"text/css\">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
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
    <script>
      let map;

      function initMap() {
        map = new google.maps.Map(document.getElementById(\"map\"), {
          center: new google.maps.LatLng(45.51965562189823,-73.59391502360042), // 45.51965562189823, -73.59391502360042
          zoom: 3,
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
        const features = [
          
          {
            position: new google.maps.LatLng(
              41.8773534197085,
              -88.0737334802915
            ),
            type: \"parking\",
          },
          {
            position: new google.maps.LatLng(
              49.8543063197085,
              -97.1093722302915
            ),
            type: \"parking\",
          },
          {
            position: new google.maps.LatLng(
              50.83002051970851,
              4.438628019708498
            ),
            type: \"parking\",
          },
          {
            position: new google.maps.LatLng(
              59.3487343697085,
              18.02872636970849
            ),
            type: \"parking\",
          },
          {
            position: new google.maps.LatLng(
              -33.91608037421864,
              151.23288232673644
            ),
            type: \"parking\",
          },
          
        ];
        

        // Create markers.
        for (let i = 0; i < features.length; i++) {
          const marker = new google.maps.Marker({
            position: features[i].position,
            icon: icons[features[i].type].icon,
            map: map,
          });
        }
      }
    </script>
  </head>
  <body>
    <div id=\"map\"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    

      <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDvddKOYiUzFEIbPfIGejw2BUBX2SXMIqk&callback=initMap\"
    type=\"text/javascript\"></script>




  </body>

";
    }

    public function getTemplateName()
    {
        return "markers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 6,  56 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block title %} {{title}} {% endblock title %}

{% block content %}
<p>{{ longitude[0].toString }}</p>
<script src=\"https://polyfill.io/v3/polyfill.min.js?features=default\"></script>
    <style type=\"text/css\">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
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
    <script>
      let map;

      function initMap() {
        map = new google.maps.Map(document.getElementById(\"map\"), {
          center: new google.maps.LatLng(45.51965562189823,-73.59391502360042), // 45.51965562189823, -73.59391502360042
          zoom: 3,
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
        const features = [
          
          {
            position: new google.maps.LatLng(
              41.8773534197085,
              -88.0737334802915
            ),
            type: \"parking\",
          },
          {
            position: new google.maps.LatLng(
              49.8543063197085,
              -97.1093722302915
            ),
            type: \"parking\",
          },
          {
            position: new google.maps.LatLng(
              50.83002051970851,
              4.438628019708498
            ),
            type: \"parking\",
          },
          {
            position: new google.maps.LatLng(
              59.3487343697085,
              18.02872636970849
            ),
            type: \"parking\",
          },
          {
            position: new google.maps.LatLng(
              -33.91608037421864,
              151.23288232673644
            ),
            type: \"parking\",
          },
          
        ];
        

        // Create markers.
        for (let i = 0; i < features.length; i++) {
          const marker = new google.maps.Marker({
            position: features[i].position,
            icon: icons[features[i].type].icon,
            map: map,
          });
        }
      }
    </script>
  </head>
  <body>
    <div id=\"map\"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    

      <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDvddKOYiUzFEIbPfIGejw2BUBX2SXMIqk&callback=initMap\"
    type=\"text/javascript\"></script>




  </body>

{% endblock %}


", "markers.html.twig", "E:\\Xampp\\htdocs\\parkbud\\parkbud\\templates\\markers.html.twig");
    }
}
