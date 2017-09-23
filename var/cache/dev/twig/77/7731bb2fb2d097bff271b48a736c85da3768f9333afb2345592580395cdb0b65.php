<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_124d9dd75c929b55d18962f6bf938051c898074126861dbd40238066259d66b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2339e8ee6615c2d889915147c0f03e80e8711893a9f1d786662049ab8e229e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2339e8ee6615c2d889915147c0f03e80e8711893a9f1d786662049ab8e229e7->enter($__internal_b2339e8ee6615c2d889915147c0f03e80e8711893a9f1d786662049ab8e229e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_17889858657808d3d99d8697678be7a39b8ebb1370d28879b319fa0a607753b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17889858657808d3d99d8697678be7a39b8ebb1370d28879b319fa0a607753b4->enter($__internal_17889858657808d3d99d8697678be7a39b8ebb1370d28879b319fa0a607753b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_b2339e8ee6615c2d889915147c0f03e80e8711893a9f1d786662049ab8e229e7->leave($__internal_b2339e8ee6615c2d889915147c0f03e80e8711893a9f1d786662049ab8e229e7_prof);

        
        $__internal_17889858657808d3d99d8697678be7a39b8ebb1370d28879b319fa0a607753b4->leave($__internal_17889858657808d3d99d8697678be7a39b8ebb1370d28879b319fa0a607753b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
