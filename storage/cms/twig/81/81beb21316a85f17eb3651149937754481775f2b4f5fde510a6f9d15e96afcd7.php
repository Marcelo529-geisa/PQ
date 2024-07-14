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

/* /var/www/PQ/themes/baba-adminlte/pages/tusestudios.htm */
class __TwigTemplate_ac58267bcdd500285327c05a5f4b4db80151ec340c230f8977932755d27d57a0 extends \Twig\Template
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
        echo "<!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <div class=\"box\">
            <div class=\"box-header\">
              <h3 class=\"box-title\">Tus Estudios</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
              <table id=\"example2\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <th>Título</th>
                  <th>Descripcion</th>
                  <th>Fecha Creacion</th>                  
                  <th>F. Modific</th>
                  <th>Estado</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 22
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 22);
        // line 23
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 23);
        // line 24
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 24);
        // line 25
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 25);
        // line 26
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 26);
        // line 27
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 27);
        // line 28
        echo "
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 30
            echo "      <tr>
                  <td>  ";
            // line 31
            ob_start();
            // line 32
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 33
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 33, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 33)]);
                echo "\" data-request=\"onTest\" data-request-data=\"estudio-id: ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "\">
                ";
            }
            // line 35
            echo "
                ";
            // line 36
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], ($context["displayColumn"] ?? null), [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "
                ";
            // line 37
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "titulo", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "

                ";
            // line 39
            if (($context["detailsPage"] ?? null)) {
                // line 40
                echo "                    </a>
                ";
            }
            // line 42
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo "</td>
                  <td >
                    <input name=\"algo\" value=\"algo\" type=\"hidden\">
                  ";
            // line 45
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "descripcion", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "
                  </td>
                  
                  <td> 
                      ";
            // line 49
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "created_at", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "
                  </td>
                  <td>
                          ";
            // line 52
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "updated_at", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "
                  </td>
                </tr>
       
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "        ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 57, $this->source), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
              
                </tbody>
                
              </table>
              
";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 65) > 1)) {
            // line 66
            echo "    <ul class=\"pagination\">
        ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 67) > 1)) {
                // line 68
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 68), "baseFileName", [], "any", false, false, true, 68), 68, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 68) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 70
            echo "
        ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 71)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 72
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 72) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 73
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 73), "baseFileName", [], "any", false, false, true, 73), 73, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 73, $this->source), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "
        ";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 77) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 77))) {
                // line 78
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 78), "baseFileName", [], "any", false, false, true, 78), 78, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 78) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 80
            echo "    </ul>
";
        }
        // line 82
        echo "            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

         
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->";
    }

    public function getTemplateName()
    {
        return "/var/www/PQ/themes/baba-adminlte/pages/tusestudios.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 82,  210 => 80,  204 => 78,  202 => 77,  199 => 76,  188 => 73,  183 => 72,  179 => 71,  176 => 70,  170 => 68,  168 => 67,  165 => 66,  163 => 65,  155 => 59,  146 => 57,  136 => 52,  130 => 49,  123 => 45,  116 => 42,  112 => 40,  110 => 39,  105 => 37,  101 => 36,  98 => 35,  90 => 33,  87 => 32,  85 => 31,  82 => 30,  77 => 29,  74 => 28,  72 => 27,  70 => 26,  68 => 25,  66 => 24,  64 => 23,  62 => 22,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Main content -->
    <section class=\"content\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
          <div class=\"box\">
            <div class=\"box-header\">
              <h3 class=\"box-title\">Tus Estudios</h3>
            </div>
            <!-- /.box-header -->
            <div class=\"box-body\">
              <table id=\"example2\" class=\"table table-bordered table-hover\">
                <thead>
                <tr>
                    <th>Título</th>
                  <th>Descripcion</th>
                  <th>Fecha Creacion</th>                  
                  <th>F. Modific</th>
                  <th>Estado</th>
                </tr>
                </thead>
                <tbody>
                {% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

    {% for record in records %}
      <tr>
                  <td>  {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\" data-request=\"onTest\" data-request-data=\"estudio-id: {{record.id}}\">
                {% endif %}

                {{ attribute(record, displayColumn) }}
                {{ record.titulo }}

                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}</td>
                  <td >
                    <input name=\"algo\" value=\"algo\" type=\"hidden\">
                  {{ record.descripcion }}
                  </td>
                  
                  <td> 
                      {{ record.created_at}}
                  </td>
                  <td>
                          {{ record.updated_at }}
                  </td>
                </tr>
       
                {% else %}
        {{ noRecordsMessage }}
    {% endfor %}

              
                </tbody>
                
              </table>
              
{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

         
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->", "/var/www/PQ/themes/baba-adminlte/pages/tusestudios.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 22, "for" => 29, "spaceless" => 31, "if" => 32);
        static $filters = array("page" => 33, "escape" => 33);
        static $functions = array("range" => 71);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'spaceless', 'if'],
                ['page', 'escape'],
                ['range']
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
