<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_2e84b08a2babd7aafae4bd93f46cf245c0b211c5d92b46a9f2be493944289c87 extends Twig_Template
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
        $__internal_af7b671d203cb15669918117779a5960666167085f358c77970000017dc3f0b9 = $this->env->getExtension("native_profiler");
        $__internal_af7b671d203cb15669918117779a5960666167085f358c77970000017dc3f0b9->enter($__internal_af7b671d203cb15669918117779a5960666167085f358c77970000017dc3f0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_af7b671d203cb15669918117779a5960666167085f358c77970000017dc3f0b9->leave($__internal_af7b671d203cb15669918117779a5960666167085f358c77970000017dc3f0b9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
