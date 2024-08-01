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

/* C:\xampp\htdocs\PQ/plugins/fede/crearusuario/components/actualizarusuario/default.htm */
class __TwigTemplate_cb8bd3ce829f44591f71c2025df531b0ee765f5fb8c105dd6a05dc6557f28404 extends \Twig\Template
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
        echo "
<div class=\"row\">
  <div class=\"box box-primary\">
      <div class=\"box-header with-border\">
            <h3 class=\"box-title\">     
              
                  Actualizando datos del usuario:  <strong>";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["userio"] ?? null), "name", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</strong>
              
              
           </h3>
      </div>
          <!-- /.box-header -->
  </div>
</div>

<form role=\"form\" data-request=\"ActualizarUsuario::onSend\" data-request-files data-request-flash>
  <!-- <input type=\"hidden\" name=\"_handler\" value=\"onSave\">  -->

  
  ";
        // line 20
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
  ";
        // line 21
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), ["sessionKey"]);
        echo "
  <input type=\"hidden\" name=\"id\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "param", [], "any", false, false, true, 22), "id", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "\">
    <div class=\"form-group\">
        <label for=\"accountName\">Nombre</label>
        <span data-validate-for=\"name\" style=\"color:red;\" ></span>

        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["userio"] ?? null), "name", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountEmail\">Email</label>
        <span data-validate-for=\"email\" style=\"color:red;\" ></span>

        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["userio"] ?? null), "email", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "\">
    </div>
    <label >Imagen</label>

      <div class=\"form-group\">
        <div id=\"imageResult\">
          <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["userio"] ?? null), "avatar", [], "any", false, false, true, 40), "path", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "\"  style=\"width: 200px; height: auto;\" alt=\"\" >

        </div>
        <input type=\"file\"  class=\"form-control\" name=\"avatar\" id=\"avatar\" data-request=\"ActualizarUsuario::onImageUpload\"  data-request-files data-request-flash >
      </div>

    <div class=\"form-group\">
        <label >Antecedentes</label>
        <textarea name=\"bio\"  class=\"form-control\" rows=\"14\" cols=\"100\" >";
        // line 48
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["userio"] ?? null), "bio", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo "</textarea>
    </div>
    
  
    


    ";
        // line 55
        if (($context["updateRequiresPassword"] ?? null)) {
            // line 56
            echo "        <p>To change these details, please confirm your current password.</p>
        <div class=\"form-group\">
            <label for=\"accountPasswordCurrent\">Current Password <small class=\"text-danger\">* required</small></label>
            <input name=\"password_current\" type=\"password\" class=\"form-control\" id=\"accountPasswordCurrent\">
        </div>
    ";
        }
        // line 62
        echo "
    <button type=\"submit\" class=\"btn btn-default\">Guardar</button>
    <button class=\"btn btn-warning\"><a href=\"";
        // line 64
        echo url("/lista-administradores");
        echo "\">Cerrar</a></button>

";
        // line 66
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\PQ/plugins/fede/crearusuario/components/actualizarusuario/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 66,  133 => 64,  129 => 62,  121 => 56,  119 => 55,  109 => 48,  98 => 40,  89 => 34,  79 => 27,  71 => 22,  67 => 21,  63 => 20,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"row\">
  <div class=\"box box-primary\">
      <div class=\"box-header with-border\">
            <h3 class=\"box-title\">     
              
                  Actualizando datos del usuario:  <strong>{{userio.name}}</strong>
              
              
           </h3>
      </div>
          <!-- /.box-header -->
  </div>
</div>

<form role=\"form\" data-request=\"ActualizarUsuario::onSend\" data-request-files data-request-flash>
  <!-- <input type=\"hidden\" name=\"_handler\" value=\"onSave\">  -->

  
  {{ form_token() }}
  {{ form_sessionKey() }}
  <input type=\"hidden\" name=\"id\" value=\"{{this.param.id}}\">
    <div class=\"form-group\">
        <label for=\"accountName\">Nombre</label>
        <span data-validate-for=\"name\" style=\"color:red;\" ></span>

        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"{{ userio.name }}\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountEmail\">Email</label>
        <span data-validate-for=\"email\" style=\"color:red;\" ></span>

        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"{{ userio.email }}\">
    </div>
    <label >Imagen</label>

      <div class=\"form-group\">
        <div id=\"imageResult\">
          <img src=\"{{ userio.avatar.path }}\"  style=\"width: 200px; height: auto;\" alt=\"\" >

        </div>
        <input type=\"file\"  class=\"form-control\" name=\"avatar\" id=\"avatar\" data-request=\"ActualizarUsuario::onImageUpload\"  data-request-files data-request-flash >
      </div>

    <div class=\"form-group\">
        <label >Antecedentes</label>
        <textarea name=\"bio\"  class=\"form-control\" rows=\"14\" cols=\"100\" >{{userio.bio}}</textarea>
    </div>
    
  
    


    {% if updateRequiresPassword %}
        <p>To change these details, please confirm your current password.</p>
        <div class=\"form-group\">
            <label for=\"accountPasswordCurrent\">Current Password <small class=\"text-danger\">* required</small></label>
            <input name=\"password_current\" type=\"password\" class=\"form-control\" id=\"accountPasswordCurrent\">
        </div>
    {% endif %}

    <button type=\"submit\" class=\"btn btn-default\">Guardar</button>
    <button class=\"btn btn-warning\"><a href=\"{{url('/lista-administradores') }}\">Cerrar</a></button>

{{ form_close() }}", "C:\\xampp\\htdocs\\PQ/plugins/fede/crearusuario/components/actualizarusuario/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 55);
        static $filters = array("escape" => 7);
        static $functions = array("form_token" => 20, "form_sessionKey" => 21, "url" => 64, "form_close" => 66);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['form_token', 'form_sessionKey', 'url', 'form_close']
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
