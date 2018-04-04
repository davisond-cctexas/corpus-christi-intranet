<?php

/* {# inline_template_start #}<div class="card border-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header"> IT CURRENT MAJOR PROJECTS</div>
  <div class="card-body text-secondary">
    <h5 class="card-title">{{ field_title_current }}</h5>
    <p class="card-text">{{ field_body_current }}</p>
  </div>
</div> */
class __TwigTemplate_ae85644c3c62d749fe6d5cfa5ea8a440fdbc7e487259908cd48a5e70f5edd6af extends Twig_Template
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
        echo "<div class=\"card border-secondary mb-3\" style=\"max-width: 18rem;\">
  <div class=\"card-header\"> IT CURRENT MAJOR PROJECTS</div>
  <div class=\"card-body text-secondary\">
    <h5 class=\"card-title\">";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_title_current"] ?? null), "html", null, true));
        echo "</h5>
    <p class=\"card-text\">";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_body_current"] ?? null), "html", null, true));
        echo "</p>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"card border-secondary mb-3\" style=\"max-width: 18rem;\">
  <div class=\"card-header\"> IT CURRENT MAJOR PROJECTS</div>
  <div class=\"card-body text-secondary\">
    <h5 class=\"card-title\">{{ field_title_current }}</h5>
    <p class=\"card-text\">{{ field_body_current }}</p>
  </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 5,  54 => 4,  49 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"card border-secondary mb-3\" style=\"max-width: 18rem;\">
  <div class=\"card-header\"> IT CURRENT MAJOR PROJECTS</div>
  <div class=\"card-body text-secondary\">
    <h5 class=\"card-title\">{{ field_title_current }}</h5>
    <p class=\"card-text\">{{ field_body_current }}</p>
  </div>
</div>", "");
    }
}
