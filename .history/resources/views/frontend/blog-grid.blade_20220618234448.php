@extends ('layouts.app')
@section ('title','Our Blogs')
@section ('content')
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
	            		<img src="assets/img/logo.png" alt="logo">
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
								<li><a href="{{route('single')}}">Blog Details</a></li>
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
							<img src="assets/img/cate/1.png" alt="img">
							<span>Vegetable</span>
						</a>
						<a href="shop.html">
							<img src="assets/img/cate/2.png" alt="img">
							<span>Pet Care</span>
						</a>
						<a href="shop.html">
							<img src="assets/img/cate/3.png" alt="img">
							<span>Butter & Eggs</span>
						</a>
						<a href="shop.html">
							<img src="assets/img/cate/4.png" alt="img">
							<span>Health</span>
						</a>
						<a href="shop.html">
							<img src="assets/img/cate/5.png" alt="img">
							<span>Milk & Cream</span>
						</a>
						<a href="shop.html">
							<img src="assets/img/cate/6.png" alt="img">
							<span>Rice</span>
						</a>
						<a href="shop.html">
							<img src="assets/img/cate/7.png" alt="img">
							<span>Food</span>
						</a>
						<a href="shop.html">
							<img src="assets/img/cate/8.png" alt="img">
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
    								<img src="assets/img/product/1.png" alt="img">
    							</a>
    						</div>
    						<div class="content">
    							<h4><a href="product-details.html">Purnava Omega 3 Enri  ched Egg</a></h4>
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
    								<img src="assets/img/product/2.png" alt="img">
    							</a>
    						</div>
    						<div class="content">
    							<h4><a href="product-details.html">Purnava Omega 3 Enri  ched Egg</a></h4>
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
    								<img src="assets/img/product/3.png" alt="img">
    							</a>
    						</div>
    						<div class="content">
    							<h4><a href="product-details.html">Purnava Omega 3 Enri  ched Egg</a></h4>
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

	<!-- Start BreadCrumb Area -->
	<section class="breadcrumb-area pt-80 pb-80" style="background-image:url('assets/img/breadcrumb.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>News Grid</h2>
				</div>
				<div class="col-md-6 align-self-center">
					<ul class="text-right">
						<li><a href="index-2.html">Home</a></li>
						<li>Blog Grid</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- End BreadCrumb Area -->

	<!-- Start Blog Area -->
	<section class="section-padding">
		<div class="container">
			<div class="row">
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="blog-item">
						<div class="thumbnail">
							<a href="{{route('single')}}">
								<img src="assets/img/blog/1.jpg" alt="blog">
							</a>
							<div class="date">
								<span><i class="fas fa-calendar-alt"></i> 19 Nov 2021</span>
							</div>
						</div>
						<div class="content">
							<h2><a href="{{route('single')}}">Vogue Shopping Weekend 2021.</a></h2>
							<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor...</p>
							<div class="bottom">
								<div class="left">
									<img src="assets/img/author.jpg" alt="img">
									<span>Sarah Taylor</span>
								</div>
								<div class="right">
									<a href="{{route('single')}}"><i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="blog-item">
						<div class="thumbnail">
							<a href="{{route('single')}}">
								<img src="assets/img/blog/2.jpg" alt="blog">
							</a>
							<div class="date">
								<span><i class="fas fa-calendar-alt"></i> 19 Nov 2021</span>
							</div>
						</div>
						<div class="content">
							<h2><a href="{{route('single')}}">Vogue Shopping Weekend 2021.</a></h2>
							<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor...</p>
							<div class="bottom">
								<div class="left">
									<img src="assets/img/author.jpg" alt="img">
									<span>Sarah Taylor</span>
								</div>
								<div class="right">
									<a href="{{route('single')}}"><i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="blog-item">
						<div class="thumbnail">
							<a href="{{route('single')}}">
								<img src="assets/img/blog/3.jpg" alt="blog">
							</a>
							<div class="date">
								<span><i class="fas fa-calendar-alt"></i> 19 Nov 2021</span>
							</div>
						</div>
						<div class="content">
							<h2><a href="{{route('single')}}">Vogue Shopping Weekend 2021.</a></h2>
							<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor...</p>
							<div class="bottom">
								<div class="left">
									<img src="assets/img/author.jpg" alt="img">
									<span>Sarah Taylor</span>
								</div>
								<div class="right">
									<a href="{{route('single')}}"><i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="blog-item">
						<div class="thumbnail">
							<a href="{{route('single')}}">
								<img src="assets/img/blog/4.jpg" alt="blog">
							</a>
							<div class="date">
								<span><i class="fas fa-calendar-alt"></i> 19 Nov 2021</span>
							</div>
						</div>
						<div class="content">
							<h2><a href="{{route('single')}}">Vogue Shopping Weekend 2021.</a></h2>
							<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor...</p>
							<div class="bottom">
								<div class="left">
									<img src="assets/img/author.jpg" alt="img">
									<span>Sarah Taylor</span>
								</div>
								<div class="right">
									<a href="{{route('single')}}"><i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="blog-item">
						<div class="thumbnail">
							<a href="{{route('single')}}">
								<img src="assets/img/blog/5.jpg" alt="blog">
							</a>
							<div class="date">
								<span><i class="fas fa-calendar-alt"></i> 19 Nov 2021</span>
							</div>
						</div>
						<div class="content">
							<h2><a href="{{route('single')}}">Vogue Shopping Weekend 2021.</a></h2>
							<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor...</p>
							<div class="bottom">
								<div class="left">
									<img src="assets/img/author.jpg" alt="img">
									<span>Sarah Taylor</span>
								</div>
								<div class="right">
									<a href="{{route('single')}}"><i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="blog-item">
						<div class="thumbnail">
							<a href="{{route('single')}}">
								<img src="assets/img/blog/6.jpg" alt="blog">
							</a>
							<div class="date">
								<span><i class="fas fa-calendar-alt"></i> 19 Nov 2021</span>
							</div>
						</div>
						<div class="content">
							<h2><a href="{{route('single')}}">Vogue Shopping Weekend 2021.</a></h2>
							<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor...</p>
							<div class="bottom">
								<div class="left">
									<img src="assets/img/author.jpg" alt="img">
									<span>Sarah Taylor</span>
								</div>
								<div class="right">
									<a href="{{route('single')}}"><i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="blog-item">
						<div class="thumbnail">
							<a href="{{route('single')}}">
								<img src="assets/img/blog/7.jpg" alt="blog">
							</a>
							<div class="date">
								<span><i class="fas fa-calendar-alt"></i> 19 Nov 2021</span>
							</div>
						</div>
						<div class="content">
							<h2><a href="{{route('single')}}">Vogue Shopping Weekend 2021.</a></h2>
							<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor...</p>
							<div class="bottom">
								<div class="left">
									<img src="assets/img/author.jpg" alt="img">
									<span>Sarah Taylor</span>
								</div>
								<div class="right">
									<a href="{{route('single')}}"><i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="blog-item">
						<div class="thumbnail">
							<a href="{{route('single')}}">
								<img src="assets/img/blog/2.jpg" alt="blog">
							</a>
							<div class="date">
								<span><i class="fas fa-calendar-alt"></i> 19 Nov 2021</span>
							</div>
						</div>
						<div class="content">
							<h2><a href="{{route('single')}}">Vogue Shopping Weekend 2021.</a></h2>
							<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor...</p>
							<div class="bottom">
								<div class="left">
									<img src="assets/img/author.jpg" alt="img">
									<span>Sarah Taylor</span>
								</div>
								<div class="right">
									<a href="{{route('single')}}"><i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Single -->
				<div class="col-lg-4 col-md-6 mb-30">
					<div class="blog-item">
						<div class="thumbnail">
							<a href="{{route('single')}}">
								<img src="assets/img/blog/1.jpg" alt="blog">
							</a>
							<div class="date">
								<span><i class="fas fa-calendar-alt"></i> 19 Nov 2021</span>
							</div>
						</div>
						<div class="content">
							<h2><a href="{{route('single')}}">Vogue Shopping Weekend 2021.</a></h2>
							<p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor...</p>
							<div class="bottom">
								<div class="left">
									<img src="assets/img/author.jpg" alt="img">
									<span>Sarah Taylor</span>
								</div>
								<div class="right">
									<a href="{{route('single')}}"><i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Pagination -->
			<div class="row mt-10 text-center">
				<div class="col-lg-12">
					<div class="fodo_pagination">
						<ul>
							<li><a href="#"><i class="fas fa-angle-left"></i></a></li>
							<li><a href="#">1</a></li>
							<li><span>2</span></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#"><i class="fas fa-angle-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Blog Area -->


@endsection