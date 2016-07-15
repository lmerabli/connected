<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a80508c7c766c09aac0fab89ea3b2b0d87f819afab2c039ee3f6f9d82b37058e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03958a1a1e6d758b17ece37410d6005927bcb6816898bf4c2fa54c780b79196b = $this->env->getExtension("native_profiler");
        $__internal_03958a1a1e6d758b17ece37410d6005927bcb6816898bf4c2fa54c780b79196b->enter($__internal_03958a1a1e6d758b17ece37410d6005927bcb6816898bf4c2fa54c780b79196b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_03958a1a1e6d758b17ece37410d6005927bcb6816898bf4c2fa54c780b79196b->leave($__internal_03958a1a1e6d758b17ece37410d6005927bcb6816898bf4c2fa54c780b79196b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
