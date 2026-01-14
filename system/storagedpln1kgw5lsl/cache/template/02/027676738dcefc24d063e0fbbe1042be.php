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

/* catalog/view/template/product/manufacturer_list.twig */
class __TwigTemplate_f32027fd7d983974d0b07d4d77aad9a4 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ($context["header"] ?? null);
        yield "
<div id=\"product-manufacturer\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "      <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>
  <div class=\"row\">";
        // line 8
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">";
        // line 9
        yield ($context["content_top"] ?? null);
        yield "
      <h1>";
        // line 10
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      ";
        // line 11
        if (($context["categories"] ?? null)) {
            // line 12
            yield "        <p><strong>";
            yield ($context["text_index"] ?? null);
            yield "</strong>
          ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 14
                yield "            &nbsp;&nbsp;&nbsp;<a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 14);
                yield "#";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14);
                yield "</a>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "        </p>
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 18
                yield "          <h2 id=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 18);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 18);
                yield "</h2>
          ";
                // line 19
                if (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "manufacturer", [], "any", false, false, false, 19)) {
                    // line 20
                    yield "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::batch(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "manufacturer", [], "any", false, false, false, 20), 4));
                    foreach ($context['_seq'] as $context["_key"] => $context["manufacturers"]) {
                        // line 21
                        yield "              <div class=\"row mb-3\">
                ";
                        // line 22
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable($context["manufacturers"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["manufacturer"]) {
                            // line 23
                            yield "                  <div class=\"col-sm-3\"><a href=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["manufacturer"], "href", [], "any", false, false, false, 23);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["manufacturer"], "name", [], "any", false, false, false, 23);
                            yield "</a></div>
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['manufacturer'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 25
                        yield "              </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['manufacturers'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    yield "          ";
                }
                // line 28
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "      ";
        } else {
            // line 30
            yield "        <p>";
            yield ($context["text_no_results"] ?? null);
            yield "</p>
        <div class=\"text-end\"><a href=\"";
            // line 31
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a></div>
      ";
        }
        // line 33
        yield "      ";
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 34
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 36
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/product/manufacturer_list.twig";
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
        return array (  182 => 36,  177 => 34,  172 => 33,  165 => 31,  160 => 30,  157 => 29,  151 => 28,  148 => 27,  141 => 25,  130 => 23,  126 => 22,  123 => 21,  118 => 20,  116 => 19,  109 => 18,  105 => 17,  102 => 16,  89 => 14,  85 => 13,  80 => 12,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"product-manufacturer\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      <h1>{{ heading_title }}</h1>
      {% if categories %}
        <p><strong>{{ text_index }}</strong>
          {% for category in categories %}
            &nbsp;&nbsp;&nbsp;<a href=\"{{ category.href }}#{{ category.name }}\">{{ category.name }}</a>
          {% endfor %}
        </p>
        {% for category in categories %}
          <h2 id=\"{{ category.name }}\">{{ category.name }}</h2>
          {% if category.manufacturer %}
            {% for manufacturers in category.manufacturer|batch(4) %}
              <div class=\"row mb-3\">
                {% for manufacturer in manufacturers %}
                  <div class=\"col-sm-3\"><a href=\"{{ manufacturer.href }}\">{{ manufacturer.name }}</a></div>
                {% endfor %}
              </div>
            {% endfor %}
          {% endif %}
        {% endfor %}
      {% else %}
        <p>{{ text_no_results }}</p>
        <div class=\"text-end\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
      {% endif %}
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }}", "catalog/view/template/product/manufacturer_list.twig", "/home/u925137283/domains/nlagro.com/public_html/catalog/view/template/product/manufacturer_list.twig");
    }
}
