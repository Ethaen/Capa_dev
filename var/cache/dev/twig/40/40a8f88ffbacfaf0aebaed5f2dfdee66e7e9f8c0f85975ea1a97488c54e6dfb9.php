<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_5b99ed05c1e527e464c9fef75dafd65a6e901e1e2a5eb389259db971a2d26595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b99ed05c1e527e464c9fef75dafd65a6e901e1e2a5eb389259db971a2d26595->enter($__internal_5b99ed05c1e527e464c9fef75dafd65a6e901e1e2a5eb389259db971a2d26595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_79cfbce89a97584bf04fb09cdc230ac92f69cb007dcdfac8e73f136b06278161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79cfbce89a97584bf04fb09cdc230ac92f69cb007dcdfac8e73f136b06278161->enter($__internal_79cfbce89a97584bf04fb09cdc230ac92f69cb007dcdfac8e73f136b06278161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b99ed05c1e527e464c9fef75dafd65a6e901e1e2a5eb389259db971a2d26595->leave($__internal_5b99ed05c1e527e464c9fef75dafd65a6e901e1e2a5eb389259db971a2d26595_prof);

        
        $__internal_79cfbce89a97584bf04fb09cdc230ac92f69cb007dcdfac8e73f136b06278161->leave($__internal_79cfbce89a97584bf04fb09cdc230ac92f69cb007dcdfac8e73f136b06278161_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_271f1db7d355480a26a6ca4e59b5ed58db2a96c2c9d8fc0618a01c894f9cb51f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_271f1db7d355480a26a6ca4e59b5ed58db2a96c2c9d8fc0618a01c894f9cb51f->enter($__internal_271f1db7d355480a26a6ca4e59b5ed58db2a96c2c9d8fc0618a01c894f9cb51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_04e44e3a2a9055a5d74057135d31ae8dde0bf9e6f6d842f07bd27825fc612d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e44e3a2a9055a5d74057135d31ae8dde0bf9e6f6d842f07bd27825fc612d91->enter($__internal_04e44e3a2a9055a5d74057135d31ae8dde0bf9e6f6d842f07bd27825fc612d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_04e44e3a2a9055a5d74057135d31ae8dde0bf9e6f6d842f07bd27825fc612d91->leave($__internal_04e44e3a2a9055a5d74057135d31ae8dde0bf9e6f6d842f07bd27825fc612d91_prof);

        
        $__internal_271f1db7d355480a26a6ca4e59b5ed58db2a96c2c9d8fc0618a01c894f9cb51f->leave($__internal_271f1db7d355480a26a6ca4e59b5ed58db2a96c2c9d8fc0618a01c894f9cb51f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a8e7eb2021e5d3ad34e7ca4635f33a728ae21a1dcdad91d4c24d4d1d2e584fd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8e7eb2021e5d3ad34e7ca4635f33a728ae21a1dcdad91d4c24d4d1d2e584fd4->enter($__internal_a8e7eb2021e5d3ad34e7ca4635f33a728ae21a1dcdad91d4c24d4d1d2e584fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e409bba63d60a4533d817ab9a8d330c200f9b2760b686fb4ffeebea3b664b810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e409bba63d60a4533d817ab9a8d330c200f9b2760b686fb4ffeebea3b664b810->enter($__internal_e409bba63d60a4533d817ab9a8d330c200f9b2760b686fb4ffeebea3b664b810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e409bba63d60a4533d817ab9a8d330c200f9b2760b686fb4ffeebea3b664b810->leave($__internal_e409bba63d60a4533d817ab9a8d330c200f9b2760b686fb4ffeebea3b664b810_prof);

        
        $__internal_a8e7eb2021e5d3ad34e7ca4635f33a728ae21a1dcdad91d4c24d4d1d2e584fd4->leave($__internal_a8e7eb2021e5d3ad34e7ca4635f33a728ae21a1dcdad91d4c24d4d1d2e584fd4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd1c5a3f5fa68a420ad6aa108fca0e09d002fd4efc1f24ef1b4d44845db82d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd1c5a3f5fa68a420ad6aa108fca0e09d002fd4efc1f24ef1b4d44845db82d2a->enter($__internal_fd1c5a3f5fa68a420ad6aa108fca0e09d002fd4efc1f24ef1b4d44845db82d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7fbcfb2ff4ce834bcf46840dd0b8c1c5d580e8fa614d7da01f6b7338c24b4ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbcfb2ff4ce834bcf46840dd0b8c1c5d580e8fa614d7da01f6b7338c24b4ae1->enter($__internal_7fbcfb2ff4ce834bcf46840dd0b8c1c5d580e8fa614d7da01f6b7338c24b4ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7fbcfb2ff4ce834bcf46840dd0b8c1c5d580e8fa614d7da01f6b7338c24b4ae1->leave($__internal_7fbcfb2ff4ce834bcf46840dd0b8c1c5d580e8fa614d7da01f6b7338c24b4ae1_prof);

        
        $__internal_fd1c5a3f5fa68a420ad6aa108fca0e09d002fd4efc1f24ef1b4d44845db82d2a->leave($__internal_fd1c5a3f5fa68a420ad6aa108fca0e09d002fd4efc1f24ef1b4d44845db82d2a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
