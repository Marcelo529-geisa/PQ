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

/* C:\xampp\htdocs\PQ/themes/baba-adminlte/pages/editar-estudio.htm */
class __TwigTemplate_6f00fd8dfb9e27962e35bd04eb4a4cab64f19699d35d0db919f30489b7558b2d extends \Twig\Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, true, 3);
        // line 4
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 4);
        // line 5
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 5);
        // line 6
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 6);
        // line 7
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 7);
        // line 8
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 8);
        // line 9
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 9);
        // line 10
        echo "<!-- Main cont-ent -->
<div class=\"row\">
  <div class=\"box box-primary\">
    <div class=\"box-header with-border\" style=\"margin-bottom:30px;\">
      <h3 class=\"box-title\">Panel de control del estudio \"";
        // line 14
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "titulo", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "\"</h3>
      <div style=\"float: right;\">
      <button data-request-confirm=\"Are you sure?\" data-request=\"onDelete\" data-request-data=\"estudio-id: ";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "\">
        Eliminar!!
    </button>
    </div>
    </div>
    <!-- /.box-header -->
    <div class=\"col-lg-3 col-xs-6\">
      <!-- small box -->
      <!-- small box -->
      
      <div class=\"small-box bg-aqua\">
        <div class=\"inner\">
          <h3>";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "count", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "</h3>

          <p>InfoPáginas</p>
        </div>
        <div class=\"icon\">
          <i class=\"ion ion-ios-paper\"></i>
        </div>
        <a href=\"";
        // line 35
        echo url("paginas/");
        echo "/";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "\" class=\"small-box-footer\">More info <i
            class=\"fa fa-arrow-circle-right\"></i></a>
      </div>

    </div>

    <div class=\"col-lg-3 col-xs-6\">
      <!-- small box -->
      <div class=\"small-box bg-yellow\">
        <div class=\"inner\">
          <h3>";
        // line 45
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["numero_colab"] ?? null), 45, $this->source), "html", null, true);
        echo "

          </h3>


          <p>Colaboradores</p>
        </div>
        <div class=\"icon\">
          <i class=\"ion ion-ios-person\"></i>
        </div>
        <a href=\"";
        // line 55
        echo url("lista-colaboradores/");
        echo "/";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "\" class=\"small-box-footer\">Ver <i
            class=\"fa fa-arrow-circle-right\"></i></a>
      </div>



    </div>
  </div>
</div>
  <div class=\"row\">
    <div class=\"col-lg-3 col-xs-6\">
      <!-- small box -->
      <div class=\"small-box bg-green\">
        <div class=\"inner\">
          <h3>";
        // line 69
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["numero_afirma"] ?? null), 69, $this->source), "html", null, true);
        echo "

          </h3>


          <p>Afirmaciones</p>
        </div>
        <div class=\"icon\">
          <i class=\"ion ion-ios-albums\"></i>
        </div>
        <a href=\"";
        // line 79
        echo url("afirmaciones/");
        echo "/";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "\" class=\"small-box-footer\">Ver <i
            class=\"fa fa-arrow-circle-right\"></i></a>
      </div>
      


    </div>
    <div class=\"col-lg-3 col-xs-6\">
      <!-- small box -->
      <div class=\"small-box bg-red\">
        <div class=\"inner\">
          <h3>";
        // line 90
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["num_columnas"] ?? null), 90, $this->source), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["num_elementos"] ?? null), 90, $this->source), "html", null, true);
        echo "  

          </h3>


          <p>Columnas | Casilleros  </p>
        </div>
        <div class=\"icon\">
          <i class=\"ion ion-ios-keypad\"></i>
        </div>
        <a href=\"";
        // line 100
        echo url("distribucion/");
        echo "/";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
        echo "\" class=\"small-box-footer\">Ver Distribucion <i
            class=\"fa fa-arrow-circle-right\"></i></a>
      </div>
      


    </div>

  </div>
  <div class=\"row\">
    <div class=\"col-lg-3 col-xs-6\">
      <!-- small box -->
      <div class=\"small-box bg-light-blue\">
        <div class=\"inner\">
          <h3>";
        // line 114
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["answersCount"] ?? null), 114, $this->source), "html", null, true);
        echo "

          </h3>


          <p>Respuestas</p>
        </div>
        <div class=\"icon\">
          <i class=\"ion ion-ios-checkmark\"></i>
        </div>
        <a href=\"";
        // line 124
        echo url("resultados/");
        echo "/";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
        echo "\" class=\"small-box-footer\">Ver <i
            class=\"fa fa-arrow-circle-right\"></i></a>
      </div>
      


    </div>
    <div class=\"col-lg-3 col-xs-6\">
      <!-- small box -->
      <div class=\"small-box bg-olive\">
        <div class=\"inner\">
          <h3>";
        // line 135
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["num_guests"] ?? null), 135, $this->source), "html", null, true);
        echo "

          </h3>


          <p>Participantes </p>
        </div>
        <div class=\"icon\">
          <i class=\"ion ion-ios-people\"></i>
        </div>
        <a href=\"";
        // line 145
        echo url("correo/");
        echo "/";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, true, 145), 145, $this->source), "html", null, true);
        echo "\" class=\"small-box-footer\">Ver <i
            class=\"fa fa-arrow-circle-right\"></i></a>
      </div>
      


    </div>

  </div>

  <section class=\"content\">

    <div class=\"row\">
      <!-- ./col -->

      <!-- left column -->
      <div class=\"col-md-6\">
        <!-- general form elements -->

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
        return "C:\\xampp\\htdocs\\PQ/themes/baba-adminlte/pages/editar-estudio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 145,  232 => 135,  216 => 124,  203 => 114,  184 => 100,  169 => 90,  153 => 79,  140 => 69,  121 => 55,  108 => 45,  93 => 35,  83 => 28,  68 => 16,  63 => 14,  57 => 10,  55 => 9,  53 => 8,  51 => 7,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}
{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}
<!-- Main cont-ent -->
<div class=\"row\">
  <div class=\"box box-primary\">
    <div class=\"box-header with-border\" style=\"margin-bottom:30px;\">
      <h3 class=\"box-title\">Panel de control del estudio \"{{record.titulo}}\"</h3>
      <div style=\"float: right;\">
      <button data-request-confirm=\"Are you sure?\" data-request=\"onDelete\" data-request-data=\"estudio-id: {{record.id}}\">
        Eliminar!!
    </button>
    </div>
    </div>
    <!-- /.box-header -->
    <div class=\"col-lg-3 col-xs-6\">
      <!-- small box -->
      <!-- small box -->
      
      <div class=\"small-box bg-aqua\">
        <div class=\"inner\">
          <h3>{{ records.count}}</h3>

          <p>InfoPáginas</p>
        </div>
        <div class=\"icon\">
          <i class=\"ion ion-ios-paper\"></i>
        </div>
        <a href=\"{{url ('paginas/')}}/{{record.id}}\" class=\"small-box-footer\">More info <i
            class=\"fa fa-arrow-circle-right\"></i></a>
      </div>

    </div>

    <div class=\"col-lg-3 col-xs-6\">
      <!-- small box -->
      <div class=\"small-box bg-yellow\">
        <div class=\"inner\">
          <h3>{{ numero_colab}}

          </h3>


          <p>Colaboradores</p>
        </div>
        <div class=\"icon\">
          <i class=\"ion ion-ios-person\"></i>
        </div>
        <a href=\"{{url ('lista-colaboradores/')}}/{{record.id}}\" class=\"small-box-footer\">Ver <i
            class=\"fa fa-arrow-circle-right\"></i></a>
      </div>



    </div>
  </div>
</div>
  <div class=\"row\">
    <div class=\"col-lg-3 col-xs-6\">
      <!-- small box -->
      <div class=\"small-box bg-green\">
        <div class=\"inner\">
          <h3>{{ numero_afirma}}

          </h3>


          <p>Afirmaciones</p>
        </div>
        <div class=\"icon\">
          <i class=\"ion ion-ios-albums\"></i>
        </div>
        <a href=\"{{url ('afirmaciones/')}}/{{record.id}}\" class=\"small-box-footer\">Ver <i
            class=\"fa fa-arrow-circle-right\"></i></a>
      </div>
      


    </div>
    <div class=\"col-lg-3 col-xs-6\">
      <!-- small box -->
      <div class=\"small-box bg-red\">
        <div class=\"inner\">
          <h3>{{ num_columnas}} | {{ num_elementos}}  

          </h3>


          <p>Columnas | Casilleros  </p>
        </div>
        <div class=\"icon\">
          <i class=\"ion ion-ios-keypad\"></i>
        </div>
        <a href=\"{{url ('distribucion/')}}/{{record.id}}\" class=\"small-box-footer\">Ver Distribucion <i
            class=\"fa fa-arrow-circle-right\"></i></a>
      </div>
      


    </div>

  </div>
  <div class=\"row\">
    <div class=\"col-lg-3 col-xs-6\">
      <!-- small box -->
      <div class=\"small-box bg-light-blue\">
        <div class=\"inner\">
          <h3>{{ answersCount}}

          </h3>


          <p>Respuestas</p>
        </div>
        <div class=\"icon\">
          <i class=\"ion ion-ios-checkmark\"></i>
        </div>
        <a href=\"{{url ('resultados/')}}/{{record.id}}\" class=\"small-box-footer\">Ver <i
            class=\"fa fa-arrow-circle-right\"></i></a>
      </div>
      


    </div>
    <div class=\"col-lg-3 col-xs-6\">
      <!-- small box -->
      <div class=\"small-box bg-olive\">
        <div class=\"inner\">
          <h3>{{ num_guests}}

          </h3>


          <p>Participantes </p>
        </div>
        <div class=\"icon\">
          <i class=\"ion ion-ios-people\"></i>
        </div>
        <a href=\"{{ url ('correo/')}}/{{record.id}}\" class=\"small-box-footer\">Ver <i
            class=\"fa fa-arrow-circle-right\"></i></a>
      </div>
      


    </div>

  </div>

  <section class=\"content\">

    <div class=\"row\">
      <!-- ./col -->

      <!-- left column -->
      <div class=\"col-md-6\">
        <!-- general form elements -->

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
  <!-- /.content -->", "C:\\xampp\\htdocs\\PQ/themes/baba-adminlte/pages/editar-estudio.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1);
        static $filters = array("escape" => 14);
        static $functions = array("url" => 35);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
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
