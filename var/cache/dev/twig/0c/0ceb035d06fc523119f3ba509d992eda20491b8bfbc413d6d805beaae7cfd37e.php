<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0a613460bff8d95f3e4cd222f89856befc9503068b7f3b576bb61fe5bbbc2221 extends Twig_Template
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
        $__internal_4485eb1f26cf93afaf9375d18458a048a96fe4c93801f6bb5f84a8bd6961fbcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4485eb1f26cf93afaf9375d18458a048a96fe4c93801f6bb5f84a8bd6961fbcc->enter($__internal_4485eb1f26cf93afaf9375d18458a048a96fe4c93801f6bb5f84a8bd6961fbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_709ed018b0a6f9e0dfd652bddc3b479cef41c1850c4b95bdb4f8e3d7f45a5a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709ed018b0a6f9e0dfd652bddc3b479cef41c1850c4b95bdb4f8e3d7f45a5a47->enter($__internal_709ed018b0a6f9e0dfd652bddc3b479cef41c1850c4b95bdb4f8e3d7f45a5a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4485eb1f26cf93afaf9375d18458a048a96fe4c93801f6bb5f84a8bd6961fbcc->leave($__internal_4485eb1f26cf93afaf9375d18458a048a96fe4c93801f6bb5f84a8bd6961fbcc_prof);

        
        $__internal_709ed018b0a6f9e0dfd652bddc3b479cef41c1850c4b95bdb4f8e3d7f45a5a47->leave($__internal_709ed018b0a6f9e0dfd652bddc3b479cef41c1850c4b95bdb4f8e3d7f45a5a47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
