<?php

/* first/index.html.twig */
class __TwigTemplate_e2a865b55ffde6092d02921b4f35a8d0b6e954e2695ac131050f67dc27ec541c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "first/index.html.twig", 1);
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
        $__internal_f3bdc72ec0455a7413dc29993c8d4afd22750ee63f525f2cbe06e8fc640b9100 = $this->env->getExtension("native_profiler");
        $__internal_f3bdc72ec0455a7413dc29993c8d4afd22750ee63f525f2cbe06e8fc640b9100->enter($__internal_f3bdc72ec0455a7413dc29993c8d4afd22750ee63f525f2cbe06e8fc640b9100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "first/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3bdc72ec0455a7413dc29993c8d4afd22750ee63f525f2cbe06e8fc640b9100->leave($__internal_f3bdc72ec0455a7413dc29993c8d4afd22750ee63f525f2cbe06e8fc640b9100_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_33fe625c9b6b9b91af5d00fe2e9a8d8dc873564bdbb061e5ebcdc760c1d9cc87 = $this->env->getExtension("native_profiler");
        $__internal_33fe625c9b6b9b91af5d00fe2e9a8d8dc873564bdbb061e5ebcdc760c1d9cc87->enter($__internal_33fe625c9b6b9b91af5d00fe2e9a8d8dc873564bdbb061e5ebcdc760c1d9cc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<table class=\"table table-striped\">
\t<thread>
\t<tr>
\t<th>#</th>
\t<th>First name</th>
\t<th>Last name</th>
\t<th>Username</th>
\t</tr>
\t</thread>
\t<tbody>
\t<tr>
\t<th scope=\"row\">1</th>
\t<td>Mark</td> 
\t<td>Otto</td>
\t<td>@mdo</td>
\t</tr>
\t<tr>
\t<th scope=\"row\">2</th>
\t<td>Jacob</td>
\t<td>Thronton</td>
\t<td>@fat</td>
\t</tr>
\t<tr>
\t<th scope=\"row\">3</th>
\t<td>Larry</td>
\t<td>the Birb</td>
\t<td>@twitter</td>
\t</tr>\t
\t</body>
\t</table>
";
        
        $__internal_33fe625c9b6b9b91af5d00fe2e9a8d8dc873564bdbb061e5ebcdc760c1d9cc87->leave($__internal_33fe625c9b6b9b91af5d00fe2e9a8d8dc873564bdbb061e5ebcdc760c1d9cc87_prof);

    }

    public function getTemplateName()
    {
        return "first/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<table class="table table-striped">*/
/* 	<thread>*/
/* 	<tr>*/
/* 	<th>#</th>*/
/* 	<th>First name</th>*/
/* 	<th>Last name</th>*/
/* 	<th>Username</th>*/
/* 	</tr>*/
/* 	</thread>*/
/* 	<tbody>*/
/* 	<tr>*/
/* 	<th scope="row">1</th>*/
/* 	<td>Mark</td> */
/* 	<td>Otto</td>*/
/* 	<td>@mdo</td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 	<th scope="row">2</th>*/
/* 	<td>Jacob</td>*/
/* 	<td>Thronton</td>*/
/* 	<td>@fat</td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 	<th scope="row">3</th>*/
/* 	<td>Larry</td>*/
/* 	<td>the Birb</td>*/
/* 	<td>@twitter</td>*/
/* 	</tr>	*/
/* 	</body>*/
/* 	</table>*/
/* {% endblock %}*/
