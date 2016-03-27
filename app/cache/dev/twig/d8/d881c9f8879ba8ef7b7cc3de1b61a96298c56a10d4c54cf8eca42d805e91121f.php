<?php

/* AppBundle:Worker:addRepair.html.twig */
class __TwigTemplate_979b148e870bbf2710a89e8bdd15cf4a86697babe4091f66d1e48861ea9cfe1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Worker:addRepair.html.twig", 1);
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
        $__internal_e9ce1611a5b4cda5842133df675e63dbcc1ee6e7c6eba7dee4ba847bd26304a6 = $this->env->getExtension("native_profiler");
        $__internal_e9ce1611a5b4cda5842133df675e63dbcc1ee6e7c6eba7dee4ba847bd26304a6->enter($__internal_e9ce1611a5b4cda5842133df675e63dbcc1ee6e7c6eba7dee4ba847bd26304a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Worker:addRepair.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9ce1611a5b4cda5842133df675e63dbcc1ee6e7c6eba7dee4ba847bd26304a6->leave($__internal_e9ce1611a5b4cda5842133df675e63dbcc1ee6e7c6eba7dee4ba847bd26304a6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b1173203f6fd899957f238ccf57441d1ebd5d20a8eaab83bfdea7631ca858f3 = $this->env->getExtension("native_profiler");
        $__internal_8b1173203f6fd899957f238ccf57441d1ebd5d20a8eaab83bfdea7631ca858f3->enter($__internal_8b1173203f6fd899957f238ccf57441d1ebd5d20a8eaab83bfdea7631ca858f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    | Nowe pokwitowanie | Dodaj naprawę
";
        
        $__internal_8b1173203f6fd899957f238ccf57441d1ebd5d20a8eaab83bfdea7631ca858f3->leave($__internal_8b1173203f6fd899957f238ccf57441d1ebd5d20a8eaab83bfdea7631ca858f3_prof);

    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_177e99bd99e047e7694c2f6eb8de568df790a231946b314b8485861bb23110cd = $this->env->getExtension("native_profiler");
        $__internal_177e99bd99e047e7694c2f6eb8de568df790a231946b314b8485861bb23110cd->enter($__internal_177e99bd99e047e7694c2f6eb8de568df790a231946b314b8485861bb23110cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("AppBundle::alerts.html.twig", "AppBundle:Worker:addRepair.html.twig", 9)->display($context);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_user_details", array("id" => $this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "user", array()), "id", array()))), "html", null, true);
        echo "\"
                           class=\"btn btn-xs btn-success\">
                            Popraw
                        </a>
                    </div>
                </div>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\"><strong>ID:</strong> ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "user", array()), "altId", array()), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item\"><strong>Imię i
                            nazwisko:</strong> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "user", array()), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "user", array()), "surname", array()), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item\"><strong>Tel:</strong> ";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "user", array()), "tel", array()))), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item\"><strong>E-mail:</strong>
                        ";
        // line 29
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : null), "user", array(), "any", false, true), "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : null), "user", array(), "any", false, true), "email", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\"><strong>Zgoda marketingowa:</strong>
                        ";
        // line 32
        if ($this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "user", array()), "marketingAgreement", array())) {
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
                    <li class=\"list-group-item user-invoice-data-body\">
                        <strong>Nazwa firmy:</strong> ";
        // line 46
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : null), "user", array(), "any", false, true), "clientCompanyName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : null), "user", array(), "any", false, true), "clientCompanyName", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item user-invoice-data-body\">
                        <strong>Adres:</strong> ";
        // line 49
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : null), "user", array(), "any", false, true), "clientCompanyAddress", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : null), "user", array(), "any", false, true), "clientCompanyAddress", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item user-invoice-data-body\">
                        <strong>Kod pocztowy:</strong> ";
        // line 52
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : null), "user", array(), "any", false, true), "clientCompanyPostCode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : null), "user", array(), "any", false, true), "clientCompanyPostCode", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item user-invoice-data-body\">
                        <strong>Miasto:</strong> ";
        // line 55
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : null), "user", array(), "any", false, true), "clientCompanyCity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : null), "user", array(), "any", false, true), "clientCompanyCity", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item user-invoice-data-body\">
                        <strong>NIP:</strong> ";
        // line 58
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : null), "user", array(), "any", false, true), "clientCompanyNIP", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : null), "user", array(), "any", false, true), "clientCompanyNIP", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    Urządzenie
                    <div class=\"pull-right\">
                        <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_pokwitowanie_add_device", array("id" => $this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "user", array()), "id", array()))), "html", null, true);
        echo "\"
                           class=\"btn btn-xs btn-success\">
                            Inne urządzenie
                        </a>
                    </div>
                </div>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\"><strong>Typ:</strong> ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "deviceType", array()), "name", array()), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item\"><strong>Marka</strong> ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "brand", array()), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item\"><strong>Model:</strong> ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "model", array()), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item\"><strong>Numer seryjny:</strong> ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "serial", array()), "html", null, true);
        echo "</li>
                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["device"]) ? $context["device"] : $this->getContext($context, "device")), "customFields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 80
            echo "                        <li class=\"list-group-item\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "customFieldTemplate", array()), "name", array()), "html", null, true);
            echo "
                                :</strong> ";
            // line 81
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["device_manager"]) ? $context["device_manager"] : null), "getCustomFieldValueName", array(0 => $context["field"]), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["device_manager"]) ? $context["device_manager"] : null), "getCustomFieldValueName", array(0 => $context["field"]), "method"), "-")) : ("-")), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </ul>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">Naprawa</div>
                <div class=\"panel-body\">
                    ";
        // line 90
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRepair"]) ? $context["formRepair"] : $this->getContext($context, "formRepair")), 'form_start');
        echo "
                    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRepair"]) ? $context["formRepair"] : $this->getContext($context, "formRepair")), "description", array()), 'row', array("attr" => array("autofocus" => "autofocus", "class" => "input-sm"), "label" => "Opis usterki i uwagi"));
        echo "
                    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRepair"]) ? $context["formRepair"] : $this->getContext($context, "formRepair")), "addition", array()), 'row', array("label" => "Dodatkowo", "attr" => array("class" => "input-sm")));
        echo "
                    ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRepair"]) ? $context["formRepair"] : $this->getContext($context, "formRepair")), "payment_method", array()), 'row', array("label" => "Preferowana metoda płatności", "attr" => array("class" => "input-sm")));
        echo "
                    <input type=\"submit\" class=\"btn btn-success btn-sm pull-right\" value=\"Utwórz naprawę\">
                    ";
        // line 95
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRepair"]) ? $context["formRepair"] : $this->getContext($context, "formRepair")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>

    <script>
        \$(document).ready(function () {
            \$('.user-invoice-data').click(function () {
                \$('.user-invoice-data-body').toggleClass(\"hidden\");
            });
        })
    </script>
";
        
        $__internal_177e99bd99e047e7694c2f6eb8de568df790a231946b314b8485861bb23110cd->leave($__internal_177e99bd99e047e7694c2f6eb8de568df790a231946b314b8485861bb23110cd_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Worker:addRepair.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 95,  223 => 93,  219 => 92,  215 => 91,  211 => 90,  202 => 83,  194 => 81,  189 => 80,  185 => 79,  181 => 78,  177 => 77,  173 => 76,  169 => 75,  159 => 68,  146 => 58,  140 => 55,  134 => 52,  128 => 49,  122 => 46,  111 => 37,  107 => 35,  103 => 33,  101 => 32,  95 => 29,  90 => 27,  84 => 26,  79 => 24,  69 => 17,  60 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     | Nowe pokwitowanie | Dodaj naprawę*/
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
/*                         <a href="{{ path('worker_panel_user_details',{'id': device.user.id}) }}"*/
/*                            class="btn btn-xs btn-success">*/
/*                             Popraw*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <ul class="list-group">*/
/*                     <li class="list-group-item"><strong>ID:</strong> {{ device.user.altId }}</li>*/
/*                     <li class="list-group-item"><strong>Imię i*/
/*                             nazwisko:</strong> {{ device.user.name }} {{ device.user.surname }}</li>*/
/*                     <li class="list-group-item"><strong>Tel:</strong> {{ phone_number_format(device.user.tel) }}</li>*/
/*                     <li class="list-group-item"><strong>E-mail:</strong>*/
/*                         {{ device.user.email|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item"><strong>Zgoda marketingowa:</strong>*/
/*                         {% if device.user.marketingAgreement %}*/
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
/*                     <li class="list-group-item user-invoice-data-body">*/
/*                         <strong>Nazwa firmy:</strong> {{ device.user.clientCompanyName|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item user-invoice-data-body">*/
/*                         <strong>Adres:</strong> {{ device.user.clientCompanyAddress|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item user-invoice-data-body">*/
/*                         <strong>Kod pocztowy:</strong> {{ device.user.clientCompanyPostCode|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item user-invoice-data-body">*/
/*                         <strong>Miasto:</strong> {{ device.user.clientCompanyCity|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item user-invoice-data-body">*/
/*                         <strong>NIP:</strong> {{ device.user.clientCompanyNIP|default('-') }}*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             <div class="panel panel-info">*/
/*                 <div class="panel-heading">*/
/*                     Urządzenie*/
/*                     <div class="pull-right">*/
/*                         <a href="{{ path('worker_panel_pokwitowanie_add_device',{'id': device.user.id}) }}"*/
/*                            class="btn btn-xs btn-success">*/
/*                             Inne urządzenie*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*                 <ul class="list-group">*/
/*                     <li class="list-group-item"><strong>Typ:</strong> {{ device.deviceType.name }}</li>*/
/*                     <li class="list-group-item"><strong>Marka</strong> {{ device.brand }}</li>*/
/*                     <li class="list-group-item"><strong>Model:</strong> {{ device.model }}</li>*/
/*                     <li class="list-group-item"><strong>Numer seryjny:</strong> {{ device.serial }}</li>*/
/*                     {% for field in device.customFields %}*/
/*                         <li class="list-group-item"><strong>{{ field.customFieldTemplate.name }}*/
/*                                 :</strong> {{ device_manager.getCustomFieldValueName(field) | default('-') }}</li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-4">*/
/*             <div class="panel panel-info">*/
/*                 <div class="panel-heading">Naprawa</div>*/
/*                 <div class="panel-body">*/
/*                     {{ form_start(formRepair) }}*/
/*                     {{ form_row(formRepair.description, { 'attr': {'autofocus': 'autofocus', 'class': 'input-sm'}, 'label': 'Opis usterki i uwagi' }) }}*/
/*                     {{ form_row(formRepair.addition, { 'label': 'Dodatkowo', 'attr': {'class': 'input-sm'} }) }}*/
/*                     {{ form_row(formRepair.payment_method, { 'label': 'Preferowana metoda płatności', 'attr': {'class': 'input-sm'} }) }}*/
/*                     <input type="submit" class="btn btn-success btn-sm pull-right" value="Utwórz naprawę">*/
/*                     {{ form_end(formRepair) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <script>*/
/*         $(document).ready(function () {*/
/*             $('.user-invoice-data').click(function () {*/
/*                 $('.user-invoice-data-body').toggleClass("hidden");*/
/*             });*/
/*         })*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
