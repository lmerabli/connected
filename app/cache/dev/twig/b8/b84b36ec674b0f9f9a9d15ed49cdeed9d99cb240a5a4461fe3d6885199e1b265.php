<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_a7c61f962dbaf134391fdb71334eabf3f983f35083f5a307b30d64ca60666f91 extends Twig_Template
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
        $__internal_73c8ecb98b08e99652a879815e8351c1966e409e0e17e68d7aaaa77df1f50af5 = $this->env->getExtension("native_profiler");
        $__internal_73c8ecb98b08e99652a879815e8351c1966e409e0e17e68d7aaaa77df1f50af5->enter($__internal_73c8ecb98b08e99652a879815e8351c1966e409e0e17e68d7aaaa77df1f50af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_73c8ecb98b08e99652a879815e8351c1966e409e0e17e68d7aaaa77df1f50af5->leave($__internal_73c8ecb98b08e99652a879815e8351c1966e409e0e17e68d7aaaa77df1f50af5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3b84d106a83872a809fba089f801762fd5f59e982db1a4621b3c124ceb8cc115 = $this->env->getExtension("native_profiler");
        $__internal_3b84d106a83872a809fba089f801762fd5f59e982db1a4621b3c124ceb8cc115->enter($__internal_3b84d106a83872a809fba089f801762fd5f59e982db1a4621b3c124ceb8cc115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_3b84d106a83872a809fba089f801762fd5f59e982db1a4621b3c124ceb8cc115->leave($__internal_3b84d106a83872a809fba089f801762fd5f59e982db1a4621b3c124ceb8cc115_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e7b7cd85e6ca9b0d37d9c2dfd8d176e9a7dfff17ddb781bf354576d8a6424f4e = $this->env->getExtension("native_profiler");
        $__internal_e7b7cd85e6ca9b0d37d9c2dfd8d176e9a7dfff17ddb781bf354576d8a6424f4e->enter($__internal_e7b7cd85e6ca9b0d37d9c2dfd8d176e9a7dfff17ddb781bf354576d8a6424f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e7b7cd85e6ca9b0d37d9c2dfd8d176e9a7dfff17ddb781bf354576d8a6424f4e->leave($__internal_e7b7cd85e6ca9b0d37d9c2dfd8d176e9a7dfff17ddb781bf354576d8a6424f4e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c4470b74c75b297049c4a48851b638c0b8a66f782b519fa5f81f7145a48a74bf = $this->env->getExtension("native_profiler");
        $__internal_c4470b74c75b297049c4a48851b638c0b8a66f782b519fa5f81f7145a48a74bf->enter($__internal_c4470b74c75b297049c4a48851b638c0b8a66f782b519fa5f81f7145a48a74bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c4470b74c75b297049c4a48851b638c0b8a66f782b519fa5f81f7145a48a74bf->leave($__internal_c4470b74c75b297049c4a48851b638c0b8a66f782b519fa5f81f7145a48a74bf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
