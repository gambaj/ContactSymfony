<?php

/* ::base.html.twig */
class __TwigTemplate_73f1f1b92c67ac0f0ed02fe566e15cdf3f489fb33f42cb45ab9187da2e0eb790 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ef586dc5369fba4acf946480d73f8d34821121ea4df792c9dd7ed612acf5ba4 = $this->env->getExtension("native_profiler");
        $__internal_2ef586dc5369fba4acf946480d73f8d34821121ea4df792c9dd7ed612acf5ba4->enter($__internal_2ef586dc5369fba4acf946480d73f8d34821121ea4df792c9dd7ed612acf5ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2ef586dc5369fba4acf946480d73f8d34821121ea4df792c9dd7ed612acf5ba4->leave($__internal_2ef586dc5369fba4acf946480d73f8d34821121ea4df792c9dd7ed612acf5ba4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bd37bbd3031fc897fc4201c695359bca0d29ea4d1b64cdeb9d3e0226298ae80 = $this->env->getExtension("native_profiler");
        $__internal_9bd37bbd3031fc897fc4201c695359bca0d29ea4d1b64cdeb9d3e0226298ae80->enter($__internal_9bd37bbd3031fc897fc4201c695359bca0d29ea4d1b64cdeb9d3e0226298ae80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9bd37bbd3031fc897fc4201c695359bca0d29ea4d1b64cdeb9d3e0226298ae80->leave($__internal_9bd37bbd3031fc897fc4201c695359bca0d29ea4d1b64cdeb9d3e0226298ae80_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f215ec8749060938897555d0952b284a958f6e882c74cd3c8032eddfa914298 = $this->env->getExtension("native_profiler");
        $__internal_5f215ec8749060938897555d0952b284a958f6e882c74cd3c8032eddfa914298->enter($__internal_5f215ec8749060938897555d0952b284a958f6e882c74cd3c8032eddfa914298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5f215ec8749060938897555d0952b284a958f6e882c74cd3c8032eddfa914298->leave($__internal_5f215ec8749060938897555d0952b284a958f6e882c74cd3c8032eddfa914298_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0d1311272c8b1e9509dc3ffe8a5cf7f915768896e598e1e51bb6a8406647c5b = $this->env->getExtension("native_profiler");
        $__internal_f0d1311272c8b1e9509dc3ffe8a5cf7f915768896e598e1e51bb6a8406647c5b->enter($__internal_f0d1311272c8b1e9509dc3ffe8a5cf7f915768896e598e1e51bb6a8406647c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f0d1311272c8b1e9509dc3ffe8a5cf7f915768896e598e1e51bb6a8406647c5b->leave($__internal_f0d1311272c8b1e9509dc3ffe8a5cf7f915768896e598e1e51bb6a8406647c5b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a3b9d8d769664541bba48470aa55eae838b089b9dde155fb9c6d00cf04b96216 = $this->env->getExtension("native_profiler");
        $__internal_a3b9d8d769664541bba48470aa55eae838b089b9dde155fb9c6d00cf04b96216->enter($__internal_a3b9d8d769664541bba48470aa55eae838b089b9dde155fb9c6d00cf04b96216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a3b9d8d769664541bba48470aa55eae838b089b9dde155fb9c6d00cf04b96216->leave($__internal_a3b9d8d769664541bba48470aa55eae838b089b9dde155fb9c6d00cf04b96216_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
