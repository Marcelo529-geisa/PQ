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

/* C:\xampp\htdocs\PQ/plugins/fede/estudios/components/estudioform/default.htm */
class __TwigTemplate_29e0a7314c5fb62a71e6af74884ac825e5e80a7326f40d5d343e3b88fd67a6b1 extends \Twig\Template
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
        echo "<form role=\"form\" data-request=\"estudioform::onSave\" data-request-validate data-request-flash >
    <div class=\"box-body\">
      <div class=\"form-group\">
        <label for=\"exampleInputEmail1\">Título</label>
        <input  class=\"form-control\" name=\"titulo\" id=\"titulo\" placeholder=\"escriba un título descriptivo de todo el estudio\">
      </div>
       <!-- textarea -->
      <div class=\"form-group\">
        <label>Descripción</label>
        <textarea id = \"descripcion\" name=\"descripcion\" class=\"form-control\" rows=\"3\" placeholder=\"Enter .\"></textarea>
      </div>
     
    </div>
    <!-- /.box-body -->

    <div class=\"box-footer\">
      <button type=\"submit\" data-attach-loading class=\"btn btn-primary\">Grabar</button>
    </div>
    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 19
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 20
            echo "     <p>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 20, $this->source), "html", null, true);
            echo "</p>
    ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 22
        echo "  </form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\PQ/plugins/fede/estudios/components/estudioform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 22,  61 => 20,  59 => 19,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form role=\"form\" data-request=\"estudioform::onSave\" data-request-validate data-request-flash >
    <div class=\"box-body\">
      <div class=\"form-group\">
        <label for=\"exampleInputEmail1\">Título</label>
        <input  class=\"form-control\" name=\"titulo\" id=\"titulo\" placeholder=\"escriba un título descriptivo de todo el estudio\">
      </div>
       <!-- textarea -->
      <div class=\"form-group\">
        <label>Descripción</label>
        <textarea id = \"descripcion\" name=\"descripcion\" class=\"form-control\" rows=\"3\" placeholder=\"Enter .\"></textarea>
      </div>
     
    </div>
    <!-- /.box-body -->

    <div class=\"box-footer\">
      <button type=\"submit\" data-attach-loading class=\"btn btn-primary\">Grabar</button>
    </div>
    {% flash success %}
     <p>{{message}}</p>
    {% endflash %}
  </form>", "C:\\xampp\\htdocs\\PQ/plugins/fede/estudios/components/estudioform/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("flash" => 19);
        static $filters = array("escape" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['flash'],
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
