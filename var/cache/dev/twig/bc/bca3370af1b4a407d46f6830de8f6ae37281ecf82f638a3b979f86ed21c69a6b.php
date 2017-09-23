<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8da44bcdea30fb3bce82794837dbb5297a9a1ca912ab6945a5c0372627a7abcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_2b7976ee7d47e7e735ed6a547faf791c6ac73e6f4b34484d9d43ec10910b559a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b7976ee7d47e7e735ed6a547faf791c6ac73e6f4b34484d9d43ec10910b559a->enter($__internal_2b7976ee7d47e7e735ed6a547faf791c6ac73e6f4b34484d9d43ec10910b559a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_4125bcdec7bdcdf44bbbb32a614a7cdd74b30ea8a71f9edb77f9609e228328c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4125bcdec7bdcdf44bbbb32a614a7cdd74b30ea8a71f9edb77f9609e228328c5->enter($__internal_4125bcdec7bdcdf44bbbb32a614a7cdd74b30ea8a71f9edb77f9609e228328c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b7976ee7d47e7e735ed6a547faf791c6ac73e6f4b34484d9d43ec10910b559a->leave($__internal_2b7976ee7d47e7e735ed6a547faf791c6ac73e6f4b34484d9d43ec10910b559a_prof);

        
        $__internal_4125bcdec7bdcdf44bbbb32a614a7cdd74b30ea8a71f9edb77f9609e228328c5->leave($__internal_4125bcdec7bdcdf44bbbb32a614a7cdd74b30ea8a71f9edb77f9609e228328c5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ead5651eb641478dc226b59354ebc2bc34840de116843b85c8c5d1429a80e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ead5651eb641478dc226b59354ebc2bc34840de116843b85c8c5d1429a80e15->enter($__internal_7ead5651eb641478dc226b59354ebc2bc34840de116843b85c8c5d1429a80e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ff903174ba3b03522b6c4e0de172f8b49219a4ca6200564ec928e48f14f7d110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff903174ba3b03522b6c4e0de172f8b49219a4ca6200564ec928e48f14f7d110->enter($__internal_ff903174ba3b03522b6c4e0de172f8b49219a4ca6200564ec928e48f14f7d110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ff903174ba3b03522b6c4e0de172f8b49219a4ca6200564ec928e48f14f7d110->leave($__internal_ff903174ba3b03522b6c4e0de172f8b49219a4ca6200564ec928e48f14f7d110_prof);

        
        $__internal_7ead5651eb641478dc226b59354ebc2bc34840de116843b85c8c5d1429a80e15->leave($__internal_7ead5651eb641478dc226b59354ebc2bc34840de116843b85c8c5d1429a80e15_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/Capa_dev/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
