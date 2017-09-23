<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b094c942eed047b1dcae948b51a534926feeb7f044d2de7051993600738ab7ba extends Twig_Template
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
        $__internal_1cb721c776d1f32fd7241e2e462f1110d7c7da7ebadba79d5c67b3a73d09db5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb721c776d1f32fd7241e2e462f1110d7c7da7ebadba79d5c67b3a73d09db5b->enter($__internal_1cb721c776d1f32fd7241e2e462f1110d7c7da7ebadba79d5c67b3a73d09db5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_69a00a4ee5c2cc6d32d408ea5616b303ccda163b7ff87b5dab12aadad9b74fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a00a4ee5c2cc6d32d408ea5616b303ccda163b7ff87b5dab12aadad9b74fbe->enter($__internal_69a00a4ee5c2cc6d32d408ea5616b303ccda163b7ff87b5dab12aadad9b74fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1cb721c776d1f32fd7241e2e462f1110d7c7da7ebadba79d5c67b3a73d09db5b->leave($__internal_1cb721c776d1f32fd7241e2e462f1110d7c7da7ebadba79d5c67b3a73d09db5b_prof);

        
        $__internal_69a00a4ee5c2cc6d32d408ea5616b303ccda163b7ff87b5dab12aadad9b74fbe->leave($__internal_69a00a4ee5c2cc6d32d408ea5616b303ccda163b7ff87b5dab12aadad9b74fbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
