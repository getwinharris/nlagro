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

/* y5ho0zhjsuboyo5s/view/template/design/theme_form.twig */
class __TwigTemplate_4eb85b4e8137e907c4c47b821f7c5322 extends Template
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
        <button type=\"submit\" form=\"form-theme\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> ";
        // line 19
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-theme\" action=\"";
        // line 21
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-route\" class=\"col-sm-2 col-form-label required\">";
        // line 23
        yield ($context["entry_store"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"store_id\" id=\"input-store\" class=\"form-select\">
                <option value=\"0\">";
        // line 26
        yield ($context["text_default"] ?? null);
        yield "</option>
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 28
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 28);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 28) == ($context["store_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 28);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 34
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 38
        if (($context["status"] ?? null)) {
            yield " checked";
        }
        yield "/>
              </div>
            </div>
          </div>
          <fieldset>
            <legend>";
        // line 43
        yield ($context["text_code"] ?? null);
        yield "</legend>
            <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 44
        yield ($context["text_twig"] ?? null);
        yield "</div>
            <div class=\"input-group input-group-lg mb-3\">
              <div class=\"input-group-text\">";
        // line 46
        yield ($context["entry_route"] ?? null);
        yield "</div>
              <select name=\"route\" id=\"input-route\" class=\"form-select\">
                <option value=\"\"></option>
                <optgroup label=\"";
        // line 49
        yield ($context["text_default"] ?? null);
        yield "\">
                  ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["templates"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["template"]) {
            // line 51
            yield "                    <option value=\"";
            yield $context["template"];
            yield "\"";
            if (($context["template"] == ($context["route"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield $context["template"];
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['template'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                </optgroup>
                <optgroup label=\"";
        // line 54
        yield ($context["text_extension"] ?? null);
        yield "\">
                  ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 56
            yield "                    <option value=\"";
            yield $context["extension"];
            yield "\"";
            if (($context["extension"] == ($context["route"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield $context["extension"];
            yield "</option>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "                </optgroup>
              </select>
            </div>
            <textarea name=\"code\" id=\"input-code\" rows=\"10\" class=\"form-control\">";
        // line 61
        yield ($context["code"] ?? null);
        yield "</textarea>
          </fieldset>
          <input type=\"hidden\" name=\"theme_id\" value=\"";
        // line 63
        yield ($context["theme_id"] ?? null);
        yield "\" id=\"input-theme-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
<link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/mode/xml/xml.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/mode/htmlmixed/htmlmixed.js\"></script>
<script type=\"text/javascript\"><!--
\$(document).ready(function(e) {
    // Initialize codemirrror
    var codemirror = CodeMirror.fromTextArea(document.querySelector('#input-code'), {
        mode: 'text/html',
        lineNumbers: true,
        lineWrapping: true,
        autofocus: true,
        theme: 'monokai'
    });

    codemirror.setSize('100%', '500px');
});

\$('#input-route').on('change', function(e) {
    var element = this;

    \$.ajax({
        url: 'index.php?route=design/theme.template&user_token=";
        // line 92
        yield ($context["user_token"] ?? null);
        yield "&store_id=' + \$('#input-store').val() + '&path=' + \$('#input-route').val(),
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            var codemirror = \$('.CodeMirror')[0].CodeMirror;

            codemirror.setValue(json['code']);
            codemirror.setSize('100%', '500px');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
";
        // line 122
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "y5ho0zhjsuboyo5s/view/template/design/theme_form.twig";
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
        return array (  290 => 122,  257 => 92,  225 => 63,  220 => 61,  215 => 58,  200 => 56,  196 => 55,  192 => 54,  189 => 53,  174 => 51,  170 => 50,  166 => 49,  160 => 46,  155 => 44,  151 => 43,  141 => 38,  134 => 34,  128 => 30,  113 => 28,  109 => 27,  105 => 26,  99 => 23,  94 => 21,  89 => 19,  82 => 14,  71 => 12,  67 => 11,  62 => 9,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-theme\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
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
      <div class=\"card-header\"><i class=\"fa-solid fa-list\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <form id=\"form-theme\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-route\" class=\"col-sm-2 col-form-label required\">{{ entry_store }}</label>
            <div class=\"col-sm-10\">
              <select name=\"store_id\" id=\"input-store\" class=\"form-select\">
                <option value=\"0\">{{ text_default }}</option>
                {% for store in stores %}
                  <option value=\"{{ store.store_id }}\"{% if store.store_id == store_id %} selected{% endif %}>{{ store.name }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if status %} checked{% endif %}/>
              </div>
            </div>
          </div>
          <fieldset>
            <legend>{{ text_code }}</legend>
            <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> {{ text_twig }}</div>
            <div class=\"input-group input-group-lg mb-3\">
              <div class=\"input-group-text\">{{ entry_route }}</div>
              <select name=\"route\" id=\"input-route\" class=\"form-select\">
                <option value=\"\"></option>
                <optgroup label=\"{{ text_default }}\">
                  {% for template in templates %}
                    <option value=\"{{ template }}\"{% if template == route %} selected{% endif %}>{{ template }}</option>
                  {% endfor %}
                </optgroup>
                <optgroup label=\"{{ text_extension }}\">
                  {% for extension in extensions %}
                    <option value=\"{{ extension }}\"{% if extension == route %} selected{% endif %}>{{ extension }}</option>
                  {% endfor %}
                </optgroup>
              </select>
            </div>
            <textarea name=\"code\" id=\"input-code\" rows=\"10\" class=\"form-control\">{{ code }}</textarea>
          </fieldset>
          <input type=\"hidden\" name=\"theme_id\" value=\"{{ theme_id }}\" id=\"input-theme-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
<link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/mode/xml/xml.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/codemirror/mode/htmlmixed/htmlmixed.js\"></script>
<script type=\"text/javascript\"><!--
\$(document).ready(function(e) {
    // Initialize codemirrror
    var codemirror = CodeMirror.fromTextArea(document.querySelector('#input-code'), {
        mode: 'text/html',
        lineNumbers: true,
        lineWrapping: true,
        autofocus: true,
        theme: 'monokai'
    });

    codemirror.setSize('100%', '500px');
});

\$('#input-route').on('change', function(e) {
    var element = this;

    \$.ajax({
        url: 'index.php?route=design/theme.template&user_token={{ user_token }}&store_id=' + \$('#input-store').val() + '&path=' + \$('#input-route').val(),
        dataType: 'json',
        beforeSend: function() {
            \$(element).prop('disabled', true);
        },
        complete: function() {
            \$(element).prop('disabled', false);
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            var codemirror = \$('.CodeMirror')[0].CodeMirror;

            codemirror.setValue(json['code']);
            codemirror.setSize('100%', '500px');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
{{ footer }}
", "y5ho0zhjsuboyo5s/view/template/design/theme_form.twig", "/home/u925137283/domains/nlagro.com/public_html/y5ho0zhjsuboyo5s/view/template/design/theme_form.twig");
    }
}
