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

/* /var/www/PQ/themes/baba-adminlte/partials/pie.htm */
class __TwigTemplate_91bc1c785fdb422c27f63b0c06ae1e8426794c7e0ab740c895b64b7db08203b8 extends \Twig\Template
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
        echo "<script>
    document.addEventListener(\"DOMContentLoaded\", function (event) {
      navbarToggleSidebar();
      closeMenuBeforeGoingToPage();
      navActivePage();
    });
</script>
 
  <script type=\"text/javascript\" src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets5/main.4c6e144e.js");
        echo "\"></script></body> 
  <!-- jQuery 3 -->
<script src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/jquery/dist/jquery.min.js");
        echo "\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/jquery-ui/jquery-ui.min.js");
        echo "\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/bootstrap/dist/js/bootstrap.min.js");
        echo "\"></script>
  ";
        // line 20
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
    }

    public function getTemplateName()
    {
        return "/var/www/PQ/themes/baba-adminlte/partials/pie.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  68 => 19,  59 => 13,  54 => 11,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    document.addEventListener(\"DOMContentLoaded\", function (event) {
      navbarToggleSidebar();
      closeMenuBeforeGoingToPage();
      navActivePage();
    });
</script>
 
  <script type=\"text/javascript\" src=\"{{'assets/assets5/main.4c6e144e.js'|theme}}\"></script></body> 
  <!-- jQuery 3 -->
<script src=\"{{'assets/bower_components/jquery/dist/jquery.min.js'|theme}}\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"{{'assets/bower_components/jquery-ui/jquery-ui.min.js'|theme}}\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src=\"{{'assets/bower_components/bootstrap/dist/js/bootstrap.min.js'|theme}}\"></script>
  {% framework extras %}", "/var/www/PQ/themes/baba-adminlte/partials/pie.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("framework" => 20);
        static $filters = array("theme" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['framework'],
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
