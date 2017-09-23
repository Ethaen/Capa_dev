<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_71e9dcbef320040219a1db1e2fb8b698e8c8d462086ee2564e2982396dc53d5e extends Twig_Template
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
        $__internal_ea790fc77e39d02ecdc08f0e382e4cab65679be1f18160f6b7a31b7225d4c6cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea790fc77e39d02ecdc08f0e382e4cab65679be1f18160f6b7a31b7225d4c6cd->enter($__internal_ea790fc77e39d02ecdc08f0e382e4cab65679be1f18160f6b7a31b7225d4c6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_ab0d0c0c488396d6ef50b0f8c1db0dc425facb2c72713322da6b41168f4943d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0d0c0c488396d6ef50b0f8c1db0dc425facb2c72713322da6b41168f4943d6->enter($__internal_ab0d0c0c488396d6ef50b0f8c1db0dc425facb2c72713322da6b41168f4943d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_ea790fc77e39d02ecdc08f0e382e4cab65679be1f18160f6b7a31b7225d4c6cd->leave($__internal_ea790fc77e39d02ecdc08f0e382e4cab65679be1f18160f6b7a31b7225d4c6cd_prof);

        
        $__internal_ab0d0c0c488396d6ef50b0f8c1db0dc425facb2c72713322da6b41168f4943d6->leave($__internal_ab0d0c0c488396d6ef50b0f8c1db0dc425facb2c72713322da6b41168f4943d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
