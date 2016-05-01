<?php

/* base.html.twig */
class __TwigTemplate_033016fafc606690cc3c74082aa7dad15915b90ed295667a92c653d13a1c441e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22d0b2d663467e2db7ffba81ef36bf6d042ae7e67d369184855531b98a0cfd6f = $this->env->getExtension("native_profiler");
        $__internal_22d0b2d663467e2db7ffba81ef36bf6d042ae7e67d369184855531b98a0cfd6f->enter($__internal_22d0b2d663467e2db7ffba81ef36bf6d042ae7e67d369184855531b98a0cfd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">
    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

  </head>

  <body>

    <nav class=\"navbar navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">sysVentury</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"/sysVenturyClient/index\">Home</a></li>
            <li><a href=\"/sysVenturyClient/create\">add first</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
              ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 48
            echo "              <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "              ";
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "            </div>
        </div>

    </div><!-- /.container -->
    
    ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "  </body>
</html>
";
        
        $__internal_22d0b2d663467e2db7ffba81ef36bf6d042ae7e67d369184855531b98a0cfd6f->leave($__internal_22d0b2d663467e2db7ffba81ef36bf6d042ae7e67d369184855531b98a0cfd6f_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_95b0ac42925ba06b78b166176b593edd231f9f98463e4be9989169d7bd4ae3f6 = $this->env->getExtension("native_profiler");
        $__internal_95b0ac42925ba06b78b166176b593edd231f9f98463e4be9989169d7bd4ae3f6->enter($__internal_95b0ac42925ba06b78b166176b593edd231f9f98463e4be9989169d7bd4ae3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_95b0ac42925ba06b78b166176b593edd231f9f98463e4be9989169d7bd4ae3f6->leave($__internal_95b0ac42925ba06b78b166176b593edd231f9f98463e4be9989169d7bd4ae3f6_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98452d5a9222ef4619ca5291071c3701d9bc82eb76c5097e91469ce39601eea2 = $this->env->getExtension("native_profiler");
        $__internal_98452d5a9222ef4619ca5291071c3701d9bc82eb76c5097e91469ce39601eea2->enter($__internal_98452d5a9222ef4619ca5291071c3701d9bc82eb76c5097e91469ce39601eea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_98452d5a9222ef4619ca5291071c3701d9bc82eb76c5097e91469ce39601eea2->leave($__internal_98452d5a9222ef4619ca5291071c3701d9bc82eb76c5097e91469ce39601eea2_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_77239859b2b8a30fd7ef06c3b99f11f1ac0093042e3092e36a106a321ee3efb0 = $this->env->getExtension("native_profiler");
        $__internal_77239859b2b8a30fd7ef06c3b99f11f1ac0093042e3092e36a106a321ee3efb0->enter($__internal_77239859b2b8a30fd7ef06c3b99f11f1ac0093042e3092e36a106a321ee3efb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_77239859b2b8a30fd7ef06c3b99f11f1ac0093042e3092e36a106a321ee3efb0->leave($__internal_77239859b2b8a30fd7ef06c3b99f11f1ac0093042e3092e36a106a321ee3efb0_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_32fa3394e019fb5eae595c1853b82e59aadcc3ad9360a37b6b59d315d3cd3db0 = $this->env->getExtension("native_profiler");
        $__internal_32fa3394e019fb5eae595c1853b82e59aadcc3ad9360a37b6b59d315d3cd3db0->enter($__internal_32fa3394e019fb5eae595c1853b82e59aadcc3ad9360a37b6b59d315d3cd3db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_32fa3394e019fb5eae595c1853b82e59aadcc3ad9360a37b6b59d315d3cd3db0->leave($__internal_32fa3394e019fb5eae595c1853b82e59aadcc3ad9360a37b6b59d315d3cd3db0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 56,  139 => 50,  128 => 17,  116 => 13,  107 => 57,  105 => 56,  98 => 51,  95 => 50,  86 => 48,  82 => 47,  49 => 18,  47 => 17,  40 => 13,  26 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="../../favicon.ico">*/
/* */
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*   </head>*/
/* */
/*   <body>*/
/* */
/*     <nav class="navbar navbar-inverse">*/
/*       <div class="container">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*           <a class="navbar-brand" href="#">sysVentury</a>*/
/*         </div>*/
/*         <div id="navbar" class="collapse navbar-collapse">*/
/*           <ul class="nav navbar-nav">*/
/*             <li><a href="/sysVenturyClient/index">Home</a></li>*/
/*             <li><a href="/sysVenturyClient/create">add first</a></li>*/
/*           </ul>*/
/*         </div><!--/.nav-collapse -->*/
/*       </div>*/
/*     </nav>*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*               {% for flash_message in app.session.flashbag.get('notice') %}*/
/*               <div class="alert alert-success">{{flash_message}}</div>*/
/*               {% endfor%}*/
/*               {% block body %}{% endblock %}*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div><!-- /.container -->*/
/*     */
/*     {% block javascripts %}{% endblock %}*/
/*   </body>*/
/* </html>*/
/* */
