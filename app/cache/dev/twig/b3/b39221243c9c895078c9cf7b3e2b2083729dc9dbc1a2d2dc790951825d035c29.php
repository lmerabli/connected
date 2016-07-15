<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_816b1c548667200998d594418f80559235a5ec154ca56327b3517c9fca689f72 extends Twig_Template
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
        $__internal_cc27372edcf5ac3a6cdc760fcd12bca0fb9e87f2b594094579737e86cf38ac4d = $this->env->getExtension("native_profiler");
        $__internal_cc27372edcf5ac3a6cdc760fcd12bca0fb9e87f2b594094579737e86cf38ac4d->enter($__internal_cc27372edcf5ac3a6cdc760fcd12bca0fb9e87f2b594094579737e86cf38ac4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_cc27372edcf5ac3a6cdc760fcd12bca0fb9e87f2b594094579737e86cf38ac4d->leave($__internal_cc27372edcf5ac3a6cdc760fcd12bca0fb9e87f2b594094579737e86cf38ac4d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
