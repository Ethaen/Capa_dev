<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_d599e78673aafc722f9d52a3cf6838097ef8d784a9466cf99558947bb9d65088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cd627557601b192fd8d977597213b3d8e74be6655956c7c54709f1705f4f06d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd627557601b192fd8d977597213b3d8e74be6655956c7c54709f1705f4f06d->enter($__internal_9cd627557601b192fd8d977597213b3d8e74be6655956c7c54709f1705f4f06d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_794809c5d0056f6e9333a57344821687d3603684f8f1d2a3590da53418716675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_794809c5d0056f6e9333a57344821687d3603684f8f1d2a3590da53418716675->enter($__internal_794809c5d0056f6e9333a57344821687d3603684f8f1d2a3590da53418716675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cd627557601b192fd8d977597213b3d8e74be6655956c7c54709f1705f4f06d->leave($__internal_9cd627557601b192fd8d977597213b3d8e74be6655956c7c54709f1705f4f06d_prof);

        
        $__internal_794809c5d0056f6e9333a57344821687d3603684f8f1d2a3590da53418716675->leave($__internal_794809c5d0056f6e9333a57344821687d3603684f8f1d2a3590da53418716675_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98e4c8e015b00dff988bff738aa189ce18b4f55ecf8a9acd481a52f3a54a343a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e4c8e015b00dff988bff738aa189ce18b4f55ecf8a9acd481a52f3a54a343a->enter($__internal_98e4c8e015b00dff988bff738aa189ce18b4f55ecf8a9acd481a52f3a54a343a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_614d171cef7d403d4b233241f62f543d4ae87261f82c153459586aa6a76fb2c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_614d171cef7d403d4b233241f62f543d4ae87261f82c153459586aa6a76fb2c0->enter($__internal_614d171cef7d403d4b233241f62f543d4ae87261f82c153459586aa6a76fb2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_614d171cef7d403d4b233241f62f543d4ae87261f82c153459586aa6a76fb2c0->leave($__internal_614d171cef7d403d4b233241f62f543d4ae87261f82c153459586aa6a76fb2c0_prof);

        
        $__internal_98e4c8e015b00dff988bff738aa189ce18b4f55ecf8a9acd481a52f3a54a343a->leave($__internal_98e4c8e015b00dff988bff738aa189ce18b4f55ecf8a9acd481a52f3a54a343a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/Capa_dev/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
