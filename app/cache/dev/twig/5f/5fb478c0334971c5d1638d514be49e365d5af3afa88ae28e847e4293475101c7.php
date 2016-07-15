<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_75919329d9f0b75ce0655daa661e750d026a0f5901bc88711d7b469f47f3c42a extends Twig_Template
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
        $__internal_2958d9741c33b7b27b8c92bfb845c13c8054671b0d94440fe15225cda23dec5b = $this->env->getExtension("native_profiler");
        $__internal_2958d9741c33b7b27b8c92bfb845c13c8054671b0d94440fe15225cda23dec5b->enter($__internal_2958d9741c33b7b27b8c92bfb845c13c8054671b0d94440fe15225cda23dec5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2958d9741c33b7b27b8c92bfb845c13c8054671b0d94440fe15225cda23dec5b->leave($__internal_2958d9741c33b7b27b8c92bfb845c13c8054671b0d94440fe15225cda23dec5b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
