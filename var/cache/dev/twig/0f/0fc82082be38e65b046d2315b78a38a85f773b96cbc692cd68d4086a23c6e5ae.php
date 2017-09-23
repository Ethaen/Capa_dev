<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_8cd5dabb7cddbd7f59e9a5b25cf09cec64bc1b5497841330beb92929706f1da8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_f27309ebde5f07a772fa3ba0d7958b3cc4856f4d28a200657f2c805b4c340d20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27309ebde5f07a772fa3ba0d7958b3cc4856f4d28a200657f2c805b4c340d20->enter($__internal_f27309ebde5f07a772fa3ba0d7958b3cc4856f4d28a200657f2c805b4c340d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_8f48eaf4975640ac195e1eadc76d94cb14097bffd4844f3e0d0f30e8b18a23b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f48eaf4975640ac195e1eadc76d94cb14097bffd4844f3e0d0f30e8b18a23b8->enter($__internal_8f48eaf4975640ac195e1eadc76d94cb14097bffd4844f3e0d0f30e8b18a23b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f27309ebde5f07a772fa3ba0d7958b3cc4856f4d28a200657f2c805b4c340d20->leave($__internal_f27309ebde5f07a772fa3ba0d7958b3cc4856f4d28a200657f2c805b4c340d20_prof);

        
        $__internal_8f48eaf4975640ac195e1eadc76d94cb14097bffd4844f3e0d0f30e8b18a23b8->leave($__internal_8f48eaf4975640ac195e1eadc76d94cb14097bffd4844f3e0d0f30e8b18a23b8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc832fd3070a794a432f1756962c3ffb661121a62d862927d3af79b8284a13eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc832fd3070a794a432f1756962c3ffb661121a62d862927d3af79b8284a13eb->enter($__internal_bc832fd3070a794a432f1756962c3ffb661121a62d862927d3af79b8284a13eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_41f23d361235fef72d41c3f068a5121e45767cb07e7fd11dce6734b1bfaed185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f23d361235fef72d41c3f068a5121e45767cb07e7fd11dce6734b1bfaed185->enter($__internal_41f23d361235fef72d41c3f068a5121e45767cb07e7fd11dce6734b1bfaed185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_41f23d361235fef72d41c3f068a5121e45767cb07e7fd11dce6734b1bfaed185->leave($__internal_41f23d361235fef72d41c3f068a5121e45767cb07e7fd11dce6734b1bfaed185_prof);

        
        $__internal_bc832fd3070a794a432f1756962c3ffb661121a62d862927d3af79b8284a13eb->leave($__internal_bc832fd3070a794a432f1756962c3ffb661121a62d862927d3af79b8284a13eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/Capa_dev/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
