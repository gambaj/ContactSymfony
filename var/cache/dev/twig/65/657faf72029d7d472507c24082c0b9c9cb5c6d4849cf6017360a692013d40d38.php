<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_09ee04b77684c11d982c6bbf3bffc0cd5dba436cab402f381defddba852410e8 extends Twig_Template
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
        $__internal_cacb0d4a48b368354ca40415a927bd509e824758761abaa9210458c35a21946d = $this->env->getExtension("native_profiler");
        $__internal_cacb0d4a48b368354ca40415a927bd509e824758761abaa9210458c35a21946d->enter($__internal_cacb0d4a48b368354ca40415a927bd509e824758761abaa9210458c35a21946d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_cacb0d4a48b368354ca40415a927bd509e824758761abaa9210458c35a21946d->leave($__internal_cacb0d4a48b368354ca40415a927bd509e824758761abaa9210458c35a21946d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
