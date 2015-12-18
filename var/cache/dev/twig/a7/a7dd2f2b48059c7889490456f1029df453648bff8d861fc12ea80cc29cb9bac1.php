<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_5ebd6d3d8bbc379424e5e503e807098a8db11b52670f11c5cd0bd53796448479 extends Twig_Template
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
        $__internal_e8f7f2233f330ee1710229b64ec2b056e8e0066e1d6424c35c48fa3afa071417 = $this->env->getExtension("native_profiler");
        $__internal_e8f7f2233f330ee1710229b64ec2b056e8e0066e1d6424c35c48fa3afa071417->enter($__internal_e8f7f2233f330ee1710229b64ec2b056e8e0066e1d6424c35c48fa3afa071417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e8f7f2233f330ee1710229b64ec2b056e8e0066e1d6424c35c48fa3afa071417->leave($__internal_e8f7f2233f330ee1710229b64ec2b056e8e0066e1d6424c35c48fa3afa071417_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
