<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_17025365857cbd7636a5397dcba6ad927ee27c99da9ea587cf74ea8cbfc06a8f extends Twig_Template
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
        $__internal_9964f0d6b1373afa55e49841d61b5a41df3580ee80d603f7e685d720857bd5fc = $this->env->getExtension("native_profiler");
        $__internal_9964f0d6b1373afa55e49841d61b5a41df3580ee80d603f7e685d720857bd5fc->enter($__internal_9964f0d6b1373afa55e49841d61b5a41df3580ee80d603f7e685d720857bd5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9964f0d6b1373afa55e49841d61b5a41df3580ee80d603f7e685d720857bd5fc->leave($__internal_9964f0d6b1373afa55e49841d61b5a41df3580ee80d603f7e685d720857bd5fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
