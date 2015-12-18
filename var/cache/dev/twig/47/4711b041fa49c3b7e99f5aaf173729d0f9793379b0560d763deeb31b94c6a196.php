<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_e9d0e5b5c1205851f01517c3b20434911e51e17f84b40d86d684eb72ccfea0a7 extends Twig_Template
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
        $__internal_6d38f5d6902fdef873ee006742e7cc830edb2d1f64361c1e93fef694f8486aee = $this->env->getExtension("native_profiler");
        $__internal_6d38f5d6902fdef873ee006742e7cc830edb2d1f64361c1e93fef694f8486aee->enter($__internal_6d38f5d6902fdef873ee006742e7cc830edb2d1f64361c1e93fef694f8486aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6d38f5d6902fdef873ee006742e7cc830edb2d1f64361c1e93fef694f8486aee->leave($__internal_6d38f5d6902fdef873ee006742e7cc830edb2d1f64361c1e93fef694f8486aee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
