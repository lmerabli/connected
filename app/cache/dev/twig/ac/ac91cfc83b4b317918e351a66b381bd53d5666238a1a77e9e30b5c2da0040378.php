<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_e842f092562e88419293adb2ba2b75724c66e565c16d159c3b82de916e1e42a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_bf9fbd4f0e1dc21f838330d8734fb003b41c7e4acc64e0555fd135e5abd8bd50 = $this->env->getExtension("native_profiler");
        $__internal_bf9fbd4f0e1dc21f838330d8734fb003b41c7e4acc64e0555fd135e5abd8bd50->enter($__internal_bf9fbd4f0e1dc21f838330d8734fb003b41c7e4acc64e0555fd135e5abd8bd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf9fbd4f0e1dc21f838330d8734fb003b41c7e4acc64e0555fd135e5abd8bd50->leave($__internal_bf9fbd4f0e1dc21f838330d8734fb003b41c7e4acc64e0555fd135e5abd8bd50_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2dbf5071ab4c792c852d70c24cb178b156591ff76eb4bdff72618fd91aec52b2 = $this->env->getExtension("native_profiler");
        $__internal_2dbf5071ab4c792c852d70c24cb178b156591ff76eb4bdff72618fd91aec52b2->enter($__internal_2dbf5071ab4c792c852d70c24cb178b156591ff76eb4bdff72618fd91aec52b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_2dbf5071ab4c792c852d70c24cb178b156591ff76eb4bdff72618fd91aec52b2->leave($__internal_2dbf5071ab4c792c852d70c24cb178b156591ff76eb4bdff72618fd91aec52b2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
