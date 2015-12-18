<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_5b1082594238be84aa52823bf40449093112e0a6bc5c1ffd15b200d0b7990622 extends Twig_Template
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
        $__internal_2792eafe770272d80b289b5a04ad442b98513f29c83706ffcbc62efebfb360ef = $this->env->getExtension("native_profiler");
        $__internal_2792eafe770272d80b289b5a04ad442b98513f29c83706ffcbc62efebfb360ef->enter($__internal_2792eafe770272d80b289b5a04ad442b98513f29c83706ffcbc62efebfb360ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2792eafe770272d80b289b5a04ad442b98513f29c83706ffcbc62efebfb360ef->leave($__internal_2792eafe770272d80b289b5a04ad442b98513f29c83706ffcbc62efebfb360ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
