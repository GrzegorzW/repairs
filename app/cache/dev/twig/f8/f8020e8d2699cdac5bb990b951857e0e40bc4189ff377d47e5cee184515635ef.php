<?php

/* AppBundle:Worker:users.html.twig */
class __TwigTemplate_192a7d7cd43a7ca18c7ce65af39781338b145ce43dbcaa2b369af0c264c2a66d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Worker:users.html.twig", 1);
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
        $__internal_6d3b40bb6db8a244655101fa17de84a243e235ec2962934122fc8071a637ad4c = $this->env->getExtension("native_profiler");
        $__internal_6d3b40bb6db8a244655101fa17de84a243e235ec2962934122fc8071a637ad4c->enter($__internal_6d3b40bb6db8a244655101fa17de84a243e235ec2962934122fc8071a637ad4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Worker:users.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d3b40bb6db8a244655101fa17de84a243e235ec2962934122fc8071a637ad4c->leave($__internal_6d3b40bb6db8a244655101fa17de84a243e235ec2962934122fc8071a637ad4c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_095caec0414969536a8508ba4599c425cc84fd9910f8c7a265a814b42002766e = $this->env->getExtension("native_profiler");
        $__internal_095caec0414969536a8508ba4599c425cc84fd9910f8c7a265a814b42002766e->enter($__internal_095caec0414969536a8508ba4599c425cc84fd9910f8c7a265a814b42002766e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    | Klienci
";
        
        $__internal_095caec0414969536a8508ba4599c425cc84fd9910f8c7a265a814b42002766e->leave($__internal_095caec0414969536a8508ba4599c425cc84fd9910f8c7a265a814b42002766e_prof);

    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_3be8b7eefd75f20488a466211b645538c22d6a087c40bda88000fc0ffc115f15 = $this->env->getExtension("native_profiler");
        $__internal_3be8b7eefd75f20488a466211b645538c22d6a087c40bda88000fc0ffc115f15->enter($__internal_3be8b7eefd75f20488a466211b645538c22d6a087c40bda88000fc0ffc115f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("AppBundle::alerts.html.twig", "AppBundle:Worker:users.html.twig", 9)->display($context);
        // line 10
        echo "
    <h5>Szukana fraza</h5>

    <form method=\"get\">
        <div class=\"form-group\">
            <label class=\"sr-only\" for=\"phrase\">Szukana fraza</label>
            <input type=\"text\" placeholder=\"np. id, imię, nazwisko, login, tel, e-mail.\"
                   class=\"form-control input-sm\" name=\"phrase\"
                   autofocus=\"autofocus\"
                    ";
        // line 19
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "phrase"), "method"))) {
            // line 20
            echo "                        value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "phrase"), "method"), "html", null, true);
            echo "\"
                    ";
        }
        // line 22
        echo "            />
        </div>
        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"));
        echo "\" class=\"btn btn-danger btn-sm\">Reset</a>
        <button type=\"submit\" name=\"find\" class=\"btn btn-success btn-sm\">
            Wyszukaj
        </button>
    </form>

    ";
        // line 30
        $this->loadTemplate("AppBundle:PaginationLimit:paginationLimit.html.twig", "AppBundle:Worker:users.html.twig", 30)->display($context);
        // line 31
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"table-responsive\" style=\"margin-top: 15px;\">
                <table class=\"table table-striped table-bordered\" id=\"convertable-table\">
                    <thead>
                    <tr>
                        <th>
                            ";
        // line 39
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "User ID", "u.alt_id");
        echo "
                        </th>
                        <th>
                            ";
        // line 42
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Login", "u.username");
        echo "
                        </th>
                        <th>
                            ";
        // line 45
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Imię i nazwisko", "u.name");
        echo "
                        </th>
                        <th>
                            ";
        // line 48
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "E-mail", "u.email");
        echo "
                        </th>
                        <th>
                            ";
        // line 51
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Tel", "u.tel");
        echo "
                        </th>
                        <th>Szczegóły</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 58
            echo "                        ";
            if (($this->getAttribute($context["entry"], "id", array()) != 1)) {
                // line 59
                echo "                            <tr>
                                <td data-title=\"User ID\">
                                    ";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "altId", array()), "html", null, true);
                echo "
                                </td>
                                <td data-title=\"Nick\">
                                    ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "username", array()), "html", null, true);
                echo "
                                </td>
                                <td data-title=\"Imię i nazwisko\">
                                    ";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "name", array()), "html", null, true);
                echo "
                                    ";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "surname", array()), "html", null, true);
                echo "
                                </td>
                                <td data-title=\"E-mail\">
                                    ";
                // line 71
                if ( !(null === $this->getAttribute($context["entry"], "email", array()))) {
                    // line 72
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "email", array()), "html", null, true);
                    echo "
                                    ";
                } else {
                    // line 74
                    echo "                                        -
                                    ";
                }
                // line 76
                echo "                                </td>
                                <td data-title=\"Tel\">
                                    ";
                // line 78
                if ( !(null === $this->getAttribute($context["entry"], "tel", array()))) {
                    // line 79
                    echo "                                        ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('phone_number_format')->getCallable(), array($this->getAttribute($context["entry"], "tel", array()))), "html", null, true);
                    echo "
                                    ";
                } else {
                    // line 81
                    echo "                                        -
                                    ";
                }
                // line 83
                echo "                                </td>
                                <td data-title=\"Szczegóły\"><a
                                            href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_user_details", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\">Zobacz</a>
                                </td>
                            </tr>
                        ";
            }
            // line 89
            echo "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 90
            echo "                        <tr>
                            <td data-title=\"Użytkownicy\" colspan=\"6\"><span> Brak rekordów do wyświetlenia.</span></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"navigation text-center\">
                ";
        // line 98
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
            <small class=\"help-block text-center\">
                Liczba wyników: ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
            </small>
        </div>
    </div>

";
        
        $__internal_3be8b7eefd75f20488a466211b645538c22d6a087c40bda88000fc0ffc115f15->leave($__internal_3be8b7eefd75f20488a466211b645538c22d6a087c40bda88000fc0ffc115f15_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Worker:users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 101,  230 => 98,  224 => 94,  215 => 90,  210 => 89,  203 => 85,  199 => 83,  195 => 81,  189 => 79,  187 => 78,  183 => 76,  179 => 74,  173 => 72,  171 => 71,  165 => 68,  161 => 67,  155 => 64,  149 => 61,  145 => 59,  142 => 58,  137 => 57,  128 => 51,  122 => 48,  116 => 45,  110 => 42,  104 => 39,  94 => 31,  92 => 30,  83 => 24,  79 => 22,  73 => 20,  71 => 19,  60 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     | Klienci*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     {% include 'AppBundle::alerts.html.twig' %}*/
/* */
/*     <h5>Szukana fraza</h5>*/
/* */
/*     <form method="get">*/
/*         <div class="form-group">*/
/*             <label class="sr-only" for="phrase">Szukana fraza</label>*/
/*             <input type="text" placeholder="np. id, imię, nazwisko, login, tel, e-mail."*/
/*                    class="form-control input-sm" name="phrase"*/
/*                    autofocus="autofocus"*/
/*                     {% if app.request.get('phrase') is not empty %}*/
/*                         value="{{ app.request.get('phrase') }}"*/
/*                     {% endif %}*/
/*             />*/
/*         </div>*/
/*         <a href="{{ path(app.request.get('_route')) }}" class="btn btn-danger btn-sm">Reset</a>*/
/*         <button type="submit" name="find" class="btn btn-success btn-sm">*/
/*             Wyszukaj*/
/*         </button>*/
/*     </form>*/
/* */
/*     {% include 'AppBundle:PaginationLimit:paginationLimit.html.twig' %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="table-responsive" style="margin-top: 15px;">*/
/*                 <table class="table table-striped table-bordered" id="convertable-table">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>*/
/*                             {{ knp_pagination_sortable(pagination, 'User ID', 'u.alt_id') }}*/
/*                         </th>*/
/*                         <th>*/
/*                             {{ knp_pagination_sortable(pagination, 'Login', 'u.username') }}*/
/*                         </th>*/
/*                         <th>*/
/*                             {{ knp_pagination_sortable(pagination, 'Imię i nazwisko', 'u.name') }}*/
/*                         </th>*/
/*                         <th>*/
/*                             {{ knp_pagination_sortable(pagination, 'E-mail', 'u.email') }}*/
/*                         </th>*/
/*                         <th>*/
/*                             {{ knp_pagination_sortable(pagination, 'Tel', 'u.tel') }}*/
/*                         </th>*/
/*                         <th>Szczegóły</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for entry in pagination %}*/
/*                         {% if entry.id != 1 %}*/
/*                             <tr>*/
/*                                 <td data-title="User ID">*/
/*                                     {{ entry.altId }}*/
/*                                 </td>*/
/*                                 <td data-title="Nick">*/
/*                                     {{ entry.username }}*/
/*                                 </td>*/
/*                                 <td data-title="Imię i nazwisko">*/
/*                                     {{ entry.name }}*/
/*                                     {{ entry.surname }}*/
/*                                 </td>*/
/*                                 <td data-title="E-mail">*/
/*                                     {% if entry.email is not null %}*/
/*                                         {{ entry.email }}*/
/*                                     {% else %}*/
/*                                         -*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                                 <td data-title="Tel">*/
/*                                     {% if entry.tel is not null %}*/
/*                                         {{ phone_number_format(entry.tel) }}*/
/*                                     {% else %}*/
/*                                         -*/
/*                                     {% endif %}*/
/*                                 </td>*/
/*                                 <td data-title="Szczegóły"><a*/
/*                                             href="{{ path('worker_panel_user_details',{'id':entry.id}) }}">Zobacz</a>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endif %}*/
/*                     {% else %}*/
/*                         <tr>*/
/*                             <td data-title="Użytkownicy" colspan="6"><span> Brak rekordów do wyświetlenia.</span></td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*             <div class="navigation text-center">*/
/*                 {{ knp_pagination_render(pagination) }}*/
/*             </div>*/
/*             <small class="help-block text-center">*/
/*                 Liczba wyników: {{ pagination.getTotalItemCount }}*/
/*             </small>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
