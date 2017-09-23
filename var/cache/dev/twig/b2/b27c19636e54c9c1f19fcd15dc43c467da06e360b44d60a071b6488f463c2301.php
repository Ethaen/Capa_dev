<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_27855908a8d2aa753782c8c6fae419a152fb85ec52e589db0780b5dc6a41addb extends Twig_Template
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
        $__internal_798cf8e0df91687412a27049ccea53b9db7116feded70813498b98377f20f727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_798cf8e0df91687412a27049ccea53b9db7116feded70813498b98377f20f727->enter($__internal_798cf8e0df91687412a27049ccea53b9db7116feded70813498b98377f20f727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_694512fe0a18fc22c73fc244038c1307d92b1396acdcdd171fb96dbe02e2afb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694512fe0a18fc22c73fc244038c1307d92b1396acdcdd171fb96dbe02e2afb1->enter($__internal_694512fe0a18fc22c73fc244038c1307d92b1396acdcdd171fb96dbe02e2afb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_798cf8e0df91687412a27049ccea53b9db7116feded70813498b98377f20f727->leave($__internal_798cf8e0df91687412a27049ccea53b9db7116feded70813498b98377f20f727_prof);

        
        $__internal_694512fe0a18fc22c73fc244038c1307d92b1396acdcdd171fb96dbe02e2afb1->leave($__internal_694512fe0a18fc22c73fc244038c1307d92b1396acdcdd171fb96dbe02e2afb1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
