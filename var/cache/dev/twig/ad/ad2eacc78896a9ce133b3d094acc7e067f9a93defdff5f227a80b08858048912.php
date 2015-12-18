<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0cc44c56f25d5f9a061128ce35ee9d21b5c7b2ff9e14ab513295875f78ecde53 extends Twig_Template
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
        $__internal_4d354908b9000166b8cd36edf1c7f249bd7a8542e6226698fbd28b629b68f30d = $this->env->getExtension("native_profiler");
        $__internal_4d354908b9000166b8cd36edf1c7f249bd7a8542e6226698fbd28b629b68f30d->enter($__internal_4d354908b9000166b8cd36edf1c7f249bd7a8542e6226698fbd28b629b68f30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4d354908b9000166b8cd36edf1c7f249bd7a8542e6226698fbd28b629b68f30d->leave($__internal_4d354908b9000166b8cd36edf1c7f249bd7a8542e6226698fbd28b629b68f30d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
