<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_8d4b7eb359beabde00363abfa54c222061db4d8d8c81bd7a4ac54fff0458b344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_aa43b5b4c478fbbb1e28fa3b9b10c55a213e08338e76b842fe88de15ade71d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa43b5b4c478fbbb1e28fa3b9b10c55a213e08338e76b842fe88de15ade71d3d->enter($__internal_aa43b5b4c478fbbb1e28fa3b9b10c55a213e08338e76b842fe88de15ade71d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_dc806f1afe0e0c66bb888d368dd2e3460ad7c8c4b73fbddddb32699d7097a255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc806f1afe0e0c66bb888d368dd2e3460ad7c8c4b73fbddddb32699d7097a255->enter($__internal_dc806f1afe0e0c66bb888d368dd2e3460ad7c8c4b73fbddddb32699d7097a255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa43b5b4c478fbbb1e28fa3b9b10c55a213e08338e76b842fe88de15ade71d3d->leave($__internal_aa43b5b4c478fbbb1e28fa3b9b10c55a213e08338e76b842fe88de15ade71d3d_prof);

        
        $__internal_dc806f1afe0e0c66bb888d368dd2e3460ad7c8c4b73fbddddb32699d7097a255->leave($__internal_dc806f1afe0e0c66bb888d368dd2e3460ad7c8c4b73fbddddb32699d7097a255_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_426ccaa95960b0c35b1a75fdba8c09cbedc1e12fc6f8e0682319ba4c0f72a8fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426ccaa95960b0c35b1a75fdba8c09cbedc1e12fc6f8e0682319ba4c0f72a8fe->enter($__internal_426ccaa95960b0c35b1a75fdba8c09cbedc1e12fc6f8e0682319ba4c0f72a8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e145c921a1780a967baa4981767716309ddda6d7c498f274b1a2ff316f97f3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e145c921a1780a967baa4981767716309ddda6d7c498f274b1a2ff316f97f3e6->enter($__internal_e145c921a1780a967baa4981767716309ddda6d7c498f274b1a2ff316f97f3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_e145c921a1780a967baa4981767716309ddda6d7c498f274b1a2ff316f97f3e6->leave($__internal_e145c921a1780a967baa4981767716309ddda6d7c498f274b1a2ff316f97f3e6_prof);

        
        $__internal_426ccaa95960b0c35b1a75fdba8c09cbedc1e12fc6f8e0682319ba4c0f72a8fe->leave($__internal_426ccaa95960b0c35b1a75fdba8c09cbedc1e12fc6f8e0682319ba4c0f72a8fe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/Capa_dev/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
