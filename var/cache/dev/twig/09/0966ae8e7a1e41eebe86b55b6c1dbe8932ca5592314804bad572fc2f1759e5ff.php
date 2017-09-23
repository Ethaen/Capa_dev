<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8c1b7229f37d58e1983aba035fb09422e2028941705f2b5c0631ef2ce67dc990 extends Twig_Template
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
        $__internal_9401204a7b5d3a76a23cd9899a5c64de0e1f5b9425470e5e206926d4776276b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9401204a7b5d3a76a23cd9899a5c64de0e1f5b9425470e5e206926d4776276b8->enter($__internal_9401204a7b5d3a76a23cd9899a5c64de0e1f5b9425470e5e206926d4776276b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b2ce47329ef3a9668ca073e8d492a19214f19a00c6623a93f689f0f8376cc7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ce47329ef3a9668ca073e8d492a19214f19a00c6623a93f689f0f8376cc7b7->enter($__internal_b2ce47329ef3a9668ca073e8d492a19214f19a00c6623a93f689f0f8376cc7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9401204a7b5d3a76a23cd9899a5c64de0e1f5b9425470e5e206926d4776276b8->leave($__internal_9401204a7b5d3a76a23cd9899a5c64de0e1f5b9425470e5e206926d4776276b8_prof);

        
        $__internal_b2ce47329ef3a9668ca073e8d492a19214f19a00c6623a93f689f0f8376cc7b7->leave($__internal_b2ce47329ef3a9668ca073e8d492a19214f19a00c6623a93f689f0f8376cc7b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
