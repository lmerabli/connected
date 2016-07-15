<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_b6576ed0b12b8de0e759fd8d6e9d761796307d0be67ac3b4c475d249c3df89fc extends Twig_Template
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
        $__internal_5db360172e72bd5f946a4c18a6baa4cfc57c4bc58dbf7ca5e7ee05a44883d113 = $this->env->getExtension("native_profiler");
        $__internal_5db360172e72bd5f946a4c18a6baa4cfc57c4bc58dbf7ca5e7ee05a44883d113->enter($__internal_5db360172e72bd5f946a4c18a6baa4cfc57c4bc58dbf7ca5e7ee05a44883d113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5db360172e72bd5f946a4c18a6baa4cfc57c4bc58dbf7ca5e7ee05a44883d113->leave($__internal_5db360172e72bd5f946a4c18a6baa4cfc57c4bc58dbf7ca5e7ee05a44883d113_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
