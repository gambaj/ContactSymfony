<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_04aa9b5f85bba2ef6afe9d10e168fb70726562868091c49cf2dbc800a9e71ae5 extends Twig_Template
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
        $__internal_163364f6e168eb019320c41df0b6759d570384355cb318f11ffe4b9b03f4b2d0 = $this->env->getExtension("native_profiler");
        $__internal_163364f6e168eb019320c41df0b6759d570384355cb318f11ffe4b9b03f4b2d0->enter($__internal_163364f6e168eb019320c41df0b6759d570384355cb318f11ffe4b9b03f4b2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_163364f6e168eb019320c41df0b6759d570384355cb318f11ffe4b9b03f4b2d0->leave($__internal_163364f6e168eb019320c41df0b6759d570384355cb318f11ffe4b9b03f4b2d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
