@yield('content')
@section('content')
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
					<h2>Blog Details</h2>
				</div>
				<div class="col-md-6 align-self-center">
					<ul class="text-right">
						<li><a href="index-2.html">Home</a></li>
						<li>Blog Details</li>
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
				<!-- Blog -->
				<div class="col-lg-8">
					<!-- Details Content -->
					<div class="blog-details mb-30">
						<div class="thumbnail">
							<img src="assets/img/blog/1.jpg" alt="img">
						</div>
						<div class="content">
							<div class="meta">
								<span><i class="far fa-calendar-alt"></i> 12 September 2021</span>
								<span><i class="fas fa-tags"></i> <a href="#">Business</a></span>
							</div>
							<h2>Etiam auctor Augue sit amet Eros semper, a Laoreet dolor Facilisis</h2>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.it to make a type specimen book. It has survived not only five centuries.</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
							<div class="row">
								<div class="col-lg-6 mb-30">
									<img src="assets/img/blog/2.jpg" alt="blog">
								</div>
								<div class="col-lg-6 mb-30">
									<img src="assets/img/blog/3.jpg" alt="blog">
								</div>
							</div>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
							<div class="row">
								<div class="col-lg-12 mb-30">
									<div class="tagcloud">
										<span><b>Tags: </b></span>
										<a href="#">food</a>
										<a href="#">rice</a>
										<a href="#">vegetable</a>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="prject-share">
										<span><b>Share : </b></span>
										<span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
										<span><a href="#"><i class="fab fa-twitter"></i></a></span>
										<span><a href="#"><i class="fab fa-instagram"></i></a></span>
										<span><a href="#"><i class="fab fa-linkedin"></i></a></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Comment List -->
					<div class="comments-list-full mb-30">
						<h2>03 Comments</h2>
						<ul>
							<li class="single-comment">
								<div class="thum">
									<img src="assets/img/team/2.jpg" alt="thumb">
								</div>
								<div class="content">
									<h4><a href="#">Jonathom Doe</a></h4>
									<span> September 19, 2021 at 11:25 am </span>
									<p>Aenean volutpat sed lacus eu faucibus. Quisque nunc dui, finibus at bibendum et, egestas eget lectus. Ut iaculis tempor risus a dictum. Aenean volutpat sed lacus eu faucibus. Quisque nunc dui, finibus at bibendum et, egestas eget lectus. Ut iaculis tempor risus a dictum.</p>
									<a class="reply" href="#">Reply</a>
								</div>
								<ul class="comment-reply">
									<li>
										<div class="thum">
											<img src="assets/img/team/1.jpg" alt="thumb">
										</div>
										<div class="content">
											<h4><a href="#">Jonathom Doe</a></h4>
											<span> September 19, 2021 at 11:25 am </span>
											<p>Aenean volutpat sed lacus eu faucibus. Quisque nunc dui, finibus at bibendum et, egestas eget lectus. Ut iaculis tempor risus a dictum. </p>
											<a class="reply" href="#">Reply</a>
										</div>
									</li>
								</ul>
							</li>
							<li class="single-comment">
								<div class="thum">
									<img src="assets/img/team/3.jpg" alt="thumb">
								</div>
								<div class="content">
									<h4><a href="#">Jonathom Doe</a></h4>
									<span> September 19, 2021 at 11:25 am </span>
									<p>Aenean volutpat sed lacus eu faucibus. Quisque nunc dui, finibus at bibendum et, egestas eget lectus. Ut iaculis tempor risus a dictum. </p>
									<a class="reply" href="#">Reply</a>
								</div>
							</li>
						</ul>
					</div>
					<!-- Comment Form -->
					<div class="comments-form-full">
						<h2>Leave your Comment here </h2>
						<form action="#">
							<textarea name="message" placeholder="Write Comment" spellcheck="false"></textarea>
							<input type="text" name="name" placeholder="Your Name">
							<input type="email" name="email" placeholder="Your Email">
							<input type="text" name="subjects" placeholder="Your Subjects">
							<button type="submit" class="button-1">Submit Comment</button>
						</form>
					</div>
				</div>
				<!-- Sidebar -->
				<div class="col-lg-4">
					<!-- Single -->
					<div class="sidebar-widgets">
						<h2>Search</h2>
						<div class="wi_search_form">
							<form action="#">
								<input type="text" name="search" placeholder="Search Here..">
								<button type="submit"><i class="bi bi-search"></i></button>
							</form>
						</div>
					</div>
					<!-- Single -->
					<div class="sidebar-widgets">
						<h2>Categories</h2>
						<ul>
							<li><a href="#"><i class="fas fa-angle-double-right"></i>  Fruits & Vegetable  </a></li>
							<li><a href="#"><i class="fas fa-angle-double-right"></i>  Meet & Fish </a></li>
							<li><a href="#"><i class="fas fa-angle-double-right"></i> Beverages </a></li>
							<li><a href="#"><i class="fas fa-angle-double-right"></i> Biscuits & Snacks </a></li>
							<li><a href="#"><i class="fas fa-angle-double-right"></i>  Breakfast</a></li>
							<li><a href="#"><i class="fas fa-angle-double-right"></i> Dairy Product </a></li>
							<li><a href="#"><i class="fas fa-angle-double-right"></i>  Package Foods</a></li>
						</ul>
					</div>
					<!-- Single -->
					<div class="sidebar-widgets">
						<h2>Recent Posts</h2>
						<div class="side-widgets-l-blog">
							<div class="item mb-20">
								<div class="thubnail">
									<a href="single.html">
										<img src="assets/img/blog/1.jpg" alt="blog">
									</a>
								</div>
								<div class="content">
									<h4><a href="single.html">Five Ways to Develop a World Class Sales Operations</a></h4>
									<span>18 September 2021</span>
								</div>
							</div>
							<div class="item mb-20">
								<div class="thubnail">
									<a href="single.html">
										<img src="assets/img/blog/2.jpg" alt="blog">
									</a>
								</div>
								<div class="content">
									<h4><a href="single.html">Five Ways to Develop a World Class Sales Operations</a></h4>
									<span>18 September 2021</span>
								</div>
							</div>
							<div class="item mb-20">
								<div class="thubnail">
									<a href="single.html">
										<img src="assets/img/blog/3.jpg" alt="blog">
									</a>
								</div>
								<div class="content">
									<h4><a href="single.html">Five Ways to Develop a World Class Sales Operations</a></h4>
									<span>18 September 2021</span>
								</div>
							</div>
							<div class="item">
								<div class="thubnail">
									<a href="single.html">
										<img src="assets/img/blog/1.jpg" alt="blog">
									</a>
								</div>
								<div class="content">
									<h4><a href="single.html">Five Ways to Develop a World Class Sales Operations</a></h4>
									<span>18 September 2021</span>
								</div>
							</div>
						</div>
					</div>
					<!-- Single -->
					<div class="sidebar-widgets">
						<h2>Tags</h2>
						<div class="tagcloud">
							<a href="#">pasta</a>
							<a href="#">organic</a>
							<a href="#">grape</a>
							<a href="#">ege</a>
							<a href="#">rice</a>
							<a href="#">Food</a>
							<a href="#">fish</a>
							<a href="#">coffee</a>
							<a href="#">watermelon</a>
							<a href="#">vegetable</a>
							<a href="#">nutural</a>
							<a href="#">juice</a>
						</div>
					</div>
					<!-- Single -->
					<div class="sidebar-widgets">
						<h2>Archives</h2>
						<ul>
							<li><a href="#"><i class="fas fa-angle-double-right"></i> September 2021</a></li>
							<li><a href="#"><i class="fas fa-angle-double-right"></i> October 2021</a></li>
							<li><a href="#"><i class="fas fa-angle-double-right"></i> August 2021</a></li>
							<li><a href="#"><i class="fas fa-angle-double-right"></i> July 2021</a></li>
							<li><a href="#"><i class="fas fa-angle-double-right"></i> June 2021</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Blog Area -->

@endsection