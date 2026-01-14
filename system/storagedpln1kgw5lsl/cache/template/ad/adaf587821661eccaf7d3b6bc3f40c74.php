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

/* nladmin/view/template/marketplace/marketplace_extension.twig */
class __TwigTemplate_14ae7c8c6d2a5751608adbd60f713a59 extends Template
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
        yield "<table class=\"table table-bordered\">
  <thead>
    <th>";
        // line 3
        yield ($context["text_name"] ?? null);
        yield "</th>
    <th>";
        // line 4
        yield ($context["text_date_added"] ?? null);
        yield "</th>
    <th class=\"text-end\">";
        // line 5
        yield ($context["text_action"] ?? null);
        yield "</th>
  </thead>
  <tbody>
    ";
        // line 8
        if (($context["downloads"] ?? null)) {
            // line 9
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["downloads"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["download"]) {
                // line 10
                yield "        <tr>
          <td>";
                // line 11
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "name", [], "any", false, false, false, 11);
                yield "</td>
          <td>";
                // line 12
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "date_added", [], "any", false, false, false, 12);
                yield "</td>
          <td class=\"text-end\">
            <div class=\"dropdown\">
              <div class=\"btn-group\">
                <button type=\"button\" value=\"";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "download", [], "any", false, false, false, 16);
                yield "\" class=\"btn btn-primary\"";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["download"], "download", [], "any", false, false, false, 16)) {
                    yield " disabled";
                }
                yield "><i class=\"fa-solid fa-download\"></i> ";
                yield ($context["button_download"] ?? null);
                yield "</button>
                <button type=\"button\" data-bs-toggle=\"dropdown\" class=\"btn btn-outline-dark dropdown-toggle dropdown-toggle-split\"><i class=\"fa-solid fa-caret-down\"></i></button>
                <div class=\"dropdown-menu dropdown-menu-end\">
                  <a href=\"";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "install", [], "any", false, false, false, 19);
                yield "\" class=\"dropdown-item";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["download"], "install", [], "any", false, false, false, 19)) {
                    yield " disabled";
                }
                yield "\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i> ";
                yield ($context["text_install"] ?? null);
                yield "</a> <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "uninstall", [], "any", false, false, false, 19);
                yield "\" class=\"dropdown-item";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["download"], "uninstall", [], "any", false, false, false, 19)) {
                    yield " disabled";
                }
                yield "\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i> ";
                yield ($context["text_uninstall"] ?? null);
                yield "</a> <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "delete", [], "any", false, false, false, 19);
                yield "\" class=\"dropdown-item";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["download"], "delete", [], "any", false, false, false, 19)) {
                    yield " disabled";
                }
                yield "\"><i class=\"fa-regular fa-trash-can fa-fw\"></i> ";
                yield ($context["text_delete"] ?? null);
                yield "</a>
                </div>
              </div>
            </div></td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['download'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "    ";
        } else {
            // line 26
            yield "      <tr>
        <td colspan=\"3\" class=\"text-center\">";
            // line 27
            yield ($context["text_no_results"] ?? null);
            yield "</td>
      </tr>
    ";
        }
        // line 30
        yield "  </tbody>
</table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "nladmin/view/template/marketplace/marketplace_extension.twig";
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
        return array (  139 => 30,  133 => 27,  130 => 26,  127 => 25,  93 => 19,  81 => 16,  74 => 12,  70 => 11,  67 => 10,  62 => 9,  60 => 8,  54 => 5,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<table class=\"table table-bordered\">
  <thead>
    <th>{{ text_name }}</th>
    <th>{{ text_date_added }}</th>
    <th class=\"text-end\">{{ text_action }}</th>
  </thead>
  <tbody>
    {% if downloads %}
      {% for download in downloads %}
        <tr>
          <td>{{ download.name }}</td>
          <td>{{ download.date_added }}</td>
          <td class=\"text-end\">
            <div class=\"dropdown\">
              <div class=\"btn-group\">
                <button type=\"button\" value=\"{{ download.download }}\" class=\"btn btn-primary\"{% if not download.download %} disabled{% endif %}><i class=\"fa-solid fa-download\"></i> {{ button_download }}</button>
                <button type=\"button\" data-bs-toggle=\"dropdown\" class=\"btn btn-outline-dark dropdown-toggle dropdown-toggle-split\"><i class=\"fa-solid fa-caret-down\"></i></button>
                <div class=\"dropdown-menu dropdown-menu-end\">
                  <a href=\"{{ download.install }}\" class=\"dropdown-item{% if not download.install %} disabled{% endif %}\"><i class=\"fa-solid fa-plus-circle fa-fw\"></i> {{ text_install }}</a> <a href=\"{{ download.uninstall }}\" class=\"dropdown-item{% if not download.uninstall %} disabled{% endif %}\"><i class=\"fa-solid fa-minus-circle fa-fw\"></i> {{ text_uninstall }}</a> <a href=\"{{ download.delete }}\" class=\"dropdown-item{% if not download.delete %} disabled{% endif %}\"><i class=\"fa-regular fa-trash-can fa-fw\"></i> {{ text_delete }}</a>
                </div>
              </div>
            </div></td>
        </tr>
      {% endfor %}
    {% else %}
      <tr>
        <td colspan=\"3\" class=\"text-center\">{{ text_no_results }}</td>
      </tr>
    {% endif %}
  </tbody>
</table>
", "nladmin/view/template/marketplace/marketplace_extension.twig", "/home/u925137283/domains/nlagro.com/public_html/nladmin/view/template/marketplace/marketplace_extension.twig");
    }
}
