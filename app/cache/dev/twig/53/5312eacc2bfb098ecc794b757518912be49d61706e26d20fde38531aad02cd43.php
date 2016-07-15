<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7659828dd941406491c2889671eecce6e07548a805fbce13ce3af6311ea4301c extends Twig_Template
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
        $__internal_bcb1579d9e0f400fe639a48a295ac9cfe33975ca00e960dda71a9d6a51bfa553 = $this->env->getExtension("native_profiler");
        $__internal_bcb1579d9e0f400fe639a48a295ac9cfe33975ca00e960dda71a9d6a51bfa553->enter($__internal_bcb1579d9e0f400fe639a48a295ac9cfe33975ca00e960dda71a9d6a51bfa553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_bcb1579d9e0f400fe639a48a295ac9cfe33975ca00e960dda71a9d6a51bfa553->leave($__internal_bcb1579d9e0f400fe639a48a295ac9cfe33975ca00e960dda71a9d6a51bfa553_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
