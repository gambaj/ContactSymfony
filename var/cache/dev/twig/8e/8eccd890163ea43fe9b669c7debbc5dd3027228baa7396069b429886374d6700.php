<?php

/* @App/Contact/show.html.twig */
class __TwigTemplate_4f65576069ec2db2236b10b3c06cd64146b23ac7d63e9756c07e5b6a0a3d63e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Contact/show.html.twig", 1);
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
        $__internal_6cd1ab9d93cbee02b8f8026de16f99f016f9e7f822b6633df61aadbb98bb504a = $this->env->getExtension("native_profiler");
        $__internal_6cd1ab9d93cbee02b8f8026de16f99f016f9e7f822b6633df61aadbb98bb504a->enter($__internal_6cd1ab9d93cbee02b8f8026de16f99f016f9e7f822b6633df61aadbb98bb504a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Contact/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cd1ab9d93cbee02b8f8026de16f99f016f9e7f822b6633df61aadbb98bb504a->leave($__internal_6cd1ab9d93cbee02b8f8026de16f99f016f9e7f822b6633df61aadbb98bb504a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_85c379b6527cf47d4c7da91f4bb3febd3d509e3f4e7ea146487a06dd87488eb4 = $this->env->getExtension("native_profiler");
        $__internal_85c379b6527cf47d4c7da91f4bb3febd3d509e3f4e7ea146487a06dd87488eb4->enter($__internal_85c379b6527cf47d4c7da91f4bb3febd3d509e3f4e7ea146487a06dd87488eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Contact</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Utilisateur</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "utilisateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Societe</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "societe", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "adresse", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "numero", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Site</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "site", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("contact_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact_edit", array("id" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_85c379b6527cf47d4c7da91f4bb3febd3d509e3f4e7ea146487a06dd87488eb4->leave($__internal_85c379b6527cf47d4c7da91f4bb3febd3d509e3f4e7ea146487a06dd87488eb4_prof);

    }

    public function getTemplateName()
    {
        return "@App/Contact/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 61,  133 => 59,  127 => 56,  121 => 53,  111 => 46,  104 => 42,  97 => 38,  90 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Contact</h1>*/
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
/*             <a href="{{ path('contact_index') }}">Back to the list</a>*/
/*         </li>*/
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
