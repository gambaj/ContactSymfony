<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9fd832893922396124a6c045158754f205873be7b9f14d2da52131c704eae6f4 extends Twig_Template
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
        $__internal_a8f2622141566682b9096fad4f50871b4a3978cbfd8ff45eb0318e9105f1c0fd = $this->env->getExtension("native_profiler");
        $__internal_a8f2622141566682b9096fad4f50871b4a3978cbfd8ff45eb0318e9105f1c0fd->enter($__internal_a8f2622141566682b9096fad4f50871b4a3978cbfd8ff45eb0318e9105f1c0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a8f2622141566682b9096fad4f50871b4a3978cbfd8ff45eb0318e9105f1c0fd->leave($__internal_a8f2622141566682b9096fad4f50871b4a3978cbfd8ff45eb0318e9105f1c0fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
