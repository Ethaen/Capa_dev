<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_d0f77dc164e26e520bbffc9446731e225ebe172848d7123bf5f36f7899f13473 extends Twig_Template
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
        $__internal_c453cc580c2ea8027119456406675161cb4af3516d057e913e77a28796de0ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c453cc580c2ea8027119456406675161cb4af3516d057e913e77a28796de0ddb->enter($__internal_c453cc580c2ea8027119456406675161cb4af3516d057e913e77a28796de0ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_31c246c6ce92184eb0bf3c058d1ad95e38c86a65f45170e1d686332abeb1fd0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31c246c6ce92184eb0bf3c058d1ad95e38c86a65f45170e1d686332abeb1fd0c->enter($__internal_31c246c6ce92184eb0bf3c058d1ad95e38c86a65f45170e1d686332abeb1fd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c453cc580c2ea8027119456406675161cb4af3516d057e913e77a28796de0ddb->leave($__internal_c453cc580c2ea8027119456406675161cb4af3516d057e913e77a28796de0ddb_prof);

        
        $__internal_31c246c6ce92184eb0bf3c058d1ad95e38c86a65f45170e1d686332abeb1fd0c->leave($__internal_31c246c6ce92184eb0bf3c058d1ad95e38c86a65f45170e1d686332abeb1fd0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
