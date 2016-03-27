<?php

/* AppBundle::navNotifications.html.twig */
class __TwigTemplate_5fac3c71288224d85a9767828b8f946e6b0246a7220c72f866bba1f13c6a1040 extends Twig_Template
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
        $__internal_9f6a6a597de6fd073bd5a8cab7a5d352f4950e6eca5a5e957c6192e1708ad1c5 = $this->env->getExtension("native_profiler");
        $__internal_9f6a6a597de6fd073bd5a8cab7a5d352f4950e6eca5a5e957c6192e1708ad1c5->enter($__internal_9f6a6a597de6fd073bd5a8cab7a5d352f4950e6eca5a5e957c6192e1708ad1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::navNotifications.html.twig"));

        // line 1
        echo "<li data-toggle=\"collapse\" data-target=\"#collapseOne\" href=\"#collapseOne\" aria-expanded=\"true\"
    aria-controls=\"collapseOne\" style=\"cursor: pointer\">
    <a title=\"Powiadomienia\" style=\"overflow-x: auto\">
        Powiadomienia
        ";
        // line 5
        if ($this->getAttribute((isset($context["notification_service"]) ? $context["notification_service"] : $this->getContext($context, "notification_service")), "unreadNotificationsCount", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method")) {
            // line 6
            echo "            <span class=\"badge unread-notifications-count pull-right\">
                ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["notification_service"]) ? $context["notification_service"] : $this->getContext($context, "notification_service")), "unreadNotificationsCount", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method"), "html", null, true);
            echo "
            </span>
        ";
        }
        // line 10
        echo "    </a>
</li>
<div id=\"collapseOne\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\"
     style=\"max-height: 300px; overflow-y: auto;\">
    <ul class=\"list-group\" style=\"margin-bottom: 0\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["notification_service"]) ? $context["notification_service"] : $this->getContext($context, "notification_service")), "userNotifications", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 16
            echo "            <li class=\"list-group-item notification-entry";
            if ( !$this->getAttribute($context["entry"], "isRead", array())) {
                echo " unread-notification-entry";
            }
            echo "\"
                data-notification-id=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "id", array()), "html", null, true);
            echo "\" style=\"position: relative\">
                <a class=\"notification-link\" href=\"
                    ";
            // line 19
            if ($this->env->getExtension('security')->isGranted("ROLE_WORKER")) {
                // line 20
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_repair_details", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["entry"], "object", array()), "repair", array()), "id", array()))), "html", null, true);
                echo "
                    ";
            } else {
                // line 22
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pokwitowanie_user_panel_details", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($context["entry"], "object", array()), "repair", array()), "id", array()))), "html", null, true);
                echo "
                    ";
            }
            // line 23
            echo "\">
                </a>
                ";
            // line 25
            if ($this->getAttribute((isset($context["helper_service"]) ? $context["helper_service"] : $this->getContext($context, "helper_service")), "instanceOf", array(0 => $this->getAttribute($context["entry"], "object", array()), 1 => "AppBundle\\Entity\\Message"), "method")) {
                // line 26
                echo "                    <span class=\"notification-decoration\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entry"], "object", array()), "sender", array()), "name", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entry"], "object", array()), "sender", array()), "surname", array()), "html", null, true);
                echo "</span> -
                    ";
                // line 27
                if (($this->getAttribute($this->getAttribute($context["entry"], "object", array()), "type", array()) == twig_constant("AppBundle\\Entity\\Message::TYPE_PRIVATE"))) {
                    // line 28
                    echo "                        notatka:
                    ";
                } else {
                    // line 30
                    echo "                        wiadomość:
                    ";
                }
                // line 32
                echo "                    <br>
                    ";
                // line 33
                echo twig_escape_filter($this->env, _twig_default_filter(twig_slice($this->env, $this->getAttribute($this->getAttribute($context["entry"], "object", array()), "content", array()), 0, 40), "-"), "html", null, true);
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "object", array()), "content", array())) > 40)) {
                    echo "...";
                }
                // line 34
                echo "                    <br>
                    <span class=\"notification-decoration\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["entry"], "object", array()), "repair", array()), "device", array()), "brand", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["entry"], "object", array()), "repair", array()), "device", array()), "model", array()), "html", null, true);
                echo "</span>
                    <br>
                    <small class=\"text-muted\">";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</small>
                ";
            }
            // line 39
            echo "            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "            <li class=\"list-group-item\">
                Brak powiadomień
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </ul>
</div>

<script>
    \$(document).ready(function () {
        \$('#collapseOne').on('show.bs.collapse', function () {
            \$('li[data-toggle=\"collapse\"][href=\"#collapseOne\"]').addClass('active');
        });

        \$('#collapseOne').on('hide.bs.collapse', function () {
            \$('li[data-toggle=\"collapse\"][href=\"#collapseOne\"]').removeClass('active');
        });

        \$('li.unread-notification-entry > a').click(function (e) {
            e.preventDefault();

            var id = \$(this).parent().data('notification-id');
            var url = '";
        // line 62
        echo $this->env->getExtension('routing')->getPath("api_set_notification_readread_notification", array("id" => "12345"));
        echo "';
            url = url.replace(\"12345\", id);

            var redirectUrl = \$(this).attr('href');

            \$.ajax({
                type: 'PATCH',
                url: url,
                success: function (data, status, xhr) {
                    if (xhr.status == 204) {
                        window.location.replace(redirectUrl);
                    }
                },
                error: function () {
                    window.location.replace(redirectUrl);
                }
            });
        })
    });
</script>";
        
        $__internal_9f6a6a597de6fd073bd5a8cab7a5d352f4950e6eca5a5e957c6192e1708ad1c5->leave($__internal_9f6a6a597de6fd073bd5a8cab7a5d352f4950e6eca5a5e957c6192e1708ad1c5_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::navNotifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 62,  138 => 45,  129 => 41,  123 => 39,  118 => 37,  111 => 35,  108 => 34,  103 => 33,  100 => 32,  96 => 30,  92 => 28,  90 => 27,  83 => 26,  81 => 25,  77 => 23,  71 => 22,  65 => 20,  63 => 19,  58 => 17,  51 => 16,  46 => 15,  39 => 10,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* <li data-toggle="collapse" data-target="#collapseOne" href="#collapseOne" aria-expanded="true"*/
/*     aria-controls="collapseOne" style="cursor: pointer">*/
/*     <a title="Powiadomienia" style="overflow-x: auto">*/
/*         Powiadomienia*/
/*         {% if notification_service.unreadNotificationsCount(app.user) %}*/
/*             <span class="badge unread-notifications-count pull-right">*/
/*                 {{ notification_service.unreadNotificationsCount(app.user) }}*/
/*             </span>*/
/*         {% endif %}*/
/*     </a>*/
/* </li>*/
/* <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne"*/
/*      style="max-height: 300px; overflow-y: auto;">*/
/*     <ul class="list-group" style="margin-bottom: 0">*/
/*         {% for entry in notification_service.userNotifications(app.user) %}*/
/*             <li class="list-group-item notification-entry{% if not entry.isRead %} unread-notification-entry{% endif %}"*/
/*                 data-notification-id="{{ entry.id }}" style="position: relative">*/
/*                 <a class="notification-link" href="*/
/*                     {% if is_granted('ROLE_WORKER') %}*/
/*                     {{ path('worker_panel_repair_details',{'id':entry.object.repair.id}) }}*/
/*                     {% else %}*/
/*                     {{ path('pokwitowanie_user_panel_details',{'id':entry.object.repair.id}) }}*/
/*                     {% endif %}">*/
/*                 </a>*/
/*                 {% if helper_service.instanceOf(entry.object, 'AppBundle\\Entity\\Message') %}*/
/*                     <span class="notification-decoration">{{ entry.object.sender.name }} {{ entry.object.sender.surname }}</span> -*/
/*                     {% if entry.object.type == constant('AppBundle\\Entity\\Message::TYPE_PRIVATE') %}*/
/*                         notatka:*/
/*                     {% else %}*/
/*                         wiadomość:*/
/*                     {% endif %}*/
/*                     <br>*/
/*                     {{ entry.object.content[:40]|default('-') }}{% if entry.object.content|length > 40 %}...{% endif %}*/
/*                     <br>*/
/*                     <span class="notification-decoration">{{ entry.object.repair.device.brand }} {{ entry.object.repair.device.model }}</span>*/
/*                     <br>*/
/*                     <small class="text-muted">{{ entry.createdAt|date('Y-m-d H:i:s') }}</small>*/
/*                 {% endif %}*/
/*             </li>*/
/*         {% else %}*/
/*             <li class="list-group-item">*/
/*                 Brak powiadomień*/
/*             </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */
/* <script>*/
/*     $(document).ready(function () {*/
/*         $('#collapseOne').on('show.bs.collapse', function () {*/
/*             $('li[data-toggle="collapse"][href="#collapseOne"]').addClass('active');*/
/*         });*/
/* */
/*         $('#collapseOne').on('hide.bs.collapse', function () {*/
/*             $('li[data-toggle="collapse"][href="#collapseOne"]').removeClass('active');*/
/*         });*/
/* */
/*         $('li.unread-notification-entry > a').click(function (e) {*/
/*             e.preventDefault();*/
/* */
/*             var id = $(this).parent().data('notification-id');*/
/*             var url = '{{ path("api_set_notification_readread_notification", {'id': '12345'}) }}';*/
/*             url = url.replace("12345", id);*/
/* */
/*             var redirectUrl = $(this).attr('href');*/
/* */
/*             $.ajax({*/
/*                 type: 'PATCH',*/
/*                 url: url,*/
/*                 success: function (data, status, xhr) {*/
/*                     if (xhr.status == 204) {*/
/*                         window.location.replace(redirectUrl);*/
/*                     }*/
/*                 },*/
/*                 error: function () {*/
/*                     window.location.replace(redirectUrl);*/
/*                 }*/
/*             });*/
/*         })*/
/*     });*/
/* </script>*/
