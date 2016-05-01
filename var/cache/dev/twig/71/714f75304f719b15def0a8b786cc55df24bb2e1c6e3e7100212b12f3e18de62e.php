<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f4c610f7b19d14339c82a35857eff7be5b6d4309ed13689ca444b1d9136b5d98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a76bfc1a55164d2f277be0b58a1de759331495a1c24ae69760120cbe8b3e25af = $this->env->getExtension("native_profiler");
        $__internal_a76bfc1a55164d2f277be0b58a1de759331495a1c24ae69760120cbe8b3e25af->enter($__internal_a76bfc1a55164d2f277be0b58a1de759331495a1c24ae69760120cbe8b3e25af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a76bfc1a55164d2f277be0b58a1de759331495a1c24ae69760120cbe8b3e25af->leave($__internal_a76bfc1a55164d2f277be0b58a1de759331495a1c24ae69760120cbe8b3e25af_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_105e865c2645392133d374b624a17bd5b8de24cf3f9ecce6722d04684a81d871 = $this->env->getExtension("native_profiler");
        $__internal_105e865c2645392133d374b624a17bd5b8de24cf3f9ecce6722d04684a81d871->enter($__internal_105e865c2645392133d374b624a17bd5b8de24cf3f9ecce6722d04684a81d871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_105e865c2645392133d374b624a17bd5b8de24cf3f9ecce6722d04684a81d871->leave($__internal_105e865c2645392133d374b624a17bd5b8de24cf3f9ecce6722d04684a81d871_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1ce8454ef1fd8e76c448c6cd6f332c50859f6a8cd016aee10e5384db64074fc = $this->env->getExtension("native_profiler");
        $__internal_b1ce8454ef1fd8e76c448c6cd6f332c50859f6a8cd016aee10e5384db64074fc->enter($__internal_b1ce8454ef1fd8e76c448c6cd6f332c50859f6a8cd016aee10e5384db64074fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b1ce8454ef1fd8e76c448c6cd6f332c50859f6a8cd016aee10e5384db64074fc->leave($__internal_b1ce8454ef1fd8e76c448c6cd6f332c50859f6a8cd016aee10e5384db64074fc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e02ec5ff096f9bc66cb0651d155adbb8fb5cf8c4eba5b2e6e7a4b04ac75b22b4 = $this->env->getExtension("native_profiler");
        $__internal_e02ec5ff096f9bc66cb0651d155adbb8fb5cf8c4eba5b2e6e7a4b04ac75b22b4->enter($__internal_e02ec5ff096f9bc66cb0651d155adbb8fb5cf8c4eba5b2e6e7a4b04ac75b22b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e02ec5ff096f9bc66cb0651d155adbb8fb5cf8c4eba5b2e6e7a4b04ac75b22b4->leave($__internal_e02ec5ff096f9bc66cb0651d155adbb8fb5cf8c4eba5b2e6e7a4b04ac75b22b4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
