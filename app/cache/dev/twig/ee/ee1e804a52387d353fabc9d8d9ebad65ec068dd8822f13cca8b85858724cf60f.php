<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_de59d2ffb3b165b51d6e2e332d3e492c916029edff9fc710f41f63b1aed5520c extends Twig_Template
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
        $__internal_f93c447a45956135192a2117405073922817eacf148979cdd8f771c871b4e5bf = $this->env->getExtension("native_profiler");
        $__internal_f93c447a45956135192a2117405073922817eacf148979cdd8f771c871b4e5bf->enter($__internal_f93c447a45956135192a2117405073922817eacf148979cdd8f771c871b4e5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f93c447a45956135192a2117405073922817eacf148979cdd8f771c871b4e5bf->leave($__internal_f93c447a45956135192a2117405073922817eacf148979cdd8f771c871b4e5bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
