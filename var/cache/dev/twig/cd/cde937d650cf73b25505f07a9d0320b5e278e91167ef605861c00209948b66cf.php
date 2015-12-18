<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_126b54dea379464a58239b6e458567b3c972bb1683b4c96c4d70b5df861468aa extends Twig_Template
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
        $__internal_ac25f491f69a01dd9621c90722945266dc9403050ddbd30bc4d3fd5e084f9de8 = $this->env->getExtension("native_profiler");
        $__internal_ac25f491f69a01dd9621c90722945266dc9403050ddbd30bc4d3fd5e084f9de8->enter($__internal_ac25f491f69a01dd9621c90722945266dc9403050ddbd30bc4d3fd5e084f9de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ac25f491f69a01dd9621c90722945266dc9403050ddbd30bc4d3fd5e084f9de8->leave($__internal_ac25f491f69a01dd9621c90722945266dc9403050ddbd30bc4d3fd5e084f9de8_prof);

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
