<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_955cc17dfa719928ac111330d7ce96faccd6f0e26aba2e98b93882afbcaf683f extends Twig_Template
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
        $__internal_c25a5f099c71d075030ad2d7024c8007c574fd3e809451d3159c8de73f87ba31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25a5f099c71d075030ad2d7024c8007c574fd3e809451d3159c8de73f87ba31->enter($__internal_c25a5f099c71d075030ad2d7024c8007c574fd3e809451d3159c8de73f87ba31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_246c37fcafa1e8912f51c64e626ff9e97d6228c9a0b5d12d8050b4f0d580c384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246c37fcafa1e8912f51c64e626ff9e97d6228c9a0b5d12d8050b4f0d580c384->enter($__internal_246c37fcafa1e8912f51c64e626ff9e97d6228c9a0b5d12d8050b4f0d580c384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c25a5f099c71d075030ad2d7024c8007c574fd3e809451d3159c8de73f87ba31->leave($__internal_c25a5f099c71d075030ad2d7024c8007c574fd3e809451d3159c8de73f87ba31_prof);

        
        $__internal_246c37fcafa1e8912f51c64e626ff9e97d6228c9a0b5d12d8050b4f0d580c384->leave($__internal_246c37fcafa1e8912f51c64e626ff9e97d6228c9a0b5d12d8050b4f0d580c384_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
