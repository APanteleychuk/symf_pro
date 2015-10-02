<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_38dbcc4e8f73610b3925d224c94f862f09bc5f64935c09f01c0eaa35f7f6682e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfe147d30f77771884e6b3b7e183bd08a447b73df8d4909762c035d486b4fb7d = $this->env->getExtension("native_profiler");
        $__internal_dfe147d30f77771884e6b3b7e183bd08a447b73df8d4909762c035d486b4fb7d->enter($__internal_dfe147d30f77771884e6b3b7e183bd08a447b73df8d4909762c035d486b4fb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_dfe147d30f77771884e6b3b7e183bd08a447b73df8d4909762c035d486b4fb7d->leave($__internal_dfe147d30f77771884e6b3b7e183bd08a447b73df8d4909762c035d486b4fb7d_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_7a2accd3fa71fc156646c115f9fb6c095e304b97877e228a28f3b98337be61e4 = $this->env->getExtension("native_profiler");
        $__internal_7a2accd3fa71fc156646c115f9fb6c095e304b97877e228a28f3b98337be61e4->enter($__internal_7a2accd3fa71fc156646c115f9fb6c095e304b97877e228a28f3b98337be61e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_7a2accd3fa71fc156646c115f9fb6c095e304b97877e228a28f3b98337be61e4->leave($__internal_7a2accd3fa71fc156646c115f9fb6c095e304b97877e228a28f3b98337be61e4_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */
