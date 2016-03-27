<?php

/* AppBundle:Admin:adminManagement.html.twig */
class __TwigTemplate_fdd02658a4d17642aace0bd50c086fd11ef2986570e14d1856b18cd010508c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Admin:adminManagement.html.twig", 1);
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
        $__internal_982af31319a84a3477fb65c0a014b765a96ce8590362810c49fe328bfcffcacd = $this->env->getExtension("native_profiler");
        $__internal_982af31319a84a3477fb65c0a014b765a96ce8590362810c49fe328bfcffcacd->enter($__internal_982af31319a84a3477fb65c0a014b765a96ce8590362810c49fe328bfcffcacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:adminManagement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_982af31319a84a3477fb65c0a014b765a96ce8590362810c49fe328bfcffcacd->leave($__internal_982af31319a84a3477fb65c0a014b765a96ce8590362810c49fe328bfcffcacd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d31c8da6fe884a4c1f93073bcd3f298fb44dabf13526604f41a94d58cec59bb7 = $this->env->getExtension("native_profiler");
        $__internal_d31c8da6fe884a4c1f93073bcd3f298fb44dabf13526604f41a94d58cec59bb7->enter($__internal_d31c8da6fe884a4c1f93073bcd3f298fb44dabf13526604f41a94d58cec59bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    | Zarządzanie
";
        
        $__internal_d31c8da6fe884a4c1f93073bcd3f298fb44dabf13526604f41a94d58cec59bb7->leave($__internal_d31c8da6fe884a4c1f93073bcd3f298fb44dabf13526604f41a94d58cec59bb7_prof);

    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_900db8044c90ab62b6585cdd290e3d9bce5f3b33f8cb4b0fcb3a4b136872fc42 = $this->env->getExtension("native_profiler");
        $__internal_900db8044c90ab62b6585cdd290e3d9bce5f3b33f8cb4b0fcb3a4b136872fc42->enter($__internal_900db8044c90ab62b6585cdd290e3d9bce5f3b33f8cb4b0fcb3a4b136872fc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("AppBundle::alerts.html.twig", "AppBundle:Admin:adminManagement.html.twig", 9)->display($context);
        // line 10
        echo "
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a data-toggle=\"tab\" href=\"#home\">Dane firmy</a></li>
        <li><a data-toggle=\"tab\" href=\"#menu1\">Regulamin</a></li>
        <li><a data-toggle=\"tab\" href=\"#menu2\">Oddziały</a></li>
        <li><a data-toggle=\"tab\" href=\"#menu4\">Serwis</a></li>
        <li><a data-toggle=\"tab\" href=\"#menu5\">Metody płatności</a></li>
        <li><a data-toggle=\"tab\" href=\"#menu6\">Formularz przyjęcia</a></li>
    </ul>
    <div class=\"tab-content\">
        <div id=\"home\" style=\"padding-top: 10px;\" class=\"tab-pane fade in active\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCompany"]) ? $context["formCompany"] : $this->getContext($context, "formCompany")), 'form_start');
        echo "
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompany"]) ? $context["formCompany"] : $this->getContext($context, "formCompany")), "name", array()), 'row', array("label" => "company.name"));
        echo "
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompany"]) ? $context["formCompany"] : $this->getContext($context, "formCompany")), "street", array()), 'row', array("label" => "company.street"));
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompany"]) ? $context["formCompany"] : $this->getContext($context, "formCompany")), "city", array()), 'row', array("label" => "company.city"));
        echo "
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompany"]) ? $context["formCompany"] : $this->getContext($context, "formCompany")), "post_code", array()), 'row', array("label" => "company.post_code"));
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompany"]) ? $context["formCompany"] : $this->getContext($context, "formCompany")), "NIP", array()), 'row', array("label" => "company.nip"));
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompany"]) ? $context["formCompany"] : $this->getContext($context, "formCompany")), "main_site", array()), 'row', array("label" => "company.main_site"));
        echo "
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompany"]) ? $context["formCompany"] : $this->getContext($context, "formCompany")), "email_subject_begin", array()), 'row', array("label" => "company.mailing_subject_begin"));
        echo "
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompany"]) ? $context["formCompany"] : $this->getContext($context, "formCompany")), "logoFile", array()), 'row', array("label" => "company.logo"));
        echo "
                    <hr>
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompany"]) ? $context["formCompany"] : $this->getContext($context, "formCompany")), "smallLogoFile", array()), 'row', array("label" => "company.small_logo"));
        echo "
                    <input type=\"submit\" class=\"btn btn-sm btn-success pull-right\" value=\"Zatwierdź zmiany\">
                    ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formCompany"]) ? $context["formCompany"] : $this->getContext($context, "formCompany")), 'form_end');
        echo "
                </div>
            </div>
        </div>
        <div id=\"menu1\" class=\"tab-pane fade\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"panel panel-default\" style=\"margin-top: 15px;\">
                        <div class=\"panel-heading\">
                            Regulamin
                            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("admin_management_regulatory_paragraph_add");
        echo "\" title=\"Dodaj\"
                               class=\"btn btn-xs btn-success pull-right\">
                                <span class=\"glyphicon glyphicon-plus\"></span> Dodaj punkt regulaminu
                            </a>
                        </div>
                        <ul class=\"list-group\">
                            ";
        // line 51
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
            // line 52
            echo "                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"pull-right\">
                                            <a style=\"margin-right: 10px;\"
                                               href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_management_regulatory_paragraph_edit", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
            echo "\"
                                               data-toggle=\"tooltip\" data-placement=\"right\" title=\"Edytuj&nbsp;wpis\">
                                                <span class=\"glyphicon glyphicon-pencil\"
                                                      style=\"font-size: 20px;\"></span>
                                            </a>
                                        </div>
                                        <div style=\"padding-left: 5px;\">
                                            <strong>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo ". </strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "paragraph", array()), "html", null, true);
            echo "
                                        </div>
                                    </div>
                                </li>
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
        // line 68
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"menu2\" style=\"padding-top: 10px;\" class=\"tab-pane fade\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("admin_management_localization_add");
        echo "\" role=\"button\"
                       class=\"btn btn-sm btn-success\"
                       style=\"margin-bottom: 10px;\">
                        <span class=\"glyphicon glyphicon-plus\"></span>
                        Dodaj oddział
                    </a>
                </div>
                ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localizations"]) ? $context["localizations"] : $this->getContext($context, "localizations")));
        foreach ($context['_seq'] as $context["_key"] => $context["localization"]) {
            // line 84
            echo "                    <div class=\"col-md-6\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                Nazwa: ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["localization"], "name", array()), "html", null, true);
            echo "
                                <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_pokwitowanie-example_print", array("id" => $this->getAttribute($context["localization"], "id", array()))), "html", null, true);
            echo "\"
                                   title=\"Kliknij aby zobaczyć.\">
                                    <button type=\"button\" class=\"btn btn-info btn-xs pull-right\">
                                        Pokwitowanie
                                    </button>
                                </a>
                                <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_management_localization_edit", array("id" => $this->getAttribute($context["localization"], "id", array()))), "html", null, true);
            echo "\"
                                   title=\"Kliknij aby zmienić.\">
                                    <button type=\"button\" class=\"btn btn-primary btn-xs pull-right\"
                                            style=\"margin-right: 10px;\">Edycja
                                    </button>
                                </a>
                            </div>
                            <ul class=\"list-group\">
                                <li class=\"list-group-item\">
                                    <strong>Miasto: </strong>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["localization"], "city", array()), "html", null, true);
            echo "
                                </li>
                                <li class=\"list-group-item\">
                                    <strong>Ulica: </strong>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["localization"], "street", array()), "html", null, true);
            echo "
                                </li>
                                <li class=\"list-group-item\">
                                    <strong>Kod pocztowy: </strong>";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["localization"], "postCode", array()), "html", null, true);
            echo "
                                </li>
                                <li class=\"list-group-item\">
                                    <strong>Telefon główny: </strong>
                                    ";
            // line 113
            if ( !(null === $this->getAttribute($context["localization"], "tel1", array()))) {
                // line 114
                echo "                                        ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array($this->getAttribute($context["localization"], "tel1", array()))), "html", null, true);
                echo "
                                    ";
            } else {
                // line 116
                echo "                                        -
                                    ";
            }
            // line 118
            echo "                                </li>
                                <li class=\"list-group-item\">
                                    <strong>Telefon dodatkowy: </strong>
                                    ";
            // line 121
            if ( !(null === $this->getAttribute($context["localization"], "tel2", array()))) {
                // line 122
                echo "                                        ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array($this->getAttribute($context["localization"], "tel2", array()))), "html", null, true);
                echo "
                                    ";
            } else {
                // line 124
                echo "                                        -
                                    ";
            }
            // line 126
            echo "                                </li>
                                <li class=\"list-group-item\">
                                    <strong>Telefon pomocniczy: </strong>
                                    ";
            // line 129
            if ( !(null === $this->getAttribute($context["localization"], "tel3", array()))) {
                // line 130
                echo "                                        ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array($this->getAttribute($context["localization"], "tel3", array()))), "html", null, true);
                echo "
                                    ";
            } else {
                // line 132
                echo "                                        -
                                    ";
            }
            // line 134
            echo "                                </li>
                                <li class=\"list-group-item\">
                                    <strong>E-mail główny: </strong>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["localization"], "emailFirst", array()), "html", null, true);
            echo "
                                </li>
                                <li class=\"list-group-item\">
                                    <strong>E-mail dodatkowy: </strong>
                                    ";
            // line 140
            if ( !(null === $this->getAttribute($context["localization"], "emailSecond", array()))) {
                // line 141
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["localization"], "emailSecond", array()), "html", null, true);
                echo "
                                    ";
            } else {
                // line 143
                echo "                                        -
                                    ";
            }
            // line 145
            echo "                                </li>
                                <li class=\"list-group-item\">
                                    <strong>Godziny otwarcia (pn-pt): </strong>";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["localization"], "monFriOpen", array()), "html", null, true);
            echo "
                                </li>
                                <li class=\"list-group-item\">
                                    <strong>Godziny otwarcia (sob): </strong>
                                    ";
            // line 151
            if ( !(null === $this->getAttribute($context["localization"], "satOpen", array()))) {
                // line 152
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["localization"], "satOpen", array()), "html", null, true);
                echo "
                                    ";
            } else {
                // line 154
                echo "                                        -
                                    ";
            }
            // line 156
            echo "                                </li>
                                <li class=\"list-group-item\">
                                    <strong>Pracownicy: </strong>
                                    <ul class=\"list-inline\">
                                        ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["localization_service"]) ? $context["localization_service"] : $this->getContext($context, "localization_service")), "employeesByLocalizationId", array(0 => $this->getAttribute($context["localization"], "id", array())), "method"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
                // line 161
                echo "                                            <li class=\"list-group-item-text\">
                                                <a href=\"";
                // line 162
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_management_edit_repairer", array("id" => $this->getAttribute($context["employee"], "id", array()))), "html", null, true);
                echo "\">
                                                    ";
                // line 163
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["employee"], "surname", array()), "html", null, true);
                echo "
                                                </a>
                                            </li>
                                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 167
                echo "                                            -
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "                                    </ul>
                                    <a href=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_management_add_repairer", array("id" => $this->getAttribute($context["localization"], "id", array()))), "html", null, true);
            echo "\"
                                       role=\"button\" class=\"btn btn-xs btn-default\"
                                       style=\"margin-top: 15px;\">
                                        <span class=\"glyphicon glyphicon-plus\"></span>
                                        Dodaj pracownika
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localization'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "            </div>
        </div>
        <div id=\"menu4\" class=\"tab-pane fade\">
            <div class=\"row\" style=\"margin-top: 10px\">
                <div class=\"col-md-12\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">Typy kosztów związane z serwisem</div>
                                <form class=\"form-inline\" id=\"add-repair-cost-kind\">
                                    <table class=\"table\" style=\"margin-bottom: 0;\" id=\"repairCostKind\">
                                        <thead>
                                        <tr>
                                            <th>
                                                Nazwa
                                            </th>
                                            <th>
                                                Typ
                                            </th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["repairCostKinds"]) ? $context["repairCostKinds"] : $this->getContext($context, "repairCostKinds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["costKind"]) {
            // line 205
            echo "                                            <tr id=\"table-repair-cost-kind-row-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["costKind"], "id", array()), "html", null, true);
            echo "\">
                                                <td>
                                                    ";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute($context["costKind"], "name", array()), "html", null, true);
            echo "
                                                </td>
                                                <td>
                                                    ";
            // line 210
            if (($this->getAttribute($context["costKind"], "type", array()) == twig_constant("AppBundle\\Entity\\RepairCostKind::TYPE_PLUS"))) {
                // line 211
                echo "                                                        Cena dla klienta.
                                                    ";
            }
            // line 213
            echo "                                                    ";
            if (($this->getAttribute($context["costKind"], "type", array()) == twig_constant("AppBundle\\Entity\\RepairCostKind::TYPE_MINUS"))) {
                // line 214
                echo "                                                        Koszt ponoszony przez serwis.
                                                    ";
            }
            // line 216
            echo "
                                                </td>
                                                <td>
                                                    <span onclick=\"removeRepairCostKind(";
            // line 219
            echo twig_escape_filter($this->env, $this->getAttribute($context["costKind"], "id", array()), "html", null, true);
            echo ");\"
                                                          class=\"glyphicon glyphicon-trash pull-right delete-repair-cost-kind text-danger\"></span>
                                                </td>
                                            </tr>
                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 224
            echo "                                            <tr id=\"emptyRepairCostKinds\">
                                                <td colspan=\"3\">
                                                    Brak zdefiniowanych kosztów.
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['costKind'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        echo "                                        <tr>
                                            <td>
                                                <label for=\"add-repair-cost-kind-name\" class=\"sr-only\">Nowy
                                                    koszt:</label>
                                                <input class=\"input-sm form-control\" type=\"text\"
                                                       id=\"add-repair-cost-kind-name\"
                                                       required placeholder=\"Nazwa\" style=\"width: 100%\">
                                            </td>
                                            <td>
                                                <label for=\"add-repair-cost-kind-type\" class=\"sr-only\"></label>
                                                <select id=\"add-repair-cost-kind-type\" class=\"form-control input-sm\"
                                                        style=\"width: 100%\">
                                                    <option value=\"";
        // line 242
        echo twig_escape_filter($this->env, twig_constant("AppBundle\\Entity\\RepairCostKind::TYPE_PLUS"), "html", null, true);
        echo "\">
                                                        Cena dla klienta
                                                    </option>
                                                    <option value=\"";
        // line 245
        echo twig_escape_filter($this->env, twig_constant("AppBundle\\Entity\\RepairCostKind::TYPE_MINUS"), "html", null, true);
        echo "\">
                                                        Koszt ponoszony przez serwis
                                                    </option>
                                                </select>
                                            </td>
                                            <td>
                                                <button class=\"btn btn-sm btn-success pull-right\"
                                                        id=\"add-repair-cost-kind-submit\">
                                                    <span class=\"glyphicon glyphicon-plus\">Dodaj</span></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"menu5\" class=\"tab-pane fade\">
            <div class=\"row\" style=\"margin-top: 10px\">
                <div class=\"col-md-12\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">Metody płatności</div>
                                <form class=\"form-inline\" id=\"add-payment-method-form\">
                                    <table class=\"table\" style=\"margin-bottom: 0;\" id=\"paymentMethodsTable\">
                                        <thead>
                                        <tr>
                                            <th>
                                                Nazwa
                                            </th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paymentMethods"]) ? $context["paymentMethods"] : $this->getContext($context, "paymentMethods")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 284
            echo "                                            <tr id=\"table-payment-method-row-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "id", array()), "html", null, true);
            echo "\">
                                                <td>
                                                    ";
            // line 286
            echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "name", array()), "html", null, true);
            echo "
                                                </td>
                                                <td>
                                                    <span onclick=\"removePaymentMethod(";
            // line 289
            echo twig_escape_filter($this->env, $this->getAttribute($context["method"], "id", array()), "html", null, true);
            echo ")\"
                                                          class=\"glyphicon glyphicon-trash pull-right delete-payment-method text-danger\"></span>
                                                </td>
                                            </tr>
                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 294
            echo "                                            <tr id=\"emptyPaymentMethods\">
                                                <td colspan=\"2\">
                                                    Brak zdefiniowanych metod płatności.
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 300
        echo "                                        <tr>
                                            <td>
                                                <label for=\"add-payment-method-input\" class=\"sr-only\">Nowy typ:</label>
                                                <input class=\"input-sm form-control\" type=\"text\"
                                                       id=\"add-payment-method-input\"
                                                       required placeholder=\"Nazwa\" style=\"width: 100%\">
                                            </td>
                                            <td>
                                                <button class=\"btn btn-sm btn-success pull-right\"
                                                        id=\"add-payment-method-submit\">
                                                    <span class=\"glyphicon glyphicon-plus \">Dodaj</span>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"menu6\" class=\"tab-pane fade\">
            <div class=\"row\" style=\"margin-top: 10px\">
                <div class=\"col-md-12\">
                    <a href=\"";
        // line 326
        echo $this->env->getExtension('routing')->getPath("admin_management_device_type_add");
        echo "\"
                       class=\"btn btn-sm btn-success\"
                       style=\"margin-bottom: 10px;\">
                        <span class=\"glyphicon glyphicon-plus\"></span>
                        Dodaj typ
                    </a>
                </div>
                ";
        // line 333
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch((isset($context["deviceTypes"]) ? $context["deviceTypes"] : $this->getContext($context, "deviceTypes")), 3));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 334
            echo "                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            ";
            // line 336
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["column"]);
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 337
                echo "                                <div class=\"col-md-4\" id=\"deviceType";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
                echo "\">
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\">
                                            <span class=\"panel-title\">Typ: <span
                                                        id=\"deviceTypeName";
                // line 341
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "name", array()), "html", null, true);
                echo "</span></span>
                                            <span onclick=\"customFields.removeDeviceTypeModal(";
                // line 342
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
                echo ")\"
                                                  class=\"glyphicon glyphicon-trash text-danger pull-right\"
                                                  style=\"margin-top: 3px;\"></span>
                                        </div>
                                        <div class=\"panel-body\" style=\"padding-top: 5px\">
                                            <h4>Dodatkowe pola</h4>
                                            ";
                // line 348
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entry"], "customFieldsTemplates", array()));
                $context['_iterated'] = false;
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    if ($this->getAttribute($context["option"], "isVisible", array(), "method")) {
                        // line 349
                        echo "                                                <div class=\"list-group custom-field\"
                                                     id=\"deviceTypeTemplateField";
                        // line 350
                        echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "id", array()), "html", null, true);
                        echo "\">
                                                    <div class=\"list-group-item\">
                                                        <span onclick=\"customFields.removeDeviceTypeTemplateModal(";
                        // line 352
                        echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "id", array()), "html", null, true);
                        echo ")\"
                                                              class=\"glyphicon glyphicon-trash text-danger pull-right hidden\"></span>
                                                        <h4 class=\"list-group-item-heading\"
                                                            data-custom-field-index=\"";
                        // line 355
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                        echo "\">#";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                        echo "
                                                            -
                                                            <span id=\"deviceTypeTemplateName";
                        // line 357
                        echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "id", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
                        echo "</span>
                                                        </h4>
                                                        <p class=\"list-group-item-text\">
                                                            <strong>Czy wymagane: </strong>
                                                            ";
                        // line 361
                        if ($this->getAttribute($context["option"], "isRequired", array())) {
                            echo "Tak";
                        } else {
                            echo "Nie";
                        }
                        // line 362
                        echo "                                                            <br>
                                                            ";
                        // line 363
                        if ( !twig_test_empty($this->getAttribute($context["option"], "customFieldTemplateValues", array()))) {
                            // line 364
                            echo "                                                                <strong>Opcjonalne wartości: </strong><br>
                                                                ";
                            // line 365
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "customFieldTemplateValues", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                                // line 366
                                echo "                                                                    - ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["value"], "name", array()), "html", null, true);
                                echo "<br>
                                                                ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 368
                            echo "                                                            ";
                        }
                        // line 369
                        echo "                                                        </p>
                                                    </div>
                                                </div>
                                            ";
                        $context['_iterated'] = true;
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                    }
                }
                if (!$context['_iterated']) {
                    // line 373
                    echo "                                                <span id=\"noAdditionalFields\">Formularz nie zawiera dodatkowych pól</span>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 375
                echo "                                            <button type=\"button\" class=\"btn btn-sm btn-success pull-right\"
                                                    data-toggle=\"modal\" data-target=\"#addCustomFieldModal\"
                                                    onclick=\"customFields.setTypeId(";
                // line 377
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
                echo ")\">
                                                <span class=\"glyphicon glyphicon-plus\"></span>
                                                Dodaj dodatkowe pole
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 385
            echo "                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 388
        echo "            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"addCustomFieldModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"addCustomFieldModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"addCustomFieldModalLabel\">Dodatkowe pole</h4>
                </div>
                <form id=\"addCustomFieldForm\">
                    <div id=\"addCustomFieldContainer\" class=\"modal-body\">
                        <fieldset id=\"addCustomFieldFieldset\">
                            <div class=\"form-group\">
                                <label for=\"customFieldName\" class=\"required\">Nazwa pola</label>
                                <input type=\"text\" class=\"form-control\" required id=\"customFieldName\"
                                       name=\"customFieldName\">
                            </div>
                            <div class=\"form-group\">
                                <div class=\"checkbox\">
                                    <label for=\"customFieldRequired\">
                                        <input type=\"checkbox\" id=\"customFieldRequired\" name=\"customFieldRequired\"
                                               value=\"1\">
                                        Wymagane?
                                    </label>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"customFieldTypeSelect\" class=\"required\">Typ pola</label>
                                <select class=\"form-control\" required id=\"customFieldTypeSelect\"
                                        name=\"customFieldTypeSelect\">
                                    <option value=\"1\">Pole tekstowe</option>
                                    <option value=\"2\">Pole wyboru</option>
                                </select>
                            </div>
                            <hr>
                            <div class=\"form-options\"></div>
                        </fieldset>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-sm btn-default\" data-dismiss=\"modal\">Anuluj</button>
                        <input type=\"submit\" class=\"btn btn-sm btn-success pull-right\" name=\"addCustomFieldSubmit\"
                               id=\"addCustomFieldSubmit\"
                               value=\"Zatwierdź\"/>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"removeDeviceTypeModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"removeDeviceTypeModalLabel\">
        <div class=\"modal-dialog modal-sm\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"removeDeviceTypeModalLabel\">
                        Typ:
                        <span id=\"deviceTypeNameToRemove\"></span>
                    </h4>
                </div>
                <div class=\"modal-body\">
                    Czy na pewno chcesz usunąć?
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-sm btn-default\" data-dismiss=\"modal\">Anuluj</button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\" id=\"removeDeviceTypeButton\">Usuń</button>
                </div>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"removeDeviceTypeTemplateModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"removeDeviceTypeTemplateModalLabel\">
        <div class=\"modal-dialog modal-sm\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"removeDeviceTypeTemplateModalLabel\">
                        <span id=\"deviceTypeTemplateNameToRemove\"></span>
                    </h4>
                </div>
                <div class=\"modal-body\">
                    Czy na pewno chcesz usunąć?
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-sm btn-default\" data-dismiss=\"modal\">Anuluj</button>
                    <button type=\"button\" class=\"btn btn-sm btn-danger\" id=\"removeDeviceTypeTemplateButton\">Usuń
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src=\"http://ajax.microsoft.com/ajax/jquery.templates/beta1/jquery.tmpl.js\"></script>
    <script>
        var customFields = {
            element: \$('#addCustomFieldContainer'),
            optionsCounter: 0,
            removeAllOptions: function () {
                customFields.optionsCounter = 0;
                \$('#addCustomFieldFieldset').find('.form-options').html('');
            },
            addBaseOption: function () {
                \$('#addCustomFieldFieldset').find('.form-options').html(\$.tmpl(customFields.templates.baseOption));
            },
            addOption: function () {
                customFields.optionsCounter++;
                var options = \$('#addCustomFieldFieldset').find('.form-options');
                \$.tmpl(customFields.templates.option, {index: customFields.optionsCounter}).insertAfter(options.find('.form-group:last'));
            },
            removeOption: function (index) {
                \$('#customFieldOption' + index).remove();
            },
            setTypeId: function (index) {
                \$('#addCustomFieldForm').data('typeId', index);
            },
            addCreatedField: function (id, data) {
                var fieldset = \$('#deviceType' + id);
                var sequence = fieldset.find('.custom-field').length + 1;
                var options = fieldset.find('.custom-field:last');
                \$.tmpl(customFields.templates.createdField, {
                    data: data,
                    sequence: sequence
                }).insertAfter(options);
            },
            clearModalForm: function () {
                \$('#customFieldName').val('');
                \$('#customFieldRequired').removeAttr('checked');
                \$('#customFieldTypeSelect').prop('selectedIndex', 0);
                \$('.form-options').html('');
            },
            removeDeviceTypeModal: function (index) {
                var deviceTypeName = \$('#deviceTypeName' + index).text();
                \$('#deviceTypeNameToRemove').text(deviceTypeName);
                \$('#removeDeviceTypeButton').attr('onclick', 'customFields.removeDeviceType(' + index + ')');
                \$('#removeDeviceTypeModal').modal('show');
            },
            removeDeviceType: function (index) {
                var url = '";
        // line 534
        echo $this->env->getExtension('routing')->getPath("api_remove_device_typeremove_device_type", array("deviceType" => "11111111"));
        echo "';
                url = url.replace('11111111', index);

                \$.ajax({
                    type: 'DELETE',
                    url: url,
                    success: function () {
                        swal(\"Typ został usunięty\", null, \"warning\");
                        \$('#removeDeviceTypeModal').modal('hide');
                        \$('#deviceType' + index).remove();
                    },
                    error: function () {
                        swal(\"Wystąpiły błędy\", 'Typ nie został usunięty', \"error\")
                    }
                });
            },
            removeDeviceTypeTemplateModal: function (index) {
                var deviceTypeTemplateName = \$('#deviceTypeTemplateName' + index).text();
                \$('#deviceTypeTemplateNameToRemove').text(deviceTypeTemplateName);
                \$('#removeDeviceTypeTemplateButton').attr('onclick', 'customFields.removeDeviceTypeTemplate(' + index + ')');
                \$('#removeDeviceTypeTemplateModal').modal('show');
            },
            removeDeviceTypeTemplate: function (index) {
                var url = '";
        // line 557
        echo $this->env->getExtension('routing')->getPath("api_remove_device_type_templateremove_custom_field_template", array("customFieldTemplate" => "11111111"));
        echo "';
                url = url.replace('11111111', index);

                console.log(index);

                \$.ajax({
                    type: 'DELETE',
                    url: url,
                    success: function () {
                        swal(\"Pole zostało usunięte\", null, \"warning\");
                        \$('#removeDeviceTypeTemplateModal').modal('hide');
                        \$('#deviceTypeTemplateField' + index).remove();
                    },
                    error: function () {
                        swal(\"Wystąpiły błędy\", 'Pole nie zostało usunięte', \"error\")
                    }
                });
            },
            templates: {
                baseOption: '<div class=\"form-group\">' +
                '<label class=\"required\">Wartość do wyboru</label>' +
                '<input type=\"text\" class=\"form-control\" required placeholder=\"Wartość do wyboru\"' +
                'name=\"customFieldOptions[]\">' +
                '</div>' +
                '<button type=\"button\" class=\"btn btn-block btn-success\"' +
                'onclick=\"customFields.addOption();\"><span' +
                'class=\"glyphicon glyphicon-plus\"></span> Dodaj wartość' +
                '</button>' +
                '<hr>',
                option: '<div class=\"form-group\" id=\"customFieldOption\${index}\" style=\"margin-top: 20px;\">' +
                '<label class=\"required\">Wartość do wyboru</label>' +
                '<div class=\"row\">' +
                '<div class=\"col-md-10\">' +
                '<input type=\"text\" class=\"form-control\" required placeholder=\"Wartość do wyboru\" name=\"customFieldOptions[]\">' +
                '</div>' +
                '<div class=\"col-md-2 text-right\">' +
                '<button type=\"button\" class=\"btn btn-sm btn-danger\" onclick=\"customFields.removeOption(\${index});\"><span class=\"glyphicon glyphicon-trash\"></span> Usuń</button>' +
                '</div>' +
                '</div>' +
                '</div>',
                createdField: '<div class=\"list-group custom-field\">' +
                '<a href=\"#\" class=\"list-group-item\"' +
                'id=\"deviceTypeTemplateField\${data.id}\">' +
                '<span onclick=\"customFields.removeDeviceTypeTemplateModal(\${data.id})\"' +
                'class=\"glyphicon glyphicon-trash text-danger pull-right hidden\"></span>' +
                '<h4 class=\"list-group-item-heading\"' +
                'data-custom-field-index=\"\${data.index}\">#\${sequence} - ' +
                '\${data.name}</h4>' +
                '<p class=\"list-group-item-text\">' +
                '<strong>Czy wymagane: </strong>' +
                '\\{\\{if data.is_required\\}\\}Tak\\{\\{else\\}\\}Nie\\{\\{/if\\}\\}' +
                '<br>' +
                '\\{\\{if data.custom_field_template_values.length\\}\\}' +
                '<strong>Opcjonalne wartości: </strong><br>' +
                '\\{\\{each data.custom_field_template_values\\}\\}' +
                '- \${\$value.name}<br>' +
                '\\{\\{/each\\}\\}' +
                '\\{\\{/if\\}\\}' +
                '</p>' +
                '</a>' +
                '</div>'
            }
        };

        \$(document).ready(function () {
            \$('#customFieldTypeSelect').change(function () {
                var fieldset = \$(this).closest('fieldset');
                if (\$(this).val() == 2) {
                    customFields.addBaseOption();
                } else {
                    customFields.removeAllOptions();
                }
            });

            \$('#addCustomFieldForm').submit(function (e) {
                e.preventDefault();

                var typeId = \$(this).data('typeId');
                var url = '";
        // line 635
        echo $this->env->getExtension('routing')->getPath("api_create_device_type_custom_field_templatecreate_device_type_custom_field", array("deviceType" => "plain_id"));
        echo "';
                url = url.replace('plain_id', typeId);

                \$.ajax({
                    type: 'POST',
                    data: \$(this).serialize(),
                    url: url,
                    success: function (data) {
                        customFields.addCreatedField(typeId, data);
                        customFields.clearModalForm();
                        \$('#addCustomFieldModal').modal('hide');
                        swal(\"Pole zostało dodane\", data.name, \"success\");
                    },
                    error: function () {
                        swal(\"Wystąpiły błędy\", 'Uzupełnij wymagane pola', \"error\")
                    }
                });
            });

            \$('#formCompany_post_code').formatter({
                'pattern': '\\{\\{99\\}\\}-\\{\\{999\\}\\}',
                'persistent': true
            });

            \$('#add-repair-cost-kind').submit(function (e) {
                e.preventDefault();

                var name = \$('#add-repair-cost-kind-name').val();
                var type = \$('#add-repair-cost-kind-type').val();

                if (name.length < 2 || name.length > 25) {
                    swal(\"Wystąpiły błędy\", \"Nazwa może składać się z 2 do 25 znaków\", \"error\");
                    return false;
                }

                \$.ajax({
                    type: 'POST',
                    data: {
                        name: name,
                        type: type
                    },
                    url: '";
        // line 676
        echo $this->env->getExtension('routing')->getPath("api_create_repair_cost_kindcreate_repair_cost_kind");
        echo "',
                    success: function (data, status, xhr) {
                        if (xhr.status == 201) {
                            \$('#add-repair-cost-kind-name').val(\"\");
                            swal(\"Typ został dodany\", data.name, \"success\");

                            var nameOfType;

                            if (data.type == 1) {
                                nameOfType = \"Cena dla klienta.\"
                            } else {
                                nameOfType = \"Koszt ponoszony przez serwis.\"
                            }

                            if (\$('#emptyRepairCostKinds')) {
                                \$('#emptyRepairCostKinds').remove();
                            }

                            \$('#repairCostKind tr:last').before(
                                    \"<tr id='table-repair-cost-kind-row-\" + data.id + \"'>\" +
                                    \"<td>\" + data.name + \"</td>\" +
                                    \"<td>\" + nameOfType + \"</td>\" +
                                    \"<td><span onclick='removeRepairCostKind(\" + data.id + \")' class='glyphicon glyphicon-trash pull-right delete-repair-cost-kind text-danger'></span></td>\" +
                                    \"</tr>\"
                            );
                        }
                    },
                    error: function () {
                        swal(\"Wystąpiły błędy\", \"Nazwa może składać się z 2 do 25 znaków\", \"error\")
                    }
                });
            });

            \$('#add-payment-method-form').submit(function (e) {
                e.preventDefault();

                var name = \$('#add-payment-method-input').val();

                if (name.length < 2 || name.length > 25) {
                    swal(\"Wystąpiły błędy\", \"Nazwa może składać się z 2 do 25 znaków\", \"error\");
                    return false;
                }

                \$.ajax({
                    type: 'POST',
                    data: {
                        name: name
                    },
                    url: '";
        // line 724
        echo $this->env->getExtension('routing')->getPath("api_create_payment_methodcreate_payment_method");
        echo "',
                    success: function (data, status, xhr) {
                        if (xhr.status == 201) {
                            \$('#add-payment-method-input').val(\"\");

                            if (\$('#emptyPaymentMethods')) {
                                \$('#emptyPaymentMethods').remove();
                            }

                            swal(\"Typ został dodany\", data.name, \"success\");
                            \$('#paymentMethodsTable tr:last').before(
                                    \"<tr id='table-payment-method-row-\" + data.id + \"'>\" +
                                    \"<td>\" + data.name + \"</td>\" +
                                    \"<td><span onclick='removePaymentMethod(\" + data.id + \")' class='glyphicon glyphicon-trash pull-right delete-payment-method text-danger'></span></td>\" +
                                    \"</tr>\");
                        }
                    },
                    error: function () {
                        swal(\"Wystąpiły błędy\", \"Nazwa może składać się z 2 do 25 znaków\", \"error\");
                    }
                });
            });
        });

        \$(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip()
        });

        function removeRepairCostKind(id) {
            var url = '";
        // line 753
        echo $this->env->getExtension('routing')->getPath("api_remove_repair_cost_kindremove_repair_cost_kind", array("id" => "plain_id"));
        echo "';
            url = url.replace(\"plain_id\", id);

            \$.ajax({
                type: 'DELETE',
                url: url,
                success: function (data, status, xhr) {
                    if (xhr.status == 204) {
                        swal(\"Typ został usunięty\", null, \"success\");
                        \$('#table-repair-cost-kind-row-' + id).remove();
                    }
                },
                error: function () {
                    swal(\"Wystąpiły błędy\", \"Typ został już użyty\", \"error\")
                }
            });
        }

        function removePaymentMethod(id) {
            var url = '";
        // line 772
        echo $this->env->getExtension('routing')->getPath("api_remove_payment_methodremove_payment_method", array("id" => "plain_id"));
        echo "';
            url = url.replace(\"plain_id\", id);

            \$.ajax({
                type: 'DELETE',
                url: url,
                success: function (data, status, xhr) {
                    if (xhr.status == 204) {
                        swal(\"Typ został usunięty\", null, \"success\");
                        \$('#table-payment-method-row-' + id).remove();
                    }
                },
                error: function () {
                    swal(\"Wystąpiły błędy\", \"Typ został już użyty\", \"error\")
                }
            });
        }
    </script>
";
        
        $__internal_900db8044c90ab62b6585cdd290e3d9bce5f3b33f8cb4b0fcb3a4b136872fc42->leave($__internal_900db8044c90ab62b6585cdd290e3d9bce5f3b33f8cb4b0fcb3a4b136872fc42_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:adminManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1188 => 772,  1166 => 753,  1134 => 724,  1083 => 676,  1039 => 635,  958 => 557,  932 => 534,  784 => 388,  776 => 385,  762 => 377,  758 => 375,  751 => 373,  739 => 369,  736 => 368,  727 => 366,  723 => 365,  720 => 364,  718 => 363,  715 => 362,  709 => 361,  700 => 357,  693 => 355,  687 => 352,  682 => 350,  679 => 349,  667 => 348,  658 => 342,  652 => 341,  644 => 337,  640 => 336,  636 => 334,  632 => 333,  622 => 326,  594 => 300,  583 => 294,  573 => 289,  567 => 286,  561 => 284,  556 => 283,  515 => 245,  509 => 242,  495 => 230,  484 => 224,  474 => 219,  469 => 216,  465 => 214,  462 => 213,  458 => 211,  456 => 210,  450 => 207,  444 => 205,  439 => 204,  414 => 181,  397 => 170,  394 => 169,  387 => 167,  376 => 163,  372 => 162,  369 => 161,  364 => 160,  358 => 156,  354 => 154,  348 => 152,  346 => 151,  339 => 147,  335 => 145,  331 => 143,  325 => 141,  323 => 140,  316 => 136,  312 => 134,  308 => 132,  302 => 130,  300 => 129,  295 => 126,  291 => 124,  285 => 122,  283 => 121,  278 => 118,  274 => 116,  268 => 114,  266 => 113,  259 => 109,  253 => 106,  247 => 103,  235 => 94,  226 => 88,  222 => 87,  217 => 84,  213 => 83,  203 => 76,  193 => 68,  172 => 63,  162 => 56,  156 => 52,  139 => 51,  130 => 45,  117 => 35,  112 => 33,  107 => 31,  103 => 30,  99 => 29,  95 => 28,  91 => 27,  87 => 26,  83 => 25,  79 => 24,  75 => 23,  60 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     | Zarządzanie*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     {% include 'AppBundle::alerts.html.twig' %}*/
/* */
/*     <ul class="nav nav-tabs">*/
/*         <li class="active"><a data-toggle="tab" href="#home">Dane firmy</a></li>*/
/*         <li><a data-toggle="tab" href="#menu1">Regulamin</a></li>*/
/*         <li><a data-toggle="tab" href="#menu2">Oddziały</a></li>*/
/*         <li><a data-toggle="tab" href="#menu4">Serwis</a></li>*/
/*         <li><a data-toggle="tab" href="#menu5">Metody płatności</a></li>*/
/*         <li><a data-toggle="tab" href="#menu6">Formularz przyjęcia</a></li>*/
/*     </ul>*/
/*     <div class="tab-content">*/
/*         <div id="home" style="padding-top: 10px;" class="tab-pane fade in active">*/
/*             <div class="row">*/
/*                 <div class="col-md-6">*/
/*                     {{ form_start(formCompany) }}*/
/*                     {{ form_row(formCompany.name, {'label': 'company.name'}) }}*/
/*                     {{ form_row(formCompany.street, {'label': 'company.street'}) }}*/
/*                     {{ form_row(formCompany.city, {'label': 'company.city'}) }}*/
/*                     {{ form_row(formCompany.post_code, {'label': 'company.post_code'}) }}*/
/*                     {{ form_row(formCompany.NIP, {'label': 'company.nip'}) }}*/
/*                     {{ form_row(formCompany.main_site, {'label': 'company.main_site'}) }}*/
/*                     {{ form_row(formCompany.email_subject_begin, {'label': 'company.mailing_subject_begin'}) }}*/
/*                     {{ form_row(formCompany.logoFile, {'label': 'company.logo'}) }}*/
/*                     <hr>*/
/*                     {{ form_row(formCompany.smallLogoFile, {'label': 'company.small_logo'}) }}*/
/*                     <input type="submit" class="btn btn-sm btn-success pull-right" value="Zatwierdź zmiany">*/
/*                     {{ form_end(formCompany) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div id="menu1" class="tab-pane fade">*/
/*             <div class="row">*/
/*                 <div class="col-md-6">*/
/*                     <div class="panel panel-default" style="margin-top: 15px;">*/
/*                         <div class="panel-heading">*/
/*                             Regulamin*/
/*                             <a href="{{ path('admin_management_regulatory_paragraph_add') }}" title="Dodaj"*/
/*                                class="btn btn-xs btn-success pull-right">*/
/*                                 <span class="glyphicon glyphicon-plus"></span> Dodaj punkt regulaminu*/
/*                             </a>*/
/*                         </div>*/
/*                         <ul class="list-group">*/
/*                             {% for entry in regulations %}*/
/*                                 <li class="list-group-item">*/
/*                                     <div class="row">*/
/*                                         <div class="pull-right">*/
/*                                             <a style="margin-right: 10px;"*/
/*                                                href="{{ path('admin_management_regulatory_paragraph_edit',{'id':entry.id}) }}"*/
/*                                                data-toggle="tooltip" data-placement="right" title="Edytuj&nbsp;wpis">*/
/*                                                 <span class="glyphicon glyphicon-pencil"*/
/*                                                       style="font-size: 20px;"></span>*/
/*                                             </a>*/
/*                                         </div>*/
/*                                         <div style="padding-left: 5px;">*/
/*                                             <strong>{{ loop.index }}. </strong>{{ entry.paragraph }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div id="menu2" style="padding-top: 10px;" class="tab-pane fade">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <a href="{{ path('admin_management_localization_add') }}" role="button"*/
/*                        class="btn btn-sm btn-success"*/
/*                        style="margin-bottom: 10px;">*/
/*                         <span class="glyphicon glyphicon-plus"></span>*/
/*                         Dodaj oddział*/
/*                     </a>*/
/*                 </div>*/
/*                 {% for localization in localizations %}*/
/*                     <div class="col-md-6">*/
/*                         <div class="panel panel-default">*/
/*                             <div class="panel-heading">*/
/*                                 Nazwa: {{ localization.name }}*/
/*                                 <a href="{{ path('worker_panel_pokwitowanie-example_print',{'id': localization.id }) }}"*/
/*                                    title="Kliknij aby zobaczyć.">*/
/*                                     <button type="button" class="btn btn-info btn-xs pull-right">*/
/*                                         Pokwitowanie*/
/*                                     </button>*/
/*                                 </a>*/
/*                                 <a href="{{ path('admin_management_localization_edit',{'id': localization.id }) }}"*/
/*                                    title="Kliknij aby zmienić.">*/
/*                                     <button type="button" class="btn btn-primary btn-xs pull-right"*/
/*                                             style="margin-right: 10px;">Edycja*/
/*                                     </button>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <ul class="list-group">*/
/*                                 <li class="list-group-item">*/
/*                                     <strong>Miasto: </strong>{{ localization.city }}*/
/*                                 </li>*/
/*                                 <li class="list-group-item">*/
/*                                     <strong>Ulica: </strong>{{ localization.street }}*/
/*                                 </li>*/
/*                                 <li class="list-group-item">*/
/*                                     <strong>Kod pocztowy: </strong>{{ localization.postCode }}*/
/*                                 </li>*/
/*                                 <li class="list-group-item">*/
/*                                     <strong>Telefon główny: </strong>*/
/*                                     {% if localization.tel1 is not null %}*/
/*                                         {{ phone_number_format(localization.tel1) }}*/
/*                                     {% else %}*/
/*                                         -*/
/*                                     {% endif %}*/
/*                                 </li>*/
/*                                 <li class="list-group-item">*/
/*                                     <strong>Telefon dodatkowy: </strong>*/
/*                                     {% if localization.tel2 is not null %}*/
/*                                         {{ phone_number_format(localization.tel2) }}*/
/*                                     {% else %}*/
/*                                         -*/
/*                                     {% endif %}*/
/*                                 </li>*/
/*                                 <li class="list-group-item">*/
/*                                     <strong>Telefon pomocniczy: </strong>*/
/*                                     {% if localization.tel3 is not null %}*/
/*                                         {{ phone_number_format(localization.tel3) }}*/
/*                                     {% else %}*/
/*                                         -*/
/*                                     {% endif %}*/
/*                                 </li>*/
/*                                 <li class="list-group-item">*/
/*                                     <strong>E-mail główny: </strong>{{ localization.emailFirst }}*/
/*                                 </li>*/
/*                                 <li class="list-group-item">*/
/*                                     <strong>E-mail dodatkowy: </strong>*/
/*                                     {% if localization.emailSecond is not null %}*/
/*                                         {{ localization.emailSecond }}*/
/*                                     {% else %}*/
/*                                         -*/
/*                                     {% endif %}*/
/*                                 </li>*/
/*                                 <li class="list-group-item">*/
/*                                     <strong>Godziny otwarcia (pn-pt): </strong>{{ localization.monFriOpen }}*/
/*                                 </li>*/
/*                                 <li class="list-group-item">*/
/*                                     <strong>Godziny otwarcia (sob): </strong>*/
/*                                     {% if localization.satOpen  is not null %}*/
/*                                         {{ localization.satOpen }}*/
/*                                     {% else %}*/
/*                                         -*/
/*                                     {% endif %}*/
/*                                 </li>*/
/*                                 <li class="list-group-item">*/
/*                                     <strong>Pracownicy: </strong>*/
/*                                     <ul class="list-inline">*/
/*                                         {% for employee in localization_service.employeesByLocalizationId(localization.id) %}*/
/*                                             <li class="list-group-item-text">*/
/*                                                 <a href="{{ path('admin_management_edit_repairer',{'id':employee.id}) }}">*/
/*                                                     {{ employee.name }} {{ employee.surname }}*/
/*                                                 </a>*/
/*                                             </li>*/
/*                                         {% else %}*/
/*                                             -*/
/*                                         {% endfor %}*/
/*                                     </ul>*/
/*                                     <a href="{{ path('admin_management_add_repairer',{'id':localization.id}) }}"*/
/*                                        role="button" class="btn btn-xs btn-default"*/
/*                                        style="margin-top: 15px;">*/
/*                                         <span class="glyphicon glyphicon-plus"></span>*/
/*                                         Dodaj pracownika*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*         <div id="menu4" class="tab-pane fade">*/
/*             <div class="row" style="margin-top: 10px">*/
/*                 <div class="col-md-12">*/
/*                     <div class="row">*/
/*                         <div class="col-md-6">*/
/*                             <div class="panel panel-default">*/
/*                                 <div class="panel-heading">Typy kosztów związane z serwisem</div>*/
/*                                 <form class="form-inline" id="add-repair-cost-kind">*/
/*                                     <table class="table" style="margin-bottom: 0;" id="repairCostKind">*/
/*                                         <thead>*/
/*                                         <tr>*/
/*                                             <th>*/
/*                                                 Nazwa*/
/*                                             </th>*/
/*                                             <th>*/
/*                                                 Typ*/
/*                                             </th>*/
/*                                             <th></th>*/
/*                                         </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                         {% for costKind in repairCostKinds %}*/
/*                                             <tr id="table-repair-cost-kind-row-{{ costKind.id }}">*/
/*                                                 <td>*/
/*                                                     {{ costKind.name }}*/
/*                                                 </td>*/
/*                                                 <td>*/
/*                                                     {% if costKind.type == constant('AppBundle\\Entity\\RepairCostKind::TYPE_PLUS') %}*/
/*                                                         Cena dla klienta.*/
/*                                                     {% endif %}*/
/*                                                     {% if costKind.type == constant('AppBundle\\Entity\\RepairCostKind::TYPE_MINUS') %}*/
/*                                                         Koszt ponoszony przez serwis.*/
/*                                                     {% endif %}*/
/* */
/*                                                 </td>*/
/*                                                 <td>*/
/*                                                     <span onclick="removeRepairCostKind({{ costKind.id }});"*/
/*                                                           class="glyphicon glyphicon-trash pull-right delete-repair-cost-kind text-danger"></span>*/
/*                                                 </td>*/
/*                                             </tr>*/
/*                                         {% else %}*/
/*                                             <tr id="emptyRepairCostKinds">*/
/*                                                 <td colspan="3">*/
/*                                                     Brak zdefiniowanych kosztów.*/
/*                                                 </td>*/
/*                                             </tr>*/
/*                                         {% endfor %}*/
/*                                         <tr>*/
/*                                             <td>*/
/*                                                 <label for="add-repair-cost-kind-name" class="sr-only">Nowy*/
/*                                                     koszt:</label>*/
/*                                                 <input class="input-sm form-control" type="text"*/
/*                                                        id="add-repair-cost-kind-name"*/
/*                                                        required placeholder="Nazwa" style="width: 100%">*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 <label for="add-repair-cost-kind-type" class="sr-only"></label>*/
/*                                                 <select id="add-repair-cost-kind-type" class="form-control input-sm"*/
/*                                                         style="width: 100%">*/
/*                                                     <option value="{{ constant('AppBundle\\Entity\\RepairCostKind::TYPE_PLUS') }}">*/
/*                                                         Cena dla klienta*/
/*                                                     </option>*/
/*                                                     <option value="{{ constant('AppBundle\\Entity\\RepairCostKind::TYPE_MINUS') }}">*/
/*                                                         Koszt ponoszony przez serwis*/
/*                                                     </option>*/
/*                                                 </select>*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 <button class="btn btn-sm btn-success pull-right"*/
/*                                                         id="add-repair-cost-kind-submit">*/
/*                                                     <span class="glyphicon glyphicon-plus">Dodaj</span></button>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         </tbody>*/
/*                                     </table>*/
/*                                 </form>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div id="menu5" class="tab-pane fade">*/
/*             <div class="row" style="margin-top: 10px">*/
/*                 <div class="col-md-12">*/
/*                     <div class="row">*/
/*                         <div class="col-md-6">*/
/*                             <div class="panel panel-default">*/
/*                                 <div class="panel-heading">Metody płatności</div>*/
/*                                 <form class="form-inline" id="add-payment-method-form">*/
/*                                     <table class="table" style="margin-bottom: 0;" id="paymentMethodsTable">*/
/*                                         <thead>*/
/*                                         <tr>*/
/*                                             <th>*/
/*                                                 Nazwa*/
/*                                             </th>*/
/*                                             <th></th>*/
/*                                         </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                         {% for method in paymentMethods %}*/
/*                                             <tr id="table-payment-method-row-{{ method.id }}">*/
/*                                                 <td>*/
/*                                                     {{ method.name }}*/
/*                                                 </td>*/
/*                                                 <td>*/
/*                                                     <span onclick="removePaymentMethod({{ method.id }})"*/
/*                                                           class="glyphicon glyphicon-trash pull-right delete-payment-method text-danger"></span>*/
/*                                                 </td>*/
/*                                             </tr>*/
/*                                         {% else %}*/
/*                                             <tr id="emptyPaymentMethods">*/
/*                                                 <td colspan="2">*/
/*                                                     Brak zdefiniowanych metod płatności.*/
/*                                                 </td>*/
/*                                             </tr>*/
/*                                         {% endfor %}*/
/*                                         <tr>*/
/*                                             <td>*/
/*                                                 <label for="add-payment-method-input" class="sr-only">Nowy typ:</label>*/
/*                                                 <input class="input-sm form-control" type="text"*/
/*                                                        id="add-payment-method-input"*/
/*                                                        required placeholder="Nazwa" style="width: 100%">*/
/*                                             </td>*/
/*                                             <td>*/
/*                                                 <button class="btn btn-sm btn-success pull-right"*/
/*                                                         id="add-payment-method-submit">*/
/*                                                     <span class="glyphicon glyphicon-plus ">Dodaj</span>*/
/*                                                 </button>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                         </tbody>*/
/*                                     </table>*/
/*                                 </form>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div id="menu6" class="tab-pane fade">*/
/*             <div class="row" style="margin-top: 10px">*/
/*                 <div class="col-md-12">*/
/*                     <a href="{{ path('admin_management_device_type_add') }}"*/
/*                        class="btn btn-sm btn-success"*/
/*                        style="margin-bottom: 10px;">*/
/*                         <span class="glyphicon glyphicon-plus"></span>*/
/*                         Dodaj typ*/
/*                     </a>*/
/*                 </div>*/
/*                 {% for column in deviceTypes|batch(3) %}*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             {% for entry in column %}*/
/*                                 <div class="col-md-4" id="deviceType{{ entry.id }}">*/
/*                                     <div class="panel panel-default">*/
/*                                         <div class="panel-heading">*/
/*                                             <span class="panel-title">Typ: <span*/
/*                                                         id="deviceTypeName{{ entry.id }}">{{ entry.name }}</span></span>*/
/*                                             <span onclick="customFields.removeDeviceTypeModal({{ entry.id }})"*/
/*                                                   class="glyphicon glyphicon-trash text-danger pull-right"*/
/*                                                   style="margin-top: 3px;"></span>*/
/*                                         </div>*/
/*                                         <div class="panel-body" style="padding-top: 5px">*/
/*                                             <h4>Dodatkowe pola</h4>*/
/*                                             {% for option in entry.customFieldsTemplates if option.isVisible() %}*/
/*                                                 <div class="list-group custom-field"*/
/*                                                      id="deviceTypeTemplateField{{ option.id }}">*/
/*                                                     <div class="list-group-item">*/
/*                                                         <span onclick="customFields.removeDeviceTypeTemplateModal({{ option.id }})"*/
/*                                                               class="glyphicon glyphicon-trash text-danger pull-right hidden"></span>*/
/*                                                         <h4 class="list-group-item-heading"*/
/*                                                             data-custom-field-index="{{ loop.index }}">#{{ loop.index }}*/
/*                                                             -*/
/*                                                             <span id="deviceTypeTemplateName{{ option.id }}">{{ option.name }}</span>*/
/*                                                         </h4>*/
/*                                                         <p class="list-group-item-text">*/
/*                                                             <strong>Czy wymagane: </strong>*/
/*                                                             {% if option.isRequired %}Tak{% else %}Nie{% endif %}*/
/*                                                             <br>*/
/*                                                             {% if option.customFieldTemplateValues is not empty %}*/
/*                                                                 <strong>Opcjonalne wartości: </strong><br>*/
/*                                                                 {% for value in option.customFieldTemplateValues %}*/
/*                                                                     - {{ value.name }}<br>*/
/*                                                                 {% endfor %}*/
/*                                                             {% endif %}*/
/*                                                         </p>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             {% else %}*/
/*                                                 <span id="noAdditionalFields">Formularz nie zawiera dodatkowych pól</span>*/
/*                                             {% endfor %}*/
/*                                             <button type="button" class="btn btn-sm btn-success pull-right"*/
/*                                                     data-toggle="modal" data-target="#addCustomFieldModal"*/
/*                                                     onclick="customFields.setTypeId({{ entry.id }})">*/
/*                                                 <span class="glyphicon glyphicon-plus"></span>*/
/*                                                 Dodaj dodatkowe pole*/
/*                                             </button>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="modal fade" id="addCustomFieldModal" tabindex="-1" role="dialog"*/
/*          aria-labelledby="addCustomFieldModalLabel">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span*/
/*                                 aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="addCustomFieldModalLabel">Dodatkowe pole</h4>*/
/*                 </div>*/
/*                 <form id="addCustomFieldForm">*/
/*                     <div id="addCustomFieldContainer" class="modal-body">*/
/*                         <fieldset id="addCustomFieldFieldset">*/
/*                             <div class="form-group">*/
/*                                 <label for="customFieldName" class="required">Nazwa pola</label>*/
/*                                 <input type="text" class="form-control" required id="customFieldName"*/
/*                                        name="customFieldName">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <div class="checkbox">*/
/*                                     <label for="customFieldRequired">*/
/*                                         <input type="checkbox" id="customFieldRequired" name="customFieldRequired"*/
/*                                                value="1">*/
/*                                         Wymagane?*/
/*                                     </label>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="customFieldTypeSelect" class="required">Typ pola</label>*/
/*                                 <select class="form-control" required id="customFieldTypeSelect"*/
/*                                         name="customFieldTypeSelect">*/
/*                                     <option value="1">Pole tekstowe</option>*/
/*                                     <option value="2">Pole wyboru</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                             <hr>*/
/*                             <div class="form-options"></div>*/
/*                         </fieldset>*/
/*                     </div>*/
/*                     <div class="modal-footer">*/
/*                         <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Anuluj</button>*/
/*                         <input type="submit" class="btn btn-sm btn-success pull-right" name="addCustomFieldSubmit"*/
/*                                id="addCustomFieldSubmit"*/
/*                                value="Zatwierdź"/>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="modal fade" id="removeDeviceTypeModal" tabindex="-1" role="dialog"*/
/*          aria-labelledby="removeDeviceTypeModalLabel">*/
/*         <div class="modal-dialog modal-sm" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                         <span aria-hidden="true">&times;</span>*/
/*                     </button>*/
/*                     <h4 class="modal-title" id="removeDeviceTypeModalLabel">*/
/*                         Typ:*/
/*                         <span id="deviceTypeNameToRemove"></span>*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     Czy na pewno chcesz usunąć?*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Anuluj</button>*/
/*                     <button type="button" class="btn btn-sm btn-danger" id="removeDeviceTypeButton">Usuń</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="modal fade" id="removeDeviceTypeTemplateModal" tabindex="-1" role="dialog"*/
/*          aria-labelledby="removeDeviceTypeTemplateModalLabel">*/
/*         <div class="modal-dialog modal-sm" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                         <span aria-hidden="true">&times;</span>*/
/*                     </button>*/
/*                     <h4 class="modal-title" id="removeDeviceTypeTemplateModalLabel">*/
/*                         <span id="deviceTypeTemplateNameToRemove"></span>*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     Czy na pewno chcesz usunąć?*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Anuluj</button>*/
/*                     <button type="button" class="btn btn-sm btn-danger" id="removeDeviceTypeTemplateButton">Usuń*/
/*                     </button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <script src="http://ajax.microsoft.com/ajax/jquery.templates/beta1/jquery.tmpl.js"></script>*/
/*     <script>*/
/*         var customFields = {*/
/*             element: $('#addCustomFieldContainer'),*/
/*             optionsCounter: 0,*/
/*             removeAllOptions: function () {*/
/*                 customFields.optionsCounter = 0;*/
/*                 $('#addCustomFieldFieldset').find('.form-options').html('');*/
/*             },*/
/*             addBaseOption: function () {*/
/*                 $('#addCustomFieldFieldset').find('.form-options').html($.tmpl(customFields.templates.baseOption));*/
/*             },*/
/*             addOption: function () {*/
/*                 customFields.optionsCounter++;*/
/*                 var options = $('#addCustomFieldFieldset').find('.form-options');*/
/*                 $.tmpl(customFields.templates.option, {index: customFields.optionsCounter}).insertAfter(options.find('.form-group:last'));*/
/*             },*/
/*             removeOption: function (index) {*/
/*                 $('#customFieldOption' + index).remove();*/
/*             },*/
/*             setTypeId: function (index) {*/
/*                 $('#addCustomFieldForm').data('typeId', index);*/
/*             },*/
/*             addCreatedField: function (id, data) {*/
/*                 var fieldset = $('#deviceType' + id);*/
/*                 var sequence = fieldset.find('.custom-field').length + 1;*/
/*                 var options = fieldset.find('.custom-field:last');*/
/*                 $.tmpl(customFields.templates.createdField, {*/
/*                     data: data,*/
/*                     sequence: sequence*/
/*                 }).insertAfter(options);*/
/*             },*/
/*             clearModalForm: function () {*/
/*                 $('#customFieldName').val('');*/
/*                 $('#customFieldRequired').removeAttr('checked');*/
/*                 $('#customFieldTypeSelect').prop('selectedIndex', 0);*/
/*                 $('.form-options').html('');*/
/*             },*/
/*             removeDeviceTypeModal: function (index) {*/
/*                 var deviceTypeName = $('#deviceTypeName' + index).text();*/
/*                 $('#deviceTypeNameToRemove').text(deviceTypeName);*/
/*                 $('#removeDeviceTypeButton').attr('onclick', 'customFields.removeDeviceType(' + index + ')');*/
/*                 $('#removeDeviceTypeModal').modal('show');*/
/*             },*/
/*             removeDeviceType: function (index) {*/
/*                 var url = '{{ path('api_remove_device_typeremove_device_type', {'deviceType': '11111111'}) }}';*/
/*                 url = url.replace('11111111', index);*/
/* */
/*                 $.ajax({*/
/*                     type: 'DELETE',*/
/*                     url: url,*/
/*                     success: function () {*/
/*                         swal("Typ został usunięty", null, "warning");*/
/*                         $('#removeDeviceTypeModal').modal('hide');*/
/*                         $('#deviceType' + index).remove();*/
/*                     },*/
/*                     error: function () {*/
/*                         swal("Wystąpiły błędy", 'Typ nie został usunięty', "error")*/
/*                     }*/
/*                 });*/
/*             },*/
/*             removeDeviceTypeTemplateModal: function (index) {*/
/*                 var deviceTypeTemplateName = $('#deviceTypeTemplateName' + index).text();*/
/*                 $('#deviceTypeTemplateNameToRemove').text(deviceTypeTemplateName);*/
/*                 $('#removeDeviceTypeTemplateButton').attr('onclick', 'customFields.removeDeviceTypeTemplate(' + index + ')');*/
/*                 $('#removeDeviceTypeTemplateModal').modal('show');*/
/*             },*/
/*             removeDeviceTypeTemplate: function (index) {*/
/*                 var url = '{{ path('api_remove_device_type_templateremove_custom_field_template', {'customFieldTemplate': '11111111'}) }}';*/
/*                 url = url.replace('11111111', index);*/
/* */
/*                 console.log(index);*/
/* */
/*                 $.ajax({*/
/*                     type: 'DELETE',*/
/*                     url: url,*/
/*                     success: function () {*/
/*                         swal("Pole zostało usunięte", null, "warning");*/
/*                         $('#removeDeviceTypeTemplateModal').modal('hide');*/
/*                         $('#deviceTypeTemplateField' + index).remove();*/
/*                     },*/
/*                     error: function () {*/
/*                         swal("Wystąpiły błędy", 'Pole nie zostało usunięte', "error")*/
/*                     }*/
/*                 });*/
/*             },*/
/*             templates: {*/
/*                 baseOption: '<div class="form-group">' +*/
/*                 '<label class="required">Wartość do wyboru</label>' +*/
/*                 '<input type="text" class="form-control" required placeholder="Wartość do wyboru"' +*/
/*                 'name="customFieldOptions[]">' +*/
/*                 '</div>' +*/
/*                 '<button type="button" class="btn btn-block btn-success"' +*/
/*                 'onclick="customFields.addOption();"><span' +*/
/*                 'class="glyphicon glyphicon-plus"></span> Dodaj wartość' +*/
/*                 '</button>' +*/
/*                 '<hr>',*/
/*                 option: '<div class="form-group" id="customFieldOption${index}" style="margin-top: 20px;">' +*/
/*                 '<label class="required">Wartość do wyboru</label>' +*/
/*                 '<div class="row">' +*/
/*                 '<div class="col-md-10">' +*/
/*                 '<input type="text" class="form-control" required placeholder="Wartość do wyboru" name="customFieldOptions[]">' +*/
/*                 '</div>' +*/
/*                 '<div class="col-md-2 text-right">' +*/
/*                 '<button type="button" class="btn btn-sm btn-danger" onclick="customFields.removeOption(${index});"><span class="glyphicon glyphicon-trash"></span> Usuń</button>' +*/
/*                 '</div>' +*/
/*                 '</div>' +*/
/*                 '</div>',*/
/*                 createdField: '<div class="list-group custom-field">' +*/
/*                 '<a href="#" class="list-group-item"' +*/
/*                 'id="deviceTypeTemplateField${data.id}">' +*/
/*                 '<span onclick="customFields.removeDeviceTypeTemplateModal(${data.id})"' +*/
/*                 'class="glyphicon glyphicon-trash text-danger pull-right hidden"></span>' +*/
/*                 '<h4 class="list-group-item-heading"' +*/
/*                 'data-custom-field-index="${data.index}">#${sequence} - ' +*/
/*                 '${data.name}</h4>' +*/
/*                 '<p class="list-group-item-text">' +*/
/*                 '<strong>Czy wymagane: </strong>' +*/
/*                 '\{\{if data.is_required\}\}Tak\{\{else\}\}Nie\{\{/if\}\}' +*/
/*                 '<br>' +*/
/*                 '\{\{if data.custom_field_template_values.length\}\}' +*/
/*                 '<strong>Opcjonalne wartości: </strong><br>' +*/
/*                 '\{\{each data.custom_field_template_values\}\}' +*/
/*                 '- ${$value.name}<br>' +*/
/*                 '\{\{/each\}\}' +*/
/*                 '\{\{/if\}\}' +*/
/*                 '</p>' +*/
/*                 '</a>' +*/
/*                 '</div>'*/
/*             }*/
/*         };*/
/* */
/*         $(document).ready(function () {*/
/*             $('#customFieldTypeSelect').change(function () {*/
/*                 var fieldset = $(this).closest('fieldset');*/
/*                 if ($(this).val() == 2) {*/
/*                     customFields.addBaseOption();*/
/*                 } else {*/
/*                     customFields.removeAllOptions();*/
/*                 }*/
/*             });*/
/* */
/*             $('#addCustomFieldForm').submit(function (e) {*/
/*                 e.preventDefault();*/
/* */
/*                 var typeId = $(this).data('typeId');*/
/*                 var url = '{{ path('api_create_device_type_custom_field_templatecreate_device_type_custom_field', {'deviceType': 'plain_id'}) }}';*/
/*                 url = url.replace('plain_id', typeId);*/
/* */
/*                 $.ajax({*/
/*                     type: 'POST',*/
/*                     data: $(this).serialize(),*/
/*                     url: url,*/
/*                     success: function (data) {*/
/*                         customFields.addCreatedField(typeId, data);*/
/*                         customFields.clearModalForm();*/
/*                         $('#addCustomFieldModal').modal('hide');*/
/*                         swal("Pole zostało dodane", data.name, "success");*/
/*                     },*/
/*                     error: function () {*/
/*                         swal("Wystąpiły błędy", 'Uzupełnij wymagane pola', "error")*/
/*                     }*/
/*                 });*/
/*             });*/
/* */
/*             $('#formCompany_post_code').formatter({*/
/*                 'pattern': '\{\{99\}\}-\{\{999\}\}',*/
/*                 'persistent': true*/
/*             });*/
/* */
/*             $('#add-repair-cost-kind').submit(function (e) {*/
/*                 e.preventDefault();*/
/* */
/*                 var name = $('#add-repair-cost-kind-name').val();*/
/*                 var type = $('#add-repair-cost-kind-type').val();*/
/* */
/*                 if (name.length < 2 || name.length > 25) {*/
/*                     swal("Wystąpiły błędy", "Nazwa może składać się z 2 do 25 znaków", "error");*/
/*                     return false;*/
/*                 }*/
/* */
/*                 $.ajax({*/
/*                     type: 'POST',*/
/*                     data: {*/
/*                         name: name,*/
/*                         type: type*/
/*                     },*/
/*                     url: '{{ path('api_create_repair_cost_kindcreate_repair_cost_kind') }}',*/
/*                     success: function (data, status, xhr) {*/
/*                         if (xhr.status == 201) {*/
/*                             $('#add-repair-cost-kind-name').val("");*/
/*                             swal("Typ został dodany", data.name, "success");*/
/* */
/*                             var nameOfType;*/
/* */
/*                             if (data.type == 1) {*/
/*                                 nameOfType = "Cena dla klienta."*/
/*                             } else {*/
/*                                 nameOfType = "Koszt ponoszony przez serwis."*/
/*                             }*/
/* */
/*                             if ($('#emptyRepairCostKinds')) {*/
/*                                 $('#emptyRepairCostKinds').remove();*/
/*                             }*/
/* */
/*                             $('#repairCostKind tr:last').before(*/
/*                                     "<tr id='table-repair-cost-kind-row-" + data.id + "'>" +*/
/*                                     "<td>" + data.name + "</td>" +*/
/*                                     "<td>" + nameOfType + "</td>" +*/
/*                                     "<td><span onclick='removeRepairCostKind(" + data.id + ")' class='glyphicon glyphicon-trash pull-right delete-repair-cost-kind text-danger'></span></td>" +*/
/*                                     "</tr>"*/
/*                             );*/
/*                         }*/
/*                     },*/
/*                     error: function () {*/
/*                         swal("Wystąpiły błędy", "Nazwa może składać się z 2 do 25 znaków", "error")*/
/*                     }*/
/*                 });*/
/*             });*/
/* */
/*             $('#add-payment-method-form').submit(function (e) {*/
/*                 e.preventDefault();*/
/* */
/*                 var name = $('#add-payment-method-input').val();*/
/* */
/*                 if (name.length < 2 || name.length > 25) {*/
/*                     swal("Wystąpiły błędy", "Nazwa może składać się z 2 do 25 znaków", "error");*/
/*                     return false;*/
/*                 }*/
/* */
/*                 $.ajax({*/
/*                     type: 'POST',*/
/*                     data: {*/
/*                         name: name*/
/*                     },*/
/*                     url: '{{ path('api_create_payment_methodcreate_payment_method') }}',*/
/*                     success: function (data, status, xhr) {*/
/*                         if (xhr.status == 201) {*/
/*                             $('#add-payment-method-input').val("");*/
/* */
/*                             if ($('#emptyPaymentMethods')) {*/
/*                                 $('#emptyPaymentMethods').remove();*/
/*                             }*/
/* */
/*                             swal("Typ został dodany", data.name, "success");*/
/*                             $('#paymentMethodsTable tr:last').before(*/
/*                                     "<tr id='table-payment-method-row-" + data.id + "'>" +*/
/*                                     "<td>" + data.name + "</td>" +*/
/*                                     "<td><span onclick='removePaymentMethod(" + data.id + ")' class='glyphicon glyphicon-trash pull-right delete-payment-method text-danger'></span></td>" +*/
/*                                     "</tr>");*/
/*                         }*/
/*                     },*/
/*                     error: function () {*/
/*                         swal("Wystąpiły błędy", "Nazwa może składać się z 2 do 25 znaków", "error");*/
/*                     }*/
/*                 });*/
/*             });*/
/*         });*/
/* */
/*         $(function () {*/
/*             $('[data-toggle="tooltip"]').tooltip()*/
/*         });*/
/* */
/*         function removeRepairCostKind(id) {*/
/*             var url = '{{ path("api_remove_repair_cost_kindremove_repair_cost_kind", {'id': 'plain_id'}) }}';*/
/*             url = url.replace("plain_id", id);*/
/* */
/*             $.ajax({*/
/*                 type: 'DELETE',*/
/*                 url: url,*/
/*                 success: function (data, status, xhr) {*/
/*                     if (xhr.status == 204) {*/
/*                         swal("Typ został usunięty", null, "success");*/
/*                         $('#table-repair-cost-kind-row-' + id).remove();*/
/*                     }*/
/*                 },*/
/*                 error: function () {*/
/*                     swal("Wystąpiły błędy", "Typ został już użyty", "error")*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         function removePaymentMethod(id) {*/
/*             var url = '{{ path("api_remove_payment_methodremove_payment_method", {'id': 'plain_id'}) }}';*/
/*             url = url.replace("plain_id", id);*/
/* */
/*             $.ajax({*/
/*                 type: 'DELETE',*/
/*                 url: url,*/
/*                 success: function (data, status, xhr) {*/
/*                     if (xhr.status == 204) {*/
/*                         swal("Typ został usunięty", null, "success");*/
/*                         $('#table-payment-method-row-' + id).remove();*/
/*                     }*/
/*                 },*/
/*                 error: function () {*/
/*                     swal("Wystąpiły błędy", "Typ został już użyty", "error")*/
/*                 }*/
/*             });*/
/*         }*/
/*     </script>*/
/* {% endblock %}*/
