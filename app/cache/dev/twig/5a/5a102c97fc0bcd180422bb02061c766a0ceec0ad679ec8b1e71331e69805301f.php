<?php

/* AppBundle:Admin:addRepairer.html.twig */
class __TwigTemplate_212ef86111ceffd6609d2182d238906a873962f1426eaaed267950c3e9eccd88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Admin:addRepairer.html.twig", 1);
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
        $__internal_a609ad14a78b7b44554ecd052036755ed78ea52f0c99e30abf7d15e7712d0c70 = $this->env->getExtension("native_profiler");
        $__internal_a609ad14a78b7b44554ecd052036755ed78ea52f0c99e30abf7d15e7712d0c70->enter($__internal_a609ad14a78b7b44554ecd052036755ed78ea52f0c99e30abf7d15e7712d0c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:addRepairer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a609ad14a78b7b44554ecd052036755ed78ea52f0c99e30abf7d15e7712d0c70->leave($__internal_a609ad14a78b7b44554ecd052036755ed78ea52f0c99e30abf7d15e7712d0c70_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbefea6a37c818ab612e2cbda8133381674a74fd5ce936804ba05afec322e28d = $this->env->getExtension("native_profiler");
        $__internal_bbefea6a37c818ab612e2cbda8133381674a74fd5ce936804ba05afec322e28d->enter($__internal_bbefea6a37c818ab612e2cbda8133381674a74fd5ce936804ba05afec322e28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    | Dodaj pracownika
";
        
        $__internal_bbefea6a37c818ab612e2cbda8133381674a74fd5ce936804ba05afec322e28d->leave($__internal_bbefea6a37c818ab612e2cbda8133381674a74fd5ce936804ba05afec322e28d_prof);

    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_889106cd35783f907e7f94f6cdcc08397accaa3f7b88c4d24067ab030f1fbf5e = $this->env->getExtension("native_profiler");
        $__internal_889106cd35783f907e7f94f6cdcc08397accaa3f7b88c4d24067ab030f1fbf5e->enter($__internal_889106cd35783f907e7f94f6cdcc08397accaa3f7b88c4d24067ab030f1fbf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("AppBundle::alerts.html.twig", "AppBundle:Admin:addRepairer.html.twig", 9)->display($context);
        // line 10
        echo "
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a data-toggle=\"tab\" href=\"#home\">Dodaj pracownika</a></li>
    </ul>

    <div class=\"tab-content\">
        <div id=\"home\" class=\"tab-pane fade in active\">
            <div class=\"row\" style=\"margin-top: 10px;\">
                <div class=\"col-md-6\">
                    <div class=\"row\">
                        <div class=\"col-md-7\">
                            ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRepairer"]) ? $context["formRepairer"] : $this->getContext($context, "formRepairer")), 'form_start');
        echo "
                            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formRepairer"]) ? $context["formRepairer"] : $this->getContext($context, "formRepairer")), 'errors');
        echo "

                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRepairer"]) ? $context["formRepairer"] : $this->getContext($context, "formRepairer")), "username", array()), 'row');
        echo "
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRepairer"]) ? $context["formRepairer"] : $this->getContext($context, "formRepairer")), "name", array()), 'row');
        echo "
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRepairer"]) ? $context["formRepairer"] : $this->getContext($context, "formRepairer")), "surname", array()), 'row');
        echo "
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRepairer"]) ? $context["formRepairer"] : $this->getContext($context, "formRepairer")), "tel", array()), 'row');
        echo "
                            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRepairer"]) ? $context["formRepairer"] : $this->getContext($context, "formRepairer")), "email", array()), 'row');
        echo "
                        </div>
                        <div class=\"col-md-5\">
                            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRepairer"]) ? $context["formRepairer"] : $this->getContext($context, "formRepairer")), "roles", array()), 'row');
        echo "
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-inline\">
                                <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("admin_management");
        echo "\" role=\"button\"
                                   class=\"btn btn-sm btn-default\">
                                    Powrót
                                </a>
                                <input type=\"submit\" class=\"btn btn-success btn-sm\" value=\"Dodaj\"/>
                                ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRepairer"]) ? $context["formRepairer"] : $this->getContext($context, "formRepairer")), 'form_end');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        \$('#addRepairer_tel').formatter({
            'pattern': '+{\\{99\\}\\} \\{\\{9999999999}\\}',
            'persistent': true
        });
    </script>

";
        
        $__internal_889106cd35783f907e7f94f6cdcc08397accaa3f7b88c4d24067ab030f1fbf5e->leave($__internal_889106cd35783f907e7f94f6cdcc08397accaa3f7b88c4d24067ab030f1fbf5e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:addRepairer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  111 => 35,  104 => 31,  98 => 28,  94 => 27,  90 => 26,  86 => 25,  82 => 24,  77 => 22,  73 => 21,  60 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     | Dodaj pracownika*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     {% include 'AppBundle::alerts.html.twig' %}*/
/* */
/*     <ul class="nav nav-tabs">*/
/*         <li class="active"><a data-toggle="tab" href="#home">Dodaj pracownika</a></li>*/
/*     </ul>*/
/* */
/*     <div class="tab-content">*/
/*         <div id="home" class="tab-pane fade in active">*/
/*             <div class="row" style="margin-top: 10px;">*/
/*                 <div class="col-md-6">*/
/*                     <div class="row">*/
/*                         <div class="col-md-7">*/
/*                             {{ form_start(formRepairer) }}*/
/*                             {{ form_errors(formRepairer) }}*/
/* */
/*                             {{ form_row(formRepairer.username) }}*/
/*                             {{ form_row(formRepairer.name) }}*/
/*                             {{ form_row(formRepairer.surname) }}*/
/*                             {{ form_row(formRepairer.tel) }}*/
/*                             {{ form_row(formRepairer.email) }}*/
/*                         </div>*/
/*                         <div class="col-md-5">*/
/*                             {{ form_row(formRepairer.roles) }}*/
/*                         </div>*/
/*                         <div class="col-md-12">*/
/*                             <div class="form-inline">*/
/*                                 <a href="{{ path('admin_management') }}" role="button"*/
/*                                    class="btn btn-sm btn-default">*/
/*                                     Powrót*/
/*                                 </a>*/
/*                                 <input type="submit" class="btn btn-success btn-sm" value="Dodaj"/>*/
/*                                 {{ form_end(formRepairer) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <script>*/
/*         $('#addRepairer_tel').formatter({*/
/*             'pattern': '+{\{99\}\} \{\{9999999999}\}',*/
/*             'persistent': true*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
