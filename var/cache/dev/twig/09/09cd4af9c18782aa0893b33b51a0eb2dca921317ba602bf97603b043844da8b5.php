<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_0194aac480559d6a676a04d9d60c084afc0c55403859882a9ee4424ac0be9292 extends Twig_Template
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
        $__internal_82f3676842b54c1947b5ea84a705efa22e8f4952d9c9c8944144a30e2e1097a8 = $this->env->getExtension("native_profiler");
        $__internal_82f3676842b54c1947b5ea84a705efa22e8f4952d9c9c8944144a30e2e1097a8->enter($__internal_82f3676842b54c1947b5ea84a705efa22e8f4952d9c9c8944144a30e2e1097a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_82f3676842b54c1947b5ea84a705efa22e8f4952d9c9c8944144a30e2e1097a8->leave($__internal_82f3676842b54c1947b5ea84a705efa22e8f4952d9c9c8944144a30e2e1097a8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
