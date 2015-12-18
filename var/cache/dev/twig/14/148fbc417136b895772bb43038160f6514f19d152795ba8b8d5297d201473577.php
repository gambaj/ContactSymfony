<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_2bbb65896a20541c9b372fedfdabbfa6b68d10fdee145f8243acd47def2c61f3 extends Twig_Template
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
        $__internal_cd95b5db6b11f7557d1097accade4967567f2ab479354ef17d97ddcc69da45ce = $this->env->getExtension("native_profiler");
        $__internal_cd95b5db6b11f7557d1097accade4967567f2ab479354ef17d97ddcc69da45ce->enter($__internal_cd95b5db6b11f7557d1097accade4967567f2ab479354ef17d97ddcc69da45ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_cd95b5db6b11f7557d1097accade4967567f2ab479354ef17d97ddcc69da45ce->leave($__internal_cd95b5db6b11f7557d1097accade4967567f2ab479354ef17d97ddcc69da45ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
