<?php

/* themes/cctx/templates/page--front.html.twig */
class __TwigTemplate_0fc272ed93b681f2b23b588dfe9b76ef413b09e187915c21472f1e832df80575 extends Twig_Template
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
        $tags = array("if" => 78);
        $filters = array("t" => 80);
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
        // line 33
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true));
        echo "/img/brand.svg\" alt=\"City of Corpus Chriti Texas\">
              </div>
              
            </div>
            <div class=\"col-9 col-md-6\">
               ";
        // line 39
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
        // line 76
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
        echo "
        ";
        // line 78
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 79
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 80
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 86
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
        // line 98
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
           </aside>

          </div>
          <div class=\"col-md-6 col-xl-8\">

            <!-- Main -->
            <main class=\"main\">
              
            ";
        // line 107
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "

             
              <!-- Divider -->
              <hr class=\"main-divider\">

              <div class=\"row\">
               ";
        // line 114
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
               
              </div>

            </main>
            
          </div>
          <div class=\"col-md-3 col-xl-2\">
            
            <!-- Aside -->
            <aside class=\"aside\">
             ";
        // line 125
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "

              <!-- Links -->
             
              <!-- New -->
              <div class=\"aside-new\">
                
                <!-- Heading -->
                <h3 class=\"aside-new-heading\">
                  Look whos new
                </h3>
                
                <!-- Body -->
                <div class=\"aside-new-body\">
                  
                  <!-- Item -->
                  <div class=\"aside-new-body-item\">

                    <!-- Header -->
                    <div class=\"aside-new-body-item-header\">

                      <!-- Image -->
                      <img src=\"http://placehold.it/240x240\" class=\"img-fluid\" alt=\"Jacqueline Washington\">

                      <!-- Content -->
                      <div class=\"aside-new-body-item-header-content\">
                        <h4>
                          Jacqueline Washington
                        </h4>
                        <p>
                          (Seniour Account Clerk)
                        </p>
                      </div>

                    </div>
                    
                    <!-- Body -->
                    <p class=\"aside-new-body-item-body\">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque labore natus quod nulla est.
                    </p>

                  </div>

                  <!-- Item -->
                  <div class=\"aside-new-body-item\">

                    <!-- Header -->
                    <div class=\"aside-new-body-item-header\">

                      <!-- Image -->
                      <img src=\"http://placehold.it/240x240\" class=\"img-fluid\" alt=\"Jacqueline Washington\">

                      <!-- Content -->
                      <div class=\"aside-new-body-item-header-content\">
                        <h4>
                          Jacqueline Washington
                        </h4>
                        <p>
                          (Seniour Account Clerk)
                        </p>
                      </div>

                    </div>
                    
                    <!-- Body -->
                    <p class=\"aside-new-body-item-body\">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque labore natus quod nulla est.
                    </p>

                  </div>

                </div>

              </div>
              
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
        return "themes/cctx/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 125,  185 => 114,  175 => 107,  163 => 98,  149 => 86,  140 => 80,  137 => 79,  134 => 78,  130 => 76,  91 => 39,  83 => 33,  54 => 7,  47 => 3,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/cctx/templates/page--front.html.twig", "/var/www/html/themes/cctx/templates/page--front.html.twig");
    }
}
