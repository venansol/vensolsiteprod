<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
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
        $__internal_19173d02486c0d7cd20eca8f6a4f1a1396078e5a80b03ab68ab1ecfc038a7edb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19173d02486c0d7cd20eca8f6a4f1a1396078e5a80b03ab68ab1ecfc038a7edb->enter($__internal_19173d02486c0d7cd20eca8f6a4f1a1396078e5a80b03ab68ab1ecfc038a7edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9e91aa873f2c5b3e1c2248f7ccad07df13a2e945e1f1265090e3c25987832062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e91aa873f2c5b3e1c2248f7ccad07df13a2e945e1f1265090e3c25987832062->enter($__internal_9e91aa873f2c5b3e1c2248f7ccad07df13a2e945e1f1265090e3c25987832062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19173d02486c0d7cd20eca8f6a4f1a1396078e5a80b03ab68ab1ecfc038a7edb->leave($__internal_19173d02486c0d7cd20eca8f6a4f1a1396078e5a80b03ab68ab1ecfc038a7edb_prof);

        
        $__internal_9e91aa873f2c5b3e1c2248f7ccad07df13a2e945e1f1265090e3c25987832062->leave($__internal_9e91aa873f2c5b3e1c2248f7ccad07df13a2e945e1f1265090e3c25987832062_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a65f0e4d25a4c8f41e3c546d130da54d5b8c58ee98984ad6f63d78c442907b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a65f0e4d25a4c8f41e3c546d130da54d5b8c58ee98984ad6f63d78c442907b53->enter($__internal_a65f0e4d25a4c8f41e3c546d130da54d5b8c58ee98984ad6f63d78c442907b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c9c78833d1f48adae1bb0a522c8f9536803d8cb90598241cf85208496db7f9ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c78833d1f48adae1bb0a522c8f9536803d8cb90598241cf85208496db7f9ea->enter($__internal_c9c78833d1f48adae1bb0a522c8f9536803d8cb90598241cf85208496db7f9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c9c78833d1f48adae1bb0a522c8f9536803d8cb90598241cf85208496db7f9ea->leave($__internal_c9c78833d1f48adae1bb0a522c8f9536803d8cb90598241cf85208496db7f9ea_prof);

        
        $__internal_a65f0e4d25a4c8f41e3c546d130da54d5b8c58ee98984ad6f63d78c442907b53->leave($__internal_a65f0e4d25a4c8f41e3c546d130da54d5b8c58ee98984ad6f63d78c442907b53_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1a7ffccd06488c17e9f77d2a0b02773a3a5a4446dfd1fd37dcb36ebd20d91ef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a7ffccd06488c17e9f77d2a0b02773a3a5a4446dfd1fd37dcb36ebd20d91ef6->enter($__internal_1a7ffccd06488c17e9f77d2a0b02773a3a5a4446dfd1fd37dcb36ebd20d91ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_20c5f9af5f5b37c6602649c1a44b85d064e5772c2f6edbcdaa784a84464352f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20c5f9af5f5b37c6602649c1a44b85d064e5772c2f6edbcdaa784a84464352f1->enter($__internal_20c5f9af5f5b37c6602649c1a44b85d064e5772c2f6edbcdaa784a84464352f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_20c5f9af5f5b37c6602649c1a44b85d064e5772c2f6edbcdaa784a84464352f1->leave($__internal_20c5f9af5f5b37c6602649c1a44b85d064e5772c2f6edbcdaa784a84464352f1_prof);

        
        $__internal_1a7ffccd06488c17e9f77d2a0b02773a3a5a4446dfd1fd37dcb36ebd20d91ef6->leave($__internal_1a7ffccd06488c17e9f77d2a0b02773a3a5a4446dfd1fd37dcb36ebd20d91ef6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_24450764d2eea0fa7018969c7cca7286db472814361f49f7374a113520db9a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24450764d2eea0fa7018969c7cca7286db472814361f49f7374a113520db9a70->enter($__internal_24450764d2eea0fa7018969c7cca7286db472814361f49f7374a113520db9a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bf9a8e731135346e356eebdf48ccf0fccc76965d2b32842e1f8dab61c9d4cf0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9a8e731135346e356eebdf48ccf0fccc76965d2b32842e1f8dab61c9d4cf0f->enter($__internal_bf9a8e731135346e356eebdf48ccf0fccc76965d2b32842e1f8dab61c9d4cf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bf9a8e731135346e356eebdf48ccf0fccc76965d2b32842e1f8dab61c9d4cf0f->leave($__internal_bf9a8e731135346e356eebdf48ccf0fccc76965d2b32842e1f8dab61c9d4cf0f_prof);

        
        $__internal_24450764d2eea0fa7018969c7cca7286db472814361f49f7374a113520db9a70->leave($__internal_24450764d2eea0fa7018969c7cca7286db472814361f49f7374a113520db9a70_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/irvin/venansol/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
