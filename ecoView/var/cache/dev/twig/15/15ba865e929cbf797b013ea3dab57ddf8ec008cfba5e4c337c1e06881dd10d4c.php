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
            'styles' => [$this, 'block_styles'],
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

        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 6
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("add_assoc");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "  <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
    <li class=\"nav-item\">
      <a class=\"nav-link active\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"true\">Profile</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"associations-tab\" data-toggle=\"tab\" href=\"#associations\" role=\"tab\" aria-controls=\"associations\" aria-selected=\"false\">Associations</a>
    </li>
  </ul>
  <div class=\"tab-content\" id=\"myTabContent\">
  ";
        // line 20
        echo "    <div class=\"tab-pane fade show active\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
      <table class=\"table w-50\">
              <tbody>
                  <tr>
                      <th>Name :</th>
                      <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "userName", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
                  </tr>
                  <tr>
                      <th>Email : </th>
                      <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "userEmail", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
                  </tr>
                  <tr>
                      <th>Created at :</th>
                      <td>";
        // line 33
        ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "userCreatedAt", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "userCreatedAt", [], "any", false, false, false, 33), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                  </tr>
                  <tr>
                      <th>Videos watched :</th>
                      <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "userClics", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
                  </tr>
              </tbody>
          </table>
      </div>

      ";
        // line 44
        echo "    <div class=\"tab-pane fade container\" id=\"associations\" role=\"tabpanel\" aria-labelledby=\"associations-tab\">
      <a class=\"btn btn-outline-primary\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_add_assoc");
        echo "\">Add</a>
      ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "associationsGerees", [], "any", false, false, false, 46)) {
            // line 47
            echo "      <div class=\"d-flex flex-row justify-content-between\">
        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "associationsGerees", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
                // line 49
                echo "          <div class=\"media bg-dark p-3 m-3 rounded\">
            <a class=\"d-flex\" href=\"#\">
              <img src=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/logo/" . twig_get_attribute($this->env, $this->source, $context["association"], "assLogo", [], "any", false, false, false, 51))), "html", null, true);
                echo "\"  class=\"ass_logo\" alt=\"\">
            </a>
            <div class=\"media-body\">
              <h5>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "assNom", [], "any", false, false, false, 54), "html", null, true);
                echo "</h5>
              <p>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "assDescription", [], "any", false, false, false, 55), "html", null, true);
                echo "</p>
              <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\" class=\"btn btn-outline-warning\">Edit</a>
              <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["association"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\" class=\"btn btn-outline-danger\" onclick=\"return confirm('Cette action est définitive, êtes vous sûr de vouloir supprimer cette association du site?');\">Delete</a>
            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "      </div>
      ";
        }
        // line 63
        echo "      <div class=\"d-flex flex-row justify-content-between\">
        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "associations", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["association"]) {
            // line 65
            echo "          <div class=\"media bg-dark p-3 m-3\">
            <a class=\"d-flex\" href=\"#\">
              <img src=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/logo/" . twig_get_attribute($this->env, $this->source, $context["association"], "assLogo", [], "any", false, false, false, 67))), "html", null, true);
            echo "\"  class=\"ass_logo\" alt=\"\">
            </a>
            <div class=\"media-body\">
              <h5>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "assNom", [], "any", false, false, false, 70), "html", null, true);
            echo "</h5>
              ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["association"], "assDescription", [], "any", false, false, false, 71), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['association'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "      </div>
    </div>
  </div>
</div>

    <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)]), "html", null, true);
        echo "\">Edit</a>
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
        return array (  250 => 80,  243 => 75,  233 => 71,  229 => 70,  223 => 67,  219 => 65,  215 => 64,  212 => 63,  208 => 61,  198 => 57,  194 => 56,  190 => 55,  186 => 54,  180 => 51,  176 => 49,  172 => 48,  169 => 47,  167 => 46,  163 => 45,  160 => 44,  151 => 37,  144 => 33,  137 => 29,  130 => 25,  123 => 20,  112 => 10,  102 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{user}}{% endblock %}

{% block styles %}
    {{ encore_entry_link_tags('add_assoc') }}
{% endblock %}

{% block body %}
  <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
    <li class=\"nav-item\">
      <a class=\"nav-link active\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"true\">Profile</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" id=\"associations-tab\" data-toggle=\"tab\" href=\"#associations\" role=\"tab\" aria-controls=\"associations\" aria-selected=\"false\">Associations</a>
    </li>
  </ul>
  <div class=\"tab-content\" id=\"myTabContent\">
  {#  onglet Profile #}
    <div class=\"tab-pane fade show active\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
      <table class=\"table w-50\">
              <tbody>
                  <tr>
                      <th>Name :</th>
                      <td>{{ user.userName }}</td>
                  </tr>
                  <tr>
                      <th>Email : </th>
                      <td>{{ user.userEmail }}</td>
                  </tr>
                  <tr>
                      <th>Created at :</th>
                      <td>{{ user.userCreatedAt ? user.userCreatedAt|date('Y-m-d H:i:s') : '' }}</td>
                  </tr>
                  <tr>
                      <th>Videos watched :</th>
                      <td>{{ user.userClics }}</td>
                  </tr>
              </tbody>
          </table>
      </div>

      {# onglet associations #}
    <div class=\"tab-pane fade container\" id=\"associations\" role=\"tabpanel\" aria-labelledby=\"associations-tab\">
      <a class=\"btn btn-outline-primary\" href=\"{{ path('user_add_assoc') }}\">Add</a>
      {% if user.associationsGerees %}
      <div class=\"d-flex flex-row justify-content-between\">
        {% for association in user.associationsGerees %}
          <div class=\"media bg-dark p-3 m-3 rounded\">
            <a class=\"d-flex\" href=\"#\">
              <img src=\"{{ asset( 'img/logo/' ~ association.assLogo ) }}\"  class=\"ass_logo\" alt=\"\">
            </a>
            <div class=\"media-body\">
              <h5>{{association.assNom}}</h5>
              <p>{{association.assDescription}}</p>
              <a href=\"{{ path('association_edit', {\"id\": association.id}) }}\" class=\"btn btn-outline-warning\">Edit</a>
              <a href=\"{{ path('association_delete', {\"id\": association.id}) }}\" class=\"btn btn-outline-danger\" onclick=\"return confirm('Cette action est définitive, êtes vous sûr de vouloir supprimer cette association du site?');\">Delete</a>
            </div>
          </div>
        {% endfor %}
      </div>
      {% endif %}
      <div class=\"d-flex flex-row justify-content-between\">
        {% for association in user.associations %}
          <div class=\"media bg-dark p-3 m-3\">
            <a class=\"d-flex\" href=\"#\">
              <img src=\"{{ asset( 'img/logo/' ~ association.assLogo ) }}\"  class=\"ass_logo\" alt=\"\">
            </a>
            <div class=\"media-body\">
              <h5>{{association.assNom}}</h5>
              {{association.assDescription}}
            </div>
          </div>
        {% endfor %}
      </div>
    </div>
  </div>
</div>

    <a href=\"{{ path('user_edit', {'id': user.id}) }}\">Edit</a>
{% endblock %}
", "user/show.html.twig", "C:\\Users\\joce\\Documents\\OpenCampus\\EcoProject\\ecoView\\templates\\user\\show.html.twig");
    }
}
