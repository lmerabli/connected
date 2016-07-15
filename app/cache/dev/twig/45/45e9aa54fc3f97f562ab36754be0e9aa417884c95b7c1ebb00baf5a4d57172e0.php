<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0a1fda814e6640109e1b7e75266c38ba5ff418f18ba3940dbfa576e82dacd954 extends Twig_Template
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
        $__internal_0bcd9d4296a5164189e97fe70e2460d1de76b4c7eeda818d51538deb10bb2adb = $this->env->getExtension("native_profiler");
        $__internal_0bcd9d4296a5164189e97fe70e2460d1de76b4c7eeda818d51538deb10bb2adb->enter($__internal_0bcd9d4296a5164189e97fe70e2460d1de76b4c7eeda818d51538deb10bb2adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0bcd9d4296a5164189e97fe70e2460d1de76b4c7eeda818d51538deb10bb2adb->leave($__internal_0bcd9d4296a5164189e97fe70e2460d1de76b4c7eeda818d51538deb10bb2adb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
