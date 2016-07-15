<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3f46fc8440d7a43e92f0b9257759f4c2e6a8c862e99a04c353e37b28448cd9bf extends Twig_Template
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
        $__internal_4eacc85b87f5688caeeab1d275d4183adc2f5c97756d01a581764dce3be720b3 = $this->env->getExtension("native_profiler");
        $__internal_4eacc85b87f5688caeeab1d275d4183adc2f5c97756d01a581764dce3be720b3->enter($__internal_4eacc85b87f5688caeeab1d275d4183adc2f5c97756d01a581764dce3be720b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4eacc85b87f5688caeeab1d275d4183adc2f5c97756d01a581764dce3be720b3->leave($__internal_4eacc85b87f5688caeeab1d275d4183adc2f5c97756d01a581764dce3be720b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
