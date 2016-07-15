<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1c025e7226b79eac05499e9d3e258c86ac89178d19c0d90708983ec0eef497fa extends Twig_Template
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
        $__internal_7e6d60584a4942c76776270d56647143f824128c6b11b725b60a99693858a4be = $this->env->getExtension("native_profiler");
        $__internal_7e6d60584a4942c76776270d56647143f824128c6b11b725b60a99693858a4be->enter($__internal_7e6d60584a4942c76776270d56647143f824128c6b11b725b60a99693858a4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7e6d60584a4942c76776270d56647143f824128c6b11b725b60a99693858a4be->leave($__internal_7e6d60584a4942c76776270d56647143f824128c6b11b725b60a99693858a4be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
