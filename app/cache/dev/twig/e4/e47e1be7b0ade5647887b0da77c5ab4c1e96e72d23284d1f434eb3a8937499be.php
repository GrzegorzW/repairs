<?php

/* AppBundle:Admin:report.html.twig */
class __TwigTemplate_8ee5ce5ed9d8d19f679757b774a05599bf02c54b2f0220b665335f45c3ab6fae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Admin:report.html.twig", 1);
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
        $__internal_f6c0ece9556b07bf6a114d33e9823b784a2c43093e7cd06aa0000e721daf1605 = $this->env->getExtension("native_profiler");
        $__internal_f6c0ece9556b07bf6a114d33e9823b784a2c43093e7cd06aa0000e721daf1605->enter($__internal_f6c0ece9556b07bf6a114d33e9823b784a2c43093e7cd06aa0000e721daf1605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:report.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6c0ece9556b07bf6a114d33e9823b784a2c43093e7cd06aa0000e721daf1605->leave($__internal_f6c0ece9556b07bf6a114d33e9823b784a2c43093e7cd06aa0000e721daf1605_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e31f03c7a1cb26bf71d84002ed2c0a6ab94799ca7ebff37e33c90881ce56e9c = $this->env->getExtension("native_profiler");
        $__internal_1e31f03c7a1cb26bf71d84002ed2c0a6ab94799ca7ebff37e33c90881ce56e9c->enter($__internal_1e31f03c7a1cb26bf71d84002ed2c0a6ab94799ca7ebff37e33c90881ce56e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    | Raport
";
        
        $__internal_1e31f03c7a1cb26bf71d84002ed2c0a6ab94799ca7ebff37e33c90881ce56e9c->leave($__internal_1e31f03c7a1cb26bf71d84002ed2c0a6ab94799ca7ebff37e33c90881ce56e9c_prof);

    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_8406bc6165ee8ea5d5d8b5e02a3f7a0cbe34feb8467559d703c71b661b4e383f = $this->env->getExtension("native_profiler");
        $__internal_8406bc6165ee8ea5d5d8b5e02a3f7a0cbe34feb8467559d703c71b661b4e383f->enter($__internal_8406bc6165ee8ea5d5d8b5e02a3f7a0cbe34feb8467559d703c71b661b4e383f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("AppBundle::alerts.html.twig", "AppBundle:Admin:report.html.twig", 9)->display($context);
        // line 10
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"form-inline\" style=\"margin-top: -10px;\">
                <div class=\"form-group breaking-inline-form\">
                    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["reportForm"]) ? $context["reportForm"] : $this->getContext($context, "reportForm")), 'form_start');
        echo "
                    <div class=\"input-group input-daterange\" id=\"datepicker\">
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["reportForm"]) ? $context["reportForm"] : $this->getContext($context, "reportForm")), "startDate", array()), 'widget');
        echo "
                        <span class=\"input-group-addon\"><span
                                    class=\"glyphicon glyphicon-calendar\"></span></span>
                        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["reportForm"]) ? $context["reportForm"] : $this->getContext($context, "reportForm")), "endDate", array()), 'widget');
        echo "
                    </div>
                </div>
                <div class=\"form-group breaking-inline-form\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["reportForm"]) ? $context["reportForm"] : $this->getContext($context, "reportForm")), "localization", array()), 'label', array("label_attr" => array("class" => "select"), "label" => "Oddział "));
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["reportForm"]) ? $context["reportForm"] : $this->getContext($context, "reportForm")), "localization", array()), 'row');
        echo "
                    </div>
                <div class=\"form-group breaking-inline-form\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["reportForm"]) ? $context["reportForm"] : $this->getContext($context, "reportForm")), "entries", array()), 'label', array("label_attr" => array("class" => "select"), "label" => "Typ "));
        echo "
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["reportForm"]) ? $context["reportForm"] : $this->getContext($context, "reportForm")), "entries", array()), 'row');
        echo "
                    </div>
                <div class=\"form-group breaking-inline-form\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["reportForm"]) ? $context["reportForm"] : $this->getContext($context, "reportForm")), "choice", array()), 'label', array("label_attr" => array("class" => "select"), "label" => "Status "));
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["reportForm"]) ? $context["reportForm"] : $this->getContext($context, "reportForm")), "choice", array()), 'row');
        echo "
                    </div>
                <div class=\"form-group breaking-inline-form\">
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["reportForm"]) ? $context["reportForm"] : $this->getContext($context, "reportForm")), "payment_method", array()), 'label', array("label_attr" => array("class" => "select"), "label" => "Metoda płatności "));
        echo "
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["reportForm"]) ? $context["reportForm"] : $this->getContext($context, "reportForm")), "payment_method", array()), 'row');
        echo "
                    </div>
                <input type=\"submit\" value=\"Pokaż\" class=\"btn btn-success breaking-inline-form\"/>
                <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"));
        echo "\"
                   class=\"btn btn-danger breaking-inline-form\">Reset</a>
            </div>
            <div>
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["reportForm"]) ? $context["reportForm"] : $this->getContext($context, "reportForm")), "startDate", array()), 'errors');
        echo "
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["reportForm"]) ? $context["reportForm"] : $this->getContext($context, "reportForm")), "endDate", array()), 'errors');
        echo "
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["reportForm"]) ? $context["reportForm"] : $this->getContext($context, "reportForm")), 'errors');
        echo "
                ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["reportForm"]) ? $context["reportForm"] : $this->getContext($context, "reportForm")), 'form_end');
        echo "
            </div>
        </div>
    </div>

    ";
        // line 52
        if ( !twig_test_empty((isset($context["reportSummary"]) ? $context["reportSummary"] : $this->getContext($context, "reportSummary")))) {
            // line 53
            echo "        <div class=\"row\" style=\"margin-top: 20px\">
            <div class=\"col-md-6\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">Podsumowanie</div>
                    <div class=\"panel-body\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <ul class=\"list-group\">
                                    <li class=\"list-unstyled\">
                                        <strong>Obrót:</strong> ";
            // line 62
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money_format')->getCallable(), array($this->getAttribute((isset($context["reportSummary"]) ? $context["reportSummary"] : $this->getContext($context, "reportSummary")), "totalPrice", array()))), "html", null, true);
            echo "
                                    </li>
                                    <li class=\"list-unstyled\">
                                        <strong>Koszty:</strong> ";
            // line 65
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money_format')->getCallable(), array($this->getAttribute((isset($context["reportSummary"]) ? $context["reportSummary"] : $this->getContext($context, "reportSummary")), "totalCost", array()))), "html", null, true);
            echo "
                                    </li>
                                    <li class=\"list-unstyled\">
                                        <strong>Profit:</strong> ";
            // line 68
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money_format')->getCallable(), array($this->getAttribute((isset($context["reportSummary"]) ? $context["reportSummary"] : $this->getContext($context, "reportSummary")), "totalProfit", array()))), "html", null, true);
            echo "
                                    </li>
                                </ul>
                            </div>
                            <div class=\"col-md-6\">
                                <ul class=\"list-group\">
                                    <li class=\"list-unstyled\">
                                        <strong>Liczba wpisów:</strong> ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reportSummary"]) ? $context["reportSummary"] : $this->getContext($context, "reportSummary")), "totalCount", array()), "html", null, true);
            echo "
                                    </li>
                                    <li class=\"list-unstyled\">
                                        <strong>Zatwierdzone:</strong> ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reportSummary"]) ? $context["reportSummary"] : $this->getContext($context, "reportSummary")), "approvedCount", array()), "html", null, true);
            echo "
                                    </li>
                                    <li class=\"list-unstyled\">
                                        <strong>Niezatwierdzone:</strong> ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reportSummary"]) ? $context["reportSummary"] : $this->getContext($context, "reportSummary")), "notApprovedCount", array()), "html", null, true);
            echo "
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 91
        echo "
    ";
        // line 92
        if ( !twig_test_empty((isset($context["financialSummaryCollection"]) ? $context["financialSummaryCollection"] : $this->getContext($context, "financialSummaryCollection")))) {
            // line 93
            echo "
        <div class=\"table-responsive\">
            <table class=\"table table-striped table-bordered\" id=\"convertable-table\">
                <thead>
                <tr>
                    <th>Lp.</th>
                    <th style=\"width: 20px;\">
                        <span tabindex=\"0\" class=\"glyphicon glyphicon-eye-open\" role=\"button\"
                              data-toggle=\"popover\"
                              data-container=\"body\"
                              data-trigger=\"focus hover\" data-placement=\"top\"
                              data-content=\"Status wpisu\">
                                            </span>

                    </th>
                    <th>Utworzono</th>
                    <th>Nazwa</th>
                    <th>Typ</th>
                    <th>Wycena</th>
                    <th>Koszt</th>
                    <th>Profit</th>
                    <th>Metoda płatności</th>
                    <th>Szczegóły</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["financialSummaryCollection"]) ? $context["financialSummaryCollection"] : $this->getContext($context, "financialSummaryCollection")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 120
                echo "                    <tr>
                        <td data-title=\"Lp.\">";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                        <td data-title=\"Status wyceny\">
                            ";
                // line 123
                if ($this->getAttribute($this->getAttribute($context["entry"], "object", array()), "approved", array())) {
                    // line 124
                    echo "                                <span class=\"glyphicon glyphicon-ok text-success text-center\"></span>
                            ";
                } else {
                    // line 126
                    echo "                                <span class=\"glyphicon glyphicon-remove text-danger text-center\"></span>
                            ";
                }
                // line 128
                echo "                        </td>

                        ";
                // line 130
                if ($this->getAttribute((isset($context["repair_service"]) ? $context["repair_service"] : $this->getContext($context, "repair_service")), "instanceOfRepair", array(0 => $this->getAttribute($context["entry"], "object", array())), "method")) {
                    // line 131
                    echo "
                            <td data-title=\"Utworzono\">
                                ";
                    // line 133
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "object", array()), "endDate", array()), "d.m.Y H:i:s"), "html", null, true);
                    echo "
                            </td>
                            <td data-title=\"Nazwa\">
                                ";
                    // line 136
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entry"], "object", array()), "device", array()), "brand", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entry"], "object", array()), "device", array()), "model", array()), "html", null, true);
                    echo "
                            </td>
                            <td data-title=\"Typ\">
                                Serwis
                            </td>

                        ";
                } else {
                    // line 143
                    echo "
                            <td data-title=\"Utworzono\">
                                ";
                    // line 145
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "object", array()), "created", array()), "d.m.Y H:i:s"), "html", null, true);
                    echo "
                            </td>
                            <td data-title=\"Nazwa\">
                                ";
                    // line 148
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($context["entry"], "object", array()), "name", array()), 0, 25), "html", null, true);
                    echo "
                                ";
                    // line 149
                    if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "object", array()), "name", array())) > 25)) {
                        // line 150
                        echo "                                    ...
                                ";
                    }
                    // line 152
                    echo "                            </td>
                            <td data-title=\"Typ\">
                                ";
                    // line 154
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entry"], "object", array()), "saleKind", array()), "name", array()), "html", null, true);
                    echo "
                            </td>

                        ";
                }
                // line 158
                echo "                        <td data-title=\"Wycena\">
                            ";
                // line 159
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money_format')->getCallable(), array($this->getAttribute($context["entry"], "price", array()))), "html", null, true);
                echo "
                        </td>
                        <td data-title=\"Koszt\">
                            ";
                // line 162
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money_format')->getCallable(), array($this->getAttribute($context["entry"], "cost", array()))), "html", null, true);
                echo "
                        </td>
                        <td data-title=\"Profit\">
                            ";
                // line 165
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money_format')->getCallable(), array($this->getAttribute($context["entry"], "profit", array()))), "html", null, true);
                echo "
                        </td>
                        <td data-title=\"Metoda płatności\">
                            ";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "object", array()), "paymentMethod", array()), "html", null, true);
                echo "
                        </td>
                        <td data-title=\"Szczegóły\">
                            <a href=\"
                        ";
                // line 172
                if ($this->getAttribute((isset($context["repair_service"]) ? $context["repair_service"] : $this->getContext($context, "repair_service")), "instanceOfRepair", array(0 => $this->getAttribute($context["entry"], "object", array())), "method")) {
                    // line 173
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_repair_details", array("id" => $this->getAttribute($this->getAttribute($context["entry"], "object", array()), "id", array()))), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 175
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_sale_edit", array("id" => $this->getAttribute($this->getAttribute($context["entry"], "object", array()), "id", array()))), "html", null, true);
                    echo "
                        ";
                }
                // line 177
                echo "                        \">
                                Zobacz
                            </a>
                        </td>
                    </tr>
                ";
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
                // line 183
                echo "                    <tr>
                        <td data-title=\"Wyszukano\" colspan=\"8\">
                            Brak wyników wyszukiwania.
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                </tbody>
            </table>
        </div>
    ";
        }
        // line 193
        echo "
    <script>
        \$('.input-daterange').datepicker({
            todayBtn: \"linked\",
            language: \"pl\",
            daysOfWeekHighlighted: \"0\",
            todayHighlight: true,
            format: \"yyyy-mm-dd\",
            orientation: \"bottom auto\"
        });

        \$(document).ready(function () {
            if (window.location.href.indexOf('startDate') === -1) {
                var today = new Date();
                var monthPrefix = \"\";
                var dayPrefix = \"\";

                if (today.getMonth() <= 9) {
                    monthPrefix = \"0\";
                }
                if (today.getDate() <= 9) {
                    dayPrefix = \"0\";
                }

                \$('#report_startDate').val(today.getFullYear() + '-' + monthPrefix + (today.getMonth() + 1) + '-01');
                \$('#report_endDate').val(today.getFullYear() + '-' + monthPrefix + (today.getMonth() + 1) + '-' + dayPrefix + today.getDate());
            }
        });

        \$(function () {
            \$('[data-toggle=\"popover\"]').popover()
        });
    </script>

";
        
        $__internal_8406bc6165ee8ea5d5d8b5e02a3f7a0cbe34feb8467559d703c71b661b4e383f->leave($__internal_8406bc6165ee8ea5d5d8b5e02a3f7a0cbe34feb8467559d703c71b661b4e383f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 193,  411 => 189,  400 => 183,  382 => 177,  376 => 175,  370 => 173,  368 => 172,  361 => 168,  355 => 165,  349 => 162,  343 => 159,  340 => 158,  333 => 154,  329 => 152,  325 => 150,  323 => 149,  319 => 148,  313 => 145,  309 => 143,  297 => 136,  291 => 133,  287 => 131,  285 => 130,  281 => 128,  277 => 126,  273 => 124,  271 => 123,  266 => 121,  263 => 120,  245 => 119,  217 => 93,  215 => 92,  212 => 91,  199 => 81,  193 => 78,  187 => 75,  177 => 68,  171 => 65,  165 => 62,  154 => 53,  152 => 52,  144 => 47,  140 => 46,  136 => 45,  132 => 44,  125 => 40,  119 => 37,  115 => 36,  109 => 33,  105 => 32,  99 => 29,  95 => 28,  89 => 25,  85 => 24,  78 => 20,  72 => 17,  67 => 15,  60 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     | Raport*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     {% include 'AppBundle::alerts.html.twig' %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="form-inline" style="margin-top: -10px;">*/
/*                 <div class="form-group breaking-inline-form">*/
/*                     {{ form_start(reportForm) }}*/
/*                     <div class="input-group input-daterange" id="datepicker">*/
/*                         {{ form_widget(reportForm.startDate) }}*/
/*                         <span class="input-group-addon"><span*/
/*                                     class="glyphicon glyphicon-calendar"></span></span>*/
/*                         {{ form_widget(reportForm.endDate) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="form-group breaking-inline-form">*/
/*                 {{ form_label(reportForm.localization, "Oddział ", { 'label_attr': {'class': 'select'} }) }}*/
/*                 {{ form_row(reportForm.localization) }}*/
/*                     </div>*/
/*                 <div class="form-group breaking-inline-form">*/
/*                 {{ form_label(reportForm.entries, "Typ ", { 'label_attr': {'class': 'select'} }) }}*/
/*                 {{ form_row(reportForm.entries) }}*/
/*                     </div>*/
/*                 <div class="form-group breaking-inline-form">*/
/*                 {{ form_label(reportForm.choice, "Status ", { 'label_attr': {'class': 'select'} }) }}*/
/*                 {{ form_row(reportForm.choice) }}*/
/*                     </div>*/
/*                 <div class="form-group breaking-inline-form">*/
/*                 {{ form_label(reportForm.payment_method, "Metoda płatności ", { 'label_attr': {'class': 'select'} }) }}*/
/*                 {{ form_row(reportForm.payment_method) }}*/
/*                     </div>*/
/*                 <input type="submit" value="Pokaż" class="btn btn-success breaking-inline-form"/>*/
/*                 <a href="{{ path(app.request.get('_route')) }}"*/
/*                    class="btn btn-danger breaking-inline-form">Reset</a>*/
/*             </div>*/
/*             <div>*/
/*                 {{ form_errors(reportForm.startDate) }}*/
/*                 {{ form_errors(reportForm.endDate) }}*/
/*                 {{ form_errors(reportForm) }}*/
/*                 {{ form_end(reportForm) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% if reportSummary is not empty %}*/
/*         <div class="row" style="margin-top: 20px">*/
/*             <div class="col-md-6">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-heading">Podsumowanie</div>*/
/*                     <div class="panel-body">*/
/*                         <div class="row">*/
/*                             <div class="col-md-6">*/
/*                                 <ul class="list-group">*/
/*                                     <li class="list-unstyled">*/
/*                                         <strong>Obrót:</strong> {{ reportSummary.totalPrice | money_format }}*/
/*                                     </li>*/
/*                                     <li class="list-unstyled">*/
/*                                         <strong>Koszty:</strong> {{ reportSummary.totalCost | money_format }}*/
/*                                     </li>*/
/*                                     <li class="list-unstyled">*/
/*                                         <strong>Profit:</strong> {{ reportSummary.totalProfit | money_format }}*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="col-md-6">*/
/*                                 <ul class="list-group">*/
/*                                     <li class="list-unstyled">*/
/*                                         <strong>Liczba wpisów:</strong> {{ reportSummary.totalCount }}*/
/*                                     </li>*/
/*                                     <li class="list-unstyled">*/
/*                                         <strong>Zatwierdzone:</strong> {{ reportSummary.approvedCount }}*/
/*                                     </li>*/
/*                                     <li class="list-unstyled">*/
/*                                         <strong>Niezatwierdzone:</strong> {{ reportSummary.notApprovedCount }}*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% if financialSummaryCollection is not empty %}*/
/* */
/*         <div class="table-responsive">*/
/*             <table class="table table-striped table-bordered" id="convertable-table">*/
/*                 <thead>*/
/*                 <tr>*/
/*                     <th>Lp.</th>*/
/*                     <th style="width: 20px;">*/
/*                         <span tabindex="0" class="glyphicon glyphicon-eye-open" role="button"*/
/*                               data-toggle="popover"*/
/*                               data-container="body"*/
/*                               data-trigger="focus hover" data-placement="top"*/
/*                               data-content="Status wpisu">*/
/*                                             </span>*/
/* */
/*                     </th>*/
/*                     <th>Utworzono</th>*/
/*                     <th>Nazwa</th>*/
/*                     <th>Typ</th>*/
/*                     <th>Wycena</th>*/
/*                     <th>Koszt</th>*/
/*                     <th>Profit</th>*/
/*                     <th>Metoda płatności</th>*/
/*                     <th>Szczegóły</th>*/
/*                 </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for entry in financialSummaryCollection %}*/
/*                     <tr>*/
/*                         <td data-title="Lp.">{{ loop.index }}</td>*/
/*                         <td data-title="Status wyceny">*/
/*                             {% if entry.object.approved %}*/
/*                                 <span class="glyphicon glyphicon-ok text-success text-center"></span>*/
/*                             {% else %}*/
/*                                 <span class="glyphicon glyphicon-remove text-danger text-center"></span>*/
/*                             {% endif %}*/
/*                         </td>*/
/* */
/*                         {% if repair_service.instanceOfRepair(entry.object) %}*/
/* */
/*                             <td data-title="Utworzono">*/
/*                                 {{ entry.object.endDate | date('d.m.Y H:i:s') }}*/
/*                             </td>*/
/*                             <td data-title="Nazwa">*/
/*                                 {{ entry.object.device.brand }} {{ entry.object.device.model }}*/
/*                             </td>*/
/*                             <td data-title="Typ">*/
/*                                 Serwis*/
/*                             </td>*/
/* */
/*                         {% else %}*/
/* */
/*                             <td data-title="Utworzono">*/
/*                                 {{ entry.object.created | date('d.m.Y H:i:s') }}*/
/*                             </td>*/
/*                             <td data-title="Nazwa">*/
/*                                 {{ entry.object.name[:25] }}*/
/*                                 {% if entry.object.name|length > 25 %}*/
/*                                     ...*/
/*                                 {% endif %}*/
/*                             </td>*/
/*                             <td data-title="Typ">*/
/*                                 {{ entry.object.saleKind.name }}*/
/*                             </td>*/
/* */
/*                         {% endif %}*/
/*                         <td data-title="Wycena">*/
/*                             {{ entry.price | money_format }}*/
/*                         </td>*/
/*                         <td data-title="Koszt">*/
/*                             {{ entry.cost | money_format }}*/
/*                         </td>*/
/*                         <td data-title="Profit">*/
/*                             {{ entry.profit | money_format }}*/
/*                         </td>*/
/*                         <td data-title="Metoda płatności">*/
/*                             {{ entry.object.paymentMethod }}*/
/*                         </td>*/
/*                         <td data-title="Szczegóły">*/
/*                             <a href="*/
/*                         {% if repair_service.instanceOfRepair(entry.object) %}*/
/*                             {{ path('worker_panel_repair_details',{'id':entry.object.id}) }}*/
/*                         {% else %}*/
/*                             {{ path('worker_sale_edit',{'id':entry.object.id}) }}*/
/*                         {% endif %}*/
/*                         ">*/
/*                                 Zobacz*/
/*                             </a>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% else %}*/
/*                     <tr>*/
/*                         <td data-title="Wyszukano" colspan="8">*/
/*                             Brak wyników wyszukiwania.*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <script>*/
/*         $('.input-daterange').datepicker({*/
/*             todayBtn: "linked",*/
/*             language: "pl",*/
/*             daysOfWeekHighlighted: "0",*/
/*             todayHighlight: true,*/
/*             format: "yyyy-mm-dd",*/
/*             orientation: "bottom auto"*/
/*         });*/
/* */
/*         $(document).ready(function () {*/
/*             if (window.location.href.indexOf('startDate') === -1) {*/
/*                 var today = new Date();*/
/*                 var monthPrefix = "";*/
/*                 var dayPrefix = "";*/
/* */
/*                 if (today.getMonth() <= 9) {*/
/*                     monthPrefix = "0";*/
/*                 }*/
/*                 if (today.getDate() <= 9) {*/
/*                     dayPrefix = "0";*/
/*                 }*/
/* */
/*                 $('#report_startDate').val(today.getFullYear() + '-' + monthPrefix + (today.getMonth() + 1) + '-01');*/
/*                 $('#report_endDate').val(today.getFullYear() + '-' + monthPrefix + (today.getMonth() + 1) + '-' + dayPrefix + today.getDate());*/
/*             }*/
/*         });*/
/* */
/*         $(function () {*/
/*             $('[data-toggle="popover"]').popover()*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
