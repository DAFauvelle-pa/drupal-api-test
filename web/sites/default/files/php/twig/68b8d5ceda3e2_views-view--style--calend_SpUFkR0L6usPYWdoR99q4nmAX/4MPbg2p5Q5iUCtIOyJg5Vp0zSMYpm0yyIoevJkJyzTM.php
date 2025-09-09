<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* modules/contrib/calendar_view/templates/views-view--style--calendar.html.twig */
class __TwigTemplate_d224cb5a6efde6a785bf79e9efbc076c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        $context["classes"] = ["view", ("view-id-" . \Drupal\Component\Utility\Html::getClass(        // line 12
($context["id"] ?? null))), ("view-display-id-" . \Drupal\Component\Utility\Html::getClass(        // line 13
($context["display_id"] ?? null))), ((        // line 14
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : (""))];
        // line 17
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 17), "html", null, true);
        yield ">
  ";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  ";
        // line 19
        if (($context["title"] ?? null)) {
            // line 20
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 22
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
  ";
        // line 23
        if (($context["header"] ?? null)) {
            // line 24
            yield "    <div class=\"view-header\">
      ";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 28
        yield "  ";
        if (($context["exposed"] ?? null)) {
            // line 29
            yield "    <div class=\"view-filters\">
      ";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 33
        yield "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 34
            yield "    <div class=\"attachment attachment-before\">
      ";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 38
        yield "
  ";
        // line 40
        yield "  ";
        if (($context["pager"] ?? null)) {
            // line 41
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 43
        yield "
  ";
        // line 44
        if (($context["rows"] ?? null)) {
            // line 45
            yield "    <div class=\"view-content\">
      ";
            // line 46
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        } elseif (        // line 48
($context["empty"] ?? null)) {
            // line 49
            yield "    <div class=\"view-empty\">
      ";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 53
        yield "
  ";
        // line 54
        if (($context["attachment_after"] ?? null)) {
            // line 55
            yield "    <div class=\"attachment attachment-after\">
      ";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 59
        yield "  ";
        if (($context["more"] ?? null)) {
            // line 60
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 62
        yield "  ";
        if (($context["footer"] ?? null)) {
            // line 63
            yield "    <div class=\"view-footer\">
      ";
            // line 64
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 67
        yield "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 68
            yield "    <div class=\"feed-icons\">
      ";
            // line 69
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 72
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "display_id", "dom_id", "attributes", "title_prefix", "title", "title_suffix", "header", "exposed", "attachment_before", "pager", "rows", "empty", "attachment_after", "more", "footer", "feed_icons"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/calendar_view/templates/views-view--style--calendar.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  189 => 72,  183 => 69,  180 => 68,  177 => 67,  171 => 64,  168 => 63,  165 => 62,  159 => 60,  156 => 59,  150 => 56,  147 => 55,  145 => 54,  142 => 53,  136 => 50,  133 => 49,  131 => 48,  126 => 46,  123 => 45,  121 => 44,  118 => 43,  112 => 41,  109 => 40,  106 => 38,  100 => 35,  97 => 34,  94 => 33,  88 => 30,  85 => 29,  82 => 28,  76 => 25,  73 => 24,  71 => 23,  66 => 22,  60 => 20,  58 => 19,  54 => 18,  49 => 17,  47 => 14,  46 => 13,  45 => 12,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/calendar_view/templates/views-view--style--calendar.html.twig", "/var/www/html/web/modules/contrib/calendar_view/templates/views-view--style--calendar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 10, "if" => 19];
        static $filters = ["clean_class" => 12, "escape" => 17];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                [],
                $this->source
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
