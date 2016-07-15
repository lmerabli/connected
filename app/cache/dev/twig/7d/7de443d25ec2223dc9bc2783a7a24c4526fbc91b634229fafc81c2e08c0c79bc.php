<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e7cbd814d80ce1af8f3846d54563b98abf8f44300cc9fc88fe88e42de51d0437 extends Twig_Template
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
        $__internal_b1c9e8d7fcc8b81b392ca6a8fd7e6f38c8d571adf7fa3d4dc4e01fff745b962f = $this->env->getExtension("native_profiler");
        $__internal_b1c9e8d7fcc8b81b392ca6a8fd7e6f38c8d571adf7fa3d4dc4e01fff745b962f->enter($__internal_b1c9e8d7fcc8b81b392ca6a8fd7e6f38c8d571adf7fa3d4dc4e01fff745b962f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b1c9e8d7fcc8b81b392ca6a8fd7e6f38c8d571adf7fa3d4dc4e01fff745b962f->leave($__internal_b1c9e8d7fcc8b81b392ca6a8fd7e6f38c8d571adf7fa3d4dc4e01fff745b962f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
