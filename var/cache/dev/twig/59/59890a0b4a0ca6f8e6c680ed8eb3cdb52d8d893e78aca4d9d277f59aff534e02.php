<?php

/* AppBundle:Contact:show.html.twig */
class __TwigTemplate_80b91c066ed4c0076e1287fbf1e6a9dae4f792a61bb5fb2533af7d1db084ba2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Contact:show.html.twig", 1);
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
        $__internal_179eb41ef305884474b36577b901ac31dca116750502608e97c1aac4581e1794 = $this->env->getExtension("native_profiler");
        $__internal_179eb41ef305884474b36577b901ac31dca116750502608e97c1aac4581e1794->enter($__internal_179eb41ef305884474b36577b901ac31dca116750502608e97c1aac4581e1794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Contact:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_179eb41ef305884474b36577b901ac31dca116750502608e97c1aac4581e1794->leave($__internal_179eb41ef305884474b36577b901ac31dca116750502608e97c1aac4581e1794_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_79dceb09e991243a68978d4a765da7475ee92ee9f67ac387b4099a503013cc4f = $this->env->getExtension("native_profiler");
        $__internal_79dceb09e991243a68978d4a765da7475ee92ee9f67ac387b4099a503013cc4f->enter($__internal_79dceb09e991243a68978d4a765da7475ee92ee9f67ac387b4099a503013cc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "    <h1>Contact : ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "nom", array()), "html", null, true);
        echo "</h1>

    <div class=\"centre\">
        <div class=\"description\">
            <h2>Contact : ";
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

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Utilisateur</th>
                <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "utilisateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Societe</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "societe", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "numero", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Site</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "site", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_edit", array("id" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_79dceb09e991243a68978d4a765da7475ee92ee9f67ac387b4099a503013cc4f->leave($__internal_79dceb09e991243a68978d4a765da7475ee92ee9f67ac387b4099a503013cc4f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Contact:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 65,  146 => 63,  140 => 60,  130 => 53,  123 => 49,  116 => 45,  109 => 41,  102 => 37,  95 => 33,  88 => 29,  81 => 25,  74 => 21,  67 => 17,  56 => 9,  50 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block container %}*/
/*     <h1>Contact : {{ contact.prenom }} {{ contact.nom }}</h1>*/
/* */
/*     <div class="centre">*/
/*         <div class="description">*/
/*             <h2>Contact : {{ contact.prenom }} {{ contact.nom }}</h2>*/
/*             <a href="{{ path('contact_index') }}">Retour à la liste</a>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ contact.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Utilisateur</th>*/
/*                 <td>{{ contact.utilisateur }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ contact.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Prenom</th>*/
/*                 <td>{{ contact.prenom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Societe</th>*/
/*                 <td>{{ contact.societe }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Adresse</th>*/
/*                 <td>{{ contact.adresse }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Numero</th>*/
/*                 <td>{{ contact.numero }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ contact.email }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Site</th>*/
/*                 <td>{{ contact.site }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Type</th>*/
/*                 <td>{{ contact.type }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('contact_edit', { 'id': contact.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
