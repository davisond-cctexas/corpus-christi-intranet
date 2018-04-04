<?php

/* {# inline_template_start #}<p class="aside-about-subheading">
{{ field_headline_citymanager }} </p>
<div class="aside-about-body">
                  <div class="row">
                    <div class="col-6">
                     
                     {{ field_image_citymanager }}

                    </div>
                    <div class="col-6">
                      
{{ field_video_1 }}
                      <!-- Report -->
                      <div class="aside-about-body-report">
                        <img src="/themes/cctx/img/icn_pdf.svg" alt="PDF Icon">
                      {{ field_pdf_file }} 
                      </div>

                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      
                      <h2 class="aside-about-body-heading">
CITY MANAGER,
                       {{ field_manager_name_citymanager }}
                      </h2>

                    </div>
                  </div>
                </div> */
class __TwigTemplate_15dcfe49866762830cfecc122847a4cfc2131f062523df2892c3ec0ee8c97a19 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
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
        echo "<p class=\"aside-about-subheading\">
";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_headline_citymanager"] ?? null), "html", null, true));
        echo " </p>
<div class=\"aside-about-body\">
                  <div class=\"row\">
                    <div class=\"col-6\">
                     
                     ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image_citymanager"] ?? null), "html", null, true));
        echo "

                    </div>
                    <div class=\"col-6\">
                      
";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_video_1"] ?? null), "html", null, true));
        echo "
                      <!-- Report -->
                      <div class=\"aside-about-body-report\">
                        <img src=\"/themes/cctx/img/icn_pdf.svg\" alt=\"PDF Icon\">
                      ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_pdf_file"] ?? null), "html", null, true));
        echo " 
                      </div>

                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col\">
                      
                      <h2 class=\"aside-about-body-heading\">
CITY MANAGER,
                       ";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_manager_name_citymanager"] ?? null), "html", null, true));
        echo "
                      </h2>

                    </div>
                  </div>
                </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<p class=\"aside-about-subheading\">
{{ field_headline_citymanager }} </p>
<div class=\"aside-about-body\">
                  <div class=\"row\">
                    <div class=\"col-6\">
                     
                     {{ field_image_citymanager }}

                    </div>
                    <div class=\"col-6\">
                      
{{ field_video_1 }}
                      <!-- Report -->
                      <div class=\"aside-about-body-report\">
                        <img src=\"/themes/cctx/img/icn_pdf.svg\" alt=\"PDF Icon\">
                      {{ field_pdf_file }} 
                      </div>

                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col\">
                      
                      <h2 class=\"aside-about-body-heading\">
CITY MANAGER,
                       {{ field_manager_name_citymanager }}
                      </h2>

                    </div>
                  </div>
                </div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 26,  99 => 16,  92 => 12,  84 => 7,  76 => 2,  73 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<p class=\"aside-about-subheading\">
{{ field_headline_citymanager }} </p>
<div class=\"aside-about-body\">
                  <div class=\"row\">
                    <div class=\"col-6\">
                     
                     {{ field_image_citymanager }}

                    </div>
                    <div class=\"col-6\">
                      
{{ field_video_1 }}
                      <!-- Report -->
                      <div class=\"aside-about-body-report\">
                        <img src=\"/themes/cctx/img/icn_pdf.svg\" alt=\"PDF Icon\">
                      {{ field_pdf_file }} 
                      </div>

                    </div>
                  </div>
                  <div class=\"row\">
                    <div class=\"col\">
                      
                      <h2 class=\"aside-about-body-heading\">
CITY MANAGER,
                       {{ field_manager_name_citymanager }}
                      </h2>

                    </div>
                  </div>
                </div>", "");
    }
}
