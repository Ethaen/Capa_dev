<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c4ce776cdc8e5090498641af38149b7c0f19f0a052d446f69ef69ea45e261a9f extends Twig_Template
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
        $__internal_c3114ece163c9be3d4a51884b3b413c0901d1d7e72a40b1e311adf46eec0ecde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3114ece163c9be3d4a51884b3b413c0901d1d7e72a40b1e311adf46eec0ecde->enter($__internal_c3114ece163c9be3d4a51884b3b413c0901d1d7e72a40b1e311adf46eec0ecde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_4c6f7aa6581bf7b0d7c89e94a1a2902652c1b34addf7259a8bb4ddf65c82144a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6f7aa6581bf7b0d7c89e94a1a2902652c1b34addf7259a8bb4ddf65c82144a->enter($__internal_4c6f7aa6581bf7b0d7c89e94a1a2902652c1b34addf7259a8bb4ddf65c82144a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c3114ece163c9be3d4a51884b3b413c0901d1d7e72a40b1e311adf46eec0ecde->leave($__internal_c3114ece163c9be3d4a51884b3b413c0901d1d7e72a40b1e311adf46eec0ecde_prof);

        
        $__internal_4c6f7aa6581bf7b0d7c89e94a1a2902652c1b34addf7259a8bb4ddf65c82144a->leave($__internal_4c6f7aa6581bf7b0d7c89e94a1a2902652c1b34addf7259a8bb4ddf65c82144a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/Capa_dev/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
