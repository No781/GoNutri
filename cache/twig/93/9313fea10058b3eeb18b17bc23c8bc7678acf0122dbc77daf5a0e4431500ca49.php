<?php

/* modular.html.twig */
class __TwigTemplate_56c620c9632b595bdd121ce13f62964a683033f55a9d7e13c7b5cb87c2090e3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 52
            echo "        <div id=\"";
            echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
            echo "\"></div>
        ";
            // line 53
            echo $this->getAttribute($context["module"], "content", array());
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 55,  41 => 53,  36 => 52,  31 => 51,  28 => 50,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'partials/base.html.twig' %}

{#{% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}#}
{#{% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}#}

{#{% block javascripts %}#}
    {#{% if show_onpage_menu %}#}
        {#{% do assets.add('theme://js/singlePageNav.min.js') %}#}
    {#{% endif %}#}
    {#{{ parent() }}#}
{#{% endblock %}#}


{#{% block bottom %}#}
    {#{{ parent() }}#}
    {#{% if show_onpage_menu %}#}
        {#<script>#}
        {#// singlePageNav initialization & configuration#}
        {#\$('#navbar').singlePageNav({#}
            {#offset: \$('#header').outerHeight(),#}
            {#filter: ':not(.external)',#}
            {#updateHash: true,#}
            {#currentClass: 'active'#}
        {#});#}
        {#</script>#}
    {#{% endif %}#}
{#{% endblock %}#}

{#{% block header_navigation %}#}
    {#{% if show_onpage_menu %}#}
        {#<ul class=\"navigation\">#}
        {#{% for module in page.collection() %}#}
            {#{% set current_module = (module.active or module.activeChild) ? 'active' : '' %}#}
            {#<li class=\"{{ current_module }}\"><a href=\"#{{ _self.pageLinkName(module.menu) }}\">{{ module.menu }}</a></li>#}
        {#{% endfor %}#}
        {#{% for mitem in site.menu %}#}
            {#<li>#}
                {#<a href=\"{{ mitem.url }}\">#}
                    {#{% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon }}\"></i>{% endif %}#}
                    {#{{ mitem.text }}#}
                {#</a>#}
            {#</li>#}
        {#{% endfor %}#}
        {#</ul>#}
    {#{% else %}#}
        {#{{  parent() }}#}
    {#{% endif %}#}
{#{% endblock %}#}

{% block content %}
    {% for module in page.collection() %}
        <div id=\"{{ _self.pageLinkName(module.menu) }}\"></div>
        {{ module.content }}
    {% endfor %}
    {{ page.content }}
{% endblock %}
";
    }
}
