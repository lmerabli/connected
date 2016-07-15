<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_e5d0d608bb37090d27955abb1b14380846023d6bbc4b5955358d01c433e19891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_38d23be78582d9d9369bbaf5dd062ccb3e6ecf10e09247b84878d531fcb98c03 = $this->env->getExtension("native_profiler");
        $__internal_38d23be78582d9d9369bbaf5dd062ccb3e6ecf10e09247b84878d531fcb98c03->enter($__internal_38d23be78582d9d9369bbaf5dd062ccb3e6ecf10e09247b84878d531fcb98c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38d23be78582d9d9369bbaf5dd062ccb3e6ecf10e09247b84878d531fcb98c03->leave($__internal_38d23be78582d9d9369bbaf5dd062ccb3e6ecf10e09247b84878d531fcb98c03_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_757a28b8f0bc3f42f1873e442a509a60681e7de76a36235fb0681dd43a90a59e = $this->env->getExtension("native_profiler");
        $__internal_757a28b8f0bc3f42f1873e442a509a60681e7de76a36235fb0681dd43a90a59e->enter($__internal_757a28b8f0bc3f42f1873e442a509a60681e7de76a36235fb0681dd43a90a59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_757a28b8f0bc3f42f1873e442a509a60681e7de76a36235fb0681dd43a90a59e->leave($__internal_757a28b8f0bc3f42f1873e442a509a60681e7de76a36235fb0681dd43a90a59e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
