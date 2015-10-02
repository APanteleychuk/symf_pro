<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_9e87862f62c968937ce4c28e96463b460ee7ff3adf1541077053b328347df5f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d59073d7d0ef95c322d04a6f38c9361dd7f9a6ecf3dc9d6dc793b4a0619e247f = $this->env->getExtension("native_profiler");
        $__internal_d59073d7d0ef95c322d04a6f38c9361dd7f9a6ecf3dc9d6dc793b4a0619e247f->enter($__internal_d59073d7d0ef95c322d04a6f38c9361dd7f9a6ecf3dc9d6dc793b4a0619e247f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d59073d7d0ef95c322d04a6f38c9361dd7f9a6ecf3dc9d6dc793b4a0619e247f->leave($__internal_d59073d7d0ef95c322d04a6f38c9361dd7f9a6ecf3dc9d6dc793b4a0619e247f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */
