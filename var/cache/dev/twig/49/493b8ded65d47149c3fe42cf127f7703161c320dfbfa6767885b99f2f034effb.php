<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_76600b82fd8637e9dc88a6830a245a7dc5e3af68a2c0ad8651f9a12b0c5ff269 extends Twig_Template
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
        $__internal_ad17d71ae8a1d20d42635c8664efed005e2ea549e140cd49b6c7c58a64708608 = $this->env->getExtension("native_profiler");
        $__internal_ad17d71ae8a1d20d42635c8664efed005e2ea549e140cd49b6c7c58a64708608->enter($__internal_ad17d71ae8a1d20d42635c8664efed005e2ea549e140cd49b6c7c58a64708608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ad17d71ae8a1d20d42635c8664efed005e2ea549e140cd49b6c7c58a64708608->leave($__internal_ad17d71ae8a1d20d42635c8664efed005e2ea549e140cd49b6c7c58a64708608_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
