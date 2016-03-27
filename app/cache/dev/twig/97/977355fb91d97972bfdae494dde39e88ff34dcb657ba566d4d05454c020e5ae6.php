<?php

/* MisdPhoneNumberBundle:Form:tel_bootstrap.html.twig */
class __TwigTemplate_0e07b41bd1ebe78edf69e64fcfa452c9974d80e5f5b6342279ac2d83b650f5d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tel_widget' => array($this, 'block_tel_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f05be64028be25ed9281491f86427aecbf37aaaec81d757bf5c23c93dd1da5d = $this->env->getExtension("native_profiler");
        $__internal_2f05be64028be25ed9281491f86427aecbf37aaaec81d757bf5c23c93dd1da5d->enter($__internal_2f05be64028be25ed9281491f86427aecbf37aaaec81d757bf5c23c93dd1da5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MisdPhoneNumberBundle:Form:tel_bootstrap.html.twig"));

        // line 1
        $this->displayBlock('tel_widget', $context, $blocks);
        
        $__internal_2f05be64028be25ed9281491f86427aecbf37aaaec81d757bf5c23c93dd1da5d->leave($__internal_2f05be64028be25ed9281491f86427aecbf37aaaec81d757bf5c23c93dd1da5d_prof);

    }

    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_b45bc00208ead8df90f8f14ebf5d50fe3356c96737090ec3497eca807ef4cad6 = $this->env->getExtension("native_profiler");
        $__internal_b45bc00208ead8df90f8f14ebf5d50fe3356c96737090ec3497eca807ef4cad6->enter($__internal_b45bc00208ead8df90f8f14ebf5d50fe3356c96737090ec3497eca807ef4cad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 2
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) === constant("Misd\\PhoneNumberBundle\\Form\\Type\\PhoneNumberType::WIDGET_COUNTRY_CHOICE"))) {
            // line 3
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 4
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 5
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), 'widget');
            // line 6
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "number", array()), 'widget');
            // line 7
            echo "</div>
    ";
        } else {
            // line 9
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_b45bc00208ead8df90f8f14ebf5d50fe3356c96737090ec3497eca807ef4cad6->leave($__internal_b45bc00208ead8df90f8f14ebf5d50fe3356c96737090ec3497eca807ef4cad6_prof);

    }

    public function getTemplateName()
    {
        return "MisdPhoneNumberBundle:Form:tel_bootstrap.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  48 => 7,  46 => 6,  44 => 5,  40 => 4,  37 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block tel_widget -%}*/
/*     {% if widget is constant('Misd\\PhoneNumberBundle\\Form\\Type\\PhoneNumberType::WIDGET_COUNTRY_CHOICE') %}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_widget(form.country) -}}*/
/*             {{- form_widget(form.number) -}}*/
/*         </div>*/
/*     {% else -%}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {%- endif %}*/
/* {%- endblock tel_widget %}*/
/* */
