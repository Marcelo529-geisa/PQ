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

/* /var/www/PQ/themes/baba-adminlte/pages/resultados.htm */
class __TwigTemplate_9e2be6543c17e313adcafc605be1d55fd91a305157a99a029a101bc18c42ae2c extends \Twig\Template
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
        echo "<div class=\"row\">
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
              <h3 class=\"box-title\">     
                ";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "                    Respuestas del estudio \"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "titulo", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\"
                ";
        } else {
            // line 8
            echo "                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["notFoundMessage"] ?? null), 8, $this->source), "html", null, true);
            echo "
                ";
        }
        // line 10
        echo "             </h3>
        </div>
            <!-- /.box-header -->
    </div>
</div>
   <button  class=\"btn btn-primary\" onclick=\"javascript:location.href='";
        // line 15
        echo url("/");
        echo "/punto_dat/";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "'\"><i class=\"fa fa-arrow-down\"></i> .dat</button> 
   <button  class=\"btn btn-primary\" onclick=\"javascript:location.href='";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "'\"><i class=\"fa fa-arrow-down\"></i> .json</button> 
<hr>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["respuestas"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["respuesta"]) {
            // line 19
            echo "
    

    <li>";
            // line 22
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["respuesta"], "user_id", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo " --> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["respuesta"], "respuestas", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['respuesta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/PQ/themes/baba-adminlte/pages/resultados.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  81 => 19,  77 => 18,  72 => 16,  66 => 15,  59 => 10,  53 => 8,  47 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
              <h3 class=\"box-title\">     
                {% if record %}
                    Respuestas del estudio \"{{record.titulo}}\"
                {% else %}
                    {{ notFoundMessage }}
                {% endif %}
             </h3>
        </div>
            <!-- /.box-header -->
    </div>
</div>
   <button  class=\"btn btn-primary\" onclick=\"javascript:location.href='{{ url ('/') }}/punto_dat/{{record.id}}'\"><i class=\"fa fa-arrow-down\"></i> .dat</button> 
   <button  class=\"btn btn-primary\" onclick=\"javascript:location.href='{{record.id}}'\"><i class=\"fa fa-arrow-down\"></i> .json</button> 
<hr>
{% for key,respuesta in respuestas %}

    

    <li>{{respuesta.user_id}} --> {{ respuesta.respuestas }}</li>
    {% endfor %}", "/var/www/PQ/themes/baba-adminlte/pages/resultados.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5, "for" => 18);
        static $filters = array("escape" => 6);
        static $functions = array("url" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
                ['url']
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
