@include('inc.front._head')

		<!--[if lte IE 9]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
		<![endif]-->

		<!-- Add your site or application content here -->
		<div class="fakeloader"></div>
		
		<!-- Main wrapper -->
		<div class="wrapper" id="wrapper" ng-app="timeCalc" ng-controller="CtrlTimeCalc as timeCalc">
			
			<!-- Header -->
			@include('inc.front.header')
			<!-- //Header -->

			<!-- Top Banner -->
				@yield('banner')

			<!-- Header-->
			@yield('inc.front.header')

			<!-- Page Conent -->
			<main class="page-content">
				@yield('content')
			</main><!-- //Page Conent -->

			<!-- Footer -->
			@include('inc.front.footer')
			<!-- //Footer -->

			<!-- Login Form -->
			<div class="accountbox-wrapper">
				<div class="accountbox text-left">
					<ul class="nav accountbox__filters" id="myTab" role="tablist">
						<li>
							<a class="active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
						</li>
						<li>
							<a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
						</li>
					</ul>
					<div class="accountbox__inner tab-content" id="myTabContent">
						<div class="accountbox__login tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
							<form action="#">
								<div class="single-input">
									<input type="text" placeholder="User name or email" class="cr-round cr-round--lg">
								</div>
								<div class="single-input">
									<input type="password" placeholder="Password" class="cr-round cr-round--lg">
								</div>
								<div class="single-input">
									<button type="submit" class="cr-btn cr-btn--sm cr-btn--theme cr-round cr-round--lg"><span>Go</span></button>
								</div>
								<div class="accountbox-login__others">
									<h6>Or login with</h6>
									<div class="social-icons social-icons--rounded">
										<ul>
											<li class="facebook"><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
											<li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
											<li class="pinterest"><a href="#"><i class="fa fa-google-plus"></i></a></li>
										</ul>
									</div>
								</div>
							</form>
						</div>
						<div class="accountbox__register tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<form action="#">
								<div class="single-input">
									<input type="text" placeholder="User name" class="cr-round cr-round--lg">
								</div>
								<div class="single-input">
									<input type="email" placeholder="Email address" class="cr-round cr-round--lg">
								</div>
								<div class="single-input">
									<input type="password" placeholder="Password" class="cr-round cr-round--lg">
								</div>
								<div class="single-input">
									<input type="password" placeholder="Confirm password" class="cr-round cr-round--lg">
								</div>
								<div class="single-input">
									<button type="submit" class="cr-btn cr-btn--sm cr-btn--theme cr-round cr-round--lg"><span>Sign Up</span></button>
								</div>
							</form>
						</div>
						<span class="accountbox-close-button"><i class="icofont icofont-close"></i></span>
					</div>
				</div>
			</div><!-- //Login Form -->
	
			<!-- Cartbox -->
			<div class="cartbox-wrap">
				<div class="cartbox text-right">
					<button class="cartbox-close"><i class="icofont icofont-close"></i></button>
					<div class="cartbox__inner text-left">
						<div class="cartbox__items">
							<!-- Cartbox Single Item -->
							<div class="cartbox__item">
								<div class="cartbox__item__thumb">
									<a href="product-details.html">
										<img src="images/product/small-thumbnail/1.png" alt="small thumbnail">
									</a>
								</div>
								<div class="cartbox__item__content">
									<h5><a href="product-details.html" class="product-name">Prayer Cap</a></h5>
									<p>Qty: <span>01</span></p>
									<span class="price">$15</span>
								</div>
								<button class="cartbox__item__remove">
									<i class="icofont icofont-ui-delete"></i>
								</button>
							</div><!-- //Cartbox Single Item -->
							<!-- Cartbox Single Item -->
							<div class="cartbox__item">
								<div class="cartbox__item__thumb">
									<a href="product-details.html">
										<img src="images/product/small-thumbnail/2.png" alt="small thumbnail">
									</a>
								</div>
								<div class="cartbox__item__content">
									<h5><a href="product-details.html" class="product-name">Attar Perfume</a></h5>
									<p>Qty: <span>01</span></p>
									<span class="price">$25</span>
								</div>
								<button class="cartbox__item__remove">
									<i class="icofont icofont-ui-delete"></i>
								</button>
							</div><!-- //Cartbox Single Item -->
							<!-- Cartbox Single Item -->
							<div class="cartbox__item">
								<div class="cartbox__item__thumb">
									<a href="product-details.html">
										<img src="images/product/small-thumbnail/3.png" alt="small thumbnail">
									</a>
								</div>
								<div class="cartbox__item__content">
									<h5><a href="product-details.html" class="product-name">Special T-shirt</a></h5>
									<p>Qty: <span>01</span></p>
									<span class="price">$30</span>
								</div>
								<button class="cartbox__item__remove">
									<i class="icofont icofont-ui-delete"></i>
								</button>
							</div><!-- //Cartbox Single Item -->
						</div>
						<div class="cartbox__total">
							<ul>
								<li><span class="cartbox__total__title">Subtotal</span><span class="price">$70</span></li>
								<li class="shipping-charge"><span class="cartbox__total__title">Shipping Charge</span><span class="price">$05</span></li>
								<li class="grandtotal">Total<span class="price">$75</span></li>
							</ul>
						</div>
						<div class="cartbox__buttons">
							<a href="cart.html" class="cr-btn cr-btn--transparent"><span>View cart</span></a>
							<a href="checkout.html" class="cr-btn cr-btn--theme"><span>Checkout</span></a>
						</div>
					</div>
				</div>
			</div><!-- //Cartbox -->

		</div><!-- //Main wrapper -->

		<!-- Map -->
		@yield('map')
		<!-- Map End-->

@include('inc.front._foot')
