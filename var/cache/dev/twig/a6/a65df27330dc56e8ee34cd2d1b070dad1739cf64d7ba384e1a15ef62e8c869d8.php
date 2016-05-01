<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2fcb35f8330d334d8f9e0a08992a17977e0816c02aa0b54f78de81247affd8fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc31a99d0ed7c015719e25b989d572bc486037192eea5e601d70b0093eba7d53 = $this->env->getExtension("native_profiler");
        $__internal_fc31a99d0ed7c015719e25b989d572bc486037192eea5e601d70b0093eba7d53->enter($__internal_fc31a99d0ed7c015719e25b989d572bc486037192eea5e601d70b0093eba7d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc31a99d0ed7c015719e25b989d572bc486037192eea5e601d70b0093eba7d53->leave($__internal_fc31a99d0ed7c015719e25b989d572bc486037192eea5e601d70b0093eba7d53_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c9a3cac1ffb256612a23d79e4b7383852505afdd75795fcdc71d7f7120d2256a = $this->env->getExtension("native_profiler");
        $__internal_c9a3cac1ffb256612a23d79e4b7383852505afdd75795fcdc71d7f7120d2256a->enter($__internal_c9a3cac1ffb256612a23d79e4b7383852505afdd75795fcdc71d7f7120d2256a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c9a3cac1ffb256612a23d79e4b7383852505afdd75795fcdc71d7f7120d2256a->leave($__internal_c9a3cac1ffb256612a23d79e4b7383852505afdd75795fcdc71d7f7120d2256a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8b65ae15d05684c50ed89f8511e47606a863bf0da64c1ccb66c8fa95a884d2fd = $this->env->getExtension("native_profiler");
        $__internal_8b65ae15d05684c50ed89f8511e47606a863bf0da64c1ccb66c8fa95a884d2fd->enter($__internal_8b65ae15d05684c50ed89f8511e47606a863bf0da64c1ccb66c8fa95a884d2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8b65ae15d05684c50ed89f8511e47606a863bf0da64c1ccb66c8fa95a884d2fd->leave($__internal_8b65ae15d05684c50ed89f8511e47606a863bf0da64c1ccb66c8fa95a884d2fd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_415d5f771b99d480dc3a403ac7b035d96f9828bb5cf7130528b145017983ac5c = $this->env->getExtension("native_profiler");
        $__internal_415d5f771b99d480dc3a403ac7b035d96f9828bb5cf7130528b145017983ac5c->enter($__internal_415d5f771b99d480dc3a403ac7b035d96f9828bb5cf7130528b145017983ac5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_415d5f771b99d480dc3a403ac7b035d96f9828bb5cf7130528b145017983ac5c->leave($__internal_415d5f771b99d480dc3a403ac7b035d96f9828bb5cf7130528b145017983ac5c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
