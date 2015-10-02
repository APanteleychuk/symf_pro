<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_7a5725b7e4b8402b454c06fbdbaf5f1ba92599534ed4f600f970c616736d0618 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb78413cf031ccf3ea698365b8f8b30c422e2f144044cb081c4a705498603e73 = $this->env->getExtension("native_profiler");
        $__internal_fb78413cf031ccf3ea698365b8f8b30c422e2f144044cb081c4a705498603e73->enter($__internal_fb78413cf031ccf3ea698365b8f8b30c422e2f144044cb081c4a705498603e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb78413cf031ccf3ea698365b8f8b30c422e2f144044cb081c4a705498603e73->leave($__internal_fb78413cf031ccf3ea698365b8f8b30c422e2f144044cb081c4a705498603e73_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
