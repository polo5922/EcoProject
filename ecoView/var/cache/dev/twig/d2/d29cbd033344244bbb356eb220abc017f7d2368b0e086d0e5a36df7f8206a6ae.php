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
class __TwigTemplate_ee62bb9bd2d0d3bcc1fca594595cbd48ddedfaf0802d5c175a31d4e46f84ba14 extends Template
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

        echo "Hello HomeController!";
        
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
        echo "

    <div class=\"container\">
        <h1 class=\"text-center py-3\">Eco <img src=\"img/coin.png\" width=\"40px\"><img> View</h1>
        <p class=\" py-3\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae fugit, aliquam nostrum tenetur iste sunt sapiente. Soluta quidem cumque porro, vel blanditiis, sit eum magnam et, similique aut quia officiis.</p>
        <form class=\"d-flex align-items-center flex-col py-3 flex-column\">
            <input class=\"form-control w-25\" type=\"text\" name=\"\" id=\"pseudo\" placeholder=\"name\" value=\"\">
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
                            <tr>
                                <td>1</td>
                                <td>Jean</td>
                                <td>5284</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>test</td>
                                <td>4982</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>jack</td>
                                <td>3749</td>
                            </tr>
                            <tr>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>4</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </aside>
    </div>

    <script src=\"js/script.js\"></script>
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
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}


    <div class=\"container\">
        <h1 class=\"text-center py-3\">Eco <img src=\"img/coin.png\" width=\"40px\"><img> View</h1>
        <p class=\" py-3\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae fugit, aliquam nostrum tenetur iste sunt sapiente. Soluta quidem cumque porro, vel blanditiis, sit eum magnam et, similique aut quia officiis.</p>
        <form class=\"d-flex align-items-center flex-col py-3 flex-column\">
            <input class=\"form-control w-25\" type=\"text\" name=\"\" id=\"pseudo\" placeholder=\"name\" value=\"\">
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
                            <tr>
                                <td>1</td>
                                <td>Jean</td>
                                <td>5284</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>test</td>
                                <td>4982</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>jack</td>
                                <td>3749</td>
                            </tr>
                            <tr>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>4</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </aside>
    </div>

    <script src=\"js/script.js\"></script>
{% endblock %}
", "home/index.html.twig", "D:\\wamp64\\www\\EcoProject\\ecoView\\templates\\home\\index.html.twig");
    }
}
