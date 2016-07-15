<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_48a67cf2439ceaf99af13d38058837c05964d55f72c17e0dab2cdb5a00508c46 extends Twig_Template
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
        $__internal_5f585ab29d2253bb2559d880171d1620e730ef1acb76f3ac39dd4541a5dc1e4f = $this->env->getExtension("native_profiler");
        $__internal_5f585ab29d2253bb2559d880171d1620e730ef1acb76f3ac39dd4541a5dc1e4f->enter($__internal_5f585ab29d2253bb2559d880171d1620e730ef1acb76f3ac39dd4541a5dc1e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_5f585ab29d2253bb2559d880171d1620e730ef1acb76f3ac39dd4541a5dc1e4f->leave($__internal_5f585ab29d2253bb2559d880171d1620e730ef1acb76f3ac39dd4541a5dc1e4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
