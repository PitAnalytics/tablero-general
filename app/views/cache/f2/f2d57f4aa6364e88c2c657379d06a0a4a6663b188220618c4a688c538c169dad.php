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

/* templates/sign.php */
class __TwigTemplate_4f536b60cc496516ad7cfc09eca06c7622b787d88338c3ede67abfb85483ea6e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"sp\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

  <title>Inicio de Sesión</title>
  <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($this->extensions['Slim\Views\TwigExtension']->baseUrl() . "/"), "html", null, true);
        echo "extra/img/logo-pit-escudo.jpg\">

  
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($this->extensions['Slim\Views\TwigExtension']->baseUrl() . "/"), "html", null, true);
        echo "extra/css/login.css\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css\">

</head>
<body>

  <div class=\"container\">
    ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "  </div>

  <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
</body>
</html>";
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "


    ";
    }

    public function getTemplateName()
    {
        return "templates/sign.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  77 => 20,  67 => 25,  65 => 20,  55 => 13,  48 => 9,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "templates/sign.php", "/var/www/html/tablero-general/app/views/templates/sign.php");
    }
}
