<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b7abed7adfaf3df324270caf3621855f55c8a8e99f9c38e0d98c3f5b7cb817de extends Twig_Template
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
        $__internal_028c5a156afa709c040fc06f3e3dde23a4745f701824cd07ca76feca806163c7 = $this->env->getExtension("native_profiler");
        $__internal_028c5a156afa709c040fc06f3e3dde23a4745f701824cd07ca76feca806163c7->enter($__internal_028c5a156afa709c040fc06f3e3dde23a4745f701824cd07ca76feca806163c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_028c5a156afa709c040fc06f3e3dde23a4745f701824cd07ca76feca806163c7->leave($__internal_028c5a156afa709c040fc06f3e3dde23a4745f701824cd07ca76feca806163c7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
