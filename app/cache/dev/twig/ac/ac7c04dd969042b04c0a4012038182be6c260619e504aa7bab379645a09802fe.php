<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ad1688b77df012ed82a3acf5f366cae22870f5150b1bd18453c7adaf5db84ca3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9dcd89fa06ecaf0ea7e9fdd915b020fdf04dc261d4edd9928a4846da531b8731 = $this->env->getExtension("native_profiler");
        $__internal_9dcd89fa06ecaf0ea7e9fdd915b020fdf04dc261d4edd9928a4846da531b8731->enter($__internal_9dcd89fa06ecaf0ea7e9fdd915b020fdf04dc261d4edd9928a4846da531b8731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dcd89fa06ecaf0ea7e9fdd915b020fdf04dc261d4edd9928a4846da531b8731->leave($__internal_9dcd89fa06ecaf0ea7e9fdd915b020fdf04dc261d4edd9928a4846da531b8731_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9803746800366b9a74c9cf2c1c49894250c24e637f072abd44e676f8f9841f2d = $this->env->getExtension("native_profiler");
        $__internal_9803746800366b9a74c9cf2c1c49894250c24e637f072abd44e676f8f9841f2d->enter($__internal_9803746800366b9a74c9cf2c1c49894250c24e637f072abd44e676f8f9841f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9803746800366b9a74c9cf2c1c49894250c24e637f072abd44e676f8f9841f2d->leave($__internal_9803746800366b9a74c9cf2c1c49894250c24e637f072abd44e676f8f9841f2d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b1f0855af54d3f1466cca149524d7e970abbdac7d766485d4b2555617710e651 = $this->env->getExtension("native_profiler");
        $__internal_b1f0855af54d3f1466cca149524d7e970abbdac7d766485d4b2555617710e651->enter($__internal_b1f0855af54d3f1466cca149524d7e970abbdac7d766485d4b2555617710e651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b1f0855af54d3f1466cca149524d7e970abbdac7d766485d4b2555617710e651->leave($__internal_b1f0855af54d3f1466cca149524d7e970abbdac7d766485d4b2555617710e651_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_edfae9462b8b8a97ef45e7f5852f2357b79d5f5593d990889eaeb2eeb1eb601f = $this->env->getExtension("native_profiler");
        $__internal_edfae9462b8b8a97ef45e7f5852f2357b79d5f5593d990889eaeb2eeb1eb601f->enter($__internal_edfae9462b8b8a97ef45e7f5852f2357b79d5f5593d990889eaeb2eeb1eb601f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_edfae9462b8b8a97ef45e7f5852f2357b79d5f5593d990889eaeb2eeb1eb601f->leave($__internal_edfae9462b8b8a97ef45e7f5852f2357b79d5f5593d990889eaeb2eeb1eb601f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
