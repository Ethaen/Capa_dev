<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_a6258756c609d9966ea5b8713a098e1f5e2e153dc3abde0ae0e67a7b662fcdeb extends Twig_Template
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
        $__internal_6d5f0fe5c478b852c367bbd215fdb58a4ef2994a7ecbc78c8c02627b55131b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5f0fe5c478b852c367bbd215fdb58a4ef2994a7ecbc78c8c02627b55131b9c->enter($__internal_6d5f0fe5c478b852c367bbd215fdb58a4ef2994a7ecbc78c8c02627b55131b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_63b809d5ee9ce437ee1c8ac644fba5bcf2c0df184aadf0fde0538f7fb725a432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b809d5ee9ce437ee1c8ac644fba5bcf2c0df184aadf0fde0538f7fb725a432->enter($__internal_63b809d5ee9ce437ee1c8ac644fba5bcf2c0df184aadf0fde0538f7fb725a432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_6d5f0fe5c478b852c367bbd215fdb58a4ef2994a7ecbc78c8c02627b55131b9c->leave($__internal_6d5f0fe5c478b852c367bbd215fdb58a4ef2994a7ecbc78c8c02627b55131b9c_prof);

        
        $__internal_63b809d5ee9ce437ee1c8ac644fba5bcf2c0df184aadf0fde0538f7fb725a432->leave($__internal_63b809d5ee9ce437ee1c8ac644fba5bcf2c0df184aadf0fde0538f7fb725a432_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
