<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ec1d7375e20d3f49b5b347decaa1bb97b35616e5a49d90689b7e87f4c24acf28 extends Twig_Template
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
        $__internal_379815f0ce71d71bd59895888bed1f4c52a5f1fcbe054a420b50d5ed1b619395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_379815f0ce71d71bd59895888bed1f4c52a5f1fcbe054a420b50d5ed1b619395->enter($__internal_379815f0ce71d71bd59895888bed1f4c52a5f1fcbe054a420b50d5ed1b619395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_6efe61ba9d91b77f0969d7db565381167f1b3ecc5e7a8a929fa0f25fae9efb00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6efe61ba9d91b77f0969d7db565381167f1b3ecc5e7a8a929fa0f25fae9efb00->enter($__internal_6efe61ba9d91b77f0969d7db565381167f1b3ecc5e7a8a929fa0f25fae9efb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_379815f0ce71d71bd59895888bed1f4c52a5f1fcbe054a420b50d5ed1b619395->leave($__internal_379815f0ce71d71bd59895888bed1f4c52a5f1fcbe054a420b50d5ed1b619395_prof);

        
        $__internal_6efe61ba9d91b77f0969d7db565381167f1b3ecc5e7a8a929fa0f25fae9efb00->leave($__internal_6efe61ba9d91b77f0969d7db565381167f1b3ecc5e7a8a929fa0f25fae9efb00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
