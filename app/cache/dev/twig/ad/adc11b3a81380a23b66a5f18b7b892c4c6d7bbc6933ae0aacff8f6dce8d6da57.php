<?php

/* AppBundle:Timeline:message.html.twig */
class __TwigTemplate_c3d8119e7846311d8ea63b5031183bac86d9f5319385e5b74d8ac9f70cda9ce1 extends Twig_Template
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
        $__internal_0c2a0ce5eaf18db9291710c29b38ed78f860276a0fdad492fdc009bf402021df = $this->env->getExtension("native_profiler");
        $__internal_0c2a0ce5eaf18db9291710c29b38ed78f860276a0fdad492fdc009bf402021df->enter($__internal_0c2a0ce5eaf18db9291710c29b38ed78f860276a0fdad492fdc009bf402021df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Timeline:message.html.twig"));

        // line 1
        echo "<li class=\"timeline-inverted\">
    <div class=\"timeline-badge ";
        // line 2
        if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "type", array()) == twig_constant("AppBundle\\Entity\\Message::TYPE_PRIVATE"))) {
            echo "warning";
        } else {
            echo "info";
        }
        echo "\">
        <img id=\"envelope\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/images/read.png"), "html", null, true);
        echo "\" class=\"timeline-envelope\"/>
    </div>
    <div data-message-id=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "id", array()), "html", null, true);
        echo "\"
         class=\"timeline-panel ";
        // line 6
        if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "sender", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            echo "my-message";
        }
        echo "\">
        <div class=\"timeline-heading\">
            <h4 class=\"timeline-title\">
                ";
        // line 9
        if (($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "type", array()) == twig_constant("AppBundle\\Entity\\Message::TYPE_PRIVATE"))) {
            // line 10
            echo "                    Notatka (widoczne tylko dla pracowników)
                ";
        } else {
            // line 12
            echo "                    Wiadomość publiczna
                ";
        }
        // line 14
        echo "            </h4>
        </div>
        <div class=\"timeline-body\">
            <p>
                ";
        // line 18
        echo $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "content", array());
        echo "
            </p>
            <span>
                <small class=\"text-muted\">
                    ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "sender", array()), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "sender", array()), "surname", array()), "html", null, true);
        echo ",<br>
                    ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "created", array()), "d.m.Y H:i:s"), "html", null, true);
        echo "
                    ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["helper_service"]) ? $context["helper_service"] : $this->getContext($context, "helper_service")), "daysVariety", array(0 => $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "created", array())), "method"), "html", null, true);
        echo "
                </small>
            </span>
        </div>
    </div>
</li>";
        
        $__internal_0c2a0ce5eaf18db9291710c29b38ed78f860276a0fdad492fdc009bf402021df->leave($__internal_0c2a0ce5eaf18db9291710c29b38ed78f860276a0fdad492fdc009bf402021df_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Timeline:message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  79 => 23,  73 => 22,  66 => 18,  60 => 14,  56 => 12,  52 => 10,  50 => 9,  42 => 6,  38 => 5,  33 => 3,  25 => 2,  22 => 1,);
    }
}
/* <li class="timeline-inverted">*/
/*     <div class="timeline-badge {% if entry.type == constant('AppBundle\\Entity\\Message::TYPE_PRIVATE') %}warning{% else %}info{% endif %}">*/
/*         <img id="envelope" src="{{ asset('bundles/app/images/read.png') }}" class="timeline-envelope"/>*/
/*     </div>*/
/*     <div data-message-id="{{ entry.id }}"*/
/*          class="timeline-panel {% if entry.sender == app.user %}my-message{% endif %}">*/
/*         <div class="timeline-heading">*/
/*             <h4 class="timeline-title">*/
/*                 {% if entry.type == constant('AppBundle\\Entity\\Message::TYPE_PRIVATE') %}*/
/*                     Notatka (widoczne tylko dla pracowników)*/
/*                 {% else %}*/
/*                     Wiadomość publiczna*/
/*                 {% endif %}*/
/*             </h4>*/
/*         </div>*/
/*         <div class="timeline-body">*/
/*             <p>*/
/*                 {{ entry.content | raw }}*/
/*             </p>*/
/*             <span>*/
/*                 <small class="text-muted">*/
/*                     {{ entry.sender.name }} {{ entry.sender.surname }},<br>*/
/*                     {{ entry.created | date('d.m.Y H:i:s') }}*/
/*                     {{ helper_service.daysVariety(entry.created) }}*/
/*                 </small>*/
/*             </span>*/
/*         </div>*/
/*     </div>*/
/* </li>*/
