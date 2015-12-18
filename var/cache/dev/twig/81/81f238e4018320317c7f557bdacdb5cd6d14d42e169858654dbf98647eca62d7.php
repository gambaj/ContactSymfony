<?php

/* @App/Contact/edit.html.twig */
class __TwigTemplate_e910a700bd1759b50601501b37161c3ea0473936214515993847133cfb9bb229 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Contact/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_285934a4a9ba0c000e266b83d9a868a98373e3a789620b594dcd6095fa1f71ce = $this->env->getExtension("native_profiler");
        $__internal_285934a4a9ba0c000e266b83d9a868a98373e3a789620b594dcd6095fa1f71ce->enter($__internal_285934a4a9ba0c000e266b83d9a868a98373e3a789620b594dcd6095fa1f71ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Contact/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_285934a4a9ba0c000e266b83d9a868a98373e3a789620b594dcd6095fa1f71ce->leave($__internal_285934a4a9ba0c000e266b83d9a868a98373e3a789620b594dcd6095fa1f71ce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3881f89f84f9741e08cf2598ec10cdc147a7d92c75e6af6403bf97cf3cafa8fc = $this->env->getExtension("native_profiler");
        $__internal_3881f89f84f9741e08cf2598ec10cdc147a7d92c75e6af6403bf97cf3cafa8fc->enter($__internal_3881f89f84f9741e08cf2598ec10cdc147a7d92c75e6af6403bf97cf3cafa8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contact edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("contact_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3881f89f84f9741e08cf2598ec10cdc147a7d92c75e6af6403bf97cf3cafa8fc->leave($__internal_3881f89f84f9741e08cf2598ec10cdc147a7d92c75e6af6403bf97cf3cafa8fc_prof);

    }

    public function getTemplateName()
    {
        return "@App/Contact/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Contact edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('contact_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
