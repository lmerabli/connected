<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_f2d8869521fdbbac809d4591956a8d8b93eb5b9a40cc22090a5247b1a14dd4d1 extends Twig_Template
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
        $__internal_7c2ff1e979282e1fef7234bed73847ddd6b4abac8c84385cc705498d9b6f5c98 = $this->env->getExtension("native_profiler");
        $__internal_7c2ff1e979282e1fef7234bed73847ddd6b4abac8c84385cc705498d9b6f5c98->enter($__internal_7c2ff1e979282e1fef7234bed73847ddd6b4abac8c84385cc705498d9b6f5c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7c2ff1e979282e1fef7234bed73847ddd6b4abac8c84385cc705498d9b6f5c98->leave($__internal_7c2ff1e979282e1fef7234bed73847ddd6b4abac8c84385cc705498d9b6f5c98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
