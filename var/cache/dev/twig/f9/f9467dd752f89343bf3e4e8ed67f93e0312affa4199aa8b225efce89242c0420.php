<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_e6a09a34b61049e01e76d89e37bbdde6c15388a01f9c80242860eba659fb591e extends Twig_Template
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
        $__internal_aa1556bfe5bdfe81a91b5a6ae8865c9cecf7f19be40e4a92e961a8e852b7272a = $this->env->getExtension("native_profiler");
        $__internal_aa1556bfe5bdfe81a91b5a6ae8865c9cecf7f19be40e4a92e961a8e852b7272a->enter($__internal_aa1556bfe5bdfe81a91b5a6ae8865c9cecf7f19be40e4a92e961a8e852b7272a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_aa1556bfe5bdfe81a91b5a6ae8865c9cecf7f19be40e4a92e961a8e852b7272a->leave($__internal_aa1556bfe5bdfe81a91b5a6ae8865c9cecf7f19be40e4a92e961a8e852b7272a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
