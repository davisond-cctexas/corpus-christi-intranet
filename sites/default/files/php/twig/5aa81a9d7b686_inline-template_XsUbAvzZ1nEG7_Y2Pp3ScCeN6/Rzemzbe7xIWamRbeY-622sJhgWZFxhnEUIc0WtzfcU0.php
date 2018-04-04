<?php

/* {# inline_template_start #}<div class="main-event-date">
                        <time datetime="2017-12-06">
{{ field_event_2 }} 
                         <small>{{ field_event_1 }} </small>
                        </time>
                        <span>{{ field_event_type }}</span>
                      </div>
                      <div class="main-event-body">
                        <h4 class="main-event-body-heading">
                        {{ title }}
                        </h4>
                        <p>
                          {{ field_event }}
                        </p>
                      </div>
 */
class __TwigTemplate_6993616f3685efd2ed7d57b4985f64e69046869eb67175ed3b92066e75a97d52 extends Twig_Template
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
        echo "<div class=\"main-event-date\">
                        <time datetime=\"2017-12-06\">
";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_event_2"] ?? null), "html", null, true));
        echo " 
                         <small>";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_event_1"] ?? null), "html", null, true));
        echo " </small>
                        </time>
                        <span>";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_event_type"] ?? null), "html", null, true));
        echo "</span>
                      </div>
                      <div class=\"main-event-body\">
                        <h4 class=\"main-event-body-heading\">
                        ";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "
                        </h4>
                        <p>
                          ";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_event"] ?? null), "html", null, true));
        echo "
                        </p>
                      </div>
";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"main-event-date\">
                        <time datetime=\"2017-12-06\">
{{ field_event_2 }} 
                         <small>{{ field_event_1 }} </small>
                        </time>
                        <span>{{ field_event_type }}</span>
                      </div>
                      <div class=\"main-event-body\">
                        <h4 class=\"main-event-body-heading\">
                        {{ title }}
                        </h4>
                        <p>
                          {{ field_event }}
                        </p>
                      </div>
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 13,  78 => 10,  71 => 6,  66 => 4,  62 => 3,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"main-event-date\">
                        <time datetime=\"2017-12-06\">
{{ field_event_2 }} 
                         <small>{{ field_event_1 }} </small>
                        </time>
                        <span>{{ field_event_type }}</span>
                      </div>
                      <div class=\"main-event-body\">
                        <h4 class=\"main-event-body-heading\">
                        {{ title }}
                        </h4>
                        <p>
                          {{ field_event }}
                        </p>
                      </div>
", "");
    }
}
