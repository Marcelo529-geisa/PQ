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

/* C:\xampp\htdocs\PQ/themes/baba-adminlte/partials/footer.htm */
class __TwigTemplate_3361387a80448761a2f458ac9721c9172c6cb1a5811b5b9a0576460e8f0c7bb0 extends \Twig\Template
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
        echo "<div class=\"footer-container\" style=\"display: flex;
justify-content: center;\">
    <p>
        <small style=\"font-weight: 600;\">© Untitled | Website created with 
            <a href=\"http://www.mashup-template.com/\" title=\"Create website with free html template\">Mashup Template</a>
            /<a href=\"https://www.unsplash.com/\" title=\"Beautiful Free Images\">Unsplash</a>
        </small>
    </p>
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
                
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\PQ/themes/baba-adminlte/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer-container\" style=\"display: flex;
justify-content: center;\">
    <p>
        <small style=\"font-weight: 600;\">© Untitled | Website created with 
            <a href=\"http://www.mashup-template.com/\" title=\"Create website with free html template\">Mashup Template</a>
            /<a href=\"https://www.unsplash.com/\" title=\"Beautiful Free Images\">Unsplash</a>
        </small>
    </p>
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
                
</div>", "C:\\xampp\\htdocs\\PQ/themes/baba-adminlte/partials/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
