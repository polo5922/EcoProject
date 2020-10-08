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

/* home/index.html.twig */
class __TwigTemplate_9c5e5e0acec4291d36c800524d3edf9609f53be947c11504551ff1dc76b98f30 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "EcoView
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

    <div class=\"container\">
        <p class=\" py-3\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae fugit, aliquam nostrum tenetur iste sunt sapiente. Soluta quidem cumque porro, vel blanditiis, sit eum magnam et, similique aut quia officiis.</p>
        <form class=\"d-flex align-items-center flex-col py-3 flex-column\">
            <input class=\"form-control w-25\" type=\"text\" name=\"\" id=\"pseudo\" placeholder=\"name\" value=\"";
        // line 12
        ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "html", null, true))) : (print ("")));
        echo "\">
        </form>

    </div>
    <div class=\"container-fluid row h-100\" >
        <aside class=\"col-2\">
            <p>em ipsum, dolor sit amet consectetur adipisicing elit. Veniam molestias necessitatibus corporis voluptatibus distinctio maxime blanditiis perferendis quos quaerat error. Dolores vitae labore voluptatum. Nemo dolorem debitis tempora accusantium quia?</p>
            <div class=\"card bg-transparent\">
                <div class=\"card-header\">
                    Assos
                </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Title</h5>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </aside>

        <div class=\"video_section d-flex justify-content-center align-items-center col-8\">
            <div id=\"video_add\">
                <img src=\"https://www.novup.fr/wp-content/uploads/2016/10/play-button.png\" alt=\"\" srcset=\"\" width=\"50px\">
            </div>
        </div>
        <aside class=\"col-2\">
            <div class=\"card bg-transparent\">
                <div class=\"card-header\">
                    Classement
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <thead class=\"thead\">
                            <tr>
                                <th>Place</th>
                                <th>Nom</th>
                                <th>CLics</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 55
        $context["i"] = 1;
        // line 56
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 57
            echo "                            <tr>
                                <td>";
            // line 58
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 58, $this->source); })()), "html", null, true);
            echo "</td>
                                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userName", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "userClics", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                            </tr>
                        ";
            // line 62
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 62, $this->source); })()) + 1);
            // line 63
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </aside>
    </div>
    <div class=\"js-user-list\" data-user-list=\"";
        // line 70
        echo twig_escape_filter($this->env, json_encode((isset($context["users_names"]) || array_key_exists("users_names", $context) ? $context["users_names"] : (function () { throw new RuntimeError('Variable "users_names" does not exist.', 70, $this->source); })())), "html_attr");
        echo "\">
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("home");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 74,  195 => 73,  182 => 70,  174 => 64,  168 => 63,  166 => 62,  161 => 60,  157 => 59,  153 => 58,  150 => 57,  145 => 56,  143 => 55,  97 => 12,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}EcoView
{% endblock %}

{% block body %}


    <div class=\"container\">
        <p class=\" py-3\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae fugit, aliquam nostrum tenetur iste sunt sapiente. Soluta quidem cumque porro, vel blanditiis, sit eum magnam et, similique aut quia officiis.</p>
        <form class=\"d-flex align-items-center flex-col py-3 flex-column\">
            <input class=\"form-control w-25\" type=\"text\" name=\"\" id=\"pseudo\" placeholder=\"name\" value=\"{{ app.user ? app.user : '' }}\">
        </form>

    </div>
    <div class=\"container-fluid row h-100\" >
        <aside class=\"col-2\">
            <p>em ipsum, dolor sit amet consectetur adipisicing elit. Veniam molestias necessitatibus corporis voluptatibus distinctio maxime blanditiis perferendis quos quaerat error. Dolores vitae labore voluptatum. Nemo dolorem debitis tempora accusantium quia?</p>
            <div class=\"card bg-transparent\">
                <div class=\"card-header\">
                    Assos
                </div>
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Title</h5>
                    <ul>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </aside>

        <div class=\"video_section d-flex justify-content-center align-items-center col-8\">
            <div id=\"video_add\">
                <img src=\"https://www.novup.fr/wp-content/uploads/2016/10/play-button.png\" alt=\"\" srcset=\"\" width=\"50px\">
            </div>
        </div>
        <aside class=\"col-2\">
            <div class=\"card bg-transparent\">
                <div class=\"card-header\">
                    Classement
                </div>
                <div class=\"card-body\">
                    <table class=\"table\">
                        <thead class=\"thead\">
                            <tr>
                                <th>Place</th>
                                <th>Nom</th>
                                <th>CLics</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% set i = 1 %}
                        {% for user in users %}
                            <tr>
                                <td>{{ i }}</td>
                                <td>{{ user.userName }}</td>
                                <td>{{ user.userClics }}</td>
                            </tr>
                        {% set i = i + 1 %}
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </aside>
    </div>
    <div class=\"js-user-list\" data-user-list=\"{{ users_names |json_encode|e('html_attr') }}\">
    </div>
{% endblock %}
{% block javascripts %}
{{ encore_entry_script_tags('home') }}
{% endblock %}
", "home/index.html.twig", "D:\\wamp64\\www\\EcoProject\\ecoView\\templates\\home\\index.html.twig");
    }
}
