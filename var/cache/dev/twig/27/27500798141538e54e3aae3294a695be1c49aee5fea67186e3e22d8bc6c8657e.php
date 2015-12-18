<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_9fc1b5876617e16486fc0d8dbbde16759e76c02898ab0d629e83f70e05251526 extends Twig_Template
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
        $__internal_3641c3b1e3490d42546d84cf93913a33f75aeecc466cf1c43316a71e57812ffa = $this->env->getExtension("native_profiler");
        $__internal_3641c3b1e3490d42546d84cf93913a33f75aeecc466cf1c43316a71e57812ffa->enter($__internal_3641c3b1e3490d42546d84cf93913a33f75aeecc466cf1c43316a71e57812ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3641c3b1e3490d42546d84cf93913a33f75aeecc466cf1c43316a71e57812ffa->leave($__internal_3641c3b1e3490d42546d84cf93913a33f75aeecc466cf1c43316a71e57812ffa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
