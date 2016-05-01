<?php

/* sysVenturyClient/details.html.twig */
class __TwigTemplate_5d4288b03a59bb723b23a38e6aba036e8f3329fabb6b6d4e71a10b7db52529ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sysVenturyClient/details.html.twig", 1);
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
        $__internal_1cecfa2ffa435c7e57f6a95627546d3e18c14dd77e43a0d88d6e4e2dfb05ed37 = $this->env->getExtension("native_profiler");
        $__internal_1cecfa2ffa435c7e57f6a95627546d3e18c14dd77e43a0d88d6e4e2dfb05ed37->enter($__internal_1cecfa2ffa435c7e57f6a95627546d3e18c14dd77e43a0d88d6e4e2dfb05ed37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sysVenturyClient/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cecfa2ffa435c7e57f6a95627546d3e18c14dd77e43a0d88d6e4e2dfb05ed37->leave($__internal_1cecfa2ffa435c7e57f6a95627546d3e18c14dd77e43a0d88d6e4e2dfb05ed37_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c047b392cc626340095e60732c2b3986e0de5b86814996c3cf4c48f289d0746 = $this->env->getExtension("native_profiler");
        $__internal_5c047b392cc626340095e60732c2b3986e0de5b86814996c3cf4c48f289d0746->enter($__internal_5c047b392cc626340095e60732c2b3986e0de5b86814996c3cf4c48f289d0746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo " <a class=\"btn btn-default\" href=\"/\">Back to sysVentury</a>
 <hr>
 <h2 class=\"page-header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sysventory"]) ? $context["sysventory"] : $this->getContext($context, "sysventory")), "name", array()), "html", null, true);
        echo "</h2>
 <ul class=\"list-group\">
 <li class=\"list-group-item\">Category: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sysventory"]) ? $context["sysventory"] : $this->getContext($context, "sysventory")), "category", array()), "html", null, true);
        echo "</li>
 <li class=\"list-group-item\">date: <strong>";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["sysventory"]) ? $context["sysventory"] : $this->getContext($context, "sysventory")), "date", array()), "F j, Y, g:i a"), "html", null, true);
        echo "</strong></li>

 </ul>
";
        
        $__internal_5c047b392cc626340095e60732c2b3986e0de5b86814996c3cf4c48f289d0746->leave($__internal_5c047b392cc626340095e60732c2b3986e0de5b86814996c3cf4c48f289d0746_prof);

    }

    public function getTemplateName()
    {
        return "sysVenturyClient/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*  <a class="btn btn-default" href="/">Back to sysVentury</a>*/
/*  <hr>*/
/*  <h2 class="page-header">{{sysventory.name}}</h2>*/
/*  <ul class="list-group">*/
/*  <li class="list-group-item">Category: {{sysventory.category}}</li>*/
/*  <li class="list-group-item">date: <strong>{{sysventory.date|date('F j, Y, g:i a')}}</strong></li>*/
/* */
/*  </ul>*/
/* {% endblock %}*/
