<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_65745dacfda34bf8ca86fd3d02a00a1cfd699b81d46dae317ac597c2e881dfc0 extends Twig_Template
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
        $__internal_bf79d03ff39c1e6d96354f9fa3846db85f01080b51d5d44a84be6f132e1b5d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf79d03ff39c1e6d96354f9fa3846db85f01080b51d5d44a84be6f132e1b5d6a->enter($__internal_bf79d03ff39c1e6d96354f9fa3846db85f01080b51d5d44a84be6f132e1b5d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_94dda8ee26cd9947799c5d2ac2de3be92b0583556a90af921fa56b4169ccb19b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94dda8ee26cd9947799c5d2ac2de3be92b0583556a90af921fa56b4169ccb19b->enter($__internal_94dda8ee26cd9947799c5d2ac2de3be92b0583556a90af921fa56b4169ccb19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bf79d03ff39c1e6d96354f9fa3846db85f01080b51d5d44a84be6f132e1b5d6a->leave($__internal_bf79d03ff39c1e6d96354f9fa3846db85f01080b51d5d44a84be6f132e1b5d6a_prof);

        
        $__internal_94dda8ee26cd9947799c5d2ac2de3be92b0583556a90af921fa56b4169ccb19b->leave($__internal_94dda8ee26cd9947799c5d2ac2de3be92b0583556a90af921fa56b4169ccb19b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
