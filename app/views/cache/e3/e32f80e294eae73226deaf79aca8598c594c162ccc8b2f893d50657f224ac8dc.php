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

/* layout/datastudio/project.php */
class __TwigTemplate_c85e247db4439fc5e21a8dbbd72218fff2aa41fc4ac6e7cc77f49b2743f9ef76 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("templates/main.php", "layout/datastudio/project.php", 1);
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
        echo "\">Inicio</a></li>
              <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "\">Data Studio</a></li>
              <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/data-studio/project\">Proyectos</a></li>
              <li class=\"breadcrumb-item\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "project", [], "any", false, false, false, 12), "html", null, true);
        echo "</li>
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
        echo "<div class=\"row\">
  <iframe class=\"col-lg-12\" width=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "width", [], "any", false, false, false, 22), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "height", [], "any", false, false, false, 22), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "url", [], "any", false, false, false, 22), "html", null, true);
        echo "\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe></body>
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/datastudio/project.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  85 => 21,  81 => 20,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/datastudio/project.php", "/var/www/html/tablero-general/app/views/layout/datastudio/project.php");
    }
}
