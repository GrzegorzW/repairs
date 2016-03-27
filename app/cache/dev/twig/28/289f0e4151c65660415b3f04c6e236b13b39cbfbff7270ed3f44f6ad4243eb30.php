<?php

/* AppBundle::navRepairer.html.twig */
class __TwigTemplate_bffe5fe51058d8b97e01f4e6f60fe343df5c95b715c888ff946faff7a2503739 extends Twig_Template
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
        $__internal_b9206eaf12d5c85167a02e4552ce098418750e85c0d4cdcff142cd3156ca3ede = $this->env->getExtension("native_profiler");
        $__internal_b9206eaf12d5c85167a02e4552ce098418750e85c0d4cdcff142cd3156ca3ede->enter($__internal_b9206eaf12d5c85167a02e4552ce098418750e85c0d4cdcff142cd3156ca3ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::navRepairer.html.twig"));

        // line 1
        echo "<li ";
        if ((is_string($__internal_6ed0a0e0030755bd329c660214e0c282b9b7a593a8f27f65f08c465ea15d0215 = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_bf9d287e8e49b812bbe0fc4946ea93b3231d042628fc3a5bb5bcf575792805bf = "worker_panel_repair") && ('' === $__internal_bf9d287e8e49b812bbe0fc4946ea93b3231d042628fc3a5bb5bcf575792805bf || 0 === strpos($__internal_6ed0a0e0030755bd329c660214e0c282b9b7a593a8f27f65f08c465ea15d0215, $__internal_bf9d287e8e49b812bbe0fc4946ea93b3231d042628fc3a5bb5bcf575792805bf)))) {
            echo " class=\"active\"";
        }
        echo "><a
            href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("worker_panel_repairs");
        echo "\" title=\"Naprawy\"> Naprawy</a></li>

";
        // line 4
        if ($this->env->getExtension('security')->isGranted("ROLE_PERMISSION_POKWITOWANIE_CREATE")) {
            // line 5
            echo "    <li ";
            if ((is_string($__internal_d4237a0d98dfe8c4ef06ab571097ea454262772daf8fd8a87be042c55c322018 = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_18035b21d955e9163f2fe62d31e0222386e77a4dabe7234fb239ffcfbaf687a5 = "worker_panel_pokwitowanie") && ('' === $__internal_18035b21d955e9163f2fe62d31e0222386e77a4dabe7234fb239ffcfbaf687a5 || 0 === strpos($__internal_d4237a0d98dfe8c4ef06ab571097ea454262772daf8fd8a87be042c55c322018, $__internal_18035b21d955e9163f2fe62d31e0222386e77a4dabe7234fb239ffcfbaf687a5)))) {
                echo " class=\"active\"";
            }
            echo "><a
                href=\"";
            // line 6
            echo $this->env->getExtension('routing')->getPath("worker_panel_pokwitowanie_user_add");
            echo "\" title=\"Utwórz pokwitowanie\"> Nowa
            naprawa</a></li>
";
        }
        // line 9
        echo "
<li ";
        // line 10
        if ((is_string($__internal_b0a356d507b3d9f1d37fef0ff5ca8e2a191f9fe2c323807b90288fee240d4b24 = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_d4a1e63843487173a135eac5a1251145b5000e89547c9d9ecf0b6773b5a7ee92 = "worker_order") && ('' === $__internal_d4a1e63843487173a135eac5a1251145b5000e89547c9d9ecf0b6773b5a7ee92 || 0 === strpos($__internal_b0a356d507b3d9f1d37fef0ff5ca8e2a191f9fe2c323807b90288fee240d4b24, $__internal_d4a1e63843487173a135eac5a1251145b5000e89547c9d9ecf0b6773b5a7ee92)))) {
            echo " class=\"active\"";
        }
        echo "><a
            href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("worker_orders");
        echo "\" title=\"Zamówienia\"> Zamówienia</a></li>

";
        // line 13
        if ($this->env->getExtension('security')->isGranted("ROLE_PERMISSION_USER_SECTION")) {
            // line 14
            echo "<li ";
            if ((is_string($__internal_f18d485bde7f16824e36be5b5827811696180b311b492bc748b50d7bbf58a962 = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_bffcedc45a60d3ed83155860146dfd21bcc8fadab8ae37738cdfd7d450685d30 = "worker_panel_user") && ('' === $__internal_bffcedc45a60d3ed83155860146dfd21bcc8fadab8ae37738cdfd7d450685d30 || 0 === strpos($__internal_f18d485bde7f16824e36be5b5827811696180b311b492bc748b50d7bbf58a962, $__internal_bffcedc45a60d3ed83155860146dfd21bcc8fadab8ae37738cdfd7d450685d30)))) {
                echo " class=\"active\"";
            }
            echo "><a
            href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("worker_panel_users");
            echo "\" title=\"Klienci\"> Klienci</a></li>
";
        }
        // line 17
        echo "
<li ";
        // line 18
        if ((is_string($__internal_7083608ebc2d5db3d29bdfc4f34f43e5794b46979f254a5543abe451930a4aad = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_aee1496f28c611d3f379354ef9a6214ddfa8e35a148563aadebc8c200ffe910d = "worker_panel_device") && ('' === $__internal_aee1496f28c611d3f379354ef9a6214ddfa8e35a148563aadebc8c200ffe910d || 0 === strpos($__internal_7083608ebc2d5db3d29bdfc4f34f43e5794b46979f254a5543abe451930a4aad, $__internal_aee1496f28c611d3f379354ef9a6214ddfa8e35a148563aadebc8c200ffe910d)))) {
            echo " class=\"active\"";
        }
        echo "><a
            href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("worker_panel_devices");
        echo "\" title=\"Urządzenia\"> Urządzenia</a></li>

<li ";
        // line 21
        if ((is_string($__internal_6017c2ea3abdad15a212ff4eb9f771af8d7291f61a7a594a46450310db051323 = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_77a8853c91f8028313f3ec0550e1da7692159aeb71dd17fa73d8a0c874ec3342 = "worker_panel_opinion") && ('' === $__internal_77a8853c91f8028313f3ec0550e1da7692159aeb71dd17fa73d8a0c874ec3342 || 0 === strpos($__internal_6017c2ea3abdad15a212ff4eb9f771af8d7291f61a7a594a46450310db051323, $__internal_77a8853c91f8028313f3ec0550e1da7692159aeb71dd17fa73d8a0c874ec3342)))) {
            echo " class=\"active\"";
        }
        echo "><a
            href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("worker_panel_opinions");
        echo "\" title=\"Opinie\"> Opinie</a></li>";
        
        $__internal_b9206eaf12d5c85167a02e4552ce098418750e85c0d4cdcff142cd3156ca3ede->leave($__internal_b9206eaf12d5c85167a02e4552ce098418750e85c0d4cdcff142cd3156ca3ede_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::navRepairer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 22,  91 => 21,  86 => 19,  80 => 18,  77 => 17,  72 => 15,  65 => 14,  63 => 13,  58 => 11,  52 => 10,  49 => 9,  43 => 6,  36 => 5,  34 => 4,  29 => 2,  22 => 1,);
    }
}
/* <li {% if(app.request.get('_route') starts with 'worker_panel_repair') %} class="active"{% endif %}><a*/
/*             href="{{ path('worker_panel_repairs') }}" title="Naprawy"> Naprawy</a></li>*/
/* */
/* {% if is_granted('ROLE_PERMISSION_POKWITOWANIE_CREATE') %}*/
/*     <li {% if(app.request.get('_route') starts with 'worker_panel_pokwitowanie') %} class="active"{% endif %}><a*/
/*                 href="{{ path('worker_panel_pokwitowanie_user_add') }}" title="Utwórz pokwitowanie"> Nowa*/
/*             naprawa</a></li>*/
/* {% endif %}*/
/* */
/* <li {% if(app.request.get('_route') starts with 'worker_order') %} class="active"{% endif %}><a*/
/*             href="{{ path('worker_orders') }}" title="Zamówienia"> Zamówienia</a></li>*/
/* */
/* {% if is_granted('ROLE_PERMISSION_USER_SECTION') %}*/
/* <li {% if(app.request.get('_route') starts with 'worker_panel_user') %} class="active"{% endif %}><a*/
/*             href="{{ path('worker_panel_users') }}" title="Klienci"> Klienci</a></li>*/
/* {% endif %}*/
/* */
/* <li {% if(app.request.get('_route') starts with 'worker_panel_device') %} class="active"{% endif %}><a*/
/*             href="{{ path('worker_panel_devices') }}" title="Urządzenia"> Urządzenia</a></li>*/
/* */
/* <li {% if(app.request.get('_route') starts with 'worker_panel_opinion') %} class="active"{% endif %}><a*/
/*             href="{{ path('worker_panel_opinions') }}" title="Opinie"> Opinie</a></li>*/
