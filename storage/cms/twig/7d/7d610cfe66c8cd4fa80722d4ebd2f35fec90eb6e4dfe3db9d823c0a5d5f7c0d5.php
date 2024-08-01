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

/* C:\xampp\htdocs\PQ/themes/baba-adminlte/pages/lista-usuarios.htm */
class __TwigTemplate_77ba67337f115ceac8db58ebe91dfe9258311319ce33cf47db24f4c285a44bd0 extends \Twig\Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, true, 3);
        // line 4
        echo "<div class=\"row\">
  <div class=\"box box-primary\">
    <div class=\"box-header with-border\">
      <h3 class=\"box-title\">
        
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["grupo"] ?? null), 9, $this->source), "html", null, true);
        echo " ";
        if (($context["estudio"] ?? null)) {
            echo " del estudio \"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["estudio"] ?? null), "titulo", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\" ";
        }
        // line 10
        echo "       
      </h3>
    </div>
    <!-- /.box-header -->
  </div>
</div>
<button class=\"btn btn-primary\" onclick=\"javascript:location.href='";
        // line 16
        echo url("crear-any/");
        echo "/";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["estudio_id"] ?? null), 16, $this->source), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["grupo_id"] ?? null), 16, $this->source), "html", null, true);
        echo "'\">Agregar</button>
<hr>
<div class=\"row\">
  <!-- Left col -->
  <section class=\"col-lg-12\">
    <div class=\"box-body\">
      <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->

      <table id=\"example2\" class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>mail</th>
            <th>foto</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>



          ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["estudio_grupo"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 38
            echo "


          <tr id=\"usuario-";
            // line 41
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "\">

            <td>
              <a href=\"";
            // line 44
            echo url("actualizar-user");
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "</a>
              </td>
            <td>
              ";
            // line 47
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo "
            </td>
            <td> <img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, true, 49), "path", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "\" style=\"width: 200px; height: auto;\" alt=\"\">
            </td>
            <td>
              <button class=\"btn btn-warning\"><a href=\"\" data-request=\"onDelete\"
                  data-request-confirm=\"Esta seguro de borrar?\"
                  data-request-data=\"user-id: ";
            // line 54
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "\">Borrar</a></button>
            </td>

          </tr>

          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "          ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 60, $this->source), "html", null, true);
            echo "

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "

        </tbody>

      </table>



    </div>
    <!-- /.box-body -->

</div>
<!-- /.box -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\PQ/themes/baba-adminlte/pages/lista-usuarios.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 63,  146 => 60,  135 => 54,  127 => 49,  122 => 47,  112 => 44,  106 => 41,  101 => 38,  96 => 37,  68 => 16,  60 => 10,  52 => 9,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}
<div class=\"row\">
  <div class=\"box box-primary\">
    <div class=\"box-header with-border\">
      <h3 class=\"box-title\">
        
        {{ grupo }} {% if estudio %} del estudio \"{{estudio.titulo}}\" {% endif %}
       
      </h3>
    </div>
    <!-- /.box-header -->
  </div>
</div>
<button class=\"btn btn-primary\" onclick=\"javascript:location.href='{{url('crear-any/')}}/{{estudio_id}}/{{grupo_id}}'\">Agregar</button>
<hr>
<div class=\"row\">
  <!-- Left col -->
  <section class=\"col-lg-12\">
    <div class=\"box-body\">
      <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->

      <table id=\"example2\" class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>mail</th>
            <th>foto</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>



          {% for user in estudio_grupo %}



          <tr id=\"usuario-{{user.id}}\">

            <td>
              <a href=\"{{url ('actualizar-user')}}/{{user.id}}\">{{ user.name }}</a>
              </td>
            <td>
              {{ user.email }}
            </td>
            <td> <img src=\"{{ user.avatar.path }}\" style=\"width: 200px; height: auto;\" alt=\"\">
            </td>
            <td>
              <button class=\"btn btn-warning\"><a href=\"\" data-request=\"onDelete\"
                  data-request-confirm=\"Esta seguro de borrar?\"
                  data-request-data=\"user-id: {{user.id}}\">Borrar</a></button>
            </td>

          </tr>

          {% else %}
          {{ noRecordsMessage }}

          {% endfor %}


        </tbody>

      </table>



    </div>
    <!-- /.box-body -->

</div>
<!-- /.box -->", "C:\\xampp\\htdocs\\PQ/themes/baba-adminlte/pages/lista-usuarios.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 9, "for" => 37);
        static $filters = array("escape" => 9);
        static $functions = array("url" => 16);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
