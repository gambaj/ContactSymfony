<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_63c63af3eb68efd225f90b918ae1ecf7b315b12fb4712efeb2b5a5e36c60af5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_fe3b5ff47a9676ea64c6bc3d6105a11d5cd3b9087b55223dbfd211a504d3628e = $this->env->getExtension("native_profiler");
        $__internal_fe3b5ff47a9676ea64c6bc3d6105a11d5cd3b9087b55223dbfd211a504d3628e->enter($__internal_fe3b5ff47a9676ea64c6bc3d6105a11d5cd3b9087b55223dbfd211a504d3628e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe3b5ff47a9676ea64c6bc3d6105a11d5cd3b9087b55223dbfd211a504d3628e->leave($__internal_fe3b5ff47a9676ea64c6bc3d6105a11d5cd3b9087b55223dbfd211a504d3628e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89515507fe8536c2d02ebb02dd9f4640a28154b1806cdbb48328634c1055cac9 = $this->env->getExtension("native_profiler");
        $__internal_89515507fe8536c2d02ebb02dd9f4640a28154b1806cdbb48328634c1055cac9->enter($__internal_89515507fe8536c2d02ebb02dd9f4640a28154b1806cdbb48328634c1055cac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_89515507fe8536c2d02ebb02dd9f4640a28154b1806cdbb48328634c1055cac9->leave($__internal_89515507fe8536c2d02ebb02dd9f4640a28154b1806cdbb48328634c1055cac9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ef15ff98f594220e05af737016a4f6d263bf6def4fd1b596c9ed9e61c4b340c = $this->env->getExtension("native_profiler");
        $__internal_7ef15ff98f594220e05af737016a4f6d263bf6def4fd1b596c9ed9e61c4b340c->enter($__internal_7ef15ff98f594220e05af737016a4f6d263bf6def4fd1b596c9ed9e61c4b340c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7ef15ff98f594220e05af737016a4f6d263bf6def4fd1b596c9ed9e61c4b340c->leave($__internal_7ef15ff98f594220e05af737016a4f6d263bf6def4fd1b596c9ed9e61c4b340c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
