<?php

/* @Page:/Volumes/Untitled/grav-admin-3/user/plugins/error/pages */
class __TwigTemplate_d3dfa090fc6fbf1ef436f0cd2678e565990a8da1baa1c3bafc7085f7401b4b27 extends Twig_Template
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
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_ERROR.ERROR_MESSAGE");
        echo "

";
    }

    public function getTemplateName()
    {
        return "@Page:/Volumes/Untitled/grav-admin-3/user/plugins/error/pages";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "{{ 'PLUGIN_ERROR.ERROR_MESSAGE'|t }}

";
    }
}
