<?php

/* base.html.twig */
class __TwigTemplate_c3a8a86270619f5a515ac6dcd852a9c3a939d86f168dbcb17adbd788a9cd7704 extends Twig_Template
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
        $__internal_c25325bffb24539ee915a4658989ff583003df5d6db9fdf129d44f34b282a6c0 = $this->env->getExtension("native_profiler");
        $__internal_c25325bffb24539ee915a4658989ff583003df5d6db9fdf129d44f34b282a6c0->enter($__internal_c25325bffb24539ee915a4658989ff583003df5d6db9fdf129d44f34b282a6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
          <a class=\"navbar-brand\" href=\"#\">firstOne</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"/first/index\">Home</a></li>
            <li><a href=\"/first/create\">add first</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "            </div>
        </div>

    </div><!-- /.container -->
    
    ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "  </body>
</html>
";
        
        $__internal_c25325bffb24539ee915a4658989ff583003df5d6db9fdf129d44f34b282a6c0->leave($__internal_c25325bffb24539ee915a4658989ff583003df5d6db9fdf129d44f34b282a6c0_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_1609f1dba2ba42fc6508a7adaed939073f710f921462712b1816e02b5e020332 = $this->env->getExtension("native_profiler");
        $__internal_1609f1dba2ba42fc6508a7adaed939073f710f921462712b1816e02b5e020332->enter($__internal_1609f1dba2ba42fc6508a7adaed939073f710f921462712b1816e02b5e020332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1609f1dba2ba42fc6508a7adaed939073f710f921462712b1816e02b5e020332->leave($__internal_1609f1dba2ba42fc6508a7adaed939073f710f921462712b1816e02b5e020332_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a36cfafa56ace41c90afd7cc562eb165d6912f37168697853fc497103e86c533 = $this->env->getExtension("native_profiler");
        $__internal_a36cfafa56ace41c90afd7cc562eb165d6912f37168697853fc497103e86c533->enter($__internal_a36cfafa56ace41c90afd7cc562eb165d6912f37168697853fc497103e86c533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a36cfafa56ace41c90afd7cc562eb165d6912f37168697853fc497103e86c533->leave($__internal_a36cfafa56ace41c90afd7cc562eb165d6912f37168697853fc497103e86c533_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8014fe43114bb51f2247c17dc1c0fc8c19db28030ffcd37168a6d41d7b58c6d = $this->env->getExtension("native_profiler");
        $__internal_e8014fe43114bb51f2247c17dc1c0fc8c19db28030ffcd37168a6d41d7b58c6d->enter($__internal_e8014fe43114bb51f2247c17dc1c0fc8c19db28030ffcd37168a6d41d7b58c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e8014fe43114bb51f2247c17dc1c0fc8c19db28030ffcd37168a6d41d7b58c6d->leave($__internal_e8014fe43114bb51f2247c17dc1c0fc8c19db28030ffcd37168a6d41d7b58c6d_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_017a51374972eaeb58280a59666dda3a6cb1a259da0a07c6989ea240478747ff = $this->env->getExtension("native_profiler");
        $__internal_017a51374972eaeb58280a59666dda3a6cb1a259da0a07c6989ea240478747ff->enter($__internal_017a51374972eaeb58280a59666dda3a6cb1a259da0a07c6989ea240478747ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_017a51374972eaeb58280a59666dda3a6cb1a259da0a07c6989ea240478747ff->leave($__internal_017a51374972eaeb58280a59666dda3a6cb1a259da0a07c6989ea240478747ff_prof);

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
        return array (  136 => 53,  125 => 47,  114 => 17,  102 => 13,  93 => 54,  91 => 53,  84 => 48,  82 => 47,  49 => 18,  47 => 17,  40 => 13,  26 => 1,);
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
/*           <a class="navbar-brand" href="#">firstOne</a>*/
/*         </div>*/
/*         <div id="navbar" class="collapse navbar-collapse">*/
/*           <ul class="nav navbar-nav">*/
/*             <li><a href="/first/index">Home</a></li>*/
/*             <li><a href="/first/create">add first</a></li>*/
/*           </ul>*/
/*         </div><!--/.nav-collapse -->*/
/*       </div>*/
/*     </nav>*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 {% block body %}{% endblock %}*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div><!-- /.container -->*/
/*     */
/*     {% block javascripts %}{% endblock %}*/
/*   </body>*/
/* </html>*/
/* */
