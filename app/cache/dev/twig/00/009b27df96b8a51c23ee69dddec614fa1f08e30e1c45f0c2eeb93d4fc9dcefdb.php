<?php

/* AppBundle:Worker:opinions.html.twig */
class __TwigTemplate_4e40b38b7f1ad7115623cafacc5f571c0e58dbf52c9356d7bd3bfa25cdcdf882 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Worker:opinions.html.twig", 1);
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
        $__internal_4ad757bcf78b6e8d9daedd4c76443fde4f5861b92b9280111b7b7a915085ace7 = $this->env->getExtension("native_profiler");
        $__internal_4ad757bcf78b6e8d9daedd4c76443fde4f5861b92b9280111b7b7a915085ace7->enter($__internal_4ad757bcf78b6e8d9daedd4c76443fde4f5861b92b9280111b7b7a915085ace7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Worker:opinions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ad757bcf78b6e8d9daedd4c76443fde4f5861b92b9280111b7b7a915085ace7->leave($__internal_4ad757bcf78b6e8d9daedd4c76443fde4f5861b92b9280111b7b7a915085ace7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e17d40967cb01a9330e86c645beb3ca073fae0757b3032cb54eea01a996fdd4c = $this->env->getExtension("native_profiler");
        $__internal_e17d40967cb01a9330e86c645beb3ca073fae0757b3032cb54eea01a996fdd4c->enter($__internal_e17d40967cb01a9330e86c645beb3ca073fae0757b3032cb54eea01a996fdd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    | Opinie
";
        
        $__internal_e17d40967cb01a9330e86c645beb3ca073fae0757b3032cb54eea01a996fdd4c->leave($__internal_e17d40967cb01a9330e86c645beb3ca073fae0757b3032cb54eea01a996fdd4c_prof);

    }

    // line 7
    public function block_pageContainer($context, array $blocks = array())
    {
        $__internal_cf5454a80c50219cd8d4a7674230dfd4fc497ce0ae7e0b46f5511311a5dc10cf = $this->env->getExtension("native_profiler");
        $__internal_cf5454a80c50219cd8d4a7674230dfd4fc497ce0ae7e0b46f5511311a5dc10cf->enter($__internal_cf5454a80c50219cd8d4a7674230dfd4fc497ce0ae7e0b46f5511311a5dc10cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContainer"));

        // line 8
        echo "
    <div style=\"margin-top: 40px; margin-bottom: 15px;\">
        ";
        // line 10
        $this->loadTemplate("AppBundle:PaginationLimit:paginationLimit.html.twig", "AppBundle:Worker:opinions.html.twig", 10)->display($context);
        // line 11
        echo "    </div>

    <div class=\"table-responsive\">
        <table class=\"table table-striped table-bordered\" id=\"convertable-table\">
            <thead>
            <tr>
                <th>Repair ID</th>
                <th>User ID</th>
                <th>Marka i model</th>
                <th>Opinia</th>
                <th>Data opinii</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 26
            echo "                <tr>
                    <td data-title=\"Repair ID\">
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_repair_details", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "altId", array()), "html", null, true);
            echo "</a>
                    </td>
                    <td data-title=\"User ID\">
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("worker_panel_user_details", array("id" => $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "altId", array()), "html", null, true);
            echo "</a>
                    </td>
                    <td data-title=\"Marka i model\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "device", array()), "brand", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "device", array()), "model", array()), "html", null, true);
            echo "</td>
                    <td data-title=\"Opinia\">";
            // line 34
            echo $this->getAttribute($context["entry"], "opinion", array());
            echo "</td>
                    <td data-title=\"Data opinii\">";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entry"], "opinionDate", array()), "d.m.Y"), "html", null, true);
            echo "</td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "                <tr>
                    <td data-title=\"Opinie\" colspan=\"5\">Brak opinii.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </tbody>
        </table>
    </div>
    <div class=\"navigation text-center\">
        ";
        // line 46
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
    </div>
";
        
        $__internal_cf5454a80c50219cd8d4a7674230dfd4fc497ce0ae7e0b46f5511311a5dc10cf->leave($__internal_cf5454a80c50219cd8d4a7674230dfd4fc497ce0ae7e0b46f5511311a5dc10cf_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Worker:opinions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 46,  128 => 42,  119 => 38,  111 => 35,  107 => 34,  101 => 33,  94 => 31,  86 => 28,  82 => 26,  77 => 25,  61 => 11,  59 => 10,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* */
/* {% block title %}*/
/*     | Opinie*/
/* {% endblock %}*/
/* */
/* {% block pageContainer %}*/
/* */
/*     <div style="margin-top: 40px; margin-bottom: 15px;">*/
/*         {% include 'AppBundle:PaginationLimit:paginationLimit.html.twig' %}*/
/*     </div>*/
/* */
/*     <div class="table-responsive">*/
/*         <table class="table table-striped table-bordered" id="convertable-table">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>Repair ID</th>*/
/*                 <th>User ID</th>*/
/*                 <th>Marka i model</th>*/
/*                 <th>Opinia</th>*/
/*                 <th>Data opinii</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for entry in pagination %}*/
/*                 <tr>*/
/*                     <td data-title="Repair ID">*/
/*                         <a href="{{ path('worker_panel_repair_details',{'id':entry.id}) }}">{{ entry.altId }}</a>*/
/*                     </td>*/
/*                     <td data-title="User ID">*/
/*                         <a href="{{ path('worker_panel_user_details',{'id':entry.user.id}) }}">{{ entry.user.altId }}</a>*/
/*                     </td>*/
/*                     <td data-title="Marka i model">{{ entry.device.brand }} {{ entry.device.model }}</td>*/
/*                     <td data-title="Opinia">{{ entry.opinion | raw }}</td>*/
/*                     <td data-title="Data opinii">{{ entry.opinionDate | date('d.m.Y') }}</td>*/
/*                 </tr>*/
/*             {% else %}*/
/*                 <tr>*/
/*                     <td data-title="Opinie" colspan="5">Brak opinii.</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/*     <div class="navigation text-center">*/
/*         {{ knp_pagination_render(pagination) }}*/
/*     </div>*/
/* {% endblock %}*/
