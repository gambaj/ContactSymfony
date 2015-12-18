<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7b0be1db35f0fc3fc594f4bcdc8e725f047903b5274bca37462afff7ac6c8efd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_021855461f9ac2d71eefa674a60261c11c4552ec7f8272c3913055e784aaf4ec = $this->env->getExtension("native_profiler");
        $__internal_021855461f9ac2d71eefa674a60261c11c4552ec7f8272c3913055e784aaf4ec->enter($__internal_021855461f9ac2d71eefa674a60261c11c4552ec7f8272c3913055e784aaf4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_021855461f9ac2d71eefa674a60261c11c4552ec7f8272c3913055e784aaf4ec->leave($__internal_021855461f9ac2d71eefa674a60261c11c4552ec7f8272c3913055e784aaf4ec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e909a43f85c168132c1bc3d914844674d81594cbf0c1230042babb20519d6767 = $this->env->getExtension("native_profiler");
        $__internal_e909a43f85c168132c1bc3d914844674d81594cbf0c1230042babb20519d6767->enter($__internal_e909a43f85c168132c1bc3d914844674d81594cbf0c1230042babb20519d6767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e909a43f85c168132c1bc3d914844674d81594cbf0c1230042babb20519d6767->leave($__internal_e909a43f85c168132c1bc3d914844674d81594cbf0c1230042babb20519d6767_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0747c9abe5c83e9987a3c4cd05b597289947e9ce5ae7171141ca5d86c6f3747 = $this->env->getExtension("native_profiler");
        $__internal_b0747c9abe5c83e9987a3c4cd05b597289947e9ce5ae7171141ca5d86c6f3747->enter($__internal_b0747c9abe5c83e9987a3c4cd05b597289947e9ce5ae7171141ca5d86c6f3747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b0747c9abe5c83e9987a3c4cd05b597289947e9ce5ae7171141ca5d86c6f3747->leave($__internal_b0747c9abe5c83e9987a3c4cd05b597289947e9ce5ae7171141ca5d86c6f3747_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d388e4b7740041938e456dc90f0d781b6b5d6d54516b23c4374005c0d4cdd1c = $this->env->getExtension("native_profiler");
        $__internal_5d388e4b7740041938e456dc90f0d781b6b5d6d54516b23c4374005c0d4cdd1c->enter($__internal_5d388e4b7740041938e456dc90f0d781b6b5d6d54516b23c4374005c0d4cdd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5d388e4b7740041938e456dc90f0d781b6b5d6d54516b23c4374005c0d4cdd1c->leave($__internal_5d388e4b7740041938e456dc90f0d781b6b5d6d54516b23c4374005c0d4cdd1c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
