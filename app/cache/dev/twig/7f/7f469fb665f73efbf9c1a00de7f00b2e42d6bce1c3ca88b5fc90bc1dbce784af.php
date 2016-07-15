<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_7c07e01a904f87dead5bb4c8b76f3ce512d316e755024f048d2ad7292429bc63 extends Twig_Template
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
        $__internal_cb95e1de9c4cfdb719bbdc15a6d63fa7f7fecbdf56ee65ea55da61736e319c58 = $this->env->getExtension("native_profiler");
        $__internal_cb95e1de9c4cfdb719bbdc15a6d63fa7f7fecbdf56ee65ea55da61736e319c58->enter($__internal_cb95e1de9c4cfdb719bbdc15a6d63fa7f7fecbdf56ee65ea55da61736e319c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cb95e1de9c4cfdb719bbdc15a6d63fa7f7fecbdf56ee65ea55da61736e319c58->leave($__internal_cb95e1de9c4cfdb719bbdc15a6d63fa7f7fecbdf56ee65ea55da61736e319c58_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
