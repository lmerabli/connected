<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_107619600ab6c5e29b08d847c3144d5b4939b0ae8c5c06e2f4124eb24faf6910 extends Twig_Template
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
        $__internal_19896e0b0ef8be21a11bb11da1dbb232e7fd286d143629b0f5525874b4fd0c49 = $this->env->getExtension("native_profiler");
        $__internal_19896e0b0ef8be21a11bb11da1dbb232e7fd286d143629b0f5525874b4fd0c49->enter($__internal_19896e0b0ef8be21a11bb11da1dbb232e7fd286d143629b0f5525874b4fd0c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_19896e0b0ef8be21a11bb11da1dbb232e7fd286d143629b0f5525874b4fd0c49->leave($__internal_19896e0b0ef8be21a11bb11da1dbb232e7fd286d143629b0f5525874b4fd0c49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
