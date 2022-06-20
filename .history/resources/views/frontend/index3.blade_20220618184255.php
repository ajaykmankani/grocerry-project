@include ('common.header')

    <!-- End Header Area -->
    <!-- Start Mobile Menu Area -->
    <div class="mobile-menu-area">

        <!--offcanvas menu area start-->
        <div class="off_canvars_overlay">

        </div>
        <div class="offcanvas_menu">
            <div class="offcanvas_menu_wrapper">
                <div class="canvas_close">
                    <a href="javascript:void(0)"><i class="fas fa-times"></i></a>
                </div>
                <div class="mobile-logo">
                    <a href="index-2.html">
                        <img src="{{URL::asset('assets/img/logo.png'); }}" alt="logo">
                    </a>
                </div>
                <div id="menu" class="text-left ">
                    <ul class="offcanvas_main_menu">
                        <li class="menu-item-has-children active">
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index-2.html">Home Style 01</a></li>
                                <li><a href="index2.html">Home Style 02</a></li>
                                <li><a href="index3.html">Home Style 03</a></li>
                                <li><a href="index4.html">Home Style 04</a></li>
                                <li><a href="index5.html">Home Style 05</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="about.html"> About Us</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Page</a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children">
                                    <a href="#">Team</a>
                                    <ul class="sub-menu">
                                        <li><a href="team.html">Team Styel 1</a></li>
                                        <li><a href="team-2.html">Team Styel 2</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="pricing.html">Pricing Plane</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="services-details.html">Services Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Portfolio</a>
                                    <ul class="sub-menu">
                                        <li><a href="porfolio.html">Portfolio</a></li>
                                        <li><a href="porfolio-details.html">Portfolio Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">User</a>
                                    <ul class="sub-menu">
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="forget-password.html">Forget Password</a></li>
                                        <li><a href="account.html">My Account</a></li>
                                    </ul>
                                </li>
                                <li><a href="faq.html">Faq</a></li>
                                <li><a href="404.html">404 Error</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                <li><a href="shop-2-column.html">Shop 2 Columns</a></li>
                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                <li><a href="product-details.html">Single Products</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="single.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="contact.html"> Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->
    <!-- Start Header Search -->
    <div class="f_header_search_canvas">
        <div class="f_header_search_canvas-full">
            <div class="f_header">
                <h2>Search</h2>
                <div class="search_close">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="f_header_search_form">
                <form action="#">
                    <input type="search" name="search" placeholder="Search Here...">
                    <button class="bi bi-search" type="submit"></button>
                </form>
                <div class="canvas-recent-popular-serach mt-20">
                    <!-- Single -->
                    <div class="single mb-20">
                        <h4>Recent Searchs</h4>
                        <div class="search-tags">
                            <a href="#">Food</a>
                            <a href="#">grocery</a>
                            <a href="#">Health</a>
                            <a href="#">Orange</a>
                            <a href="#">Junk</a>
                            <a href="#">Shopping</a>
                            <a href="#">Snak</a>
                            <a href="#">Keyboard</a>
                            <a href="#">Mouse</a>
                            <a href="#">Smartphones</a>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="single">
                        <h4>Popular Searchs</h4>
                        <div class="search-tags">
                            <a href="#">Food</a>
                            <a href="#">grocery</a>
                            <a href="#">Health</a>
                            <a href="#">Orange</a>
                            <a href="#">Junk</a>
                            <a href="#">Shopping</a>
                        </div>
                    </div>
                </div>
                <div class="canvas_s_popular_cate mb-30">
                    <h4>Popular Category</h4>
                    <div class="all_c">
                        <a href="shop.html">
                            <img src="{{URL::asset('assets/img/cate/1.png'); }}" alt="img">
                            <span>Vegetable</span>
                        </a>
                        <a href="shop.html">
                            <img src="{{URL::asset('assets/img/cate/2.png'); }}" alt="img">
                            <span>Pet Care</span>
                        </a>
                        <a href="shop.html">
                            <img src="{{URL::asset('assets/img/cate/3.png'); }}" alt="img">
                            <span>Butter & Eggs</span>
                        </a>
                        <a href="shop.html">
                            <img src="{{URL::asset('assets/img/cate/4.png'); }}" alt="img">
                            <span>Health</span>
                        </a>
                        <a href="shop.html">
                            <img src="{{URL::asset('assets/img/cate/5.png'); }}" alt="img">
                            <span>Milk & Cream</span>
                        </a>
                        <a href="shop.html">
                            <img src="{{URL::asset('assets/img/cate/6.png'); }}" alt="img">
                            <span>Rice</span>
                        </a>
                        <a href="shop.html">
                            <img src="{{URL::asset('assets/img/cate/7.png'); }}" alt="img">
                            <span>Food</span>
                        </a>
                        <a href="shop.html">
                            <img src="{{URL::asset('assets/img/cate/8.png'); }}" alt="img">
                            <span>Food</span>
                        </a>
                        <a href="shop.html">
                            <strong>View All <i class="bi bi-arrow-right-short"></i></strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="off_canvars_overlay"></div>
    <!-- End Header Search -->
    <!-- Start MiniCart Area -->
    <div class="mini-cart-area">
        <div class="mini-cart-full">
            <!-- Header -->
            <div class="mini-cart-header">
                <h2>Shopping cart</h2>
                <div class="mini-cart-close">
                    <i class="bi bi-x"></i>
                </div>
            </div>
            <!-- Cart Content -->
            <div class="mini-cart-full">
                <div class="cartmini__inner">
                    <ul>
                        <!-- Single -->
                        <li>
                            <div class="thumbnail">
                                <a href="product-details.html">
                                    <img src="{{URL::asset('assets/img/product/1.png'); }}" alt="img">
                                </a>
                            </div>
                            <div class="content">
                                <h4><a href="product-details.html">Purnava Omega 3 Enri ched Egg</a></h4>
                                <div class="m-price">
                                    <span>$39 x 2</span>
                                </div>
                                <div class="remove">
                                    <a href="javascript:void(0);"><i class="bi bi-x"></i></a>
                                </div>
                            </div>
                        </li>
                        <!-- Single -->
                        <li>
                            <div class="thumbnail">
                                <a href="product-details.html">
                                    <img src="{{URL::asset('assets/img/product/2.png'); }}" alt="img">
                                </a>
                            </div>
                            <div class="content">
                                <h4><a href="product-details.html">Purnava Omega 3 Enri ched Egg</a></h4>
                                <div class="m-price">
                                    <span>$39 x 2</span>
                                </div>
                                <div class="remove">
                                    <a href="javascript:void(0);"><i class="bi bi-x"></i></a>
                                </div>
                            </div>
                        </li>
                        <!-- Single -->
                        <li>
                            <div class="thumbnail">
                                <a href="product-details.html">
                                    <img src="{{URL::asset('assets/img/product/3.png'); }}" alt="img">
                                </a>
                            </div>
                            <div class="content">
                                <h4><a href="product-details.html">Purnava Omega 3 Enri ched Egg</a></h4>
                                <div class="m-price">
                                    <span>$39 x 2</span>
                                </div>
                                <div class="remove">
                                    <a href="javascript:void(0);"><i class="bi bi-x"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- MiniCart Bottom -->
            <div class="mini-cart-bottom">
                <h4>SubTotal : <span>$203.00</span></h4>
                <a class="button-2" href="cart.html">View Cart</a>
                <a class="button-1" href="checkout.html">Checkout Now</a>
            </div>
        </div>
    </div>
    <!-- End MiniCart Area -->

    <!-- Start Hero Area -->
    <section class="hero-area hero_container  pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-slider-full2 owl-carousel">
                        <!-- single -->
                        <div class="hs_item_single2" style="background-image:url('assets/img/slider6.jpg');">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <h2>Fresh Food & Healthly Organic Food</h2>
                                        <div class="cont">
                                            <p>Free Shipping on all Your Order</p>
                                        </div>
                                        <a class="button-1" href="shop.html">Shop Now <i
												class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single -->
                        <div class="hs_item_single2" style="background-image:url('assets/img/slider7.jpg');">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <h2>Fresh Food & Healthly Organic Food</h2>
                                        <div class="cont">
                                            <p>Free Shipping on all Your Order</p>
                                        </div>
                                        <a class="button-1" href="shop.html">Shop Now <i
												class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single -->
                        <div class="hs_item_single2" style="background-image:url('assets/img/slider8.jpg');">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <h2>Fresh Food & Healthly Organic Food</h2>
                                        <div class="cont">
                                            <p>Free Shipping on all Your Order</p>
                                        </div>
                                        <a class="button-1" href="shop.html">Shop Now <i
												class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider -->
                <div class="col-lg-4">
                    <div class="h_banner h-100">
                        <div class="row">
                            <div class="col-lg-12 mb-20">
                                <div class="banner_h1c" style="background-image:url('assets/img/bannerh1.jpg');">
                                    <div class="content">
                                        <h4>Summer Sale</h4>
                                        <h2>75% OFF</h2>
                                        <p>Only Vegetables & Fruits </p>
                                        <a href="shop.html">Shop Now <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="banner_h1c style-2 text-center" style="background-image:url('assets/img/bannerh2.jpg');">
                                    <div class="content">
                                        <h4>Best Deal</h4>
                                        <h2>Special Produts <br> Deal of the month</h2>
                                        <a href="shop.html">Shop Now <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Free  Shipping Area  -->
    <section class="pt-30 pb-30">
        <div class="container">
            <div class="shipping-item-full">
                <div class="row">
                    <!-- Single -->
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="shipping-item">
                            <div class="iocn">
                                <i class="bi bi-truck"></i>
                            </div>
                            <div class="content">
                                <h3> Free Shipping</h3>
                                <p>Free UK shipping when you spend £30.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="shipping-item">
                            <div class="iocn">
                                <i class="fab fa-pagelines"></i>
                            </div>
                            <div class="content">
                                <h3> Get Fresh Products</h3>
                                <p>Find a range of best online organic food.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="shipping-item">
                            <div class="iocn">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="content">
                                <h3> Moneyback Offer</h3>
                                <p>Free UK shipping when you spend £30.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="col-lg-3 col-md-6 mb-30">
                        <div class="shipping-item">
                            <div class="iocn">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            <div class="content">
                                <h3> Safe Payment</h3>
                                <p>We are using secure payment methods.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Free Shipping Area  -->

    <!-- Start Popular Category Area -->
    <div class="pt-20 pb-20">
        <div class="container">
            <!-- Section Headding -->
            <div class="row mb-30">
                <div class="col-sm-6 align-self-center">
                    <div class="section-headding-title">
                        <h2>Popular Category</h2>
                    </div>
                </div>
                <div class="col-sm-6 align-self-center">
                    <div class="section-headding-all">
                        <a class="button-1" href="shop.html">View All <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Category -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="pp_cate_list">
                        <ul>
                            <!-- Single -->
                            <li>
                                <a href="shop.html">
                                    <img src="{{URL::asset('assets/img/cate/1.png'); }}" alt="cate">
                                    <span>Fresh Fruit</span>
                                </a>
                            </li>
                            <!-- Single -->
                            <li>
                                <a href="shop.html">
                                    <img src="{{URL::asset('assets/img/cate/2.png'); }}" alt="cate">
                                    <span>Vegetable</span>
                                </a>
                            </li>
                            <!-- Single -->
                            <li>
                                <a href="shop.html">
                                    <img src="{{URL::asset('assets/img/cate/3.png'); }}" alt="cate">
                                    <span>Breakfast t</span>
                                </a>
                            </li>
                            <!-- Single -->
                            <li>
                                <a href="shop.html">
                                    <img src="{{URL::asset('assets/img/cate/4.png'); }}" alt="cate">
                                    <span>Meet & Fish</span>
                                </a>
                            </li>
                            <!-- Single -->
                            <li>
                                <a href="shop.html">
                                    <img src="{{URL::asset('assets/img/cate/5.png'); }}" alt="cate">
                                    <span>Fresh Fruit</span>
                                </a>
                            </li>
                            <!-- Single -->
                            <li>
                                <a href="shop.html">
                                    <img src="{{URL::asset('assets/img/cate/6.png'); }}" alt="cate">
                                    <span>Beverages</span>
                                </a>
                            </li>
                            <!-- Single -->
                            <li>
                                <a href="shop.html">
                                    <img src="{{URL::asset('assets/img/cate/7.png'); }}" alt="cate">
                                    <span>Snacks</span>
                                </a>
                            </li>
                            <!-- Single -->
                            <li>
                                <a href="shop.html">
                                    <img src="{{URL::asset('assets/img/cate/8.png'); }}" alt="cate">
                                    <span>Beauty & Health</span>
                                </a>
                            </li>
                            <!-- Single -->
                            <li>
                                <a href="shop.html">
                                    <img src="{{URL::asset('assets/img/cate/2.png'); }}" alt="cate">
                                    <span>Cooking</span>
                                </a>
                            </li>
                            <!-- Single -->
                            <li>
                                <a href="shop.html">
                                    <img src="{{URL::asset('assets/img/cate/3.png'); }}" alt="cate">
                                    <span>Baking Needs</span>
                                </a>
                            </li>
                            <!-- Single -->
                            <li>
                                <a href="shop.html">
                                    <img src="{{URL::asset('assets/img/cate/4.png'); }}" alt="cate">
                                    <span>Bread & Bekery</span>
                                </a>
                            </li>
                            <!-- Single -->
                            <li>
                                <a href="shop.html">
                                    <img src="{{URL::asset('assets/img/cate/8.png'); }}" alt="cate">
                                    <span>Fresh Fruit</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Category Area -->

    <!-- Start Banner Area Area -->
    <div class="pt-20">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-20">
                    <div class="banner_item_3">
                        <a href="shop.html">
                            <img src="{{URL::asset('assets/img/banner1-1.jpg'); }}" alt="banner">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 mb-20">
                    <div class="banner_item_3">
                        <a href="shop.html">
                            <img src="{{URL::asset('assets/img/banner1-2.jpg'); }}" alt="banner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->

    <!-- Start Popular Product Area -->
    <div class="pt-20 pb-20">
        <div class="container">
            <!-- Section Headding -->
            <div class="row mb-30">
                <div class="col-sm-6 align-self-center">
                    <div class="section-headding-title">
                        <h2>Popular Products</h2>
                    </div>
                </div>
                <div class="col-sm-6 align-self-center">
                    <div class="section-headding-all">
                        <a class="button-1" href="shop.html">View All <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
                    <div class="product-item">
                        <div class="sale-badge"><span>Sale</span></div>
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <div class="img">
                                <a href="product-details.html">
                                    <img src="{{URL::asset('assets/img/product/1.png'); }}" alt="product">
                                </a>
                            </div>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <a data-bs-toggle="modal" data-bs-target="#QuickViewModal" href="#"><i
										class="far fa-eye"></i></a>
                            </div>
                            <a class="add-to-cart" href="#">Add to Cart</a>
                        </div>
                        <div class="product-content">
                            <div class="ratting">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h4><a href="product-details.html">Purnava Omega 3 Enri...</a></h4>
                            <div class="pricing">
                                <span>$200 <del>$210</del></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
                    <div class="product-item">
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <div class="img">
                                <a href="product-details.html">
                                    <img src="{{URL::asset('assets/img/product/2.png'); }}" alt="product">
                                </a>
                            </div>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <a data-bs-toggle="modal" data-bs-target="#QuickViewModal" href="#"><i
										class="far fa-eye"></i></a>
                            </div>
                            <a class="add-to-cart" href="#">Add to Cart</a>
                        </div>
                        <div class="product-content">
                            <div class="ratting">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h4><a href="product-details.html">Purnava Omega 3 Enri...</a></h4>
                            <div class="pricing">
                                <span>$200 <del>$210</del></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
                    <div class="product-item">
                        <div class="discount-badge"><span>-33%</span></div>
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <div class="img">
                                <a href="product-details.html">
                                    <img src="{{URL::asset('assets/img/product/3.png'); }}" alt="product">
                                </a>
                            </div>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <a data-bs-toggle="modal" data-bs-target="#QuickViewModal" href="#"><i
										class="far fa-eye"></i></a>
                            </div>
                            <a class="add-to-cart" href="#">Add to Cart</a>
                        </div>
                        <div class="product-content">
                            <div class="ratting">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h4><a href="product-details.html">Purnava Omega 3 Enri...</a></h4>
                            <div class="pricing">
                                <span>$200 <del>$210</del></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
                    <div class="product-item">
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <div class="img">
                                <a href="product-details.html">
                                    <img src="{{URL::asset('assets/img/product/4.png'); }}" alt="product">
                                </a>
                            </div>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <a data-bs-toggle="modal" data-bs-target="#QuickViewModal" href="#"><i
										class="far fa-eye"></i></a>
                            </div>
                            <a class="add-to-cart" href="#">Add to Cart</a>
                        </div>
                        <div class="product-content">
                            <div class="ratting">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h4><a href="product-details.html">Purnava Omega 3 Enri...</a></h4>
                            <div class="pricing">
                                <span>$200 <del>$210</del></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
                    <div class="product-item">
                        <div class="sale-badge"><span>Sale</span></div>
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <div class="img">
                                <a href="product-details.html">
                                    <img src="{{URL::asset('assets/img/product/5.png'); }}" alt="product">
                                </a>
                            </div>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <a data-bs-toggle="modal" data-bs-target="#QuickViewModal" href="#"><i
										class="far fa-eye"></i></a>
                            </div>
                            <a class="add-to-cart" href="#">Add to Cart</a>
                        </div>
                        <div class="product-content">
                            <div class="ratting">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h4><a data-bs-toggle="modal" data-bs-target="#QuickViewModal" href="product-details.html">Purnava Omega 3 Enri...</a></h4>
                            <div class="pricing">
                                <span>$200 <del>$210</del></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
                    <div class="product-item">
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <div class="img">
                                <a href="product-details.html">
                                    <img src="{{URL::asset('assets/img/product/6.png'); }}" alt="product">
                                </a>
                            </div>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <a data-bs-toggle="modal" data-bs-target="#QuickViewModal" href="#"><i
										class="far fa-eye"></i></a>
                            </div>
                            <a class="add-to-cart" href="#">Add to Cart</a>
                        </div>
                        <div class="product-content">
                            <div class="ratting">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h4><a href="product-details.html">Purnava Omega 3 Enri...</a></h4>
                            <div class="pricing">
                                <span>$200 <del>$210</del></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
                    <div class="product-item">
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <div class="img">
                                <a href="product-details.html">
                                    <img src="{{URL::asset('assets/img/product/7.png'); }}" alt="product">
                                </a>
                            </div>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <a data-bs-toggle="modal" data-bs-target="#QuickViewModal" href="#"><i
										class="far fa-eye"></i></a>
                            </div>
                            <a class="add-to-cart" href="#">Add to Cart</a>
                        </div>
                        <div class="product-content">
                            <div class="ratting">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h4><a href="product-details.html">Purnava Omega 3 Enri...</a></h4>
                            <div class="pricing">
                                <span>$200 <del>$210</del></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-30">
                    <div class="product-item">
                        <div class="sale-badge"><span>Sale</span></div>
                        <!-- Thumbnail -->
                        <div class="product-thumbnail">
                            <div class="img">
                                <a href="product-details.html">
                                    <img src="{{URL::asset('assets/img/product/8.png'); }}" alt="product">
                                </a>
                            </div>
                            <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                            <div class="product-overly-btn">
                                <a data-bs-toggle="modal" data-bs-target="#QuickViewModal" href="#"><i
										class="far fa-eye"></i></a>
                            </div>
                            <a class="add-to-cart" href="#">Add to Cart</a>
                        </div>
                        <div class="product-content">
                            <div class="ratting">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                            <h4><a href="product-details.html">Purnava Omega 3 Enri...</a></h4>
                            <div class="pricing">
                                <span>$200 <del>$210</del></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Product Area -->
    <!-- Start Deal Product Area -->
    <section class="pt-20 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="deal-product-sec h-100">
                        <h2 class="d_title"> Deals Hot of The Day </h2>
                        <div class="deal_product_slider owl-carousel">
                            <!-- Single -->
                            <div class="deal_p_item">
                                <div class="row">
                                    <div class="col-md-5 text-center">
                                        <div class="thumbnail">
                                            <a href="product-details.html">
                                                <img src="{{URL::asset('assets/img/product/1.png'); }}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 align-self-center">
                                        <div class="content">
                                            <div class="content-countdwon" id="codepopularCountdown" data-countdown-codepopular="2022/11/19">
                                                <ul>
                                                    <li><span>%d <small>days</small></span></li>
                                                    <li><span>%h <small>Hours</small></span></li>
                                                    <li><span>%m <small>Minute</small></span></li>
                                                    <li><span>%s <small>SEC</small></span></li>
                                                </ul>
                                            </div>
                                            <h2><a href="product-details.html">Goodday Fresh Pasteur Milk 2 Liter </a>
                                            </h2>
                                            <div class="pricing">
                                                <span>$200 <del>$210</del></span>
                                            </div>
                                            <div class="ratting">
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><small>( 25 Reviews )</small></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac dui sed nunc sagittis maximus.</p>
                                            <div class="quantity-add-cart">
                                                <span class="quantity">
													<input type="number" min="1" max="1000" step="1" value="1">
												</span>
                                                <div class="cart-btn">
                                                    <a class="button-1" href="#"><i class="fas fa-shopping-cart"></i>
														Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="deal_p_item">
                                <div class="row">
                                    <div class="col-md-5 text-center">
                                        <div class="thumbnail">
                                            <a href="product-details.html">
                                                <img src="{{URL::asset('assets/img/product/2.png'); }}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 align-self-center">
                                        <div class="content">
                                            <div class="content-countdwon" id="codepopularCountdown1" data-countdown-codepopular="2022/11/19">
                                                <ul>
                                                    <li><span>%d <small>days</small></span></li>
                                                    <li><span>%h <small>Hours</small></span></li>
                                                    <li><span>%m <small>Minute</small></span></li>
                                                    <li><span>%s <small>SEC</small></span></li>
                                                </ul>
                                            </div>
                                            <h2><a href="product-details.html">Goodday Fresh Pasteur Milk 2 Liter </a>
                                            </h2>
                                            <div class="pricing">
                                                <span>$200 <del>$210</del></span>
                                            </div>
                                            <div class="ratting">
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><small>( 25 Reviews )</small></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac dui sed nunc sagittis maximus.</p>
                                            <div class="quantity-add-cart">
                                                <span class="quantity">
													<input type="number" min="1" max="1000" step="1" value="1">
												</span>
                                                <div class="cart-btn">
                                                    <a class="button-1" href="#"><i class="fas fa-shopping-cart"></i>
														Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="deal_p_item">
                                <div class="row">
                                    <div class="col-md-5 text-center">
                                        <div class="thumbnail">
                                            <a href="product-details.html">
                                                <img src="{{URL::asset('assets/img/product/3.png'); }}" alt="img">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 align-self-center">
                                        <div class="content">
                                            <div class="content-countdwon" id="codepopularCountdown2" data-countdown-codepopular="2022/11/19">
                                                <ul>
                                                    <li><span>%d <small>days</small></span></li>
                                                    <li><span>%h <small>Hours</small></span></li>
                                                    <li><span>%m <small>Minute</small></span></li>
                                                    <li><span>%s <small>SEC</small></span></li>
                                                </ul>
                                            </div>
                                            <h2><a href="product-details.html">Goodday Fresh Pasteur Milk 2 Liter </a>
                                            </h2>
                                            <div class="pricing">
                                                <span>$200 <del>$210</del></span>
                                            </div>
                                            <div class="ratting">
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><small>( 25 Reviews )</small></span>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac dui sed nunc sagittis maximus.</p>
                                            <div class="quantity-add-cart">
                                                <span class="quantity">
													<input type="number" min="1" max="1000" step="1" value="1">
												</span>
                                                <div class="cart-btn">
                                                    <a class="button-1" href="#"><i class="fas fa-shopping-cart"></i>
														Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d_top_rated_p h-100">
                        <h2 class="d_title">Top rated products </h2>
                        <div class="top-Reated_p_full">
                            <!-- Single -->
                            <div class="tp_item_style">
                                <div class="thumb">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/1.png'); }}" alt="img">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="product-details.html">Fresh Red Seedless</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>$200 <del>$210</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="tp_item_style">
                                <div class="thumb">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/2.png'); }}" alt="img">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="product-details.html">Fresh Red Seedless</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>$200 <del>$210</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="tp_item_style">
                                <div class="thumb">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/3.png'); }}" alt="img">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="product-details.html">Fresh Red Seedless</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>$200 <del>$210</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="tp_item_style">
                                <div class="thumb">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/4.png'); }}" alt="img">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="product-details.html">Fresh Red Seedless</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>$200 <del>$210</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Deal Product Area -->
    <!-- Start Banner Area -->
    <section class="pb-30">
        <div class="container">
            <div class="banner-section-1" style="background-image: url('assets/img/banner.jpg');">
                <div class="row">
                    <div class="offset-lg-6 offset-md-4 col-md-8 col-lg-6">
                        <div class="banner-section-1-content">
                            <h4>Summer Sale</h4>
                            <h2><span>39%</span> OFF</h2>
                            <p>Free on all your order, Free Shipping and 30 days mony back guarantee</p>
                            <a class="button-1 button-round" href="shop.html">Shop Now <i
									class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Banner Area -->
    <!-- Start Product Widgets Area -->
    <section class="pt-30 pb-30">
        <div class="container">
            <div class="row">
                <!-- Single -->
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="d_top_rated_p h-100">
                        <h2 class="d_title">Hot Deals</h2>
                        <div class="top-Reated_p_full">
                            <!-- Single -->
                            <div class="tp_item_style">
                                <div class="thumb">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/1.png'); }}" alt="img">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="product-details.html">Fresh Red Seedless</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>$200 <del>$210</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="tp_item_style">
                                <div class="thumb">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/2.png'); }}" alt="img">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="product-details.html">Fresh Red Seedless</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>$200 <del>$210</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="tp_item_style">
                                <div class="thumb">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/3.png'); }}" alt="img">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="product-details.html">Fresh Red Seedless</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>$200 <del>$210</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="tp_item_style">
                                <div class="thumb">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/4.png'); }}" alt="img">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="product-details.html">Fresh Red Seedless</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>$200 <del>$210</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-sm-6 mb-30">
                    <div class="d_top_rated_p h-100">
                        <h2 class="d_title">Top rated products </h2>
                        <div class="top-Reated_p_full">
                            <!-- Single -->
                            <div class="tp_item_style">
                                <div class="thumb">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/5.png'); }}" alt="img">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="product-details.html">Fresh Red Seedless</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>$200 <del>$210</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="tp_item_style">
                                <div class="thumb">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/6.png'); }}" alt="img">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="product-details.html">Fresh Red Seedless</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>$200 <del>$210</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="tp_item_style">
                                <div class="thumb">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/7.png'); }}" alt="img">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="product-details.html">Fresh Red Seedless</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>$200 <del>$210</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="tp_item_style">
                                <div class="thumb">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/8.png'); }}" alt="img">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="product-details.html">Fresh Red Seedless</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>$200 <del>$210</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="d_top_rated_p h-100">
                        <h2 class="d_title">Best Seller</h2>
                        <div class="top-Reated_p_full">
                            <!-- Single -->
                            <div class="tp_item_style">
                                <div class="thumb">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/4.png'); }}" alt="img">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="product-details.html">Fresh Red Seedless</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>$200 <del>$210</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="tp_item_style">
                                <div class="thumb">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/3.png'); }}" alt="img">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="product-details.html">Fresh Red Seedless</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>$200 <del>$210</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="tp_item_style">
                                <div class="thumb">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/2.png'); }}" alt="img">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="product-details.html">Fresh Red Seedless</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>$200 <del>$210</del></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="tp_item_style">
                                <div class="thumb">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/1.png'); }}" alt="img">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4><a href="product-details.html">Fresh Red Seedless</a></h4>
                                    <div class="ratting">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                    <div class="pricing">
                                        <span>$200 <del>$210</del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-30">
                    <div class="banner_2_s h-100" style="background-image:url('assets/img/banner2.jpg');">
                        <h4>85% FAT FREE</h4>
                        <h2>Low-Fat Meet</h2>
                        <p>Started ad <span>$79.99</span></p>
                        <a href="shop.html" class="button-1 button-round bg-white">Shop Now <i
								class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Widgets Area -->
    <!-- Start Featured Product Area -->
    <div class="pt-20 pb-70">
        <div class="container">
            <!-- Section Headding -->
            <div class="row mb-30">
                <div class="col-sm-6 align-self-center">
                    <div class="section-headding-title">
                        <h2>Featured Products</h2>
                    </div>
                </div>
                <div class="col-sm-6 align-self-center">
                    <div class="section-headding-all">
                        <a class="button-1" href="shop.html">View All <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="feature-product-slider owl-carousel">
                        <!-- Single -->
                        <div class="product-item">
                            <div class="sale-badge"><span>Sale</span></div>
                            <!-- Thumbnail -->
                            <div class="product-thumbnail">
                                <div class="img">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/1.png'); }}" alt="product">
                                    </a>
                                </div>
                                <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                                <div class="product-overly-btn">
                                    <a data-bs-toggle="modal" data-bs-target="#QuickViewModal" href="#"><i
											class="far fa-eye"></i></a>
                                </div>
                                <a class="add-to-cart" href="#">Add to Cart</a>
                            </div>
                            <div class="product-content">
                                <div class="ratting">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <h4><a href="product-details.html">Purnava Omega 3 Enri...</a></h4>
                                <div class="pricing">
                                    <span>$200 <del>$210</del></span>
                                </div>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="product-item">
                            <div class="discount-badge"><span>-33%</span></div>
                            <!-- Thumbnail -->
                            <div class="product-thumbnail">
                                <div class="img">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/3.png'); }}" alt="product">
                                    </a>
                                </div>
                                <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                                <div class="product-overly-btn">
                                    <a data-bs-toggle="modal" data-bs-target="#QuickViewModal" href="#"><i
											class="far fa-eye"></i></a>
                                </div>
                                <a class="add-to-cart" href="#">Add to Cart</a>
                            </div>
                            <div class="product-content">
                                <div class="ratting">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <h4><a href="product-details.html">Purnava Omega 3 Enri...</a></h4>
                                <div class="pricing">
                                    <span>$200 <del>$210</del></span>
                                </div>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="product-item">
                            <div class="discount-badge"><span>-33%</span></div>
                            <!-- Thumbnail -->
                            <div class="product-thumbnail">
                                <div class="img">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/2.png'); }}" alt="product">
                                    </a>
                                </div>
                                <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                                <div class="product-overly-btn">
                                    <a data-bs-toggle="modal" data-bs-target="#QuickViewModal" href="#"><i
											class="far fa-eye"></i></a>
                                </div>
                                <a class="add-to-cart" href="#">Add to Cart</a>
                            </div>
                            <div class="product-content">
                                <div class="ratting">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <h4><a href="product-details.html">Purnava Omega 3 Enri...</a></h4>
                                <div class="pricing">
                                    <span>$200 <del>$210</del></span>
                                </div>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="product-item">
                            <div class="sale-badge"><span>New</span></div>
                            <!-- Thumbnail -->
                            <div class="product-thumbnail">
                                <div class="img">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/7.png'); }}" alt="product">
                                    </a>
                                </div>
                                <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                                <div class="product-overly-btn">
                                    <a data-bs-toggle="modal" data-bs-target="#QuickViewModal" href="#"><i
											class="far fa-eye"></i></a>
                                </div>
                                <a class="add-to-cart" href="#">Add to Cart</a>
                            </div>
                            <div class="product-content">
                                <div class="ratting">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <h4><a href="product-details.html">Purnava Omega 3 Enri...</a></h4>
                                <div class="pricing">
                                    <span>$200 <del>$210</del></span>
                                </div>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="product-item">
                            <!-- Thumbnail -->
                            <div class="product-thumbnail">
                                <div class="img">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/4.png'); }}" alt="product">
                                    </a>
                                </div>
                                <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                                <div class="product-overly-btn">
                                    <a data-bs-toggle="modal" data-bs-target="#QuickViewModal" href="#"><i
											class="far fa-eye"></i></a>
                                </div>
                                <a class="add-to-cart" href="#">Add to Cart</a>
                            </div>
                            <div class="product-content">
                                <div class="ratting">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <h4><a href="product-details.html">Purnava Omega 3 Enri...</a></h4>
                                <div class="pricing">
                                    <span>$200 <del>$210</del></span>
                                </div>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="product-item">
                            <div class="sale-badge"><span>Sale</span></div>
                            <!-- Thumbnail -->
                            <div class="product-thumbnail">
                                <div class="img">
                                    <a href="product-details.html">
                                        <img src="{{URL::asset('assets/img/product/5.png'); }}" alt="product">
                                    </a>
                                </div>
                                <a class="wishlist" href="wishlist.html"><i class="far fa-heart"></i></a>
                                <div class="product-overly-btn">
                                    <a data-bs-toggle="modal" data-bs-target="#QuickViewModal" href="#"><i
											class="far fa-eye"></i></a>
                                </div>
                                <a class="add-to-cart" href="#">Add to Cart</a>
                            </div>
                            <div class="product-content">
                                <div class="ratting">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <h4><a href="product-details.html">Purnava Omega 3 Enri...</a></h4>
                                <div class="pricing">
                                    <span>$200 <del>$210</del></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Featured Product Area -->
    <!-- Start Call Action -->
    <div class="call_action_a pt-30">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 align-self-center">
                    <h2>Get A Free Service Or Make A Call</h2>
                </div>
                <div class="col-md-6 mb-30 text-right">
                    <a class="button-1 bg-white" href="contact.html"><i class="fas fa-phone-volume"></i> MAKE A CALL</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Call Action -->
    <!-- Start Blog Area -->
    <section class="pt-70 pb-20">
        <div class="container">
            <!-- Section Headding -->
            <div class="row mb-30">
                <div class="col-sm-6 align-self-center">
                    <div class="section-headding-title">
                        <h2>Latest Blog & News</h2>
                    </div>
                </div>
                <div class="col-sm-6 align-self-center">
                    <div class="section-headding-all">
                        <a class="button-1" href="blog.html">View All <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="blog-item">
                        <div class="thumbnail">
                            <a href="single.html">
                                <img src="{{URL::asset('assets/img/blog/1.jpg'); }}" alt="blog">
                            </a>
                            <div class="date">
                                <span><i class="fas fa-calendar-alt"></i> 19 Nov 2021</span>
                            </div>
                        </div>
                        <div class="content">
                            <h2><a href="single.html">Vogue Shopping Weekend 2021.</a></h2>
                            <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor...</p>
                            <div class="bottom">
                                <div class="left">
                                    <img src="{{URL::asset('assets/img/author.jpg'); }}" alt="img">
                                    <span>Sarah Taylor</span>
                                </div>
                                <div class="right">
                                    <a href="single.html"><i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="blog-item">
                        <div class="thumbnail">
                            <a href="single.html">
                                <img src="{{URL::asset('assets/img/blog/2.jpg'); }}" alt="blog">
                            </a>
                            <div class="date">
                                <span><i class="fas fa-calendar-alt"></i> 19 Nov 2021</span>
                            </div>
                        </div>
                        <div class="content">
                            <h2><a href="single.html">Vogue Shopping Weekend 2021.</a></h2>
                            <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor...</p>
                            <div class="bottom">
                                <div class="left">
                                    <img src="{{URL::asset('assets/img/author.jpg'); }}" alt="img">
                                    <span>Sarah Taylor</span>
                                </div>
                                <div class="right">
                                    <a href="single.html"><i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="blog-item">
                        <div class="thumbnail">
                            <a href="single.html">
                                <img src="{{URL::asset('assets/img/blog/3.jpg'); }}" alt="blog">
                            </a>
                            <div class="date">
                                <span><i class="fas fa-calendar-alt"></i> 19 Nov 2021</span>
                            </div>
                        </div>
                        <div class="content">
                            <h2><a href="single.html">Vogue Shopping Weekend 2021.</a></h2>
                            <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor...</p>
                            <div class="bottom">
                                <div class="left">
                                    <img src="{{URL::asset('assets/img/author.jpg'); }}" alt="img">
                                    <span>Sarah Taylor</span>
                                </div>
                                <div class="right">
                                    <a href="single.html"><i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
    <!-- Start Testimonial Area -->
    <section class="pt-20 pb-50">
        <div class="container">
            <!-- Section Headding -->
            <div class="row mb-30">
                <div class="col-sm-12 align-self-center">
                    <div class="section-headding-title">
                        <h2>Our Awesome Testimonial</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-full owl-carousel">
                        <!-- Single -->
                        <div class="testimonial-item">
                            <div class="top">
                                <div class="img">
                                    <img src="{{URL::asset('assets/img/1.png'); }}" alt="img">
                                </div>
                                <div class="meta">
                                    <h3>Al-Mahmud</h3>
                                    <div class="ratting-testi">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <div class="quote">
                                    <img src="{{URL::asset('assets/img/qoute.png'); }}" alt="img">
                                </div>
                            </div>
                            <div class="bottom">
                                <p>Nam ullamcorper eros sed semper viverra. Suspendisse porttitor auctor felis pulvinar elementum. Cras nec feugiat felis. Maecenas ut justo eu nisl pharetra lobortis vel non erat. </p>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="testimonial-item">
                            <div class="top">
                                <div class="img">
                                    <img src="{{URL::asset('assets/img/1.png'); }}" alt="img">
                                </div>
                                <div class="meta">
                                    <h3>Al-Mahmud</h3>
                                    <div class="ratting-testi">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <div class="quote">
                                    <img src="{{URL::asset('assets/img/qoute.png'); }}" alt="img">
                                </div>
                            </div>
                            <div class="bottom">
                                <p>Nam ullamcorper eros sed semper viverra. Suspendisse porttitor auctor felis pulvinar elementum. Cras nec feugiat felis. Maecenas ut justo eu nisl pharetra lobortis vel non erat. </p>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="testimonial-item">
                            <div class="top">
                                <div class="img">
                                    <img src="{{URL::asset('assets/img/1.png'); }}" alt="img">
                                </div>
                                <div class="meta">
                                    <h3>Al-Mahmud</h3>
                                    <div class="ratting-testi">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                    </div>
                                </div>
                                <div class="quote">
                                    <img src="{{URL::asset('assets/img/qoute.png'); }}" alt="img">
                                </div>
                            </div>
                            <div class="bottom">
                                <p>Nam ullamcorper eros sed semper viverra. Suspendisse porttitor auctor felis pulvinar elementum. Cras nec feugiat felis. Maecenas ut justo eu nisl pharetra lobortis vel non erat. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Area -->
    <!-- Start Subscribe Area -->
    <section class="subscribe-form pt-70 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="subscribe-left mb-50">
                        <div class="img">
                            <img src="{{URL::asset('assets/img/subscribe.png'); }}" alt="img">
                        </div>
                        <div class="content">
                            <h2>Newsletter</h2>
                            <p>Subsribe here for get every single updates</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="subscribe-form">
                        <form action="#">
                            <input type="email" name="sub" placeholder="Enter Your Email Address">
                            <button type="submit">subscribe now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Subscribe Area -->

@include('common.footer')