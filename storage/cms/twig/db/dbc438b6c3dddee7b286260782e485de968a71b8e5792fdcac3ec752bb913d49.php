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

/* /var/www/PQ/themes/baba-adminlte/pages/estudio.htm */
class __TwigTemplate_83af13b8f17f4763e1bbec1c26e1f375fece24284e2c8db0ff0362e7e3b9bb34 extends \Twig\Template
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
        echo "<!DOCTYPE HTML>
<!--
\tStellar by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
\t<title>";
        // line 10
        if (($context["record"] ?? null)) {
            // line 11
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), ($context["displayColumn"] ?? null), [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "

\t\t";
        } else {
            // line 14
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["notFoundMessage"] ?? null), 14, $this->source), "html", null, true);
            echo "
\t\t";
        }
        // line 15
        echo "</title>
\t<meta charset=\"utf-8\" />


\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets3/css/main.css");
        echo "\" />
\t<noscript>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets3/css/noscript.css");
        echo "\" /></noscript>
</head>

<body class=\"is-preload\">

\t<!-- Wrapper -->
\t<div id=\"wrapper\">



\t\t<!-- Header -->
\t\t<header id=\"header\">

\t\t\t<h1>
\t\t\t\t";
        // line 36
        if (($context["record"] ?? null)) {
            // line 37
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), ($context["displayColumn"] ?? null), [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "

\t\t\t\t";
        } else {
            // line 40
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["notFoundMessage"] ?? null), 40, $this->source), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 42
        echo "\t\t\t</h1>
\t\t\t<p>";
        // line 43
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 43), "description", [], "any", false, false, true, 43), 43, $this->source);
        echo "</p>
\t\t\t<div class=\"form-group\"
\t\t\tstyle=\"position: absolute;
top: 0px;
width: 20%;
right: 10px;
font-size: large;\" 
>";
        // line 50
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "</div>
\t\t</header>
\t\t";
        // line 52
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 52);
        // line 53
        echo "\t\t";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, true, 53);
        // line 54
        echo "\t\t";
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, true, 54);
        // line 55
        echo "
\t\t<!-- Nav -->
\t\t<nav id=\"nav\">
\t\t\t<ul>
\t\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "info", [], "any", false, false, true, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 60
            echo "\t\t\t\t<li><a href=\"#";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "etiqueta", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "etiqueta", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "\t\t\t\t<li><a href=\"#colaboradores\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Equipo"]);
        echo "</a></li>
\t\t\t\t<li><a href=\"#cta\">";
        // line 63
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Responder"]);
        echo "</a></li>
\t\t\t\t<li></li>
\t\t\t</ul>

\t\t</nav>

\t\t<!-- Main -->
\t\t<div id=\"main\">



\t\t\t";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "info", [], "any", false, false, true, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 75
            echo "
\t\t\t<section id=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "etiqueta", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
            echo "\" class=\"main\">
\t\t\t\t<div class=\"spotlight\">
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t";
            // line 81
            ob_start();
            // line 82
            echo "\t\t\t\t\t\t\t\t";
            if (($context["detailsPage"] ?? null)) {
                // line 83
                echo "\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\thref=\"";
                // line 84
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 84, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 84)]);
                echo "\">
\t\t\t\t\t\t\t\t\t";
            }
            // line 86
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 87
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], ($context["displayColumn"] ?? null), [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "

\t\t\t\t\t\t\t\t\t";
            // line 89
            if (($context["detailsPage"] ?? null)) {
                // line 90
                echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 92
            echo "\t\t\t\t\t\t\t\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 93
            echo "
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<p>";
            // line 96
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "cuerpo", [], "any", false, false, true, 96), 96, $this->source);
            echo "</p>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</section>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "


\t\t\t<section id=\"colaboradores\" class=\"main\">
\t\t\t
\t\t\t\t<div class=\"spotlight\">
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\tResponsable

\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</header>


\t\t\t\t\t\t<section id=\"intro\" class=\"main\">
\t\t\t\t\t\t\t<div class=\"spotlight\">

\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"content\"style=\"float: left;\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t\t<h3><strong> ";
        // line 126
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "user", [], "any", false, false, true, 126), "name", [], "any", false, false, true, 126), 126, $this->source), "html", null, true);
        echo " </strong></h3> <a
\t\t\t\t\t\t\t\t\t\t\thref=\"mailto:";
        // line 127
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "user", [], "any", false, false, true, 127), "email", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "user", [], "any", false, false, true, 127), "email", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
        echo "</a>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<p>";
        // line 129
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "user", [], "any", false, false, true, 129), "bio", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
        echo "</p>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span class=\"image\"><img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "user", [], "any", false, false, true, 134), "avatar", [], "any", false, false, true, 134), "path", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
        echo "\"  style=\"width: 200px; height: auto;display: block;
\t\t\t\t\t\t\t\t\t\tborder-radius: 100%;\" alt=\"\" /></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t\t<hr>
\t\t\t\t<div class=\"spotlight\">
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\tColaboradores

\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</header>



\t\t\t\t\t\t";
        // line 155
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["estudio_colabor"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 156
            echo "
\t\t\t\t\t\t<section id=\"intro\" class=\"main\">
\t\t\t\t\t\t\t<div class=\"spotlight\">
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t\t<h3><strong> ";
            // line 161
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
            echo " </strong></h3> <a
\t\t\t\t\t\t\t\t\t\t\thref=\"mailto:";
            // line 162
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, true, 162), 162, $this->source), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<p>";
            // line 164
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["user"], "bio", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
            echo "</p>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"image\"><img src=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "avatar", [], "any", false, false, true, 167), "path", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
            echo "\" style=\"width: 200px; height: auto;\" alt=\"\" /></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<hr>

\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</section>
\t\t\t
\t\t\t<!-- Get Started class=\"main special\" -->
\t\t\t<section id=\"cta\" >
\t\t\t\t<header class=\"major\">
\t\t\t\t<!--\t<h2>";
        // line 182
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Hacer la encuesta"]);
        echo "</h2>
\t\t\t\t\t<p>";
        // line 183
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Si estás listo vamos pa delante"]);
        echo "</p>
\t\t\t\t\t-->
\t\t\t\t</header>
\t\t\t\t<footer class=\"major\">
\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t<li><a href=\"";
        // line 188
        echo url("/responde/");
        echo "/";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, true, 188), 188, $this->source), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t\tclass=\"button primary\">";
        // line 189
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Responder ahora"]);
        echo "</a></li>

\t\t\t\t\t</ul>
\t\t\t\t</footer>
\t\t\t</section>
\t\t</br>

\t</br>



\t\t</div>

\t\t<!-- Footer -->
\t\t<footer id=\"footer\">
\t\t<!--\t<section>
\t\t\t\t<h2>Aliquam sed mauris</h2>
\t\t\t\t<p>Sed lorem ipsum dolor sit amet et nullam consequat feugiat consequat magna adipiscing tempus etiam
\t\t\t\t\tdolore veroeros. eget dapibus mauris. Cras aliquet, nisl ut viverra sollicitudin, ligula erat
\t\t\t\t\tegestas velit, vitae tincidunt odio.</p>
\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t<li><a href=\"generic.html\" class=\"button\">Learn More</a></li>
\t\t\t\t</ul>
\t\t\t</section>
\t\t\t<section>
\t\t\t\t<h2>Etiam feugiat</h2>
\t\t\t\t<dl class=\"alt\">
\t\t\t\t\t<dt>Address</dt>
\t\t\t\t\t<dd>1234 Somewhere Road &bull; Nashville, TN 00000 &bull; USA</dd>
\t\t\t\t\t<dt>Phone</dt>
\t\t\t\t\t<dd>(000) 000-0000 x 0000</dd>
\t\t\t\t\t<dt>Email</dt>
\t\t\t\t\t<dd><a href=\"#\">information@untitled.tld</a></dd>
\t\t\t\t</dl>
\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-twitter alt\"><span class=\"label\">Twitter</span></a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-facebook-f alt\"><span class=\"label\">Facebook</span></a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-instagram alt\"><span class=\"label\">Instagram</span></a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-github alt\"><span class=\"label\">GitHub</span></a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-dribbble alt\"><span class=\"label\">Dribbble</span></a></li>
\t\t\t\t</ul>
\t\t\t</section>
\t\t\t<p class=\"copyright\">&copy; Untitled. Design: <a href=\"https://html5up.net\">HTML5 UP</a>.</p>
\t\t-->
\t\t</footer>

\t</div>

\t<!-- Scripts -->
\t<script src=\"";
        // line 238
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets3/js/jquery.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 239
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets3/js/jquery.scrollex.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 240
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets3/js/jquery.scrolly.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 241
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets3/js/browser.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 242
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets3/js/breakpoints.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 243
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets3/js/util.js");
        echo "\"></script>
\t<script src=\"";
        // line 244
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/assets3/js/main.js");
        echo "\"></script>
\t";
        // line 245
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 246
        echo "

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/PQ/themes/baba-adminlte/pages/estudio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  468 => 246,  457 => 245,  453 => 244,  449 => 243,  445 => 242,  441 => 241,  437 => 240,  433 => 239,  429 => 238,  377 => 189,  371 => 188,  363 => 183,  359 => 182,  348 => 173,  336 => 167,  330 => 164,  323 => 162,  319 => 161,  312 => 156,  308 => 155,  284 => 134,  276 => 129,  269 => 127,  265 => 126,  241 => 104,  227 => 96,  222 => 93,  219 => 92,  215 => 90,  213 => 89,  208 => 87,  205 => 86,  200 => 84,  197 => 83,  194 => 82,  192 => 81,  184 => 76,  181 => 75,  177 => 74,  163 => 63,  158 => 62,  147 => 60,  143 => 59,  137 => 55,  134 => 54,  131 => 53,  129 => 52,  122 => 50,  112 => 43,  109 => 42,  103 => 40,  96 => 37,  94 => 36,  77 => 22,  72 => 20,  65 => 15,  59 => 14,  52 => 11,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<!--
\tStellar by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
\t<title>{% if record %}
\t\t{{ attribute(record, displayColumn) }}

\t\t{% else %}
\t\t{{ notFoundMessage }}
\t\t{% endif %}</title>
\t<meta charset=\"utf-8\" />


\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
\t<link rel=\"stylesheet\" href=\"{{'assets/assets3/css/main.css'|theme}}\" />
\t<noscript>
\t\t<link rel=\"stylesheet\" href=\"{{'assets/assets3/css/noscript.css'|theme}}\" /></noscript>
</head>

<body class=\"is-preload\">

\t<!-- Wrapper -->
\t<div id=\"wrapper\">



\t\t<!-- Header -->
\t\t<header id=\"header\">

\t\t\t<h1>
\t\t\t\t{% if record %}
\t\t\t\t{{ attribute(record, displayColumn) }}

\t\t\t\t{% else %}
\t\t\t\t{{ notFoundMessage }}
\t\t\t\t{% endif %}
\t\t\t</h1>
\t\t\t<p>{{ this.page.description|raw }}</p>
\t\t\t<div class=\"form-group\"
\t\t\tstyle=\"position: absolute;
top: 0px;
width: 20%;
right: 10px;
font-size: large;\" 
>{% component 'localePicker' %}</div>
\t\t</header>
\t\t{% set record = builderDetails.record %}
\t\t{% set displayColumn = builderDetails.displayColumn %}
\t\t{% set notFoundMessage = builderDetails.notFoundMessage %}

\t\t<!-- Nav -->
\t\t<nav id=\"nav\">
\t\t\t<ul>
\t\t\t\t{% for record in record.info %}
\t\t\t\t<li><a href=\"#{{record.etiqueta}}\">{{record.etiqueta}}</a></li>
\t\t\t\t{% endfor %}
\t\t\t\t<li><a href=\"#colaboradores\">{{ 'Equipo'|_}}</a></li>
\t\t\t\t<li><a href=\"#cta\">{{ 'Responder'|_ }}</a></li>
\t\t\t\t<li></li>
\t\t\t</ul>

\t\t</nav>

\t\t<!-- Main -->
\t\t<div id=\"main\">



\t\t\t{% for record in record.info %}

\t\t\t<section id=\"{{record.etiqueta}}\" class=\"main\">
\t\t\t\t<div class=\"spotlight\">
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t{% spaceless %}
\t\t\t\t\t\t\t\t{% if detailsPage %}
\t\t\t\t\t\t\t\t<a
\t\t\t\t\t\t\t\t\thref=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t{{ attribute(record, displayColumn) }}

\t\t\t\t\t\t\t\t\t{% if detailsPage %}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endspaceless %}

\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</header>
\t\t\t\t\t\t<p>{{ record.cuerpo|raw }}</p>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</section>

\t\t\t{% endfor %}



\t\t\t<section id=\"colaboradores\" class=\"main\">
\t\t\t
\t\t\t\t<div class=\"spotlight\">
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\tResponsable

\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</header>


\t\t\t\t\t\t<section id=\"intro\" class=\"main\">
\t\t\t\t\t\t\t<div class=\"spotlight\">

\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"content\"style=\"float: left;\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t\t<h3><strong> {{ record.user.name }} </strong></h3> <a
\t\t\t\t\t\t\t\t\t\t\thref=\"mailto:{{ record.user.email }}\">{{ record.user.email }}</a>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<p>{{ record.user.bio }}</p>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<span class=\"image\"><img src=\"{{record.user.avatar.path}}\"  style=\"width: 200px; height: auto;display: block;
\t\t\t\t\t\t\t\t\t\tborder-radius: 100%;\" alt=\"\" /></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t
\t\t\t\t\t</div>

\t\t\t\t\t<hr>
\t\t\t\t<div class=\"spotlight\">
\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\tColaboradores

\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</header>



\t\t\t\t\t\t{% for user in estudio_colabor %}

\t\t\t\t\t\t<section id=\"intro\" class=\"main\">
\t\t\t\t\t\t\t<div class=\"spotlight\">
\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t<header class=\"major\">
\t\t\t\t\t\t\t\t\t\t<h3><strong> {{ user.name }} </strong></h3> <a
\t\t\t\t\t\t\t\t\t\t\thref=\"mailto:{{ user.email }}\">{{ user.email }}</a>
\t\t\t\t\t\t\t\t\t</header>
\t\t\t\t\t\t\t\t\t<p>{{ user.bio }}</p>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"image\"><img src=\"{{user.avatar.path}}\" style=\"width: 200px; height: auto;\" alt=\"\" /></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<hr>

\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</section>
\t\t\t
\t\t\t<!-- Get Started class=\"main special\" -->
\t\t\t<section id=\"cta\" >
\t\t\t\t<header class=\"major\">
\t\t\t\t<!--\t<h2>{{ 'Hacer la encuesta'|_ }}</h2>
\t\t\t\t\t<p>{{ 'Si estás listo vamos pa delante'|_ }}</p>
\t\t\t\t\t-->
\t\t\t\t</header>
\t\t\t\t<footer class=\"major\">
\t\t\t\t\t<ul class=\"actions special\">
\t\t\t\t\t\t<li><a href=\"{{ url('/responde/')  }}/{{record.id}}\"
\t\t\t\t\t\t\t\tclass=\"button primary\">{{'Responder ahora'|_ }}</a></li>

\t\t\t\t\t</ul>
\t\t\t\t</footer>
\t\t\t</section>
\t\t</br>

\t</br>



\t\t</div>

\t\t<!-- Footer -->
\t\t<footer id=\"footer\">
\t\t<!--\t<section>
\t\t\t\t<h2>Aliquam sed mauris</h2>
\t\t\t\t<p>Sed lorem ipsum dolor sit amet et nullam consequat feugiat consequat magna adipiscing tempus etiam
\t\t\t\t\tdolore veroeros. eget dapibus mauris. Cras aliquet, nisl ut viverra sollicitudin, ligula erat
\t\t\t\t\tegestas velit, vitae tincidunt odio.</p>
\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t<li><a href=\"generic.html\" class=\"button\">Learn More</a></li>
\t\t\t\t</ul>
\t\t\t</section>
\t\t\t<section>
\t\t\t\t<h2>Etiam feugiat</h2>
\t\t\t\t<dl class=\"alt\">
\t\t\t\t\t<dt>Address</dt>
\t\t\t\t\t<dd>1234 Somewhere Road &bull; Nashville, TN 00000 &bull; USA</dd>
\t\t\t\t\t<dt>Phone</dt>
\t\t\t\t\t<dd>(000) 000-0000 x 0000</dd>
\t\t\t\t\t<dt>Email</dt>
\t\t\t\t\t<dd><a href=\"#\">information@untitled.tld</a></dd>
\t\t\t\t</dl>
\t\t\t\t<ul class=\"icons\">
\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-twitter alt\"><span class=\"label\">Twitter</span></a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-facebook-f alt\"><span class=\"label\">Facebook</span></a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-instagram alt\"><span class=\"label\">Instagram</span></a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-github alt\"><span class=\"label\">GitHub</span></a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"icon brands fa-dribbble alt\"><span class=\"label\">Dribbble</span></a></li>
\t\t\t\t</ul>
\t\t\t</section>
\t\t\t<p class=\"copyright\">&copy; Untitled. Design: <a href=\"https://html5up.net\">HTML5 UP</a>.</p>
\t\t-->
\t\t</footer>

\t</div>

\t<!-- Scripts -->
\t<script src=\"{{'assets/assets3/js/jquery.min.js'|theme}}\"></script>
\t<script src=\"{{'assets/assets3/js/jquery.scrollex.min.js'|theme}}\"></script>
\t<script src=\"{{'assets/assets3/js/jquery.scrolly.min.js'|theme}}\"></script>
\t<script src=\"{{'assets/assets3/js/browser.min.js'|theme}}\"></script>
\t<script src=\"{{'assets/assets3/js/breakpoints.min.js'|theme}}\"></script>
\t<script src=\"{{'assets/assets3/js/util.js'|theme}}\"></script>
\t<script src=\"{{'assets/assets3/js/main.js'|theme}}\"></script>
\t{% framework extras %}


</body>

</html>", "/var/www/PQ/themes/baba-adminlte/pages/estudio.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "component" => 50, "set" => 52, "for" => 59, "spaceless" => 81, "framework" => 245);
        static $filters = array("escape" => 11, "theme" => 20, "raw" => 43, "_" => 62, "page" => 84);
        static $functions = array("url" => 188);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'component', 'set', 'for', 'spaceless', 'framework'],
                ['escape', 'theme', 'raw', '_', 'page'],
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
