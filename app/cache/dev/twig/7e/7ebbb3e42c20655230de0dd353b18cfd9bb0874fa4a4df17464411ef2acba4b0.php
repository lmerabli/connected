<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_794904e81672802f17197c1e1f1cd721d110b30204edfa162a4c828a5512d963 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_370f62c0aff94ec9ec22cb29ee0f4b3673b1212c241192791666ad2e61bf9827 = $this->env->getExtension("native_profiler");
        $__internal_370f62c0aff94ec9ec22cb29ee0f4b3673b1212c241192791666ad2e61bf9827->enter($__internal_370f62c0aff94ec9ec22cb29ee0f4b3673b1212c241192791666ad2e61bf9827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_370f62c0aff94ec9ec22cb29ee0f4b3673b1212c241192791666ad2e61bf9827->leave($__internal_370f62c0aff94ec9ec22cb29ee0f4b3673b1212c241192791666ad2e61bf9827_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f717b7c39cd87134129f9219f5b5dda0fac9a6845fff487597c3ef3e04124715 = $this->env->getExtension("native_profiler");
        $__internal_f717b7c39cd87134129f9219f5b5dda0fac9a6845fff487597c3ef3e04124715->enter($__internal_f717b7c39cd87134129f9219f5b5dda0fac9a6845fff487597c3ef3e04124715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f717b7c39cd87134129f9219f5b5dda0fac9a6845fff487597c3ef3e04124715->leave($__internal_f717b7c39cd87134129f9219f5b5dda0fac9a6845fff487597c3ef3e04124715_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
