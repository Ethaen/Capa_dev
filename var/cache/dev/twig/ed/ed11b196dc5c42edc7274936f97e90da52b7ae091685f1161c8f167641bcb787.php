<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_674099ca901fd8c9ca9d64eee22cba8aeb1e939a3f260cf57c0421b1596fe5d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_d822b20eda5025ce489b6c67c50d58613b01a41a8f7058bd339a98fa1b9de9c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d822b20eda5025ce489b6c67c50d58613b01a41a8f7058bd339a98fa1b9de9c0->enter($__internal_d822b20eda5025ce489b6c67c50d58613b01a41a8f7058bd339a98fa1b9de9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_de4d1a4f1a2669971b1f0d1854ec1cdc2f5b378763550bc18d4ef1879adab571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4d1a4f1a2669971b1f0d1854ec1cdc2f5b378763550bc18d4ef1879adab571->enter($__internal_de4d1a4f1a2669971b1f0d1854ec1cdc2f5b378763550bc18d4ef1879adab571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d822b20eda5025ce489b6c67c50d58613b01a41a8f7058bd339a98fa1b9de9c0->leave($__internal_d822b20eda5025ce489b6c67c50d58613b01a41a8f7058bd339a98fa1b9de9c0_prof);

        
        $__internal_de4d1a4f1a2669971b1f0d1854ec1cdc2f5b378763550bc18d4ef1879adab571->leave($__internal_de4d1a4f1a2669971b1f0d1854ec1cdc2f5b378763550bc18d4ef1879adab571_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71bcf14d34b78279c96f01f4e8af69e6a2ab76a142698de1796c6844108254ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71bcf14d34b78279c96f01f4e8af69e6a2ab76a142698de1796c6844108254ba->enter($__internal_71bcf14d34b78279c96f01f4e8af69e6a2ab76a142698de1796c6844108254ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2e3c928d5913532b9ab41c7e7baea3b33309b61a23c3c3d6ff776419d056901c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3c928d5913532b9ab41c7e7baea3b33309b61a23c3c3d6ff776419d056901c->enter($__internal_2e3c928d5913532b9ab41c7e7baea3b33309b61a23c3c3d6ff776419d056901c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_2e3c928d5913532b9ab41c7e7baea3b33309b61a23c3c3d6ff776419d056901c->leave($__internal_2e3c928d5913532b9ab41c7e7baea3b33309b61a23c3c3d6ff776419d056901c_prof);

        
        $__internal_71bcf14d34b78279c96f01f4e8af69e6a2ab76a142698de1796c6844108254ba->leave($__internal_71bcf14d34b78279c96f01f4e8af69e6a2ab76a142698de1796c6844108254ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/Capa_dev/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
