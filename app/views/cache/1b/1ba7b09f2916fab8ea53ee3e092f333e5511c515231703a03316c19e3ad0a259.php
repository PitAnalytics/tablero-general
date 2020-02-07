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

/* layout/user/signin.php */
class __TwigTemplate_c3215d253bc48e494f5aeea344dda5d15ea021db811e58261368c767457f831f extends \Twig\Template
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
        // line 2
        return "templates/sign.php";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("templates/sign.php", "layout/user/signin.php", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "


";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
    <div class=\"row\">
      <div class=\"col-md-12 col-lg-6 mx-auto my-auto\">

        <div class=\"card\">

          <div class=\"card-image px-4 py-4\">
            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/extra/img/logo-pit.jpg\" class=\"card-img-top\">
          </div>

          <div class=\"card-body\">

            <form action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->baseUrl(), "html", null, true);
        echo "/user/signin\" method=\"POST\">

              <div class=\"input-group my-4\">
                <div class=\"input-group-prepend\">
                  <div class=\"input-group-text\"><i class=\"fas fa-user\"></i></div>
                </div>
                <input type=\"text\" class=\"form-control";
        // line 29
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "user", [], "any", false, false, false, 29)) ? (" is-invalid") : (""));
        echo "\" name=\"user\" placeholder=\"usuario\" required>
              </div>

                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "user", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 33
            echo "                  <span class=\"text-danger\">";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</span><br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
                <div class=\"input-group my-4\">
                  <div class=\"input-group-prepend\">
                    <div class=\"input-group-text\"><i class=\"fas fa-key\"></i></div>
                  </div>
                  <input type=\"password\" class=\"form-control";
        // line 40
        echo ((twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 40)) ? (" is-invalid") : (""));
        echo "\" name=\"password\" placeholder=\"password\" required>
                </div>

                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 44
            echo "                  <span class=\"text-danger\">";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</span><br>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
              <div class=\"form-group\">
                <button class=\"btn btn-block\" type=\"submit\">ACCEDER</button>
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
        return "layout/user/signin.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 46,  124 => 44,  120 => 43,  114 => 40,  107 => 35,  98 => 33,  94 => 32,  88 => 29,  79 => 23,  71 => 18,  62 => 11,  58 => 10,  51 => 5,  47 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/user/signin.php", "/var/www/html/tablero-general/app/views/layout/user/signin.php");
    }
}
