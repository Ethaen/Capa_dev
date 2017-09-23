<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_02d845a49bdd57a4be066814fe8a9768b23f387ad2777b19ef633ba46046768f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5db2d9b172745f054a7a5f08b41b9b8e34fb00c46a552b04973542fac6c562e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5db2d9b172745f054a7a5f08b41b9b8e34fb00c46a552b04973542fac6c562e->enter($__internal_e5db2d9b172745f054a7a5f08b41b9b8e34fb00c46a552b04973542fac6c562e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_8b6415d96f9c1275f3adc5f64bf2e5c3c5f2a4082dab2ac8525490adede62189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6415d96f9c1275f3adc5f64bf2e5c3c5f2a4082dab2ac8525490adede62189->enter($__internal_8b6415d96f9c1275f3adc5f64bf2e5c3c5f2a4082dab2ac8525490adede62189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5db2d9b172745f054a7a5f08b41b9b8e34fb00c46a552b04973542fac6c562e->leave($__internal_e5db2d9b172745f054a7a5f08b41b9b8e34fb00c46a552b04973542fac6c562e_prof);

        
        $__internal_8b6415d96f9c1275f3adc5f64bf2e5c3c5f2a4082dab2ac8525490adede62189->leave($__internal_8b6415d96f9c1275f3adc5f64bf2e5c3c5f2a4082dab2ac8525490adede62189_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d334603acd4d7c6770f5381596c3dbf0c5de0fd370d499bb1da37b7bf426fb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d334603acd4d7c6770f5381596c3dbf0c5de0fd370d499bb1da37b7bf426fb4->enter($__internal_7d334603acd4d7c6770f5381596c3dbf0c5de0fd370d499bb1da37b7bf426fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c03fb07d9519b5825f962bb801e817910312ed947a4228af59f87c3ea9e7e4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03fb07d9519b5825f962bb801e817910312ed947a4228af59f87c3ea9e7e4e1->enter($__internal_c03fb07d9519b5825f962bb801e817910312ed947a4228af59f87c3ea9e7e4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c03fb07d9519b5825f962bb801e817910312ed947a4228af59f87c3ea9e7e4e1->leave($__internal_c03fb07d9519b5825f962bb801e817910312ed947a4228af59f87c3ea9e7e4e1_prof);

        
        $__internal_7d334603acd4d7c6770f5381596c3dbf0c5de0fd370d499bb1da37b7bf426fb4->leave($__internal_7d334603acd4d7c6770f5381596c3dbf0c5de0fd370d499bb1da37b7bf426fb4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_71824f61a398526aaaab406ce241462dafdd042e59bfae8cf2ee7a77db6763d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71824f61a398526aaaab406ce241462dafdd042e59bfae8cf2ee7a77db6763d5->enter($__internal_71824f61a398526aaaab406ce241462dafdd042e59bfae8cf2ee7a77db6763d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ee2da7d7f2f84eea83b909ec585cbb6908f7aee19bc61400b875c27063092494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2da7d7f2f84eea83b909ec585cbb6908f7aee19bc61400b875c27063092494->enter($__internal_ee2da7d7f2f84eea83b909ec585cbb6908f7aee19bc61400b875c27063092494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ee2da7d7f2f84eea83b909ec585cbb6908f7aee19bc61400b875c27063092494->leave($__internal_ee2da7d7f2f84eea83b909ec585cbb6908f7aee19bc61400b875c27063092494_prof);

        
        $__internal_71824f61a398526aaaab406ce241462dafdd042e59bfae8cf2ee7a77db6763d5->leave($__internal_71824f61a398526aaaab406ce241462dafdd042e59bfae8cf2ee7a77db6763d5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
