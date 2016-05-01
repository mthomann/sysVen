<?php

/* sysVenturyClient/edit.html.twig */
class __TwigTemplate_1edf65dd8d446805b4ca7de569c46ee10bf489c3fd56326c7bfe809a3b0fcb84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sysVenturyClient/edit.html.twig", 1);
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
        $__internal_2f4076f0c56168a767bb1095de34cbb32cf18bf8caf2348b76e744348390c309 = $this->env->getExtension("native_profiler");
        $__internal_2f4076f0c56168a767bb1095de34cbb32cf18bf8caf2348b76e744348390c309->enter($__internal_2f4076f0c56168a767bb1095de34cbb32cf18bf8caf2348b76e744348390c309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sysVenturyClient/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f4076f0c56168a767bb1095de34cbb32cf18bf8caf2348b76e744348390c309->leave($__internal_2f4076f0c56168a767bb1095de34cbb32cf18bf8caf2348b76e744348390c309_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad2ccf0d872e4df79361c6fa44d37fcaf2e163f179e97ed62451d532514cf90a = $this->env->getExtension("native_profiler");
        $__internal_ad2ccf0d872e4df79361c6fa44d37fcaf2e163f179e97ed62451d532514cf90a->enter($__internal_ad2ccf0d872e4df79361c6fa44d37fcaf2e163f179e97ed62451d532514cf90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h2 class=\"page-header\">Edit user</h2>
\t";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_ad2ccf0d872e4df79361c6fa44d37fcaf2e163f179e97ed62451d532514cf90a->leave($__internal_ad2ccf0d872e4df79361c6fa44d37fcaf2e163f179e97ed62451d532514cf90a_prof);

    }

    public function getTemplateName()
    {
        return "sysVenturyClient/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<h2 class="page-header">Edit user</h2>*/
/* 	{{form_start(form)}}*/
/* 	{{form_widget(form)}}*/
/* 	{{form_end(form)}}*/
/* {% endblock %}*/
