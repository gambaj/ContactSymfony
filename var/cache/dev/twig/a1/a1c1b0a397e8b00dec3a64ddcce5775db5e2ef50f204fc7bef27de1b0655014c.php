<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_f78b415ea675f3a1f95d089f97fa983a261fa90b0be08e215cd831fa533b5386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1c6e852b0b9bc25ece2db0e9ca4e329e93cad2352da1b5dfbeb499535879cbd = $this->env->getExtension("native_profiler");
        $__internal_f1c6e852b0b9bc25ece2db0e9ca4e329e93cad2352da1b5dfbeb499535879cbd->enter($__internal_f1c6e852b0b9bc25ece2db0e9ca4e329e93cad2352da1b5dfbeb499535879cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_f1c6e852b0b9bc25ece2db0e9ca4e329e93cad2352da1b5dfbeb499535879cbd->leave($__internal_f1c6e852b0b9bc25ece2db0e9ca4e329e93cad2352da1b5dfbeb499535879cbd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
