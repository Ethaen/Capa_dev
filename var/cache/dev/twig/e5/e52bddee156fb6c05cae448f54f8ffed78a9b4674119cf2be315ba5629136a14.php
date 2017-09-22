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
        $__internal_fa019265c7914061539dadef1d0170b2183db6482d56065ba47b34e5b890e76a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa019265c7914061539dadef1d0170b2183db6482d56065ba47b34e5b890e76a->enter($__internal_fa019265c7914061539dadef1d0170b2183db6482d56065ba47b34e5b890e76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7d20afee7a9e72aec4892df195cecbc2f05cee4e76a132f0b9f254ab6e0211e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d20afee7a9e72aec4892df195cecbc2f05cee4e76a132f0b9f254ab6e0211e1->enter($__internal_7d20afee7a9e72aec4892df195cecbc2f05cee4e76a132f0b9f254ab6e0211e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_fa019265c7914061539dadef1d0170b2183db6482d56065ba47b34e5b890e76a->leave($__internal_fa019265c7914061539dadef1d0170b2183db6482d56065ba47b34e5b890e76a_prof);

        
        $__internal_7d20afee7a9e72aec4892df195cecbc2f05cee4e76a132f0b9f254ab6e0211e1->leave($__internal_7d20afee7a9e72aec4892df195cecbc2f05cee4e76a132f0b9f254ab6e0211e1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ec693ee85e29e25f3a54e52f3ca4a7792e84ed5b4a8d042fc6ba8459d4191f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec693ee85e29e25f3a54e52f3ca4a7792e84ed5b4a8d042fc6ba8459d4191f8->enter($__internal_3ec693ee85e29e25f3a54e52f3ca4a7792e84ed5b4a8d042fc6ba8459d4191f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_549c1eeb1fec578775cbb642c3eed7c9b7735c4bf431baba3ed6860be2d58852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549c1eeb1fec578775cbb642c3eed7c9b7735c4bf431baba3ed6860be2d58852->enter($__internal_549c1eeb1fec578775cbb642c3eed7c9b7735c4bf431baba3ed6860be2d58852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_549c1eeb1fec578775cbb642c3eed7c9b7735c4bf431baba3ed6860be2d58852->leave($__internal_549c1eeb1fec578775cbb642c3eed7c9b7735c4bf431baba3ed6860be2d58852_prof);

        
        $__internal_3ec693ee85e29e25f3a54e52f3ca4a7792e84ed5b4a8d042fc6ba8459d4191f8->leave($__internal_3ec693ee85e29e25f3a54e52f3ca4a7792e84ed5b4a8d042fc6ba8459d4191f8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5445b37a471c8069aac92bdf633664aaa10800f77c564ae31c75602577f3d244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5445b37a471c8069aac92bdf633664aaa10800f77c564ae31c75602577f3d244->enter($__internal_5445b37a471c8069aac92bdf633664aaa10800f77c564ae31c75602577f3d244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_290cab3d746bfcfd9fb1b99a15cbbc444f3dd65dbf8f98a6bd7664ca23da726f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_290cab3d746bfcfd9fb1b99a15cbbc444f3dd65dbf8f98a6bd7664ca23da726f->enter($__internal_290cab3d746bfcfd9fb1b99a15cbbc444f3dd65dbf8f98a6bd7664ca23da726f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_290cab3d746bfcfd9fb1b99a15cbbc444f3dd65dbf8f98a6bd7664ca23da726f->leave($__internal_290cab3d746bfcfd9fb1b99a15cbbc444f3dd65dbf8f98a6bd7664ca23da726f_prof);

        
        $__internal_5445b37a471c8069aac92bdf633664aaa10800f77c564ae31c75602577f3d244->leave($__internal_5445b37a471c8069aac92bdf633664aaa10800f77c564ae31c75602577f3d244_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b9b92b02d3d859191697e018ba19385de4263aa58f8f8a1949bb98b83dd9d5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b9b92b02d3d859191697e018ba19385de4263aa58f8f8a1949bb98b83dd9d5e->enter($__internal_6b9b92b02d3d859191697e018ba19385de4263aa58f8f8a1949bb98b83dd9d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6b671d64f27be17642847ee372d01c4660fb059b42e15874d3289770b485377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b671d64f27be17642847ee372d01c4660fb059b42e15874d3289770b485377->enter($__internal_a6b671d64f27be17642847ee372d01c4660fb059b42e15874d3289770b485377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a6b671d64f27be17642847ee372d01c4660fb059b42e15874d3289770b485377->leave($__internal_a6b671d64f27be17642847ee372d01c4660fb059b42e15874d3289770b485377_prof);

        
        $__internal_6b9b92b02d3d859191697e018ba19385de4263aa58f8f8a1949bb98b83dd9d5e->leave($__internal_6b9b92b02d3d859191697e018ba19385de4263aa58f8f8a1949bb98b83dd9d5e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9b61ae0b7509b6467e47a813839b2d5068055616c63f3f8d7fa24c6fd0ebf5f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b61ae0b7509b6467e47a813839b2d5068055616c63f3f8d7fa24c6fd0ebf5f1->enter($__internal_9b61ae0b7509b6467e47a813839b2d5068055616c63f3f8d7fa24c6fd0ebf5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_459674c7462e7335343633c58c2012cddfddaa5bedc204e306d1b5627e2e4eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459674c7462e7335343633c58c2012cddfddaa5bedc204e306d1b5627e2e4eb5->enter($__internal_459674c7462e7335343633c58c2012cddfddaa5bedc204e306d1b5627e2e4eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_459674c7462e7335343633c58c2012cddfddaa5bedc204e306d1b5627e2e4eb5->leave($__internal_459674c7462e7335343633c58c2012cddfddaa5bedc204e306d1b5627e2e4eb5_prof);

        
        $__internal_9b61ae0b7509b6467e47a813839b2d5068055616c63f3f8d7fa24c6fd0ebf5f1->leave($__internal_9b61ae0b7509b6467e47a813839b2d5068055616c63f3f8d7fa24c6fd0ebf5f1_prof);

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
