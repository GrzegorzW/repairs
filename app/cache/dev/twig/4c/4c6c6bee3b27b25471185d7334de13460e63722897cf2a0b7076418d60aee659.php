<?php

/* AppBundle:Worker:workerOrders.html.twig */
class __TwigTemplate_c3f6a4d0512c1d344650705336dd98227157ac94be041ed5d6d5f64a44a9108a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Worker:workerOrders.html.twig", 1);
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
        $__internal_0301f9df65b64267925dfac05ccbeeec9616b8da72cca0710f199b9b8c818c94 = $this->env->getExtension("native_profiler");
        $__internal_0301f9df65b64267925dfac05ccbeeec9616b8da72cca0710f199b9b8c818c94->enter($__internal_0301f9df65b64267925dfac05ccbeeec9616b8da72cca0710f199b9b8c818c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Worker:workerOrders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0301f9df65b64267925dfac05ccbeeec9616b8da72cca0710f199b9b8c818c94->leave($__internal_0301f9df65b64267925dfac05ccbeeec9616b8da72cca0710f199b9b8c818c94_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bad35f9282e5687ebad6c15753b23ed1bed4ced80440e435470c22afb18ce169 = $this->env->getExtension("native_profiler");
        $__internal_bad35f9282e5687ebad6c15753b23ed1bed4ced80440e435470c22afb18ce169->enter($__internal_bad35f9282e5687ebad6c15753b23ed1bed4ced80440e435470c22afb18ce169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Zamówienia
";
        
        $__internal_bad35f9282e5687ebad6c15753b23ed1bed4ced80440e435470c22afb18ce169->leave($__internal_bad35f9282e5687ebad6c15753b23ed1bed4ced80440e435470c22afb18ce169_prof);

    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_136abb8369d7a4317bd9e0f6dd74993a7b4f8af4e74f71424646b11df31fc58f = $this->env->getExtension("native_profiler");
        $__internal_136abb8369d7a4317bd9e0f6dd74993a7b4f8af4e74f71424646b11df31fc58f->enter($__internal_136abb8369d7a4317bd9e0f6dd74993a7b4f8af4e74f71424646b11df31fc58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("AppBundle::alerts.html.twig", "AppBundle:Worker:workerOrders.html.twig", 9)->display($context);
        // line 10
        echo "
    <div class=\"row\" style=\"margin-bottom: 15px;\">
        <div class=\"col-md-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading add-worker-order-header\" style=\"cursor: pointer;\">
                    <h3 class=\"panel-title\"><span class=\"glyphicon glyphicon-plus\"></span> Dodaj wpis</h3>
                </div>
                <div class=\"panel-body add-worker-order-body ";
        // line 17
        if ($this->getAttribute($this->getAttribute((isset($context["formOrder"]) ? $context["formOrder"] : $this->getContext($context, "formOrder")), "vars", array()), "valid", array())) {
            echo "hidden";
        }
        echo "\">
                    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formOrder"]) ? $context["formOrder"] : $this->getContext($context, "formOrder")), 'form_start');
        echo "
                    <div class=\"form-group\">
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOrder"]) ? $context["formOrder"] : $this->getContext($context, "formOrder")), "description", array()), 'row', array("label" => "Opis"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOrder"]) ? $context["formOrder"] : $this->getContext($context, "formOrder")), "href", array()), 'row', array("label" => "Link"));
        echo "
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" value=\"Dodaj\"
                               class=\"btn btn-success btn-sm pull-right\"/>
                    </div>
                    ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formOrder"]) ? $context["formOrder"] : $this->getContext($context, "formOrder")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>

    <div style=\"margin-bottom: 15px;\">
        ";
        // line 36
        $this->loadTemplate("AppBundle:PaginationLimit:paginationLimit.html.twig", "AppBundle:Worker:workerOrders.html.twig", 36)->display($context);
        // line 37
        echo "    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-striped table-bordered\" id=\"convertable-table\">
            <thead>
            <tr>
                <th>
                    ";
        // line 44
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "ID", "wo.id");
        echo "
                </th>
                <th>
                    ";
        // line 47
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Opis", "wo.description");
        echo "
                </th>
                <th>
                    ";
        // line 50
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Link", "wo.href");
        echo "
                </th>
                <th>
                    ";
        // line 53
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Utworzono", "wo.created");
        echo "
                </th>
                <th>
                    ";
        // line 56
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Autor", "user.name");
        echo "
                </th>
                <th style=\"min-width: 140px\">
                    ";
        // line 59
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Status", "status.name");
        echo "
                </th>
                <th>Edytuj</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 66
            echo "                <tr data-row=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
            echo "\" class=\"workerOrderRow\">
                    <td data-title=\"ID\">
                        ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
            echo "
                    </td>
                    <td data-title=\"Opis\"
                        data-description-";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "description", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "description", array()), "html", null, true);
            echo "</td>
                    <td data-title=\"Link\" data-href-";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "href", array()), "html", null, true);
            echo "\">
                        ";
            // line 73
            if ( !twig_test_empty($this->getAttribute($context["entry"], "href", array()))) {
                // line 74
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "href", array()), "html", null, true);
                echo "\" target=\"_blank\"
                           title=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "href", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, _twig_default_filter(twig_slice($this->env, $this->getAttribute($context["entry"], "href", array()), 0, 40), "-"), "html", null, true);
                if ((twig_length_filter($this->env, $this->getAttribute($context["entry"], "href", array())) > 40)) {
                    echo "...";
                }
                echo "</a>
                        ";
            } else {
                // line 77
                echo "                        -
                        ";
            }
            // line 79
            echo "                    </td>
                    <td data-title=\"Utworzono\" data-created-";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "created", array()), "d.m.Y H:i:s"), "html", null, true);
            echo "\">
                        ";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "created", array()), "d.m.Y H:i:s"), "html", null, true);
            echo "
                    </td>
                    <td data-title-=\"Autor\" data-author-";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "author", array()), "username", array()), "html", null, true);
            echo "\">
                        ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "author", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "author", array()), "surname", array()), "html", null, true);
            echo "
                    </td>
                    <td data-title=\"Status\" data-status=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
            echo "\">
                        <label class=\"control-label sr-only\" for=\"orderStatus\">Status</label>
                        <select class=\"form-control workerOrderStatus\" id=\"orderStatus\" data-id=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
            echo "\">
                            ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) ? $context["statuses"] : $this->getContext($context, "statuses")));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 90
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "id", array()), "html", null, true);
                echo "\"
                                        ";
                // line 91
                if (($this->getAttribute($this->getAttribute($context["entry"], "status", array()), "id", array()) == $this->getAttribute($context["status"], "id", array()))) {
                    // line 92
                    echo "                                            selected
                                        ";
                }
                // line 94
                echo "                                >
                                    ";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "name", array()), "html", null, true);
                echo "
                                </option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                        </select>
                    </td>
                    <td>
                        <button type=\"button\" data-id=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success edit-order-button\">
                            Edytuj
                        </button>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 107
            echo "                <tr>
                    <td colspan=\"7\" data-title=\"Zamówienia\">Brak rekordów do wyświetlenia.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "            </tbody>
        </table>
    </div>

    <div class=\"navigation text-center\">
        ";
        // line 116
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
    </div>
    <small class=\"help-block text-center\">
        Liczba wyników: ";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
    </small>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Edycja</h4>
                </div>
                <div class=\"modal-body\">
                    <form id=\"editWorkerOrderForm\">
                        <div class=\"form-group\">
                            <label for=\"modalOrderDescription\">Opis*</label>
                            <textarea class=\"form-control\" required=\"required\" type=\"text\" name=\"modalOrderDescription\"
                                      id=\"modalOrderDescription\"
                                      rows=\"5\"></textarea>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"modalOrderHref\">Link</label>
                            <input class=\"form-control\" type=\"text\" name=\"modalOrderHref\" id=\"modalOrderHref\"/>
                        </div>
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                        <button type=\"button\" id=\"deleteWorkerOrder\" class=\"btn btn-danger\" data-dismiss=\"modal\">
                            Usuń
                        </button>
                        <input type=\"submit\" class=\"btn btn-success pull-right\" value=\"Zatwierdź\"/>
                    </form>

                    <hr>

                    <div id=\"modalOrderHistory\" class=\"modal-order-history\">
                        <div class=\"table-responsive\" style=\"padding-top: 0\">
                            <table class=\"table table-bordered table-hover\" id=\"convertable-table\">
                                <thead>
                                <tr>
                                    <th>
                                        Akcja
                                    </th>
                                    <th>
                                        Opis
                                    </th>
                                    <th>
                                        Dane
                                    </th>
                                    <th>
                                        Autor
                                    </th>
                                </tr>
                                </thead>
                                <tbody id=\"modalOrderHistoryRows\">
                                </tbody>
                            </table>
                        </div>
                        <div class=\"text-center hide-order-history\" style=\"cursor: pointer;\">
                            <h5 class=\"text-muted\"><span class=\"glyphicon glyphicon-triangle-top\"><br/>Historia</span>
                            </h5>
                        </div>
                    </div>
                    <div class=\"text-center show-order-history\" style=\"cursor: pointer;\">
                        <h5 class=\"text-muted\">Historia<br/><span class=\"glyphicon glyphicon-triangle-bottom\"></span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src=\"http://ajax.microsoft.com/ajax/jquery.templates/beta1/jquery.tmpl.js\"></script>
    <script>
        \$('.add-worker-order-header').click(function () {
            \$('.add-worker-order-body').toggleClass('hidden');
        });

        \$('.edit-order-button').click(function () {

            var id = \$(this).data('id');
            var orderDescription = \$('[data-description-' + id + ']').text().trim();
            var orderHref = \$('[data-href-' + id + ']').attr('data-href-' + id + '');

            \$('#deleteWorkerOrder').data('data-id', id);

            \$('.show-order-history').data('id', id).show();
            \$('#modalOrderDescription').text(orderDescription);
            \$('#modalOrderHref').val(orderHref);

            \$('.modal-order-history').hide();
            \$('#myModal').modal();

            \$('#editWorkerOrderForm').unbind('submit');
            \$('#editWorkerOrderForm').bind('submit', function (e) {
                e.preventDefault();

                var url = \"";
        // line 214
        echo $this->env->getExtension('routing')->getPath("api_update_worker_order_contentupdate_worker_order_content", array("workerOrder" => 44444));
        echo "\";
                url = url.replace(\"44444\", id);

                \$.ajax({
                    type: 'PATCH',
                    data: \$('#editWorkerOrderForm').serialize(),
                    url: url,
                    success: function (data, status, xhr) {
                        if (xhr.status == 204) {
                            swal(\"Treść zamówienia zmieniona\", null, \"success\");

                            description = \$('#modalOrderDescription').val();
                            href = \$('#modalOrderHref').val();

                            \$('[data-description-' + id + ']').text(description).attr(\"data-description-\" + id, description);
                            if (href.length) {
                                \$('[data-href-' + id + ']').html('<a href=\"' + href + '\" target=\"_blank\" title=\"' + href + '\">' + href + '</a>').attr(\"data-href-\" + id, href);
                            } else {
                                \$('[data-href-' + id + ']').text('-').attr(\"data-href-\" + id, href);
                            }

                            \$('#myModal').modal('hide')
                        }
                    },
                    error: function () {
                        swal(\"Błąd\", null, \"error\")
                    }
                });
            });
        });

        \$('.show-order-history').click(function () {

            id = \$('.show-order-history').data('id');

            var url = \"";
        // line 249
        echo $this->env->getExtension('routing')->getPath("api_get_worker_order_historyget_worker_order", array("id" => 12345));
        echo "\";
            url = url.replace(\"12345\", id);

            \$.ajax({
                type: 'GET',
                data: {
                    id: id
                },
                url: url,
                success: function (data, status, xhr) {
                    if (xhr.status == 200) {

                        var changelog = JSON.parse(data);

                        appendRows(changelog);

                        \$('.modal-order-history').slideDown();
                        \$('.show-order-history').hide();
                    }
                },
                error: function () {
                    swal(\"Błąd\", null, \"error\")
                }
            });
        });

        \$('.hide-order-history').click(function () {
            \$('.modal-order-history').slideUp();
            \$('.show-order-history').show();
        });

        function appendRows(data) {

            var apiData = data;

            \$('#modalOrderHistoryRows').html('');
            markup = '<tr>' +
                    '<td data-title=\"Akcja\">' +
                    '\\{\\{if action == \"update\" \\}\\}Zmieniono\\{\\{/if\\}\\}' +
                    '\\{\\{if action == \"create\" \\}\\}Utworzono\\{\\{/if\\}\\}' +
                    '\\{\\{if action == \"remove\" \\}\\}Usunuięto\\{\\{/if\\}\\}' +
                    '</td>' +
                    '<td data-title=\"Opis\">' +
                    '\\{\\{if data.description \\}\\}<strong>Opis:</strong> \${data.description} <br />\\{\\{/if\\}\\}' +
                    '\\{\\{if data.href \\}\\}<strong>Link:</strong> <a href=\"\${data.href}\" target=\"_blank\">\${data.href}</a> <br />\\{\\{/if\\}\\}' +
                    '\\{\\{if data.status \\}\\}<strong>Status:</strong> \${data.status.id.name} <br />\\{\\{/if\\}\\}' +
                    '</td>' +
                    '<td data-title=\"Data\">\${logged_at}</td>' +
                    '<td data-title=\"Autor\">\${username}</td>' +
                    '</tr>';

            \$.tmpl(markup, apiData).appendTo(\"#modalOrderHistoryRows\");
        }

        \$('.workerOrderStatus').change(function () {

            var workerOrder = \$(this).data('id');
            var workerOrderStatus = \$(this).val();
            var url = \"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_set_worker_order_statusset_worker_order_status", array("workerOrder" => 44444, "workerOrderStatus" => 66666)), "html", null, true);
        echo "\";
            url = url.replace(\"44444\", workerOrder).replace(\"66666\", workerOrderStatus);

            \$.ajax({
                type: 'PATCH',
                data: {
                    order: workerOrder,
                    status: workerOrderStatus
                },
                url: url,
                success: function (data, status, xhr) {
                    if (xhr.status == 204) {
                        swal(\"Status zmieniony\", null, \"success\");
                    }
                },
                error: function () {
                    swal(\"Błąd\", null, \"error\")
                }
            });
        });

        \$('#deleteWorkerOrder').click(function () {

            id = \$(this).data('data-id');
            var url = \"";
        // line 331
        echo $this->env->getExtension('routing')->getPath("api_remove_worker_orderremove_worker_order", array("id" => 12345));
        echo "\";
            url = url.replace(\"12345\", id);

            \$.ajax({
                type: 'DELETE',
                url: url,
                success: function (data, status, xhr) {
                    if (xhr.status == 204) {
                        swal(\"Usunięto wpis\", null, \"error\");
                        \$(\"tr[data-row='\" + id + \"']\").remove();

                        if (\$('tr.workerOrderRow').length == 0) {
                            \$('#convertable-table > tbody:last-child').append(\"<tr>\" +
                                    \"<td colspan='7' id='noWorkerOrders' data-title='Zamówienia'>Brak rekordów do wyświetlenia.</td>\" +
                                    \"</tr>\");
                        }
                    }
                },
                error: function () {
                    swal(\"Błąd\", null, \"warning\");
                }
            });
        });
    </script>

";
        
        $__internal_136abb8369d7a4317bd9e0f6dd74993a7b4f8af4e74f71424646b11df31fc58f->leave($__internal_136abb8369d7a4317bd9e0f6dd74993a7b4f8af4e74f71424646b11df31fc58f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Worker:workerOrders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  532 => 331,  505 => 307,  444 => 249,  406 => 214,  308 => 119,  302 => 116,  295 => 111,  286 => 107,  275 => 101,  270 => 98,  261 => 95,  258 => 94,  254 => 92,  252 => 91,  247 => 90,  243 => 89,  239 => 88,  234 => 86,  227 => 84,  221 => 83,  216 => 81,  210 => 80,  207 => 79,  203 => 77,  193 => 75,  188 => 74,  186 => 73,  180 => 72,  172 => 71,  166 => 68,  160 => 66,  155 => 65,  146 => 59,  140 => 56,  134 => 53,  128 => 50,  122 => 47,  116 => 44,  107 => 37,  105 => 36,  95 => 29,  86 => 23,  80 => 20,  75 => 18,  69 => 17,  60 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Zamówienia*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     {% include 'AppBundle::alerts.html.twig' %}*/
/* */
/*     <div class="row" style="margin-bottom: 15px;">*/
/*         <div class="col-md-6">*/
/*             <div class="panel panel-default">*/
/*                 <div class="panel-heading add-worker-order-header" style="cursor: pointer;">*/
/*                     <h3 class="panel-title"><span class="glyphicon glyphicon-plus"></span> Dodaj wpis</h3>*/
/*                 </div>*/
/*                 <div class="panel-body add-worker-order-body {% if formOrder.vars.valid %}hidden{% endif %}">*/
/*                     {{ form_start(formOrder) }}*/
/*                     <div class="form-group">*/
/*                         {{ form_row(formOrder.description, {'label': 'Opis'}) }}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         {{ form_row(formOrder.href, {'label': 'Link'}) }}*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <input type="submit" value="Dodaj"*/
/*                                class="btn btn-success btn-sm pull-right"/>*/
/*                     </div>*/
/*                     {{ form_end(formOrder) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div style="margin-bottom: 15px;">*/
/*         {% include 'AppBundle:PaginationLimit:paginationLimit.html.twig' %}*/
/*     </div>*/
/* */
/*     <div class="table-responsive">*/
/*         <table class="table table-striped table-bordered" id="convertable-table">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>*/
/*                     {{ knp_pagination_sortable(pagination, 'ID', 'wo.id') }}*/
/*                 </th>*/
/*                 <th>*/
/*                     {{ knp_pagination_sortable(pagination, 'Opis', 'wo.description') }}*/
/*                 </th>*/
/*                 <th>*/
/*                     {{ knp_pagination_sortable(pagination, 'Link', 'wo.href') }}*/
/*                 </th>*/
/*                 <th>*/
/*                     {{ knp_pagination_sortable(pagination, 'Utworzono', 'wo.created') }}*/
/*                 </th>*/
/*                 <th>*/
/*                     {{ knp_pagination_sortable(pagination, 'Autor', 'user.name') }}*/
/*                 </th>*/
/*                 <th style="min-width: 140px">*/
/*                     {{ knp_pagination_sortable(pagination, 'Status', 'status.name') }}*/
/*                 </th>*/
/*                 <th>Edytuj</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for entry in pagination %}*/
/*                 <tr data-row="{{ entry.id }}" class="workerOrderRow">*/
/*                     <td data-title="ID">*/
/*                         {{ entry.id }}*/
/*                     </td>*/
/*                     <td data-title="Opis"*/
/*                         data-description-{{ entry.id }}="{{ entry.description }}">{{ entry.description }}</td>*/
/*                     <td data-title="Link" data-href-{{ entry.id }}="{{ entry.href }}">*/
/*                         {% if entry.href is not empty %}*/
/*                         <a href="{{ entry.href }}" target="_blank"*/
/*                            title="{{ entry.href }}">{{ entry.href[:40]|default('-') }}{% if entry.href|length > 40 %}...{% endif %}</a>*/
/*                         {% else %}*/
/*                         -*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td data-title="Utworzono" data-created-{{ entry.id }}="{{ entry.created | date('d.m.Y H:i:s') }}">*/
/*                         {{ entry.created | date('d.m.Y H:i:s') }}*/
/*                     </td>*/
/*                     <td data-title-="Autor" data-author-{{ entry.id }}="{{ entry.author.username }}">*/
/*                         {{ entry.author.name }} {{ entry.author.surname }}*/
/*                     </td>*/
/*                     <td data-title="Status" data-status="{{ entry.id }}">*/
/*                         <label class="control-label sr-only" for="orderStatus">Status</label>*/
/*                         <select class="form-control workerOrderStatus" id="orderStatus" data-id="{{ entry.id }}">*/
/*                             {% for status in statuses %}*/
/*                                 <option value="{{ status.id }}"*/
/*                                         {% if entry.status.id == status.id %}*/
/*                                             selected*/
/*                                         {% endif %}*/
/*                                 >*/
/*                                     {{ status.name }}*/
/*                                 </option>*/
/*                             {% endfor %}*/
/*                         </select>*/
/*                     </td>*/
/*                     <td>*/
/*                         <button type="button" data-id="{{ entry.id }}" class="btn btn-xs btn-success edit-order-button">*/
/*                             Edytuj*/
/*                         </button>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% else %}*/
/*                 <tr>*/
/*                     <td colspan="7" data-title="Zamówienia">Brak rekordów do wyświetlenia.</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/*     <div class="navigation text-center">*/
/*         {{ knp_pagination_render(pagination) }}*/
/*     </div>*/
/*     <small class="help-block text-center">*/
/*         Liczba wyników: {{ pagination.getTotalItemCount }}*/
/*     </small>*/
/* */
/*     <!-- Modal -->*/
/*     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span*/
/*                                 aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel">Edycja</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <form id="editWorkerOrderForm">*/
/*                         <div class="form-group">*/
/*                             <label for="modalOrderDescription">Opis*</label>*/
/*                             <textarea class="form-control" required="required" type="text" name="modalOrderDescription"*/
/*                                       id="modalOrderDescription"*/
/*                                       rows="5"></textarea>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="modalOrderHref">Link</label>*/
/*                             <input class="form-control" type="text" name="modalOrderHref" id="modalOrderHref"/>*/
/*                         </div>*/
/*                         <button type="button" class="btn btn-default" data-dismiss="modal">Anuluj</button>*/
/*                         <button type="button" id="deleteWorkerOrder" class="btn btn-danger" data-dismiss="modal">*/
/*                             Usuń*/
/*                         </button>*/
/*                         <input type="submit" class="btn btn-success pull-right" value="Zatwierdź"/>*/
/*                     </form>*/
/* */
/*                     <hr>*/
/* */
/*                     <div id="modalOrderHistory" class="modal-order-history">*/
/*                         <div class="table-responsive" style="padding-top: 0">*/
/*                             <table class="table table-bordered table-hover" id="convertable-table">*/
/*                                 <thead>*/
/*                                 <tr>*/
/*                                     <th>*/
/*                                         Akcja*/
/*                                     </th>*/
/*                                     <th>*/
/*                                         Opis*/
/*                                     </th>*/
/*                                     <th>*/
/*                                         Dane*/
/*                                     </th>*/
/*                                     <th>*/
/*                                         Autor*/
/*                                     </th>*/
/*                                 </tr>*/
/*                                 </thead>*/
/*                                 <tbody id="modalOrderHistoryRows">*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                         <div class="text-center hide-order-history" style="cursor: pointer;">*/
/*                             <h5 class="text-muted"><span class="glyphicon glyphicon-triangle-top"><br/>Historia</span>*/
/*                             </h5>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="text-center show-order-history" style="cursor: pointer;">*/
/*                         <h5 class="text-muted">Historia<br/><span class="glyphicon glyphicon-triangle-bottom"></span>*/
/*                         </h5>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <script src="http://ajax.microsoft.com/ajax/jquery.templates/beta1/jquery.tmpl.js"></script>*/
/*     <script>*/
/*         $('.add-worker-order-header').click(function () {*/
/*             $('.add-worker-order-body').toggleClass('hidden');*/
/*         });*/
/* */
/*         $('.edit-order-button').click(function () {*/
/* */
/*             var id = $(this).data('id');*/
/*             var orderDescription = $('[data-description-' + id + ']').text().trim();*/
/*             var orderHref = $('[data-href-' + id + ']').attr('data-href-' + id + '');*/
/* */
/*             $('#deleteWorkerOrder').data('data-id', id);*/
/* */
/*             $('.show-order-history').data('id', id).show();*/
/*             $('#modalOrderDescription').text(orderDescription);*/
/*             $('#modalOrderHref').val(orderHref);*/
/* */
/*             $('.modal-order-history').hide();*/
/*             $('#myModal').modal();*/
/* */
/*             $('#editWorkerOrderForm').unbind('submit');*/
/*             $('#editWorkerOrderForm').bind('submit', function (e) {*/
/*                 e.preventDefault();*/
/* */
/*                 var url = "{{ path('api_update_worker_order_contentupdate_worker_order_content',{'workerOrder':44444}) }}";*/
/*                 url = url.replace("44444", id);*/
/* */
/*                 $.ajax({*/
/*                     type: 'PATCH',*/
/*                     data: $('#editWorkerOrderForm').serialize(),*/
/*                     url: url,*/
/*                     success: function (data, status, xhr) {*/
/*                         if (xhr.status == 204) {*/
/*                             swal("Treść zamówienia zmieniona", null, "success");*/
/* */
/*                             description = $('#modalOrderDescription').val();*/
/*                             href = $('#modalOrderHref').val();*/
/* */
/*                             $('[data-description-' + id + ']').text(description).attr("data-description-" + id, description);*/
/*                             if (href.length) {*/
/*                                 $('[data-href-' + id + ']').html('<a href="' + href + '" target="_blank" title="' + href + '">' + href + '</a>').attr("data-href-" + id, href);*/
/*                             } else {*/
/*                                 $('[data-href-' + id + ']').text('-').attr("data-href-" + id, href);*/
/*                             }*/
/* */
/*                             $('#myModal').modal('hide')*/
/*                         }*/
/*                     },*/
/*                     error: function () {*/
/*                         swal("Błąd", null, "error")*/
/*                     }*/
/*                 });*/
/*             });*/
/*         });*/
/* */
/*         $('.show-order-history').click(function () {*/
/* */
/*             id = $('.show-order-history').data('id');*/
/* */
/*             var url = "{{ path('api_get_worker_order_historyget_worker_order',{'id':12345}) }}";*/
/*             url = url.replace("12345", id);*/
/* */
/*             $.ajax({*/
/*                 type: 'GET',*/
/*                 data: {*/
/*                     id: id*/
/*                 },*/
/*                 url: url,*/
/*                 success: function (data, status, xhr) {*/
/*                     if (xhr.status == 200) {*/
/* */
/*                         var changelog = JSON.parse(data);*/
/* */
/*                         appendRows(changelog);*/
/* */
/*                         $('.modal-order-history').slideDown();*/
/*                         $('.show-order-history').hide();*/
/*                     }*/
/*                 },*/
/*                 error: function () {*/
/*                     swal("Błąd", null, "error")*/
/*                 }*/
/*             });*/
/*         });*/
/* */
/*         $('.hide-order-history').click(function () {*/
/*             $('.modal-order-history').slideUp();*/
/*             $('.show-order-history').show();*/
/*         });*/
/* */
/*         function appendRows(data) {*/
/* */
/*             var apiData = data;*/
/* */
/*             $('#modalOrderHistoryRows').html('');*/
/*             markup = '<tr>' +*/
/*                     '<td data-title="Akcja">' +*/
/*                     '\{\{if action == "update" \}\}Zmieniono\{\{/if\}\}' +*/
/*                     '\{\{if action == "create" \}\}Utworzono\{\{/if\}\}' +*/
/*                     '\{\{if action == "remove" \}\}Usunuięto\{\{/if\}\}' +*/
/*                     '</td>' +*/
/*                     '<td data-title="Opis">' +*/
/*                     '\{\{if data.description \}\}<strong>Opis:</strong> ${data.description} <br />\{\{/if\}\}' +*/
/*                     '\{\{if data.href \}\}<strong>Link:</strong> <a href="${data.href}" target="_blank">${data.href}</a> <br />\{\{/if\}\}' +*/
/*                     '\{\{if data.status \}\}<strong>Status:</strong> ${data.status.id.name} <br />\{\{/if\}\}' +*/
/*                     '</td>' +*/
/*                     '<td data-title="Data">${logged_at}</td>' +*/
/*                     '<td data-title="Autor">${username}</td>' +*/
/*                     '</tr>';*/
/* */
/*             $.tmpl(markup, apiData).appendTo("#modalOrderHistoryRows");*/
/*         }*/
/* */
/*         $('.workerOrderStatus').change(function () {*/
/* */
/*             var workerOrder = $(this).data('id');*/
/*             var workerOrderStatus = $(this).val();*/
/*             var url = "{{ path('api_set_worker_order_statusset_worker_order_status',{'workerOrder':44444, 'workerOrderStatus':66666}) }}";*/
/*             url = url.replace("44444", workerOrder).replace("66666", workerOrderStatus);*/
/* */
/*             $.ajax({*/
/*                 type: 'PATCH',*/
/*                 data: {*/
/*                     order: workerOrder,*/
/*                     status: workerOrderStatus*/
/*                 },*/
/*                 url: url,*/
/*                 success: function (data, status, xhr) {*/
/*                     if (xhr.status == 204) {*/
/*                         swal("Status zmieniony", null, "success");*/
/*                     }*/
/*                 },*/
/*                 error: function () {*/
/*                     swal("Błąd", null, "error")*/
/*                 }*/
/*             });*/
/*         });*/
/* */
/*         $('#deleteWorkerOrder').click(function () {*/
/* */
/*             id = $(this).data('data-id');*/
/*             var url = "{{ path('api_remove_worker_orderremove_worker_order',{'id':12345}) }}";*/
/*             url = url.replace("12345", id);*/
/* */
/*             $.ajax({*/
/*                 type: 'DELETE',*/
/*                 url: url,*/
/*                 success: function (data, status, xhr) {*/
/*                     if (xhr.status == 204) {*/
/*                         swal("Usunięto wpis", null, "error");*/
/*                         $("tr[data-row='" + id + "']").remove();*/
/* */
/*                         if ($('tr.workerOrderRow').length == 0) {*/
/*                             $('#convertable-table > tbody:last-child').append("<tr>" +*/
/*                                     "<td colspan='7' id='noWorkerOrders' data-title='Zamówienia'>Brak rekordów do wyświetlenia.</td>" +*/
/*                                     "</tr>");*/
/*                         }*/
/*                     }*/
/*                 },*/
/*                 error: function () {*/
/*                     swal("Błąd", null, "warning");*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
