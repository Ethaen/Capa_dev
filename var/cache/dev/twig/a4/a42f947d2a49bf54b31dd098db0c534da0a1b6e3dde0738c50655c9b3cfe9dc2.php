<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0946aa9808eb3669f4271ee15f43e945b9013509a84b464884d1fbc4440d7f5d extends Twig_Template
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
        $__internal_67f4ab09b315df1f59f6053096925810c0f89bdd14b88febe8f1e911a9da3930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f4ab09b315df1f59f6053096925810c0f89bdd14b88febe8f1e911a9da3930->enter($__internal_67f4ab09b315df1f59f6053096925810c0f89bdd14b88febe8f1e911a9da3930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f3eec1b390e87cadebedc38b99cf68f6ca8a23cd09bebc0ba16236562b9f6a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3eec1b390e87cadebedc38b99cf68f6ca8a23cd09bebc0ba16236562b9f6a02->enter($__internal_f3eec1b390e87cadebedc38b99cf68f6ca8a23cd09bebc0ba16236562b9f6a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_67f4ab09b315df1f59f6053096925810c0f89bdd14b88febe8f1e911a9da3930->leave($__internal_67f4ab09b315df1f59f6053096925810c0f89bdd14b88febe8f1e911a9da3930_prof);

        
        $__internal_f3eec1b390e87cadebedc38b99cf68f6ca8a23cd09bebc0ba16236562b9f6a02->leave($__internal_f3eec1b390e87cadebedc38b99cf68f6ca8a23cd09bebc0ba16236562b9f6a02_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
