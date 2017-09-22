<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_600ca249d4a6ba7cdee5e89e34e678b1897c9a8ce03239155e0215fd8862ac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10754fdd76c48caacc82c9a9e07126677d6ab1fec4b823243d38612ba62a5361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10754fdd76c48caacc82c9a9e07126677d6ab1fec4b823243d38612ba62a5361->enter($__internal_10754fdd76c48caacc82c9a9e07126677d6ab1fec4b823243d38612ba62a5361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_8521cb30d272ebfffd4e22f8d4fe871f4a0149ad814660b7a0e1a76939f85e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8521cb30d272ebfffd4e22f8d4fe871f4a0149ad814660b7a0e1a76939f85e21->enter($__internal_8521cb30d272ebfffd4e22f8d4fe871f4a0149ad814660b7a0e1a76939f85e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_10754fdd76c48caacc82c9a9e07126677d6ab1fec4b823243d38612ba62a5361->leave($__internal_10754fdd76c48caacc82c9a9e07126677d6ab1fec4b823243d38612ba62a5361_prof);

        
        $__internal_8521cb30d272ebfffd4e22f8d4fe871f4a0149ad814660b7a0e1a76939f85e21->leave($__internal_8521cb30d272ebfffd4e22f8d4fe871f4a0149ad814660b7a0e1a76939f85e21_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_607d13a59cb28745f86bbc374fbfb0f17d42de49611853c65f2b121deca9aadf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_607d13a59cb28745f86bbc374fbfb0f17d42de49611853c65f2b121deca9aadf->enter($__internal_607d13a59cb28745f86bbc374fbfb0f17d42de49611853c65f2b121deca9aadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_701f76cdf77aa1423e57610a7e72e98b4de19c236f69f2d7a087fc91fe358718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701f76cdf77aa1423e57610a7e72e98b4de19c236f69f2d7a087fc91fe358718->enter($__internal_701f76cdf77aa1423e57610a7e72e98b4de19c236f69f2d7a087fc91fe358718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_701f76cdf77aa1423e57610a7e72e98b4de19c236f69f2d7a087fc91fe358718->leave($__internal_701f76cdf77aa1423e57610a7e72e98b4de19c236f69f2d7a087fc91fe358718_prof);

        
        $__internal_607d13a59cb28745f86bbc374fbfb0f17d42de49611853c65f2b121deca9aadf->leave($__internal_607d13a59cb28745f86bbc374fbfb0f17d42de49611853c65f2b121deca9aadf_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_05b240a544364f02c2e78a16840303426f118e92d6ab9838aa9c8822e08b0bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b240a544364f02c2e78a16840303426f118e92d6ab9838aa9c8822e08b0bb4->enter($__internal_05b240a544364f02c2e78a16840303426f118e92d6ab9838aa9c8822e08b0bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e7a68528116f83c2e8d7458632445fcb714da045c0f83efe60be342e2ff75d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a68528116f83c2e8d7458632445fcb714da045c0f83efe60be342e2ff75d66->enter($__internal_e7a68528116f83c2e8d7458632445fcb714da045c0f83efe60be342e2ff75d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e7a68528116f83c2e8d7458632445fcb714da045c0f83efe60be342e2ff75d66->leave($__internal_e7a68528116f83c2e8d7458632445fcb714da045c0f83efe60be342e2ff75d66_prof);

        
        $__internal_05b240a544364f02c2e78a16840303426f118e92d6ab9838aa9c8822e08b0bb4->leave($__internal_05b240a544364f02c2e78a16840303426f118e92d6ab9838aa9c8822e08b0bb4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_749e2b7794196899b36cbf8f45b0207d26face7ad153d223c79933058332a5d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_749e2b7794196899b36cbf8f45b0207d26face7ad153d223c79933058332a5d5->enter($__internal_749e2b7794196899b36cbf8f45b0207d26face7ad153d223c79933058332a5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27b267f08f29e281ae772bb1b58cc6ae78d2eba803f97f1af72cb037afdd85bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b267f08f29e281ae772bb1b58cc6ae78d2eba803f97f1af72cb037afdd85bb->enter($__internal_27b267f08f29e281ae772bb1b58cc6ae78d2eba803f97f1af72cb037afdd85bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_27b267f08f29e281ae772bb1b58cc6ae78d2eba803f97f1af72cb037afdd85bb->leave($__internal_27b267f08f29e281ae772bb1b58cc6ae78d2eba803f97f1af72cb037afdd85bb_prof);

        
        $__internal_749e2b7794196899b36cbf8f45b0207d26face7ad153d223c79933058332a5d5->leave($__internal_749e2b7794196899b36cbf8f45b0207d26face7ad153d223c79933058332a5d5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
