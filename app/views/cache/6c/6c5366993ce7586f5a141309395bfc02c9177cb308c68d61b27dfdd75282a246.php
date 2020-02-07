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

/* layout/datastudio/index.php */
class __TwigTemplate_6ce0e12267e867a32b2db11fc37384c4aac4800c39f406323d26a2ea54f55657 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("templates/main.php", "layout/datastudio/index.php", 1);
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
              <li class=\"breadcrumb-item\">Data Studio</li>
              <li class=\"breadcrumb-item\">Proyectos</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "<div class=\"row\">
  <div class=\"col-lg-12\">
    <div class=\"card-box\">
      <h4 class=\"card-title\">Projectos</h4>
      <table class=\"table\">
        <thead>
          <tr>
            <th>Proyecto</th>
            <th>Empresa</th>
            <th>Link</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 34
            echo "          <tr>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "project", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "enterprise", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
            echo "/data-studio/project/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\" class=\"btn btn-primary btn-block\" >ABRIR</a></td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
      </table>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/datastudio/index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 40,  105 => 37,  101 => 36,  97 => 35,  94 => 34,  90 => 33,  75 => 20,  71 => 19,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/datastudio/index.php", "/var/www/html/tablero-general/app/views/layout/datastudio/index.php");
    }
}
