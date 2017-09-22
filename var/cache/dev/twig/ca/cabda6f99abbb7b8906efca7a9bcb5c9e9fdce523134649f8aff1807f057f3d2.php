<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cf7706c416b3cd469acab90c3254bc1c3067848e1cba22ce48f7f6bcc68a10f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b46d11ddabdbd989bf1c1eae585dbd2bee5d53cb11403da1be1bbf30351fbb7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b46d11ddabdbd989bf1c1eae585dbd2bee5d53cb11403da1be1bbf30351fbb7c->enter($__internal_b46d11ddabdbd989bf1c1eae585dbd2bee5d53cb11403da1be1bbf30351fbb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_cfd38b0ae038cbd238e90ae14711c4d929ff5cadb9e7248ecc387056fdfd8c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd38b0ae038cbd238e90ae14711c4d929ff5cadb9e7248ecc387056fdfd8c5f->enter($__internal_cfd38b0ae038cbd238e90ae14711c4d929ff5cadb9e7248ecc387056fdfd8c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b46d11ddabdbd989bf1c1eae585dbd2bee5d53cb11403da1be1bbf30351fbb7c->leave($__internal_b46d11ddabdbd989bf1c1eae585dbd2bee5d53cb11403da1be1bbf30351fbb7c_prof);

        
        $__internal_cfd38b0ae038cbd238e90ae14711c4d929ff5cadb9e7248ecc387056fdfd8c5f->leave($__internal_cfd38b0ae038cbd238e90ae14711c4d929ff5cadb9e7248ecc387056fdfd8c5f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d7e76e42ba3ee8ec76ed358c7bb9f5bad5023501aefd447176e8ccb0ef40bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7e76e42ba3ee8ec76ed358c7bb9f5bad5023501aefd447176e8ccb0ef40bbd->enter($__internal_5d7e76e42ba3ee8ec76ed358c7bb9f5bad5023501aefd447176e8ccb0ef40bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_eabaf8237c05e7f07db452e9de538a46ffa418d8af05932869afaa1a33a918da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eabaf8237c05e7f07db452e9de538a46ffa418d8af05932869afaa1a33a918da->enter($__internal_eabaf8237c05e7f07db452e9de538a46ffa418d8af05932869afaa1a33a918da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_eabaf8237c05e7f07db452e9de538a46ffa418d8af05932869afaa1a33a918da->leave($__internal_eabaf8237c05e7f07db452e9de538a46ffa418d8af05932869afaa1a33a918da_prof);

        
        $__internal_5d7e76e42ba3ee8ec76ed358c7bb9f5bad5023501aefd447176e8ccb0ef40bbd->leave($__internal_5d7e76e42ba3ee8ec76ed358c7bb9f5bad5023501aefd447176e8ccb0ef40bbd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6180e43f5f3a8e07a0ccad12287581c38d4e8fdab34a32bafb2045685323276a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6180e43f5f3a8e07a0ccad12287581c38d4e8fdab34a32bafb2045685323276a->enter($__internal_6180e43f5f3a8e07a0ccad12287581c38d4e8fdab34a32bafb2045685323276a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4a7ce3dacbf037f4b5058513ea01ad93a328d411c1aa8605ae27cff0238b1302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7ce3dacbf037f4b5058513ea01ad93a328d411c1aa8605ae27cff0238b1302->enter($__internal_4a7ce3dacbf037f4b5058513ea01ad93a328d411c1aa8605ae27cff0238b1302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4a7ce3dacbf037f4b5058513ea01ad93a328d411c1aa8605ae27cff0238b1302->leave($__internal_4a7ce3dacbf037f4b5058513ea01ad93a328d411c1aa8605ae27cff0238b1302_prof);

        
        $__internal_6180e43f5f3a8e07a0ccad12287581c38d4e8fdab34a32bafb2045685323276a->leave($__internal_6180e43f5f3a8e07a0ccad12287581c38d4e8fdab34a32bafb2045685323276a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_eeaa119af93b1df647adbc4d800f707079583588c11f8cd41028a33ae70e42e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeaa119af93b1df647adbc4d800f707079583588c11f8cd41028a33ae70e42e8->enter($__internal_eeaa119af93b1df647adbc4d800f707079583588c11f8cd41028a33ae70e42e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd98ea60beb8c3f71c2325b4ac62faf0aacf32b27d21bdff42141d5a068e79d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd98ea60beb8c3f71c2325b4ac62faf0aacf32b27d21bdff42141d5a068e79d5->enter($__internal_fd98ea60beb8c3f71c2325b4ac62faf0aacf32b27d21bdff42141d5a068e79d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_fd98ea60beb8c3f71c2325b4ac62faf0aacf32b27d21bdff42141d5a068e79d5->leave($__internal_fd98ea60beb8c3f71c2325b4ac62faf0aacf32b27d21bdff42141d5a068e79d5_prof);

        
        $__internal_eeaa119af93b1df647adbc4d800f707079583588c11f8cd41028a33ae70e42e8->leave($__internal_eeaa119af93b1df647adbc4d800f707079583588c11f8cd41028a33ae70e42e8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
