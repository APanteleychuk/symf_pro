<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_6df00ef786df873905765d592db2e71bc13e3db879a1acf69c92a9afc89c18f0 extends Twig_Template
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
        $__internal_eda281392cbb797f04c62f8229046c23a86b468c1651f0ba0075a822286c6cd4 = $this->env->getExtension("native_profiler");
        $__internal_eda281392cbb797f04c62f8229046c23a86b468c1651f0ba0075a822286c6cd4->enter($__internal_eda281392cbb797f04c62f8229046c23a86b468c1651f0ba0075a822286c6cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_eda281392cbb797f04c62f8229046c23a86b468c1651f0ba0075a822286c6cd4->leave($__internal_eda281392cbb797f04c62f8229046c23a86b468c1651f0ba0075a822286c6cd4_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
