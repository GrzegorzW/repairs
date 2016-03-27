<?php

/* AppBundle:PaginationLimit:paginationLimit.html.twig */
class __TwigTemplate_c8ce3598154a781c58d85cb944244a6f06b2a08ece06c216341ca15427a65cf1 extends Twig_Template
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
        $__internal_ce2c974cd87c81f9b1085dabe691ae5633cc8a21bba6da8100b39dad79da5a66 = $this->env->getExtension("native_profiler");
        $__internal_ce2c974cd87c81f9b1085dabe691ae5633cc8a21bba6da8100b39dad79da5a66->enter($__internal_ce2c974cd87c81f9b1085dabe691ae5633cc8a21bba6da8100b39dad79da5a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:PaginationLimit:paginationLimit.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-md-12 limit-select-place\">
        <div class=\"pull-right limit-select-widget\">
            <form method=\"get\" name=\"formPaginationLimit\" id=\"formPaginationLimit\">
                <div class=\"form-group-sm\">
                    <label for=\"limit\" class=\"sr-only\"></label>
                    <select name=\"limit\" id=\"limit\" class=\"form-control\">
                        ";
        // line 8
        $context["min"] = 20;
        // line 9
        echo "                        ";
        $context["mid"] = 40;
        // line 10
        echo "                        ";
        $context["max"] = 100;
        // line 11
        echo "
                        ";
        // line 12
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "session", array()), "has", array(0 => "limit"), "method")) {
            // line 13
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["min"]) ? $context["min"] : $this->getContext($context, "min")), "html", null, true);
            echo "\"
                                    ";
            // line 14
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "session", array()), "get", array(0 => "limit"), "method") == (isset($context["min"]) ? $context["min"] : $this->getContext($context, "min")))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["min"]) ? $context["min"] : $this->getContext($context, "min")), "html", null, true);
            echo "</option>
                            <option value=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["mid"]) ? $context["mid"] : $this->getContext($context, "mid")), "html", null, true);
            echo "\"
                                    ";
            // line 16
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "session", array()), "get", array(0 => "limit"), "method") == (isset($context["mid"]) ? $context["mid"] : $this->getContext($context, "mid")))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["mid"]) ? $context["mid"] : $this->getContext($context, "mid")), "html", null, true);
            echo "</option>
                            <option value=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")), "html", null, true);
            echo "\"
                                    ";
            // line 18
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "session", array()), "get", array(0 => "limit"), "method") == (isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")), "html", null, true);
            echo "</option>
                        ";
        } else {
            // line 20
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["min"]) ? $context["min"] : $this->getContext($context, "min")), "html", null, true);
            echo "\" selected>";
            echo twig_escape_filter($this->env, (isset($context["min"]) ? $context["min"] : $this->getContext($context, "min")), "html", null, true);
            echo "</option>
                            <option value=\"";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["mid"]) ? $context["mid"] : $this->getContext($context, "mid")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["mid"]) ? $context["mid"] : $this->getContext($context, "mid")), "html", null, true);
            echo "</option>
                            <option value=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["max"]) ? $context["max"] : $this->getContext($context, "max")), "html", null, true);
            echo "</option>
                        ";
        }
        // line 24
        echo "                    </select>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    \$(function(){
        \$.extend({
            getQueryParameters : function(str) {
                return (str || document.location.search)
                        .replace(/(^\\?)/,'')
                        .split(\"&\")
                        .map(function(n){return n = n.split(\"=\"),this[n[0]] = n[1],this}.bind({}))[0];
            }
        });
        \$('#limit').change(function () {
            var params = \$.getQueryParameters();
            params.limit = \$('#limit').val();
            params.page = 1;

            window.location.replace([
                location.protocol,
                '//',
                location.host,
                location.pathname,
                '?',
                \$.param(params)
            ].join(''));
        });
    });
</script>";
        
        $__internal_ce2c974cd87c81f9b1085dabe691ae5633cc8a21bba6da8100b39dad79da5a66->leave($__internal_ce2c974cd87c81f9b1085dabe691ae5633cc8a21bba6da8100b39dad79da5a66_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:PaginationLimit:paginationLimit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 24,  95 => 22,  89 => 21,  82 => 20,  73 => 18,  69 => 17,  61 => 16,  57 => 15,  49 => 14,  44 => 13,  42 => 12,  39 => 11,  36 => 10,  33 => 9,  31 => 8,  22 => 1,);
    }
}
/* <div class="row">*/
/*     <div class="col-md-12 limit-select-place">*/
/*         <div class="pull-right limit-select-widget">*/
/*             <form method="get" name="formPaginationLimit" id="formPaginationLimit">*/
/*                 <div class="form-group-sm">*/
/*                     <label for="limit" class="sr-only"></label>*/
/*                     <select name="limit" id="limit" class="form-control">*/
/*                         {% set min = 20 %}*/
/*                         {% set mid = 40 %}*/
/*                         {% set max = 100 %}*/
/* */
/*                         {% if app.request.session.has('limit') %}*/
/*                             <option value="{{ min }}"*/
/*                                     {% if app.request.session.get('limit') == min %}selected{% endif %}>{{ min }}</option>*/
/*                             <option value="{{ mid }}"*/
/*                                     {% if app.request.session.get('limit') == mid %}selected{% endif %}>{{ mid }}</option>*/
/*                             <option value="{{ max }}"*/
/*                                     {% if app.request.session.get('limit') == max %}selected{% endif %}>{{ max }}</option>*/
/*                         {% else %}*/
/*                             <option value="{{ min }}" selected>{{ min }}</option>*/
/*                             <option value="{{ mid }}">{{ mid }}</option>*/
/*                             <option value="{{ max }}">{{ max }}</option>*/
/*                         {% endif %}*/
/*                     </select>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <script>*/
/*     $(function(){*/
/*         $.extend({*/
/*             getQueryParameters : function(str) {*/
/*                 return (str || document.location.search)*/
/*                         .replace(/(^\?)/,'')*/
/*                         .split("&")*/
/*                         .map(function(n){return n = n.split("="),this[n[0]] = n[1],this}.bind({}))[0];*/
/*             }*/
/*         });*/
/*         $('#limit').change(function () {*/
/*             var params = $.getQueryParameters();*/
/*             params.limit = $('#limit').val();*/
/*             params.page = 1;*/
/* */
/*             window.location.replace([*/
/*                 location.protocol,*/
/*                 '//',*/
/*                 location.host,*/
/*                 location.pathname,*/
/*                 '?',*/
/*                 $.param(params)*/
/*             ].join(''));*/
/*         });*/
/*     });*/
/* </script>*/
