<?php

/* AppBundle:User:repairDetails.html.twig */
class __TwigTemplate_adb11359c27b6bfb14f7097ad25e0594485fb44f490c2c53df69ae760e5185d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:repairDetails.html.twig", 1);
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
        $__internal_2f29f67569ba67dd03d0eeed4a19e4701c220a9dbe24a6d3f13db364e088c549 = $this->env->getExtension("native_profiler");
        $__internal_2f29f67569ba67dd03d0eeed4a19e4701c220a9dbe24a6d3f13db364e088c549->enter($__internal_2f29f67569ba67dd03d0eeed4a19e4701c220a9dbe24a6d3f13db364e088c549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:repairDetails.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f29f67569ba67dd03d0eeed4a19e4701c220a9dbe24a6d3f13db364e088c549->leave($__internal_2f29f67569ba67dd03d0eeed4a19e4701c220a9dbe24a6d3f13db364e088c549_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c228f9299303e21726313ce0a4f3889d68ea4706d4a7a39f707df108de8b9339 = $this->env->getExtension("native_profiler");
        $__internal_c228f9299303e21726313ce0a4f3889d68ea4706d4a7a39f707df108de8b9339->enter($__internal_c228f9299303e21726313ce0a4f3889d68ea4706d4a7a39f707df108de8b9339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    | Szczegóły naprawy
";
        
        $__internal_c228f9299303e21726313ce0a4f3889d68ea4706d4a7a39f707df108de8b9339->leave($__internal_c228f9299303e21726313ce0a4f3889d68ea4706d4a7a39f707df108de8b9339_prof);

    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_bc12fa6acf24af6a28a8abd22ccfc0434033e8cd9109c389eaf18c59392357cc = $this->env->getExtension("native_profiler");
        $__internal_bc12fa6acf24af6a28a8abd22ccfc0434033e8cd9109c389eaf18c59392357cc->enter($__internal_bc12fa6acf24af6a28a8abd22ccfc0434033e8cd9109c389eaf18c59392357cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("AppBundle::alerts.html.twig", "AppBundle:User:repairDetails.html.twig", 9)->display($context);
        // line 10
        echo "
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">Sprzęt</div>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\"><b>Marka i model:</b> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "device", array()), "brand", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "device", array()), "model", array()), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\"><b>S/N:</b> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "device", array()), "serial", array()), "html", null, true);
        echo "</li>
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "device", array()), "customFields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 20
            echo "                        <li class=\"list-group-item\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "customFieldTemplate", array()), "name", array()), "html", null, true);
            echo "
                                :</strong> ";
            // line 21
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["device_manager"]) ? $context["device_manager"] : null), "getCustomFieldValueName", array(0 => $context["field"]), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["device_manager"]) ? $context["device_manager"] : null), "getCustomFieldValueName", array(0 => $context["field"]), "method"), "-")) : ("-")), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                    <li class=\"list-group-item\"><b>Dodatkowo:</b>
                        ";
        // line 24
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "addition", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["repair"]) ? $context["repair"] : null), "addition", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\"><b>Opis usterki:</b> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "description", array()), "html", null, true);
        echo "</li>
                </ul>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">Naprawa</div>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\"><b>ID naprawy:</b> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "altId", array()), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item\"><b>Data przyjęcia: </b> ";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "startDate", array()), "d.m.Y"), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item\"><b>Data zakończenia: </b>
                        ";
        // line 37
        if (( !(null === $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "endDate", array())) && ($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "currentStatus", array()), "id", array()) != twig_constant("AppBundle\\Entity\\Status::STATUS_RETURNED")))) {
            // line 38
            echo "                            ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "endDate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "
                        ";
        } else {
            // line 40
            echo "                            -
                        ";
        }
        // line 42
        echo "                    </li>
                    <li class=\"list-group-item\">
                        <b>Aktualny status:</b> ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "currentStatus", array()), "name", array()), "html", null, true);
        echo "
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">Timeline</div>
                <div class=\"panel-body\">
                    <div id=\"messages\">
                        <ul class=\"timeline\">
                            ";
        // line 57
        if ( !(null === $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "opinion", array()))) {
            // line 59
            echo "<li class=\"timeline-fullwidth opinion\">
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">Opinia:</h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>
                                                ";
            // line 66
            echo $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "opinion", array());
            echo "
                                            </p>
                                            <p>
                                                <small class=\"text-muted\">";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "opinionDate", array()), "d.m.Y H:i:s"), "html", null, true);
            echo "</small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class=\"timeline-badge warning\"><i class=\"glyphicon glyphicon-edit timeline-glyphicon\"></i>
                                    </div>
                                </li>";
        }
        // line 78
        echo "                            ";
        if ((($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "currentStatus", array()), "id", array()) == twig_constant("AppBundle\\Entity\\Status::STATUS_RETURNED")) && (null === $this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "opinion", array())))) {
            // line 80
            echo "<li class=\"timeline-inverted\">
                                    <div class=\"timeline-badge warning\">
                                        <i class=\"glyphicon glyphicon-plus timeline-glyphicon\"></i>
                                    </div>
                                    <div class=\"timeline-panel read\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">
                                                Twoja opinia:
                                            </h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            ";
            // line 91
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formOpinion"]) ? $context["formOpinion"] : $this->getContext($context, "formOpinion")), 'form_start');
            echo "
                                            <div class=\"form-group";
            // line 92
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOpinion"]) ? $context["formOpinion"] : $this->getContext($context, "formOpinion")), "opinion", array()), 'errors')) {
                echo " has-error ";
            }
            echo "\">
                                                ";
            // line 93
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOpinion"]) ? $context["formOpinion"] : $this->getContext($context, "formOpinion")), "opinion", array()), 'widget');
            echo "
                                            </div>
                                            <div class=\"col-md-10 has-error\">
                                                ";
            // line 96
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOpinion"]) ? $context["formOpinion"] : $this->getContext($context, "formOpinion")), "opinion", array()), 'errors');
            echo "
                                            </div>
                                            <div class=\"form-group col-md-2\">
                                                ";
            // line 99
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formOpinion"]) ? $context["formOpinion"] : $this->getContext($context, "formOpinion")), "send", array()), 'widget', array("attr" => array("class" => "btn-success pull-right")));
            echo "
                                            </div>
                                            ";
            // line 101
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formOpinion"]) ? $context["formOpinion"] : $this->getContext($context, "formOpinion")), 'form_end');
            echo "
                                        </div>
                                    </div>
                                </li>";
        }
        // line 107
        echo "                            ";
        if (($this->getAttribute($this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "currentStatus", array()), "id", array()) != twig_constant("AppBundle\\Entity\\Status::STATUS_RETURNED"))) {
            // line 109
            echo "<li class=\"timeline-inverted\">
                                    <div class=\"timeline-badge info\">
                                        <i class=\"glyphicon glyphicon-plus timeline-glyphicon\"></i>
                                    </div>
                                    <div class=\"timeline-panel read\">
                                        <div class=\"timeline-heading\">
                                            <h4 class=\"timeline-title\">
                                                Nowa wiadomość:
                                            </h4>
                                        </div>
                                        <div class=\"timeline-body\">
                                            ";
            // line 120
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formNewUserMessage"]) ? $context["formNewUserMessage"] : $this->getContext($context, "formNewUserMessage")), 'form_start');
            echo "
                                            <div class=\"form-group";
            // line 121
            if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewUserMessage"]) ? $context["formNewUserMessage"] : $this->getContext($context, "formNewUserMessage")), "content", array()), 'errors')) {
                echo " has-error ";
            }
            echo "\">
                                                ";
            // line 122
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewUserMessage"]) ? $context["formNewUserMessage"] : $this->getContext($context, "formNewUserMessage")), "content", array()), 'widget');
            echo "
                                            </div>
                                            <div class=\"col-md-10 has-error\">
                                                ";
            // line 125
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewUserMessage"]) ? $context["formNewUserMessage"] : $this->getContext($context, "formNewUserMessage")), "content", array()), 'errors');
            echo "
                                            </div>
                                            <div class=\"form-group col-md-2\">
                                                ";
            // line 128
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewUserMessage"]) ? $context["formNewUserMessage"] : $this->getContext($context, "formNewUserMessage")), "send", array()), 'widget', array("attr" => array("class" => "btn-success pull-right")));
            echo "
                                            </div>
                                            ";
            // line 130
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formNewUserMessage"]) ? $context["formNewUserMessage"] : $this->getContext($context, "formNewUserMessage")), 'form_end');
            echo "
                                        </div>
                                    </div>
                                </li>";
        }
        // line 136
        echo "                            ";
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
            // line 137
            echo "                                ";
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
                // line 138
                echo "                                    ";
                if ($this->getAttribute((isset($context["helper_service"]) ? $context["helper_service"] : $this->getContext($context, "helper_service")), "instanceOf", array(0 => $context["entry"], 1 => "AppBundle\\Entity\\Message"), "method")) {
                    // line 139
                    echo "                                        ";
                    $this->loadTemplate("AppBundle:Timeline:message.html.twig", "AppBundle:User:repairDetails.html.twig", 139)->display($context);
                    // line 140
                    echo "                                    ";
                } elseif ($this->getAttribute((isset($context["helper_service"]) ? $context["helper_service"] : $this->getContext($context, "helper_service")), "instanceOf", array(0 => $context["entry"], 1 => "AppBundle\\Entity\\RepairersHistory"), "method")) {
                    // line 141
                    echo "                                        ";
                    $this->loadTemplate("AppBundle:Timeline:repairersHistory.html.twig", "AppBundle:User:repairDetails.html.twig", 141)->display($context);
                    // line 142
                    echo "                                    ";
                } elseif ($this->getAttribute((isset($context["helper_service"]) ? $context["helper_service"] : $this->getContext($context, "helper_service")), "instanceOf", array(0 => $context["entry"], 1 => "AppBundle\\Entity\\RepairStatus"), "method")) {
                    // line 143
                    echo "                                        ";
                    $this->loadTemplate("AppBundle:Timeline:repairStatus.html.twig", "AppBundle:User:repairDetails.html.twig", 143)->display($context);
                    // line 144
                    echo "                                    ";
                } elseif ($this->getAttribute((isset($context["helper_service"]) ? $context["helper_service"] : $this->getContext($context, "helper_service")), "instanceOf", array(0 => $context["entry"], 1 => "AppBundle\\Entity\\TotalRepairPricing"), "method")) {
                    // line 145
                    echo "                                        ";
                    $this->loadTemplate("AppBundle:Timeline:totalPricingRequest.html.twig", "AppBundle:User:repairDetails.html.twig", 145)->display($context);
                    // line 146
                    echo "                                    ";
                }
                // line 147
                echo "                                ";
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
            // line 148
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
        // line 149
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        \$(function () {
            \$('[data-toggle=\"popover\"]').popover()
        });

        function totalPricingAccept(id) {

            var url = '";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("api_set_total_repair_pricing_responsetotal_repair_pricing_response", array("pricing" => 111111, "responseMethod" => 222222, "pricingStatus" => 333333)), "html", null, true);
        echo "';
            url = url.replace(111111, id).replace(222222, '";
        // line 163
        echo twig_escape_filter($this->env, twig_constant("AppBundle\\Entity\\TotalRepairPricingResponseMethod::TYPE_APP"), "html", null, true);
        echo "').replace(333333, '";
        echo twig_escape_filter($this->env, twig_constant("AppBundle\\Entity\\TotalRepairPricingStatus::TYPE_ACCEPTED"), "html", null, true);
        echo "';

            \$.ajax({
                type: 'PATCH',
                url: url,
                success: function (data, status, xhr) {
                    if (xhr.status == 204) {
                        swal(\"Wycena naprawy została zaakceptowana\", null, \"success\");

                        \$('#confirmation-button-' + id).addClass('hidden');
                        \$('#pricing-glyphicon-' + id).removeClass('glyphicon-remove text-danger').addClass('glyphicon-ok text-success');

                        \$('#confirmation-data-' + id).html(
                                'Data akceptacji: ' + moment().format(\"DD.MM.YYYY HH:mm:ss\") +
                                '<br>' +
                                'Sposób akceptacji: poprzez aplikację');
                    }
                },
                error: function () {
                    swal(\"Wystąpiły błędy\", null, \"error\")
                }
            });
        }
    </script>

";
        
        $__internal_bc12fa6acf24af6a28a8abd22ccfc0434033e8cd9109c389eaf18c59392357cc->leave($__internal_bc12fa6acf24af6a28a8abd22ccfc0434033e8cd9109c389eaf18c59392357cc_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:repairDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 163,  389 => 162,  374 => 149,  360 => 148,  346 => 147,  343 => 146,  340 => 145,  337 => 144,  334 => 143,  331 => 142,  328 => 141,  325 => 140,  322 => 139,  319 => 138,  301 => 137,  283 => 136,  276 => 130,  271 => 128,  265 => 125,  259 => 122,  253 => 121,  249 => 120,  236 => 109,  233 => 107,  226 => 101,  221 => 99,  215 => 96,  209 => 93,  203 => 92,  199 => 91,  186 => 80,  183 => 78,  173 => 69,  167 => 66,  158 => 59,  156 => 57,  140 => 44,  136 => 42,  132 => 40,  126 => 38,  124 => 37,  119 => 35,  115 => 34,  104 => 26,  99 => 24,  96 => 23,  88 => 21,  83 => 20,  79 => 19,  75 => 18,  68 => 16,  60 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     | Szczegóły naprawy*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     {% include 'AppBundle::alerts.html.twig' %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             <div class="panel panel-info">*/
/*                 <div class="panel-heading">Sprzęt</div>*/
/*                 <ul class="list-group">*/
/*                     <li class="list-group-item"><b>Marka i model:</b> {{ repair.device.brand }} {{ repair.device.model }}*/
/*                     </li>*/
/*                     <li class="list-group-item"><b>S/N:</b> {{ repair.device.serial }}</li>*/
/*                     {% for field in repair.device.customFields %}*/
/*                         <li class="list-group-item"><strong>{{ field.customFieldTemplate.name }}*/
/*                                 :</strong> {{ device_manager.getCustomFieldValueName(field) |default('-') }}</li>*/
/*                     {% endfor %}*/
/*                     <li class="list-group-item"><b>Dodatkowo:</b>*/
/*                         {{ repair.addition|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item"><b>Opis usterki:</b> {{ repair.description }}</li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-md-6">*/
/*             <div class="panel panel-info">*/
/*                 <div class="panel-heading">Naprawa</div>*/
/*                 <ul class="list-group">*/
/*                     <li class="list-group-item"><b>ID naprawy:</b> {{ repair.altId }}</li>*/
/*                     <li class="list-group-item"><b>Data przyjęcia: </b> {{ repair.startDate | date('d.m.Y') }}</li>*/
/*                     <li class="list-group-item"><b>Data zakończenia: </b>*/
/*                         {% if repair.endDate is not null and repair.currentStatus.id != constant('AppBundle\\Entity\\Status::STATUS_RETURNED') %}*/
/*                             {{ repair.endDate | date('Y-m-d H:i:s') }}*/
/*                         {% else %}*/
/*                             -*/
/*                         {% endif %}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <b>Aktualny status:</b> {{ repair.currentStatus.name }}*/
/*                     </li>*/
/*                 </ul>*/
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
/*                             {% if repair.opinion is not null %}*/
/*                                 {#----TIMELINE OPIONION BEGIN----#}*/
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
/*                                     <div class="timeline-badge warning"><i class="glyphicon glyphicon-edit timeline-glyphicon"></i>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 {#----TIMELINE OPIONION END----#}*/
/*                             {% endif %}*/
/*                             {% if repair.currentStatus.id == constant('AppBundle\\Entity\\Status::STATUS_RETURNED') and repair.opinion is null %}*/
/*                                 {#----ADD OPINION START----#}*/
/*                                 <li class="timeline-inverted">*/
/*                                     <div class="timeline-badge warning">*/
/*                                         <i class="glyphicon glyphicon-plus timeline-glyphicon"></i>*/
/*                                     </div>*/
/*                                     <div class="timeline-panel read">*/
/*                                         <div class="timeline-heading">*/
/*                                             <h4 class="timeline-title">*/
/*                                                 Twoja opinia:*/
/*                                             </h4>*/
/*                                         </div>*/
/*                                         <div class="timeline-body">*/
/*                                             {{ form_start(formOpinion) }}*/
/*                                             <div class="form-group{% if form_errors(formOpinion.opinion) %} has-error {% endif %}">*/
/*                                                 {{ form_widget(formOpinion.opinion) }}*/
/*                                             </div>*/
/*                                             <div class="col-md-10 has-error">*/
/*                                                 {{ form_errors(formOpinion.opinion) }}*/
/*                                             </div>*/
/*                                             <div class="form-group col-md-2">*/
/*                                                 {{ form_widget(formOpinion.send, {'attr': {'class': 'btn-success pull-right'}}) }}*/
/*                                             </div>*/
/*                                             {{ form_end(formOpinion) }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 {#----ADD OPINION STOP----#}*/
/*                             {% endif %}*/
/*                             {% if repair.currentStatus.id != constant('AppBundle\\Entity\\Status::STATUS_RETURNED') %}*/
/*                                 {#----MESSAGE START----#}*/
/*                                 <li class="timeline-inverted">*/
/*                                     <div class="timeline-badge info">*/
/*                                         <i class="glyphicon glyphicon-plus timeline-glyphicon"></i>*/
/*                                     </div>*/
/*                                     <div class="timeline-panel read">*/
/*                                         <div class="timeline-heading">*/
/*                                             <h4 class="timeline-title">*/
/*                                                 Nowa wiadomość:*/
/*                                             </h4>*/
/*                                         </div>*/
/*                                         <div class="timeline-body">*/
/*                                             {{ form_start(formNewUserMessage) }}*/
/*                                             <div class="form-group{% if form_errors(formNewUserMessage.content) %} has-error {% endif %}">*/
/*                                                 {{ form_widget(formNewUserMessage.content) }}*/
/*                                             </div>*/
/*                                             <div class="col-md-10 has-error">*/
/*                                                 {{ form_errors(formNewUserMessage.content) }}*/
/*                                             </div>*/
/*                                             <div class="form-group col-md-2">*/
/*                                                 {{ form_widget(formNewUserMessage.send, {'attr': {'class': 'btn-success pull-right'}}) }}*/
/*                                             </div>*/
/*                                             {{ form_end(formNewUserMessage) }}*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 {#----MESSAGE STOP----#}*/
/*                             {% endif %}*/
/*                             {% for entry in timeline %}*/
/*                                 {% for entry in timeline %}*/
/*                                     {% if helper_service.instanceOf(entry, 'AppBundle\\Entity\\Message') %}*/
/*                                         {% include 'AppBundle:Timeline:message.html.twig' %}*/
/*                                     {% elseif helper_service.instanceOf(entry, 'AppBundle\\Entity\\RepairersHistory') %}*/
/*                                         {% include 'AppBundle:Timeline:repairersHistory.html.twig' %}*/
/*                                     {% elseif helper_service.instanceOf(entry, 'AppBundle\\Entity\\RepairStatus') %}*/
/*                                         {% include 'AppBundle:Timeline:repairStatus.html.twig' %}*/
/*                                     {% elseif helper_service.instanceOf(entry, 'AppBundle\\Entity\\TotalRepairPricing') %}*/
/*                                         {% include 'AppBundle:Timeline:totalPricingRequest.html.twig' %}*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <script>*/
/*         $(function () {*/
/*             $('[data-toggle="popover"]').popover()*/
/*         });*/
/* */
/*         function totalPricingAccept(id) {*/
/* */
/*             var url = '{{ path('api_set_total_repair_pricing_responsetotal_repair_pricing_response', {'pricing':111111, 'responseMethod': 222222, 'pricingStatus': 333333}) }}';*/
/*             url = url.replace(111111, id).replace(222222, '{{ constant('AppBundle\\Entity\\TotalRepairPricingResponseMethod::TYPE_APP') }}').replace(333333, '{{ constant('AppBundle\\Entity\\TotalRepairPricingStatus::TYPE_ACCEPTED') }}';*/
/* */
/*             $.ajax({*/
/*                 type: 'PATCH',*/
/*                 url: url,*/
/*                 success: function (data, status, xhr) {*/
/*                     if (xhr.status == 204) {*/
/*                         swal("Wycena naprawy została zaakceptowana", null, "success");*/
/* */
/*                         $('#confirmation-button-' + id).addClass('hidden');*/
/*                         $('#pricing-glyphicon-' + id).removeClass('glyphicon-remove text-danger').addClass('glyphicon-ok text-success');*/
/* */
/*                         $('#confirmation-data-' + id).html(*/
/*                                 'Data akceptacji: ' + moment().format("DD.MM.YYYY HH:mm:ss") +*/
/*                                 '<br>' +*/
/*                                 'Sposób akceptacji: poprzez aplikację');*/
/*                     }*/
/*                 },*/
/*                 error: function () {*/
/*                     swal("Wystąpiły błędy", null, "error")*/
/*                 }*/
/*             });*/
/*         }*/
/*     </script>*/
/* */
/* {% endblock %}*/
