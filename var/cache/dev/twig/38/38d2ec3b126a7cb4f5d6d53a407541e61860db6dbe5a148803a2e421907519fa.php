<?php

/* @App/Contact/new.html.twig */
class __TwigTemplate_3100d0bc1d6af4a4ed7e8989d6477ec04f4b0d649ac41012e763b25acf0cdc10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Contact/new.html.twig", 1);
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
        $__internal_445e37dbf51727270be45865eb8cab421fe320bd9bc2df3e31b0df8bb3105051 = $this->env->getExtension("native_profiler");
        $__internal_445e37dbf51727270be45865eb8cab421fe320bd9bc2df3e31b0df8bb3105051->enter($__internal_445e37dbf51727270be45865eb8cab421fe320bd9bc2df3e31b0df8bb3105051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Contact/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_445e37dbf51727270be45865eb8cab421fe320bd9bc2df3e31b0df8bb3105051->leave($__internal_445e37dbf51727270be45865eb8cab421fe320bd9bc2df3e31b0df8bb3105051_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_052390544a911e57a3d5e05a21816ea29acc6584fcc0fb63bbb19cc3a5ad8ce7 = $this->env->getExtension("native_profiler");
        $__internal_052390544a911e57a3d5e05a21816ea29acc6584fcc0fb63bbb19cc3a5ad8ce7->enter($__internal_052390544a911e57a3d5e05a21816ea29acc6584fcc0fb63bbb19cc3a5ad8ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contact creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("contact_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_052390544a911e57a3d5e05a21816ea29acc6584fcc0fb63bbb19cc3a5ad8ce7->leave($__internal_052390544a911e57a3d5e05a21816ea29acc6584fcc0fb63bbb19cc3a5ad8ce7_prof);

    }

    public function getTemplateName()
    {
        return "@App/Contact/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Contact creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('contact_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
