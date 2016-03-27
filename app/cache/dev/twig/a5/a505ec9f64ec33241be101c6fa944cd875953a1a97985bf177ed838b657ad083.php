<?php

/* AppBundle:Worker:addDevice.html.twig */
class __TwigTemplate_bd20b021ced7d4f959663e1e5efc2766e5a1ff32082ee2d0e8009fb263470fab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Worker:addDevice.html.twig", 1);
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
        $__internal_8bd3919832c5d6dd9413a820ba7a997b2486032102d450d29121a7bef0aec62c = $this->env->getExtension("native_profiler");
        $__internal_8bd3919832c5d6dd9413a820ba7a997b2486032102d450d29121a7bef0aec62c->enter($__internal_8bd3919832c5d6dd9413a820ba7a997b2486032102d450d29121a7bef0aec62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Worker:addDevice.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bd3919832c5d6dd9413a820ba7a997b2486032102d450d29121a7bef0aec62c->leave($__internal_8bd3919832c5d6dd9413a820ba7a997b2486032102d450d29121a7bef0aec62c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3112dc238a356d7f231056cb0ba2fd6d06b7ae1304ae5ea7587319ac3f7aa6e = $this->env->getExtension("native_profiler");
        $__internal_f3112dc238a356d7f231056cb0ba2fd6d06b7ae1304ae5ea7587319ac3f7aa6e->enter($__internal_f3112dc238a356d7f231056cb0ba2fd6d06b7ae1304ae5ea7587319ac3f7aa6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    | Nowe pokwitowanie | Dodaj urządzenie
";
        
        $__internal_f3112dc238a356d7f231056cb0ba2fd6d06b7ae1304ae5ea7587319ac3f7aa6e->leave($__internal_f3112dc238a356d7f231056cb0ba2fd6d06b7ae1304ae5ea7587319ac3f7aa6e_prof);

    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_0bbcd556884929f4b517eb9b3b9496b560799e8679337de4391be2337854eb0c = $this->env->getExtension("native_profiler");
        $__internal_0bbcd556884929f4b517eb9b3b9496b560799e8679337de4391be2337854eb0c->enter($__internal_0bbcd556884929f4b517eb9b3b9496b560799e8679337de4391be2337854eb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("AppBundle::alerts.html.twig", "AppBundle:Worker:addDevice.html.twig", 9)->display($context);
        // line 10
        echo "
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    Klient
                    <div class=\"pull-right\">
                        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_user_details", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\"
                           class=\"btn btn-xs btn-success\">
                            Popraw dane klienta
                        </a>
                    </div>
                </div>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\"><strong>ID:</strong> ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "altId", array()), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item\"><strong>Imię i
                            nazwisko:</strong> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "surname", array()), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item\"><strong>Tel:</strong> ";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tel", array()))), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item\"><strong>E-mail:</strong>
                        ";
        // line 29
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\"><strong>Zgoda marketingowa:</strong>
                        ";
        // line 32
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "marketingAgreement", array())) {
            // line 33
            echo "                            Tak
                        ";
        } else {
            // line 35
            echo "                            Nie
                        ";
        }
        // line 37
        echo "                    </li>
                    <li class=\"list-group-item\">
                        <button type=\"button\" class=\"btn btn-info btn-sm btn-block user-invoice-data\">
                            Dane do faktury
                            <span class=\"glyphicon glyphicon-triangle-bottom pull-right\"
                                  style=\"margin-top: 2px;\"></span>
                        </button>
                    </li>
                    <li class=\"list-group-item hidden user-invoice-data-body\">
                        <strong>Nazwa firmy:</strong> ";
        // line 46
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyName", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item hidden user-invoice-data-body\">
                        <strong>Adres:</strong> ";
        // line 49
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyAddress", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyAddress", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item hidden user-invoice-data-body\">
                        <strong>Kod pocztowy:</strong> ";
        // line 52
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyPostCode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyPostCode", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item hidden user-invoice-data-body\">
                        <strong>Miasto:</strong> ";
        // line 55
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyCity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyCity", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item hidden user-invoice-data-body\">
                        <strong>NIP:</strong> ";
        // line 58
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyNIP", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyNIP", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">Urządzenie</div>
                <div class=\"panel-body\">
                    <form id=\"addDeviceForm\" novalidate>
                        <div class=\"form-group\">
                            <label for=\"typeSelect\">Typ urządzenia</label>
                            <select type=\"select\" id=\"typeSelect\" class=\"form-control\"
                                    name=\"typeSelect\"
                                    required=\"required\"
                                    data-error=\"Wybierz typ urządzenia.\">
                                <option disabled value=\"\" selected>Wybierz typ</option>
                                ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["deviceTypes"]) ? $context["deviceTypes"] : $this->getContext($context, "deviceTypes")));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 76
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "id", array()), "html", null, true);
            echo "\">
                                        ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "name", array()), "html", null, true);
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                            </select>
                        </div>
                        <div class=\"add-device-base-fields\">
                            <div class=\"form-group\">
                                <label for=\"brand\" class=\"required\">Marka</label>
                                <input type=\"text\" class=\"form-control input-sm\" id=\"brand\" name=\"brand\"
                                       required=\"required\"
                                       data-error=\"To pole musi składać się z 2 do 40 znaków.\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"model\" class=\"required\">Model</label>
                                <input type=\"text\" class=\"form-control input-sm\" id=\"model\" name=\"model\"
                                       required=\"required\"
                                       data-error=\"To pole musi składać się z 2 do 40 znaków.\">
                            </div>
                            <div class=\"form-group\">
                                <label for=\"serial\" class=\"required\">Numer seryjny</label>
                                <input type=\"text\" class=\"form-control input-sm\" id=\"serial\" name=\"serial\"
                                       required=\"required\"
                                       data-error=\"To pole musi składać się z 2 do 60 znaków.\">
                            </div>
                        </div>
                        <div id=\"addDeviceAdditionalFields\"></div>
                        <button type=\"submit\" class=\"btn btn-success btn-sm pull-right\">Dodaj nowe urządzenie</button>
                    </form>
                </div>
                ";
        // line 106
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "devices", array()))) {
            // line 107
            echo "                    <ul class=\"list-group\">
                        <li class=\"list-group-item\">
                            <button type=\"button\" class=\"btn btn-info btn-sm btn-block user-devices\">
                                Urządzenia klienta
                            <span class=\"glyphicon glyphicon-triangle-bottom pull-right\"
                                  style=\"margin-top: 2px;\"></span>
                            </button>
                        </li>
                        ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "devices", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
                // line 116
                echo "                            <li class=\"list-group-item user-devices-body hidden\" data-device=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "id", array()), "html", null, true);
                echo "\"
                                data-toggle=\"tooltip\" data-placement=\"right\" title=\"Wybierz\">
                                <strong>";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "brand", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "model", array()), "html", null, true);
                echo "</strong>
                                <p>
                                    <strong>Numer seryjny:</strong> ";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "serial", array()), "html", null, true);
                echo "<br>
                                    ";
                // line 121
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["device"], "customFields", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 122
                    echo "                                        <strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "customFieldTemplate", array()), "name", array()), "html", null, true);
                    echo "
                                            : </strong> ";
                    // line 123
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device_manager"]) ? $context["device_manager"] : $this->getContext($context, "device_manager")), "getCustomFieldValueName", array(0 => $context["field"]), "method"), "html", null, true);
                    echo "<br>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 125
                echo "                                </p>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                    </ul>
                ";
        }
        // line 130
        echo "            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">Naprawa</div>
                <div class=\"panel-body\">
                    <fieldset disabled>
                        <div class=\"form-group\">
                            <label for=\"fake1\" class=\"required\">Opis usterki i uwagi</label>
                            <input id=\"fake1\" class=\"form-control input-sm\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"fake2\" class=\"required\">Dodatkowo</label>
                            <input id=\"fake2\" class=\"form-control input-sm\">
                        </div>
                        <div class=\"form-group\">

                            <label for=\"fake3\" class=\"required\">Preferowana metoda płatności</label>
                            <input id=\"fake3\" class=\"form-control input-sm\">
                        </div>
                        <button type=\"button\" class=\"btn btn-sm pull-right\">Utwórz naprawę</button>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>

    <script src=\"http://ajax.microsoft.com/ajax/jquery.templates/beta1/jquery.tmpl.js\"></script>
    <script>
        var addDeviceForm = {
            additionalFieldsContainer: \$('#addDeviceAdditionalFields'),
            requiredFields: null,
            formGroups: null,
            printChoice: function (arr, id, is_required) {
                var html = '';
                var fieldName = 'customFields[' + id + ']';

                var required = '';
                if (is_required) {
                    required = ' required ';
                }

                if (arr.length > 2) {
                    html += '<select type=\"select\" class=\"form-control input-sm\" data-error=\"Dokonaj wyboru.\"' + required + ' name=\"' + fieldName + '\">';
                    \$.each(arr, function (index, elem) {
                        html += '<option value=\"' + elem.id + '\">' + elem.name + '</option>';
                    });
                    html += '</select>';
                } else if (arr.length == 2) {
                    \$.each(arr, function (index, elem) {
                        html += '<div class=\"radio\"><label>';
                        html += '<input type=\"radio\" data-error=\"Dokonaj wyboru.\" name=\"' + fieldName + '\"' + required + ' value=\"' + elem.id + '\">' + elem.name;
                        html += '</label></div>';
                    });
                } else {
                    html += '<div class=\"checkbox\"><label>';
                    html += '<input type=\"checkbox\" data-error=\"To pole jest obowiązkowe.\" name=\"' + fieldName + '\"' + required + ' value=\"' + arr[0].id + '\">' + arr[0].name;
                    html += '</label></div>';
                }

                return html;
            },
            markAsInvalid: function (field) {
                \$(field).parent().addClass('has-error');
                \$(field).parent().append(\"<span class='help-block'><span class='glyphicon glyphicon-exclamation-sign'></span> \" + \$(field).data('error') + \"</span>\");
            },
            isFieldValid: function (field) {
                var fieldType = \$(field).attr('type');

                if (fieldType == 'select') {
                    return \$(field).val();
                } else if (fieldType == 'checkbox') {
                    return \$(field).is(':checked')
                } else if (fieldType == 'radio') {
                    var isRadioValid = false;
                    \$.each(\$('[name=\"' + \$(field).attr('name') + '\"]'), function () {
                        if (\$(this).is(':checked')) {
                            isRadioValid = true;
                        }
                    });
                    return isRadioValid;
                } else if (fieldType == 'text') {
                    return \$(field).val().length > 0;
                }
            },
            removeFormErrors: function () {
                addDeviceForm.setFormGroups();
                \$.each(addDeviceForm.formGroups.prevObject, function () {
                    \$(this).removeClass('has-error');
                    \$(this).find('.help-block').remove();
                });
            },
            isFormValid: function () {
                addDeviceForm.setRequiredFields();
                var isFormValid = true;

                \$.each(addDeviceForm.requiredFields.prevObject, function () {
                    var field = \$(this);

                    if (!addDeviceForm.isFieldValid(field)) {
                        addDeviceForm.markAsInvalid(field);
                        isFormValid = false;
                    }
                });

                return isFormValid;
            },
            setRequiredFields: function () {
                addDeviceForm.requiredFields = \$('#addDeviceForm [required]').find();
            },
            setFormGroups: function () {
                addDeviceForm.formGroups = \$('#addDeviceForm .form-group').find();
            },
            templates: {
                html: '<div class=\"form-group\">' +
                '<label class=\"";
        // line 245
        echo "{{if is_required }}required{{/if}}";
        echo "\">\${name}</label>' +
                '";
        // line 246
        echo "{{if type == 1}}";
        echo "' +
                '<div class=\"form-group\">' +
                '<input type=\"text\" data-error=\"To pole nie może być puste.\" class=\"form-control input-sm\" name=\"customFields[\${id}]\" ";
        // line 248
        echo "{{if is_required }}required{{/if}}";
        echo ">' +
                '</div>' +
                '";
        // line 250
        echo "{{else}}";
        echo "' +
                '<div class=\"form-group\">' +
                '";
        // line 252
        echo "{{html addDeviceForm.printChoice(custom_field_template_values, id, is_required) }}";
        echo "' +
                '</div>' +
                '";
        // line 254
        echo "{{/if}}";
        echo "' +
                '</div>'
            }
        };

        \$(document).ready(function () {

            \$('#typeSelect').focus().change(function (e) {
                e.preventDefault();
                addDeviceForm.removeFormErrors();

                var id = \$('#typeSelect').val();
                var url = '";
        // line 266
        echo $this->env->getExtension('routing')->getPath("api_get_device_type_fieldsget_device_type_fields", array("deviceType" => "111111"));
        echo "';
                url = url.replace(\"111111\", id);

                \$.ajax({
                    type: 'GET',
                    data: id,
                    url: url,
                    success: function (data, status, xhr) {
                        if (xhr.status == 200) {
                            \$('#addDeviceAdditionalFields').html('');
                            \$.each(data, function (index, elem) {
                                \$.tmpl(addDeviceForm.templates.html, elem).appendTo(addDeviceForm.additionalFieldsContainer);
                            });
                        }
                    },
                    error: function () {
                        swal(\"Wystąpiły błędy\", null, \"error\")
                    }
                });
            });

            \$('#addDeviceForm').submit(function (e) {
                e.preventDefault();

                addDeviceForm.removeFormErrors();

                if (addDeviceForm.isFormValid()) {
                    \$.ajax({
                        type: 'POST',
                        data: \$('#addDeviceForm').serialize(),
                        url: '";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_create_devicecreate_device", array("client" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "',
                        success: function (data) {
                            var url = '";
        // line 298
        echo $this->env->getExtension('routing')->getPath("worker_panel_pokwitowanie_add_repair", array("device" => 111111));
        echo "'.replace('111111', data.id);
                            window.location.replace(url);
                        },
                        error: function () {
                            swal(\"Wystąpiły błędy\", null, \"error\")
                        }
                    });
                }
            });

            \$('.user-invoice-data').click(function () {
                \$('.user-invoice-data-body').toggleClass(\"hidden\");
            });

            \$('.user-devices').click(function () {
                \$('.user-devices-body').toggleClass(\"hidden\");
            });

            \$('.user-devices-body').click(function (e) {
                e.preventDefault();

                history.pushState({}, '| Nowe pokwitowanie | Dodaj urządzenie', '";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_pokwitowanie_add_device", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "');
                var url = '";
        // line 320
        echo $this->env->getExtension('routing')->getPath("worker_panel_pokwitowanie_add_repair", array("device" => 111111));
        echo "'.replace('111111', \$(this).data('device'));
                window.location.replace(url);
            });
            \$(function () {
                \$('[data-toggle=\"tooltip\"]').tooltip()
            })
        });
    </script>
";
        
        $__internal_0bbcd556884929f4b517eb9b3b9496b560799e8679337de4391be2337854eb0c->leave($__internal_0bbcd556884929f4b517eb9b3b9496b560799e8679337de4391be2337854eb0c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Worker:addDevice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 320,  492 => 319,  468 => 298,  463 => 296,  430 => 266,  415 => 254,  410 => 252,  405 => 250,  400 => 248,  395 => 246,  391 => 245,  274 => 130,  270 => 128,  262 => 125,  254 => 123,  249 => 122,  245 => 121,  241 => 120,  234 => 118,  228 => 116,  224 => 115,  214 => 107,  212 => 106,  184 => 80,  175 => 77,  170 => 76,  166 => 75,  146 => 58,  140 => 55,  134 => 52,  128 => 49,  122 => 46,  111 => 37,  107 => 35,  103 => 33,  101 => 32,  95 => 29,  90 => 27,  84 => 26,  79 => 24,  69 => 17,  60 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     | Nowe pokwitowanie | Dodaj urządzenie*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     {% include 'AppBundle::alerts.html.twig' %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-4">*/
/*             <div class="panel panel-info">*/
/*                 <div class="panel-heading">*/
/*                     Klient*/
/*                     <div class="pull-right">*/
/*                         <a href="{{ path('worker_panel_user_details',{'id': user.id}) }}"*/
/*                            class="btn btn-xs btn-success">*/
/*                             Popraw dane klienta*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <ul class="list-group">*/
/*                     <li class="list-group-item"><strong>ID:</strong> {{ user.altId }}</li>*/
/*                     <li class="list-group-item"><strong>Imię i*/
/*                             nazwisko:</strong> {{ user.name }} {{ user.surname }}</li>*/
/*                     <li class="list-group-item"><strong>Tel:</strong> {{ phone_number_format(user.tel) }}</li>*/
/*                     <li class="list-group-item"><strong>E-mail:</strong>*/
/*                         {{ user.email|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item"><strong>Zgoda marketingowa:</strong>*/
/*                         {% if user.marketingAgreement %}*/
/*                             Tak*/
/*                         {% else %}*/
/*                             Nie*/
/*                         {% endif %}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <button type="button" class="btn btn-info btn-sm btn-block user-invoice-data">*/
/*                             Dane do faktury*/
/*                             <span class="glyphicon glyphicon-triangle-bottom pull-right"*/
/*                                   style="margin-top: 2px;"></span>*/
/*                         </button>*/
/*                     </li>*/
/*                     <li class="list-group-item hidden user-invoice-data-body">*/
/*                         <strong>Nazwa firmy:</strong> {{ user.clientCompanyName|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item hidden user-invoice-data-body">*/
/*                         <strong>Adres:</strong> {{ user.clientCompanyAddress|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item hidden user-invoice-data-body">*/
/*                         <strong>Kod pocztowy:</strong> {{ user.clientCompanyPostCode|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item hidden user-invoice-data-body">*/
/*                         <strong>Miasto:</strong> {{ user.clientCompanyCity|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item hidden user-invoice-data-body">*/
/*                         <strong>NIP:</strong> {{ user.clientCompanyNIP|default('-') }}*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             <div class="panel panel-info">*/
/*                 <div class="panel-heading">Urządzenie</div>*/
/*                 <div class="panel-body">*/
/*                     <form id="addDeviceForm" novalidate>*/
/*                         <div class="form-group">*/
/*                             <label for="typeSelect">Typ urządzenia</label>*/
/*                             <select type="select" id="typeSelect" class="form-control"*/
/*                                     name="typeSelect"*/
/*                                     required="required"*/
/*                                     data-error="Wybierz typ urządzenia.">*/
/*                                 <option disabled value="" selected>Wybierz typ</option>*/
/*                                 {% for choice in deviceTypes %}*/
/*                                     <option value="{{ choice.id }}">*/
/*                                         {{ choice.name }}*/
/*                                     </option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                         <div class="add-device-base-fields">*/
/*                             <div class="form-group">*/
/*                                 <label for="brand" class="required">Marka</label>*/
/*                                 <input type="text" class="form-control input-sm" id="brand" name="brand"*/
/*                                        required="required"*/
/*                                        data-error="To pole musi składać się z 2 do 40 znaków.">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="model" class="required">Model</label>*/
/*                                 <input type="text" class="form-control input-sm" id="model" name="model"*/
/*                                        required="required"*/
/*                                        data-error="To pole musi składać się z 2 do 40 znaków.">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="serial" class="required">Numer seryjny</label>*/
/*                                 <input type="text" class="form-control input-sm" id="serial" name="serial"*/
/*                                        required="required"*/
/*                                        data-error="To pole musi składać się z 2 do 60 znaków.">*/
/*                             </div>*/
/*                         </div>*/
/*                         <div id="addDeviceAdditionalFields"></div>*/
/*                         <button type="submit" class="btn btn-success btn-sm pull-right">Dodaj nowe urządzenie</button>*/
/*                     </form>*/
/*                 </div>*/
/*                 {% if user.devices is not empty %}*/
/*                     <ul class="list-group">*/
/*                         <li class="list-group-item">*/
/*                             <button type="button" class="btn btn-info btn-sm btn-block user-devices">*/
/*                                 Urządzenia klienta*/
/*                             <span class="glyphicon glyphicon-triangle-bottom pull-right"*/
/*                                   style="margin-top: 2px;"></span>*/
/*                             </button>*/
/*                         </li>*/
/*                         {% for device in user.devices %}*/
/*                             <li class="list-group-item user-devices-body hidden" data-device="{{ device.id }}"*/
/*                                 data-toggle="tooltip" data-placement="right" title="Wybierz">*/
/*                                 <strong>{{ device.brand }} {{ device.model }}</strong>*/
/*                                 <p>*/
/*                                     <strong>Numer seryjny:</strong> {{ device.serial }}<br>*/
/*                                     {% for field in device.customFields %}*/
/*                                         <strong>{{ field.customFieldTemplate.name }}*/
/*                                             : </strong> {{ device_manager.getCustomFieldValueName(field) }}<br>*/
/*                                     {% endfor %}*/
/*                                 </p>*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading">Naprawa</div>*/
/*                 <div class="panel-body">*/
/*                     <fieldset disabled>*/
/*                         <div class="form-group">*/
/*                             <label for="fake1" class="required">Opis usterki i uwagi</label>*/
/*                             <input id="fake1" class="form-control input-sm">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="fake2" class="required">Dodatkowo</label>*/
/*                             <input id="fake2" class="form-control input-sm">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/* */
/*                             <label for="fake3" class="required">Preferowana metoda płatności</label>*/
/*                             <input id="fake3" class="form-control input-sm">*/
/*                         </div>*/
/*                         <button type="button" class="btn btn-sm pull-right">Utwórz naprawę</button>*/
/*                     </fieldset>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <script src="http://ajax.microsoft.com/ajax/jquery.templates/beta1/jquery.tmpl.js"></script>*/
/*     <script>*/
/*         var addDeviceForm = {*/
/*             additionalFieldsContainer: $('#addDeviceAdditionalFields'),*/
/*             requiredFields: null,*/
/*             formGroups: null,*/
/*             printChoice: function (arr, id, is_required) {*/
/*                 var html = '';*/
/*                 var fieldName = 'customFields[' + id + ']';*/
/* */
/*                 var required = '';*/
/*                 if (is_required) {*/
/*                     required = ' required ';*/
/*                 }*/
/* */
/*                 if (arr.length > 2) {*/
/*                     html += '<select type="select" class="form-control input-sm" data-error="Dokonaj wyboru."' + required + ' name="' + fieldName + '">';*/
/*                     $.each(arr, function (index, elem) {*/
/*                         html += '<option value="' + elem.id + '">' + elem.name + '</option>';*/
/*                     });*/
/*                     html += '</select>';*/
/*                 } else if (arr.length == 2) {*/
/*                     $.each(arr, function (index, elem) {*/
/*                         html += '<div class="radio"><label>';*/
/*                         html += '<input type="radio" data-error="Dokonaj wyboru." name="' + fieldName + '"' + required + ' value="' + elem.id + '">' + elem.name;*/
/*                         html += '</label></div>';*/
/*                     });*/
/*                 } else {*/
/*                     html += '<div class="checkbox"><label>';*/
/*                     html += '<input type="checkbox" data-error="To pole jest obowiązkowe." name="' + fieldName + '"' + required + ' value="' + arr[0].id + '">' + arr[0].name;*/
/*                     html += '</label></div>';*/
/*                 }*/
/* */
/*                 return html;*/
/*             },*/
/*             markAsInvalid: function (field) {*/
/*                 $(field).parent().addClass('has-error');*/
/*                 $(field).parent().append("<span class='help-block'><span class='glyphicon glyphicon-exclamation-sign'></span> " + $(field).data('error') + "</span>");*/
/*             },*/
/*             isFieldValid: function (field) {*/
/*                 var fieldType = $(field).attr('type');*/
/* */
/*                 if (fieldType == 'select') {*/
/*                     return $(field).val();*/
/*                 } else if (fieldType == 'checkbox') {*/
/*                     return $(field).is(':checked')*/
/*                 } else if (fieldType == 'radio') {*/
/*                     var isRadioValid = false;*/
/*                     $.each($('[name="' + $(field).attr('name') + '"]'), function () {*/
/*                         if ($(this).is(':checked')) {*/
/*                             isRadioValid = true;*/
/*                         }*/
/*                     });*/
/*                     return isRadioValid;*/
/*                 } else if (fieldType == 'text') {*/
/*                     return $(field).val().length > 0;*/
/*                 }*/
/*             },*/
/*             removeFormErrors: function () {*/
/*                 addDeviceForm.setFormGroups();*/
/*                 $.each(addDeviceForm.formGroups.prevObject, function () {*/
/*                     $(this).removeClass('has-error');*/
/*                     $(this).find('.help-block').remove();*/
/*                 });*/
/*             },*/
/*             isFormValid: function () {*/
/*                 addDeviceForm.setRequiredFields();*/
/*                 var isFormValid = true;*/
/* */
/*                 $.each(addDeviceForm.requiredFields.prevObject, function () {*/
/*                     var field = $(this);*/
/* */
/*                     if (!addDeviceForm.isFieldValid(field)) {*/
/*                         addDeviceForm.markAsInvalid(field);*/
/*                         isFormValid = false;*/
/*                     }*/
/*                 });*/
/* */
/*                 return isFormValid;*/
/*             },*/
/*             setRequiredFields: function () {*/
/*                 addDeviceForm.requiredFields = $('#addDeviceForm [required]').find();*/
/*             },*/
/*             setFormGroups: function () {*/
/*                 addDeviceForm.formGroups = $('#addDeviceForm .form-group').find();*/
/*             },*/
/*             templates: {*/
/*                 html: '<div class="form-group">' +*/
/*                 '<label class="{{ '{{if is_required }}required{{/if}}' }}">${name}</label>' +*/
/*                 '{{ '{{if type == 1}}' }}' +*/
/*                 '<div class="form-group">' +*/
/*                 '<input type="text" data-error="To pole nie może być puste." class="form-control input-sm" name="customFields[${id}]" {{ '{{if is_required }}required{{/if}}' }}>' +*/
/*                 '</div>' +*/
/*                 '{{ '{{else}}' }}' +*/
/*                 '<div class="form-group">' +*/
/*                 '{{ '{{html addDeviceForm.printChoice(custom_field_template_values, id, is_required) }}' }}' +*/
/*                 '</div>' +*/
/*                 '{{ '{{/if}}' }}' +*/
/*                 '</div>'*/
/*             }*/
/*         };*/
/* */
/*         $(document).ready(function () {*/
/* */
/*             $('#typeSelect').focus().change(function (e) {*/
/*                 e.preventDefault();*/
/*                 addDeviceForm.removeFormErrors();*/
/* */
/*                 var id = $('#typeSelect').val();*/
/*                 var url = '{{ path("api_get_device_type_fieldsget_device_type_fields", {'deviceType': '111111'}) }}';*/
/*                 url = url.replace("111111", id);*/
/* */
/*                 $.ajax({*/
/*                     type: 'GET',*/
/*                     data: id,*/
/*                     url: url,*/
/*                     success: function (data, status, xhr) {*/
/*                         if (xhr.status == 200) {*/
/*                             $('#addDeviceAdditionalFields').html('');*/
/*                             $.each(data, function (index, elem) {*/
/*                                 $.tmpl(addDeviceForm.templates.html, elem).appendTo(addDeviceForm.additionalFieldsContainer);*/
/*                             });*/
/*                         }*/
/*                     },*/
/*                     error: function () {*/
/*                         swal("Wystąpiły błędy", null, "error")*/
/*                     }*/
/*                 });*/
/*             });*/
/* */
/*             $('#addDeviceForm').submit(function (e) {*/
/*                 e.preventDefault();*/
/* */
/*                 addDeviceForm.removeFormErrors();*/
/* */
/*                 if (addDeviceForm.isFormValid()) {*/
/*                     $.ajax({*/
/*                         type: 'POST',*/
/*                         data: $('#addDeviceForm').serialize(),*/
/*                         url: '{{ path('api_create_devicecreate_device', {'client': user.id}) }}',*/
/*                         success: function (data) {*/
/*                             var url = '{{ path('worker_panel_pokwitowanie_add_repair', {device: 111111}) }}'.replace('111111', data.id);*/
/*                             window.location.replace(url);*/
/*                         },*/
/*                         error: function () {*/
/*                             swal("Wystąpiły błędy", null, "error")*/
/*                         }*/
/*                     });*/
/*                 }*/
/*             });*/
/* */
/*             $('.user-invoice-data').click(function () {*/
/*                 $('.user-invoice-data-body').toggleClass("hidden");*/
/*             });*/
/* */
/*             $('.user-devices').click(function () {*/
/*                 $('.user-devices-body').toggleClass("hidden");*/
/*             });*/
/* */
/*             $('.user-devices-body').click(function (e) {*/
/*                 e.preventDefault();*/
/* */
/*                 history.pushState({}, '| Nowe pokwitowanie | Dodaj urządzenie', '{{ path('worker_panel_pokwitowanie_add_device', {id: user.id}) }}');*/
/*                 var url = '{{ path('worker_panel_pokwitowanie_add_repair', {device: 111111}) }}'.replace('111111', $(this).data('device'));*/
/*                 window.location.replace(url);*/
/*             });*/
/*             $(function () {*/
/*                 $('[data-toggle="tooltip"]').tooltip()*/
/*             })*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
