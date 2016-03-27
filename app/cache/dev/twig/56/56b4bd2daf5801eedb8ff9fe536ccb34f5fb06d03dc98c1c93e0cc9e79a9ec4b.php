<?php

/* AppBundle:Admin:editLocalization.html.twig */
class __TwigTemplate_20045f2cdaf31361a8b2bfee249419ecd94ef9082536e6c735291224f99b438b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Admin:editLocalization.html.twig", 1);
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
        $__internal_9e62532b8cbb09ca574f1f53facadf7bfabc4ab019f334fed4ee5361b6db3038 = $this->env->getExtension("native_profiler");
        $__internal_9e62532b8cbb09ca574f1f53facadf7bfabc4ab019f334fed4ee5361b6db3038->enter($__internal_9e62532b8cbb09ca574f1f53facadf7bfabc4ab019f334fed4ee5361b6db3038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:editLocalization.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e62532b8cbb09ca574f1f53facadf7bfabc4ab019f334fed4ee5361b6db3038->leave($__internal_9e62532b8cbb09ca574f1f53facadf7bfabc4ab019f334fed4ee5361b6db3038_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_611310bec2545a4908fef855e15dec8a4b9666ed8aaa4949b8c879afd8c09b4b = $this->env->getExtension("native_profiler");
        $__internal_611310bec2545a4908fef855e15dec8a4b9666ed8aaa4949b8c879afd8c09b4b->enter($__internal_611310bec2545a4908fef855e15dec8a4b9666ed8aaa4949b8c879afd8c09b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    | Edycja danych oddziału
";
        
        $__internal_611310bec2545a4908fef855e15dec8a4b9666ed8aaa4949b8c879afd8c09b4b->leave($__internal_611310bec2545a4908fef855e15dec8a4b9666ed8aaa4949b8c879afd8c09b4b_prof);

    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_d67ac40f6fb0b5c9ab56f2596ef37f9f371a148b828625ac97a88f8d85e8b73b = $this->env->getExtension("native_profiler");
        $__internal_d67ac40f6fb0b5c9ab56f2596ef37f9f371a148b828625ac97a88f8d85e8b73b->enter($__internal_d67ac40f6fb0b5c9ab56f2596ef37f9f371a148b828625ac97a88f8d85e8b73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("AppBundle::alerts.html.twig", "AppBundle:Admin:editLocalization.html.twig", 9)->display($context);
        // line 10
        echo "
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a data-toggle=\"tab\" href=\"#home\">Oddział</a></li>
    </ul>
    <div class=\"tab-content\">
        <div id=\"home\" style=\"padding-top: 10px;\" class=\"tab-pane fade in active\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formLocalization"]) ? $context["formLocalization"] : $this->getContext($context, "formLocalization")), 'form_start');
        echo "
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLocalization"]) ? $context["formLocalization"] : $this->getContext($context, "formLocalization")), "name", array()), 'row');
        echo "
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLocalization"]) ? $context["formLocalization"] : $this->getContext($context, "formLocalization")), "street", array()), 'row');
        echo "
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLocalization"]) ? $context["formLocalization"] : $this->getContext($context, "formLocalization")), "city", array()), 'row');
        echo "
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLocalization"]) ? $context["formLocalization"] : $this->getContext($context, "formLocalization")), "post_code", array()), 'row');
        echo "
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLocalization"]) ? $context["formLocalization"] : $this->getContext($context, "formLocalization")), "tel_1", array()), 'row');
        echo "
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLocalization"]) ? $context["formLocalization"] : $this->getContext($context, "formLocalization")), "tel_2", array()), 'row');
        echo "
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLocalization"]) ? $context["formLocalization"] : $this->getContext($context, "formLocalization")), "tel_3", array()), 'row');
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLocalization"]) ? $context["formLocalization"] : $this->getContext($context, "formLocalization")), "email_first", array()), 'row');
        echo "
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLocalization"]) ? $context["formLocalization"] : $this->getContext($context, "formLocalization")), "email_second", array()), 'row');
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLocalization"]) ? $context["formLocalization"] : $this->getContext($context, "formLocalization")), "mon_fri_open", array()), 'row');
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formLocalization"]) ? $context["formLocalization"] : $this->getContext($context, "formLocalization")), "sat_open", array()), 'row');
        echo "
                    <div class=\"form-inline\" style=\"margin-bottom: 15px;\">
                        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("admin_management");
        echo "\" role=\"button\" class=\"btn btn-sm btn-default\">
                            Powrót
                        </a>
                        <input type=\"submit\" value=\"Zatwierdź\" class=\"btn btn-sm btn-success\"/>
                    </div>
                    ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formLocalization"]) ? $context["formLocalization"] : $this->getContext($context, "formLocalization")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>

    <script>
        \$('#localization_post_code').formatter({
            'pattern': '\\{\\{99\\}\\}-\\{\\{999\\}\\}',
            'persistent': false
        });

        \$('#localization_tel_1').formatter({
            'pattern': '+{\\{99\\}\\} \\{\\{9999999999}\\}',
            'persistent': false
        });

        \$('#localization_tel_2').formatter({
            'pattern': '+{\\{99\\}\\} \\{\\{9999999999}\\}',
            'persistent': false
        });

        \$('#localization_tel_3').formatter({
            'pattern': '+{\\{99\\}\\} \\{\\{9999999999}\\}',
            'persistent': false
        });

        \$('#localization_mon_fri_open').formatter({
            'pattern': '\\{\\{99\\}\\}:\\{\\{99\\}\\} - \\{\\{99\\}\\}:\\{\\{99\\}\\}',
            'persistent': false
        });

        \$('#localization_sat_open').formatter({
            'pattern': '\\{\\{99\\}\\}:\\{\\{99\\}\\} - \\{\\{99\\}\\}:\\{\\{99\\}\\}',
            'persistent': false
        });
    </script>
";
        
        $__internal_d67ac40f6fb0b5c9ab56f2596ef37f9f371a148b828625ac97a88f8d85e8b73b->leave($__internal_d67ac40f6fb0b5c9ab56f2596ef37f9f371a148b828625ac97a88f8d85e8b73b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:editLocalization.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 36,  119 => 31,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  60 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     | Edycja danych oddziału*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     {% include 'AppBundle::alerts.html.twig' %}*/
/* */
/*     <ul class="nav nav-tabs">*/
/*         <li class="active"><a data-toggle="tab" href="#home">Oddział</a></li>*/
/*     </ul>*/
/*     <div class="tab-content">*/
/*         <div id="home" style="padding-top: 10px;" class="tab-pane fade in active">*/
/*             <div class="row">*/
/*                 <div class="col-md-6">*/
/*                     {{ form_start(formLocalization) }}*/
/*                     {{ form_row(formLocalization.name) }}*/
/*                     {{ form_row(formLocalization.street) }}*/
/*                     {{ form_row(formLocalization.city) }}*/
/*                     {{ form_row(formLocalization.post_code) }}*/
/*                     {{ form_row(formLocalization.tel_1) }}*/
/*                     {{ form_row(formLocalization.tel_2) }}*/
/*                     {{ form_row(formLocalization.tel_3) }}*/
/*                     {{ form_row(formLocalization.email_first) }}*/
/*                     {{ form_row(formLocalization.email_second) }}*/
/*                     {{ form_row(formLocalization.mon_fri_open) }}*/
/*                     {{ form_row(formLocalization.sat_open) }}*/
/*                     <div class="form-inline" style="margin-bottom: 15px;">*/
/*                         <a href="{{ path('admin_management') }}" role="button" class="btn btn-sm btn-default">*/
/*                             Powrót*/
/*                         </a>*/
/*                         <input type="submit" value="Zatwierdź" class="btn btn-sm btn-success"/>*/
/*                     </div>*/
/*                     {{ form_end(formLocalization) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <script>*/
/*         $('#localization_post_code').formatter({*/
/*             'pattern': '\{\{99\}\}-\{\{999\}\}',*/
/*             'persistent': false*/
/*         });*/
/* */
/*         $('#localization_tel_1').formatter({*/
/*             'pattern': '+{\{99\}\} \{\{9999999999}\}',*/
/*             'persistent': false*/
/*         });*/
/* */
/*         $('#localization_tel_2').formatter({*/
/*             'pattern': '+{\{99\}\} \{\{9999999999}\}',*/
/*             'persistent': false*/
/*         });*/
/* */
/*         $('#localization_tel_3').formatter({*/
/*             'pattern': '+{\{99\}\} \{\{9999999999}\}',*/
/*             'persistent': false*/
/*         });*/
/* */
/*         $('#localization_mon_fri_open').formatter({*/
/*             'pattern': '\{\{99\}\}:\{\{99\}\} - \{\{99\}\}:\{\{99\}\}',*/
/*             'persistent': false*/
/*         });*/
/* */
/*         $('#localization_sat_open').formatter({*/
/*             'pattern': '\{\{99\}\}:\{\{99\}\} - \{\{99\}\}:\{\{99\}\}',*/
/*             'persistent': false*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
