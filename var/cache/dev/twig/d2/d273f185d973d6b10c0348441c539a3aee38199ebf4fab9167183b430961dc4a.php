<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_51a51ea3d9973a475385cfd860651c5478d595ba2f77d3ce7f2238167543a0cd extends Twig_Template
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
        $__internal_a72c806908e7e4b49539dc5e9bacefd2ba5aed580567a4ee75ccd183a6fd1656 = $this->env->getExtension("native_profiler");
        $__internal_a72c806908e7e4b49539dc5e9bacefd2ba5aed580567a4ee75ccd183a6fd1656->enter($__internal_a72c806908e7e4b49539dc5e9bacefd2ba5aed580567a4ee75ccd183a6fd1656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_a72c806908e7e4b49539dc5e9bacefd2ba5aed580567a4ee75ccd183a6fd1656->leave($__internal_a72c806908e7e4b49539dc5e9bacefd2ba5aed580567a4ee75ccd183a6fd1656_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
