<?php

/* TbbcMoneyBundle:Form:fields.html.twig */
class __TwigTemplate_4614dd7ff729ef1efed1b0bbcd8e29563633746d7c971a7c987b42701f23800c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tbbc_money_widget' => array($this, 'block_tbbc_money_widget'),
            'tbbc_currency_widget' => array($this, 'block_tbbc_currency_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a13949649953a733c65ba3c0d141f77aca608ac667b37fa4ac26e6e748c6dd2c = $this->env->getExtension("native_profiler");
        $__internal_a13949649953a733c65ba3c0d141f77aca608ac667b37fa4ac26e6e748c6dd2c->enter($__internal_a13949649953a733c65ba3c0d141f77aca608ac667b37fa4ac26e6e748c6dd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TbbcMoneyBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('tbbc_money_widget', $context, $blocks);
        // line 8
        $this->displayBlock('tbbc_currency_widget', $context, $blocks);
        
        $__internal_a13949649953a733c65ba3c0d141f77aca608ac667b37fa4ac26e6e748c6dd2c->leave($__internal_a13949649953a733c65ba3c0d141f77aca608ac667b37fa4ac26e6e748c6dd2c_prof);

    }

    // line 1
    public function block_tbbc_money_widget($context, array $blocks = array())
    {
        $__internal_5e2798a0f20a80885a60408c9b4e774de182b88c8e341bb3d2b059360277db36 = $this->env->getExtension("native_profiler");
        $__internal_5e2798a0f20a80885a60408c9b4e774de182b88c8e341bb3d2b059360277db36->enter($__internal_5e2798a0f20a80885a60408c9b4e774de182b88c8e341bb3d2b059360277db36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbbc_money_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5e2798a0f20a80885a60408c9b4e774de182b88c8e341bb3d2b059360277db36->leave($__internal_5e2798a0f20a80885a60408c9b4e774de182b88c8e341bb3d2b059360277db36_prof);

    }

    // line 8
    public function block_tbbc_currency_widget($context, array $blocks = array())
    {
        $__internal_abf94161eeb5d80230bf19b8a5205e37ca26d273eb3202421f34097a43d1c6d8 = $this->env->getExtension("native_profiler");
        $__internal_abf94161eeb5d80230bf19b8a5205e37ca26d273eb3202421f34097a43d1c6d8->enter($__internal_abf94161eeb5d80230bf19b8a5205e37ca26d273eb3202421f34097a43d1c6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbbc_currency_widget"));

        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 11
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_abf94161eeb5d80230bf19b8a5205e37ca26d273eb3202421f34097a43d1c6d8->leave($__internal_abf94161eeb5d80230bf19b8a5205e37ca26d273eb3202421f34097a43d1c6d8_prof);

    }

    public function getTemplateName()
    {
        return "TbbcMoneyBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 13,  78 => 11,  73 => 10,  70 => 9,  64 => 8,  56 => 6,  47 => 4,  42 => 3,  39 => 2,  33 => 1,  26 => 8,  24 => 1,);
    }
}
/* {% block tbbc_money_widget %}*/
/*     {% spaceless %}*/
/*         {% for child in form %}*/
/*             {{ form_widget(child) }}*/
/*         {% endfor %}*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* {% block tbbc_currency_widget %}*/
/*     {% spaceless %}*/
/*         {% for child in form %}*/
/*             {{ form_widget(child) }}*/
/*         {% endfor %}*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
