<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e2f14395d31b1515d1b59cd191cb44b2319a49b1098930bfdf2399a286d466de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_715da6daee958b228ab48772a9f80d957abdab8ff65168b5d20edb9c5789b9a7 = $this->env->getExtension("native_profiler");
        $__internal_715da6daee958b228ab48772a9f80d957abdab8ff65168b5d20edb9c5789b9a7->enter($__internal_715da6daee958b228ab48772a9f80d957abdab8ff65168b5d20edb9c5789b9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_715da6daee958b228ab48772a9f80d957abdab8ff65168b5d20edb9c5789b9a7->leave($__internal_715da6daee958b228ab48772a9f80d957abdab8ff65168b5d20edb9c5789b9a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_37dc7aa94bd77d81c94fda2167e14d7c4304f7d5f4380bc88ceff08384e9f99d = $this->env->getExtension("native_profiler");
        $__internal_37dc7aa94bd77d81c94fda2167e14d7c4304f7d5f4380bc88ceff08384e9f99d->enter($__internal_37dc7aa94bd77d81c94fda2167e14d7c4304f7d5f4380bc88ceff08384e9f99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_37dc7aa94bd77d81c94fda2167e14d7c4304f7d5f4380bc88ceff08384e9f99d->leave($__internal_37dc7aa94bd77d81c94fda2167e14d7c4304f7d5f4380bc88ceff08384e9f99d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_55dfe5218ef0ee8db4442eeaf1427790288935b9c3f289246d643f5344d69707 = $this->env->getExtension("native_profiler");
        $__internal_55dfe5218ef0ee8db4442eeaf1427790288935b9c3f289246d643f5344d69707->enter($__internal_55dfe5218ef0ee8db4442eeaf1427790288935b9c3f289246d643f5344d69707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_55dfe5218ef0ee8db4442eeaf1427790288935b9c3f289246d643f5344d69707->leave($__internal_55dfe5218ef0ee8db4442eeaf1427790288935b9c3f289246d643f5344d69707_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e682834c87a61fc8aa21642bee26c157da75750b6960937f09c3b71507364a7f = $this->env->getExtension("native_profiler");
        $__internal_e682834c87a61fc8aa21642bee26c157da75750b6960937f09c3b71507364a7f->enter($__internal_e682834c87a61fc8aa21642bee26c157da75750b6960937f09c3b71507364a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e682834c87a61fc8aa21642bee26c157da75750b6960937f09c3b71507364a7f->leave($__internal_e682834c87a61fc8aa21642bee26c157da75750b6960937f09c3b71507364a7f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
