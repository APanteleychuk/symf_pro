<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_1551fdd53dc2e7449386c36c9f23020268cf21d678f45ff83a8a4d76b6950153 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8bcf39d6289c80a944cf83d210eb45a9a580abead79d59b97318d71564c5b19 = $this->env->getExtension("native_profiler");
        $__internal_f8bcf39d6289c80a944cf83d210eb45a9a580abead79d59b97318d71564c5b19->enter($__internal_f8bcf39d6289c80a944cf83d210eb45a9a580abead79d59b97318d71564c5b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8bcf39d6289c80a944cf83d210eb45a9a580abead79d59b97318d71564c5b19->leave($__internal_f8bcf39d6289c80a944cf83d210eb45a9a580abead79d59b97318d71564c5b19_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */
