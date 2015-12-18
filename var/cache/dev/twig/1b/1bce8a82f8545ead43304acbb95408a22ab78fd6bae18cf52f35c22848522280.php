<?php

/* @KnpPaginator/Pagination/filtration.html.twig */
class __TwigTemplate_bf8ad5a17982eb555d0086f10bb06d27140eac9bb01473a8f604fb7d654d8966 extends Twig_Template
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
        $__internal_44f68d77a350b3ec8ac7d06225d78ebf1beea40889fee45158215d86473f4e58 = $this->env->getExtension("native_profiler");
        $__internal_44f68d77a350b3ec8ac7d06225d78ebf1beea40889fee45158215d86473f4e58->enter($__internal_44f68d77a350b3ec8ac7d06225d78ebf1beea40889fee45158215d86473f4e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/filtration.html.twig"));

        // line 1
        echo "<form method=\"get\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\" enctype=\"application/x-www-form-urlencoded\">

    <select name=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["filterFieldName"]) ? $context["filterFieldName"] : $this->getContext($context, "filterFieldName")), "html", null, true);
        echo "\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["label"]) {
            // line 5
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "\"";
            if (((isset($context["selectedField"]) ? $context["selectedField"] : $this->getContext($context, "selectedField")) == $context["field"])) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </select>

    <input type=\"text\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["selectedValue"]) ? $context["selectedValue"] : $this->getContext($context, "selectedValue")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["filterValueName"]) ? $context["filterValueName"] : $this->getContext($context, "filterValueName")), "html", null, true);
        echo "\" />

    <button>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "button", array()), "html", null, true);
        echo "</button>

</form>
";
        
        $__internal_44f68d77a350b3ec8ac7d06225d78ebf1beea40889fee45158215d86473f4e58->leave($__internal_44f68d77a350b3ec8ac7d06225d78ebf1beea40889fee45158215d86473f4e58_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/filtration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  55 => 9,  51 => 7,  36 => 5,  32 => 4,  28 => 3,  22 => 1,);
    }
}
/* <form method="get" action="{{ action }}" enctype="application/x-www-form-urlencoded">*/
/* */
/*     <select name="{{ filterFieldName }}">*/
/*         {% for field, label in fields %}*/
/*             <option value="{{ field }}"{% if selectedField == field %} selected="selected"{% endif %}>{{ label }}</option>*/
/*         {% endfor %}*/
/*     </select>*/
/* */
/*     <input type="text" value="{{ selectedValue }}" name="{{ filterValueName }}" />*/
/* */
/*     <button>{{ options.button }}</button>*/
/* */
/* </form>*/
/* */
