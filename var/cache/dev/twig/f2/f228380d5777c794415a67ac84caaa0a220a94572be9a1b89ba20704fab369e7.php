<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
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
        $__internal_883f064af5d99d1b611155a2676a472c1dda9eab8e8902a75ecaf25a373a9dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883f064af5d99d1b611155a2676a472c1dda9eab8e8902a75ecaf25a373a9dce->enter($__internal_883f064af5d99d1b611155a2676a472c1dda9eab8e8902a75ecaf25a373a9dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b96f585f22dacbfcac6b6ef73a9ff4bbfbc3f3f7a39f23f69534617916be260a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96f585f22dacbfcac6b6ef73a9ff4bbfbc3f3f7a39f23f69534617916be260a->enter($__internal_b96f585f22dacbfcac6b6ef73a9ff4bbfbc3f3f7a39f23f69534617916be260a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_883f064af5d99d1b611155a2676a472c1dda9eab8e8902a75ecaf25a373a9dce->leave($__internal_883f064af5d99d1b611155a2676a472c1dda9eab8e8902a75ecaf25a373a9dce_prof);

        
        $__internal_b96f585f22dacbfcac6b6ef73a9ff4bbfbc3f3f7a39f23f69534617916be260a->leave($__internal_b96f585f22dacbfcac6b6ef73a9ff4bbfbc3f3f7a39f23f69534617916be260a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6e893958d97cfa62b169ebb60de4afc837ecddb847a0dd1ccbd1e8ac474f1a89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e893958d97cfa62b169ebb60de4afc837ecddb847a0dd1ccbd1e8ac474f1a89->enter($__internal_6e893958d97cfa62b169ebb60de4afc837ecddb847a0dd1ccbd1e8ac474f1a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f2067bbe90eb0b5eb81fe208c23a95003c5bb882a766c298a8233195e8023609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2067bbe90eb0b5eb81fe208c23a95003c5bb882a766c298a8233195e8023609->enter($__internal_f2067bbe90eb0b5eb81fe208c23a95003c5bb882a766c298a8233195e8023609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f2067bbe90eb0b5eb81fe208c23a95003c5bb882a766c298a8233195e8023609->leave($__internal_f2067bbe90eb0b5eb81fe208c23a95003c5bb882a766c298a8233195e8023609_prof);

        
        $__internal_6e893958d97cfa62b169ebb60de4afc837ecddb847a0dd1ccbd1e8ac474f1a89->leave($__internal_6e893958d97cfa62b169ebb60de4afc837ecddb847a0dd1ccbd1e8ac474f1a89_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30255366eee6fa794c2af6cfe7d232d90d89c93d9b5f93a747bba38c9e4d873e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30255366eee6fa794c2af6cfe7d232d90d89c93d9b5f93a747bba38c9e4d873e->enter($__internal_30255366eee6fa794c2af6cfe7d232d90d89c93d9b5f93a747bba38c9e4d873e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9c6b29665ee2eb7d8faf18af3313a2ea901cf600a9620c2c4606a231110f08c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6b29665ee2eb7d8faf18af3313a2ea901cf600a9620c2c4606a231110f08c5->enter($__internal_9c6b29665ee2eb7d8faf18af3313a2ea901cf600a9620c2c4606a231110f08c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9c6b29665ee2eb7d8faf18af3313a2ea901cf600a9620c2c4606a231110f08c5->leave($__internal_9c6b29665ee2eb7d8faf18af3313a2ea901cf600a9620c2c4606a231110f08c5_prof);

        
        $__internal_30255366eee6fa794c2af6cfe7d232d90d89c93d9b5f93a747bba38c9e4d873e->leave($__internal_30255366eee6fa794c2af6cfe7d232d90d89c93d9b5f93a747bba38c9e4d873e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_208ea65ead4bb31d9cab14e642166f4b9907c99078f7e99fe186d9b532f28da6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_208ea65ead4bb31d9cab14e642166f4b9907c99078f7e99fe186d9b532f28da6->enter($__internal_208ea65ead4bb31d9cab14e642166f4b9907c99078f7e99fe186d9b532f28da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1d82ab2ee26492d9f671e83c9f7a0235c03913781ba42b8de553343f161ec278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d82ab2ee26492d9f671e83c9f7a0235c03913781ba42b8de553343f161ec278->enter($__internal_1d82ab2ee26492d9f671e83c9f7a0235c03913781ba42b8de553343f161ec278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1d82ab2ee26492d9f671e83c9f7a0235c03913781ba42b8de553343f161ec278->leave($__internal_1d82ab2ee26492d9f671e83c9f7a0235c03913781ba42b8de553343f161ec278_prof);

        
        $__internal_208ea65ead4bb31d9cab14e642166f4b9907c99078f7e99fe186d9b532f28da6->leave($__internal_208ea65ead4bb31d9cab14e642166f4b9907c99078f7e99fe186d9b532f28da6_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
