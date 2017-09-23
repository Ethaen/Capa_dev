<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9ec463a5141422177decfe70c9e2421022bc554f5e1b060402d014ad6f52df54 extends Twig_Template
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
        $__internal_db6d6b6a19f0427e0ad1e21c0e57161d53d28317f425bd8bdc5e8bc7bdee3405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db6d6b6a19f0427e0ad1e21c0e57161d53d28317f425bd8bdc5e8bc7bdee3405->enter($__internal_db6d6b6a19f0427e0ad1e21c0e57161d53d28317f425bd8bdc5e8bc7bdee3405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_2ef34b95621811fb50bac6a9ec4bf512068907603d785d88c45d807b9bae28b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef34b95621811fb50bac6a9ec4bf512068907603d785d88c45d807b9bae28b8->enter($__internal_2ef34b95621811fb50bac6a9ec4bf512068907603d785d88c45d807b9bae28b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_db6d6b6a19f0427e0ad1e21c0e57161d53d28317f425bd8bdc5e8bc7bdee3405->leave($__internal_db6d6b6a19f0427e0ad1e21c0e57161d53d28317f425bd8bdc5e8bc7bdee3405_prof);

        
        $__internal_2ef34b95621811fb50bac6a9ec4bf512068907603d785d88c45d807b9bae28b8->leave($__internal_2ef34b95621811fb50bac6a9ec4bf512068907603d785d88c45d807b9bae28b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
