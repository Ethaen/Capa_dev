<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_46badc8b4b6e4068b77294a33514b427c0c9333f4652b375a159293378ec6091 extends Twig_Template
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
        $__internal_51806eb2f5f9f3988f339ff32723f92553e8a480bc9e0af9341c2ff274c863d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51806eb2f5f9f3988f339ff32723f92553e8a480bc9e0af9341c2ff274c863d2->enter($__internal_51806eb2f5f9f3988f339ff32723f92553e8a480bc9e0af9341c2ff274c863d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_0017dfd94dde9bacf3caa2b95467f6f91bdddbb21e8b247e085ea858b7879aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0017dfd94dde9bacf3caa2b95467f6f91bdddbb21e8b247e085ea858b7879aa8->enter($__internal_0017dfd94dde9bacf3caa2b95467f6f91bdddbb21e8b247e085ea858b7879aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_51806eb2f5f9f3988f339ff32723f92553e8a480bc9e0af9341c2ff274c863d2->leave($__internal_51806eb2f5f9f3988f339ff32723f92553e8a480bc9e0af9341c2ff274c863d2_prof);

        
        $__internal_0017dfd94dde9bacf3caa2b95467f6f91bdddbb21e8b247e085ea858b7879aa8->leave($__internal_0017dfd94dde9bacf3caa2b95467f6f91bdddbb21e8b247e085ea858b7879aa8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
