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
        $__internal_78238ad670a86f31eecff3ae9f519ee15464fcd36d40a65240975c7aad2f2ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78238ad670a86f31eecff3ae9f519ee15464fcd36d40a65240975c7aad2f2ec1->enter($__internal_78238ad670a86f31eecff3ae9f519ee15464fcd36d40a65240975c7aad2f2ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c45fc84e5d5c2d93b2652c9c58dbc5d9490f59701e3b3c607fad77074264d954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45fc84e5d5c2d93b2652c9c58dbc5d9490f59701e3b3c607fad77074264d954->enter($__internal_c45fc84e5d5c2d93b2652c9c58dbc5d9490f59701e3b3c607fad77074264d954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_78238ad670a86f31eecff3ae9f519ee15464fcd36d40a65240975c7aad2f2ec1->leave($__internal_78238ad670a86f31eecff3ae9f519ee15464fcd36d40a65240975c7aad2f2ec1_prof);

        
        $__internal_c45fc84e5d5c2d93b2652c9c58dbc5d9490f59701e3b3c607fad77074264d954->leave($__internal_c45fc84e5d5c2d93b2652c9c58dbc5d9490f59701e3b3c607fad77074264d954_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_342f1bf3ae13e50dda8afb59b183d04d58b52bbe1a6f988ec000242a823a69a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342f1bf3ae13e50dda8afb59b183d04d58b52bbe1a6f988ec000242a823a69a4->enter($__internal_342f1bf3ae13e50dda8afb59b183d04d58b52bbe1a6f988ec000242a823a69a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1fc4b15cd453cfbba0a73887f9e969035a13d2bcb38cd0072dfb306e2f064457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc4b15cd453cfbba0a73887f9e969035a13d2bcb38cd0072dfb306e2f064457->enter($__internal_1fc4b15cd453cfbba0a73887f9e969035a13d2bcb38cd0072dfb306e2f064457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1fc4b15cd453cfbba0a73887f9e969035a13d2bcb38cd0072dfb306e2f064457->leave($__internal_1fc4b15cd453cfbba0a73887f9e969035a13d2bcb38cd0072dfb306e2f064457_prof);

        
        $__internal_342f1bf3ae13e50dda8afb59b183d04d58b52bbe1a6f988ec000242a823a69a4->leave($__internal_342f1bf3ae13e50dda8afb59b183d04d58b52bbe1a6f988ec000242a823a69a4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d2e3962637d0cbddb2c7f33963ebb5fbe75e764f308ad738107495cf6b8e232b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2e3962637d0cbddb2c7f33963ebb5fbe75e764f308ad738107495cf6b8e232b->enter($__internal_d2e3962637d0cbddb2c7f33963ebb5fbe75e764f308ad738107495cf6b8e232b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f377f968a3bbc94e8d9df0ca886dfe5f3f1e5b3cfb66a6671dd1f4b905bc8be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f377f968a3bbc94e8d9df0ca886dfe5f3f1e5b3cfb66a6671dd1f4b905bc8be3->enter($__internal_f377f968a3bbc94e8d9df0ca886dfe5f3f1e5b3cfb66a6671dd1f4b905bc8be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f377f968a3bbc94e8d9df0ca886dfe5f3f1e5b3cfb66a6671dd1f4b905bc8be3->leave($__internal_f377f968a3bbc94e8d9df0ca886dfe5f3f1e5b3cfb66a6671dd1f4b905bc8be3_prof);

        
        $__internal_d2e3962637d0cbddb2c7f33963ebb5fbe75e764f308ad738107495cf6b8e232b->leave($__internal_d2e3962637d0cbddb2c7f33963ebb5fbe75e764f308ad738107495cf6b8e232b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a8b3291725c8f0e845eae3e6a39c70214b680f1cd70cf9294a2075b0a74d9b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8b3291725c8f0e845eae3e6a39c70214b680f1cd70cf9294a2075b0a74d9b1->enter($__internal_5a8b3291725c8f0e845eae3e6a39c70214b680f1cd70cf9294a2075b0a74d9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e36de383da3360a57e10dac3ead3101ba81faab8228bc1dbdc5f79f9585b46e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e36de383da3360a57e10dac3ead3101ba81faab8228bc1dbdc5f79f9585b46e0->enter($__internal_e36de383da3360a57e10dac3ead3101ba81faab8228bc1dbdc5f79f9585b46e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e36de383da3360a57e10dac3ead3101ba81faab8228bc1dbdc5f79f9585b46e0->leave($__internal_e36de383da3360a57e10dac3ead3101ba81faab8228bc1dbdc5f79f9585b46e0_prof);

        
        $__internal_5a8b3291725c8f0e845eae3e6a39c70214b680f1cd70cf9294a2075b0a74d9b1->leave($__internal_5a8b3291725c8f0e845eae3e6a39c70214b680f1cd70cf9294a2075b0a74d9b1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_119f337c697c4c8e9b494fc1fed2b050f87991804be1bad00e9c74d3a9853e5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_119f337c697c4c8e9b494fc1fed2b050f87991804be1bad00e9c74d3a9853e5d->enter($__internal_119f337c697c4c8e9b494fc1fed2b050f87991804be1bad00e9c74d3a9853e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a06fffc8fe9d7be9358c9811f23e2cbd5242710427873203450f9cde135d4728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a06fffc8fe9d7be9358c9811f23e2cbd5242710427873203450f9cde135d4728->enter($__internal_a06fffc8fe9d7be9358c9811f23e2cbd5242710427873203450f9cde135d4728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a06fffc8fe9d7be9358c9811f23e2cbd5242710427873203450f9cde135d4728->leave($__internal_a06fffc8fe9d7be9358c9811f23e2cbd5242710427873203450f9cde135d4728_prof);

        
        $__internal_119f337c697c4c8e9b494fc1fed2b050f87991804be1bad00e9c74d3a9853e5d->leave($__internal_119f337c697c4c8e9b494fc1fed2b050f87991804be1bad00e9c74d3a9853e5d_prof);

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
