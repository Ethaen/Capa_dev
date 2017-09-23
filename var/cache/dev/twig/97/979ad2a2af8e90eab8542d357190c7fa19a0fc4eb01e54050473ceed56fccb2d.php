<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_273cee18401e8a5901317d10a7dc788bd2884c50b01d2a5e78fa1c5587033ef0 extends Twig_Template
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
        $__internal_2342a9af4b0b8e80324440ad7b1e4fe6d49a378832790fa89a7a93cff834ac01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2342a9af4b0b8e80324440ad7b1e4fe6d49a378832790fa89a7a93cff834ac01->enter($__internal_2342a9af4b0b8e80324440ad7b1e4fe6d49a378832790fa89a7a93cff834ac01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_635618bb67f4302e4c2718af62a86d934feb4d8ddc77656f5d9869818cac5529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635618bb67f4302e4c2718af62a86d934feb4d8ddc77656f5d9869818cac5529->enter($__internal_635618bb67f4302e4c2718af62a86d934feb4d8ddc77656f5d9869818cac5529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2342a9af4b0b8e80324440ad7b1e4fe6d49a378832790fa89a7a93cff834ac01->leave($__internal_2342a9af4b0b8e80324440ad7b1e4fe6d49a378832790fa89a7a93cff834ac01_prof);

        
        $__internal_635618bb67f4302e4c2718af62a86d934feb4d8ddc77656f5d9869818cac5529->leave($__internal_635618bb67f4302e4c2718af62a86d934feb4d8ddc77656f5d9869818cac5529_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
