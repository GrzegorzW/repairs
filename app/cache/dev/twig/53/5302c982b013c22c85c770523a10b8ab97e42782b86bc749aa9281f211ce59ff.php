<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_27f5c72afef988fb7df2ffb25dcd4a908373ed992f74ce2716b376aa05f15532 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageContainer' => array($this, 'block_pageContainer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26e7381ce27ce9eb55a5411aacbdc918046cbff8f87e4d10574882746b23b529 = $this->env->getExtension("native_profiler");
        $__internal_26e7381ce27ce9eb55a5411aacbdc918046cbff8f87e4d10574882746b23b529->enter($__internal_26e7381ce27ce9eb55a5411aacbdc918046cbff8f87e4d10574882746b23b529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
    <meta charset=\"utf-8\"/>
    ";
        // line 6
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicon.ico"), "html", null, true);
        echo "\">
    ";
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        // line 10
        echo "        ";
        // line 11
        echo "    ";
        // line 12
        echo "        ";
        // line 13
        echo "    ";
        // line 14
        echo "    ";
        // line 15
        echo "
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"/>
    <title>Pokwitowanie";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "04f3847_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_04f3847_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/04f3847_bootstrap.min_1.css");
            // line 25
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "04f3847_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_04f3847_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/04f3847_bootstrap-datepicker.min_2.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "04f3847_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_04f3847_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/04f3847_bootstrap-toggle.min_3.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "04f3847_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_04f3847_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/04f3847_style_4.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "04f3847_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_04f3847_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/04f3847_sweetalert_5.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "04f3847"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_04f3847") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/04f3847.css");
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "
    ";
        // line 28
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9ca1f63_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ca1f63_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ca1f63_jquery-2.1.4.min_1.js");
            // line 40
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "9ca1f63_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ca1f63_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ca1f63_bootstrap.min_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "9ca1f63_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ca1f63_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ca1f63_bootstrap-datepicker.min_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "9ca1f63_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ca1f63_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ca1f63_bootstrap-datepicker.pl.min_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "9ca1f63_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ca1f63_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ca1f63_bootstrap-toggle.min_5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "9ca1f63_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ca1f63_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ca1f63_sweetalert.min_6.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "9ca1f63_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ca1f63_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ca1f63_jquery.formatter.min_7.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "9ca1f63_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ca1f63_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ca1f63_inputmask.min_8.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "9ca1f63_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ca1f63_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ca1f63_jquery.inputmask.min_9.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "9ca1f63_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ca1f63_9") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ca1f63_inputmask.numeric.extensions.min_10.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "9ca1f63_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ca1f63_10") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ca1f63_moment-with-locales.min_11.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "9ca1f63"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ca1f63") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/9ca1f63.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 42
        echo "
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">

</head>
<body>
<nav class=\"navbar navbar-inverse navbar-fixed-top hidden-print\">
    <div class=\"container-fluid\">
        ";
        // line 51
        echo "        ";
        // line 52
        echo "        <span class=\"navbar-brand\">
            ";
        // line 53
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "948bb15_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_948bb15_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/948bb15_favicon_1.ico");
            // line 54
            echo "            <img style=\"height: 40px; position: absolute; top: 5px; left: 5px;\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            ";
        } else {
            // asset "948bb15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_948bb15") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/948bb15.ico");
            echo "            <img style=\"height: 40px; position: absolute; top: 5px; left: 5px;\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
            ";
        }
        unset($context["asset_url"]);
        // line 56
        echo "
            ";
        // line 58
        echo "            ";
        // line 59
        echo "                    ";
        // line 60
        echo "                        ";
        // line 61
        echo "                    ";
        // line 62
        echo "                        ";
        // line 63
        echo "                    ";
        // line 64
        echo "                    ";
        // line 65
        echo "
        </span>

        <div class=\"pull-right hamburger\" onclick=\"showNav();\">
            <span class=\"glyphicon glyphicon-menu-hamburger\"
                  style=\"color: white; font-size: 30px; cursor: pointer;\"></span>
        </div>

        <div class=\"pull-right large-viewport\">
            <span style=\"color: white; margin-right: 10px;\">";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "surname", array()), "html", null, true);
        echo "</span>
            <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-danger navbar-btn\">Wyloguj</a>
        </div>
    </div>
    <div class=\"mobile-nav\">
        <ul class=\"nav nav-sidebar mobile-nav-topbar\">
            ";
        // line 80
        if ($this->env->getExtension('security')->isGranted("ROLE_WORKER")) {
            // line 81
            echo "                ";
            $this->loadTemplate("AppBundle::navRepairer.html.twig", "AppBundle::base.html.twig", 81)->display($context);
            // line 82
            echo "            ";
        }
        // line 83
        echo "
            ";
        // line 84
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 85
            echo "                ";
            $this->loadTemplate("AppBundle::navAdmin.html.twig", "AppBundle::base.html.twig", 85)->display($context);
            // line 86
            echo "            ";
        }
        // line 87
        echo "
            ";
        // line 88
        if ((is_string($__internal_f83335e91fb62a3844128397199497ac87c542f536e09d5fd25925af318e4fbe = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_a0098b370e95b4fa02a93c86f2ab643f8b526a4a63ccd5ae5ba258d37dba3d76 = "pokwitowanie_user") && ('' === $__internal_a0098b370e95b4fa02a93c86f2ab643f8b526a4a63ccd5ae5ba258d37dba3d76 || 0 === strpos($__internal_f83335e91fb62a3844128397199497ac87c542f536e09d5fd25925af318e4fbe, $__internal_a0098b370e95b4fa02a93c86f2ab643f8b526a4a63ccd5ae5ba258d37dba3d76)))) {
            // line 89
            echo "                ";
            $this->loadTemplate("AppBundle::navUser.html.twig", "AppBundle::base.html.twig", 89)->display($context);
            // line 90
            echo "            ";
        }
        // line 91
        echo "
            ";
        // line 92
        $this->loadTemplate("AppBundle::navMobileNotifications.html.twig", "AppBundle::base.html.twig", 92)->display($context);
        // line 93
        echo "
            <li>
                <a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Wyloguj</a>
            </li>
        </ul>
    </div>
</nav>
<div class=\"wrap\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-2 sidebar hidden-print large-viewport\">
                <ul class=\"nav nav-sidebar\">
                    ";
        // line 105
        if ($this->env->getExtension('security')->isGranted("ROLE_WORKER")) {
            // line 106
            echo "                        ";
            $this->loadTemplate("AppBundle::navRepairer.html.twig", "AppBundle::base.html.twig", 106)->display($context);
            // line 107
            echo "                    ";
        }
        // line 108
        echo "
                    ";
        // line 109
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 110
            echo "                        ";
            $this->loadTemplate("AppBundle::navAdmin.html.twig", "AppBundle::base.html.twig", 110)->display($context);
            // line 111
            echo "                    ";
        }
        // line 112
        echo "
                    ";
        // line 113
        if ((is_string($__internal_9df13f88eed234ff4f89e27c1b8b0595491ba03f72c47ad3d34eba2b0854989c = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_58e412de364f35351897e86a7d8acd4639032bdf75fe15231250996b6cc857b2 = "pokwitowanie_user") && ('' === $__internal_58e412de364f35351897e86a7d8acd4639032bdf75fe15231250996b6cc857b2 || 0 === strpos($__internal_9df13f88eed234ff4f89e27c1b8b0595491ba03f72c47ad3d34eba2b0854989c, $__internal_58e412de364f35351897e86a7d8acd4639032bdf75fe15231250996b6cc857b2)))) {
            // line 114
            echo "                        ";
            $this->loadTemplate("AppBundle::navUser.html.twig", "AppBundle::base.html.twig", 114)->display($context);
            // line 115
            echo "                    ";
        }
        // line 116
        echo "
                    ";
        // line 117
        $this->loadTemplate("AppBundle::navNotifications.html.twig", "AppBundle::base.html.twig", 117)->display($context);
        // line 118
        echo "                </ul>
            </div>
            <div class=\"col-md-10 col-md-offset-2 moja-klasa-print\">
                <div class=\"content\" style=\"margin-top: 20px;\">
                    ";
        // line 122
        $this->displayBlock('pageContainer', $context, $blocks);
        // line 123
        echo "                </div>
                <div class=\"small-viewport-margin-bottom\"></div>
            </div>
        </div>
    </div>
</div>

<script>
    function showNav() {
        \$('.mobile-nav').toggleClass('on');
    }
</script>

</body>
</html>";
        
        $__internal_26e7381ce27ce9eb55a5411aacbdc918046cbff8f87e4d10574882746b23b529->leave($__internal_26e7381ce27ce9eb55a5411aacbdc918046cbff8f87e4d10574882746b23b529_prof);

    }

    // line 17
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6590ece5fb96b23782e3fe4243bd28ef3bd6c33fa652fa19e6f0785052ab14d = $this->env->getExtension("native_profiler");
        $__internal_e6590ece5fb96b23782e3fe4243bd28ef3bd6c33fa652fa19e6f0785052ab14d->enter($__internal_e6590ece5fb96b23782e3fe4243bd28ef3bd6c33fa652fa19e6f0785052ab14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e6590ece5fb96b23782e3fe4243bd28ef3bd6c33fa652fa19e6f0785052ab14d->leave($__internal_e6590ece5fb96b23782e3fe4243bd28ef3bd6c33fa652fa19e6f0785052ab14d_prof);

    }

    // line 122
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_46964f98c5d98dd9d6ed845154b5270e1fe1d11ec1e4c80b15821b70f0988d7e = $this->env->getExtension("native_profiler");
        $__internal_46964f98c5d98dd9d6ed845154b5270e1fe1d11ec1e4c80b15821b70f0988d7e->enter($__internal_46964f98c5d98dd9d6ed845154b5270e1fe1d11ec1e4c80b15821b70f0988d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        
        $__internal_46964f98c5d98dd9d6ed845154b5270e1fe1d11ec1e4c80b15821b70f0988d7e->leave($__internal_46964f98c5d98dd9d6ed845154b5270e1fe1d11ec1e4c80b15821b70f0988d7e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 122,  372 => 17,  351 => 123,  349 => 122,  343 => 118,  341 => 117,  338 => 116,  335 => 115,  332 => 114,  330 => 113,  327 => 112,  324 => 111,  321 => 110,  319 => 109,  316 => 108,  313 => 107,  310 => 106,  308 => 105,  295 => 95,  291 => 93,  289 => 92,  286 => 91,  283 => 90,  280 => 89,  278 => 88,  275 => 87,  272 => 86,  269 => 85,  267 => 84,  264 => 83,  261 => 82,  258 => 81,  256 => 80,  248 => 75,  242 => 74,  231 => 65,  229 => 64,  227 => 63,  225 => 62,  223 => 61,  221 => 60,  219 => 59,  217 => 58,  214 => 56,  200 => 54,  196 => 53,  193 => 52,  191 => 51,  181 => 42,  107 => 40,  103 => 28,  100 => 27,  62 => 25,  58 => 19,  53 => 17,  49 => 15,  47 => 14,  45 => 13,  43 => 12,  41 => 11,  39 => 10,  37 => 9,  35 => 8,  30 => 6,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="pl">*/
/* <head>*/
/*     <meta charset="utf-8"/>*/
/*     {#todo#}*/
/*     <link rel="shortcut icon" href="{{ asset('bundles/app/images/favicon.ico') }}">*/
/*     {#<link rel="shortcut icon" href="{{ asset('bundles/app/images/mf-small-logo.png') }}">#}*/
/*     {#todo#}*/
/*     {#{% if app.user.localization.company.smallLogoFile is not empty %}#}*/
/*         {#{{ asset(vich_uploader_asset(app.user.localization.company, 'smallLogoFile')) }}#}*/
/*     {#{% else %}#}*/
/*         {#{{ asset('bundles/app/images/mf-small-logo.png') }}#}*/
/*     {#{% endif %}#}*/
/*     {#">#}*/
/* */
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>*/
/*     <title>Pokwitowanie{% block title %}{% endblock %}</title>*/
/* */
/*     {% stylesheets filter='cssrewrite'*/
/*     'bundles/app/css/bootstrap.min.css'*/
/*     'bundles/app/css/bootstrap-datepicker.min.css'*/
/*     'bundles/app/css/bootstrap-toggle.min.css'*/
/*     'bundles/app/css/style.css'*/
/*     'bundles/app/css/sweetalert.css' %}*/
/*     <link rel="stylesheet" href="{{ asset_url }}"/>*/
/*     {% endstylesheets %}*/
/* */
/*     {% javascripts*/
/*     'bundles/app/js/jquery-2.1.4.min.js'*/
/*     'bundles/app/js/bootstrap.min.js'*/
/*     'bundles/app/js/bootstrap-datepicker.min.js'*/
/*     'bundles/app/locales/bootstrap-datepicker.pl.min.js'*/
/*     'bundles/app/js/bootstrap-toggle.min.js'*/
/*     'bundles/app/js/sweetalert.min.js'*/
/*     'bundles/app/js/jquery.formatter.min.js'*/
/*     'bundles/app/js/inputmask.min.js'*/
/*     'bundles/app/js/jquery.inputmask.min.js'*/
/*     'bundles/app/js/inputmask.numeric.extensions.min.js'*/
/*     'bundles/app/js/moment-with-locales.min.js'%}*/
/*     <script src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/*     <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">*/
/* */
/* </head>*/
/* <body>*/
/* <nav class="navbar navbar-inverse navbar-fixed-top hidden-print">*/
/*     <div class="container-fluid">*/
/*         {#todo#}*/
/*         {#<a class="navbar-brand" href="{{ company_service.company.mainSite }}">#}*/
/*         <span class="navbar-brand">*/
/*             {% image 'bundles/app/images/favicon.ico' %}*/
/*             <img style="height: 40px; position: absolute; top: 5px; left: 5px;" src="{{ asset_url }}"/>*/
/*             {% endimage %}*/
/* */
/*             {#<img style="height: 40px; position: absolute; top: 5px; left: 5px;" src="#}*/
/*             {#todo#}*/
/*                     {#{% if app.user.localization.company.smallLogoFile is not empty %}#}*/
/*                         {#{{ asset(vich_uploader_asset(app.user.localization.company, 'smallLogoFile')) }}#}*/
/*                     {#{% else %}#}*/
/*                         {#{{ asset('bundles/app/images/mf-small-logo.png') }}#}*/
/*                     {#{% endif %}#}*/
/*                     {#"/>#}*/
/* */
/*         </span>*/
/* */
/*         <div class="pull-right hamburger" onclick="showNav();">*/
/*             <span class="glyphicon glyphicon-menu-hamburger"*/
/*                   style="color: white; font-size: 30px; cursor: pointer;"></span>*/
/*         </div>*/
/* */
/*         <div class="pull-right large-viewport">*/
/*             <span style="color: white; margin-right: 10px;">{{ app.user.name }} {{ app.user.surname }}</span>*/
/*             <a href="{{ path('fos_user_security_logout') }}" class="btn btn-danger navbar-btn">Wyloguj</a>*/
/*         </div>*/
/*     </div>*/
/*     <div class="mobile-nav">*/
/*         <ul class="nav nav-sidebar mobile-nav-topbar">*/
/*             {% if is_granted('ROLE_WORKER') %}*/
/*                 {% include 'AppBundle::navRepairer.html.twig' %}*/
/*             {% endif %}*/
/* */
/*             {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                 {% include 'AppBundle::navAdmin.html.twig' %}*/
/*             {% endif %}*/
/* */
/*             {% if(app.request.get('_route') starts with 'pokwitowanie_user') %}*/
/*                 {% include 'AppBundle::navUser.html.twig' %}*/
/*             {% endif %}*/
/* */
/*             {% include 'AppBundle::navMobileNotifications.html.twig' %}*/
/* */
/*             <li>*/
/*                 <a href="{{ path('fos_user_security_logout') }}">Wyloguj</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* </nav>*/
/* <div class="wrap">*/
/*     <div class="container-fluid">*/
/*         <div class="row">*/
/*             <div class="col-md-2 sidebar hidden-print large-viewport">*/
/*                 <ul class="nav nav-sidebar">*/
/*                     {% if is_granted('ROLE_WORKER') %}*/
/*                         {% include 'AppBundle::navRepairer.html.twig' %}*/
/*                     {% endif %}*/
/* */
/*                     {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                         {% include 'AppBundle::navAdmin.html.twig' %}*/
/*                     {% endif %}*/
/* */
/*                     {% if(app.request.get('_route') starts with 'pokwitowanie_user') %}*/
/*                         {% include 'AppBundle::navUser.html.twig' %}*/
/*                     {% endif %}*/
/* */
/*                     {% include 'AppBundle::navNotifications.html.twig' %}*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="col-md-10 col-md-offset-2 moja-klasa-print">*/
/*                 <div class="content" style="margin-top: 20px;">*/
/*                     {% block pageContainer %}{% endblock %}*/
/*                 </div>*/
/*                 <div class="small-viewport-margin-bottom"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <script>*/
/*     function showNav() {*/
/*         $('.mobile-nav').toggleClass('on');*/
/*     }*/
/* </script>*/
/* */
/* </body>*/
/* </html>*/
