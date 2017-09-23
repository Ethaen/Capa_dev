<?php

/* TwigBundle::layout.html.twig */
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
        $__internal_360d11894c18fadb78e8765965b0bb484b76617f4da2b10c6630babb078e6191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_360d11894c18fadb78e8765965b0bb484b76617f4da2b10c6630babb078e6191->enter($__internal_360d11894c18fadb78e8765965b0bb484b76617f4da2b10c6630babb078e6191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_9d4eefbb424137a1328af5fa882bd79a8f47d3b266ce62996175dac55083b7fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4eefbb424137a1328af5fa882bd79a8f47d3b266ce62996175dac55083b7fc->enter($__internal_9d4eefbb424137a1328af5fa882bd79a8f47d3b266ce62996175dac55083b7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_360d11894c18fadb78e8765965b0bb484b76617f4da2b10c6630babb078e6191->leave($__internal_360d11894c18fadb78e8765965b0bb484b76617f4da2b10c6630babb078e6191_prof);

        
        $__internal_9d4eefbb424137a1328af5fa882bd79a8f47d3b266ce62996175dac55083b7fc->leave($__internal_9d4eefbb424137a1328af5fa882bd79a8f47d3b266ce62996175dac55083b7fc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_14818d299a73fd361d07c61071d48115ac92e2c803fb1b39b56375078f8a4ff5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14818d299a73fd361d07c61071d48115ac92e2c803fb1b39b56375078f8a4ff5->enter($__internal_14818d299a73fd361d07c61071d48115ac92e2c803fb1b39b56375078f8a4ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b693790489504f4f3b673812bc16b7a94c170340e8ae99fa4bc34470f4c969a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b693790489504f4f3b673812bc16b7a94c170340e8ae99fa4bc34470f4c969a->enter($__internal_2b693790489504f4f3b673812bc16b7a94c170340e8ae99fa4bc34470f4c969a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_2b693790489504f4f3b673812bc16b7a94c170340e8ae99fa4bc34470f4c969a->leave($__internal_2b693790489504f4f3b673812bc16b7a94c170340e8ae99fa4bc34470f4c969a_prof);

        
        $__internal_14818d299a73fd361d07c61071d48115ac92e2c803fb1b39b56375078f8a4ff5->leave($__internal_14818d299a73fd361d07c61071d48115ac92e2c803fb1b39b56375078f8a4ff5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bc04139578cab8233a1809beb375ad669b87a87e9ed5ce0e64800cca09bf07b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc04139578cab8233a1809beb375ad669b87a87e9ed5ce0e64800cca09bf07b->enter($__internal_9bc04139578cab8233a1809beb375ad669b87a87e9ed5ce0e64800cca09bf07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0bdd73e5dbe9ded1a8dc7622fa8a69a8b22938f9dbf39c54f355ad29ecd9a204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bdd73e5dbe9ded1a8dc7622fa8a69a8b22938f9dbf39c54f355ad29ecd9a204->enter($__internal_0bdd73e5dbe9ded1a8dc7622fa8a69a8b22938f9dbf39c54f355ad29ecd9a204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0bdd73e5dbe9ded1a8dc7622fa8a69a8b22938f9dbf39c54f355ad29ecd9a204->leave($__internal_0bdd73e5dbe9ded1a8dc7622fa8a69a8b22938f9dbf39c54f355ad29ecd9a204_prof);

        
        $__internal_9bc04139578cab8233a1809beb375ad669b87a87e9ed5ce0e64800cca09bf07b->leave($__internal_9bc04139578cab8233a1809beb375ad669b87a87e9ed5ce0e64800cca09bf07b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5b44e047581f31d974babebf596137ffde176c0f5129933d027caf73d1098dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b44e047581f31d974babebf596137ffde176c0f5129933d027caf73d1098dd->enter($__internal_f5b44e047581f31d974babebf596137ffde176c0f5129933d027caf73d1098dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_15e69cdf3840370f14f79ab83d22b9b01e62505b55b5d030c555b6d6fdefef22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e69cdf3840370f14f79ab83d22b9b01e62505b55b5d030c555b6d6fdefef22->enter($__internal_15e69cdf3840370f14f79ab83d22b9b01e62505b55b5d030c555b6d6fdefef22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_15e69cdf3840370f14f79ab83d22b9b01e62505b55b5d030c555b6d6fdefef22->leave($__internal_15e69cdf3840370f14f79ab83d22b9b01e62505b55b5d030c555b6d6fdefef22_prof);

        
        $__internal_f5b44e047581f31d974babebf596137ffde176c0f5129933d027caf73d1098dd->leave($__internal_f5b44e047581f31d974babebf596137ffde176c0f5129933d027caf73d1098dd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
