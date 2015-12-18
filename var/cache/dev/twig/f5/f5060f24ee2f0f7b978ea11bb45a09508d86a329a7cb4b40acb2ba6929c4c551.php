<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_05ae5c5f72a84230d7022acf3fb9637b92a2cb93ec92845e473059402638558e extends Twig_Template
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
        $__internal_f5972c9e15706faa7bb3fbc9d28b8493e46f5d3fbeb72581b1e0b9eb2fc878b8 = $this->env->getExtension("native_profiler");
        $__internal_f5972c9e15706faa7bb3fbc9d28b8493e46f5d3fbeb72581b1e0b9eb2fc878b8->enter($__internal_f5972c9e15706faa7bb3fbc9d28b8493e46f5d3fbeb72581b1e0b9eb2fc878b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f5972c9e15706faa7bb3fbc9d28b8493e46f5d3fbeb72581b1e0b9eb2fc878b8->leave($__internal_f5972c9e15706faa7bb3fbc9d28b8493e46f5d3fbeb72581b1e0b9eb2fc878b8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
