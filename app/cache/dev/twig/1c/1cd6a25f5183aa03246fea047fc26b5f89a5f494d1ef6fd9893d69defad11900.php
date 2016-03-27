<?php

/* AppBundle:Admin:editRepairer.html.twig */
class __TwigTemplate_10b42b6da1b80507f9bf06f37e281c4dcd3923052593f304fcd9eeb70971753b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Admin:editRepairer.html.twig", 1);
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
        $__internal_f579dc68f7d9988aab70e372fa02e3c8aa3e199f55da48f6f8aa3de8ac38eeb3 = $this->env->getExtension("native_profiler");
        $__internal_f579dc68f7d9988aab70e372fa02e3c8aa3e199f55da48f6f8aa3de8ac38eeb3->enter($__internal_f579dc68f7d9988aab70e372fa02e3c8aa3e199f55da48f6f8aa3de8ac38eeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Admin:editRepairer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f579dc68f7d9988aab70e372fa02e3c8aa3e199f55da48f6f8aa3de8ac38eeb3->leave($__internal_f579dc68f7d9988aab70e372fa02e3c8aa3e199f55da48f6f8aa3de8ac38eeb3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d22d65f8c41ec668073d0883fdb3a178ab0339ec259fa6ecfcf157261732b92 = $this->env->getExtension("native_profiler");
        $__internal_3d22d65f8c41ec668073d0883fdb3a178ab0339ec259fa6ecfcf157261732b92->enter($__internal_3d22d65f8c41ec668073d0883fdb3a178ab0339ec259fa6ecfcf157261732b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    | Pracownik
";
        
        $__internal_3d22d65f8c41ec668073d0883fdb3a178ab0339ec259fa6ecfcf157261732b92->leave($__internal_3d22d65f8c41ec668073d0883fdb3a178ab0339ec259fa6ecfcf157261732b92_prof);

    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_3a14b9c032f580f9e409204ef577ee124389184f975499e4f934073ec40e8b5d = $this->env->getExtension("native_profiler");
        $__internal_3a14b9c032f580f9e409204ef577ee124389184f975499e4f934073ec40e8b5d->enter($__internal_3a14b9c032f580f9e409204ef577ee124389184f975499e4f934073ec40e8b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("AppBundle::alerts.html.twig", "AppBundle:Admin:editRepairer.html.twig", 9)->display($context);
        // line 10
        echo "
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a data-toggle=\"tab\" href=\"#home\">Dane i uprawnienia</a></li>
        <li><a data-toggle=\"tab\" href=\"#menu1\">Aktywne naprawy</a></li>
    </ul>
    <div class=\"tab-content\">
        <div id=\"home\" class=\"tab-pane fade in active\">
            <div class=\"row\" style=\"margin-top: 10px;\">
                <div class=\"col-md-6\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRepairer"]) ? $context["formRepairer"] : $this->getContext($context, "formRepairer")), 'form_start');
        echo "
                            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formRepairer"]) ? $context["formRepairer"] : $this->getContext($context, "formRepairer")), 'errors');
        echo "
                            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRepairer"]) ? $context["formRepairer"] : $this->getContext($context, "formRepairer")), "username", array()), 'row');
        echo "
                            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRepairer"]) ? $context["formRepairer"] : $this->getContext($context, "formRepairer")), "name", array()), 'row');
        echo "
                            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRepairer"]) ? $context["formRepairer"] : $this->getContext($context, "formRepairer")), "surname", array()), 'row');
        echo "
                            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRepairer"]) ? $context["formRepairer"] : $this->getContext($context, "formRepairer")), "tel", array()), 'row');
        echo "
                            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRepairer"]) ? $context["formRepairer"] : $this->getContext($context, "formRepairer")), "email", array()), 'row');
        echo "
                            ";
        // line 28
        if ( !$this->getAttribute((isset($context["repairer"]) ? $context["repairer"] : $this->getContext($context, "repairer")), "tempPwChanged", array())) {
            // line 29
            echo "                                <div class=\"form-group\">
                                    <label for=\"tempPw\" class=\"control-label\">Tymczasowe hasło</label>
                                    <input id=\"tempPw\" class=\"form-control\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repairer"]) ? $context["repairer"] : $this->getContext($context, "repairer")), "tempPw", array()), "html", null, true);
            echo "\" disabled>
                                </div>
                            ";
        }
        // line 34
        echo "                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 36
        if ($this->getAttribute((isset($context["formRepairer"]) ? $context["formRepairer"] : null), "roles", array(), "any", true, true)) {
            // line 37
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRepairer"]) ? $context["formRepairer"] : $this->getContext($context, "formRepairer")), "roles", array()), 'row');
            echo "
                            ";
        }
        // line 39
        echo "                        </div>
                        <div class=\"col-md-12\">
                            <button type=\"button\" class=\"btn btn-danger btn-sm\" data-toggle=\"modal\"
                                    data-target=\"#myModal\" style=\"margin-bottom: 10px;\">
                                Zwolnij pracownika
                            </button>

                            <div class=\"form-inline\">
                                <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("admin_management");
        echo "\" role=\"button\"
                                   class=\"btn btn-sm btn-default\">
                                    Powrót
                                </a>

                                <button type=\"submit\" class=\"btn btn-success btn-sm\">
                                    Zmień
                                </button>

                                ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRepairer"]) ? $context["formRepairer"] : $this->getContext($context, "formRepairer")), 'form_end');
        echo "
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id=\"menu1\" class=\"tab-pane fade\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"table-responsive\" style=\"margin-top: 20px;\">
                        <table class=\"table table-hover\">
                            <thead>
                            <tr>
                                <th>Repair ID</th>
                                <th>Marka i model</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activeRepairs"]) ? $context["activeRepairs"] : $this->getContext($context, "activeRepairs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["repair"]) {
            // line 78
            echo "                                <tr>
                                    <td>
                                        <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_repair_details", array("id" => $this->getAttribute($context["repair"], "id", array()))), "html", null, true);
            echo "\">
                                            ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["repair"], "altId", array()), "html", null, true);
            echo "
                                        </a>
                                    </td>
                                    <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["repair"], "device", array()), "brand", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["repair"], "device", array()), "model", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["repair"], "currentStatus", array()), "name", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            echo "                                <tr>
                                    <td>
                                        Brak napraw.
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repair'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span
                                aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Zwolnij pracownika</h4>
                </div>
                <div class=\"modal-body\">
                    <h5>
                        Czy na pewno chcesz zwolnić pracownika?
                    </h5>

                    <p>
                        Naprawy pracownika zostaną przypisane do Twojego konta.
                        Usuwanie pracownika jest procesem nieodwracalnym.
                    </p>
                </div>
                <div class=\"modal-footer\">
                    <div class=\"form-inline\">
                        ";
        // line 121
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRemoveRepairer"]) ? $context["formRemoveRepairer"] : $this->getContext($context, "formRemoveRepairer")), 'form_start');
        echo "
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Anuluj</button>
                        ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formRemoveRepairer"]) ? $context["formRemoveRepairer"] : $this->getContext($context, "formRemoveRepairer")), "delete", array()), 'row', array("attr" => array("class" => "btn btn-danger")));
        echo "
                        ";
        // line 124
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formRemoveRepairer"]) ? $context["formRemoveRepairer"] : $this->getContext($context, "formRemoveRepairer")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        \$('#myModal').on('shown.bs.modal', function () {
            \$('#myInput').focus()
        })
    </script>

";
        
        $__internal_3a14b9c032f580f9e409204ef577ee124389184f975499e4f934073ec40e8b5d->leave($__internal_3a14b9c032f580f9e409204ef577ee124389184f975499e4f934073ec40e8b5d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:editRepairer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 124,  249 => 123,  244 => 121,  215 => 94,  204 => 88,  196 => 85,  190 => 84,  184 => 81,  180 => 80,  176 => 78,  171 => 77,  147 => 56,  135 => 47,  125 => 39,  119 => 37,  117 => 36,  113 => 34,  107 => 31,  103 => 29,  101 => 28,  97 => 27,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  60 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     | Pracownik*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     {% include 'AppBundle::alerts.html.twig' %}*/
/* */
/*     <ul class="nav nav-tabs">*/
/*         <li class="active"><a data-toggle="tab" href="#home">Dane i uprawnienia</a></li>*/
/*         <li><a data-toggle="tab" href="#menu1">Aktywne naprawy</a></li>*/
/*     </ul>*/
/*     <div class="tab-content">*/
/*         <div id="home" class="tab-pane fade in active">*/
/*             <div class="row" style="margin-top: 10px;">*/
/*                 <div class="col-md-6">*/
/*                     <div class="row">*/
/*                         <div class="col-md-6">*/
/*                             {{ form_start(formRepairer) }}*/
/*                             {{ form_errors(formRepairer) }}*/
/*                             {{ form_row(formRepairer.username) }}*/
/*                             {{ form_row(formRepairer.name) }}*/
/*                             {{ form_row(formRepairer.surname) }}*/
/*                             {{ form_row(formRepairer.tel) }}*/
/*                             {{ form_row(formRepairer.email) }}*/
/*                             {% if not repairer.tempPwChanged %}*/
/*                                 <div class="form-group">*/
/*                                     <label for="tempPw" class="control-label">Tymczasowe hasło</label>*/
/*                                     <input id="tempPw" class="form-control" value="{{ repairer.tempPw }}" disabled>*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         <div class="col-md-6">*/
/*                             {% if formRepairer.roles is defined %}*/
/*                                 {{ form_row(formRepairer.roles) }}*/
/*                             {% endif %}*/
/*                         </div>*/
/*                         <div class="col-md-12">*/
/*                             <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"*/
/*                                     data-target="#myModal" style="margin-bottom: 10px;">*/
/*                                 Zwolnij pracownika*/
/*                             </button>*/
/* */
/*                             <div class="form-inline">*/
/*                                 <a href="{{ path('admin_management') }}" role="button"*/
/*                                    class="btn btn-sm btn-default">*/
/*                                     Powrót*/
/*                                 </a>*/
/* */
/*                                 <button type="submit" class="btn btn-success btn-sm">*/
/*                                     Zmień*/
/*                                 </button>*/
/* */
/*                                 {{ form_end(formRepairer) }}*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div id="menu1" class="tab-pane fade">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="table-responsive" style="margin-top: 20px;">*/
/*                         <table class="table table-hover">*/
/*                             <thead>*/
/*                             <tr>*/
/*                                 <th>Repair ID</th>*/
/*                                 <th>Marka i model</th>*/
/*                                 <th>Status</th>*/
/*                             </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                             {% for repair in activeRepairs %}*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         <a href="{{ path('worker_panel_repair_details',{'id':repair.id}) }}">*/
/*                                             {{ repair.altId }}*/
/*                                         </a>*/
/*                                     </td>*/
/*                                     <td>{{ repair.device.brand }} {{ repair.device.model }}</td>*/
/*                                     <td>{{ repair.currentStatus.name }}</td>*/
/*                                 </tr>*/
/*                             {% else %}*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         Brak napraw.*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span*/
/*                                 aria-hidden="true">&times;</span></button>*/
/*                     <h4 class="modal-title" id="myModalLabel">Zwolnij pracownika</h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     <h5>*/
/*                         Czy na pewno chcesz zwolnić pracownika?*/
/*                     </h5>*/
/* */
/*                     <p>*/
/*                         Naprawy pracownika zostaną przypisane do Twojego konta.*/
/*                         Usuwanie pracownika jest procesem nieodwracalnym.*/
/*                     </p>*/
/*                 </div>*/
/*                 <div class="modal-footer">*/
/*                     <div class="form-inline">*/
/*                         {{ form_start(formRemoveRepairer) }}*/
/*                         <button type="button" class="btn btn-default" data-dismiss="modal">Anuluj</button>*/
/*                         {{ form_row(formRemoveRepairer.delete, {'attr': {'class': 'btn btn-danger'}}) }}*/
/*                         {{ form_end(formRemoveRepairer) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <script>*/
/*         $('#myModal').on('shown.bs.modal', function () {*/
/*             $('#myInput').focus()*/
/*         })*/
/*     </script>*/
/* */
/* {% endblock %}*/
