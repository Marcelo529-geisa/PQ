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

/* /var/www/PQ/plugins/fede/contact/components/contactform/default.htm */
class __TwigTemplate_49605dcd2b15ca25f4d8f90ac98b926b91c106df3d128b58f20514d53187cfcc extends \Twig\Template
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
        echo "<div class=\"template-example\">
    <h2 class=\"template-title-example\">CONTACTO</h2>
    <form role=\"form\"
    data-request-validate
    data-request-flash
    data-request=\"onSend\"
    >
      <div class=\"form-group\">
        <label for=\"exampleInputEmail1\">Nombre </label>
        <span data-validate-for=\"name\" style=\"color:red;\" ></span>

        <input type=\"text\" name=\"name\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email\">
      </div>
      
      <div class=\"form-group\">
          <label for=\"exampleInputEmail1\">Email </label>
          <span data-validate-for=\"email\" style=\"color:red;\" ></span>

          <input type=\"email\" name=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email\">
      </div>


      
      <div class=\"form-group\">
          <label for=\"exampleInputEmail1\">Mensaje </label>


        <textarea name=\"mensaje\" class=\"form-control\" rows=\"3\" placeholder=\"Enter your message\"></textarea>
      </div>
   
              <p><button type=\"submit\" class=\"btn btn-info btn-lg\">Enviar</a></p>
      </form>  
     
  </div>


";
    }

    public function getTemplateName()
    {
        return "/var/www/PQ/plugins/fede/contact/components/contactform/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"template-example\">
    <h2 class=\"template-title-example\">CONTACTO</h2>
    <form role=\"form\"
    data-request-validate
    data-request-flash
    data-request=\"onSend\"
    >
      <div class=\"form-group\">
        <label for=\"exampleInputEmail1\">Nombre </label>
        <span data-validate-for=\"name\" style=\"color:red;\" ></span>

        <input type=\"text\" name=\"name\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email\">
      </div>
      
      <div class=\"form-group\">
          <label for=\"exampleInputEmail1\">Email </label>
          <span data-validate-for=\"email\" style=\"color:red;\" ></span>

          <input type=\"email\" name=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Email\">
      </div>


      
      <div class=\"form-group\">
          <label for=\"exampleInputEmail1\">Mensaje </label>


        <textarea name=\"mensaje\" class=\"form-control\" rows=\"3\" placeholder=\"Enter your message\"></textarea>
      </div>
   
              <p><button type=\"submit\" class=\"btn btn-info btn-lg\">Enviar</a></p>
      </form>  
     
  </div>


", "/var/www/PQ/plugins/fede/contact/components/contactform/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
