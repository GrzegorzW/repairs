<?php

/* AppBundle:Timeline:totalPricingRequest.html.twig */
class __TwigTemplate_0bbfabb61c64d830c964bcc6e6064db5d9b608081a19c4fe6f154f38a0e0d421 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_366bd49efb6e1c2911fe9e0b0863d15be2aec442610de3bce6a513fc4e4ab5ba = $this->env->getExtension("native_profiler");
        $__internal_366bd49efb6e1c2911fe9e0b0863d15be2aec442610de3bce6a513fc4e4ab5ba->enter($__internal_366bd49efb6e1c2911fe9e0b0863d15be2aec442610de3bce6a513fc4e4ab5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Timeline:totalPricingRequest.html.twig"));

        // line 1
        echo "<li>
    <div class=\"timeline-badge primary\">
        <span class=\"timeline-dollar\">\$</span>
    </div>
    <div class=\"timeline-panel\">
        <div class=\"timeline-heading\">
            <h4 class=\"timeline-title\">
                ";
        // line 8
        if ((((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")) == (isset($context["lastRepairTotalPricing"]) ? $context["lastRepairTotalPricing"] : $this->getContext($context, "lastRepairTotalPricing"))) &&  !$this->getAttribute((isset($context["repair"]) ? $context["repair"] : $this->getContext($context, "repair")), "totalRepairPricingChanged", array()))) {
            echo "Aktualna wycena: ";
        } else {
            echo "Wycena: ";
        }
        // line 9
        echo "                <span id=\"repair-total-price-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('money_format')->getCallable(), array($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "totalPrice", array()))), "html", null, true);
        echo "</span>
                <span class=\"glyphicon
                ";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "status", array()), "type", array()) == twig_constant("AppBundle\\Entity\\TotalRepairPricingStatus::TYPE_ACCEPTED"))) {
            // line 12
            echo "                text-success glyphicon-ok
                ";
        } else {
            // line 14
            echo "                text-danger glyphicon-remove
                ";
        }
        // line 15
        echo "\"
                      id=\"pricing-glyphicon-";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id", array()), "html", null, true);
        echo "\"
                      role=\"button\"
                      data-toggle=\"popover\"
                      data-container=\"body\"
                      data-trigger=\"focus hover\" data-placement=\"bottom\"
                      data-content=\"Wycena ";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "status", array()), "type", array()) == twig_constant("AppBundle\\Entity\\TotalRepairPricingStatus::TYPE_ACCEPTED"))) {
            echo "została";
        } else {
            echo "nie została jeszcze";
        }
        echo " zaakceptowana.\">
                </span>
            </h4>
            <p id=\"confirmation-data-";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id", array()), "html", null, true);
        echo "\">
                ";
        // line 25
        if (($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "status", array()), "type", array()) == twig_constant("AppBundle\\Entity\\TotalRepairPricingStatus::TYPE_ACCEPTED"))) {
            // line 26
            echo "                    Data akceptacji: ";
            echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "respondedAt", array()))) ? ("-") : (twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "respondedAt", array()), "d.m.Y H:i:s"))), "html", null, true);
            echo "
                    <br>
                    Sposób akceptacji: ";
            // line 28
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "method", array()), "name", array())), "-"), "html", null, true);
            echo "
                    <br>
                    Przez ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "respondent", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "respondent", array()), "surname", array()), "html", null, true);
            echo "
                ";
        }
        // line 32
        echo "            </p>
            <ul id=\"repair-pricing-descriptions-";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id", array()), "html", null, true);
        echo "\">
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "descriptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["description"]) {
            // line 35
            echo "                    <li>
                        ";
            // line 36
            echo twig_escape_filter($this->env, $context["description"], "html", null, true);
            echo "
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </ul>
            ";
        // line 40
        if ((($this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "status", array()), "type", array()) != twig_constant("AppBundle\\Entity\\TotalRepairPricingStatus::TYPE_ACCEPTED")) && ((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")) == (isset($context["lastRepairTotalPricing"]) ? $context["lastRepairTotalPricing"] : $this->getContext($context, "lastRepairTotalPricing"))))) {
            // line 41
            echo "                    <button role=\"button\" class=\"btn btn-xs btn-success repair-pricing-confirmation-button\"
                            id=\"confirmation-button-";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id", array()), "html", null, true);
            echo "\"
                            onclick=\"
                            ";
            // line 44
            if ($this->env->getExtension('security')->isGranted("ROLE_WORKER")) {
                // line 45
                echo "                                showWorkerPricingAcceptationModal(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id", array()), "html", null, true);
                echo ");
                            ";
            } else {
                // line 47
                echo "                                totalPricingAccept(";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id", array()), "html", null, true);
                echo ");
                            ";
            }
            // line 48
            echo "\"
                            data-id=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id", array()), "html", null, true);
            echo "\">
                        Zaakceptuj wycenę
                    </button>
            ";
        }
        // line 53
        echo "            <br>
            <span>
                <small class=\"text-muted\">
                    ";
        // line 56
        if ($this->env->getExtension('security')->isGranted("ROLE_WORKER")) {
            // line 57
            echo "                        Dodane przez:
                        ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "user", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "user", array()), "surname", array()), "html", null, true);
            echo ",<br>
                    ";
        }
        // line 60
        echo "                    ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "created", array()), "d.m.Y H:i:s"), "html", null, true);
        echo "
                    ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helper_service"]) ? $context["helper_service"] : $this->getContext($context, "helper_service")), "daysVariety", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "created", array())), "method"), "html", null, true);
        echo "
                </small>
            </span>
        </div>
    </div>
</li>";
        
        $__internal_366bd49efb6e1c2911fe9e0b0863d15be2aec442610de3bce6a513fc4e4ab5ba->leave($__internal_366bd49efb6e1c2911fe9e0b0863d15be2aec442610de3bce6a513fc4e4ab5ba_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Timeline:totalPricingRequest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 61,  177 => 60,  170 => 58,  167 => 57,  165 => 56,  160 => 53,  153 => 49,  150 => 48,  144 => 47,  138 => 45,  136 => 44,  131 => 42,  128 => 41,  126 => 40,  123 => 39,  114 => 36,  111 => 35,  107 => 34,  103 => 33,  100 => 32,  93 => 30,  88 => 28,  82 => 26,  80 => 25,  76 => 24,  66 => 21,  58 => 16,  55 => 15,  51 => 14,  47 => 12,  45 => 11,  37 => 9,  31 => 8,  22 => 1,);
    }
}
/* <li>*/
/*     <div class="timeline-badge primary">*/
/*         <span class="timeline-dollar">$</span>*/
/*     </div>*/
/*     <div class="timeline-panel">*/
/*         <div class="timeline-heading">*/
/*             <h4 class="timeline-title">*/
/*                 {% if entry == lastRepairTotalPricing and not repair.totalRepairPricingChanged %}Aktualna wycena: {% else %}Wycena: {% endif %}*/
/*                 <span id="repair-total-price-{{ entry.id }}">{{ entry.totalPrice | money_format }}</span>*/
/*                 <span class="glyphicon*/
/*                 {% if entry.status.type == constant('AppBundle\\Entity\\TotalRepairPricingStatus::TYPE_ACCEPTED') %}*/
/*                 text-success glyphicon-ok*/
/*                 {% else %}*/
/*                 text-danger glyphicon-remove*/
/*                 {% endif %}"*/
/*                       id="pricing-glyphicon-{{ entry.id }}"*/
/*                       role="button"*/
/*                       data-toggle="popover"*/
/*                       data-container="body"*/
/*                       data-trigger="focus hover" data-placement="bottom"*/
/*                       data-content="Wycena {% if entry.status.type == constant('AppBundle\\Entity\\TotalRepairPricingStatus::TYPE_ACCEPTED') %}została{% else %}nie została jeszcze{% endif %} zaakceptowana.">*/
/*                 </span>*/
/*             </h4>*/
/*             <p id="confirmation-data-{{ entry.id }}">*/
/*                 {% if entry.status.type == constant('AppBundle\\Entity\\TotalRepairPricingStatus::TYPE_ACCEPTED') %}*/
/*                     Data akceptacji: {{ entry.respondedAt is empty ? "-" : entry.respondedAt|date('d.m.Y H:i:s') }}*/
/*                     <br>*/
/*                     Sposób akceptacji: {{ entry.method.name |trans|default('-') }}*/
/*                     <br>*/
/*                     Przez {{ entry.respondent.name }} {{ entry.respondent.surname }}*/
/*                 {% endif %}*/
/*             </p>*/
/*             <ul id="repair-pricing-descriptions-{{ entry.id }}">*/
/*                 {% for description in entry.descriptions %}*/
/*                     <li>*/
/*                         {{ description }}*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*             {% if entry.status.type != constant('AppBundle\\Entity\\TotalRepairPricingStatus::TYPE_ACCEPTED') and entry == lastRepairTotalPricing %}*/
/*                     <button role="button" class="btn btn-xs btn-success repair-pricing-confirmation-button"*/
/*                             id="confirmation-button-{{ entry.id }}"*/
/*                             onclick="*/
/*                             {% if is_granted('ROLE_WORKER') %}*/
/*                                 showWorkerPricingAcceptationModal({{ entry.id }});*/
/*                             {% else %}*/
/*                                 totalPricingAccept({{ entry.id }});*/
/*                             {% endif %}"*/
/*                             data-id="{{ entry.id }}">*/
/*                         Zaakceptuj wycenę*/
/*                     </button>*/
/*             {% endif %}*/
/*             <br>*/
/*             <span>*/
/*                 <small class="text-muted">*/
/*                     {% if is_granted('ROLE_WORKER') %}*/
/*                         Dodane przez:*/
/*                         {{ entry.user.name }} {{ entry.user.surname }},<br>*/
/*                     {% endif %}*/
/*                     {{ entry.created |date('d.m.Y H:i:s') }}*/
/*                     {{ helper_service.daysVariety(entry.created) }}*/
/*                 </small>*/
/*             </span>*/
/*         </div>*/
/*     </div>*/
/* </li>*/
