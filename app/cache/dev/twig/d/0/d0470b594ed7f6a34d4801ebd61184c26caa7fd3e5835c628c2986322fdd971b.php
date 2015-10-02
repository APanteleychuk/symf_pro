<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_4f808dc65dcbb306b888eb8dc9c941d779ac41cd4e31ca7469f22aababc80f08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e643759a61654cf0df622c3ece9bcd7f6d0d6495a11b156e417ff7710cddef53 = $this->env->getExtension("native_profiler");
        $__internal_e643759a61654cf0df622c3ece9bcd7f6d0d6495a11b156e417ff7710cddef53->enter($__internal_e643759a61654cf0df622c3ece9bcd7f6d0d6495a11b156e417ff7710cddef53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e643759a61654cf0df622c3ece9bcd7f6d0d6495a11b156e417ff7710cddef53->leave($__internal_e643759a61654cf0df622c3ece9bcd7f6d0d6495a11b156e417ff7710cddef53_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
