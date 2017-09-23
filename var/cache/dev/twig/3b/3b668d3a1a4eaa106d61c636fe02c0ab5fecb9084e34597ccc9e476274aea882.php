<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a82370ae76458a5c61e4c6d4c883fbaab43d42597c85b0b54beaf4400025eb71 extends Twig_Template
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
        $__internal_682785d4859d38e7e8d8c20d1249fbc686cda6fe9b3ce0dd635eecb07a267c36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682785d4859d38e7e8d8c20d1249fbc686cda6fe9b3ce0dd635eecb07a267c36->enter($__internal_682785d4859d38e7e8d8c20d1249fbc686cda6fe9b3ce0dd635eecb07a267c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_6a6b81bf0689b63fc460b6e4542390dcf11cd9a37d41b421b3838b15f29b72a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6b81bf0689b63fc460b6e4542390dcf11cd9a37d41b421b3838b15f29b72a6->enter($__internal_6a6b81bf0689b63fc460b6e4542390dcf11cd9a37d41b421b3838b15f29b72a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_682785d4859d38e7e8d8c20d1249fbc686cda6fe9b3ce0dd635eecb07a267c36->leave($__internal_682785d4859d38e7e8d8c20d1249fbc686cda6fe9b3ce0dd635eecb07a267c36_prof);

        
        $__internal_6a6b81bf0689b63fc460b6e4542390dcf11cd9a37d41b421b3838b15f29b72a6->leave($__internal_6a6b81bf0689b63fc460b6e4542390dcf11cd9a37d41b421b3838b15f29b72a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
