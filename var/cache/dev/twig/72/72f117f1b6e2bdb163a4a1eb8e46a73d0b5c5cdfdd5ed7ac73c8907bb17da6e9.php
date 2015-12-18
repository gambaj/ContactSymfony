<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0148fd12307079d5486f5276cef436ab894cf091d1bdd0efb3770588fee435b4 extends Twig_Template
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
        $__internal_77c3d19bc1942767b7b103ba9e6be5f0e2980225298696358dc6b8c803bb3e48 = $this->env->getExtension("native_profiler");
        $__internal_77c3d19bc1942767b7b103ba9e6be5f0e2980225298696358dc6b8c803bb3e48->enter($__internal_77c3d19bc1942767b7b103ba9e6be5f0e2980225298696358dc6b8c803bb3e48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_77c3d19bc1942767b7b103ba9e6be5f0e2980225298696358dc6b8c803bb3e48->leave($__internal_77c3d19bc1942767b7b103ba9e6be5f0e2980225298696358dc6b8c803bb3e48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
