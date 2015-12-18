<?php

/* AppBundle:Contact:index.html.twig */
class __TwigTemplate_0758d836e4ad4c52eae608c79f1bf49b27018ee068cec3718d6d7eb029a33148 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Contact:index.html.twig", 1);
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
        $__internal_be4d0235072a10e43aa8c952678a3a0b6b2c96291aaf608852e90cab1a908a92 = $this->env->getExtension("native_profiler");
        $__internal_be4d0235072a10e43aa8c952678a3a0b6b2c96291aaf608852e90cab1a908a92->enter($__internal_be4d0235072a10e43aa8c952678a3a0b6b2c96291aaf608852e90cab1a908a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Contact:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be4d0235072a10e43aa8c952678a3a0b6b2c96291aaf608852e90cab1a908a92->leave($__internal_be4d0235072a10e43aa8c952678a3a0b6b2c96291aaf608852e90cab1a908a92_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_9bd89f7addd49573246eeb0648ecca5acad9a7e51bb10d2c5b1f8ef0fa9c5205 = $this->env->getExtension("native_profiler");
        $__internal_9bd89f7addd49573246eeb0648ecca5acad9a7e51bb10d2c5b1f8ef0fa9c5205->enter($__internal_9bd89f7addd49573246eeb0648ecca5acad9a7e51bb10d2c5b1f8ef0fa9c5205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "    <h1><a>Liste de contact</a></h1>

    <div class=\"centre\">
        <div class=\"description\">
            <h2>Répertoire : ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</h2>
            <p><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("contact_new");
        echo "\">Ajouter nouveau contact</a></p>
        </div>
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
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_show", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 40
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
        // line 46
        echo "        </tbody>
    </table>

    <div class=\"navigation\">
    ";
        // line 50
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
    </div>
";
        
        $__internal_9bd89f7addd49573246eeb0648ecca5acad9a7e51bb10d2c5b1f8ef0fa9c5205->leave($__internal_9bd89f7addd49573246eeb0648ecca5acad9a7e51bb10d2c5b1f8ef0fa9c5205_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 50,  124 => 46,  112 => 40,  106 => 37,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  77 => 28,  74 => 27,  70 => 26,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block container %}*/
/*     <h1><a>Liste de contact</a></h1>*/
/* */
/*     <div class="centre">*/
/*         <div class="description">*/
/*             <h2>Répertoire : {{pagination.getTotalItemCount}}</h2>*/
/*             <p><a href="{{ path('contact_new') }}">Ajouter nouveau contact</a></p>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Utilisateur</th>*/
/*                 <th>Nom</th>*/
/*                 <th>Prenom</th>*/
/*                 <th>Societe</th>*/
/*                 <th>Adresse</th>*/
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
/* {% endblock %}*/
