<?php

/* AppBundle:Worker:deviceDetails.html.twig */
class __TwigTemplate_6ee06780b53f1ce82626cae8c24c0b7570dafa4e0effe68588dfddf71584b158 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Worker:deviceDetails.html.twig", 1);
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
        $__internal_f35a0be9410349e99ebbeca30de192f76b74abd6aaab36003d6dcec30d49f3d6 = $this->env->getExtension("native_profiler");
        $__internal_f35a0be9410349e99ebbeca30de192f76b74abd6aaab36003d6dcec30d49f3d6->enter($__internal_f35a0be9410349e99ebbeca30de192f76b74abd6aaab36003d6dcec30d49f3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Worker:deviceDetails.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f35a0be9410349e99ebbeca30de192f76b74abd6aaab36003d6dcec30d49f3d6->leave($__internal_f35a0be9410349e99ebbeca30de192f76b74abd6aaab36003d6dcec30d49f3d6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1fd6d9e265526cf30f3a6116eeab16d2944f174ede91f26cb9a8adaa1167cdd = $this->env->getExtension("native_profiler");
        $__internal_f1fd6d9e265526cf30f3a6116eeab16d2944f174ede91f26cb9a8adaa1167cdd->enter($__internal_f1fd6d9e265526cf30f3a6116eeab16d2944f174ede91f26cb9a8adaa1167cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    | Urządzenie | Szczegóły
";
        
        $__internal_f1fd6d9e265526cf30f3a6116eeab16d2944f174ede91f26cb9a8adaa1167cdd->leave($__internal_f1fd6d9e265526cf30f3a6116eeab16d2944f174ede91f26cb9a8adaa1167cdd_prof);

    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_924ee666678e32b92a00377371ddc46f394b069ce76ea960fafb698bed840bfb = $this->env->getExtension("native_profiler");
        $__internal_924ee666678e32b92a00377371ddc46f394b069ce76ea960fafb698bed840bfb->enter($__internal_924ee666678e32b92a00377371ddc46f394b069ce76ea960fafb698bed840bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 8
        echo "
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    Urządzenie
                </div>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">
                        <strong>ID:</strong> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "altId", array()), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Właściciel:</strong>
                        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_user_details", array("id" => $this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "user", array()), "id", array()))), "html", null, true);
        echo "\">
                            ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "user", array()), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "user", array()), "surname", array()), "html", null, true);
        echo "
                            ";
        // line 23
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "user", array()), "clientCompanyName", array()))) {
            // line 24
            echo "                                (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "user", array()), "clientCompanyName", array()), "html", null, true);
            echo ")
                            ";
        }
        // line 26
        echo "                        </a>
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Marka i model:</strong> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "brand", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "model", array()), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Numer seryjny:</strong> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "serial", array()), "html", null, true);
        echo "
                    </li>
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "customFields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 35
            echo "                        <li class=\"list-group-item\">
                            <strong>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "customFieldTemplate", array()), "name", array()), "html", null, true);
            echo " :</strong>
                            ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device_manager"]) ? $context["device_manager"] : $this->getContext($context, "device_manager")), "getCustomFieldValueName", array(0 => $context["field"]), "method"), "html", null, true);
            echo "
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    <li class=\"list-group-item\">
                        <strong>Utworzono:</strong> ";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "createdAt", array()), "d.m.Y H:i:s"), "html", null, true);
        echo "
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    Naprawy
                    <a type=\"button\" class=\"btn btn-success btn-xs pull-right\"
                       href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_pokwitowanie_add_repair", array("device" => $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "id", array()))), "html", null, true);
        echo "\">
                        Napraw to urządzenie
                    </a>
                </div>
                ";
        // line 55
        if ($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "repairs", array())) {
            // line 56
            echo "                    <div class=\"table-responsive\" style=\"border-top: none\"
                         id=\"device-repair-list-";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "id", array()), "html", null, true);
            echo "\">
                        <table class=\"table table-striped\" id=\"convertable-table\">
                            <tbody>
                            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "repairs", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["repair"]) {
                // line 61
                echo "                                <tr>
                                    <td data-title=\"Data rozpoczęcia\">";
                // line 62
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["repair"], "startDate", array()), "d.m.Y"), "html", null, true);
                echo "</td>
                                    <td data-title=\"Status\">
                                        ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["repair"], "currentStatus", array()), "name", array()), "html", null, true);
                echo "
                                        ";
                // line 65
                if ( !twig_test_empty($this->getAttribute($context["repair"], "endDate", array()))) {
                    // line 66
                    echo "                                            (";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["repair"], "endDate", array()), "d.m.Y"), "html", null, true);
                    echo ")
                                        ";
                }
                // line 68
                echo "                                    </td>
                                    <td data-title=\"Opis\">";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["repair"], "description", array()), "html", null, true);
                echo "</td>
                                    <td data-title=\"Szczegóły\">
                                        <a href=\"";
                // line 71
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
                // line 77
                echo "                                <tr>
                                    <td data-title=\"Naprawy\" colspan=\"4\"><span>Brak napraw</span></td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repair'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 85
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_924ee666678e32b92a00377371ddc46f394b069ce76ea960fafb698bed840bfb->leave($__internal_924ee666678e32b92a00377371ddc46f394b069ce76ea960fafb698bed840bfb_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Worker:deviceDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 85,  216 => 81,  207 => 77,  196 => 71,  191 => 69,  188 => 68,  182 => 66,  180 => 65,  176 => 64,  171 => 62,  168 => 61,  163 => 60,  157 => 57,  154 => 56,  152 => 55,  145 => 51,  132 => 41,  129 => 40,  120 => 37,  116 => 36,  113 => 35,  109 => 34,  104 => 32,  96 => 29,  91 => 26,  85 => 24,  83 => 23,  77 => 22,  73 => 21,  66 => 17,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     | Urządzenie | Szczegóły*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             <div class="panel panel-info">*/
/*                 <div class="panel-heading">*/
/*                     Urządzenie*/
/*                 </div>*/
/*                 <ul class="list-group">*/
/*                     <li class="list-group-item">*/
/*                         <strong>ID:</strong> {{ device.altId }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Właściciel:</strong>*/
/*                         <a href="{{ path('worker_panel_user_details', {'id': device.user.id}) }}">*/
/*                             {{ device.user.name }} {{ device.user.surname }}*/
/*                             {% if device.user.clientCompanyName is not empty %}*/
/*                                 ({{ device.user.clientCompanyName }})*/
/*                             {% endif %}*/
/*                         </a>*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Marka i model:</strong> {{ device.brand }} {{ device.model }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Numer seryjny:</strong> {{ device.serial }}*/
/*                     </li>*/
/*                     {% for field in device.customFields %}*/
/*                         <li class="list-group-item">*/
/*                             <strong>{{ field.customFieldTemplate.name }} :</strong>*/
/*                             {{ device_manager.getCustomFieldValueName(field) }}*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                     <li class="list-group-item">*/
/*                         <strong>Utworzono:</strong> {{ device.createdAt | date('d.m.Y H:i:s') }}*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <div class="panel panel-info">*/
/*                 <div class="panel-heading">*/
/*                     Naprawy*/
/*                     <a type="button" class="btn btn-success btn-xs pull-right"*/
/*                        href="{{ path('worker_panel_pokwitowanie_add_repair', {'device': device.id}) }}">*/
/*                         Napraw to urządzenie*/
/*                     </a>*/
/*                 </div>*/
/*                 {% if device.repairs %}*/
/*                     <div class="table-responsive" style="border-top: none"*/
/*                          id="device-repair-list-{{ device.id }}">*/
/*                         <table class="table table-striped" id="convertable-table">*/
/*                             <tbody>*/
/*                             {% for repair in device.repairs %}*/
/*                                 <tr>*/
/*                                     <td data-title="Data rozpoczęcia">{{ repair.startDate| date('d.m.Y') }}</td>*/
/*                                     <td data-title="Status">*/
/*                                         {{ repair.currentStatus.name }}*/
/*                                         {% if repair.endDate is not empty %}*/
/*                                             ({{ repair.endDate| date('d.m.Y') }})*/
/*                                         {% endif %}*/
/*                                     </td>*/
/*                                     <td data-title="Opis">{{ repair.description }}</td>*/
/*                                     <td data-title="Szczegóły">*/
/*                                         <a href="{{ path('worker_panel_repair_details',{'id':repair.id}) }}">*/
/*                                             Szczegóły naprawy*/
/*                                         </a>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% else %}*/
/*                                 <tr>*/
/*                                     <td data-title="Naprawy" colspan="4"><span>Brak napraw</span></td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
