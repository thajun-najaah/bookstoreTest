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

/* pages/index.html.twig */
class __TwigTemplate_8f914b81198be76e6da6cc19dfe0fdd2d7375496874bc53a05f0d9e7ccc5823c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Favicons -->
\t<link rel=\"shortcut icon\" href=\"images/favicon.ico\">
\t<link rel=\"apple-touch-icon\" href=\"images/icon.png\">

\t<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\"> 
\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900\" rel=\"stylesheet\"> 

\t<!-- Stylesheets -->
\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/plugins.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("style.css"), "html", null, true);
        echo "\">

\t<!-- Cusom css -->
   <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\">

\t<!-- Modernizer js -->
\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    </head>
  
    <body>
      
  
\t<!--[if lte IE 9]>
\t\t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
\t<![endif]-->

\t<!-- Main wrapper -->
\t<div class=\"wrapper\" id=\"wrapper\">
\t\t<!-- Header -->
\t\t<header id=\"wn__header\" class=\"header__area header__absolute sticky__header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-6 col-lg-2\">
\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo/logo.png"), "html", null, true);
        echo "\" alt=\"logo images\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-8 d-none d-lg-block\">
\t\t\t\t\t\t<nav class=\"mainmenu__nav\">
\t\t\t\t\t\t\t<ul class=\"meninmenu d-flex justify-content-start\">
\t\t\t\t\t\t\t\t<li class=\"drop with--one--item\"><a href=\"/\">Home</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"drop\"><a href=\"shop-grid.html\">Books</a>
\t\t\t\t\t\t\t\t\t<div class=\"megamenu mega03\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"item item03\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"title\">Categories</li>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 57
        if ((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 57, $this->source); })())) {
            // line 58
            echo "          
            ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 59, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 60
                echo "           
           
   
  <li><a href=\"#\">";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category", [], "any", false, false, false, 63), "html", null, true);
                echo " </a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "           
        ";
        } else {
            // line 67
            echo "          <p>No categories to display</p>
        ";
        }
        // line 69
        echo "        </ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-6 col-lg-2\">
\t\t\t\t\t\t<ul class=\"header__sidebar__right d-flex justify-content-end align-items-center\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"shopcart\"><a class=\"cartbox_active\" href=\"#\"><span class=\"product_qun\">3</span></a>
\t\t\t\t\t\t\t\t<!-- Start Shopping Cart -->
\t\t\t\t\t\t\t\t<div class=\"block-minicart minicart__active\">
\t\t\t\t\t\t\t\t\t<div class=\"minicart-content-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"micart__close\">
\t\t\t\t\t\t\t\t\t\t\t<span>close</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"items-total d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t<span>3 items</span>
\t\t\t\t\t\t\t\t\t\t\t<span>Cart Subtotal</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"total_amount text-right\">
\t\t\t\t\t\t\t\t\t\t\t<span>Rs.6447.00</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mini_action checkout\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"checkout__btn\" href=\"cart.html\">Go to Checkout</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"single__items\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"miniproduct\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item01 d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"product-details.html\"><img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/sm-img/1.jpg"), "html", null, true);
        echo "\" alt=\"product images\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><a href=\"product-details.html\">MY FIRST - SHAPES</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"prize\">Rs.600.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_prize d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qun\">Qty: 01</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"zmdi zmdi-settings\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"zmdi zmdi-delete\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item01 d-flex mt--20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"product-details.html\"><img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/sm-img/KITTY AT ST CLARES.jpg"), "html", null, true);
        echo "\" alt=\"product images\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><a href=\"product-details.html\">KITTY AT ST CLARES</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"prize\">Rs.599.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_prize d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qun\">Qty: 03</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"zmdi zmdi-settings\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"zmdi zmdi-delete\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item01 d-flex mt--20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"product-details.html\"><img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/product/sm-img/A Clockwork Orange.jpg"), "html", null, true);
        echo "\" alt=\"product images\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><a href=\"product-details.html\">A Clockwork Orange</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"prize\">Rs.1350.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_prize d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qun\">Qty: 03</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"zmdi zmdi-settings\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"zmdi zmdi-delete\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mini_action cart\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"cart__btn\" href=\"cart.html\">View and edit cart</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Shopping Cart -->
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"setting__bar__icon\"><a class=\"setting__active\" href=\"#\"></a>
\t\t\t\t\t\t\t\t<div class=\"searchbar__content setting__block\">
\t\t\t\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-currency\">
\t\t\t\t\t\t\t\t\t\t\t<strong class=\"label switcher-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Currency</span>
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-options\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-currency-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"currency-trigger\">USD - US Dollar</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"switcher-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>GBP - British Pound Sterling</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>EUR - Euro</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-currency\">
\t\t\t\t\t\t\t\t\t\t\t<strong class=\"label switcher-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Language</span>
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-options\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-currency-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"currency-trigger\">English01</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"switcher-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>English02</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>English03</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>English04</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>English05</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-currency\">
\t\t\t\t\t\t\t\t\t\t\t<strong class=\"label switcher-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Select Store</span>
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-options\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-currency-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"currency-trigger\">Fashion Store</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"switcher-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Furniture</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Shoes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Speaker Store</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Furniture</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-currency\">
\t\t\t\t\t\t\t\t\t\t\t<strong class=\"label switcher-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>My Account</span>
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-options\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-currency-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"setting__menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><a href=\"#\">Compare Product</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><a href=\"#\">My Account</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><a href=\"#\">My Wishlist</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><a href=\"#\">Sign In</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><a href=\"#\">Create An Account</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Start Mobile Menu -->
\t\t\t\t<div class=\"row d-none\">
\t\t\t\t\t<div class=\"col-lg-12 d-none\">
\t\t\t\t\t\t<nav class=\"mobilemenu__nav\">
\t\t\t\t\t\t\t<ul class=\"meninmenu\">
\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Pages</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About Page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio.html\">Portfolio</a>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio.html\">Portfolio</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio-details.html\">Portfolio Details</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"my-account.html\">My Account</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"cart.html\">Cart Page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\">Checkout Page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"wishlist.html\">Wishlist Page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"error404.html\">404 Page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"faq.html\">Faq Page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"team.html\">Team Page</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"shop-grid.html\">Shop</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop-grid.html\">Shop Grid</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single-product.html\">Single Product</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog Page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-details.html\">Blog Details</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- End Mobile Menu -->
\t            <div class=\"mobile-menu d-block d-lg-none\">
\t            </div>
\t            <!-- Mobile Menu -->\t
\t\t\t</div>\t\t
\t\t</header>
\t\t<!-- //Header -->
\t\t<!-- Start Search Popup -->
\t\t<div class=\"brown--color box-search-content search_active block-bg close__top\">
\t\t\t<form id=\"search_mini_form\" class=\"minisearch\" action=\"#\">
\t\t\t\t<div class=\"field__search\">
\t\t\t\t\t<input type=\"text\" placeholder=\"Search entire store here...\">
\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-search\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div class=\"close__wrap\">
\t\t\t\t<span>close</span>
\t\t\t</div>
\t\t</div>
\t\t<!-- End Search Popup -->
        <!-- Start Slider area -->
        <div class=\"slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme\">
        \t<!-- Start Single Slide -->
\t        <div class=\"slide animation__style10 bg-image--1 fullscreen align__center--left\">
\t            <div class=\"container\">
\t            \t<div class=\"row\">
\t            \t\t<div class=\"col-lg-12\">
\t            \t\t\t<div class=\"slider__content\">
\t\t            \t\t\t<div class=\"contentbox\">
\t\t            \t\t\t\t<h2>Buy <span>your </span></h2>
\t\t            \t\t\t\t<h2>favourite <span>Book </span></h2>
\t\t            \t\t\t\t<h2>from <span>Here </span></h2>
\t\t\t\t                   \t<a class=\"shopbtn\" href=\"#\">shop now</a>
\t\t            \t\t\t</div>
\t            \t\t\t</div>
\t            \t\t</div>
\t            \t</div>
\t            </div>
            </div>
            <!-- End Single Slide -->
        \t<!-- Start Single Slide -->
\t        <div class=\"slide animation__style10 bg-image--7 fullscreen align__center--left\">
\t            <div class=\"container\">
\t            \t<div class=\"row\">
\t            \t\t<div class=\"col-lg-12\">
\t            \t\t\t<div class=\"slider__content\">
\t\t            \t\t\t<div class=\"contentbox\">
\t\t            \t\t\t\t<h2>Buy <span>your </span></h2>
\t\t            \t\t\t\t<h2>favourite <span>Book </span></h2>
\t\t            \t\t\t\t<h2>from <span>Here </span></h2>
\t\t\t\t                   \t<a class=\"shopbtn\" href=\"#\">shop now</a>
\t\t            \t\t\t</div>
\t            \t\t\t</div>
\t            \t\t</div>
\t            \t</div>
\t            </div>
            </div>
            <!-- End Single Slide -->
        </div>
        <!-- End Slider area -->
\t\t
\t\t<!-- Start Best Seller Area -->
\t<section class=\"wn__bestseller__area bg--white pt--80  pb--30\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"section__title text-center\">
\t\t\t\t\t\t\t<h2 class=\"title__be--2\">All <span class=\"color--theme\">Products</span></h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row mt--50\">
\t\t\t\t\t<div class=\"col-md-12 col-lg-12 col-sm-12\">
\t\t\t\t\t\t<div class=\"product__nav nav justify-content-center\" role=\"tablist\">
                          
                         ";
        // line 347
        if ((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 347, $this->source); })())) {
            // line 348
            echo "          
            ";
            // line 349
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 349, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 350
                echo "           
            <a class=\"nav-item nav-link\" data-toggle=\"tab\" href=\"#";
                // line 351
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category", [], "any", false, false, false, 351), "html", null, true);
                echo "\" role=\"tab\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category", [], "any", false, false, false, 351), "html", null, true);
                echo "</a>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 354
            echo "           
        ";
        } else {
            // line 356
            echo "          <p>No categories to display</p>
        ";
        }
        // line 358
        echo "                       
                       
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab__container mt--60\">

          ";
        // line 365
        if ((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 365, $this->source); })())) {
            // line 366
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 366, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 367
                echo "           \t<!-- Start Single Tab Content -->
\t\t\t\t\t  <div class=\"row single__tab tab-pane fade show active\" id=\"";
                // line 368
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category", [], "any", false, false, false, 368), "html", null, true);
                echo "\" role=\"tabpanel\">

\t\t\t\t\t\t";
                // line 371
                echo "\t\t\t\t\t\t\t\t<!-- Start Single Product -->
                 ";
                // line 372
                if ((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 372, $this->source); })())) {
                    // line 373
                    echo "          
            ";
                    // line 374
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 374, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
                        // line 375
                        echo "               ";
                        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["book"], "category", [], "any", false, false, false, 375), twig_get_attribute($this->env, $this->source, $context["category"], "category", [], "any", false, false, false, 375))) {
                            // line 376
                            echo "\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"product product__style--3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__thumb\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/";
                            // line 379
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 379), "html", null, true);
                            echo ".jpg\" alt=\"product image\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hot__box\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hot-label\">BEST SALER</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product__content content--center\">
\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"single-product.html\">";
                            // line 385
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 385), "html", null, true);
                            echo "</a></h4>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"prize d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>";
                            // line 387
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "price", [], "any", false, false, false, 387), "html", null, true);
                            echo "</li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"actions_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"add_to_links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product__hover--content\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"rating d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
               ";
                        }
                        // line 412
                        echo "\t\t\t\t\t\t\t\t<!-- Start Single Product -->
\t\t\t\t\t\t\t
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 415
                    echo "           
        ";
                } else {
                    // line 417
                    echo "          <p>No books to display</p>
        ";
                }
                // line 419
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t";
                // line 421
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- End Single Tab Content -->
\t\t\t\t
        
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 426
            echo "           
        ";
        } else {
            // line 428
            echo "          <p>No categories to display</p>
        ";
        }
        // line 430
        echo "\t\t\t\t
\t\t\t</div>
\t\t</section>
\t\t<!-- Start BEst Seller Area -->
\t
\t\t<!-- Best Sale Area -->
\t\t<section class=\"best-seel-area pt--80 pb--60\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"section__title text-center pb--50\">
\t\t\t\t\t\t\t<h2 class=\"title__be--2\">Best <span class=\"color--theme\">Seller </span></h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"slider center\">
\t\t\t\t<!-- Single product start -->
\t\t\t\t<div class=\"product product__style--3\">
\t\t\t\t\t<div class=\"product__thumb\">
\t\t\t\t\t\t<a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/1.jpg\" alt=\"product image\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product__content content--center\">
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<div class=\"actions_inner\">
\t\t\t\t\t\t\t\t<ul class=\"add_to_links\">
\t\t\t\t\t\t\t\t\t<li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product__hover--content\">
\t\t\t\t\t\t\t<ul class=\"rating d-flex\">
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single product end -->
\t\t\t\t<!-- Single product start -->
\t\t\t\t<div class=\"product product__style--3\">
\t\t\t\t\t<div class=\"product__thumb\">
\t\t\t\t\t\t<a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/2.jpg\" alt=\"product image\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product__content content--center\">
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<div class=\"actions_inner\">
\t\t\t\t\t\t\t\t<ul class=\"add_to_links\">
\t\t\t\t\t\t\t\t\t<li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product__hover--content\">
\t\t\t\t\t\t\t<ul class=\"rating d-flex\">
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single product end -->
\t\t\t\t<!-- Single product start -->
\t\t\t\t<div class=\"product product__style--3\">
\t\t\t\t\t<div class=\"product__thumb\">
\t\t\t\t\t\t<a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/3.jpg\" alt=\"product image\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product__content content--center\">
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<div class=\"actions_inner\">
\t\t\t\t\t\t\t\t<ul class=\"add_to_links\">
\t\t\t\t\t\t\t\t\t<li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product__hover--content\">
\t\t\t\t\t\t\t<ul class=\"rating d-flex\">
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single product end -->
\t\t\t\t<!-- Single product start -->
\t\t\t\t<div class=\"product product__style--3\">
\t\t\t\t\t<div class=\"product__thumb\">
\t\t\t\t\t\t<a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/4.jpg\" alt=\"product image\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product__content content--center\">
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<div class=\"actions_inner\">
\t\t\t\t\t\t\t\t<ul class=\"add_to_links\">
\t\t\t\t\t\t\t\t\t<li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product__hover--content\">
\t\t\t\t\t\t\t<ul class=\"rating d-flex\">
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single product end -->
\t\t\t\t<!-- Single product start -->
\t\t\t\t<div class=\"product product__style--3\">
\t\t\t\t\t<div class=\"product__thumb\">
\t\t\t\t\t\t<a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/5.jpg\" alt=\"product image\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product__content content--center\">
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<div class=\"actions_inner\">
\t\t\t\t\t\t\t\t<ul class=\"add_to_links\">
\t\t\t\t\t\t\t\t\t<li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product__hover--content\">
\t\t\t\t\t\t\t<ul class=\"rating d-flex\">
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single product end -->
\t\t\t\t<!-- Single product start -->
\t\t\t\t<div class=\"product product__style--3\">
\t\t\t\t\t<div class=\"product__thumb\">
\t\t\t\t\t\t<a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/6.jpg\" alt=\"product image\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product__content content--center\">
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<div class=\"actions_inner\">
\t\t\t\t\t\t\t\t<ul class=\"add_to_links\">
\t\t\t\t\t\t\t\t\t<li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product__hover--content\">
\t\t\t\t\t\t\t<ul class=\"rating d-flex\">
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single product end -->
\t\t\t\t<!-- Single product start -->
\t\t\t\t<div class=\"product product__style--3\">
\t\t\t\t\t<div class=\"product__thumb\">
\t\t\t\t\t\t<a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/7.jpg\" alt=\"product image\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product__content content--center\">
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<div class=\"actions_inner\">
\t\t\t\t\t\t\t\t<ul class=\"add_to_links\">
\t\t\t\t\t\t\t\t\t<li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product__hover--content\">
\t\t\t\t\t\t\t<ul class=\"rating d-flex\">
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single product end -->
\t\t\t\t<!-- Single product start -->
\t\t\t\t<div class=\"product product__style--3\">
\t\t\t\t\t<div class=\"product__thumb\">
\t\t\t\t\t\t<a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/8.jpg\" alt=\"product image\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product__content content--center\">
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<div class=\"actions_inner\">
\t\t\t\t\t\t\t\t<ul class=\"add_to_links\">
\t\t\t\t\t\t\t\t\t<li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product__hover--content\">
\t\t\t\t\t\t\t<ul class=\"rating d-flex\">
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single product end -->
\t\t\t</div>
\t\t</section>
\t\t<!-- Best Sale Area Area -->
\t\t<!-- Footer Area -->
\t\t<footer id=\"wn__footer\" class=\"footer__area bg__cat--8 brown--color\">
\t\t\t<div class=\"footer-static-top\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<div class=\"footer__widget footer__menu\">
\t\t\t\t\t\t\t\t<div class=\"ft__logo\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/logo/3.png\" alt=\"logo\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"footer__content\">
\t\t\t\t\t\t\t\t\t<ul class=\"social__net social__net--2 d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"bi bi-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"bi bi-google\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"bi bi-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"bi bi-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"bi bi-youtube\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<ul class=\"mainmenu d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Trending</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Best Seller</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">All Product</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Contact</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"copyright__wrapper\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t\t\t<div class=\"copy__right__inner text-left\">
\t\t\t\t\t\t\t\t\t<p>Copyright <i class=\"fa fa-copyright\"></i> <a href=\"https://99x.com/\">99x.</a> All Rights Reserved</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"payment text-right\">
\t\t\t\t\t\t\t\t<img src=\"images/icons/payment.png\" alt=\"\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!-- //Footer Area -->
\t\t<!-- QUICKVIEW PRODUCT -->
\t\t<div id=\"quickview-wrapper\">
\t\t    <!-- Modal -->
\t\t    <div class=\"modal fade\" id=\"productmodal\" tabindex=\"-1\" role=\"dialog\">
\t\t        <div class=\"modal-dialog modal__container\" role=\"document\">
\t\t            <div class=\"modal-content\">
\t\t                <div class=\"modal-header modal__header\">
\t\t                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t                </div>
\t\t                <div class=\"modal-body\">
\t\t                    <div class=\"modal-product\">
\t\t                        <!-- Start product images -->
\t\t                        <div class=\"product-images\">
\t\t                            <div class=\"main-image images\">
\t\t                                <img alt=\"big images\" src=\"images/product/big-img/1.jpg\">
\t\t                            </div>
\t\t                        </div>
\t\t                        <!-- end product images -->
\t\t                        <div class=\"product-info\">
\t\t                            <h1>Simple Fabric Bags</h1>
\t\t                            <div class=\"rating__and__review\">
\t\t                                <ul class=\"rating\">
\t\t                                    <li><span class=\"ti-star\"></span></li>
\t\t                                    <li><span class=\"ti-star\"></span></li>
\t\t                                    <li><span class=\"ti-star\"></span></li>
\t\t                                    <li><span class=\"ti-star\"></span></li>
\t\t                                    <li><span class=\"ti-star\"></span></li>
\t\t                                </ul>
\t\t                                <div class=\"review\">
\t\t                                    <a href=\"#\">4 customer reviews</a>
\t\t                                </div>
\t\t                            </div>
\t\t                            <div class=\"price-box-3\">
\t\t                                <div class=\"s-price-box\">
\t\t                                    <span class=\"new-price\">\$17.20</span>
\t\t                                    <span class=\"old-price\">\$45.00</span>
\t\t                                </div>
\t\t                            </div>
\t\t                            <div class=\"quick-desc\">
\t\t                                Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
\t\t                            </div>
\t\t                            <div class=\"select__color\">
\t\t                                <h2>Select color</h2>
\t\t                                <ul class=\"color__list\">
\t\t                                    <li class=\"red\"><a title=\"Red\" href=\"#\">Red</a></li>
\t\t                                    <li class=\"gold\"><a title=\"Gold\" href=\"#\">Gold</a></li>
\t\t                                    <li class=\"orange\"><a title=\"Orange\" href=\"#\">Orange</a></li>
\t\t                                    <li class=\"orange\"><a title=\"Orange\" href=\"#\">Orange</a></li>
\t\t                                </ul>
\t\t                            </div>
\t\t                            <div class=\"select__size\">
\t\t                                <h2>Select size</h2>
\t\t                                <ul class=\"color__list\">
\t\t                                    <li class=\"l__size\"><a title=\"L\" href=\"#\">L</a></li>
\t\t                                    <li class=\"m__size\"><a title=\"M\" href=\"#\">M</a></li>
\t\t                                    <li class=\"s__size\"><a title=\"S\" href=\"#\">S</a></li>
\t\t                                    <li class=\"xl__size\"><a title=\"XL\" href=\"#\">XL</a></li>
\t\t                                    <li class=\"xxl__size\"><a title=\"XXL\" href=\"#\">XXL</a></li>
\t\t                                </ul>
\t\t                            </div>
\t\t                            <div class=\"social-sharing\">
\t\t                                <div class=\"widget widget_socialsharing_widget\">
\t\t                                    <h3 class=\"widget-title-modal\">Share this product</h3>
\t\t                                    <ul class=\"social__net social__net--2 d-flex justify-content-start\">
\t\t                                        <li class=\"facebook\"><a href=\"#\" class=\"rss social-icon\"><i class=\"zmdi zmdi-rss\"></i></a></li>
\t\t                                        <li class=\"linkedin\"><a href=\"#\" class=\"linkedin social-icon\"><i class=\"zmdi zmdi-linkedin\"></i></a></li>
\t\t                                        <li class=\"pinterest\"><a href=\"#\" class=\"pinterest social-icon\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
\t\t                                        <li class=\"tumblr\"><a href=\"#\" class=\"tumblr social-icon\"><i class=\"zmdi zmdi-tumblr\"></i></a></li>
\t\t                                    </ul>
\t\t                                </div>
\t\t                            </div>
\t\t                            <div class=\"addtocart-btn\">
\t\t                                <a href=\"#\">Add to cart</a>
\t\t                            </div>
\t\t                        </div>
\t\t                    </div>
\t\t                </div>
\t\t            </div>
\t\t        </div>
\t\t    </div>
\t\t</div>
\t\t<!-- END QUICKVIEW PRODUCT -->
\t</div>
\t<!-- //Main wrapper -->

\t<!-- JS Files -->
\t<script src=\"";
        // line 812
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 813
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 814
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 815
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 816
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/active.js"), "html", null, true);
        echo "\"></script>
\t
</body>


</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home | Book Store";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1024 => 25,  1011 => 5,  997 => 816,  993 => 815,  989 => 814,  985 => 813,  981 => 812,  597 => 430,  593 => 428,  589 => 426,  579 => 421,  576 => 419,  572 => 417,  568 => 415,  560 => 412,  532 => 387,  527 => 385,  518 => 379,  513 => 376,  510 => 375,  506 => 374,  503 => 373,  501 => 372,  498 => 371,  493 => 368,  490 => 367,  485 => 366,  483 => 365,  474 => 358,  470 => 356,  466 => 354,  455 => 351,  452 => 350,  448 => 349,  445 => 348,  443 => 347,  228 => 135,  209 => 119,  190 => 103,  154 => 69,  150 => 67,  146 => 65,  138 => 63,  133 => 60,  129 => 59,  126 => 58,  124 => 57,  108 => 44,  88 => 26,  86 => 25,  82 => 24,  76 => 21,  70 => 18,  66 => 17,  62 => 16,  48 => 5,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Home | Book Store{% endblock %}</title>
        <!-- Favicons -->
\t<link rel=\"shortcut icon\" href=\"images/favicon.ico\">
\t<link rel=\"apple-touch-icon\" href=\"images/icon.png\">

\t<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
\t<link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\"> 
\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800\" rel=\"stylesheet\">
\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900\" rel=\"stylesheet\"> 

\t<!-- Stylesheets -->
\t<link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('css/plugins.css') }}\">
\t<link rel=\"stylesheet\" href=\"{{ asset('style.css') }}\">

\t<!-- Cusom css -->
   <link rel=\"stylesheet\" href=\"{{ asset('css/custom.css') }}\">

\t<!-- Modernizer js -->
\t<script src=\"{{ asset('js/vendor/modernizr-3.5.0.min.js') }}\"></script>
        {% block stylesheets %}{% endblock %}
    </head>
  
    <body>
      
  
\t<!--[if lte IE 9]>
\t\t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
\t<![endif]-->

\t<!-- Main wrapper -->
\t<div class=\"wrapper\" id=\"wrapper\">
\t\t<!-- Header -->
\t\t<header id=\"wn__header\" class=\"header__area header__absolute sticky__header\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-6 col-lg-2\">
\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/logo/logo.png') }}\" alt=\"logo images\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-8 d-none d-lg-block\">
\t\t\t\t\t\t<nav class=\"mainmenu__nav\">
\t\t\t\t\t\t\t<ul class=\"meninmenu d-flex justify-content-start\">
\t\t\t\t\t\t\t\t<li class=\"drop with--one--item\"><a href=\"/\">Home</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"drop\"><a href=\"shop-grid.html\">Books</a>
\t\t\t\t\t\t\t\t\t<div class=\"megamenu mega03\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"item item03\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"title\">Categories</li>
\t\t\t\t\t\t\t\t\t\t\t{% if categories %}
          
            {% for category in categories %}
           
           
   
  <li><a href=\"#\">{{category.category}} </a></li>
            {% endfor %}
           
        {% else %}
          <p>No categories to display</p>
        {% endif %}
        </ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 col-sm-6 col-6 col-lg-2\">
\t\t\t\t\t\t<ul class=\"header__sidebar__right d-flex justify-content-end align-items-center\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li class=\"shopcart\"><a class=\"cartbox_active\" href=\"#\"><span class=\"product_qun\">3</span></a>
\t\t\t\t\t\t\t\t<!-- Start Shopping Cart -->
\t\t\t\t\t\t\t\t<div class=\"block-minicart minicart__active\">
\t\t\t\t\t\t\t\t\t<div class=\"minicart-content-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"micart__close\">
\t\t\t\t\t\t\t\t\t\t\t<span>close</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"items-total d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t<span>3 items</span>
\t\t\t\t\t\t\t\t\t\t\t<span>Cart Subtotal</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"total_amount text-right\">
\t\t\t\t\t\t\t\t\t\t\t<span>Rs.6447.00</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mini_action checkout\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"checkout__btn\" href=\"cart.html\">Go to Checkout</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"single__items\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"miniproduct\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item01 d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"product-details.html\"><img src=\"{{ asset('images/product/sm-img/1.jpg') }}\" alt=\"product images\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><a href=\"product-details.html\">MY FIRST - SHAPES</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"prize\">Rs.600.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_prize d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qun\">Qty: 01</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"zmdi zmdi-settings\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"zmdi zmdi-delete\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item01 d-flex mt--20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"product-details.html\"><img src=\"{{ asset('images/product/sm-img/KITTY AT ST CLARES.jpg') }}\" alt=\"product images\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><a href=\"product-details.html\">KITTY AT ST CLARES</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"prize\">Rs.599.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_prize d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qun\">Qty: 03</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"zmdi zmdi-settings\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"zmdi zmdi-delete\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"item01 d-flex mt--20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"product-details.html\"><img src=\"{{ asset('images/product/sm-img/A Clockwork Orange.jpg') }}\" alt=\"product images\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><a href=\"product-details.html\">A Clockwork Orange</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"prize\">Rs.1350.00</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_prize d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"qun\">Qty: 03</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"d-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"zmdi zmdi-settings\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"zmdi zmdi-delete\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mini_action cart\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"cart__btn\" href=\"cart.html\">View and edit cart</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- End Shopping Cart -->
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"setting__bar__icon\"><a class=\"setting__active\" href=\"#\"></a>
\t\t\t\t\t\t\t\t<div class=\"searchbar__content setting__block\">
\t\t\t\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-currency\">
\t\t\t\t\t\t\t\t\t\t\t<strong class=\"label switcher-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Currency</span>
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-options\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-currency-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"currency-trigger\">USD - US Dollar</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"switcher-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>GBP - British Pound Sterling</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>EUR - Euro</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-currency\">
\t\t\t\t\t\t\t\t\t\t\t<strong class=\"label switcher-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Language</span>
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-options\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-currency-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"currency-trigger\">English01</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"switcher-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>English02</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>English03</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>English04</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>English05</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-currency\">
\t\t\t\t\t\t\t\t\t\t\t<strong class=\"label switcher-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>Select Store</span>
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-options\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-currency-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"currency-trigger\">Fashion Store</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"switcher-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Furniture</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Shoes</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Speaker Store</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>Furniture</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-currency\">
\t\t\t\t\t\t\t\t\t\t\t<strong class=\"label switcher-label\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>My Account</span>
\t\t\t\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-options\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"switcher-currency-trigger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"setting__menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><a href=\"#\">Compare Product</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><a href=\"#\">My Account</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><a href=\"#\">My Wishlist</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><a href=\"#\">Sign In</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><a href=\"#\">Create An Account</a></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Start Mobile Menu -->
\t\t\t\t<div class=\"row d-none\">
\t\t\t\t\t<div class=\"col-lg-12 d-none\">
\t\t\t\t\t\t<nav class=\"mobilemenu__nav\">
\t\t\t\t\t\t\t<ul class=\"meninmenu\">
\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Pages</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About Page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio.html\">Portfolio</a>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio.html\">Portfolio</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio-details.html\">Portfolio Details</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"my-account.html\">My Account</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"cart.html\">Cart Page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\">Checkout Page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"wishlist.html\">Wishlist Page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"error404.html\">404 Page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"faq.html\">Faq Page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"team.html\">Team Page</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"shop-grid.html\">Shop</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop-grid.html\">Shop Grid</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"single-product.html\">Single Product</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Blog Page</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-details.html\">Blog Details</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</nav>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- End Mobile Menu -->
\t            <div class=\"mobile-menu d-block d-lg-none\">
\t            </div>
\t            <!-- Mobile Menu -->\t
\t\t\t</div>\t\t
\t\t</header>
\t\t<!-- //Header -->
\t\t<!-- Start Search Popup -->
\t\t<div class=\"brown--color box-search-content search_active block-bg close__top\">
\t\t\t<form id=\"search_mini_form\" class=\"minisearch\" action=\"#\">
\t\t\t\t<div class=\"field__search\">
\t\t\t\t\t<input type=\"text\" placeholder=\"Search entire store here...\">
\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"zmdi zmdi-search\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</form>
\t\t\t<div class=\"close__wrap\">
\t\t\t\t<span>close</span>
\t\t\t</div>
\t\t</div>
\t\t<!-- End Search Popup -->
        <!-- Start Slider area -->
        <div class=\"slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme\">
        \t<!-- Start Single Slide -->
\t        <div class=\"slide animation__style10 bg-image--1 fullscreen align__center--left\">
\t            <div class=\"container\">
\t            \t<div class=\"row\">
\t            \t\t<div class=\"col-lg-12\">
\t            \t\t\t<div class=\"slider__content\">
\t\t            \t\t\t<div class=\"contentbox\">
\t\t            \t\t\t\t<h2>Buy <span>your </span></h2>
\t\t            \t\t\t\t<h2>favourite <span>Book </span></h2>
\t\t            \t\t\t\t<h2>from <span>Here </span></h2>
\t\t\t\t                   \t<a class=\"shopbtn\" href=\"#\">shop now</a>
\t\t            \t\t\t</div>
\t            \t\t\t</div>
\t            \t\t</div>
\t            \t</div>
\t            </div>
            </div>
            <!-- End Single Slide -->
        \t<!-- Start Single Slide -->
\t        <div class=\"slide animation__style10 bg-image--7 fullscreen align__center--left\">
\t            <div class=\"container\">
\t            \t<div class=\"row\">
\t            \t\t<div class=\"col-lg-12\">
\t            \t\t\t<div class=\"slider__content\">
\t\t            \t\t\t<div class=\"contentbox\">
\t\t            \t\t\t\t<h2>Buy <span>your </span></h2>
\t\t            \t\t\t\t<h2>favourite <span>Book </span></h2>
\t\t            \t\t\t\t<h2>from <span>Here </span></h2>
\t\t\t\t                   \t<a class=\"shopbtn\" href=\"#\">shop now</a>
\t\t            \t\t\t</div>
\t            \t\t\t</div>
\t            \t\t</div>
\t            \t</div>
\t            </div>
            </div>
            <!-- End Single Slide -->
        </div>
        <!-- End Slider area -->
\t\t
\t\t<!-- Start Best Seller Area -->
\t<section class=\"wn__bestseller__area bg--white pt--80  pb--30\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"section__title text-center\">
\t\t\t\t\t\t\t<h2 class=\"title__be--2\">All <span class=\"color--theme\">Products</span></h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row mt--50\">
\t\t\t\t\t<div class=\"col-md-12 col-lg-12 col-sm-12\">
\t\t\t\t\t\t<div class=\"product__nav nav justify-content-center\" role=\"tablist\">
                          
                         {% if categories %}
          
            {% for category in categories %}
           
            <a class=\"nav-item nav-link\" data-toggle=\"tab\" href=\"#{{category.category}}\" role=\"tab\">{{category.category}}</a>

            {% endfor %}
           
        {% else %}
          <p>No categories to display</p>
        {% endif %}
                       
                       
                        </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tab__container mt--60\">

          {% if categories %}
            {% for category in categories %}
           \t<!-- Start Single Tab Content -->
\t\t\t\t\t  <div class=\"row single__tab tab-pane fade show active\" id=\"{{category.category}}\" role=\"tabpanel\">

\t\t\t\t\t\t{# <div class=\"product__indicator--4 arrows_style owl-carousel owl-theme\"> #}
\t\t\t\t\t\t\t\t<!-- Start Single Product -->
                 {% if books %}
          
            {% for book in books %}
               {% if book.category==category.category %}
\t\t\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 col-sm-6 col-12\">
\t\t\t\t\t\t\t\t\t<div class=\"product product__style--3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product__thumb\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"first__img\" href=\"single-product.html\"><img src=\"images/books/{{book.id}}.jpg\" alt=\"product image\"></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"hot__box\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hot-label\">BEST SALER</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product__content content--center\">
\t\t\t\t\t\t\t\t\t\t\t<h4><a href=\"single-product.html\">{{book.title}}</a></h4>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"prize d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<li>{{book.price}}</li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"actions_inner\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"add_to_links\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product__hover--content\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"rating d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
               {% endif %}
\t\t\t\t\t\t\t\t<!-- Start Single Product -->
\t\t\t\t\t\t\t
            {% endfor %}
           
        {% else %}
          <p>No books to display</p>
        {% endif %}
\t\t\t\t\t\t
\t\t\t\t\t\t{# </div> #}
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End Single Tab Content -->
\t\t\t\t
        
            {% endfor %}
           
        {% else %}
          <p>No categories to display</p>
        {% endif %}
\t\t\t\t
\t\t\t</div>
\t\t</section>
\t\t<!-- Start BEst Seller Area -->
\t
\t\t<!-- Best Sale Area -->
\t\t<section class=\"best-seel-area pt--80 pb--60\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"section__title text-center pb--50\">
\t\t\t\t\t\t\t<h2 class=\"title__be--2\">Best <span class=\"color--theme\">Seller </span></h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"slider center\">
\t\t\t\t<!-- Single product start -->
\t\t\t\t<div class=\"product product__style--3\">
\t\t\t\t\t<div class=\"product__thumb\">
\t\t\t\t\t\t<a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/1.jpg\" alt=\"product image\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product__content content--center\">
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<div class=\"actions_inner\">
\t\t\t\t\t\t\t\t<ul class=\"add_to_links\">
\t\t\t\t\t\t\t\t\t<li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product__hover--content\">
\t\t\t\t\t\t\t<ul class=\"rating d-flex\">
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single product end -->
\t\t\t\t<!-- Single product start -->
\t\t\t\t<div class=\"product product__style--3\">
\t\t\t\t\t<div class=\"product__thumb\">
\t\t\t\t\t\t<a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/2.jpg\" alt=\"product image\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product__content content--center\">
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<div class=\"actions_inner\">
\t\t\t\t\t\t\t\t<ul class=\"add_to_links\">
\t\t\t\t\t\t\t\t\t<li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product__hover--content\">
\t\t\t\t\t\t\t<ul class=\"rating d-flex\">
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single product end -->
\t\t\t\t<!-- Single product start -->
\t\t\t\t<div class=\"product product__style--3\">
\t\t\t\t\t<div class=\"product__thumb\">
\t\t\t\t\t\t<a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/3.jpg\" alt=\"product image\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product__content content--center\">
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<div class=\"actions_inner\">
\t\t\t\t\t\t\t\t<ul class=\"add_to_links\">
\t\t\t\t\t\t\t\t\t<li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product__hover--content\">
\t\t\t\t\t\t\t<ul class=\"rating d-flex\">
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single product end -->
\t\t\t\t<!-- Single product start -->
\t\t\t\t<div class=\"product product__style--3\">
\t\t\t\t\t<div class=\"product__thumb\">
\t\t\t\t\t\t<a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/4.jpg\" alt=\"product image\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product__content content--center\">
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<div class=\"actions_inner\">
\t\t\t\t\t\t\t\t<ul class=\"add_to_links\">
\t\t\t\t\t\t\t\t\t<li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product__hover--content\">
\t\t\t\t\t\t\t<ul class=\"rating d-flex\">
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single product end -->
\t\t\t\t<!-- Single product start -->
\t\t\t\t<div class=\"product product__style--3\">
\t\t\t\t\t<div class=\"product__thumb\">
\t\t\t\t\t\t<a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/5.jpg\" alt=\"product image\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product__content content--center\">
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<div class=\"actions_inner\">
\t\t\t\t\t\t\t\t<ul class=\"add_to_links\">
\t\t\t\t\t\t\t\t\t<li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product__hover--content\">
\t\t\t\t\t\t\t<ul class=\"rating d-flex\">
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single product end -->
\t\t\t\t<!-- Single product start -->
\t\t\t\t<div class=\"product product__style--3\">
\t\t\t\t\t<div class=\"product__thumb\">
\t\t\t\t\t\t<a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/6.jpg\" alt=\"product image\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product__content content--center\">
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<div class=\"actions_inner\">
\t\t\t\t\t\t\t\t<ul class=\"add_to_links\">
\t\t\t\t\t\t\t\t\t<li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product__hover--content\">
\t\t\t\t\t\t\t<ul class=\"rating d-flex\">
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single product end -->
\t\t\t\t<!-- Single product start -->
\t\t\t\t<div class=\"product product__style--3\">
\t\t\t\t\t<div class=\"product__thumb\">
\t\t\t\t\t\t<a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/7.jpg\" alt=\"product image\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product__content content--center\">
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<div class=\"actions_inner\">
\t\t\t\t\t\t\t\t<ul class=\"add_to_links\">
\t\t\t\t\t\t\t\t\t<li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product__hover--content\">
\t\t\t\t\t\t\t<ul class=\"rating d-flex\">
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single product end -->
\t\t\t\t<!-- Single product start -->
\t\t\t\t<div class=\"product product__style--3\">
\t\t\t\t\t<div class=\"product__thumb\">
\t\t\t\t\t\t<a class=\"first__img\" href=\"single-product.html\"><img src=\"images/best-sell-product/8.jpg\" alt=\"product image\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"product__content content--center\">
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t<div class=\"actions_inner\">
\t\t\t\t\t\t\t\t<ul class=\"add_to_links\">
\t\t\t\t\t\t\t\t\t<li><a class=\"cart\" href=\"cart.html\"><i class=\"bi bi-shopping-bag4\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"wishlist\" href=\"wishlist.html\"><i class=\"bi bi-shopping-cart-full\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"compare\" href=\"#\"><i class=\"bi bi-heart-beat\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a data-toggle=\"modal\" title=\"Quick View\" class=\"quickview modal-view detail-link\" href=\"#productmodal\"><i class=\"bi bi-search\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product__hover--content\">
\t\t\t\t\t\t\t<ul class=\"rating d-flex\">
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li class=\"on\"><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t\t<li><i class=\"fa fa-star-o\"></i></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Single product end -->
\t\t\t</div>
\t\t</section>
\t\t<!-- Best Sale Area Area -->
\t\t<!-- Footer Area -->
\t\t<footer id=\"wn__footer\" class=\"footer__area bg__cat--8 brown--color\">
\t\t\t<div class=\"footer-static-top\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<div class=\"footer__widget footer__menu\">
\t\t\t\t\t\t\t\t<div class=\"ft__logo\">
\t\t\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t\t\t<img src=\"images/logo/3.png\" alt=\"logo\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"footer__content\">
\t\t\t\t\t\t\t\t\t<ul class=\"social__net social__net--2 d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"bi bi-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"bi bi-google\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"bi bi-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"bi bi-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"bi bi-youtube\"></i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t<ul class=\"mainmenu d-flex justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Trending</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Best Seller</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">All Product</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Contact</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"copyright__wrapper\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t\t\t<div class=\"copy__right__inner text-left\">
\t\t\t\t\t\t\t\t\t<p>Copyright <i class=\"fa fa-copyright\"></i> <a href=\"https://99x.com/\">99x.</a> All Rights Reserved</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t<div class=\"payment text-right\">
\t\t\t\t\t\t\t\t<img src=\"images/icons/payment.png\" alt=\"\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!-- //Footer Area -->
\t\t<!-- QUICKVIEW PRODUCT -->
\t\t<div id=\"quickview-wrapper\">
\t\t    <!-- Modal -->
\t\t    <div class=\"modal fade\" id=\"productmodal\" tabindex=\"-1\" role=\"dialog\">
\t\t        <div class=\"modal-dialog modal__container\" role=\"document\">
\t\t            <div class=\"modal-content\">
\t\t                <div class=\"modal-header modal__header\">
\t\t                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t\t                </div>
\t\t                <div class=\"modal-body\">
\t\t                    <div class=\"modal-product\">
\t\t                        <!-- Start product images -->
\t\t                        <div class=\"product-images\">
\t\t                            <div class=\"main-image images\">
\t\t                                <img alt=\"big images\" src=\"images/product/big-img/1.jpg\">
\t\t                            </div>
\t\t                        </div>
\t\t                        <!-- end product images -->
\t\t                        <div class=\"product-info\">
\t\t                            <h1>Simple Fabric Bags</h1>
\t\t                            <div class=\"rating__and__review\">
\t\t                                <ul class=\"rating\">
\t\t                                    <li><span class=\"ti-star\"></span></li>
\t\t                                    <li><span class=\"ti-star\"></span></li>
\t\t                                    <li><span class=\"ti-star\"></span></li>
\t\t                                    <li><span class=\"ti-star\"></span></li>
\t\t                                    <li><span class=\"ti-star\"></span></li>
\t\t                                </ul>
\t\t                                <div class=\"review\">
\t\t                                    <a href=\"#\">4 customer reviews</a>
\t\t                                </div>
\t\t                            </div>
\t\t                            <div class=\"price-box-3\">
\t\t                                <div class=\"s-price-box\">
\t\t                                    <span class=\"new-price\">\$17.20</span>
\t\t                                    <span class=\"old-price\">\$45.00</span>
\t\t                                </div>
\t\t                            </div>
\t\t                            <div class=\"quick-desc\">
\t\t                                Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
\t\t                            </div>
\t\t                            <div class=\"select__color\">
\t\t                                <h2>Select color</h2>
\t\t                                <ul class=\"color__list\">
\t\t                                    <li class=\"red\"><a title=\"Red\" href=\"#\">Red</a></li>
\t\t                                    <li class=\"gold\"><a title=\"Gold\" href=\"#\">Gold</a></li>
\t\t                                    <li class=\"orange\"><a title=\"Orange\" href=\"#\">Orange</a></li>
\t\t                                    <li class=\"orange\"><a title=\"Orange\" href=\"#\">Orange</a></li>
\t\t                                </ul>
\t\t                            </div>
\t\t                            <div class=\"select__size\">
\t\t                                <h2>Select size</h2>
\t\t                                <ul class=\"color__list\">
\t\t                                    <li class=\"l__size\"><a title=\"L\" href=\"#\">L</a></li>
\t\t                                    <li class=\"m__size\"><a title=\"M\" href=\"#\">M</a></li>
\t\t                                    <li class=\"s__size\"><a title=\"S\" href=\"#\">S</a></li>
\t\t                                    <li class=\"xl__size\"><a title=\"XL\" href=\"#\">XL</a></li>
\t\t                                    <li class=\"xxl__size\"><a title=\"XXL\" href=\"#\">XXL</a></li>
\t\t                                </ul>
\t\t                            </div>
\t\t                            <div class=\"social-sharing\">
\t\t                                <div class=\"widget widget_socialsharing_widget\">
\t\t                                    <h3 class=\"widget-title-modal\">Share this product</h3>
\t\t                                    <ul class=\"social__net social__net--2 d-flex justify-content-start\">
\t\t                                        <li class=\"facebook\"><a href=\"#\" class=\"rss social-icon\"><i class=\"zmdi zmdi-rss\"></i></a></li>
\t\t                                        <li class=\"linkedin\"><a href=\"#\" class=\"linkedin social-icon\"><i class=\"zmdi zmdi-linkedin\"></i></a></li>
\t\t                                        <li class=\"pinterest\"><a href=\"#\" class=\"pinterest social-icon\"><i class=\"zmdi zmdi-pinterest\"></i></a></li>
\t\t                                        <li class=\"tumblr\"><a href=\"#\" class=\"tumblr social-icon\"><i class=\"zmdi zmdi-tumblr\"></i></a></li>
\t\t                                    </ul>
\t\t                                </div>
\t\t                            </div>
\t\t                            <div class=\"addtocart-btn\">
\t\t                                <a href=\"#\">Add to cart</a>
\t\t                            </div>
\t\t                        </div>
\t\t                    </div>
\t\t                </div>
\t\t            </div>
\t\t        </div>
\t\t    </div>
\t\t</div>
\t\t<!-- END QUICKVIEW PRODUCT -->
\t</div>
\t<!-- //Main wrapper -->

\t<!-- JS Files -->
\t<script src=\"{{ asset('js/vendor/jquery-3.2.1.min.js') }}\"></script>
\t<script src=\"{{ asset('js/popper.min.js') }}\"></script>
\t<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
\t<script src=\"{{ asset('js/plugins.js') }}\"></script>
\t<script src=\"{{ asset('js/active.js') }}\"></script>
\t
</body>


</html>
", "pages/index.html.twig", "/home/pickme92/Desktop/bookstore/templates/pages/index.html.twig");
    }
}
