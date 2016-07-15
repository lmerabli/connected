<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b8bc95987ce3299542a3653b98544c15a20800beeae30f2156798204dec0aa7b extends Twig_Template
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
        $__internal_5d408b3976b290fc0700c939dd8ca2019fd8466fba82aaa347ab9ebe010d4c58 = $this->env->getExtension("native_profiler");
        $__internal_5d408b3976b290fc0700c939dd8ca2019fd8466fba82aaa347ab9ebe010d4c58->enter($__internal_5d408b3976b290fc0700c939dd8ca2019fd8466fba82aaa347ab9ebe010d4c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5d408b3976b290fc0700c939dd8ca2019fd8466fba82aaa347ab9ebe010d4c58->leave($__internal_5d408b3976b290fc0700c939dd8ca2019fd8466fba82aaa347ab9ebe010d4c58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
