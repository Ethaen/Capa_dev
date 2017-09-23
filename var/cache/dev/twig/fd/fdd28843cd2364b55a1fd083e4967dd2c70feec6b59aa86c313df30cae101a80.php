<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_9a2149ac2c040d3388c79b803fca7cd9813f0477c1f0d35ecd25f1f3a45af415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_c9fff6e7870e2ff56e1fc614c84ddce4f8ecc2adbedd35fc7abcf8e54e22bb71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9fff6e7870e2ff56e1fc614c84ddce4f8ecc2adbedd35fc7abcf8e54e22bb71->enter($__internal_c9fff6e7870e2ff56e1fc614c84ddce4f8ecc2adbedd35fc7abcf8e54e22bb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_2a56b998c1e26dd8f23a391ba8fd26e16c1d12eec491d5355f305b65f240ece7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a56b998c1e26dd8f23a391ba8fd26e16c1d12eec491d5355f305b65f240ece7->enter($__internal_2a56b998c1e26dd8f23a391ba8fd26e16c1d12eec491d5355f305b65f240ece7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9fff6e7870e2ff56e1fc614c84ddce4f8ecc2adbedd35fc7abcf8e54e22bb71->leave($__internal_c9fff6e7870e2ff56e1fc614c84ddce4f8ecc2adbedd35fc7abcf8e54e22bb71_prof);

        
        $__internal_2a56b998c1e26dd8f23a391ba8fd26e16c1d12eec491d5355f305b65f240ece7->leave($__internal_2a56b998c1e26dd8f23a391ba8fd26e16c1d12eec491d5355f305b65f240ece7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2ecf537a3bd89d181d33ef0741cd33e41551b9a7a5814abd23540b90c0ae9ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ecf537a3bd89d181d33ef0741cd33e41551b9a7a5814abd23540b90c0ae9ba->enter($__internal_d2ecf537a3bd89d181d33ef0741cd33e41551b9a7a5814abd23540b90c0ae9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8eda1045d0696e3c79fa821b3374b0b2fb8502f1a59b36b94780933b6458e1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eda1045d0696e3c79fa821b3374b0b2fb8502f1a59b36b94780933b6458e1b1->enter($__internal_8eda1045d0696e3c79fa821b3374b0b2fb8502f1a59b36b94780933b6458e1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_8eda1045d0696e3c79fa821b3374b0b2fb8502f1a59b36b94780933b6458e1b1->leave($__internal_8eda1045d0696e3c79fa821b3374b0b2fb8502f1a59b36b94780933b6458e1b1_prof);

        
        $__internal_d2ecf537a3bd89d181d33ef0741cd33e41551b9a7a5814abd23540b90c0ae9ba->leave($__internal_d2ecf537a3bd89d181d33ef0741cd33e41551b9a7a5814abd23540b90c0ae9ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/Capa_dev/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
