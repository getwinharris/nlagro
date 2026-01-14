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

/* y5ho0zhjsuboyo5s/view/template/common/filemanager.twig */
class __TwigTemplate_9bcb501100bd9d55f3ce9b07f05c8a8e extends Template
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
        yield "<div id=\"modal-image\" class=\"modal\">
  <div id=\"filemanager\" class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 5
        yield ($context["heading_title"] ?? null);
        yield "</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\"></div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('#modal-image .modal-body').load('index.php?route=common/filemanager.list&user_token=";
        // line 12
        yield ($context["user_token"] ?? null);
        yield "');

  \$('#modal-image').on('click', '#button-parent', function(e) {
      e.preventDefault();

      \$('#modal-image .modal-body').load(\$(this).attr('href'));
  });

  \$('#modal-image').on('click', '#button-refresh', function(e) {
      e.preventDefault();

      \$('#modal-image .modal-body').load(\$(this).attr('href'));
  });

  \$('#modal-image').on('keydown', '#input-search', function(e) {
      if (e.which == 13) {
          \$('#button-search').trigger('click');
      }
  });

  \$('#modal-image').on('click', '#button-search', function(e) {
      var url = 'index.php?route=common/filemanager.list&user_token=";
        // line 33
        yield ($context["user_token"] ?? null);
        yield "';

      var directory = \$('#input-directory').val();

      if (directory) {
          url += '&directory=' + encodeURIComponent(directory);
      }

      var filter_name = \$('#input-search').val();

      if (filter_name) {
          url += '&filter_name=' + encodeURIComponent(filter_name);
      }

    ";
        // line 47
        if (($context["thumb"] ?? null)) {
            // line 48
            yield "      url += '&thumb=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["thumb"] ?? null), "js");
            yield "';
    ";
        }
        // line 50
        yield "
    ";
        // line 51
        if (($context["target"] ?? null)) {
            // line 52
            yield "      url += '&target=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["target"] ?? null), "js");
            yield "';
    ";
        }
        // line 54
        yield "
    ";
        // line 55
        if (($context["ckeditor"] ?? null)) {
            // line 56
            yield "      url += '&ckeditor=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ckeditor"] ?? null), "js");
            yield "';
    ";
        }
        // line 58
        yield "
      \$('#modal-image .modal-body').load(url);
  });

  \$('#modal-image').on('click', '#button-upload', function() {
      \$('#form-upload').remove();

      \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file[]\" value=\"\" multiple=\"multiple\"/></form>');

      \$('#form-upload input[name=\\'file[]\\']').trigger('click');

      \$('#form-upload input[name=\\'file[]\\']').on('change', function() {
          for (i = 0; i < this.files.length; i++) {
              if ((this.files[0].size / 1024) > ";
        // line 71
        yield ($context["config_file_max_size"] ?? null);
        yield ") {
                  \$(this).val('');

                  alert('";
        // line 74
        yield ($context["error_upload_size"] ?? null);
        yield "');
              }
          }
      });

      if (typeof timer != 'undefined') {
          clearInterval(timer);
      }

      timer = setInterval(function() {
          if (\$('#form-upload input[name=\\'file[]\\']').val() !== '') {
              clearInterval(timer);

              var url = 'index.php?route=common/filemanager.upload&user_token=";
        // line 87
        yield ($context["user_token"] ?? null);
        yield "';

              var directory = \$('#input-directory').val();

              if (directory) {
                  url += '&directory=' + encodeURIComponent(directory);
              }

              \$.ajax({
                  url: url,
                  type: 'post',
                  dataType: 'json',
                  data: new FormData(\$('#form-upload')[0]),
                  cache: false,
                  contentType: false,
                  processData: false,
                  beforeSend: function() {
                      \$('#button-upload').button('loading');
                  },
                  complete: function() {
                      \$('#button-upload').button('reset');
                  },
                  success: function(json) {
                      console.log(json);

                      if (json['error']) {
                          alert(json['error']);
                      }

                      if (json['success']) {
                          alert(json['success']);

                          \$('#button-refresh').trigger('click');
                      }
                  },
                  error: function(xhr, ajaxOptions, thrownError) {
                      console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                  }
              });
          }
      }, 500);
  });

  \$('#modal-image').on('click', '#button-folder', function() {
      \$('#modal-folder').slideToggle();
  });

  \$('#modal-image').on('click', '#button-create', function() {
      var url = 'index.php?route=common/filemanager.folder&user_token=";
        // line 135
        yield ($context["user_token"] ?? null);
        yield "';

      var directory = \$('#input-directory').val();

      if (directory) {
          url += '&directory=' + encodeURIComponent(directory);
      }

      \$.ajax({
          url: url,
          type: 'post',
          dataType: 'json',
          data: 'folder=' + encodeURIComponent(\$('#input-folder').val()),
          beforeSend: function() {
              \$('#button-create').button('loading');
          },
          complete: function() {
              \$('#button-create').button('reset');
          },
          success: function(json) {
              console.log(json);

              if (json['error']) {
                  alert(json['error']);
              }

              if (json['success']) {
                  alert(json['success']);

                  \$('#button-refresh').trigger('click');
              }
          },
          error: function(xhr, ajaxOptions, thrownError) {
              console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('#modal-image').on('click', '#button-delete', function(e) {
      if (confirm('";
        // line 174
        yield ($context["text_confirm"] ?? null);
        yield "')) {
          \$.ajax({
              url: 'index.php?route=common/filemanager.delete&user_token=";
        // line 176
        yield ($context["user_token"] ?? null);
        yield "',
              type: 'post',
              dataType: 'json',
              data: \$('input[name^=\\'path\\']:checked'),
              beforeSend: function() {
                  \$('#button-delete').button('loading');
              },
              complete: function() {
                  \$('#button-delete').button('reset');
              },
              success: function(json) {
                  console.log(json);

                  if (json['error']) {
                      alert(json['error']);
                  }

                  if (json['success']) {
                      alert(json['success']);

                      \$('#button-refresh').trigger('click');
                  }
              },
              error: function(xhr, ajaxOptions, thrownError) {
                  console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
              }
          });
      }
  });

  \$('#modal-image').on('click', 'a.directory', function(e) {
      e.preventDefault();

      \$('#modal-image .modal-body').load(\$(this).attr('href'));
  });

  \$('#modal-image').on('click', 'a.thumbnail', function(e) {
      e.preventDefault();

    ";
        // line 215
        if (($context["thumb"] ?? null)) {
            // line 216
            yield "      \$('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["thumb"] ?? null), "js");
            yield "').attr('src', \$(this).find('img').attr('src'));

      \$('";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["target"] ?? null), "js");
            yield "').val('catalog/' + \$(this).parent().parent().find('input').val());
    ";
        }
        // line 220
        yield "
    ";
        // line 221
        if (($context["ckeditor"] ?? null)) {
            // line 222
            yield "      CKEDITOR.instances['";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["ckeditor"] ?? null), "js");
            yield "'].insertHtml('<img src=\"' + \$(this).attr('href') + '\" alt=\"\" title=\"\"/>');
    ";
        }
        // line 224
        yield "
      \$('#modal-image').modal('hide');
  });

  \$('#modal-image').on('click', '.pagination a', function(e) {
      e.preventDefault();

      \$('#modal-image .modal-body').load(\$(this).attr('href'));
  });
  //--></script>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "y5ho0zhjsuboyo5s/view/template/common/filemanager.twig";
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
        return array (  330 => 224,  324 => 222,  322 => 221,  319 => 220,  314 => 218,  308 => 216,  306 => 215,  264 => 176,  259 => 174,  217 => 135,  166 => 87,  150 => 74,  144 => 71,  129 => 58,  123 => 56,  121 => 55,  118 => 54,  112 => 52,  110 => 51,  107 => 50,  101 => 48,  99 => 47,  82 => 33,  58 => 12,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"modal-image\" class=\"modal\">
  <div id=\"filemanager\" class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">{{ heading_title }}</h5>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
      </div>
      <div class=\"modal-body\"></div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('#modal-image .modal-body').load('index.php?route=common/filemanager.list&user_token={{ user_token }}');

  \$('#modal-image').on('click', '#button-parent', function(e) {
      e.preventDefault();

      \$('#modal-image .modal-body').load(\$(this).attr('href'));
  });

  \$('#modal-image').on('click', '#button-refresh', function(e) {
      e.preventDefault();

      \$('#modal-image .modal-body').load(\$(this).attr('href'));
  });

  \$('#modal-image').on('keydown', '#input-search', function(e) {
      if (e.which == 13) {
          \$('#button-search').trigger('click');
      }
  });

  \$('#modal-image').on('click', '#button-search', function(e) {
      var url = 'index.php?route=common/filemanager.list&user_token={{ user_token }}';

      var directory = \$('#input-directory').val();

      if (directory) {
          url += '&directory=' + encodeURIComponent(directory);
      }

      var filter_name = \$('#input-search').val();

      if (filter_name) {
          url += '&filter_name=' + encodeURIComponent(filter_name);
      }

    {% if thumb %}
      url += '&thumb={{ thumb|escape('js') }}';
    {% endif %}

    {% if target %}
      url += '&target={{ target|escape('js') }}';
    {% endif %}

    {% if ckeditor %}
      url += '&ckeditor={{ ckeditor|escape('js') }}';
    {% endif %}

      \$('#modal-image .modal-body').load(url);
  });

  \$('#modal-image').on('click', '#button-upload', function() {
      \$('#form-upload').remove();

      \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file[]\" value=\"\" multiple=\"multiple\"/></form>');

      \$('#form-upload input[name=\\'file[]\\']').trigger('click');

      \$('#form-upload input[name=\\'file[]\\']').on('change', function() {
          for (i = 0; i < this.files.length; i++) {
              if ((this.files[0].size / 1024) > {{ config_file_max_size }}) {
                  \$(this).val('');

                  alert('{{ error_upload_size }}');
              }
          }
      });

      if (typeof timer != 'undefined') {
          clearInterval(timer);
      }

      timer = setInterval(function() {
          if (\$('#form-upload input[name=\\'file[]\\']').val() !== '') {
              clearInterval(timer);

              var url = 'index.php?route=common/filemanager.upload&user_token={{ user_token }}';

              var directory = \$('#input-directory').val();

              if (directory) {
                  url += '&directory=' + encodeURIComponent(directory);
              }

              \$.ajax({
                  url: url,
                  type: 'post',
                  dataType: 'json',
                  data: new FormData(\$('#form-upload')[0]),
                  cache: false,
                  contentType: false,
                  processData: false,
                  beforeSend: function() {
                      \$('#button-upload').button('loading');
                  },
                  complete: function() {
                      \$('#button-upload').button('reset');
                  },
                  success: function(json) {
                      console.log(json);

                      if (json['error']) {
                          alert(json['error']);
                      }

                      if (json['success']) {
                          alert(json['success']);

                          \$('#button-refresh').trigger('click');
                      }
                  },
                  error: function(xhr, ajaxOptions, thrownError) {
                      console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                  }
              });
          }
      }, 500);
  });

  \$('#modal-image').on('click', '#button-folder', function() {
      \$('#modal-folder').slideToggle();
  });

  \$('#modal-image').on('click', '#button-create', function() {
      var url = 'index.php?route=common/filemanager.folder&user_token={{ user_token }}';

      var directory = \$('#input-directory').val();

      if (directory) {
          url += '&directory=' + encodeURIComponent(directory);
      }

      \$.ajax({
          url: url,
          type: 'post',
          dataType: 'json',
          data: 'folder=' + encodeURIComponent(\$('#input-folder').val()),
          beforeSend: function() {
              \$('#button-create').button('loading');
          },
          complete: function() {
              \$('#button-create').button('reset');
          },
          success: function(json) {
              console.log(json);

              if (json['error']) {
                  alert(json['error']);
              }

              if (json['success']) {
                  alert(json['success']);

                  \$('#button-refresh').trigger('click');
              }
          },
          error: function(xhr, ajaxOptions, thrownError) {
              console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
  });

  \$('#modal-image').on('click', '#button-delete', function(e) {
      if (confirm('{{ text_confirm }}')) {
          \$.ajax({
              url: 'index.php?route=common/filemanager.delete&user_token={{ user_token }}',
              type: 'post',
              dataType: 'json',
              data: \$('input[name^=\\'path\\']:checked'),
              beforeSend: function() {
                  \$('#button-delete').button('loading');
              },
              complete: function() {
                  \$('#button-delete').button('reset');
              },
              success: function(json) {
                  console.log(json);

                  if (json['error']) {
                      alert(json['error']);
                  }

                  if (json['success']) {
                      alert(json['success']);

                      \$('#button-refresh').trigger('click');
                  }
              },
              error: function(xhr, ajaxOptions, thrownError) {
                  console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
              }
          });
      }
  });

  \$('#modal-image').on('click', 'a.directory', function(e) {
      e.preventDefault();

      \$('#modal-image .modal-body').load(\$(this).attr('href'));
  });

  \$('#modal-image').on('click', 'a.thumbnail', function(e) {
      e.preventDefault();

    {% if thumb %}
      \$('{{ thumb|escape('js') }}').attr('src', \$(this).find('img').attr('src'));

      \$('{{ target|escape('js') }}').val('catalog/' + \$(this).parent().parent().find('input').val());
    {% endif %}

    {% if ckeditor %}
      CKEDITOR.instances['{{ ckeditor|escape('js') }}'].insertHtml('<img src=\"' + \$(this).attr('href') + '\" alt=\"\" title=\"\"/>');
    {% endif %}

      \$('#modal-image').modal('hide');
  });

  \$('#modal-image').on('click', '.pagination a', function(e) {
      e.preventDefault();

      \$('#modal-image .modal-body').load(\$(this).attr('href'));
  });
  //--></script>
</div>", "y5ho0zhjsuboyo5s/view/template/common/filemanager.twig", "/home/u925137283/domains/nlagro.com/public_html/y5ho0zhjsuboyo5s/view/template/common/filemanager.twig");
    }
}
