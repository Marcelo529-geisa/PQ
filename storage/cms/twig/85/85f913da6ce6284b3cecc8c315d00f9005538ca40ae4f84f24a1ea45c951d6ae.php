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

/* /var/www/PQ/themes/baba-adminlte/pages/contacto.htm */
class __TwigTemplate_425a9d364dd9bcad7c7a00eae7578d50a699a8a80a299faf7582f46b93f1455d extends \Twig\Template
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
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cabeza"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "<body>

 <!-- Add your content of header -->
 ";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cabezera"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "
<div class=\"section-container\">
  <!-- Add your site or app content here -->
  <div class=\"container\">
    <div class=\"row\">
      
      <div class=\"col-xs-12 col-md-12\">
       

        
        ";
        // line 19
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 20
        echo "
      </div>
    </div>
  </div>

</div>



";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pie"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/PQ/themes/baba-adminlte/pages/contacto.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 30,  84 => 29,  73 => 20,  69 => 19,  57 => 9,  53 => 8,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

{% partial \"cabeza\" %}
<body>

 <!-- Add your content of header -->
 {% partial \"cabezera\" %}

<div class=\"section-container\">
  <!-- Add your site or app content here -->
  <div class=\"container\">
    <div class=\"row\">
      
      <div class=\"col-xs-12 col-md-12\">
       

        
        {% component 'contactform' %}

      </div>
    </div>
  </div>

</div>



{% partial \"pie\" %}
</html>", "/var/www/PQ/themes/baba-adminlte/pages/contacto.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 4, "component" => 19);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'component'],
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
