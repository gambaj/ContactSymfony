<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_0fe1e9750e9052564e2ac232851290f252d00a06f297b97be1bcf8f17f70fc3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93193c54c2558b16af37a4e0213a650c64645e216ec4cfc9a45f92fa304a5f47 = $this->env->getExtension("native_profiler");
        $__internal_93193c54c2558b16af37a4e0213a650c64645e216ec4cfc9a45f92fa304a5f47->enter($__internal_93193c54c2558b16af37a4e0213a650c64645e216ec4cfc9a45f92fa304a5f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_93193c54c2558b16af37a4e0213a650c64645e216ec4cfc9a45f92fa304a5f47->leave($__internal_93193c54c2558b16af37a4e0213a650c64645e216ec4cfc9a45f92fa304a5f47_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0785a3c84ea05fa837cd6d6c03fca4baf19ba93012b5114fc559e5d26e28ecb1 = $this->env->getExtension("native_profiler");
        $__internal_0785a3c84ea05fa837cd6d6c03fca4baf19ba93012b5114fc559e5d26e28ecb1->enter($__internal_0785a3c84ea05fa837cd6d6c03fca4baf19ba93012b5114fc559e5d26e28ecb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0785a3c84ea05fa837cd6d6c03fca4baf19ba93012b5114fc559e5d26e28ecb1->leave($__internal_0785a3c84ea05fa837cd6d6c03fca4baf19ba93012b5114fc559e5d26e28ecb1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
