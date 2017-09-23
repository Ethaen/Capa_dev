<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4ea0fb61e9124b98a6f4fefb8c5442657a9fecd68064b979a47c6009818ead9b extends Twig_Template
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
        $__internal_ce8fce25aac931766da73f625ae8382d733fd9e4e00eece87fade02072469255 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce8fce25aac931766da73f625ae8382d733fd9e4e00eece87fade02072469255->enter($__internal_ce8fce25aac931766da73f625ae8382d733fd9e4e00eece87fade02072469255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_35599ce65c8c21d122ec1612cc7caf14a3a8472b584a82fb108e339d3537a6fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35599ce65c8c21d122ec1612cc7caf14a3a8472b584a82fb108e339d3537a6fd->enter($__internal_35599ce65c8c21d122ec1612cc7caf14a3a8472b584a82fb108e339d3537a6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ce8fce25aac931766da73f625ae8382d733fd9e4e00eece87fade02072469255->leave($__internal_ce8fce25aac931766da73f625ae8382d733fd9e4e00eece87fade02072469255_prof);

        
        $__internal_35599ce65c8c21d122ec1612cc7caf14a3a8472b584a82fb108e339d3537a6fd->leave($__internal_35599ce65c8c21d122ec1612cc7caf14a3a8472b584a82fb108e339d3537a6fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
