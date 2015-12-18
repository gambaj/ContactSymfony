<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_9a69229ed1728fb4c85b8b3bb4793a3269fb2c4f6dafa80e3eb8a35261c3e331 extends Twig_Template
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
        $__internal_c994b642a45249e5b6e624f044ef0db81a7203d024f85b1ff7258f47326032be = $this->env->getExtension("native_profiler");
        $__internal_c994b642a45249e5b6e624f044ef0db81a7203d024f85b1ff7258f47326032be->enter($__internal_c994b642a45249e5b6e624f044ef0db81a7203d024f85b1ff7258f47326032be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c994b642a45249e5b6e624f044ef0db81a7203d024f85b1ff7258f47326032be->leave($__internal_c994b642a45249e5b6e624f044ef0db81a7203d024f85b1ff7258f47326032be_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
