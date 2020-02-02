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

/* pages/check-out-form.html.twig */
class __TwigTemplate_c19998b69ff7e6643dcb6ea10466470129f0f9f792f8961625476746956f533f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/check-out-form.html.twig"));

        // line 1
        echo "<div class=\"content-body \" id=\"invoice\">
    <section class=\"card\">
        <div id=\"invoice-template\" class=\"card-body\">
            <!-- Invoice Company Details -->
            <div id=\"invoice-company-details\" class=\"row\">
                <div class=\"col-md-6 col-sm-12 text-left text-md-left\">
                    <div class=\"media\">
                        <div class=\"media-body\">
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-12 text-right text-md-right\">
                    <h2>INVOICE</h2>
                    <p class=\"pb-3\"># INV-001001</p>
                    <ul class=\"px-0 list-unstyled\">
                        <li>Balance Due</li>
                        <li class=\"lead text-bold-800\">\$ ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 17, $this->source); })()), "total", [], "any", false, false, false, 17), "html", null, true);
        echo "</li>
                    </ul>
                </div>
            </div>
            <div id=\"invoice-customer-details\" class=\"row pt-2\">
                <div class=\"col-md-6 col-sm-12 text-left text-md-left\">

                </div>
                <div class=\"col-md-6 col-sm-12 text-right text-md-right\">
                    <p>
                        <span class=\"text-muted\">Invoice Date :</span> 06/05/2016</p>
                    <p>
                        <span class=\"text-muted\">Terms :</span> Due on Receipt</p>
                    <p>
                        <span class=\"text-muted\">Due Date :</span> 10/05/2016</p>
                </div>
            </div>

            <hr>

            <div id=\"invoice-items-details\" class=\"pt-2\">
                <div class=\"row\">
                    <div class=\"table-responsive col-sm-12\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Books &amp; Description</th>
                                <th class=\"text-right\">Qty</th>
                                <th class=\"text-right\">Price</th>
                                <th class=\"text-right\">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 51
        $context["n"] = 0;
        // line 52
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["carts"]) || array_key_exists("carts", $context) ? $context["carts"] : (function () { throw new RuntimeError('Variable "carts" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cart"]) {
            // line 53
            echo "                                ";
            $context["n"] = ((isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 53, $this->source); })()) + 1);
            // line 54
            echo "                                <tr>
                                    <th scope=\"row\">";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["n"]) || array_key_exists("n", $context) ? $context["n"] : (function () { throw new RuntimeError('Variable "n" does not exist.', 55, $this->source); })()), "html", null, true);
            echo "</th>
                                    <td>
                                        <p title=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cart"], "getBook", [], "method", false, false, false, 57), "getDescription", [], "method", false, false, false, 57), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cart"], "getBook", [], "method", false, false, false, 57), "getName", [], "method", false, false, false, 57), "html", null, true);
            echo " </p>

                                    </td>
                                    <td class=\"text-right\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "getQty", [], "method", false, false, false, 60), "html", null, true);
            echo "</td>
                                    <td class=\"text-right\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cart"], "getBook", [], "method", false, false, false, 61), "getPrice", [], "method", false, false, false, 61), "html", null, true);
            echo "</td>
                                    <td class=\"text-right\">";
            // line 62
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["cart"], "getQty", [], "method", false, false, false, 62) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cart"], "getBook", [], "method", false, false, false, 62), "getPrice", [], "method", false, false, false, 62)), "html", null, true);
            echo "&nbsp;\$</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-7 col-sm-12 text-center text-md-left\">
                        <p class=\"lead\">Payment Methods:</p>
                        <div class=\"row\">
                            <div class=\"col-md-8\">
                                <table class=\"table table-borderless table-sm\">
                                    <tbody>
                                    <tr>
                                        <td>Bank name:</td>
                                        <td class=\"text-right\">ABC Bank, USA</td>
                                    </tr>
                                    <tr>
                                        <td>Acc name:</td>
                                        <td class=\"text-right\">Amanda Orton</td>
                                    </tr>
                                    <tr>
                                        <td>IBAN:</td>
                                        <td class=\"text-right\">FGS165461646546AA</td>
                                    </tr>
                                    <tr>
                                        <td>SWIFT code:</td>
                                        <td class=\"text-right\">BTNPP34</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-5 col-sm-12\">
                        <p class=\"lead\">Total due</p>
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <td>Sub Total</td>
                                    <td class=\"text-right\">";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 105, $this->source); })()), "sub_total", [], "any", false, false, false, 105), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>Discount</td>
                                    <td class=\"text-right\">";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 109, $this->source); })()), "discount", [], "any", false, false, false, 109), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td class=\"text-bold-800\">Total</td>
                                    <td class=\"text-bold-800 text-right\">";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 113, $this->source); })()), "total", [], "any", false, false, false, 113), "html", null, true);
        echo "</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Invoice Footer -->
            <div id=\"invoice-footer\">
                <div class=\"row\">
                    <div class=\"col-md-7 col-sm-12\">
                        <h6>Terms &amp; Condition</h6>
                        <p>You know, being a test pilot isn't always the healthiest business
                            in the world. We predict too much for the next year and yet far
                            too little for the next 10.</p>
                    </div>
                    <div class=\"col-md-5 col-sm-12 text-center\">
                        <button type=\"button\" class=\"btn btn-primary btn-lg my-1\" onclick=\"print()\">Print</button>
                        ";
        // line 132
        if ((isset($context["coupon"]) || array_key_exists("coupon", $context) ? $context["coupon"] : (function () { throw new RuntimeError('Variable "coupon" does not exist.', 132, $this->source); })())) {
            // line 133
            echo "                            <button type=\"button\" class=\"btn btn-danger btn-lg my-1 remove-coupon\">Remove the coupon</button>
                        ";
        } else {
            // line 135
            echo "                        <button type=\"button\" class=\"btn btn-primary btn-lg my-1 add-coupon\">I have a coupon</button>
                        ";
        }
        // line 137
        echo "
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/check-out-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 137,  222 => 135,  218 => 133,  216 => 132,  194 => 113,  187 => 109,  180 => 105,  138 => 65,  129 => 62,  125 => 61,  121 => 60,  113 => 57,  108 => 55,  105 => 54,  102 => 53,  97 => 52,  95 => 51,  58 => 17,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"content-body \" id=\"invoice\">
    <section class=\"card\">
        <div id=\"invoice-template\" class=\"card-body\">
            <!-- Invoice Company Details -->
            <div id=\"invoice-company-details\" class=\"row\">
                <div class=\"col-md-6 col-sm-12 text-left text-md-left\">
                    <div class=\"media\">
                        <div class=\"media-body\">
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-12 text-right text-md-right\">
                    <h2>INVOICE</h2>
                    <p class=\"pb-3\"># INV-001001</p>
                    <ul class=\"px-0 list-unstyled\">
                        <li>Balance Due</li>
                        <li class=\"lead text-bold-800\">\$ {{ price.total }}</li>
                    </ul>
                </div>
            </div>
            <div id=\"invoice-customer-details\" class=\"row pt-2\">
                <div class=\"col-md-6 col-sm-12 text-left text-md-left\">

                </div>
                <div class=\"col-md-6 col-sm-12 text-right text-md-right\">
                    <p>
                        <span class=\"text-muted\">Invoice Date :</span> 06/05/2016</p>
                    <p>
                        <span class=\"text-muted\">Terms :</span> Due on Receipt</p>
                    <p>
                        <span class=\"text-muted\">Due Date :</span> 10/05/2016</p>
                </div>
            </div>

            <hr>

            <div id=\"invoice-items-details\" class=\"pt-2\">
                <div class=\"row\">
                    <div class=\"table-responsive col-sm-12\">
                        <table class=\"table\">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Books &amp; Description</th>
                                <th class=\"text-right\">Qty</th>
                                <th class=\"text-right\">Price</th>
                                <th class=\"text-right\">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% set n = 0 %}
                            {% for cart in carts %}
                                {% set n = n + 1 %}
                                <tr>
                                    <th scope=\"row\">{{ n }}</th>
                                    <td>
                                        <p title=\"{{ cart.getBook().getDescription() }}\">{{ cart.getBook().getName() }} </p>

                                    </td>
                                    <td class=\"text-right\">{{ cart.getQty() }}</td>
                                    <td class=\"text-right\">{{ cart.getBook().getPrice() }}</td>
                                    <td class=\"text-right\">{{ cart.getQty() * cart.getBook().getPrice() }}&nbsp;\$</td>
                                </tr>
                            {% endfor %}

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-7 col-sm-12 text-center text-md-left\">
                        <p class=\"lead\">Payment Methods:</p>
                        <div class=\"row\">
                            <div class=\"col-md-8\">
                                <table class=\"table table-borderless table-sm\">
                                    <tbody>
                                    <tr>
                                        <td>Bank name:</td>
                                        <td class=\"text-right\">ABC Bank, USA</td>
                                    </tr>
                                    <tr>
                                        <td>Acc name:</td>
                                        <td class=\"text-right\">Amanda Orton</td>
                                    </tr>
                                    <tr>
                                        <td>IBAN:</td>
                                        <td class=\"text-right\">FGS165461646546AA</td>
                                    </tr>
                                    <tr>
                                        <td>SWIFT code:</td>
                                        <td class=\"text-right\">BTNPP34</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-5 col-sm-12\">
                        <p class=\"lead\">Total due</p>
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <tbody>
                                <tr>
                                    <td>Sub Total</td>
                                    <td class=\"text-right\">{{ price.sub_total }}</td>
                                </tr>
                                <tr>
                                    <td>Discount</td>
                                    <td class=\"text-right\">{{ price.discount }}</td>
                                </tr>
                                <tr>
                                    <td class=\"text-bold-800\">Total</td>
                                    <td class=\"text-bold-800 text-right\">{{ price.total }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Invoice Footer -->
            <div id=\"invoice-footer\">
                <div class=\"row\">
                    <div class=\"col-md-7 col-sm-12\">
                        <h6>Terms &amp; Condition</h6>
                        <p>You know, being a test pilot isn't always the healthiest business
                            in the world. We predict too much for the next year and yet far
                            too little for the next 10.</p>
                    </div>
                    <div class=\"col-md-5 col-sm-12 text-center\">
                        <button type=\"button\" class=\"btn btn-primary btn-lg my-1\" onclick=\"print()\">Print</button>
                        {% if coupon %}
                            <button type=\"button\" class=\"btn btn-danger btn-lg my-1 remove-coupon\">Remove the coupon</button>
                        {% else %}
                        <button type=\"button\" class=\"btn btn-primary btn-lg my-1 add-coupon\">I have a coupon</button>
                        {% endif %}

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
", "pages/check-out-form.html.twig", "/home/pickme92/Desktop/bookstore/templates/pages/check-out-form.html.twig");
    }
}
