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

/* C:\xampp\htdocs\PQ/themes/baba-adminlte/pages/panel-de-administracion.htm */
class __TwigTemplate_fe84e829d6ec69d95b9242525ce2126208ae7da28fbc06798431d9c926ce44cc extends \Twig\Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<!-- Small boxes (Stat box) -->
      <div class=\"row\">
        <div class=\"box box-primary\">
          <div class=\"box-header with-border\">
            <h3 class=\"box-title\">
              Bienvenido
            </h3>
          </div>
          <!-- /.box-header -->
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
      </div>
      
<div class=\"row\">
  <!-- Left col -->
  <section class=\"col-lg-12\">
    <p>Use el menú de la izquierda para agregar estudios, usuarios y contenido.</p>
  </section>
      <!-- /.row -->
      <!-- Main row -->
   
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <!-- right col -->
      </div>
      
      <!-- /.row (main row) -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\PQ/themes/baba-adminlte/pages/panel-de-administracion.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'session' %}

<!-- Small boxes (Stat box) -->
      <div class=\"row\">
        <div class=\"box box-primary\">
          <div class=\"box-header with-border\">
            <h3 class=\"box-title\">
              Bienvenido
            </h3>
          </div>
          <!-- /.box-header -->
        </div>
        <!-- ./col -->
        
        <!-- ./col -->
      </div>
      
<div class=\"row\">
  <!-- Left col -->
  <section class=\"col-lg-12\">
    <p>Use el menú de la izquierda para agregar estudios, usuarios y contenido.</p>
  </section>
      <!-- /.row -->
      <!-- Main row -->
   
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <!-- right col -->
      </div>
      
      <!-- /.row (main row) -->", "C:\\xampp\\htdocs\\PQ/themes/baba-adminlte/pages/panel-de-administracion.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 1);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                [],
                []
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
