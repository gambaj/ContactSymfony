<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_05621938f20aecf22a7f85c0ade23fe6f3a65cf68421a06d17b43eb1168b639e extends Twig_Template
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
        $__internal_43f18b1681aa24e7eeae28c4d23cd661e32f60d35319808b191d7c84af3a9558 = $this->env->getExtension("native_profiler");
        $__internal_43f18b1681aa24e7eeae28c4d23cd661e32f60d35319808b191d7c84af3a9558->enter($__internal_43f18b1681aa24e7eeae28c4d23cd661e32f60d35319808b191d7c84af3a9558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_43f18b1681aa24e7eeae28c4d23cd661e32f60d35319808b191d7c84af3a9558->leave($__internal_43f18b1681aa24e7eeae28c4d23cd661e32f60d35319808b191d7c84af3a9558_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
