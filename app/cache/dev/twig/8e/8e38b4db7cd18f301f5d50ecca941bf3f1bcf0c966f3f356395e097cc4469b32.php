<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cd057e92d20f53c4c5b2abdf16adc07aa42b618fdb14c33379f225a8d0afec94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_489f28bd44b984fb5fb5b0a97c57e97410d30f754c90cbe15560fff3ed1fc1ee = $this->env->getExtension("native_profiler");
        $__internal_489f28bd44b984fb5fb5b0a97c57e97410d30f754c90cbe15560fff3ed1fc1ee->enter($__internal_489f28bd44b984fb5fb5b0a97c57e97410d30f754c90cbe15560fff3ed1fc1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_489f28bd44b984fb5fb5b0a97c57e97410d30f754c90cbe15560fff3ed1fc1ee->leave($__internal_489f28bd44b984fb5fb5b0a97c57e97410d30f754c90cbe15560fff3ed1fc1ee_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd9c690d06c3de925b6b825fe0cf7374b87363d8f876a1d201a1bbdbaaf1ad46 = $this->env->getExtension("native_profiler");
        $__internal_cd9c690d06c3de925b6b825fe0cf7374b87363d8f876a1d201a1bbdbaaf1ad46->enter($__internal_cd9c690d06c3de925b6b825fe0cf7374b87363d8f876a1d201a1bbdbaaf1ad46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cd9c690d06c3de925b6b825fe0cf7374b87363d8f876a1d201a1bbdbaaf1ad46->leave($__internal_cd9c690d06c3de925b6b825fe0cf7374b87363d8f876a1d201a1bbdbaaf1ad46_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
