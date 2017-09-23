<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cd51f700ad647e562be98ad3b02868fd8b86a17a5ef2bd8021a18c9de9ad2f5d extends Twig_Template
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
        $__internal_ce4a324a769625ad8fc98b782893763370f47f3ca7fc5f4d7c2da2a0caa9ba96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4a324a769625ad8fc98b782893763370f47f3ca7fc5f4d7c2da2a0caa9ba96->enter($__internal_ce4a324a769625ad8fc98b782893763370f47f3ca7fc5f4d7c2da2a0caa9ba96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_efe80c7a964967eb36199a985c7107774f03d0ebc53557353bfb49c7e2b655f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efe80c7a964967eb36199a985c7107774f03d0ebc53557353bfb49c7e2b655f5->enter($__internal_efe80c7a964967eb36199a985c7107774f03d0ebc53557353bfb49c7e2b655f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ce4a324a769625ad8fc98b782893763370f47f3ca7fc5f4d7c2da2a0caa9ba96->leave($__internal_ce4a324a769625ad8fc98b782893763370f47f3ca7fc5f4d7c2da2a0caa9ba96_prof);

        
        $__internal_efe80c7a964967eb36199a985c7107774f03d0ebc53557353bfb49c7e2b655f5->leave($__internal_efe80c7a964967eb36199a985c7107774f03d0ebc53557353bfb49c7e2b655f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
