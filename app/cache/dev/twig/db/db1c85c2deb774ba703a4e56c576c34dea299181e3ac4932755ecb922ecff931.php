<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f7013ac975a6e5007361639238f2bf46a1af30faab2faccb58c09b911068aa9b extends Twig_Template
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
        $__internal_bed4b5962463213061949df1ecdfa85ae4e0e15b879c5d2eeddbba9c9f3a3902 = $this->env->getExtension("native_profiler");
        $__internal_bed4b5962463213061949df1ecdfa85ae4e0e15b879c5d2eeddbba9c9f3a3902->enter($__internal_bed4b5962463213061949df1ecdfa85ae4e0e15b879c5d2eeddbba9c9f3a3902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_bed4b5962463213061949df1ecdfa85ae4e0e15b879c5d2eeddbba9c9f3a3902->leave($__internal_bed4b5962463213061949df1ecdfa85ae4e0e15b879c5d2eeddbba9c9f3a3902_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
