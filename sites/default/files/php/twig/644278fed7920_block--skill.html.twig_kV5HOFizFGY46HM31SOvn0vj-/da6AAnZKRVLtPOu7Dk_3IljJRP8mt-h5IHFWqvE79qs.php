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

/* themes/custom/portfolio/templates/blocks/block--skill.html.twig */
class __TwigTemplate_0541e135fc0afcd9436cf1d6a9000d9bda16ff6bbdba3679a24c72024780f05f extends \Twig\Template
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
        // line 29
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 31
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 31), 31, $this->source))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 32
($context["plugin_id"] ?? null), 32, $this->source)))];
        // line 35
        echo "
";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 36, $this->source), "html", null, true);
        echo "
";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 37, $this->source), "html", null, true);
        echo "
<div class=\"skills-section\">
\t<div>
\t\t";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_skill_title", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "
\t</div>
\t<div class=\"skill-bar\">
\t\t<div class=\"skillbar clearfix \" data-percent=\"95%\">
\t\t\t<div class=\"skillbar-title\" style=\"background: #d35400;\">
\t\t\t\t<span>HTML</span>
\t\t\t</div>
\t\t\t<div class=\"skillbar-bar\" style=\"background: #e67e22;\"></div>
\t\t\t";
        // line 49
        echo "\t\t</div>
\t\t<!-- End Skill Bar -->

\t\t<div class=\"skillbar clearfix \" data-percent=\"95%\">
\t\t\t<div class=\"skillbar-title\" style=\"background: #2980b9;\">
\t\t\t\t<span>CSS,SaSS</span>
\t\t\t</div>
\t\t\t<div class=\"skillbar-bar\" style=\"background: #3498db;\"></div>
\t\t\t";
        // line 58
        echo "\t\t</div>
\t\t<!-- End Skill Bar -->

\t\t<div class=\"skillbar clearfix \" data-percent=\"90%\">
\t\t\t<div class=\"skillbar-title\" style=\"background: #2c3e50;\">
\t\t\t\t<span>jQuery</span>
\t\t\t</div>
\t\t\t<div class=\"skillbar-bar\" style=\"background: #2c3e50;\"></div>
\t\t\t";
        // line 67
        echo "\t\t</div>
\t\t<!-- End Skill Bar -->

\t\t<div class=\"skillbar clearfix \" data-percent=\"95%\">
\t\t\t<div class=\"skillbar-title\" style=\"background: #46465e;\">
\t\t\t\t<span>Bootstrap</span>
\t\t\t</div>
\t\t\t<div class=\"skillbar-bar\" style=\"background: #5a68a5;\"></div>
\t\t\t";
        // line 76
        echo "\t\t</div>
\t\t<!-- End Skill Bar -->

\t\t<div class=\"skillbar clearfix \" data-percent=\"75%\">
\t\t\t<div class=\"skillbar-title\" style=\"background: #333333;\">
\t\t\t\t<span>Drupal</span>
\t\t\t</div>
\t\t\t<div class=\"skillbar-bar\" style=\"background: #525252;\"></div>
\t\t\t";
        // line 85
        echo "\t\t</div>
\t\t<!-- End Skill Bar -->

\t\t<div class=\"skillbar clearfix \" data-percent=\"80%\">
\t\t\t<div class=\"skillbar-title\" style=\"background: #27ae60;\">
\t\t\t\t<span>PatternLabs</span>
\t\t\t</div>
\t\t\t<div class=\"skillbar-bar\" style=\"background: #2ecc71;\"></div>
\t\t\t";
        // line 94
        echo "\t\t</div>
\t\t<!-- End Skill Bar -->

\t\t<div class=\"skillbar clearfix \" data-percent=\"80%\">
\t\t\t<div class=\"skillbar-title\" style=\"background: #124e8c;\">
\t\t\t\t<span>Wow,Animation</span>
\t\t\t</div>
\t\t\t<div class=\"skillbar-bar\" style=\"background: #4288d0;\"></div>
\t\t\t";
        // line 103
        echo "\t\t</div>
\t\t<!-- End Skill Bar -->
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/portfolio/templates/blocks/block--skill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 103,  117 => 94,  107 => 85,  97 => 76,  87 => 67,  77 => 58,  67 => 49,  56 => 40,  50 => 37,  46 => 36,  43 => 35,  41 => 32,  40 => 31,  39 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: array of HTML attributes populated by modules, intended to
 *   be added to the main container tag of this template.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * @see template_preprocess_block()
 */
#}
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
  ]
%}

{{ title_prefix }}
{{ title_suffix }}
<div class=\"skills-section\">
\t<div>
\t\t{{ content.field_skill_title }}
\t</div>
\t<div class=\"skill-bar\">
\t\t<div class=\"skillbar clearfix \" data-percent=\"95%\">
\t\t\t<div class=\"skillbar-title\" style=\"background: #d35400;\">
\t\t\t\t<span>HTML</span>
\t\t\t</div>
\t\t\t<div class=\"skillbar-bar\" style=\"background: #e67e22;\"></div>
\t\t\t{# <div class=\"skill-bar-percent Count\">95</div> #}
\t\t</div>
\t\t<!-- End Skill Bar -->

\t\t<div class=\"skillbar clearfix \" data-percent=\"95%\">
\t\t\t<div class=\"skillbar-title\" style=\"background: #2980b9;\">
\t\t\t\t<span>CSS,SaSS</span>
\t\t\t</div>
\t\t\t<div class=\"skillbar-bar\" style=\"background: #3498db;\"></div>
\t\t\t{# <div class=\"skill-bar-percent Count\">95</div> #}
\t\t</div>
\t\t<!-- End Skill Bar -->

\t\t<div class=\"skillbar clearfix \" data-percent=\"90%\">
\t\t\t<div class=\"skillbar-title\" style=\"background: #2c3e50;\">
\t\t\t\t<span>jQuery</span>
\t\t\t</div>
\t\t\t<div class=\"skillbar-bar\" style=\"background: #2c3e50;\"></div>
\t\t\t{# <div class=\"skill-bar-percent Count\">90</div> #}
\t\t</div>
\t\t<!-- End Skill Bar -->

\t\t<div class=\"skillbar clearfix \" data-percent=\"95%\">
\t\t\t<div class=\"skillbar-title\" style=\"background: #46465e;\">
\t\t\t\t<span>Bootstrap</span>
\t\t\t</div>
\t\t\t<div class=\"skillbar-bar\" style=\"background: #5a68a5;\"></div>
\t\t\t{# <div class=\"skill-bar-percent Count\">95</div> #}
\t\t</div>
\t\t<!-- End Skill Bar -->

\t\t<div class=\"skillbar clearfix \" data-percent=\"75%\">
\t\t\t<div class=\"skillbar-title\" style=\"background: #333333;\">
\t\t\t\t<span>Drupal</span>
\t\t\t</div>
\t\t\t<div class=\"skillbar-bar\" style=\"background: #525252;\"></div>
\t\t\t{# <div class=\"skill-bar-percent Count\">75</div> #}
\t\t</div>
\t\t<!-- End Skill Bar -->

\t\t<div class=\"skillbar clearfix \" data-percent=\"80%\">
\t\t\t<div class=\"skillbar-title\" style=\"background: #27ae60;\">
\t\t\t\t<span>PatternLabs</span>
\t\t\t</div>
\t\t\t<div class=\"skillbar-bar\" style=\"background: #2ecc71;\"></div>
\t\t\t{# <div class=\"skill-bar-percent Single Count\">80</div> #}
\t\t</div>
\t\t<!-- End Skill Bar -->

\t\t<div class=\"skillbar clearfix \" data-percent=\"80%\">
\t\t\t<div class=\"skillbar-title\" style=\"background: #124e8c;\">
\t\t\t\t<span>Wow,Animation</span>
\t\t\t</div>
\t\t\t<div class=\"skillbar-bar\" style=\"background: #4288d0;\"></div>
\t\t\t{# <div class=\"skill-bar-percent Count\">80</div> #}
\t\t</div>
\t\t<!-- End Skill Bar -->
\t</div>
</div>
", "themes/custom/portfolio/templates/blocks/block--skill.html.twig", "C:\\xampp\\htdocs\\drupalportfolio\\themes\\custom\\portfolio\\templates\\blocks\\block--skill.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29);
        static $filters = array("clean_class" => 31, "escape" => 36);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape'],
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
