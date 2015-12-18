<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1a8d8def9bf8d545d7bc2ec1f4f84b20ef040ee5e5c8af860a800d5944242c0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_feadadd487bcf7bbaf62714a3a7304e0f0d860f7938f8a8024a0115d02716340 = $this->env->getExtension("native_profiler");
        $__internal_feadadd487bcf7bbaf62714a3a7304e0f0d860f7938f8a8024a0115d02716340->enter($__internal_feadadd487bcf7bbaf62714a3a7304e0f0d860f7938f8a8024a0115d02716340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feadadd487bcf7bbaf62714a3a7304e0f0d860f7938f8a8024a0115d02716340->leave($__internal_feadadd487bcf7bbaf62714a3a7304e0f0d860f7938f8a8024a0115d02716340_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdd3271e26bc1a79f30fbfe3008aaab465489d71c2f2f1692568e596438b8981 = $this->env->getExtension("native_profiler");
        $__internal_fdd3271e26bc1a79f30fbfe3008aaab465489d71c2f2f1692568e596438b8981->enter($__internal_fdd3271e26bc1a79f30fbfe3008aaab465489d71c2f2f1692568e596438b8981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fdd3271e26bc1a79f30fbfe3008aaab465489d71c2f2f1692568e596438b8981->leave($__internal_fdd3271e26bc1a79f30fbfe3008aaab465489d71c2f2f1692568e596438b8981_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c50b1cc066bc08c65c05a0815d52121328b155c4660a40762c40093988309c51 = $this->env->getExtension("native_profiler");
        $__internal_c50b1cc066bc08c65c05a0815d52121328b155c4660a40762c40093988309c51->enter($__internal_c50b1cc066bc08c65c05a0815d52121328b155c4660a40762c40093988309c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c50b1cc066bc08c65c05a0815d52121328b155c4660a40762c40093988309c51->leave($__internal_c50b1cc066bc08c65c05a0815d52121328b155c4660a40762c40093988309c51_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
