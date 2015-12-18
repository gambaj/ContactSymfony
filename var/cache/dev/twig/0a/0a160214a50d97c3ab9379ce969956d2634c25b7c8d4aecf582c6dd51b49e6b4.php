<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_04606684b8cdac54cafaf3f50bb8c60e61d649967556b5cda6bf1a562b596575 extends Twig_Template
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
        $__internal_9dc8b2baeaf137e39f7a572cdd5eceeecf9e3179cddb5aa2abd995ee3871d818 = $this->env->getExtension("native_profiler");
        $__internal_9dc8b2baeaf137e39f7a572cdd5eceeecf9e3179cddb5aa2abd995ee3871d818->enter($__internal_9dc8b2baeaf137e39f7a572cdd5eceeecf9e3179cddb5aa2abd995ee3871d818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9dc8b2baeaf137e39f7a572cdd5eceeecf9e3179cddb5aa2abd995ee3871d818->leave($__internal_9dc8b2baeaf137e39f7a572cdd5eceeecf9e3179cddb5aa2abd995ee3871d818_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
