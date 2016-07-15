<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_075e003057645b549e556e32eaeba85f80aa3984bf4597fc9237ed62235e733f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af9bfa4260dca7dba9f69b8bc4e4db98a94c5ca80c8326a3ff73779db0720d66 = $this->env->getExtension("native_profiler");
        $__internal_af9bfa4260dca7dba9f69b8bc4e4db98a94c5ca80c8326a3ff73779db0720d66->enter($__internal_af9bfa4260dca7dba9f69b8bc4e4db98a94c5ca80c8326a3ff73779db0720d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af9bfa4260dca7dba9f69b8bc4e4db98a94c5ca80c8326a3ff73779db0720d66->leave($__internal_af9bfa4260dca7dba9f69b8bc4e4db98a94c5ca80c8326a3ff73779db0720d66_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62fec3b84086541f25e4d761b93d939b6db0383eec32e03fc268f668a14e3d04 = $this->env->getExtension("native_profiler");
        $__internal_62fec3b84086541f25e4d761b93d939b6db0383eec32e03fc268f668a14e3d04->enter($__internal_62fec3b84086541f25e4d761b93d939b6db0383eec32e03fc268f668a14e3d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_62fec3b84086541f25e4d761b93d939b6db0383eec32e03fc268f668a14e3d04->leave($__internal_62fec3b84086541f25e4d761b93d939b6db0383eec32e03fc268f668a14e3d04_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
