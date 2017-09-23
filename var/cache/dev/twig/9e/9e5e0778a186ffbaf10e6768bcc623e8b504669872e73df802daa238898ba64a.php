<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_d2a768e8d244a97ac1918d04e896b3a8a41bffdfe8b3a479c42fa239c0c9fbac extends Twig_Template
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
        $__internal_68ef477f10dc57d007b12c80b9c70ea7ce3dff8ba944f06e064059dd09479313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68ef477f10dc57d007b12c80b9c70ea7ce3dff8ba944f06e064059dd09479313->enter($__internal_68ef477f10dc57d007b12c80b9c70ea7ce3dff8ba944f06e064059dd09479313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_e7157cd3d25d491d415f5be7b2da6950c931940affc5d97c8a6383eda133f0df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7157cd3d25d491d415f5be7b2da6950c931940affc5d97c8a6383eda133f0df->enter($__internal_e7157cd3d25d491d415f5be7b2da6950c931940affc5d97c8a6383eda133f0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_68ef477f10dc57d007b12c80b9c70ea7ce3dff8ba944f06e064059dd09479313->leave($__internal_68ef477f10dc57d007b12c80b9c70ea7ce3dff8ba944f06e064059dd09479313_prof);

        
        $__internal_e7157cd3d25d491d415f5be7b2da6950c931940affc5d97c8a6383eda133f0df->leave($__internal_e7157cd3d25d491d415f5be7b2da6950c931940affc5d97c8a6383eda133f0df_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d55e8b27f9976cebbc4a07ef3f5640df2bd89b1a8869757781d261ba835ff854 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d55e8b27f9976cebbc4a07ef3f5640df2bd89b1a8869757781d261ba835ff854->enter($__internal_d55e8b27f9976cebbc4a07ef3f5640df2bd89b1a8869757781d261ba835ff854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_fc82a4750809d2d691f4b0c0dcfdaa3b33afee07e747e64b79f5f3e3e89253c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc82a4750809d2d691f4b0c0dcfdaa3b33afee07e747e64b79f5f3e3e89253c7->enter($__internal_fc82a4750809d2d691f4b0c0dcfdaa3b33afee07e747e64b79f5f3e3e89253c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_fc82a4750809d2d691f4b0c0dcfdaa3b33afee07e747e64b79f5f3e3e89253c7->leave($__internal_fc82a4750809d2d691f4b0c0dcfdaa3b33afee07e747e64b79f5f3e3e89253c7_prof);

        
        $__internal_d55e8b27f9976cebbc4a07ef3f5640df2bd89b1a8869757781d261ba835ff854->leave($__internal_d55e8b27f9976cebbc4a07ef3f5640df2bd89b1a8869757781d261ba835ff854_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_80693b942e299757508cf5543eefb26cbc3889d4aba7c0b12d807eea8e0731bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80693b942e299757508cf5543eefb26cbc3889d4aba7c0b12d807eea8e0731bc->enter($__internal_80693b942e299757508cf5543eefb26cbc3889d4aba7c0b12d807eea8e0731bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_3796063a48fd80da581c41c1f75de21c8ba6ffd029629caa41a3965a34c01b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3796063a48fd80da581c41c1f75de21c8ba6ffd029629caa41a3965a34c01b70->enter($__internal_3796063a48fd80da581c41c1f75de21c8ba6ffd029629caa41a3965a34c01b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3796063a48fd80da581c41c1f75de21c8ba6ffd029629caa41a3965a34c01b70->leave($__internal_3796063a48fd80da581c41c1f75de21c8ba6ffd029629caa41a3965a34c01b70_prof);

        
        $__internal_80693b942e299757508cf5543eefb26cbc3889d4aba7c0b12d807eea8e0731bc->leave($__internal_80693b942e299757508cf5543eefb26cbc3889d4aba7c0b12d807eea8e0731bc_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2e9d5f669921666b191e19e4b32f3b39928c2660d2342f7eb7b13dba4845524a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e9d5f669921666b191e19e4b32f3b39928c2660d2342f7eb7b13dba4845524a->enter($__internal_2e9d5f669921666b191e19e4b32f3b39928c2660d2342f7eb7b13dba4845524a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_aa08e9439c03fc666f9bda5a0ca30169f2b4f7c515f2f6be993677129fd3ff9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa08e9439c03fc666f9bda5a0ca30169f2b4f7c515f2f6be993677129fd3ff9f->enter($__internal_aa08e9439c03fc666f9bda5a0ca30169f2b4f7c515f2f6be993677129fd3ff9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_aa08e9439c03fc666f9bda5a0ca30169f2b4f7c515f2f6be993677129fd3ff9f->leave($__internal_aa08e9439c03fc666f9bda5a0ca30169f2b4f7c515f2f6be993677129fd3ff9f_prof);

        
        $__internal_2e9d5f669921666b191e19e4b32f3b39928c2660d2342f7eb7b13dba4845524a->leave($__internal_2e9d5f669921666b191e19e4b32f3b39928c2660d2342f7eb7b13dba4845524a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/Capa_dev/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
