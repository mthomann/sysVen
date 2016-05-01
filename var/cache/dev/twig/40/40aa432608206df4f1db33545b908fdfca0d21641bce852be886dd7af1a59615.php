<?php

/* sysVenturyClient/index.html.twig */
class __TwigTemplate_40f2cc8d260c96c61be250c0d4febf9bc1eb32221de87340e7446cddb8b9a58b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sysVenturyClient/index.html.twig", 1);
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
        $__internal_ea9fe3443ba4dd2cfaa29a5dfa1f7e60e260907329aa6f175d9a6be8bd935d58 = $this->env->getExtension("native_profiler");
        $__internal_ea9fe3443ba4dd2cfaa29a5dfa1f7e60e260907329aa6f175d9a6be8bd935d58->enter($__internal_ea9fe3443ba4dd2cfaa29a5dfa1f7e60e260907329aa6f175d9a6be8bd935d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sysVenturyClient/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea9fe3443ba4dd2cfaa29a5dfa1f7e60e260907329aa6f175d9a6be8bd935d58->leave($__internal_ea9fe3443ba4dd2cfaa29a5dfa1f7e60e260907329aa6f175d9a6be8bd935d58_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0daacc3154969c96924faee0b239ab0bafa711912185655157b49458b87b6e8d = $this->env->getExtension("native_profiler");
        $__internal_0daacc3154969c96924faee0b239ab0bafa711912185655157b49458b87b6e8d->enter($__internal_0daacc3154969c96924faee0b239ab0bafa711912185655157b49458b87b6e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h2 class=\"page-header\">Dashboard</h2>
\t<table class=\"table table-striped\">
\t<thread>
\t<tr>
\t<th>#</th>
\t<th>First name</th>
\t<th>Last name</th>
\t<th>date</th>\t
\t<th></th>
\t</tr>
\t</thread>
\t<tbody>
\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sysventorys"]) ? $context["sysventorys"] : $this->getContext($context, "sysventorys")));
        foreach ($context['_seq'] as $context["_key"] => $context["sysventury"]) {
            // line 17
            echo "\t<tr>
\t<th scope=\"row\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["sysventury"], "id", array()), "html", null, true);
            echo "</th>
\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["sysventury"], "name", array()), "html", null, true);
            echo "</td> 
\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["sysventury"], "lastname", array()), "html", null, true);
            echo "</td>
\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sysventury"], "date", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>\t
\t<td>
\t\t<a href=\"/sysVenturyClient/details/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["sysventury"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">View</a>
\t\t<a href=\"/sysVenturyClient/edit/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["sysventury"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-default\">Edit</a>
\t\t<a href=\"/sysVenturyClient/delete/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["sysventury"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>\t\t
\t</td>
\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sysventury'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t</body>
\t</table>
";
        
        $__internal_0daacc3154969c96924faee0b239ab0bafa711912185655157b49458b87b6e8d->leave($__internal_0daacc3154969c96924faee0b239ab0bafa711912185655157b49458b87b6e8d_prof);

    }

    public function getTemplateName()
    {
        return "sysVenturyClient/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 29,  86 => 25,  82 => 24,  78 => 23,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<h2 class="page-header">Dashboard</h2>*/
/* 	<table class="table table-striped">*/
/* 	<thread>*/
/* 	<tr>*/
/* 	<th>#</th>*/
/* 	<th>First name</th>*/
/* 	<th>Last name</th>*/
/* 	<th>date</th>	*/
/* 	<th></th>*/
/* 	</tr>*/
/* 	</thread>*/
/* 	<tbody>*/
/* 	{% for sysventury in sysventorys %}*/
/* 	<tr>*/
/* 	<th scope="row">{{sysventury.id}}</th>*/
/* 	<td>{{sysventury.name}}</td> */
/* 	<td>{{sysventury.lastname}}</td>*/
/* 	<td>{{sysventury.date|date('F j, Y, g:i a')}}</td>	*/
/* 	<td>*/
/* 		<a href="/sysVenturyClient/details/{{sysventury.id}}" class="btn btn-success">View</a>*/
/* 		<a href="/sysVenturyClient/edit/{{sysventury.id}}" class="btn btn-default">Edit</a>*/
/* 		<a href="/sysVenturyClient/delete/{{sysventury.id}}" class="btn btn-danger">Delete</a>		*/
/* 	</td>*/
/* 	</tr>*/
/* 	{% endfor %}*/
/* 	</body>*/
/* 	</table>*/
/* {% endblock %}*/
