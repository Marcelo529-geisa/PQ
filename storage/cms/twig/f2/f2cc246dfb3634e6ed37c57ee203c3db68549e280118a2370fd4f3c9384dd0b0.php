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

/* /var/www/PQ/themes/baba-adminlte/pages/responde.htm */
class __TwigTemplate_4e72a72e614a8e95959175f143f9d13ca8c938e75b25bef0b87aa45ebf6c4c06 extends \Twig\Template
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
";
        // line 23
        echo " 

<html xmlns:ng=\"http://angularjs.org\" id=\"ng-app\" ng-app=\"app\" ng-keyup=\"\$broadcast('my:keyup', \$event)\">
    <head>
        <meta charset=\"utf-8\"
         http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>HtmlQ</title>

        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/jquery.min.js\" type=\"text/javascript\"></script>
        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/jquery-ui.min.js\" type=\"text/javascript\"></script>
        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/jquery.ui.touch-punch.min.js\" type=\"text/javascript\"></script>
        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/jquery-dateFormat.min.js\" type=\"text/javascript\"></script>
        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/bootstrap.min.js\" type=\"text/javascript\"></script>
        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/angular.min.js\" type=\"text/javascript\"></script>
        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/angular-ui-router.min.js\" type=\"text/javascript\"></script>
        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/ui-bootstrap-custom-tpls.min.js\" type=\"text/javascript\"></script>
        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/xml2json.min.js\" type=\"text/javascript\"></script>
        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/jsonpath.js\" type=\"text/javascript\"></script>
        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/underscore-min.js\" type=\"text/javascript\"></script>
        
        <script src=\"http://plataformaq.unsa.edu.ar/javascript/";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 23, $this->source), "html", null, true);
        // line 38
        echo "\" type=\"text/javascript\"></script>
 

        <link rel=\"stylesheet\" href=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/stylesheets/bootstrap.min.css\"/>
        <link rel=\"stylesheet\" href=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/stylesheets/htmlq.css\"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/html5shiv.min.js\"></script>
          <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/es5-shim.min.js\"></script>
          <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
    ";
        echo "
   
";
        // line 45
        echo " 

        <div ui-view></div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "/var/www/PQ/themes/baba-adminlte/pages/responde.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 45,  66 => 38,  42 => 23,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
{% verbatim %} 

<html xmlns:ng=\"http://angularjs.org\" id=\"ng-app\" ng-app=\"app\" ng-keyup=\"\$broadcast('my:keyup', \$event)\">
    <head>
        <meta charset=\"utf-8\"
         http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>HtmlQ</title>

        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/jquery.min.js\" type=\"text/javascript\"></script>
        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/jquery-ui.min.js\" type=\"text/javascript\"></script>
        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/jquery.ui.touch-punch.min.js\" type=\"text/javascript\"></script>
        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/jquery-dateFormat.min.js\" type=\"text/javascript\"></script>
        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/bootstrap.min.js\" type=\"text/javascript\"></script>
        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/angular.min.js\" type=\"text/javascript\"></script>
        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/angular-ui-router.min.js\" type=\"text/javascript\"></script>
        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/ui-bootstrap-custom-tpls.min.js\" type=\"text/javascript\"></script>
        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/xml2json.min.js\" type=\"text/javascript\"></script>
        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/jsonpath.js\" type=\"text/javascript\"></script>
        <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/underscore-min.js\" type=\"text/javascript\"></script>
        
        <script src=\"http://plataformaq.unsa.edu.ar/javascript/{% endverbatim %}{{id}}{% verbatim %}\" type=\"text/javascript\"></script>
 

        <link rel=\"stylesheet\" href=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/stylesheets/bootstrap.min.css\"/>
        <link rel=\"stylesheet\" href=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/stylesheets/htmlq.css\"/>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/html5shiv.min.js\"></script>
          <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/es5-shim.min.js\"></script>
          <script src=\"http://plataformaq.unsa.edu.ar/themes/baba-adminlte/assets/assets4/src/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
    {% endverbatim %}
   
{% verbatim %} 

        <div ui-view></div>
    </body>
</html>
{% endverbatim %}", "/var/www/PQ/themes/baba-adminlte/pages/responde.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
