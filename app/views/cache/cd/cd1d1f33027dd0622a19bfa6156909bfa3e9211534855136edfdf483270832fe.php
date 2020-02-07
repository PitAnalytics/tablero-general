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

/* templates/partials/main/leftbar.php */
class __TwigTemplate_1aba7fa9df765218f59b49a628814f0842aa974c2f8ed2be40976a61a2abbd20 extends \Twig\Template
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
        echo "            <!-- ========== Left Sidebar Start ========== -->
            <div class=\"left side-menu\">
              <div class=\"sidebar-inner slimscrollleft\">
              
                <!-- User -->
                <div class=\"user-box\">
                  <div class=\"user-img\">
                    <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/extra/img/logo-pit-escudo.jpg\" alt=\"user-img\" title=\"Mat Helme\" class=\"img-circle img-thumbnail img-responsive\">
                  </div>
                  <h5><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/#\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "user", [], "any", false, false, false, 10), "html", null, true);
        echo "</a></h5>
                  <ul class=\"list-inline\">
                    <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/#\" ><i class=\"zmdi zmdi-settings\"></i></a></li>
                    <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/#\" class=\"text-custom\"><i class=\"zmdi zmdi-power\"></i></a></li>
                  </ul>
                </div>
                <!-- End User -->

                <!--- Sidebar -->
                <div id=\"sidebar-menu\">
                  <ul>
                    <li class=\"text-muted menu-title\">Menu</li>
                    <li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-dashboard\"></i><span>Inicio</span></a></li>
                    <li><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/data-studio/project\" class=\"waves-effect\"><i class=\"zmdi zmdi-view-dashboard\"></i><span>Data Studio</span></a></li>
                    <li class=\"has_sub\">
                      <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"zmdi zmdi-settings\"></i> <span>Administracion</span> <span class=\"menu-arrow\"></span></a>
                      <ul class=\"list-unstyled\">
                        <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/user\">Gestion de Usuarios</a></li>
                        <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/user\">BigQuery</a></li>
                        <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/data-studio/settings\">Data Studio</a></li>
                      </ul>
                    </li>
                  </ul>
                  <div class=\"clearfix\"></div>
                </div>
                <!-- Sidebar -->

              <div class=\"clearfix\"></div>
            </div>
          </div>
        <!-- Left Sidebar End -->";
    }

    public function getTemplateName()
    {
        return "templates/partials/main/leftbar.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  89 => 28,  85 => 27,  78 => 23,  74 => 22,  62 => 13,  58 => 12,  51 => 10,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "templates/partials/main/leftbar.php", "/var/www/html/tablero-general/app/views/templates/partials/main/leftbar.php");
    }
}
