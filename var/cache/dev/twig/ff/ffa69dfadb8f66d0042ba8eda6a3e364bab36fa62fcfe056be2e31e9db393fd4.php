<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ae8c634d6155df4df2ca4e9704500e6564bda4edfbd763b820ba6f86f98ce96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae8c634d6155df4df2ca4e9704500e6564bda4edfbd763b820ba6f86f98ce96->enter($__internal_9ae8c634d6155df4df2ca4e9704500e6564bda4edfbd763b820ba6f86f98ce96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_6e00a48bc96c9790de4fb3a24304426da999d0391f43e27f5ca07552b4724b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e00a48bc96c9790de4fb3a24304426da999d0391f43e27f5ca07552b4724b74->enter($__internal_6e00a48bc96c9790de4fb3a24304426da999d0391f43e27f5ca07552b4724b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_9ae8c634d6155df4df2ca4e9704500e6564bda4edfbd763b820ba6f86f98ce96->leave($__internal_9ae8c634d6155df4df2ca4e9704500e6564bda4edfbd763b820ba6f86f98ce96_prof);

        
        $__internal_6e00a48bc96c9790de4fb3a24304426da999d0391f43e27f5ca07552b4724b74->leave($__internal_6e00a48bc96c9790de4fb3a24304426da999d0391f43e27f5ca07552b4724b74_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c13403e4500c891fcb3679fa503c9e0799faff04561aeffdf8f0745d090a445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c13403e4500c891fcb3679fa503c9e0799faff04561aeffdf8f0745d090a445->enter($__internal_5c13403e4500c891fcb3679fa503c9e0799faff04561aeffdf8f0745d090a445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bfc646fc03a3123bbae5c704ae78eac84a5f3b6e6e8cdb9f8ddee640ca5cb0c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc646fc03a3123bbae5c704ae78eac84a5f3b6e6e8cdb9f8ddee640ca5cb0c6->enter($__internal_bfc646fc03a3123bbae5c704ae78eac84a5f3b6e6e8cdb9f8ddee640ca5cb0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bfc646fc03a3123bbae5c704ae78eac84a5f3b6e6e8cdb9f8ddee640ca5cb0c6->leave($__internal_bfc646fc03a3123bbae5c704ae78eac84a5f3b6e6e8cdb9f8ddee640ca5cb0c6_prof);

        
        $__internal_5c13403e4500c891fcb3679fa503c9e0799faff04561aeffdf8f0745d090a445->leave($__internal_5c13403e4500c891fcb3679fa503c9e0799faff04561aeffdf8f0745d090a445_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_76f8738b5c3719761667abd2fd023afd43d932a90340a5160333a16353dafa40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76f8738b5c3719761667abd2fd023afd43d932a90340a5160333a16353dafa40->enter($__internal_76f8738b5c3719761667abd2fd023afd43d932a90340a5160333a16353dafa40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f2d9b39cee6a6d53753d9c936d7e278bf52eb2dfd4ea610deb68c23eae5598d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2d9b39cee6a6d53753d9c936d7e278bf52eb2dfd4ea610deb68c23eae5598d->enter($__internal_6f2d9b39cee6a6d53753d9c936d7e278bf52eb2dfd4ea610deb68c23eae5598d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6f2d9b39cee6a6d53753d9c936d7e278bf52eb2dfd4ea610deb68c23eae5598d->leave($__internal_6f2d9b39cee6a6d53753d9c936d7e278bf52eb2dfd4ea610deb68c23eae5598d_prof);

        
        $__internal_76f8738b5c3719761667abd2fd023afd43d932a90340a5160333a16353dafa40->leave($__internal_76f8738b5c3719761667abd2fd023afd43d932a90340a5160333a16353dafa40_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_746f1dcc0956808cf6b5a387c8e8495dcfdd1d0a09431f4f4b85a7cf0d356a42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_746f1dcc0956808cf6b5a387c8e8495dcfdd1d0a09431f4f4b85a7cf0d356a42->enter($__internal_746f1dcc0956808cf6b5a387c8e8495dcfdd1d0a09431f4f4b85a7cf0d356a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d7af71068e5bc3fcfebeca8352c27749e5c6b7d0f1a3f09bab4b8a7b4adfee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7af71068e5bc3fcfebeca8352c27749e5c6b7d0f1a3f09bab4b8a7b4adfee7->enter($__internal_9d7af71068e5bc3fcfebeca8352c27749e5c6b7d0f1a3f09bab4b8a7b4adfee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9d7af71068e5bc3fcfebeca8352c27749e5c6b7d0f1a3f09bab4b8a7b4adfee7->leave($__internal_9d7af71068e5bc3fcfebeca8352c27749e5c6b7d0f1a3f09bab4b8a7b4adfee7_prof);

        
        $__internal_746f1dcc0956808cf6b5a387c8e8495dcfdd1d0a09431f4f4b85a7cf0d356a42->leave($__internal_746f1dcc0956808cf6b5a387c8e8495dcfdd1d0a09431f4f4b85a7cf0d356a42_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/irvin/venansol/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
