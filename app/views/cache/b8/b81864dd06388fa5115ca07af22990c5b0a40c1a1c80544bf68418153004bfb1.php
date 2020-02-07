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

/* templates/main.php */
class __TwigTemplate_7a6ea7436e9f07f668e95be4301dd469e8cf512d1cda5f1a6147432b6948a3d6 extends \Twig\Template
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
            'extras' => [$this, 'block_extras'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>

  ";
        // line 4
        $this->loadTemplate("templates/partials/main/head.php", "templates/main.php", 4)->display($context);
        // line 5
        echo "
    <body class=\"fixed-left\">
      <!-- Begin page -->
      <div id=\"wrapper\">

        ";
        // line 10
        $this->loadTemplate("templates/partials/main/topbar.php", "templates/main.php", 10)->display($context);
        // line 11
        echo "
        ";
        // line 12
        $this->loadTemplate("templates/partials/main/leftbar.php", "templates/main.php", 12)->display($context);
        // line 13
        echo "            <!-- ============================================================== -->
            <!-- Start main Content here -->
            <!-- ============================================================== -->
            <div class=\"content-page\">
                <div class=\"content\">
                    <div class=\"container\">
                      ";
        // line 19
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 24
        echo "
                      ";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "                    </div> 
                </div>
                <footer class=\"footer\">2019 © Pit Sistemas.</footer>
            </div>
            <!-- ============================================================== -->
            <!-- End main content here -->
            <!-- ============================================================== -->

          <!--RIGHTBAR-->

        </div>
        <!-- END wrapper -->
        ";
        // line 42
        $this->loadTemplate("templates/partials/main/feet.php", "templates/main.php", 42)->display($context);
        // line 43
        echo "

        ";
        // line 45
        $this->displayBlock('extras', $context, $blocks);
        // line 49
        echo "

  </body>
</html>";
    }

    // line 19
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "


                      ";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
    

                      ";
    }

    // line 45
    public function block_extras($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "templates/main.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 46,  127 => 45,  120 => 26,  116 => 25,  109 => 20,  105 => 19,  98 => 49,  96 => 45,  92 => 43,  90 => 42,  76 => 30,  74 => 25,  71 => 24,  69 => 19,  61 => 13,  59 => 12,  56 => 11,  54 => 10,  47 => 5,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "templates/main.php", "/var/www/html/tablero-general/app/views/templates/main.php");
    }
}
