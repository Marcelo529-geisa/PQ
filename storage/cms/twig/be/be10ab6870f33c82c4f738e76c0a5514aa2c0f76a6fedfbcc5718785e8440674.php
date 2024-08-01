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

/* C:\xampp\htdocs\PQ/themes/baba-adminlte/pages/portada2.htm */
class __TwigTemplate_4083902d719cfd0baa42eb417e46e5cd2c3c611b605561d0327b93e4697790ff extends \Twig\Template
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
  
<div class=\"hero-full-container background-image-container white-text-container\" style=\"background-image:url('";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["records"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[1] ?? null) : null), "fileupload1", [], "any", false, false, true, 11), "path", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "')\">
  <div class=\"overlay-gradient\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-xs-12 col-md-7 col-md-offset-1\">
        <div class=\"hero-full-wrapper\">
          <div class=\"text-content\">
            <h1>Plataforma Q</h1>
            <p>Soporte y herramientas para el desarrollo de estudios de percepción social utilizando la metodología Q</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "<script>
  document.addEventListener(\"DOMContentLoaded\", function (event) {
    navbarFixedTopAnimation();
    closeMenuBeforeGoingToPage();
  });
</script>
";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pie"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\PQ/themes/baba-adminlte/pages/portada2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 34,  91 => 33,  83 => 27,  79 => 26,  61 => 11,  57 => 9,  53 => 8,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  {% partial \"cabeza\" %}

<body>

 <!-- Add your content of header -->
{% partial \"cabezera\" %}

  
<div class=\"hero-full-container background-image-container white-text-container\" style=\"background-image:url('{{ records[1].fileupload1.path }}')\">
  <div class=\"overlay-gradient\"></div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-xs-12 col-md-7 col-md-offset-1\">
        <div class=\"hero-full-wrapper\">
          <div class=\"text-content\">
            <h1>Plataforma Q</h1>
            <p>Soporte y herramientas para el desarrollo de estudios de percepción social utilizando la metodología Q</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{% partial \"footer\" %}
<script>
  document.addEventListener(\"DOMContentLoaded\", function (event) {
    navbarFixedTopAnimation();
    closeMenuBeforeGoingToPage();
  });
</script>
{% partial \"pie\" %}
</html>", "C:\\xampp\\htdocs\\PQ/themes/baba-adminlte/pages/portada2.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 3);
        static $filters = array("escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['escape'],
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
