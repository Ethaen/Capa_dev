<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_820c3fa1dd363d295486b680cc8d50ef7f8b7edbde760e33ea225f1c1ffc5973 extends Twig_Template
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
        $__internal_92db800776e893fb106bbf9da5af67c3ec7ecf88713682244e54c4455e92577e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92db800776e893fb106bbf9da5af67c3ec7ecf88713682244e54c4455e92577e->enter($__internal_92db800776e893fb106bbf9da5af67c3ec7ecf88713682244e54c4455e92577e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_3da1fc715e7a4d8025bd3bc28f1ffb25d7ef2835fb136530b3b193ca0e3c4aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da1fc715e7a4d8025bd3bc28f1ffb25d7ef2835fb136530b3b193ca0e3c4aca->enter($__internal_3da1fc715e7a4d8025bd3bc28f1ffb25d7ef2835fb136530b3b193ca0e3c4aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_92db800776e893fb106bbf9da5af67c3ec7ecf88713682244e54c4455e92577e->leave($__internal_92db800776e893fb106bbf9da5af67c3ec7ecf88713682244e54c4455e92577e_prof);

        
        $__internal_3da1fc715e7a4d8025bd3bc28f1ffb25d7ef2835fb136530b3b193ca0e3c4aca->leave($__internal_3da1fc715e7a4d8025bd3bc28f1ffb25d7ef2835fb136530b3b193ca0e3c4aca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
