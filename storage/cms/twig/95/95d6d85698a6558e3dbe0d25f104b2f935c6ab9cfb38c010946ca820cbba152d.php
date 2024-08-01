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

/* C:\xampp\htdocs\PQ/themes/baba-adminlte/pages/crear-estudio.htm */
class __TwigTemplate_b9e786369a27b243dbd57ef9eb3984e6d97202dbd85d14e7c24f35f921894873 extends \Twig\Template
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
        echo "<!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <!-- left column -->
        <div class=\"col-md-6\">
          <!-- general form elements -->
          <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Informacíon general del estudio. </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            ";
        // line 15
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("estudioform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 16
        echo "          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class=\"col-md-6\">
          <!-- Horizontal Form -->
          <!-- /.box -->
          <!-- general form elements disabled -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\PQ/themes/baba-adminlte/pages/crear-estudio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  58 => 15,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'session' %}
<!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <!-- left column -->
        <div class=\"col-md-6\">
          <!-- general form elements -->
          <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
              <h3 class=\"box-title\">Informacíon general del estudio. </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            {% component 'estudioform' %}
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class=\"col-md-6\">
          <!-- Horizontal Form -->
          <!-- /.box -->
          <!-- general form elements disabled -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->", "C:\\xampp\\htdocs\\PQ/themes/baba-adminlte/pages/crear-estudio.htm", "");
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
