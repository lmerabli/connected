<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0ec55e17a53b85462ab7a9cd3b0b0961b76f9c0f02babe85bcc9df930322dac7 extends Twig_Template
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
        $__internal_5dc86f0aa21aa818610e09a174944289db2d984f076c92edd7e8b7c3c1f8f71f = $this->env->getExtension("native_profiler");
        $__internal_5dc86f0aa21aa818610e09a174944289db2d984f076c92edd7e8b7c3c1f8f71f->enter($__internal_5dc86f0aa21aa818610e09a174944289db2d984f076c92edd7e8b7c3c1f8f71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5dc86f0aa21aa818610e09a174944289db2d984f076c92edd7e8b7c3c1f8f71f->leave($__internal_5dc86f0aa21aa818610e09a174944289db2d984f076c92edd7e8b7c3c1f8f71f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
