<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_4b250a6214e033f56945737bbfd4504c75905cf70270c2ac269018d7597f3b4e extends Twig_Template
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
        $__internal_dc388d2ab2e7b9d6b9c3c5706a23fb60ac371c79b74409ad94d5b538b1bcadf5 = $this->env->getExtension("native_profiler");
        $__internal_dc388d2ab2e7b9d6b9c3c5706a23fb60ac371c79b74409ad94d5b538b1bcadf5->enter($__internal_dc388d2ab2e7b9d6b9c3c5706a23fb60ac371c79b74409ad94d5b538b1bcadf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_dc388d2ab2e7b9d6b9c3c5706a23fb60ac371c79b74409ad94d5b538b1bcadf5->leave($__internal_dc388d2ab2e7b9d6b9c3c5706a23fb60ac371c79b74409ad94d5b538b1bcadf5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
