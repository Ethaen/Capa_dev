<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f423f2843e5d1c0d130d905c1bed80167d69872a5c423eb802e4ec14d12432ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_bb63269b36157c3f10f21d28b95f299279e061758752f5772ffd33ce7e7b612f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb63269b36157c3f10f21d28b95f299279e061758752f5772ffd33ce7e7b612f->enter($__internal_bb63269b36157c3f10f21d28b95f299279e061758752f5772ffd33ce7e7b612f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_956ca78b8582f571cdca7d8b2a382a6a3c1e88041cf4dae934d4d7cff14b9853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956ca78b8582f571cdca7d8b2a382a6a3c1e88041cf4dae934d4d7cff14b9853->enter($__internal_956ca78b8582f571cdca7d8b2a382a6a3c1e88041cf4dae934d4d7cff14b9853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb63269b36157c3f10f21d28b95f299279e061758752f5772ffd33ce7e7b612f->leave($__internal_bb63269b36157c3f10f21d28b95f299279e061758752f5772ffd33ce7e7b612f_prof);

        
        $__internal_956ca78b8582f571cdca7d8b2a382a6a3c1e88041cf4dae934d4d7cff14b9853->leave($__internal_956ca78b8582f571cdca7d8b2a382a6a3c1e88041cf4dae934d4d7cff14b9853_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ceda62ecb5876d82a1c7020b8349328e44ed246a6db00d9890a44606d6888194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceda62ecb5876d82a1c7020b8349328e44ed246a6db00d9890a44606d6888194->enter($__internal_ceda62ecb5876d82a1c7020b8349328e44ed246a6db00d9890a44606d6888194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3b238f7071db551ddb50e950cfb7c74e7bb9f9366c5ee8af6dc4c7bc2a68d0df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b238f7071db551ddb50e950cfb7c74e7bb9f9366c5ee8af6dc4c7bc2a68d0df->enter($__internal_3b238f7071db551ddb50e950cfb7c74e7bb9f9366c5ee8af6dc4c7bc2a68d0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_3b238f7071db551ddb50e950cfb7c74e7bb9f9366c5ee8af6dc4c7bc2a68d0df->leave($__internal_3b238f7071db551ddb50e950cfb7c74e7bb9f9366c5ee8af6dc4c7bc2a68d0df_prof);

        
        $__internal_ceda62ecb5876d82a1c7020b8349328e44ed246a6db00d9890a44606d6888194->leave($__internal_ceda62ecb5876d82a1c7020b8349328e44ed246a6db00d9890a44606d6888194_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/Capa_dev/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
