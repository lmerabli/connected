<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_d7b15c92b3d638f1ec325ffd0572a3ed54c890576d8b6e76a06bad3ae5843890 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a6644c1b1a10e8458cd00bf84f8df58c7e02a4b419f4ad8c4396052f7ace98f = $this->env->getExtension("native_profiler");
        $__internal_7a6644c1b1a10e8458cd00bf84f8df58c7e02a4b419f4ad8c4396052f7ace98f->enter($__internal_7a6644c1b1a10e8458cd00bf84f8df58c7e02a4b419f4ad8c4396052f7ace98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7a6644c1b1a10e8458cd00bf84f8df58c7e02a4b419f4ad8c4396052f7ace98f->leave($__internal_7a6644c1b1a10e8458cd00bf84f8df58c7e02a4b419f4ad8c4396052f7ace98f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bfa7cd3271746f4b93c6cb1f6a0f42d747294ee21efa367d0609454436fcacc3 = $this->env->getExtension("native_profiler");
        $__internal_bfa7cd3271746f4b93c6cb1f6a0f42d747294ee21efa367d0609454436fcacc3->enter($__internal_bfa7cd3271746f4b93c6cb1f6a0f42d747294ee21efa367d0609454436fcacc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bfa7cd3271746f4b93c6cb1f6a0f42d747294ee21efa367d0609454436fcacc3->leave($__internal_bfa7cd3271746f4b93c6cb1f6a0f42d747294ee21efa367d0609454436fcacc3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d09e8c7d4a60635895efac6ab3070c437ff2675987648b47eb79ac44c51f6315 = $this->env->getExtension("native_profiler");
        $__internal_d09e8c7d4a60635895efac6ab3070c437ff2675987648b47eb79ac44c51f6315->enter($__internal_d09e8c7d4a60635895efac6ab3070c437ff2675987648b47eb79ac44c51f6315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d09e8c7d4a60635895efac6ab3070c437ff2675987648b47eb79ac44c51f6315->leave($__internal_d09e8c7d4a60635895efac6ab3070c437ff2675987648b47eb79ac44c51f6315_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_32ffcc32b03c8d52a0474ef8544c869103e97fb9832285980852fd852a7528c7 = $this->env->getExtension("native_profiler");
        $__internal_32ffcc32b03c8d52a0474ef8544c869103e97fb9832285980852fd852a7528c7->enter($__internal_32ffcc32b03c8d52a0474ef8544c869103e97fb9832285980852fd852a7528c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_32ffcc32b03c8d52a0474ef8544c869103e97fb9832285980852fd852a7528c7->leave($__internal_32ffcc32b03c8d52a0474ef8544c869103e97fb9832285980852fd852a7528c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
