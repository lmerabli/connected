<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_92a581e929f227babd9f24c1f07b4bbe09df449a00ba547dde39994bab7903a9 extends Twig_Template
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
        $__internal_217c6cdffbcac8a511f4c5edb50e597d779954ef3a6b20d066112f1729918468 = $this->env->getExtension("native_profiler");
        $__internal_217c6cdffbcac8a511f4c5edb50e597d779954ef3a6b20d066112f1729918468->enter($__internal_217c6cdffbcac8a511f4c5edb50e597d779954ef3a6b20d066112f1729918468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_217c6cdffbcac8a511f4c5edb50e597d779954ef3a6b20d066112f1729918468->leave($__internal_217c6cdffbcac8a511f4c5edb50e597d779954ef3a6b20d066112f1729918468_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
