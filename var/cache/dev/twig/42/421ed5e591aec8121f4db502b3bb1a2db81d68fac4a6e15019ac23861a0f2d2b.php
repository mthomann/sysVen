<?php

/* sysVenturyClient/create.html.twig */
class __TwigTemplate_b0d05a3aba93d35cb7d54b24e468340d518e9431ce5cdde37177318c7a8cad61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sysVenturyClient/create.html.twig", 1);
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
        $__internal_f9b4a43fb3db469b6d0898cac126a8dd8fa06d9be24dbf43a43b2dbbc3572539 = $this->env->getExtension("native_profiler");
        $__internal_f9b4a43fb3db469b6d0898cac126a8dd8fa06d9be24dbf43a43b2dbbc3572539->enter($__internal_f9b4a43fb3db469b6d0898cac126a8dd8fa06d9be24dbf43a43b2dbbc3572539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sysVenturyClient/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9b4a43fb3db469b6d0898cac126a8dd8fa06d9be24dbf43a43b2dbbc3572539->leave($__internal_f9b4a43fb3db469b6d0898cac126a8dd8fa06d9be24dbf43a43b2dbbc3572539_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4115fc5651fcf53b9b891a6b3b3d5dc1d24293f741ccfea045d74ab93408131 = $this->env->getExtension("native_profiler");
        $__internal_c4115fc5651fcf53b9b891a6b3b3d5dc1d24293f741ccfea045d74ab93408131->enter($__internal_c4115fc5651fcf53b9b891a6b3b3d5dc1d24293f741ccfea045d74ab93408131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h2 class=\"page-header\">Add user</h2>
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
        
        $__internal_c4115fc5651fcf53b9b891a6b3b3d5dc1d24293f741ccfea045d74ab93408131->leave($__internal_c4115fc5651fcf53b9b891a6b3b3d5dc1d24293f741ccfea045d74ab93408131_prof);

    }

    public function getTemplateName()
    {
        return "sysVenturyClient/create.html.twig";
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
/* 	<h2 class="page-header">Add user</h2>*/
/* 	{{form_start(form)}}*/
/* 	{{form_widget(form)}}*/
/* 	{{form_end(form)}}*/
/* {% endblock %}*/
