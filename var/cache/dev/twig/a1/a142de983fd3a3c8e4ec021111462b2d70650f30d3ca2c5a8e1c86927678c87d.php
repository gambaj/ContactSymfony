<?php

/* base.html.twig */
class __TwigTemplate_fafe36d74f09f64de7a61afc230129e7065d2b6445ada7d17dca7b2d3ba8d5ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64eb1e39e44eab18bfe1246c2f764446ad33721f631383e09b45d477456dda9d = $this->env->getExtension("native_profiler");
        $__internal_64eb1e39e44eab18bfe1246c2f764446ad33721f631383e09b45d477456dda9d->enter($__internal_64eb1e39e44eab18bfe1246c2f764446ad33721f631383e09b45d477456dda9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Mon projet</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" media=\"all\">
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
    </head>
    
    <body id=\"main_body\">
        <img id=\"top\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/top.png"), "html", null, true);
        echo "\" alt=\"\">
        <div id=\"container\">
            ";
        // line 14
        $this->displayBlock('container', $context, $blocks);
        // line 15
        echo "        </div>
    </body>
</html>
";
        
        $__internal_64eb1e39e44eab18bfe1246c2f764446ad33721f631383e09b45d477456dda9d->leave($__internal_64eb1e39e44eab18bfe1246c2f764446ad33721f631383e09b45d477456dda9d_prof);

    }

    // line 14
    public function block_container($context, array $blocks = array())
    {
        $__internal_8cc5a628b69d3041b4f76e2640949517cf06061238f45f51c8b0a772c8d142c6 = $this->env->getExtension("native_profiler");
        $__internal_8cc5a628b69d3041b4f76e2640949517cf06061238f45f51c8b0a772c8d142c6->enter($__internal_8cc5a628b69d3041b4f76e2640949517cf06061238f45f51c8b0a772c8d142c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        
        $__internal_8cc5a628b69d3041b4f76e2640949517cf06061238f45f51c8b0a772c8d142c6->leave($__internal_8cc5a628b69d3041b4f76e2640949517cf06061238f45f51c8b0a772c8d142c6_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  52 => 15,  50 => 14,  45 => 12,  38 => 8,  34 => 7,  30 => 6,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>Mon projet</title>*/
/*         <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" media="all">*/
/*         <script type="text/javascript" src="{{asset('js/script.js')}}"></script>*/
/*     </head>*/
/*     */
/*     <body id="main_body">*/
/*         <img id="top" src="{{asset('images/top.png')}}" alt="">*/
/*         <div id="container">*/
/*             {% block container %}{% endblock %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
