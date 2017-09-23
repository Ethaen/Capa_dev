<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_34c3a0643dfc7d72a581e0e6090842eda852bb909c6261b5861c9eda5e28b623 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d986b0b6fd6a312b51d9dc18bcbe93c7a4c124abf769534331260e5fbbebb89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d986b0b6fd6a312b51d9dc18bcbe93c7a4c124abf769534331260e5fbbebb89->enter($__internal_2d986b0b6fd6a312b51d9dc18bcbe93c7a4c124abf769534331260e5fbbebb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_835b441995a0b9020f9b8c85097ebe3980220a30f10c82ea2b18b5a74baf64d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835b441995a0b9020f9b8c85097ebe3980220a30f10c82ea2b18b5a74baf64d1->enter($__internal_835b441995a0b9020f9b8c85097ebe3980220a30f10c82ea2b18b5a74baf64d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2d986b0b6fd6a312b51d9dc18bcbe93c7a4c124abf769534331260e5fbbebb89->leave($__internal_2d986b0b6fd6a312b51d9dc18bcbe93c7a4c124abf769534331260e5fbbebb89_prof);

        
        $__internal_835b441995a0b9020f9b8c85097ebe3980220a30f10c82ea2b18b5a74baf64d1->leave($__internal_835b441995a0b9020f9b8c85097ebe3980220a30f10c82ea2b18b5a74baf64d1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2cc4567f01fecf704156c728ccb6913454e65b5e098898a16692cefea2cee148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc4567f01fecf704156c728ccb6913454e65b5e098898a16692cefea2cee148->enter($__internal_2cc4567f01fecf704156c728ccb6913454e65b5e098898a16692cefea2cee148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_751a15d6581c4e97ebddc8aef0d733b58b2205dbebc6b9055879eb59bb34de28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_751a15d6581c4e97ebddc8aef0d733b58b2205dbebc6b9055879eb59bb34de28->enter($__internal_751a15d6581c4e97ebddc8aef0d733b58b2205dbebc6b9055879eb59bb34de28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_751a15d6581c4e97ebddc8aef0d733b58b2205dbebc6b9055879eb59bb34de28->leave($__internal_751a15d6581c4e97ebddc8aef0d733b58b2205dbebc6b9055879eb59bb34de28_prof);

        
        $__internal_2cc4567f01fecf704156c728ccb6913454e65b5e098898a16692cefea2cee148->leave($__internal_2cc4567f01fecf704156c728ccb6913454e65b5e098898a16692cefea2cee148_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c2cefca0349799275dee05034a72267aeb6af29ae12de362c150b8fbb16dd1c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2cefca0349799275dee05034a72267aeb6af29ae12de362c150b8fbb16dd1c0->enter($__internal_c2cefca0349799275dee05034a72267aeb6af29ae12de362c150b8fbb16dd1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_039ed2df84668bbdb2288e22fb4d15459f81c92ca1f16dc3fd9d2bf8433b944a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039ed2df84668bbdb2288e22fb4d15459f81c92ca1f16dc3fd9d2bf8433b944a->enter($__internal_039ed2df84668bbdb2288e22fb4d15459f81c92ca1f16dc3fd9d2bf8433b944a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_039ed2df84668bbdb2288e22fb4d15459f81c92ca1f16dc3fd9d2bf8433b944a->leave($__internal_039ed2df84668bbdb2288e22fb4d15459f81c92ca1f16dc3fd9d2bf8433b944a_prof);

        
        $__internal_c2cefca0349799275dee05034a72267aeb6af29ae12de362c150b8fbb16dd1c0->leave($__internal_c2cefca0349799275dee05034a72267aeb6af29ae12de362c150b8fbb16dd1c0_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c51beb41f6ecff2e04e7400a147b634395b60bb33803ab44eb2210846946c8b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51beb41f6ecff2e04e7400a147b634395b60bb33803ab44eb2210846946c8b1->enter($__internal_c51beb41f6ecff2e04e7400a147b634395b60bb33803ab44eb2210846946c8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d4adf586d71cdf5d87af304dabcfe4ef4955423c737f0db2e4b16dad82b82dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4adf586d71cdf5d87af304dabcfe4ef4955423c737f0db2e4b16dad82b82dbd->enter($__internal_d4adf586d71cdf5d87af304dabcfe4ef4955423c737f0db2e4b16dad82b82dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d4adf586d71cdf5d87af304dabcfe4ef4955423c737f0db2e4b16dad82b82dbd->leave($__internal_d4adf586d71cdf5d87af304dabcfe4ef4955423c737f0db2e4b16dad82b82dbd_prof);

        
        $__internal_c51beb41f6ecff2e04e7400a147b634395b60bb33803ab44eb2210846946c8b1->leave($__internal_c51beb41f6ecff2e04e7400a147b634395b60bb33803ab44eb2210846946c8b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/Capa_dev/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
