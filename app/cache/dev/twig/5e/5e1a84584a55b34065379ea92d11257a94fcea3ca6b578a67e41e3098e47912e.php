<?php

/* AppBundle:Emails:leaveOpinion.html.twig */
class __TwigTemplate_9596fd99951d4b51ff02cd9bfdbc0bf670df842b1f0eef6f41c82c6bbe9e564d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Emails:base.html.twig", "AppBundle:Emails:leaveOpinion.html.twig", 1);
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
        $__internal_bc902a9e37b338916d5e11c10950884ddec438bcc46f4ab94425734ffb27a9d8 = $this->env->getExtension("native_profiler");
        $__internal_bc902a9e37b338916d5e11c10950884ddec438bcc46f4ab94425734ffb27a9d8->enter($__internal_bc902a9e37b338916d5e11c10950884ddec438bcc46f4ab94425734ffb27a9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Emails:leaveOpinion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc902a9e37b338916d5e11c10950884ddec438bcc46f4ab94425734ffb27a9d8->leave($__internal_bc902a9e37b338916d5e11c10950884ddec438bcc46f4ab94425734ffb27a9d8_prof);

    }

    // line 3
    public function block_messageContainer($context, array $blocks = array())
    {
        $__internal_dfdaf074aeb02f003016bed9865a933d2a78c215aa2af9a5df13147b76d74196 = $this->env->getExtension("native_profiler");
        $__internal_dfdaf074aeb02f003016bed9865a933d2a78c215aa2af9a5df13147b76d74196->enter($__internal_dfdaf074aeb02f003016bed9865a933d2a78c215aa2af9a5df13147b76d74196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageContainer"));

        // line 4
        echo "
    W celu poprawy jakości obsługi prosimy Cię o wyrażenie opinii o naprawie. Twoje zdanie jest dla nas bardzo cenne.
    <br><br>
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pokwitowanie_user_panel_details", array("id" => $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">Dodaj opinię</a><br><br>

    ";
        // line 9
        if ( !(null === (isset($context["additionalMessage"]) ? $context["additionalMessage"] : $this->getContext($context, "additionalMessage")))) {
            // line 10
            echo "        Wiadomość od serwisanta:<br>
        ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["additionalMessage"]) ? $context["additionalMessage"] : $this->getContext($context, "additionalMessage")), "html", null, true);
            echo "
    ";
        }
        // line 13
        echo "
";
        
        $__internal_dfdaf074aeb02f003016bed9865a933d2a78c215aa2af9a5df13147b76d74196->leave($__internal_dfdaf074aeb02f003016bed9865a933d2a78c215aa2af9a5df13147b76d74196_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Emails:leaveOpinion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  55 => 11,  52 => 10,  50 => 9,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle:Emails:base.html.twig" %}*/
/* */
/* {% block messageContainer %}*/
/* */
/*     W celu poprawy jakości obsługi prosimy Cię o wyrażenie opinii o naprawie. Twoje zdanie jest dla nas bardzo cenne.*/
/*     <br><br>*/
/*     <a href="{{ url('pokwitowanie_user_panel_details', {'id': repair.id }) }}" target="_blank">Dodaj opinię</a><br><br>*/
/* */
/*     {% if additionalMessage is not null %}*/
/*         Wiadomość od serwisanta:<br>*/
/*         {{ additionalMessage }}*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
