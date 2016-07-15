<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_97c17148711350a96c7ff2bcb5fa76bc59cac5c01061aa386a5d060ce77cd258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a086042a4b839afaa61320db3ef0de0e86387f803db2ba1b7635141ab0524b68 = $this->env->getExtension("native_profiler");
        $__internal_a086042a4b839afaa61320db3ef0de0e86387f803db2ba1b7635141ab0524b68->enter($__internal_a086042a4b839afaa61320db3ef0de0e86387f803db2ba1b7635141ab0524b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a086042a4b839afaa61320db3ef0de0e86387f803db2ba1b7635141ab0524b68->leave($__internal_a086042a4b839afaa61320db3ef0de0e86387f803db2ba1b7635141ab0524b68_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1db476c5e1d5e9cafdfe8bf28511aa36722872b1c383953e0ef4344f0f9986bb = $this->env->getExtension("native_profiler");
        $__internal_1db476c5e1d5e9cafdfe8bf28511aa36722872b1c383953e0ef4344f0f9986bb->enter($__internal_1db476c5e1d5e9cafdfe8bf28511aa36722872b1c383953e0ef4344f0f9986bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1db476c5e1d5e9cafdfe8bf28511aa36722872b1c383953e0ef4344f0f9986bb->leave($__internal_1db476c5e1d5e9cafdfe8bf28511aa36722872b1c383953e0ef4344f0f9986bb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cce1bfbd5976e9d07d93b70c1d25ae13688b25c650009449b4087fa037ac9a8 = $this->env->getExtension("native_profiler");
        $__internal_3cce1bfbd5976e9d07d93b70c1d25ae13688b25c650009449b4087fa037ac9a8->enter($__internal_3cce1bfbd5976e9d07d93b70c1d25ae13688b25c650009449b4087fa037ac9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3cce1bfbd5976e9d07d93b70c1d25ae13688b25c650009449b4087fa037ac9a8->leave($__internal_3cce1bfbd5976e9d07d93b70c1d25ae13688b25c650009449b4087fa037ac9a8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
