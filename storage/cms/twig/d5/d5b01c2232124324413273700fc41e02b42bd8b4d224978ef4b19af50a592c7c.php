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

/* /var/www/PQ/themes/baba-adminlte/pages/metodoq.htm */
class __TwigTemplate_9c58588931c1d5c18c669551dbe1eae81ca5c150ae455d74ebfcad2f58cbe4ed extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cabeza"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
<body>

 <!-- Add your content of header -->
 ";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cabezera"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "
  
<div class=\"hero-full-container background-image-container white-text-container\" style=\"background-image:url('http://plataformaq.unsa.edu.ar/storage/app/uploads/public/624/205/415/62420541561cb012504776.jpg')\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-xs-12\">
        <div class=\"hero-full-wrapper\">
          <div class=\"text-content  text-center\">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"section-container\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-xs-12\">
        <div class=\"text-center section-container-spacer\">
          <h2 class=\"with-project-number\"><span class=\"project-number\">01</span>Quienes somos?</h2>
        </div>
        <div class=\"row section-container-spacer\">
          <div class=\"col-md-4\">
              <div class=\"section-container-spacer\">
                <h3>Creadores</h3>
                <p>Martín Alejandro Iribarnegaray</p>
                  <p>Fede Albesa</p>
              </div>

              <h4></h4>
              
              <ul class=\"list-unstyled\">
                <li></li> 
                <li></li>
                <li></li>
              </ul>
              

              <p></p>
              <p></p>
          </div>
          <div class=\"col-md-8\">
            <h3>Una Platforma de estudios Q para la comunidad científica</h3>
            <p>Esta Plataforma Q tiene el objetivo de brindar una herramienta online y abierta para la realización de estudios Q en forma completa, incluyendo la redacción y selección de las frases (statements), la invitación de los participantes, y el registro de las distribuciones (sorts). Los archivos entregados por esta Plataforma estarán en formato JSON o DAT (para el registro de las respuestas) y en formato STA para las frases, los cuales luego pueden ser procesados en el programa especializado PQmethod.</p>
              <p>Esta herramienta web es el resultado de una colaboración entre el Instituto Nacional de Tecnología Agropecuaria (INTA) y el Instituto de Investigaciones en Energía No Convencional (INENCO) en el contexto del proyecto financiado por la Unión Europea EUROCLIMA+, titulado \"Manejo y restauración de Bosques en entornos productivos\"</p>
          </div>
        </div>


        <img src='http://plataformaq.unsa.edu.ar/storage/app/media/winter-3974511.jpg' alt=\"\" class=\"img-responsive\">
        <p></p>

        <blockquote class=\"text-center large-spacing\">
            <p>“Es la mente la que crea el mundo que nos rodea y aún cuando nos encontramos juntos,
parados en la misma pradera, mis ojos nunca verán lo que los tuyos contemplan y mi
corazón nunca se agitará con las emociones que conmueven al tuyo”</p>
            <small class=\"pull-right\">George Gissing</small>
        </blockquote>
        
        <div class=\"row\">
            <div class=\"col-md-6\">
            <img src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets5/assets/images/img-02.jpg");
        echo "\" class=\"img-responsive\" alt=\"\">
            <p></p>
            </div>
            <div class=\"col-md-6\">
            <img src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets5/assets/images/img-01.jpg");
        echo "\" class=\"img-responsive\" alt=\"\">
            <p></p>
            </div>
        </div>

        <img src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets5/assets/images/img-04.jpg");
        echo "\" class=\"img-responsive\" alt=\"\">
        <p></p>

      </div>
    </div>
  </div>
</div>

<div class=\"navbar navbar-default navbar-fixed-bottom\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-xs-12 text-center\">
        <ul class=\"navbar-nav nav\">
          <li>
            <a href=\"\" title=\"\" class=\"project-nav left\"><span class=\"project-number\">01</span>Previous</a>
          </li>
        </ul>
        <p class=\"h5 navbar-text\"><i class=\"fa fa-chevron-down arrow-down\" aria-hidden=\"true\"></i></p>

        <ul class=\"navbar-nav nav navbar-right\">
          <li>
            <a href=\"\" title=\"\" class=\"project-nav right\"><span class=\"project-number\">03</span>Next </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>



";
        // line 111
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pie"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 112
        echo "
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/PQ/themes/baba-adminlte/pages/metodoq.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 112,  170 => 111,  136 => 80,  128 => 75,  121 => 71,  57 => 9,  53 => 8,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    {% partial \"cabeza\" %}

<body>

 <!-- Add your content of header -->
 {% partial \"cabezera\" %}

  
<div class=\"hero-full-container background-image-container white-text-container\" style=\"background-image:url('http://plataformaq.unsa.edu.ar/storage/app/uploads/public/624/205/415/62420541561cb012504776.jpg')\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-xs-12\">
        <div class=\"hero-full-wrapper\">
          <div class=\"text-content  text-center\">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"section-container\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-xs-12\">
        <div class=\"text-center section-container-spacer\">
          <h2 class=\"with-project-number\"><span class=\"project-number\">01</span>Quienes somos?</h2>
        </div>
        <div class=\"row section-container-spacer\">
          <div class=\"col-md-4\">
              <div class=\"section-container-spacer\">
                <h3>Creadores</h3>
                <p>Martín Alejandro Iribarnegaray</p>
                  <p>Fede Albesa</p>
              </div>

              <h4></h4>
              
              <ul class=\"list-unstyled\">
                <li></li> 
                <li></li>
                <li></li>
              </ul>
              

              <p></p>
              <p></p>
          </div>
          <div class=\"col-md-8\">
            <h3>Una Platforma de estudios Q para la comunidad científica</h3>
            <p>Esta Plataforma Q tiene el objetivo de brindar una herramienta online y abierta para la realización de estudios Q en forma completa, incluyendo la redacción y selección de las frases (statements), la invitación de los participantes, y el registro de las distribuciones (sorts). Los archivos entregados por esta Plataforma estarán en formato JSON o DAT (para el registro de las respuestas) y en formato STA para las frases, los cuales luego pueden ser procesados en el programa especializado PQmethod.</p>
              <p>Esta herramienta web es el resultado de una colaboración entre el Instituto Nacional de Tecnología Agropecuaria (INTA) y el Instituto de Investigaciones en Energía No Convencional (INENCO) en el contexto del proyecto financiado por la Unión Europea EUROCLIMA+, titulado \"Manejo y restauración de Bosques en entornos productivos\"</p>
          </div>
        </div>


        <img src='http://plataformaq.unsa.edu.ar/storage/app/media/winter-3974511.jpg' alt=\"\" class=\"img-responsive\">
        <p></p>

        <blockquote class=\"text-center large-spacing\">
            <p>“Es la mente la que crea el mundo que nos rodea y aún cuando nos encontramos juntos,
parados en la misma pradera, mis ojos nunca verán lo que los tuyos contemplan y mi
corazón nunca se agitará con las emociones que conmueven al tuyo”</p>
            <small class=\"pull-right\">George Gissing</small>
        </blockquote>
        
        <div class=\"row\">
            <div class=\"col-md-6\">
            <img src=\"{{'assets/assets5/assets/images/img-02.jpg'|theme}}\" class=\"img-responsive\" alt=\"\">
            <p></p>
            </div>
            <div class=\"col-md-6\">
            <img src=\"{{'assets/assets5/assets/images/img-01.jpg'|theme}}\" class=\"img-responsive\" alt=\"\">
            <p></p>
            </div>
        </div>

        <img src=\"{{'assets/assets5/assets/images/img-04.jpg'|theme}}\" class=\"img-responsive\" alt=\"\">
        <p></p>

      </div>
    </div>
  </div>
</div>

<div class=\"navbar navbar-default navbar-fixed-bottom\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-xs-12 text-center\">
        <ul class=\"navbar-nav nav\">
          <li>
            <a href=\"\" title=\"\" class=\"project-nav left\"><span class=\"project-number\">01</span>Previous</a>
          </li>
        </ul>
        <p class=\"h5 navbar-text\"><i class=\"fa fa-chevron-down arrow-down\" aria-hidden=\"true\"></i></p>

        <ul class=\"navbar-nav nav navbar-right\">
          <li>
            <a href=\"\" title=\"\" class=\"project-nav right\"><span class=\"project-number\">03</span>Next </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>



{% partial \"pie\" %}

</html>", "/var/www/PQ/themes/baba-adminlte/pages/metodoq.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 3);
        static $filters = array("theme" => 71);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['theme'],
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
