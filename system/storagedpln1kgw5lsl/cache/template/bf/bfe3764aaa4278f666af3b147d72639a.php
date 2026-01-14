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

/* catalog/view/template/common/header.twig */
class __TwigTemplate_9f25e727174f90a606ad8cf08dcc3613 extends Template
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
        yield "<!DOCTYPE html>
<html dir=\"";
        // line 2
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 7
        yield ($context["title"] ?? null);
        yield "</title>
  <base href=\"";
        // line 8
        yield ($context["base"] ?? null);
        yield "\"/>
  ";
        // line 9
        if (($context["description"] ?? null)) {
            // line 10
            yield "    <meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\"/>
  ";
        }
        // line 12
        yield "  ";
        if (($context["keywords"] ?? null)) {
            // line 13
            yield "    <meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\"/>
  ";
        }
        // line 15
        yield "
  <!-- Tailwind CSS CDN for 2026 Modern UI -->
  <script src=\"https://cdn.tailwindcss.com\"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'nnl-green': '#1B4332',
            'nnl-gold': '#D4AF37',
            'nnl-parchment': '#F4F1DE',
          }
        }
      }
    }
  </script>

  <script src=\"";
        // line 32
        yield ($context["jquery"] ?? null);
        yield "\" type=\"text/javascript\"></script>
  <link href=\"";
        // line 33
        yield ($context["bootstrap"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"";
        // line 34
        yield ($context["icons"] ?? null);
        yield "\" rel=\"stylesheet\" type=\"text/css\"/>
  <link href=\"";
        // line 35
        yield ($context["stylesheet"] ?? null);
        yield "\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"catalog/view/stylesheet/nnl_custom.css\" type=\"text/css\" rel=\"stylesheet\"/>
  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  <script src=\"catalog/view/javascript/nnl_ai_chat.js\" type=\"text/javascript\"></script>
  <script src=\"catalog/view/javascript/nnl_register_agent.js\" type=\"text/javascript\"></script>

  ";
        // line 41
        if (($context["icon"] ?? null)) {
            // line 42
            yield "    <link rel=\"icon\" href=\"";
            yield ($context["icon"] ?? null);
            yield "\" type=\"image/png\">
  ";
        }
        // line 44
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 45
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 45);
            yield "\" type=\"text/css\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 45);
            yield "\" media=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 45);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 48
            yield "    <script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 48);
            yield "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 51
            yield "    <link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 51);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 51);
            yield "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 54
            yield "    ";
            yield $context["analytic"];
            yield "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['analytic'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "</head>
<body class=\"bg-nnl-parchment\">
<div id=\"container\">
  <div id=\"alert\"></div>

  <!-- Top Navigation Bar -->
  <nav id=\"top\" class=\"bg-white/80 backdrop-blur-md border-b border-nnl-green/10 sticky top-0 z-50\">
    <div class=\"container mx-auto px-4\">
      <div class=\"flex justify-between items-center py-3\">
        <div class=\"flex items-center gap-4\">
          <ul class=\"list-inline flex gap-4\">
            <li class=\"list-inline-item\">";
        // line 67
        yield ($context["currency"] ?? null);
        yield "</li>
            <li class=\"list-inline-item\">";
        // line 68
        yield ($context["language"] ?? null);
        yield "</li>
          </ul>
        </div>
        <div class=\"flex items-center gap-4\">
          <ul class=\"list-inline flex gap-4\">
            <li class=\"list-inline-item\"><a href=\"";
        // line 73
        yield ($context["contact"] ?? null);
        yield "\" class=\"text-nnl-green hover:text-nnl-gold transition\"><i class=\"fa-solid fa-phone\"></i> <span class=\"hidden lg:inline\">";
        yield ($context["telephone"] ?? null);
        yield "</span></a></li>
            <li class=\"list-inline-item\">
              <div class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle text-nnl-green hover:text-nnl-gold transition\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-user\"></i> <span class=\"hidden lg:inline\">";
        // line 76
        yield ($context["text_account"] ?? null);
        yield "</span> <i class=\"fa-solid fa-caret-down\"></i></a>
                <ul class=\"dropdown-menu dropdown-menu-right\">
                  ";
        // line 78
        if ( !($context["logged"] ?? null)) {
            // line 79
            yield "                    <li><a href=\"";
            yield ($context["register"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_register"] ?? null);
            yield "</a></li>
                    <li><a href=\"";
            // line 80
            yield ($context["login"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_login"] ?? null);
            yield "</a></li>
                  ";
        } else {
            // line 82
            yield "                    <li><a href=\"";
            yield ($context["account"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_account"] ?? null);
            yield "</a></li>
                    <li><a href=\"";
            // line 83
            yield ($context["order"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_order"] ?? null);
            yield "</a></li>
                    <li><a href=\"";
            // line 84
            yield ($context["transaction"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_transaction"] ?? null);
            yield "</a></li>
                    <li><a href=\"";
            // line 85
            yield ($context["download"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_download"] ?? null);
            yield "</a></li>
                    <li><a href=\"";
            // line 86
            yield ($context["logout"] ?? null);
            yield "\" class=\"dropdown-item\">";
            yield ($context["text_logout"] ?? null);
            yield "</a></li>
                  ";
        }
        // line 88
        yield "                </ul>
              </div>
            </li>
            <li class=\"list-inline-item\"><a href=\"";
        // line 91
        yield ($context["wishlist"] ?? null);
        yield "\" id=\"wishlist-total\" class=\"text-nnl-green hover:text-nnl-gold transition\" title=\"";
        yield ($context["text_wishlist"] ?? null);
        yield "\"><i class=\"fa-solid fa-heart\"></i> <span class=\"hidden lg:inline\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</span></a></li>
            <li class=\"list-inline-item\"><a href=\"";
        // line 92
        yield ($context["shopping_cart"] ?? null);
        yield "\" class=\"text-nnl-green hover:text-nnl-gold transition\" title=\"";
        yield ($context["text_shopping_cart"] ?? null);
        yield "\"><i class=\"fa-solid fa-cart-shopping\"></i> <span class=\"hidden lg:inline\">";
        yield ($context["text_shopping_cart"] ?? null);
        yield "</span></a></li>
            <li class=\"list-inline-item\"><a href=\"";
        // line 93
        yield ($context["checkout"] ?? null);
        yield "\" class=\"text-nnl-green hover:text-nnl-gold transition\" title=\"";
        yield ($context["text_checkout"] ?? null);
        yield "\"><i class=\"fa-solid fa-share\"></i> <span class=\"hidden lg:inline\">";
        yield ($context["text_checkout"] ?? null);
        yield "</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main Header - NNL Branding -->
  <header class=\"bg-[#1B4332] text-white py-6 shadow-lg\">
    <div class=\"container mx-auto px-4\">
      <div class=\"flex flex-col md:flex-row items-center justify-between gap-4\">
        <div class=\"flex-1\">
          <div id=\"logo\" class=\"text-center md:text-left\">
            <h1 class=\"text-3xl md:text-4xl font-bold\">
              <a href=\"";
        // line 107
        yield ($context["home"] ?? null);
        yield "\" class=\"text-white hover:text-[#D4AF37] transition\">
                <span class=\"font-extrabold\">NNL: </span>
                <span style=\"color: #D4AF37;\">Namathu Natural Leader</span>
              </a>
            </h1>
            <p class=\"text-sm mt-1 opacity-90\">Direct from India's Farmers to Global Markets</p>
          </div>
        </div>
        <div class=\"flex-1 max-w-md w-full\">";
        // line 115
        yield ($context["search"] ?? null);
        yield "</div>
        <div id=\"cart\" class=\"flex-1 max-w-xs w-full\">";
        // line 116
        yield ($context["cart"] ?? null);
        yield "</div>
      </div>
    </div>
  </header>

  <main>
    ";
        // line 122
        yield ($context["menu"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/header.twig";
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
        return array (  342 => 122,  333 => 116,  329 => 115,  318 => 107,  297 => 93,  289 => 92,  281 => 91,  276 => 88,  269 => 86,  263 => 85,  257 => 84,  251 => 83,  244 => 82,  237 => 80,  230 => 79,  228 => 78,  223 => 76,  215 => 73,  207 => 68,  203 => 67,  190 => 56,  181 => 54,  176 => 53,  165 => 51,  160 => 50,  151 => 48,  146 => 47,  133 => 45,  128 => 44,  122 => 42,  120 => 41,  111 => 35,  107 => 34,  103 => 33,  99 => 32,  80 => 15,  74 => 13,  71 => 12,  65 => 10,  63 => 9,  59 => 8,  55 => 7,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>{{ title }}</title>
  <base href=\"{{ base }}\"/>
  {% if description %}
    <meta name=\"description\" content=\"{{ description }}\"/>
  {% endif %}
  {% if keywords %}
    <meta name=\"keywords\" content=\"{{ keywords }}\"/>
  {% endif %}

  <!-- Tailwind CSS CDN for 2026 Modern UI -->
  <script src=\"https://cdn.tailwindcss.com\"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'nnl-green': '#1B4332',
            'nnl-gold': '#D4AF37',
            'nnl-parchment': '#F4F1DE',
          }
        }
      }
    }
  </script>

  <script src=\"{{ jquery }}\" type=\"text/javascript\"></script>
  <link href=\"{{ bootstrap }}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"{{ icons }}\" rel=\"stylesheet\" type=\"text/css\"/>
  <link href=\"{{ stylesheet }}\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"catalog/view/stylesheet/nnl_custom.css\" type=\"text/css\" rel=\"stylesheet\"/>
  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  <script src=\"catalog/view/javascript/nnl_ai_chat.js\" type=\"text/javascript\"></script>
  <script src=\"catalog/view/javascript/nnl_register_agent.js\" type=\"text/javascript\"></script>

  {% if icon %}
    <link rel=\"icon\" href=\"{{ icon }}\" type=\"image/png\">
  {% endif %}
  {% for style in styles %}
    <link href=\"{{ style.href }}\" type=\"text/css\" rel=\"{{ style.rel }}\" media=\"{{ style.media }}\"/>
  {% endfor %}
  {% for script in scripts %}
    <script src=\"{{ script.href }}\" type=\"text/javascript\"></script>
  {% endfor %}
  {% for link in links %}
    <link href=\"{{ link.href }}\" rel=\"{{ link.rel }}\"/>
  {% endfor %}
  {% for analytic in analytics %}
    {{ analytic }}
  {% endfor %}
</head>
<body class=\"bg-nnl-parchment\">
<div id=\"container\">
  <div id=\"alert\"></div>

  <!-- Top Navigation Bar -->
  <nav id=\"top\" class=\"bg-white/80 backdrop-blur-md border-b border-nnl-green/10 sticky top-0 z-50\">
    <div class=\"container mx-auto px-4\">
      <div class=\"flex justify-between items-center py-3\">
        <div class=\"flex items-center gap-4\">
          <ul class=\"list-inline flex gap-4\">
            <li class=\"list-inline-item\">{{ currency }}</li>
            <li class=\"list-inline-item\">{{ language }}</li>
          </ul>
        </div>
        <div class=\"flex items-center gap-4\">
          <ul class=\"list-inline flex gap-4\">
            <li class=\"list-inline-item\"><a href=\"{{ contact }}\" class=\"text-nnl-green hover:text-nnl-gold transition\"><i class=\"fa-solid fa-phone\"></i> <span class=\"hidden lg:inline\">{{ telephone }}</span></a></li>
            <li class=\"list-inline-item\">
              <div class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle text-nnl-green hover:text-nnl-gold transition\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-user\"></i> <span class=\"hidden lg:inline\">{{ text_account }}</span> <i class=\"fa-solid fa-caret-down\"></i></a>
                <ul class=\"dropdown-menu dropdown-menu-right\">
                  {% if not logged %}
                    <li><a href=\"{{ register }}\" class=\"dropdown-item\">{{ text_register }}</a></li>
                    <li><a href=\"{{ login }}\" class=\"dropdown-item\">{{ text_login }}</a></li>
                  {% else %}
                    <li><a href=\"{{ account }}\" class=\"dropdown-item\">{{ text_account }}</a></li>
                    <li><a href=\"{{ order }}\" class=\"dropdown-item\">{{ text_order }}</a></li>
                    <li><a href=\"{{ transaction }}\" class=\"dropdown-item\">{{ text_transaction }}</a></li>
                    <li><a href=\"{{ download }}\" class=\"dropdown-item\">{{ text_download }}</a></li>
                    <li><a href=\"{{ logout }}\" class=\"dropdown-item\">{{ text_logout }}</a></li>
                  {% endif %}
                </ul>
              </div>
            </li>
            <li class=\"list-inline-item\"><a href=\"{{ wishlist }}\" id=\"wishlist-total\" class=\"text-nnl-green hover:text-nnl-gold transition\" title=\"{{ text_wishlist }}\"><i class=\"fa-solid fa-heart\"></i> <span class=\"hidden lg:inline\">{{ text_wishlist }}</span></a></li>
            <li class=\"list-inline-item\"><a href=\"{{ shopping_cart }}\" class=\"text-nnl-green hover:text-nnl-gold transition\" title=\"{{ text_shopping_cart }}\"><i class=\"fa-solid fa-cart-shopping\"></i> <span class=\"hidden lg:inline\">{{ text_shopping_cart }}</span></a></li>
            <li class=\"list-inline-item\"><a href=\"{{ checkout }}\" class=\"text-nnl-green hover:text-nnl-gold transition\" title=\"{{ text_checkout }}\"><i class=\"fa-solid fa-share\"></i> <span class=\"hidden lg:inline\">{{ text_checkout }}</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main Header - NNL Branding -->
  <header class=\"bg-[#1B4332] text-white py-6 shadow-lg\">
    <div class=\"container mx-auto px-4\">
      <div class=\"flex flex-col md:flex-row items-center justify-between gap-4\">
        <div class=\"flex-1\">
          <div id=\"logo\" class=\"text-center md:text-left\">
            <h1 class=\"text-3xl md:text-4xl font-bold\">
              <a href=\"{{ home }}\" class=\"text-white hover:text-[#D4AF37] transition\">
                <span class=\"font-extrabold\">NNL: </span>
                <span style=\"color: #D4AF37;\">Namathu Natural Leader</span>
              </a>
            </h1>
            <p class=\"text-sm mt-1 opacity-90\">Direct from India's Farmers to Global Markets</p>
          </div>
        </div>
        <div class=\"flex-1 max-w-md w-full\">{{ search }}</div>
        <div id=\"cart\" class=\"flex-1 max-w-xs w-full\">{{ cart }}</div>
      </div>
    </div>
  </header>

  <main>
    {{ menu }}
", "catalog/view/template/common/header.twig", "/home/u925137283/domains/nlagro.com/public_html/catalog/view/template/common/header.twig");
    }
}
