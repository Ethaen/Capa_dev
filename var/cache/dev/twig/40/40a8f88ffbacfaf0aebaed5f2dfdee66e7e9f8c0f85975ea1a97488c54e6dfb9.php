<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
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
        $__internal_efc1472fe21533489a7fd503ff25d5ae1e053a429aa81455d25a73dc8a2ff3b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc1472fe21533489a7fd503ff25d5ae1e053a429aa81455d25a73dc8a2ff3b5->enter($__internal_efc1472fe21533489a7fd503ff25d5ae1e053a429aa81455d25a73dc8a2ff3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_065ac69b7c66185adaf4e118837a5a94b2eabb28da5169d7cce2568e39aaef29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065ac69b7c66185adaf4e118837a5a94b2eabb28da5169d7cce2568e39aaef29->enter($__internal_065ac69b7c66185adaf4e118837a5a94b2eabb28da5169d7cce2568e39aaef29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efc1472fe21533489a7fd503ff25d5ae1e053a429aa81455d25a73dc8a2ff3b5->leave($__internal_efc1472fe21533489a7fd503ff25d5ae1e053a429aa81455d25a73dc8a2ff3b5_prof);

        
        $__internal_065ac69b7c66185adaf4e118837a5a94b2eabb28da5169d7cce2568e39aaef29->leave($__internal_065ac69b7c66185adaf4e118837a5a94b2eabb28da5169d7cce2568e39aaef29_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b739b0ee63304aa8bd75495a8b5d1473be9274f5ca91207f2119231d55212a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b739b0ee63304aa8bd75495a8b5d1473be9274f5ca91207f2119231d55212a7->enter($__internal_1b739b0ee63304aa8bd75495a8b5d1473be9274f5ca91207f2119231d55212a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c3e992a5aaea9b55bc879e702187b9fcf2d2feb82a14c93cb9310c26811183f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e992a5aaea9b55bc879e702187b9fcf2d2feb82a14c93cb9310c26811183f5->enter($__internal_c3e992a5aaea9b55bc879e702187b9fcf2d2feb82a14c93cb9310c26811183f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c3e992a5aaea9b55bc879e702187b9fcf2d2feb82a14c93cb9310c26811183f5->leave($__internal_c3e992a5aaea9b55bc879e702187b9fcf2d2feb82a14c93cb9310c26811183f5_prof);

        
        $__internal_1b739b0ee63304aa8bd75495a8b5d1473be9274f5ca91207f2119231d55212a7->leave($__internal_1b739b0ee63304aa8bd75495a8b5d1473be9274f5ca91207f2119231d55212a7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff77c505f42077d5e7bf76a775f96802769c369a831b2b2ae0cc7c6c3a0e086d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff77c505f42077d5e7bf76a775f96802769c369a831b2b2ae0cc7c6c3a0e086d->enter($__internal_ff77c505f42077d5e7bf76a775f96802769c369a831b2b2ae0cc7c6c3a0e086d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_27e3d1f6a516482a88f3e13cf9d5c831cd9cecb48c15219395e1b7f1c898ff92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e3d1f6a516482a88f3e13cf9d5c831cd9cecb48c15219395e1b7f1c898ff92->enter($__internal_27e3d1f6a516482a88f3e13cf9d5c831cd9cecb48c15219395e1b7f1c898ff92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_27e3d1f6a516482a88f3e13cf9d5c831cd9cecb48c15219395e1b7f1c898ff92->leave($__internal_27e3d1f6a516482a88f3e13cf9d5c831cd9cecb48c15219395e1b7f1c898ff92_prof);

        
        $__internal_ff77c505f42077d5e7bf76a775f96802769c369a831b2b2ae0cc7c6c3a0e086d->leave($__internal_ff77c505f42077d5e7bf76a775f96802769c369a831b2b2ae0cc7c6c3a0e086d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2fc80e52aa011c999944b35e16c106e83a82a14635693938a223abbbfa8409df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc80e52aa011c999944b35e16c106e83a82a14635693938a223abbbfa8409df->enter($__internal_2fc80e52aa011c999944b35e16c106e83a82a14635693938a223abbbfa8409df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_806e673b5e6da1e4cca41d914128a63de5233a3ef88e6a9dd0723b8301c914c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806e673b5e6da1e4cca41d914128a63de5233a3ef88e6a9dd0723b8301c914c5->enter($__internal_806e673b5e6da1e4cca41d914128a63de5233a3ef88e6a9dd0723b8301c914c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_806e673b5e6da1e4cca41d914128a63de5233a3ef88e6a9dd0723b8301c914c5->leave($__internal_806e673b5e6da1e4cca41d914128a63de5233a3ef88e6a9dd0723b8301c914c5_prof);

        
        $__internal_2fc80e52aa011c999944b35e16c106e83a82a14635693938a223abbbfa8409df->leave($__internal_2fc80e52aa011c999944b35e16c106e83a82a14635693938a223abbbfa8409df_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
