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

/* templates/partials/main/topbar.php */
class __TwigTemplate_d832259dc5ca1f9524b3d2856161e05d4a2d9b8868511694cc0d128e29f02ed1 extends \Twig\Template
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
        echo "        <!-- Top Bar Start -->
        <div class=\"topbar\">
          <!-- LOGO -->
          <div class=\"topbar-left\">
            <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, ($this->extensions['Slim\Views\TwigExtension']->baseUrl() . "/"), "html", null, true);
        echo "index.html\" class=\"logo\"><span>PIT<span>Sistemas</span></span><i class=\"zmdi zmdi-layers\"></i></a>
          </div>
          <!-- Button mobile view to collapse sidebar menu -->
          <div class=\"navbar navbar-default\" role=\"navigation\">
            <div class=\"container\">

              <!-- Page title -->
              <ul class=\"nav navbar-nav navbar-left\">
                <li>
                  <button class=\"button-menu-mobile open-left\">
                    <i class=\"zmdi zmdi-menu\"></i>
                  </button>
                </li>
                <li>
                  <h4 class=\"page-title\">";
        // line 19
        echo twig_escape_filter($this->env, ($context["page"] ?? null), "html", null, true);
        echo "</h4>
                </li>
              </ul>
              <!-- Right(Notification and Searchbox -->
              <ul class=\"nav navbar-nav navbar-right\">
                <li>
                  <!-- Notification -->
                  <div class=\"notification-box\">
                    <ul class=\"list-inline m-b-0\">

                      <!--li>
                        <a href=\"javascript:void(0);\" class=\"right-bar-toggle\"><i class=\"zmdi zmdi-notifications-none\"></i></a>
                        <div class=\"noti-dot\">
                          <span class=\"dot\"></span>
                          <span class=\"pulse\"></span>
                        </div>
                      </li-->

                      <li>
                        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, ($this->extensions['Slim\Views\TwigExtension']->baseUrl() . "/user/signout"), "html", null, true);
        echo "\" ><i class=\"fa fa-sign-out\"></i></a>
                      </li>
                    </ul>
                  </div>
                <!-- End Notification bar -->
                </li>
              </ul>
            </div>
              <!-- end container -->
          </div>
          <!-- end navbar -->
        </div>
        <!-- Top Bar End -->";
    }

    public function getTemplateName()
    {
        return "templates/partials/main/topbar.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 38,  60 => 19,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "templates/partials/main/topbar.php", "/var/www/html/tablero-general/app/views/templates/partials/main/topbar.php");
    }
}
