<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_49f457d384539a478fc890a506945340ba30d583ce87f0853190ebe3f810a1fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca60e077f3cf9ecfc9499f820d4cd38f7cb2ff961dd062f9489b8fd4fd2f93a7 = $this->env->getExtension("native_profiler");
        $__internal_ca60e077f3cf9ecfc9499f820d4cd38f7cb2ff961dd062f9489b8fd4fd2f93a7->enter($__internal_ca60e077f3cf9ecfc9499f820d4cd38f7cb2ff961dd062f9489b8fd4fd2f93a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca60e077f3cf9ecfc9499f820d4cd38f7cb2ff961dd062f9489b8fd4fd2f93a7->leave($__internal_ca60e077f3cf9ecfc9499f820d4cd38f7cb2ff961dd062f9489b8fd4fd2f93a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8d7091c628f8e98b78facd5d78c72110f91bde2895786cfec67d465e5ff38424 = $this->env->getExtension("native_profiler");
        $__internal_8d7091c628f8e98b78facd5d78c72110f91bde2895786cfec67d465e5ff38424->enter($__internal_8d7091c628f8e98b78facd5d78c72110f91bde2895786cfec67d465e5ff38424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8d7091c628f8e98b78facd5d78c72110f91bde2895786cfec67d465e5ff38424->leave($__internal_8d7091c628f8e98b78facd5d78c72110f91bde2895786cfec67d465e5ff38424_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4324f4cede63fbb22265ddaa722cd7fce45fc57334844cb2f249c936a70f1dfb = $this->env->getExtension("native_profiler");
        $__internal_4324f4cede63fbb22265ddaa722cd7fce45fc57334844cb2f249c936a70f1dfb->enter($__internal_4324f4cede63fbb22265ddaa722cd7fce45fc57334844cb2f249c936a70f1dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4324f4cede63fbb22265ddaa722cd7fce45fc57334844cb2f249c936a70f1dfb->leave($__internal_4324f4cede63fbb22265ddaa722cd7fce45fc57334844cb2f249c936a70f1dfb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d6936ebc1ee424850e4a5b8bddc54e4a650d81c79a04a167470c8ebc1ab2304 = $this->env->getExtension("native_profiler");
        $__internal_5d6936ebc1ee424850e4a5b8bddc54e4a650d81c79a04a167470c8ebc1ab2304->enter($__internal_5d6936ebc1ee424850e4a5b8bddc54e4a650d81c79a04a167470c8ebc1ab2304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5d6936ebc1ee424850e4a5b8bddc54e4a650d81c79a04a167470c8ebc1ab2304->leave($__internal_5d6936ebc1ee424850e4a5b8bddc54e4a650d81c79a04a167470c8ebc1ab2304_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
