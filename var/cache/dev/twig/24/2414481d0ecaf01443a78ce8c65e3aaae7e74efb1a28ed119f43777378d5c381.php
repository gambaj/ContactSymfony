<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2b82bd7ac8e272e7a40a3ba1b9ab5ef0ed77b59a4f09e45f78c223c370b05d7d extends Twig_Template
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
        $__internal_46036394553be7ad3596aff8b9521d2d5a83834e767eafc56165562073ee64fc = $this->env->getExtension("native_profiler");
        $__internal_46036394553be7ad3596aff8b9521d2d5a83834e767eafc56165562073ee64fc->enter($__internal_46036394553be7ad3596aff8b9521d2d5a83834e767eafc56165562073ee64fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_46036394553be7ad3596aff8b9521d2d5a83834e767eafc56165562073ee64fc->leave($__internal_46036394553be7ad3596aff8b9521d2d5a83834e767eafc56165562073ee64fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
