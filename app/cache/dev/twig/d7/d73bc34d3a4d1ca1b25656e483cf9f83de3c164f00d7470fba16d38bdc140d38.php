<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_b58b87e35ec7a86fe5e3a6ad9f518ec5028d97f16e4b0f9d90e7c7e4a014a7c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_ced9e8f40094bd0829c8b2eac02a6c64a9984658714767893a1a610bae8d02ec = $this->env->getExtension("native_profiler");
        $__internal_ced9e8f40094bd0829c8b2eac02a6c64a9984658714767893a1a610bae8d02ec->enter($__internal_ced9e8f40094bd0829c8b2eac02a6c64a9984658714767893a1a610bae8d02ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ced9e8f40094bd0829c8b2eac02a6c64a9984658714767893a1a610bae8d02ec->leave($__internal_ced9e8f40094bd0829c8b2eac02a6c64a9984658714767893a1a610bae8d02ec_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f66db6a753acd551efd042881c93ab67e3b40a45f1b058d7d7a51bf2b61842c4 = $this->env->getExtension("native_profiler");
        $__internal_f66db6a753acd551efd042881c93ab67e3b40a45f1b058d7d7a51bf2b61842c4->enter($__internal_f66db6a753acd551efd042881c93ab67e3b40a45f1b058d7d7a51bf2b61842c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f66db6a753acd551efd042881c93ab67e3b40a45f1b058d7d7a51bf2b61842c4->leave($__internal_f66db6a753acd551efd042881c93ab67e3b40a45f1b058d7d7a51bf2b61842c4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
