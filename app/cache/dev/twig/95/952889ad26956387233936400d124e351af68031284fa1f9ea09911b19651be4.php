<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_bbaa01c055bd949895211bb556861c98ddee05f72913f50d3c1d12ce6a32680f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_e3c89a8d0c099a7402c7e54c91cdd8a395353d4359d6398c6a0aa45f8afdca9a = $this->env->getExtension("native_profiler");
        $__internal_e3c89a8d0c099a7402c7e54c91cdd8a395353d4359d6398c6a0aa45f8afdca9a->enter($__internal_e3c89a8d0c099a7402c7e54c91cdd8a395353d4359d6398c6a0aa45f8afdca9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3c89a8d0c099a7402c7e54c91cdd8a395353d4359d6398c6a0aa45f8afdca9a->leave($__internal_e3c89a8d0c099a7402c7e54c91cdd8a395353d4359d6398c6a0aa45f8afdca9a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3bdf7c60b6590c95fa161828a6472bbf6f6be54447972c020c60b3aa264dbc97 = $this->env->getExtension("native_profiler");
        $__internal_3bdf7c60b6590c95fa161828a6472bbf6f6be54447972c020c60b3aa264dbc97->enter($__internal_3bdf7c60b6590c95fa161828a6472bbf6f6be54447972c020c60b3aa264dbc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_3bdf7c60b6590c95fa161828a6472bbf6f6be54447972c020c60b3aa264dbc97->leave($__internal_3bdf7c60b6590c95fa161828a6472bbf6f6be54447972c020c60b3aa264dbc97_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
