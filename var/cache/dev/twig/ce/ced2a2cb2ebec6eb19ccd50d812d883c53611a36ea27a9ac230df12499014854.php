<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_23258d24abe9c8bbbb0610c03898c8c281600ce981b68160704042a1027f84ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_ee5e6198d85df14e896528ca8289fb05fc3e617f2127dc0f361234bd80678d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee5e6198d85df14e896528ca8289fb05fc3e617f2127dc0f361234bd80678d61->enter($__internal_ee5e6198d85df14e896528ca8289fb05fc3e617f2127dc0f361234bd80678d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_fbb942bae43727818294bf2236a9bd13f8ab0844167b34ea0f61117027395b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb942bae43727818294bf2236a9bd13f8ab0844167b34ea0f61117027395b19->enter($__internal_fbb942bae43727818294bf2236a9bd13f8ab0844167b34ea0f61117027395b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee5e6198d85df14e896528ca8289fb05fc3e617f2127dc0f361234bd80678d61->leave($__internal_ee5e6198d85df14e896528ca8289fb05fc3e617f2127dc0f361234bd80678d61_prof);

        
        $__internal_fbb942bae43727818294bf2236a9bd13f8ab0844167b34ea0f61117027395b19->leave($__internal_fbb942bae43727818294bf2236a9bd13f8ab0844167b34ea0f61117027395b19_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95f6c8cd64b1e69746465873efdb3254364219b591c43855f9147d4cac48d55b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f6c8cd64b1e69746465873efdb3254364219b591c43855f9147d4cac48d55b->enter($__internal_95f6c8cd64b1e69746465873efdb3254364219b591c43855f9147d4cac48d55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fc3e9e7c5eb2b6c716604cefef7821d182557429121aaa228716a6802c4e3e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3e9e7c5eb2b6c716604cefef7821d182557429121aaa228716a6802c4e3e30->enter($__internal_fc3e9e7c5eb2b6c716604cefef7821d182557429121aaa228716a6802c4e3e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_fc3e9e7c5eb2b6c716604cefef7821d182557429121aaa228716a6802c4e3e30->leave($__internal_fc3e9e7c5eb2b6c716604cefef7821d182557429121aaa228716a6802c4e3e30_prof);

        
        $__internal_95f6c8cd64b1e69746465873efdb3254364219b591c43855f9147d4cac48d55b->leave($__internal_95f6c8cd64b1e69746465873efdb3254364219b591c43855f9147d4cac48d55b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/Capa_dev/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
