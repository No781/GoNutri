<?php

/* modular/triple.html.twig */
class __TwigTemplate_2c7553a4c43440171218ec6e8916b25779eafba5c0959f0c1fde2bfca70bbf13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div class=\"triples\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "triples", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["part"]) {
            // line 4
            echo "
        ";
            // line 6
            echo "            ";
            // line 7
            echo "        ";
            // line 8
            echo "        <div class=\"container\">
            <div class=\"triple\">
                <a href=\"";
            // line 10
            echo $this->getAttribute($context["part"], "url", array());
            echo "\">
                    ";
            // line 11
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()), $this->getAttribute($context["part"], "image", array()), array(), "array"), "html", array(0 => "", 1 => $this->getAttribute($context["part"], "name", array())), "method");
            echo "
                </a>
            </div>
        </div>
        ";
            // line 16
            echo "            ";
            // line 17
            echo "        ";
            // line 18
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['part'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    ";
        // line 21
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modular/triple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 21,  60 => 20,  53 => 18,  51 => 17,  49 => 16,  42 => 11,  38 => 10,  34 => 8,  32 => 7,  30 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "
<div class=\"triples\">
    {% for part in page.header.triples %}

        {#{% if loop.index % 3 == 1 %}#}
            {#<div class=\"row\">#}
        {#{% endif %}#}
        <div class=\"container\">
            <div class=\"triple\">
                <a href=\"{{ part.url }}\">
                    {{ page.media.images[part.image].html('', part.name) }}
                </a>
            </div>
        </div>
        {#{% if loop.index == page.header.members.count or loop.index % 3 == 0 %}#}
            {#</div>#}
        {#{% endif %}#}

    {% endfor %}
    {#{{ content }}#}
</div>
";
    }
}
