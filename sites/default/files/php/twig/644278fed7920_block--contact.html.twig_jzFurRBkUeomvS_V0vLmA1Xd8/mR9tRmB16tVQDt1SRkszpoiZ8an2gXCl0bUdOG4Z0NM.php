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

/* themes/custom/portfolio/templates/blocks/block--contact.html.twig */
class __TwigTemplate_426aa9097b62d671dee3895482c4fcfbbc324c332035f8412a6ff55be8e5a65d extends \Twig\Template
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
        echo "<div class=\"contact-section\">
\t<div class=\"contact-title\">
\t\t";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_contact_para", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "
\t</div>
\t<div class=\"map\">
\t\t<iframe src=\"https://maps.google.com/maps?q=new-delhi&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
\t</div>
\t<div class=\"info-row\">
\t\t<div class=\"info\">
\t\t\t";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_contact_detail", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "
\t\t</div>
\t\t<div class=\"form-section \">
\t\t\t<form action=\"/action_page.php\" method=\"get\" class=\"form-box\">
\t\t\t\t<div class=\"form-row\">

\t\t\t\t\t<div class=\"form-col form-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"form-content\" placeholder=\"Your Name\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-col form-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"email\" class=\"form-content\" placeholder=\"Your Email\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" name=\"subject\" class=\"form-content\" placeholder=\"Subject\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<textarea class=\"form-control\" placeholder=\"Message\" id=\"Textarea\" rows=\"10\"></textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-button\">
\t\t\t\t\t";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_message", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/portfolio/templates/blocks/block--contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 64,  57 => 44,  47 => 37,  43 => 35,  41 => 32,  40 => 31,  39 => 29,);
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
<div class=\"contact-section\">
\t<div class=\"contact-title\">
\t\t{{ content.field_contact_para  }}
\t</div>
\t<div class=\"map\">
\t\t<iframe src=\"https://maps.google.com/maps?q=new-delhi&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
\t</div>
\t<div class=\"info-row\">
\t\t<div class=\"info\">
\t\t\t{{ \tcontent.field_contact_detail }}
\t\t</div>
\t\t<div class=\"form-section \">
\t\t\t<form action=\"/action_page.php\" method=\"get\" class=\"form-box\">
\t\t\t\t<div class=\"form-row\">

\t\t\t\t\t<div class=\"form-col form-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"form-content\" placeholder=\"Your Name\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-col form-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"email\" class=\"form-content\" placeholder=\"Your Email\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" name=\"subject\" class=\"form-content\" placeholder=\"Subject\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<textarea class=\"form-control\" placeholder=\"Message\" id=\"Textarea\" rows=\"10\"></textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-button\">
\t\t\t\t\t{{ content.field_message }}
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
", "themes/custom/portfolio/templates/blocks/block--contact.html.twig", "C:\\xampp\\htdocs\\drupalportfolio\\themes\\custom\\portfolio\\templates\\blocks\\block--contact.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29);
        static $filters = array("clean_class" => 31, "escape" => 37);
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
