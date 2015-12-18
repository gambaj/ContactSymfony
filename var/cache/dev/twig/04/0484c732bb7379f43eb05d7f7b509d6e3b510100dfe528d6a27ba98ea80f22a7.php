<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c7abd093ecc45779a5798a74f85200d16cd5ff0635b5cc062ed07b870edfba75 extends Twig_Template
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
        $__internal_767a7a5108a7456cacedddff4a7c094e7beb9a1e97aa8731fc8cf638266150f4 = $this->env->getExtension("native_profiler");
        $__internal_767a7a5108a7456cacedddff4a7c094e7beb9a1e97aa8731fc8cf638266150f4->enter($__internal_767a7a5108a7456cacedddff4a7c094e7beb9a1e97aa8731fc8cf638266150f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_767a7a5108a7456cacedddff4a7c094e7beb9a1e97aa8731fc8cf638266150f4->leave($__internal_767a7a5108a7456cacedddff4a7c094e7beb9a1e97aa8731fc8cf638266150f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
