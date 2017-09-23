<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4f9909a415035f4bccd60bb0a8263e3a049212fe42f241cb915aa25a0456d71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f9909a415035f4bccd60bb0a8263e3a049212fe42f241cb915aa25a0456d71->enter($__internal_e4f9909a415035f4bccd60bb0a8263e3a049212fe42f241cb915aa25a0456d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ad3a30550af365125546844e710cbdb26c971a081141e8a282587843372e606c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3a30550af365125546844e710cbdb26c971a081141e8a282587843372e606c->enter($__internal_ad3a30550af365125546844e710cbdb26c971a081141e8a282587843372e606c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e4f9909a415035f4bccd60bb0a8263e3a049212fe42f241cb915aa25a0456d71->leave($__internal_e4f9909a415035f4bccd60bb0a8263e3a049212fe42f241cb915aa25a0456d71_prof);

        
        $__internal_ad3a30550af365125546844e710cbdb26c971a081141e8a282587843372e606c->leave($__internal_ad3a30550af365125546844e710cbdb26c971a081141e8a282587843372e606c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d59be992917f3a78c6ec1a05675f897c855440c834c7d7e48d66c73c3091ddff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59be992917f3a78c6ec1a05675f897c855440c834c7d7e48d66c73c3091ddff->enter($__internal_d59be992917f3a78c6ec1a05675f897c855440c834c7d7e48d66c73c3091ddff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11b7f1e6f3cdd4e9eea9648b7e7056a0c6fb7cb186993ce4d3ad8e3fcd482eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11b7f1e6f3cdd4e9eea9648b7e7056a0c6fb7cb186993ce4d3ad8e3fcd482eaa->enter($__internal_11b7f1e6f3cdd4e9eea9648b7e7056a0c6fb7cb186993ce4d3ad8e3fcd482eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_11b7f1e6f3cdd4e9eea9648b7e7056a0c6fb7cb186993ce4d3ad8e3fcd482eaa->leave($__internal_11b7f1e6f3cdd4e9eea9648b7e7056a0c6fb7cb186993ce4d3ad8e3fcd482eaa_prof);

        
        $__internal_d59be992917f3a78c6ec1a05675f897c855440c834c7d7e48d66c73c3091ddff->leave($__internal_d59be992917f3a78c6ec1a05675f897c855440c834c7d7e48d66c73c3091ddff_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_53f220d0b319aed3c026ab460af2a196ef698f4552c7c75f777a742d911102cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53f220d0b319aed3c026ab460af2a196ef698f4552c7c75f777a742d911102cb->enter($__internal_53f220d0b319aed3c026ab460af2a196ef698f4552c7c75f777a742d911102cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_20e8dfe43f29261ff02f0d1623038c7ae47657bb3289918779595edc4f698560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e8dfe43f29261ff02f0d1623038c7ae47657bb3289918779595edc4f698560->enter($__internal_20e8dfe43f29261ff02f0d1623038c7ae47657bb3289918779595edc4f698560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_20e8dfe43f29261ff02f0d1623038c7ae47657bb3289918779595edc4f698560->leave($__internal_20e8dfe43f29261ff02f0d1623038c7ae47657bb3289918779595edc4f698560_prof);

        
        $__internal_53f220d0b319aed3c026ab460af2a196ef698f4552c7c75f777a742d911102cb->leave($__internal_53f220d0b319aed3c026ab460af2a196ef698f4552c7c75f777a742d911102cb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c0eb8d9e041a6c8a7648dede00ddc8304d6a62edd4a4ab6dd3b820c22e83ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c0eb8d9e041a6c8a7648dede00ddc8304d6a62edd4a4ab6dd3b820c22e83ce9->enter($__internal_0c0eb8d9e041a6c8a7648dede00ddc8304d6a62edd4a4ab6dd3b820c22e83ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_002365232db190604b2f120bdd79eefb378c16d3878b51e426f1c1ad066ecda9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_002365232db190604b2f120bdd79eefb378c16d3878b51e426f1c1ad066ecda9->enter($__internal_002365232db190604b2f120bdd79eefb378c16d3878b51e426f1c1ad066ecda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_002365232db190604b2f120bdd79eefb378c16d3878b51e426f1c1ad066ecda9->leave($__internal_002365232db190604b2f120bdd79eefb378c16d3878b51e426f1c1ad066ecda9_prof);

        
        $__internal_0c0eb8d9e041a6c8a7648dede00ddc8304d6a62edd4a4ab6dd3b820c22e83ce9->leave($__internal_0c0eb8d9e041a6c8a7648dede00ddc8304d6a62edd4a4ab6dd3b820c22e83ce9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c0d697e7c80b72f8810c6ba3dfb2dcfaeceb262f9b0d555e928c0a4ed23d4d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0d697e7c80b72f8810c6ba3dfb2dcfaeceb262f9b0d555e928c0a4ed23d4d0a->enter($__internal_c0d697e7c80b72f8810c6ba3dfb2dcfaeceb262f9b0d555e928c0a4ed23d4d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c3d8b0f6c51da694143f8f7706cf144fb58d8776693ad7ab39e59bbc5689ee05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d8b0f6c51da694143f8f7706cf144fb58d8776693ad7ab39e59bbc5689ee05->enter($__internal_c3d8b0f6c51da694143f8f7706cf144fb58d8776693ad7ab39e59bbc5689ee05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c3d8b0f6c51da694143f8f7706cf144fb58d8776693ad7ab39e59bbc5689ee05->leave($__internal_c3d8b0f6c51da694143f8f7706cf144fb58d8776693ad7ab39e59bbc5689ee05_prof);

        
        $__internal_c0d697e7c80b72f8810c6ba3dfb2dcfaeceb262f9b0d555e928c0a4ed23d4d0a->leave($__internal_c0d697e7c80b72f8810c6ba3dfb2dcfaeceb262f9b0d555e928c0a4ed23d4d0a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Capa_dev/app/Resources/views/base.html.twig");
    }
}
