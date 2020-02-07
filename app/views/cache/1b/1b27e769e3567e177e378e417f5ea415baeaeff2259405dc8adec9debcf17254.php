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

/* layout/facturas/index.php */
class __TwigTemplate_9b7e53038a550e70044a617871e81d2874fdd729761146755b05b3b4142b07c0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "templates/facturas.php";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("templates/facturas.php", "layout/facturas/index.php", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "layout/facturas/index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/facturas/index.php", "/var/www/html/tablero-general/app/views/layout/facturas/index.php");
    }
}
