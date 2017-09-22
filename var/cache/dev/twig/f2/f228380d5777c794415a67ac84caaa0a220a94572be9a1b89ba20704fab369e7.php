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
        $__internal_0f4ae04af576b12a966f3f9093dcaf65c9a76970999f06932f84e5ab4c4d7d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f4ae04af576b12a966f3f9093dcaf65c9a76970999f06932f84e5ab4c4d7d4a->enter($__internal_0f4ae04af576b12a966f3f9093dcaf65c9a76970999f06932f84e5ab4c4d7d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b5a3de50b529fdd4b2d3d85837f8eb2d2434405c8244f07f8756b3c98005957c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a3de50b529fdd4b2d3d85837f8eb2d2434405c8244f07f8756b3c98005957c->enter($__internal_b5a3de50b529fdd4b2d3d85837f8eb2d2434405c8244f07f8756b3c98005957c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f4ae04af576b12a966f3f9093dcaf65c9a76970999f06932f84e5ab4c4d7d4a->leave($__internal_0f4ae04af576b12a966f3f9093dcaf65c9a76970999f06932f84e5ab4c4d7d4a_prof);

        
        $__internal_b5a3de50b529fdd4b2d3d85837f8eb2d2434405c8244f07f8756b3c98005957c->leave($__internal_b5a3de50b529fdd4b2d3d85837f8eb2d2434405c8244f07f8756b3c98005957c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_176a52452d2116b02a6d391013db2100df061706c57af046fd12f29a0113ad0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_176a52452d2116b02a6d391013db2100df061706c57af046fd12f29a0113ad0a->enter($__internal_176a52452d2116b02a6d391013db2100df061706c57af046fd12f29a0113ad0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7fb08643d4069c13a2b66f1ebddc5b2f5c8f60d52acc8c6674d96b84dfcd992e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb08643d4069c13a2b66f1ebddc5b2f5c8f60d52acc8c6674d96b84dfcd992e->enter($__internal_7fb08643d4069c13a2b66f1ebddc5b2f5c8f60d52acc8c6674d96b84dfcd992e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7fb08643d4069c13a2b66f1ebddc5b2f5c8f60d52acc8c6674d96b84dfcd992e->leave($__internal_7fb08643d4069c13a2b66f1ebddc5b2f5c8f60d52acc8c6674d96b84dfcd992e_prof);

        
        $__internal_176a52452d2116b02a6d391013db2100df061706c57af046fd12f29a0113ad0a->leave($__internal_176a52452d2116b02a6d391013db2100df061706c57af046fd12f29a0113ad0a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6be3cd34a3e6f49a7b16c9c40639912b8208f3ac6bbee66f2924db1119b0d2a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be3cd34a3e6f49a7b16c9c40639912b8208f3ac6bbee66f2924db1119b0d2a0->enter($__internal_6be3cd34a3e6f49a7b16c9c40639912b8208f3ac6bbee66f2924db1119b0d2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fc67fe3ddd810e94a201b73490d07bf4169818813c5f2dd6e3d0593fa92d070a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc67fe3ddd810e94a201b73490d07bf4169818813c5f2dd6e3d0593fa92d070a->enter($__internal_fc67fe3ddd810e94a201b73490d07bf4169818813c5f2dd6e3d0593fa92d070a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fc67fe3ddd810e94a201b73490d07bf4169818813c5f2dd6e3d0593fa92d070a->leave($__internal_fc67fe3ddd810e94a201b73490d07bf4169818813c5f2dd6e3d0593fa92d070a_prof);

        
        $__internal_6be3cd34a3e6f49a7b16c9c40639912b8208f3ac6bbee66f2924db1119b0d2a0->leave($__internal_6be3cd34a3e6f49a7b16c9c40639912b8208f3ac6bbee66f2924db1119b0d2a0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0cde89a919195089323ed945fb56299927678197cab15e8952ea5ac555dc05ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cde89a919195089323ed945fb56299927678197cab15e8952ea5ac555dc05ab->enter($__internal_0cde89a919195089323ed945fb56299927678197cab15e8952ea5ac555dc05ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ffac10d1f109be9468a788fe1b7adfdf976e33183b2c91b1e7f1d613bccc5c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffac10d1f109be9468a788fe1b7adfdf976e33183b2c91b1e7f1d613bccc5c0d->enter($__internal_ffac10d1f109be9468a788fe1b7adfdf976e33183b2c91b1e7f1d613bccc5c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ffac10d1f109be9468a788fe1b7adfdf976e33183b2c91b1e7f1d613bccc5c0d->leave($__internal_ffac10d1f109be9468a788fe1b7adfdf976e33183b2c91b1e7f1d613bccc5c0d_prof);

        
        $__internal_0cde89a919195089323ed945fb56299927678197cab15e8952ea5ac555dc05ab->leave($__internal_0cde89a919195089323ed945fb56299927678197cab15e8952ea5ac555dc05ab_prof);

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
