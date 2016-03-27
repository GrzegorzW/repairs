<?php

/* AppBundle::navAdmin.html.twig */
class __TwigTemplate_eb6fadfa2b58594c9662eda1eef2865e0414d2face3592931883d9c1674f205d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6269ed50be170461c80a04fa585729e7c29d07bea0cae73da3022e8e9be6e2a = $this->env->getExtension("native_profiler");
        $__internal_b6269ed50be170461c80a04fa585729e7c29d07bea0cae73da3022e8e9be6e2a->enter($__internal_b6269ed50be170461c80a04fa585729e7c29d07bea0cae73da3022e8e9be6e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::navAdmin.html.twig"));

        // line 1
        echo "<li ";
        if ((is_string($__internal_b0ca5d34dee6f9d7587102b59bf0e2be29420dd7c0e359e7a68d4665a5945945 = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_dc0944e2b88e7133fdd6b23cdab9b761fd82ac507d0c3f5e74150881b78fd5fa = "admin_report") && ('' === $__internal_dc0944e2b88e7133fdd6b23cdab9b761fd82ac507d0c3f5e74150881b78fd5fa || 0 === strpos($__internal_b0ca5d34dee6f9d7587102b59bf0e2be29420dd7c0e359e7a68d4665a5945945, $__internal_dc0944e2b88e7133fdd6b23cdab9b761fd82ac507d0c3f5e74150881b78fd5fa)))) {
            echo " class=\"active\"";
        }
        echo "><a
            href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("admin_report");
        echo "\" title=\"Raport\">Raport</a></li>
<li ";
        // line 3
        if ((is_string($__internal_c2efdc0153bdfb6a8747ed2241ad527e5a72168c793cc2ef47a443e40356b19c = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_2b0d7118328b511ad7229195ce47e4632bf7c6022d9c92bc872227b0e3291b2d = "admin_management") && ('' === $__internal_2b0d7118328b511ad7229195ce47e4632bf7c6022d9c92bc872227b0e3291b2d || 0 === strpos($__internal_c2efdc0153bdfb6a8747ed2241ad527e5a72168c793cc2ef47a443e40356b19c, $__internal_2b0d7118328b511ad7229195ce47e4632bf7c6022d9c92bc872227b0e3291b2d)))) {
            echo " class=\"active\"";
        }
        echo "><a
            href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("admin_management");
        echo "\" title=\"Zarządzanie\">Zarządzanie</a></li>";
        
        $__internal_b6269ed50be170461c80a04fa585729e7c29d07bea0cae73da3022e8e9be6e2a->leave($__internal_b6269ed50be170461c80a04fa585729e7c29d07bea0cae73da3022e8e9be6e2a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::navAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  33 => 3,  29 => 2,  22 => 1,);
    }
}
/* <li {% if(app.request.get('_route') starts with 'admin_report') %} class="active"{% endif %}><a*/
/*             href="{{ path('admin_report') }}" title="Raport">Raport</a></li>*/
/* <li {% if(app.request.get('_route') starts with 'admin_management') %} class="active"{% endif %}><a*/
/*             href="{{ path('admin_management') }}" title="Zarządzanie">Zarządzanie</a></li>*/
