<?php

/* AppBundle:Form:fields.html.twig */
class __TwigTemplate_4a25adcd0b939b27f8a982c97badd6c04dbf467a4099949f0d76b5f584da0d76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_252b3bead1e8121ae70a3debd38cf67d4101a266fbc37310680601a8878d14ed = $this->env->getExtension("native_profiler");
        $__internal_252b3bead1e8121ae70a3debd38cf67d4101a266fbc37310680601a8878d14ed->enter($__internal_252b3bead1e8121ae70a3debd38cf67d4101a266fbc37310680601a8878d14ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_252b3bead1e8121ae70a3debd38cf67d4101a266fbc37310680601a8878d14ed->leave($__internal_252b3bead1e8121ae70a3debd38cf67d4101a266fbc37310680601a8878d14ed_prof);

    }

    // line 1
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_d68a1d60adaaf32dfab2f65a55447b9f98c8d1e44c5113393670ad0a1869111f = $this->env->getExtension("native_profiler");
        $__internal_d68a1d60adaaf32dfab2f65a55447b9f98c8d1e44c5113393670ad0a1869111f->enter($__internal_d68a1d60adaaf32dfab2f65a55447b9f98c8d1e44c5113393670ad0a1869111f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <div class=\"vich-file\">
            ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row');
        echo " asd fasd fasd fasd fasd
            ";
        // line 5
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 6
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
            ";
        }
        // line 8
        echo "
            ";
        // line 9
        if ((array_key_exists("download_uri", $context) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 10
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 12
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d68a1d60adaaf32dfab2f65a55447b9f98c8d1e44c5113393670ad0a1869111f->leave($__internal_d68a1d60adaaf32dfab2f65a55447b9f98c8d1e44c5113393670ad0a1869111f_prof);

    }

    // line 16
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_efe4ef6341e0729ac4722c3f69e497310b28965891e15ec76c89dfa3b5c8867a = $this->env->getExtension("native_profiler");
        $__internal_efe4ef6341e0729ac4722c3f69e497310b28965891e15ec76c89dfa3b5c8867a->enter($__internal_efe4ef6341e0729ac4722c3f69e497310b28965891e15ec76c89dfa3b5c8867a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 17
        echo "    ";
        ob_start();
        // line 18
        echo "        <div class=\"vich-image\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row');
        echo "
            ";
        // line 20
        if ((array_key_exists("download_uri", $context) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 21
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" style=\"max-width: 300px;\"/></a>
            ";
        }
        // line 23
        echo "            ";
        if ((((isset($context["show_download_link"]) ? $context["show_download_link"] : $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")))) {
            // line 24
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 26
        echo "            ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 27
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
            ";
        }
        // line 29
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_efe4ef6341e0729ac4722c3f69e497310b28965891e15ec76c89dfa3b5c8867a->leave($__internal_efe4ef6341e0729ac4722c3f69e497310b28965891e15ec76c89dfa3b5c8867a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  128 => 29,  122 => 27,  119 => 26,  111 => 24,  108 => 23,  100 => 21,  98 => 20,  94 => 19,  91 => 18,  88 => 17,  82 => 16,  73 => 12,  65 => 10,  63 => 9,  60 => 8,  54 => 6,  52 => 5,  48 => 4,  45 => 3,  42 => 2,  36 => 1,  29 => 16,  26 => 15,  24 => 1,);
    }
}
/* {% block vich_file_widget %}*/
/*     {% spaceless %}*/
/*         <div class="vich-file">*/
/*             {{ form_row(form.file) }} asd fasd fasd fasd fasd*/
/*             {% if form.delete is defined %}*/
/*                 {{ form_row(form.delete) }}*/
/*             {% endif %}*/
/* */
/*             {% if download_uri is defined and download_uri %}*/
/*                 <a href="{{ download_uri }}">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block vich_image_widget %}*/
/*     {% spaceless %}*/
/*         <div class="vich-image">*/
/*             {{ form_row(form.file) }}*/
/*             {% if download_uri is defined and download_uri %}*/
/*                 <a href="{{ download_uri }}"><img src="{{ download_uri }}" alt="" style="max-width: 300px;"/></a>*/
/*             {% endif %}*/
/*             {% if show_download_link and download_uri is defined and download_uri%}*/
/*                 <a href="{{ download_uri }}">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>*/
/*             {% endif %}*/
/*             {% if form.delete is defined %}*/
/*                 {{ form_row(form.delete) }}*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
