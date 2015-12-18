<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_b63d198f9f18573f2849b03a3923a4aafa041e331fafdd423ef07907fe5f3bfc extends Twig_Template
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
        $__internal_09b6a945999998cc2bc130ea2e5a605479ce49f86dbc980b700fb811a9b2802c = $this->env->getExtension("native_profiler");
        $__internal_09b6a945999998cc2bc130ea2e5a605479ce49f86dbc980b700fb811a9b2802c->enter($__internal_09b6a945999998cc2bc130ea2e5a605479ce49f86dbc980b700fb811a9b2802c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_09b6a945999998cc2bc130ea2e5a605479ce49f86dbc980b700fb811a9b2802c->leave($__internal_09b6a945999998cc2bc130ea2e5a605479ce49f86dbc980b700fb811a9b2802c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
