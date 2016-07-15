<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8f315f48085863d201eda13e4d4c29f997ce7d22905f61b2b95b166271090759 extends Twig_Template
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
        $__internal_8e1df68da3fbb7ad773c3e8d188b31e1fa1e8c8e53104bb95f50c44400ead3b8 = $this->env->getExtension("native_profiler");
        $__internal_8e1df68da3fbb7ad773c3e8d188b31e1fa1e8c8e53104bb95f50c44400ead3b8->enter($__internal_8e1df68da3fbb7ad773c3e8d188b31e1fa1e8c8e53104bb95f50c44400ead3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_8e1df68da3fbb7ad773c3e8d188b31e1fa1e8c8e53104bb95f50c44400ead3b8->leave($__internal_8e1df68da3fbb7ad773c3e8d188b31e1fa1e8c8e53104bb95f50c44400ead3b8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
