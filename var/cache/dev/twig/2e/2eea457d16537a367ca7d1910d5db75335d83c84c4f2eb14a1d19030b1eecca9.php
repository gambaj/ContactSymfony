<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_0e71d49493cd2eda20ca47251756341c38989d0ad504b8b706bb6e68d163ff76 extends Twig_Template
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
        $__internal_ef912bfde29d105b9da501f822664c148c99c5056dd53cd6c9876d5384d1c34e = $this->env->getExtension("native_profiler");
        $__internal_ef912bfde29d105b9da501f822664c148c99c5056dd53cd6c9876d5384d1c34e->enter($__internal_ef912bfde29d105b9da501f822664c148c99c5056dd53cd6c9876d5384d1c34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ef912bfde29d105b9da501f822664c148c99c5056dd53cd6c9876d5384d1c34e->leave($__internal_ef912bfde29d105b9da501f822664c148c99c5056dd53cd6c9876d5384d1c34e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
