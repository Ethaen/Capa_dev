<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_9c73dd7088a3784e6baed922fef0174c312499d7da8fd69eb3463049c30a2a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_e6f3383c121a688f90e6515a3ccc82dc85c6576755ad7fbe6802edd5536b30a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f3383c121a688f90e6515a3ccc82dc85c6576755ad7fbe6802edd5536b30a1->enter($__internal_e6f3383c121a688f90e6515a3ccc82dc85c6576755ad7fbe6802edd5536b30a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_933953d93f6b81141637634d0e496d42b733fa205abbe8971c464b1b7f1771f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933953d93f6b81141637634d0e496d42b733fa205abbe8971c464b1b7f1771f3->enter($__internal_933953d93f6b81141637634d0e496d42b733fa205abbe8971c464b1b7f1771f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6f3383c121a688f90e6515a3ccc82dc85c6576755ad7fbe6802edd5536b30a1->leave($__internal_e6f3383c121a688f90e6515a3ccc82dc85c6576755ad7fbe6802edd5536b30a1_prof);

        
        $__internal_933953d93f6b81141637634d0e496d42b733fa205abbe8971c464b1b7f1771f3->leave($__internal_933953d93f6b81141637634d0e496d42b733fa205abbe8971c464b1b7f1771f3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6625172926f2eb3f03eca631ac7a4b61f8aae332c315324f9df2af2cc958ef82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6625172926f2eb3f03eca631ac7a4b61f8aae332c315324f9df2af2cc958ef82->enter($__internal_6625172926f2eb3f03eca631ac7a4b61f8aae332c315324f9df2af2cc958ef82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9c3cadad1092f617f7ded43c5ba40ab6713c653ee611dac80d925cbedfcc9c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c3cadad1092f617f7ded43c5ba40ab6713c653ee611dac80d925cbedfcc9c34->enter($__internal_9c3cadad1092f617f7ded43c5ba40ab6713c653ee611dac80d925cbedfcc9c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9c3cadad1092f617f7ded43c5ba40ab6713c653ee611dac80d925cbedfcc9c34->leave($__internal_9c3cadad1092f617f7ded43c5ba40ab6713c653ee611dac80d925cbedfcc9c34_prof);

        
        $__internal_6625172926f2eb3f03eca631ac7a4b61f8aae332c315324f9df2af2cc958ef82->leave($__internal_6625172926f2eb3f03eca631ac7a4b61f8aae332c315324f9df2af2cc958ef82_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/Capa_dev/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
