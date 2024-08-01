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

/* C:\xampp\htdocs\PQ/plugins/fede/crearusuario/components/crear/default.htm */
class __TwigTemplate_b74aad9f7fbc1165353b81d074474304bce8195e7cf9f5b3186496440e10ccb0 extends \Twig\Template
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
        echo "<h2>
    Agregando un usuario al grupo de ";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["grupo"] ?? null), 2, $this->source), "html", null, true);
        echo "
</h2>

<form data-request=\"Crear::onSend\" class=\"contact-form\" data-request-validate data-request-flash>
    ";
        // line 6
        if (($context["estudio"] ?? null)) {
            // line 7
            echo "    <input class=\"form-control\" name=\"estudio\" id=\"estudio\" value=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["estudio"] ?? null), 7, $this->source), "html", null, true);
            echo "\" type=\"hidden\">
  ";
        }
        // line 9
        echo "    <div class=\"box-body\">
      <div class=\"form-group\">
        <label for=\"exampleInputEmail1\">Nombre</label>
        <span data-validate-for=\"name\" style=\"color:red;\" ></span>
        <input class=\"form-control\" name=\"name\" id=\"name\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["usuario_up"] ?? null), "name", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "\" placeholder=\"nombre usuario una sola palabra\">
      </div>
      <!-- textarea -->
      <div class=\"form-group\">
        <label>email</label>
        <span data-validate-for=\"email\" style=\"color:red;\" ></span>
  
        <input id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"email .\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["usuario_up"] ?? null), "email", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "\"></textarea>
      </div>
     
    </div>
  
  
  
    <div class=\"box-footer\">
      <button type=\"submit\" data-attach-loading class=\"btn btn-primary\">Agregar</button>
    </div>
  
    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 31
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 32
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 32, $this->source), "html", null, true);
            echo "</p>
    ";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 34
        echo "  </form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\PQ/plugins/fede/crearusuario/components/crear/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 34,  89 => 32,  87 => 31,  73 => 20,  63 => 13,  57 => 9,  51 => 7,  49 => 6,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2>
    Agregando un usuario al grupo de {{grupo}}
</h2>

<form data-request=\"Crear::onSend\" class=\"contact-form\" data-request-validate data-request-flash>
    {% if estudio %}
    <input class=\"form-control\" name=\"estudio\" id=\"estudio\" value=\"{{estudio}}\" type=\"hidden\">
  {% endif %}
    <div class=\"box-body\">
      <div class=\"form-group\">
        <label for=\"exampleInputEmail1\">Nombre</label>
        <span data-validate-for=\"name\" style=\"color:red;\" ></span>
        <input class=\"form-control\" name=\"name\" id=\"name\" value=\"{{ usuario_up.name }}\" placeholder=\"nombre usuario una sola palabra\">
      </div>
      <!-- textarea -->
      <div class=\"form-group\">
        <label>email</label>
        <span data-validate-for=\"email\" style=\"color:red;\" ></span>
  
        <input id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"email .\" value=\"{{ usuario_up.email}}\"></textarea>
      </div>
     
    </div>
  
  
  
    <div class=\"box-footer\">
      <button type=\"submit\" data-attach-loading class=\"btn btn-primary\">Agregar</button>
    </div>
  
    {% flash success %}
    <p>{{message}}</p>
    {% endflash %}
  </form>", "C:\\xampp\\htdocs\\PQ/plugins/fede/crearusuario/components/crear/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6, "flash" => 31);
        static $filters = array("escape" => 2);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'flash'],
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
