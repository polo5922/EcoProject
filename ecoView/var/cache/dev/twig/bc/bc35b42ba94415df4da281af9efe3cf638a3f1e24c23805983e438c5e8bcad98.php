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

/* home/css/style.css */
class __TwigTemplate_9634a0eddf58292e6082553e0f8ee86b93ff0d651183b22021455c6549661d6a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/css/style.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/css/style.css"));

        // line 1
        echo "@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
*{
    font-family: 'Roboto', sans-serif;
    color: white;
}


body
{
    /* background-image: url(\"https://images.unsplash.com/photo-1517511620798-cec17d428bc0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80\"); */
    margin: 0;
    padding: 0; 
    background:
    /* top, transparent black, faked with gradient */ 
    linear-gradient(
      rgba(0, 0, 0, 0.5), 
      rgba(0, 0, 0, 0.5)
    ),
    /* bottom, image */
    url(\"https://images.unsplash.com/photo-1542273917363-3b1817f69a2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1353&q=80\");

    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;


    
}

.video_section
{
    background-image: url(\"https://images.unsplash.com/photo-1542273917363-3b1817f69a2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1353&q=80\");
    width: 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    border-radius: 10px;
}

#video_add{

    width: 600px;
    height: 300px;
    border-radius: 10px;;
    display: flex;
    align-items: center;
    justify-content: center;
}

.top{
    text-decoration: none;
    list-style: none;
}";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/css/style.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
*{
    font-family: 'Roboto', sans-serif;
    color: white;
}


body
{
    /* background-image: url(\"https://images.unsplash.com/photo-1517511620798-cec17d428bc0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80\"); */
    margin: 0;
    padding: 0; 
    background:
    /* top, transparent black, faked with gradient */ 
    linear-gradient(
      rgba(0, 0, 0, 0.5), 
      rgba(0, 0, 0, 0.5)
    ),
    /* bottom, image */
    url(\"https://images.unsplash.com/photo-1542273917363-3b1817f69a2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1353&q=80\");

    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;


    
}

.video_section
{
    background-image: url(\"https://images.unsplash.com/photo-1542273917363-3b1817f69a2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1353&q=80\");
    width: 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    border-radius: 10px;
}

#video_add{

    width: 600px;
    height: 300px;
    border-radius: 10px;;
    display: flex;
    align-items: center;
    justify-content: center;
}

.top{
    text-decoration: none;
    list-style: none;
}", "home/css/style.css", "D:\\wamp64\\www\\EcoProject\\ecoView\\templates\\home\\css\\style.css");
    }
}
