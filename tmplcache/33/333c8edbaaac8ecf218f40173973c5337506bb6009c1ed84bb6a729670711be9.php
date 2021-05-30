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

/* register.html.twig */
class __TwigTemplate_959f9e7b1b1e0c70130cbcea26a3fa119ab2b228950472b43aabc533688fc666 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("master.html.twig", "register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<link rel=\"stylesheet\" href=\"/styles/form_style.css\" />";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        if (($context["userSession"] ?? null)) {
            // line 7
            echo "        My Account
    ";
        } else {
            // line 9
            echo "        Register New User
    ";
        }
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    <div class=\"py-5 container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"contact-info\">
                    
                    ";
        // line 20
        if (($context["userSession"] ?? null)) {
            // line 21
            echo "                        <h3>My Account</h3>
                        <p>Please update your profile and submit</p>
                    ";
        } else {
            // line 24
            echo "                        <h3>Registration</h3>
                        <p>To register a new account, please enter information in the form below.<br></p>
                    ";
        }
        // line 27
        echo "                </div>
            </div>
            <form method=\"POST\" class=\"col-md-12\">
                
                ";
        // line 31
        if (($context["errors"] ?? null)) {
            // line 32
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
                // line 33
                echo "                    <p class=\"form-control is-invalid text-white bg-danger\">";
                echo twig_escape_filter($this->env, $context["e"], "html", null, true);
                echo "</p>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                ";
        }
        // line 36
        echo "                <div class=\"form-row\">
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"inputFirstname\">First name</label>
                        <input name=\"firstName\" type=\"text\" class=\"form-control\" id=\"inputFirstname\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstName", [], "any", false, false, false, 39), "html", null, true);
        echo "\" placeholder=\"First name\" required>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"inputLastname\">Last name</label>
                        <input name=\"lastName\" type=\"text\" class=\"form-control\" id=\"inputLastname\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "lastName", [], "any", false, false, false, 43), "html", null, true);
        echo "\" placeholder=\"Last name\" required>
                    </div>
                    
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"inputEmail\">Email Address</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\" id=\"inputEmail\">@</span>
                            </div>
                            <input name=\"email\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 52), "html", null, true);
        echo "\" type=\"email\" class=\"form-control\" id=\"validationServerEmail\" placeholder=\"Email Address\" aria-describedby=\"inputGroupPrepend3\" required>
                        </div>
                    </div>
                    
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"Phone\">Phone Number</label>
                        <input name=\"phone\" type=\"text\" class=\"form-control\" id=\"Phone\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, false, 58), "html", null, true);
        echo "\" placeholder=\"ex: 555-222-9999\" required>
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        <label for=\"inputUsername\">Username</label>
                        <input name=\"userName\" type=\"text\" class=\"form-control\" id=\"inputUsername\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "userName", [], "any", false, false, false, 62), "html", null, true);
        echo "\" placeholder=\"User Name\" required>
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        <label for=\"inputPassword\">Password</label>
                        <input name=\"pass1\" type=\"password\" class=\"form-control\" id=\"inputPassword\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pass1", [], "any", false, false, false, 66), "html", null, true);
        echo "\" placeholder=\"Password\" required>
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        <label for=\"confirmPassword\">Confirm Password</label>
                        <input name=\"pass2\" type=\"password\" class=\"form-control\" id=\"confirmPassword\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pass2", [], "any", false, false, false, 70), "html", null, true);
        echo "\" placeholder=\"Password\" required>
                    </div>
                </div>
                <div class=\"form-row\">
                    <div class=\"col-md-12 mb-3\">
                        <label for=\"inputAddress\">Address (Street number and name)</label>
                        <input name=\"street\" type=\"text\" class=\"form-control\" id=\"inputAddress\" placeholder=\"ex: 9032 Park Avenue\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "street", [], "any", false, false, false, 76), "html", null, true);
        echo "\" required>
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        <label for=\"inputCity\">City</label>
                        <input name=\"city\" type=\"text\" class=\"form-control\" id=\"inputCity\" placeholder=\"City\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "city", [], "any", false, false, false, 80), "html", null, true);
        echo "\" required>
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        <label for=\"inputProvince\">Province</label>
                        <select name=\"province\" id=\"inputProvince\" class=\"form-control\" required>
                            <option selected>Choose...</option>
                            <option value=\"AB\" ";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "province", [], "any", false, false, false, 86) == "AB")) {
            echo " selected=\"selected\"";
        }
        echo ">AB</option>
                            <option value=\"BC\" ";
        // line 87
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "province", [], "any", false, false, false, 87) == "BC")) {
            echo " selected=\"selected\"";
        }
        echo ">BC</option>
                            <option value=\"MB\" ";
        // line 88
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "province", [], "any", false, false, false, 88) == "MB")) {
            echo " selected=\"selected\"";
        }
        echo ">MB</option>
                            <option value=\"NB\" ";
        // line 89
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "province", [], "any", false, false, false, 89) == "NB")) {
            echo " selected=\"selected\"";
        }
        echo ">NB</option>
                            <option value=\"NL\" ";
        // line 90
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "province", [], "any", false, false, false, 90) == "NL")) {
            echo " selected=\"selected\"";
        }
        echo ">NL</option>
                            <option value=\"NT\" ";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "province", [], "any", false, false, false, 91) == "NT")) {
            echo " selected=\"selected\"";
        }
        echo ">NT</option>
                            <option value=\"NS\" ";
        // line 92
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "province", [], "any", false, false, false, 92) == "NS")) {
            echo " selected=\"selected\"";
        }
        echo ">NS</option>
                            <option value=\"NU\" ";
        // line 93
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "province", [], "any", false, false, false, 93) == "NU")) {
            echo " selected=\"selected\"";
        }
        echo ">NU</option>
                            <option value=\"ON\" ";
        // line 94
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "province", [], "any", false, false, false, 94) == "ON")) {
            echo " selected=\"selected\"";
        }
        echo ">ON</option>
                            <option value=\"PE\" ";
        // line 95
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "province", [], "any", false, false, false, 95) == "PE")) {
            echo " selected=\"selected\"";
        }
        echo ">PE</option>
                            <option value=\"QC\" ";
        // line 96
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "province", [], "any", false, false, false, 96) == "QC")) {
            echo " selected=\"selected\"";
        }
        echo ">QC</option>
                            <option value=\"SK\" ";
        // line 97
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "province", [], "any", false, false, false, 97) == "SK")) {
            echo " selected=\"selected\"";
        }
        echo ">SK</option>
                            <option value=\"YT\" ";
        // line 98
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "province", [], "any", false, false, false, 98) == "YT")) {
            echo " selected=\"selected\"";
        }
        echo ">YT</option>
                        </select>
                        </div>
                    <div class=\"col-md-4 mb-3\">
                        <label for=\"inputPostalCode\">Postal Code</label>
                        <input name=\"postCode\" type=\"text\" class=\"form-control\" id=\"inputPostalCode\" value=\"";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "postalCode", [], "any", false, false, false, 103), "html", null, true);
        echo "\" placeholder=\"ex: H3S 2K9\" required>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"form-check\">
                        <input name=\"isAgree\" class=\"form-check-input\" type=\"checkbox\" id=\"invalidCheck3\" required>
                        <label class=\"form-check-label\" for=\"invalidCheck3\">
                            I Agree to terms and conditions
                        </label>
                    </div>
                </div>
                <button class=\"btn btn-primary\" type=\"submit\">Submit form</button>
            </form>
            
        </div>
    </div>

";
    }

    // line 122
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$err =  \$('#err');
            \$('input[name=email]').on(\"blur\",function() {
                var email = \$(this).val();

                email = encodeURIComponent(email);
                \$err.load(\"/isemailtaken/\" + email);

                if(\$err.is(':empty')){
                    \$err.addClass(\"d-none\");
                }else{
                    \$err.removeClass(\"d-none\");
                }
            });
            \$('input[name=userName]').on(\"blur\",function() {
                var userName = \$(this).val();

                if(userName.length > 2){
                    \$err.load(\"/isusernametaken/\" + userName);

                    if(\$err.is(':empty')){
                        \$err.addClass(\"d-none\");
                    }else{
                        \$err.removeClass(\"d-none\");
                    }
                }
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 123,  304 => 122,  282 => 103,  272 => 98,  266 => 97,  260 => 96,  254 => 95,  248 => 94,  242 => 93,  236 => 92,  230 => 91,  224 => 90,  218 => 89,  212 => 88,  206 => 87,  200 => 86,  191 => 80,  184 => 76,  175 => 70,  168 => 66,  161 => 62,  154 => 58,  145 => 52,  133 => 43,  126 => 39,  121 => 36,  118 => 35,  109 => 33,  104 => 32,  102 => 31,  96 => 27,  91 => 24,  86 => 21,  84 => 20,  77 => 15,  73 => 14,  67 => 9,  63 => 7,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"master.html.twig\" %}

{% block stylesheet %}<link rel=\"stylesheet\" href=\"/styles/form_style.css\" />{% endblock stylesheet%}

{% block title %}
    {% if userSession %}
        My Account
    {% else %}
        Register New User
    {% endif %}
{% endblock title %}


{% block content %}
    <div class=\"py-5 container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"contact-info\">
                    
                    {% if userSession %}
                        <h3>My Account</h3>
                        <p>Please update your profile and submit</p>
                    {% else %}
                        <h3>Registration</h3>
                        <p>To register a new account, please enter information in the form below.<br></p>
                    {% endif %}
                </div>
            </div>
            <form method=\"POST\" class=\"col-md-12\">
                
                {% if errors %}
                    {% for e in errors %}
                    <p class=\"form-control is-invalid text-white bg-danger\">{{ e }}</p>
                    {% endfor %}
                {% endif %}
                <div class=\"form-row\">
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"inputFirstname\">First name</label>
                        <input name=\"firstName\" type=\"text\" class=\"form-control\" id=\"inputFirstname\" value=\"{{ user.firstName }}\" placeholder=\"First name\" required>
                    </div>
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"inputLastname\">Last name</label>
                        <input name=\"lastName\" type=\"text\" class=\"form-control\" id=\"inputLastname\" value=\"{{ user.lastName }}\" placeholder=\"Last name\" required>
                    </div>
                    
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"inputEmail\">Email Address</label>
                        <div class=\"input-group\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\" id=\"inputEmail\">@</span>
                            </div>
                            <input name=\"email\" value=\"{{ user.email }}\" type=\"email\" class=\"form-control\" id=\"validationServerEmail\" placeholder=\"Email Address\" aria-describedby=\"inputGroupPrepend3\" required>
                        </div>
                    </div>
                    
                    <div class=\"col-md-6 mb-3\">
                        <label for=\"Phone\">Phone Number</label>
                        <input name=\"phone\" type=\"text\" class=\"form-control\" id=\"Phone\" value=\"{{ user.phone }}\" placeholder=\"ex: 555-222-9999\" required>
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        <label for=\"inputUsername\">Username</label>
                        <input name=\"userName\" type=\"text\" class=\"form-control\" id=\"inputUsername\" value=\"{{ user.userName }}\" placeholder=\"User Name\" required>
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        <label for=\"inputPassword\">Password</label>
                        <input name=\"pass1\" type=\"password\" class=\"form-control\" id=\"inputPassword\" value=\"{{ user.pass1 }}\" placeholder=\"Password\" required>
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        <label for=\"confirmPassword\">Confirm Password</label>
                        <input name=\"pass2\" type=\"password\" class=\"form-control\" id=\"confirmPassword\" value=\"{{ user.pass2 }}\" placeholder=\"Password\" required>
                    </div>
                </div>
                <div class=\"form-row\">
                    <div class=\"col-md-12 mb-3\">
                        <label for=\"inputAddress\">Address (Street number and name)</label>
                        <input name=\"street\" type=\"text\" class=\"form-control\" id=\"inputAddress\" placeholder=\"ex: 9032 Park Avenue\" value=\"{{ user.street }}\" required>
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        <label for=\"inputCity\">City</label>
                        <input name=\"city\" type=\"text\" class=\"form-control\" id=\"inputCity\" placeholder=\"City\" value=\"{{ user.city }}\" required>
                    </div>
                    <div class=\"col-md-4 mb-3\">
                        <label for=\"inputProvince\">Province</label>
                        <select name=\"province\" id=\"inputProvince\" class=\"form-control\" required>
                            <option selected>Choose...</option>
                            <option value=\"AB\" {% if user.province == 'AB' %} selected=\"selected\"{% endif %}>AB</option>
                            <option value=\"BC\" {% if user.province == 'BC' %} selected=\"selected\"{% endif %}>BC</option>
                            <option value=\"MB\" {% if user.province == 'MB' %} selected=\"selected\"{% endif %}>MB</option>
                            <option value=\"NB\" {% if user.province == 'NB' %} selected=\"selected\"{% endif %}>NB</option>
                            <option value=\"NL\" {% if user.province == 'NL' %} selected=\"selected\"{% endif %}>NL</option>
                            <option value=\"NT\" {% if user.province == 'NT' %} selected=\"selected\"{% endif %}>NT</option>
                            <option value=\"NS\" {% if user.province == 'NS' %} selected=\"selected\"{% endif %}>NS</option>
                            <option value=\"NU\" {% if user.province == 'NU' %} selected=\"selected\"{% endif %}>NU</option>
                            <option value=\"ON\" {% if user.province == 'ON' %} selected=\"selected\"{% endif %}>ON</option>
                            <option value=\"PE\" {% if user.province == 'PE' %} selected=\"selected\"{% endif %}>PE</option>
                            <option value=\"QC\" {% if user.province == 'QC' %} selected=\"selected\"{% endif %}>QC</option>
                            <option value=\"SK\" {% if user.province == 'SK' %} selected=\"selected\"{% endif %}>SK</option>
                            <option value=\"YT\" {% if user.province == 'YT' %} selected=\"selected\"{% endif %}>YT</option>
                        </select>
                        </div>
                    <div class=\"col-md-4 mb-3\">
                        <label for=\"inputPostalCode\">Postal Code</label>
                        <input name=\"postCode\" type=\"text\" class=\"form-control\" id=\"inputPostalCode\" value=\"{{ user.postalCode }}\" placeholder=\"ex: H3S 2K9\" required>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"form-check\">
                        <input name=\"isAgree\" class=\"form-check-input\" type=\"checkbox\" id=\"invalidCheck3\" required>
                        <label class=\"form-check-label\" for=\"invalidCheck3\">
                            I Agree to terms and conditions
                        </label>
                    </div>
                </div>
                <button class=\"btn btn-primary\" type=\"submit\">Submit form</button>
            </form>
            
        </div>
    </div>

{% endblock content %}

{% block scripts %}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$err =  \$('#err');
            \$('input[name=email]').on(\"blur\",function() {
                var email = \$(this).val();

                email = encodeURIComponent(email);
                \$err.load(\"/isemailtaken/\" + email);

                if(\$err.is(':empty')){
                    \$err.addClass(\"d-none\");
                }else{
                    \$err.removeClass(\"d-none\");
                }
            });
            \$('input[name=userName]').on(\"blur\",function() {
                var userName = \$(this).val();

                if(userName.length > 2){
                    \$err.load(\"/isusernametaken/\" + userName);

                    if(\$err.is(':empty')){
                        \$err.addClass(\"d-none\");
                    }else{
                        \$err.removeClass(\"d-none\");
                    }
                }
            });
        });
    </script>
{% endblock scripts %}
", "register.html.twig", "E:\\Xampp\\htdocs\\parkbud\\parkbud\\templates\\register.html.twig");
    }
}
