<?php

/* AppBundle:Emails:newMessage.html.twig */
class __TwigTemplate_4fa603278c76055ddccd9f260d2b03340af8642d51e40698cc100063b7962916 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Emails:base.html.twig", "AppBundle:Emails:newMessage.html.twig", 1);
        $this->blocks = array(
            'messageContainer' => array($this, 'block_messageContainer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Emails:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b56c67d3b8fceb3567c93cd5a3bd3722e54040e69f2a4f52bcc5d93c68e7e128 = $this->env->getExtension("native_profiler");
        $__internal_b56c67d3b8fceb3567c93cd5a3bd3722e54040e69f2a4f52bcc5d93c68e7e128->enter($__internal_b56c67d3b8fceb3567c93cd5a3bd3722e54040e69f2a4f52bcc5d93c68e7e128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Emails:newMessage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b56c67d3b8fceb3567c93cd5a3bd3722e54040e69f2a4f52bcc5d93c68e7e128->leave($__internal_b56c67d3b8fceb3567c93cd5a3bd3722e54040e69f2a4f52bcc5d93c68e7e128_prof);

    }

    // line 3
    public function block_messageContainer($context, array $blocks = array())
    {
        $__internal_5fe399b4c7a181cfd236c9cd6e3b358674df95bebfede555422c7f037a4b7f60 = $this->env->getExtension("native_profiler");
        $__internal_5fe399b4c7a181cfd236c9cd6e3b358674df95bebfede555422c7f037a4b7f60->enter($__internal_5fe399b4c7a181cfd236c9cd6e3b358674df95bebfede555422c7f037a4b7f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageContainer"));

        // line 4
        echo "
    masz nową wiadomość dotyczącą naprawy: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "device", array()), "brand", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "device", array()), "model", array()), "html", null, true);
        echo " (ID: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "device", array()), "altId", array()), "html", null, true);
        echo ").<br><br>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pokwitowanie_user_panel_details", array("id" => $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">Przeczytaj</a>

";
        
        $__internal_5fe399b4c7a181cfd236c9cd6e3b358674df95bebfede555422c7f037a4b7f60->leave($__internal_5fe399b4c7a181cfd236c9cd6e3b358674df95bebfede555422c7f037a4b7f60_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Emails:newMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle:Emails:base.html.twig" %}*/
/* */
/* {% block messageContainer %}*/
/* */
/*     masz nową wiadomość dotyczącą naprawy: {{ repair.device.brand }} {{ repair.device.model }} (ID: {{ repair.device.altId }}).<br><br>*/
/*     <a href="{{ url('pokwitowanie_user_panel_details', {'id': repair.id }) }}" target="_blank">Przeczytaj</a>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
