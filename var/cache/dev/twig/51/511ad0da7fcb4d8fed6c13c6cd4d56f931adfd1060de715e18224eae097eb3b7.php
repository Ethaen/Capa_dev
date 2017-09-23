<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2238b248ff0f46ca21dbcfe21b99cf074d67efd9ad9c11370b8ff3be4595c417 extends Twig_Template
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
        $__internal_c835ee645e16f95fb93cc5feb8426d28ca1eb27f4cfacfd1a4c002ea9ca84646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c835ee645e16f95fb93cc5feb8426d28ca1eb27f4cfacfd1a4c002ea9ca84646->enter($__internal_c835ee645e16f95fb93cc5feb8426d28ca1eb27f4cfacfd1a4c002ea9ca84646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_f09a9361d3d0204c4584e5284ae54bf6e77e87ac1900039722fc7f8c79aff060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09a9361d3d0204c4584e5284ae54bf6e77e87ac1900039722fc7f8c79aff060->enter($__internal_f09a9361d3d0204c4584e5284ae54bf6e77e87ac1900039722fc7f8c79aff060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c835ee645e16f95fb93cc5feb8426d28ca1eb27f4cfacfd1a4c002ea9ca84646->leave($__internal_c835ee645e16f95fb93cc5feb8426d28ca1eb27f4cfacfd1a4c002ea9ca84646_prof);

        
        $__internal_f09a9361d3d0204c4584e5284ae54bf6e77e87ac1900039722fc7f8c79aff060->leave($__internal_f09a9361d3d0204c4584e5284ae54bf6e77e87ac1900039722fc7f8c79aff060_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
