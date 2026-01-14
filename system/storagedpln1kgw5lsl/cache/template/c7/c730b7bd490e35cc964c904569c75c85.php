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

/* nladmin/view/template/marketplace/marketplace_info.twig */
class __TwigTemplate_ad1c597b94b777f7e271791d27a9cae4 extends Template
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
        yield "        <a href=\"";
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a>
      </div>
      <h1>";
        // line 13
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "      </ol>
    </div>
  </div>
  <div id=\"marketplace-extension-info\" class=\"container-fluid\">
    ";
        // line 22
        if (($context["error_warning"] ?? null)) {
            // line 23
            yield "      <div class=\"alert alert-danger\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "</div>
    ";
        }
        // line 25
        yield "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-puzzle-piece\"></i> ";
        // line 26
        yield ($context["name"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <div class=\"row extension-info\">
          <div class=\"col-md-8 col-lg-9\">
            ";
        // line 30
        if (($context["banner"] ?? null)) {
            // line 31
            yield "              <div id=\"banner\" class=\"text-center img-thumbnail mb-3\"><img src=\"";
            yield ($context["banner"] ?? null);
            yield "\" title=\"";
            yield ($context["name"] ?? null);
            yield "\" alt=\"";
            yield ($context["name"] ?? null);
            yield "\" class=\"img-fluid\"/></div>
            ";
        }
        // line 33
        yield "            <div class=\"row thumbnails\">
              ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 35
            yield "                <div class=\"col-4 col-md-3 col-lg-2 mb-3\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 35);
            yield "\"><img src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 35);
            yield "\" alt=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 35);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 35);
            yield "\" class=\"img-fluid img-thumbnail\"/></a></div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "            </div>
            <ul class=\"nav nav-tabs\">
              <li class=\"nav-item\"><a href=\"#tab-description\" class=\"nav-link active\" data-bs-toggle=\"tab\">";
        // line 39
        yield ($context["tab_description"] ?? null);
        yield "</a></li>
              <li class=\"nav-item\"><a href=\"#tab-documentation\" class=\"nav-link\" data-bs-toggle=\"tab\">";
        // line 40
        yield ($context["tab_documentation"] ?? null);
        yield "</a></li>
              <li class=\"nav-item\"><a href=\"#tab-download\" class=\"nav-link\" data-bs-toggle=\"tab\">";
        // line 41
        yield ($context["tab_download"] ?? null);
        yield "</a></li>
              <li class=\"nav-item\"><a href=\"#tab-comment\" class=\"nav-link\" data-bs-toggle=\"tab\">";
        // line 42
        yield ($context["tab_comment"] ?? null);
        yield " (";
        yield ($context["comment_total"] ?? null);
        yield ")</a></li>
            </ul>
            <div class=\"tab-content\">
              <div id=\"tab-description\" class=\"tab-pane fade show active\">";
        // line 45
        yield ($context["description"] ?? null);
        yield "</div>
              <div id=\"tab-documentation\" class=\"tab-pane fade\">";
        // line 46
        yield ($context["documentation"] ?? null);
        yield "</div>
              <div id=\"tab-download\" class=\"tab-pane fade\">
                <fieldset>
                  <legend>";
        // line 49
        yield ($context["text_available"] ?? null);
        yield "</legend>
                  <div id=\"download\"></div>
                </fieldset>
              </div>
              <div id=\"tab-comment\" class=\"tab-pane\">
                <fieldset>
                  <legend>";
        // line 55
        yield ($context["text_comment_add"] ?? null);
        yield "</legend>
                  <div class=\"mb-3\">
                    <textarea name=\"comment\" rows=\"5\" placeholder=\"";
        // line 57
        yield ($context["text_write"] ?? null);
        yield "\" id=\"input-history-comment\" class=\"form-control\"></textarea>
                  </div>
                  <div class=\"text-end\">
                    <button type=\"button\" id=\"button-comment\" class=\"btn btn-primary\">";
        // line 60
        yield ($context["button_comment"] ?? null);
        yield "</button>
                  </div>
                </fieldset>
                <br/>
                <fieldset>
                  <legend>";
        // line 65
        yield ($context["text_comment"] ?? null);
        yield "</legend>
                  <div id=\"comment\"></div>
                </fieldset>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 col-lg-3\">
            <div id=\"buy\" class=\"card mb-3\">
              <div class=\"card-body\">
                ";
        // line 74
        if (((($context["license"] ?? null) == "1") &&  !($context["purchased"] ?? null))) {
            // line 75
            yield "                  <button type=\"button\" id=\"button-buy\" class=\"btn btn-success btn-lg btn-block\">";
            yield ($context["button_purchase"] ?? null);
            yield "</button>
                ";
        }
        // line 77
        yield "                <div id=\"price\" class=\"row\">
                  <div class=\"col-lg-5\"><strong>";
        // line 78
        yield ($context["text_price"] ?? null);
        yield "</strong></div>
                  <div class=\"col-lg-7 text-end\">";
        // line 79
        if (($context["license"] ?? null)) {
            // line 80
            yield "                    ";
            yield ($context["price"] ?? null);
            yield "
                    ";
        } else {
            // line 82
            yield "                      ";
            yield ($context["text_free"] ?? null);
            yield "
                    ";
        }
        // line 84
        yield "                  </div>
                </div>
                <hr>
                <ul class=\"list-check\">
                  <li>";
        // line 88
        yield ($context["text_partner"] ?? null);
        yield "</li>
                  <li>";
        // line 89
        yield ($context["text_support"] ?? null);
        yield "</li>
                  <li>";
        // line 90
        yield ($context["text_documentation"] ?? null);
        yield "</li>
                </ul>
                <hr>
                <div class=\"row\">
                  <div class=\"col-md-5\"><strong>";
        // line 94
        yield ($context["text_rating"] ?? null);
        yield "</strong></div>
                  <div class=\"col-md-7 text-end\">";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 96
            yield "                    ";
            if ((($context["rating"] ?? null) < $context["i"])) {
                // line 97
                yield "                      <i class=\"fa-regular fa-star\"></i>
                    ";
            } else {
                // line 99
                yield "                      <i class=\"fa-solid fa-star\"></i>
                    ";
            }
            // line 101
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield " (";
        yield ($context["rating_total"] ?? null);
        yield ")
                  </div>
                </div>
                <hr>
                <div class=\"row\">
                  <div class=\"col-md-5\"><strong>";
        // line 106
        yield ($context["text_compatibility"] ?? null);
        yield "</strong></div>
                  <div class=\"col-md-7 text-end\">";
        // line 107
        yield ($context["compatibility"] ?? null);
        yield "</div>
                </div>
                <hr>
                <div class=\"row\">
                  <div class=\"col-md-5\"><strong>";
        // line 111
        yield ($context["text_date_modified"] ?? null);
        yield "</strong></div>
                  <div class=\"col-md-7 text-end\">";
        // line 112
        yield ($context["date_modified"] ?? null);
        yield "</div>
                </div>
                <hr>
                <div class=\"row\">
                  <div class=\"col-md-5\"><strong>";
        // line 116
        yield ($context["text_date_added"] ?? null);
        yield "</strong></div>
                  <div class=\"col-md-7 text-end\">";
        // line 117
        yield ($context["date_added"] ?? null);
        yield "</div>
                </div>
              </div>
            </div>
            <div id=\"sales\" class=\"card mb-3\">
              <div class=\"card-body\"><i class=\"fa-solid fa-shopping-cart\"></i> <strong>";
        // line 122
        yield ($context["sales"] ?? null);
        yield "</strong> ";
        yield ($context["text_sales"] ?? null);
        yield "</div>
            </div>
            <div id=\"sales\" class=\"card mb-3\">
              <div class=\"card-body\"><i class=\"fa-solid fa-download\"></i> <strong>";
        // line 125
        yield ($context["downloaded"] ?? null);
        yield "</strong> ";
        yield ($context["text_downloaded"] ?? null);
        yield "</div>
            </div>
            <div class=\"card mb-3\">
              <div class=\"card-body\">
                <div class=\"media\">
                  <img src=\"";
        // line 130
        yield ($context["member_image"] ?? null);
        yield "\" alt=\"";
        yield ($context["member_username"] ?? null);
        yield "\" title=\"";
        yield ($context["member_username"] ?? null);
        yield "\" class=\"me-3 rounded-circle\">
                  <div class=\"media-body\">
                    <h5 class=\"mt-0\"><a href=\"";
        // line 132
        yield ($context["filter_member"] ?? null);
        yield "\">";
        yield ($context["member_username"] ?? null);
        yield "</a></h5>
                    <small>";
        // line 133
        yield ($context["text_member_since"] ?? null);
        yield " ";
        yield ($context["member_date_added"] ?? null);
        yield "</small>
                  </div>
                </div>
                <br/>
                <a href=\"";
        // line 137
        yield ($context["filter_member"] ?? null);
        yield "\" class=\"btn btn-primary btn-lg btn-block\">";
        yield ($context["button_view_all"] ?? null);
        yield "</a> <a href=\"https://www.opencart.com/index.php?route=support/seller&amp;extension_id=";
        yield ($context["extension_id"] ?? null);
        yield "\" target=\"_blank\" class=\"btn btn-outline-secondary btn-lg btn-block\">";
        yield ($context["button_support"] ?? null);
        yield "</a>
              </div>
            </div>
          </div>
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
        // line 151
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
\$('#button-buy').on('click', function(e) {
    e.preventDefault();

    \$('#modal-purchase').remove();

    html = '<div id=\"modal-purchase\" class=\"modal\">';
    html += '  <div class=\"modal-dialog\">';
    html += '    <div class=\"modal-content\">';
    html += '      <div class=\"modal-header\">';
    html += '        <h5 class=\"modal-title\">";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_purchase"] ?? null), "js");
        yield "</h5>';
    html += '        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
    html += '      </div>';
    html += '      <div class=\"modal-body\">';
    html += '        <p>";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_pin"] ?? null), "js");
        yield "</p>';
    html += '        <p>";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_secure"] ?? null), "js");
        yield "</p>';
    html += '        <div class=\"mb-3\">';
    html += '          <label for=\"input-pin\">";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_pin"] ?? null), "js");
        yield "</label>';
    html += '          <input type=\"password\" name=\"pin\" value=\"\" placeholder=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_pin"] ?? null), "js");
        yield "\" id=\"input-pin\" class=\"form-control\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3 text-end\">';
    html += '          <div class=\"text-end\"><a href=\"https://www.opencart.com/index.php?route=support/contact\" class=\"btn btn-light btn-lg\" target=\"_blank\">";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_forgot_pin"] ?? null), "js");
        yield "</a></div>';
    html += '          <button type=\"button\" id=\"button-purchase\" class=\"btn btn-primary btn-lg\">";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_purchase"] ?? null), "js");
        yield "</button>';
    html += '        </div>';
    html += '      </div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    \$('body').append(html);

    \$('#modal-purchase').modal('show');
});

\$('body').on('click', '#modal-purchase #button-purchase', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=marketplace/marketplace.purchase&user_token=";
        // line 210
        yield ($context["user_token"] ?? null);
        yield "&extension_id=";
        yield ($context["extension_id"] ?? null);
        yield "',
        type: 'post',
        data: \$('#input-pin'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#modal-purchase .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#modal-purchase').modal('hide');

                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#download').load('index.php?route=marketplace/marketplace.extension&user_token=";
        // line 232
        yield ($context["user_token"] ?? null);
        yield "&extension_id=";
        yield ($context["extension_id"] ?? null);
        yield "');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Download
\$('#download').load('index.php?route=marketplace/marketplace.extension&user_token=";
        // line 242
        yield ($context["user_token"] ?? null);
        yield "&extension_id=";
        yield ($context["extension_id"] ?? null);
        yield "');

\$('#tab-download').on('click', '.btn-primary', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).val(),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#download').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div></div>');
            }

            if (json['success']) {
                \$('#download').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#tab-download').on('click', '.dropdown-item', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#download').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div></div>');
            }

            if (json['success']) {
                \$('#download').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#download').load('index.php?route=marketplace/marketplace.extension&user_token=";
        // line 299
        yield ($context["user_token"] ?? null);
        yield "&extension_id=";
        yield ($context["extension_id"] ?? null);
        yield "');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Comment
\$('#comment').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#comment').load(this.href);
});

\$('#comment').load('index.php?route=marketplace/marketplace.comment&user_token=";
        // line 315
        yield ($context["user_token"] ?? null);
        yield "&extension_id=";
        yield ($context["extension_id"] ?? null);
        yield "');

// Add comment
\$('#button-comment').on('click', function() {
    \$.ajax({
        url: 'index.php?route=marketplace/marketplace.addComment&user_token=";
        // line 320
        yield ($context["user_token"] ?? null);
        yield "&extension_id=";
        yield ($context["extension_id"] ?? null);
        yield "',
        type: 'post',
        dataType: 'json',
        data: 'comment=' + encodeURIComponent(\$('#input-history-comment').val()),
        beforeSend: function() {
            \$('#button-comment').button('loading');
        },
        complete: function() {
            \$('#button-comment').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#comment').load('index.php?route=marketplace/marketplace.comment&user_token=";
        // line 340
        yield ($context["user_token"] ?? null);
        yield "&extension_id=";
        yield ($context["extension_id"] ?? null);
        yield "');

                \$('#input-history-comment').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Next replies
\$('#comment').on('click', '.btn-block', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'html',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(html) {
            \$(element).parent().parent().parent().append(html);

            \$(element).parent().remove();
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Reply
\$('#comment').on('click', '.btn-link', function(e) {
    e.preventDefault();

    \$(this).parent().parent().find('.reply-input-box').toggle();
});

// Add reply
\$('#comment').on('click', '.btn-primary', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        type: 'post',
        dataType: 'json',
        data: 'comment=' + encodeURIComponent(\$(element).parents('.reply-input-box').find('textarea[name=\\'comment\\']').val()),
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$(element).parents('.reply-input-box').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$(element).parents('.reply-input-box').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$(element).parents('.reply-input-box').parents('.media').find('.reply-refresh').last().trigger('click');

                \$(element).parents('.reply-input-box').find('textarea[name=\\'comment\\']').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Refresh
\$('#comment').on('click', '.reply-refresh', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'html',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(html) {
            \$(element).parent().replaceWith(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).ready(function() {
    \$('.thumbnails').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });
});
//--></script>
";
        // line 456
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "nladmin/view/template/marketplace/marketplace_info.twig";
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
        return array (  771 => 456,  650 => 340,  625 => 320,  615 => 315,  594 => 299,  532 => 242,  517 => 232,  490 => 210,  469 => 192,  465 => 191,  459 => 188,  455 => 187,  450 => 185,  446 => 184,  439 => 180,  407 => 151,  384 => 137,  375 => 133,  369 => 132,  360 => 130,  350 => 125,  342 => 122,  334 => 117,  330 => 116,  323 => 112,  319 => 111,  312 => 107,  308 => 106,  294 => 101,  290 => 99,  286 => 97,  283 => 96,  279 => 95,  275 => 94,  268 => 90,  264 => 89,  260 => 88,  254 => 84,  248 => 82,  242 => 80,  240 => 79,  236 => 78,  233 => 77,  227 => 75,  225 => 74,  213 => 65,  205 => 60,  199 => 57,  194 => 55,  185 => 49,  179 => 46,  175 => 45,  167 => 42,  163 => 41,  159 => 40,  155 => 39,  151 => 37,  136 => 35,  132 => 34,  129 => 33,  119 => 31,  117 => 30,  110 => 26,  107 => 25,  101 => 23,  99 => 22,  93 => 18,  82 => 16,  78 => 15,  73 => 13,  65 => 11,  59 => 9,  53 => 7,  51 => 6,  42 => 1,);
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
  <div id=\"marketplace-extension-info\" class=\"container-fluid\">
    {% if error_warning %}
      <div class=\"alert alert-danger\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ error_warning }}</div>
    {% endif %}
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-puzzle-piece\"></i> {{ name }}</div>
      <div class=\"card-body\">
        <div class=\"row extension-info\">
          <div class=\"col-md-8 col-lg-9\">
            {% if banner %}
              <div id=\"banner\" class=\"text-center img-thumbnail mb-3\"><img src=\"{{ banner }}\" title=\"{{ name }}\" alt=\"{{ name }}\" class=\"img-fluid\"/></div>
            {% endif %}
            <div class=\"row thumbnails\">
              {% for image in images %}
                <div class=\"col-4 col-md-3 col-lg-2 mb-3\"><a href=\"{{ image.popup }}\"><img src=\"{{ image.thumb }}\" alt=\"{{ image.name }}\" title=\"{{ image.name }}\" class=\"img-fluid img-thumbnail\"/></a></div>
              {% endfor %}
            </div>
            <ul class=\"nav nav-tabs\">
              <li class=\"nav-item\"><a href=\"#tab-description\" class=\"nav-link active\" data-bs-toggle=\"tab\">{{ tab_description }}</a></li>
              <li class=\"nav-item\"><a href=\"#tab-documentation\" class=\"nav-link\" data-bs-toggle=\"tab\">{{ tab_documentation }}</a></li>
              <li class=\"nav-item\"><a href=\"#tab-download\" class=\"nav-link\" data-bs-toggle=\"tab\">{{ tab_download }}</a></li>
              <li class=\"nav-item\"><a href=\"#tab-comment\" class=\"nav-link\" data-bs-toggle=\"tab\">{{ tab_comment }} ({{ comment_total }})</a></li>
            </ul>
            <div class=\"tab-content\">
              <div id=\"tab-description\" class=\"tab-pane fade show active\">{{ description }}</div>
              <div id=\"tab-documentation\" class=\"tab-pane fade\">{{ documentation }}</div>
              <div id=\"tab-download\" class=\"tab-pane fade\">
                <fieldset>
                  <legend>{{ text_available }}</legend>
                  <div id=\"download\"></div>
                </fieldset>
              </div>
              <div id=\"tab-comment\" class=\"tab-pane\">
                <fieldset>
                  <legend>{{ text_comment_add }}</legend>
                  <div class=\"mb-3\">
                    <textarea name=\"comment\" rows=\"5\" placeholder=\"{{ text_write }}\" id=\"input-history-comment\" class=\"form-control\"></textarea>
                  </div>
                  <div class=\"text-end\">
                    <button type=\"button\" id=\"button-comment\" class=\"btn btn-primary\">{{ button_comment }}</button>
                  </div>
                </fieldset>
                <br/>
                <fieldset>
                  <legend>{{ text_comment }}</legend>
                  <div id=\"comment\"></div>
                </fieldset>
              </div>
            </div>
          </div>
          <div class=\"col-md-4 col-lg-3\">
            <div id=\"buy\" class=\"card mb-3\">
              <div class=\"card-body\">
                {% if license == '1' and not purchased %}
                  <button type=\"button\" id=\"button-buy\" class=\"btn btn-success btn-lg btn-block\">{{ button_purchase }}</button>
                {% endif %}
                <div id=\"price\" class=\"row\">
                  <div class=\"col-lg-5\"><strong>{{ text_price }}</strong></div>
                  <div class=\"col-lg-7 text-end\">{% if license %}
                    {{ price }}
                    {% else %}
                      {{ text_free }}
                    {% endif %}
                  </div>
                </div>
                <hr>
                <ul class=\"list-check\">
                  <li>{{ text_partner }}</li>
                  <li>{{ text_support }}</li>
                  <li>{{ text_documentation }}</li>
                </ul>
                <hr>
                <div class=\"row\">
                  <div class=\"col-md-5\"><strong>{{ text_rating }}</strong></div>
                  <div class=\"col-md-7 text-end\">{% for i in 1..5 %}
                    {% if rating < i %}
                      <i class=\"fa-regular fa-star\"></i>
                    {% else %}
                      <i class=\"fa-solid fa-star\"></i>
                    {% endif %}
                    {% endfor %} ({{ rating_total }})
                  </div>
                </div>
                <hr>
                <div class=\"row\">
                  <div class=\"col-md-5\"><strong>{{ text_compatibility }}</strong></div>
                  <div class=\"col-md-7 text-end\">{{ compatibility }}</div>
                </div>
                <hr>
                <div class=\"row\">
                  <div class=\"col-md-5\"><strong>{{ text_date_modified }}</strong></div>
                  <div class=\"col-md-7 text-end\">{{ date_modified }}</div>
                </div>
                <hr>
                <div class=\"row\">
                  <div class=\"col-md-5\"><strong>{{ text_date_added }}</strong></div>
                  <div class=\"col-md-7 text-end\">{{ date_added }}</div>
                </div>
              </div>
            </div>
            <div id=\"sales\" class=\"card mb-3\">
              <div class=\"card-body\"><i class=\"fa-solid fa-shopping-cart\"></i> <strong>{{ sales }}</strong> {{ text_sales }}</div>
            </div>
            <div id=\"sales\" class=\"card mb-3\">
              <div class=\"card-body\"><i class=\"fa-solid fa-download\"></i> <strong>{{ downloaded }}</strong> {{ text_downloaded }}</div>
            </div>
            <div class=\"card mb-3\">
              <div class=\"card-body\">
                <div class=\"media\">
                  <img src=\"{{ member_image }}\" alt=\"{{ member_username }}\" title=\"{{ member_username }}\" class=\"me-3 rounded-circle\">
                  <div class=\"media-body\">
                    <h5 class=\"mt-0\"><a href=\"{{ filter_member }}\">{{ member_username }}</a></h5>
                    <small>{{ text_member_since }} {{ member_date_added }}</small>
                  </div>
                </div>
                <br/>
                <a href=\"{{ filter_member }}\" class=\"btn btn-primary btn-lg btn-block\">{{ button_view_all }}</a> <a href=\"https://www.opencart.com/index.php?route=support/seller&amp;extension_id={{ extension_id }}\" target=\"_blank\" class=\"btn btn-outline-secondary btn-lg btn-block\">{{ button_support }}</a>
              </div>
            </div>
          </div>
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
\$('#button-buy').on('click', function(e) {
    e.preventDefault();

    \$('#modal-purchase').remove();

    html = '<div id=\"modal-purchase\" class=\"modal\">';
    html += '  <div class=\"modal-dialog\">';
    html += '    <div class=\"modal-content\">';
    html += '      <div class=\"modal-header\">';
    html += '        <h5 class=\"modal-title\">{{ text_purchase|escape('js') }}</h5>';
    html += '        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
    html += '      </div>';
    html += '      <div class=\"modal-body\">';
    html += '        <p>{{ text_pin|escape('js') }}</p>';
    html += '        <p>{{ text_secure|escape('js') }}</p>';
    html += '        <div class=\"mb-3\">';
    html += '          <label for=\"input-pin\">{{ entry_pin|escape('js') }}</label>';
    html += '          <input type=\"password\" name=\"pin\" value=\"\" placeholder=\"{{ entry_pin|escape('js') }}\" id=\"input-pin\" class=\"form-control\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3 text-end\">';
    html += '          <div class=\"text-end\"><a href=\"https://www.opencart.com/index.php?route=support/contact\" class=\"btn btn-light btn-lg\" target=\"_blank\">{{ button_forgot_pin|escape('js') }}</a></div>';
    html += '          <button type=\"button\" id=\"button-purchase\" class=\"btn btn-primary btn-lg\">{{ button_purchase|escape('js') }}</button>';
    html += '        </div>';
    html += '      </div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    \$('body').append(html);

    \$('#modal-purchase').modal('show');
});

\$('body').on('click', '#modal-purchase #button-purchase', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: 'index.php?route=marketplace/marketplace.purchase&user_token={{ user_token }}&extension_id={{ extension_id }}',
        type: 'post',
        data: \$('#input-pin'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#modal-purchase .modal-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#modal-purchase').modal('hide');

                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#download').load('index.php?route=marketplace/marketplace.extension&user_token={{ user_token }}&extension_id={{ extension_id }}');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Download
\$('#download').load('index.php?route=marketplace/marketplace.extension&user_token={{ user_token }}&extension_id={{ extension_id }}');

\$('#tab-download').on('click', '.btn-primary', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).val(),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#download').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div></div>');
            }

            if (json['success']) {
                \$('#download').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#tab-download').on('click', '.dropdown-item', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'json',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#download').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div></div>');
            }

            if (json['success']) {
                \$('#download').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#download').load('index.php?route=marketplace/marketplace.extension&user_token={{ user_token }}&extension_id={{ extension_id }}');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Comment
\$('#comment').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#comment').load(this.href);
});

\$('#comment').load('index.php?route=marketplace/marketplace.comment&user_token={{ user_token }}&extension_id={{ extension_id }}');

// Add comment
\$('#button-comment').on('click', function() {
    \$.ajax({
        url: 'index.php?route=marketplace/marketplace.addComment&user_token={{ user_token }}&extension_id={{ extension_id }}',
        type: 'post',
        dataType: 'json',
        data: 'comment=' + encodeURIComponent(\$('#input-history-comment').val()),
        beforeSend: function() {
            \$('#button-comment').button('loading');
        },
        complete: function() {
            \$('#button-comment').button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$('#comment').load('index.php?route=marketplace/marketplace.comment&user_token={{ user_token }}&extension_id={{ extension_id }}');

                \$('#input-history-comment').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Next replies
\$('#comment').on('click', '.btn-block', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'html',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(html) {
            \$(element).parent().parent().parent().append(html);

            \$(element).parent().remove();
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Reply
\$('#comment').on('click', '.btn-link', function(e) {
    e.preventDefault();

    \$(this).parent().parent().find('.reply-input-box').toggle();
});

// Add reply
\$('#comment').on('click', '.btn-primary', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        type: 'post',
        dataType: 'json',
        data: 'comment=' + encodeURIComponent(\$(element).parents('.reply-input-box').find('textarea[name=\\'comment\\']').val()),
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(json) {
            \$('.alert-dismissible').remove();

            if (json['error']) {
                \$(element).parents('.reply-input-box').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
            }

            if (json['success']) {
                \$(element).parents('.reply-input-box').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                \$(element).parents('.reply-input-box').parents('.media').find('.reply-refresh').last().trigger('click');

                \$(element).parents('.reply-input-box').find('textarea[name=\\'comment\\']').val('');
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

// Refresh
\$('#comment').on('click', '.reply-refresh', function(e) {
    e.preventDefault();

    var element = this;

    \$.ajax({
        url: \$(element).attr('href'),
        dataType: 'html',
        beforeSend: function() {
            \$(element).button('loading');
        },
        complete: function() {
            \$(element).button('reset');
        },
        success: function(html) {
            \$(element).parent().replaceWith(html);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$(document).ready(function() {
    \$('.thumbnails').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });
});
//--></script>
{{ footer }}", "nladmin/view/template/marketplace/marketplace_info.twig", "/home/u925137283/domains/nlagro.com/public_html/nladmin/view/template/marketplace/marketplace_info.twig");
    }
}
