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

/* C:\xampp\htdocs\PQ/plugins/fede/crearusuario/components/enviarmail/default.htm */
class __TwigTemplate_689ac216e0568fe55e22f6f59bb3f77d5850c63e9cbd7b4beb23f690959ab4e3 extends \Twig\Template
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
";
        // line 54
        if ((($context["message"] ?? null) == "ok")) {
            // line 55
            echo "  <p>Fue Enviado con exito!</p>
";
        }
        // line 57
        echo "   <div class=\"row\">
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
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["participantes"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 76
            echo "    
                <tr id=\"usuario-";
            // line 77
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "\">
                            <td>  
                      ";
            // line 79
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo " -   ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "</td>
                          <td>
                            ";
            // line 82
            echo "                      
                            ";
            // line 83
            $context["count"] = 0;
            // line 84
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["estudio_part_id"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 85
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, true, 85) == twig_get_attribute($this->env, $this->source, $context["item"], "user_id", [], "any", false, false, true, 85))) {
                    // line 86
                    echo "                                  ";
                    $context["count"] = (($context["count"] ?? null) + 1);
                    // line 87
                    echo "                                ";
                }
                // line 88
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                            ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["count"] ?? null), 89, $this->source), "html", null, true);
            echo " 
                          </td>
                          <td>
                            ";
            // line 92
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
            echo "
                          </td>
                          <td >
                         
                          ";
            // line 96
            if ((($context["n_elementos"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "afirma", [], "any", false, false, true, 96), "count", [], "any", false, false, true, 96))) {
                // line 97
                echo "                            <form data-request=\"EnviarMail::onSend\" data-request-flash>
                              <input name=\"user-mail\" type=\"hidden\" value=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "mail", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                echo "\" />
                              <input name=\"user-id\" type=\"hidden\" value=\"";
                // line 99
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                echo "\"/>
                              <input name=\"user-name\" type=\"hidden\" value=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, true, 100), 100, $this->source), "html", null, true);
                echo "\"/>

                              <span data-validate-for=\"name\"></span>

                              ";
                // line 104
                if ( !(null === (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["user"], "pivot", [], "any", false, false, true, 104)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["enviado"] ?? null) : null))) {
                    // line 105
                    echo "                                <button data-attach-loading style = \"cursor: not-allowed;
                                background-color: rgb(229, 229, 229);
                                pointer-events:none;border: none;color: white;\">
                                    Enviar
                                </button>
                              ";
                } else {
                    // line 111
                    echo "                                <button data-attach-loading>
                                    Enviar
                                </button>
                              ";
                }
                // line 115
                echo "                            </form>
                          ";
            } else {
                // line 117
                echo "                            <button disabled>
                              Enviar
                            </button>
                          ";
            }
            // line 121
            echo "
                          </td>
                          <td id =\"enviado-";
            // line 123
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
            echo "\">
                        
                            ";
            // line 125
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "pivot", [], "any", false, false, true, 125), "enviado", [], "any", false, false, true, 125) == 1)) {
                // line 126
                echo "                              ya enviado
                            ";
            } else {
                // line 128
                echo "                              pendiente
                            ";
            }
            // line 130
            echo "                          </td>
                          <td>
                              <form
                                data-request=\"EnviarMail::onDelete\"
                                data-request-flash>
                                <input name=\"user-id\" type=\"hidden\" value=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
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
            // line 145
            echo "                ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 145, $this->source), "html", null, true);
            echo "
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "            </tbody>
          </table>
       
            
          </div>
          <!-- /.box-body -->
          
        </div>
        <!-- /.box -->
 <hr>
 <div>
  ";
        // line 158
        if ((($context["n_elementos"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "afirma", [], "any", false, false, true, 158), "count", [], "any", false, false, true, 158))) {
            // line 159
            echo "
  <form
                    data-request=\"EnviarMail::onSendMasivo\"
                    
                    data-request-flash>
                    <input name=\"user-mail\" type=\"hidden\" value=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "mail", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
            echo "\" />
                    <input name=\"user-id\" type=\"hidden\" value=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
            echo "\"/>
                    <input name=\"user-name\" type=\"hidden\" value=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
            echo "\"/>

                    <span data-validate-for=\"name\"></span>
 <button data-attach-loading>
        Envió Masivo
    </button>
    ";
        } else {
            // line 173
            echo "    <button disabled>
      Envió Masivo
  </button>
  ";
        }
        // line 177
        echo "</form>
</div>      ";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\PQ/plugins/fede/crearusuario/components/enviarmail/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 177,  361 => 173,  351 => 166,  347 => 165,  343 => 164,  336 => 159,  334 => 158,  321 => 147,  312 => 145,  297 => 135,  290 => 130,  286 => 128,  282 => 126,  280 => 125,  275 => 123,  271 => 121,  265 => 117,  261 => 115,  255 => 111,  247 => 105,  245 => 104,  238 => 100,  234 => 99,  230 => 98,  227 => 97,  225 => 96,  218 => 92,  211 => 89,  205 => 88,  202 => 87,  199 => 86,  196 => 85,  191 => 84,  189 => 83,  186 => 82,  179 => 79,  174 => 77,  171 => 76,  166 => 75,  146 => 57,  142 => 55,  140 => 54,  131 => 50,  123 => 44,  117 => 42,  111 => 40,  109 => 39,  104 => 36,  93 => 28,  89 => 27,  83 => 23,  73 => 16,  69 => 15,  62 => 10,  60 => 9,  56 => 7,  49 => 5,  45 => 4,  41 => 2,  39 => 1,);
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
{% if message == 'ok' %}
  <p>Fue Enviado con exito!</p>
{% endif %}
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
                            {# respuestas[0].tot #}
                      
                            {% set count = 0 %}
                            {% for item in estudio_part_id %}
                                {% if user.id == item.user_id %}
                                  {% set count = count + 1 %}
                                {% endif %}
                            {% endfor %}
                            {{ count }} 
                          </td>
                          <td>
                            {{ user.email }}
                          </td>
                          <td >
                         
                          {% if n_elementos == record.afirma.count  %}
                            <form data-request=\"EnviarMail::onSend\" data-request-flash>
                              <input name=\"user-mail\" type=\"hidden\" value=\"{{user.mail}}\" />
                              <input name=\"user-id\" type=\"hidden\" value=\"{{user.id}}\"/>
                              <input name=\"user-name\" type=\"hidden\" value=\"{{user.name}}\"/>

                              <span data-validate-for=\"name\"></span>

                              {% if user.pivot['enviado'] is not null %}
                                <button data-attach-loading style = \"cursor: not-allowed;
                                background-color: rgb(229, 229, 229);
                                pointer-events:none;border: none;color: white;\">
                                    Enviar
                                </button>
                              {% else%}
                                <button data-attach-loading>
                                    Enviar
                                </button>
                              {% endif %}
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
</div>      ", "C:\\xampp\\htdocs\\PQ/plugins/fede/crearusuario/components/enviarmail/default.htm", "");
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
