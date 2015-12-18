<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_fa80c093344668bd5b5ef2514a739c7c149ba0ad88472108bd6b9befb5e420ea extends Twig_Template
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
        $__internal_e9baf961fa68952e6da8ec99f1b20cd599fc7d2ce4ad816011b4672b9c1a68cd = $this->env->getExtension("native_profiler");
        $__internal_e9baf961fa68952e6da8ec99f1b20cd599fc7d2ce4ad816011b4672b9c1a68cd->enter($__internal_e9baf961fa68952e6da8ec99f1b20cd599fc7d2ce4ad816011b4672b9c1a68cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e9baf961fa68952e6da8ec99f1b20cd599fc7d2ce4ad816011b4672b9c1a68cd->leave($__internal_e9baf961fa68952e6da8ec99f1b20cd599fc7d2ce4ad816011b4672b9c1a68cd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c93bf7c145fcfb7f1c158d7aadf38669a79f84e0292613d77228b347c3b86c8 = $this->env->getExtension("native_profiler");
        $__internal_7c93bf7c145fcfb7f1c158d7aadf38669a79f84e0292613d77228b347c3b86c8->enter($__internal_7c93bf7c145fcfb7f1c158d7aadf38669a79f84e0292613d77228b347c3b86c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7c93bf7c145fcfb7f1c158d7aadf38669a79f84e0292613d77228b347c3b86c8->leave($__internal_7c93bf7c145fcfb7f1c158d7aadf38669a79f84e0292613d77228b347c3b86c8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
