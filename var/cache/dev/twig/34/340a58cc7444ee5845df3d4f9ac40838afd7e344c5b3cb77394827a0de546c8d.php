<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_69787b8f45555631b7dd60dddf820b29a6106424c88235bb45364dc950e1a374 extends Twig_Template
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
        $__internal_65346c1e20550a92e666c2fec9b21589d0111c358fc40784a88a9671e15a7f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65346c1e20550a92e666c2fec9b21589d0111c358fc40784a88a9671e15a7f8a->enter($__internal_65346c1e20550a92e666c2fec9b21589d0111c358fc40784a88a9671e15a7f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_63302484fbec727c454372969236d686bc0f7581e0c2ad4898fa69a07e853783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63302484fbec727c454372969236d686bc0f7581e0c2ad4898fa69a07e853783->enter($__internal_63302484fbec727c454372969236d686bc0f7581e0c2ad4898fa69a07e853783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_65346c1e20550a92e666c2fec9b21589d0111c358fc40784a88a9671e15a7f8a->leave($__internal_65346c1e20550a92e666c2fec9b21589d0111c358fc40784a88a9671e15a7f8a_prof);

        
        $__internal_63302484fbec727c454372969236d686bc0f7581e0c2ad4898fa69a07e853783->leave($__internal_63302484fbec727c454372969236d686bc0f7581e0c2ad4898fa69a07e853783_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
