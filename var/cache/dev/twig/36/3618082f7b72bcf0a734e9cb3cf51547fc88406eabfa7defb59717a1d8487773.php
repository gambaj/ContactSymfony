<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_11a0dc3cf573c7983b481fbe6b0482233cc9a7f2dbdecc5bdd1f8ea2a6beb332 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_15d090fc803034206361dad7a29f31b3f747a58de7c6a0ec467fa6389b14623b = $this->env->getExtension("native_profiler");
        $__internal_15d090fc803034206361dad7a29f31b3f747a58de7c6a0ec467fa6389b14623b->enter($__internal_15d090fc803034206361dad7a29f31b3f747a58de7c6a0ec467fa6389b14623b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15d090fc803034206361dad7a29f31b3f747a58de7c6a0ec467fa6389b14623b->leave($__internal_15d090fc803034206361dad7a29f31b3f747a58de7c6a0ec467fa6389b14623b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_887f0dfb81c91e06fac28da652051e39773a419c6b82985a3e9c0262e0fdc093 = $this->env->getExtension("native_profiler");
        $__internal_887f0dfb81c91e06fac28da652051e39773a419c6b82985a3e9c0262e0fdc093->enter($__internal_887f0dfb81c91e06fac28da652051e39773a419c6b82985a3e9c0262e0fdc093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_887f0dfb81c91e06fac28da652051e39773a419c6b82985a3e9c0262e0fdc093->leave($__internal_887f0dfb81c91e06fac28da652051e39773a419c6b82985a3e9c0262e0fdc093_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7916628604a5e7f4b913e307384400e8cc559d534dcd6571a0892e2522d316b1 = $this->env->getExtension("native_profiler");
        $__internal_7916628604a5e7f4b913e307384400e8cc559d534dcd6571a0892e2522d316b1->enter($__internal_7916628604a5e7f4b913e307384400e8cc559d534dcd6571a0892e2522d316b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7916628604a5e7f4b913e307384400e8cc559d534dcd6571a0892e2522d316b1->leave($__internal_7916628604a5e7f4b913e307384400e8cc559d534dcd6571a0892e2522d316b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_49bb971a34cccf7c174b1d126ac3a4cedc1424fa95e7618ed5e44cb88cddfbb3 = $this->env->getExtension("native_profiler");
        $__internal_49bb971a34cccf7c174b1d126ac3a4cedc1424fa95e7618ed5e44cb88cddfbb3->enter($__internal_49bb971a34cccf7c174b1d126ac3a4cedc1424fa95e7618ed5e44cb88cddfbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_49bb971a34cccf7c174b1d126ac3a4cedc1424fa95e7618ed5e44cb88cddfbb3->leave($__internal_49bb971a34cccf7c174b1d126ac3a4cedc1424fa95e7618ed5e44cb88cddfbb3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
