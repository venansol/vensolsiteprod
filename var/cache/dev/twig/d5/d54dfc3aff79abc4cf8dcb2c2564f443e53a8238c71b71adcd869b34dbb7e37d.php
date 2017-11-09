<?php

/* genus/show.html.twig */
class __TwigTemplate_fcffae75c1fb229afe329bd5f520be09a355d59815651f3fdf3688d9a1ee8767 extends Twig_Template
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
        $__internal_dbdfbcdfc4995bc7ff6d934ffdc7ff81a91439816fa52e85b1ae65307f010f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbdfbcdfc4995bc7ff6d934ffdc7ff81a91439816fa52e85b1ae65307f010f4e->enter($__internal_dbdfbcdfc4995bc7ff6d934ffdc7ff81a91439816fa52e85b1ae65307f010f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/show.html.twig"));

        $__internal_0f1d688729e6caf5f4dae1d40dafa18d9a2a5118964bb07a732729173ce47cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1d688729e6caf5f4dae1d40dafa18d9a2a5118964bb07a732729173ce47cbb->enter($__internal_0f1d688729e6caf5f4dae1d40dafa18d9a2a5118964bb07a732729173ce47cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/show.html.twig"));

        // line 1
        echo "<h1>bonjour ";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo " </h1>";
        
        $__internal_dbdfbcdfc4995bc7ff6d934ffdc7ff81a91439816fa52e85b1ae65307f010f4e->leave($__internal_dbdfbcdfc4995bc7ff6d934ffdc7ff81a91439816fa52e85b1ae65307f010f4e_prof);

        
        $__internal_0f1d688729e6caf5f4dae1d40dafa18d9a2a5118964bb07a732729173ce47cbb->leave($__internal_0f1d688729e6caf5f4dae1d40dafa18d9a2a5118964bb07a732729173ce47cbb_prof);

    }

    public function getTemplateName()
    {
        return "genus/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>bonjour {{name}} </h1>", "genus/show.html.twig", "/home/irvin/venansol/app/Resources/views/genus/show.html.twig");
    }
}
