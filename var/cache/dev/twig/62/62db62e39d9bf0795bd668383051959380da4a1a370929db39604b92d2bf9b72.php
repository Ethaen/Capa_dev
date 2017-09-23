<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_701dcdd97d37dad2e87d66c4193097c3165f41f9a0e608fa8208817dd4d44b31 extends Twig_Template
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
        $__internal_df929f9ea2e112d80caefe10b46ca57eafdb26198cf8d3161595f43e48cdd4ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df929f9ea2e112d80caefe10b46ca57eafdb26198cf8d3161595f43e48cdd4ec->enter($__internal_df929f9ea2e112d80caefe10b46ca57eafdb26198cf8d3161595f43e48cdd4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_a17398116f587f55fa8d3e1f632f2b773f26a3b1108fc3bb718f9b310d39276d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a17398116f587f55fa8d3e1f632f2b773f26a3b1108fc3bb718f9b310d39276d->enter($__internal_a17398116f587f55fa8d3e1f632f2b773f26a3b1108fc3bb718f9b310d39276d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_df929f9ea2e112d80caefe10b46ca57eafdb26198cf8d3161595f43e48cdd4ec->leave($__internal_df929f9ea2e112d80caefe10b46ca57eafdb26198cf8d3161595f43e48cdd4ec_prof);

        
        $__internal_a17398116f587f55fa8d3e1f632f2b773f26a3b1108fc3bb718f9b310d39276d->leave($__internal_a17398116f587f55fa8d3e1f632f2b773f26a3b1108fc3bb718f9b310d39276d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
