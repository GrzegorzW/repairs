<?php

/* AppBundle:Emails:newRepairConfirmation.html.twig */
class __TwigTemplate_5bf3394bae7054be3842d05d2cf503ba9a2db108c9ab96a166d7c7b6ff1089e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Emails:base.html.twig", "AppBundle:Emails:newRepairConfirmation.html.twig", 1);
        $this->blocks = array(
            'messageContainer' => array($this, 'block_messageContainer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Emails:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e639a1196d29373e1284cb1c4bd100acefb38a2d1d8e994f26b09e982588bb3d = $this->env->getExtension("native_profiler");
        $__internal_e639a1196d29373e1284cb1c4bd100acefb38a2d1d8e994f26b09e982588bb3d->enter($__internal_e639a1196d29373e1284cb1c4bd100acefb38a2d1d8e994f26b09e982588bb3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Emails:newRepairConfirmation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e639a1196d29373e1284cb1c4bd100acefb38a2d1d8e994f26b09e982588bb3d->leave($__internal_e639a1196d29373e1284cb1c4bd100acefb38a2d1d8e994f26b09e982588bb3d_prof);

    }

    // line 3
    public function block_messageContainer($context, array $blocks = array())
    {
        $__internal_eb3875b3463db4d9a061865dce18f170665db71dbe46af1ed630df5389de149d = $this->env->getExtension("native_profiler");
        $__internal_eb3875b3463db4d9a061865dce18f170665db71dbe46af1ed630df5389de149d->enter($__internal_eb3875b3463db4d9a061865dce18f170665db71dbe46af1ed630df5389de149d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageContainer"));

        // line 4
        echo "
    dziękujemy za skorzystanie z usług naszej firmy.<br>
    Będziemy informować Cię o kosztach telefonicznie bądź e-mailowo.<br>
    Naprawa zostanie rozpoczęta po akceptacji ustalonej ceny.

";
        
        $__internal_eb3875b3463db4d9a061865dce18f170665db71dbe46af1ed630df5389de149d->leave($__internal_eb3875b3463db4d9a061865dce18f170665db71dbe46af1ed630df5389de149d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Emails:newRepairConfirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AppBundle:Emails:base.html.twig" %}*/
/* */
/* {% block messageContainer %}*/
/* */
/*     dziękujemy za skorzystanie z usług naszej firmy.<br>*/
/*     Będziemy informować Cię o kosztach telefonicznie bądź e-mailowo.<br>*/
/*     Naprawa zostanie rozpoczęta po akceptacji ustalonej ceny.*/
/* */
/* {% endblock %}*/
