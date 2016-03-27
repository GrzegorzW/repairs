<?php

/* AppBundle:Emails:base.html.twig */
class __TwigTemplate_2995b7cbeb22d48d32737386c14d8b30ada23ace0e6ea2d429c0ae1b4cde68c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'messageContainer' => array($this, 'block_messageContainer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6189887611834ae7672dcfa009c1316fb5d8cd7d248439a38345009e698de48a = $this->env->getExtension("native_profiler");
        $__internal_6189887611834ae7672dcfa009c1316fb5d8cd7d248439a38345009e698de48a->enter($__internal_6189887611834ae7672dcfa009c1316fb5d8cd7d248439a38345009e698de48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Emails:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
</head>
<body>
    Witamy,<br>
    <br>
    ";
        // line 9
        $this->displayBlock('messageContainer', $context, $blocks);
        echo "<br>
    <br>
    <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("pokwitowanie_user_panel_details", array("id" => $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">Status naprawy on-line</a><br>
    <br>
    Serdecznie pozdrawiamy.<br>
    <br>
    <hr/>
    ";
        // line 16
        $context["company"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "localization", array()), "company", array());
        // line 17
        echo "    <table>
        <tr>
            <td valign=\"top\" style=\"min-width: 130px;\">
                <strong>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "name", array()), "html", null, true);
        echo "</strong><br>
                ul. ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "startLocalization", array()), "street", array()), "html", null, true);
        echo "<br>
                ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "startLocalization", array()), "postCode", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "startLocalization", array()), "city", array()), "html", null, true);
        echo "<br>
            </td>
            <td valign=\"top\" style=\"min-width: 140px;\">
                <strong>Godziny otwarcia</strong><br>
                Poniedziałek – Piątek: ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "startLocalization", array()), "monFriOpen", array()), "html", null, true);
        echo "<br>
                ";
        // line 27
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "startLocalization", array()), "satOpen", array()))) {
            echo "Sobota: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "startLocalization", array()), "satOpen", array()), "html", null, true);
        }
        // line 28
        echo "            </td>
            <td valign=\"top\" style=\"min-width: 110px;\">
                <strong>Telefon</strong><br>
                ";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "startLocalization", array()), "tel1", array()))), "html", null, true);
        echo "<br>
                ";
        // line 32
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "startLocalization", array()), "tel2", array()))) {
            // line 33
            echo "                    ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "startLocalization", array()), "tel2", array()))), "html", null, true);
            echo "<br>
                ";
        }
        // line 35
        echo "                ";
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "startLocalization", array()), "tel3", array()))) {
            // line 36
            echo "                    ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "startLocalization", array()), "tel3", array()))), "html", null, true);
            echo "<br>
                ";
        }
        // line 38
        echo "            </td>
            <td valign=\"top\">
                <strong>Email</strong><br>
                ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "startLocalization", array()), "emailFirst", array()), "html", null, true);
        echo "<br>
                ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "startLocalization", array()), "emailSecond", array()), "html", null, true);
        echo "
            </td>
        </tr>
        <tr>
            <td colspan=\"4\" valign=\"top\">
                <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "mainSite", array()), "html", null, true);
        echo "\" target=\"_blank\">
                    <img alt=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "mainSite", array()), "html", null, true);
        echo "\" style=\"max-height: 100px; max-width: 200px;\" src=\"
                    ";
        // line 49
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "localization", array()), "company", array()), "logoFile", array()))) {
            // line 50
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getUriForPath", array(0 => $this->env->getExtension('vich_uploader')->asset((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "logoFile")), "method"), "html", null, true);
            echo "
                    ";
        } else {
            // line 52
            echo "                        ";
            // line 53
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicon.ico")), "html", null, true);
            echo "
                    ";
        }
        // line 55
        echo "                    \"/>
                </a>
            </td>
        </tr>
    </table>
</body>";
        
        $__internal_6189887611834ae7672dcfa009c1316fb5d8cd7d248439a38345009e698de48a->leave($__internal_6189887611834ae7672dcfa009c1316fb5d8cd7d248439a38345009e698de48a_prof);

    }

    // line 9
    public function block_messageContainer($context, array $blocks = array())
    {
        $__internal_2532c49e7ce42b6b460fe826787021f62ddda48894f57613e46fdd9c4f6f73dc = $this->env->getExtension("native_profiler");
        $__internal_2532c49e7ce42b6b460fe826787021f62ddda48894f57613e46fdd9c4f6f73dc->enter($__internal_2532c49e7ce42b6b460fe826787021f62ddda48894f57613e46fdd9c4f6f73dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageContainer"));

        
        $__internal_2532c49e7ce42b6b460fe826787021f62ddda48894f57613e46fdd9c4f6f73dc->leave($__internal_2532c49e7ce42b6b460fe826787021f62ddda48894f57613e46fdd9c4f6f73dc_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Emails:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 9,  146 => 55,  140 => 53,  138 => 52,  132 => 50,  130 => 49,  126 => 48,  122 => 47,  114 => 42,  110 => 41,  105 => 38,  99 => 36,  96 => 35,  90 => 33,  88 => 32,  84 => 31,  79 => 28,  74 => 27,  70 => 26,  61 => 22,  57 => 21,  53 => 20,  48 => 17,  46 => 16,  38 => 11,  33 => 9,  23 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>*/
/* </head>*/
/* <body>*/
/*     Witamy,<br>*/
/*     <br>*/
/*     {% block messageContainer %}{% endblock %}<br>*/
/*     <br>*/
/*     <a href="{{ url('pokwitowanie_user_panel_details', {'id': repair.id}) }}" target="_blank">Status naprawy on-line</a><br>*/
/*     <br>*/
/*     Serdecznie pozdrawiamy.<br>*/
/*     <br>*/
/*     <hr/>*/
/*     {% set company = app.user.localization.company %}*/
/*     <table>*/
/*         <tr>*/
/*             <td valign="top" style="min-width: 130px;">*/
/*                 <strong>{{ company.name }}</strong><br>*/
/*                 ul. {{ repair.startLocalization.street }}<br>*/
/*                 {{ repair.startLocalization.postCode }} {{ repair.startLocalization.city }}<br>*/
/*             </td>*/
/*             <td valign="top" style="min-width: 140px;">*/
/*                 <strong>Godziny otwarcia</strong><br>*/
/*                 Poniedziałek – Piątek: {{ repair.startLocalization.monFriOpen }}<br>*/
/*                 {% if repair.startLocalization.satOpen is not empty %}Sobota: {{ repair.startLocalization.satOpen }}{% endif %}*/
/*             </td>*/
/*             <td valign="top" style="min-width: 110px;">*/
/*                 <strong>Telefon</strong><br>*/
/*                 {{ phone_number_format(repair.startLocalization.tel1) }}<br>*/
/*                 {% if repair.startLocalization.tel2 is not null %}*/
/*                     {{ phone_number_format(repair.startLocalization.tel2) }}<br>*/
/*                 {% endif %}*/
/*                 {% if repair.startLocalization.tel3 is not null %}*/
/*                     {{ phone_number_format(repair.startLocalization.tel3) }}<br>*/
/*                 {% endif %}*/
/*             </td>*/
/*             <td valign="top">*/
/*                 <strong>Email</strong><br>*/
/*                 {{ repair.startLocalization.emailFirst }}<br>*/
/*                 {{ repair.startLocalization.emailSecond }}*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td colspan="4" valign="top">*/
/*                 <a href="{{ company.mainSite }}" target="_blank">*/
/*                     <img alt="{{ company.mainSite }}" style="max-height: 100px; max-width: 200px;" src="*/
/*                     {% if app.user.localization.company.logoFile is not empty %}*/
/*                         {{ app.request.getUriForPath(vich_uploader_asset(company, 'logoFile')) }}*/
/*                     {% else %}*/
/*                         {#{{ absolute_url(asset('bundles/app/images/mf-logo.png')) }}#}*/
/*                         {{ absolute_url(asset('bundles/app/images/favicon.ico')) }}*/
/*                     {% endif %}*/
/*                     "/>*/
/*                 </a>*/
/*             </td>*/
/*         </tr>*/
/*     </table>*/
/* </body>*/
