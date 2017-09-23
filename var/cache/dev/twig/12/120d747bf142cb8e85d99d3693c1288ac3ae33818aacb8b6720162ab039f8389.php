<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2d53362d5fd36a3d30e2f56b1c274010097ef26b923f47ddb38f1001b86b65b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87a5db295543cc5df88b17b70fc10399a1967a0594cd9360c996ac01433ff28e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a5db295543cc5df88b17b70fc10399a1967a0594cd9360c996ac01433ff28e->enter($__internal_87a5db295543cc5df88b17b70fc10399a1967a0594cd9360c996ac01433ff28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_8f99973dea4e0d216d3b7e15a8322c71e4bf2f39c814cd5b8adefb129ee58c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f99973dea4e0d216d3b7e15a8322c71e4bf2f39c814cd5b8adefb129ee58c28->enter($__internal_8f99973dea4e0d216d3b7e15a8322c71e4bf2f39c814cd5b8adefb129ee58c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_87a5db295543cc5df88b17b70fc10399a1967a0594cd9360c996ac01433ff28e->leave($__internal_87a5db295543cc5df88b17b70fc10399a1967a0594cd9360c996ac01433ff28e_prof);

        
        $__internal_8f99973dea4e0d216d3b7e15a8322c71e4bf2f39c814cd5b8adefb129ee58c28->leave($__internal_8f99973dea4e0d216d3b7e15a8322c71e4bf2f39c814cd5b8adefb129ee58c28_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1688020e645ae6fb2d8103f04a91903778abe40a6308eabbc2dbba1193c1957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1688020e645ae6fb2d8103f04a91903778abe40a6308eabbc2dbba1193c1957->enter($__internal_a1688020e645ae6fb2d8103f04a91903778abe40a6308eabbc2dbba1193c1957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_903b4be9cd1ef8194462adb3a81c64495a73f98b9f837a52af768200cae879a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903b4be9cd1ef8194462adb3a81c64495a73f98b9f837a52af768200cae879a0->enter($__internal_903b4be9cd1ef8194462adb3a81c64495a73f98b9f837a52af768200cae879a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_903b4be9cd1ef8194462adb3a81c64495a73f98b9f837a52af768200cae879a0->leave($__internal_903b4be9cd1ef8194462adb3a81c64495a73f98b9f837a52af768200cae879a0_prof);

        
        $__internal_a1688020e645ae6fb2d8103f04a91903778abe40a6308eabbc2dbba1193c1957->leave($__internal_a1688020e645ae6fb2d8103f04a91903778abe40a6308eabbc2dbba1193c1957_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
