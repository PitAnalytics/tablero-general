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

/* layout/user/update.php */
class __TwigTemplate_c73de3a92eff8d64296300d13a2b7df5f613896d4abf196561b4279bbb38a304 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("templates/main.php", "layout/user/update.php", 1);
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
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/user\">Usuarios</a></li>
                <li class=\"breadcrumb-item\">Actualizar Privilegios</li>
              </ol>
            </nav>
        </div>
      </div>
    </div>

";
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card-box\">

        <h4 class=\"card-title\">Actalizar Privilegio de Usuario</h4>

        <form action=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/user/update\" method=\"POST\">

          <div class=\"row\" id=\"formRegister\">

            <!--campo de usuario bloqueado por default-->
            <div class=\"form-group col-lg-4\">
              <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                <input type=\"text\" id=\"example-input1-group1\" name=\"user\" class=\"form-control\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["update"] ?? null), "user", [], "any", false, false, false, 37), "html", null, true);
        echo "\" required readonly>
              </div>
            </div>

            <!--privilegios a actualizar-->
            <div class=\"form-group col-lg-4\">
              <div class=\"input-group has-success\">
                <span class=\"input-group-addon\"><i class=\"fa fa-address-card\"></i></span>
                <select name=\"idLevel\" type=\"text\" class=\"form-control\" required>
                  <option value=\"1\">Superadmin</option>
                  <option value=\"2\">Admin</option>
                  <option value=\"3\">Usuario</option>
                  <option value=\"4\" selected>Visitante</option>
                  <option value=\"5\">Inactivo</option>
                </select>
              </div>    
            </div>

            <!--pre confirmacion-->
            <div class=\"form-group col-lg-\">
              <button type=\"button\" class=\"btn btn-success\" id=\"btnShow\">ACTUALIZAR</button>
            </div>

          </div>

          <div class=\"row\" id=\"formConfirm\" hidden>

            <div class=\"form-group col-lg-8\">
              <h4 class=\"text-warning text-center\">Desea actualizar privilegios de usuario ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["update"] ?? null), "user", [], "any", false, false, false, 65), "html", null, true);
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
        // line 86
        $this->loadTemplate("templates/partials/user/user-table.php", "layout/user/update.php", 86)->display($context);
        // line 87
        echo "

";
    }

    // line 92
    public function block_extras($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/extra/js/formdump.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "layout/user/update.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 94,  168 => 93,  164 => 92,  158 => 87,  156 => 86,  132 => 65,  101 => 37,  90 => 29,  81 => 22,  77 => 21,  64 => 11,  60 => 10,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/user/update.php", "/var/www/html/tablero-general/app/views/layout/user/update.php");
    }
}
