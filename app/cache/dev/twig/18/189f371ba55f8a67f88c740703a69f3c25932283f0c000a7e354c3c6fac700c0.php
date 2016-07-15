<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_652b2eb9d3e38b892db46a0368df31e0b627ba4edce8aae6a5b56d96c97b7286 extends Twig_Template
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
        $__internal_91dec2e4e39160e87f631f8305b4edbf467bc06a8befac3b25ee1274fca088ea = $this->env->getExtension("native_profiler");
        $__internal_91dec2e4e39160e87f631f8305b4edbf467bc06a8befac3b25ee1274fca088ea->enter($__internal_91dec2e4e39160e87f631f8305b4edbf467bc06a8befac3b25ee1274fca088ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_91dec2e4e39160e87f631f8305b4edbf467bc06a8befac3b25ee1274fca088ea->leave($__internal_91dec2e4e39160e87f631f8305b4edbf467bc06a8befac3b25ee1274fca088ea_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
