<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1decf104386f291e39a98fb93a0a6b8df4e930278dc6c394bb7db46c113db8d5 extends Twig_Template
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
        $__internal_24593fbe8a7fd6d05b93a91c5e2d2f1e29c95d7a1b5b66a051a7eda42b1b7687 = $this->env->getExtension("native_profiler");
        $__internal_24593fbe8a7fd6d05b93a91c5e2d2f1e29c95d7a1b5b66a051a7eda42b1b7687->enter($__internal_24593fbe8a7fd6d05b93a91c5e2d2f1e29c95d7a1b5b66a051a7eda42b1b7687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_24593fbe8a7fd6d05b93a91c5e2d2f1e29c95d7a1b5b66a051a7eda42b1b7687->leave($__internal_24593fbe8a7fd6d05b93a91c5e2d2f1e29c95d7a1b5b66a051a7eda42b1b7687_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
