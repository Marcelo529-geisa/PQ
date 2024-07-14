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

/* /var/www/PQ/plugins/rainlab/translate/components/localepicker/default.htm */
class __TwigTemplate_1cbec60833a8bcd3400f429cc851da7faa58eed16fda070eecb9fb7657cf2967 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), ["open"]);
        echo "
<a>
        <select name=\"locale\" data-request=\"onSwitchLocale\" class=\"form-control\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
        foreach ($context['_seq'] as $context["code"] => $context["name"]) {
            // line 5
            echo "        
            <option value=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["code"], 6, $this->source), "html", null, true);
            echo "\" ";
            echo ((($context["code"] == ($context["activeLocale"] ?? null))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 6, $this->source), "html", null, true);
            echo "</option>
       
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </select>
     </a>
";
        // line 11
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
    }

    public function getTemplateName()
    {
        return "/var/www/PQ/plugins/rainlab/translate/components/localepicker/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 11,  65 => 9,  52 => 6,  49 => 5,  45 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_open() }}
<a>
        <select name=\"locale\" data-request=\"onSwitchLocale\" class=\"form-control\">
        {% for code, name in locales %}
        
            <option value=\"{{ code }}\" {{ code == activeLocale ? 'selected' }}>{{ name }}</option>
       
            {% endfor %}
    </select>
     </a>
{{ form_close() }}", "/var/www/PQ/plugins/rainlab/translate/components/localepicker/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 4);
        static $filters = array("escape" => 6);
        static $functions = array("form_open" => 1, "form_close" => 11);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['form_open', 'form_close']
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
