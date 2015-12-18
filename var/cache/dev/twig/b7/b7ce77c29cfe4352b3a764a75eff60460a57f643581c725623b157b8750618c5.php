<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1b0d23da87efcb23f8406b26611f0d01cc933bcf64e19ab24ea070bbf4ced4bf extends Twig_Template
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
        $__internal_092bd8fb62896ac3a9d96c7955e0c9716d6a17ab921f7558a7d2c6aee692627e = $this->env->getExtension("native_profiler");
        $__internal_092bd8fb62896ac3a9d96c7955e0c9716d6a17ab921f7558a7d2c6aee692627e->enter($__internal_092bd8fb62896ac3a9d96c7955e0c9716d6a17ab921f7558a7d2c6aee692627e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_092bd8fb62896ac3a9d96c7955e0c9716d6a17ab921f7558a7d2c6aee692627e->leave($__internal_092bd8fb62896ac3a9d96c7955e0c9716d6a17ab921f7558a7d2c6aee692627e_prof);

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
