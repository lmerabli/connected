<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_5ab1ddd1478339cbf8955fde71ae3d44b5ea0bd1d3eace69aede269e93763db5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_2d0bb784130fb8c3bbffdf1d1be2bdd0cbf45820af14ab6380e95e50307328f9 = $this->env->getExtension("native_profiler");
        $__internal_2d0bb784130fb8c3bbffdf1d1be2bdd0cbf45820af14ab6380e95e50307328f9->enter($__internal_2d0bb784130fb8c3bbffdf1d1be2bdd0cbf45820af14ab6380e95e50307328f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d0bb784130fb8c3bbffdf1d1be2bdd0cbf45820af14ab6380e95e50307328f9->leave($__internal_2d0bb784130fb8c3bbffdf1d1be2bdd0cbf45820af14ab6380e95e50307328f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28b6966f9505d9c20fa7850effa1fab9d59af17f356bd3c52da3f690c738b243 = $this->env->getExtension("native_profiler");
        $__internal_28b6966f9505d9c20fa7850effa1fab9d59af17f356bd3c52da3f690c738b243->enter($__internal_28b6966f9505d9c20fa7850effa1fab9d59af17f356bd3c52da3f690c738b243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_28b6966f9505d9c20fa7850effa1fab9d59af17f356bd3c52da3f690c738b243->leave($__internal_28b6966f9505d9c20fa7850effa1fab9d59af17f356bd3c52da3f690c738b243_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
