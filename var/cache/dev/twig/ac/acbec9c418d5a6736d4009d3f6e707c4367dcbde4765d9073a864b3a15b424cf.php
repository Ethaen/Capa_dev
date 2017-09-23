<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_fe41488acc3417521100e0f07c1fec3596110dade835cd2bbecc8d7f60cf9337 extends Twig_Template
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
        $__internal_18b3c3a30fee717a4a315a82eee7c3a583b0b11921c88bb83b0d3dec8a8816b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b3c3a30fee717a4a315a82eee7c3a583b0b11921c88bb83b0d3dec8a8816b1->enter($__internal_18b3c3a30fee717a4a315a82eee7c3a583b0b11921c88bb83b0d3dec8a8816b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_2d0b3e05e6a1f8b04cacc394500a21993d0c7d4a5323f2a836832a6902ada59b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0b3e05e6a1f8b04cacc394500a21993d0c7d4a5323f2a836832a6902ada59b->enter($__internal_2d0b3e05e6a1f8b04cacc394500a21993d0c7d4a5323f2a836832a6902ada59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_18b3c3a30fee717a4a315a82eee7c3a583b0b11921c88bb83b0d3dec8a8816b1->leave($__internal_18b3c3a30fee717a4a315a82eee7c3a583b0b11921c88bb83b0d3dec8a8816b1_prof);

        
        $__internal_2d0b3e05e6a1f8b04cacc394500a21993d0c7d4a5323f2a836832a6902ada59b->leave($__internal_2d0b3e05e6a1f8b04cacc394500a21993d0c7d4a5323f2a836832a6902ada59b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
