<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d402c1fc03e3febcad809d8e09547e5cf3c8a0c3e47f41e2acdee9130dd88c5f extends Twig_Template
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
        $__internal_97fddc1ee2c78ddc0a4f1da0bea225baacc9a3eb32f7248a0452c470a079fd8b = $this->env->getExtension("native_profiler");
        $__internal_97fddc1ee2c78ddc0a4f1da0bea225baacc9a3eb32f7248a0452c470a079fd8b->enter($__internal_97fddc1ee2c78ddc0a4f1da0bea225baacc9a3eb32f7248a0452c470a079fd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_97fddc1ee2c78ddc0a4f1da0bea225baacc9a3eb32f7248a0452c470a079fd8b->leave($__internal_97fddc1ee2c78ddc0a4f1da0bea225baacc9a3eb32f7248a0452c470a079fd8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
