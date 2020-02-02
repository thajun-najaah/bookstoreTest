<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/book.html.twig */
class __TwigTemplate_100c4c2d1940efe54ec741f29ccfb86e13c99805adef4b4ca2829935ffd30771 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/book.html.twig"));

        // line 1
        echo "<ul class=\"product_list grid row blocknewproducts tab-pane active\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 3
            echo "        <li class=\"animated swing ajax_block_product col-xs-12 col-sm-6 col-md-4 alpha first-in-line first-item-of-tablet-line first-item-of-mobile-line \">
            <div class=\"product-container\">
                <div class=\"left-block\">
                    <div class=\"product-image-container\">
                        <a class=\"product_img_link\"
                           href=\"\"
                           title=\"Mytasas leryuoasa jeryuasa\" itemprop=\"url\">
                            <img class=\"replace-2x img-responsive\"
                                 src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/books/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["em"]) || array_key_exists("em", $context) ? $context["em"] : (function () { throw new RuntimeError('Variable "em" does not exist.', 11, $this->source); })()), "getRandomImage", [], "method", false, false, false, 11), "html", null, true);
            echo "\"
                                 title=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getDescription", [], "method", false, false, false, 12), "html", null, true);
            echo "\" width=\"395\" height=\"600\"/>
                        </a>
                        <a class=\"quick-view\" href=\"\" rel=\"\">
                            <span>Quick view</span>
                        </a>
                        <div class=\"content_price\" itemprop=\"offers\" itemscope >
                            <span itemprop=\"price\" class=\"price product-price\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "getRates", [], "method", false, false, false, 18), "actual_rate", [], "any", false, false, false, 18), "html", null, true);
            echo "</span>
                            <meta itemprop=\"priceCurrency\" content=\"1\"/>
                            <span class=\"old-price product-price\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "price", [], "any", false, false, false, 20), "html", null, true);
            echo "</span>
                            <span class=\"price-percent-reduction\">-";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "getRates", [], "method", false, false, false, 21), "discount", [], "any", false, false, false, 21), "html", null, true);
            echo "%</span>
                        </div>
                        <span class=\"new-box\">
\t\t\t\t\t\t\t\t<span class=\"new-label\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "getCategory", [], "method", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</span>
                        ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["book"], "getCart", [], "method", false, false, false, 26)) {
                // line 27
                echo "                        <span class=\"sale-box\">
\t\t\t\t\t\t\t\t<span class=\"sale-label\">In Cart!</span>
\t\t\t\t\t\t\t</span>
                        ";
            }
            // line 31
            echo "
                    </div>
                </div>
                <div class=\"right-block\">
                    <div class=\"right-block-container\">
                        <h5 itemprop=\"name\">
                            <a class=\"product-name\" href=\"\" title=\"Mytasas leryuoasa jeryuasa\" itemprop=\"url\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getName", [], "method", false, false, false, 37), "html", null, true);
            echo "</a>
                        </h5>


                        <p class=\"product-desc\" itemprop=\"description\">
                            Well, reading books as a hobby was always a noble, pleasant and
                            very useful kind of activity. It gives knowledge, exerts on the
                            process of development of your personality.
                        </p>
                        <div itemprop=\"offers\" class=\"content_price\">
                            <span itemprop=\"price\" class=\"price product-price\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "getRates", [], "method", false, false, false, 47), "actual_rate", [], "any", false, false, false, 47), "html", null, true);
            echo "</span>
                            <meta itemprop=\"priceCurrency\" content=\"1\"/>
                            <span class=\"old-price product-price\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "price", [], "any", false, false, false, 49), "html", null, true);
            echo "</span>
                            <span class=\"price-percent-reduction\">-";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["book"], "getRates", [], "method", false, false, false, 50), "discount", [], "any", false, false, false, 50), "html", null, true);
            echo "%</span>
                        </div>
                    </div>
                    <div class=\"button-container\">
                        <a itemprop=\"url\" class=\"button remove_book btn btn-default\" data-id=\"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "getId", [], "method", false, false, false, 54), "html", null, true);
            echo "\"
                           href=\"\" title=\"View\">
                            <span></span>
                        </a>
                        <a class=\"button ajax_add_to_cart_button btn btn-default\"
                           href=\"#\"
                           rel=\"nofollow\" title=\"Add to cart\" data-id=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "\">
                            <span>Add to cart</span>
                        </a>

                    </div>
                    <span class=\"availability\">
                        <span class=\"available-now\">
                            <link itemprop=\"availability\" href=\"https://schema.org/InStock\"/>In Stock</span>
                    </span>
                </div>
            </div>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
</ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/book.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 73,  145 => 60,  136 => 54,  129 => 50,  125 => 49,  120 => 47,  107 => 37,  99 => 31,  93 => 27,  91 => 26,  86 => 24,  80 => 21,  76 => 20,  71 => 18,  62 => 12,  57 => 11,  47 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"product_list grid row blocknewproducts tab-pane active\">
    {% for book in books %}
        <li class=\"animated swing ajax_block_product col-xs-12 col-sm-6 col-md-4 alpha first-in-line first-item-of-tablet-line first-item-of-mobile-line \">
            <div class=\"product-container\">
                <div class=\"left-block\">
                    <div class=\"product-image-container\">
                        <a class=\"product_img_link\"
                           href=\"\"
                           title=\"Mytasas leryuoasa jeryuasa\" itemprop=\"url\">
                            <img class=\"replace-2x img-responsive\"
                                 src=\"{{ asset('images/books/') }}{{ em.getRandomImage() }}\"
                                 title=\"{{ book.getDescription() }}\" width=\"395\" height=\"600\"/>
                        </a>
                        <a class=\"quick-view\" href=\"\" rel=\"\">
                            <span>Quick view</span>
                        </a>
                        <div class=\"content_price\" itemprop=\"offers\" itemscope >
                            <span itemprop=\"price\" class=\"price product-price\">{{ book.getRates().actual_rate }}</span>
                            <meta itemprop=\"priceCurrency\" content=\"1\"/>
                            <span class=\"old-price product-price\">{{ book.price }}</span>
                            <span class=\"price-percent-reduction\">-{{  book.getRates().discount }}%</span>
                        </div>
                        <span class=\"new-box\">
\t\t\t\t\t\t\t\t<span class=\"new-label\">{{ book.getCategory().name }}</span>
\t\t\t\t\t\t\t</span>
                        {% if book.getCart() %}
                        <span class=\"sale-box\">
\t\t\t\t\t\t\t\t<span class=\"sale-label\">In Cart!</span>
\t\t\t\t\t\t\t</span>
                        {% endif %}

                    </div>
                </div>
                <div class=\"right-block\">
                    <div class=\"right-block-container\">
                        <h5 itemprop=\"name\">
                            <a class=\"product-name\" href=\"\" title=\"Mytasas leryuoasa jeryuasa\" itemprop=\"url\">{{ book.getName() }}</a>
                        </h5>


                        <p class=\"product-desc\" itemprop=\"description\">
                            Well, reading books as a hobby was always a noble, pleasant and
                            very useful kind of activity. It gives knowledge, exerts on the
                            process of development of your personality.
                        </p>
                        <div itemprop=\"offers\" class=\"content_price\">
                            <span itemprop=\"price\" class=\"price product-price\">{{ book.getRates().actual_rate }}</span>
                            <meta itemprop=\"priceCurrency\" content=\"1\"/>
                            <span class=\"old-price product-price\">{{ book.price }}</span>
                            <span class=\"price-percent-reduction\">-{{  book.getRates().discount }}%</span>
                        </div>
                    </div>
                    <div class=\"button-container\">
                        <a itemprop=\"url\" class=\"button remove_book btn btn-default\" data-id=\"{{ book.getId() }}\"
                           href=\"\" title=\"View\">
                            <span></span>
                        </a>
                        <a class=\"button ajax_add_to_cart_button btn btn-default\"
                           href=\"#\"
                           rel=\"nofollow\" title=\"Add to cart\" data-id=\"{{ book.id }}\">
                            <span>Add to cart</span>
                        </a>

                    </div>
                    <span class=\"availability\">
                        <span class=\"available-now\">
                            <link itemprop=\"availability\" href=\"https://schema.org/InStock\"/>In Stock</span>
                    </span>
                </div>
            </div>
        </li>
    {% endfor %}

</ul>
", "pages/book.html.twig", "/home/pickme92/Desktop/bookstore/templates/pages/book.html.twig");
    }
}
