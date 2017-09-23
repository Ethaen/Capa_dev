<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_5a662e8eec515ce4837d24b725f3c9d672780393ed74b053347a015fe109fc8c extends Twig_Template
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
        $__internal_4ae85901a812417c02f5cf17e07ffa27b87e07f7ce73e4b7705c823bb0ed8386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ae85901a812417c02f5cf17e07ffa27b87e07f7ce73e4b7705c823bb0ed8386->enter($__internal_4ae85901a812417c02f5cf17e07ffa27b87e07f7ce73e4b7705c823bb0ed8386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_83a4b84f7fc4622d0bff2dd17e5d10fd617b14640f87e071a71cc24045ea1ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a4b84f7fc4622d0bff2dd17e5d10fd617b14640f87e071a71cc24045ea1ce5->enter($__internal_83a4b84f7fc4622d0bff2dd17e5d10fd617b14640f87e071a71cc24045ea1ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4ae85901a812417c02f5cf17e07ffa27b87e07f7ce73e4b7705c823bb0ed8386->leave($__internal_4ae85901a812417c02f5cf17e07ffa27b87e07f7ce73e4b7705c823bb0ed8386_prof);

        
        $__internal_83a4b84f7fc4622d0bff2dd17e5d10fd617b14640f87e071a71cc24045ea1ce5->leave($__internal_83a4b84f7fc4622d0bff2dd17e5d10fd617b14640f87e071a71cc24045ea1ce5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
