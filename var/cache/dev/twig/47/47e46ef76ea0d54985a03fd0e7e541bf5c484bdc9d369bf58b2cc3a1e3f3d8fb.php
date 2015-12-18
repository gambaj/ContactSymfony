<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_eb7571b407e2f5a17962942ac4e9d37e263df50af0c6fc56a9f2180c8e97c2cf extends Twig_Template
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
        $__internal_9998f9a6bd5f7b296d9009e9df5d372f22fcd265500369d4e388beb7d32e04ab = $this->env->getExtension("native_profiler");
        $__internal_9998f9a6bd5f7b296d9009e9df5d372f22fcd265500369d4e388beb7d32e04ab->enter($__internal_9998f9a6bd5f7b296d9009e9df5d372f22fcd265500369d4e388beb7d32e04ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9998f9a6bd5f7b296d9009e9df5d372f22fcd265500369d4e388beb7d32e04ab->leave($__internal_9998f9a6bd5f7b296d9009e9df5d372f22fcd265500369d4e388beb7d32e04ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
