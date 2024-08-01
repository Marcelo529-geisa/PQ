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

/* C:\xampp\htdocs\PQ/themes/baba-adminlte/partials/cabeza.htm */
class __TwigTemplate_8c81c3da0df8dc27551bbf9aaef2d7492b91e5e123841e1108b9b4bb031b89ec extends \Twig\Template
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
        echo "<head>
    <meta charset=\"UTF-8\">
    <meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">
    <meta content=\"width=device-width,initial-scale=1\" name=\"viewport\">
    <meta content=\"description\" name=\"description\">
    <meta name=\"google\" content=\"notranslate\" />
    <meta content=\"Mashup templates have been developped by Orson.io team\" name=\"author\">
  
    <!-- Disable tap highlight on IE -->
    <meta name=\"msapplication-tap-highlight\" content=\"no\">
    
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets5/apple-icon-180x180.png");
        echo "\">
    <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets5/favicon.ico");
        echo "\" rel=\"icon\">
    
    <title>";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "</title>  
  
  <link href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets5/main.3da94fde.css");
        echo "\" rel=\"stylesheet\"></head>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\PQ/themes/baba-adminlte/partials/cabeza.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  61 => 15,  56 => 13,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <meta charset=\"UTF-8\">
    <meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">
    <meta content=\"width=device-width,initial-scale=1\" name=\"viewport\">
    <meta content=\"description\" name=\"description\">
    <meta name=\"google\" content=\"notranslate\" />
    <meta content=\"Mashup templates have been developped by Orson.io team\" name=\"author\">
  
    <!-- Disable tap highlight on IE -->
    <meta name=\"msapplication-tap-highlight\" content=\"no\">
    
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{'assets/assets5/apple-icon-180x180.png'|theme}}\">
    <link href=\"{{'assets/assets5/favicon.ico'|theme}}\" rel=\"icon\">
    
    <title>{{page.title}}</title>  
  
  <link href=\"{{'assets/assets5/main.3da94fde.css'|theme}}\" rel=\"stylesheet\"></head>", "C:\\xampp\\htdocs\\PQ/themes/baba-adminlte/partials/cabeza.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 12, "escape" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme', 'escape'],
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
