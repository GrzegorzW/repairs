<?php

/* AppBundle:Timeline:repairStatus.html.twig */
class __TwigTemplate_091c7cdba4de0ca3cffc80b208a302b8e230faa3f436289496c7a65e8089afcb extends Twig_Template
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
        $__internal_4f760db6e6771f51d964360ab46501dc6f39a7a465fdf1e06a65f2609f7cdc14 = $this->env->getExtension("native_profiler");
        $__internal_4f760db6e6771f51d964360ab46501dc6f39a7a465fdf1e06a65f2609f7cdc14->enter($__internal_4f760db6e6771f51d964360ab46501dc6f39a7a465fdf1e06a65f2609f7cdc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Timeline:repairStatus.html.twig"));

        // line 1
        echo "<li>
    <div class=\"timeline-badge\">
        <i class=\"glyphicon glyphicon-check timeline-glyphicon\"></i>
    </div>
    <div class=\"timeline-panel\">
        <div class=\"timeline-heading\">
            <h4 class=\"timeline-title\">Status: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "status", array()), "name", array()), "html", null, true);
        echo "</h4>
            <span>
                <small class=\"text-muted\">
                    ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("ROLE_WORKER")) {
            // line 11
            echo "                        Dodane przez:
                        ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "author", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "author", array()), "surname", array()), "html", null, true);
            echo ",<br>
                    ";
        }
        // line 14
        echo "                    ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "created", array()), "d.m.Y H:i:s"), "html", null, true);
        echo "
                    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helper_service"]) ? $context["helper_service"] : $this->getContext($context, "helper_service")), "daysVariety", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "created", array())), "method"), "html", null, true);
        echo "
                </small>
            </span>
        </div>
    </div>
</li>";
        
        $__internal_4f760db6e6771f51d964360ab46501dc6f39a7a465fdf1e06a65f2609f7cdc14->leave($__internal_4f760db6e6771f51d964360ab46501dc6f39a7a465fdf1e06a65f2609f7cdc14_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Timeline:repairStatus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 15,  48 => 14,  41 => 12,  38 => 11,  36 => 10,  30 => 7,  22 => 1,);
    }
}
/* <li>*/
/*     <div class="timeline-badge">*/
/*         <i class="glyphicon glyphicon-check timeline-glyphicon"></i>*/
/*     </div>*/
/*     <div class="timeline-panel">*/
/*         <div class="timeline-heading">*/
/*             <h4 class="timeline-title">Status: {{ entry.status.name }}</h4>*/
/*             <span>*/
/*                 <small class="text-muted">*/
/*                     {% if is_granted('ROLE_WORKER') %}*/
/*                         Dodane przez:*/
/*                         {{ entry.author.name }} {{ entry.author.surname }},<br>*/
/*                     {% endif %}*/
/*                     {{ entry.created | date('d.m.Y H:i:s') }}*/
/*                     {{ helper_service.daysVariety(entry.created) }}*/
/*                 </small>*/
/*             </span>*/
/*         </div>*/
/*     </div>*/
/* </li>*/
