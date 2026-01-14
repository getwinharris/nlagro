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

/* y5ho0zhjsuboyo5s/view/template/design/layout_list.twig */
class __TwigTemplate_4d90db037879da3ab8488f6a4808d8ef extends Template
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
        yield "<form id=\"form-layout\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#layout\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"";
        // line 7
        yield ($context["sort_name"] ?? null);
        yield "\"";
        if ((($context["sort"] ?? null) == "name")) {
            yield " class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\"";
        }
        yield ">";
        yield ($context["column_name"] ?? null);
        yield "</a></th>
          <th class=\"text-end\">";
        // line 8
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 12
        if (($context["layouts"] ?? null)) {
            // line 13
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 14
                yield "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 15);
                yield "\" class=\"form-check-input\"/></td>
              <td>";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 16);
                yield "</td>
              <td class=\"text-end\"><a href=\"";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "edit", [], "any", false, false, false, 17);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['layout'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "        ";
        } else {
            // line 21
            yield "          <tr>
            <td class=\"text-center\" colspan=\"3\">";
            // line 22
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 25
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 29
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 30
        yield ($context["results"] ?? null);
        yield "</div>
  </div>
</form>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "y5ho0zhjsuboyo5s/view/template/design/layout_list.twig";
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
        return array (  122 => 30,  118 => 29,  112 => 25,  106 => 22,  103 => 21,  100 => 20,  89 => 17,  85 => 16,  81 => 15,  78 => 14,  73 => 13,  71 => 12,  64 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-layout\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#layout\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th><a href=\"{{ sort_name }}\"{% if sort == 'name' %} class=\"{{ order|lower }}\"{% endif %}>{{ column_name }}</a></th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if layouts %}
          {% for layout in layouts %}
            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ layout.layout_id }}\" class=\"form-check-input\"/></td>
              <td>{{ layout.name }}</td>
              <td class=\"text-end\"><a href=\"{{ layout.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"3\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>", "y5ho0zhjsuboyo5s/view/template/design/layout_list.twig", "/home/u925137283/domains/nlagro.com/public_html/y5ho0zhjsuboyo5s/view/template/design/layout_list.twig");
    }
}
