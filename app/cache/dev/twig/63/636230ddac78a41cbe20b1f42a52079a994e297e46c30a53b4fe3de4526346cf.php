<?php

/* AppBundle:Worker:repairDetails.html.twig */
class __TwigTemplate_77f3318cb929de69bae18ba205b693bd6684c34c77dab26fa665fc4678b1b729 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Worker:repairDetails.html.twig", 1);
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
        $__internal_7f8f76a2f1e9b61c3382af44176d9943e70d9a676d217f9e29fd99b5f35e5a48 = $this->env->getExtension("native_profiler");
        $__internal_7f8f76a2f1e9b61c3382af44176d9943e70d9a676d217f9e29fd99b5f35e5a48->enter($__internal_7f8f76a2f1e9b61c3382af44176d9943e70d9a676d217f9e29fd99b5f35e5a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Worker:repairDetails.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f8f76a2f1e9b61c3382af44176d9943e70d9a676d217f9e29fd99b5f35e5a48->leave($__internal_7f8f76a2f1e9b61c3382af44176d9943e70d9a676d217f9e29fd99b5f35e5a48_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_56f572c95a4c158be909d305a24b63bd4a1aad0414b5ba9c82999f74eb2c15fb = $this->env->getExtension("native_profiler");
        $__internal_56f572c95a4c158be909d305a24b63bd4a1aad0414b5ba9c82999f74eb2c15fb->enter($__internal_56f572c95a4c158be909d305a24b63bd4a1aad0414b5ba9c82999f74eb2c15fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    | Naprawy | Szczegóły
";
        
        $__internal_56f572c95a4c158be909d305a24b63bd4a1aad0414b5ba9c82999f74eb2c15fb->leave($__internal_56f572c95a4c158be909d305a24b63bd4a1aad0414b5ba9c82999f74eb2c15fb_prof);

    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_01d838757a11ed14bf1ddedeb8098126e4248966b281273e95381f3b33f3b936 = $this->env->getExtension("native_profiler");
        $__internal_01d838757a11ed14bf1ddedeb8098126e4248966b281273e95381f3b33f3b936->enter($__internal_01d838757a11ed14bf1ddedeb8098126e4248966b281273e95381f3b33f3b936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("AppBundle::alerts.html.twig", "AppBundle:Worker:repairDetails.html.twig", 9)->display($context);
        // line 10
        echo "
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">Klient</div>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\"><strong>ID użytkownika:</strong>
                        ";
        // line 17
        if ($this->env->getExtension('security')->isGranted("ROLE_PERMISSION_USER_SECTION")) {
            // line 18
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_user_details", array("id" => $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "user", array()), "id", array()))), "html", null, true);
            echo "\">
                                ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "user", array()), "altId", array()), "html", null, true);
            echo "
                            </a>
                        ";
        } else {
            // line 22
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "user", array()), "altId", array()), "html", null, true);
            echo "
                        ";
        }
        // line 24
        echo "                    </li>
                    <li class=\"list-group-item\"><strong>Imię i
                            nazwisko:</strong> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "user", array()), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "user", array()), "surname", array()), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\"><strong>E-mail:</strong>
                        ";
        // line 29
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "user", array(), "any", false, true), "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "user", array(), "any", false, true), "email", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\"><strong>Tel:</strong>
                        ";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array((($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "user", array(), "any", false, true), "tel", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "user", array(), "any", false, true), "tel", array()), "-")) : ("-")))), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <button type=\"button\" class=\"btn btn-info btn-sm btn-block user-invoice-data\">
                            Dane do faktury
                        <span class=\"glyphicon glyphicon-triangle-bottom pull-right\"
                              style=\"margin-top: 2px;\"></span>
                        </button>
                    </li>
                </ul>
                <ul class=\"list-group user-invoice-data-body hidden\">
                    <li class=\"list-group-item\">
                        <strong>Nazwa firmy:</strong> ";
        // line 44
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "user", array(), "any", false, true), "clientCompanyName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "user", array(), "any", false, true), "clientCompanyName", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Adres:</strong> ";
        // line 47
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "user", array(), "any", false, true), "clientCompanyAddress", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "user", array(), "any", false, true), "clientCompanyAddress", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Kod pocztowy:</strong> ";
        // line 50
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "user", array(), "any", false, true), "clientCompanyPostCode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "user", array(), "any", false, true), "clientCompanyPostCode", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Miasto:</strong> ";
        // line 53
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "user", array(), "any", false, true), "clientCompanyCity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "user", array(), "any", false, true), "clientCompanyCity", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>NIP:</strong> ";
        // line 56
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "user", array(), "any", false, true), "clientCompanyNIP", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "user", array(), "any", false, true), "clientCompanyNIP", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    Naprawa
                    <div class=\"pull-right\">
                        ";
        // line 66
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 67
            echo "                            <button type=\"button\" class=\"btn btn-danger btn-xs\" data-toggle=\"modal\"
                                    data-target=\"#repairChangeLocalizationModal\">
                                Lokalizacja
                            </button>
                            <button type=\"button\" class=\"btn btn-primary btn-xs\" data-toggle=\"modal\"
                                    data-target=\"#repairChangelogModal\">
                                Historia
                            </button>
                        ";
        }
        // line 76
        echo "                        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_PERMISSION_POKWITOWANIE_CREATE")) {
            // line 77
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_pokwitowanie_print", array("id" => $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "id", array()))), "html", null, true);
            echo "\"
                               title=\"Pokwitowanie\">
                                <button type=\"button\" class=\"btn btn-xs btn-info\">Pokwitowanie</button>
                            </a>
                        ";
        }
        // line 82
        echo "                    </div>
                </div>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\"><strong>ID naprawy: </strong> ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "altId", array()), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item\">
                        <strong>Data przyjęcia: </strong> ";
        // line 87
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "startDate", array()), "d.m.Y H:i:s"), "html", null, true);
        echo "
                        (";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "startLocalization", array()), "name", array()), "html", null, true);
        echo ")
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Status:</strong>
                        <label for=\"status\" class=\"sr-only\">Zmiana statusu</label>
                        <select class=\"form-control change-status\" id=\"status\">
                            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statusesToSelect"]) ? $context["statusesToSelect"] : $this->getContext($context, "statusesToSelect")));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 95
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "id", array()), "html", null, true);
            echo "\"
                                        ";
            // line 96
            if (($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "currentStatus", array()), "id", array()) == $this->getAttribute($context["status"], "id", array()))) {
                // line 97
                echo "                                            selected
                                        ";
            }
            // line 99
            echo "                                >
                                    ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "name", array()), "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                        </select>
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Naprawiający </strong>
                        <label for=\"repairer\" class=\"sr-only\">Naprawiający</label>
                        <select class=\"form-control change-repairer\" id=\"repairer\"
                                ";
        // line 109
        if ((($this->getAttribute($this->getAttribute(        // line 110
(isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "currentStatus", array()), "id", array()) == twig_constant("AppBundle\\Entity\\Status::STATUS_RETURNED")) ||  !$this->env->getExtension('security')->isGranted("ROLE_PERMISSION_CHANGE_REPAIRER"))) {
            // line 112
            echo "                                    disabled
                                ";
        }
        // line 114
        echo "                        >
                            ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["repairersToSelect"]) ? $context["repairersToSelect"] : $this->getContext($context, "repairersToSelect")));
        foreach ($context['_seq'] as $context["_key"] => $context["repairer"]) {
            // line 116
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["repairer"], "id", array()), "html", null, true);
            echo "\"
                                        ";
            // line 117
            if (($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "currentRepairer", array()), "id", array()) == $this->getAttribute($context["repairer"], "id", array()))) {
                // line 118
                echo "                                            selected
                                        ";
            }
            // line 120
            echo "                                >
                                    ";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["repairer"], "localization", array()), "name", array()), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["repairer"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["repairer"], "surname", array()), "html", null, true);
            echo "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repairer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                        </select>
                    </li>
                    ";
        // line 126
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 127
            echo "                        <li class=\"list-group-item\"><strong>Lokalizacja startowa: </strong><span
                                    class=\"repair-start-localization\">";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "startLocalization", array()), "html", null, true);
            echo "</span></li>
                    ";
        }
        // line 130
        echo "                    <li class=\"list-group-item\"><strong>Data zakończenia: </strong>
                        ";
        // line 131
        if (( !(null === $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "endDate", array())) && ($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "currentStatus", array()), "id", array()) == twig_constant("AppBundle\\Entity\\Status::STATUS_RETURNED")))) {
            // line 132
            echo "                            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "endDate", array()), "d.m.Y H:i:s"), "html", null, true);
            echo "
                        ";
        } else {
            // line 134
            echo "                            -
                        ";
        }
        // line 136
        echo "                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">Sprzęt</div>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\"><strong>ID urządzenia: </strong>
                        <a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_device_details", array("id" => $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "device", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "device", array()), "altId", array()), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"list-group-item\"><strong>Marka i model: </strong>
                        ";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "device", array()), "brand", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "device", array()), "model", array()), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\"><strong>S/N: </strong> ";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "device", array()), "serial", array()), "html", null, true);
        echo "</li>
                    ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "device", array()), "customFields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 154
            echo "                        <li class=\"list-group-item\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "customFieldTemplate", array()), "name", array()), "html", null, true);
            echo "
                                :</strong> ";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device_manager"]) ? $context["device_manager"] : $this->getContext($context, "device_manager")), "getCustomFieldValueName", array(0 => $context["field"]), "method"), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                    <li class=\"list-group-item\"><strong>Dodatkowo: </strong>
                        ";
        // line 158
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "addition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "addition", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\"><strong>Opis usterki: </strong> ";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "description", array()), "html", null, true);
        echo "</li>
                </ul>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    Koszty naprawy
                    ";
        // line 168
        if (((($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "currentStatus", array()), "id", array()) != twig_constant("AppBundle\\Entity\\Status::STATUS_RETURNED")) && ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || ($this->getAttribute($this->getAttribute(        // line 169
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "localization", array()) == $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "startLocalization", array())))) && $this->getAttribute(        // line 170
(isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "totalRepairPricingChanged", array()))) {
            // line 171
            echo "                        <div class=\"pull-right\">
                            <button type=\"button\" class=\"btn btn-danger btn-xs repair-pricing-acceptation-request\">
                                Prześlij wycenę naprawy do klienta
                            </button>
                        </div>
                    ";
        }
        // line 177
        echo "                </div>
                <div class=\"panel-body\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading repair-cost-approve\">
                            Podsumowanie
                            ";
        // line 182
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 183
            echo "                                <span class=\"pull-right repair-cost-approved-toggle ";
            if (($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "currentStatus", array()), "id", array()) != twig_constant("AppBundle\\Entity\\Status::STATUS_RETURNED"))) {
                echo "hidden";
            }
            echo "\">
                                Zatwierdzono:
                                <label for=\"approved-toggle\" class=\"sr-only\">Przełącznik</label>
                                <input id=\"approved-toggle\" type=\"checkbox\" checked data-toggle=\"toggle\"
                                       data-on=\"Tak\" data-off=\"Nie\" data-onstyle=\"success\"
                                       data-offstyle=\"danger\" data-size=\"mini\">
                            </span>
                            ";
        }
        // line 191
        echo "                        </div>
                        <div class=\"panel-body text-right\">
                            ";
        // line 193
        if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || ($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "currentStatus", array()), "id", array()) != twig_constant("AppBundle\\Entity\\Status::STATUS_RETURNED")))) {
            // line 194
            echo "                            <a data-toggle=\"modal\" class=\"repair-total-price-financial-summary\"
                               data-target=\"#editRepairPaymentModal\">
                                <span class=\"glyphicon glyphicon-edit text-success\" style=\"cursor: pointer;\"></span></a>
                                ";
        }
        // line 198
        echo "                                Metoda płatności:
                                <span class=\"repair-payment-method\">";
        // line 199
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "paymentMethod", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "paymentMethod", array()), "-")) : ("-")), "html", null, true);
        echo "</span>
                                <br>

                            <span class=\"payment-label-text\">
                                ";
        // line 203
        if (($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "currentStatus", array()), "id", array()) == twig_constant("AppBundle\\Entity\\Status::STATUS_RETURNED"))) {
            // line 204
            echo "                                    Zapłacono:
                                ";
        } else {
            // line 206
            echo "                                    Kwota do zapłaty:
                                ";
        }
        // line 208
        echo "                            </span>

                                ";
        // line 210
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money_format')->getCallable(), array($this->getAttribute((isset($context["financialSummary"]) ? $context["financialSummary"] : $this->getContext($context, "financialSummary")), "price", array()))), "html", null, true);
        echo "<br>
                                ";
        // line 211
        if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") ||  !$this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "approved", array()))) {
            // line 212
            echo "                                    Koszty: ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money_format')->getCallable(), array($this->getAttribute((isset($context["financialSummary"]) ? $context["financialSummary"] : $this->getContext($context, "financialSummary")), "cost", array()))), "html", null, true);
            echo "<br>
                                    <span class=\"glyphicon glyphicon-minus\"></span>
                                    ___________________<br><br>
                                    Zarobek: ";
            // line 215
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money_format')->getCallable(), array($this->getAttribute((isset($context["financialSummary"]) ? $context["financialSummary"] : $this->getContext($context, "financialSummary")), "profit", array()))), "html", null, true);
            echo "<br>
                                ";
        }
        // line 217
        echo "                        </div>
                    </div>
                </div>
                ";
        // line 220
        if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") ||  !$this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "approved", array()))) {
            // line 221
            echo "                    <div class=\"table-responsive\"
                         style=\"border-top: none\">
                        <table class=\"table table-bordered\" id=\"convertable-table\">
                            <thead>
                            <tr>
                                <th>
                                    Autor
                                </th>
                                <th>
                                    Typ
                                </th>
                                <th>
                                    Opis
                                </th>
                                <th>
                                    Kwota
                                </th>
                                <th>
                                    Edytuj
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 244
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["repairCostsAndPrices"]) ? $context["repairCostsAndPrices"] : $this->getContext($context, "repairCostsAndPrices")));
            foreach ($context['_seq'] as $context["_key"] => $context["cost"]) {
                // line 245
                echo "                                ";
                if ((($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") || ($this->getAttribute(                // line 247
$context["cost"], "localization", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "localization", array()))) || ($this->getAttribute($this->getAttribute(                // line 248
$context["cost"], "costKind", array()), "type", array()) == twig_constant("AppBundle\\Entity\\RepairCostKind::TYPE_PLUS")))) {
                    // line 249
                    echo "                                    <tr class=\"
                                ";
                    // line 250
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "localization", array()) == $this->getAttribute($this->getAttribute($context["cost"], "repair", array()), "startLocalization", array()))) {
                        // line 251
                        echo "                                    ";
                        if (($this->getAttribute($context["cost"], "localization", array()) == $this->getAttribute($this->getAttribute($context["cost"], "repair", array()), "startLocalization", array()))) {
                            // line 252
                            echo "                                        ";
                            if (($this->getAttribute($this->getAttribute($context["cost"], "costKind", array()), "type", array()) == twig_constant("AppBundle\\Entity\\RepairCostKind::TYPE_PLUS"))) {
                                echo "success";
                            } else {
                                echo "danger";
                            }
                            // line 253
                            echo "                                    ";
                        } else {
                            // line 254
                            echo "                                        ";
                            if (($this->getAttribute($this->getAttribute($context["cost"], "costKind", array()), "type", array()) == twig_constant("AppBundle\\Entity\\RepairCostKind::TYPE_PLUS"))) {
                                echo "danger";
                            } else {
                                echo "foreign-entry";
                            }
                            // line 255
                            echo "                                    ";
                        }
                        // line 256
                        echo "                                ";
                    } else {
                        // line 257
                        echo "                                    ";
                        if (($this->getAttribute($context["cost"], "localization", array()) != $this->getAttribute($this->getAttribute($context["cost"], "repair", array()), "startLocalization", array()))) {
                            // line 258
                            echo "                                        ";
                            if (($this->getAttribute($this->getAttribute($context["cost"], "costKind", array()), "type", array()) == twig_constant("AppBundle\\Entity\\RepairCostKind::TYPE_PLUS"))) {
                                echo "success";
                            } else {
                                echo "danger";
                            }
                            // line 259
                            echo "                                    ";
                        } else {
                            // line 260
                            echo "                                        foreign-entry
                                    ";
                        }
                        // line 262
                        echo "                                ";
                    }
                    echo "\">
                                        <td data-title=\"Autor\">
                                            <span tabindex=\"0\" class=\"glyphicon glyphicon-info-sign text-muted\"
                                                  role=\"button\"
                                                  data-toggle=\"popover\"
                                                  data-container=\"body\"
                                                  data-trigger=\"focus hover\" data-placement=\"bottom\"
                                                  data-content=\"";
                    // line 269
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cost"], "created", array()), "d.m.Y H:i:s"), "html", null, true);
                    echo " ";
                    if (($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN") &&  !(null === $this->getAttribute($context["cost"], "localization", array())))) {
                        echo "Przypisano do: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cost"], "localization", array()), "name", array()), "html", null, true);
                    }
                    echo "\">
                                            </span>
                                            ";
                    // line 271
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cost"], "author", array()), "name", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cost"], "author", array()), "surname", array()), "html", null, true);
                    echo "
                                        </td>
                                        <td data-title=\"Typ\">
                                            ";
                    // line 274
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cost"], "costKind", array()), "name", array()), "html", null, true);
                    echo "
                                        </td>
                                        <td data-title=\"Opis\">
                                            ";
                    // line 277
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cost"], "description", array()), "html", null, true);
                    echo "
                                        </td>
                                        <td data-title=\"Kwota\">
                                            ";
                    // line 280
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money_format')->getCallable(), array($this->getAttribute($context["cost"], "price", array()))), "html", null, true);
                    echo "
                                        </td>
                                        <td data-title=\"Edytuj\">
                                            <div class=\"text-center pricing-edit-button\">
                                                ";
                    // line 284
                    if (((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute($context["cost"], "author", array())) && ($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "currentStatus", array()), "id", array()) != twig_constant("AppBundle\\Entity\\Status::STATUS_RETURNED"))) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
                        // line 285
                        echo "                                                    <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_repair_pricing_edit", array("id" => $this->getAttribute($context["cost"], "id", array()))), "html", null, true);
                        echo "\">
                                                        <span class=\"glyphicon glyphicon-edit text-success\"></span>
                                                    </a>
                                                ";
                    } else {
                        // line 289
                        echo "                                                    <span class=\"glyphicon glyphicon-edit text-muted\"></span>
                                                ";
                    }
                    // line 291
                    echo "                                            </div>
                                        </td>
                                    </tr>
                                ";
                }
                // line 295
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cost'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "                            <tr id=\"pricingForm\" class=\"
                                ";
            // line 297
            if ((($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "currentStatus", array()), "id", array()) == twig_constant("AppBundle\\Entity\\Status::STATUS_RETURNED")) &&  !$this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
                // line 298
                echo "                                    hidden
                                ";
            }
            // line 299
            echo "\">
                                <td data-title=\"Autor\">
                                    ";
            // line 301
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "surname", array()), "html", null, true);
            echo "
                                </td>
                                <td data-title=\"Typ\">
                                    ";
            // line 304
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formPricing"]) ? $context["formPricing"] : $this->getContext($context, "formPricing")), 'form_start');
            echo "
                                    ";
            // line 305
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPricing"]) ? $context["formPricing"] : $this->getContext($context, "formPricing")), "cost_kind", array()), 'row', array("attr" => array("class" => "input-sm")));
            echo "
                                </td>
                                <td data-title=\"Opis\">
                                    ";
            // line 308
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPricing"]) ? $context["formPricing"] : $this->getContext($context, "formPricing")), "description", array()), 'row', array("attr" => array("class" => "input-sm", "placeholder" => "opis*")));
            echo "
                                </td>
                                <td data-title=\"Kwota\">
                                    ";
            // line 311
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formPricing"]) ? $context["formPricing"] : $this->getContext($context, "formPricing")), "price", array()), "tbbc_amount", array()), 'widget', array("attr" => array("class" => "input-sm price-amount money-amount", "placeholder" => "kwota*")));
            echo "

                                    ";
            // line 313
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formPricing"]) ? $context["formPricing"] : $this->getContext($context, "formPricing")), 'errors')) {
                // line 314
                echo "                                        <span class=\"help-block\">
                                    <ul class=\"list-unstyled\">
                                        <li class=\"text-danger\">
                                            <span class=\"glyphicon glyphicon-exclamation-sign\"></span>
                                            To pole zawiera błędy
                                        </li>
                                    </ul>
                                </span>
                                        <script>
                                            \$('#pricing_price_tbbc_amount').css('border-color', '#a94442');
                                        </script>
                                    ";
            }
            // line 326
            echo "                                </td>
                                <td data-title=\"Dodaj\">
                                    <div class=\"text-center\">
                                        <input type=\"submit\" value=\"Dodaj\"
                                               class=\"btn btn-sm btn-success\"/>
                                        ";
            // line 331
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formPricing"]) ? $context["formPricing"] : $this->getContext($context, "formPricing")), 'form_end');
            echo "
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 339
        echo "            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">Timeline</div>
                <div class=\"panel-body\">
                    <div id=\"messages\">
                        <ul class=\"timeline\">";
        // line 350
        if ( !(null === $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "opinion", array()))) {
            // line 351
            echo "                                <li class=\"timeline-fullwidth opinion\">
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Opinia:</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>
                                                ";
            // line 358
            echo $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "opinion", array());
            echo "
                                            </p>
                                            <p>
                                                <small class=\"text-muted\">";
            // line 361
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "opinionDate", array()), "d.m.Y H:i:s"), "html", null, true);
            echo "</small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class=\"timeline-badge warning\"><i
                                                class=\"glyphicon glyphicon-edit timeline-glyphicon\"></i></div>
                                </li>
                            ";
        }
        // line 372
        echo "<li class=\"timeline-inverted\">
                                <div class=\"timeline-badge success\">
                                    <i class=\"glyphicon glyphicon-plus timeline-glyphicon\"></i>
                                </div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">
                                            Nowa wiadomość:
                                        </h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        ";
        // line 383
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                                        <div class=\"form-group";
        // line 384
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors')) {
            echo " has-error ";
        }
        echo "\">
                                            ";
        // line 385
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget');
        echo "
                                        </div>
                                        <div class=\"help-block ";
        // line 387
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors')) {
            echo " has-error ";
        }
        echo "\">
                                            ";
        // line 388
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            ";
        // line 391
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget');
        echo "
                                        </div>
                                        <div class=\"help-block col-md-10\">Wiadomości nie będzie można usuwać ani
                                            edytować.
                                        </div>
                                        <div class=\"form-group col-md-2\">
                                            ";
        // line 397
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "send", array()), 'widget', array("attr" => array("class" => "btn btn-sm btn-success pull-right")));
        echo "
                                        </div>
                                        ";
        // line 399
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                                    </div>
                                </div>
                            </li>";
        // line 404
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["timeline"]) ? $context["timeline"] : $this->getContext($context, "timeline")));
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
            // line 405
            echo "                                ";
            if ($this->getAttribute((isset($context["helper_service"]) ? $context["helper_service"] : $this->getContext($context, "helper_service")), "instanceOf", array(0 => $context["entry"], 1 => "AppBundle\\Entity\\Message"), "method")) {
                // line 406
                echo "                                    ";
                $this->loadTemplate("AppBundle:Timeline:message.html.twig", "AppBundle:Worker:repairDetails.html.twig", 406)->display($context);
                // line 407
                echo "                                ";
            } elseif ($this->getAttribute((isset($context["helper_service"]) ? $context["helper_service"] : $this->getContext($context, "helper_service")), "instanceOf", array(0 => $context["entry"], 1 => "AppBundle\\Entity\\RepairersHistory"), "method")) {
                // line 408
                echo "                                    ";
                $this->loadTemplate("AppBundle:Timeline:repairersHistory.html.twig", "AppBundle:Worker:repairDetails.html.twig", 408)->display($context);
                // line 409
                echo "                                ";
            } elseif ($this->getAttribute((isset($context["helper_service"]) ? $context["helper_service"] : $this->getContext($context, "helper_service")), "instanceOf", array(0 => $context["entry"], 1 => "AppBundle\\Entity\\RepairStatus"), "method")) {
                // line 410
                echo "                                    ";
                $this->loadTemplate("AppBundle:Timeline:repairStatus.html.twig", "AppBundle:Worker:repairDetails.html.twig", 410)->display($context);
                // line 411
                echo "                                ";
            } elseif ($this->getAttribute((isset($context["helper_service"]) ? $context["helper_service"] : $this->getContext($context, "helper_service")), "instanceOf", array(0 => $context["entry"], 1 => "AppBundle\\Entity\\TotalRepairPricing"), "method")) {
                // line 412
                echo "                                    ";
                $this->loadTemplate("AppBundle:Timeline:totalPricingRequest.html.twig", "AppBundle:Worker:repairDetails.html.twig", 412)->display($context);
                // line 413
                echo "                                ";
            }
            // line 414
            echo "                            ";
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
        // line 415
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal potwierdzenie zmiany statusu -->
    <div class=\"modal fade\" id=\"modalChangeStatus\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalChangeStatusLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"modalChangeStatusLabel\">Nowy status: </h4>

                    <div class=\"modal-new-status\"></div>
                </div>
                ";
        // line 433
        if ($this->env->getExtension('security')->isGranted("ROLE_PERMISSION_PUBLIC_MESSAGES")) {
            // line 434
            echo "                    <div class=\"modal-body\">
                        <label for=\"modal-public-message\">Wiadomość publiczna:</label>
                        <input type=\"text\" class=\"form-control modal-public-message\" id=\"modal-public-message\">
                        ";
            // line 437
            if ( !(null === $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "user", array()), "email", array()))) {
                // line 438
                echo "                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" value=\"checkbox\" id=\"modal-email-checkbox\"
                                           class=\"modal-email-checkbox\" checked>
                                    Dołącz tą wiadomość do e-maila potwierdzającego zmianę statusu.
                                </label>
                            </div>
                        ";
            }
            // line 446
            echo "                    </div>
                ";
        }
        // line 448
        echo "                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default modal-status-canceled\" data-dismiss=\"modal\">Anuluj
                    </button>
                    <button type=\"button\" class=\"btn btn-success modal-status-submit\" data-dismiss=\"modal\">Zatwierdź
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal - change repairer confirmation -->
    <div class=\"modal fade\" id=\"modalChangeRepairer\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"modalChangeRepairerLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"modalChangeRepairerLabel\">Nowy naprawiający:</h4>

                    <div class=\"modal-new-repairer\"></div>
                </div>
                <div class=\"modal-body\">
                    <label for=\"modal-private-message\">Notatka:</label>
                    <input type=\"text\" class=\"form-control modal-private-message\" id=\"modal-private-message\">
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default modal-repairer-canceled\" data-dismiss=\"modal\">Anuluj
                    </button>
                    <button type=\"button\" class=\"btn btn-success modal-repairer-submit\" data-dismiss=\"modal\">Zatwierdź
                    </button>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 483
        echo "
    ";
        // line 484
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 485
            echo "
        ";
            // line 486
            $context["action"] = "Akcja";
            // line 487
            echo "        ";
            $context["data"] = "Dane";
            // line 488
            echo "        ";
            $context["timeStamp"] = "Data";
            // line 489
            echo "        ";
            $context["author"] = "Autor";
            // line 490
            echo "
        <div class=\"modal fade\" id=\"repairChangelogModal\" tabindex=\"-1\" role=\"dialog\"
             aria-labelledby=\"repairChangelogModal\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                    aria-hidden=\"true\">&times;</span></button>
                        <h3 class=\"modal-title\" id=\"repairChangelogModal\">Historia zmian</h3>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"table-responsive\">
                            <h4>Naprawa</h4>
                            <table class=\"table table-bordered table-hover\" id=\"convertable-table\">
                                <thead>
                                <tr>
                                    <th>
                                        ";
            // line 507
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo "
                                    </th>
                                    <th>
                                        ";
            // line 510
            echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "html", null, true);
            echo "
                                    </th>
                                    <th>
                                        ";
            // line 513
            echo twig_escape_filter($this->env, (isset($context["timeStamp"]) ? $context["timeStamp"] : $this->getContext($context, "timeStamp")), "html", null, true);
            echo "
                                    </th>
                                    <th>
                                        ";
            // line 516
            echo twig_escape_filter($this->env, (isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "html", null, true);
            echo "
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
            // line 521
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["repairChangelog"]) ? $context["repairChangelog"] : $this->getContext($context, "repairChangelog")));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 522
                echo "                                    <tr>
                                        <td data-title=\"";
                // line 523
                echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
                echo "\">
                                            ";
                // line 524
                $context["message"] = $this->getAttribute($context["log"], "action", array());
                // line 525
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))), "html", null, true);
                echo "
                                        </td>
                                        <td data-title=\"";
                // line 527
                echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "html", null, true);
                echo "\">
                                            ";
                // line 528
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["log"], "data", array()));
                foreach ($context['_seq'] as $context["key"] => $context["data"]) {
                    // line 529
                    echo "                                                ";
                    if (twig_test_iterable($context["data"])) {
                        // line 530
                        echo "                                                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["data"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                            // line 531
                            echo "                                                        ";
                            $context["message"] = $context["key"];
                            // line 532
                            echo "                                                        ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))), "html", null, true);
                            echo ": ";
                            echo twig_escape_filter($this->env, $context["row"], "html", null, true);
                            echo "
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 534
                        echo "                                                ";
                    } else {
                        // line 535
                        echo "                                                    ";
                        if (($context["key"] == "approved")) {
                            // line 536
                            echo "                                                        Wycena:
                                                        ";
                            // line 537
                            if ($context["data"]) {
                                // line 538
                                echo "                                                            Zatwierdzona
                                                        ";
                            } else {
                                // line 540
                                echo "                                                            Niezatwierdzona
                                                        ";
                            }
                            // line 542
                            echo "                                                    ";
                        }
                        // line 543
                        echo "                                                ";
                    }
                    // line 544
                    echo "                                                <br>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 546
                echo "                                        </td>
                                        <td data-title=\"";
                // line 547
                echo twig_escape_filter($this->env, (isset($context["timeStamp"]) ? $context["timeStamp"] : $this->getContext($context, "timeStamp")), "html", null, true);
                echo "\">
                                            ";
                // line 548
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "loggedAt", array()), "d.m.Y H:i:s"), "html", null, true);
                echo "
                                        </td>
                                        <td data-title=\"";
                // line 550
                echo twig_escape_filter($this->env, (isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "html", null, true);
                echo "\">
                                            ";
                // line 551
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "username", array()), "html", null, true);
                echo "
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 555
            echo "                                </tbody>
                            </table>
                            <hr>
                            <h4>Koszty naprawy</h4>
                            ";
            // line 559
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["repairPricingChangelog"]) ? $context["repairPricingChangelog"] : $this->getContext($context, "repairPricingChangelog")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["index"] => $context["priceChangelog"]) {
                // line 560
                echo "                                <h5>#";
                echo twig_escape_filter($this->env, ($context["index"] + 1), "html", null, true);
                echo "</h5>
                                <table class=\"table table-bordered table-hover\" id=\"convertable-table\">
                                    <thead>
                                    <tr>
                                        <th>
                                            ";
                // line 565
                echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
                echo "
                                        </th>
                                        <th>
                                            ";
                // line 568
                echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "html", null, true);
                echo "
                                        </th>
                                        <th>
                                            ";
                // line 571
                echo twig_escape_filter($this->env, (isset($context["timeStamp"]) ? $context["timeStamp"] : $this->getContext($context, "timeStamp")), "html", null, true);
                echo "
                                        </th>
                                        <th>
                                            ";
                // line 574
                echo twig_escape_filter($this->env, (isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "html", null, true);
                echo "
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
                // line 579
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["priceChangelog"]);
                foreach ($context['_seq'] as $context["_key"] => $context["change"]) {
                    // line 580
                    echo "                                        <tr>
                                            <td data-title=\"";
                    // line 581
                    echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
                    echo "\">
                                                ";
                    // line 582
                    $context["message"] = $this->getAttribute($context["change"], "action", array());
                    // line 583
                    echo "                                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))), "html", null, true);
                    echo "
                                            </td>
                                            <td data-title=\"";
                    // line 585
                    echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "html", null, true);
                    echo "\">
                                                ";
                    // line 586
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["change"], "data", array()));
                    foreach ($context['_seq'] as $context["key"] => $context["data"]) {
                        // line 587
                        echo "                                                    ";
                        $context["message"] = $context["key"];
                        // line 588
                        echo "                                                    ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))), "html", null, true);
                        echo ":
                                                    ";
                        // line 589
                        if (twig_test_iterable($context["data"])) {
                            // line 590
                            echo "                                                        ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["data"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                                // line 591
                                echo "                                                            ";
                                echo twig_escape_filter($this->env, $context["row"], "html", null, true);
                                echo "
                                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 593
                            echo "                                                    ";
                        } else {
                            // line 594
                            echo "                                                        ";
                            echo twig_escape_filter($this->env, $context["data"], "html", null, true);
                            echo "
                                                    ";
                        }
                        // line 596
                        echo "                                                    <br>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['data'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 598
                    echo "                                            </td>
                                            <td data-title=\"";
                    // line 599
                    echo twig_escape_filter($this->env, (isset($context["timeStamp"]) ? $context["timeStamp"] : $this->getContext($context, "timeStamp")), "html", null, true);
                    echo "\">
                                                ";
                    // line 600
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["change"], "loggedAt", array()), "d.m.Y H:i:s"), "html", null, true);
                    echo "
                                            </td>
                                            <td data-title=\"";
                    // line 602
                    echo twig_escape_filter($this->env, (isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "html", null, true);
                    echo "\">
                                                ";
                    // line 603
                    echo twig_escape_filter($this->env, $this->getAttribute($context["change"], "username", array()), "html", null, true);
                    echo "
                                            </td>
                                        </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['change'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 607
                echo "                                    </tbody>
                                </table>
                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 610
                echo "                                <h5>Brak wycen</h5>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['priceChangelog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 612
            echo "                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Zamknij</button>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"modal fade\" id=\"repairChangeLocalizationModal\" tabindex=\"-1\" role=\"dialog\"
             aria-labelledby=\"repairChangeLocalizationModal\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                    aria-hidden=\"true\">&times;</span></button>
                        <h3 class=\"modal-title\" id=\"repairChangelogModal\">Zmiana lokalizacji startowej</h3>
                    </div>
                    <form id=\"editRepairStartLocalizationForm\">
                        <div class=\"modal-body\">
                            <div class=\"form-group\">
                                <label for=\"repairStartLocalizationSelect\">Lokalizacja <u>startowa</u></label>
                                <select type=\"select\" id=\"repairStartLocalizationSelect\" class=\"form-control\"
                                        name=\"repairStartLocalizationSelect\"
                                        required=\"required\"
                                        data-error=\"Wybierz startową lokalizację.\">
                                    ";
            // line 637
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["localization_service"]) ? $context["localization_service"] : $this->getContext($context, "localization_service")), "allLocalizations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 638
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "id", array()), "html", null, true);
                echo "\"
                                                ";
                // line 639
                if (($context["choice"] == $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "startLocalization", array()))) {
                    echo "selected";
                }
                echo ">
                                            ";
                // line 640
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "name", array()), "html", null, true);
                echo "
                                        </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 643
            echo "                                </select>
                                ";
            // line 644
            if (($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "currentRepairer", array()) != $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
                // line 645
                echo "                                    <span class=\"text-muted text-danger\">
                                            Naprawa zostanie przypisana do Twojego konta.
                                        </span>
                                ";
            }
            // line 649
            echo "                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                            <input type=\"submit\" class=\"btn btn-success\" value=\"Zatwierdź\"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    ";
        }
        // line 660
        echo "
    <div class=\"modal fade\" id=\"editRepairPaymentModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Metoda płatności</h4>
                </div>
                <form id=\"editRepairPayment\" name=\"editRepairPayment\">
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label for=\"paymentMethodSelect\" class=\"sr-only\">Metoda płatności</label>
                            <select type=\"select\" id=\"paymentMethodSelect\" class=\"form-control\"
                                    name=\"paymentMethodSelect\"
                                    required=\"required\"
                                    data-error=\"Wybierz metodę płatności.\">
                                ";
        // line 677
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paymentMethods"]) ? $context["paymentMethods"] : $this->getContext($context, "paymentMethods")));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 678
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "id", array()), "html", null, true);
            echo "\"
                                            ";
            // line 679
            if (($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "paymentMethod", array()), "id", array()) == $this->getAttribute($context["choice"], "id", array()))) {
                echo "selected";
            }
            // line 680
            echo "                                    >
                                        ";
            // line 681
            echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "name", array()), "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 684
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                        <button type=\"submit\" class=\"btn btn-success\" id=\"editTotalPriceSubmit\">Zatwierdź</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    ";
        // line 695
        if ($this->env->getExtension('security')->isGranted("ROLE_WORKER")) {
            // line 696
            echo "        <div class=\"modal fade\" id=\"workerRepairPricingAcceptationModal\" tabindex=\"-1\" role=\"dialog\"
             aria-labelledby=\"myModalLabel\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                    aria-hidden=\"true\">&times;</span></button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">Wycena: <span id=\"repair-total-price-modal\"></span>
                        </h4>
                    </div>
                    <div class=\"modal-body\">
                        <ul id=\"repair-pricing-descriptions-modal\" style=\"list-style-type: circle\"></ul>
                        <div class=\"form-group\">
                            <label for=\"workerRepairPricingAcceptationSelect\">Sposób akceptacji</label>
                            <select type=\"select\" id=\"workerRepairPricingAcceptationSelect\" class=\"form-control\"
                                    name=\"workerRepairPricingAcceptationMethod\"
                                    required=\"required\"
                                    data-error=\"Wybierz metodę akceptacji.\">
                                ";
            // line 714
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["acceptationMethods"]) ? $context["acceptationMethods"] : $this->getContext($context, "acceptationMethods")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 715
                echo "                                    ";
                if ( !($this->getAttribute($context["choice"], "type", array()) === constant("AppBundle\\Entity\\TotalRepairPricingResponseMethod::TYPE_APP"))) {
                    // line 716
                    echo "                                        <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "type", array()), "html", null, true);
                    echo "\">
                                            ";
                    // line 717
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "name", array())), "Wprowadź medody akceptacji"), "html", null, true);
                    echo "
                                        </option>
                                    ";
                }
                // line 720
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 721
            echo "                            </select>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                        <button type=\"button\" class=\"btn btn-success\" id=\"workerRepairPricingAcceptationSubmit\">
                            Zatwierdź
                        </button>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 734
        echo "
    <script>
        \$(document).ready(function () {

            var currentRepairStatusId = ";
        // line 738
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "currentStatus", array()), "id", array()), "html", null, true);
        echo ";
            var repairerId = ";
        // line 739
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "currentRepairer", array()), "id", array()), "html", null, true);
        echo ";

            \$(\".change-status\").change(function () {
                var statusName = \$('.change-status option:selected').text();
                \$('.modal-new-status').text(statusName);

                \$('#modalChangeStatus').modal('show');
            });

            \$('.modal-status-submit').click(function () {

                var selectedStatusId = \$('.change-status option:selected').val();
                var message = \$('.modal-public-message').val();
                var appendMessageToEmail = 0;
                var url = '";
        // line 753
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_set_repair_statusset_repair_status", array("repair" => $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "id", array()), "status" => "plain_id")), "html", null, true);
        echo "';
                url = url.replace(\"plain_id\", selectedStatusId);

                if (\$('.modal-email-checkbox').is(':checked')) {
                    appendMessageToEmail = 1;
                }

                \$.ajax({
                    type: 'PATCH',
                    url: url,
                    data: {
                        message: message,
                        appendMessageToEmail: appendMessageToEmail
                    },
                    success: function (data, status, xhr) {
                        if (xhr.status == 200) {

                            \$('.modal-email-checkbox').attr('checked', false);
                            \$('.modal-public-message').val('');
                            var emailSendedConfirmation;

                            if (data.emailSended == 1) {
                                emailSendedConfirmation = 'Wysłano wiadomość e-mail.';
                            } else {
                                emailSendedConfirmation = null;
                            }
                            currentRepairStatusId = selectedStatusId;

                            swal(\"Status został zmieniony.\", emailSendedConfirmation, \"success\");

                            if (currentRepairStatusId == ";
        // line 783
        echo twig_escape_filter($this->env, twig_constant("AppBundle\\Entity\\Status::STATUS_RETURNED"), "html", null, true);
        echo " ";
        if ( !$this->env->getExtension('security')->isGranted("ROLE_PERMISSION_CHANGE_REPAIRER")) {
            echo " || 1 ";
        }
        echo ") {
                                \$('.change-repairer').attr('disabled', true);
                            } else {
                                \$('.change-repairer').attr('disabled', false);
                            }

                            if (currentRepairStatusId == ";
        // line 789
        echo twig_escape_filter($this->env, twig_constant("AppBundle\\Entity\\Status::STATUS_RETURNED"), "html", null, true);
        echo " && ";
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            echo "1";
        } else {
            echo "0";
        }
        echo ") {
                                \$('.repair-cost-approved-toggle').removeClass('hidden');
                            } else {
                                \$('.repair-cost-approved-toggle').addClass('hidden');

                            }

                            if (currentRepairStatusId == ";
        // line 796
        echo twig_escape_filter($this->env, twig_constant("AppBundle\\Entity\\Status::STATUS_RETURNED"), "html", null, true);
        echo " && ";
        if ( !$this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            echo "1";
        } else {
            echo "0";
        }
        echo ") {
                                \$('#pricingForm').addClass('hidden');
                                \$('.pricing-edit-button').html(\"\").html(\"<span class='glyphicon glyphicon-edit text-muted'></span>\");
                            } else {
                                \$('#pricingForm').removeClass('hidden');
                            }

                            if (currentRepairStatusId == ";
        // line 803
        echo twig_escape_filter($this->env, twig_constant("AppBundle\\Entity\\Status::STATUS_RETURNED"), "html", null, true);
        echo ") {
                                \$('.payment-label-text').text('Zapłacono');
                            } else {
                                \$('.payment-label-text').text('Kwota do zapłaty');
                            }

                        }
                        else {
                            swal(\"Wystąpił błąd.\", null, \"error\");
                        }
                    }
                });
            });


            ";
        // line 818
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 819
            echo "            \$('#editRepairStartLocalizationForm').submit(function (e) {

                e.preventDefault();

                \$('#repairChangeLocalizationModal').modal('hide');

                var url = '";
            // line 825
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_update_repair_start_localizationedit_repair_start_localization", array("repair" => $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "id", array()), "localization" => 12345)), "html", null, true);
            echo "';
                var localization = \$('#repairStartLocalizationSelect').val();
                url = url.replace('12345', localization);

                \$.ajax({
                    type: 'PATCH',
                    url: url,
                    success: function (data, status, xhr) {
                        if (xhr.status == 204) {
                            var localizationName = \$('#repairStartLocalizationSelect option:selected').text();
                            \$('.repair-start-localization').text(localizationName);
                            swal(\"Lokalizacja została zmieniona\", null, \"success\");
                        }
                    },
                    error: function () {
                        swal(\"Wystąpiły błędy\", null, \"error\")
                    }
                });
            });
            ";
        }
        // line 845
        echo "

            \$('.modal-status-canceled').click(function () {
                \$('.change-status').val(currentRepairStatusId);
            });

            \$(\".change-repairer\").change(function () {
                var repairerName = \$('.change-repairer option:selected').text();
                \$('.modal-new-repairer').text(repairerName);

                \$('#modalChangeRepairer').modal('show');

            });

            \$('.modal-repairer-canceled').click(function () {
                \$('.change-repairer').val(repairerId);
            });

            \$(function () {
                \$('[data-toggle=\"popover\"]').popover()
            });

            \$('.modal-repairer-submit').click(function () {

                var message = \$('.modal-private-message').val();
                var url = '";
        // line 870
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_change_repairerchange-repairer", array("repair" => $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "id", array()), "newRepairer" => "plain_new_repairer_id")), "html", null, true);
        echo "';
                url = url.replace(\"plain_new_repairer_id\", \$('.change-repairer option:selected').val());

                \$.ajax({
                    type: 'PATCH',
                    url: url,
                    data: {
                        message: message
                    },
                    success: function (data, status, xhr) {
                        if (xhr.status == 204) {
                            swal(\"Naprawiający został zmieniony.\", null, \"success\");
                        }
                    },
                    error: function () {
                        swal(\"Wystąpiły błędy\", null, \"error\")
                    }
                });
            });
//-----------------------------APPROVED
            ";
        // line 890
        if ($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "approved", array())) {
            // line 891
            echo "            \$('#approved-toggle').bootstrapToggle('on');
            isApproved = true;
            ";
        } else {
            // line 894
            echo "            \$('#approved-toggle').bootstrapToggle('off');
            isApproved = false;
            ";
        }
        // line 897
        echo "
            \$('.toggle-group').click(function () {
                if (\$(this).parent().hasClass('btn-danger')) {
                    \$.ajax({
                        type: 'PATCH',
                        url: '";
        // line 902
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_set_repair_cost_approvedrepair_approved", array("id" => $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "id", array()))), "html", null, true);
        echo "',
                        success: function (data, status, xhr) {
                            if (xhr.status == 204) {
                                swal(\"Wycena została zatwierdzona\", null, \"success\");
                            }
                        },
                        error: function () {
                            \$('#approved-toggle').bootstrapToggle('off');
                            swal(\"Wystąpiły błędy\", null, \"error\")
                        }
                    });
                }

                if (\$(this).parent().hasClass('btn-success')) {
                    \$.ajax({
                        type: 'PATCH',
                        url: '";
        // line 918
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_set_repair_cost_not_approvedrepair_not_approved", array("id" => $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "id", array()))), "html", null, true);
        echo "',
                        success: function (data, status, xhr) {
                            if (xhr.status == 204) {
                                swal(\"Wycena została anulowana\", null, \"error\");
                            }
                        },
                        error: function () {
                            \$('#approved-toggle').bootstrapToggle('on');
                            swal(\"Wystąpiły błędy\", null, \"error\")
                        }
                    });
                }
            });
//-----------------------------APPROVED
        });

        \$('#editRepairPayment').submit(function (e) {
            e.preventDefault();

            \$('#editRepairPaymentModal').modal('hide');
            \$.ajax({
                type: 'PATCH',
                data: \$('#editRepairPayment').serialize(),
                url: '";
        // line 941
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_edit_repair_payment_methodedit_repair_payment_method", array("id" => $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "id", array()))), "html", null, true);
        echo "',
                success: function (data, status, xhr) {
                    if (xhr.status == 204) {

                        var selectedMethod = \$('#paymentMethodSelect option:selected').text();
                        \$('.repair-payment-method').text(selectedMethod);

                        swal(\"Metoda płatności została zmieniona\", null, \"success\");
                    }
                },
                error: function () {
                    swal(\"Wystąpiły błędy\", null, \"error\")
                }
            });
        });

        \$('.repair-pricing-acceptation-request').click(function () {

            \$(this).attr('disabled', true);

            var url = '";
        // line 961
        echo $this->env->getExtension('routing')->getPath("api_add_worker_total_repair_pricing_requestadd_total_repair_pricing_request", array("id" => 12345));
        echo "';
            url = url.replace(12345, ";
        // line 962
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "id", array()), "html", null, true);
        echo ");

            \$.ajax({
                type: 'POST',
                url: url,
                success: function (data, status, xhr) {
                    if (xhr.status == 204) {
                        swal(\"Wycena naprawy została przesłana do klienta\", null, \"success\");
                        \$('select.change-status').val(2);
                    }
                },
                error: function () {
                    swal(\"Wystąpiły błędy\", null, \"error\")
                }
            });
        });

        \$(\".money-amount\").inputmask({
            alias: 'numeric',
            digits: 2,
            digitsOptional: false,
            rightAlign: false
        });

        \$('.user-invoice-data').click(function () {
            \$('.user-invoice-data-body').toggleClass('hidden');
        });


        function showWorkerPricingAcceptationModal(id) {

            var totalPriceText = \$('#repair-total-price-' + id).text();
            var descriptionsHtml = \$('#repair-pricing-descriptions-' + id).html();

            \$('#workerRepairPricingAcceptationSelect').attr('data-id', id);

            \$('#repair-total-price-modal').text(totalPriceText);
            \$('#repair-pricing-descriptions-modal').html(descriptionsHtml);

            \$('#workerRepairPricingAcceptationModal').modal('show');
        }

        \$('#workerRepairPricingAcceptationSubmit').click(function () {

            var pricingSelect = \$('#workerRepairPricingAcceptationSelect');

            var pricingId = pricingSelect.attr('data-id');
            var acceptationMethod = pricingSelect.val();
            var acceptationMethodName = pricingSelect.text();

            var url = '";
        // line 1012
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_set_total_repair_pricing_responsetotal_repair_pricing_response", array("pricing" => 111111, "responseMethod" => 222222, "pricingStatus" => 333333)), "html", null, true);
        echo "';
            url = url.replace(111111, pricingId).replace(222222, acceptationMethod).replace(333333, '";
        // line 1013
        echo twig_escape_filter($this->env, twig_constant("AppBundle\\Entity\\TotalRepairPricingStatus::TYPE_ACCEPTED"), "html", null, true);
        echo "');

            \$.ajax({
                type: 'PATCH',
                url: url,
                success: function (data, status, xhr) {
                    if (xhr.status == 204) {

                        \$('#workerRepairPricingAcceptationModal').modal('hide');

                        swal(\"Wycena naprawy została zaakceptowana\", null, \"success\");

                        \$('select.change-status').val(8);
                        \$('#confirmation-button-' + pricingId).addClass('hidden');
                        \$('#pricing-glyphicon-' + pricingId).removeClass('glyphicon-remove text-danger').addClass('glyphicon-ok text-success');
                        \$('.repair-pricing-acceptation-request').addClass('hidden');
                        \$('#confirmation-data-' + pricingId).html(
                                'Data akceptacji: ' + moment().format(\"DD.MM.YYYY HH:mm:ss\") +
                                '<br>' +
                                'Sposób akceptacji: ' + acceptationMethodName);
                    }
                },
                error: function () {
                    swal(\"Wystąpiły błędy\", null, \"error\")
                }
            });
        });

    </script>

";
        
        $__internal_01d838757a11ed14bf1ddedeb8098126e4248966b281273e95381f3b33f3b936->leave($__internal_01d838757a11ed14bf1ddedeb8098126e4248966b281273e95381f3b33f3b936_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Worker:repairDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1814 => 1013,  1810 => 1012,  1757 => 962,  1753 => 961,  1730 => 941,  1704 => 918,  1685 => 902,  1678 => 897,  1673 => 894,  1668 => 891,  1666 => 890,  1643 => 870,  1616 => 845,  1593 => 825,  1585 => 819,  1583 => 818,  1565 => 803,  1549 => 796,  1533 => 789,  1520 => 783,  1487 => 753,  1470 => 739,  1466 => 738,  1460 => 734,  1445 => 721,  1439 => 720,  1433 => 717,  1428 => 716,  1425 => 715,  1421 => 714,  1401 => 696,  1399 => 695,  1386 => 684,  1377 => 681,  1374 => 680,  1370 => 679,  1365 => 678,  1361 => 677,  1342 => 660,  1329 => 649,  1323 => 645,  1321 => 644,  1318 => 643,  1309 => 640,  1303 => 639,  1298 => 638,  1294 => 637,  1267 => 612,  1260 => 610,  1253 => 607,  1243 => 603,  1239 => 602,  1234 => 600,  1230 => 599,  1227 => 598,  1220 => 596,  1214 => 594,  1211 => 593,  1202 => 591,  1197 => 590,  1195 => 589,  1190 => 588,  1187 => 587,  1183 => 586,  1179 => 585,  1173 => 583,  1171 => 582,  1167 => 581,  1164 => 580,  1160 => 579,  1152 => 574,  1146 => 571,  1140 => 568,  1134 => 565,  1125 => 560,  1120 => 559,  1114 => 555,  1104 => 551,  1100 => 550,  1095 => 548,  1091 => 547,  1088 => 546,  1081 => 544,  1078 => 543,  1075 => 542,  1071 => 540,  1067 => 538,  1065 => 537,  1062 => 536,  1059 => 535,  1056 => 534,  1045 => 532,  1042 => 531,  1037 => 530,  1034 => 529,  1030 => 528,  1026 => 527,  1020 => 525,  1018 => 524,  1014 => 523,  1011 => 522,  1007 => 521,  999 => 516,  993 => 513,  987 => 510,  981 => 507,  962 => 490,  959 => 489,  956 => 488,  953 => 487,  951 => 486,  948 => 485,  946 => 484,  943 => 483,  907 => 448,  903 => 446,  893 => 438,  891 => 437,  886 => 434,  884 => 433,  864 => 415,  850 => 414,  847 => 413,  844 => 412,  841 => 411,  838 => 410,  835 => 409,  832 => 408,  829 => 407,  826 => 406,  823 => 405,  806 => 404,  800 => 399,  795 => 397,  786 => 391,  780 => 388,  774 => 387,  769 => 385,  763 => 384,  759 => 383,  746 => 372,  735 => 361,  729 => 358,  720 => 351,  718 => 350,  707 => 339,  696 => 331,  689 => 326,  675 => 314,  673 => 313,  668 => 311,  662 => 308,  656 => 305,  652 => 304,  644 => 301,  640 => 299,  636 => 298,  634 => 297,  631 => 296,  625 => 295,  619 => 291,  615 => 289,  607 => 285,  605 => 284,  598 => 280,  592 => 277,  586 => 274,  578 => 271,  568 => 269,  557 => 262,  553 => 260,  550 => 259,  543 => 258,  540 => 257,  537 => 256,  534 => 255,  527 => 254,  524 => 253,  517 => 252,  514 => 251,  512 => 250,  509 => 249,  507 => 248,  506 => 247,  504 => 245,  500 => 244,  475 => 221,  473 => 220,  468 => 217,  463 => 215,  456 => 212,  454 => 211,  450 => 210,  446 => 208,  442 => 206,  438 => 204,  436 => 203,  429 => 199,  426 => 198,  420 => 194,  418 => 193,  414 => 191,  400 => 183,  398 => 182,  391 => 177,  383 => 171,  381 => 170,  380 => 169,  379 => 168,  368 => 160,  363 => 158,  360 => 157,  352 => 155,  347 => 154,  343 => 153,  339 => 152,  332 => 150,  324 => 147,  311 => 136,  307 => 134,  301 => 132,  299 => 131,  296 => 130,  291 => 128,  288 => 127,  286 => 126,  282 => 124,  269 => 121,  266 => 120,  262 => 118,  260 => 117,  255 => 116,  251 => 115,  248 => 114,  244 => 112,  242 => 110,  241 => 109,  233 => 103,  224 => 100,  221 => 99,  217 => 97,  215 => 96,  210 => 95,  206 => 94,  197 => 88,  193 => 87,  188 => 85,  183 => 82,  174 => 77,  171 => 76,  160 => 67,  158 => 66,  145 => 56,  139 => 53,  133 => 50,  127 => 47,  121 => 44,  106 => 32,  100 => 29,  92 => 26,  88 => 24,  82 => 22,  76 => 19,  71 => 18,  69 => 17,  60 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*     | Naprawy | Szczegóły*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     {% include 'AppBundle::alerts.html.twig' %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             <div class="panel panel-info">*/
/*                 <div class="panel-heading">Klient</div>*/
/*                 <ul class="list-group">*/
/*                     <li class="list-group-item"><strong>ID użytkownika:</strong>*/
/*                         {% if is_granted('ROLE_PERMISSION_USER_SECTION') %}*/
/*                             <a href="{{ path('worker_panel_user_details',{'id':repair.user.id}) }}">*/
/*                                 {{ repair.user.altId }}*/
/*                             </a>*/
/*                         {% else %}*/
/*                             {{ repair.user.altId }}*/
/*                         {% endif %}*/
/*                     </li>*/
/*                     <li class="list-group-item"><strong>Imię i*/
/*                             nazwisko:</strong> {{ repair.user.name }} {{ repair.user.surname }}*/
/*                     </li>*/
/*                     <li class="list-group-item"><strong>E-mail:</strong>*/
/*                         {{ repair.user.email|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item"><strong>Tel:</strong>*/
/*                         {{ phone_number_format(repair.user.tel|default('-')) }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <button type="button" class="btn btn-info btn-sm btn-block user-invoice-data">*/
/*                             Dane do faktury*/
/*                         <span class="glyphicon glyphicon-triangle-bottom pull-right"*/
/*                               style="margin-top: 2px;"></span>*/
/*                         </button>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <ul class="list-group user-invoice-data-body hidden">*/
/*                     <li class="list-group-item">*/
/*                         <strong>Nazwa firmy:</strong> {{ repair.user.clientCompanyName|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Adres:</strong> {{ repair.user.clientCompanyAddress|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Kod pocztowy:</strong> {{ repair.user.clientCompanyPostCode|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Miasto:</strong> {{ repair.user.clientCompanyCity|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>NIP:</strong> {{ repair.user.clientCompanyNIP|default('-') }}*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <div class="panel panel-info">*/
/*                 <div class="panel-heading">*/
/*                     Naprawa*/
/*                     <div class="pull-right">*/
/*                         {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                             <button type="button" class="btn btn-danger btn-xs" data-toggle="modal"*/
/*                                     data-target="#repairChangeLocalizationModal">*/
/*                                 Lokalizacja*/
/*                             </button>*/
/*                             <button type="button" class="btn btn-primary btn-xs" data-toggle="modal"*/
/*                                     data-target="#repairChangelogModal">*/
/*                                 Historia*/
/*                             </button>*/
/*                         {% endif %}*/
/*                         {% if is_granted('ROLE_PERMISSION_POKWITOWANIE_CREATE') %}*/
/*                             <a href="{{ path('worker_panel_pokwitowanie_print',{'id': repair.id }) }}"*/
/*                                title="Pokwitowanie">*/
/*                                 <button type="button" class="btn btn-xs btn-info">Pokwitowanie</button>*/
/*                             </a>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*                 <ul class="list-group">*/
/*                     <li class="list-group-item"><strong>ID naprawy: </strong> {{ repair.altId }}</li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Data przyjęcia: </strong> {{ repair.startDate | date('d.m.Y H:i:s') }}*/
/*                         ({{ repair.startLocalization.name }})*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Status:</strong>*/
/*                         <label for="status" class="sr-only">Zmiana statusu</label>*/
/*                         <select class="form-control change-status" id="status">*/
/*                             {% for status in statusesToSelect %}*/
/*                                 <option value="{{ status.id }}"*/
/*                                         {% if repair.currentStatus.id == status.id %}*/
/*                                             selected*/
/*                                         {% endif %}*/
/*                                 >*/
/*                                     {{ status.name }}*/
/*                                 </option>*/
/*                             {% endfor %}*/
/*                         </select>*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Naprawiający </strong>*/
/*                         <label for="repairer" class="sr-only">Naprawiający</label>*/
/*                         <select class="form-control change-repairer" id="repairer"*/
/*                                 {% if*/
/*                                 repair.currentStatus.id == constant('AppBundle\\Entity\\Status::STATUS_RETURNED') or not*/
/*                                 is_granted("ROLE_PERMISSION_CHANGE_REPAIRER") %}*/
/*                                     disabled*/
/*                                 {% endif %}*/
/*                         >*/
/*                             {% for repairer in repairersToSelect %}*/
/*                                 <option value="{{ repairer.id }}"*/
/*                                         {% if repair.currentRepairer.id == repairer.id %}*/
/*                                             selected*/
/*                                         {% endif %}*/
/*                                 >*/
/*                                     {{ repairer.localization.name }} | {{ repairer.name }} {{ repairer.surname }}*/
/*                                 </option>*/
/*                             {% endfor %}*/
/*                         </select>*/
/*                     </li>*/
/*                     {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                         <li class="list-group-item"><strong>Lokalizacja startowa: </strong><span*/
/*                                     class="repair-start-localization">{{ repair.startLocalization }}</span></li>*/
/*                     {% endif %}*/
/*                     <li class="list-group-item"><strong>Data zakończenia: </strong>*/
/*                         {% if repair.endDate is not null and repair.currentStatus.id == constant('AppBundle\\Entity\\Status::STATUS_RETURNED') %}*/
/*                             {{ repair.endDate | date('d.m.Y H:i:s') }}*/
/*                         {% else %}*/
/*                             -*/
/*                         {% endif %}*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             <div class="panel panel-info">*/
/*                 <div class="panel-heading">Sprzęt</div>*/
/*                 <ul class="list-group">*/
/*                     <li class="list-group-item"><strong>ID urządzenia: </strong>*/
/*                         <a href="{{ path('worker_panel_device_details', {'id': repair.device.id}) }}">{{ repair.device.altId }}</a>*/
/*                     </li>*/
/*                     <li class="list-group-item"><strong>Marka i model: </strong>*/
/*                         {{ repair.device.brand }} {{ repair.device.model }}*/
/*                     </li>*/
/*                     <li class="list-group-item"><strong>S/N: </strong> {{ repair.device.serial }}</li>*/
/*                     {% for field in repair.device.customFields %}*/
/*                         <li class="list-group-item"><strong>{{ field.customFieldTemplate.name }}*/
/*                                 :</strong> {{ device_manager.getCustomFieldValueName(field) }}</li>*/
/*                     {% endfor %}*/
/*                     <li class="list-group-item"><strong>Dodatkowo: </strong>*/
/*                         {{ repair.addition|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item"><strong>Opis usterki: </strong> {{ repair.description }}</li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <div class="panel panel-info">*/
/*                 <div class="panel-heading">*/
/*                     Koszty naprawy*/
/*                     {% if repair.currentStatus.id != constant('AppBundle\\Entity\\Status::STATUS_RETURNED')*/
/*                     and (is_granted('ROLE_SUPER_ADMIN') or app.user.localization == repair.startLocalization)*/
/*                     and repair.totalRepairPricingChanged %}*/
/*                         <div class="pull-right">*/
/*                             <button type="button" class="btn btn-danger btn-xs repair-pricing-acceptation-request">*/
/*                                 Prześlij wycenę naprawy do klienta*/
/*                             </button>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading repair-cost-approve">*/
/*                             Podsumowanie*/
/*                             {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                                 <span class="pull-right repair-cost-approved-toggle {% if repair.currentStatus.id != constant('AppBundle\\Entity\\Status::STATUS_RETURNED') %}hidden{% endif %}">*/
/*                                 Zatwierdzono:*/
/*                                 <label for="approved-toggle" class="sr-only">Przełącznik</label>*/
/*                                 <input id="approved-toggle" type="checkbox" checked data-toggle="toggle"*/
/*                                        data-on="Tak" data-off="Nie" data-onstyle="success"*/
/*                                        data-offstyle="danger" data-size="mini">*/
/*                             </span>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         <div class="panel-body text-right">*/
/*                             {% if is_granted('ROLE_SUPER_ADMIN') or repair.currentStatus.id != constant('AppBundle\\Entity\\Status::STATUS_RETURNED') %}*/
/*                             <a data-toggle="modal" class="repair-total-price-financial-summary"*/
/*                                data-target="#editRepairPaymentModal">*/
/*                                 <span class="glyphicon glyphicon-edit text-success" style="cursor: pointer;"></span></a>*/
/*                                 {% endif %}*/
/*                                 Metoda płatności:*/
/*                                 <span class="repair-payment-method">{{ repair.paymentMethod|default('-') }}</span>*/
/*                                 <br>*/
/* */
/*                             <span class="payment-label-text">*/
/*                                 {% if repair.currentStatus.id == constant('AppBundle\\Entity\\Status::STATUS_RETURNED') %}*/
/*                                     Zapłacono:*/
/*                                 {% else %}*/
/*                                     Kwota do zapłaty:*/
/*                                 {% endif %}*/
/*                             </span>*/
/* */
/*                                 {{ financialSummary.price | money_format }}<br>*/
/*                                 {% if is_granted('ROLE_SUPER_ADMIN') or not repair.approved %}*/
/*                                     Koszty: {{ financialSummary.cost | money_format }}<br>*/
/*                                     <span class="glyphicon glyphicon-minus"></span>*/
/*                                     ___________________<br><br>*/
/*                                     Zarobek: {{ financialSummary.profit | money_format }}<br>*/
/*                                 {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% if is_granted('ROLE_SUPER_ADMIN') or not repair.approved %}*/
/*                     <div class="table-responsive"*/
/*                          style="border-top: none">*/
/*                         <table class="table table-bordered" id="convertable-table">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>*/
/*                                     Autor*/
/*                                 </th>*/
/*                                 <th>*/
/*                                     Typ*/
/*                                 </th>*/
/*                                 <th>*/
/*                                     Opis*/
/*                                 </th>*/
/*                                 <th>*/
/*                                     Kwota*/
/*                                 </th>*/
/*                                 <th>*/
/*                                     Edytuj*/
/*                                 </th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for cost in repairCostsAndPrices %}*/
/*                                 {% if*/
/*                                 is_granted('ROLE_SUPER_ADMIN') or*/
/*                                 cost.localization == app.user.localization or*/
/*                                 cost.costKind.type == constant('AppBundle\\Entity\\RepairCostKind::TYPE_PLUS') %}*/
/*                                     <tr class="*/
/*                                 {% if app.user.localization ==  cost.repair.startLocalization %}*/
/*                                     {% if cost.localization == cost.repair.startLocalization %}*/
/*                                         {% if cost.costKind.type == constant('AppBundle\\Entity\\RepairCostKind::TYPE_PLUS') %}success{% else %}danger{% endif %}*/
/*                                     {% else %}*/
/*                                         {% if cost.costKind.type == constant('AppBundle\\Entity\\RepairCostKind::TYPE_PLUS') %}danger{% else %}foreign-entry{% endif %}*/
/*                                     {% endif %}*/
/*                                 {% else %}*/
/*                                     {% if cost.localization != cost.repair.startLocalization %}*/
/*                                         {% if cost.costKind.type == constant('AppBundle\\Entity\\RepairCostKind::TYPE_PLUS') %}success{% else %}danger{% endif %}*/
/*                                     {% else %}*/
/*                                         foreign-entry*/
/*                                     {% endif %}*/
/*                                 {% endif %}">*/
/*                                         <td data-title="Autor">*/
/*                                             <span tabindex="0" class="glyphicon glyphicon-info-sign text-muted"*/
/*                                                   role="button"*/
/*                                                   data-toggle="popover"*/
/*                                                   data-container="body"*/
/*                                                   data-trigger="focus hover" data-placement="bottom"*/
/*                                                   data-content="{{ cost.created | date('d.m.Y H:i:s') }} {% if is_granted('ROLE_SUPER_ADMIN') and cost.localization is not null %}Przypisano do: {{ cost.localization.name }}{% endif %}">*/
/*                                             </span>*/
/*                                             {{ cost.author.name }} {{ cost.author.surname }}*/
/*                                         </td>*/
/*                                         <td data-title="Typ">*/
/*                                             {{ cost.costKind.name }}*/
/*                                         </td>*/
/*                                         <td data-title="Opis">*/
/*                                             {{ cost.description }}*/
/*                                         </td>*/
/*                                         <td data-title="Kwota">*/
/*                                             {{ cost.price | money_format }}*/
/*                                         </td>*/
/*                                         <td data-title="Edytuj">*/
/*                                             <div class="text-center pricing-edit-button">*/
/*                                                 {% if (app.user == cost.author and repair.currentStatus.id != constant('AppBundle\\Entity\\Status::STATUS_RETURNED')) or is_granted('ROLE_SUPER_ADMIN') %}*/
/*                                                     <a href="{{ path('worker_panel_repair_pricing_edit',{'id':cost.id}) }}">*/
/*                                                         <span class="glyphicon glyphicon-edit text-success"></span>*/
/*                                                     </a>*/
/*                                                 {% else %}*/
/*                                                     <span class="glyphicon glyphicon-edit text-muted"></span>*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                             <tr id="pricingForm" class="*/
/*                                 {% if repair.currentStatus.id == constant('AppBundle\\Entity\\Status::STATUS_RETURNED') and not is_granted('ROLE_SUPER_ADMIN') %}*/
/*                                     hidden*/
/*                                 {% endif %}">*/
/*                                 <td data-title="Autor">*/
/*                                     {{ app.user.name }} {{ app.user.surname }}*/
/*                                 </td>*/
/*                                 <td data-title="Typ">*/
/*                                     {{ form_start(formPricing) }}*/
/*                                     {{ form_row(formPricing.cost_kind, {'attr': {'class': 'input-sm'}}) }}*/
/*                                 </td>*/
/*                                 <td data-title="Opis">*/
/*                                     {{ form_row(formPricing.description, {'attr': {'class': 'input-sm', 'placeholder': 'opis*'}}) }}*/
/*                                 </td>*/
/*                                 <td data-title="Kwota">*/
/*                                     {{ form_widget(formPricing.price.tbbc_amount, {'attr': {'class': 'input-sm price-amount money-amount', 'placeholder': 'kwota*'}}) }}*/
/* */
/*                                     {% if form_errors(formPricing) %}*/
/*                                         <span class="help-block">*/
/*                                     <ul class="list-unstyled">*/
/*                                         <li class="text-danger">*/
/*                                             <span class="glyphicon glyphicon-exclamation-sign"></span>*/
/*                                             To pole zawiera błędy*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </span>*/
/*                                         <script>*/
/*                                             $('#pricing_price_tbbc_amount').css('border-color', '#a94442');*/
/*                                         </script>*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                                 <td data-title="Dodaj">*/
/*                                     <div class="text-center">*/
/*                                         <input type="submit" value="Dodaj"*/
/*                                                class="btn btn-sm btn-success"/>*/
/*                                         {{ form_end(formPricing) }}*/
/*                                     </div>*/
/*                                 </td>*/
/*                             </tr>*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="panel panel-info">*/
/*                 <div class="panel-heading">Timeline</div>*/
/*                 <div class="panel-body">*/
/*                     <div id="messages">*/
/*                         <ul class="timeline">*/
/*                             {#----TIMELINE OPIONION BEGIN----#}*/
/*                             {% if repair.opinion is not null %}*/
/*                                 <li class="timeline-fullwidth opinion">*/
/*                                     <div class="timeline-panel">*/
/*                                         <div class="timeline-heading">*/
/*                                             <h4 class="timeline-title">Opinia:</h4>*/
/*                                         </div>*/
/*                                         <div class="timeline-body">*/
/*                                             <p>*/
/*                                                 {{ repair.opinion | raw }}*/
/*                                             </p>*/
/*                                             <p>*/
/*                                                 <small class="text-muted">{{ repair.opinionDate | date('d.m.Y H:i:s') }}</small>*/
/*                                             </p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="timeline-badge warning"><i*/
/*                                                 class="glyphicon glyphicon-edit timeline-glyphicon"></i></div>*/
/*                                 </li>*/
/*                             {% endif %}*/
/*                             {#----TIMELINE OPIONION END----#}*/
/* */
/*                             {#----MESSAGE START----#}*/
/*                             <li class="timeline-inverted">*/
/*                                 <div class="timeline-badge success">*/
/*                                     <i class="glyphicon glyphicon-plus timeline-glyphicon"></i>*/
/*                                 </div>*/
/*                                 <div class="timeline-panel">*/
/*                                     <div class="timeline-heading">*/
/*                                         <h4 class="timeline-title">*/
/*                                             Nowa wiadomość:*/
/*                                         </h4>*/
/*                                     </div>*/
/*                                     <div class="timeline-body">*/
/*                                         {{ form_start(form) }}*/
/*                                         <div class="form-group{% if form_errors(form.content) %} has-error {% endif %}">*/
/*                                             {{ form_widget(form.content) }}*/
/*                                         </div>*/
/*                                         <div class="help-block {% if form_errors(form.content) %} has-error {% endif %}">*/
/*                                             {{ form_errors(form.content) }}*/
/*                                         </div>*/
/*                                         <div class="form-group">*/
/*                                             {{ form_widget(form.type) }}*/
/*                                         </div>*/
/*                                         <div class="help-block col-md-10">Wiadomości nie będzie można usuwać ani*/
/*                                             edytować.*/
/*                                         </div>*/
/*                                         <div class="form-group col-md-2">*/
/*                                             {{ form_widget(form.send, {'attr': {'class': 'btn btn-sm btn-success pull-right'}}) }}*/
/*                                         </div>*/
/*                                         {{ form_end(form) }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </li>*/
/*                             {#----MESSAGE STOP----#}*/
/*                             {% for entry in timeline %}*/
/*                                 {% if helper_service.instanceOf(entry, 'AppBundle\\Entity\\Message') %}*/
/*                                     {% include 'AppBundle:Timeline:message.html.twig' %}*/
/*                                 {% elseif helper_service.instanceOf(entry, 'AppBundle\\Entity\\RepairersHistory') %}*/
/*                                     {% include 'AppBundle:Timeline:repairersHistory.html.twig' %}*/
/*                                 {% elseif helper_service.instanceOf(entry, 'AppBundle\\Entity\\RepairStatus') %}*/
/*                                     {% include 'AppBundle:Timeline:repairStatus.html.twig' %}*/
/*                                 {% elseif helper_service.instanceOf(entry, 'AppBundle\\Entity\\TotalRepairPricing') %}*/
/*                                     {% include 'AppBundle:Timeline:totalPricingRequest.html.twig' %}*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- Modal potwierdzenie zmiany statusu -->*/
/*     <div class="modal fade" id="modalChangeStatus" tabindex="-1" role="dialog" aria-labelledby="modalChangeStatusLabel">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span*/
/*                                 aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="modalChangeStatusLabel">Nowy status: </h4>*/
/* */
/*                     <div class="modal-new-status"></div>*/
/*                 </div>*/
/*                 {% if is_granted('ROLE_PERMISSION_PUBLIC_MESSAGES') %}*/
/*                     <div class="modal-body">*/
/*                         <label for="modal-public-message">Wiadomość publiczna:</label>*/
/*                         <input type="text" class="form-control modal-public-message" id="modal-public-message">*/
/*                         {% if repair.user.email is not null %}*/
/*                             <div class="checkbox">*/
/*                                 <label>*/
/*                                     <input type="checkbox" value="checkbox" id="modal-email-checkbox"*/
/*                                            class="modal-email-checkbox" checked>*/
/*                                     Dołącz tą wiadomość do e-maila potwierdzającego zmianę statusu.*/
/*                                 </label>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-default modal-status-canceled" data-dismiss="modal">Anuluj*/
/*                     </button>*/
/*                     <button type="button" class="btn btn-success modal-status-submit" data-dismiss="modal">Zatwierdź*/
/*                     </button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <!-- Modal - change repairer confirmation -->*/
/*     <div class="modal fade" id="modalChangeRepairer" tabindex="-1" role="dialog"*/
/*          aria-labelledby="modalChangeRepairerLabel">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span*/
/*                                 aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="modalChangeRepairerLabel">Nowy naprawiający:</h4>*/
/* */
/*                     <div class="modal-new-repairer"></div>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <label for="modal-private-message">Notatka:</label>*/
/*                     <input type="text" class="form-control modal-private-message" id="modal-private-message">*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-default modal-repairer-canceled" data-dismiss="modal">Anuluj*/
/*                     </button>*/
/*                     <button type="button" class="btn btn-success modal-repairer-submit" data-dismiss="modal">Zatwierdź*/
/*                     </button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {#todo dla przypadku naprawy zakonczonej i niezatwierdzonej, po zmianie stanu dodaj przyciski z hiperlaczami do edycji wpisu#}*/
/* */
/*     {% if is_granted("ROLE_SUPER_ADMIN") %}*/
/* */
/*         {% set action = "Akcja" %}*/
/*         {% set data = "Dane" %}*/
/*         {% set timeStamp = "Data" %}*/
/*         {% set author = "Autor" %}*/
/* */
/*         <div class="modal fade" id="repairChangelogModal" tabindex="-1" role="dialog"*/
/*              aria-labelledby="repairChangelogModal">*/
/*             <div class="modal-dialog" role="document">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span*/
/*                                     aria-hidden="true">&times;</span></button>*/
/*                         <h3 class="modal-title" id="repairChangelogModal">Historia zmian</h3>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         <div class="table-responsive">*/
/*                             <h4>Naprawa</h4>*/
/*                             <table class="table table-bordered table-hover" id="convertable-table">*/
/*                                 <thead>*/
/*                                 <tr>*/
/*                                     <th>*/
/*                                         {{ action }}*/
/*                                     </th>*/
/*                                     <th>*/
/*                                         {{ data }}*/
/*                                     </th>*/
/*                                     <th>*/
/*                                         {{ timeStamp }}*/
/*                                     </th>*/
/*                                     <th>*/
/*                                         {{ author }}*/
/*                                     </th>*/
/*                                 </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                 {% for log in repairChangelog %}*/
/*                                     <tr>*/
/*                                         <td data-title="{{ action }}">*/
/*                                             {% set message = log.action %}*/
/*                                             {{ message|trans }}*/
/*                                         </td>*/
/*                                         <td data-title="{{ data }}">*/
/*                                             {% for key, data in log.data %}*/
/*                                                 {% if data is iterable %}*/
/*                                                     {% for row in data %}*/
/*                                                         {% set message = key %}*/
/*                                                         {{ message|trans }}: {{ row }}*/
/*                                                     {% endfor %}*/
/*                                                 {% else %}*/
/*                                                     {% if key == "approved" %}*/
/*                                                         Wycena:*/
/*                                                         {% if data %}*/
/*                                                             Zatwierdzona*/
/*                                                         {% else %}*/
/*                                                             Niezatwierdzona*/
/*                                                         {% endif %}*/
/*                                                     {% endif %}*/
/*                                                 {% endif %}*/
/*                                                 <br>*/
/*                                             {% endfor %}*/
/*                                         </td>*/
/*                                         <td data-title="{{ timeStamp }}">*/
/*                                             {{ log.loggedAt | date('d.m.Y H:i:s') }}*/
/*                                         </td>*/
/*                                         <td data-title="{{ author }}">*/
/*                                             {{ log.username }}*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                             <hr>*/
/*                             <h4>Koszty naprawy</h4>*/
/*                             {% for index, priceChangelog in repairPricingChangelog %}*/
/*                                 <h5>#{{ index+1 }}</h5>*/
/*                                 <table class="table table-bordered table-hover" id="convertable-table">*/
/*                                     <thead>*/
/*                                     <tr>*/
/*                                         <th>*/
/*                                             {{ action }}*/
/*                                         </th>*/
/*                                         <th>*/
/*                                             {{ data }}*/
/*                                         </th>*/
/*                                         <th>*/
/*                                             {{ timeStamp }}*/
/*                                         </th>*/
/*                                         <th>*/
/*                                             {{ author }}*/
/*                                         </th>*/
/*                                     </tr>*/
/*                                     </thead>*/
/*                                     <tbody>*/
/*                                     {% for change in priceChangelog %}*/
/*                                         <tr>*/
/*                                             <td data-title="{{ action }}">*/
/*                                                 {% set message = change.action %}*/
/*                                                 {{ message|trans }}*/
/*                                             </td>*/
/*                                             <td data-title="{{ data }}">*/
/*                                                 {% for key, data in change.data %}*/
/*                                                     {% set message = key %}*/
/*                                                     {{ message|trans }}:*/
/*                                                     {% if data is iterable %}*/
/*                                                         {% for row in data %}*/
/*                                                             {{ row }}*/
/*                                                         {% endfor %}*/
/*                                                     {% else %}*/
/*                                                         {{ data }}*/
/*                                                     {% endif %}*/
/*                                                     <br>*/
/*                                                 {% endfor %}*/
/*                                             </td>*/
/*                                             <td data-title="{{ timeStamp }}">*/
/*                                                 {{ change.loggedAt | date('d.m.Y H:i:s') }}*/
/*                                             </td>*/
/*                                             <td data-title="{{ author }}">*/
/*                                                 {{ change.username }}*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             {% else %}*/
/*                                 <h5>Brak wycen</h5>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="modal-footer">*/
/*                         <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="modal fade" id="repairChangeLocalizationModal" tabindex="-1" role="dialog"*/
/*              aria-labelledby="repairChangeLocalizationModal">*/
/*             <div class="modal-dialog" role="document">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span*/
/*                                     aria-hidden="true">&times;</span></button>*/
/*                         <h3 class="modal-title" id="repairChangelogModal">Zmiana lokalizacji startowej</h3>*/
/*                     </div>*/
/*                     <form id="editRepairStartLocalizationForm">*/
/*                         <div class="modal-body">*/
/*                             <div class="form-group">*/
/*                                 <label for="repairStartLocalizationSelect">Lokalizacja <u>startowa</u></label>*/
/*                                 <select type="select" id="repairStartLocalizationSelect" class="form-control"*/
/*                                         name="repairStartLocalizationSelect"*/
/*                                         required="required"*/
/*                                         data-error="Wybierz startową lokalizację.">*/
/*                                     {% for choice in localization_service.allLocalizations %}*/
/*                                         <option value="{{ choice.id }}"*/
/*                                                 {% if choice == repair.startLocalization %}selected{% endif %}>*/
/*                                             {{ choice.name }}*/
/*                                         </option>*/
/*                                     {% endfor %}*/
/*                                 </select>*/
/*                                 {% if repair.currentRepairer != app.user %}*/
/*                                     <span class="text-muted text-danger">*/
/*                                             Naprawa zostanie przypisana do Twojego konta.*/
/*                                         </span>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="modal-footer">*/
/*                             <button type="button" class="btn btn-default" data-dismiss="modal">Anuluj</button>*/
/*                             <input type="submit" class="btn btn-success" value="Zatwierdź"/>*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <div class="modal fade" id="editRepairPaymentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span*/
/*                                 aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel">Metoda płatności</h4>*/
/*                 </div>*/
/*                 <form id="editRepairPayment" name="editRepairPayment">*/
/*                     <div class="modal-body">*/
/*                         <div class="form-group">*/
/*                             <label for="paymentMethodSelect" class="sr-only">Metoda płatności</label>*/
/*                             <select type="select" id="paymentMethodSelect" class="form-control"*/
/*                                     name="paymentMethodSelect"*/
/*                                     required="required"*/
/*                                     data-error="Wybierz metodę płatności.">*/
/*                                 {% for choice in paymentMethods %}*/
/*                                     <option value="{{ choice.id }}"*/
/*                                             {% if repair.paymentMethod.id == choice.id %}selected{% endif %}*/
/*                                     >*/
/*                                         {{ choice.name }}*/
/*                                     </option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="modal-footer">*/
/*                         <button type="button" class="btn btn-default" data-dismiss="modal">Anuluj</button>*/
/*                         <button type="submit" class="btn btn-success" id="editTotalPriceSubmit">Zatwierdź</button>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% if is_granted('ROLE_WORKER') %}*/
/*         <div class="modal fade" id="workerRepairPricingAcceptationModal" tabindex="-1" role="dialog"*/
/*              aria-labelledby="myModalLabel">*/
/*             <div class="modal-dialog" role="document">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span*/
/*                                     aria-hidden="true">&times;</span></button>*/
/*                         <h4 class="modal-title" id="myModalLabel">Wycena: <span id="repair-total-price-modal"></span>*/
/*                         </h4>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         <ul id="repair-pricing-descriptions-modal" style="list-style-type: circle"></ul>*/
/*                         <div class="form-group">*/
/*                             <label for="workerRepairPricingAcceptationSelect">Sposób akceptacji</label>*/
/*                             <select type="select" id="workerRepairPricingAcceptationSelect" class="form-control"*/
/*                                     name="workerRepairPricingAcceptationMethod"*/
/*                                     required="required"*/
/*                                     data-error="Wybierz metodę akceptacji.">*/
/*                                 {% for choice in acceptationMethods %}*/
/*                                     {% if choice.type is not constant('AppBundle\\Entity\\TotalRepairPricingResponseMethod::TYPE_APP') %}*/
/*                                         <option value="{{ choice.type }}">*/
/*                                             {{ choice.name |trans |default('Wprowadź medody akceptacji') }}*/
/*                                         </option>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="modal-footer">*/
/*                         <button type="button" class="btn btn-default" data-dismiss="modal">Anuluj</button>*/
/*                         <button type="button" class="btn btn-success" id="workerRepairPricingAcceptationSubmit">*/
/*                             Zatwierdź*/
/*                         </button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <script>*/
/*         $(document).ready(function () {*/
/* */
/*             var currentRepairStatusId = {{ repair.currentStatus.id }};*/
/*             var repairerId = {{ repair.currentRepairer.id }};*/
/* */
/*             $(".change-status").change(function () {*/
/*                 var statusName = $('.change-status option:selected').text();*/
/*                 $('.modal-new-status').text(statusName);*/
/* */
/*                 $('#modalChangeStatus').modal('show');*/
/*             });*/
/* */
/*             $('.modal-status-submit').click(function () {*/
/* */
/*                 var selectedStatusId = $('.change-status option:selected').val();*/
/*                 var message = $('.modal-public-message').val();*/
/*                 var appendMessageToEmail = 0;*/
/*                 var url = '{{ path('api_set_repair_statusset_repair_status',{'repair':repair.id, 'status': "plain_id"}) }}';*/
/*                 url = url.replace("plain_id", selectedStatusId);*/
/* */
/*                 if ($('.modal-email-checkbox').is(':checked')) {*/
/*                     appendMessageToEmail = 1;*/
/*                 }*/
/* */
/*                 $.ajax({*/
/*                     type: 'PATCH',*/
/*                     url: url,*/
/*                     data: {*/
/*                         message: message,*/
/*                         appendMessageToEmail: appendMessageToEmail*/
/*                     },*/
/*                     success: function (data, status, xhr) {*/
/*                         if (xhr.status == 200) {*/
/* */
/*                             $('.modal-email-checkbox').attr('checked', false);*/
/*                             $('.modal-public-message').val('');*/
/*                             var emailSendedConfirmation;*/
/* */
/*                             if (data.emailSended == 1) {*/
/*                                 emailSendedConfirmation = 'Wysłano wiadomość e-mail.';*/
/*                             } else {*/
/*                                 emailSendedConfirmation = null;*/
/*                             }*/
/*                             currentRepairStatusId = selectedStatusId;*/
/* */
/*                             swal("Status został zmieniony.", emailSendedConfirmation, "success");*/
/* */
/*                             if (currentRepairStatusId == {{ constant('AppBundle\\Entity\\Status::STATUS_RETURNED') }} {% if not is_granted("ROLE_PERMISSION_CHANGE_REPAIRER") %} || 1 {% endif %}) {*/
/*                                 $('.change-repairer').attr('disabled', true);*/
/*                             } else {*/
/*                                 $('.change-repairer').attr('disabled', false);*/
/*                             }*/
/* */
/*                             if (currentRepairStatusId == {{ constant('AppBundle\\Entity\\Status::STATUS_RETURNED') }} && {% if is_granted('ROLE_SUPER_ADMIN') %}1{% else %}0{% endif %}) {*/
/*                                 $('.repair-cost-approved-toggle').removeClass('hidden');*/
/*                             } else {*/
/*                                 $('.repair-cost-approved-toggle').addClass('hidden');*/
/* */
/*                             }*/
/* */
/*                             if (currentRepairStatusId == {{ constant('AppBundle\\Entity\\Status::STATUS_RETURNED') }} && {% if not is_granted('ROLE_SUPER_ADMIN') %}1{% else %}0{% endif %}) {*/
/*                                 $('#pricingForm').addClass('hidden');*/
/*                                 $('.pricing-edit-button').html("").html("<span class='glyphicon glyphicon-edit text-muted'></span>");*/
/*                             } else {*/
/*                                 $('#pricingForm').removeClass('hidden');*/
/*                             }*/
/* */
/*                             if (currentRepairStatusId == {{ constant('AppBundle\\Entity\\Status::STATUS_RETURNED') }}) {*/
/*                                 $('.payment-label-text').text('Zapłacono');*/
/*                             } else {*/
/*                                 $('.payment-label-text').text('Kwota do zapłaty');*/
/*                             }*/
/* */
/*                         }*/
/*                         else {*/
/*                             swal("Wystąpił błąd.", null, "error");*/
/*                         }*/
/*                     }*/
/*                 });*/
/*             });*/
/* */
/* */
/*             {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*             $('#editRepairStartLocalizationForm').submit(function (e) {*/
/* */
/*                 e.preventDefault();*/
/* */
/*                 $('#repairChangeLocalizationModal').modal('hide');*/
/* */
/*                 var url = '{{ path('api_update_repair_start_localizationedit_repair_start_localization',{'repair':repair.id, 'localization': 12345}) }}';*/
/*                 var localization = $('#repairStartLocalizationSelect').val();*/
/*                 url = url.replace('12345', localization);*/
/* */
/*                 $.ajax({*/
/*                     type: 'PATCH',*/
/*                     url: url,*/
/*                     success: function (data, status, xhr) {*/
/*                         if (xhr.status == 204) {*/
/*                             var localizationName = $('#repairStartLocalizationSelect option:selected').text();*/
/*                             $('.repair-start-localization').text(localizationName);*/
/*                             swal("Lokalizacja została zmieniona", null, "success");*/
/*                         }*/
/*                     },*/
/*                     error: function () {*/
/*                         swal("Wystąpiły błędy", null, "error")*/
/*                     }*/
/*                 });*/
/*             });*/
/*             {% endif %}*/
/* */
/* */
/*             $('.modal-status-canceled').click(function () {*/
/*                 $('.change-status').val(currentRepairStatusId);*/
/*             });*/
/* */
/*             $(".change-repairer").change(function () {*/
/*                 var repairerName = $('.change-repairer option:selected').text();*/
/*                 $('.modal-new-repairer').text(repairerName);*/
/* */
/*                 $('#modalChangeRepairer').modal('show');*/
/* */
/*             });*/
/* */
/*             $('.modal-repairer-canceled').click(function () {*/
/*                 $('.change-repairer').val(repairerId);*/
/*             });*/
/* */
/*             $(function () {*/
/*                 $('[data-toggle="popover"]').popover()*/
/*             });*/
/* */
/*             $('.modal-repairer-submit').click(function () {*/
/* */
/*                 var message = $('.modal-private-message').val();*/
/*                 var url = '{{ path('api_change_repairerchange-repairer',{'repair':repair.id, 'newRepairer': "plain_new_repairer_id"}) }}';*/
/*                 url = url.replace("plain_new_repairer_id", $('.change-repairer option:selected').val());*/
/* */
/*                 $.ajax({*/
/*                     type: 'PATCH',*/
/*                     url: url,*/
/*                     data: {*/
/*                         message: message*/
/*                     },*/
/*                     success: function (data, status, xhr) {*/
/*                         if (xhr.status == 204) {*/
/*                             swal("Naprawiający został zmieniony.", null, "success");*/
/*                         }*/
/*                     },*/
/*                     error: function () {*/
/*                         swal("Wystąpiły błędy", null, "error")*/
/*                     }*/
/*                 });*/
/*             });*/
/* //-----------------------------APPROVED*/
/*             {% if repair.approved %}*/
/*             $('#approved-toggle').bootstrapToggle('on');*/
/*             isApproved = true;*/
/*             {% else %}*/
/*             $('#approved-toggle').bootstrapToggle('off');*/
/*             isApproved = false;*/
/*             {% endif %}*/
/* */
/*             $('.toggle-group').click(function () {*/
/*                 if ($(this).parent().hasClass('btn-danger')) {*/
/*                     $.ajax({*/
/*                         type: 'PATCH',*/
/*                         url: '{{ path('api_set_repair_cost_approvedrepair_approved',{'id':repair.id}) }}',*/
/*                         success: function (data, status, xhr) {*/
/*                             if (xhr.status == 204) {*/
/*                                 swal("Wycena została zatwierdzona", null, "success");*/
/*                             }*/
/*                         },*/
/*                         error: function () {*/
/*                             $('#approved-toggle').bootstrapToggle('off');*/
/*                             swal("Wystąpiły błędy", null, "error")*/
/*                         }*/
/*                     });*/
/*                 }*/
/* */
/*                 if ($(this).parent().hasClass('btn-success')) {*/
/*                     $.ajax({*/
/*                         type: 'PATCH',*/
/*                         url: '{{ path('api_set_repair_cost_not_approvedrepair_not_approved',{'id':repair.id}) }}',*/
/*                         success: function (data, status, xhr) {*/
/*                             if (xhr.status == 204) {*/
/*                                 swal("Wycena została anulowana", null, "error");*/
/*                             }*/
/*                         },*/
/*                         error: function () {*/
/*                             $('#approved-toggle').bootstrapToggle('on');*/
/*                             swal("Wystąpiły błędy", null, "error")*/
/*                         }*/
/*                     });*/
/*                 }*/
/*             });*/
/* //-----------------------------APPROVED*/
/*         });*/
/* */
/*         $('#editRepairPayment').submit(function (e) {*/
/*             e.preventDefault();*/
/* */
/*             $('#editRepairPaymentModal').modal('hide');*/
/*             $.ajax({*/
/*                 type: 'PATCH',*/
/*                 data: $('#editRepairPayment').serialize(),*/
/*                 url: '{{ path('api_edit_repair_payment_methodedit_repair_payment_method',{'id':repair.id}) }}',*/
/*                 success: function (data, status, xhr) {*/
/*                     if (xhr.status == 204) {*/
/* */
/*                         var selectedMethod = $('#paymentMethodSelect option:selected').text();*/
/*                         $('.repair-payment-method').text(selectedMethod);*/
/* */
/*                         swal("Metoda płatności została zmieniona", null, "success");*/
/*                     }*/
/*                 },*/
/*                 error: function () {*/
/*                     swal("Wystąpiły błędy", null, "error")*/
/*                 }*/
/*             });*/
/*         });*/
/* */
/*         $('.repair-pricing-acceptation-request').click(function () {*/
/* */
/*             $(this).attr('disabled', true);*/
/* */
/*             var url = '{{ path('api_add_worker_total_repair_pricing_requestadd_total_repair_pricing_request', {'id':12345}) }}';*/
/*             url = url.replace(12345, {{ repair.id }});*/
/* */
/*             $.ajax({*/
/*                 type: 'POST',*/
/*                 url: url,*/
/*                 success: function (data, status, xhr) {*/
/*                     if (xhr.status == 204) {*/
/*                         swal("Wycena naprawy została przesłana do klienta", null, "success");*/
/*                         $('select.change-status').val(2);*/
/*                     }*/
/*                 },*/
/*                 error: function () {*/
/*                     swal("Wystąpiły błędy", null, "error")*/
/*                 }*/
/*             });*/
/*         });*/
/* */
/*         $(".money-amount").inputmask({*/
/*             alias: 'numeric',*/
/*             digits: 2,*/
/*             digitsOptional: false,*/
/*             rightAlign: false*/
/*         });*/
/* */
/*         $('.user-invoice-data').click(function () {*/
/*             $('.user-invoice-data-body').toggleClass('hidden');*/
/*         });*/
/* */
/* */
/*         function showWorkerPricingAcceptationModal(id) {*/
/* */
/*             var totalPriceText = $('#repair-total-price-' + id).text();*/
/*             var descriptionsHtml = $('#repair-pricing-descriptions-' + id).html();*/
/* */
/*             $('#workerRepairPricingAcceptationSelect').attr('data-id', id);*/
/* */
/*             $('#repair-total-price-modal').text(totalPriceText);*/
/*             $('#repair-pricing-descriptions-modal').html(descriptionsHtml);*/
/* */
/*             $('#workerRepairPricingAcceptationModal').modal('show');*/
/*         }*/
/* */
/*         $('#workerRepairPricingAcceptationSubmit').click(function () {*/
/* */
/*             var pricingSelect = $('#workerRepairPricingAcceptationSelect');*/
/* */
/*             var pricingId = pricingSelect.attr('data-id');*/
/*             var acceptationMethod = pricingSelect.val();*/
/*             var acceptationMethodName = pricingSelect.text();*/
/* */
/*             var url = '{{ path('api_set_total_repair_pricing_responsetotal_repair_pricing_response', {'pricing':111111, 'responseMethod': 222222, 'pricingStatus': 333333}) }}';*/
/*             url = url.replace(111111, pricingId).replace(222222, acceptationMethod).replace(333333, '{{ constant('AppBundle\\Entity\\TotalRepairPricingStatus::TYPE_ACCEPTED') }}');*/
/* */
/*             $.ajax({*/
/*                 type: 'PATCH',*/
/*                 url: url,*/
/*                 success: function (data, status, xhr) {*/
/*                     if (xhr.status == 204) {*/
/* */
/*                         $('#workerRepairPricingAcceptationModal').modal('hide');*/
/* */
/*                         swal("Wycena naprawy została zaakceptowana", null, "success");*/
/* */
/*                         $('select.change-status').val(8);*/
/*                         $('#confirmation-button-' + pricingId).addClass('hidden');*/
/*                         $('#pricing-glyphicon-' + pricingId).removeClass('glyphicon-remove text-danger').addClass('glyphicon-ok text-success');*/
/*                         $('.repair-pricing-acceptation-request').addClass('hidden');*/
/*                         $('#confirmation-data-' + pricingId).html(*/
/*                                 'Data akceptacji: ' + moment().format("DD.MM.YYYY HH:mm:ss") +*/
/*                                 '<br>' +*/
/*                                 'Sposób akceptacji: ' + acceptationMethodName);*/
/*                     }*/
/*                 },*/
/*                 error: function () {*/
/*                     swal("Wystąpiły błędy", null, "error")*/
/*                 }*/
/*             });*/
/*         });*/
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
