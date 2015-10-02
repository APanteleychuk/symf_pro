<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_bd7ed7190cd90eb281454fb09777537f17abe77c34ebcb65a05f11347abff701 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64af24d9b3d449f0df0cb412d249a655a4e467919c5dab0b34ea535d5b8d6427 = $this->env->getExtension("native_profiler");
        $__internal_64af24d9b3d449f0df0cb412d249a655a4e467919c5dab0b34ea535d5b8d6427->enter($__internal_64af24d9b3d449f0df0cb412d249a655a4e467919c5dab0b34ea535d5b8d6427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_64af24d9b3d449f0df0cb412d249a655a4e467919c5dab0b34ea535d5b8d6427->leave($__internal_64af24d9b3d449f0df0cb412d249a655a4e467919c5dab0b34ea535d5b8d6427_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_527ebcd34aa2992278fbcfd3fbab04de12e0d9d6345a596cf6dc6ebecee53e9f = $this->env->getExtension("native_profiler");
        $__internal_527ebcd34aa2992278fbcfd3fbab04de12e0d9d6345a596cf6dc6ebecee53e9f->enter($__internal_527ebcd34aa2992278fbcfd3fbab04de12e0d9d6345a596cf6dc6ebecee53e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_527ebcd34aa2992278fbcfd3fbab04de12e0d9d6345a596cf6dc6ebecee53e9f->leave($__internal_527ebcd34aa2992278fbcfd3fbab04de12e0d9d6345a596cf6dc6ebecee53e9f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */
