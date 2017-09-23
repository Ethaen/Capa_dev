<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0f52fd5d75bf84a2e90fc07ec2872336c4eb2373bdaef862c6473dde17dc8724 extends Twig_Template
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
        $__internal_685d9d027d4395750d01dfb1f4ae9772ac69740ad902d0a1e69965a643d22ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_685d9d027d4395750d01dfb1f4ae9772ac69740ad902d0a1e69965a643d22ef3->enter($__internal_685d9d027d4395750d01dfb1f4ae9772ac69740ad902d0a1e69965a643d22ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_59336392ff5ecb3ce5d144392316f90117f37366c98133655afd3ff8d75b2226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59336392ff5ecb3ce5d144392316f90117f37366c98133655afd3ff8d75b2226->enter($__internal_59336392ff5ecb3ce5d144392316f90117f37366c98133655afd3ff8d75b2226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_685d9d027d4395750d01dfb1f4ae9772ac69740ad902d0a1e69965a643d22ef3->leave($__internal_685d9d027d4395750d01dfb1f4ae9772ac69740ad902d0a1e69965a643d22ef3_prof);

        
        $__internal_59336392ff5ecb3ce5d144392316f90117f37366c98133655afd3ff8d75b2226->leave($__internal_59336392ff5ecb3ce5d144392316f90117f37366c98133655afd3ff8d75b2226_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
