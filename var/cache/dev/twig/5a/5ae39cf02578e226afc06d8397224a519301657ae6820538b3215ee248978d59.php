<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c13dad77201cc6b88726c7692ab63e435701e5d997920067227c9cc26b026bef extends Twig_Template
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
        $__internal_0bf679d9d300d90cec4903914acf906b804fbd2f5266adff79883a1314740417 = $this->env->getExtension("native_profiler");
        $__internal_0bf679d9d300d90cec4903914acf906b804fbd2f5266adff79883a1314740417->enter($__internal_0bf679d9d300d90cec4903914acf906b804fbd2f5266adff79883a1314740417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bf679d9d300d90cec4903914acf906b804fbd2f5266adff79883a1314740417->leave($__internal_0bf679d9d300d90cec4903914acf906b804fbd2f5266adff79883a1314740417_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_313c481f0d1dda687a03bee85cbd161be20d6b81ab292751cebdfdc03d2f3c10 = $this->env->getExtension("native_profiler");
        $__internal_313c481f0d1dda687a03bee85cbd161be20d6b81ab292751cebdfdc03d2f3c10->enter($__internal_313c481f0d1dda687a03bee85cbd161be20d6b81ab292751cebdfdc03d2f3c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_313c481f0d1dda687a03bee85cbd161be20d6b81ab292751cebdfdc03d2f3c10->leave($__internal_313c481f0d1dda687a03bee85cbd161be20d6b81ab292751cebdfdc03d2f3c10_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_414166c3d383788e0a641f5d3b044e0dc4cd42c4c1ec26f5cdce152d095d9aa7 = $this->env->getExtension("native_profiler");
        $__internal_414166c3d383788e0a641f5d3b044e0dc4cd42c4c1ec26f5cdce152d095d9aa7->enter($__internal_414166c3d383788e0a641f5d3b044e0dc4cd42c4c1ec26f5cdce152d095d9aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_414166c3d383788e0a641f5d3b044e0dc4cd42c4c1ec26f5cdce152d095d9aa7->leave($__internal_414166c3d383788e0a641f5d3b044e0dc4cd42c4c1ec26f5cdce152d095d9aa7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b6dd1d7699d2e8cae8bd5697b2dd33395994018cf421d1b03d8e79ad8bee4cb1 = $this->env->getExtension("native_profiler");
        $__internal_b6dd1d7699d2e8cae8bd5697b2dd33395994018cf421d1b03d8e79ad8bee4cb1->enter($__internal_b6dd1d7699d2e8cae8bd5697b2dd33395994018cf421d1b03d8e79ad8bee4cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b6dd1d7699d2e8cae8bd5697b2dd33395994018cf421d1b03d8e79ad8bee4cb1->leave($__internal_b6dd1d7699d2e8cae8bd5697b2dd33395994018cf421d1b03d8e79ad8bee4cb1_prof);

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
