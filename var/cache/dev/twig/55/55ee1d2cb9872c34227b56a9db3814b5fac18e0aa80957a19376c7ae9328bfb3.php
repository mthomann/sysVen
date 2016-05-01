<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_67aa083efc93e92a690bc9a103e3a75b9f2cb47e2ee692aad39f28819cb597ea extends Twig_Template
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
        $__internal_a0781dbcf33a5724078a744819f1b49a4ff1bf32fc789a4289b8fc2d597138f5 = $this->env->getExtension("native_profiler");
        $__internal_a0781dbcf33a5724078a744819f1b49a4ff1bf32fc789a4289b8fc2d597138f5->enter($__internal_a0781dbcf33a5724078a744819f1b49a4ff1bf32fc789a4289b8fc2d597138f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0781dbcf33a5724078a744819f1b49a4ff1bf32fc789a4289b8fc2d597138f5->leave($__internal_a0781dbcf33a5724078a744819f1b49a4ff1bf32fc789a4289b8fc2d597138f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7ef59b569692d25008aa874ec2ef289a9b8c2f96f3fe8dab835a7263a3dad571 = $this->env->getExtension("native_profiler");
        $__internal_7ef59b569692d25008aa874ec2ef289a9b8c2f96f3fe8dab835a7263a3dad571->enter($__internal_7ef59b569692d25008aa874ec2ef289a9b8c2f96f3fe8dab835a7263a3dad571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7ef59b569692d25008aa874ec2ef289a9b8c2f96f3fe8dab835a7263a3dad571->leave($__internal_7ef59b569692d25008aa874ec2ef289a9b8c2f96f3fe8dab835a7263a3dad571_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e512ce308a8c59c4a6d807de8f7f7b045766ee59b01da06386002826ac8d62c = $this->env->getExtension("native_profiler");
        $__internal_4e512ce308a8c59c4a6d807de8f7f7b045766ee59b01da06386002826ac8d62c->enter($__internal_4e512ce308a8c59c4a6d807de8f7f7b045766ee59b01da06386002826ac8d62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4e512ce308a8c59c4a6d807de8f7f7b045766ee59b01da06386002826ac8d62c->leave($__internal_4e512ce308a8c59c4a6d807de8f7f7b045766ee59b01da06386002826ac8d62c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_039b44868d8dcf30d18944edbe23e14d826d1bfeadc32f1973b7622713fa5656 = $this->env->getExtension("native_profiler");
        $__internal_039b44868d8dcf30d18944edbe23e14d826d1bfeadc32f1973b7622713fa5656->enter($__internal_039b44868d8dcf30d18944edbe23e14d826d1bfeadc32f1973b7622713fa5656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_039b44868d8dcf30d18944edbe23e14d826d1bfeadc32f1973b7622713fa5656->leave($__internal_039b44868d8dcf30d18944edbe23e14d826d1bfeadc32f1973b7622713fa5656_prof);

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
