<?php

/* AppBundle:Emails:newRepairer.html.twig */
class __TwigTemplate_517ce76d6f3eaf98f154193b4296b6e9ebd83f85cf644f52e94ff79cffc56b99 extends Twig_Template
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
        $__internal_ad615e62dc2c1cb5dabfcd9f29d762766e6d0a01b5a663d5bbba9c3883d5f616 = $this->env->getExtension("native_profiler");
        $__internal_ad615e62dc2c1cb5dabfcd9f29d762766e6d0a01b5a663d5bbba9c3883d5f616->enter($__internal_ad615e62dc2c1cb5dabfcd9f29d762766e6d0a01b5a663d5bbba9c3883d5f616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Emails:newRepairer.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
</head>
<body>
Witamy w zespole,<br>
<br>
oto Twoje dane logowania:<br>
login: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["worker"]) ? $context["worker"] : $this->getContext($context, "worker")), "username", array()), "html", null, true);
        echo " lub Twój email<br>
tymczasowe hasło: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["worker"]) ? $context["worker"] : $this->getContext($context, "worker")), "tempPw", array()), "html", null, true);
        echo "<br>
<br>
Serdecznie pozdrawiamy.<br>
<br>
<hr/>
";
        // line 16
        $context["company"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "localization", array()), "company", array());
        // line 17
        echo "<table>
    <tr>
        <td valign=\"top\" style=\"min-width: 130px;\">
            <strong>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "name", array()), "html", null, true);
        echo "</strong><br>
            ul. ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["worker"]) ? $context["worker"] : $this->getContext($context, "worker")), "localization", array()), "street", array()), "html", null, true);
        echo "<br>
            ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["worker"]) ? $context["worker"] : $this->getContext($context, "worker")), "localization", array()), "postCode", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["worker"]) ? $context["worker"] : $this->getContext($context, "worker")), "localization", array()), "city", array()), "html", null, true);
        echo "<br>
        </td>
        <td valign=\"top\" style=\"min-width: 140px;\">
            <strong>Godziny otwarcia</strong><br>
            Poniedziałek – Piątek: ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["worker"]) ? $context["worker"] : $this->getContext($context, "worker")), "localization", array()), "monFriOpen", array()), "html", null, true);
        echo "<br>
            ";
        // line 27
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["worker"]) ? $context["worker"] : $this->getContext($context, "worker")), "localization", array()), "satOpen", array()))) {
            echo "Sobota: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["worker"]) ? $context["worker"] : $this->getContext($context, "worker")), "localization", array()), "satOpen", array()), "html", null, true);
        }
        // line 28
        echo "        </td>
        <td valign=\"top\" style=\"min-width: 110px;\">
            <strong>Telefon</strong><br>
            ";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["worker"]) ? $context["worker"] : $this->getContext($context, "worker")), "localization", array()), "tel1", array()))), "html", null, true);
        echo "<br>
            ";
        // line 32
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["worker"]) ? $context["worker"] : $this->getContext($context, "worker")), "localization", array()), "tel2", array()))) {
            // line 33
            echo "                ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["worker"]) ? $context["worker"] : $this->getContext($context, "worker")), "localization", array()), "tel2", array()))), "html", null, true);
            echo "<br>
            ";
        }
        // line 35
        echo "            ";
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["worker"]) ? $context["worker"] : $this->getContext($context, "worker")), "localization", array()), "tel3", array()))) {
            // line 36
            echo "                ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["worker"]) ? $context["worker"] : $this->getContext($context, "worker")), "localization", array()), "tel3", array()))), "html", null, true);
            echo "<br>
            ";
        }
        // line 38
        echo "        </td>
        <td valign=\"top\">
            <strong>Email</strong><br>
            ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["worker"]) ? $context["worker"] : $this->getContext($context, "worker")), "localization", array()), "emailFirst", array()), "html", null, true);
        echo "<br>
            ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["worker"]) ? $context["worker"] : $this->getContext($context, "worker")), "localization", array()), "emailSecond", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl("bundles/app/images/favicon.ico"), "html", null, true);
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
        
        $__internal_ad615e62dc2c1cb5dabfcd9f29d762766e6d0a01b5a663d5bbba9c3883d5f616->leave($__internal_ad615e62dc2c1cb5dabfcd9f29d762766e6d0a01b5a663d5bbba9c3883d5f616_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Emails:newRepairer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 55,  139 => 53,  137 => 52,  131 => 50,  129 => 49,  125 => 48,  121 => 47,  113 => 42,  109 => 41,  104 => 38,  98 => 36,  95 => 35,  89 => 33,  87 => 32,  83 => 31,  78 => 28,  73 => 27,  69 => 26,  60 => 22,  56 => 21,  52 => 20,  47 => 17,  45 => 16,  37 => 11,  33 => 10,  22 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>*/
/* </head>*/
/* <body>*/
/* Witamy w zespole,<br>*/
/* <br>*/
/* oto Twoje dane logowania:<br>*/
/* login: {{ worker.username }} lub Twój email<br>*/
/* tymczasowe hasło: {{ worker.tempPw }}<br>*/
/* <br>*/
/* Serdecznie pozdrawiamy.<br>*/
/* <br>*/
/* <hr/>*/
/* {% set company = app.user.localization.company %}*/
/* <table>*/
/*     <tr>*/
/*         <td valign="top" style="min-width: 130px;">*/
/*             <strong>{{ company.name }}</strong><br>*/
/*             ul. {{ worker.localization.street }}<br>*/
/*             {{ worker.localization.postCode }} {{ worker.localization.city }}<br>*/
/*         </td>*/
/*         <td valign="top" style="min-width: 140px;">*/
/*             <strong>Godziny otwarcia</strong><br>*/
/*             Poniedziałek – Piątek: {{ worker.localization.monFriOpen }}<br>*/
/*             {% if worker.localization.satOpen is not empty %}Sobota: {{ worker.localization.satOpen }}{% endif %}*/
/*         </td>*/
/*         <td valign="top" style="min-width: 110px;">*/
/*             <strong>Telefon</strong><br>*/
/*             {{ phone_number_format(worker.localization.tel1) }}<br>*/
/*             {% if worker.localization.tel2 is not null %}*/
/*                 {{ phone_number_format(worker.localization.tel2) }}<br>*/
/*             {% endif %}*/
/*             {% if worker.localization.tel3 is not null %}*/
/*                 {{ phone_number_format(worker.localization.tel3) }}<br>*/
/*             {% endif %}*/
/*         </td>*/
/*         <td valign="top">*/
/*             <strong>Email</strong><br>*/
/*             {{ worker.localization.emailFirst }}<br>*/
/*             {{ worker.localization.emailSecond }}*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td colspan="4" valign="top">*/
/*             <a href="{{ company.mainSite }}" target="_blank">*/
/*                 <img alt="{{ company.mainSite }}" style="max-height: 100px; max-width: 200px;" src="*/
/*                     {% if app.user.localization.company.logoFile is not empty %}*/
/*                         {{ app.request.getUriForPath(vich_uploader_asset(company, 'logoFile')) }}*/
/*                     {% else %}*/
/*                         {#{{ absolute_url('bundles/app/images/mf-logo.png') }}#}*/
/*                         {{ absolute_url('bundles/app/images/favicon.ico') }}*/
/*                     {% endif %}*/
/*                     "/>*/
/*             </a>*/
/*         </td>*/
/*     </tr>*/
/* </table>*/
/* </body>*/
