<?php

/* themes/cctx/templates/page.html.twig */
class __TwigTemplate_a2a186e30dc338a2657e70f371295f5ec3e4a9938a7ea0392c6ee260e702e192 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 77);
        $filters = array("t" => 79);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "
  <!-- CSS Plugins -->
    <link rel=\"stylesheet\" href=\"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
        echo "/vendor/ionicons/css/ionicons.min.css\">

    <!-- CSS Global -->
    <!-- build:css assets/css/theme.min.css -->
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
        echo "/css/styles.css\">
    <!-- endbuild -->

   

    <!-- LINE
    ================================================== -->
    <div class=\"line line-top\">
     
    </div>

    <!-- WRAPPER
    ================================================== -->
    <div class=\"wrapper\">
      
      <!-- HEADER
      ================================================== -->
      <div class=\"header\">

        <div class=\"container-fluid\">
          <div class=\"row align-items-center\">
            <div class=\"col-3 col-md-3\">

              <!-- Brand -->
              <div class=\"header-brand\">
                <img src=\"";
        // line 32
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
        echo "/img/brand.svg\" alt=\"City of Corpus Chriti Texas\">
              </div>
              
            </div>
            <div class=\"col-9 col-md-6\">
               ";
        // line 38
        echo "              <!-- Search -->
              <form class=\"header-search\">

                <!-- Search: Controls -->
                <div class=\"form-group\">
                  <label for=\"header-search\" class=\"sr-only\">
                    Search
                  </label>
                  <input type=\"search\" class=\"form-control\" id=\"header-search\">
                </div>

                <!-- Search: Submit -->
                <button class=\"btn btn-primary\">
                  <span class=\"d-none d-md-inline-block\">search</span>
                  <i class=\"ion-search d-md-none\"></i>
                </button>

              </form>

            </div>
          </div>
        </div>
      </div> <!-- / .header -->

      <!-- NAVBAR
      ================================================== -->
      <div class=\"container-fluid\">
        <nav class=\"navbar navbar-expand-lg navbar-light\">
          
          <!-- Toggle -->
          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-controls=\"navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
            
          <!-- Collapse -->
          <div class=\"collapse navbar-collapse\" id=\"navbar\">
      
            ";
        // line 75
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
        echo "
        ";
        // line 77
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 78
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 85
        echo "          </div> <!-- / .navbar-collapse -->

        </nav>
      </div>
      <!-- CONTENT 
      ================================================== -->
      <div class=\"container-fluid\"> 
        <div class=\"row\"> 
          <div class=\"col-md-3 col-xl-2\">
            
            <!-- Aside -->
            <aside class=\"aside\">
               ";
        // line 97
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
  
            </aside>

          </div>
          <div class=\"col-md-6 col-xl-8\">

            <!-- Main -->
            <main class=\"main\">
              
    
              <div class=\"row main-row\">
                <div class=\"col-xl-8\">
                  <h3>";
        // line 110
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "#title", array(), "array"), "html", null, true));
        echo "</h3>
                  <hr class=\"line-orange-center\">
                  <br />
                </div>
                <div class=\"col-xl-12\">
                  <div class=\"row\">
                            ";
        // line 116
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
                            </div>
                </div>
 
                ";
        // line 345
        echo "              </div>

            </main>
            
          </div>
          <div class=\"col-md-3 col-xl-2\">
            
            <!-- Aside -->
            <aside class=\"aside\">
             ";
        // line 354
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "

              <!-- Links -->
              ";
        // line 358
        echo "              
                <!-- Heading -->
                ";
        // line 363
        echo "
                <!-- Items -->
                ";
        // line 391
        echo "              ";
        // line 392
        echo "
              <!-- New -->
        
            </aside>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container-fluid -->

      <!-- FEEDBACK
      ================================================== -->
      <a href=\"#\" class=\"feedback\">
        <i class=\"ion-chatbox\"></i> Feedback
      </a>
      
    </div> <!-- / .wrapper -->

    <!-- LINE
    ================================================== -->
    <div class=\"line line-bottom\"></div>



    <!-- JS Global -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"http://simpleqode.com/preview/sandbox/christi/2/assets/bootstrap/js/bootstrap.bundle.min.js\"></script>

    <!-- JS Plugins -->

    <!-- JS Custom -->
    <!-- build:js assets/js/theme.min.js -->
    <script src=\"http://simpleqode.com/preview/sandbox/christi/2/assets/js/theme.js\"></script>
    <!-- endbuild -->
    <script src=\"http://simpleqode.com/preview/sandbox/christi/2/assets/js/custom.js\"></script>";
    }

    public function getTemplateName()
    {
        return "themes/cctx/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 392,  219 => 391,  215 => 363,  211 => 358,  205 => 354,  194 => 345,  187 => 116,  178 => 110,  162 => 97,  148 => 85,  139 => 79,  136 => 78,  133 => 77,  129 => 75,  90 => 38,  82 => 32,  54 => 7,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/cctx/templates/page.html.twig", "/var/www/html/themes/cctx/templates/page.html.twig");
    }
}
