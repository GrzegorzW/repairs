<?php

/* AppBundle:Worker:addUser.html.twig */
class __TwigTemplate_15dfa35d14f5d6fce74ed7c6559b38b031440e6af2d62a64bfc9aa9b91406340 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Worker:addUser.html.twig", 1);
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
        $__internal_ff629442ebc40379ef810589eb698603b99fec0b44c30f2409a6f864e96cb90b = $this->env->getExtension("native_profiler");
        $__internal_ff629442ebc40379ef810589eb698603b99fec0b44c30f2409a6f864e96cb90b->enter($__internal_ff629442ebc40379ef810589eb698603b99fec0b44c30f2409a6f864e96cb90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Worker:addUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff629442ebc40379ef810589eb698603b99fec0b44c30f2409a6f864e96cb90b->leave($__internal_ff629442ebc40379ef810589eb698603b99fec0b44c30f2409a6f864e96cb90b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a135449eccc51d911e9958acce2b25771322bf70f770352be3b02a46c8c2339 = $this->env->getExtension("native_profiler");
        $__internal_1a135449eccc51d911e9958acce2b25771322bf70f770352be3b02a46c8c2339->enter($__internal_1a135449eccc51d911e9958acce2b25771322bf70f770352be3b02a46c8c2339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    | Nowe pokwitowanie | Wybór klienta
";
        
        $__internal_1a135449eccc51d911e9958acce2b25771322bf70f770352be3b02a46c8c2339->leave($__internal_1a135449eccc51d911e9958acce2b25771322bf70f770352be3b02a46c8c2339_prof);

    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_47c29f94def09a3acaeaf75a8c4cec2b87bbff0b867a9dbd59bde619042c3b51 = $this->env->getExtension("native_profiler");
        $__internal_47c29f94def09a3acaeaf75a8c4cec2b87bbff0b867a9dbd59bde619042c3b51->enter($__internal_47c29f94def09a3acaeaf75a8c4cec2b87bbff0b867a9dbd59bde619042c3b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("AppBundle::alerts.html.twig", "AppBundle:Worker:addUser.html.twig", 9)->display($context);
        // line 10
        echo "
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a data-toggle=\"tab\" href=\"#home\">Nowy klient</a></li>
        <li><a data-toggle=\"tab\" href=\"#menu1\">Klient z bazy</a></li>
    </ul>
    <div class=\"tab-content\">
        <div id=\"home\" style=\"padding-top: 10px;\" class=\"tab-pane fade in active\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surname", array()), 'row');
        echo "
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", array()), 'row');
        echo "
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marketing_agreement", array()), 'row');
        echo "
                    <div class=\"row\" style=\"margin-bottom: 15px;\">
                        <div class=\"col-md-12\">
                            <button type=\"button\" class=\"btn btn-info btn-sm btn-block user-invoice-data\">
                                Dane do faktury
                                <span class=\"glyphicon glyphicon-triangle-bottom pull-right\"
                                      style=\"margin-top: 2px;\"></span>
                            </button>
                            <div class=\"user-invoice-data-body ";
        // line 32
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            echo "hidden";
        }
        echo "\">
                                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client_company_name", array()), 'row', array("label_attr" => array("style" => "margin-top: 15px;")));
        echo "
                                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client_company_address", array()), 'row');
        echo "
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client_company_post_code", array()), 'row');
        echo "
                                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client_company_city", array()), 'row');
        echo "
                                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client_company_NIP", array()), 'row');
        echo "
                            </div>
                        </div>
                    </div>
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row', array("label" => "Dodaj", "attr" => array("class" => "btn btn-success btn-sm pull-right")));
        echo "
                    ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
        <div id=\"menu1\" style=\"padding-top: 10px;\" class=\"tab-pane fade\">

            <form method=\"get\" name=\"findUser\" action=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("worker_panel_pokwitowanie_user_add");
        echo "\">
                <div class=\"form-group\">
                    <label class=\"control-label\" for=\"findUser_phrase\">Szukana fraza</label>
                    <input type=\"text\" placeholder=\"np. id, imię, nazwisko, login, tel, e-mail.\"
                           class=\"form-control input-sm\" name=\"findUserPhrase\"
                            ";
        // line 53
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "findUserPhrase"), "method"))) {
            // line 54
            echo "                                value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "findUserPhrase"), "method"), "html", null, true);
            echo "\"
                            ";
        }
        // line 56
        echo "                    />
                </div>
                <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"));
        echo "\" class=\"btn btn-danger btn-sm\">Reset</a>
                <input type=\"submit\" value=\"Wyszukaj\" name=\"find\" class=\"btn btn-success btn-sm\"/>
            </form>

            ";
        // line 62
        $this->loadTemplate("AppBundle:PaginationLimit:paginationLimit.html.twig", "AppBundle:Worker:addUser.html.twig", 62)->display($context);
        // line 63
        echo "
            <div class=\"row\">
                <div class=\"col-md-12\" style=\"margin-top: 15px;\">

                    <div class=\"alert alert-danger hide\">
                        Brak szukanej frazy w bazie.
                    </div>

                    ";
        // line 71
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "has", array(0 => "limit"), "method")) {
            // line 72
            echo "                        <script>
                            \$('.nav.nav-tabs li.active').removeClass('active');
                            \$('a[href=#menu1]').parent().addClass('active');
                            \$('#home').removeClass('active').removeClass('in');
                            \$('#menu1').addClass('active').addClass('in');
                        </script>
                    ";
        }
        // line 79
        echo "
                    ";
        // line 80
        if ( !(null === (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 81
            echo "                        <script>
                            \$('.nav.nav-tabs li.active').removeClass('active');
                            \$('a[href=#menu1]').parent().addClass('active');
                            \$('#home').removeClass('active').removeClass('in');
                            \$('#menu1').addClass('active').addClass('in');
                        </script>
                    ";
            // line 87
            if (twig_test_empty($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "items", array()))) {
                // line 88
                echo "                        <script>
                            \$('.alert').removeClass('hide');
                        </script>
                    ";
            } else {
                // line 92
                echo "                        <div class=\"table-responsive\">
                            <table class=\"table table-striped table-bordered\" id=\"convertable-table\">
                                <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>Imię i Nazwisko</th>
                                    <th>Login</th>
                                    <th>Tel</th>
                                    <th>e-mail</th>
                                    <th>Wybierz</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
                foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                    // line 106
                    echo "                                    <tr>
                                        <td data-title=\"User ID\">";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "altId", array()), "html", null, true);
                    echo "</td>
                                        <td data-title=\"Imię i Nazwisko\">";
                    // line 108
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "name", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "surname", array()), "html", null, true);
                    echo "</td>
                                        <td data-title=\"Login\">";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "username", array()), "html", null, true);
                    echo "</td>
                                        <td data-title=\"Tel\">
                                            ";
                    // line 111
                    if ( !(null === $this->getAttribute($context["entry"], "tel", array()))) {
                        // line 112
                        echo "                                                ";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array($this->getAttribute($context["entry"], "tel", array()))), "html", null, true);
                        echo "
                                            ";
                    } else {
                        // line 114
                        echo "                                                -
                                            ";
                    }
                    // line 116
                    echo "                                        </td>
                                        <td data-title=\"E-mail\">
                                            ";
                    // line 118
                    if ( !(null === $this->getAttribute($context["entry"], "email", array()))) {
                        // line 119
                        echo "                                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "email", array()), "html", null, true);
                        echo "
                                            ";
                    } else {
                        // line 121
                        echo "                                                -
                                            ";
                    }
                    // line 123
                    echo "                                        </td>
                                        <td data-title=\"Wybierz\">
                                            <a href=\"";
                    // line 125
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_pokwitowanie_add_device", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                    echo "\">Wybierz</a>
                                        </td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "                                </tbody>
                            </table>
                            <div class=\"navigation text-center\">
                                ";
                // line 132
                echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
                echo "
                            </div>
                            <small class=\"help-block text-center\">
                                Liczba wyników: ";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
                echo "
                            </small>
                        </div>
                    ";
            }
            // line 139
            echo "                    ";
        }
        // line 140
        echo "                </div>
            </div>
        </div>
    </div>

    <script>
        \$(document).ready(function () {
            \$('#newUser_name').focus();
        });
        \$('#userType_tel').formatter({
            'pattern': '+{\\{99\\}\\} \\{\\{9999999999}\\}',
            'persistent': true
        });
        \$('#userType_client_company_post_code').formatter({
            'pattern': '{\\{99\\}\\}-\\{\\{999}\\}'
        });
        \$('.user-invoice-data').click(function () {
            \$('.user-invoice-data-body').toggleClass('hidden');
        });
    </script>
";
        
        $__internal_47c29f94def09a3acaeaf75a8c4cec2b87bbff0b867a9dbd59bde619042c3b51->leave($__internal_47c29f94def09a3acaeaf75a8c4cec2b87bbff0b867a9dbd59bde619042c3b51_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Worker:addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 140,  312 => 139,  305 => 135,  299 => 132,  294 => 129,  284 => 125,  280 => 123,  276 => 121,  270 => 119,  268 => 118,  264 => 116,  260 => 114,  254 => 112,  252 => 111,  247 => 109,  241 => 108,  237 => 107,  234 => 106,  230 => 105,  215 => 92,  209 => 88,  207 => 87,  199 => 81,  197 => 80,  194 => 79,  185 => 72,  183 => 71,  173 => 63,  171 => 62,  164 => 58,  160 => 56,  154 => 54,  152 => 53,  144 => 48,  135 => 42,  131 => 41,  124 => 37,  120 => 36,  116 => 35,  112 => 34,  108 => 33,  102 => 32,  91 => 24,  87 => 23,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  60 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     | Nowe pokwitowanie | Wybór klienta*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     {% include 'AppBundle::alerts.html.twig' %}*/
/* */
/*     <ul class="nav nav-tabs">*/
/*         <li class="active"><a data-toggle="tab" href="#home">Nowy klient</a></li>*/
/*         <li><a data-toggle="tab" href="#menu1">Klient z bazy</a></li>*/
/*     </ul>*/
/*     <div class="tab-content">*/
/*         <div id="home" style="padding-top: 10px;" class="tab-pane fade in active">*/
/*             <div class="row">*/
/*                 <div class="col-md-6">*/
/*                     {{ form_start(form) }}*/
/*                     {{ form_row(form.name) }}*/
/*                     {{ form_row(form.surname) }}*/
/*                     {{ form_row(form.tel) }}*/
/*                     {{ form_row(form.email) }}*/
/*                     {{ form_row(form.marketing_agreement) }}*/
/*                     <div class="row" style="margin-bottom: 15px;">*/
/*                         <div class="col-md-12">*/
/*                             <button type="button" class="btn btn-info btn-sm btn-block user-invoice-data">*/
/*                                 Dane do faktury*/
/*                                 <span class="glyphicon glyphicon-triangle-bottom pull-right"*/
/*                                       style="margin-top: 2px;"></span>*/
/*                             </button>*/
/*                             <div class="user-invoice-data-body {% if form.vars.valid %}hidden{% endif %}">*/
/*                                 {{ form_row(form.client_company_name, { 'label_attr': {'style': 'margin-top: 15px;'} }) }}*/
/*                                 {{ form_row(form.client_company_address) }}*/
/*                                 {{ form_row(form.client_company_post_code) }}*/
/*                                 {{ form_row(form.client_company_city) }}*/
/*                                 {{ form_row(form.client_company_NIP) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     {{ form_row(form.save, {'label': 'Dodaj', 'attr': {'class': 'btn btn-success btn-sm pull-right'}}) }}*/
/*                     {{ form_end(form) }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div id="menu1" style="padding-top: 10px;" class="tab-pane fade">*/
/* */
/*             <form method="get" name="findUser" action="{{ path('worker_panel_pokwitowanie_user_add') }}">*/
/*                 <div class="form-group">*/
/*                     <label class="control-label" for="findUser_phrase">Szukana fraza</label>*/
/*                     <input type="text" placeholder="np. id, imię, nazwisko, login, tel, e-mail."*/
/*                            class="form-control input-sm" name="findUserPhrase"*/
/*                             {% if app.request.get('findUserPhrase') is not empty %}*/
/*                                 value="{{ app.request.get('findUserPhrase') }}"*/
/*                             {% endif %}*/
/*                     />*/
/*                 </div>*/
/*                 <a href="{{ path(app.request.get('_route')) }}" class="btn btn-danger btn-sm">Reset</a>*/
/*                 <input type="submit" value="Wyszukaj" name="find" class="btn btn-success btn-sm"/>*/
/*             </form>*/
/* */
/*             {% include 'AppBundle:PaginationLimit:paginationLimit.html.twig' %}*/
/* */
/*             <div class="row">*/
/*                 <div class="col-md-12" style="margin-top: 15px;">*/
/* */
/*                     <div class="alert alert-danger hide">*/
/*                         Brak szukanej frazy w bazie.*/
/*                     </div>*/
/* */
/*                     {% if app.request.query.has('limit') %}*/
/*                         <script>*/
/*                             $('.nav.nav-tabs li.active').removeClass('active');*/
/*                             $('a[href=#menu1]').parent().addClass('active');*/
/*                             $('#home').removeClass('active').removeClass('in');*/
/*                             $('#menu1').addClass('active').addClass('in');*/
/*                         </script>*/
/*                     {% endif %}*/
/* */
/*                     {% if pagination is not null %}*/
/*                         <script>*/
/*                             $('.nav.nav-tabs li.active').removeClass('active');*/
/*                             $('a[href=#menu1]').parent().addClass('active');*/
/*                             $('#home').removeClass('active').removeClass('in');*/
/*                             $('#menu1').addClass('active').addClass('in');*/
/*                         </script>*/
/*                     {% if pagination.items is empty %}*/
/*                         <script>*/
/*                             $('.alert').removeClass('hide');*/
/*                         </script>*/
/*                     {% else %}*/
/*                         <div class="table-responsive">*/
/*                             <table class="table table-striped table-bordered" id="convertable-table">*/
/*                                 <thead>*/
/*                                 <tr>*/
/*                                     <th>User ID</th>*/
/*                                     <th>Imię i Nazwisko</th>*/
/*                                     <th>Login</th>*/
/*                                     <th>Tel</th>*/
/*                                     <th>e-mail</th>*/
/*                                     <th>Wybierz</th>*/
/*                                 </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                 {% for entry in pagination %}*/
/*                                     <tr>*/
/*                                         <td data-title="User ID">{{ entry.altId }}</td>*/
/*                                         <td data-title="Imię i Nazwisko">{{ entry.name }} {{ entry.surname }}</td>*/
/*                                         <td data-title="Login">{{ entry.username }}</td>*/
/*                                         <td data-title="Tel">*/
/*                                             {% if entry.tel is not null %}*/
/*                                                 {{ phone_number_format(entry.tel) }}*/
/*                                             {% else %}*/
/*                                                 -*/
/*                                             {% endif %}*/
/*                                         </td>*/
/*                                         <td data-title="E-mail">*/
/*                                             {% if entry.email is not null %}*/
/*                                                 {{ entry.email }}*/
/*                                             {% else %}*/
/*                                                 -*/
/*                                             {% endif %}*/
/*                                         </td>*/
/*                                         <td data-title="Wybierz">*/
/*                                             <a href="{{ path('worker_panel_pokwitowanie_add_device',{'id':entry.id}) }}">Wybierz</a>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                             <div class="navigation text-center">*/
/*                                 {{ knp_pagination_render(pagination) }}*/
/*                             </div>*/
/*                             <small class="help-block text-center">*/
/*                                 Liczba wyników: {{ pagination.getTotalItemCount }}*/
/*                             </small>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <script>*/
/*         $(document).ready(function () {*/
/*             $('#newUser_name').focus();*/
/*         });*/
/*         $('#userType_tel').formatter({*/
/*             'pattern': '+{\{99\}\} \{\{9999999999}\}',*/
/*             'persistent': true*/
/*         });*/
/*         $('#userType_client_company_post_code').formatter({*/
/*             'pattern': '{\{99\}\}-\{\{999}\}'*/
/*         });*/
/*         $('.user-invoice-data').click(function () {*/
/*             $('.user-invoice-data-body').toggleClass('hidden');*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
