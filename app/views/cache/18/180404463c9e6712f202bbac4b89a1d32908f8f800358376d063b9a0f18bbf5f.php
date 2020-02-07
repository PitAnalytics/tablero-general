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

/* layout/home/index.php */
class __TwigTemplate_47e58fd5d2c1c332be0c91609e98db282fcb6b3fe2a14ba132dc3539902d2eb5 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("templates/main.php", "layout/home/index.php", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <link href=\"assets/css/parallax.css\" rel=\"stylesheet\" type=\"text/css\" />
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card-box\">
          <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
              <li class=\"breadcrumb-item\">Inicio</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
";
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "<div class=\"wrapper\">         
  <section id=\"parallax1\">
    <h1>Ofrecemos Servicios de Calidad</h1>
  </section>
  <section id=\"parallax2\">
  </section>
  <section id=\"parallax3\">
    <h1>Utilizamos la inteligencia en el negocio</h1>
  </section>
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/home/index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 19,  67 => 18,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/home/index.php", "/var/www/html/tablero-general/app/views/layout/home/index.php");
    }
}
