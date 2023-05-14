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

/* modules/fontawesome-8.x-2.25/fontawesome/templates/fontawesomeicon.html.twig */
class __TwigTemplate_ce697620e2a48045f23348d85aa756f52ebbb7564c8e890ca8e45333cbb9bdcd extends \Twig\Template
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
        // line 20
        $context["classes"] = [0 =>         // line 21
($context["iconset"] ?? null), 1 =>         // line 22
($context["style"] ?? null), 2 =>         // line 23
($context["name"] ?? null), 3 =>         // line 24
($context["settings"] ?? null)];
        // line 27
        echo "<div class=\"fontawesome-icon\">
  <";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tag"] ?? null), 28, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 28), 28, $this->source), "html", null, true);
        echo " data-fa-transform=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["transforms"] ?? null), 28, $this->source), "html", null, true);
        echo "\" data-fa-mask=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mask"] ?? null), 28, $this->source), "html", null, true);
        echo "\" style=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["css"] ?? null), 28, $this->source), "html", null, true);
        echo "\"></";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tag"] ?? null), 28, $this->source), "html", null, true);
        echo ">
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/fontawesome-8.x-2.25/fontawesome/templates/fontawesomeicon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 28,  45 => 27,  43 => 24,  42 => 23,  41 => 22,  40 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default implementation for Font Awesome Icon field.
 *
 * Available variables:
 * - tag: the HTML tag being used to create the icon.
 * - iconset: the name of the iconset being used. Blank for classic.
 * - icon: the name of the icon being used for templating.
 * - style: the Font Awesome style for the icon.
 * - settings: the additional Font Awesome style settings.
 * - transforms: Font Awesome power transforms.
 * - mask: Font Awesome mask.
 * - css: Additional inline CSS styles (for duotone, etc).
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    iconset,
    style,
    name,
    settings,
  ]
%}
<div class=\"fontawesome-icon\">
  <{{tag }}{{ attributes.addClass(classes) }} data-fa-transform=\"{{ transforms }}\" data-fa-mask=\"{{ mask }}\" style=\"{{ css }}\"></{{ tag }}>
</div>
", "modules/fontawesome-8.x-2.25/fontawesome/templates/fontawesomeicon.html.twig", "C:\\xampp\\htdocs\\drupalportfolio\\modules\\fontawesome-8.x-2.25\\fontawesome\\templates\\fontawesomeicon.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 20);
        static $filters = array("escape" => 28);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
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
