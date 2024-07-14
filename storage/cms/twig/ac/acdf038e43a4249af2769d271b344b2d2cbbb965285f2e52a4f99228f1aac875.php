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

/* /var/www/PQ/themes/baba-adminlte/layouts/fixed.htm */
class __TwigTemplate_ca7a199b9e35555642795220f183af4b8043d648dc2f8fc17e717f29be67586c extends \Twig\Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 7), "site_name", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <!-- Bootstrap 3.3.7 -->
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/bootstrap/dist/css/bootstrap.min.css");
        echo "\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/font-awesome/css/font-awesome.min.css");
        echo "\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/Ionicons/css/ionicons.min.css");
        echo "\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/AdminLTE.min.css");
        echo "\">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/skins/_all-skins.min.css");
        echo "\">
  <!-- Morris chart -->
 <!-- <link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/morris.js/morris.css");
        echo "\"> -->
  <!-- jvectormap -->
  <link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/jvectormap/jquery-jvectormap.css");
        echo "\">
  <!-- Date Picker -->
  <link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css");
        echo "\">
  <!-- Daterange picker -->
  <link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/bootstrap-daterangepicker/daterangepicker.css");
        echo "\">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel=\"stylesheet\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css");
        echo "\">
";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 32
        echo "  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
  <![endif]-->

  <!-- Google Font -->
  <!-- <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\"> -->
  ";
        // line 41
        $context['__placeholder_headScripts_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('headScripts', $context['__placeholder_headScripts_default_contents']);
        unset($context['__placeholder_headScripts_default_contents']);        // line 42
        echo "</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

  <header class=\"main-header\">
    <!-- Logo -->
    <a href=\"";
        // line 48
        echo url("/Panel");
        echo "\" class=\"logo\">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class=\"logo-mini\">";
        // line 50
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 50), "login_title", [], "any", false, false, true, 50), 50, $this->source);
        echo "</span>
      <!-- logo for regular state and mobile devices -->
      <span class=\"logo-lg\">";
        // line 52
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 52), "login_title", [], "any", false, false, true, 52), 52, $this->source);
        echo "</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class=\"navbar navbar-static-top\">
      <!-- Sidebar toggle button-->
      <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </a>
      <div style=\"float: right;\">
 ";
        // line 64
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 65
        echo " </div>
      <div class=\"navbar-custom-menu\">
     
        <ul class=\"nav navbar-nav\">
      
          <!-- User Account: style can be found in dropdown.less -->
          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, true, 73), "path", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
              <span class=\"hidden-xs\">";
        // line 74
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "</span>
            </a>
            <ul class=\"dropdown-menu\">
              <!-- User image -->
              <li class=\"user-header\">
                <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "avatar", [], "any", false, false, true, 79), "path", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                <p>
                    ";
        // line 82
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
        echo "
                  <small>Agregado el: ";
        // line 83
        echo call_user_func_array($this->env->getFilter('strftime')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "created_at", [], "any", false, false, true, 83), 83, $this->source), "%d/%m/%Y"]);
        echo " </small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class=\"user-footer\">
                <div class=\"pull-left\">
                  <a href=\"";
        // line 91
        echo url("/acceder");
        echo "\" class=\"btn btn-default btn-flat\">Mi perfil</a>
                </div>
                <div class=\"pull-left\">
                     <a href=\"";
        // line 94
        echo url("/actualizar-contra");
        echo "\" class=\"btn btn-default btn-flat\">Contraseña</a>
                </div>
                <div class=\"pull-right\">
                <a data-request=\"onLogout\" data-request-data=\"redirect: '/acceder'\" class=\"btn btn-default btn-flat\">Salir</a>
                  
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  ";
        // line 112
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("main-sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 113
        echo "
  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
     
    </section>

    <!-- Main content -->
    <section class=\"content\">
        ";
        // line 123
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 124
        echo "    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href=\"https://adminlte.io\">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class=\"control-sidebar control-sidebar-dark\" style=\"display: none;\">
    <!-- Create the tabs -->
    <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
      <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
      <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class=\"tab-content\">
      <!-- Home tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
        <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
        <ul class=\"control-sidebar-menu\">
          <li>
            <a href=\"javascript:void(0)\">
              <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <i class=\"menu-icon fa fa-user bg-yellow\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
        <ul class=\"control-sidebar-menu\">
          <li>
            <a href=\"javascript:void(0)\">
              <h4 class=\"control-sidebar-subheading\">
                Custom Template Design
                <span class=\"label label-danger pull-right\">70%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <h4 class=\"control-sidebar-subheading\">
                Update Resume
                <span class=\"label label-success pull-right\">95%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <h4 class=\"control-sidebar-subheading\">
                Laravel Integration
                <span class=\"label label-warning pull-right\">50%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <h4 class=\"control-sidebar-subheading\">
                Back End Framework
                <span class=\"label label-primary pull-right\">68%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
        <form method=\"post\">
          <h3 class=\"control-sidebar-heading\">General Settings</h3>

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Report panel usage
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Allow mail redirect
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Expose author name in posts
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Show me as online
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Turn off notifications
              <input type=\"checkbox\" class=\"pull-right\">
            </label>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Delete chat history
              <a href=\"javascript:void(0)\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src=\"";
        // line 333
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/jquery/dist/jquery.min.js");
        echo "\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"";
        // line 335
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/jquery-ui/jquery-ui.min.js");
        echo "\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src=\"";
        // line 341
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/bootstrap/dist/js/bootstrap.min.js");
        echo "\"></script>
<!-- Morris.js charts -->
<script src=\"";
        // line 343
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/raphael/raphael.min.js");
        echo "\"></script>
<!-- <script src=\"";
        // line 344
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/morris.js/morris.min.js");
        echo "\"></script> -->
<!-- Sparkline -->
<script src=\"";
        // line 346
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js");
        echo "\"></script>
<!-- jvectormap -->
<script src=\"";
        // line 348
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js");
        echo "\"></script>
<script src=\"";
        // line 349
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js");
        echo "\"></script>
<!-- jQuery Knob Chart -->
<script src=\"";
        // line 351
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/jquery-knob/dist/jquery.knob.min.js");
        echo "\"></script>
<!-- daterangepicker -->
<script src=\"";
        // line 353
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/moment/min/moment.min.js");
        echo "\"></script>

<script src=\"";
        // line 355
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/bootstrap-daterangepicker/daterangepicker.js");
        echo "\"></script>
<!-- datepicker -->
<script src=\"";
        // line 357
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js");
        echo "\"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src=\"";
        // line 359
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js");
        echo "\"></script>
<!-- Slimscroll -->
<script src=\"";
        // line 361
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js");
        echo "\"></script>
<!-- FastClick -->
<script src=\"";
        // line 363
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/bower_components/fastclick/lib/fastclick.js");
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 365
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/adminlte.min.js");
        echo "\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src=\"";
        // line 367
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/pages/dashboard.js");
        echo "\"></script> -->
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 369
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/demo.js");
        echo "\"></script>
";
        // line 370
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 371
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 371), "title", [], "any", false, false, true, 371) == "Editar Info") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 371), "title", [], "any", false, false, true, 371) == "Crear Pagina"))) {
            // line 372
            echo " <script type=\"text/javascript\" src=\"";
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/tinymce/tinymce.min.js");
            echo "\"></script>
 <script type=\"text/javascript\" src=\"";
            // line 373
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/plugin/tinymce/jquery.tinymce.min.js");
            echo "\"></script>
  <script type=\"text/javascript\" src=\"";
            // line 374
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/tinymce/init-tinymce.js");
            echo "\"></script>
";
        }
        // line 375
        echo "  
";
        // line 376
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
        // line 377
        echo "

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/PQ/themes/baba-adminlte/layouts/fixed.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  585 => 377,  574 => 376,  571 => 375,  566 => 374,  562 => 373,  557 => 372,  555 => 371,  552 => 370,  548 => 369,  543 => 367,  538 => 365,  533 => 363,  528 => 361,  523 => 359,  518 => 357,  513 => 355,  508 => 353,  503 => 351,  498 => 349,  494 => 348,  489 => 346,  484 => 344,  480 => 343,  475 => 341,  466 => 335,  461 => 333,  250 => 124,  248 => 123,  236 => 113,  232 => 112,  211 => 94,  205 => 91,  194 => 83,  190 => 82,  184 => 79,  176 => 74,  172 => 73,  162 => 65,  158 => 64,  143 => 52,  138 => 50,  133 => 48,  125 => 42,  123 => 41,  112 => 32,  109 => 31,  105 => 30,  100 => 28,  95 => 26,  90 => 24,  85 => 22,  80 => 20,  74 => 17,  69 => 15,  64 => 13,  59 => 11,  50 => 7,  43 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'session' %}
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>{{ this.theme.site_name }} | {{ this.page.title }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <!-- Bootstrap 3.3.7 -->
  <link rel=\"stylesheet\" href=\"{{'assets/bower_components/bootstrap/dist/css/bootstrap.min.css'|theme}}\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"{{'assets/bower_components/font-awesome/css/font-awesome.min.css'|theme}}\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"{{'assets/bower_components/Ionicons/css/ionicons.min.css'|theme}}\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"{{'assets/css/AdminLTE.min.css'|theme}}\">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel=\"stylesheet\" href=\"{{'assets/css/skins/_all-skins.min.css'|theme}}\">
  <!-- Morris chart -->
 <!-- <link rel=\"stylesheet\" href=\"{{'assets/bower_components/morris.js/morris.css'|theme}}\"> -->
  <!-- jvectormap -->
  <link rel=\"stylesheet\" href=\"{{'assets/bower_components/jvectormap/jquery-jvectormap.css'|theme}}\">
  <!-- Date Picker -->
  <link rel=\"stylesheet\" href=\"{{'assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'|theme}}\">
  <!-- Daterange picker -->
  <link rel=\"stylesheet\" href=\"{{'assets/bower_components/bootstrap-daterangepicker/daterangepicker.css'|theme}}\">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel=\"stylesheet\" href=\"{{'assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'|theme}}\">
{% styles %}
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
  <![endif]-->

  <!-- Google Font -->
  <!-- <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\"> -->
  {% placeholder headScripts %}
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

  <header class=\"main-header\">
    <!-- Logo -->
    <a href=\"{{url('/Panel')}}\" class=\"logo\">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class=\"logo-mini\">{{this.theme.login_title|raw}}</span>
      <!-- logo for regular state and mobile devices -->
      <span class=\"logo-lg\">{{this.theme.login_title|raw}}</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class=\"navbar navbar-static-top\">
      <!-- Sidebar toggle button-->
      <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"push-menu\" role=\"button\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </a>
      <div style=\"float: right;\">
 {% component 'localePicker' %}
 </div>
      <div class=\"navbar-custom-menu\">
     
        <ul class=\"nav navbar-nav\">
      
          <!-- User Account: style can be found in dropdown.less -->
          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <img src=\"{{ user.avatar.path  }}\" class=\"user-image\" alt=\"User Image\">
              <span class=\"hidden-xs\">{{ user.name }}</span>
            </a>
            <ul class=\"dropdown-menu\">
              <!-- User image -->
              <li class=\"user-header\">
                <img src=\"{{ user.avatar.path  }}\" class=\"img-circle\" alt=\"User Image\">

                <p>
                    {{ user.name }}
                  <small>Agregado el: {{ user.created_at | strftime('%d/%m/%Y' ) }} </small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class=\"user-footer\">
                <div class=\"pull-left\">
                  <a href=\"{{ url('/acceder')}}\" class=\"btn btn-default btn-flat\">Mi perfil</a>
                </div>
                <div class=\"pull-left\">
                     <a href=\"{{ url('/actualizar-contra')}}\" class=\"btn btn-default btn-flat\">Contraseña</a>
                </div>
                <div class=\"pull-right\">
                <a data-request=\"onLogout\" data-request-data=\"redirect: '/acceder'\" class=\"btn btn-default btn-flat\">Salir</a>
                  
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  {% partial \"main-sidebar\" %}

  <!-- Content Wrapper. Contains page content -->
  <div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
     
    </section>

    <!-- Main content -->
    <section class=\"content\">
        {% page %}
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href=\"https://adminlte.io\">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class=\"control-sidebar control-sidebar-dark\" style=\"display: none;\">
    <!-- Create the tabs -->
    <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
      <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
      <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class=\"tab-content\">
      <!-- Home tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
        <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
        <ul class=\"control-sidebar-menu\">
          <li>
            <a href=\"javascript:void(0)\">
              <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <i class=\"menu-icon fa fa-user bg-yellow\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>

              <div class=\"menu-info\">
                <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
        <ul class=\"control-sidebar-menu\">
          <li>
            <a href=\"javascript:void(0)\">
              <h4 class=\"control-sidebar-subheading\">
                Custom Template Design
                <span class=\"label label-danger pull-right\">70%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <h4 class=\"control-sidebar-subheading\">
                Update Resume
                <span class=\"label label-success pull-right\">95%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <h4 class=\"control-sidebar-subheading\">
                Laravel Integration
                <span class=\"label label-warning pull-right\">50%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
              </div>
            </a>
          </li>
          <li>
            <a href=\"javascript:void(0)\">
              <h4 class=\"control-sidebar-subheading\">
                Back End Framework
                <span class=\"label label-primary pull-right\">68%</span>
              </h4>

              <div class=\"progress progress-xxs\">
                <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
        <form method=\"post\">
          <h3 class=\"control-sidebar-heading\">General Settings</h3>

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Report panel usage
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Allow mail redirect
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Expose author name in posts
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Show me as online
              <input type=\"checkbox\" class=\"pull-right\" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Turn off notifications
              <input type=\"checkbox\" class=\"pull-right\">
            </label>
          </div>
          <!-- /.form-group -->

          <div class=\"form-group\">
            <label class=\"control-sidebar-subheading\">
              Delete chat history
              <a href=\"javascript:void(0)\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src=\"{{'assets/bower_components/jquery/dist/jquery.min.js'|theme}}\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"{{'assets/bower_components/jquery-ui/jquery-ui.min.js'|theme}}\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src=\"{{'assets/bower_components/bootstrap/dist/js/bootstrap.min.js'|theme}}\"></script>
<!-- Morris.js charts -->
<script src=\"{{'assets/bower_components/raphael/raphael.min.js'|theme}}\"></script>
<!-- <script src=\"{{'assets/bower_components/morris.js/morris.min.js'|theme}}\"></script> -->
<!-- Sparkline -->
<script src=\"{{'assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'|theme}}\"></script>
<!-- jvectormap -->
<script src=\"{{'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'|theme}}\"></script>
<script src=\"{{'assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'|theme}}\"></script>
<!-- jQuery Knob Chart -->
<script src=\"{{'assets/bower_components/jquery-knob/dist/jquery.knob.min.js'|theme}}\"></script>
<!-- daterangepicker -->
<script src=\"{{'assets/bower_components/moment/min/moment.min.js'|theme}}\"></script>

<script src=\"{{'assets/bower_components/bootstrap-daterangepicker/daterangepicker.js'|theme}}\"></script>
<!-- datepicker -->
<script src=\"{{'assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'|theme}}\"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src=\"{{'assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'|theme}}\"></script>
<!-- Slimscroll -->
<script src=\"{{'assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'|theme}}\"></script>
<!-- FastClick -->
<script src=\"{{'assets/bower_components/fastclick/lib/fastclick.js'|theme}}\"></script>
<!-- AdminLTE App -->
<script src=\"{{'assets/js/adminlte.min.js'|theme}}\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src=\"{{'assets/js/pages/dashboard.js'|theme}}\"></script> -->
<!-- AdminLTE for demo purposes -->
<script src=\"{{'assets/js/demo.js'|theme}}\"></script>
{% scripts %}
{% if this.page.title == \"Editar Info\" or this.page.title == \"Crear Pagina\"  %}
 <script type=\"text/javascript\" src=\"{{ 'assets/js/tinymce/tinymce.min.js'|theme }}\"></script>
 <script type=\"text/javascript\" src=\"{{ 'assets/js/plugin/tinymce/jquery.tinymce.min.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{'assets/js/tinymce/init-tinymce.js'|theme }}\"></script>
{%  endif %}  
{% framework extras %}


</body>
</html>", "/var/www/PQ/themes/baba-adminlte/layouts/fixed.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 1, "styles" => 31, "placeholder" => 41, "partial" => 112, "page" => 123, "scripts" => 370, "if" => 371, "framework" => 376);
        static $filters = array("escape" => 7, "theme" => 11, "raw" => 50, "strftime" => 83);
        static $functions = array("url" => 48);

        try {
            $this->sandbox->checkSecurity(
                ['component', 'styles', 'placeholder', 'partial', 'page', 'scripts', 'if', 'framework'],
                ['escape', 'theme', 'raw', 'strftime'],
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
