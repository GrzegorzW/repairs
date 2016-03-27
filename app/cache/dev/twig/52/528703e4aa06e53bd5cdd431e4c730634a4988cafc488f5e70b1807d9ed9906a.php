<?php

/* AppBundle:Worker:userDetails.html.twig */
class __TwigTemplate_65ef9c58bf3abb5c9bf08d356afb6b24f3d4f88f5227356a36091d06512ae5f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Worker:userDetails.html.twig", 1);
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
        $__internal_6efa75241d19b418bb20b5ef24f53234ff10ee627af96970f3d744b2fe79fd16 = $this->env->getExtension("native_profiler");
        $__internal_6efa75241d19b418bb20b5ef24f53234ff10ee627af96970f3d744b2fe79fd16->enter($__internal_6efa75241d19b418bb20b5ef24f53234ff10ee627af96970f3d744b2fe79fd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Worker:userDetails.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6efa75241d19b418bb20b5ef24f53234ff10ee627af96970f3d744b2fe79fd16->leave($__internal_6efa75241d19b418bb20b5ef24f53234ff10ee627af96970f3d744b2fe79fd16_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd973c9d50abd3fa1b77eeaffd479bf58aa53d5f8557d57728a1cdd363068434 = $this->env->getExtension("native_profiler");
        $__internal_dd973c9d50abd3fa1b77eeaffd479bf58aa53d5f8557d57728a1cdd363068434->enter($__internal_dd973c9d50abd3fa1b77eeaffd479bf58aa53d5f8557d57728a1cdd363068434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    | Klienci | Szczegóły
";
        
        $__internal_dd973c9d50abd3fa1b77eeaffd479bf58aa53d5f8557d57728a1cdd363068434->leave($__internal_dd973c9d50abd3fa1b77eeaffd479bf58aa53d5f8557d57728a1cdd363068434_prof);

    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_4da9a944b7a05394e8748c773a06b483bce1e198a4ce1e0ea8dd4813474f9749 = $this->env->getExtension("native_profiler");
        $__internal_4da9a944b7a05394e8748c773a06b483bce1e198a4ce1e0ea8dd4813474f9749->enter($__internal_4da9a944b7a05394e8748c773a06b483bce1e198a4ce1e0ea8dd4813474f9749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("AppBundle::alerts.html.twig", "AppBundle:Worker:userDetails.html.twig", 9)->display($context);
        // line 10
        echo "
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    Dane osobowe
                    <button type=\"button\" class=\"btn btn-success btn-xs pull-right\" data-toggle=\"modal\"
                            data-target=\"#myModal\">
                        Edytuj
                    </button>
                </div>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">
                        <strong>ID użytkownika:</strong> ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "altId", array()), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Imię i nazwisko:</strong> <span id=\"list-name\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</span> <span
                                id=\"list-surname\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "surname", array()), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item\">
                        <strong>E-mail:</strong> ";
        // line 30
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Zgoda marketingowa:</strong> ";
        // line 33
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "marketingAgreement", array())) {
            echo "Tak";
        } else {
            echo "Nie";
        }
        // line 34
        echo "                    </li>
                    <li class=\"list-group-item\">
                        <strong>Tel:</strong> ";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tel", array()))), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Login:</strong> ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Ostatnio
                            zalogowany:</strong> ";
        // line 43
        echo twig_escape_filter($this->env, _twig_default_filter(twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastLogin", array()), "d.m.Y H:i:s"), "Niezalogowany"), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Tymczasowe
                            hasło:</strong> ";
        // line 47
        if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tempPwChanged", array())) {
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "tempPw", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "tempPw", array()), "Klient zmienił hasło")) : ("Klient zmienił hasło")), "html", null, true);
        } else {
            echo "Klient zmienił hasło";
        }
        // line 48
        echo "                    </li>
                    <li class=\"list-group-item\">
                        <button type=\"button\" class=\"btn btn-info btn-sm btn-block user-invoice-data\">
                            Dane do faktury
                            <span class=\"glyphicon glyphicon-triangle-bottom pull-right\"
                                  style=\"margin-top: 2px;\"></span>
                        </button>
                    </li>
                </ul>
                <ul class=\"list-group\">
                    <li class=\"list-group-item user-invoice-data-body hidden\">
                        <strong>Nazwa firmy:</strong> ";
        // line 59
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyName", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item user-invoice-data-body hidden\">
                        <strong>Adres:</strong> ";
        // line 62
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyAddress", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyAddress", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item user-invoice-data-body hidden\">
                        <strong>Kod pocztowy:</strong> ";
        // line 65
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyPostCode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyPostCode", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item user-invoice-data-body hidden\">
                        <strong>Miasto:</strong> ";
        // line 68
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyCity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyCity", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item user-invoice-data-body hidden\">
                        <strong>NIP:</strong> ";
        // line 71
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyNIP", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyNIP", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    Urządzenia i naprawy
                    <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_pokwitowanie_add_device", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\"
                       class=\"btn btn-success btn-xs pull-right\">
                        Dodaj nową naprawę
                    </a>
                </div>
                <ul class=\"list-group\">
                    ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "devices", array()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 87
            echo "                        <li class=\"list-group-item\" style=\"cursor:pointer;\"
                            onclick=\"bigFatObject.showDeviceRepairList(";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "id", array()), "html", null, true);
            echo ")\">
                            <span class=\"glyphicon glyphicon-triangle-bottom\"
                                  style=\"margin-top: 3px; margin-right: 5px;\"></span>
                            <strong>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "brand", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "model", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "serial", array()), "html", null, true);
            echo "</strong>

                            <a class=\"pull-right\" href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_device_details", array("id" => $this->getAttribute($context["device"], "id", array()))), "html", null, true);
            echo "\">
                                Szczegóły urządzenia
                            </a>
                        </li>
                        ";
            // line 97
            if ($this->getAttribute($context["device"], "repairs", array())) {
                // line 98
                echo "                            <div class=\"table-responsive ";
                if ( !$this->getAttribute($context["loop"], "first", array())) {
                    echo "hidden";
                }
                echo "\" style=\"border-top: none\"
                                 id=\"device-repair-list-";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "id", array()), "html", null, true);
                echo "\">
                                <table class=\"table table-striped table-condensed\" id=\"convertable-table\"
                                       style=\"margin-bottom: 10px;\">
                                    <tbody>
                                    ";
                // line 103
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["device"], "repairs", array()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["repair"]) {
                    // line 104
                    echo "                                        <tr>
                                            <td data-title=\"Data rozpoczęcia\">";
                    // line 105
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["repair"], "startDate", array()), "d.m.Y"), "html", null, true);
                    echo "</td>
                                            <td data-title=\"Status\">
                                                ";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["repair"], "currentStatus", array()), "name", array()), "html", null, true);
                    echo "
                                                ";
                    // line 108
                    if ( !twig_test_empty($this->getAttribute($context["repair"], "endDate", array()))) {
                        // line 109
                        echo "                                                    (";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["repair"], "endDate", array()), "d.m.Y"), "html", null, true);
                        echo ")
                                                ";
                    }
                    // line 111
                    echo "                                            </td>
                                            <td data-title=\"Opis\">";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repair"], "description", array()), "html", null, true);
                    echo "</td>
                                            <td data-title=\"Szczegóły\">
                                                <a href=\"";
                    // line 114
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_repair_details", array("id" => $this->getAttribute($context["repair"], "id", array()))), "html", null, true);
                    echo "\">
                                                    Szczegóły naprawy
                                                </a>
                                            </td>
                                        </tr>
                                    ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 120
                    echo "                                        <tr>
                                            <td data-title=\"Naprawy\" colspan=\"4\"><span>Brak napraw</span></td>
                                        </tr>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repair'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo "                                    <tr>
                                        <td data-title=\"Napraw urządzenie\" colspan=\"4\" style=\"background-color: white\">
                                            <a href=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_pokwitowanie_add_repair", array("device" => $this->getAttribute($context["device"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success btn-xs pull-right\">
                                                Napraw to urządzenie
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        ";
            }
            // line 135
            echo "                    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 136
            echo "                        <li class=\"list-group-item\">Brak urządzeń</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                </ul>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">
                        Edycja
                    </h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 155
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), 'form_start', array("attr" => array("class" => "")));
        echo "
                    <div class=\"input-wrap\">
                        ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "name", array()), 'row', array("attr" => array("class" => "input-sm")));
        echo "
                        ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "surname", array()), 'row', array("attr" => array("class" => "input-sm")));
        echo "
                        ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "tel", array()), 'row', array("attr" => array("class" => "input-sm")));
        echo "
                        ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "email", array()), 'row', array("attr" => array("class" => "input-sm")));
        echo "
                        ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "marketing_agreement", array()), 'widget', array("attr" => array("style" => "position: relative")));
        echo "
                        <hr>
                        ";
        // line 163
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "client_company_name", array()), 'row', array("attr" => array("class" => "input-sm")));
        echo "
                        ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "client_company_address", array()), 'row', array("attr" => array("class" => "input-sm")));
        echo "
                        ";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "client_company_post_code", array()), 'row', array("attr" => array("class" => "input-sm")));
        echo "
                        ";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "client_company_city", array()), 'row', array("attr" => array("class" => "input-sm")));
        echo "
                        ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "client_company_NIP", array()), 'row', array("attr" => array("class" => "input-sm")));
        echo "
                    </div>
                    ";
        // line 169
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "save", array()), 'row', array("label" => "Zatwierdź", "attr" => array("class" => "btn btn-success btn-sm pull-right")));
        echo "

                    <div class=\"clearfix\"></div>
                    ";
        // line 172
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), 'form_end');
        echo "
                    <hr>
                    ";
        // line 174
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formResetPassword"]) ? $context["formResetPassword"] : $this->getContext($context, "formResetPassword")), 'form_start', array("attr" => array("class" => "")));
        echo "
                    <div class=\"input-wrap\">
                        <label for=\"tempPw\">Tymczasowe hasło</label>
                        <input id=\"tempPw\" class=\"input-sm form-control\"
                               value=\"";
        // line 178
        if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tempPwChanged", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tempPw", array()), "html", null, true);
            echo " ";
        } else {
            echo " Klient zmienił hasło ";
        }
        echo "\"
                               disabled>
                    </div>
                    ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formResetPassword"]) ? $context["formResetPassword"] : $this->getContext($context, "formResetPassword")), "reset", array()), 'widget', array("attr" => array("class" => "btn btn-danger btn-sm")));
        echo "
                    <div class=\"clearfix\"></div>
                    ";
        // line 183
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formResetPassword"]) ? $context["formResetPassword"] : $this->getContext($context, "formResetPassword")), 'form_end');
        echo "
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default btn-sm\" data-dismiss=\"modal\">Anuluj</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        var bigFatObject = {
            showDeviceRepairList: function (index) {
                \$('#device-repair-list-' + index).toggleClass('hidden')
            }
        };

        ";
        // line 199
        if ( !$this->getAttribute($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "vars", array()), "valid", array())) {
            // line 200
            echo "        \$('#myModal').modal('show');
        ";
        }
        // line 202
        echo "
        \$('.user-invoice-data').click(function () {
            \$('.user-invoice-data-body').toggleClass(\"hidden\");
        });

        \$('#editUser_tel').formatter({
            'pattern': '+{\\{99\\}\\} \\{\\{9999999999}\\}',
            'persistent': true
        });

        \$('#editUser_client_company_post_code').formatter({
            'pattern': '{\\{99\\}\\}-\\{\\{999}\\}'
        });

        \$('#resetPasswordType_reset').click(function () {
            \$(\"[name='resetPasswordType']\").submit();
        });
    </script>

";
        
        $__internal_4da9a944b7a05394e8748c773a06b483bce1e198a4ce1e0ea8dd4813474f9749->leave($__internal_4da9a944b7a05394e8748c773a06b483bce1e198a4ce1e0ea8dd4813474f9749_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Worker:userDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 202,  461 => 200,  459 => 199,  440 => 183,  435 => 181,  423 => 178,  416 => 174,  411 => 172,  405 => 169,  400 => 167,  396 => 166,  392 => 165,  388 => 164,  384 => 163,  379 => 161,  375 => 160,  371 => 159,  367 => 158,  363 => 157,  358 => 155,  339 => 138,  332 => 136,  319 => 135,  307 => 126,  303 => 124,  294 => 120,  283 => 114,  278 => 112,  275 => 111,  269 => 109,  267 => 108,  263 => 107,  258 => 105,  255 => 104,  250 => 103,  243 => 99,  236 => 98,  234 => 97,  227 => 93,  218 => 91,  212 => 88,  209 => 87,  191 => 86,  182 => 80,  170 => 71,  164 => 68,  158 => 65,  152 => 62,  146 => 59,  133 => 48,  127 => 47,  120 => 43,  113 => 39,  107 => 36,  103 => 34,  97 => 33,  91 => 30,  85 => 27,  81 => 26,  75 => 23,  60 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     | Klienci | Szczegóły*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     {% include 'AppBundle::alerts.html.twig' %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             <div class="panel panel-info">*/
/*                 <div class="panel-heading">*/
/*                     Dane osobowe*/
/*                     <button type="button" class="btn btn-success btn-xs pull-right" data-toggle="modal"*/
/*                             data-target="#myModal">*/
/*                         Edytuj*/
/*                     </button>*/
/*                 </div>*/
/*                 <ul class="list-group">*/
/*                     <li class="list-group-item">*/
/*                         <strong>ID użytkownika:</strong> {{ user.altId }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Imię i nazwisko:</strong> <span id="list-name">{{ user.name }}</span> <span*/
/*                                 id="list-surname">{{ user.surname }}</span>*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>E-mail:</strong> {{ user.email|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Zgoda marketingowa:</strong> {% if user.marketingAgreement %}Tak{% else %}Nie{% endif %}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Tel:</strong> {{ phone_number_format(user.tel) }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Login:</strong> {{ user.username }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Ostatnio*/
/*                             zalogowany:</strong> {{ user.lastLogin | date('d.m.Y H:i:s')|default('Niezalogowany') }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Tymczasowe*/
/*                             hasło:</strong> {% if not user.tempPwChanged %}{{ user.tempPw|default('Klient zmienił hasło') }}{% else %}Klient zmienił hasło{% endif %}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <button type="button" class="btn btn-info btn-sm btn-block user-invoice-data">*/
/*                             Dane do faktury*/
/*                             <span class="glyphicon glyphicon-triangle-bottom pull-right"*/
/*                                   style="margin-top: 2px;"></span>*/
/*                         </button>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <ul class="list-group">*/
/*                     <li class="list-group-item user-invoice-data-body hidden">*/
/*                         <strong>Nazwa firmy:</strong> {{ user.clientCompanyName|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item user-invoice-data-body hidden">*/
/*                         <strong>Adres:</strong> {{ user.clientCompanyAddress|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item user-invoice-data-body hidden">*/
/*                         <strong>Kod pocztowy:</strong> {{ user.clientCompanyPostCode|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item user-invoice-data-body hidden">*/
/*                         <strong>Miasto:</strong> {{ user.clientCompanyCity|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item user-invoice-data-body hidden">*/
/*                         <strong>NIP:</strong> {{ user.clientCompanyNIP|default('-') }}*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <div class="panel panel-info">*/
/*                 <div class="panel-heading">*/
/*                     Urządzenia i naprawy*/
/*                     <a href="{{ path('worker_panel_pokwitowanie_add_device',{'id':user.id}) }}"*/
/*                        class="btn btn-success btn-xs pull-right">*/
/*                         Dodaj nową naprawę*/
/*                     </a>*/
/*                 </div>*/
/*                 <ul class="list-group">*/
/*                     {% for device in user.devices %}*/
/*                         <li class="list-group-item" style="cursor:pointer;"*/
/*                             onclick="bigFatObject.showDeviceRepairList({{ device.id }})">*/
/*                             <span class="glyphicon glyphicon-triangle-bottom"*/
/*                                   style="margin-top: 3px; margin-right: 5px;"></span>*/
/*                             <strong>{{ device.brand }} {{ device.model }} {{ device.serial }}</strong>*/
/* */
/*                             <a class="pull-right" href="{{ path('worker_panel_device_details',{'id': device.id}) }}">*/
/*                                 Szczegóły urządzenia*/
/*                             </a>*/
/*                         </li>*/
/*                         {% if device.repairs %}*/
/*                             <div class="table-responsive {% if not loop.first %}hidden{% endif %}" style="border-top: none"*/
/*                                  id="device-repair-list-{{ device.id }}">*/
/*                                 <table class="table table-striped table-condensed" id="convertable-table"*/
/*                                        style="margin-bottom: 10px;">*/
/*                                     <tbody>*/
/*                                     {% for repair in device.repairs %}*/
/*                                         <tr>*/
/*                                             <td data-title="Data rozpoczęcia">{{ repair.startDate| date('d.m.Y') }}</td>*/
/*                                             <td data-title="Status">*/
/*                                                 {{ repair.currentStatus.name }}*/
/*                                                 {% if repair.endDate is not empty %}*/
/*                                                     ({{ repair.endDate| date('d.m.Y') }})*/
/*                                                 {% endif %}*/
/*                                             </td>*/
/*                                             <td data-title="Opis">{{ repair.description }}</td>*/
/*                                             <td data-title="Szczegóły">*/
/*                                                 <a href="{{ path('worker_panel_repair_details',{'id':repair.id}) }}">*/
/*                                                     Szczegóły naprawy*/
/*                                                 </a>*/
/*                                             </td>*/
/*                                         </tr>*/
/*                                     {% else %}*/
/*                                         <tr>*/
/*                                             <td data-title="Naprawy" colspan="4"><span>Brak napraw</span></td>*/
/*                                         </tr>*/
/*                                     {% endfor %}*/
/*                                     <tr>*/
/*                                         <td data-title="Napraw urządzenie" colspan="4" style="background-color: white">*/
/*                                             <a href="{{ path('worker_panel_pokwitowanie_add_repair', {'device': device.id}) }}" class="btn btn-success btn-xs pull-right">*/
/*                                                 Napraw to urządzenie*/
/*                                             </a>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                     </tbody>*/
/*                                 </table>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     {% else %}*/
/*                         <li class="list-group-item">Brak urządzeń</li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                         <span aria-hidden="true">&times;</span>*/
/*                     </button>*/
/*                     <h4 class="modal-title" id="myModalLabel">*/
/*                         Edycja*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     {{ form_start(formEditUser, {'attr': {'class': ''}}) }}*/
/*                     <div class="input-wrap">*/
/*                         {{ form_row(formEditUser.name, {'attr': {'class': 'input-sm'}}) }}*/
/*                         {{ form_row(formEditUser.surname, {'attr': {'class': 'input-sm'}}) }}*/
/*                         {{ form_row(formEditUser.tel, {'attr': {'class': 'input-sm'}}) }}*/
/*                         {{ form_row(formEditUser.email, {'attr': {'class': 'input-sm'}}) }}*/
/*                         {{ form_widget(formEditUser.marketing_agreement, {'attr': {'style': 'position: relative'}}) }}*/
/*                         <hr>*/
/*                         {{ form_row(formEditUser.client_company_name, {'attr': {'class': 'input-sm'}}) }}*/
/*                         {{ form_row(formEditUser.client_company_address, {'attr': {'class': 'input-sm'}}) }}*/
/*                         {{ form_row(formEditUser.client_company_post_code, {'attr': {'class': 'input-sm'}}) }}*/
/*                         {{ form_row(formEditUser.client_company_city, {'attr': {'class': 'input-sm'}}) }}*/
/*                         {{ form_row(formEditUser.client_company_NIP, {'attr': {'class': 'input-sm'}}) }}*/
/*                     </div>*/
/*                     {{ form_row(formEditUser.save, {'label': 'Zatwierdź', 'attr': {'class': 'btn btn-success btn-sm pull-right'}}) }}*/
/* */
/*                     <div class="clearfix"></div>*/
/*                     {{ form_end(formEditUser) }}*/
/*                     <hr>*/
/*                     {{ form_start(formResetPassword, {'attr': {'class': ''}}) }}*/
/*                     <div class="input-wrap">*/
/*                         <label for="tempPw">Tymczasowe hasło</label>*/
/*                         <input id="tempPw" class="input-sm form-control"*/
/*                                value="{% if not user.tempPwChanged %} {{ user.tempPw }} {% else %} Klient zmienił hasło {% endif %}"*/
/*                                disabled>*/
/*                     </div>*/
/*                     {{ form_widget(formResetPassword.reset, {'attr': {'class': 'btn btn-danger btn-sm'}}) }}*/
/*                     <div class="clearfix"></div>*/
/*                     {{ form_end(formResetPassword) }}*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Anuluj</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <script>*/
/*         var bigFatObject = {*/
/*             showDeviceRepairList: function (index) {*/
/*                 $('#device-repair-list-' + index).toggleClass('hidden')*/
/*             }*/
/*         };*/
/* */
/*         {% if not formEditUser.vars.valid %}*/
/*         $('#myModal').modal('show');*/
/*         {% endif %}*/
/* */
/*         $('.user-invoice-data').click(function () {*/
/*             $('.user-invoice-data-body').toggleClass("hidden");*/
/*         });*/
/* */
/*         $('#editUser_tel').formatter({*/
/*             'pattern': '+{\{99\}\} \{\{9999999999}\}',*/
/*             'persistent': true*/
/*         });*/
/* */
/*         $('#editUser_client_company_post_code').formatter({*/
/*             'pattern': '{\{99\}\}-\{\{999}\}'*/
/*         });*/
/* */
/*         $('#resetPasswordType_reset').click(function () {*/
/*             $("[name='resetPasswordType']").submit();*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
