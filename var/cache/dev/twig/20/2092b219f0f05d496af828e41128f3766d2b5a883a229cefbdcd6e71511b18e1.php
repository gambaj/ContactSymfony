<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_08754fee7648f2a61815a64542480a5f99e9f99bb44f9e5c5a71b40cbd9b696f extends Twig_Template
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
        $__internal_eb6bf6822f30cc84742efcd32d24c99e23fdec28073010897df0a8851395f2bf = $this->env->getExtension("native_profiler");
        $__internal_eb6bf6822f30cc84742efcd32d24c99e23fdec28073010897df0a8851395f2bf->enter($__internal_eb6bf6822f30cc84742efcd32d24c99e23fdec28073010897df0a8851395f2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_eb6bf6822f30cc84742efcd32d24c99e23fdec28073010897df0a8851395f2bf->leave($__internal_eb6bf6822f30cc84742efcd32d24c99e23fdec28073010897df0a8851395f2bf_prof);

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
