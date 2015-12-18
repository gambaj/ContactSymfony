<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f52af543a30d76c1e5d2b828f041de00d1ff615d4865fd4a90369b85a04fffbc extends Twig_Template
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
        $__internal_99a19c0a5ad229d10bfc8f4594ee66ff82dc86661122f150dd3a76541a327c22 = $this->env->getExtension("native_profiler");
        $__internal_99a19c0a5ad229d10bfc8f4594ee66ff82dc86661122f150dd3a76541a327c22->enter($__internal_99a19c0a5ad229d10bfc8f4594ee66ff82dc86661122f150dd3a76541a327c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_99a19c0a5ad229d10bfc8f4594ee66ff82dc86661122f150dd3a76541a327c22->leave($__internal_99a19c0a5ad229d10bfc8f4594ee66ff82dc86661122f150dd3a76541a327c22_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
