<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3e3f39508b4382a848393181ef1fb966c38c4ff5a26a2d0ff786833e01e587dc extends Twig_Template
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
        $__internal_036c132cd3a3a752237640fd6fc98d58c96d0724c622d3c2dd834f35ee8ed488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_036c132cd3a3a752237640fd6fc98d58c96d0724c622d3c2dd834f35ee8ed488->enter($__internal_036c132cd3a3a752237640fd6fc98d58c96d0724c622d3c2dd834f35ee8ed488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_6fdf6c171339dd57ee1b988f4b434f29325f6d3bbe9ec70162dfb13a1707fac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fdf6c171339dd57ee1b988f4b434f29325f6d3bbe9ec70162dfb13a1707fac6->enter($__internal_6fdf6c171339dd57ee1b988f4b434f29325f6d3bbe9ec70162dfb13a1707fac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_036c132cd3a3a752237640fd6fc98d58c96d0724c622d3c2dd834f35ee8ed488->leave($__internal_036c132cd3a3a752237640fd6fc98d58c96d0724c622d3c2dd834f35ee8ed488_prof);

        
        $__internal_6fdf6c171339dd57ee1b988f4b434f29325f6d3bbe9ec70162dfb13a1707fac6->leave($__internal_6fdf6c171339dd57ee1b988f4b434f29325f6d3bbe9ec70162dfb13a1707fac6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
