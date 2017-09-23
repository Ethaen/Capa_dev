<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_c9bae5203b5f622841ee972dd404aabacc43f83c37f85914e94ff6cacd161c1e extends Twig_Template
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
        $__internal_67a091caf41172de8a426e59b06b286e6451a6b2edbf7972939df6788c6fe448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a091caf41172de8a426e59b06b286e6451a6b2edbf7972939df6788c6fe448->enter($__internal_67a091caf41172de8a426e59b06b286e6451a6b2edbf7972939df6788c6fe448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_2c822a7560187a5a09bb00c08c64106e5c7ed3cf879f7b2aacb04547480826f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c822a7560187a5a09bb00c08c64106e5c7ed3cf879f7b2aacb04547480826f2->enter($__internal_2c822a7560187a5a09bb00c08c64106e5c7ed3cf879f7b2aacb04547480826f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_67a091caf41172de8a426e59b06b286e6451a6b2edbf7972939df6788c6fe448->leave($__internal_67a091caf41172de8a426e59b06b286e6451a6b2edbf7972939df6788c6fe448_prof);

        
        $__internal_2c822a7560187a5a09bb00c08c64106e5c7ed3cf879f7b2aacb04547480826f2->leave($__internal_2c822a7560187a5a09bb00c08c64106e5c7ed3cf879f7b2aacb04547480826f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
