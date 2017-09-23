<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c6d98632d4052ab5d69d8296de4d5a45bccb0c9aad8d3dc088a13097861e3386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_64e2a6b47994a7c9153c167ea4a3ee69d6583b3635a3020a11cd93fbd3cb5839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64e2a6b47994a7c9153c167ea4a3ee69d6583b3635a3020a11cd93fbd3cb5839->enter($__internal_64e2a6b47994a7c9153c167ea4a3ee69d6583b3635a3020a11cd93fbd3cb5839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_8d09d31fb2ad568e76ae9505ec8252fe05292b1b70b54c1b85fafaade96088ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d09d31fb2ad568e76ae9505ec8252fe05292b1b70b54c1b85fafaade96088ef->enter($__internal_8d09d31fb2ad568e76ae9505ec8252fe05292b1b70b54c1b85fafaade96088ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64e2a6b47994a7c9153c167ea4a3ee69d6583b3635a3020a11cd93fbd3cb5839->leave($__internal_64e2a6b47994a7c9153c167ea4a3ee69d6583b3635a3020a11cd93fbd3cb5839_prof);

        
        $__internal_8d09d31fb2ad568e76ae9505ec8252fe05292b1b70b54c1b85fafaade96088ef->leave($__internal_8d09d31fb2ad568e76ae9505ec8252fe05292b1b70b54c1b85fafaade96088ef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa22b711b75b60e9e7fb320bfadf47cf3689734ed28f733994b180c51c62aa93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa22b711b75b60e9e7fb320bfadf47cf3689734ed28f733994b180c51c62aa93->enter($__internal_aa22b711b75b60e9e7fb320bfadf47cf3689734ed28f733994b180c51c62aa93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f3ae634a54d909dc84973d8b8fbe1871c66b891fb1fa1cd419505cedec962cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ae634a54d909dc84973d8b8fbe1871c66b891fb1fa1cd419505cedec962cee->enter($__internal_f3ae634a54d909dc84973d8b8fbe1871c66b891fb1fa1cd419505cedec962cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_f3ae634a54d909dc84973d8b8fbe1871c66b891fb1fa1cd419505cedec962cee->leave($__internal_f3ae634a54d909dc84973d8b8fbe1871c66b891fb1fa1cd419505cedec962cee_prof);

        
        $__internal_aa22b711b75b60e9e7fb320bfadf47cf3689734ed28f733994b180c51c62aa93->leave($__internal_aa22b711b75b60e9e7fb320bfadf47cf3689734ed28f733994b180c51c62aa93_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/Capa_dev/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
