<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1e68aa352a53148e80a5024fd6f40dc47b55c1afcf826c35470806a957d25963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e68aa352a53148e80a5024fd6f40dc47b55c1afcf826c35470806a957d25963->enter($__internal_1e68aa352a53148e80a5024fd6f40dc47b55c1afcf826c35470806a957d25963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b6f3f28fa62f5cb946a4182dd0405305e0816664d6641ce57b27ee796d017263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6f3f28fa62f5cb946a4182dd0405305e0816664d6641ce57b27ee796d017263->enter($__internal_b6f3f28fa62f5cb946a4182dd0405305e0816664d6641ce57b27ee796d017263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e68aa352a53148e80a5024fd6f40dc47b55c1afcf826c35470806a957d25963->leave($__internal_1e68aa352a53148e80a5024fd6f40dc47b55c1afcf826c35470806a957d25963_prof);

        
        $__internal_b6f3f28fa62f5cb946a4182dd0405305e0816664d6641ce57b27ee796d017263->leave($__internal_b6f3f28fa62f5cb946a4182dd0405305e0816664d6641ce57b27ee796d017263_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_971fd204babfabb86fce115d7a2f14a7ccc64eb3af269006b13ec87422532d06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_971fd204babfabb86fce115d7a2f14a7ccc64eb3af269006b13ec87422532d06->enter($__internal_971fd204babfabb86fce115d7a2f14a7ccc64eb3af269006b13ec87422532d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ccc9f859a3e18d9586cb726fb76c20620eee89afc6a0c5e4e76fdabfa13c7a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc9f859a3e18d9586cb726fb76c20620eee89afc6a0c5e4e76fdabfa13c7a74->enter($__internal_ccc9f859a3e18d9586cb726fb76c20620eee89afc6a0c5e4e76fdabfa13c7a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ccc9f859a3e18d9586cb726fb76c20620eee89afc6a0c5e4e76fdabfa13c7a74->leave($__internal_ccc9f859a3e18d9586cb726fb76c20620eee89afc6a0c5e4e76fdabfa13c7a74_prof);

        
        $__internal_971fd204babfabb86fce115d7a2f14a7ccc64eb3af269006b13ec87422532d06->leave($__internal_971fd204babfabb86fce115d7a2f14a7ccc64eb3af269006b13ec87422532d06_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_02f60d2f5510f2f48c4bab65b35c6aa26471ecbc90374b81142186e13934ec90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f60d2f5510f2f48c4bab65b35c6aa26471ecbc90374b81142186e13934ec90->enter($__internal_02f60d2f5510f2f48c4bab65b35c6aa26471ecbc90374b81142186e13934ec90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f7feff6bed6b863211595911e00bb2cd1f0bf05049debba819db11cb167a61cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7feff6bed6b863211595911e00bb2cd1f0bf05049debba819db11cb167a61cb->enter($__internal_f7feff6bed6b863211595911e00bb2cd1f0bf05049debba819db11cb167a61cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f7feff6bed6b863211595911e00bb2cd1f0bf05049debba819db11cb167a61cb->leave($__internal_f7feff6bed6b863211595911e00bb2cd1f0bf05049debba819db11cb167a61cb_prof);

        
        $__internal_02f60d2f5510f2f48c4bab65b35c6aa26471ecbc90374b81142186e13934ec90->leave($__internal_02f60d2f5510f2f48c4bab65b35c6aa26471ecbc90374b81142186e13934ec90_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0eff6d6ff432789cccce980d6299d28e77d0a9e3b9f34ff9b59581ba0683d49f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eff6d6ff432789cccce980d6299d28e77d0a9e3b9f34ff9b59581ba0683d49f->enter($__internal_0eff6d6ff432789cccce980d6299d28e77d0a9e3b9f34ff9b59581ba0683d49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_18a10d736226c55704d3d258eedb96474823c445798da59f44553e54bc852bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a10d736226c55704d3d258eedb96474823c445798da59f44553e54bc852bee->enter($__internal_18a10d736226c55704d3d258eedb96474823c445798da59f44553e54bc852bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_18a10d736226c55704d3d258eedb96474823c445798da59f44553e54bc852bee->leave($__internal_18a10d736226c55704d3d258eedb96474823c445798da59f44553e54bc852bee_prof);

        
        $__internal_0eff6d6ff432789cccce980d6299d28e77d0a9e3b9f34ff9b59581ba0683d49f->leave($__internal_0eff6d6ff432789cccce980d6299d28e77d0a9e3b9f34ff9b59581ba0683d49f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/irvin/venansol/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
