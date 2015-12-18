<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_4b9e6a79f42e75747250c597002d028cdc2a630c1fba51403efb17dd39e45bb1 extends Twig_Template
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
        $__internal_23606942352c1bcb4f81625561b743f054f15351d95c70a9f78b13c5a2d50f20 = $this->env->getExtension("native_profiler");
        $__internal_23606942352c1bcb4f81625561b743f054f15351d95c70a9f78b13c5a2d50f20->enter($__internal_23606942352c1bcb4f81625561b743f054f15351d95c70a9f78b13c5a2d50f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_23606942352c1bcb4f81625561b743f054f15351d95c70a9f78b13c5a2d50f20->leave($__internal_23606942352c1bcb4f81625561b743f054f15351d95c70a9f78b13c5a2d50f20_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
