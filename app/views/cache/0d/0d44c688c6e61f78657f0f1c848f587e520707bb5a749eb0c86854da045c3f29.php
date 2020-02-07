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

/* templates/partials/main/head.php */
class __TwigTemplate_51d3012bb4d30e3f09ae12d92bbae3fdf5cc8f2507abbb77a866f3a245ee5359 extends \Twig\Template
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
        // line 1
        echo "  <head>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\">
    <meta name=\"author\" content=\"Coderthemes\">
    <!-- App Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/extra/img/logo-pit-escudo.jpg\">
    <!-- App title -->
    <title>PIT Sistemas</title>
    <!-- App CSS -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/assets/css/core.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/assets/css/components.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/assets/css/icons.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/assets/css/pages.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/assets/css/menu.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/assets/css/responsive.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/assets/js/modernizr.min.js\"></script>

  </head>
";
    }

    public function getTemplateName()
    {
        return "templates/partials/main/head.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "templates/partials/main/head.php", "/var/www/html/tablero-general/app/views/templates/partials/main/head.php");
    }
}
