<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d78503504fb6b096f928955d266daa015d957a8b58d47e03bfb63bdce6b1203b extends Twig_Template
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
        $__internal_f87c18b1c353192ffa4ddc8c7e839d17111744d6d20532491fd4b60fa0ae2390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f87c18b1c353192ffa4ddc8c7e839d17111744d6d20532491fd4b60fa0ae2390->enter($__internal_f87c18b1c353192ffa4ddc8c7e839d17111744d6d20532491fd4b60fa0ae2390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0cd496af5a701db16752419b00f81d05b9bde6168602517d1bfe1fed8b7f18d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cd496af5a701db16752419b00f81d05b9bde6168602517d1bfe1fed8b7f18d4->enter($__internal_0cd496af5a701db16752419b00f81d05b9bde6168602517d1bfe1fed8b7f18d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f87c18b1c353192ffa4ddc8c7e839d17111744d6d20532491fd4b60fa0ae2390->leave($__internal_f87c18b1c353192ffa4ddc8c7e839d17111744d6d20532491fd4b60fa0ae2390_prof);

        
        $__internal_0cd496af5a701db16752419b00f81d05b9bde6168602517d1bfe1fed8b7f18d4->leave($__internal_0cd496af5a701db16752419b00f81d05b9bde6168602517d1bfe1fed8b7f18d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
