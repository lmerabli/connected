<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_4090d4debbecf3952aea967ffa535b556a709beaa09306a650fe563c21ebcb50 extends Twig_Template
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
        $__internal_3462e4084a6c6f518e84307a918a18fe85d63013f4b9ad86e5f14b15513f0ecf = $this->env->getExtension("native_profiler");
        $__internal_3462e4084a6c6f518e84307a918a18fe85d63013f4b9ad86e5f14b15513f0ecf->enter($__internal_3462e4084a6c6f518e84307a918a18fe85d63013f4b9ad86e5f14b15513f0ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_3462e4084a6c6f518e84307a918a18fe85d63013f4b9ad86e5f14b15513f0ecf->leave($__internal_3462e4084a6c6f518e84307a918a18fe85d63013f4b9ad86e5f14b15513f0ecf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
