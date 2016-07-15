<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_14b3ffb0cfd3a1c82c6c062c2728359812c4dba6ba5c4ef001e6a5ea9c4b4953 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_8e1b3355321d113150d610d40e96d7fcf47b7da08706c5188b3c708e9f85d01a = $this->env->getExtension("native_profiler");
        $__internal_8e1b3355321d113150d610d40e96d7fcf47b7da08706c5188b3c708e9f85d01a->enter($__internal_8e1b3355321d113150d610d40e96d7fcf47b7da08706c5188b3c708e9f85d01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e1b3355321d113150d610d40e96d7fcf47b7da08706c5188b3c708e9f85d01a->leave($__internal_8e1b3355321d113150d610d40e96d7fcf47b7da08706c5188b3c708e9f85d01a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dff52327242d1eca78809035882dcf367ab42829efccfda5bdd2f71a5e172296 = $this->env->getExtension("native_profiler");
        $__internal_dff52327242d1eca78809035882dcf367ab42829efccfda5bdd2f71a5e172296->enter($__internal_dff52327242d1eca78809035882dcf367ab42829efccfda5bdd2f71a5e172296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_dff52327242d1eca78809035882dcf367ab42829efccfda5bdd2f71a5e172296->leave($__internal_dff52327242d1eca78809035882dcf367ab42829efccfda5bdd2f71a5e172296_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
