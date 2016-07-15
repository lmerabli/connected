<?php

/* ::base.html.twig */
class __TwigTemplate_bd207fdb2d555fe671ae7516823b0a86197e369d80f97ee3681a0b56b55c6c5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67bcc27d1300a940be13bdddcbc288c03711cbb3846d6da4e4db70f6b2ceadd3 = $this->env->getExtension("native_profiler");
        $__internal_67bcc27d1300a940be13bdddcbc288c03711cbb3846d6da4e4db70f6b2ceadd3->enter($__internal_67bcc27d1300a940be13bdddcbc288c03711cbb3846d6da4e4db70f6b2ceadd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_67bcc27d1300a940be13bdddcbc288c03711cbb3846d6da4e4db70f6b2ceadd3->leave($__internal_67bcc27d1300a940be13bdddcbc288c03711cbb3846d6da4e4db70f6b2ceadd3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b128c558a52bf414da3e19ff3fe50641bad1920ab5bfb2dd84d68611abbd5903 = $this->env->getExtension("native_profiler");
        $__internal_b128c558a52bf414da3e19ff3fe50641bad1920ab5bfb2dd84d68611abbd5903->enter($__internal_b128c558a52bf414da3e19ff3fe50641bad1920ab5bfb2dd84d68611abbd5903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b128c558a52bf414da3e19ff3fe50641bad1920ab5bfb2dd84d68611abbd5903->leave($__internal_b128c558a52bf414da3e19ff3fe50641bad1920ab5bfb2dd84d68611abbd5903_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc59f5ed553fb7aed593f146f53c91e669bb6176a61392d303f84bb7364bc5e1 = $this->env->getExtension("native_profiler");
        $__internal_bc59f5ed553fb7aed593f146f53c91e669bb6176a61392d303f84bb7364bc5e1->enter($__internal_bc59f5ed553fb7aed593f146f53c91e669bb6176a61392d303f84bb7364bc5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bc59f5ed553fb7aed593f146f53c91e669bb6176a61392d303f84bb7364bc5e1->leave($__internal_bc59f5ed553fb7aed593f146f53c91e669bb6176a61392d303f84bb7364bc5e1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_44933f6928ee96bdc6aa3c497d7bf710bbaa1f12aa7e14c94fbbf24f7629203b = $this->env->getExtension("native_profiler");
        $__internal_44933f6928ee96bdc6aa3c497d7bf710bbaa1f12aa7e14c94fbbf24f7629203b->enter($__internal_44933f6928ee96bdc6aa3c497d7bf710bbaa1f12aa7e14c94fbbf24f7629203b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_44933f6928ee96bdc6aa3c497d7bf710bbaa1f12aa7e14c94fbbf24f7629203b->leave($__internal_44933f6928ee96bdc6aa3c497d7bf710bbaa1f12aa7e14c94fbbf24f7629203b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eab8ad447084da8a421e1f9c86f670c506c20e8e394a4a0b8b49e7e211a768f9 = $this->env->getExtension("native_profiler");
        $__internal_eab8ad447084da8a421e1f9c86f670c506c20e8e394a4a0b8b49e7e211a768f9->enter($__internal_eab8ad447084da8a421e1f9c86f670c506c20e8e394a4a0b8b49e7e211a768f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_eab8ad447084da8a421e1f9c86f670c506c20e8e394a4a0b8b49e7e211a768f9->leave($__internal_eab8ad447084da8a421e1f9c86f670c506c20e8e394a4a0b8b49e7e211a768f9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
