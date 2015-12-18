<?php

/* AppBundle:Contact:new.html.twig */
class __TwigTemplate_736e55e77eed583352adb625d72bca1e7048d9c49cde37fa1cf82bdc239fc812 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Contact:new.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7449be142157c0974aeb607225ee585c0efcf6b6c503f1e56e9853c6d333f3be = $this->env->getExtension("native_profiler");
        $__internal_7449be142157c0974aeb607225ee585c0efcf6b6c503f1e56e9853c6d333f3be->enter($__internal_7449be142157c0974aeb607225ee585c0efcf6b6c503f1e56e9853c6d333f3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Contact:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7449be142157c0974aeb607225ee585c0efcf6b6c503f1e56e9853c6d333f3be->leave($__internal_7449be142157c0974aeb607225ee585c0efcf6b6c503f1e56e9853c6d333f3be_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_b7931b99018dba2b9527c3181a3172f6745c5109e566ef2901c25792e2e8a810 = $this->env->getExtension("native_profiler");
        $__internal_b7931b99018dba2b9527c3181a3172f6745c5109e566ef2901c25792e2e8a810->enter($__internal_b7931b99018dba2b9527c3181a3172f6745c5109e566ef2901c25792e2e8a810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "    <h1>Ajouter nouveau contact</h1>

    <div class=\"centre\">
        <div class=\"description\">
            <h2>Ajouter nouveau contact</h2>
            <p><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("contact_index");
        echo "\">Liste de contact</a></p>
        </div>
    </div>

    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_b7931b99018dba2b9527c3181a3172f6745c5109e566ef2901c25792e2e8a810->leave($__internal_b7931b99018dba2b9527c3181a3172f6745c5109e566ef2901c25792e2e8a810_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Contact:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  58 => 14,  54 => 13,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block container %}*/
/*     <h1>Ajouter nouveau contact</h1>*/
/* */
/*     <div class="centre">*/
/*         <div class="description">*/
/*             <h2>Ajouter nouveau contact</h2>*/
/*             <p><a href="{{ path('contact_index') }}">Liste de contact</a></p>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
