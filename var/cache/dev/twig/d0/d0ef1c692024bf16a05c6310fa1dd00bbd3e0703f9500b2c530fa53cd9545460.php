<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2dc2d639d16e584ddff510b1591dca2b91135cf89812b0a7f28a9c3bf2d06be4 extends Twig_Template
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
        $__internal_a6df99166c972ac1279c06313663e9891b637f489747061ce1e0a14eb462323d = $this->env->getExtension("native_profiler");
        $__internal_a6df99166c972ac1279c06313663e9891b637f489747061ce1e0a14eb462323d->enter($__internal_a6df99166c972ac1279c06313663e9891b637f489747061ce1e0a14eb462323d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a6df99166c972ac1279c06313663e9891b637f489747061ce1e0a14eb462323d->leave($__internal_a6df99166c972ac1279c06313663e9891b637f489747061ce1e0a14eb462323d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
