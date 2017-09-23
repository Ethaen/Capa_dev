<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_a7293a416b94a6f13777381d7a641f5a36f558ca067d7cffaaa4f7a4d0cf8643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7293a416b94a6f13777381d7a641f5a36f558ca067d7cffaaa4f7a4d0cf8643->enter($__internal_a7293a416b94a6f13777381d7a641f5a36f558ca067d7cffaaa4f7a4d0cf8643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_97a887615e92b4c64dafff1a58bc7098e12b9499ace0e1d7b3c3a18aa1b891c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a887615e92b4c64dafff1a58bc7098e12b9499ace0e1d7b3c3a18aa1b891c8->enter($__internal_97a887615e92b4c64dafff1a58bc7098e12b9499ace0e1d7b3c3a18aa1b891c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7293a416b94a6f13777381d7a641f5a36f558ca067d7cffaaa4f7a4d0cf8643->leave($__internal_a7293a416b94a6f13777381d7a641f5a36f558ca067d7cffaaa4f7a4d0cf8643_prof);

        
        $__internal_97a887615e92b4c64dafff1a58bc7098e12b9499ace0e1d7b3c3a18aa1b891c8->leave($__internal_97a887615e92b4c64dafff1a58bc7098e12b9499ace0e1d7b3c3a18aa1b891c8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ff350293c17dc627864ce53b0caa2e1aabeeed61d700168ce20b16f650e8080f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff350293c17dc627864ce53b0caa2e1aabeeed61d700168ce20b16f650e8080f->enter($__internal_ff350293c17dc627864ce53b0caa2e1aabeeed61d700168ce20b16f650e8080f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e9509664c05d6ddb73569f185234dac2e7711c58d357afc00580433960c01bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9509664c05d6ddb73569f185234dac2e7711c58d357afc00580433960c01bbe->enter($__internal_e9509664c05d6ddb73569f185234dac2e7711c58d357afc00580433960c01bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e9509664c05d6ddb73569f185234dac2e7711c58d357afc00580433960c01bbe->leave($__internal_e9509664c05d6ddb73569f185234dac2e7711c58d357afc00580433960c01bbe_prof);

        
        $__internal_ff350293c17dc627864ce53b0caa2e1aabeeed61d700168ce20b16f650e8080f->leave($__internal_ff350293c17dc627864ce53b0caa2e1aabeeed61d700168ce20b16f650e8080f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_545ca3926ddd4d43edef90a9e3357dba1576cd389492adff2a07f47eda145a38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_545ca3926ddd4d43edef90a9e3357dba1576cd389492adff2a07f47eda145a38->enter($__internal_545ca3926ddd4d43edef90a9e3357dba1576cd389492adff2a07f47eda145a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b6ecf61dc53926a80155137ce381948f07b2e33b1ac68ca66f9b5cccf00ac203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ecf61dc53926a80155137ce381948f07b2e33b1ac68ca66f9b5cccf00ac203->enter($__internal_b6ecf61dc53926a80155137ce381948f07b2e33b1ac68ca66f9b5cccf00ac203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b6ecf61dc53926a80155137ce381948f07b2e33b1ac68ca66f9b5cccf00ac203->leave($__internal_b6ecf61dc53926a80155137ce381948f07b2e33b1ac68ca66f9b5cccf00ac203_prof);

        
        $__internal_545ca3926ddd4d43edef90a9e3357dba1576cd389492adff2a07f47eda145a38->leave($__internal_545ca3926ddd4d43edef90a9e3357dba1576cd389492adff2a07f47eda145a38_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f72f38b8666cf83b18822d92ae5f54978933ddd070bcf6a684f58cf965fd665f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f72f38b8666cf83b18822d92ae5f54978933ddd070bcf6a684f58cf965fd665f->enter($__internal_f72f38b8666cf83b18822d92ae5f54978933ddd070bcf6a684f58cf965fd665f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e79728a0b0ee704b7d73258f33f68e4ce869e7c9ca03339caeddeedff2b76b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e79728a0b0ee704b7d73258f33f68e4ce869e7c9ca03339caeddeedff2b76b3b->enter($__internal_e79728a0b0ee704b7d73258f33f68e4ce869e7c9ca03339caeddeedff2b76b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e79728a0b0ee704b7d73258f33f68e4ce869e7c9ca03339caeddeedff2b76b3b->leave($__internal_e79728a0b0ee704b7d73258f33f68e4ce869e7c9ca03339caeddeedff2b76b3b_prof);

        
        $__internal_f72f38b8666cf83b18822d92ae5f54978933ddd070bcf6a684f58cf965fd665f->leave($__internal_f72f38b8666cf83b18822d92ae5f54978933ddd070bcf6a684f58cf965fd665f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
