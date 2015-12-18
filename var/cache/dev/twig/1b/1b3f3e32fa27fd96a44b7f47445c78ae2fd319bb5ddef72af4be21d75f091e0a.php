<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_8605ccb6822f4d23ef710e8668085fd2a36433d93474d06c7ad985f20e2820ae extends Twig_Template
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
        $__internal_7fbe9a3ac25dc16e0b97e039294180e3939e1a9f5456ac36338230a9d6117335 = $this->env->getExtension("native_profiler");
        $__internal_7fbe9a3ac25dc16e0b97e039294180e3939e1a9f5456ac36338230a9d6117335->enter($__internal_7fbe9a3ac25dc16e0b97e039294180e3939e1a9f5456ac36338230a9d6117335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7fbe9a3ac25dc16e0b97e039294180e3939e1a9f5456ac36338230a9d6117335->leave($__internal_7fbe9a3ac25dc16e0b97e039294180e3939e1a9f5456ac36338230a9d6117335_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
