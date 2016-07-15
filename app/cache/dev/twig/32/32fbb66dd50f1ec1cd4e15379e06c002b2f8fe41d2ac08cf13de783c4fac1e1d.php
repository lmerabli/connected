<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_9de78cb9d1040ae9c892e6e7b9e0e04ee357916a61ce48ab3b7e2641989bdeac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_325b901059144529e881cb1ad46dd2c8ddd81cb30b09cd667b215bf822403a43 = $this->env->getExtension("native_profiler");
        $__internal_325b901059144529e881cb1ad46dd2c8ddd81cb30b09cd667b215bf822403a43->enter($__internal_325b901059144529e881cb1ad46dd2c8ddd81cb30b09cd667b215bf822403a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_325b901059144529e881cb1ad46dd2c8ddd81cb30b09cd667b215bf822403a43->leave($__internal_325b901059144529e881cb1ad46dd2c8ddd81cb30b09cd667b215bf822403a43_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_41c033bb636ae604aae34c497594ade2c7ff75c1af1d2b6e53665fee230cef10 = $this->env->getExtension("native_profiler");
        $__internal_41c033bb636ae604aae34c497594ade2c7ff75c1af1d2b6e53665fee230cef10->enter($__internal_41c033bb636ae604aae34c497594ade2c7ff75c1af1d2b6e53665fee230cef10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_41c033bb636ae604aae34c497594ade2c7ff75c1af1d2b6e53665fee230cef10->leave($__internal_41c033bb636ae604aae34c497594ade2c7ff75c1af1d2b6e53665fee230cef10_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
