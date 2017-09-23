<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_8cf4ee99b467970b4e888fd93f7769d1f846b4d6133688821280d0a0701d7f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_aa4a22db9c0b982092594fbf1a13deb232a965e3bfb6c524e90556ef4c3681a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa4a22db9c0b982092594fbf1a13deb232a965e3bfb6c524e90556ef4c3681a4->enter($__internal_aa4a22db9c0b982092594fbf1a13deb232a965e3bfb6c524e90556ef4c3681a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_ecb9316781859afd48e890a587feeadad70a6d66c472d473738533b27317e9e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb9316781859afd48e890a587feeadad70a6d66c472d473738533b27317e9e3->enter($__internal_ecb9316781859afd48e890a587feeadad70a6d66c472d473738533b27317e9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa4a22db9c0b982092594fbf1a13deb232a965e3bfb6c524e90556ef4c3681a4->leave($__internal_aa4a22db9c0b982092594fbf1a13deb232a965e3bfb6c524e90556ef4c3681a4_prof);

        
        $__internal_ecb9316781859afd48e890a587feeadad70a6d66c472d473738533b27317e9e3->leave($__internal_ecb9316781859afd48e890a587feeadad70a6d66c472d473738533b27317e9e3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc5a1d5e4c7769e5ad27f685196e6a71b345cbbbeba5b074ca6f81090fa09350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc5a1d5e4c7769e5ad27f685196e6a71b345cbbbeba5b074ca6f81090fa09350->enter($__internal_dc5a1d5e4c7769e5ad27f685196e6a71b345cbbbeba5b074ca6f81090fa09350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_024fcda6bcb0cd413902c89b165deb654d46b335dd38f2fe117d4206c0b7d5b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_024fcda6bcb0cd413902c89b165deb654d46b335dd38f2fe117d4206c0b7d5b6->enter($__internal_024fcda6bcb0cd413902c89b165deb654d46b335dd38f2fe117d4206c0b7d5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_024fcda6bcb0cd413902c89b165deb654d46b335dd38f2fe117d4206c0b7d5b6->leave($__internal_024fcda6bcb0cd413902c89b165deb654d46b335dd38f2fe117d4206c0b7d5b6_prof);

        
        $__internal_dc5a1d5e4c7769e5ad27f685196e6a71b345cbbbeba5b074ca6f81090fa09350->leave($__internal_dc5a1d5e4c7769e5ad27f685196e6a71b345cbbbeba5b074ca6f81090fa09350_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/Capa_dev/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
