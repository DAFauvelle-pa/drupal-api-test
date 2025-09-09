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

/* modules/contrib/calendar_view/templates/views-view-calendar.html.twig */
class __TwigTemplate_8c67819cd8141abd63bb13c5f2655d93 extends Template
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
            'libraries' => [$this, 'block_libraries'],
            'calendars' => [$this, 'block_calendars'],
            'rows' => [$this, 'block_rows'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "
";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("calendar_view/calendar"), "html", null, true);
        yield "

";
        // line 41
        yield from $this->unwrap()->yieldBlock('libraries', $context, $blocks);
        // line 43
        yield "
";
        // line 44
        yield from $this->unwrap()->yieldBlock('calendars', $context, $blocks);
        // line 49
        yield "
";
        // line 50
        yield from $this->unwrap()->yieldBlock('rows', $context, $blocks);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["calendars", "options", "rows", "default_row_class"]);        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_libraries(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_calendars(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 45
        yield "  <div class=\"view-calendar\">
    ";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["calendars"] ?? null), "html", null, true);
        yield "
  </div>
";
        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_rows(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 51
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "display_rows", [], "any", false, false, true, 51)) {
            // line 52
            yield "    <div class=\"view-results\">
      ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 54
                yield "        ";
                $context["row_classes"] = [((($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
                // line 55
                yield "        <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 55), "addClass", [($context["row_classes"] ?? null)], "method", false, false, true, 55), "html", null, true);
                yield ">";
                // line 56
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 56), "html", null, true);
                // line 57
                yield "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "    </div>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/calendar_view/templates/views-view-calendar.html.twig";
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
        return array (  132 => 59,  125 => 57,  123 => 56,  119 => 55,  116 => 54,  112 => 53,  109 => 52,  106 => 51,  99 => 50,  91 => 46,  88 => 45,  81 => 44,  71 => 41,  65 => 50,  62 => 49,  60 => 44,  57 => 43,  55 => 41,  50 => 26,  47 => 24,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/calendar_view/templates/views-view-calendar.html.twig", "/var/www/html/web/modules/contrib/calendar_view/templates/views-view-calendar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["block" => 41, "if" => 51, "for" => 53, "set" => 54];
        static $filters = ["escape" => 26];
        static $functions = ["attach_library" => 26];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for', 'set'],
                ['escape'],
                ['attach_library'],
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
