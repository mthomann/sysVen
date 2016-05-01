<?php

/* @Security/Collector/security.html.twig */
class __TwigTemplate_1335944d9bbeb31d8aefc66f03e1c3c665f8f1662950fd66ed73ed08b866a12b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Security/Collector/security.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
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
        $__internal_16e892d40ad042ea5e36fd76ba831a76f3b7d6c27d9b341eeca619ad1004c4aa = $this->env->getExtension("native_profiler");
        $__internal_16e892d40ad042ea5e36fd76ba831a76f3b7d6c27d9b341eeca619ad1004c4aa->enter($__internal_16e892d40ad042ea5e36fd76ba831a76f3b7d6c27d9b341eeca619ad1004c4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Security/Collector/security.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16e892d40ad042ea5e36fd76ba831a76f3b7d6c27d9b341eeca619ad1004c4aa->leave($__internal_16e892d40ad042ea5e36fd76ba831a76f3b7d6c27d9b341eeca619ad1004c4aa_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_577ffa52cc7dc806011c5a1ee47d71ce022736164f22dee48bec8368859bc0d5 = $this->env->getExtension("native_profiler");
        $__internal_577ffa52cc7dc806011c5a1ee47d71ce022736164f22dee48bec8368859bc0d5->enter($__internal_577ffa52cc7dc806011c5a1ee47d71ce022736164f22dee48bec8368859bc0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Security";
        
        $__internal_577ffa52cc7dc806011c5a1ee47d71ce022736164f22dee48bec8368859bc0d5->leave($__internal_577ffa52cc7dc806011c5a1ee47d71ce022736164f22dee48bec8368859bc0d5_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_445e98b92fac03c19284efee4c4740723c812e0dd63a8bcf88528298a9169d5e = $this->env->getExtension("native_profiler");
        $__internal_445e98b92fac03c19284efee4c4740723c812e0dd63a8bcf88528298a9169d5e->enter($__internal_445e98b92fac03c19284efee4c4740723c812e0dd63a8bcf88528298a9169d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array())) {
            // line 7
            echo "        ";
            $context["is_authenticated"] = ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array()) && $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated", array()));
            // line 8
            echo "        ";
            $context["color_code"] = (((isset($context["is_authenticated"]) ? $context["is_authenticated"] : $this->getContext($context, "is_authenticated"))) ? ("") : ("yellow"));
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "        ";
            $context["color_code"] = (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array())) ? ("red") : (""));
            // line 11
            echo "    ";
        }
        // line 12
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        ";
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 15
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "user", array()), "n/a")) : ("n/a")), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 17
        echo "
    ";
        // line 18
        ob_start();
        // line 19
        echo "        ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array())) {
            // line 20
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Logged in as</b>
                <span>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user", array()), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Authenticated</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 27
            echo (((isset($context["is_authenticated"]) ? $context["is_authenticated"] : $this->getContext($context, "is_authenticated"))) ? ("green") : ("red"));
            echo "\">";
            echo (((isset($context["is_authenticated"]) ? $context["is_authenticated"] : $this->getContext($context, "is_authenticated"))) ? ("Yes") : ("No"));
            echo "</span>
            </div>

            ";
            // line 30
            if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array()) != null)) {
                // line 31
                echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Token class</b>
                <span>";
                // line 33
                echo $this->env->getExtension('code')->abbrClass($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array()));
                echo "</span>
            </div>
            ";
            }
            // line 36
            echo "            ";
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logoutUrl", array())) {
                // line 37
                echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Actions</b>
                <span><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "logoutUrl", array()), "html", null, true);
                echo "\">Logout</a></span>
            </div>
            ";
            }
            // line 42
            echo "        ";
        } elseif ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array())) {
            // line 43
            echo "            <div class=\"sf-toolbar-info-piece\">
                <span>You are not authenticated.</span>
            </div>
        ";
        } else {
            // line 47
            echo "            <div class=\"sf-toolbar-info-piece\">
                <span>The security is disabled.</span>
            </div>
        ";
        }
        // line 51
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 52
        echo "
    ";
        // line 53
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "status" => (isset($context["color_code"]) ? $context["color_code"] : $this->getContext($context, "color_code"))));
        echo "
";
        
        $__internal_445e98b92fac03c19284efee4c4740723c812e0dd63a8bcf88528298a9169d5e->leave($__internal_445e98b92fac03c19284efee4c4740723c812e0dd63a8bcf88528298a9169d5e_prof);

    }

    // line 56
    public function block_menu($context, array $blocks = array())
    {
        $__internal_92103c91d76a3880ae8c4e7aa7a9cb903c730e68c9b5cfc0b21c4843f79bf1d7 = $this->env->getExtension("native_profiler");
        $__internal_92103c91d76a3880ae8c4e7aa7a9cb903c730e68c9b5cfc0b21c4843f79bf1d7->enter($__internal_92103c91d76a3880ae8c4e7aa7a9cb903c730e68c9b5cfc0b21c4843f79bf1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 57
        echo "    <span class=\"label ";
        echo ((( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array()) ||  !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 58
        echo twig_include($this->env, $context, "@Security/Collector/icon.svg");
        echo "</span>
        <strong>Security</strong>
    </span>
";
        
        $__internal_92103c91d76a3880ae8c4e7aa7a9cb903c730e68c9b5cfc0b21c4843f79bf1d7->leave($__internal_92103c91d76a3880ae8c4e7aa7a9cb903c730e68c9b5cfc0b21c4843f79bf1d7_prof);

    }

    // line 63
    public function block_panel($context, array $blocks = array())
    {
        $__internal_436f0149820339f99b69d44cb9e80235c979739685fe46a2be54b47b0f3a4016 = $this->env->getExtension("native_profiler");
        $__internal_436f0149820339f99b69d44cb9e80235c979739685fe46a2be54b47b0f3a4016->enter($__internal_436f0149820339f99b69d44cb9e80235c979739685fe46a2be54b47b0f3a4016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 64
        echo "    <h2>Security Token</h2>

    ";
        // line 66
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array())) {
            // line 67
            echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 69
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user", array()) == "anon.")) ? ("Anonymous") : ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "user", array()))), "html", null, true);
            echo "</span>
                <span class=\"label\">Username</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 74
            echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated", array())) ? ("yes") : ("no"))) . ".svg"));
            echo "</span>
                <span class=\"label\">Authenticated</span>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\" class=\"key\">Property</th>
                    <th scope=\"col\">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Roles</th>
                    <td>
                        ";
            // line 90
            echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "roles", array()))) ? ("none") : ($this->env->getExtension('yaml')->encode($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "roles", array())))), "html", null, true);
            echo "

                        ";
            // line 92
            if (( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "authenticated", array()) && twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "roles", array())))) {
                // line 93
                echo "                            <p class=\"help\">User is not authenticated probably because they have no roles.</p>
                        ";
            }
            // line 95
            echo "                    </td>
                </tr>

                ";
            // line 98
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "supportsRoleHierarchy", array())) {
                // line 99
                echo "                <tr>
                    <th>Inherited Roles</th>
                    <td>";
                // line 101
                echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "inheritedRoles", array()))) ? ("none") : ($this->env->getExtension('yaml')->encode($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "inheritedRoles", array())))), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            // line 104
            echo "
                ";
            // line 105
            if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array())) {
                // line 106
                echo "                <tr>
                    <th>Token class</th>
                    <td>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "tokenClass", array()), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            // line 111
            echo "            </tbody>
        </table>
    ";
        } elseif ($this->getAttribute(        // line 113
(isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "enabled", array())) {
            // line 114
            echo "        <div class=\"empty\">
            <p>There is no security token.</p>
        </div>
    ";
        } else {
            // line 118
            echo "        <div class=\"empty\">
            <p>The security component is disabled.</p>
        </div>
    ";
        }
        
        $__internal_436f0149820339f99b69d44cb9e80235c979739685fe46a2be54b47b0f3a4016->leave($__internal_436f0149820339f99b69d44cb9e80235c979739685fe46a2be54b47b0f3a4016_prof);

    }

    public function getTemplateName()
    {
        return "@Security/Collector/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 118,  285 => 114,  283 => 113,  279 => 111,  273 => 108,  269 => 106,  267 => 105,  264 => 104,  258 => 101,  254 => 99,  252 => 98,  247 => 95,  243 => 93,  241 => 92,  236 => 90,  217 => 74,  209 => 69,  205 => 67,  203 => 66,  199 => 64,  193 => 63,  182 => 58,  177 => 57,  171 => 56,  162 => 53,  159 => 52,  156 => 51,  150 => 47,  144 => 43,  141 => 42,  135 => 39,  131 => 37,  128 => 36,  122 => 33,  118 => 31,  116 => 30,  108 => 27,  100 => 22,  96 => 20,  93 => 19,  91 => 18,  88 => 17,  83 => 15,  78 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block page_title 'Security' %}*/
/* */
/* {% block toolbar %}*/
/*     {% if collector.tokenClass %}*/
/*         {% set is_authenticated = collector.enabled and collector.authenticated  %}*/
/*         {% set color_code = is_authenticated ? '' : 'yellow' %}*/
/*     {% else %}*/
/*         {% set color_code = collector.enabled ? 'red' : '' %}*/
/*     {% endif %}*/
/* */
/*     {% set icon %}*/
/*         {{ include('@Security/Collector/icon.svg') }}*/
/*         <span class="sf-toolbar-value">{{ collector.user|default('n/a') }}</span>*/
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/*         {% if collector.tokenClass %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Logged in as</b>*/
/*                 <span>{{ collector.user }}</span>*/
/*             </div>*/
/* */
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Authenticated</b>*/
/*                 <span class="sf-toolbar-status sf-toolbar-status-{{ is_authenticated ? 'green' : 'red' }}">{{ is_authenticated ? 'Yes' : 'No' }}</span>*/
/*             </div>*/
/* */
/*             {% if collector.tokenClass != null %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Token class</b>*/
/*                 <span>{{ collector.tokenClass|abbr_class }}</span>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if collector.logoutUrl %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Actions</b>*/
/*                 <span><a href="{{ collector.logoutUrl }}">Logout</a></span>*/
/*             </div>*/
/*             {% endif %}*/
/*         {% elseif collector.enabled %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <span>You are not authenticated.</span>*/
/*             </div>*/
/*         {% else %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <span>The security is disabled.</span>*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endset %}*/
/* */
/*     {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: color_code }) }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ not collector.enabled or not collector.tokenClass ? 'disabled' }}">*/
/*         <span class="icon">{{ include('@Security/Collector/icon.svg') }}</span>*/
/*         <strong>Security</strong>*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Security Token</h2>*/
/* */
/*     {% if collector.tokenClass %}*/
/*         <div class="metrics">*/
/*             <div class="metric">*/
/*                 <span class="value">{{ collector.user == 'anon.' ? 'Anonymous' : collector.user }}</span>*/
/*                 <span class="label">Username</span>*/
/*             </div>*/
/* */
/*             <div class="metric">*/
/*                 <span class="value">{{ include('@WebProfiler/Icon/' ~ (collector.authenticated ? 'yes' : 'no') ~ '.svg') }}</span>*/
/*                 <span class="label">Authenticated</span>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <table>*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th scope="col" class="key">Property</th>*/
/*                     <th scope="col">Value</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <th>Roles</th>*/
/*                     <td>*/
/*                         {{ collector.roles is empty ? 'none' : collector.roles|yaml_encode }}*/
/* */
/*                         {% if not collector.authenticated and collector.roles is empty %}*/
/*                             <p class="help">User is not authenticated probably because they have no roles.</p>*/
/*                         {% endif %}*/
/*                     </td>*/
/*                 </tr>*/
/* */
/*                 {% if collector.supportsRoleHierarchy %}*/
/*                 <tr>*/
/*                     <th>Inherited Roles</th>*/
/*                     <td>{{ collector.inheritedRoles is empty ? 'none' : collector.inheritedRoles|yaml_encode }}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/* */
/*                 {% if collector.tokenClass %}*/
/*                 <tr>*/
/*                     <th>Token class</th>*/
/*                     <td>{{ collector.tokenClass }}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% elseif collector.enabled %}*/
/*         <div class="empty">*/
/*             <p>There is no security token.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="empty">*/
/*             <p>The security component is disabled.</p>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
