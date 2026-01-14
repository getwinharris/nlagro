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

/* y5ho0zhjsuboyo5s/view/template/design/theme_list.twig */
class __TwigTemplate_52f446760ea211a9fea6df4cac7d80f6 extends Template
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
        yield "<form id=\"form-theme\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        yield ($context["action"] ?? null);
        yield "\" data-oc-target=\"#theme\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th>";
        // line 7
        yield ($context["column_route"] ?? null);
        yield "</th>
          <th>";
        // line 8
        yield ($context["column_store"] ?? null);
        yield "</th>
          <th>";
        // line 9
        yield ($context["column_date_added"] ?? null);
        yield "</th>
          <th class=\"text-end\">";
        // line 10
        yield ($context["column_action"] ?? null);
        yield "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 14
        if (($context["themes"] ?? null)) {
            // line 15
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["themes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 16
                yield "            <tr";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "status", [], "any", false, false, false, 16)) {
                    yield " class=\"table-active opacity-50\"";
                }
                yield ">
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "theme_id", [], "any", false, false, false, 17);
                yield "\" class=\"form-check-input\"/></td>
              <td>";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "route", [], "any", false, false, false, 18);
                yield "</td>
              <td>";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "store", [], "any", false, false, false, 19);
                yield "</td>
              <td>";
                // line 20
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "date_added", [], "any", false, false, false, 20);
                yield "</td>
              <td class=\"text-end text-nowrap\"><a href=\"";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "edit", [], "any", false, false, false, 21);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a> <button type=\"button\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "delete", [], "any", false, false, false, 21);
                yield "\" data-bs-toggle=\"tooltip\" title=\"";
                yield ($context["button_delete"] ?? null);
                yield "\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "        ";
        } else {
            // line 25
            yield "          <tr>
            <td class=\"text-center\" colspan=\"6\">";
            // line 26
            yield ($context["text_no_results"] ?? null);
            yield "</td>
          </tr>
        ";
        }
        // line 29
        yield "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 33
        yield ($context["pagination"] ?? null);
        yield "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 34
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
        return "y5ho0zhjsuboyo5s/view/template/design/theme_list.twig";
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
        return array (  138 => 34,  134 => 33,  128 => 29,  122 => 26,  119 => 25,  116 => 24,  101 => 21,  97 => 20,  93 => 19,  89 => 18,  85 => 17,  78 => 16,  73 => 15,  71 => 14,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<form id=\"form-theme\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"{{ action }}\" data-oc-target=\"#theme\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered\">
      <thead>
        <tr>
          <th class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></th>
          <th>{{ column_route }}</th>
          <th>{{ column_store }}</th>
          <th>{{ column_date_added }}</th>
          <th class=\"text-end\">{{ column_action }}</th>
        </tr>
      </thead>
      <tbody>
        {% if themes %}
          {% for theme in themes %}
            <tr{% if not theme.status %} class=\"table-active opacity-50\"{% endif %}>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"{{ theme.theme_id }}\" class=\"form-check-input\"/></td>
              <td>{{ theme.route }}</td>
              <td>{{ theme.store }}</td>
              <td>{{ theme.date_added }}</td>
              <td class=\"text-end text-nowrap\"><a href=\"{{ theme.edit }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a> <button type=\"button\" value=\"{{ theme.delete }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_delete }}\" class=\"btn btn-danger\"><i class=\"fa-regular fa-trash-can\"></i></button></td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td class=\"text-center\" colspan=\"6\">{{ text_no_results }}</td>
          </tr>
        {% endif %}
      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">{{ pagination }}</div>
    <div class=\"col-sm-6 text-end\">{{ results }}</div>
  </div>
</form>", "y5ho0zhjsuboyo5s/view/template/design/theme_list.twig", "/home/u925137283/domains/nlagro.com/public_html/y5ho0zhjsuboyo5s/view/template/design/theme_list.twig");
    }
}
