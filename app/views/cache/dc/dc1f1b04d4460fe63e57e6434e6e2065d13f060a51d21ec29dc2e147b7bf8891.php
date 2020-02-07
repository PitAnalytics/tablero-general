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

/* layout/facturas/validacion.php */
class __TwigTemplate_fa85c876a264800ff7697a53b5fbb1ac27949c0a99eaa5bff2398d328294332e extends \Twig\Template
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
        return "templates/facturas.php";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("templates/facturas.php", "layout/facturas/validacion.php", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"card card-body rounded-0\">
          <ol class=\"breadcrumb my-0\" style=\"background-color: white;\">
            <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
            <li class=\"breadcrumb-item active\">About</li>
          </ol>
        </div>
      </div>
    </div>
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "<div class=\"row justify-content-center mt-4\">
  <div class=\"col-12 col-md-12 col-lg-12 pb-5\">
    <div class=\"card rounded-0\">
      <div class=\"card-body p-3\">
        <form class=\"container-fluid\" method=\"POST\" action=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/facturas/validacion/simple\">
          <div class=\"row mb-2\">
            <div class=\"form-group col-sm-6 col-lg-3\">
              <div class=\"input-group mb-2\">
                <div class=\"input-group-prepend\">
                  <div class=\"input-group-text bg-info\">
                    <i class=\"fas fa-address-card text-white\"></i>
                  </div>
                </div>
                <input class=\"form-control rounded-0\" type=\"text\" class=\"form-control\" id=\"nombre\" name=\"rfc_emisor\" placeholder=\"RFC Emisor\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["rfcEmisor"] ?? null), "html", null, true);
        echo "\" required>
              </div>
            </div>
            <div class=\"form-group col-sm-6 col-lg-3\">
              <div class=\"input-group mb-2\">
                <div class=\"input-group-prepend\">
                  <div class=\"input-group-text bg-info\">
                    <i class=\"fas fa-address-card text-white\"></i>
                  </div>
                </div>
                <input class=\"form-control rounded-0\" type=\"text\" class=\"form-control\" id=\"nombre\" name=\"rfc_receptor\" placeholder=\"RFC Receptor\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["rfcReceptor"] ?? null), "html", null, true);
        echo "\" required>
              </div>
            </div>
            <div class=\"form-group col-sm-6 col-lg-3\">
              <div class=\"input-group mb-2\">
                <div class=\"input-group-prepend\">
                  <div class=\"input-group-text bg-info\">
                    <i class=\"fas fa-hashtag text-white\"></i>
                  </div>
                </div>
                <input class=\"form-control rounded-0\" type=\"text\" class=\"form-control\" id=\"nombre\" name=\"uuid\" placeholder=\"UUID\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["uuid"] ?? null), "html", null, true);
        echo "\" required>
              </div>
            </div>
            <div class=\"form-group col-sm-6 col-lg-3\">
              <div class=\"input-group mb-2\">
                <div class=\"input-group-prepend\">
                  <div class=\"input-group-text bg-info\">
                    <i class=\"fas fa-dollar-sign text-white\"></i>
                  </div>
                </div>
                <input class=\"form-control rounded-0\" type=\"text\" class=\"form-control\" id=\"nombre\" name=\"total\" placeholder=\"Total\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
        echo "\" required>
                </div>
              </div>
            </div>
          <div class=\"row\">
            <div class=\"form-group col-lg-3\">
              <input type=\"submit\" value=\"VALIDAR\" class=\"btn btn-info btn-block rounded-0 py-2 text-md-center font-weight-bold\">
            </div>
          </div>
        </form>     
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/facturas/validacion.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 60,  113 => 50,  100 => 40,  87 => 30,  75 => 21,  69 => 17,  65 => 16,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/facturas/validacion.php", "/var/www/html/tablero-general/app/views/layout/facturas/validacion.php");
    }
}
