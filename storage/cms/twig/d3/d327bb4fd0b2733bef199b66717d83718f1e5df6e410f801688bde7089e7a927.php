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

/* C:\xampp\htdocs\PQ/themes/baba-adminlte/partials/main-sidebar.htm */
class __TwigTemplate_ba866f3d9ea53d1bb01ad6c0ba61a8af82da870de47b83c8f831e7a36e0e42a4 extends \Twig\Template
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
        echo "<!-- Left side column. contains the logo and sidebar -->
<aside class=\"main-sidebar\">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class=\"sidebar\">
    <!-- sidebar menu: : style can be found in sidebar.less -->


    ";
        // line 8
        $context["mostrar"] = "false";
        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "groups", [], "any", false, false, true, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["grupos"]) {
            // line 10
            echo "    ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["grupos"], "id", [], "any", false, false, true, 10), [0 => 2, 1 => 4, 2 => 5])) {
                // line 11
                echo "    ";
                $context["mostrar"] = "true";
                // line 12
                echo "    ";
            }
            // line 13
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grupos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    ";
        if ((($context["mostrar"] ?? null) == "true")) {
            // line 15
            echo "


    ";
        }
        // line 19
        echo "
    ";
        // line 20
        $context["mostrarSuperAdmin"] = "false";
        // line 21
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "groups", [], "any", false, false, true, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["grupos"]) {
            // line 22
            echo "    ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["grupos"], "id", [], "any", false, false, true, 22), [0 => 5])) {
                // line 23
                echo "    ";
                $context["mostrarSuperAdmin"] = "true";
                // line 24
                echo "    ";
            }
            // line 25
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grupos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    ";
        if ((($context["mostrarSuperAdmin"] ?? null) == "true")) {
            // line 27
            echo "


    ";
        }
        // line 31
        echo "
    ";
        // line 32
        $context["mostrarAdmin"] = "false";
        // line 33
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "groups", [], "any", false, false, true, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["grupos"]) {
            // line 34
            echo "    ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["grupos"], "id", [], "any", false, false, true, 34), [0 => 5, 1 => 2])) {
                // line 35
                echo "    ";
                $context["mostrarAdmin"] = "true";
                // line 36
                echo "    ";
            }
            // line 37
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grupos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    ";
        if ((($context["mostrarAdmin"] ?? null) == "true")) {
            // line 39
            echo "


    ";
        }
        // line 43
        echo "

    ";
        // line 45
        $context["mostrarEditor"] = "false";
        // line 46
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "groups", [], "any", false, false, true, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["grupos"]) {
            // line 47
            echo "    ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["grupos"], "id", [], "any", false, false, true, 47), [0 => 4, 1 => 5, 2 => 2])) {
                // line 48
                echo "    ";
                $context["mostrarEditor"] = "true";
                // line 49
                echo "    ";
            }
            // line 50
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grupos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    ";
        if ((($context["mostrarEditor"] ?? null) == "true")) {
            // line 52
            echo "


    ";
        }
        // line 56
        echo "
    <ul class=\"sidebar-menu\" data-widget=\"tree\">



      ";
        // line 61
        if ((($context["mostrarEditor"] ?? null) == "true")) {
            // line 62
            echo "      <li class=\"header\">Administracion</li>
      ";
        }
        // line 64
        echo "      ";
        if ((($context["mostrarSuperAdmin"] ?? null) == "true")) {
            // line 65
            echo "



      <li
        class=\"";
            // line 70
            echo (((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 70) == "lista-admin")) ? ("active") : (""));
            echo " \">
        <a href=\"";
            // line 71
            echo url("lista-usuarios/null/2");
            echo "\">
          <i class=\"fa fa-users\"></i> <span> Administradores</span>
         
        </a>
       
      </li>
      <li
      class=\"";
            // line 78
            echo (((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 78) == "cuenta-mail")) ? ("active") : (""));
            echo " \">
      <a href=\"";
            // line 79
            echo url("backend/system/settings/update/october/system/mail_settings");
            echo "\">
        <i class=\"fa fa-envelope\"></i> <span> Mail</span>
        
      </a>
      
    </li>

      ";
        }
        // line 87
        echo "
      ";
        // line 88
        if ((($context["mostrarAdmin"] ?? null) == "true")) {
            // line 89
            echo "




      <li
        class=\"";
            // line 95
            echo (((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 95) == "lista-editores")) ? ("active") : (""));
            echo " \">
        <a href=\"";
            // line 96
            echo url("lista-usuarios/null/4");
            echo "\">
          <i class=\"fa fa-edit\"></i> <span>Editores</span>
          <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>

        </a>
      
      </li>
      <li
        class=\"";
            // line 106
            echo ((((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 106) == "editar-portada") || (twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 106) == "cuenta-mail"))) ? ("active") : (""));
            echo " treeview\">
        <a href=\"#\">
          <i class=\"fa fa-globe\"></i> <span> Portada</span>
          <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
        </a>
        <ul class=\"treeview-menu\">

          <li class=\"";
            // line 115
            echo (((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 115) == "vista-previa-portada")) ? ("active") : (""));
            echo "\"><a href=\"";
            echo url("/");
            echo "\"
            
              target=\"_blank')}}\"><i class=\"fa fa-eye\"></i> Vista Previa</a></li>
          <li class=\"";
            // line 118
            echo (((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 118) == "editar-portada")) ? ("active") : (""));
            echo "\"><a href=\"";
            echo url("lista-fotos");
            echo "\"><i
                class=\"fa fa-edit\"></i> Editar portada</a></li>




        </ul>
      </li>

      ";
        }
        // line 128
        echo "
      ";
        // line 129
        if ((($context["mostrarEditor"] ?? null) == "true")) {
            // line 130
            echo "




      <li
        class=\"";
            // line 136
            echo ((((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 136) == "tus-estudios") || (twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 136) == "nuevo-estudio"))) ? ("active") : (""));
            echo " treeview\">
        <a href=\"#\">
          <i class=\"fa fa-folder\"></i> <span> Tus Estudios</span>
          <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
        </a>
        <ul class=\"treeview-menu\">
          <li class=\"";
            // line 144
            echo (((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 144) == "tus-estudios")) ? ("active") : (""));
            echo " \">
            <a href=\"#\" onclick=\"javascript:location.href='";
            // line 145
            echo url("/");
            echo "/tusestudios'\">
              <i class=\"fa fa-table\"></i> <span>Ver Lista</span>

            </a>

          </li>
          <li class=\"";
            // line 151
            echo (((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 151) == "nuevo-estudio")) ? ("active") : (""));
            echo " \">
            <a href=\"#\" onclick=\"javascript:location.href='";
            // line 152
            echo url("/");
            echo "/crear-estudio'\">
              <i class=\"fa fa-edit\"></i> <span>Nuevo Estudio</span>

            </a>

          </li>
        </ul>


        ";
        }
        // line 162
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "session", [], "any", false, false, true, 162), "get", [0 => "estudio-id"], "method", false, false, true, 162) && (($context["mostrarEditor"] ?? null) == "true"))) {
            // line 163
            echo "      <li class=\"header\">Estudio Actual</li>
      <li class=\"";
            // line 164
            echo (((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 164) == "estudio-vista-previa")) ? ("active") : (""));
            // line 165
            echo " \">
                        
                        <a href=\"#\"   onclick=\"javascript:location.href='";
            // line 167
            echo url("/");
            echo "/editar-estudio/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "session", [], "any", false, false, true, 167), "get", [0 => "estudio-id"], "method", false, false, true, 167), 167, $this->source), "html", null, true);
            echo "'\">
                          <i class=\"fa fa-home\"></i> <span></span>
                          ";
            // line 169
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "session", [], "any", false, false, true, 169), "get", [0 => "estudio-titulo"], "method", false, false, true, 169), 169, $this->source), "html", null, true);
            echo "

            

            </a>
          </li>
      <li class=\"";
            // line 175
            echo ((((((((((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 175) == "update-estudio") || (twig_get_attribute($this->env, $this->source,             // line 176
($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 176) == "paginas")) || (twig_get_attribute($this->env, $this->source,             // line 177
($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 177) == "colaboradores")) || (twig_get_attribute($this->env, $this->source,             // line 178
($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 178) == "correo")) || (twig_get_attribute($this->env, $this->source,             // line 179
($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 179) == "afirmaciones")) || (twig_get_attribute($this->env, $this->source,             // line 180
($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 180) == "safirmaciones")) || (twig_get_attribute($this->env, $this->source,             // line 181
($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 181) == "distribucion")) || (twig_get_attribute($this->env, $this->source,             // line 182
($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 182) == "Resultados"))) ? ("active") : (""));
            // line 184
            echo "  treeview\">
      <a href=\"#\">Menu
      
        
          <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
      </a>
        <ul class=\"treeview-menu\">
          <li class=\"";
            // line 193
            echo (((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 193) == "estudio-vista-previa")) ? ("active") : (""));
            // line 194
            echo " \">

            <a href=\"";
            // line 196
            echo url("estudio/");
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "session", [], "any", false, false, true, 196), "get", [0 => "estudio-id"], "method", false, false, true, 196), 196, $this->source), "html", null, true);
            echo "\" target=\"_blank\">
              <i class=\"fa fa-eye\"></i> <span>Vista Previa</span>

            </a>
          </li>


          <li class=\"";
            // line 203
            echo (((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 203) == "update-estudio")) ? ("active") : (""));
            echo " treeview\">
            <a href=\"#\" onclick=\"javascript:location.href='";
            // line 204
            echo url("/");
            echo "/update-estudio/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "session", [], "any", false, false, true, 204), "get", [0 => "estudio-id"], "method", false, false, true, 204), 204, $this->source), "html", null, true);
            echo "'\">
              <i class=\"fa fa-align-justify\"></i> <span>Descripción</span>

            </a>
          </li>

          <li class=\"";
            // line 210
            echo (((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 210) == "paginas")) ? ("active") : (""));
            echo " treeview\">

            <a href=\"#\" onclick=\"javascript:location.href='";
            // line 212
            echo url("/");
            echo "/paginas/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "session", [], "any", false, false, true, 212), "get", [0 => "estudio-id"], "method", false, false, true, 212), 212, $this->source), "html", null, true);
            echo "'\">
              <i class=\"fa fa-file\"></i> </i><span>Páginas</span>

            </a>
          </li>
          <li class=\"";
            // line 217
            echo (((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 217) == "colaboradores")) ? ("active") : (""));
            echo " treeview\">
            <a href=\"#\"
              onclick=\"javascript:location.href='";
            // line 219
            echo url("lista-usuarios");
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "session", [], "any", false, false, true, 219), "get", [0 => "estudio-id"], "method", false, false, true, 219), 219, $this->source), "html", null, true);
            echo "/3'\">
              <i class=\"fa fa-user\"></i> <span>Colaboradores</span>

            </a>

          </li>

          <li class=\"";
            // line 226
            echo (((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 226) == "correo")) ? ("active") : (""));
            echo " \">
            <a href=\"#\"
              onclick=\"javascript:location.href='";
            // line 228
            echo url("/");
            echo "/correo/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "session", [], "any", false, false, true, 228), "get", [0 => "estudio-id"], "method", false, false, true, 228), 228, $this->source), "html", null, true);
            echo "'\">
              <i class=\"fa fa-envelope\"></i> <span>Participantes</span>
             
            </a>

          </li>
          <li
            class=\"";
            // line 235
            echo ((((((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 235) == "invoice") || (twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 235) == "login")) || (twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 235) == "register")) || (twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 235) == "blank"))) ? ("active") : (""));
            echo " treeview\">
            <a href=\"#\">
              <i class=\"fa fa-question\"></i> <span>Preguntas</span>
              <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
            </a>

          </li>
          <li
            class=\"";
            // line 245
            echo (((((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 245) == "afirmaciones") || (twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 245) == "distribucion")) || (twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 245) == "safirmaciones"))) ? ("active") : (""));
            echo " treeview\">
            <a href=\"#\">


              <i class=\"fa fa-th\"></i><span>Metodología Q</span>
              <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
            </a>
             <ul class=\"treeview-menu\">
             <li class=\"";
            // line 255
            echo (((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 255) == "safirmaciones")) ? ("active") : (""));
            echo " \">
            <a href=\"#\" onclick=\"javascript:location.href='";
            // line 256
            echo url("/");
            echo "/afirmaciones-desde-archivo/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "session", [], "any", false, false, true, 256), "get", [0 => "estudio-id"], "method", false, false, true, 256), 256, $this->source), "html", null, true);
            echo "'\">
              <i class=\"fa fa-upload\"></i> <span>Subir Afirmaciones</span>

            </a>

          </li>
          <li class=\"";
            // line 262
            echo (((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 262) == "afirmaciones")) ? ("active") : (""));
            echo " \">
            <a href=\"#\" onclick=\"javascript:location.href='";
            // line 263
            echo url("/");
            echo "/afirmaciones/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "session", [], "any", false, false, true, 263), "get", [0 => "estudio-id"], "method", false, false, true, 263), 263, $this->source), "html", null, true);
            echo "'\">
              <i class=\"fa fa-table\"></i> <span>Ver Afirmaciones</span>

            </a>

          </li>
          <li class=\"";
            // line 269
            echo (((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 269) == "distribucion")) ? ("active") : (""));
            echo " \">
            <a href=\"#\" onclick=\"javascript:location.href='";
            // line 270
            echo url("/");
            echo "/distribucion/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "session", [], "any", false, false, true, 270), "get", [0 => "estudio-id"], "method", false, false, true, 270), 270, $this->source), "html", null, true);
            echo "'\">
              <i class=\"fa fa-edit\"></i> <span>Distribución</span>

            </a>

          </li>
        </ul>


          </li>
          <li
            class=\"";
            // line 281
            echo (((twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "activeMenu", [], "any", false, false, true, 281) == "Resultados")) ? ("active") : (""));
            echo " \">
            <a href=\"#\" onclick=\"javascript:location.href='";
            // line 282
            echo url("/");
            echo "/resultados/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "session", [], "any", false, false, true, 282), "get", [0 => "estudio-id"], "method", false, false, true, 282), 282, $this->source), "html", null, true);
            echo "'\">
              <i class=\"fa fa-arrow-down\"></i> <span>Resultados</span>
              
            </a>

          </li>
          
        </ul>
      </li>
      ";
        }
        // line 292
        echo "      ";
        if (($context["mostrarEditor"] ?? null)) {
            // line 293
            echo "
    </ul>
    ";
        }
        // line 296
        echo "  </section>
  <!-- /.sidebar -->
</aside>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\PQ/themes/baba-adminlte/partials/main-sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 296,  581 => 293,  578 => 292,  563 => 282,  559 => 281,  543 => 270,  539 => 269,  528 => 263,  524 => 262,  513 => 256,  509 => 255,  496 => 245,  483 => 235,  471 => 228,  466 => 226,  454 => 219,  449 => 217,  439 => 212,  434 => 210,  423 => 204,  419 => 203,  407 => 196,  403 => 194,  401 => 193,  390 => 184,  388 => 182,  387 => 181,  386 => 180,  385 => 179,  384 => 178,  383 => 177,  382 => 176,  381 => 175,  372 => 169,  365 => 167,  361 => 165,  359 => 164,  356 => 163,  353 => 162,  340 => 152,  336 => 151,  327 => 145,  323 => 144,  312 => 136,  304 => 130,  302 => 129,  299 => 128,  284 => 118,  276 => 115,  264 => 106,  251 => 96,  247 => 95,  239 => 89,  237 => 88,  234 => 87,  223 => 79,  219 => 78,  209 => 71,  205 => 70,  198 => 65,  195 => 64,  191 => 62,  189 => 61,  182 => 56,  176 => 52,  173 => 51,  167 => 50,  164 => 49,  161 => 48,  158 => 47,  153 => 46,  151 => 45,  147 => 43,  141 => 39,  138 => 38,  132 => 37,  129 => 36,  126 => 35,  123 => 34,  118 => 33,  116 => 32,  113 => 31,  107 => 27,  104 => 26,  98 => 25,  95 => 24,  92 => 23,  89 => 22,  84 => 21,  82 => 20,  79 => 19,  73 => 15,  70 => 14,  64 => 13,  61 => 12,  58 => 11,  55 => 10,  50 => 9,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Left side column. contains the logo and sidebar -->
<aside class=\"main-sidebar\">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class=\"sidebar\">
    <!-- sidebar menu: : style can be found in sidebar.less -->


    {% set mostrar ='false' %}
    {% for grupos in user.groups %}
    {% if grupos.id in [2,4,5] %}
    {% set mostrar ='true' %}
    {% endif %}
    {% endfor %}
    {% if mostrar == 'true' %}



    {% endif %}

    {% set mostrarSuperAdmin ='false' %}
    {% for grupos in user.groups %}
    {% if grupos.id in [5] %}
    {% set mostrarSuperAdmin ='true' %}
    {% endif %}
    {% endfor %}
    {% if mostrarSuperAdmin == 'true' %}



    {% endif %}

    {% set mostrarAdmin ='false' %}
    {% for grupos in user.groups %}
    {% if grupos.id in [5,2] %}
    {% set mostrarAdmin ='true' %}
    {% endif %}
    {% endfor %}
    {% if mostrarAdmin == 'true' %}



    {% endif %}


    {% set mostrarEditor ='false' %}
    {% for grupos in user.groups %}
    {% if grupos.id in [4,5,2] %}
    {% set mostrarEditor ='true' %}
    {% endif %}
    {% endfor %}
    {% if mostrarEditor == 'true' %}



    {% endif %}

    <ul class=\"sidebar-menu\" data-widget=\"tree\">



      {% if mostrarEditor == 'true' %}
      <li class=\"header\">Administracion</li>
      {% endif %}
      {% if mostrarSuperAdmin == 'true' %}




      <li
        class=\"{{ (  viewBag.activeMenu == 'lista-admin') ? 'active' }} \">
        <a href=\"{{ url('lista-usuarios/null/2')}}\">
          <i class=\"fa fa-users\"></i> <span> Administradores</span>
         
        </a>
       
      </li>
      <li
      class=\"{{ (  viewBag.activeMenu == 'cuenta-mail' ) ? 'active' }} \">
      <a href=\"{{ url('backend/system/settings/update/october/system/mail_settings')}}\">
        <i class=\"fa fa-envelope\"></i> <span> Mail</span>
        
      </a>
      
    </li>

      {% endif %}

      {% if mostrarAdmin == 'true' %}





      <li
        class=\"{{ ( viewBag.activeMenu == 'lista-editores' ) ? 'active' }} \">
        <a href=\"{{ url('lista-usuarios/null/4')}}\">
          <i class=\"fa fa-edit\"></i> <span>Editores</span>
          <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>

        </a>
      
      </li>
      <li
        class=\"{{ (viewBag.activeMenu == 'editar-portada' or viewBag.activeMenu == 'cuenta-mail') ? 'active' }} treeview\">
        <a href=\"#\">
          <i class=\"fa fa-globe\"></i> <span> Portada</span>
          <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
        </a>
        <ul class=\"treeview-menu\">

          <li class=\"{{ viewBag.activeMenu == 'vista-previa-portada' ? 'active' }}\"><a href=\"{{ url('/')}}\"
            
              target=\"_blank')}}\"><i class=\"fa fa-eye\"></i> Vista Previa</a></li>
          <li class=\"{{ viewBag.activeMenu == 'editar-portada'  ? 'active' }}\"><a href=\"{{ url('lista-fotos')}}\"><i
                class=\"fa fa-edit\"></i> Editar portada</a></li>




        </ul>
      </li>

      {% endif %}

      {% if mostrarEditor == 'true' %}





      <li
        class=\"{{ (viewBag.activeMenu == 'tus-estudios' or viewBag.activeMenu == 'nuevo-estudio' ) ? 'active' }} treeview\">
        <a href=\"#\">
          <i class=\"fa fa-folder\"></i> <span> Tus Estudios</span>
          <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
        </a>
        <ul class=\"treeview-menu\">
          <li class=\"{{ viewBag.activeMenu == 'tus-estudios' ? 'active' }} \">
            <a href=\"#\" onclick=\"javascript:location.href='{{ url('/')}}/tusestudios'\">
              <i class=\"fa fa-table\"></i> <span>Ver Lista</span>

            </a>

          </li>
          <li class=\"{{ viewBag.activeMenu == 'nuevo-estudio' ? 'active' }} \">
            <a href=\"#\" onclick=\"javascript:location.href='{{  url('/')}}/crear-estudio'\">
              <i class=\"fa fa-edit\"></i> <span>Nuevo Estudio</span>

            </a>

          </li>
        </ul>


        {% endif %}
        {% if (this.session.get('estudio-id') and mostrarEditor == 'true' )%}
      <li class=\"header\">Estudio Actual</li>
      <li class=\"{{ ( viewBag.activeMenu == 'estudio-vista-previa') 
                        ? 'active' }} \">
                        
                        <a href=\"#\"   onclick=\"javascript:location.href='{{  url('/')}}/editar-estudio/{{ this.session.get('estudio-id')}}'\">
                          <i class=\"fa fa-home\"></i> <span></span>
                          {{this.session.get('estudio-titulo')}}

            

            </a>
          </li>
      <li class=\"{{ ( viewBag.activeMenu == 'update-estudio' or 
                        viewBag.activeMenu == 'paginas' or 
                        viewBag.activeMenu == 'colaboradores' or 
                        viewBag.activeMenu == 'correo' or
                        viewBag.activeMenu == 'afirmaciones' or 
                        viewBag.activeMenu == 'safirmaciones' or 
                        viewBag.activeMenu == 'distribucion' or
                        viewBag.activeMenu == 'Resultados'
                        ) 
                        ? 'active' }}  treeview\">
      <a href=\"#\">Menu
      
        
          <span class=\"pull-right-container\">
            <i class=\"fa fa-angle-left pull-right\"></i>
          </span>
      </a>
        <ul class=\"treeview-menu\">
          <li class=\"{{ ( viewBag.activeMenu == 'estudio-vista-previa') 
                        ? 'active' }} \">

            <a href=\"{{ url('estudio/')}}/{{ this.session.get('estudio-id')}}\" target=\"_blank\">
              <i class=\"fa fa-eye\"></i> <span>Vista Previa</span>

            </a>
          </li>


          <li class=\"{{ (viewBag.activeMenu == 'update-estudio' ) ? 'active' }} treeview\">
            <a href=\"#\" onclick=\"javascript:location.href='{{  url('/')}}/update-estudio/{{this.session.get('estudio-id')}}'\">
              <i class=\"fa fa-align-justify\"></i> <span>Descripción</span>

            </a>
          </li>

          <li class=\"{{ (viewBag.activeMenu == 'paginas' ) ? 'active' }} treeview\">

            <a href=\"#\" onclick=\"javascript:location.href='{{  url('/')}}/paginas/{{this.session.get('estudio-id')}}'\">
              <i class=\"fa fa-file\"></i> </i><span>Páginas</span>

            </a>
          </li>
          <li class=\"{{ (viewBag.activeMenu == 'colaboradores') ? 'active' }} treeview\">
            <a href=\"#\"
              onclick=\"javascript:location.href='{{  url('lista-usuarios')}}/{{this.session.get('estudio-id')}}/3'\">
              <i class=\"fa fa-user\"></i> <span>Colaboradores</span>

            </a>

          </li>

          <li class=\"{{ (viewBag.activeMenu == 'correo' ) ? 'active' }} \">
            <a href=\"#\"
              onclick=\"javascript:location.href='{{  url('/')}}/correo/{{this.session.get('estudio-id')}}'\">
              <i class=\"fa fa-envelope\"></i> <span>Participantes</span>
             
            </a>

          </li>
          <li
            class=\"{{ (viewBag.activeMenu == 'invoice' or viewBag.activeMenu == 'login' or viewBag.activeMenu == 'register' or viewBag.activeMenu == 'blank') ? 'active' }} treeview\">
            <a href=\"#\">
              <i class=\"fa fa-question\"></i> <span>Preguntas</span>
              <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
            </a>

          </li>
          <li
            class=\"{{ (viewBag.activeMenu == 'afirmaciones' or viewBag.activeMenu == 'distribucion' or viewBag.activeMenu == 'safirmaciones' ) ? 'active' }} treeview\">
            <a href=\"#\">


              <i class=\"fa fa-th\"></i><span>Metodología Q</span>
              <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
            </a>
             <ul class=\"treeview-menu\">
             <li class=\"{{ viewBag.activeMenu == 'safirmaciones' ? 'active' }} \">
            <a href=\"#\" onclick=\"javascript:location.href='{{  url('/')}}/afirmaciones-desde-archivo/{{this.session.get('estudio-id')}}'\">
              <i class=\"fa fa-upload\"></i> <span>Subir Afirmaciones</span>

            </a>

          </li>
          <li class=\"{{ viewBag.activeMenu == 'afirmaciones' ? 'active' }} \">
            <a href=\"#\" onclick=\"javascript:location.href='{{  url('/')}}/afirmaciones/{{this.session.get('estudio-id')}}'\">
              <i class=\"fa fa-table\"></i> <span>Ver Afirmaciones</span>

            </a>

          </li>
          <li class=\"{{ viewBag.activeMenu == 'distribucion' ? 'active' }} \">
            <a href=\"#\" onclick=\"javascript:location.href='{{  url('/')}}/distribucion/{{this.session.get('estudio-id')}}'\">
              <i class=\"fa fa-edit\"></i> <span>Distribución</span>

            </a>

          </li>
        </ul>


          </li>
          <li
            class=\"{{ (viewBag.activeMenu == 'Resultados') ? 'active' }} \">
            <a href=\"#\" onclick=\"javascript:location.href='{{  url('/')}}/resultados/{{this.session.get('estudio-id')}}'\">
              <i class=\"fa fa-arrow-down\"></i> <span>Resultados</span>
              
            </a>

          </li>
          
        </ul>
      </li>
      {% endif %}
      {% if mostrarEditor %}

    </ul>
    {% endif %}
  </section>
  <!-- /.sidebar -->
</aside>", "C:\\xampp\\htdocs\\PQ/themes/baba-adminlte/partials/main-sidebar.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "for" => 9, "if" => 10);
        static $filters = array("escape" => 167);
        static $functions = array("url" => 71);

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
