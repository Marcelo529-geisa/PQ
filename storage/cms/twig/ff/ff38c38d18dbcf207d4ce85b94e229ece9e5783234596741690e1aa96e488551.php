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

/* C:\xampp\htdocs\PQ/themes/demo/pages/ajax.htm */
class __TwigTemplate_e5cc5a8cd1d63086d122fb01219302f36550f11f4158bd99767692c0aafb626b extends \Twig\Template
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
        echo "<div class=\"jumbotron title-js\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <h1>AJAX framework</h1>
                <p>This built-in JavaScript framework provides simple but powerful AJAX capabilities. Check out the calculator example below.</p>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Calculator</h3>
        </div>
        <div class=\"panel-body\">
            <form role=\"form\" class=\"form-inline\" data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
                <input type=\"text\" class=\"form-control\" value=\"15\" name=\"value1\" style=\"width:100px\">
                <select class=\"form-control\" name=\"operation\" style=\"width: 70px\">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select>
                <input type=\"text\" class=\"form-control\" value=\"5\" name=\"value2\" style=\"width:100px\">
                <button type=\"submit\" class=\"btn btn btn-primary\" data-attach-loading>Calculate</button>
            </form>
        </div>
        <div class=\"panel-footer\" id=\"result\">
            ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("calcresult"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "        </div>
    </div>

</div>

<!-- Page Explanation -->
<div class=\"container\">";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("explain/ajax.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "</div>

<br />

<div class=\"text-center\">
    <p><a href=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plugins");
        echo "\" class=\"btn btn-lg btn-default\">Continue to Plugin components</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\PQ/themes/demo/pages/ajax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 44,  84 => 39,  76 => 33,  72 => 32,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron title-js\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <h1>AJAX framework</h1>
                <p>This built-in JavaScript framework provides simple but powerful AJAX capabilities. Check out the calculator example below.</p>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Calculator</h3>
        </div>
        <div class=\"panel-body\">
            <form role=\"form\" class=\"form-inline\" data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
                <input type=\"text\" class=\"form-control\" value=\"15\" name=\"value1\" style=\"width:100px\">
                <select class=\"form-control\" name=\"operation\" style=\"width: 70px\">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select>
                <input type=\"text\" class=\"form-control\" value=\"5\" name=\"value2\" style=\"width:100px\">
                <button type=\"submit\" class=\"btn btn btn-primary\" data-attach-loading>Calculate</button>
            </form>
        </div>
        <div class=\"panel-footer\" id=\"result\">
            {% partial \"calcresult\" %}
        </div>
    </div>

</div>

<!-- Page Explanation -->
<div class=\"container\">{% partial \"explain/ajax.htm\" %}</div>

<br />

<div class=\"text-center\">
    <p><a href=\"{{ 'plugins'|page }}\" class=\"btn btn-lg btn-default\">Continue to Plugin components</a></p>
</div>", "C:\\xampp\\htdocs\\PQ/themes/demo/pages/ajax.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("partial" => 32);
        static $filters = array("page" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
                ['page'],
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
