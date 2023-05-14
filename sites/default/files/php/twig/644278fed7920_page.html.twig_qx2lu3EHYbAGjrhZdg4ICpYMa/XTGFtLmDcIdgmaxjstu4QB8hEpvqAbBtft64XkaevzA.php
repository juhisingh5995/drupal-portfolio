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

/* themes/custom/portfolio/templates/page/page.html.twig */
class __TwigTemplate_b86b5fd2a6d30706281798df2cb60114c50d2dedfebc9495d0dd937a4e2b7307 extends \Twig\Template
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
        // line 48
        echo "<header class=\"header \">
\t<div class=\"layout-container\">
\t\t";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "
\t</div>
</header>

<div class=\"banner\">
\t";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "
</div>
<div class=\"about-section \">
\t<div class=\"layout-container\">
\t\t";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 59), "aboutsection_2", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "
\t</div>
</div>
<div class=\"education-section  reveal fade-bottom\">
\t<div class=\"layout-container\">
\t\t";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 64), "education", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "
\t</div>
</div>
<div class=\"skill-section  reveal fade-bottom\">
\t<div class=\"layout-container\">
\t\t";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 69), "skill", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "
\t</div>
</div>
<div class=\"portfolio-section  reveal fade-bottom\">
\t<div class=\"layout-container\">
\t\t";
        // line 74
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 74), "portfolio", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "
\t</div>
</div>

<div class=\"contact-section  reveal fade-bottom\">
\t<div class=\"layout-container\">
\t\t";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 80), "contact", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
        echo "
\t</div>
</div>
<div class=\"footer\">
\t<div class=\"layout-container\">
\t\t";
        // line 85
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
        echo "
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/portfolio/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 85,  91 => 80,  82 => 74,  74 => 69,  66 => 64,  58 => 59,  51 => 55,  43 => 50,  39 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Olivero's theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template normally located in the
 * core/modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.content: The main content of the current page.
 * - page.sidebar: Items for the first sidebar.
 * - page.featured_bottom_first: Items for the first featured bottom region.
 * - page.featured_bottom_second: Items for the second featured bottom region.
 * - page.footer_first: Items for the first footer column.
 * - page.footer_second: Items for the second footer column.
 * - page.breadcrumb: Items for the breadcrumb region.
 * - page.social: Items for the social region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<header class=\"header \">
\t<div class=\"layout-container\">
\t\t{{ page.header }}
\t</div>
</header>

<div class=\"banner\">
\t{{ page.banner }}
</div>
<div class=\"about-section \">
\t<div class=\"layout-container\">
\t\t{{ page.content.aboutsection_2 }}
\t</div>
</div>
<div class=\"education-section  reveal fade-bottom\">
\t<div class=\"layout-container\">
\t\t{{ page.content.education }}
\t</div>
</div>
<div class=\"skill-section  reveal fade-bottom\">
\t<div class=\"layout-container\">
\t\t{{ page.content.skill }}
\t</div>
</div>
<div class=\"portfolio-section  reveal fade-bottom\">
\t<div class=\"layout-container\">
\t\t{{ page.content.portfolio }}
\t</div>
</div>

<div class=\"contact-section  reveal fade-bottom\">
\t<div class=\"layout-container\">
\t\t{{ page.content.contact }}
\t</div>
</div>
<div class=\"footer\">
\t<div class=\"layout-container\">
\t\t{{ page.footer }}
\t</div>
</div>
", "themes/custom/portfolio/templates/page/page.html.twig", "C:\\xampp\\htdocs\\drupalportfolio\\themes\\custom\\portfolio\\templates\\page\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 50);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
