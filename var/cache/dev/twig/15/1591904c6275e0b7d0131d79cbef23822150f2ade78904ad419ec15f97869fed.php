<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_3f96221ff4a55c61d75445b00851f767267e55541507f3a95eb97122b1d75d96 extends Twig_Template
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
        $__internal_2050fb8dfcf0d506a66691bd3ec3a93ef346c1cf37ace9ff4f056dde9769804b = $this->env->getExtension("native_profiler");
        $__internal_2050fb8dfcf0d506a66691bd3ec3a93ef346c1cf37ace9ff4f056dde9769804b->enter($__internal_2050fb8dfcf0d506a66691bd3ec3a93ef346c1cf37ace9ff4f056dde9769804b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_2050fb8dfcf0d506a66691bd3ec3a93ef346c1cf37ace9ff4f056dde9769804b->leave($__internal_2050fb8dfcf0d506a66691bd3ec3a93ef346c1cf37ace9ff4f056dde9769804b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
