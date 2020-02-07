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

/* layout/balanza/informe.php */
class __TwigTemplate_a86902ac09737956e9d89d4941b1596837049f6f3e8a0f63f1762b55a0e38cb8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
            'extras' => [$this, 'block_extras'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "templates/main.php";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("templates/main.php", "layout/balanza/informe.php", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card-box\">
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/\">Inicio</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "


";
    }

    // line 23
    public function block_extras($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/extra/js/formdump.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "layout/balanza/informe.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 25,  85 => 24,  81 => 23,  74 => 18,  70 => 17,  59 => 9,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/balanza/informe.php", "/var/www/html/tablero-general/app/views/layout/balanza/informe.php");
    }
}
