<?php

/* {# inline_template_start #}<div class="main-spotlight">

                      <!-- Image -->
                      <div class="main-spotlight-img">
                        {{ field_image_employee_spotlight }}
                      </div>

                      <!-- Heading -->
                      <h4 class="main-spotlight-heading">
                       {{ title }}
                      </h4>

                      <!-- Subheading -->
                      <p class="main-spotlight-subheading">
                      {{ field_headline_employee_spotligt }}
                      </p>

                      <!-- Content -->
                      <div class="main-spotlight-content">
                     {{ body }} 
                      </div>

                    </div> */
class __TwigTemplate_9d812a6ee92e1afd30c89c038b39d01e66f22fde9612446b53a7ca05ff0e98e5 extends Twig_Template
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
        echo "<div class=\"main-spotlight\">

                      <!-- Image -->
                      <div class=\"main-spotlight-img\">
                        ";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image_employee_spotlight"] ?? null), "html", null, true));
        echo "
                      </div>

                      <!-- Heading -->
                      <h4 class=\"main-spotlight-heading\">
                       ";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "
                      </h4>

                      <!-- Subheading -->
                      <p class=\"main-spotlight-subheading\">
                      ";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_headline_employee_spotligt"] ?? null), "html", null, true));
        echo "
                      </p>

                      <!-- Content -->
                      <div class=\"main-spotlight-content\">
                     ";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo " 
                      </div>

                    </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"main-spotlight\">

                      <!-- Image -->
                      <div class=\"main-spotlight-img\">
                        {{ field_image_employee_spotlight }}
                      </div>

                      <!-- Heading -->
                      <h4 class=\"main-spotlight-heading\">
                       {{ title }}
                      </h4>

                      <!-- Subheading -->
                      <p class=\"main-spotlight-subheading\">
                      {{ field_headline_employee_spotligt }}
                      </p>

                      <!-- Content -->
                      <div class=\"main-spotlight-content\">
                     {{ body }} 
                      </div>

                    </div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 20,  87 => 15,  79 => 10,  71 => 5,  65 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"main-spotlight\">

                      <!-- Image -->
                      <div class=\"main-spotlight-img\">
                        {{ field_image_employee_spotlight }}
                      </div>

                      <!-- Heading -->
                      <h4 class=\"main-spotlight-heading\">
                       {{ title }}
                      </h4>

                      <!-- Subheading -->
                      <p class=\"main-spotlight-subheading\">
                      {{ field_headline_employee_spotligt }}
                      </p>

                      <!-- Content -->
                      <div class=\"main-spotlight-content\">
                     {{ body }} 
                      </div>

                    </div>", "");
    }
}
