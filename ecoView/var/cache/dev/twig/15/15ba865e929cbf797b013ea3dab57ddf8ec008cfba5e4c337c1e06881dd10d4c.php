<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* user/show.html.twig */
class __TwigTemplate_d9750bfc004807301ac6fbaf92e05e9dd4339315dbe7052bdabac8f40fd02b0f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "User";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
  <li class=\"nav-item\">
    <a class=\"nav-link active\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"true\">Profil</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" id=\"associations-tab\" data-toggle=\"tab\" href=\"#associations\" role=\"tab\" aria-controls=\"associations\" aria-selected=\"false\">Associations</a>
  </li>
</ul>
<div class=\"tab-content\" id=\"myTabContent\">
  <div class=\"tab-pane fade show active\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
    <table class=\"table\">
            <tbody>
                <tr>
                    <th>User_name</th>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "userName", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>User_password</th>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "userPassword", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>User_email</th>
                    <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "userEmail", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>User_ip</th>
                    <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "userIp", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>User_created_at</th>
                    <td>";
        // line 36
        ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "userCreatedAt", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "userCreatedAt", [], "any", false, false, false, 36), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                </tr>
                <tr>
                    <th>User_clics</th>
                    <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "userClics", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div>
  <div class=\"tab-pane fade\" id=\"associations\" role=\"tabpanel\" aria-labelledby=\"associations-tab\">
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "associations", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
            // line 47
            echo "      ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["accossiation"]) || array_key_exists("accossiation", $context) ? $context["accossiation"] : (function () { throw new RuntimeError('Variable "accossiation" does not exist.', 47, $this->source); })()), "AssNom", [], "any", false, false, false, 47), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    <a class=\"btn btn-outline-primary\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_add_assoc");
        echo "\">ajouter</a>
  </div>
</div>
    <h1>User</h1>

    <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 58
        echo twig_include($this->env, $context, "user/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 58,  175 => 56,  170 => 54,  161 => 49,  152 => 47,  148 => 46,  139 => 40,  132 => 36,  125 => 32,  118 => 28,  111 => 24,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}User{% endblock %}

{% block body %}
<ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
  <li class=\"nav-item\">
    <a class=\"nav-link active\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"true\">Profil</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" id=\"associations-tab\" data-toggle=\"tab\" href=\"#associations\" role=\"tab\" aria-controls=\"associations\" aria-selected=\"false\">Associations</a>
  </li>
</ul>
<div class=\"tab-content\" id=\"myTabContent\">
  <div class=\"tab-pane fade show active\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
    <table class=\"table\">
            <tbody>
                <tr>
                    <th>User_name</th>
                    <td>{{ user.userName }}</td>
                </tr>
                <tr>
                    <th>User_password</th>
                    <td>{{ user.userPassword }}</td>
                </tr>
                <tr>
                    <th>User_email</th>
                    <td>{{ user.userEmail }}</td>
                </tr>
                <tr>
                    <th>User_ip</th>
                    <td>{{ user.userIp }}</td>
                </tr>
                <tr>
                    <th>User_created_at</th>
                    <td>{{ user.userCreatedAt ? user.userCreatedAt|date('Y-m-d H:i:s') : '' }}</td>
                </tr>
                <tr>
                    <th>User_clics</th>
                    <td>{{ user.userClics }}</td>
                </tr>
            </tbody>
        </table>
    </div>
  <div class=\"tab-pane fade\" id=\"associations\" role=\"tabpanel\" aria-labelledby=\"associations-tab\">
    {% for association in user.associations %}
      {{accossiation.AssNom}}
    {% endfor %}
    <a class=\"btn btn-outline-primary\" href=\"{{ path('user_add_assoc') }}\">ajouter</a>
  </div>
</div>
    <h1>User</h1>

    <a href=\"{{ path('user_index') }}\">back to list</a>

    <a href=\"{{ path('user_edit', {'id': user.id}) }}\">edit</a>

    {{ include('user/_delete_form.html.twig') }}
{% endblock %}
", "user/show.html.twig", "D:\\wamp64\\www\\EcoProject\\ecoView\\templates\\user\\show.html.twig");
    }
}
