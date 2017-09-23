<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e4c16c19f8f2434e75928f1a7ab60aa30c50591555f8553767133b1a1101f476 extends Twig_Template
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
        $__internal_6645ee016be199a70e949b9175bd6e8a0aac5fda8a7030c8c8c9e91ac4d1cb41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6645ee016be199a70e949b9175bd6e8a0aac5fda8a7030c8c8c9e91ac4d1cb41->enter($__internal_6645ee016be199a70e949b9175bd6e8a0aac5fda8a7030c8c8c9e91ac4d1cb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_91659f671edc2219cfdc897d7404040054272f733b105d8f4028489346a10328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91659f671edc2219cfdc897d7404040054272f733b105d8f4028489346a10328->enter($__internal_91659f671edc2219cfdc897d7404040054272f733b105d8f4028489346a10328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_6645ee016be199a70e949b9175bd6e8a0aac5fda8a7030c8c8c9e91ac4d1cb41->leave($__internal_6645ee016be199a70e949b9175bd6e8a0aac5fda8a7030c8c8c9e91ac4d1cb41_prof);

        
        $__internal_91659f671edc2219cfdc897d7404040054272f733b105d8f4028489346a10328->leave($__internal_91659f671edc2219cfdc897d7404040054272f733b105d8f4028489346a10328_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
