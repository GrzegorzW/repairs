<?php

/* AppBundle::alerts.html.twig */
class __TwigTemplate_cf0cb7666119fdbb6e2ea79062f529c3f4191deb5535d0a9d69da57df3e2ea77 extends Twig_Template
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
        $__internal_a1e0c7ee0e0ef72c037f7444163b4148abfd6fd0914b531862d183371d3d4501 = $this->env->getExtension("native_profiler");
        $__internal_a1e0c7ee0e0ef72c037f7444163b4148abfd6fd0914b531862d183371d3d4501->enter($__internal_a1e0c7ee0e0ef72c037f7444163b4148abfd6fd0914b531862d183371d3d4501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::alerts.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "    <div class=\"alert alert-success\">
        ";
            // line 3
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 7
            echo "    <div class=\"alert alert-danger\">
        ";
            // line 8
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a1e0c7ee0e0ef72c037f7444163b4148abfd6fd0914b531862d183371d3d4501->leave($__internal_a1e0c7ee0e0ef72c037f7444163b4148abfd6fd0914b531862d183371d3d4501_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::alerts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  42 => 7,  38 => 6,  29 => 3,  26 => 2,  22 => 1,);
    }
}
/* {% for flashMessage in app.session.flashbag.get('success') %}*/
/*     <div class="alert alert-success">*/
/*         {{ flashMessage }}*/
/*     </div>*/
/* {% endfor %}*/
/* {% for flashMessage in app.session.flashbag.get('error') %}*/
/*     <div class="alert alert-danger">*/
/*         {{ flashMessage }}*/
/*     </div>*/
/* {% endfor %}*/
