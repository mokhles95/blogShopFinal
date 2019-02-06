<?php

/* @Front/pages/detailProduit.html.twig */
class __TwigTemplate_b96bd0496f2474a00ff4288567ae05ce85172fbd0ee9fd949ee4046e779b17e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontBundle::layout.html.twig", "@Front/pages/detailProduit.html.twig", 1);
        $this->blocks = [
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "FrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/pages/detailProduit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Front/pages/detailProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "<!-- =====  CONTAINER START  ===== -->
<div class=\"container\">
    <div class=\"row \">
        <!-- =====  BANNER STRAT  ===== -->
        <div class=\"col-sm-12\">
            <div class=\"breadcrumb ptb_20\">
                <h1>New LCDScreen...</h1>
                <ul>
                    <li><a href=\"index.html\">Home</a></li>
                    <li><a href=\"category_page.html\">Products</a></li>
                    <li class=\"active\">New LCDS...</li>
                </ul>
            </div>
        </div>
        <!-- =====  BREADCRUMB END===== -->
        <div id=\"column-left\" class=\"col-sm-4 col-lg-3 hidden-xs\">
            <div id=\"category-menu\" class=\"navbar collapse in mb_40\" aria-expanded=\"true\" style=\"\" role=\"button\">
                <div class=\"nav-responsive\">
                    <div class=\"heading-part\">
                        <h2 class=\"main_title\">Top category</h2>
                    </div>
                    <ul class=\"nav  main-navigation collapse in\">
                        <li><a href=\"#\">Appliances</a></li>
                        <li><a href=\"#\">Mobile Phones</a></li>
                        <li><a href=\"#\">Tablet PC & Accessories</a></li>
                        <li><a href=\"#\">Consumer Electronics</a></li>
                        <li><a href=\"#\">Computers & Networking</a></li>
                        <li><a href=\"#\">Electrical & Tools</a></li>
                        <li><a href=\"#\">Apparel</a></li>
                        <li><a href=\"#\">Bags & Shoes</a></li>
                        <li><a href=\"#\">Toys & Hobbies</a></li>
                        <li><a href=\"#\">Watches & Jewelry</a></li>
                        <li><a href=\"#\">Home & Garden</a></li>
                        <li><a href=\"#\">Health & Beauty</a></li>
                        <li><a href=\"#\">Outdoors & Sports</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"left_banner left-sidebar-widget mt_30 mb_40\"> <a href=\"#\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/left1.jpg"), "html", null, true);
        echo "\" alt=\"Left Banner\" class=\"img-responsive\" /></a> </div>
            <div class=\"left-special left-sidebar-widget mb_50\">
                <div class=\"heading-part mb_10 \">
                    <h2 class=\"main_title\">Top Products</h2>
                </div>
                <div id=\"left-special\" class=\"owl-carousel\">F
                    <ul class=\"row \">
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product3.jpg"), "html", null, true);
        echo "\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product3-1.jpg"), "html", null, true);
        echo "\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product3.jpg"), "html", null, true);
        echo "\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product3.jpg"), "html", null, true);
        echo "\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"asset";
        // line 93
        echo "images/product/product5.jpg";
        echo "\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"asset";
        echo "images/product/product5-1.jpg";
        echo "\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class=\"row \">
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product6.jpg"), "html", null, true);
        echo "\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product6-1.jpg"), "html", null, true);
        echo "\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"asset";
        // line 137
        echo "images/product/product7.jpg";
        echo "\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"asset";
        echo "images/product/product7-1.jpg";
        echo "\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("mages/product/product8.jpg"), "html", null, true);
        echo "i\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product8-1.jpg"), "html", null, true);
        echo "\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class=\"row \">
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product9.jpg"), "html", null, true);
        echo "\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product9-1.jpg"), "html", null, true);
        echo "\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product10.jpg"), "html", null, true);
        echo "\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product10-1.jpg"), "html", null, true);
        echo "\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product1.jpg"), "html", null, true);
        echo "\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product1-1.jpg"), "html", null, true);
        echo "\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class=\"row \">
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product2.jpg"), "html", null, true);
        echo "\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product2-1.jpg"), "html", null, true);
        echo "\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product3.jpg"), "html", null, true);
        echo "\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product3-1.jpg"), "html", null, true);
        echo "\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product4.jpg"), "html", null, true);
        echo "\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product4-1.jpg"), "html", null, true);
        echo "\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-sm-8 col-lg-9 mtb_20\">
            <div class=\"row mt_10 \">
                <div class=\"col-md-6\">
                    <div><a class=\"thumbnails\"> <img data-name=\"product_image\" src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></div>
                    <div id=\"product-thumbnail\" class=\"owl-carousel\">
                        <div class=\"item\">
                            <div class=\"image-additional\"><a class=\"thumbnail\" href=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product1.jpg"), "html", null, true);
        echo "\" data-fancybox=\"group1\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"image-additional\"><a class=\"thumbnail\" href=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product1.jpg"), "html", null, true);
        echo "\" data-fancybox=\"group1\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"image-additional\"><a class=\"thumbnail\" href=";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product3.jpg"), "html", null, true);
        echo "\" data-fancybox=\"group1\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"image-additional\"><a class=\"thumbnail\" href=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product4.jpg"), "html", null, true);
        echo "\" data-fancybox=\"group1\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"image-additional\"><a class=\"thumbnail\" href=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product5.jpg"), "html", null, true);
        echo "\" data-fancybox=\"group1\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"image-additional\"><a class=\"thumbnail\" href=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product6.jpg"), "html", null, true);
        echo "\" data-fancybox=\"group1\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"image-additional\"><a class=\"thumbnail\" href=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product7.jpg"), "html", null, true);
        echo "\" data-fancybox=\"group1\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product1.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 prodetail caption product-thumb\">
                    <h4 data-name=\"product_name\" class=\"product-name\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">New LCDScreen and HD Video Recording</a></h4>
                    <div class=\"rating\">
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                    </div>
                    <span class=\"price mb_20\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
              </span>
                    <hr>
                    <ul class=\"list-unstyled product_info mtb_20\">
                        <li>
                            <label>Brand:</label>
                            <span> <a href=\"#\">Apple</a></span></li>
                        <li>
                            <label>Product Code:</label>
                            <span> product 20</span></li>
                        <li>
                            <label>Availability:</label>
                            <span> In Stock</span></li>
                    </ul>
                    <hr>
                    <p class=\"product-desc mtb_30\"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go. Cover Flow. Browse through your music collection by flipping..</p>
                    <div id=\"product\">
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"Sort-by col-md-6\">
                                    <label>Sort by</label>
                                    <select name=\"product_size\" id=\"select-by-size\" class=\"selectpicker form-control\">
                                        <option>Small</option>
                                        <option>Medium</option>
                                        <option>Large</option>
                                    </select>
                                </div>
                                <div class=\"Color col-md-6\">
                                    <label>Color</label>
                                    <select name=\"product_color\" id=\"select-by-color\" class=\"selectpicker form-control\">
                                        <option>Blue</option>
                                        <option>Green</option>
                                        <option>Orange</option>
                                        <option>White</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"qty mt_30 form-group2\">
                            <label>Qty</label>
                            <input name=\"product_quantity\" min=\"1\" value=\"1\" type=\"number\">
                        </div>
                        <div class=\"button-group mt_30\">
                            <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                            <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                            <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"exTab5\" class=\"mtb_30\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"> <a href=\"#1c\" data-toggle=\"tab\">Overview</a> </li>
                            <li><a href=\"#2c\" data-toggle=\"tab\">Reviews (1)</a> </li>
                            <li><a href=\"#3c\" data-toggle=\"tab\">Solution</a> </li>
                        </ul>
                        <div class=\"tab-content \">
                            <div class=\"tab-pane active\" id=\"1c\">
                                <p>CLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis malesuada mi id tristique. Sed ipsum nisi, dapibus at faucibus non, dictum a diam. Nunc vitae interdum diam. Sed finibus, justo vel maximus facilisis, sapien turpis euismod tellus, vulputate semper diam ipsum vel tellus.</p>
                            </div>
                            <div class=\"tab-pane\" id=\"2c\">
                                <form class=\"form-horizontal\">
                                    <div id=\"review\"></div>
                                    <h4 class=\"mt_20 mb_30\">Write a review</h4>
                                    <div class=\"form-group required\">
                                        <div class=\"col-sm-12\">
                                            <label class=\"control-label\" for=\"input-name\">Your Name</label>
                                            <input name=\"name\" value=\"\" id=\"input-name\" class=\"form-control\" type=\"text\">
                                        </div>
                                    </div>
                                    <div class=\"form-group required\">
                                        <div class=\"col-sm-12\">
                                            <label class=\"control-label\" for=\"input-review\">Your Review</label>
                                            <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                                            <div class=\"help-block\"><span class=\"text-danger\">Note:</span> HTML is not translated!</div>
                                        </div>
                                    </div>
                                    <div class=\"form-group required\">
                                        <div class=\"col-md-6\">
                                            <label class=\"control-label\">Rating</label>
                                            <div class=\"rates\"><span>Bad</span>
                                                <input name=\"rating\" value=\"1\" type=\"radio\">
                                                <input name=\"rating\" value=\"2\" type=\"radio\">
                                                <input name=\"rating\" value=\"3\" type=\"radio\">
                                                <input name=\"rating\" value=\"4\" type=\"radio\">
                                                <input name=\"rating\" value=\"5\" type=\"radio\">
                                                <span>Good</span></div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"buttons pull-right\">
                                                <button type=\"submit\" class=\"btn btn-md btn-link\">Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class=\"tab-pane\" id=\"3c\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis malesuada mi id tristique. Sed ipsum nisi, dapibus at faucibus non, dictum a diam. Nunc vitae interdum diam. Sed finibus, justo vel maximus facilisis, sapien turpis euismod tellus, vulputate semper diam ipsum vel tellus.applied clearfix to the tab-content to rid of the gap between the tab and the content</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"heading-part text-center mb_10\">
                        <h2 class=\"main_title mt_50\">Related Products</h2>
                    </div>
                    <div class=\"related_pro box\">
                        <div class=\"product-layout  product-grid related-pro  owl-carousel mb_50 \">
                            <div class=\"item\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product7.jpg"), "html", null, true);
        echo "\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product7-1.jpg"), "html", null, true);
        echo "\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                        <div class=\"button-group text-center\">
                                            <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                            <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                            <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                            <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                        </div>
                                    </div>
                                    <div class=\"caption product-detail text-center\">
                                        <h6 data-name=\"product_name\" class=\"product-name mt_20\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\">
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                        </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"images/product/product8.jpg\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"images/product/product8-1.jpg\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                        <div class=\"button-group text-center\">
                                            <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                            <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                            <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                            <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                        </div>
                                    </div>
                                    <div class=\"caption product-detail text-center\">
                                        <h6 data-name=\"product_name\" class=\"product-name mt_20\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\">
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                        </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"images/product/product9.jpg\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"images/product/product9-1.jpg\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                        <div class=\"button-group text-center\">
                                            <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                            <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                            <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                            <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                        </div>
                                    </div>
                                    <div class=\"caption product-detail text-center\">
                                        <h6 data-name=\"product_name\" class=\"product-name mt_20\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\">
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                        </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product10.jpg"), "html", null, true);
        echo "\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product10.jpg"), "html", null, true);
        echo "\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                        <div class=\"button-group text-center\">
                                            <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                            <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                            <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                            <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                        </div>
                                    </div>
                                    <div class=\"caption product-detail text-center\">
                                        <h6 data-name=\"product_name\" class=\"product-name mt_20\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\">
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                        </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product1.jpg"), "html", null, true);
        echo "\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product1-1.jpg"), "html", null, true);
        echo "\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                        <div class=\"button-group text-center\">
                                            <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                            <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                            <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                            <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                        </div>
                                    </div>
                                    <div class=\"caption product-detail text-center\">
                                        <h6 data-name=\"product_name\" class=\"product-name mt_20\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\">
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                        </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"product-thumb\">{
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"";
        // line 581
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product2.jpg"), "html", null, true);
        echo "\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/product/product2-1.jpg"), "html", null, true);
        echo "\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                        <div class=\"button-group text-center\">
                                            <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                            <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                            <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                            <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                        </div>
                                    </div>
                                    <div class=\"caption product-detail text-center\">
                                        <h6 data-name=\"product_name\" class=\"product-name mt_20\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\">
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                        </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"brand_carouse\" class=\"ptb_30 text-center\">
        <div class=\"type-01\">
            <div class=\"heading-part mb_10 \">
                <h2 class=\"main_title\">Brand Logo</h2>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"brand owl-carousel ptb_20\">

                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Disney\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Harley\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 621
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 623
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"";
        // line 625
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/brand/brand1.png"), "html", null, true);
        echo "\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =====  CONTAINER END  ===== -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Front/pages/detailProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  815 => 625,  811 => 624,  807 => 623,  803 => 622,  799 => 621,  795 => 620,  791 => 619,  787 => 618,  745 => 581,  716 => 557,  687 => 533,  610 => 461,  478 => 334,  470 => 331,  462 => 328,  454 => 325,  446 => 322,  438 => 319,  430 => 316,  424 => 313,  394 => 288,  368 => 267,  342 => 246,  314 => 223,  288 => 202,  262 => 181,  234 => 158,  208 => 137,  182 => 116,  154 => 93,  128 => 72,  102 => 51,  89 => 41,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FrontBundle::layout.html.twig\" %}
{% block container %}
<!-- =====  CONTAINER START  ===== -->
<div class=\"container\">
    <div class=\"row \">
        <!-- =====  BANNER STRAT  ===== -->
        <div class=\"col-sm-12\">
            <div class=\"breadcrumb ptb_20\">
                <h1>New LCDScreen...</h1>
                <ul>
                    <li><a href=\"index.html\">Home</a></li>
                    <li><a href=\"category_page.html\">Products</a></li>
                    <li class=\"active\">New LCDS...</li>
                </ul>
            </div>
        </div>
        <!-- =====  BREADCRUMB END===== -->
        <div id=\"column-left\" class=\"col-sm-4 col-lg-3 hidden-xs\">
            <div id=\"category-menu\" class=\"navbar collapse in mb_40\" aria-expanded=\"true\" style=\"\" role=\"button\">
                <div class=\"nav-responsive\">
                    <div class=\"heading-part\">
                        <h2 class=\"main_title\">Top category</h2>
                    </div>
                    <ul class=\"nav  main-navigation collapse in\">
                        <li><a href=\"#\">Appliances</a></li>
                        <li><a href=\"#\">Mobile Phones</a></li>
                        <li><a href=\"#\">Tablet PC & Accessories</a></li>
                        <li><a href=\"#\">Consumer Electronics</a></li>
                        <li><a href=\"#\">Computers & Networking</a></li>
                        <li><a href=\"#\">Electrical & Tools</a></li>
                        <li><a href=\"#\">Apparel</a></li>
                        <li><a href=\"#\">Bags & Shoes</a></li>
                        <li><a href=\"#\">Toys & Hobbies</a></li>
                        <li><a href=\"#\">Watches & Jewelry</a></li>
                        <li><a href=\"#\">Home & Garden</a></li>
                        <li><a href=\"#\">Health & Beauty</a></li>
                        <li><a href=\"#\">Outdoors & Sports</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"left_banner left-sidebar-widget mt_30 mb_40\"> <a href=\"#\"><img src=\"{{ asset('images/left1.jpg') }}\" alt=\"Left Banner\" class=\"img-responsive\" /></a> </div>
            <div class=\"left-special left-sidebar-widget mb_50\">
                <div class=\"heading-part mb_10 \">
                    <h2 class=\"main_title\">Top Products</h2>
                </div>
                <div id=\"left-special\" class=\"owl-carousel\">F
                    <ul class=\"row \">
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{ asset('images/product/product3.jpg') }}\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{asset ('images/product/product3-1.jpg') }}\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{asset ('images/product/product3.jpg') }}\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{asset ('images/product/product3.jpg') }}\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"asset{{ ('images/product/product5.jpg') }}\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"asset{{ ('images/product/product5-1.jpg') }}\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class=\"row \">
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{asset ('images/product/product6.jpg') }}\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{ asset('images/product/product6-1.jpg') }}\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"asset{{ ('images/product/product7.jpg') }}\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"asset{{ ('images/product/product7-1.jpg') }}\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{asset ('mages/product/product8.jpg') }}i\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{asset ('images/product/product8-1.jpg') }}\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class=\"row \">
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{asset ('images/product/product9.jpg') }}\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{ asset('images/product/product9-1.jpg') }}\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{asset ('images/product/product10.jpg') }}\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{asset ('images/product/product10-1.jpg') }}\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{ asset('images/product/product1.jpg') }}\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{asset ('images/product/product1-1.jpg') }}\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class=\"row \">
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{asset ('images/product/product2.jpg') }}\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{asset ('images/product/product2-1.jpg') }}\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{asset ('images/product/product3.jpg') }}\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{asset ('images/product/product3-1.jpg') }}\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                        <li class=\"item product-layout-left mb_20\">
                            <div class=\"product-list col-xs-4\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{asset ('images/product/product4.jpg') }}\"> <img class=\"img-responsive\" title=\"iPod Classic\" alt=\"iPod Classic\" src=\"{{asset ('images/product/product4-1.jpg') }}\"> </a> </div>
                                </div>
                            </div>
                            <div class=\"col-xs-8\">
                                <div class=\"caption product-detail\">
                                    <h6 class=\"product-name\"><a href=\"#\">New LCDScreen and HD Video Recording</a></h6>
                                    <div class=\"rating\">
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                    </div>
                                    <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                      </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-sm-8 col-lg-9 mtb_20\">
            <div class=\"row mt_10 \">
                <div class=\"col-md-6\">
                    <div><a class=\"thumbnails\"> <img data-name=\"product_image\" src=\"{{ asset('images/product/product1.jpg') }}\" alt=\"\" /></a></div>
                    <div id=\"product-thumbnail\" class=\"owl-carousel\">
                        <div class=\"item\">
                            <div class=\"image-additional\"><a class=\"thumbnail\" href=\"{{asset ('images/product/product1.jpg') }}\" data-fancybox=\"group1\"> <img src=\"{{ asset('images/product/product1.jpg') }}\" alt=\"\" /></a></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"image-additional\"><a class=\"thumbnail\" href=\"{{asset ('images/product/product1.jpg') }}\" data-fancybox=\"group1\"> <img src=\"{{ asset('images/product/product1.jpg') }}\" alt=\"\" /></a></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"image-additional\"><a class=\"thumbnail\" href={{asset ('images/product/product3.jpg') }}\" data-fancybox=\"group1\"> <img src=\"{{ asset('images/product/product1.jpg') }}\" alt=\"\" /></a></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"image-additional\"><a class=\"thumbnail\" href=\"{{asset ('images/product/product4.jpg') }}\" data-fancybox=\"group1\"> <img src=\"{{ asset('images/product/product1.jpg') }}\" alt=\"\" /></a></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"image-additional\"><a class=\"thumbnail\" href=\"{{asset ('images/product/product5.jpg') }}\" data-fancybox=\"group1\"> <img src=\"{{ asset('images/product/product1.jpg') }}\" alt=\"\" /></a></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"image-additional\"><a class=\"thumbnail\" href=\"{{asset ('images/product/product6.jpg') }}\" data-fancybox=\"group1\"> <img src=\"{{ asset('images/product/product1.jpg') }}\" alt=\"\" /></a></div>
                        </div>
                        <div class=\"item\">
                            <div class=\"image-additional\"><a class=\"thumbnail\" href=\"{{asset ('images/product/product7.jpg') }}\" data-fancybox=\"group1\"> <img src=\"{{ asset('images/product/product1.jpg') }}\" alt=\"\" /></a></div>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 prodetail caption product-thumb\">
                    <h4 data-name=\"product_name\" class=\"product-name\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">New LCDScreen and HD Video Recording</a></h4>
                    <div class=\"rating\">
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                    </div>
                    <span class=\"price mb_20\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
              </span>
                    <hr>
                    <ul class=\"list-unstyled product_info mtb_20\">
                        <li>
                            <label>Brand:</label>
                            <span> <a href=\"#\">Apple</a></span></li>
                        <li>
                            <label>Product Code:</label>
                            <span> product 20</span></li>
                        <li>
                            <label>Availability:</label>
                            <span> In Stock</span></li>
                    </ul>
                    <hr>
                    <p class=\"product-desc mtb_30\"> More room to move. With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go. Cover Flow. Browse through your music collection by flipping..</p>
                    <div id=\"product\">
                        <div class=\"form-group\">
                            <div class=\"row\">
                                <div class=\"Sort-by col-md-6\">
                                    <label>Sort by</label>
                                    <select name=\"product_size\" id=\"select-by-size\" class=\"selectpicker form-control\">
                                        <option>Small</option>
                                        <option>Medium</option>
                                        <option>Large</option>
                                    </select>
                                </div>
                                <div class=\"Color col-md-6\">
                                    <label>Color</label>
                                    <select name=\"product_color\" id=\"select-by-color\" class=\"selectpicker form-control\">
                                        <option>Blue</option>
                                        <option>Green</option>
                                        <option>Orange</option>
                                        <option>White</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"qty mt_30 form-group2\">
                            <label>Qty</label>
                            <input name=\"product_quantity\" min=\"1\" value=\"1\" type=\"number\">
                        </div>
                        <div class=\"button-group mt_30\">
                            <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                            <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                            <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"exTab5\" class=\"mtb_30\">
                        <ul class=\"nav nav-tabs\">
                            <li class=\"active\"> <a href=\"#1c\" data-toggle=\"tab\">Overview</a> </li>
                            <li><a href=\"#2c\" data-toggle=\"tab\">Reviews (1)</a> </li>
                            <li><a href=\"#3c\" data-toggle=\"tab\">Solution</a> </li>
                        </ul>
                        <div class=\"tab-content \">
                            <div class=\"tab-pane active\" id=\"1c\">
                                <p>CLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis malesuada mi id tristique. Sed ipsum nisi, dapibus at faucibus non, dictum a diam. Nunc vitae interdum diam. Sed finibus, justo vel maximus facilisis, sapien turpis euismod tellus, vulputate semper diam ipsum vel tellus.</p>
                            </div>
                            <div class=\"tab-pane\" id=\"2c\">
                                <form class=\"form-horizontal\">
                                    <div id=\"review\"></div>
                                    <h4 class=\"mt_20 mb_30\">Write a review</h4>
                                    <div class=\"form-group required\">
                                        <div class=\"col-sm-12\">
                                            <label class=\"control-label\" for=\"input-name\">Your Name</label>
                                            <input name=\"name\" value=\"\" id=\"input-name\" class=\"form-control\" type=\"text\">
                                        </div>
                                    </div>
                                    <div class=\"form-group required\">
                                        <div class=\"col-sm-12\">
                                            <label class=\"control-label\" for=\"input-review\">Your Review</label>
                                            <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                                            <div class=\"help-block\"><span class=\"text-danger\">Note:</span> HTML is not translated!</div>
                                        </div>
                                    </div>
                                    <div class=\"form-group required\">
                                        <div class=\"col-md-6\">
                                            <label class=\"control-label\">Rating</label>
                                            <div class=\"rates\"><span>Bad</span>
                                                <input name=\"rating\" value=\"1\" type=\"radio\">
                                                <input name=\"rating\" value=\"2\" type=\"radio\">
                                                <input name=\"rating\" value=\"3\" type=\"radio\">
                                                <input name=\"rating\" value=\"4\" type=\"radio\">
                                                <input name=\"rating\" value=\"5\" type=\"radio\">
                                                <span>Good</span></div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"buttons pull-right\">
                                                <button type=\"submit\" class=\"btn btn-md btn-link\">Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class=\"tab-pane\" id=\"3c\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis malesuada mi id tristique. Sed ipsum nisi, dapibus at faucibus non, dictum a diam. Nunc vitae interdum diam. Sed finibus, justo vel maximus facilisis, sapien turpis euismod tellus, vulputate semper diam ipsum vel tellus.applied clearfix to the tab-content to rid of the gap between the tab and the content</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"heading-part text-center mb_10\">
                        <h2 class=\"main_title mt_50\">Related Products</h2>
                    </div>
                    <div class=\"related_pro box\">
                        <div class=\"product-layout  product-grid related-pro  owl-carousel mb_50 \">
                            <div class=\"item\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"{{ asset('images/product/product7.jpg') }}\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"{{asset ('images/product/product7-1.jpg') }}\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                        <div class=\"button-group text-center\">
                                            <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                            <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                            <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                            <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                        </div>
                                    </div>
                                    <div class=\"caption product-detail text-center\">
                                        <h6 data-name=\"product_name\" class=\"product-name mt_20\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\">
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                        </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"images/product/product8.jpg\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"images/product/product8-1.jpg\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                        <div class=\"button-group text-center\">
                                            <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                            <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                            <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                            <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                        </div>
                                    </div>
                                    <div class=\"caption product-detail text-center\">
                                        <h6 data-name=\"product_name\" class=\"product-name mt_20\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\">
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                        </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"images/product/product9.jpg\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"images/product/product9-1.jpg\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                        <div class=\"button-group text-center\">
                                            <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                            <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                            <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                            <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                        </div>
                                    </div>
                                    <div class=\"caption product-detail text-center\">
                                        <h6 data-name=\"product_name\" class=\"product-name mt_20\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\">
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                        </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"{{ asset('images/product/product10.jpg') }}\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"{{asset ('images/product/product10.jpg') }}\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                        <div class=\"button-group text-center\">
                                            <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                            <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                            <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                            <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                        </div>
                                    </div>
                                    <div class=\"caption product-detail text-center\">
                                        <h6 data-name=\"product_name\" class=\"product-name mt_20\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\">
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                        </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"product-thumb\">
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"{{ asset('images/product/product1.jpg') }}\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"{{ asset('images/product/product1-1.jpg') }}\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                        <div class=\"button-group text-center\">
                                            <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                            <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                            <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                            <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                        </div>
                                    </div>
                                    <div class=\"caption product-detail text-center\">
                                        <h6 data-name=\"product_name\" class=\"product-name mt_20\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\">
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                        </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"product-thumb\">{
                                    <div class=\"image product-imageblock\"> <a href=\"product_detail_page.html\"> <img data-name=\"product_image\" src=\"{{ asset('images/product/product2.jpg') }}\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> <img src=\"{{asset ('images/product/product2-1.jpg') }}\" alt=\"iPod Classic\" title=\"iPod Classic\" class=\"img-responsive\"> </a>
                                        <div class=\"button-group text-center\">
                                            <div class=\"wishlist\"><a href=\"#\"><span>wishlist</span></a></div>
                                            <div class=\"quickview\"><a href=\"#\"><span>Quick View</span></a></div>
                                            <div class=\"compare\"><a href=\"#\"><span>Compare</span></a></div>
                                            <div class=\"add-to-cart\"><a href=\"#\"><span>Add to cart</span></a></div>
                                        </div>
                                    </div>
                                    <div class=\"caption product-detail text-center\">
                                        <h6 data-name=\"product_name\" class=\"product-name mt_20\"><a href=\"#\" title=\"Casual Shirt With Ruffle Hem\">New LCDScreen and HD Video Recording</a></h6>
                                        <div class=\"rating\">
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-1x\"></i></span>
                                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i><i class=\"fa fa-star fa-stack-x\"></i></span>
                                        </div>
                                        <span class=\"price\"><span class=\"amount\"><span class=\"currencySymbol\">\$</span>70.00</span>
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"brand_carouse\" class=\"ptb_30 text-center\">
        <div class=\"type-01\">
            <div class=\"heading-part mb_10 \">
                <h2 class=\"main_title\">Brand Logo</h2>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"brand owl-carousel ptb_20\">

                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset ('images/brand/brand1.png')}}\" alt=\"Disney\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset ('images/brand/brand1.png')}}\" alt=\"Harley\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset ('images/brand/brand1.png')}}\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset ('images/brand/brand1.png')}}\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset ('images/brand/brand1.png')}}\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset ('images/brand/brand1.png')}}\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset ('images/brand/brand1.png')}}\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                        <div class=\"item text-center\"> <a href=\"#\"><img src=\"{{ asset ('images/brand/brand1.png')}}\" alt=\"Canon\" class=\"img-responsive\" /></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =====  CONTAINER END  ===== -->
{% endblock %}
", "@Front/pages/detailProduit.html.twig", "C:\\wamp64\\www\\blogShopFinal\\src\\FrontBundle\\Resources\\views\\pages\\detailProduit.html.twig");
    }
}
