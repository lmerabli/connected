<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6fc060b49d332e3c899375cf8070dfd67484256a2a6092d53e43be0929d56b6c extends Twig_Template
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
        $__internal_9249dc2c2ecdfda510a48106341a431089317198cda14e8ef31c0baf596162ac = $this->env->getExtension("native_profiler");
        $__internal_9249dc2c2ecdfda510a48106341a431089317198cda14e8ef31c0baf596162ac->enter($__internal_9249dc2c2ecdfda510a48106341a431089317198cda14e8ef31c0baf596162ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9249dc2c2ecdfda510a48106341a431089317198cda14e8ef31c0baf596162ac->leave($__internal_9249dc2c2ecdfda510a48106341a431089317198cda14e8ef31c0baf596162ac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
