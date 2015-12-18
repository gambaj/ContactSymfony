<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5fe8cd843c5aa2491e4af1c3b10407c28dfa7ce2f2881e4e378af425afd594b2 extends Twig_Template
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
        $__internal_6eef180fe2fbf1ebc287f6209ef9f003e4717d20c1265bc20f248be9fca1f67e = $this->env->getExtension("native_profiler");
        $__internal_6eef180fe2fbf1ebc287f6209ef9f003e4717d20c1265bc20f248be9fca1f67e->enter($__internal_6eef180fe2fbf1ebc287f6209ef9f003e4717d20c1265bc20f248be9fca1f67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6eef180fe2fbf1ebc287f6209ef9f003e4717d20c1265bc20f248be9fca1f67e->leave($__internal_6eef180fe2fbf1ebc287f6209ef9f003e4717d20c1265bc20f248be9fca1f67e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
