<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0be7f2d8277fefec72f17bd7c4151d81b79a26c9a4873002e63264f483826bd1 extends Twig_Template
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
        $__internal_8189af425d36a4df9d6c128852b4ca5c18efc88c1e6195a5d6dbeb264891f3c5 = $this->env->getExtension("native_profiler");
        $__internal_8189af425d36a4df9d6c128852b4ca5c18efc88c1e6195a5d6dbeb264891f3c5->enter($__internal_8189af425d36a4df9d6c128852b4ca5c18efc88c1e6195a5d6dbeb264891f3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8189af425d36a4df9d6c128852b4ca5c18efc88c1e6195a5d6dbeb264891f3c5->leave($__internal_8189af425d36a4df9d6c128852b4ca5c18efc88c1e6195a5d6dbeb264891f3c5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9d99a6699d2bf84aa6ca1e1ace8981036512cf08861fdeb75f04ec5cd9955c65 = $this->env->getExtension("native_profiler");
        $__internal_9d99a6699d2bf84aa6ca1e1ace8981036512cf08861fdeb75f04ec5cd9955c65->enter($__internal_9d99a6699d2bf84aa6ca1e1ace8981036512cf08861fdeb75f04ec5cd9955c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9d99a6699d2bf84aa6ca1e1ace8981036512cf08861fdeb75f04ec5cd9955c65->leave($__internal_9d99a6699d2bf84aa6ca1e1ace8981036512cf08861fdeb75f04ec5cd9955c65_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        $__internal_51f0ea44e61d800bd175aa75df693e99c91eb9cc08f331f2199f3cb24e8ceb10 = $this->env->getExtension("native_profiler");
        $__internal_51f0ea44e61d800bd175aa75df693e99c91eb9cc08f331f2199f3cb24e8ceb10->enter($__internal_51f0ea44e61d800bd175aa75df693e99c91eb9cc08f331f2199f3cb24e8ceb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"32\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 32 32\" enable-background=\"new 0 0 32 32\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z\"/><path fill=\"#3F3F3F\" d=\"M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z\"/><path fill=\"#3F3F3F\" d=\"M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z\"/><path fill=\"#3F3F3F\" d=\"M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z\"/></g></svg></span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_51f0ea44e61d800bd175aa75df693e99c91eb9cc08f331f2199f3cb24e8ceb10->leave($__internal_51f0ea44e61d800bd175aa75df693e99c91eb9cc08f331f2199f3cb24e8ceb10_prof);

    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00ba95cab356de1c1338df47a2454078a50ba3dcab7ded8251ca727e74ff4c66 = $this->env->getExtension("native_profiler");
        $__internal_00ba95cab356de1c1338df47a2454078a50ba3dcab7ded8251ca727e74ff4c66->enter($__internal_00ba95cab356de1c1338df47a2454078a50ba3dcab7ded8251ca727e74ff4c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_00ba95cab356de1c1338df47a2454078a50ba3dcab7ded8251ca727e74ff4c66->leave($__internal_00ba95cab356de1c1338df47a2454078a50ba3dcab7ded8251ca727e74ff4c66_prof);

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
        return array (  70 => 14,  64 => 13,  53 => 7,  47 => 6,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon"><svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0px" y="0px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve"><g><path fill="#3F3F3F" d="M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z"/><path fill="#3F3F3F" d="M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z"/><path fill="#3F3F3F" d="M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z"/><path fill="#3F3F3F" d="M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z"/></g></svg></span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', {'token': token})) }}*/
/* {% endblock %}*/
/* */
