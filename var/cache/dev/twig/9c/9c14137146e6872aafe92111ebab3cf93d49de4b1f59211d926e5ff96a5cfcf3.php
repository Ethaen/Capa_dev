<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_6078d66a3b1cce9386b9eab8f49655299b3c02aa4525f8330013081a37aee740 extends Twig_Template
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
        $__internal_aa4abf88c92375ce4ee152f61b12bb8dd1a8b0c24bfd90e03c16aa3479b5fa09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa4abf88c92375ce4ee152f61b12bb8dd1a8b0c24bfd90e03c16aa3479b5fa09->enter($__internal_aa4abf88c92375ce4ee152f61b12bb8dd1a8b0c24bfd90e03c16aa3479b5fa09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_4dbebc683eed40ef1402c8338417b3d63a358cd93547fec24f3a73e8ff3bf780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dbebc683eed40ef1402c8338417b3d63a358cd93547fec24f3a73e8ff3bf780->enter($__internal_4dbebc683eed40ef1402c8338417b3d63a358cd93547fec24f3a73e8ff3bf780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_aa4abf88c92375ce4ee152f61b12bb8dd1a8b0c24bfd90e03c16aa3479b5fa09->leave($__internal_aa4abf88c92375ce4ee152f61b12bb8dd1a8b0c24bfd90e03c16aa3479b5fa09_prof);

        
        $__internal_4dbebc683eed40ef1402c8338417b3d63a358cd93547fec24f3a73e8ff3bf780->leave($__internal_4dbebc683eed40ef1402c8338417b3d63a358cd93547fec24f3a73e8ff3bf780_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
