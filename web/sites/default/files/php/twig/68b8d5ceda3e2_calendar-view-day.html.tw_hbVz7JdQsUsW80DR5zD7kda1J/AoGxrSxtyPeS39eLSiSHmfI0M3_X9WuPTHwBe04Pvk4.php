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

/* modules/contrib/calendar_view/templates/calendar-view-day.html.twig */
class __TwigTemplate_a837d32aca62f6258ecbab14f2cf3f38 extends Template
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
            'day_number' => [$this, 'block_day_number'],
            'day_content' => [$this, 'block_day_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        $context["classes"] = ["calendar-view-day", ((        // line 24
($context["empty"] ?? null)) ? ("empty") : (""))];
        // line 27
        yield "
<div";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 28), "html", null, true);
        yield ">
  ";
        // line 29
        $context["html_date"] = $this->env->getFilter('format_date')->getCallable()(($context["timestamp"] ?? null), "html_date");
        // line 30
        yield "  ";
        $context["count"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber((( !($context["rows"] ?? null)) ? (0) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["rows"] ?? null)))));
        // line 31
        yield "  ";
        $context["day_title"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 32
            yield "    ";
            yield \Drupal::translation()->formatPlural(abs(            // line 34
($context["count"] ?? null)), "@count result for @html_date", "@count results for @html_date", array("@count" =>             // line 33
($context["count"] ?? null), "@html_date" => ($context["html_date"] ?? null), "@count" =>             // line 35
($context["count"] ?? null), "@html_date" => ($context["html_date"] ?? null), ));
            // line 37
            yield "  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 38
        yield "
\t";
        // line 40
        yield "\t";
        yield from $this->unwrap()->yieldBlock('day_number', $context, $blocks);
        // line 45
        yield "
  ";
        // line 46
        yield from $this->unwrap()->yieldBlock('day_content', $context, $blocks);
        // line 62
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["empty", "attributes", "timestamp", "rows", "default_row_class"]);        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_day_number(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 41
        yield "    <time class=\"calendar-view-day__number\" datetime=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["timestamp"] ?? null), "Y-m-dTH:i:s"), "html", null, true);
        yield "\" title=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(($context["day_title"] ?? null)), "html", null, true);
        yield "\">
      ";
        // line 42
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["timestamp"] ?? null), "j"), "html", null, true);
        yield "
    </time>
\t";
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_day_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 47
        yield "    ";
        if ((($context["count"] ?? null) < 1)) {
            // line 48
            yield "      ";
            // line 49
            yield "      <div class=\"calendar-view-day__rows empty\"></div>
    ";
        } else {
            // line 51
            yield "      ";
            // line 52
            yield "      <ul class=\"calendar-view-day__rows\">
        ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 54
                yield "          ";
                $context["row_classes"] = [((($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
                // line 55
                yield "          <li";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 55), "addClass", [($context["row_classes"] ?? null), "calendar-view-day__row"], "method", false, false, true, 55), "html", null, true);
                yield ">";
                // line 56
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 56), "html", null, true);
                // line 57
                yield "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "      </ul>
    ";
        }
        // line 61
        yield "  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/calendar_view/templates/calendar-view-day.html.twig";
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
        return array (  159 => 61,  155 => 59,  148 => 57,  146 => 56,  142 => 55,  139 => 54,  135 => 53,  132 => 52,  130 => 51,  126 => 49,  124 => 48,  121 => 47,  114 => 46,  106 => 42,  99 => 41,  92 => 40,  85 => 62,  83 => 46,  80 => 45,  77 => 40,  74 => 38,  70 => 37,  68 => 35,  67 => 33,  66 => 34,  64 => 32,  61 => 31,  58 => 30,  56 => 29,  52 => 28,  49 => 27,  47 => 24,  46 => 22,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/calendar_view/templates/calendar-view-day.html.twig", "/var/www/html/web/modules/contrib/calendar_view/templates/calendar-view-day.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 22, "trans" => 32, "block" => 40, "if" => 47, "for" => 53];
        static $filters = ["escape" => 28, "format_date" => 29, "number_format" => 30, "length" => 30, "date" => 41, "trim" => 41];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'trans', 'block', 'if', 'for'],
                ['escape', 'format_date', 'number_format', 'length', 'date', 'trim'],
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
