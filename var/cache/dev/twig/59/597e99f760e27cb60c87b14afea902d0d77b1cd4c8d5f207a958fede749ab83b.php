<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_79df3b221c7defcab23d327086c9e5ae7dfd240559b68b61d922c5a43fc902bd extends Twig_Template
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
        $__internal_d950be869f1c664c487feeb578d8aef42e25237e2a44444ce7a82955257e3a6e = $this->env->getExtension("native_profiler");
        $__internal_d950be869f1c664c487feeb578d8aef42e25237e2a44444ce7a82955257e3a6e->enter($__internal_d950be869f1c664c487feeb578d8aef42e25237e2a44444ce7a82955257e3a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d950be869f1c664c487feeb578d8aef42e25237e2a44444ce7a82955257e3a6e->leave($__internal_d950be869f1c664c487feeb578d8aef42e25237e2a44444ce7a82955257e3a6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
