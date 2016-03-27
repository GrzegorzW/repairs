<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_46daa3b03974d2c25a58b7eef5a1e90ad5427b64ce7b24d5aefbc59a4fc7292c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdfc2af95d8fca80d1eb26f4353c8a16fa50526678f38348ac1da6b6602249a0 = $this->env->getExtension("native_profiler");
        $__internal_bdfc2af95d8fca80d1eb26f4353c8a16fa50526678f38348ac1da6b6602249a0->enter($__internal_bdfc2af95d8fca80d1eb26f4353c8a16fa50526678f38348ac1da6b6602249a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdfc2af95d8fca80d1eb26f4353c8a16fa50526678f38348ac1da6b6602249a0->leave($__internal_bdfc2af95d8fca80d1eb26f4353c8a16fa50526678f38348ac1da6b6602249a0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cb9928043d45704bb8e16db2803002d8ea83b235011dbc103948ee2da21576dc = $this->env->getExtension("native_profiler");
        $__internal_cb9928043d45704bb8e16db2803002d8ea83b235011dbc103948ee2da21576dc->enter($__internal_cb9928043d45704bb8e16db2803002d8ea83b235011dbc103948ee2da21576dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cb9928043d45704bb8e16db2803002d8ea83b235011dbc103948ee2da21576dc->leave($__internal_cb9928043d45704bb8e16db2803002d8ea83b235011dbc103948ee2da21576dc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e876d793fd4f846fafc3c51c6992cc2fbba793a34c66782dc99fb0dd46d36f3 = $this->env->getExtension("native_profiler");
        $__internal_5e876d793fd4f846fafc3c51c6992cc2fbba793a34c66782dc99fb0dd46d36f3->enter($__internal_5e876d793fd4f846fafc3c51c6992cc2fbba793a34c66782dc99fb0dd46d36f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5e876d793fd4f846fafc3c51c6992cc2fbba793a34c66782dc99fb0dd46d36f3->leave($__internal_5e876d793fd4f846fafc3c51c6992cc2fbba793a34c66782dc99fb0dd46d36f3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_365cac52ddb96efcacf799d6cef99e1ba54217cdd2eebb7c3a511af758d9f723 = $this->env->getExtension("native_profiler");
        $__internal_365cac52ddb96efcacf799d6cef99e1ba54217cdd2eebb7c3a511af758d9f723->enter($__internal_365cac52ddb96efcacf799d6cef99e1ba54217cdd2eebb7c3a511af758d9f723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_365cac52ddb96efcacf799d6cef99e1ba54217cdd2eebb7c3a511af758d9f723->leave($__internal_365cac52ddb96efcacf799d6cef99e1ba54217cdd2eebb7c3a511af758d9f723_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
