<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0f97bdc1a5cf6031960a3d48698fd3f352da3fbb1c4f928ec94707ff8ee7a549 extends Twig_Template
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
        $__internal_c7785172a818fdc31dd525fae7bbc1328925719ca5b27df7e2b9bbb62702cc29 = $this->env->getExtension("native_profiler");
        $__internal_c7785172a818fdc31dd525fae7bbc1328925719ca5b27df7e2b9bbb62702cc29->enter($__internal_c7785172a818fdc31dd525fae7bbc1328925719ca5b27df7e2b9bbb62702cc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c7785172a818fdc31dd525fae7bbc1328925719ca5b27df7e2b9bbb62702cc29->leave($__internal_c7785172a818fdc31dd525fae7bbc1328925719ca5b27df7e2b9bbb62702cc29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
