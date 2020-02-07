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

/* layout/user/delete.php */
class __TwigTemplate_55ba625e25f3350e9eccf3ce71a681e08e6d2f56cd2a60290dfa67bda6255c87 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("templates/main.php", "layout/user/delete.php", 1);
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
              <li class=\"breadcrumb-item\"><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/user\">Usuarios</a></li>
              <li class=\"breadcrumb-item\">Eliminar Usuario</li>
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
        echo "
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card-box\">

        <h4 class=\"card-title\">Eliminar Usuario</h4>

        <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/user/delete\" method=\"POST\">

          <!--fila -->
          <div class=\"row\" id=\"formRegister\">

            <!--campo de id de usuario bloqueado por default-->
            <div class=\"form-group col-lg-3\">
              <div class=\"input-group\">
                <span class=\"input-group-addon\">#</span>
                <input type=\"text\" name=\"id\" class=\"form-control\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["delete"] ?? null), "id", [], "any", false, false, false, 36), "html", null, true);
        echo "\" required readonly>
              </div>
            </div>

            <!--campo de usuario bloqueado por default-->
            <div class=\"form-group col-lg-3\">
              <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                <input type=\"text\" name=\"user\" class=\"form-control\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["delete"] ?? null), "user", [], "any", false, false, false, 44), "html", null, true);
        echo "\" required dissabeled>
              </div>
            </div>

            <!--campo de usuario bloqueado por default-->
            <div class=\"form-group col-lg-3\">
              <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-building\"></i></span>
                <input type=\"text\" name=\"enterprise\" class=\"form-control\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["delete"] ?? null), "enterprise", [], "any", false, false, false, 52), "html", null, true);
        echo "\" required dissabeled>
              </div>
            </div>

            <!--pre confirmacion-->
            <div class=\"form-group col-lg-3\">
              <button type=\"button\" class=\"btn btn-danger btn-block\" id=\"btnShow\">ELIMINAR</button>
            </div>

          </div>

          <div class=\"row\" id=\"formConfirm\" hidden>
            <!--mensaje de confirmacion-->
            <div class=\"form-group col-lg-8\">
              <h4 class=\"text-danger text-center\">Desea eliminar al usuario ";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["delete"] ?? null), "user", [], "any", false, false, false, 66), "html", null, true);
        echo "?</h4>
            </div>
            <!--boton cancelar-->
            <div class=\"form-group col-lg-2\">
              <button type=\"button\" class=\"btn btn-danger btn-block\" id=\"btnHide\">CANCELAR</button>
            </div>
            <!--confirmacion y submit-->
            <div class=\"form-group col-lg-2\">
              <button type=\"submit\" class=\"btn btn-success btn-block\">CONFIRMAR</button>
            </div>

          </div>
      
        </form>

        </div>
      </div>
    </div>

";
        // line 85
        $this->loadTemplate("templates/partials/user/user-table.php", "layout/user/delete.php", 85)->display($context);
        // line 86
        echo "
";
    }

    // line 89
    public function block_extras($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/extra/js/formdump.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "layout/user/delete.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 91,  172 => 90,  168 => 89,  163 => 86,  161 => 85,  139 => 66,  122 => 52,  111 => 44,  100 => 36,  88 => 27,  79 => 20,  75 => 19,  63 => 10,  59 => 9,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/user/delete.php", "/var/www/html/tablero-general/app/views/layout/user/delete.php");
    }
}
