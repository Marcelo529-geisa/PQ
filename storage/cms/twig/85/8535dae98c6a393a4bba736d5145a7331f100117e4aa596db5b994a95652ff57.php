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

/* C:\xampp\htdocs\PQ/themes/demo/pages/home.htm */
class __TwigTemplate_1d07a66969adb366ee1330afbe436b17ccb3f3cfb84699b847ac16c13fc0286a extends \Twig\Template
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        ";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("welcome.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "    </div>
</div>

<div class=\"container\">

    <div class=\"page-header\">
        <h2>Overview <small>Basic concepts</small></h2>
    </div>
    <p>
        This page demonstrates the basic CMS features.
        Usually each page built with October is a combination of a layout, page, partials and content blocks,
        although in simple cases you can just use a page without anything else.
    </p>

    <!-- Layouts -->
    <h3>Layouts</h3>
    <p class=\"lead\">
        <i class=\"icon-th-large\"></i> &nbsp; Layouts define the page scaffold.
    </p>
    <p>
        The layout file <code>layouts/default.htm</code> defines the page scaffold &mdash;
        everything that repeats on each page, such as the HTML, HEAD and BODY tags, StyleSheet and JavaScript references.
    </p>
    <p>The page menu and footer in the Demo theme are defined in the layout as well.</p>

    <hr />

    <!-- Pages -->
    <h3>Pages</h3>
    <p class=\"lead\">
        <i class=\"icon-copy\"></i> &nbsp; Pages hold the content for each URL.
    </p>
    <p>
        The page file <code>pages/home.htm</code> defines the page URL (<code>/</code> for this page) and the page content.
        Pages are rendered inside layouts with this function that should be called in the layout code:
    </p>
    <pre>";
        // line 40
        echo "{% page %}";
        echo "</pre>
    <p>Using a layout for pages is optional &mdash; you can define everything right in the page file.</p>

    <hr />

    <!-- Partials -->
    <h3>Partials</h3>
    <p class=\"lead\">
        <i class=\"icon-tags\"></i> &nbsp; Partials contain reusable chunks of HTML markup.
    </p>
    <p>
        Partials are chunks of HTML defined in separate files that can be included anywhere.
        Partials are rendered with:
    </p>
    <pre>";
        // line 54
        echo "{% partial \"partial-name\" %}";
        echo "</pre>
    <p>You may place partials inside folders too. In this example we placed the footer content to the <code>partials/site/footer.htm</code> partial.</p>
    <pre>";
        // line 56
        echo "{% partial \"site/footer\" %}";
        echo "</pre>
    <p>Partials can be used inside pages, layouts or other partials.</p>

    <hr />

    <!-- Content blocks -->
    <h3>Content blocks</h3>
    <p class=\"lead\">
        <i class=\"icon-font\"></i> &nbsp; Content blocks are text or HTML blocks that can be edited separately from the page or layout.
    </p>
    <p>
        The introductory text used on this page is defined in the <code>content/welcome.htm</code> file.
        Content blocks are defined and rendered with:
        <pre>";
        // line 69
        echo "{% content \"content-name.htm\" %}";
        echo "</pre>
    </p>

    <hr />

    <!-- Placeholders -->
    <h3>Placeholders</h3>
    <p class=\"lead\">
        <i class=\"icon-bookmark\"></i> &nbsp; Placeholders allow pages to inject content to a layout.
    </p>
    <p>
        The common use is injecting page-specific links to StyleSheet or JavaScript files to the HEAD tag defined in the layout.
        Placeholders are defined in the layout file and they have names so that they can be referred in the page.
        Example:
    </p>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <p>Layout file:</p>
            <pre>";
        // line 87
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("placeholder/layout.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</pre>
        </div>
        <div class=\"col-md-6\">
            <p>Page file:</p>
            <pre>";
        // line 91
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("placeholder/page.txt"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        echo "</pre>
        </div>
    </div>

    <hr />

    <!-- Assets -->
    <h3>Assets</h3>
    <p class=\"lead\">
        <i class=\"icon-picture\"></i> &nbsp; Assets are resource files like images and stylesheets.
    </p>
    <p>This theme stores its asset files (JavaScript, StyleSheet, images, fonts, etc) in the <code>themes/demo/assets</code> directory. This theme is also packaged with these useful 3rd party tools:</p>
    <ul class=\"list-inline\">
        <li><a target=\"_blank\" href=\"http://getbootstrap.com/\">Twitter Bootstrap</a></li>
        <li><a target=\"_blank\" href=\"http://fontawesome.io/3.2.1/\">Font Awesome</a></li>
        <li><a target=\"_blank\" href=\"http://www.google.com/fonts/specimen/Lato\">Lato webfont</a></li>
    </ul>
    <p>You might prefer to remove them for your website implementation.</p>

    <br />

    <div class=\"text-center\">
        <p><a href=\"";
        // line 113
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\" class=\"btn btn-lg btn-default\">Continue to AJAX framework</a></p>
    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\PQ/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 113,  153 => 91,  144 => 87,  123 => 69,  107 => 56,  102 => 54,  85 => 40,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron\">
    <div class=\"container\">
        {% content \"welcome.htm\" %}
    </div>
</div>

<div class=\"container\">

    <div class=\"page-header\">
        <h2>Overview <small>Basic concepts</small></h2>
    </div>
    <p>
        This page demonstrates the basic CMS features.
        Usually each page built with October is a combination of a layout, page, partials and content blocks,
        although in simple cases you can just use a page without anything else.
    </p>

    <!-- Layouts -->
    <h3>Layouts</h3>
    <p class=\"lead\">
        <i class=\"icon-th-large\"></i> &nbsp; Layouts define the page scaffold.
    </p>
    <p>
        The layout file <code>layouts/default.htm</code> defines the page scaffold &mdash;
        everything that repeats on each page, such as the HTML, HEAD and BODY tags, StyleSheet and JavaScript references.
    </p>
    <p>The page menu and footer in the Demo theme are defined in the layout as well.</p>

    <hr />

    <!-- Pages -->
    <h3>Pages</h3>
    <p class=\"lead\">
        <i class=\"icon-copy\"></i> &nbsp; Pages hold the content for each URL.
    </p>
    <p>
        The page file <code>pages/home.htm</code> defines the page URL (<code>/</code> for this page) and the page content.
        Pages are rendered inside layouts with this function that should be called in the layout code:
    </p>
    <pre>{{ \"{% page %}\" }}</pre>
    <p>Using a layout for pages is optional &mdash; you can define everything right in the page file.</p>

    <hr />

    <!-- Partials -->
    <h3>Partials</h3>
    <p class=\"lead\">
        <i class=\"icon-tags\"></i> &nbsp; Partials contain reusable chunks of HTML markup.
    </p>
    <p>
        Partials are chunks of HTML defined in separate files that can be included anywhere.
        Partials are rendered with:
    </p>
    <pre>{{ \"{% partial \\\"partial-name\\\" %}\" }}</pre>
    <p>You may place partials inside folders too. In this example we placed the footer content to the <code>partials/site/footer.htm</code> partial.</p>
    <pre>{{ \"{% partial \\\"site/footer\\\" %}\" }}</pre>
    <p>Partials can be used inside pages, layouts or other partials.</p>

    <hr />

    <!-- Content blocks -->
    <h3>Content blocks</h3>
    <p class=\"lead\">
        <i class=\"icon-font\"></i> &nbsp; Content blocks are text or HTML blocks that can be edited separately from the page or layout.
    </p>
    <p>
        The introductory text used on this page is defined in the <code>content/welcome.htm</code> file.
        Content blocks are defined and rendered with:
        <pre>{{ \"{% content \\\"content-name.htm\\\" %}\" }}</pre>
    </p>

    <hr />

    <!-- Placeholders -->
    <h3>Placeholders</h3>
    <p class=\"lead\">
        <i class=\"icon-bookmark\"></i> &nbsp; Placeholders allow pages to inject content to a layout.
    </p>
    <p>
        The common use is injecting page-specific links to StyleSheet or JavaScript files to the HEAD tag defined in the layout.
        Placeholders are defined in the layout file and they have names so that they can be referred in the page.
        Example:
    </p>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <p>Layout file:</p>
            <pre>{% content \"placeholder/layout.txt\" %}</pre>
        </div>
        <div class=\"col-md-6\">
            <p>Page file:</p>
            <pre>{% content \"placeholder/page.txt\" %}</pre>
        </div>
    </div>

    <hr />

    <!-- Assets -->
    <h3>Assets</h3>
    <p class=\"lead\">
        <i class=\"icon-picture\"></i> &nbsp; Assets are resource files like images and stylesheets.
    </p>
    <p>This theme stores its asset files (JavaScript, StyleSheet, images, fonts, etc) in the <code>themes/demo/assets</code> directory. This theme is also packaged with these useful 3rd party tools:</p>
    <ul class=\"list-inline\">
        <li><a target=\"_blank\" href=\"http://getbootstrap.com/\">Twitter Bootstrap</a></li>
        <li><a target=\"_blank\" href=\"http://fontawesome.io/3.2.1/\">Font Awesome</a></li>
        <li><a target=\"_blank\" href=\"http://www.google.com/fonts/specimen/Lato\">Lato webfont</a></li>
    </ul>
    <p>You might prefer to remove them for your website implementation.</p>

    <br />

    <div class=\"text-center\">
        <p><a href=\"{{ 'ajax'|page }}\" class=\"btn btn-lg btn-default\">Continue to AJAX framework</a></p>
    </div>

</div>", "C:\\xampp\\htdocs\\PQ/themes/demo/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("content" => 3);
        static $filters = array("page" => 113);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content'],
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
