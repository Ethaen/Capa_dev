<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_8dc97cf982de83ce712e19fd38c1cd014de31b89068b9fd68a467092345ec68c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_8ae27fab27cc68a1d5696ebda71958c770447a006474b8311ca550caa1abf12d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ae27fab27cc68a1d5696ebda71958c770447a006474b8311ca550caa1abf12d->enter($__internal_8ae27fab27cc68a1d5696ebda71958c770447a006474b8311ca550caa1abf12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_d9c981a632ac1cba4d751f3a4fe6fe2fd26969ac9e82db850261a48f755ac167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c981a632ac1cba4d751f3a4fe6fe2fd26969ac9e82db850261a48f755ac167->enter($__internal_d9c981a632ac1cba4d751f3a4fe6fe2fd26969ac9e82db850261a48f755ac167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ae27fab27cc68a1d5696ebda71958c770447a006474b8311ca550caa1abf12d->leave($__internal_8ae27fab27cc68a1d5696ebda71958c770447a006474b8311ca550caa1abf12d_prof);

        
        $__internal_d9c981a632ac1cba4d751f3a4fe6fe2fd26969ac9e82db850261a48f755ac167->leave($__internal_d9c981a632ac1cba4d751f3a4fe6fe2fd26969ac9e82db850261a48f755ac167_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0462c1733bfdc341b7234b54936f5475e5eb66e8e27592b15229ad399657393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0462c1733bfdc341b7234b54936f5475e5eb66e8e27592b15229ad399657393->enter($__internal_d0462c1733bfdc341b7234b54936f5475e5eb66e8e27592b15229ad399657393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_78f11afb0113b554e5da99889d8d9192a63acd5c63b280fb87454391347d30e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f11afb0113b554e5da99889d8d9192a63acd5c63b280fb87454391347d30e7->enter($__internal_78f11afb0113b554e5da99889d8d9192a63acd5c63b280fb87454391347d30e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_78f11afb0113b554e5da99889d8d9192a63acd5c63b280fb87454391347d30e7->leave($__internal_78f11afb0113b554e5da99889d8d9192a63acd5c63b280fb87454391347d30e7_prof);

        
        $__internal_d0462c1733bfdc341b7234b54936f5475e5eb66e8e27592b15229ad399657393->leave($__internal_d0462c1733bfdc341b7234b54936f5475e5eb66e8e27592b15229ad399657393_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/Capa_dev/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
