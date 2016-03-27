<?php

/* AppBundle:Worker:repairs.html.twig */
class __TwigTemplate_efcd8b445649c9457b85e532f36dbc691caa6bb5594df307b798be15a81df260 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Worker:repairs.html.twig", 1);
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
        $__internal_010e4a2a9926fa02daa96e9af5f1768309d02a6f59d8921157d1421a04784d3c = $this->env->getExtension("native_profiler");
        $__internal_010e4a2a9926fa02daa96e9af5f1768309d02a6f59d8921157d1421a04784d3c->enter($__internal_010e4a2a9926fa02daa96e9af5f1768309d02a6f59d8921157d1421a04784d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Worker:repairs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_010e4a2a9926fa02daa96e9af5f1768309d02a6f59d8921157d1421a04784d3c->leave($__internal_010e4a2a9926fa02daa96e9af5f1768309d02a6f59d8921157d1421a04784d3c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f70783948d3b6de22702742124d7f70af82f59ca37212990594b2efcb437550 = $this->env->getExtension("native_profiler");
        $__internal_4f70783948d3b6de22702742124d7f70af82f59ca37212990594b2efcb437550->enter($__internal_4f70783948d3b6de22702742124d7f70af82f59ca37212990594b2efcb437550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    | Naprawy
";
        
        $__internal_4f70783948d3b6de22702742124d7f70af82f59ca37212990594b2efcb437550->leave($__internal_4f70783948d3b6de22702742124d7f70af82f59ca37212990594b2efcb437550_prof);

    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_a70ae42ec6e55af88a2b1c7bc38c44edd434de924f9616dc8a42ecc800833643 = $this->env->getExtension("native_profiler");
        $__internal_a70ae42ec6e55af88a2b1c7bc38c44edd434de924f9616dc8a42ecc800833643->enter($__internal_a70ae42ec6e55af88a2b1c7bc38c44edd434de924f9616dc8a42ecc800833643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("AppBundle::alerts.html.twig", "AppBundle:Worker:repairs.html.twig", 9)->display($context);
        // line 10
        echo "
    <form method=\"get\" name=\"findRepair\">
        <label class=\"control-label\" for=\"findRepair_phrase\">Szukana fraza</label>
        <input type=\"text\" placeholder=\"np. R_id, nick, marka, model, opis, tel, data (YYYY-MM-DD).\"
               class=\"form-control\" name=\"findRepairPhrase\" style=\"margin-bottom: 15px;\" autofocus
                ";
        // line 15
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "findRepairPhrase"), "method"))) {
            // line 16
            echo "                    value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "findRepairPhrase"), "method"), "html", null, true);
            echo "\"
                ";
        }
        // line 18
        echo "        />

        <label class=\"control-label\" for=\"findRepairStatus\">Status</label>
        <select class=\"form-control\" name=\"findRepairStatus\" id=\"findRepairStatus\" style=\"margin-bottom: 15px;\">
            <option value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_constant("AppBundle\\Entity\\Status::STATUS_ACTIVE_REPAIR"), "html", null, true);
        echo "\"
                    ";
        // line 23
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "findRepairStatus"), "method") == twig_constant("AppBundle\\Entity\\Status::STATUS_ACTIVE_REPAIR"))) {
            // line 24
            echo "                        selected
                    ";
        }
        // line 26
        echo "            >
                Aktywne
            </option>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statusesToSelect"]) ? $context["statusesToSelect"] : $this->getContext($context, "statusesToSelect")));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 30
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "id", array()), "html", null, true);
            echo "\"
                        ";
            // line 31
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "findRepairStatus"), "method") == $this->getAttribute($context["status"], "id", array()))) {
                // line 32
                echo "                            selected
                        ";
            }
            // line 34
            echo "                >
                    ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "name", array()), "html", null, true);
            echo "
                </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            <option value=\"";
        echo twig_escape_filter($this->env, twig_constant("AppBundle\\Entity\\Status::STATUS_ALL_REPAIRS"), "html", null, true);
        echo "\"
                    ";
        // line 39
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "findRepairStatus"), "method") == twig_constant("AppBundle\\Entity\\Status::STATUS_ALL_REPAIRS"))) {
            // line 40
            echo "                        selected
                    ";
        }
        // line 42
        echo "            >
                Wszystkie
            </option>
        </select>

        ";
        // line 47
        if ((isset($context["repairersToSelect"]) ? $context["repairersToSelect"] : $this->getContext($context, "repairersToSelect"))) {
            // line 48
            echo "            <label class=\"control-label\" for=\"findRepairRepairer\">Naprawiający</label>
            <select class=\"form-control\" name=\"findRepairRepairer\" id=\"findRepairRepairer\">
                <option value=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_constant("AppBundle\\Entity\\User::ALL_REPAIRERS"), "html", null, true);
            echo "\"
                        ";
            // line 51
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "findRepairRepairer"), "method") == twig_constant("AppBundle\\Entity\\User::ALL_REPAIRERS"))) {
                // line 52
                echo "                            selected
                        ";
            }
            // line 54
            echo "                >
                    Wszyscy
                </option>
                ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["repairersToSelect"]) ? $context["repairersToSelect"] : $this->getContext($context, "repairersToSelect")));
            foreach ($context['_seq'] as $context["_key"] => $context["repairer"]) {
                // line 58
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repairer"], "id", array()), "html", null, true);
                echo "\"
                            ";
                // line 59
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "findRepairRepairer"), "method") == $this->getAttribute($context["repairer"], "id", array()))) {
                    // line 60
                    echo "                                selected
                            ";
                }
                // line 62
                echo "                    >
                        ";
                // line 63
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
            // line 66
            echo "            </select>
        ";
        }
        // line 68
        echo "
        <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"));
        echo "\" class=\"btn btn-danger btn-sm\"
           style=\"margin-top: 15px;\">Reset</a>
        <button type=\"submit\" name=\"find\" class=\"btn btn-success btn-sm\" style=\"margin-top: 15px;\">Wyszukaj</button>
    </form>

    ";
        // line 74
        $this->loadTemplate("AppBundle:PaginationLimit:paginationLimit.html.twig", "AppBundle:Worker:repairs.html.twig", 74)->display($context);
        // line 75
        echo "
    <div class=\"table-responsive\" style=\"margin-top: 20px;\">
        <table class=\"table table-striped table-bordered\" id=\"convertable-table\">
            <thead>
            <tr>
                <th>
                    ";
        // line 81
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "R_id", "r.alt_id");
        echo "
                </th>
                <th>
                    ";
        // line 84
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Naprawiający ", "current_repairer.localization.id");
        echo "
                </th>
                <th>
                    ";
        // line 87
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Marka", "device.brand");
        echo "
                </th>
                <th>
                    ";
        // line 90
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Model", "device.model");
        echo "
                </th>
                <th>
                    ";
        // line 93
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Opis", "r.description");
        echo "
                </th>
                <th>
                    ";
        // line 96
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Tel", "u.tel");
        echo "
                </th>
                <th>
                    ";
        // line 99
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Data przyjęcia", "r.date");
        echo "
                </th>
                <th>
                    ";
        // line 102
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Status", "s.id");
        echo "
                </th>
                <th>Szczegóły</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 109
            echo "                <tr>
                    <td data-title=\"R_id\">
                        ";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "altId", array()), "html", null, true);
            echo "
                    </td>
                    <td data-title=\"Naprawiający\">";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entry"], "currentRepairer", array()), "localization", array()), "name", array()), "html", null, true);
            echo "
                        | ";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "currentRepairer", array()), "surname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "currentRepairer", array()), "name", array()), "html", null, true);
            echo "</td>
                    <td data-title=\"Marka\">";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "device", array()), "brand", array()), "html", null, true);
            echo "</td>
                    <td data-title=\"Model\">";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "device", array()), "model", array()), "html", null, true);
            echo "</td>
                    <td data-title=\"Opis\">
                        ";
            // line 118
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["entry"], "description", array()), 0, 50), "html", null, true);
            echo "
                        ";
            // line 119
            if ((twig_length_filter($this->env, $this->getAttribute($context["entry"], "description", array())) > 50)) {
                // line 120
                echo "                            ...
                        ";
            }
            // line 122
            echo "                    </td>
                    <td data-title=\"Tel\">
                        ";
            // line 124
            if ( !(null === $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "tel", array()))) {
                // line 125
                echo "                            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array($this->getAttribute($this->getAttribute($context["entry"], "user", array()), "tel", array()))), "html", null, true);
                echo "
                        ";
            } else {
                // line 127
                echo "                            -
                        ";
            }
            // line 129
            echo "                    </td>
                    <td data-title=\"Data przyjęcia\">";
            // line 130
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "startDate", array()), "d.m.Y"), "html", null, true);
            echo "</td>
                    <td data-title=\"Status\"
                            ";
            // line 132
            if (($this->getAttribute($this->getAttribute($context["entry"], "currentStatus", array()), "id", array()) == twig_constant("AppBundle\\Entity\\Status::STATUS_RETURNED"))) {
                // line 133
                echo "                                class=\"success\"
                            ";
            }
            // line 135
            echo "                    >
                        ";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "currentStatus", array()), "name", array()), "html", null, true);
            echo "
                    </td>
                    <td data-title=\"Szczegóły\">
                        <a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_repair_details", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
            echo "\">
                            Zobacz
                        </a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 145
            echo "                <tr>
                    <td colspan=\"9\" data-title=\"Naprawy\">Brak rekordów do wyświetlenia.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "            </tbody>
        </table>
    </div>

    <div class=\"text-center\">
        ";
        // line 154
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
    </div>

    <small class=\"help-block text-center\">
        Liczba wyników: ";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
    </small>

";
        
        $__internal_a70ae42ec6e55af88a2b1c7bc38c44edd434de924f9616dc8a42ecc800833643->leave($__internal_a70ae42ec6e55af88a2b1c7bc38c44edd434de924f9616dc8a42ecc800833643_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Worker:repairs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 158,  378 => 154,  371 => 149,  362 => 145,  351 => 139,  345 => 136,  342 => 135,  338 => 133,  336 => 132,  331 => 130,  328 => 129,  324 => 127,  318 => 125,  316 => 124,  312 => 122,  308 => 120,  306 => 119,  302 => 118,  297 => 116,  293 => 115,  287 => 114,  283 => 113,  278 => 111,  274 => 109,  269 => 108,  260 => 102,  254 => 99,  248 => 96,  242 => 93,  236 => 90,  230 => 87,  224 => 84,  218 => 81,  210 => 75,  208 => 74,  200 => 69,  197 => 68,  193 => 66,  180 => 63,  177 => 62,  173 => 60,  171 => 59,  166 => 58,  162 => 57,  157 => 54,  153 => 52,  151 => 51,  147 => 50,  143 => 48,  141 => 47,  134 => 42,  130 => 40,  128 => 39,  123 => 38,  114 => 35,  111 => 34,  107 => 32,  105 => 31,  100 => 30,  96 => 29,  91 => 26,  87 => 24,  85 => 23,  81 => 22,  75 => 18,  69 => 16,  67 => 15,  60 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*     | Naprawy*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     {% include 'AppBundle::alerts.html.twig' %}*/
/* */
/*     <form method="get" name="findRepair">*/
/*         <label class="control-label" for="findRepair_phrase">Szukana fraza</label>*/
/*         <input type="text" placeholder="np. R_id, nick, marka, model, opis, tel, data (YYYY-MM-DD)."*/
/*                class="form-control" name="findRepairPhrase" style="margin-bottom: 15px;" autofocus*/
/*                 {% if app.request.get('findRepairPhrase') is not empty %}*/
/*                     value="{{ app.request.get('findRepairPhrase') }}"*/
/*                 {% endif %}*/
/*         />*/
/* */
/*         <label class="control-label" for="findRepairStatus">Status</label>*/
/*         <select class="form-control" name="findRepairStatus" id="findRepairStatus" style="margin-bottom: 15px;">*/
/*             <option value="{{ constant('AppBundle\\Entity\\Status::STATUS_ACTIVE_REPAIR') }}"*/
/*                     {% if app.request.get('findRepairStatus') == constant('AppBundle\\Entity\\Status::STATUS_ACTIVE_REPAIR') %}*/
/*                         selected*/
/*                     {% endif %}*/
/*             >*/
/*                 Aktywne*/
/*             </option>*/
/*             {% for status in statusesToSelect %}*/
/*                 <option value="{{ status.id }}"*/
/*                         {% if app.request.get('findRepairStatus') == status.id %}*/
/*                             selected*/
/*                         {% endif %}*/
/*                 >*/
/*                     {{ status.name }}*/
/*                 </option>*/
/*             {% endfor %}*/
/*             <option value="{{ constant('AppBundle\\Entity\\Status::STATUS_ALL_REPAIRS') }}"*/
/*                     {% if app.request.get('findRepairStatus') == constant('AppBundle\\Entity\\Status::STATUS_ALL_REPAIRS') %}*/
/*                         selected*/
/*                     {% endif %}*/
/*             >*/
/*                 Wszystkie*/
/*             </option>*/
/*         </select>*/
/* */
/*         {% if repairersToSelect %}*/
/*             <label class="control-label" for="findRepairRepairer">Naprawiający</label>*/
/*             <select class="form-control" name="findRepairRepairer" id="findRepairRepairer">*/
/*                 <option value="{{ constant('AppBundle\\Entity\\User::ALL_REPAIRERS') }}"*/
/*                         {% if app.request.get('findRepairRepairer') == constant('AppBundle\\Entity\\User::ALL_REPAIRERS') %}*/
/*                             selected*/
/*                         {% endif %}*/
/*                 >*/
/*                     Wszyscy*/
/*                 </option>*/
/*                 {% for repairer in repairersToSelect %}*/
/*                     <option value="{{ repairer.id }}"*/
/*                             {% if app.request.get('findRepairRepairer') == repairer.id %}*/
/*                                 selected*/
/*                             {% endif %}*/
/*                     >*/
/*                         {{ repairer.localization.name }} | {{ repairer.name }} {{ repairer.surname }}*/
/*                     </option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*         {% endif %}*/
/* */
/*         <a href="{{ path(app.request.get('_route')) }}" class="btn btn-danger btn-sm"*/
/*            style="margin-top: 15px;">Reset</a>*/
/*         <button type="submit" name="find" class="btn btn-success btn-sm" style="margin-top: 15px;">Wyszukaj</button>*/
/*     </form>*/
/* */
/*     {% include 'AppBundle:PaginationLimit:paginationLimit.html.twig' %}*/
/* */
/*     <div class="table-responsive" style="margin-top: 20px;">*/
/*         <table class="table table-striped table-bordered" id="convertable-table">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>*/
/*                     {{ knp_pagination_sortable(pagination, 'R_id', 'r.alt_id') }}*/
/*                 </th>*/
/*                 <th>*/
/*                     {{ knp_pagination_sortable(pagination, 'Naprawiający ', 'current_repairer.localization.id') }}*/
/*                 </th>*/
/*                 <th>*/
/*                     {{ knp_pagination_sortable(pagination, 'Marka', 'device.brand') }}*/
/*                 </th>*/
/*                 <th>*/
/*                     {{ knp_pagination_sortable(pagination, 'Model', 'device.model') }}*/
/*                 </th>*/
/*                 <th>*/
/*                     {{ knp_pagination_sortable(pagination, 'Opis', 'r.description') }}*/
/*                 </th>*/
/*                 <th>*/
/*                     {{ knp_pagination_sortable(pagination, 'Tel', 'u.tel') }}*/
/*                 </th>*/
/*                 <th>*/
/*                     {{ knp_pagination_sortable(pagination, 'Data przyjęcia', 'r.date') }}*/
/*                 </th>*/
/*                 <th>*/
/*                     {{ knp_pagination_sortable(pagination, 'Status', 's.id') }}*/
/*                 </th>*/
/*                 <th>Szczegóły</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for entry in pagination %}*/
/*                 <tr>*/
/*                     <td data-title="R_id">*/
/*                         {{ entry.altId }}*/
/*                     </td>*/
/*                     <td data-title="Naprawiający">{{ entry.currentRepairer.localization.name }}*/
/*                         | {{ entry.currentRepairer.surname }} {{ entry.currentRepairer.name }}</td>*/
/*                     <td data-title="Marka">{{ entry.device.brand }}</td>*/
/*                     <td data-title="Model">{{ entry.device.model }}</td>*/
/*                     <td data-title="Opis">*/
/*                         {{ entry.description[:50] }}*/
/*                         {% if entry.description|length > 50 %}*/
/*                             ...*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td data-title="Tel">*/
/*                         {% if entry.user.tel is not null %}*/
/*                             {{ phone_number_format(entry.user.tel) }}*/
/*                         {% else %}*/
/*                             -*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td data-title="Data przyjęcia">{{ entry.startDate | date('d.m.Y') }}</td>*/
/*                     <td data-title="Status"*/
/*                             {% if entry.currentStatus.id == constant('AppBundle\\Entity\\Status::STATUS_RETURNED') %}*/
/*                                 class="success"*/
/*                             {% endif %}*/
/*                     >*/
/*                         {{ entry.currentStatus.name }}*/
/*                     </td>*/
/*                     <td data-title="Szczegóły">*/
/*                         <a href="{{ path('worker_panel_repair_details',{'id':entry.id}) }}">*/
/*                             Zobacz*/
/*                         </a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% else %}*/
/*                 <tr>*/
/*                     <td colspan="9" data-title="Naprawy">Brak rekordów do wyświetlenia.</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/*     <div class="text-center">*/
/*         {{ knp_pagination_render(pagination) }}*/
/*     </div>*/
/* */
/*     <small class="help-block text-center">*/
/*         Liczba wyników: {{ pagination.getTotalItemCount }}*/
/*     </small>*/
/* */
/* {% endblock %}*/
