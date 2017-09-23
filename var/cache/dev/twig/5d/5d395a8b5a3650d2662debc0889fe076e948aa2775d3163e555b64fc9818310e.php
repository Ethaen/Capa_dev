<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a5c8d6d4c9dddecdabcaebb193989c6d212e511f40565b9d9d4f7ac5db97348e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_d0b73a2d3573cc0f444e3f7bae47f7b2b205e4b419db6c20e9e4a0d81457e293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b73a2d3573cc0f444e3f7bae47f7b2b205e4b419db6c20e9e4a0d81457e293->enter($__internal_d0b73a2d3573cc0f444e3f7bae47f7b2b205e4b419db6c20e9e4a0d81457e293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_f24497b042bbcd32bd20ebbdcd1f1fb022d42ed46ed8fbed4767dc35b00309a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f24497b042bbcd32bd20ebbdcd1f1fb022d42ed46ed8fbed4767dc35b00309a7->enter($__internal_f24497b042bbcd32bd20ebbdcd1f1fb022d42ed46ed8fbed4767dc35b00309a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0b73a2d3573cc0f444e3f7bae47f7b2b205e4b419db6c20e9e4a0d81457e293->leave($__internal_d0b73a2d3573cc0f444e3f7bae47f7b2b205e4b419db6c20e9e4a0d81457e293_prof);

        
        $__internal_f24497b042bbcd32bd20ebbdcd1f1fb022d42ed46ed8fbed4767dc35b00309a7->leave($__internal_f24497b042bbcd32bd20ebbdcd1f1fb022d42ed46ed8fbed4767dc35b00309a7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d295515a3b055130725e76ab2bc3a397ae70e6532337ca37f01a7b8308030e36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d295515a3b055130725e76ab2bc3a397ae70e6532337ca37f01a7b8308030e36->enter($__internal_d295515a3b055130725e76ab2bc3a397ae70e6532337ca37f01a7b8308030e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d4cca5cbe18d4585a9dc6e4b9a43facf6f5b57e0b6ce204a4311c0dd70161af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4cca5cbe18d4585a9dc6e4b9a43facf6f5b57e0b6ce204a4311c0dd70161af9->enter($__internal_d4cca5cbe18d4585a9dc6e4b9a43facf6f5b57e0b6ce204a4311c0dd70161af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_d4cca5cbe18d4585a9dc6e4b9a43facf6f5b57e0b6ce204a4311c0dd70161af9->leave($__internal_d4cca5cbe18d4585a9dc6e4b9a43facf6f5b57e0b6ce204a4311c0dd70161af9_prof);

        
        $__internal_d295515a3b055130725e76ab2bc3a397ae70e6532337ca37f01a7b8308030e36->leave($__internal_d295515a3b055130725e76ab2bc3a397ae70e6532337ca37f01a7b8308030e36_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/Capa_dev/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
