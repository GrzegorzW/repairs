<?php

/* AppBundle:User:repairs.html.twig */
class __TwigTemplate_87c347f613829cef879b7a25196b5f9f27657f419a17d2adc6aea2be2576b179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:User:repairs.html.twig", 1);
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
        $__internal_2bd3f3ceaf04ac0c3f8059839374fd84674912f0db6dea1f8383b25b78d7bc99 = $this->env->getExtension("native_profiler");
        $__internal_2bd3f3ceaf04ac0c3f8059839374fd84674912f0db6dea1f8383b25b78d7bc99->enter($__internal_2bd3f3ceaf04ac0c3f8059839374fd84674912f0db6dea1f8383b25b78d7bc99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:repairs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bd3f3ceaf04ac0c3f8059839374fd84674912f0db6dea1f8383b25b78d7bc99->leave($__internal_2bd3f3ceaf04ac0c3f8059839374fd84674912f0db6dea1f8383b25b78d7bc99_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_94b425746e82363bf64ba9b3f4f6b7b21575398f50992a766a836f62f4804011 = $this->env->getExtension("native_profiler");
        $__internal_94b425746e82363bf64ba9b3f4f6b7b21575398f50992a766a836f62f4804011->enter($__internal_94b425746e82363bf64ba9b3f4f6b7b21575398f50992a766a836f62f4804011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    | Panel klienta
";
        
        $__internal_94b425746e82363bf64ba9b3f4f6b7b21575398f50992a766a836f62f4804011->leave($__internal_94b425746e82363bf64ba9b3f4f6b7b21575398f50992a766a836f62f4804011_prof);

    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_3362401333dfcd821286c7e081ac778eb7c3bf6fb67fd495b115d595b663d01d = $this->env->getExtension("native_profiler");
        $__internal_3362401333dfcd821286c7e081ac778eb7c3bf6fb67fd495b115d595b663d01d->enter($__internal_3362401333dfcd821286c7e081ac778eb7c3bf6fb67fd495b115d595b663d01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("AppBundle::alerts.html.twig", "AppBundle:User:repairs.html.twig", 9)->display($context);
        // line 10
        echo "
    <div class=\"row\">
        ";
        // line 12
        if ( !twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "repairs", array()))) {
            // line 13
            echo "            <div class=\"col-md-6\">
                <div class=\"panel-group\" id=\"repairs-collapse\" role=\"tablist\" aria-multiselectable=\"true\">
                    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "repairs", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["repair"]) {
                // line 16
                echo "                        <div class=\"panel panel-info\">
                            <div class=\"panel-heading\" role=\"tab\" id=\"heading";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"collapse\"
                                 data-parent=\"#repairs-collapse\" href=\"#collapse-repair-";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"
                                 aria-expanded=\"";
                // line 19
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo "\"
                                 aria-controls=\"collapse-repair-";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" style=\"cursor: pointer\">
                                <span class=\"panel-title ";
                // line 21
                if (($this->getAttribute($context["loop"], "index", array()) != 1)) {
                    echo "collapsed";
                }
                echo "\">
                                    ID ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["repair"], "device", array()), "altId", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["repair"], "device", array()), "brand", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["repair"], "device", array()), "model", array()), "html", null, true);
                echo "
                                </span>
                                <span class=\"glyphicon glyphicon-triangle-bottom pull-right\"
                                      style=\"margin-top: 2px;\"></span>
                            </div>
                            <div id=\"collapse-repair-";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"
                                 class=\"panel-collapse collapse ";
                // line 28
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    echo "in";
                }
                echo "\" role=\"tabpanel\"
                                 aria-labelledby=\"heading";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                                <ul class=\"list-group\">
                                    <li class=\"list-group-item\">
                                        <strong>Data rozpoczęcia:</strong> ";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["repair"], "startDate", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "
                                    </li>
                                    <li class=\"list-group-item\">
                                        <strong>Opis usterki i uwagi:</strong> ";
                // line 35
                echo twig_escape_filter($this->env, (($this->getAttribute($context["repair"], "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["repair"], "description", array()), "-")) : ("-")), "html", null, true);
                echo "
                                    </li>
                                    <li class=\"list-group-item\">
                                        <strong>Aktualny status:</strong> ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["repair"], "currentStatus", array()), "name", array()), "html", null, true);
                echo "
                                    </li>
                                    <li class=\"list-group-item\">
                                        <strong>Data
                                            zakończenia:</strong>
                                        ";
                // line 43
                if (( !(null === $this->getAttribute($context["repair"], "endDate", array())) && ($this->getAttribute($this->getAttribute($context["repair"], "currentStatus", array()), "id", array()) != twig_constant("AppBundle\\Entity\\Status::STATUS_RETURNED")))) {
                    // line 44
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["repair"], "endDate", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 46
                    echo "                                            -
                                        ";
                }
                // line 48
                echo "                                    </li>
                                    <li class=\"list-group-item\">
                                        <strong>Opinia:</strong> ";
                // line 50
                echo twig_escape_filter($this->env, (($this->getAttribute($context["repair"], "opinion", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["repair"], "opinion", array()), "-")) : ("-")), "html", null, true);
                echo "
                                    </li>
                                    <li class=\"list-group-item\">
                                        <a class=\"btn btn-xs btn-success\"
                                           href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pokwitowanie_user_panel_details", array("id" => $this->getAttribute($context["repair"], "id", array()))), "html", null, true);
                echo "\">
                                            Zobacz szczegóły
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repair'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                </div>
            </div>
        ";
        }
        // line 65
        echo "
        <div class=\"col-md-6\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    Dane osobowe
                    <div class=\"pull-right\">
                        <a class=\"btn btn-xs btn-primary\" href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Zmień hasło</a>
                        <button type=\"button\" class=\"btn btn-success btn-xs\" data-toggle=\"modal\"
                                data-target=\"#userEditModal\">
                            Edytuj
                        </button>
                    </div>
                </div>
                <ul class=\"list-group\">
                    <li class=\"list-group-item\">
                        <strong>Login:</strong> ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>ID użytkownika:</strong> ";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "altId", array()), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Imię i nazwisko:</strong> <span id=\"list-name\">";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</span> <span
                                id=\"list-surname\">";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "surname", array()), "html", null, true);
        echo "</span>
                    </li>
                    <li class=\"list-group-item\">
                        <strong>E-mail:</strong> ";
        // line 90
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Zgoda marketingowa:</strong> ";
        // line 93
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "marketingAgreement", array())) {
            echo "Tak";
        } else {
            echo "Nie";
        }
        // line 94
        echo "                    </li>
                    <li class=\"list-group-item\">
                        <strong>Tel:</strong> ";
        // line 96
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tel", array()))), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>
                            Ostatnio zalogowany:
                        </strong> ";
        // line 101
        echo twig_escape_filter($this->env, ((twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastLogin", array()))) ? ("Niezalogowany") : (twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastLogin", array()), "d.m.Y H:i:s"))), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <button type=\"button\" class=\"btn btn-info btn-sm btn-block user-invoice-data\">
                            Dane do faktury
                            <span class=\"glyphicon glyphicon-triangle-bottom pull-right\"
                                  style=\"margin-top: 2px;\"></span>
                        </button>
                    </li>
                </ul>
                <ul class=\"list-group user-invoice-data-body hidden\">
                    <li class=\"list-group-item\">
                        <strong>Nazwa firmy:</strong> ";
        // line 113
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyName", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Adres:</strong> ";
        // line 116
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyAddress", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyAddress", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Kod pocztowy:</strong> ";
        // line 119
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyPostCode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyPostCode", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>Miasto:</strong> ";
        // line 122
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyCity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyCity", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                    <li class=\"list-group-item\">
                        <strong>NIP:</strong> ";
        // line 125
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyNIP", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "clientCompanyNIP", array()), "-")) : ("-")), "html", null, true);
        echo "
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class=\"modal fade\" id=\"userEditModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"userEditModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\" id=\"userEditModalLabel\">
                        Twoje dane
                    </h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 144
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), 'form_start', array("attr" => array("class" => "")));
        echo "
                    <div class=\"input-wrap\">
                        ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "tel", array()), 'row', array("attr" => array("class" => "input-sm")));
        echo "
                        ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "email", array()), 'row', array("attr" => array("class" => "input-sm")));
        echo "
                        ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "marketing_agreement", array()), 'widget', array("attr" => array("style" => "position: relative")));
        echo "
                        <hr>
                        ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "client_company_name", array()), 'row', array("attr" => array("class" => "input-sm")));
        echo "
                        ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "client_company_address", array()), 'row', array("attr" => array("class" => "input-sm")));
        echo "
                        ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "client_company_post_code", array()), 'row', array("attr" => array("class" => "input-sm")));
        echo "
                        ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "client_company_city", array()), 'row', array("attr" => array("class" => "input-sm")));
        echo "
                        ";
        // line 154
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "client_company_NIP", array()), 'row', array("attr" => array("class" => "input-sm")));
        echo "
                    </div>
                    ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "cancel", array()), 'row', array("label" => "Anuluj", "attr" => array("class" => "btn btn-default btn-sm pull-left")));
        echo "
                    ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "save", array()), 'row', array("label" => "Zatwierdź", "attr" => array("class" => "btn btn-success btn-sm pull-right")));
        echo "

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "cancel", array()), 'row', array("label" => "Anuluj", "attr" => array("class" => "btn btn-default btn-sm pull-left")));
        echo "
                            ";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "save", array()), 'row', array("label" => "Edytuj", "attr" => array("class" => "btn btn-success btn-sm pull-right")));
        echo "
                        </div>
                    </div>
                    ";
        // line 165
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), 'form_end');
        echo "
                    <div class=\"clearfix\"></div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 173
        echo "        ";
        // line 174
        echo "            ";
        // line 175
        echo "                ";
        // line 176
        echo "                    ";
        // line 177
        echo "                        ";
        // line 178
        echo "                                    ";
        // line 179
        echo "                        ";
        // line 180
        echo "                            ";
        // line 181
        echo "                        ";
        // line 182
        echo "                    ";
        // line 183
        echo "                    ";
        // line 184
        echo "
                        ";
        // line 186
        echo "                            ";
        // line 187
        echo "                        ";
        // line 188
        echo "
                    ";
        // line 190
        echo "                ";
        // line 191
        echo "            ";
        // line 192
        echo "        ";
        // line 193
        echo "
        ";
        // line 195
        echo "            ";
        // line 196
        echo "        ";
        // line 197
        echo "    ";
        // line 198
        echo "
    ";
        // line 199
        if ((isset($context["renderFirstLoginModal"]) ? $context["renderFirstLoginModal"] : $this->getContext($context, "renderFirstLoginModal"))) {
            // line 200
            echo "        <div class=\"modal fade\" id=\"firstLoginModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"firstLoginModalLabel\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Zamknij\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">Powiadomienia</h4>
                    </div>
                    <div class=\"modal-body\">
                        <h4>Hasło</h4>
                        <blockquote class=\"info-blockquote\">
                            <p>
                                Hasło zostało wygenerowane dla Ciebie automatycznie, możesz je zmienić
                                <a href=\"";
            // line 214
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">tutaj</a>.
                            </p>
                        </blockquote>
                        ";
            // line 217
            if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array())) {
                // line 218
                echo "                            <hr>
                            <h4>Adres e-mail</h4>
                            <blockquote class=\"danger-blockquote\">
                                <p>
                                    Podczas zdawania sprzętu nie został dodany adres email.
                                    Na adres e-mail będą wysyłane informacje o aktualnym statusie naprawy.
                                    Adres e-mail jest również niezbędny do przywrócenia zapomnianego hasła.
                                    Możesz go dodać <a href=\"#\" data-toggle=\"modal\"
                                                       data-target=\"#userEditModal\" data-dismiss=\"modal\">tutaj</a>.
                                </p>
                            </blockquote>
                        ";
            }
            // line 230
            echo "                        ";
            if ( !(null === (isset($context["addOpinionUrl"]) ? $context["addOpinionUrl"] : $this->getContext($context, "addOpinionUrl")))) {
                // line 231
                echo "                            <hr>
                            <h4>Opinia o naprawie</h4>
                            <blockquote class=\"info-blockquote\">
                                <p>
                                    Twoje zdanie jest dla nas bardzo cenne, możesz wyrazić swoją opinię
                                    <a href=\"";
                // line 236
                echo twig_escape_filter($this->env, (isset($context["addOpinionUrl"]) ? $context["addOpinionUrl"] : $this->getContext($context, "addOpinionUrl")), "html", null, true);
                echo "\">tutaj</a>.
                                </p>
                            </blockquote>
                        ";
            }
            // line 240
            echo "                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Zamknij</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            \$('#firstLoginModal').modal('show');
        </script>
    ";
        }
        // line 252
        echo "
    <script>
        ";
        // line 254
        if ( !$this->getAttribute($this->getAttribute((isset($context["formEditUser"]) ? $context["formEditUser"] : $this->getContext($context, "formEditUser")), "vars", array()), "valid", array())) {
            // line 255
            echo "            \$('#userEditModal').modal('show');
        ";
        }
        // line 257
        echo "
        \$('.user-invoice-data').click(function () {
            \$('.user-invoice-data-body').toggleClass('hidden');
        });

        \$('#clientSideUserType_tel').formatter({
            'pattern': '+{\\{99\\}\\} \\{\\{9999999999}\\}',
            'persistent': true
        });

        \$('#clientSideUserType_client_company_post_code').formatter({
            'pattern': '{\\{99\\}\\}-\\{\\{999}\\}'
        });
    </script>
";
        
        $__internal_3362401333dfcd821286c7e081ac778eb7c3bf6fb67fd495b115d595b663d01d->leave($__internal_3362401333dfcd821286c7e081ac778eb7c3bf6fb67fd495b115d595b663d01d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:repairs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  542 => 257,  538 => 255,  536 => 254,  532 => 252,  518 => 240,  511 => 236,  504 => 231,  501 => 230,  487 => 218,  485 => 217,  479 => 214,  463 => 200,  461 => 199,  458 => 198,  456 => 197,  454 => 196,  452 => 195,  449 => 193,  447 => 192,  445 => 191,  443 => 190,  440 => 188,  438 => 187,  436 => 186,  433 => 184,  431 => 183,  429 => 182,  427 => 181,  425 => 180,  423 => 179,  421 => 178,  419 => 177,  417 => 176,  415 => 175,  413 => 174,  411 => 173,  401 => 165,  395 => 162,  391 => 161,  384 => 157,  380 => 156,  375 => 154,  371 => 153,  367 => 152,  363 => 151,  359 => 150,  354 => 148,  350 => 147,  346 => 146,  341 => 144,  319 => 125,  313 => 122,  307 => 119,  301 => 116,  295 => 113,  280 => 101,  272 => 96,  268 => 94,  262 => 93,  256 => 90,  250 => 87,  246 => 86,  240 => 83,  234 => 80,  222 => 71,  214 => 65,  209 => 62,  187 => 54,  180 => 50,  176 => 48,  172 => 46,  166 => 44,  164 => 43,  156 => 38,  150 => 35,  144 => 32,  138 => 29,  132 => 28,  128 => 27,  116 => 22,  110 => 21,  106 => 20,  98 => 19,  94 => 18,  90 => 17,  87 => 16,  70 => 15,  66 => 13,  64 => 12,  60 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle::base.html.twig" %}*/
/* */
/* {% block title %}*/
/*     | Panel klienta*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     {% include 'AppBundle::alerts.html.twig' %}*/
/* */
/*     <div class="row">*/
/*         {% if user.repairs is not empty %}*/
/*             <div class="col-md-6">*/
/*                 <div class="panel-group" id="repairs-collapse" role="tablist" aria-multiselectable="true">*/
/*                     {% for repair in user.repairs %}*/
/*                         <div class="panel panel-info">*/
/*                             <div class="panel-heading" role="tab" id="heading{{ loop.index }}" data-toggle="collapse"*/
/*                                  data-parent="#repairs-collapse" href="#collapse-repair-{{ loop.index }}"*/
/*                                  aria-expanded="{% if loop.index == 1 %}true{% else %}false{% endif %}"*/
/*                                  aria-controls="collapse-repair-{{ loop.index }}" style="cursor: pointer">*/
/*                                 <span class="panel-title {% if loop.index != 1 %}collapsed{% endif %}">*/
/*                                     ID {{ repair.device.altId }} - {{ repair.device.brand }} {{ repair.device.model }}*/
/*                                 </span>*/
/*                                 <span class="glyphicon glyphicon-triangle-bottom pull-right"*/
/*                                       style="margin-top: 2px;"></span>*/
/*                             </div>*/
/*                             <div id="collapse-repair-{{ loop.index }}"*/
/*                                  class="panel-collapse collapse {% if loop.index == 1 %}in{% endif %}" role="tabpanel"*/
/*                                  aria-labelledby="heading{{ loop.index }}">*/
/*                                 <ul class="list-group">*/
/*                                     <li class="list-group-item">*/
/*                                         <strong>Data rozpoczęcia:</strong> {{ repair.startDate|date('Y-m-d H:i:s') }}*/
/*                                     </li>*/
/*                                     <li class="list-group-item">*/
/*                                         <strong>Opis usterki i uwagi:</strong> {{ repair.description|default('-') }}*/
/*                                     </li>*/
/*                                     <li class="list-group-item">*/
/*                                         <strong>Aktualny status:</strong> {{ repair.currentStatus.name }}*/
/*                                     </li>*/
/*                                     <li class="list-group-item">*/
/*                                         <strong>Data*/
/*                                             zakończenia:</strong>*/
/*                                         {% if repair.endDate is not null and repair.currentStatus.id != constant('AppBundle\\Entity\\Status::STATUS_RETURNED') %}*/
/*                                             {{ repair.endDate | date('Y-m-d H:i:s') }}*/
/*                                         {% else %}*/
/*                                             -*/
/*                                         {% endif %}*/
/*                                     </li>*/
/*                                     <li class="list-group-item">*/
/*                                         <strong>Opinia:</strong> {{ repair.opinion|default('-') }}*/
/*                                     </li>*/
/*                                     <li class="list-group-item">*/
/*                                         <a class="btn btn-xs btn-success"*/
/*                                            href="{{ path('pokwitowanie_user_panel_details', {'id': repair.id}) }}">*/
/*                                             Zobacz szczegóły*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div class="col-md-6">*/
/*             <div class="panel panel-info">*/
/*                 <div class="panel-heading">*/
/*                     Dane osobowe*/
/*                     <div class="pull-right">*/
/*                         <a class="btn btn-xs btn-primary" href="{{ path('fos_user_change_password') }}">Zmień hasło</a>*/
/*                         <button type="button" class="btn btn-success btn-xs" data-toggle="modal"*/
/*                                 data-target="#userEditModal">*/
/*                             Edytuj*/
/*                         </button>*/
/*                     </div>*/
/*                 </div>*/
/*                 <ul class="list-group">*/
/*                     <li class="list-group-item">*/
/*                         <strong>Login:</strong> {{ user.username }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>ID użytkownika:</strong> {{ user.altId }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Imię i nazwisko:</strong> <span id="list-name">{{ user.name }}</span> <span*/
/*                                 id="list-surname">{{ user.surname }}</span>*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>E-mail:</strong> {{ user.email|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Zgoda marketingowa:</strong> {% if user.marketingAgreement %}Tak{% else %}Nie{% endif %}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Tel:</strong> {{ phone_number_format(user.tel) }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>*/
/*                             Ostatnio zalogowany:*/
/*                         </strong> {{ user.lastLogin is empty ? "Niezalogowany" : user.lastLogin|date('d.m.Y H:i:s') }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <button type="button" class="btn btn-info btn-sm btn-block user-invoice-data">*/
/*                             Dane do faktury*/
/*                             <span class="glyphicon glyphicon-triangle-bottom pull-right"*/
/*                                   style="margin-top: 2px;"></span>*/
/*                         </button>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <ul class="list-group user-invoice-data-body hidden">*/
/*                     <li class="list-group-item">*/
/*                         <strong>Nazwa firmy:</strong> {{ user.clientCompanyName|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Adres:</strong> {{ user.clientCompanyAddress|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Kod pocztowy:</strong> {{ user.clientCompanyPostCode|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>Miasto:</strong> {{ user.clientCompanyCity|default('-') }}*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <strong>NIP:</strong> {{ user.clientCompanyNIP|default('-') }}*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="modal fade" id="userEditModal" tabindex="-1" role="dialog" aria-labelledby="userEditModalLabel">*/
/*         <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*                 <div class="modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                         <span aria-hidden="true">&times;</span>*/
/*                     </button>*/
/*                     <h4 class="modal-title" id="userEditModalLabel">*/
/*                         Twoje dane*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div class="modal-body">*/
/*                     {{ form_start(formEditUser, {'attr': {'class': ''}}) }}*/
/*                     <div class="input-wrap">*/
/*                         {{ form_row(formEditUser.tel, {'attr': {'class': 'input-sm'}}) }}*/
/*                         {{ form_row(formEditUser.email, {'attr': {'class': 'input-sm'}}) }}*/
/*                         {{ form_widget(formEditUser.marketing_agreement, {'attr': {'style': 'position: relative'}}) }}*/
/*                         <hr>*/
/*                         {{ form_row(formEditUser.client_company_name, {'attr': {'class': 'input-sm'}}) }}*/
/*                         {{ form_row(formEditUser.client_company_address, {'attr': {'class': 'input-sm'}}) }}*/
/*                         {{ form_row(formEditUser.client_company_post_code, {'attr': {'class': 'input-sm'}}) }}*/
/*                         {{ form_row(formEditUser.client_company_city, {'attr': {'class': 'input-sm'}}) }}*/
/*                         {{ form_row(formEditUser.client_company_NIP, {'attr': {'class': 'input-sm'}}) }}*/
/*                     </div>*/
/*                     {{ form_row(formEditUser.cancel, {'label': 'Anuluj', 'attr': {'class': 'btn btn-default btn-sm pull-left'}}) }}*/
/*                     {{ form_row(formEditUser.save, {'label': 'Zatwierdź', 'attr': {'class': 'btn btn-success btn-sm pull-right'}}) }}*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             {{ form_row(formEditUser.cancel, {'label': 'Anuluj', 'attr': {'class': 'btn btn-default btn-sm pull-left'}}) }}*/
/*                             {{ form_row(formEditUser.save, {'label': 'Edytuj', 'attr': {'class': 'btn btn-success btn-sm pull-right'}}) }}*/
/*                         </div>*/
/*                     </div>*/
/*                     {{ form_end(formEditUser) }}*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {#{% if addOpinionUrl is not null %}#}*/
/*         {#<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">#}*/
/*             {#<div class="modal-dialog" role="document">#}*/
/*                 {#<div class="modal-content">#}*/
/*                     {#<div class="modal-header">#}*/
/*                         {#<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span#}*/
/*                                     {#aria-hidden="true">&times;</span></button>#}*/
/*                         {#<h4 class="modal-title" id="myModalLabel">#}*/
/*                             {#Twoje zdanie jest dla nas bardzo cenne, wyraź swoją opinię.#}*/
/*                         {#</h4>#}*/
/*                     {#</div>#}*/
/*                     {#<div class="modal-footer">#}*/
/* */
/*                         {#<a href="{{ addOpinionUrl }}" title="Dodaj opinię">#}*/
/*                             {#<button type="button" class="btn  btn-info">Dodaj opinię</button>#}*/
/*                         {#</a>#}*/
/* */
/*                     {#</div>#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*         {#</div>#}*/
/* */
/*         {#<script>#}*/
/*             {#$('#myModal').modal('show');#}*/
/*         {#</script>#}*/
/*     {#{% endif %}#}*/
/* */
/*     {% if renderFirstLoginModal %}*/
/*         <div class="modal fade" id="firstLoginModal" tabindex="-1" role="dialog" aria-labelledby="firstLoginModalLabel">*/
/*             <div class="modal-dialog" role="document">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-label="Zamknij">*/
/*                             <span aria-hidden="true">&times;</span>*/
/*                         </button>*/
/*                         <h4 class="modal-title" id="myModalLabel">Powiadomienia</h4>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         <h4>Hasło</h4>*/
/*                         <blockquote class="info-blockquote">*/
/*                             <p>*/
/*                                 Hasło zostało wygenerowane dla Ciebie automatycznie, możesz je zmienić*/
/*                                 <a href="{{ path('fos_user_change_password') }}">tutaj</a>.*/
/*                             </p>*/
/*                         </blockquote>*/
/*                         {% if not app.user.email %}*/
/*                             <hr>*/
/*                             <h4>Adres e-mail</h4>*/
/*                             <blockquote class="danger-blockquote">*/
/*                                 <p>*/
/*                                     Podczas zdawania sprzętu nie został dodany adres email.*/
/*                                     Na adres e-mail będą wysyłane informacje o aktualnym statusie naprawy.*/
/*                                     Adres e-mail jest również niezbędny do przywrócenia zapomnianego hasła.*/
/*                                     Możesz go dodać <a href="#" data-toggle="modal"*/
/*                                                        data-target="#userEditModal" data-dismiss="modal">tutaj</a>.*/
/*                                 </p>*/
/*                             </blockquote>*/
/*                         {% endif %}*/
/*                         {% if addOpinionUrl is not null %}*/
/*                             <hr>*/
/*                             <h4>Opinia o naprawie</h4>*/
/*                             <blockquote class="info-blockquote">*/
/*                                 <p>*/
/*                                     Twoje zdanie jest dla nas bardzo cenne, możesz wyrazić swoją opinię*/
/*                                     <a href="{{ addOpinionUrl }}">tutaj</a>.*/
/*                                 </p>*/
/*                             </blockquote>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <div class="modal-footer">*/
/*                         <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <script>*/
/*             $('#firstLoginModal').modal('show');*/
/*         </script>*/
/*     {% endif %}*/
/* */
/*     <script>*/
/*         {% if not formEditUser.vars.valid %}*/
/*             $('#userEditModal').modal('show');*/
/*         {% endif %}*/
/* */
/*         $('.user-invoice-data').click(function () {*/
/*             $('.user-invoice-data-body').toggleClass('hidden');*/
/*         });*/
/* */
/*         $('#clientSideUserType_tel').formatter({*/
/*             'pattern': '+{\{99\}\} \{\{9999999999}\}',*/
/*             'persistent': true*/
/*         });*/
/* */
/*         $('#clientSideUserType_client_company_post_code').formatter({*/
/*             'pattern': '{\{99\}\}-\{\{999}\}'*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
