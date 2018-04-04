<?php

/* {# inline_template_start #} <div class="main-blog">

                      <!-- Image -->
                      <div class="main-blog-img">
                       {{ field_latest_city_news_image }} 
                      </div>

                      <!-- Body -->
                      <div class="main-blog-body">
                        
                        <!-- Heading -->
                        <h4 class="main-blog-body-heading">
                          {{ title }}
                        </h4>

                        <!-- Date -->
                        <time class="main-blog-body-date" datetime="2017-11-17">
                         {{ created }} 
                        </time>

                      </div>

                    </div> */
class __TwigTemplate_d0d93304e8f7395d348f194a425bb2e32d4a24ccb71733d635426e1e4ca9c56f extends Twig_Template
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
        echo " <div class=\"main-blog\">

                      <!-- Image -->
                      <div class=\"main-blog-img\">
                       ";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_latest_city_news_image"] ?? null), "html", null, true));
        echo " 
                      </div>

                      <!-- Body -->
                      <div class=\"main-blog-body\">
                        
                        <!-- Heading -->
                        <h4 class=\"main-blog-body-heading\">
                          ";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "
                        </h4>

                        <!-- Date -->
                        <time class=\"main-blog-body-date\" datetime=\"2017-11-17\">
                         ";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
        echo " 
                        </time>

                      </div>

                    </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #} <div class=\"main-blog\">

                      <!-- Image -->
                      <div class=\"main-blog-img\">
                       {{ field_latest_city_news_image }} 
                      </div>

                      <!-- Body -->
                      <div class=\"main-blog-body\">
                        
                        <!-- Heading -->
                        <h4 class=\"main-blog-body-heading\">
                          {{ title }}
                        </h4>

                        <!-- Date -->
                        <time class=\"main-blog-body-date\" datetime=\"2017-11-17\">
                         {{ created }} 
                        </time>

                      </div>

                    </div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 18,  82 => 13,  71 => 5,  65 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #} <div class=\"main-blog\">

                      <!-- Image -->
                      <div class=\"main-blog-img\">
                       {{ field_latest_city_news_image }} 
                      </div>

                      <!-- Body -->
                      <div class=\"main-blog-body\">
                        
                        <!-- Heading -->
                        <h4 class=\"main-blog-body-heading\">
                          {{ title }}
                        </h4>

                        <!-- Date -->
                        <time class=\"main-blog-body-date\" datetime=\"2017-11-17\">
                         {{ created }} 
                        </time>

                      </div>

                    </div>", "");
    }
}
