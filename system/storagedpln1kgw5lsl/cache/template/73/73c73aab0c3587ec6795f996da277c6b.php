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

/* catalog/view/template/common/footer.twig */
class __TwigTemplate_95637909120eeab54dae67076963cf66 extends Template
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
        yield "</main>

<!-- NNL Footer - Dark Forest Green Design -->
<footer class=\"bg-nnl-green text-white mt-16\">
  <div class=\"container mx-auto px-4 py-12\">
    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
      <!-- Corporate Farming (NNL) -->
      <div>
        <h5 class=\"text-xl font-bold mb-4 text-nnl-gold\">Corporate Farming (NNL)</h5>
        <p class=\"text-gray-300 mb-4\">Connecting Indian farmers and small manufacturers directly to global markets through sustainable, transparent supply chains.</p>
        <ul class=\"list-unstyled space-y-2\">
          <li><a href=\"";
        // line 12
        yield ($context["contact"] ?? null);
        yield "\" class=\"text-gray-300 hover:text-nnl-gold transition\">";
        yield ($context["text_contact"] ?? null);
        yield "</a></li>
          ";
        // line 13
        if (($context["informations"] ?? null)) {
            // line 14
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 15
                yield "              <li><a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 15);
                yield "\" class=\"text-gray-300 hover:text-nnl-gold transition\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 15);
                yield "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "          ";
        }
        // line 18
        yield "        </ul>
      </div>

      <!-- Global Export Partners -->
      <div>
        <h5 class=\"text-xl font-bold mb-4 text-nnl-gold\">Global Export Partners</h5>
        <p class=\"text-gray-300 mb-4\">Serving markets in US, Canada, and Gulf regions with premium organic products.</p>
        <ul class=\"list-unstyled space-y-2\">
          <li><a href=\"";
        // line 26
        yield ($context["manufacturer"] ?? null);
        yield "\" class=\"text-gray-300 hover:text-nnl-gold transition\">";
        yield ($context["text_manufacturer"] ?? null);
        yield "</a></li>
          ";
        // line 27
        if (($context["affiliate"] ?? null)) {
            // line 28
            yield "            <li><a href=\"";
            yield ($context["affiliate"] ?? null);
            yield "\" class=\"text-gray-300 hover:text-nnl-gold transition\">";
            yield ($context["text_affiliate"] ?? null);
            yield "</a></li>
          ";
        }
        // line 30
        yield "          <li><a href=\"";
        yield ($context["special"] ?? null);
        yield "\" class=\"text-gray-300 hover:text-nnl-gold transition\">";
        yield ($context["text_special"] ?? null);
        yield "</a></li>
          ";
        // line 31
        if (($context["blog"] ?? null)) {
            // line 32
            yield "            <li><a href=\"";
            yield ($context["blog"] ?? null);
            yield "\" class=\"text-gray-300 hover:text-nnl-gold transition\">";
            yield ($context["text_blog"] ?? null);
            yield "</a></li>
          ";
        }
        // line 34
        yield "        </ul>
      </div>

      <!-- Venture Capital Bonds -->
      <div>
        <h5 class=\"text-xl font-bold mb-4 text-nnl-gold\">Venture Capital Bonds</h5>
        <p class=\"text-gray-300 mb-4\">Invest in Share-Base Bonds and support sustainable farming while earning returns from global export margins.</p>
        <ul class=\"list-unstyled space-y-2\">
          <li><a href=\"";
        // line 42
        yield ($context["account"] ?? null);
        yield "\" class=\"text-gray-300 hover:text-nnl-gold transition\">";
        yield ($context["text_account"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 43
        yield ($context["order"] ?? null);
        yield "\" class=\"text-gray-300 hover:text-nnl-gold transition\">";
        yield ($context["text_order"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 44
        yield ($context["wishlist"] ?? null);
        yield "\" class=\"text-gray-300 hover:text-nnl-gold transition\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</a></li>
          <li><a href=\"";
        // line 45
        yield ($context["newsletter"] ?? null);
        yield "\" class=\"text-gray-300 hover:text-nnl-gold transition\">";
        yield ($context["text_newsletter"] ?? null);
        yield "</a></li>
        </ul>
      </div>
    </div>

    <hr class=\"border-nnl-gold/30 my-8\">

    <div class=\"text-center text-gray-400 text-sm\">
      <p>&copy; ";
        // line 53
        yield $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y");
        yield " Namathu Natural Leader (NNL). All rights reserved.</p>
      <p class=\"mt-2\">Empowering Indian Farmers • Connecting Global Markets</p>
      ";
        // line 56
        yield "    </div>
  </div>
</footer>

<!-- Floating Action Button for AI Assistant (Mobile) -->
<div id=\"nnl-ai-fab\" class=\"fixed bottom-6 right-6 z-50 md:hidden\">
  <button onclick=\"toggleAIChat()\" class=\"bg-nnl-gold hover:bg-[#b8941f] text-white rounded-full w-16 h-16 shadow-2xl flex items-center justify-center transition-transform hover:scale-110\">
    <i class=\"fa-solid fa-robot text-2xl\"></i>
  </button>
</div>

<!-- AI Chat Widget -->
<div id=\"nnl-ai-chat\" class=\"hidden fixed bottom-24 right-6 z-50 w-80 h-96 bg-white rounded-3xl shadow-2xl border-2 border-nnl-gold flex flex-col\">
  <div class=\"bg-nnl-green text-white p-4 rounded-t-3xl flex justify-between items-center\">
    <h3 class=\"font-bold\">NNL Organic Leader</h3>
    <button onclick=\"toggleAIChat()\" class=\"text-white hover:text-nnl-gold\">✕</button>
  </div>
  <div id=\"ai-chat-messages\" class=\"flex-1 overflow-y-auto p-4 space-y-2\"></div>
  <div class=\"p-4 border-t\">
    <input type=\"text\" id=\"ai-chat-input\" placeholder=\"Ask about Share-Base Bonds...\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-nnl-gold\">
    <button onclick=\"sendAIMessage()\" class=\"mt-2 w-full bg-nnl-green text-white py-2 rounded-lg hover:bg-[#2d5a47] transition\">Send</button>
  </div>
</div>

</div>
";
        // line 81
        yield ($context["cookie"] ?? null);
        yield "
<script src=\"";
        // line 82
        yield ($context["bootstrap"] ?? null);
        yield "\" type=\"text/javascript\"></script>
";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 84
            yield "  <script src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 84);
            yield "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "</body></html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/footer.twig";
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
        return array (  219 => 86,  210 => 84,  206 => 83,  202 => 82,  198 => 81,  171 => 56,  166 => 53,  153 => 45,  147 => 44,  141 => 43,  135 => 42,  125 => 34,  117 => 32,  115 => 31,  108 => 30,  100 => 28,  98 => 27,  92 => 26,  82 => 18,  79 => 17,  68 => 15,  63 => 14,  61 => 13,  55 => 12,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("</main>

<!-- NNL Footer - Dark Forest Green Design -->
<footer class=\"bg-nnl-green text-white mt-16\">
  <div class=\"container mx-auto px-4 py-12\">
    <div class=\"grid grid-cols-1 md:grid-cols-3 gap-8\">
      <!-- Corporate Farming (NNL) -->
      <div>
        <h5 class=\"text-xl font-bold mb-4 text-nnl-gold\">Corporate Farming (NNL)</h5>
        <p class=\"text-gray-300 mb-4\">Connecting Indian farmers and small manufacturers directly to global markets through sustainable, transparent supply chains.</p>
        <ul class=\"list-unstyled space-y-2\">
          <li><a href=\"{{ contact }}\" class=\"text-gray-300 hover:text-nnl-gold transition\">{{ text_contact }}</a></li>
          {% if informations %}
            {% for information in informations %}
              <li><a href=\"{{ information.href }}\" class=\"text-gray-300 hover:text-nnl-gold transition\">{{ information.title }}</a></li>
            {% endfor %}
          {% endif %}
        </ul>
      </div>

      <!-- Global Export Partners -->
      <div>
        <h5 class=\"text-xl font-bold mb-4 text-nnl-gold\">Global Export Partners</h5>
        <p class=\"text-gray-300 mb-4\">Serving markets in US, Canada, and Gulf regions with premium organic products.</p>
        <ul class=\"list-unstyled space-y-2\">
          <li><a href=\"{{ manufacturer }}\" class=\"text-gray-300 hover:text-nnl-gold transition\">{{ text_manufacturer }}</a></li>
          {% if affiliate %}
            <li><a href=\"{{ affiliate }}\" class=\"text-gray-300 hover:text-nnl-gold transition\">{{ text_affiliate }}</a></li>
          {% endif %}
          <li><a href=\"{{ special }}\" class=\"text-gray-300 hover:text-nnl-gold transition\">{{ text_special }}</a></li>
          {% if blog %}
            <li><a href=\"{{ blog }}\" class=\"text-gray-300 hover:text-nnl-gold transition\">{{ text_blog }}</a></li>
          {% endif %}
        </ul>
      </div>

      <!-- Venture Capital Bonds -->
      <div>
        <h5 class=\"text-xl font-bold mb-4 text-nnl-gold\">Venture Capital Bonds</h5>
        <p class=\"text-gray-300 mb-4\">Invest in Share-Base Bonds and support sustainable farming while earning returns from global export margins.</p>
        <ul class=\"list-unstyled space-y-2\">
          <li><a href=\"{{ account }}\" class=\"text-gray-300 hover:text-nnl-gold transition\">{{ text_account }}</a></li>
          <li><a href=\"{{ order }}\" class=\"text-gray-300 hover:text-nnl-gold transition\">{{ text_order }}</a></li>
          <li><a href=\"{{ wishlist }}\" class=\"text-gray-300 hover:text-nnl-gold transition\">{{ text_wishlist }}</a></li>
          <li><a href=\"{{ newsletter }}\" class=\"text-gray-300 hover:text-nnl-gold transition\">{{ text_newsletter }}</a></li>
        </ul>
      </div>
    </div>

    <hr class=\"border-nnl-gold/30 my-8\">

    <div class=\"text-center text-gray-400 text-sm\">
      <p>&copy; {{ \"now\"|date(\"Y\") }} Namathu Natural Leader (NNL). All rights reserved.</p>
      <p class=\"mt-2\">Empowering Indian Farmers • Connecting Global Markets</p>
      {# Removed \"Powered by OpenCart\" - NNL Branding Only #}
    </div>
  </div>
</footer>

<!-- Floating Action Button for AI Assistant (Mobile) -->
<div id=\"nnl-ai-fab\" class=\"fixed bottom-6 right-6 z-50 md:hidden\">
  <button onclick=\"toggleAIChat()\" class=\"bg-nnl-gold hover:bg-[#b8941f] text-white rounded-full w-16 h-16 shadow-2xl flex items-center justify-center transition-transform hover:scale-110\">
    <i class=\"fa-solid fa-robot text-2xl\"></i>
  </button>
</div>

<!-- AI Chat Widget -->
<div id=\"nnl-ai-chat\" class=\"hidden fixed bottom-24 right-6 z-50 w-80 h-96 bg-white rounded-3xl shadow-2xl border-2 border-nnl-gold flex flex-col\">
  <div class=\"bg-nnl-green text-white p-4 rounded-t-3xl flex justify-between items-center\">
    <h3 class=\"font-bold\">NNL Organic Leader</h3>
    <button onclick=\"toggleAIChat()\" class=\"text-white hover:text-nnl-gold\">✕</button>
  </div>
  <div id=\"ai-chat-messages\" class=\"flex-1 overflow-y-auto p-4 space-y-2\"></div>
  <div class=\"p-4 border-t\">
    <input type=\"text\" id=\"ai-chat-input\" placeholder=\"Ask about Share-Base Bonds...\" class=\"w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-nnl-gold\">
    <button onclick=\"sendAIMessage()\" class=\"mt-2 w-full bg-nnl-green text-white py-2 rounded-lg hover:bg-[#2d5a47] transition\">Send</button>
  </div>
</div>

</div>
{{ cookie }}
<script src=\"{{ bootstrap }}\" type=\"text/javascript\"></script>
{% for script in scripts %}
  <script src=\"{{ script.href }}\" type=\"text/javascript\"></script>
{% endfor %}
</body></html>
", "catalog/view/template/common/footer.twig", "/home/u925137283/domains/nlagro.com/public_html/catalog/view/template/common/footer.twig");
    }
}
