<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_ed670e91f4225573e98b455bf60bc4f5d2dd5616161c6a4740320324e05f5cae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_25d40deac46d90c481f8809d91f843f724b8c428995945e93fb239cd85c994ed = $this->env->getExtension("native_profiler");
        $__internal_25d40deac46d90c481f8809d91f843f724b8c428995945e93fb239cd85c994ed->enter($__internal_25d40deac46d90c481f8809d91f843f724b8c428995945e93fb239cd85c994ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25d40deac46d90c481f8809d91f843f724b8c428995945e93fb239cd85c994ed->leave($__internal_25d40deac46d90c481f8809d91f843f724b8c428995945e93fb239cd85c994ed_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ff980c2a57c637528e587c103844096ce0f42abc51228cea555d71896a4521e = $this->env->getExtension("native_profiler");
        $__internal_4ff980c2a57c637528e587c103844096ce0f42abc51228cea555d71896a4521e->enter($__internal_4ff980c2a57c637528e587c103844096ce0f42abc51228cea555d71896a4521e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_4ff980c2a57c637528e587c103844096ce0f42abc51228cea555d71896a4521e->leave($__internal_4ff980c2a57c637528e587c103844096ce0f42abc51228cea555d71896a4521e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
