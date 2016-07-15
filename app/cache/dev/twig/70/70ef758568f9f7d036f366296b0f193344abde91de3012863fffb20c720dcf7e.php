<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_540e68b1a21385a86f25238edd09398e08898b372a3ec7b8df981a4c8372117a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5fb746ce611632476a0f0fe2ab6f01bca1e8bab7a1092b38c1aba65daaa2c70 = $this->env->getExtension("native_profiler");
        $__internal_e5fb746ce611632476a0f0fe2ab6f01bca1e8bab7a1092b38c1aba65daaa2c70->enter($__internal_e5fb746ce611632476a0f0fe2ab6f01bca1e8bab7a1092b38c1aba65daaa2c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5fb746ce611632476a0f0fe2ab6f01bca1e8bab7a1092b38c1aba65daaa2c70->leave($__internal_e5fb746ce611632476a0f0fe2ab6f01bca1e8bab7a1092b38c1aba65daaa2c70_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7ae72bf2b8538967bbf471ef0703436ccea715932a11e9babf42d97bc157849 = $this->env->getExtension("native_profiler");
        $__internal_c7ae72bf2b8538967bbf471ef0703436ccea715932a11e9babf42d97bc157849->enter($__internal_c7ae72bf2b8538967bbf471ef0703436ccea715932a11e9babf42d97bc157849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_c7ae72bf2b8538967bbf471ef0703436ccea715932a11e9babf42d97bc157849->leave($__internal_c7ae72bf2b8538967bbf471ef0703436ccea715932a11e9babf42d97bc157849_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
