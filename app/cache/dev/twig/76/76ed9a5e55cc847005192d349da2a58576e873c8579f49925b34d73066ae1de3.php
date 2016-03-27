<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c3525b68d905c30164d227fe160cfb31d729ebaae9d3844e68c04a09e81fb95b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageContainer' => array($this, 'block_pageContainer'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4baef8052a25c6c13a4aa55766d043af35bd47236db84f7fc4d497dcdcb2b42c = $this->env->getExtension("native_profiler");
        $__internal_4baef8052a25c6c13a4aa55766d043af35bd47236db84f7fc4d497dcdcb2b42c->enter($__internal_4baef8052a25c6c13a4aa55766d043af35bd47236db84f7fc4d497dcdcb2b42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 5
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicon.ico"), "html", null, true);
        echo "\">
    ";
        // line 7
        echo "    <meta charset=\"utf-8\"/>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"/>
    <title>Pokwitowanie";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "26e5d80_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_26e5d80_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/26e5d80_bootstrap.min_1.css");
            // line 15
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "26e5d80_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_26e5d80_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/26e5d80_style_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "26e5d80_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_26e5d80_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/26e5d80_sweetalert_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "26e5d80"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_26e5d80") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/26e5d80.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "
    ";
        // line 18
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8bc0093_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8bc0093_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/8bc0093_jquery-2.1.4.min_1.js");
            // line 23
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "8bc0093_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8bc0093_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/8bc0093_bootstrap.min_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "8bc0093_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8bc0093_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/8bc0093_sweetalert.min_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "8bc0093"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8bc0093") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/8bc0093.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 25
        echo "
    <script type=\"text/javascript\">
        function toggle_visibility(id) {
            var e = document.getElementById(id);
            if (e.style.display == 'block')
                e.style.display = 'none';
            else
                e.style.display = 'block';
        }
    </script>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">

</head>
<body>
    <div class=\"container login-layout\" style=\"padding-top: 150px; max-height: 150px; max-width: 300px;\">
        ";
        // line 42
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7b09e58_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7b09e58_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/7b09e58_logo1_1.jpg");
            // line 43
            echo "        ";
            // line 44
            echo "        ";
            // line 45
            echo "        <a href=\"#\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" style=\"margin-bottom: 40px;\"/></a>
        ";
        } else {
            // asset "7b09e58"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7b09e58") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/7b09e58.jpg");
            // line 43
            echo "        ";
            // line 44
            echo "        ";
            // line 45
            echo "        <a href=\"#\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" style=\"margin-bottom: 40px;\"/></a>
        ";
        }
        unset($context["asset_url"]);
        // line 47
        echo "
        ";
        // line 48
        $this->displayBlock('pageContainer', $context, $blocks);
        // line 49
        echo "        <div>
            ";
        // line 50
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 52
        echo "        </div>

        <div style=\"margin-top: 10px;\">
            ";
        // line 55
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 56
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        }
        // line 61
        echo "        </div>

        ";
        // line 63
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 64
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 65
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 66
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 67
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "        ";
        }
        // line 72
        echo "
    </div>
</body>
</html>

";
        
        $__internal_4baef8052a25c6c13a4aa55766d043af35bd47236db84f7fc4d497dcdcb2b42c->leave($__internal_4baef8052a25c6c13a4aa55766d043af35bd47236db84f7fc4d497dcdcb2b42c_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_d871cf160044613b039fd91d5dcd2cf1f36e3ccc5ebb587fdb7395b543585a6a = $this->env->getExtension("native_profiler");
        $__internal_d871cf160044613b039fd91d5dcd2cf1f36e3ccc5ebb587fdb7395b543585a6a->enter($__internal_d871cf160044613b039fd91d5dcd2cf1f36e3ccc5ebb587fdb7395b543585a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d871cf160044613b039fd91d5dcd2cf1f36e3ccc5ebb587fdb7395b543585a6a->leave($__internal_d871cf160044613b039fd91d5dcd2cf1f36e3ccc5ebb587fdb7395b543585a6a_prof);

    }

    // line 48
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_b09dbc3d4e485b92bbeb24e7f6e6d84e257ea6365ce005efacb144abf7d533ab = $this->env->getExtension("native_profiler");
        $__internal_b09dbc3d4e485b92bbeb24e7f6e6d84e257ea6365ce005efacb144abf7d533ab->enter($__internal_b09dbc3d4e485b92bbeb24e7f6e6d84e257ea6365ce005efacb144abf7d533ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        
        $__internal_b09dbc3d4e485b92bbeb24e7f6e6d84e257ea6365ce005efacb144abf7d533ab->leave($__internal_b09dbc3d4e485b92bbeb24e7f6e6d84e257ea6365ce005efacb144abf7d533ab_prof);

    }

    // line 50
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e5479b7e5340431914c14f52e402fbc7c9eafc1420aa51ed13f31d4ffb732e6 = $this->env->getExtension("native_profiler");
        $__internal_8e5479b7e5340431914c14f52e402fbc7c9eafc1420aa51ed13f31d4ffb732e6->enter($__internal_8e5479b7e5340431914c14f52e402fbc7c9eafc1420aa51ed13f31d4ffb732e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 51
        echo "            ";
        
        $__internal_8e5479b7e5340431914c14f52e402fbc7c9eafc1420aa51ed13f31d4ffb732e6->leave($__internal_8e5479b7e5340431914c14f52e402fbc7c9eafc1420aa51ed13f31d4ffb732e6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 51,  258 => 50,  247 => 48,  236 => 9,  224 => 72,  221 => 71,  215 => 70,  206 => 67,  201 => 66,  196 => 65,  191 => 64,  189 => 63,  185 => 61,  179 => 58,  175 => 57,  170 => 56,  168 => 55,  163 => 52,  161 => 50,  158 => 49,  156 => 48,  153 => 47,  146 => 45,  144 => 44,  142 => 43,  134 => 45,  132 => 44,  130 => 43,  125 => 42,  107 => 25,  81 => 23,  77 => 18,  74 => 17,  48 => 15,  44 => 11,  39 => 9,  35 => 7,  30 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     {#todo#}*/
/*     <link rel="shortcut icon" href="{{ asset('bundles/app/images/favicon.ico') }}">*/
/*     {#<link rel="shortcut icon" href="{{ asset('bundles/app/images/mf-small-logo.png') }}">#}*/
/*     <meta charset="utf-8"/>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>*/
/*     <title>Pokwitowanie{% block title %}{% endblock %}</title>*/
/* */
/*     {% stylesheets filter='cssrewrite'*/
/*     'bundles/app/css/bootstrap.min.css'*/
/*     'bundles/app/css/style.css'*/
/*     'bundles/app/css/sweetalert.css' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}"/>*/
/*     {% endstylesheets %}*/
/* */
/*     {% javascripts*/
/*     'bundles/app/js/jquery-2.1.4.min.js'*/
/*     'bundles/app/js/bootstrap.min.js'*/
/*     'bundles/app/js/sweetalert.min.js'*/
/*     %}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/*     <script type="text/javascript">*/
/*         function toggle_visibility(id) {*/
/*             var e = document.getElementById(id);*/
/*             if (e.style.display == 'block')*/
/*                 e.style.display = 'none';*/
/*             else*/
/*                 e.style.display = 'block';*/
/*         }*/
/*     </script>*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">*/
/* */
/* </head>*/
/* <body>*/
/*     <div class="container login-layout" style="padding-top: 150px; max-height: 150px; max-width: 300px;">*/
/*         {#{% image 'bundles/app/images/mf-logo.png' %}#}*/
/*         {% image 'bundles/app/images/logo1.jpg' %}*/
/*         {#todo#}*/
/*         {#<a href="{{ absolute_url(company_service.company.mainSite) }}"><img src="{{ asset_url }}" style="margin-bottom: 40px;"/></a>#}*/
/*         <a href="#"><img src="{{ asset_url }}" style="margin-bottom: 40px;"/></a>*/
/*         {% endimage %}*/
/* */
/*         {% block pageContainer %}{% endblock %}*/
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/* */
/*         <div style="margin-top: 10px;">*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*     </div>*/
/* </body>*/
/* </html>*/
/* */
/* */
