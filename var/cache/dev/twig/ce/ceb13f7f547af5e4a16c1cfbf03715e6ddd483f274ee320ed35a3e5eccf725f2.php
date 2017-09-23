<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c1378f42193d4f7b23b1915b7440c50c6a8ff2b6d8a416c16bef78faf3ae96e3 extends Twig_Template
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
        $__internal_9fc0b51a20fd1973f726586f4d88273deadbc3152e5608c24bcfb8620ed3c3a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc0b51a20fd1973f726586f4d88273deadbc3152e5608c24bcfb8620ed3c3a8->enter($__internal_9fc0b51a20fd1973f726586f4d88273deadbc3152e5608c24bcfb8620ed3c3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_d787802ce9fdac9b605b3d84e4dec2ab11efb3f6d60a8a36fd4df420b827a6c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d787802ce9fdac9b605b3d84e4dec2ab11efb3f6d60a8a36fd4df420b827a6c2->enter($__internal_d787802ce9fdac9b605b3d84e4dec2ab11efb3f6d60a8a36fd4df420b827a6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_9fc0b51a20fd1973f726586f4d88273deadbc3152e5608c24bcfb8620ed3c3a8->leave($__internal_9fc0b51a20fd1973f726586f4d88273deadbc3152e5608c24bcfb8620ed3c3a8_prof);

        
        $__internal_d787802ce9fdac9b605b3d84e4dec2ab11efb3f6d60a8a36fd4df420b827a6c2->leave($__internal_d787802ce9fdac9b605b3d84e4dec2ab11efb3f6d60a8a36fd4df420b827a6c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
