<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5290a5a34246a26095d6bb3b1e2a021f3e474a6860c4498366d440b6a0a3d82b extends Twig_Template
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
        $__internal_fadd09b8c9697c8edfb268e9666bf248462bd23ea5f82f699e9b0096639e68fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fadd09b8c9697c8edfb268e9666bf248462bd23ea5f82f699e9b0096639e68fc->enter($__internal_fadd09b8c9697c8edfb268e9666bf248462bd23ea5f82f699e9b0096639e68fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_fa9918ff8a47a00c81a9af6ff6872d36b0f0e982cac35c101bcee0c7d1c19691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa9918ff8a47a00c81a9af6ff6872d36b0f0e982cac35c101bcee0c7d1c19691->enter($__internal_fa9918ff8a47a00c81a9af6ff6872d36b0f0e982cac35c101bcee0c7d1c19691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_fadd09b8c9697c8edfb268e9666bf248462bd23ea5f82f699e9b0096639e68fc->leave($__internal_fadd09b8c9697c8edfb268e9666bf248462bd23ea5f82f699e9b0096639e68fc_prof);

        
        $__internal_fa9918ff8a47a00c81a9af6ff6872d36b0f0e982cac35c101bcee0c7d1c19691->leave($__internal_fa9918ff8a47a00c81a9af6ff6872d36b0f0e982cac35c101bcee0c7d1c19691_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
