<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_96b478df08a718f3be1b468810b92145ff504cddd7a5d7954276bd4f74c7ba4a extends Twig_Template
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
        $__internal_23a04c525c2c8bb8e7e1ce7c4d277198220ab797a10715ed131a3eedc858a751 = $this->env->getExtension("native_profiler");
        $__internal_23a04c525c2c8bb8e7e1ce7c4d277198220ab797a10715ed131a3eedc858a751->enter($__internal_23a04c525c2c8bb8e7e1ce7c4d277198220ab797a10715ed131a3eedc858a751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_23a04c525c2c8bb8e7e1ce7c4d277198220ab797a10715ed131a3eedc858a751->leave($__internal_23a04c525c2c8bb8e7e1ce7c4d277198220ab797a10715ed131a3eedc858a751_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
