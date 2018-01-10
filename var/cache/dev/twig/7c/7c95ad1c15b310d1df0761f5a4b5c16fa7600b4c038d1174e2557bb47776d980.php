<?php

/* Administration/dashboard.html.twig */
class __TwigTemplate_c4223d61da71dd2291748e6e7b42dbc7d3129c02f2ff3f2561a931aa0ccae969 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Administration/dashboard.html.twig", 1);
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
        $__internal_d731634952ef0d96c4a1c5863155d574c10d5c25e463ced284d0bcb9b03edd8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d731634952ef0d96c4a1c5863155d574c10d5c25e463ced284d0bcb9b03edd8e->enter($__internal_d731634952ef0d96c4a1c5863155d574c10d5c25e463ced284d0bcb9b03edd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/dashboard.html.twig"));

        $__internal_3230987509f1d7d993b994f06142ee8fa964cd571796001d86b2ade3e1eb0674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3230987509f1d7d993b994f06142ee8fa964cd571796001d86b2ade3e1eb0674->enter($__internal_3230987509f1d7d993b994f06142ee8fa964cd571796001d86b2ade3e1eb0674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Administration/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d731634952ef0d96c4a1c5863155d574c10d5c25e463ced284d0bcb9b03edd8e->leave($__internal_d731634952ef0d96c4a1c5863155d574c10d5c25e463ced284d0bcb9b03edd8e_prof);

        
        $__internal_3230987509f1d7d993b994f06142ee8fa964cd571796001d86b2ade3e1eb0674->leave($__internal_3230987509f1d7d993b994f06142ee8fa964cd571796001d86b2ade3e1eb0674_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ada7cda157210415bc7c8ad4b1098d916abd6e11409bf78f5aa7bfa171a43c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada7cda157210415bc7c8ad4b1098d916abd6e11409bf78f5aa7bfa171a43c0e->enter($__internal_ada7cda157210415bc7c8ad4b1098d916abd6e11409bf78f5aa7bfa171a43c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_77d56687504ecfbc3eb6ccfec24146c7ad6a16760f0862fb64802bd493b2f43d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d56687504ecfbc3eb6ccfec24146c7ad6a16760f0862fb64802bd493b2f43d->enter($__internal_77d56687504ecfbc3eb6ccfec24146c7ad6a16760f0862fb64802bd493b2f43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <table id=\"userstable\">
        <h2 class=\"h2tabdashboard\">Comptes naturalistes à valider</h2> 
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Mail</th>
          <th>Carte Professionnelle</th>
          <th>Action à faire</th>
        </tr>
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 12, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 13
            echo "        <form method=\"post\">
            <tr>
               <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
               <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "procard", array()), "html", null, true);
            echo "</td>
               <input type=\"hidden\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
            echo "\" name=\"_userid\"></input>
               <td>
                   <button type=\"submit\" value=\"validate\" formaction=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("validateuser");
            echo "\">Valider</button>
                   <button type=\"submit\" value=\"downgrade\" formaction=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("downgradeuser");
            echo "\">Rétrograder</button>
               </td>
            </tr>
        </form>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    
    </table>
            
    <table id=\"observationtable\">
        <h2 class=\"h2tabdashboard\">Observations</h2> 
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Mail</th>
          <th>Carte Professionnelle</th>
          <th>Action à faire</th>
        </tr>
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 38, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 39
            echo "        <tr>
           <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "procard", array()), "html", null, true);
            echo "</td>
           <td> <button>Valider</button> <button>Rétrograder</button></td>
        </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            ";
        // line 48
        echo "    </table>
    
    <table id=\"obsqueudtable\">
        <h2 class=\"h2tabdashboard\">Observations à valider</h2> 
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Mail</th>
          <th>Carte Professionnelle</th>
          <th>Action à faire</th>
        </tr>
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 59, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 60
            echo "        <tr>
           <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "procard", array()), "html", null, true);
            echo "</td>
           <td> <button>Valider</button> <button>Rétrograder</button></td>
        </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            ";
        // line 69
        echo "    </table>
    
    <table id=\"articletable\">
        <h2 class=\"h2tabdashboard\">Articles du blog</h2> 
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Mail</th>
          <th>Carte Professionnelle</th>
          <th>Action à faire</th>
        </tr>
            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 80, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 81
            echo "        <tr>
           <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastname", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstname", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
            echo "</td>
           <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "procard", array()), "html", null, true);
            echo "</td>
           <td> <button>Valider</button> <button>Rétrograder</button></td>
        </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "            ";
        // line 90
        echo "    </table>
";
        
        $__internal_77d56687504ecfbc3eb6ccfec24146c7ad6a16760f0862fb64802bd493b2f43d->leave($__internal_77d56687504ecfbc3eb6ccfec24146c7ad6a16760f0862fb64802bd493b2f43d_prof);

        
        $__internal_ada7cda157210415bc7c8ad4b1098d916abd6e11409bf78f5aa7bfa171a43c0e->leave($__internal_ada7cda157210415bc7c8ad4b1098d916abd6e11409bf78f5aa7bfa171a43c0e_prof);

    }

    public function getTemplateName()
    {
        return "Administration/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 90,  235 => 89,  225 => 85,  221 => 84,  217 => 83,  213 => 82,  210 => 81,  206 => 80,  193 => 69,  191 => 68,  181 => 64,  177 => 63,  173 => 62,  169 => 61,  166 => 60,  162 => 59,  149 => 48,  147 => 47,  137 => 43,  133 => 42,  129 => 41,  125 => 40,  122 => 39,  118 => 38,  104 => 26,  93 => 22,  89 => 21,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  68 => 15,  64 => 13,  60 => 12,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <table id=\"userstable\">
        <h2 class=\"h2tabdashboard\">Comptes naturalistes à valider</h2> 
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Mail</th>
          <th>Carte Professionnelle</th>
          <th>Action à faire</th>
        </tr>
            {% for user in data %}
        <form method=\"post\">
            <tr>
               <td>{{user.lastname}}</td>
               <td>{{user.firstname}}</td>
               <td>{{user.email}}</td>
               <td>{{user.procard}}</td>
               <input type=\"hidden\" value=\"{{user.id}}\" name=\"_userid\"></input>
               <td>
                   <button type=\"submit\" value=\"validate\" formaction=\"{{path('validateuser')}}\">Valider</button>
                   <button type=\"submit\" value=\"downgrade\" formaction=\"{{path('downgradeuser')}}\">Rétrograder</button>
               </td>
            </tr>
        </form>
            {% endfor %}    
    </table>
            
    <table id=\"observationtable\">
        <h2 class=\"h2tabdashboard\">Observations</h2> 
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Mail</th>
          <th>Carte Professionnelle</th>
          <th>Action à faire</th>
        </tr>
            {% for user in data %}
        <tr>
           <td>{{user.lastname}}</td>
           <td>{{user.firstname}}</td>
           <td>{{user.email}}</td>
           <td>{{user.procard}}</td>
           <td> <button>Valider</button> <button>Rétrograder</button></td>
        </tr>
            {% endfor %}
            {# wire buttons to actions to validate or not the accounts #}
    </table>
    
    <table id=\"obsqueudtable\">
        <h2 class=\"h2tabdashboard\">Observations à valider</h2> 
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Mail</th>
          <th>Carte Professionnelle</th>
          <th>Action à faire</th>
        </tr>
            {% for user in data %}
        <tr>
           <td>{{user.lastname}}</td>
           <td>{{user.firstname}}</td>
           <td>{{user.email}}</td>
           <td>{{user.procard}}</td>
           <td> <button>Valider</button> <button>Rétrograder</button></td>
        </tr>
            {% endfor %}
            {# wire buttons to actions to validate or not the accounts #}
    </table>
    
    <table id=\"articletable\">
        <h2 class=\"h2tabdashboard\">Articles du blog</h2> 
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Mail</th>
          <th>Carte Professionnelle</th>
          <th>Action à faire</th>
        </tr>
            {% for user in data %}
        <tr>
           <td>{{user.lastname}}</td>
           <td>{{user.firstname}}</td>
           <td>{{user.email}}</td>
           <td>{{user.procard}}</td>
           <td> <button>Valider</button> <button>Rétrograder</button></td>
        </tr>
            {% endfor %}
            {# wire buttons to actions to validate or not the accounts #}
    </table>
{% endblock %}
", "Administration/dashboard.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\Administration\\dashboard.html.twig");
    }
}
