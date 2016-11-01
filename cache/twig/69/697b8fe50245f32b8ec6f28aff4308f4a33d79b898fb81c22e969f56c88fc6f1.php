<?php

/* partials/base.html.twig */
class __TwigTemplate_22dc314959f00e30d0cc8519858071fd314577d0a74f9d1372953bf35560e0ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 40
        echo "</head>
<body id=\"top\" class=\"";
        // line 41
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 44
        echo "        ";
        // line 45
        echo "            ";
        // line 46
        echo "                ";
        // line 47
        echo "            ";
        // line 48
        echo "            ";
        // line 49
        echo "                ";
        // line 50
        echo "                ";
        // line 51
        echo "                ";
        // line 52
        echo "                ";
        // line 53
        echo "                ";
        // line 54
        echo "                ";
        // line 55
        echo "                ";
        // line 56
        echo "                ";
        // line 57
        echo "            ";
        // line 58
        echo "        ";
        // line 59
        echo "        ";
        // line 60
        echo "
        ";
        // line 62
        echo "
        ";
        // line 64
        echo "        ";
        // line 65
        echo "            ";
        // line 66
        echo "        ";
        // line 67
        echo "        ";
        // line 68
        echo "        <div class=\"fullwidth\">
            ";
        // line 69
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "        </div>
        ";
        // line 76
        $this->displayBlock('footer', $context, $blocks);
        // line 94
        echo "    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        ";
        // line 97
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 97)->display($context);
        // line 98
        echo "        </div>
    </div>
    ";
        // line 100
        $this->displayBlock('bottom', $context, $blocks);
        // line 113
        echo "</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array()), "html");
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 11
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "

    ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "    ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "

";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css", 1 => 103), "method");
        // line 15
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus.css", 1 => 102), "method");
        // line 16
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/template.css", 1 => 101), "method");
        // line 17
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 18
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 19
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/slidebars.min.css"), "method");
        // line 20
        echo "
        ";
        // line 21
        if ((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) == 10))) {
            // line 22
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie10.css"), "method");
            // line 23
            echo "        ";
        }
        // line 24
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 25
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 26
            echo "            ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 27
            echo "        ";
        }
        // line 28
        echo "    ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 33
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 34
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/antimatter.js"), "method");
        // line 35
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "theme://js/slidebars.min.js"), "method");
        // line 36
        echo "    ";
    }

    // line 69
    public function block_body($context, array $blocks = array())
    {
        // line 70
        echo "            <header class=\"header\" id=\"header\">
                ";
        // line 71
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 71)->display($context);
        // line 72
        echo "            </header>
                ";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 74
        echo "            ";
    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        // line 77
        echo "        <footer id=\"footer\">
            <div class=\"totop\">
                <span><a href=\"#\" id=\"toTop\"><i class=\"fa fa-arrow-up\"></i></a></span>
            </div>
            <div class=\"container\">
                <div class=\"footer-text legal\">
                    <p>Vyhrady prodejce VITALIA v Ceske republice: </br></p>
                    <p>Nutrio Fresh s.r.o.</p>
                </div>
                <div class=\"logo\"></div>
                <div class=\"footer-text address\">
                    <p>Zapsana v obchodnim rejstiku vedeneho </br></p>
                    <p>Mestskym soudem v Praze, oddil C, vlozka 259453</p>
                </div>
            </div>
        </footer>
        ";
    }

    // line 100
    public function block_bottom($context, array $blocks = array())
    {
        // line 101
        echo "        ";
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(0 => "bottom"), "method");
        echo "
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 101,  279 => 100,  259 => 77,  256 => 76,  251 => 73,  247 => 74,  245 => 73,  242 => 72,  240 => 71,  237 => 70,  234 => 69,  230 => 36,  227 => 35,  224 => 34,  221 => 33,  218 => 32,  215 => 31,  211 => 28,  208 => 27,  205 => 26,  202 => 25,  199 => 24,  196 => 23,  193 => 22,  191 => 21,  188 => 20,  185 => 19,  182 => 18,  179 => 17,  176 => 16,  173 => 15,  170 => 14,  167 => 13,  159 => 37,  157 => 31,  151 => 29,  149 => 13,  144 => 11,  140 => 10,  137 => 9,  135 => 8,  127 => 7,  124 => 6,  121 => 5,  115 => 113,  113 => 100,  109 => 98,  107 => 97,  102 => 94,  100 => 76,  97 => 75,  95 => 69,  92 => 68,  90 => 67,  88 => 66,  86 => 65,  84 => 64,  81 => 62,  78 => 60,  76 => 59,  74 => 58,  72 => 57,  70 => 56,  68 => 55,  66 => 54,  64 => 53,  62 => 52,  60 => 51,  58 => 50,  56 => 49,  54 => 48,  52 => 47,  50 => 46,  48 => 45,  46 => 44,  41 => 41,  38 => 40,  36 => 5,  31 => 3,  28 => 2,  26 => 1,);
    }

    public function getSource()
    {
        return "{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css', 103) %}
        {% do assets.addCss('theme://css/nucleus.css', 102) %}
        {% do assets.addCss('theme://css/template.css', 101) %}
        {% do assets.addCss('theme://css/custom.css', 100) %}
        {% do assets.addCss('theme://css/font-awesome.min.css', 100) %}
        {% do assets.addCss('theme://css/slidebars.min.css') %}

        {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}
            {% do assets.addCss('theme://css/nucleus-ie10.css') %}
        {% endif %}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addCss('theme://css/nucleus-ie9.css') %}
            {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 101) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js', 100) %}
        {% do assets.addJs('theme://js/antimatter.js') %}
        {% do assets.addJs('theme://js/slidebars.min.js') %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
    <div id=\"sb-site\">
        {#{% block header %}#}
        {#<header id=\"header\">#}
            {#<div id=\"logo\">#}
                {#<h3><a href=\"{{ base_url == '' ? '/' : base_url }}\">{{ config.site.title }}</a></h3>#}
            {#</div>#}
            {#<div id=\"navbar\">#}
                {#{% block header_extra %}{% endblock %}#}
                {#{% if config.plugins.langswitcher.enabled %}#}
                {#{% include 'partials/langswitcher.html.twig' %}#}
                {#{% endif %}#}
                {#{% block header_navigation %}#}
                {#{% include 'partials/navigation.html.twig' %}#}
                {#{% endblock %}#}
                {#<span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>#}
            {#</div>#}
        {#</header>#}
        {#{% endblock %}#}

        {#{% block showcase %}{% endblock %}#}

        {#{% block body %}#}
        {#<section id=\"body\" class=\"{{ class }}\">#}
            {#{% block content %}{% endblock %}#}
        {#</section>#}
        {#{% endblock %}#}
        <div class=\"fullwidth\">
            {% block body %}
            <header class=\"header\" id=\"header\">
                {% include 'partials/navigation.html.twig' %}
            </header>
                {% block content %}{% endblock %}
            {% endblock %}
        </div>
        {% block footer %}
        <footer id=\"footer\">
            <div class=\"totop\">
                <span><a href=\"#\" id=\"toTop\"><i class=\"fa fa-arrow-up\"></i></a></span>
            </div>
            <div class=\"container\">
                <div class=\"footer-text legal\">
                    <p>Vyhrady prodejce VITALIA v Ceske republice: </br></p>
                    <p>Nutrio Fresh s.r.o.</p>
                </div>
                <div class=\"logo\"></div>
                <div class=\"footer-text address\">
                    <p>Zapsana v obchodnim rejstiku vedeneho </br></p>
                    <p>Mestskym soudem v Praze, oddil C, vlozka 259453</p>
                </div>
            </div>
        </footer>
        {% endblock %}
    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        {% include 'partials/navigation.html.twig' %}
        </div>
    </div>
    {% block bottom %}
        {{ assets.js('bottom') }}
        <script>
        \$(function () {
            \$(document).ready(function() {
              \$.slidebars({
                hideControlClasses: true,
                scrollLock: true
              });
            });
        });
        </script>
    {% endblock %}
</body>
</html>
";
    }
}
