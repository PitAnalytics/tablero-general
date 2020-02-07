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

/* templates/partials/user/user-table.php */
class __TwigTemplate_856c531d87030d559fdf3f9d8f72050f2651439f349ada3796a7a2b3e3ba58db extends \Twig\Template
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
        echo "<div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card-box\">

          <div class=\"dropdown pull-right\">
            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($this->extensions['Slim\Views\TwigExtension']->baseUrl() . "/user/signup"), "html", null, true);
        echo "\" class=\"btn btn-success\">Agregar</a>
          </div>

          <h4 class=\"card-title\">Lista de Usuarios Registrados</h4>
          <!-- Fila principal -->
          <div class=\"row\">
            <!-- Columna principal -->
            <div class=\"col-lg-12\">
              <table class=\"table\">
                <thead>
                  <tr>
                    <th>Fecha de Registro</th>
                    <th>Usuario</th>
                    <th>Empresa</th>
                    <th>Nivel de acceso</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "                  <tr>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "dateTime", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "user", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "enterprise", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "level", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td class=\"actions\">
                      <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
            echo "/user/update/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\" class=\"text-warning\"><i class=\"fa fa-pencil\"></i></a>
                      <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
            echo "/user/delete/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\" class=\"text-danger\"><i class=\"fa fa-trash-o\"></i></a>
                    </td>
                  </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </tbody>
              </table>
            </div>
            <!-- Fin de columna -->
          </div>
          <!-- Fin de fila -->
        </div>
      </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "templates/partials/user/user-table.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 37,  96 => 33,  90 => 32,  85 => 30,  81 => 29,  77 => 28,  73 => 27,  70 => 26,  66 => 25,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "templates/partials/user/user-table.php", "/var/www/html/tablero-general/app/views/templates/partials/user/user-table.php");
    }
}
