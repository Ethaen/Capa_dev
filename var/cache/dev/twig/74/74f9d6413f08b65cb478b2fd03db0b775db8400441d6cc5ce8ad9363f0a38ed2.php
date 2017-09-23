<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bb39a7468cd9f10b7c36d6f938ae87d2f517859c64820f496837ac04642d093c extends Twig_Template
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
        $__internal_fb388d6465933a29fd7f3f672aeee82f1c425bb9adbcc18f42c5ebbb670791bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb388d6465933a29fd7f3f672aeee82f1c425bb9adbcc18f42c5ebbb670791bf->enter($__internal_fb388d6465933a29fd7f3f672aeee82f1c425bb9adbcc18f42c5ebbb670791bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_f884af6df6b17b6be595a10341c866cb6cd818d89118874e647ea60de52adc1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f884af6df6b17b6be595a10341c866cb6cd818d89118874e647ea60de52adc1d->enter($__internal_f884af6df6b17b6be595a10341c866cb6cd818d89118874e647ea60de52adc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_fb388d6465933a29fd7f3f672aeee82f1c425bb9adbcc18f42c5ebbb670791bf->leave($__internal_fb388d6465933a29fd7f3f672aeee82f1c425bb9adbcc18f42c5ebbb670791bf_prof);

        
        $__internal_f884af6df6b17b6be595a10341c866cb6cd818d89118874e647ea60de52adc1d->leave($__internal_f884af6df6b17b6be595a10341c866cb6cd818d89118874e647ea60de52adc1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
