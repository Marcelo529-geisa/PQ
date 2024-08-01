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

/* C:\xampp\htdocs\PQ/themes/baba-adminlte/partials/menu.htm */
class __TwigTemplate_6fff5048d974be9dc2b3357f76197f230df9dae5a3b7dc13fee875d22720bddd extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!--<button type=\"button\" class=\"close\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <ul class=\"navbar-fullscreen-links\">
          <li><a href=\"";
        // line 3
        echo url("/");
        echo "\" title=\"\">Inicio</a></li>
          <li><a href=\"";
        // line 4
        echo url("metodoq");
        echo "\" title=\"\">Acerca de la Q</a></li>
          <li><a href=\"";
        // line 5
        echo url("Panel");
        echo "\" title=\"\">Panel de Control</a></li>
          <li><a href=\"";
        // line 6
        echo url("contacto");
        echo "\" title=\"\">Contacto</a></li>
        </ul>-->
<ul class=\"nav\" style=\"display: flex; flex-direction: row; justify-content: flex-end; margin-right: 70px;\">
  <li class=\"nav-item\">
    <a href=\"";
        // line 10
        echo url("/");
        echo "\" title=\"\" style=\"font-weight: 600;\">Inicio</a>
  </li>
  <li class=\"nav-item\">
    <a href=\"";
        // line 13
        echo url("metodoq");
        echo "\" title=\"\" style=\"font-weight: 600;\">Acerca de la Q</a>
  </li>
  <li class=\"nav-item\">
    <a href=\"";
        // line 16
        echo url("Panel");
        echo "\" title=\"\" style=\"font-weight: 600;\">Panel de Control</a>
  </li>
  <li class=\"nav-item\">
    <a href=\"";
        // line 19
        echo url("contacto");
        echo "\" title=\"\" style=\"font-weight: 600;\">Contacto</a>
  </li>
</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\PQ/themes/baba-adminlte/partials/menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  74 => 16,  68 => 13,  62 => 10,  55 => 6,  51 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--<button type=\"button\" class=\"close\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <ul class=\"navbar-fullscreen-links\">
          <li><a href=\"{{url('/')}}\" title=\"\">Inicio</a></li>
          <li><a href=\"{{url('metodoq')}}\" title=\"\">Acerca de la Q</a></li>
          <li><a href=\"{{url('Panel')}}\" title=\"\">Panel de Control</a></li>
          <li><a href=\"{{url('contacto')}}\" title=\"\">Contacto</a></li>
        </ul>-->
<ul class=\"nav\" style=\"display: flex; flex-direction: row; justify-content: flex-end; margin-right: 70px;\">
  <li class=\"nav-item\">
    <a href=\"{{url('/')}}\" title=\"\" style=\"font-weight: 600;\">Inicio</a>
  </li>
  <li class=\"nav-item\">
    <a href=\"{{url('metodoq')}}\" title=\"\" style=\"font-weight: 600;\">Acerca de la Q</a>
  </li>
  <li class=\"nav-item\">
    <a href=\"{{url('Panel')}}\" title=\"\" style=\"font-weight: 600;\">Panel de Control</a>
  </li>
  <li class=\"nav-item\">
    <a href=\"{{url('contacto')}}\" title=\"\" style=\"font-weight: 600;\">Contacto</a>
  </li>
</ul>", "C:\\xampp\\htdocs\\PQ/themes/baba-adminlte/partials/menu.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array("url" => 3);

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
