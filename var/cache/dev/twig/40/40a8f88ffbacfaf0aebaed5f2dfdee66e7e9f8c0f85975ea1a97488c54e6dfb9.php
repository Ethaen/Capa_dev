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
        $__internal_d784375bd25ea70d260bd6adf1470fc72499612805f673b050eb8d213773db1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d784375bd25ea70d260bd6adf1470fc72499612805f673b050eb8d213773db1c->enter($__internal_d784375bd25ea70d260bd6adf1470fc72499612805f673b050eb8d213773db1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f3498a7cad886b16da07f15005df82b995e6d80668edbc6618192d48ea7a5d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3498a7cad886b16da07f15005df82b995e6d80668edbc6618192d48ea7a5d28->enter($__internal_f3498a7cad886b16da07f15005df82b995e6d80668edbc6618192d48ea7a5d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d784375bd25ea70d260bd6adf1470fc72499612805f673b050eb8d213773db1c->leave($__internal_d784375bd25ea70d260bd6adf1470fc72499612805f673b050eb8d213773db1c_prof);

        
        $__internal_f3498a7cad886b16da07f15005df82b995e6d80668edbc6618192d48ea7a5d28->leave($__internal_f3498a7cad886b16da07f15005df82b995e6d80668edbc6618192d48ea7a5d28_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_03030ba68859a1c1e839016ae337540ad0805e5a16ced0dba992d83559d82c7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03030ba68859a1c1e839016ae337540ad0805e5a16ced0dba992d83559d82c7a->enter($__internal_03030ba68859a1c1e839016ae337540ad0805e5a16ced0dba992d83559d82c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e3d1d608f1b5daa967b03b1b7d8abac21fda997f33de66bca951e4fc3a22437e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d1d608f1b5daa967b03b1b7d8abac21fda997f33de66bca951e4fc3a22437e->enter($__internal_e3d1d608f1b5daa967b03b1b7d8abac21fda997f33de66bca951e4fc3a22437e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e3d1d608f1b5daa967b03b1b7d8abac21fda997f33de66bca951e4fc3a22437e->leave($__internal_e3d1d608f1b5daa967b03b1b7d8abac21fda997f33de66bca951e4fc3a22437e_prof);

        
        $__internal_03030ba68859a1c1e839016ae337540ad0805e5a16ced0dba992d83559d82c7a->leave($__internal_03030ba68859a1c1e839016ae337540ad0805e5a16ced0dba992d83559d82c7a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_33b43afee323726af44b1c5b7f4d45dce68e7d20651daf8862f31e065b78c930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b43afee323726af44b1c5b7f4d45dce68e7d20651daf8862f31e065b78c930->enter($__internal_33b43afee323726af44b1c5b7f4d45dce68e7d20651daf8862f31e065b78c930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4dd655ee5b04cee1b7b415268e05f1d59605ac66b4dabf8a162a645565d84485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd655ee5b04cee1b7b415268e05f1d59605ac66b4dabf8a162a645565d84485->enter($__internal_4dd655ee5b04cee1b7b415268e05f1d59605ac66b4dabf8a162a645565d84485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4dd655ee5b04cee1b7b415268e05f1d59605ac66b4dabf8a162a645565d84485->leave($__internal_4dd655ee5b04cee1b7b415268e05f1d59605ac66b4dabf8a162a645565d84485_prof);

        
        $__internal_33b43afee323726af44b1c5b7f4d45dce68e7d20651daf8862f31e065b78c930->leave($__internal_33b43afee323726af44b1c5b7f4d45dce68e7d20651daf8862f31e065b78c930_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa35ec93e5a1e8fc5b19dee5031380efce0e59b3dd1bf6d942e52d30fb12ba43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa35ec93e5a1e8fc5b19dee5031380efce0e59b3dd1bf6d942e52d30fb12ba43->enter($__internal_fa35ec93e5a1e8fc5b19dee5031380efce0e59b3dd1bf6d942e52d30fb12ba43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7eb1096fddf8ddc0465fd0869c162cc5504829b0da924be4c20f5f8241f9c1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eb1096fddf8ddc0465fd0869c162cc5504829b0da924be4c20f5f8241f9c1ab->enter($__internal_7eb1096fddf8ddc0465fd0869c162cc5504829b0da924be4c20f5f8241f9c1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7eb1096fddf8ddc0465fd0869c162cc5504829b0da924be4c20f5f8241f9c1ab->leave($__internal_7eb1096fddf8ddc0465fd0869c162cc5504829b0da924be4c20f5f8241f9c1ab_prof);

        
        $__internal_fa35ec93e5a1e8fc5b19dee5031380efce0e59b3dd1bf6d942e52d30fb12ba43->leave($__internal_fa35ec93e5a1e8fc5b19dee5031380efce0e59b3dd1bf6d942e52d30fb12ba43_prof);

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
