<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_27ed2f74ba0596d9aadbfd89062e2704a5b89ae0a5b1254e84af8d570edca20d extends Twig_Template
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
        $__internal_7a33ac676a1bbd3a5958691815d194a913647348e34dce6ca25f40e31a9495e5 = $this->env->getExtension("native_profiler");
        $__internal_7a33ac676a1bbd3a5958691815d194a913647348e34dce6ca25f40e31a9495e5->enter($__internal_7a33ac676a1bbd3a5958691815d194a913647348e34dce6ca25f40e31a9495e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7a33ac676a1bbd3a5958691815d194a913647348e34dce6ca25f40e31a9495e5->leave($__internal_7a33ac676a1bbd3a5958691815d194a913647348e34dce6ca25f40e31a9495e5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
