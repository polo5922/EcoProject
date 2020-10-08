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

/* home/js/script.js */
class __TwigTemplate_e27e50da3cb379b3d5db8c783b0bbfa643499e378d92ce800b3dde0e8128bd87 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/js/script.js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/js/script.js"));

        // line 1
        echo "\$(document).ready( function() {
    const pseudos = [
        'jean',
        'test',
        'jack'
    ]
    console.log(\"ready\");
    \$(\"#pseudo\").on('focusout',function(){
        if(\$(this).val() > \"\")
        {
            if(!pseudos.includes(\$(this).val())){
                console.log('pseudo : '+\$('#pseudo').val());
            } else {
                var flash = \$(document.createElement('span'));
                flash.addClass('alert alert-danger alert-dismissible fade show').text('Pseudo déjà utilisé');
                \$('#pseudo').parent().append(flash);
                console.log('pseudo deja pris');
            }
        }
        
    });
});";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/js/script.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\$(document).ready( function() {
    const pseudos = [
        'jean',
        'test',
        'jack'
    ]
    console.log(\"ready\");
    \$(\"#pseudo\").on('focusout',function(){
        if(\$(this).val() > \"\")
        {
            if(!pseudos.includes(\$(this).val())){
                console.log('pseudo : '+\$('#pseudo').val());
            } else {
                var flash = \$(document.createElement('span'));
                flash.addClass('alert alert-danger alert-dismissible fade show').text('Pseudo déjà utilisé');
                \$('#pseudo').parent().append(flash);
                console.log('pseudo deja pris');
            }
        }
        
    });
});", "home/js/script.js", "D:\\wamp64\\www\\EcoProject\\ecoView\\templates\\home\\js\\script.js");
    }
}
