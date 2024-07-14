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

/* /var/www/PQ/plugins/fede/crearusuario/components/enviarmail/default.htm */
class __TwigTemplate_2a067e88625dd0e8437d00cf79441fe292204d43a3e394fb13657ad25b4fbc89 extends \Twig\Template
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
        $context["n_elementos"] = 0;
        // line 2
        echo "

";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "distribucion", [], "any", false, false, true, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["columna"]) {
            // line 5
            echo "  ";
            $context["n_elementos"] = (($context["n_elementos"] ?? null) + twig_get_attribute($this->env, $this->source, $context["columna"], "elementos", [], "any", false, false, true, 5));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['columna'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
<div class=\"row\">
  ";
        // line 9
        if ((($context["n_elementos"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "afirma", [], "any", false, false, true, 9), "count", [], "any", false, false, true, 9))) {
            // line 10
            echo "    
    <div class=\"box box-success\">
      <div class=\"box-header with-border\">
        <h3>Todo bien: El número de afirmaciones es igual al número de casilleros.</h3>
        <br>
        <p><strong>cantidad de casilleros: </strong> ";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["n_elementos"] ?? null), 15, $this->source), "html", null, true);
            echo "</p>
        <p><strong>cantidad de afirmaciones: </strong>  ";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "afirma", [], "any", false, false, true, 16), "count", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "</p>
        <br>
        <h4>Puede enviar las invitaciones correctamente</h4>
        <br>
      </div>
    </div>
    ";
        } else {
            // line 23
            echo "    <div class=\"box box-danger\">
      <div class=\"box-header with-border\">
        <h3>Error: el número de afirmaciones no coincide con el número de casilleros!</h3>
        <br>
        <p><strong>cantidad de casilleros: </strong> ";
            // line 27
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["n_elementos"] ?? null), 27, $this->source), "html", null, true);
            echo "</p>
        <p><strong>cantidad de afirmaciones: </strong> ";
            // line 28
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "afirma", [], "any", false, false, true, 28), "count", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "</p>
        <br>
        <h4>NO puede enviar las invitaciones correctamente. Por favor verifique que haya la misma cantidad de casilleros y afirmaciones</h4>
        <br>
      </div>
    </div>
    
    ";
        }
        // line 36
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
              <h3 class=\"box-title\">     
                ";
        // line 39
        if (($context["record"] ?? null)) {
            // line 40
            echo "                    Participantes del estudio \"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "titulo", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "\"
                ";
        } else {
            // line 42
            echo "                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["notFoundMessage"] ?? null), 42, $this->source), "html", null, true);
            echo "
                ";
        }
        // line 44
        echo "             </h3>
        </div>
            <!-- /.box-header -->
    </div>
</div>
   <div>
<button  class=\"btn btn-primary\" onclick=\"javascript:location.href='";
        // line 50
        echo url("crear-any");
        echo "/";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "/1'\">Agregar</button> 
</div>

<hr>

   <div class=\"row\">
      <!-- Left col -->
      <section class=\"col-lg-12\">
          <div class=\"box-body\">
            <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
         
                <table id=\"example2\" class=\"table table-bordered table-hover\">
              <thead>
              <tr >
                <th>Nombre</th>
                <th>Con Respuesta</th>                  
                <th>mail</th>
                <th></th>
                
                <th>invitación</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
             


  ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["participantes"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 78
            echo "  
    
  
      <tr id=\"usuario-";
            // line 81
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "\">
                  <td>  
             ";
            // line 83
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo " -   ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 85
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, true, 85), ($context["respuestas"] ?? null))) {
                // line 86
                echo "                    <i class=\"ion ion-ios-checkmark-outline\"></i>
                    

                    ";
            } else {
                // line 90
                echo "                    x
                    ";
            }
            // line 91
            echo "      
                </td>
                  <td>
                   ";
            // line 94
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
            echo "
                  </td>
                  <td >
                    ";
            // line 97
            if ((($context["n_elementos"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "afirma", [], "any", false, false, true, 97), "count", [], "any", false, false, true, 97))) {
                // line 98
                echo "
                    <form
                    data-request=\"EnviarMail::onSend\"
                    
                    data-request-flash>
                    <input name=\"user-mail\" type=\"hidden\" value=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "mail", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
                echo "\" />
                    <input name=\"user-id\" type=\"hidden\" value=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
                echo "\"/>
                    <input name=\"user-name\" type=\"hidden\" value=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
                echo "\"/>

                    <span data-validate-for=\"name\"></span>
 <button data-attach-loading>
        Enviar
    </button>
</form>
";
            } else {
                // line 113
                echo "<button disabled>
  Enviar
</button>
";
            }
            // line 117
            echo "
                  </td>
                  <td id =\"enviado-";
            // line 119
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
            echo "\">
                
                    ";
            // line 121
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "pivot", [], "any", false, false, true, 121), "enviado", [], "any", false, false, true, 121) == 1)) {
                // line 122
                echo "                    ya enviado
                    ";
            } else {
                // line 124
                echo "                    pendiente
                    ";
            }
            // line 126
            echo "                
                  </td>
                  <td>
                    <form
                    data-request=\"EnviarMail::onDelete\"
                    
                    data-request-flash>
                   
                    <input name=\"user-id\" type=\"hidden\" value=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
            echo "\"/>
                   

                    <span data-validate-for=\"name\"></span>
 <button data-attach-loading>
        Borrar
    </button>
</form>
                  </td>
                  
                  
                </tr>
       
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 148
            echo "        ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 148, $this->source), "html", null, true);
            echo "
  
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "  
              
              </tbody>
             
            </table>
       
            
          </div>
          <!-- /.box-body -->
          
        </div>
        <!-- /.box -->
 <hr>
 <div>
  ";
        // line 165
        if ((($context["n_elementos"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "afirma", [], "any", false, false, true, 165), "count", [], "any", false, false, true, 165))) {
            // line 166
            echo "
  <form
                    data-request=\"EnviarMail::onSendMasivo\"
                    
                    data-request-flash>
                    <input name=\"user-mail\" type=\"hidden\" value=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mail", [], "any", false, false, true, 171), 171, $this->source), "html", null, true);
            echo "\" />
                    <input name=\"user-id\" type=\"hidden\" value=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
            echo "\"/>
                    <input name=\"user-name\" type=\"hidden\" value=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 173), 173, $this->source), "html", null, true);
            echo "\"/>

                    <span data-validate-for=\"name\"></span>
 <button data-attach-loading>
        Envió Masivo
    </button>
    ";
        } else {
            // line 180
            echo "    <button disabled>
      Envió Masivo
  </button>
  ";
        }
        // line 184
        echo "</form>
</div>      ";
    }

    public function getTemplateName()
    {
        return "/var/www/PQ/plugins/fede/crearusuario/components/enviarmail/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 184,  343 => 180,  333 => 173,  329 => 172,  325 => 171,  318 => 166,  316 => 165,  300 => 151,  290 => 148,  271 => 134,  261 => 126,  257 => 124,  253 => 122,  251 => 121,  246 => 119,  242 => 117,  236 => 113,  225 => 105,  221 => 104,  217 => 103,  210 => 98,  208 => 97,  202 => 94,  197 => 91,  193 => 90,  187 => 86,  185 => 85,  178 => 83,  173 => 81,  168 => 78,  163 => 77,  131 => 50,  123 => 44,  117 => 42,  111 => 40,  109 => 39,  104 => 36,  93 => 28,  89 => 27,  83 => 23,  73 => 16,  69 => 15,  62 => 10,  60 => 9,  56 => 7,  49 => 5,  45 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set n_elementos=0 %}


{% for columna in record.distribucion %}
  {% set n_elementos = n_elementos + columna.elementos %}
{% endfor %}

<div class=\"row\">
  {% if n_elementos == record.afirma.count  %}
    
    <div class=\"box box-success\">
      <div class=\"box-header with-border\">
        <h3>Todo bien: El número de afirmaciones es igual al número de casilleros.</h3>
        <br>
        <p><strong>cantidad de casilleros: </strong> {{ n_elementos }}</p>
        <p><strong>cantidad de afirmaciones: </strong>  {{ record.afirma.count }}</p>
        <br>
        <h4>Puede enviar las invitaciones correctamente</h4>
        <br>
      </div>
    </div>
    {% else %}
    <div class=\"box box-danger\">
      <div class=\"box-header with-border\">
        <h3>Error: el número de afirmaciones no coincide con el número de casilleros!</h3>
        <br>
        <p><strong>cantidad de casilleros: </strong> {{ n_elementos }}</p>
        <p><strong>cantidad de afirmaciones: </strong> {{ record.afirma.count }}</p>
        <br>
        <h4>NO puede enviar las invitaciones correctamente. Por favor verifique que haya la misma cantidad de casilleros y afirmaciones</h4>
        <br>
      </div>
    </div>
    
    {% endif %}
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
              <h3 class=\"box-title\">     
                {% if record %}
                    Participantes del estudio \"{{record.titulo}}\"
                {% else %}
                    {{ notFoundMessage }}
                {% endif %}
             </h3>
        </div>
            <!-- /.box-header -->
    </div>
</div>
   <div>
<button  class=\"btn btn-primary\" onclick=\"javascript:location.href='{{ url ('crear-any')}}/{{record.id}}/1'\">Agregar</button> 
</div>

<hr>

   <div class=\"row\">
      <!-- Left col -->
      <section class=\"col-lg-12\">
          <div class=\"box-body\">
            <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
         
                <table id=\"example2\" class=\"table table-bordered table-hover\">
              <thead>
              <tr >
                <th>Nombre</th>
                <th>Con Respuesta</th>                  
                <th>mail</th>
                <th></th>
                
                <th>invitación</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
             


  {% for user in participantes %}
  
    
  
      <tr id=\"usuario-{{user.id}}\">
                  <td>  
             {{user.id}} -   {{ user.name }}</td>
                <td>
                    {% if user.id  in respuestas %}
                    <i class=\"ion ion-ios-checkmark-outline\"></i>
                    

                    {% else %}
                    x
                    {% endif %}      
                </td>
                  <td>
                   {{ user.email }}
                  </td>
                  <td >
                    {% if n_elementos == record.afirma.count  %}

                    <form
                    data-request=\"EnviarMail::onSend\"
                    
                    data-request-flash>
                    <input name=\"user-mail\" type=\"hidden\" value=\"{{user.mail}}\" />
                    <input name=\"user-id\" type=\"hidden\" value=\"{{user.id}}\"/>
                    <input name=\"user-name\" type=\"hidden\" value=\"{{user.name}}\"/>

                    <span data-validate-for=\"name\"></span>
 <button data-attach-loading>
        Enviar
    </button>
</form>
{% else %}
<button disabled>
  Enviar
</button>
{% endif %}

                  </td>
                  <td id =\"enviado-{{user.id}}\">
                
                    {% if user.pivot.enviado==1  %}
                    ya enviado
                    {% else%}
                    pendiente
                    {% endif %}
                
                  </td>
                  <td>
                    <form
                    data-request=\"EnviarMail::onDelete\"
                    
                    data-request-flash>
                   
                    <input name=\"user-id\" type=\"hidden\" value=\"{{user.id}}\"/>
                   

                    <span data-validate-for=\"name\"></span>
 <button data-attach-loading>
        Borrar
    </button>
</form>
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
        <!-- /.box -->
 <hr>
 <div>
  {% if n_elementos == record.afirma.count  %}

  <form
                    data-request=\"EnviarMail::onSendMasivo\"
                    
                    data-request-flash>
                    <input name=\"user-mail\" type=\"hidden\" value=\"{{user.mail}}\" />
                    <input name=\"user-id\" type=\"hidden\" value=\"{{user.id}}\"/>
                    <input name=\"user-name\" type=\"hidden\" value=\"{{user.name}}\"/>

                    <span data-validate-for=\"name\"></span>
 <button data-attach-loading>
        Envió Masivo
    </button>
    {% else %}
    <button disabled>
      Envió Masivo
  </button>
  {% endif %}
</form>
</div>      ", "/var/www/PQ/plugins/fede/crearusuario/components/enviarmail/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "for" => 4, "if" => 9);
        static $filters = array("escape" => 15);
        static $functions = array("url" => 50);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
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
