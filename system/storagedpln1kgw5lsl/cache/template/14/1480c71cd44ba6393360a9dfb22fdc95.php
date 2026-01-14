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

/* nladmin/view/template/marketplace/marketplace_comment.twig */
class __TwigTemplate_1e1738883a1afb9b5b5bb5b984eac485 extends Template
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
        if (($context["comments"] ?? null)) {
            // line 2
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 3
                yield "    <div id=\"comment-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "extension_comment_id", [], "any", false, false, false, 3);
                yield "\" class=\"media\">
      <img src=\"";
                // line 4
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "image", [], "any", false, false, false, 4);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "member", [], "any", false, false, false, 4);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "member", [], "any", false, false, false, 4);
                yield "\" class=\"me-3 rounded-circle\"/>
      <div class=\"media-body\">
        <h5 class=\"mt-0\">";
                // line 6
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "member", [], "any", false, false, false, 6);
                yield " <span>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "date_added", [], "any", false, false, false, 6);
                yield "</span></h5>
        <p>";
                // line 7
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 7);
                yield "</p>
        <div class=\"reply\">
          <div>
            ";
                // line 10
                if (CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "reply", [], "any", false, false, false, 10)) {
                    // line 11
                    yield "              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "reply", [], "any", false, false, false, 11));
                    foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                        // line 12
                        yield "                <div class=\"media\">
                  <img src=\"";
                        // line 13
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "image", [], "any", false, false, false, 13);
                        yield "\" alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "member", [], "any", false, false, false, 13);
                        yield "\" title=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "member", [], "any", false, false, false, 13);
                        yield "\" class=\"me-3 rounded-circle\"/>
                  <div class=\"media-body\">
                    <h5 class=\"mt-0\">";
                        // line 15
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "member", [], "any", false, false, false, 15);
                        yield " <span>";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "date_added", [], "any", false, false, false, 15);
                        yield "</h5>
                    <p>";
                        // line 16
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "comment", [], "any", false, false, false, 16);
                        yield "</p>
                  </div>
                </div>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['reply'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    yield "              ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "next", [], "any", false, false, false, 20)) {
                        // line 21
                        yield "                <div class=\"text-center\"><a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "next", [], "any", false, false, false, 21);
                        yield "\" class=\"btn btn-block\">";
                        yield ($context["text_more"] ?? null);
                        yield "</a></div>
              ";
                    }
                    // line 23
                    yield "            ";
                }
                yield "<a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "refresh", [], "any", false, false, false, 23);
                yield "\" class=\"reply-refresh hide\">";
                yield ($context["text_refresh"] ?? null);
                yield "</a>
          </div>
        </div>
        <p class=\"text-end\">
          <button type=\"button\" class=\"btn btn-link btn-sm\">";
                // line 27
                yield ($context["button_reply"] ?? null);
                yield "</button>
        </p>
        <div class=\"reply-input-box\" style=\"display: none;\">
          <div class=\"media\">
            <div class=\"media-body\">
              <div class=\"mb-3\">
                <label for=\"input-comment-";
                // line 33
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "extension_comment_id", [], "any", false, false, false, 33);
                yield "\">";
                yield ($context["text_comment_add"] ?? null);
                yield "</label> <textarea name=\"comment\" placeholder=\"";
                yield ($context["text_write"] ?? null);
                yield "\" id=\"input-comment-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "extension_comment_id", [], "any", false, false, false, 33);
                yield "\" class=\"form-control\"></textarea>
              </div>
              <div class=\"text-end\"><a href=\"";
                // line 35
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "add", [], "any", false, false, false, 35);
                yield "\" class=\"btn btn-primary btn-sm\">";
                yield ($context["button_comment"] ?? null);
                yield "</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "  <br/>
  <div class=\"text-center\">";
            // line 43
            yield ($context["pagination"] ?? null);
            yield "</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "nladmin/view/template/marketplace/marketplace_comment.twig";
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
        return array (  171 => 43,  168 => 42,  153 => 35,  142 => 33,  133 => 27,  121 => 23,  113 => 21,  110 => 20,  100 => 16,  94 => 15,  85 => 13,  82 => 12,  77 => 11,  75 => 10,  69 => 7,  63 => 6,  54 => 4,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if comments %}
  {% for comment in comments %}
    <div id=\"comment-{{ comment.extension_comment_id }}\" class=\"media\">
      <img src=\"{{ comment.image }}\" alt=\"{{ comment.member }}\" title=\"{{ comment.member }}\" class=\"me-3 rounded-circle\"/>
      <div class=\"media-body\">
        <h5 class=\"mt-0\">{{ comment.member }} <span>{{ comment.date_added }}</span></h5>
        <p>{{ comment.comment }}</p>
        <div class=\"reply\">
          <div>
            {% if comment.reply %}
              {% for reply in comment.reply %}
                <div class=\"media\">
                  <img src=\"{{ reply.image }}\" alt=\"{{ reply.member }}\" title=\"{{ reply.member }}\" class=\"me-3 rounded-circle\"/>
                  <div class=\"media-body\">
                    <h5 class=\"mt-0\">{{ reply.member }} <span>{{ reply.date_added }}</h5>
                    <p>{{ reply.comment }}</p>
                  </div>
                </div>
              {% endfor %}
              {% if comment.next %}
                <div class=\"text-center\"><a href=\"{{ comment.next }}\" class=\"btn btn-block\">{{ text_more }}</a></div>
              {% endif %}
            {% endif %}<a href=\"{{ comment.refresh }}\" class=\"reply-refresh hide\">{{ text_refresh }}</a>
          </div>
        </div>
        <p class=\"text-end\">
          <button type=\"button\" class=\"btn btn-link btn-sm\">{{ button_reply }}</button>
        </p>
        <div class=\"reply-input-box\" style=\"display: none;\">
          <div class=\"media\">
            <div class=\"media-body\">
              <div class=\"mb-3\">
                <label for=\"input-comment-{{ comment.extension_comment_id }}\">{{ text_comment_add }}</label> <textarea name=\"comment\" placeholder=\"{{ text_write }}\" id=\"input-comment-{{ comment.extension_comment_id }}\" class=\"form-control\"></textarea>
              </div>
              <div class=\"text-end\"><a href=\"{{ comment.add }}\" class=\"btn btn-primary btn-sm\">{{ button_comment }}</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  {% endfor %}
  <br/>
  <div class=\"text-center\">{{ pagination }}</div>
{% endif %}", "nladmin/view/template/marketplace/marketplace_comment.twig", "/home/u925137283/domains/nlagro.com/public_html/nladmin/view/template/marketplace/marketplace_comment.twig");
    }
}
