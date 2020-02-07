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

/* layout/user/index.php */
class __TwigTemplate_3dc5402a8232f66cbb74a30b174ecde3d6b5dce033c10f5a9edccf78a595aa6b extends \Twig\Template
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
        $this->parent = $this->loadTemplate("templates/main.php", "layout/user/index.php", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card-box\">
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/\">Inicio</a></li>
              <li class=\"breadcrumb-item\">Usuarios</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>

";
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "
  ";
        // line 22
        $this->loadTemplate("templates/partials/user/user-table.php", "layout/user/index.php", 22)->display($context);
        // line 23
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout/user/index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  79 => 22,  76 => 21,  72 => 20,  59 => 10,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/user/index.php", "/var/www/html/tablero-general/app/views/layout/user/index.php");
    }
}
