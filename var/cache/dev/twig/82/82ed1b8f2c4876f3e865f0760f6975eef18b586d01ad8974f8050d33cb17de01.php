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

/* pages/columns-container.html.twig */
class __TwigTemplate_1d86ef3c58c182b0ad6f8b00d6f4954fff338f6625c23c3f7c61609232bd96a4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/columns-container.html.twig"));

        // line 1
        echo "<div class=\"columns-container\">
    <div id=\"columns\" class=\"container\">
        <div class=\"row\">
            <div class=\"home-container\">
                <div id=\"left_column\" class=\"column col-xs-12 col-sm-3\">
                    <div id=\"categories_block_left\" class=\"block\">
                        <h2 class=\"title_block\">
                            Categories
                        </h2>
                        <div class=\"block_content\">
                            <ul class=\"tree dhtml\">

                                <li>
                                    <a class=\"selected\" href=\"#\" title=\"\" data-id=\"0\">
                                        All Books
                                    </a>
                                </li>

                                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "                                    <li>
                                        <a href=\"#\" title=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 21), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\">
                                            ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 22), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
                            </ul>
                        </div>
                    </div>
                    <!-- /Block categories module -->
                </div>
                <div id=\"center_column\" class=\"center_column col-xs-12 col-sm-9\">
                    <div class=\"content_scene_cat\">
                        <!-- Category image -->
                        <div class=\"content_scene_cat_bg\"
                             style=\"background:url(";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/book.png"), "html", null, true);
        echo ") right top no-repeat; min-height:152px;background-size: cover;\">
                            <div class=\"cat_desc\">
                                <span class=\"category-name\">Special Offers!</span>
                                <div id=\"category_description_short\" class=\"rte\">
                                 <p style=\"text-align: justify;color: black;\">-If you buy 5 or more Children books you get a 10% discount from the Children books
total</p>
<p style=\"text-align: justify;color: black;\">-If you buy 10 books from each category you get 5% additional discount from the total
bill</p><p style=\"text-align: justify;color: black;\">
-If you have a coupon code (which you can enter and redeem from the invoice page
itself) you get a 15% discount for the total bill. In this case, all other discounts will be
invalidated.</p>
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                    <h1 class=\"page-heading product-listing\"><span
                                class=\"heading-counter\"></span></h1>
                    <div class=\"content_sortPagiBar clearfix\">
                        <div class=\"sortPagiBar clearfix\">
                            <ul class=\"display hidden-xs\">
                                <li class=\"display-title\">View:</li>
                                <li id=\"grid\" class=\"selected\"><a rel=\"nofollow\" href=\"#\" title=\"Grid\"><i
                                                class=\"icon-th-large\"></i>Grid</a></li>
                                <li id=\"list\"><a rel=\"nofollow\" href=\"#\" title=\"List\"><i
                                                class=\"icon-th-list\"></i>List</a></li>
                            </ul>

                        </div>
                        <div class=\"top-pagination-content clearfix\">
                            <div class=\"product-count\">
                                Showing 1 - 55 of 100 items
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-content\" id=\"books_container\">
                        Loading...
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/columns-container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 36,  83 => 26,  73 => 22,  67 => 21,  64 => 20,  60 => 19,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"columns-container\">
    <div id=\"columns\" class=\"container\">
        <div class=\"row\">
            <div class=\"home-container\">
                <div id=\"left_column\" class=\"column col-xs-12 col-sm-3\">
                    <div id=\"categories_block_left\" class=\"block\">
                        <h2 class=\"title_block\">
                            Categories
                        </h2>
                        <div class=\"block_content\">
                            <ul class=\"tree dhtml\">

                                <li>
                                    <a class=\"selected\" href=\"#\" title=\"\" data-id=\"0\">
                                        All Books
                                    </a>
                                </li>

                                {% for category in categories %}
                                    <li>
                                        <a href=\"#\" title=\"{{ category.description }}\" data-id=\"{{ category.id }}\">
                                            {{ category.name }}
                                        </a>
                                    </li>
                                {% endfor %}

                            </ul>
                        </div>
                    </div>
                    <!-- /Block categories module -->
                </div>
                <div id=\"center_column\" class=\"center_column col-xs-12 col-sm-9\">
                    <div class=\"content_scene_cat\">
                        <!-- Category image -->
                        <div class=\"content_scene_cat_bg\"
                             style=\"background:url({{ asset('images/book.png') }}) right top no-repeat; min-height:152px;background-size: cover;\">
                            <div class=\"cat_desc\">
                                <span class=\"category-name\">Special Offers!</span>
                                <div id=\"category_description_short\" class=\"rte\">
                                 <p style=\"text-align: justify;color: black;\">-If you buy 5 or more Children books you get a 10% discount from the Children books
total</p>
<p style=\"text-align: justify;color: black;\">-If you buy 10 books from each category you get 5% additional discount from the total
bill</p><p style=\"text-align: justify;color: black;\">
-If you have a coupon code (which you can enter and redeem from the invoice page
itself) you get a 15% discount for the total bill. In this case, all other discounts will be
invalidated.</p>
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                    <h1 class=\"page-heading product-listing\"><span
                                class=\"heading-counter\"></span></h1>
                    <div class=\"content_sortPagiBar clearfix\">
                        <div class=\"sortPagiBar clearfix\">
                            <ul class=\"display hidden-xs\">
                                <li class=\"display-title\">View:</li>
                                <li id=\"grid\" class=\"selected\"><a rel=\"nofollow\" href=\"#\" title=\"Grid\"><i
                                                class=\"icon-th-large\"></i>Grid</a></li>
                                <li id=\"list\"><a rel=\"nofollow\" href=\"#\" title=\"List\"><i
                                                class=\"icon-th-list\"></i>List</a></li>
                            </ul>

                        </div>
                        <div class=\"top-pagination-content clearfix\">
                            <div class=\"product-count\">
                                Showing 1 - 55 of 100 items
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-content\" id=\"books_container\">
                        Loading...
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "pages/columns-container.html.twig", "/home/pickme92/Desktop/bookstore/templates/pages/columns-container.html.twig");
    }
}
