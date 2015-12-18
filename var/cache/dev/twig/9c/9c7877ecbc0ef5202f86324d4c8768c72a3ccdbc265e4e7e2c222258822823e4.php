<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7bd128b4ea6f2663ba0f1accfd40cdda2e68f647bd4fc569b68d7c4190ae9a41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_890125e8c6b1389339ac3b2c916615652835637ec6eac260adadc8f29e827e9d = $this->env->getExtension("native_profiler");
        $__internal_890125e8c6b1389339ac3b2c916615652835637ec6eac260adadc8f29e827e9d->enter($__internal_890125e8c6b1389339ac3b2c916615652835637ec6eac260adadc8f29e827e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_890125e8c6b1389339ac3b2c916615652835637ec6eac260adadc8f29e827e9d->leave($__internal_890125e8c6b1389339ac3b2c916615652835637ec6eac260adadc8f29e827e9d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_03b26de926df9ecf9656ac77121175760f439966852eb6eaa459acd184fbf52a = $this->env->getExtension("native_profiler");
        $__internal_03b26de926df9ecf9656ac77121175760f439966852eb6eaa459acd184fbf52a->enter($__internal_03b26de926df9ecf9656ac77121175760f439966852eb6eaa459acd184fbf52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_03b26de926df9ecf9656ac77121175760f439966852eb6eaa459acd184fbf52a->leave($__internal_03b26de926df9ecf9656ac77121175760f439966852eb6eaa459acd184fbf52a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c40d1230a14773a75ed4fa0daf1f0cf0d5a612ad33bfe236caccf0470a9fd34 = $this->env->getExtension("native_profiler");
        $__internal_4c40d1230a14773a75ed4fa0daf1f0cf0d5a612ad33bfe236caccf0470a9fd34->enter($__internal_4c40d1230a14773a75ed4fa0daf1f0cf0d5a612ad33bfe236caccf0470a9fd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4c40d1230a14773a75ed4fa0daf1f0cf0d5a612ad33bfe236caccf0470a9fd34->leave($__internal_4c40d1230a14773a75ed4fa0daf1f0cf0d5a612ad33bfe236caccf0470a9fd34_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1289e013cd7db26a1db02e0cbd49bf2d8e037f76b0ed0ed9758434b6e09fb7f5 = $this->env->getExtension("native_profiler");
        $__internal_1289e013cd7db26a1db02e0cbd49bf2d8e037f76b0ed0ed9758434b6e09fb7f5->enter($__internal_1289e013cd7db26a1db02e0cbd49bf2d8e037f76b0ed0ed9758434b6e09fb7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1289e013cd7db26a1db02e0cbd49bf2d8e037f76b0ed0ed9758434b6e09fb7f5->leave($__internal_1289e013cd7db26a1db02e0cbd49bf2d8e037f76b0ed0ed9758434b6e09fb7f5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
