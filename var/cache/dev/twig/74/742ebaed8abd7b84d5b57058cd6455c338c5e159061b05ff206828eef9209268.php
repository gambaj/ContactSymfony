<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_48363fdeaf543a80eba7aa86f1a330e18919baba2acd53f808268a6317e84795 extends Twig_Template
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
        $__internal_b37b670a779179c13531f3d7f8d1b53c4464581b91680a5b043adcf07c6eb5de = $this->env->getExtension("native_profiler");
        $__internal_b37b670a779179c13531f3d7f8d1b53c4464581b91680a5b043adcf07c6eb5de->enter($__internal_b37b670a779179c13531f3d7f8d1b53c4464581b91680a5b043adcf07c6eb5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b37b670a779179c13531f3d7f8d1b53c4464581b91680a5b043adcf07c6eb5de->leave($__internal_b37b670a779179c13531f3d7f8d1b53c4464581b91680a5b043adcf07c6eb5de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
