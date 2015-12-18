<?php

/* AppBundle:Contact:edit.html.twig */
class __TwigTemplate_bf5f09a6bdbb5a0e38c5278215a7ed18e9708a80ff49233524938f4697ec2b67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Contact:edit.html.twig", 1);
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
        $__internal_3d3aeda116f8598705fb5b4968f0556a7745a91bc0b0a70291132de9a7ac8d0f = $this->env->getExtension("native_profiler");
        $__internal_3d3aeda116f8598705fb5b4968f0556a7745a91bc0b0a70291132de9a7ac8d0f->enter($__internal_3d3aeda116f8598705fb5b4968f0556a7745a91bc0b0a70291132de9a7ac8d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Contact:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d3aeda116f8598705fb5b4968f0556a7745a91bc0b0a70291132de9a7ac8d0f->leave($__internal_3d3aeda116f8598705fb5b4968f0556a7745a91bc0b0a70291132de9a7ac8d0f_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_404e9a97b59c71c433aa9c9897ce9d43d8bd84fe2bb12975e64dd5be094e4df0 = $this->env->getExtension("native_profiler");
        $__internal_404e9a97b59c71c433aa9c9897ce9d43d8bd84fe2bb12975e64dd5be094e4df0->enter($__internal_404e9a97b59c71c433aa9c9897ce9d43d8bd84fe2bb12975e64dd5be094e4df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "    <h1>Modification de : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "nom", array()), "html", null, true);
        echo "</h1>

    <div class=\"centre\">
        <div class=\"description\">
            <h2>Modification de : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "nom", array()), "html", null, true);
        echo "</h2>
            <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("contact_index");
        echo "\">Retour à la liste</a>
        </div>
    </div>

    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_404e9a97b59c71c433aa9c9897ce9d43d8bd84fe2bb12975e64dd5be094e4df0->leave($__internal_404e9a97b59c71c433aa9c9897ce9d43d8bd84fe2bb12975e64dd5be094e4df0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Contact:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 22,  79 => 20,  72 => 16,  67 => 14,  63 => 13,  56 => 9,  50 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block container %}*/
/*     <h1>Modification de : {{ contact.prenom }} {{ contact.nom }}</h1>*/
/* */
/*     <div class="centre">*/
/*         <div class="description">*/
/*             <h2>Modification de : {{ contact.prenom }} {{ contact.nom }}</h2>*/
/*             <a href="{{ path('contact_index') }}">Retour à la liste</a>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
