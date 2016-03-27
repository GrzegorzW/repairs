<?php

/* AppBundle:Worker:pokwitowanie.html.twig */
class __TwigTemplate_51599e748274c9ed7637297321233520170658f10ca1924801dd181cde4b236d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Worker:pokwitowanie.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageContainer' => array($this, 'block_pageContainer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c89bfe44063226846af0d20a0ff0741d31ccf8f625936ade3431f9571eeb54c = $this->env->getExtension("native_profiler");
        $__internal_1c89bfe44063226846af0d20a0ff0741d31ccf8f625936ade3431f9571eeb54c->enter($__internal_1c89bfe44063226846af0d20a0ff0741d31ccf8f625936ade3431f9571eeb54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Worker:pokwitowanie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c89bfe44063226846af0d20a0ff0741d31ccf8f625936ade3431f9571eeb54c->leave($__internal_1c89bfe44063226846af0d20a0ff0741d31ccf8f625936ade3431f9571eeb54c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_caa800b8bda1b49032622999c0710557a892a034d99f6246dd042b1a27184c13 = $this->env->getExtension("native_profiler");
        $__internal_caa800b8bda1b49032622999c0710557a892a034d99f6246dd042b1a27184c13->enter($__internal_caa800b8bda1b49032622999c0710557a892a034d99f6246dd042b1a27184c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    | Nowe pokwitowanie | Drukuj formularz
";
        
        $__internal_caa800b8bda1b49032622999c0710557a892a034d99f6246dd042b1a27184c13->leave($__internal_caa800b8bda1b49032622999c0710557a892a034d99f6246dd042b1a27184c13_prof);

    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_ad76d6ec2d22401bb51fb92314e251b1bc7222f1c36bebb84b43e78d1a8dfb64 = $this->env->getExtension("native_profiler");
        $__internal_ad76d6ec2d22401bb51fb92314e251b1bc7222f1c36bebb84b43e78d1a8dfb64->enter($__internal_ad76d6ec2d22401bb51fb92314e251b1bc7222f1c36bebb84b43e78d1a8dfb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 8
        echo "
    <label for=\"print-it\" class=\"sr-only\">Drukuj</label>
    <input type=\"button\" autofocus=\"autofocus\" id=\"print-it\" class=\"btn btn-success hidden-print print-it\"
           onclick=\"window.print()\" value=\"Drukuj\"/>

    <div class=\"hidden-print\">
        <hr>
    </div>

    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <h4 class=\"alert alert-success hidden-print\">";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</h4>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    <div class=\"row\" style=\"font-size: 12px;\">
        <div class=\"col-md-12\">
            <div id=\"city\" class=\"text-right pull-right\">
                ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "localizationCity", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "repairStartDate", array()), "d.m.Y"), "html", null, true);
        echo "
            </div>

            <div id=\"logo\" style=\"max-width: 150px;\">
                ";
        // line 29
        echo "                ";
        // line 30
        echo "                ";
        // line 31
        echo "
                <img src=\"
                ";
        // line 33
        if ( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "localization", array()), "company", array()), "logoFile", array()))) {
            // line 34
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->env->getExtension('vich_uploader')->asset($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "localization", array()), "company", array()), "logoFile")), "html", null, true);
            echo "
                ";
        } else {
            // line 36
            echo "                    ";
            // line 37
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/favicon.ico"), "html", null, true);
            echo "
                ";
        }
        // line 39
        echo "                \"/>

            </div>
        </div>
    </div>
    <div class=\"row\" style=\"margin-top: 10px;\">
        <div class=\"col-md-12\">
            <div class=\"sheet\">
                <p>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "companyName", array()), "html", null, true);
        echo "</p>
                <p>ul. ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "companyStreet", array()), "html", null, true);
        echo "</p>
                <p>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "companyPostCode", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "companyCity", array()), "html", null, true);
        echo "</p>
                <p>NIP: ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "companyNIP", array()), "html", null, true);
        echo "</p>
                <p>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "companyMainSite", array()), "html", null, true);
        echo "</p>
            </div>
            <div class=\"pull-right text-right sheet\">
                ";
        // line 54
        ob_start();
        // line 55
        echo "                    <p>";
        echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "clientName", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "clientSurname", array())), "html", null, true);
        echo "</p>
                    ";
        // line 56
        if ($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "clientCompanyName", array())) {
            // line 57
            echo "                    <p>";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "clientCompanyName", array())), "html", null, true);
            echo "</p>
                ";
        }
        // line 59
        echo "                    ";
        if ($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "clientCompanyAddress", array())) {
            // line 60
            echo "                    <p>ul. ";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "clientCompanyAddress", array())), "html", null, true);
            echo "</p>
                ";
        }
        // line 62
        echo "                    <p>
                    ";
        // line 63
        if ($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "clientCompanyPostCode", array())) {
            // line 64
            echo "                        ";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "clientCompanyPostCode", array())), "html", null, true);
            echo "
                    ";
        }
        // line 66
        echo "                    ";
        if ($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "clientCompanyCity", array())) {
            // line 67
            echo "                        ";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "clientCompanyCity", array())), "html", null, true);
            echo "
                    ";
        }
        // line 69
        echo "                </p>
                    ";
        // line 70
        if ($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "clientCompanyNIP", array())) {
            // line 71
            echo "                    <p>NIP: ";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "clientCompanyNIP", array())), "html", null, true);
            echo "</p>
                ";
        }
        // line 73
        echo "                    <p>tel.: ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "clientTel", array()))), "html", null, true);
        echo "</p>
                    ";
        // line 74
        if ($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "clientEmail", array())) {
            // line 75
            echo "                    <p>e-mail: ";
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "clientEmail", array())), "html", null, true);
            echo "</p>
                ";
        }
        // line 77
        echo "                ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 78
        echo "            </div>
            <div class=\"sheet\">
            ";
        // line 80
        if (($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "localizationStreet", array()) != $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "companyStreet", array()))) {
            // line 81
            echo "                <p style=\"margin-top: 5px;\"><strong>Siedziba:</strong></p>
                <p>ul. ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "localizationStreet", array()), "html", null, true);
            echo "</p>
                <p>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "localizationPostCode", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "localizationCity", array()), "html", null, true);
            echo "</p>
            ";
        }
        // line 85
        echo "                <p>tel.: <u>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "localizationTel1", array()))), "html", null, true);
        echo "</u>
                    ";
        // line 86
        if ( !(null === $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "localizationTel2", array()))) {
            // line 87
            echo "                        , ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "localizationTel2", array()))), "html", null, true);
            echo "
                    ";
        }
        // line 89
        echo "                    ";
        if ( !(null === $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "localizationTel3", array()))) {
            // line 90
            echo "                        , ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "localizationTel3", array()))), "html", null, true);
            echo "
                    ";
        }
        // line 91
        echo "</p>
                <br>
            </div>
        </div>
    </div>
    <div class=\"row\" style=\"margin-bottom: 10px;\">
        <div class=\"col-md-12\">
            <div class=\"text-center\">
                <h4 style=\"margin-bottom: 0\">
                    <strong>POKWITOWANIE</strong><br>
                </h4>
                <span>
                    ID naprawy: ";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "repairAltId", array()), "html", null, true);
        echo "
                </span>
            </div>
        </div>
    </div>
    <div class=\"row\" style=\"font-size: 12px\">
        <div class=\"col-md-12\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered table-condensed\" style=\"margin-bottom: 10px\">
                    <tr>
                        <td><strong>Marka:</strong> ";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "deviceBrand", array()), "html", null, true);
        echo "</td>
                        <td><strong>Model:</strong> ";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "deviceModel", array()), "html", null, true);
        echo "</td>
                        <td><strong>Numer seryjny:</strong> ";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "deviceSerial", array()), "html", null, true);
        echo "</td>
                    </tr>
                </table>
                <table class=\"table table-bordered table-condensed\" style=\"margin-bottom: 0\">
                    <tr>
                        <td colspan=\"3\"><strong>Opis usterki i uwagi:</strong> ";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "repairDescription", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td colspan=\"3\"><strong>Dodatkowo:</strong> ";
        // line 123
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "repairAddition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "repairAddition", array()), "-")) : ("-")), "html", null, true);
        echo "</td>
                    </tr>
                    ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "customFields", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if ( !(null === $context["value"])) {
                // line 126
                echo "                        <tr>
                            <td colspan=\"3\"><strong>";
                // line 127
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</strong> ";
                echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? (_twig_default_filter($context["value"], "-")) : ("-")), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                </table>
            </div>
        </div>
    </div>
    <div class=\"row\" style=\"font-size: 12px; margin-top: 10px\">
        <div class=\"col-md-12\">
            W celu sprawdzenia statusu naprawy zapaszamy na stronę: <b>";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "companyPokwitowanieSite", array()), "html", null, true);
        echo "</b><br>
            Login: <b style=\"font-size: 14px;\">";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "clientUsername", array()), "html", null, true);
        echo "</b><br>
            ";
        // line 138
        if ( !$this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "clientTempPwChanged", array())) {
            // line 139
            echo "                Hasło: <b style=\"font-size: 14px;\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "clientTempPw", array()), "html", null, true);
            echo "</b>
            ";
        }
        // line 141
        echo "            <br>
        </div>
    </div>
    <div class=\"row\" style=\"font-size: 12px\">
        <div class=\"col-md-12\">
            Regulamin:
            <div id=\"regulamin\" style=\"font-size: 9px; text-align: justify\">
                ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regulations"]) ? $context["regulations"] : $this->getContext($context, "regulations")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 149
            echo "                    <p><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo ". </strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "paragraph", array()), "html", null, true);
            echo "</p>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "            </div>
        </div>
    </div>
    <div class=\"row\" style=\"font-size: 12px; margin-top: 10px\">
        <div class=\"col-md-12\">
            <div class=\"pull-right text-right\">
                <br><br><br>
                ___________________________<br>
                <span style=\"font-size: 9px;\">Pieczęć i podpis serwisanta</span>
            </div>
            <div>
                Oświadczam, że zapoznałem/am się z treścią regulaminu orazwyrażam zgodę<br>
                na przesyłanie drogą elektroniczną informacji dotyczących statusu naprawy.<br><br>
                ___________________________<br>
                <span style=\"font-size: 9px;\">Podpis klienta</span>
            </div>
        </div>
    </div>

    <script>
        \$(document).ready(function () {
            \$('.wrap').css('padding-top', '0');
            \$('.print-it').css('margin-top', '50px');
        });
    </script>
";
        
        $__internal_ad76d6ec2d22401bb51fb92314e251b1bc7222f1c36bebb84b43e78d1a8dfb64->leave($__internal_ad76d6ec2d22401bb51fb92314e251b1bc7222f1c36bebb84b43e78d1a8dfb64_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Worker:pokwitowanie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 151,  391 => 149,  374 => 148,  365 => 141,  359 => 139,  357 => 138,  353 => 137,  349 => 136,  341 => 130,  329 => 127,  326 => 126,  321 => 125,  316 => 123,  310 => 120,  302 => 115,  298 => 114,  294 => 113,  281 => 103,  267 => 91,  261 => 90,  258 => 89,  252 => 87,  250 => 86,  245 => 85,  238 => 83,  234 => 82,  231 => 81,  229 => 80,  225 => 78,  222 => 77,  216 => 75,  214 => 74,  209 => 73,  203 => 71,  201 => 70,  198 => 69,  192 => 67,  189 => 66,  183 => 64,  181 => 63,  178 => 62,  172 => 60,  169 => 59,  163 => 57,  161 => 56,  154 => 55,  152 => 54,  146 => 51,  142 => 50,  136 => 49,  132 => 48,  128 => 47,  118 => 39,  112 => 37,  110 => 36,  104 => 34,  102 => 33,  98 => 31,  96 => 30,  94 => 29,  85 => 24,  79 => 20,  70 => 18,  66 => 17,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     | Nowe pokwitowanie | Drukuj formularz*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     <label for="print-it" class="sr-only">Drukuj</label>*/
/*     <input type="button" autofocus="autofocus" id="print-it" class="btn btn-success hidden-print print-it"*/
/*            onclick="window.print()" value="Drukuj"/>*/
/* */
/*     <div class="hidden-print">*/
/*         <hr>*/
/*     </div>*/
/* */
/*     {% for flashMessage in app.session.flashbag.get('success') %}*/
/*         <h4 class="alert alert-success hidden-print">{{ flashMessage }}</h4>*/
/*     {% endfor %}*/
/* */
/*     <div class="row" style="font-size: 12px;">*/
/*         <div class="col-md-12">*/
/*             <div id="city" class="text-right pull-right">*/
/*                 {{ repair.localizationCity }}, {{ repair.repairStartDate | date('d.m.Y') }}*/
/*             </div>*/
/* */
/*             <div id="logo" style="max-width: 150px;">*/
/*                 {#{% image 'bundles/app/images/logo1.jpg' %}#}*/
/*                 {#<img src="{{ asset_url }}"/>#}*/
/*                 {#{% endimage %}#}*/
/* */
/*                 <img src="*/
/*                 {% if app.user.localization.company.logoFile is not empty %}*/
/*                     {{ asset(vich_uploader_asset(app.user.localization.company, 'logoFile')) }}*/
/*                 {% else %}*/
/*                     {#{{ asset('bundles/app/images/mf-logo.png') }}#}*/
/*                     {{ asset('bundles/app/images/favicon.ico') }}*/
/*                 {% endif %}*/
/*                 "/>*/
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row" style="margin-top: 10px;">*/
/*         <div class="col-md-12">*/
/*             <div class="sheet">*/
/*                 <p>{{ repair.companyName }}</p>*/
/*                 <p>ul. {{ repair.companyStreet }}</p>*/
/*                 <p>{{ repair.companyPostCode }} {{ repair.companyCity }}</p>*/
/*                 <p>NIP: {{ repair.companyNIP }}</p>*/
/*                 <p>{{ repair.companyMainSite }}</p>*/
/*             </div>*/
/*             <div class="pull-right text-right sheet">*/
/*                 {% spaceless %}*/
/*                     <p>{{ repair.clientName | trim }} {{ repair.clientSurname | trim }}</p>*/
/*                     {% if repair.clientCompanyName %}*/
/*                     <p>{{ repair.clientCompanyName | trim }}</p>*/
/*                 {% endif %}*/
/*                     {% if repair.clientCompanyAddress %}*/
/*                     <p>ul. {{ repair.clientCompanyAddress | trim }}</p>*/
/*                 {% endif %}*/
/*                     <p>*/
/*                     {% if repair.clientCompanyPostCode %}*/
/*                         {{ repair.clientCompanyPostCode | trim }}*/
/*                     {% endif %}*/
/*                     {% if repair.clientCompanyCity %}*/
/*                         {{ repair.clientCompanyCity | trim }}*/
/*                     {% endif %}*/
/*                 </p>*/
/*                     {% if repair.clientCompanyNIP %}*/
/*                     <p>NIP: {{ repair.clientCompanyNIP | trim }}</p>*/
/*                 {% endif %}*/
/*                     <p>tel.: {{ phone_number_format(repair.clientTel) }}</p>*/
/*                     {% if repair.clientEmail %}*/
/*                     <p>e-mail: {{ repair.clientEmail | trim }}</p>*/
/*                 {% endif %}*/
/*                 {% endspaceless %}*/
/*             </div>*/
/*             <div class="sheet">*/
/*             {% if repair.localizationStreet != repair.companyStreet %}*/
/*                 <p style="margin-top: 5px;"><strong>Siedziba:</strong></p>*/
/*                 <p>ul. {{ repair.localizationStreet }}</p>*/
/*                 <p>{{ repair.localizationPostCode }} {{ repair.localizationCity }}</p>*/
/*             {% endif %}*/
/*                 <p>tel.: <u>{{ phone_number_format(repair.localizationTel1) }}</u>*/
/*                     {% if repair.localizationTel2 is not null %}*/
/*                         , {{ phone_number_format(repair.localizationTel2) }}*/
/*                     {% endif %}*/
/*                     {% if repair.localizationTel3 is not null %}*/
/*                         , {{ phone_number_format(repair.localizationTel3) }}*/
/*                     {% endif %}</p>*/
/*                 <br>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row" style="margin-bottom: 10px;">*/
/*         <div class="col-md-12">*/
/*             <div class="text-center">*/
/*                 <h4 style="margin-bottom: 0">*/
/*                     <strong>POKWITOWANIE</strong><br>*/
/*                 </h4>*/
/*                 <span>*/
/*                     ID naprawy: {{ repair.repairAltId }}*/
/*                 </span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row" style="font-size: 12px">*/
/*         <div class="col-md-12">*/
/*             <div class="table-responsive">*/
/*                 <table class="table table-bordered table-condensed" style="margin-bottom: 10px">*/
/*                     <tr>*/
/*                         <td><strong>Marka:</strong> {{ repair.deviceBrand }}</td>*/
/*                         <td><strong>Model:</strong> {{ repair.deviceModel }}</td>*/
/*                         <td><strong>Numer seryjny:</strong> {{ repair.deviceSerial }}</td>*/
/*                     </tr>*/
/*                 </table>*/
/*                 <table class="table table-bordered table-condensed" style="margin-bottom: 0">*/
/*                     <tr>*/
/*                         <td colspan="3"><strong>Opis usterki i uwagi:</strong> {{ repair.repairDescription }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td colspan="3"><strong>Dodatkowo:</strong> {{ repair.repairAddition | default('-') }}</td>*/
/*                     </tr>*/
/*                     {% for key, value in repair.customFields if value is not null %}*/
/*                         <tr>*/
/*                             <td colspan="3"><strong>{{ key }}</strong> {{ value | default('-') }}</td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row" style="font-size: 12px; margin-top: 10px">*/
/*         <div class="col-md-12">*/
/*             W celu sprawdzenia statusu naprawy zapaszamy na stronę: <b>{{ repair.companyPokwitowanieSite }}</b><br>*/
/*             Login: <b style="font-size: 14px;">{{ repair.clientUsername }}</b><br>*/
/*             {% if not repair.clientTempPwChanged %}*/
/*                 Hasło: <b style="font-size: 14px;">{{ repair.clientTempPw }}</b>*/
/*             {% endif %}*/
/*             <br>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row" style="font-size: 12px">*/
/*         <div class="col-md-12">*/
/*             Regulamin:*/
/*             <div id="regulamin" style="font-size: 9px; text-align: justify">*/
/*                 {% for entry in regulations %}*/
/*                     <p><strong>{{ loop.index }}. </strong>{{ entry.paragraph }}</p>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row" style="font-size: 12px; margin-top: 10px">*/
/*         <div class="col-md-12">*/
/*             <div class="pull-right text-right">*/
/*                 <br><br><br>*/
/*                 ___________________________<br>*/
/*                 <span style="font-size: 9px;">Pieczęć i podpis serwisanta</span>*/
/*             </div>*/
/*             <div>*/
/*                 Oświadczam, że zapoznałem/am się z treścią regulaminu orazwyrażam zgodę<br>*/
/*                 na przesyłanie drogą elektroniczną informacji dotyczących statusu naprawy.<br><br>*/
/*                 ___________________________<br>*/
/*                 <span style="font-size: 9px;">Podpis klienta</span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <script>*/
/*         $(document).ready(function () {*/
/*             $('.wrap').css('padding-top', '0');*/
/*             $('.print-it').css('margin-top', '50px');*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
