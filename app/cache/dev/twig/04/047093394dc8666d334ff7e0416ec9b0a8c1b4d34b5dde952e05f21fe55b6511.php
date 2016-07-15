<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_5b5a4dd301fc6f3621ea0f5949e74687fe3e3154508614d3c47f6313eb7abb40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_904fec0c0331e886d1d61aa2c2fb5d829521ddda4ed105527c564864c8eb8f26 = $this->env->getExtension("native_profiler");
        $__internal_904fec0c0331e886d1d61aa2c2fb5d829521ddda4ed105527c564864c8eb8f26->enter($__internal_904fec0c0331e886d1d61aa2c2fb5d829521ddda4ed105527c564864c8eb8f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_904fec0c0331e886d1d61aa2c2fb5d829521ddda4ed105527c564864c8eb8f26->leave($__internal_904fec0c0331e886d1d61aa2c2fb5d829521ddda4ed105527c564864c8eb8f26_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d13f395a86d155c0e29bd48926f49b7f6eb12c240c0e15f22b9ed178107ff1b4 = $this->env->getExtension("native_profiler");
        $__internal_d13f395a86d155c0e29bd48926f49b7f6eb12c240c0e15f22b9ed178107ff1b4->enter($__internal_d13f395a86d155c0e29bd48926f49b7f6eb12c240c0e15f22b9ed178107ff1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_d13f395a86d155c0e29bd48926f49b7f6eb12c240c0e15f22b9ed178107ff1b4->leave($__internal_d13f395a86d155c0e29bd48926f49b7f6eb12c240c0e15f22b9ed178107ff1b4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
