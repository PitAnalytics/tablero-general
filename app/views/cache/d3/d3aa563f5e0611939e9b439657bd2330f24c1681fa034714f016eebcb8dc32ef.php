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

/* templates/facturas.php */
class __TwigTemplate_b2e7a80b133a9aa5e0a523dff3d8f238c0285c7d56afa9f5f158332b23ecda3d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">

<head>

  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>Modern Business - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css\">
</head>

<body style=\"margin-top:60px; background: rgb(160,160,160);\">

  <!-- Navigation -->
  <nav class=\"navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"index.html\">Start Bootstrap</a>
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul class=\"navbar-nav ml-auto\">
          <li class=\"nav-item dropdown text-dark\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownBlog\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              <i class=\"fas fa-check text-success\"></i><span class=\"ml-2\">Validar</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownBlog\">
              <a class=\"dropdown-item\" href=\"blog-home-1.html\"><i class=\"fas fa-pencil-alt\"></i><span class=\"ml-2\">Manual</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class=\"container\">

  ";
        // line 45
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 50
        echo "


  ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "  </div>

  <!-- Footer -->
  <footer class=\"py-2 bg-light fixed-bottom\">
    <div class=\"container\">
      <p class=\"m-0 text-center\">Copyright &copy; Your Website 2019</p>
    </div>
  </footer>

<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>

</body>

</html>
";
    }

    // line 45
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "


  ";
    }

    // line 53
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "


  ";
    }

    public function getTemplateName()
    {
        return "templates/facturas.php";
    }

    public function getDebugInfo()
    {
        return array (  129 => 54,  125 => 53,  118 => 46,  114 => 45,  94 => 58,  92 => 53,  87 => 50,  85 => 45,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "templates/facturas.php", "/var/www/html/tablero-general/app/views/templates/facturas.php");
    }
}
