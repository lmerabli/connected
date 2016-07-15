<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_167ac42007b0d607474354a12ab1b74b45d8bea99ad4b710133d7c85d1bdc88f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_5183ab5100563ae51681d4cf53f6ef10911228b1fd450fe57aaaba8794ba5cc8 = $this->env->getExtension("native_profiler");
        $__internal_5183ab5100563ae51681d4cf53f6ef10911228b1fd450fe57aaaba8794ba5cc8->enter($__internal_5183ab5100563ae51681d4cf53f6ef10911228b1fd450fe57aaaba8794ba5cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5183ab5100563ae51681d4cf53f6ef10911228b1fd450fe57aaaba8794ba5cc8->leave($__internal_5183ab5100563ae51681d4cf53f6ef10911228b1fd450fe57aaaba8794ba5cc8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7cd53538f7cf2fd79f01cbe0a902001bbfd9bfa8f4c608b6ce137d04b7b0ce71 = $this->env->getExtension("native_profiler");
        $__internal_7cd53538f7cf2fd79f01cbe0a902001bbfd9bfa8f4c608b6ce137d04b7b0ce71->enter($__internal_7cd53538f7cf2fd79f01cbe0a902001bbfd9bfa8f4c608b6ce137d04b7b0ce71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_7cd53538f7cf2fd79f01cbe0a902001bbfd9bfa8f4c608b6ce137d04b7b0ce71->leave($__internal_7cd53538f7cf2fd79f01cbe0a902001bbfd9bfa8f4c608b6ce137d04b7b0ce71_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
