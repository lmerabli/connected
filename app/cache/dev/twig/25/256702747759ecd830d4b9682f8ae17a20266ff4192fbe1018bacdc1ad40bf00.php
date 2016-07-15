<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_60e260d6099604cfba986df380c1f092e028eea9149a652d0107a97352d7b08f extends Twig_Template
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
        $__internal_bf2cf244a700c19b6474b118b3e6deb789ce56edc55afbbadd8ac668d9aa6fef = $this->env->getExtension("native_profiler");
        $__internal_bf2cf244a700c19b6474b118b3e6deb789ce56edc55afbbadd8ac668d9aa6fef->enter($__internal_bf2cf244a700c19b6474b118b3e6deb789ce56edc55afbbadd8ac668d9aa6fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bf2cf244a700c19b6474b118b3e6deb789ce56edc55afbbadd8ac668d9aa6fef->leave($__internal_bf2cf244a700c19b6474b118b3e6deb789ce56edc55afbbadd8ac668d9aa6fef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
