<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_32933b0dfd2a5074f0eb9d22a082b4fab743a42f9d3929281de967e3f57ce89d extends Twig_Template
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
        $__internal_00a77ba06397fcd63a73b1343fd6b105c33a5b306e0749917f128187e13ccc6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00a77ba06397fcd63a73b1343fd6b105c33a5b306e0749917f128187e13ccc6f->enter($__internal_00a77ba06397fcd63a73b1343fd6b105c33a5b306e0749917f128187e13ccc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_197e474986eade3d3452e9d9fbb326df7db3e049bb8bc6ade71d431dece3f3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197e474986eade3d3452e9d9fbb326df7db3e049bb8bc6ade71d431dece3f3db->enter($__internal_197e474986eade3d3452e9d9fbb326df7db3e049bb8bc6ade71d431dece3f3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_00a77ba06397fcd63a73b1343fd6b105c33a5b306e0749917f128187e13ccc6f->leave($__internal_00a77ba06397fcd63a73b1343fd6b105c33a5b306e0749917f128187e13ccc6f_prof);

        
        $__internal_197e474986eade3d3452e9d9fbb326df7db3e049bb8bc6ade71d431dece3f3db->leave($__internal_197e474986eade3d3452e9d9fbb326df7db3e049bb8bc6ade71d431dece3f3db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
