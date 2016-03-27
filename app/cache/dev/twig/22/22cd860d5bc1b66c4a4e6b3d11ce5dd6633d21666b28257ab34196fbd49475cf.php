<?php

/* AppBundle:Worker:devices.html.twig */
class __TwigTemplate_952b9b87d5c9c73353a066e6efbc968de3ea37d3298f6279e33002e9c03f09d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Worker:devices.html.twig", 1);
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
        $__internal_f1ee328fedcc94456ea7cbf94c4eb58a483362be52129040e195b0d97aab36ab = $this->env->getExtension("native_profiler");
        $__internal_f1ee328fedcc94456ea7cbf94c4eb58a483362be52129040e195b0d97aab36ab->enter($__internal_f1ee328fedcc94456ea7cbf94c4eb58a483362be52129040e195b0d97aab36ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Worker:devices.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1ee328fedcc94456ea7cbf94c4eb58a483362be52129040e195b0d97aab36ab->leave($__internal_f1ee328fedcc94456ea7cbf94c4eb58a483362be52129040e195b0d97aab36ab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d557951ebb03ed6329ddbcdb69c1e4b01e0ea18c4e174723d50e4752c780daa = $this->env->getExtension("native_profiler");
        $__internal_9d557951ebb03ed6329ddbcdb69c1e4b01e0ea18c4e174723d50e4752c780daa->enter($__internal_9d557951ebb03ed6329ddbcdb69c1e4b01e0ea18c4e174723d50e4752c780daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    | Urządzenia
";
        
        $__internal_9d557951ebb03ed6329ddbcdb69c1e4b01e0ea18c4e174723d50e4752c780daa->leave($__internal_9d557951ebb03ed6329ddbcdb69c1e4b01e0ea18c4e174723d50e4752c780daa_prof);

    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_d74baedff7fda0c491c93448da341d47a9703efbdba56a460ea2caa9bb6c2d87 = $this->env->getExtension("native_profiler");
        $__internal_d74baedff7fda0c491c93448da341d47a9703efbdba56a460ea2caa9bb6c2d87->enter($__internal_d74baedff7fda0c491c93448da341d47a9703efbdba56a460ea2caa9bb6c2d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("AppBundle::alerts.html.twig", "AppBundle:Worker:devices.html.twig", 9)->display($context);
        // line 10
        echo "
    <form method=\"get\" name=\"findDevices\">
        <label class=\"control-label\" for=\"findDevices_phrase\">Szukana fraza</label>
        <input type=\"text\" placeholder=\"np. marka, model, s/n...\"
               class=\"form-control\" name=\"findDevices_phrase\" style=\"margin-bottom: 15px;\" autofocus
                ";
        // line 15
        if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "findDevices_phrase"), "method"))) {
            // line 16
            echo "                    value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "findDevices_phrase"), "method"), "html", null, true);
            echo "\"
                ";
        }
        // line 18
        echo "        />
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"));
        echo "\" class=\"btn btn-danger btn-sm\">Reset</a>
        <button type=\"submit\" name=\"find\" class=\"btn btn-success btn-sm\">Wyszukaj</button>
    </form>

    ";
        // line 23
        $this->loadTemplate("AppBundle:PaginationLimit:paginationLimit.html.twig", "AppBundle:Worker:devices.html.twig", 23)->display($context);
        // line 24
        echo "
    <div class=\"table-responsive\" style=\"margin-top: 20px;\">
        <table class=\"table table-striped table-bordered\" id=\"convertable-table\">
            <thead>
            <tr>
                <th>
                    ";
        // line 30
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "ID", "device.altId");
        echo "
                </th>
                <th>
                    ";
        // line 33
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Marka", "device.brand");
        echo "
                </th>
                <th>
                    ";
        // line 36
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Model", "device.model");
        echo "
                </th>
                <th>
                    ";
        // line 39
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Numer seryjny", "device.serial");
        echo "
                </th>
                <th>Szczegóły</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 46
            echo "                <tr>
                    <td data-title=\"ID\">
                        ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "altId", array()), "html", null, true);
            echo "
                    </td>
                    <td data-title=\"Marka\">
                        ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "brand", array()), "html", null, true);
            echo "
                    </td>
                    <td data-title=\"Model\">
                        ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "model", array()), "html", null, true);
            echo "
                    </td>
                     <td data-title=\"Numer seryjny\">
                        ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "serial", array()), "html", null, true);
            echo "
                    </td>
                    <td data-title=\"Szczegóły\">
                        <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_device_details", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
            echo "\">
                            Zobacz
                        </a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "                <tr>
                    <td colspan=\"5\" data-title=\"Urządzenia\">Brak rekordów do wyświetlenia.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "            </tbody>
        </table>
    </div>

    <div class=\"text-center\">
        ";
        // line 75
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
    </div>

    <small class=\"help-block text-center\">
        Liczba wyników: ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
    </small>

";
        
        $__internal_d74baedff7fda0c491c93448da341d47a9703efbdba56a460ea2caa9bb6c2d87->leave($__internal_d74baedff7fda0c491c93448da341d47a9703efbdba56a460ea2caa9bb6c2d87_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Worker:devices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 79,  182 => 75,  175 => 70,  166 => 66,  155 => 60,  149 => 57,  143 => 54,  137 => 51,  131 => 48,  127 => 46,  122 => 45,  113 => 39,  107 => 36,  101 => 33,  95 => 30,  87 => 24,  85 => 23,  78 => 19,  75 => 18,  69 => 16,  67 => 15,  60 => 10,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     | Urządzenia*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     {% include 'AppBundle::alerts.html.twig' %}*/
/* */
/*     <form method="get" name="findDevices">*/
/*         <label class="control-label" for="findDevices_phrase">Szukana fraza</label>*/
/*         <input type="text" placeholder="np. marka, model, s/n..."*/
/*                class="form-control" name="findDevices_phrase" style="margin-bottom: 15px;" autofocus*/
/*                 {% if app.request.get('findDevices_phrase') is not empty %}*/
/*                     value="{{ app.request.get('findDevices_phrase') }}"*/
/*                 {% endif %}*/
/*         />*/
/*         <a href="{{ path(app.request.get('_route')) }}" class="btn btn-danger btn-sm">Reset</a>*/
/*         <button type="submit" name="find" class="btn btn-success btn-sm">Wyszukaj</button>*/
/*     </form>*/
/* */
/*     {% include 'AppBundle:PaginationLimit:paginationLimit.html.twig' %}*/
/* */
/*     <div class="table-responsive" style="margin-top: 20px;">*/
/*         <table class="table table-striped table-bordered" id="convertable-table">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>*/
/*                     {{ knp_pagination_sortable(pagination, 'ID', 'device.altId') }}*/
/*                 </th>*/
/*                 <th>*/
/*                     {{ knp_pagination_sortable(pagination, 'Marka', 'device.brand') }}*/
/*                 </th>*/
/*                 <th>*/
/*                     {{ knp_pagination_sortable(pagination, 'Model', 'device.model') }}*/
/*                 </th>*/
/*                 <th>*/
/*                     {{ knp_pagination_sortable(pagination, 'Numer seryjny', 'device.serial') }}*/
/*                 </th>*/
/*                 <th>Szczegóły</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for entry in pagination %}*/
/*                 <tr>*/
/*                     <td data-title="ID">*/
/*                         {{ entry.altId }}*/
/*                     </td>*/
/*                     <td data-title="Marka">*/
/*                         {{ entry.brand }}*/
/*                     </td>*/
/*                     <td data-title="Model">*/
/*                         {{ entry.model }}*/
/*                     </td>*/
/*                      <td data-title="Numer seryjny">*/
/*                         {{ entry.serial }}*/
/*                     </td>*/
/*                     <td data-title="Szczegóły">*/
/*                         <a href="{{ path('worker_panel_device_details',{'id':entry.id}) }}">*/
/*                             Zobacz*/
/*                         </a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% else %}*/
/*                 <tr>*/
/*                     <td colspan="5" data-title="Urządzenia">Brak rekordów do wyświetlenia.</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/*     <div class="text-center">*/
/*         {{ knp_pagination_render(pagination) }}*/
/*     </div>*/
/* */
/*     <small class="help-block text-center">*/
/*         Liczba wyników: {{ pagination.getTotalItemCount }}*/
/*     </small>*/
/* */
/* {% endblock %}*/
/* */
/* */
