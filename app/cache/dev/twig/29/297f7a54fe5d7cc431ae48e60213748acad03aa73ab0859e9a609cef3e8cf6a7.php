<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a478dbafd36d13b161915a3db542cf336705843f4906d56ed54fd6f292111207 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_496005c70121c67088814140e9dc249e9e8b744204c1aa1df1f062bb87f54054 = $this->env->getExtension("native_profiler");
        $__internal_496005c70121c67088814140e9dc249e9e8b744204c1aa1df1f062bb87f54054->enter($__internal_496005c70121c67088814140e9dc249e9e8b744204c1aa1df1f062bb87f54054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_496005c70121c67088814140e9dc249e9e8b744204c1aa1df1f062bb87f54054->leave($__internal_496005c70121c67088814140e9dc249e9e8b744204c1aa1df1f062bb87f54054_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a5dc0c3915d535c4d99168fc9540f890af84e1911365f7c725c9dfe35d57ecc1 = $this->env->getExtension("native_profiler");
        $__internal_a5dc0c3915d535c4d99168fc9540f890af84e1911365f7c725c9dfe35d57ecc1->enter($__internal_a5dc0c3915d535c4d99168fc9540f890af84e1911365f7c725c9dfe35d57ecc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a5dc0c3915d535c4d99168fc9540f890af84e1911365f7c725c9dfe35d57ecc1->leave($__internal_a5dc0c3915d535c4d99168fc9540f890af84e1911365f7c725c9dfe35d57ecc1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e308c47b4f258daa4292b30aa9ecfb3374ce31a9d2ffa658f79539d7f5b186c = $this->env->getExtension("native_profiler");
        $__internal_9e308c47b4f258daa4292b30aa9ecfb3374ce31a9d2ffa658f79539d7f5b186c->enter($__internal_9e308c47b4f258daa4292b30aa9ecfb3374ce31a9d2ffa658f79539d7f5b186c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9e308c47b4f258daa4292b30aa9ecfb3374ce31a9d2ffa658f79539d7f5b186c->leave($__internal_9e308c47b4f258daa4292b30aa9ecfb3374ce31a9d2ffa658f79539d7f5b186c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea4c8193173c4de4272688b3bc19ba13369e462b4c833de582cb727382c6d786 = $this->env->getExtension("native_profiler");
        $__internal_ea4c8193173c4de4272688b3bc19ba13369e462b4c833de582cb727382c6d786->enter($__internal_ea4c8193173c4de4272688b3bc19ba13369e462b4c833de582cb727382c6d786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ea4c8193173c4de4272688b3bc19ba13369e462b4c833de582cb727382c6d786->leave($__internal_ea4c8193173c4de4272688b3bc19ba13369e462b4c833de582cb727382c6d786_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
