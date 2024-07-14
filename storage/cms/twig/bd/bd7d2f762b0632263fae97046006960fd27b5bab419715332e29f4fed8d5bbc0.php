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

/* /var/www/PQ/themes/baba-adminlte/partials/cabezera.htm */
class __TwigTemplate_e619b60964d0846a60f5ea162cfafe9ee7e768c0aebb5fe2db6463c68edad161 extends \Twig\Template
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
        echo "<header>
    <nav class=\"navbar navbar-fixed-top navbar-default\">
      <div class=\"container\">
          <button type=\"button\" class=\"navbar-toggle\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          
        <nav class=\"navbar-fullscreen\" id=\"navbar-middle\">
          ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "  
          <div class=\"footer-container\">
             
            <p><small>© Untitled | Website created with <a href=\"http://www.mashup-template.com/\" title=\"Create website with free html template\">Mashup Template</a>/<a href=\"https://www.unsplash.com/\" title=\"Beautiful Free Images\">Unsplash</a></small></p>
            <p class=\"footer-share-icons\">
                <a href=\"https://www.twitter.com\" class=\"fa-icon\" title=\"\">
                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                </a>
                <a href=\"https://www.linkedin.com\" class=\"fa-icon\" title=\"\">
                    <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                </a>
                <a href=\"https://www.behance.com\" class=\"fa-icon\" title=\"\">
                    <i class=\"fa fa-behance\" aria-hidden=\"true\"></i>
                </a>
                <a href=\"https://www.vimeo.com\" class=\"fa-icon\" title=\"\">
                    <i class=\"fa fa-vimeo\" aria-hidden=\"true\"></i>
                </a>
            </p>
                         
          </div>
  
  
        </nav> 
      
      </div>
    </nav>
  </header>";
    }

    public function getTemplateName()
    {
        return "/var/www/PQ/themes/baba-adminlte/partials/cabezera.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <nav class=\"navbar navbar-fixed-top navbar-default\">
      <div class=\"container\">
          <button type=\"button\" class=\"navbar-toggle\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          
        <nav class=\"navbar-fullscreen\" id=\"navbar-middle\">
          {% partial \"menu\" %}
  
          <div class=\"footer-container\">
             
            <p><small>© Untitled | Website created with <a href=\"http://www.mashup-template.com/\" title=\"Create website with free html template\">Mashup Template</a>/<a href=\"https://www.unsplash.com/\" title=\"Beautiful Free Images\">Unsplash</a></small></p>
            <p class=\"footer-share-icons\">
                <a href=\"https://www.twitter.com\" class=\"fa-icon\" title=\"\">
                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                </a>
                <a href=\"https://www.linkedin.com\" class=\"fa-icon\" title=\"\">
                    <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
                </a>
                <a href=\"https://www.behance.com\" class=\"fa-icon\" title=\"\">
                    <i class=\"fa fa-behance\" aria-hidden=\"true\"></i>
                </a>
                <a href=\"https://www.vimeo.com\" class=\"fa-icon\" title=\"\">
                    <i class=\"fa fa-vimeo\" aria-hidden=\"true\"></i>
                </a>
            </p>
                         
          </div>
  
  
        </nav> 
      
      </div>
    </nav>
  </header>", "/var/www/PQ/themes/baba-adminlte/partials/cabezera.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 12);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
