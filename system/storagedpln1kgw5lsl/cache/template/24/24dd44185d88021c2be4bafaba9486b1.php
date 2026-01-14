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

/* y5ho0zhjsuboyo5s/view/template/user/profile.twig */
class __TwigTemplate_05fa7d61ba47707f93c01c893be5064e extends Template
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
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-user\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        yield ($context["text_edit"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-user\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <fieldset>
            <legend>";
        // line 22
        yield ($context["text_user"] ?? null);
        yield "</legend>
            <div class=\"row mb-3 required\">
              <label for=\"input-username\" class=\"col-sm-2 col-form-label\">";
        // line 24
        yield ($context["entry_username"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"username\" value=\"";
        // line 26
        yield ($context["username"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_username"] ?? null);
        yield "\" id=\"input-username\" class=\"form-control\"/>
                <div id=\"error-username\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3 required\">
              <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 31
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"firstname\" value=\"";
        // line 33
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\"/>
                <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3 required\">
              <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 38
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"lastname\" value=\"";
        // line 40
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\"/>
                <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3 required\">
              <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 45
        yield ($context["entry_email"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"email\" value=\"";
        // line 47
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\"/>
                <div id=\"error-email\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-image\" class=\"col-sm-2 col-form-label\">";
        // line 52
        yield ($context["entry_image"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                  <img src=\"";
        // line 55
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/>
                  <input type=\"hidden\" name=\"image\" value=\"";
        // line 56
        yield ($context["image"] ?? null);
        yield "\" id=\"input-image\"/>
                  <div class=\"d-grid\">
                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 58
        yield ($context["button_edit"] ?? null);
        yield "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 59
        yield ($context["button_clear"] ?? null);
        yield "</button>
                  </div>
                </div>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 66
        yield ($context["text_password"] ?? null);
        yield "</legend>
            <div class=\"row mb-3 required\">
              <label for=\"input-password\" class=\"col-sm-2 col-form-label\">";
        // line 68
        yield ($context["entry_password"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"password\" name=\"password\" value=\"";
        // line 70
        yield ($context["password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                <div id=\"error-password\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3 required\">
              <label for=\"input-confirm\" class=\"col-sm-2 col-form-label\">";
        // line 75
        yield ($context["entry_confirm"] ?? null);
        yield "</label>
              <div class=\"col-sm-10\">
                <input type=\"password\" name=\"confirm\" value=\"";
        // line 77
        yield ($context["confirm"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_confirm"] ?? null);
        yield "\" id=\"input-confirm\" class=\"form-control\"/>
                <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 87
        yield ($context["footer"] ?? null);
        yield " ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "y5ho0zhjsuboyo5s/view/template/user/profile.twig";
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
        return array (  234 => 87,  219 => 77,  214 => 75,  204 => 70,  199 => 68,  194 => 66,  184 => 59,  180 => 58,  175 => 56,  169 => 55,  163 => 52,  153 => 47,  148 => 45,  138 => 40,  133 => 38,  123 => 33,  118 => 31,  108 => 26,  103 => 24,  98 => 22,  93 => 20,  88 => 18,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-user\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_edit }}</div>
      <div class=\"card-body\">
        <form id=\"form-user\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <fieldset>
            <legend>{{ text_user }}</legend>
            <div class=\"row mb-3 required\">
              <label for=\"input-username\" class=\"col-sm-2 col-form-label\">{{ entry_username }}</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"username\" value=\"{{ username }}\" placeholder=\"{{ entry_username }}\" id=\"input-username\" class=\"form-control\"/>
                <div id=\"error-username\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3 required\">
              <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">{{ entry_firstname }}</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"firstname\" value=\"{{ firstname }}\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\"/>
                <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3 required\">
              <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">{{ entry_lastname }}</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"lastname\" value=\"{{ lastname }}\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\"/>
                <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3 required\">
              <label for=\"input-email\" class=\"col-sm-2 col-form-label\">{{ entry_email }}</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"email\" value=\"{{ email }}\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\"/>
                <div id=\"error-email\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3\">
              <label for=\"input-image\" class=\"col-sm-2 col-form-label\">{{ entry_image }}</label>
              <div class=\"col-sm-10\">
                <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                  <img src=\"{{ thumb }}\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/>
                  <input type=\"hidden\" name=\"image\" value=\"{{ image }}\" id=\"input-image\"/>
                  <div class=\"d-grid\">
                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                  </div>
                </div>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>{{ text_password }}</legend>
            <div class=\"row mb-3 required\">
              <label for=\"input-password\" class=\"col-sm-2 col-form-label\">{{ entry_password }}</label>
              <div class=\"col-sm-10\">
                <input type=\"password\" name=\"password\" value=\"{{ password }}\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\" autocomplete=\"new-password\"/>
                <div id=\"error-password\" class=\"invalid-feedback\"></div>
              </div>
            </div>
            <div class=\"row mb-3 required\">
              <label for=\"input-confirm\" class=\"col-sm-2 col-form-label\">{{ entry_confirm }}</label>
              <div class=\"col-sm-10\">
                <input type=\"password\" name=\"confirm\" value=\"{{ confirm }}\" placeholder=\"{{ entry_confirm }}\" id=\"input-confirm\" class=\"form-control\"/>
                <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
{{ footer }} ", "y5ho0zhjsuboyo5s/view/template/user/profile.twig", "/home/u925137283/domains/nlagro.com/public_html/y5ho0zhjsuboyo5s/view/template/user/profile.twig");
    }
}
