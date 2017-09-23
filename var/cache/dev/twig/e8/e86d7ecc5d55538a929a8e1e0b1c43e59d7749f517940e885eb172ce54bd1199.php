<?php

/* default/login.html.twig */
class __TwigTemplate_f7671d4db953e357b142b59dfeff1dcab7436bef99d9fe6dd1432b0fc4d65037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_173cbb8732606792c2c83e2866e08b02df673b879abda6421635fbcffc67d744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_173cbb8732606792c2c83e2866e08b02df673b879abda6421635fbcffc67d744->enter($__internal_173cbb8732606792c2c83e2866e08b02df673b879abda6421635fbcffc67d744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_a22daaed78b63c6e0816feda9ba94b40461ed50fb00910fc3538e0b12acfd801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22daaed78b63c6e0816feda9ba94b40461ed50fb00910fc3538e0b12acfd801->enter($__internal_a22daaed78b63c6e0816feda9ba94b40461ed50fb00910fc3538e0b12acfd801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_173cbb8732606792c2c83e2866e08b02df673b879abda6421635fbcffc67d744->leave($__internal_173cbb8732606792c2c83e2866e08b02df673b879abda6421635fbcffc67d744_prof);

        
        $__internal_a22daaed78b63c6e0816feda9ba94b40461ed50fb00910fc3538e0b12acfd801->leave($__internal_a22daaed78b63c6e0816feda9ba94b40461ed50fb00910fc3538e0b12acfd801_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_db95b64482ec2836497567a18a84723028613cc0b7f985bd2aa6a82d75fd3024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db95b64482ec2836497567a18a84723028613cc0b7f985bd2aa6a82d75fd3024->enter($__internal_db95b64482ec2836497567a18a84723028613cc0b7f985bd2aa6a82d75fd3024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7330ce51ba54917021ed642dc8966d19225bb641831ea7205c01ecf7eb635a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7330ce51ba54917021ed642dc8966d19225bb641831ea7205c01ecf7eb635a01->enter($__internal_7330ce51ba54917021ed642dc8966d19225bb641831ea7205c01ecf7eb635a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
  ";
        // line 4
        echo "  ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 5
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
  ";
        }
        // line 7
        echo "
  <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>

";
        
        $__internal_7330ce51ba54917021ed642dc8966d19225bb641831ea7205c01ecf7eb635a01->leave($__internal_7330ce51ba54917021ed642dc8966d19225bb641831ea7205c01ecf7eb635a01_prof);

        
        $__internal_db95b64482ec2836497567a18a84723028613cc0b7f985bd2aa6a82d75fd3024->leave($__internal_db95b64482ec2836497567a18a84723028613cc0b7f985bd2aa6a82d75fd3024_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  59 => 8,  56 => 7,  50 => 5,  47 => 4,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}

  {# S'il y a une erreur, on l'affiche dans un joli cadre #}
  {% if error %}
    <div class=\"alert alert-danger\">{{ error.message }}</div>
  {% endif %}

  <form action=\"{{ path('login_check') }}\" method=\"post\">
    <label for=\"username\">Login :</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Mot de passe :</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    <br />
    <input type=\"submit\" value=\"Connexion\" />
  </form>

{% endblock %}
", "default/login.html.twig", "/var/www/html/Capa_dev/app/Resources/views/default/login.html.twig");
    }
}
