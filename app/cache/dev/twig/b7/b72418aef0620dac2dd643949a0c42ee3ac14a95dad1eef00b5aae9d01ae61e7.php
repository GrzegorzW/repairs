<?php

/* AppBundle:Timeline:repairersHistory.html.twig */
class __TwigTemplate_94521e518e65cc1d4c5b25784c8b545cc4bbe2606ccef82b5ab32d7b952edd18 extends Twig_Template
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
        $__internal_0e895ec9f3a35b75245d945e5c070f5352d6838b281e6142c0dd37cb793ab1a4 = $this->env->getExtension("native_profiler");
        $__internal_0e895ec9f3a35b75245d945e5c070f5352d6838b281e6142c0dd37cb793ab1a4->enter($__internal_0e895ec9f3a35b75245d945e5c070f5352d6838b281e6142c0dd37cb793ab1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Timeline:repairersHistory.html.twig"));

        // line 1
        if ($this->env->getExtension('security')->isGranted("ROLE_WORKER")) {
            // line 2
            echo "    <li>
        <div class=\"timeline-badge danger\">
            <i class=\"glyphicon glyphicon glyphicon-wrench timeline-glyphicon\"></i>
        </div>
        <div class=\"timeline-panel\">
            <div class=\"timeline-heading\">
                <h4 class=\"timeline-title\">
                    Naprawiajacy: ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "user", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "user", array()), "surname", array()), "html", null, true);
            echo "
                </h4>
            <span>
                <small class=\"text-muted\">
                    Dodane przez:
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "author", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "author", array()), "surname", array()), "html", null, true);
            echo ",<br>
                    ";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "created", array()), "d.m.Y H:i:s"), "html", null, true);
            echo "
                    ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helper_service"]) ? $context["helper_service"] : $this->getContext($context, "helper_service")), "daysVariety", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "created", array())), "method"), "html", null, true);
            echo "
                </small>
            </span>
            </div>
        </div>
    </li>
";
        }
        
        $__internal_0e895ec9f3a35b75245d945e5c070f5352d6838b281e6142c0dd37cb793ab1a4->leave($__internal_0e895ec9f3a35b75245d945e5c070f5352d6838b281e6142c0dd37cb793ab1a4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Timeline:repairersHistory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  49 => 15,  43 => 14,  33 => 9,  24 => 2,  22 => 1,);
    }
}
/* {% if is_granted('ROLE_WORKER') %}*/
/*     <li>*/
/*         <div class="timeline-badge danger">*/
/*             <i class="glyphicon glyphicon glyphicon-wrench timeline-glyphicon"></i>*/
/*         </div>*/
/*         <div class="timeline-panel">*/
/*             <div class="timeline-heading">*/
/*                 <h4 class="timeline-title">*/
/*                     Naprawiajacy: {{ entry.user.name }} {{ entry.user.surname }}*/
/*                 </h4>*/
/*             <span>*/
/*                 <small class="text-muted">*/
/*                     Dodane przez:*/
/*                     {{ entry.author.name }} {{ entry.author.surname }},<br>*/
/*                     {{ entry.created | date('d.m.Y H:i:s') }}*/
/*                     {{ helper_service.daysVariety(entry.created) }}*/
/*                 </small>*/
/*             </span>*/
/*             </div>*/
/*         </div>*/
/*     </li>*/
/* {% endif %}*/
