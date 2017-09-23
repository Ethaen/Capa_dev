<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ddbd517106433870c1648854a6afeadd58b2cc4e2a3d776bd94ad89ca1cd9b46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcc7a525520596b038186187b25e9b5ec23b46665aac09cacc3325578b737300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcc7a525520596b038186187b25e9b5ec23b46665aac09cacc3325578b737300->enter($__internal_bcc7a525520596b038186187b25e9b5ec23b46665aac09cacc3325578b737300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_31930ca6c2e3b35c18274448c3a1b94912b84613fdd2469efac1642dee86577a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31930ca6c2e3b35c18274448c3a1b94912b84613fdd2469efac1642dee86577a->enter($__internal_31930ca6c2e3b35c18274448c3a1b94912b84613fdd2469efac1642dee86577a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcc7a525520596b038186187b25e9b5ec23b46665aac09cacc3325578b737300->leave($__internal_bcc7a525520596b038186187b25e9b5ec23b46665aac09cacc3325578b737300_prof);

        
        $__internal_31930ca6c2e3b35c18274448c3a1b94912b84613fdd2469efac1642dee86577a->leave($__internal_31930ca6c2e3b35c18274448c3a1b94912b84613fdd2469efac1642dee86577a_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_df4201fc133eb613641eeb3435ccf5335b3fe151767174c90c01b7a73cc749d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4201fc133eb613641eeb3435ccf5335b3fe151767174c90c01b7a73cc749d4->enter($__internal_df4201fc133eb613641eeb3435ccf5335b3fe151767174c90c01b7a73cc749d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_493a0a28bb1832343fdf03bc12a27353b1f671987c70cf6ff83dc18ea5694f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493a0a28bb1832343fdf03bc12a27353b1f671987c70cf6ff83dc18ea5694f03->enter($__internal_493a0a28bb1832343fdf03bc12a27353b1f671987c70cf6ff83dc18ea5694f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_493a0a28bb1832343fdf03bc12a27353b1f671987c70cf6ff83dc18ea5694f03->leave($__internal_493a0a28bb1832343fdf03bc12a27353b1f671987c70cf6ff83dc18ea5694f03_prof);

        
        $__internal_df4201fc133eb613641eeb3435ccf5335b3fe151767174c90c01b7a73cc749d4->leave($__internal_df4201fc133eb613641eeb3435ccf5335b3fe151767174c90c01b7a73cc749d4_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef6085b03ebca2a650dee5f892f8eb576c420de7a654192648b372ece2df3014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef6085b03ebca2a650dee5f892f8eb576c420de7a654192648b372ece2df3014->enter($__internal_ef6085b03ebca2a650dee5f892f8eb576c420de7a654192648b372ece2df3014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e1129898d01d4aa4425bea91f8e228cd8a0b1dbe9bffd1d6462a499ddb5eceb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1129898d01d4aa4425bea91f8e228cd8a0b1dbe9bffd1d6462a499ddb5eceb7->enter($__internal_e1129898d01d4aa4425bea91f8e228cd8a0b1dbe9bffd1d6462a499ddb5eceb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_e1129898d01d4aa4425bea91f8e228cd8a0b1dbe9bffd1d6462a499ddb5eceb7->leave($__internal_e1129898d01d4aa4425bea91f8e228cd8a0b1dbe9bffd1d6462a499ddb5eceb7_prof);

        
        $__internal_ef6085b03ebca2a650dee5f892f8eb576c420de7a654192648b372ece2df3014->leave($__internal_ef6085b03ebca2a650dee5f892f8eb576c420de7a654192648b372ece2df3014_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
