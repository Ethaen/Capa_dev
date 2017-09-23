<?php

/* :default:login.html.twig */
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
        $__internal_fc029ca7bd4e8a56fe267fec33e31d720a44379de4860ad077623459aa610eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc029ca7bd4e8a56fe267fec33e31d720a44379de4860ad077623459aa610eb5->enter($__internal_fc029ca7bd4e8a56fe267fec33e31d720a44379de4860ad077623459aa610eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:login.html.twig"));

        $__internal_ee9cb8de05b85695972cc5148b3fbed7057db41db190bacc081e213164218ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9cb8de05b85695972cc5148b3fbed7057db41db190bacc081e213164218ae4->enter($__internal_ee9cb8de05b85695972cc5148b3fbed7057db41db190bacc081e213164218ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:login.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_fc029ca7bd4e8a56fe267fec33e31d720a44379de4860ad077623459aa610eb5->leave($__internal_fc029ca7bd4e8a56fe267fec33e31d720a44379de4860ad077623459aa610eb5_prof);

        
        $__internal_ee9cb8de05b85695972cc5148b3fbed7057db41db190bacc081e213164218ae4->leave($__internal_ee9cb8de05b85695972cc5148b3fbed7057db41db190bacc081e213164218ae4_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_8ed6d94accc0e8c802dfebeb73141d9723ceabd77bca9d1f15489b88502a2038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ed6d94accc0e8c802dfebeb73141d9723ceabd77bca9d1f15489b88502a2038->enter($__internal_8ed6d94accc0e8c802dfebeb73141d9723ceabd77bca9d1f15489b88502a2038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1dccd09db9a29eaf7b387aa7ce3e7e1a72ea3b17ee10e714342c567758a3456d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dccd09db9a29eaf7b387aa7ce3e7e1a72ea3b17ee10e714342c567758a3456d->enter($__internal_1dccd09db9a29eaf7b387aa7ce3e7e1a72ea3b17ee10e714342c567758a3456d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1dccd09db9a29eaf7b387aa7ce3e7e1a72ea3b17ee10e714342c567758a3456d->leave($__internal_1dccd09db9a29eaf7b387aa7ce3e7e1a72ea3b17ee10e714342c567758a3456d_prof);

        
        $__internal_8ed6d94accc0e8c802dfebeb73141d9723ceabd77bca9d1f15489b88502a2038->leave($__internal_8ed6d94accc0e8c802dfebeb73141d9723ceabd77bca9d1f15489b88502a2038_prof);

    }

    public function getTemplateName()
    {
        return ":default:login.html.twig";
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
", ":default:login.html.twig", "/var/www/html/Capa_dev/app/Resources/views/default/login.html.twig");
    }
}
