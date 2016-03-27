<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_d3bbcdc5db71fe3b92fd434938359b25348cfdffbf86d8326aa91f2ee201198c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'pageContainer' => array($this, 'block_pageContainer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72b459eacef0d4001ad6e18735e497331022d95da987899e12c2c4e3bcb077ca = $this->env->getExtension("native_profiler");
        $__internal_72b459eacef0d4001ad6e18735e497331022d95da987899e12c2c4e3bcb077ca->enter($__internal_72b459eacef0d4001ad6e18735e497331022d95da987899e12c2c4e3bcb077ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72b459eacef0d4001ad6e18735e497331022d95da987899e12c2c4e3bcb077ca->leave($__internal_72b459eacef0d4001ad6e18735e497331022d95da987899e12c2c4e3bcb077ca_prof);

    }

    // line 5
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_5471ab15adc78c963ce704b4f40c767fc2c654f7607ae93e3be997660614d42a = $this->env->getExtension("native_profiler");
        $__internal_5471ab15adc78c963ce704b4f40c767fc2c654f7607ae93e3be997660614d42a->enter($__internal_5471ab15adc78c963ce704b4f40c767fc2c654f7607ae93e3be997660614d42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div class=\"alert alert-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "    <form class=\"form-signin\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" style=\"margin-bottom: 10px;\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

        <label for=\"username\" class=\"sr-only\">Login</label>
        <input type=\"text\" id=\"username\" class=\"form-control\" style=\"margin-bottom: 10px !important;\" name=\"_username\"
               placeholder=\"Login lub e-mail\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required autofocus>

        <label for=\"password\" class=\"sr-only\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"password\" id=\"inputPassword\" name=\"_password\" class=\"form-control\"
               placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\" required>

        <div class=\"checkbox\">
            <label for=\"remember_me\">
                <input type=\"checkbox\" id=\"password\" value=\"on\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
            </label>
        </div>

        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" name=\"_submit\"
                value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
    </form>

    <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Nie znasz hasła?</a>
";
        
        $__internal_5471ab15adc78c963ce704b4f40c767fc2c654f7607ae93e3be997660614d42a->leave($__internal_5471ab15adc78c963ce704b4f40c767fc2c654f7607ae93e3be997660614d42a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 30,  86 => 27,  78 => 22,  71 => 18,  66 => 16,  61 => 14,  54 => 10,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block pageContainer %}*/
/*     {% if error %}*/
/*         <div class="alert alert-warning">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/*     <form class="form-signin" action="{{ path("fos_user_security_check") }}" method="post" style="margin-bottom: 10px;">*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/* */
/*         <label for="username" class="sr-only">Login</label>*/
/*         <input type="text" id="username" class="form-control" style="margin-bottom: 10px !important;" name="_username"*/
/*                placeholder="Login lub e-mail" value="{{ last_username }}" required autofocus>*/
/* */
/*         <label for="password" class="sr-only">{{ 'security.login.password'|trans }}</label>*/
/*         <input type="password" id="inputPassword" name="_password" class="form-control"*/
/*                placeholder="{{ 'security.login.password'|trans }}" required>*/
/* */
/*         <div class="checkbox">*/
/*             <label for="remember_me">*/
/*                 <input type="checkbox" id="password" value="on">{{ 'security.login.remember_me'|trans }}*/
/*             </label>*/
/*         </div>*/
/* */
/*         <button class="btn btn-lg btn-primary btn-block" type="submit" name="_submit"*/
/*                 value="{{ 'security.login.submit'|trans }}">{{ 'security.login.submit'|trans }}</button>*/
/*     </form>*/
/* */
/*     <a href="{{ path('fos_user_resetting_request') }}">Nie znasz hasła?</a>*/
/* {% endblock pageContainer %}*/
