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

/* nladmin/view/template/marketplace/marketplace_list.twig */
class __TwigTemplate_1e3bc8397a2b9544a574bd233b2d6862 extends Template
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
        ";
        // line 6
        if (($context["signature"] ?? null)) {
            // line 7
            yield "          <button type=\"button\" id=\"button-api\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_api"] ?? null);
            yield "\" class=\"btn btn-info\"><i class=\"fa-solid fa-cog\"></i></button>
        ";
        } else {
            // line 9
            yield "          <button type=\"button\" id=\"button-api\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_api"] ?? null);
            yield "\" data-placement=\"left\" class=\"btn btn-danger\"><i class=\"fa-solid fa-triangle-exclamation\"></i></button>
        ";
        }
        // line 11
        yield "      </div>
      <h1>";
        // line 12
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 21
        if (($context["error_warning"] ?? null)) {
            // line 22
            yield "      <div class=\"alert alert-danger\"><i class=\"fa-solid fa-triangle-exclamation\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "</div>
    ";
        }
        // line 24
        yield "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-puzzle-piece\"></i> ";
        // line 25
        yield ($context["text_list"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <div class=\"card bg-light\">
          <div class=\"card-body\">
            <div id=\"extension-filter\" class=\"input-group dropdown\">
              <input type=\"text\" name=\"filter_search\" value=\"";
        // line 30
        yield ($context["filter_search"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["text_search"] ?? null);
        yield "\" id=\"input-search\" class=\"form-control\"/>
              ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 32
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "value", [], "any", false, false, false, 32) == ($context["filter_category"] ?? null))) {
                // line 33
                yield "                  <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle dropdown-toggle-split\" data-bs-toggle=\"dropdown\">";
                yield ($context["text_category"] ?? null);
                yield " (";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 33);
                yield ") <i class=\"fa-solid fa-caret-down\"></i></button>
                ";
            }
            // line 35
            yield "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "              <div class=\"dropdown-menu dropdown-menu-end\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 38
            yield "                  <a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 38);
            yield "\" class=\"dropdown-item\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "text", [], "any", false, false, false, 38);
            yield "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "              </div>
              <button type=\"button\" id=\"button-filter\" data-bs-toggle=\"tooltip\" title=\"";
        // line 41
        yield ($context["button_filter"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-filter\"></i></button>
            </div>
            <input type=\"hidden\" name=\"filter_category_id\" value=\"";
        // line 43
        yield ($context["filter_category_id"] ?? null);
        yield "\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_download_id\" value=\"";
        yield ($context["filter_download_id"] ?? null);
        yield "\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_rating\" value=\"";
        yield ($context["filter_rating"] ?? null);
        yield "\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_license\" value=\"";
        yield ($context["filter_license"] ?? null);
        yield "\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_partner\" value=\"";
        yield ($context["filter_partner"] ?? null);
        yield "\" class=\"form-control\"/> <input type=\"hidden\" name=\"sort\" value=\"";
        yield ($context["sort"] ?? null);
        yield "\" class=\"form-control\"/>
          </div>
        </div>
        <br/>
        <div class=\"row mb-4\">
          <div class=\"col-sm-auto me-sm-auto mb-2 mb-lg-0\">
            <div class=\"btn-group\">";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["licenses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["license"]) {
            // line 50
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["license"], "value", [], "any", false, false, false, 50) == ($context["filter_license"] ?? null))) {
                yield "<a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["license"], "href", [], "any", false, false, false, 50);
                yield "\" class=\"btn btn-light active\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["license"], "text", [], "any", false, false, false, 50);
                yield "</a>";
            } else {
                yield "<a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["license"], "href", [], "any", false, false, false, 50);
                yield "\" class=\"btn btn-light\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["license"], "text", [], "any", false, false, false, 50);
                yield "</a>";
            }
            // line 51
            yield "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['license'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "            </div>
          </div>
          <div class=\"col-xl-3 col-lg-5 col-sm-auto\">
            <div class=\"input-group float-end\">
              <div class=\"input-group-text\"><i class=\"fa-solid fa-arrow-down-short-wide\"></i></div>
              <select onchange=\"location = this.value;\" class=\"form-select\">
              ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 59
            yield "                <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 59);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 59) == ($context["sort"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 59);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sorts'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "              </select>
            </div>
          </div>
        </div>
        <div>
          ";
        // line 66
        if (($context["promotions"] ?? null)) {
            // line 67
            yield "            <h3>";
            yield ($context["text_featured"] ?? null);
            yield "</h3>
            <div class=\"row\">
              ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["promotions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 70
                yield "                ";
                if ($context["extension"]) {
                    // line 71
                    yield "                  <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                    <section>
                      <div class=\"extension-preview text-center\">
                        <a href=\"";
                    // line 74
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 74);
                    yield "\"><div class=\"extension-description\"></div><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "image", [], "any", false, false, false, 74);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 74);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 74);
                    yield "\" class=\"img-fluid\"/></a>
                      </div>
                      <div class=\"extension-name\">
                        <h4><a href=\"";
                    // line 77
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 77);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 77);
                    yield "</a></h4>
                        ";
                    // line 78
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "price", [], "any", false, false, false, 78);
                    yield "
                      </div>
                      <div class=\"extension-rate\">
                        <div class=\"row\">
                          <div class=\"col-6\">";
                    // line 82
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 83
                        yield "                              ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "rating", [], "any", false, false, false, 83) < $context["i"])) {
                            yield "<i class=\"fa-regular fa-star\"></i>";
                        } else {
                            yield "<i class=\"fa-solid fa-star\"></i>";
                        }
                        // line 84
                        yield "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 85
                    yield "                          </div>
                          <div class=\"col-6\">
                            <div class=\"text-end\">";
                    // line 87
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "rating_total", [], "any", false, false, false, 87);
                    yield " ";
                    yield ($context["text_reviews"] ?? null);
                    yield "</div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                ";
                }
                // line 94
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            yield "            </div>
            <hr/>
          ";
        }
        // line 98
        yield "          ";
        if (($context["extensions"] ?? null)) {
            // line 99
            yield "            <div class=\"row\">
              ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 101
                yield "                ";
                if ($context["extension"]) {
                    // line 102
                    yield "                  <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                    <section>
                      <div class=\"extension-preview text-center\"><a href=\"";
                    // line 104
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 104);
                    yield "\"><div class=\"extension-description\"></div><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "image", [], "any", false, false, false, 104);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 104);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 104);
                    yield "\" class=\"img-fluid\"/></a></div>
                      <div class=\"extension-name\">
                        <h4><a href=\"";
                    // line 106
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "href", [], "any", false, false, false, 106);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 106);
                    yield "</a></h4>
                        ";
                    // line 107
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "price", [], "any", false, false, false, 107);
                    yield "
                      </div>
                      <div class=\"extension-rate\">
                        <div class=\"row\">
                          <div class=\"col-6\">";
                    // line 111
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 112
                        yield "                              ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "rating", [], "any", false, false, false, 112) < $context["i"])) {
                            yield "<i class=\"fa-regular fa-star\"></i>";
                        } else {
                            yield "<i class=\"fa-solid fa-star\"></i>";
                        }
                        // line 113
                        yield "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 114
                    yield "                          </div>
                          <div class=\"col-6\">
                            <div class=\"text-end\">";
                    // line 116
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "rating_total", [], "any", false, false, false, 116);
                    yield " ";
                    yield ($context["text_reviews"] ?? null);
                    yield "</div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                ";
                }
                // line 123
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            yield "            </div>
          ";
        } else {
            // line 126
            yield "            <p class=\"text-center\">";
            yield ($context["text_no_results"] ?? null);
            yield "</p>
          ";
        }
        // line 128
        yield "        </div>
        <div class=\"row\">
          <div class=\"col-sm-12 text-center\">";
        // line 130
        yield ($context["pagination"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-api').on('click', function(e) {
    \$('#modal-api').remove();

    \$.ajax({
        url: 'index.php?route=marketplace/api&user_token=";
        // line 141
        yield ($context["user_token"] ?? null);
        yield "',
        dataType: 'html',
        beforeSend: function() {
            \$('#button-api').button('loading');
        },
        complete: function() {
            \$('#button-api').button('reset');
        },
        success: function(html) {
            \$('body').append(html);

            \$('#modal-api').modal('show');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function(e) {
    var url = 'index.php?route=marketplace/marketplace&user_token=";
        // line 162
        yield ($context["user_token"] ?? null);
        yield "';

    var input = \$('#extension-filter :input');

    for (i = 0; i < input.length; i++) {
        if (\$(input[i]).val() !== '') {
            url += '&' + \$(input[i]).attr('name') + '=' + \$(input[i]).val()
        }
    }

    download();

    location = url;
});

\$('#input-search').keydown(function(e) {
    if (e.keyCode == 13) {
        e.preventDefault();

        \$('#button-filter').trigger('click');
    }
});
//--></script>
";
        // line 185
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "nladmin/view/template/marketplace/marketplace_list.twig";
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
        return array (  491 => 185,  465 => 162,  441 => 141,  427 => 130,  423 => 128,  417 => 126,  413 => 124,  407 => 123,  395 => 116,  391 => 114,  385 => 113,  378 => 112,  374 => 111,  367 => 107,  361 => 106,  350 => 104,  346 => 102,  343 => 101,  339 => 100,  336 => 99,  333 => 98,  328 => 95,  322 => 94,  310 => 87,  306 => 85,  300 => 84,  293 => 83,  289 => 82,  282 => 78,  276 => 77,  264 => 74,  259 => 71,  256 => 70,  252 => 69,  246 => 67,  244 => 66,  237 => 61,  222 => 59,  218 => 58,  210 => 52,  204 => 51,  189 => 50,  185 => 49,  166 => 43,  161 => 41,  158 => 40,  147 => 38,  143 => 37,  140 => 36,  134 => 35,  126 => 33,  123 => 32,  119 => 31,  113 => 30,  105 => 25,  102 => 24,  96 => 22,  94 => 21,  88 => 17,  77 => 15,  73 => 14,  68 => 12,  65 => 11,  59 => 9,  53 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        {% if signature %}
          <button type=\"button\" id=\"button-api\" data-bs-toggle=\"tooltip\" title=\"{{ button_api }}\" class=\"btn btn-info\"><i class=\"fa-solid fa-cog\"></i></button>
        {% else %}
          <button type=\"button\" id=\"button-api\" data-bs-toggle=\"tooltip\" title=\"{{ button_api }}\" data-placement=\"left\" class=\"btn btn-danger\"><i class=\"fa-solid fa-triangle-exclamation\"></i></button>
        {% endif %}
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
    {% if error_warning %}
      <div class=\"alert alert-danger\"><i class=\"fa-solid fa-triangle-exclamation\"></i> {{ error_warning }}</div>
    {% endif %}
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-puzzle-piece\"></i> {{ text_list }}</div>
      <div class=\"card-body\">
        <div class=\"card bg-light\">
          <div class=\"card-body\">
            <div id=\"extension-filter\" class=\"input-group dropdown\">
              <input type=\"text\" name=\"filter_search\" value=\"{{ filter_search }}\" placeholder=\"{{ text_search }}\" id=\"input-search\" class=\"form-control\"/>
              {% for category in categories %}
                {% if category.value == filter_category %}
                  <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle dropdown-toggle-split\" data-bs-toggle=\"dropdown\">{{ text_category }} ({{ category.text }}) <i class=\"fa-solid fa-caret-down\"></i></button>
                {% endif %}
              {% endfor %}
              <div class=\"dropdown-menu dropdown-menu-end\">
                {% for category in categories %}
                  <a href=\"{{ category.href }}\" class=\"dropdown-item\">{{ category.text }}</a>
                {% endfor %}
              </div>
              <button type=\"button\" id=\"button-filter\" data-bs-toggle=\"tooltip\" title=\"{{ button_filter }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-filter\"></i></button>
            </div>
            <input type=\"hidden\" name=\"filter_category_id\" value=\"{{ filter_category_id }}\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_download_id\" value=\"{{ filter_download_id }}\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_rating\" value=\"{{ filter_rating }}\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_license\" value=\"{{ filter_license }}\" class=\"form-control\"/> <input type=\"hidden\" name=\"filter_partner\" value=\"{{ filter_partner }}\" class=\"form-control\"/> <input type=\"hidden\" name=\"sort\" value=\"{{ sort }}\" class=\"form-control\"/>
          </div>
        </div>
        <br/>
        <div class=\"row mb-4\">
          <div class=\"col-sm-auto me-sm-auto mb-2 mb-lg-0\">
            <div class=\"btn-group\">{% for license in licenses %}
                {% if license.value == filter_license %}<a href=\"{{ license.href }}\" class=\"btn btn-light active\">{{ license.text }}</a>{% else %}<a href=\"{{ license.href }}\" class=\"btn btn-light\">{{ license.text }}</a>{% endif %}
              {% endfor %}
            </div>
          </div>
          <div class=\"col-xl-3 col-lg-5 col-sm-auto\">
            <div class=\"input-group float-end\">
              <div class=\"input-group-text\"><i class=\"fa-solid fa-arrow-down-short-wide\"></i></div>
              <select onchange=\"location = this.value;\" class=\"form-select\">
              {% for sorts in sorts %}
                <option value=\"{{ sorts.href }}\"{% if sorts.value == sort %} selected{% endif %}>{{ sorts.text }}</option>
              {% endfor %}
              </select>
            </div>
          </div>
        </div>
        <div>
          {% if promotions %}
            <h3>{{ text_featured }}</h3>
            <div class=\"row\">
              {% for extension in promotions %}
                {% if extension %}
                  <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                    <section>
                      <div class=\"extension-preview text-center\">
                        <a href=\"{{ extension.href }}\"><div class=\"extension-description\"></div><img src=\"{{ extension.image }}\" alt=\"{{ extension.name }}\" title=\"{{ extension.name }}\" class=\"img-fluid\"/></a>
                      </div>
                      <div class=\"extension-name\">
                        <h4><a href=\"{{ extension.href }}\">{{ extension.name }}</a></h4>
                        {{ extension.price }}
                      </div>
                      <div class=\"extension-rate\">
                        <div class=\"row\">
                          <div class=\"col-6\">{% for i in 1..5 %}
                              {% if extension.rating < i %}<i class=\"fa-regular fa-star\"></i>{% else %}<i class=\"fa-solid fa-star\"></i>{% endif %}
                            {% endfor %}
                          </div>
                          <div class=\"col-6\">
                            <div class=\"text-end\">{{ extension.rating_total }} {{ text_reviews }}</div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                {% endif %}
              {% endfor %}
            </div>
            <hr/>
          {% endif %}
          {% if extensions %}
            <div class=\"row\">
              {% for extension in extensions %}
                {% if extension %}
                  <div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
                    <section>
                      <div class=\"extension-preview text-center\"><a href=\"{{ extension.href }}\"><div class=\"extension-description\"></div><img src=\"{{ extension.image }}\" alt=\"{{ extension.name }}\" title=\"{{ extension.name }}\" class=\"img-fluid\"/></a></div>
                      <div class=\"extension-name\">
                        <h4><a href=\"{{ extension.href }}\">{{ extension.name }}</a></h4>
                        {{ extension.price }}
                      </div>
                      <div class=\"extension-rate\">
                        <div class=\"row\">
                          <div class=\"col-6\">{% for i in 1..5 %}
                              {% if extension.rating < i %}<i class=\"fa-regular fa-star\"></i>{% else %}<i class=\"fa-solid fa-star\"></i>{% endif %}
                            {% endfor %}
                          </div>
                          <div class=\"col-6\">
                            <div class=\"text-end\">{{ extension.rating_total }} {{ text_reviews }}</div>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
                {% endif %}
              {% endfor %}
            </div>
          {% else %}
            <p class=\"text-center\">{{ text_no_results }}</p>
          {% endif %}
        </div>
        <div class=\"row\">
          <div class=\"col-sm-12 text-center\">{{ pagination }}</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-api').on('click', function(e) {
    \$('#modal-api').remove();

    \$.ajax({
        url: 'index.php?route=marketplace/api&user_token={{ user_token }}',
        dataType: 'html',
        beforeSend: function() {
            \$('#button-api').button('loading');
        },
        complete: function() {
            \$('#button-api').button('reset');
        },
        success: function(html) {
            \$('body').append(html);

            \$('#modal-api').modal('show');
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function(e) {
    var url = 'index.php?route=marketplace/marketplace&user_token={{ user_token }}';

    var input = \$('#extension-filter :input');

    for (i = 0; i < input.length; i++) {
        if (\$(input[i]).val() !== '') {
            url += '&' + \$(input[i]).attr('name') + '=' + \$(input[i]).val()
        }
    }

    download();

    location = url;
});

\$('#input-search').keydown(function(e) {
    if (e.keyCode == 13) {
        e.preventDefault();

        \$('#button-filter').trigger('click');
    }
});
//--></script>
{{ footer }}", "nladmin/view/template/marketplace/marketplace_list.twig", "/home/u925137283/domains/nlagro.com/public_html/nladmin/view/template/marketplace/marketplace_list.twig");
    }
}
