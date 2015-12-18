<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_7e91f887eba90a5a0ad7fc39a204aea8d33e679c8546dd66aabcbd046f30e4ef extends Twig_Template
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
        $__internal_88818adeec058e2a30b463dc24abd8d296478f68ecd5312982a071feb65da81a = $this->env->getExtension("native_profiler");
        $__internal_88818adeec058e2a30b463dc24abd8d296478f68ecd5312982a071feb65da81a->enter($__internal_88818adeec058e2a30b463dc24abd8d296478f68ecd5312982a071feb65da81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_88818adeec058e2a30b463dc24abd8d296478f68ecd5312982a071feb65da81a->leave($__internal_88818adeec058e2a30b463dc24abd8d296478f68ecd5312982a071feb65da81a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
