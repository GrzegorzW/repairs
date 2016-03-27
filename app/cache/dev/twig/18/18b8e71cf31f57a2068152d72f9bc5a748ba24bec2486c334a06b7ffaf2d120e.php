<?php

/* AppBundle::navUser.html.twig */
class __TwigTemplate_3ec81dd83432a7bfddcdc65af6f6de111c44e951e235f5ced0eef2ae8aa16b87 extends Twig_Template
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
        $__internal_8118bf2dcdf58bd47d0a5d104c8342d3fa667b7633cfc7b70877699455a8b52c = $this->env->getExtension("native_profiler");
        $__internal_8118bf2dcdf58bd47d0a5d104c8342d3fa667b7633cfc7b70877699455a8b52c->enter($__internal_8118bf2dcdf58bd47d0a5d104c8342d3fa667b7633cfc7b70877699455a8b52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::navUser.html.twig"));

        // line 1
        echo "<li ";
        if ((is_string($__internal_cb9f4e1ac4facc850aec6b474c3627feca09b88a4b21355797e5473090fb6e42 = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_80ce43180a2923579ffba9154e42e26188b5734f6edc88f7e4db5b965cbdf1ec = "pokwitowanie_user") && ('' === $__internal_80ce43180a2923579ffba9154e42e26188b5734f6edc88f7e4db5b965cbdf1ec || 0 === strpos($__internal_cb9f4e1ac4facc850aec6b474c3627feca09b88a4b21355797e5473090fb6e42, $__internal_80ce43180a2923579ffba9154e42e26188b5734f6edc88f7e4db5b965cbdf1ec)))) {
            echo " class=\"active\"";
        }
        echo "><a
            href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("pokwitowanie_user_panel");
        echo "\" title=\"Naprawy\">Panel klienta</a></li>";
        
        $__internal_8118bf2dcdf58bd47d0a5d104c8342d3fa667b7633cfc7b70877699455a8b52c->leave($__internal_8118bf2dcdf58bd47d0a5d104c8342d3fa667b7633cfc7b70877699455a8b52c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::navUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 2,  22 => 1,);
    }
}
/* <li {% if(app.request.get('_route') starts with 'pokwitowanie_user') %} class="active"{% endif %}><a*/
/*             href="{{ path('pokwitowanie_user_panel') }}" title="Naprawy">Panel klienta</a></li>*/
