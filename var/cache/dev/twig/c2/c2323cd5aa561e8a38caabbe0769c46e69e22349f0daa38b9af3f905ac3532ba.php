<?php

/* @App/Contact/index.html.twig */
class __TwigTemplate_790a88923e351a1576e52720173b5cc04c629519903667311847e9826514935f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Contact/index.html.twig", 1);
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
        $__internal_30207626df4a97f25992e5d3b54371fb235388fadb526067380a8c31a0f829d2 = $this->env->getExtension("native_profiler");
        $__internal_30207626df4a97f25992e5d3b54371fb235388fadb526067380a8c31a0f829d2->enter($__internal_30207626df4a97f25992e5d3b54371fb235388fadb526067380a8c31a0f829d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Contact/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30207626df4a97f25992e5d3b54371fb235388fadb526067380a8c31a0f829d2->leave($__internal_30207626df4a97f25992e5d3b54371fb235388fadb526067380a8c31a0f829d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e568beaf985174baf1f17b66d20db789242373b97c358b767bdf2a938cfa34d3 = $this->env->getExtension("native_profiler");
        $__internal_e568beaf985174baf1f17b66d20db789242373b97c358b767bdf2a938cfa34d3->enter($__internal_e568beaf985174baf1f17b66d20db789242373b97c358b767bdf2a938cfa34d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contact list</h1>

    <div class=\"count\">
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
    </div>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Utilisateur</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Societe</th>
                <th>Adresse</th>
                <th>Numero</th>
                <th>Email</th>
                <th>Site</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 27
            echo "            <tr>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_show", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "utilisateur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "societe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "numero", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "site", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "type", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_show", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_edit", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>

    <div class=\"navigation\">
    ";
        // line 54
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
    </div>

    <ul>
        <li>
            <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("contact_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_e568beaf985174baf1f17b66d20db789242373b97c358b767bdf2a938cfa34d3->leave($__internal_e568beaf985174baf1f17b66d20db789242373b97c358b767bdf2a938cfa34d3_prof);

    }

    public function getTemplateName()
    {
        return "@App/Contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 59,  143 => 54,  137 => 50,  125 => 44,  119 => 41,  112 => 37,  108 => 36,  104 => 35,  100 => 34,  96 => 33,  92 => 32,  88 => 31,  84 => 30,  80 => 29,  74 => 28,  71 => 27,  67 => 26,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Contact list</h1>*/
/* */
/*     <div class="count">*/
/*     {{ pagination.getTotalItemCount }}*/
/*     </div>*/
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Utilisateur</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Prenom</th>*/
/*                 <th>Societe</th>*/
/*                 <th>Adresse</th>*/
/*                 <th>Numero</th>*/
/*                 <th>Email</th>*/
/*                 <th>Site</th>*/
/*                 <th>Type</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for contact in pagination %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('contact_show', { 'id': contact.id }) }}">{{ contact.id }}</a></td>*/
/*                 <td>{{ contact.utilisateur }}</td>*/
/*                 <td>{{ contact.nom }}</td>*/
/*                 <td>{{ contact.prenom }}</td>*/
/*                 <td>{{ contact.societe }}</td>*/
/*                 <td>{{ contact.adresse }}</td>*/
/*                 <td>{{ contact.numero }}</td>*/
/*                 <td>{{ contact.email }}</td>*/
/*                 <td>{{ contact.site }}</td>*/
/*                 <td>{{ contact.type }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('contact_show', { 'id': contact.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('contact_edit', { 'id': contact.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <div class="navigation">*/
/*     {{ knp_pagination_render(pagination) }}*/
/*     </div>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('contact_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
