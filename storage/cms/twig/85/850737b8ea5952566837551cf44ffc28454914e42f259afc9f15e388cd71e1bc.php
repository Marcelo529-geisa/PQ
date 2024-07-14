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

/* /var/www/PQ/plugins/fede/crearusuario/components/updateusuario/default.htm */
class __TwigTemplate_e658f8094c107714a5b56a572ee7361c61f37c87e730a8bc0fa670d9f27abc31 extends \Twig\Template
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
            
                  Bienvenido  ";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "
              
              
           </h3>
           <p>Actualize sus datos para que los demás usuarios sepan más de usted.</p>
      </div>
          <!-- /.box-header -->
  </div>
</div>

<form role=\"form\" data-request=\"UpdateUsuario::onSend\" data-request-validate data-request-files data-request-flash>
  <!-- <input type=\"hidden\" name=\"_handler\" value=\"onSave\">  -->
  ";
        // line 19
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
  ";
        // line 20
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), ["sessionKey"]);
        echo "
  <input type=\"hidden\" name=\"id\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "\">
    <div class=\"form-group\">
        <label for=\"accountName\"> Name</label>
        <span data-validate-for=\"name\" style=\"color:red;\" ></span>

        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountEmail\">Email</label>
        <span data-validate-for=\"email\" style=\"color:red;\" ></span>

        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "\">
    </div>
   
   
    <label >Imagen</label>

      <div class=\"form-group\">
        <div id=\"imageResult\">
          <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, true, 41), "path", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
        echo "\"  style=\"width: 200px; height: auto;\" alt=\"\" >

        </div>
        <input type=\"file\"  class=\"form-control\" name=\"avatar\" id=\"avatar\" data-request=\"UpdateUsuario::onImageUpload\"  data-request-files data-request-flash >
      </div>

    <div class=\"form-group\">
        <label >Antecedentes</label>
        <textarea name=\"bio\"  class=\"form-control\" rows=\"14\" cols=\"100\" >";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "bio", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
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
    <button type=\"submit\" class=\"btn btn-default\">Save</button>

";
        // line 65
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
    }

    public function getTemplateName()
    {
        return "/var/www/PQ/plugins/fede/crearusuario/components/updateusuario/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 65,  129 => 62,  121 => 56,  119 => 55,  110 => 49,  99 => 41,  88 => 33,  78 => 26,  70 => 21,  66 => 20,  62 => 19,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"row\">
  <div class=\"box box-primary\">
      <div class=\"box-header with-border\">
            <h3 class=\"box-title\">     
            
                  Bienvenido  {{user.name}}
              
              
           </h3>
           <p>Actualize sus datos para que los demás usuarios sepan más de usted.</p>
      </div>
          <!-- /.box-header -->
  </div>
</div>

<form role=\"form\" data-request=\"UpdateUsuario::onSend\" data-request-validate data-request-files data-request-flash>
  <!-- <input type=\"hidden\" name=\"_handler\" value=\"onSave\">  -->
  {{ form_token() }}
  {{ form_sessionKey() }}
  <input type=\"hidden\" name=\"id\" value=\"{{ user.id }}\">
    <div class=\"form-group\">
        <label for=\"accountName\"> Name</label>
        <span data-validate-for=\"name\" style=\"color:red;\" ></span>

        <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"{{ user.name }}\">
    </div>

    <div class=\"form-group\">
        <label for=\"accountEmail\">Email</label>
        <span data-validate-for=\"email\" style=\"color:red;\" ></span>

        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"{{ user.email }}\">
    </div>
   
   
    <label >Imagen</label>

      <div class=\"form-group\">
        <div id=\"imageResult\">
          <img src=\"{{ user.avatar.path }}\"  style=\"width: 200px; height: auto;\" alt=\"\" >

        </div>
        <input type=\"file\"  class=\"form-control\" name=\"avatar\" id=\"avatar\" data-request=\"UpdateUsuario::onImageUpload\"  data-request-files data-request-flash >
      </div>

    <div class=\"form-group\">
        <label >Antecedentes</label>
        <textarea name=\"bio\"  class=\"form-control\" rows=\"14\" cols=\"100\" >{{user.bio}}</textarea>
    </div>
    
    


    {% if updateRequiresPassword %}
        <p>To change these details, please confirm your current password.</p>
        <div class=\"form-group\">
            <label for=\"accountPasswordCurrent\">Current Password <small class=\"text-danger\">* required</small></label>
            <input name=\"password_current\" type=\"password\" class=\"form-control\" id=\"accountPasswordCurrent\">
        </div>
    {% endif %}

    <button type=\"submit\" class=\"btn btn-default\">Save</button>

{{ form_close() }}", "/var/www/PQ/plugins/fede/crearusuario/components/updateusuario/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 55);
        static $filters = array("escape" => 7);
        static $functions = array("form_token" => 19, "form_sessionKey" => 20, "form_close" => 65);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['form_token', 'form_sessionKey', 'form_close']
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
