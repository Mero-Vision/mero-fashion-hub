<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Mero Fashion Hub</title>
    <meta name="keywords"
        content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
    <meta name="author" content="ashishmaraviya">
    @include('user.layout.header')



</head>

<body>
    <div id="ec-overlay">
        <div class="ec-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    @include('user.layout.nav')


    <!-- Ekka Cart Start -->
    <div class="ec-side-cart-overlay"></div>
    <div id="ec-side-cart" class="ec-side-cart">
        <div class="ec-cart-inner">
            <div class="ec-cart-top">
                <div class="ec-cart-title">
                    <span class="cart_title">My Cart</span>
                    <button class="ec-close">×</button>
                </div>
                <ul class="eccart-pro-items">
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="assets/images/product-image/6_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="single-product-left-sidebar.html" class="cart_pro_title">Unisex classic tee</a>
                            <span class="cart-price"><span>$99.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="assets/images/product-image/3_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Leather purse for women</a>
                            <span class="cart-price"><span>$85.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="assets/images/product-image/4_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Woolen hat for men</a>
                            <span class="cart-price"><span>$130.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="ec-cart-bottom">
                <div class="cart-sub-total">
                    <table class="table cart-table">
                        <tbody>
                            <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right">$300.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right primary-color">$360.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    <a href="cart.html" class="btn btn-primary">View Cart</a>
                    <a href="checkout.html" class="btn btn-secondary">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Ekka Cart End -->

    <!-- Main Slider Start -->
    <div class="ec-main-slider section ">
        <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
            <!-- Main slider -->
            <div class="swiper-wrapper">
                <div class="ec-slide-item swiper-slide d-flex slide-1">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h2 class="ec-slide-stitle">Women Fashion</h2>
                                    <h1 class="ec-slide-title">Top New Winter <br>Collection</h1>
                                    <p>Get it form 50% off</p>
                                    <a href="#" class="btn btn-lg btn-primary">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-slide-item swiper-slide d-flex slide-2">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h2 class="ec-slide-stitle">Men's Fashion</h2>
                                    <h1 class="ec-slide-title">Top New summer <br>Collection</h1>
                                    <p>Get it form 50% off</p>
                                    <a href="#" class="btn btn-lg btn-primary">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
    <!-- Main Slider End -->

    <!--  category Section Start -->
    <section class="section ec-category-section section-space-mb">
        <div class="container">
            <div class="row">
                <div class="ec_cat_slider">
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <h2 class="d-none">Category</h2>
                                <div class="ec-cat-image">
                                    <i class="fi-rr-laptop"></i>
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Laptops & PC</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <div class="ec-cat-image">
                                    <i class="fi-rr-stopwatch"></i>
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Smartwatches</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <div class="ec-cat-image">
                                    <i class="fi-rr-camera"></i>
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Cameras</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <div class="ec-cat-image">
                                    <i class="fi-rr-gamepad"></i>
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Console Games</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <div class="ec-cat-image">
                                    <i class="fi-rr-headset"></i>
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Headphones</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <div class="ec-cat-image">
                                    <i class="fi-rr-video-camera"></i>
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Virtual Reality</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="shop-left-sidebar-col-3.html">
                                <div class="ec-cat-image">
                                    <i class="fi-rr-camera"></i>
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Cameras</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--category Section End -->

    <!-- ec Banner Section Start -->
    <section class="ec-banner section section-space-p">
        <h2 class="d-none">Banner</h2>
        <div class="container">
            <div class="row">
                <div class="ec-banner-bottom">
                    <div class="ec-banner-inner">
                        <div class="ec-banner-block ec-banner-block-4 mar-b-30">
                            <div class="banner-block">
                                <img src="{{ url('assets/img/banner/13.jpg') }}" alt="" />
                                <div class="banner-content">
                                    <div class="banner-text">
                                        <span class="ec-banner-discount">Big Discount</span>
                                        <span class="ec-banner-title">20% Off</span>
                                        <span class="ec-banner-stitle">Men shoes collection</span>
                                    </div>
                                    <span class="ec-banner-btn"><a href="shop-left-sidebar-col-3.html">Shop
                                            Now</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="ec-banner-block ec-banner-block-5">
                            <div class="banner-block">
                                <img src="{{ url('assets/img/banner/14.jpg') }}" alt="" />
                                <div class="banner-content">
                                    <div class="banner-text">
                                        <span class="ec-banner-discount">Big Discount</span>
                                        <span class="ec-banner-title">40% Off</span>
                                        <span class="ec-banner-stitle">Women jacket collection</span>
                                    </div>
                                    <span class="ec-banner-btn"><a href="shop-left-sidebar-col-3.html">Shop
                                            Now</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ec Banner Section End -->

    <!-- Trending Item Start -->
    <section class="section ec-trend-product section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-title">Trending Item</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ec-trend-slider">


                    <div class="ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image" src="{{ url('assets/img/products/2_2.jpg') }}"
                                            alt="Product" />
                                        <img class="hover-image" src="{{ url('assets/img/products/2_2.jpg') }}"
                                            alt="Product" />
                                    </a>
                                    <span class="percentage">-30%</span>
                                    <span class="flags">
                                        <span class="sale">On Sale</span>
                                    </span>
                                    <button title="Add To Cart" class=" add-to-cart"><i
                                            class="fi-rr-shopping-basket"></i> Add
                                        To Cart</button>
                                    <div class="ec-pro-actions">
                                        <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                class="fi-rr-heart"></i></a>
                                        <a href="compare.html" class="ec-btn-group compare" title="Compare"><i
                                                class="fi fi-rr-arrows-repeat"></i></a>
                                        <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                            title="Quick view" data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><i class="fi fi-rr-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <div class="ec-pro-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Baby toy teddybear</a>
                                </h5>
                                <span class="ec-price">
                                    <span class="new-price">$399.00</span>
                                    <span class="old-price">$450.00</span>
                                </span>
                                <div class="ec-pro-option">
                                    <div class="ec-pro-color">
                                        <ul class="ec-opt-swatch ec-change-img">
                                            <li class="active"><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ url('assets/img/products/2_2.jpg') }}"
                                                    data-src-hover="{{ url('assets/img/products/2_2.jpg') }}"
                                                    data-tooltip="Gray"><span
                                                        style="background-color:#be7a50;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ url('assets/img/products/2_2.jpg') }}"
                                                    data-src-hover="{{ url('assets/img/products/2_2.jpg') }}"
                                                    data-tooltip="Orange"><span
                                                        style="background-color:#bd4e6f;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ url('assets/img/products/2_2.jpg') }}"
                                                    data-src-hover="{{ url('assets/img/products/2_2.jpg') }}"
                                                    data-tooltip="Green"><span
                                                        style="background-color:#528fb7;"></span></a></li>
                                            <li><a href="#" class="ec-opt-clr-img"
                                                    data-src="{{ url('assets/img/products/2_2.jpg') }}"
                                                    data-src-hover="{{ url('assets/img/products/2_2.jpg') }}"
                                                    data-tooltip="Sky Blue"><span
                                                        style="background-color:#56a58e;"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="ec-pro-size">
                                        <ul class="ec-opt-size">
                                            <li><a href="#" class="ec-opt-sz" data-old="$470.00"
                                                    data-new="$419.00" data-tooltip="Large">L</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>






                </div>
            </div>
        </div>
    </section>
    <!-- Trending Item end -->

    <!--  offer Section Start -->
    <section class="section ec-offer-section section-space-mt section-space-mb">
        <h2 class="d-none">Offer</h2>
        <img src="{{ url('assets/img/offer_bg_2.jpg') }}" alt="" class="offer_bg" />
        <div class="ec-offer-inner">
            <div class="row justify-content-end">
                <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center ec-offer-content">
                    <h2 class="ec-offer-stitle">Style Of The Year</h2>
                    <h2 class="ec-offer-title">Trading Offer Sale</h2>
                    <span class="ec-offer-desc">New Product Purchase Up To 50% Off All Now Fast Shopping</span>
                    <span class="ec-offer-btn"><a href="#" class="btn btn-lg btn-primary">Shop Now</a></span>
                </div>
            </div>
        </div>
    </section>
    <!-- offer Section End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-title">Exclusive Products</h2>
                    </div>
                </div>

                <!-- Tab Start -->
                <div class="col-md-12 text-center mb-3">
                    <ul class="ec-pro-tab-nav nav justify-content-center">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                href="#tab-pro-new-arrivals">New Arrivals</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                href="#tab-pro-special-offer">Special Offer</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                href="#tab-pro-best-sellers">Best
                                Sellers</a></li>
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content">
                        <!-- 1st Product tab start -->
                        <div class="tab-pane fade show active" id="tab-pro-new-arrivals">
                            <div class="row">


                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ url('assets/img/products/11_2.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ url('assets/img/products/11_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">New</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Smart air
                                                    pods pro</a></h5>
                                            <span class="ec-price">
                                                <span class="new-price">$75.00</span>
                                                <span class="old-price">$99.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ url('assets/img/products/11_2.jpg') }}"
                                                                data-src-hover="{{ url('assets/img/products/11_2.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#5e6778;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ url('assets/img/products/11_2.jpg') }}"
                                                                data-src-hover="{{ url('assets/img/products/11_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#d38d85;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ url('assets/img/products/11_2.jpg') }}"
                                                                data-src-hover="{{ url('assets/img/products/11_2.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#c7b899;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ url('assets/img/products/11_2.jpg') }}"
                                                                data-src-hover="{{ url('assets/img/products/11_2.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#d3d3d3;"></span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <!-- ec 1st Product tab end -->

                        <!-- ec 2nd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-special-offer">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ url('assets/img/products/5_2.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ url('assets/img/products/5_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">-15%</span>
                                                <span class="flags">
                                                    <span class="sale">New</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Leather
                                                    satchel for womens</a></h5>
                                            <span class="ec-price">
                                                <span class="new-price">$62.00</span>
                                                <span class="old-price">$78.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ url('assets/img/products/5_2.jpg') }}"
                                                                data-src-hover="{{ url('assets/img/products/5_2.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#6a8b36;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ url('assets/img/products/5_2.jpg') }}"
                                                                data-src-hover="{{ url('assets/img/products/5_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#b9754f;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ url('assets/img/products/5_2.jpg') }}"
                                                                data-src-hover="{{ url('assets/img/products/5_2.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#bd669d;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ url('assets/img/products/5_2.jpg') }}"
                                                                data-src-hover="{{ url('assets/img/products/5_2.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#8e6db7;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$78.00" data-new="$62.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$95.00"
                                                                data-new="$70.00" data-tooltip="Medium">M</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <!-- ec 2nd Product tab end -->


                        <!-- ec 3rd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-best-sellers">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ url('assets/img/products/1_2.jpg') }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ url('assets/img/products/1_2.jpg') }}"
                                                        alt="Product" />
                                                </a>
                                                <span class="percentage">-30%</span>
                                                <span class="flags">
                                                    <span class="sale">On Sale</span>
                                                </span>
                                                <button title="Add To Cart" class=" add-to-cart"><i
                                                        class="fi-rr-shopping-basket"></i> Add
                                                    To Cart</button>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><i
                                                            class="fi-rr-heart"></i></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><i class="fi fi-rr-arrows-repeat"></i></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><i
                                                            class="fi fi-rr-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <div class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </div>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Boy shirt
                                                    Plain fashion</a></h5>
                                            <span class="ec-price">
                                                <span class="new-price">$399.00</span>
                                                <span class="old-price">$450.00</span>
                                            </span>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-color">
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ url('assets/img/products/1_2.jpg') }}"
                                                                data-src-hover="{{ url('assets/img/products/1_2.jpg') }}"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#fc0404;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ url('assets/img/products/1_2.jpg') }}"
                                                                data-src-hover="{{ url('assets/img/products/1_2.jpg') }}"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#dadb10;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ url('assets/img/products/1_2.jpg') }}"
                                                                data-src-hover="{{ url('assets/img/products/1_2.jpg') }}"
                                                                data-tooltip="Green"><span
                                                                    style="background-color:#d105c6;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{ url('assets/img/products/1_2.jpg') }}"
                                                                data-src-hover="{{ url('assets/img/products/1_2.jpg') }}"
                                                                data-tooltip="Sky Blue"><span
                                                                    style="background-color:#02ae0c;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-size">
                                                    <ul class="ec-opt-size">
                                                        <li class="active"><a href="#" class="ec-opt-sz"
                                                                data-old="$450.00" data-new="$399.00"
                                                                data-tooltip="Small">S</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$460.00"
                                                                data-new="$409.00" data-tooltip="Medium">M</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$470.00"
                                                                data-new="$419.00" data-tooltip="Large">L</a></li>
                                                        <li><a href="#" class="ec-opt-sz" data-old="$480.00"
                                                                data-new="$429.00" data-tooltip="Extra Large">XL</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </div>
                        </div>
                        <!-- ec 3rd Product tab end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ec Product tab Area End -->



    <!--  services Section Start -->
    <section class="section ec-services-section section-space-p">
        <h2 class="d-none">Services</h2>
        <div class="container">
            <div class="row">
                <div class="ec_ser_content ec_ser_content_1 col-sm-12 col-md-4">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <i class="fi fi-ts-truck-moving"></i>
                        </div>
                        <div class="ec-service-desc">
                            <h2>Free Shipping</h2>
                            <p>Lorem is simply dummy text</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_2 col-sm-12 col-md-4">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <i class="fi fi-ts-hand-holding-seeding"></i>
                        </div>
                        <div class="ec-service-desc">
                            <h2>24 / 7 Online Support</h2>
                            <p>Lorem is simply dummy text</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_3 col-sm-12 col-md-4">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <i class="fi fi-ts-donate"></i>
                        </div>
                        <div class="ec-service-desc">
                            <h2>Money back</h2>
                            <p>Lorem is simply dummy text</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services Section End -->







    



    <!-- Add to Cart successfully toast Start -->
    <div id="addtocart_toast" class="addtocart_toast">
        <div class="desc">You Have Add To Cart Successfully</div>
    </div>
    <div id="wishlist_toast" class="wishlist_toast">
        <div class="desc">You Have Add To Wishlist Successfully</div>
    </div>
    <!-- Add to Cart successfully toast end -->

    <!-- Chat Boat -->
    <!-- <div class="dim"></div> -->
    <div class="ec-chat animate__animated animate__fadeOutRight">
        <div class="ec-dim"></div>
        <div class="row ec-setuser">
            <div class="col-md-12 p-0">
                <p class="welcome-text"><b>Hi John! </b><br /> Please fill out the form below to start chatting.</p>
            </div>
            <div class="col-md-12 p-0">
                <div class="form-group">
                    <input type="text" class="ec-form form-control username" maxlength=20 placeholder="Name..">
                </div>
            </div>
            <div class="col-md-12 p-0">
                <div class="form-group">
                    <input type="email" class="ec-form form-control useremail" placeholder="Email">
                </div>
            </div>
            <div class="col-md-12 p-0">
                <select class="ec-form form-control select2_el select2-hidden-accessible userreson"
                    data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option selected="selected">Select Option</option>
                    <option value="1">Order</option>
                    <option value="2">Payment</option>
                    <option value="3">Return</option>
                    <option data-select2-id="3">Other</option>
                </select>
            </div>
            <div class="col-md-12 p-0">
                <button class="btn btn-primary btn-rounded btn-block">Start Chat</button>
            </div>
        </div>
        <div class="ec-reminder">Welcome! Remember to be kind to others&hellip;</div>
        <div class="ec-chatbox">
            <div class="messages-wrapper">
                <div class="status"></div>
            </div>
        </div>
        <div class="ec-typing"></div>
        <div class="ec-reply">
            <input class="usermsg" type="text" placeholder="Type a message..." disabled /><button
                class="send">Send</button>
        </div>
    </div>

    <div class="ec-float-chat">
        <div class="ec-chat-icon">
            <i class="fi-rr-headset"></i>
        </div>
    </div>
    <!-- Chat Boat end -->
    @include('user.layout.footer')


</body>

</html>
