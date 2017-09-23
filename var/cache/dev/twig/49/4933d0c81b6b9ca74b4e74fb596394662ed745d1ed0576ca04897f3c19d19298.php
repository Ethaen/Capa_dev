<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c73a916adef90294612b3e613cdcdd32c28385911d292c192a5857bfa5acb0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d33ae5e3d446eda5c5dc1918457ac45f6888d9b36778e2ff37d0eef7604af2e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d33ae5e3d446eda5c5dc1918457ac45f6888d9b36778e2ff37d0eef7604af2e6->enter($__internal_d33ae5e3d446eda5c5dc1918457ac45f6888d9b36778e2ff37d0eef7604af2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_4177b099728ad10ac455897c23fd717982dfaee075261564bb5ce4b50fa186b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4177b099728ad10ac455897c23fd717982dfaee075261564bb5ce4b50fa186b0->enter($__internal_4177b099728ad10ac455897c23fd717982dfaee075261564bb5ce4b50fa186b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d33ae5e3d446eda5c5dc1918457ac45f6888d9b36778e2ff37d0eef7604af2e6->leave($__internal_d33ae5e3d446eda5c5dc1918457ac45f6888d9b36778e2ff37d0eef7604af2e6_prof);

        
        $__internal_4177b099728ad10ac455897c23fd717982dfaee075261564bb5ce4b50fa186b0->leave($__internal_4177b099728ad10ac455897c23fd717982dfaee075261564bb5ce4b50fa186b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_77abcb99f77a42bb7b7e94dea73cfa54e0917f82cca13251f254c68b269f78a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77abcb99f77a42bb7b7e94dea73cfa54e0917f82cca13251f254c68b269f78a4->enter($__internal_77abcb99f77a42bb7b7e94dea73cfa54e0917f82cca13251f254c68b269f78a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4a5943568092412f23dd60b11f5ca0334ad2e88531194916cc9c7f8934eba879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a5943568092412f23dd60b11f5ca0334ad2e88531194916cc9c7f8934eba879->enter($__internal_4a5943568092412f23dd60b11f5ca0334ad2e88531194916cc9c7f8934eba879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4a5943568092412f23dd60b11f5ca0334ad2e88531194916cc9c7f8934eba879->leave($__internal_4a5943568092412f23dd60b11f5ca0334ad2e88531194916cc9c7f8934eba879_prof);

        
        $__internal_77abcb99f77a42bb7b7e94dea73cfa54e0917f82cca13251f254c68b269f78a4->leave($__internal_77abcb99f77a42bb7b7e94dea73cfa54e0917f82cca13251f254c68b269f78a4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_33af4c2b09b9032fd7a90d15a076372ebb85e59526593e5c04d3f58d38f6ef19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33af4c2b09b9032fd7a90d15a076372ebb85e59526593e5c04d3f58d38f6ef19->enter($__internal_33af4c2b09b9032fd7a90d15a076372ebb85e59526593e5c04d3f58d38f6ef19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_76040329dc59454c5546eee0e0da09ce4b09430723e20e9ea666a5cdbeb4e88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76040329dc59454c5546eee0e0da09ce4b09430723e20e9ea666a5cdbeb4e88f->enter($__internal_76040329dc59454c5546eee0e0da09ce4b09430723e20e9ea666a5cdbeb4e88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_76040329dc59454c5546eee0e0da09ce4b09430723e20e9ea666a5cdbeb4e88f->leave($__internal_76040329dc59454c5546eee0e0da09ce4b09430723e20e9ea666a5cdbeb4e88f_prof);

        
        $__internal_33af4c2b09b9032fd7a90d15a076372ebb85e59526593e5c04d3f58d38f6ef19->leave($__internal_33af4c2b09b9032fd7a90d15a076372ebb85e59526593e5c04d3f58d38f6ef19_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
