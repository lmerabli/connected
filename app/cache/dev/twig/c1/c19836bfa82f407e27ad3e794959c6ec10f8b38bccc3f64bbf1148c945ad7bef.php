<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_14f8c1e17b68318b2e73ea59cef82cae7c7efa46ed6f36e0ab305bfd10064e9c extends Twig_Template
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
        $__internal_de4ec2ae16814bb86e61d53b8afafaf50d084c46861fb60ab9387861183d7d64 = $this->env->getExtension("native_profiler");
        $__internal_de4ec2ae16814bb86e61d53b8afafaf50d084c46861fb60ab9387861183d7d64->enter($__internal_de4ec2ae16814bb86e61d53b8afafaf50d084c46861fb60ab9387861183d7d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_de4ec2ae16814bb86e61d53b8afafaf50d084c46861fb60ab9387861183d7d64->leave($__internal_de4ec2ae16814bb86e61d53b8afafaf50d084c46861fb60ab9387861183d7d64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
