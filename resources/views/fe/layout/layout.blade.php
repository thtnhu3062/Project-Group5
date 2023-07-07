

<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/index.html   11 Nov 2019 12:16:10 GMT -->
   <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fendi Perfume</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Favicon -->
     <link rel="shortcut icon" href="{{ asset('/images/favicon1.ico') }}" />
    <!-- Plugins CSS -->
     <link rel="stylesheet" href="{{ asset('/fe/css/plugins.css') }}">
    <!-- Bootstap CSS -->
     <link rel="stylesheet" href="{{ asset('/fe/css/bootstrap.min.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('/fe/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/fe/css/responsive.css' ) }} ">
 </head>
<body class="template-index belle template-index-belle home2-default">
   <div id="pre-loader">
    <img src="{{ asset('/feassets/images/' ) }}" alt="Loading..." />
   </div>
   <div class="pageWrapper">
	<!--Search Form Drawer-->
	<div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
        </div>
  </div>
    <div class="top-header">
        <div class="container-fluid">
            <div class="row">
            	<div class="col-10 col-sm-8 col-md-5 col-lg-4">
                    <p class="phone-no"><i class="anm anm-phone-s"></i> +440 0(111) 044 833</p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                	
                </div>
                <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                	<span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                    <ul class="customer-links list-inline">

                    <?php
                    $customer_id = Session::get('customer_id');
                    if($customer_id!=null){
                    ?>
                     <li><a href="{{URL::to('/logout-checkout')}}">Logout</a></li>
                     <?php
                    }else{
                        
                        ?>
                        <li><a href="{{URL::to('/login-checkout')}}">Login</a></li>
                         <?php
                    }
                    ?>

                        <li><a href="{{URL::to('/register')}}">Create Account</a></li>
                    </ul>
                </div>
            </div> 
        </div>
    </div>
    <!--End Top Header-->
    <!--Header-->
    <div class="header-wrap classicHeader animated d-flex">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="{{URL::to('/')}}">
                    	<img src="{{ asset('/fe/images/loggo.png ' ) }} " style="width:auto ; height:auto; "    />
                    </a>
                </div>
                <!--End Desktop Logo-->
                <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                	<div class="d-block d-lg-none">
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        	<i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>
                	<!--Desktop Menu-->
                	<nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                        <ul id="siteNav" class="site-nav medium center hidearrow">

                         
                          
                      
                       

                            <li class="lvl1 parent megamenu"><a href="{{URL::to('/')}}">Home <i class="anm anm-angle-down-l"></i></a></li>
                            <li class=""><a href="{{URL::to('/shop')}}">Shop <i class="anm anm-angle-down-l"></i></a>

                            <li class="lvl1 parent dropdown"><a href="{{URL::to('/show-cart')}}">Cart <i class="anm anm-angle-down-l"></i></a></li>

                            <li class="lvl1 parent dropdown"><a href="{{ Route('blog') }}">Blog <i class="anm anm-angle-down-l"></i></a></li>

                            <?php
                    $customer_id = Session::get('customer_id');
                    $shipping_id = Session::get('shipping_id');
                    if($customer_id!=null & $shipping_id==null){
                    ?>
                     <li class="lvl1"><a href="{{URL::to('/checkout')}}"><b>Payment!</b> <i class="anm anm-angle-down-l"></i></a></li>
                     <?php
                     }elseif($customer_id!=null & $shipping_id!=null){

                        ?>
                        <li class="lvl1"><a href="{{URL::to('/payment')}}"><b>Payment!</b> <i class="anm anm-angle-down-l"></i></a></li>
                         <?php
                     }else{
                        
                        ?>
                        <li class="lvl1"><a href="{{URL::to('/login-checkout')}}"><b>Payment!</b> <i class="anm anm-angle-down-l"></i></a></li>
                         <?php
                    }
                    ?>
                           <!-- <li class="lvl1"><a href="{{URL::to('/checkout')}}"><b>Buy Now!</b> <i class="anm anm-angle-down-l"></i></a></li> -->
                        </ul>
                    </nav>
                    <!--End Desktop Menu-->
                </div>

                

                  <!--Mobile Logo-->
                  <!-- <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="index.html">
                            <img src="{{ asset('/fe/images/loggo.png ' ) }}" style="witdh:auto ; height:auto" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                        </a>
                    </div>
                </div> -->

                <!--Mobile Logo-->
             
                
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">

                <a href="{{URL::to('/show-cart')}}" class="site-header__cart" title="Cart">

                	<!-- <div class="site-cart"> -->
                        	<!-- <i class="icon anm anm-bag-l"></i> -->
                            <!-- <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span> -->
<!-- 
                	 <div class="site-cart"> 
                        	<i class="icon anm anm-bag-l"></i>

                            <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">0</span>
                        </a>
            
                         <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span> 
 -->

                        <!--Minicart Popup-->
                         <div id="header-cart" class="block block-cart">
                        	<ul class="mini-products-list">
                                <li class="item">
                                	<a class="product-image" href="#">
                                    	<img src="assets/images/product-images/cape-dress-1.jpg" alt="" title="" />
                                    </a>
                                    <div class="product-details">
                                    	<a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                        <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                        <a class="pName" href="cart.html"></a>
                                        <div class="variant-cart"></div>
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                            	<span class="label">Qty:</span>
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="priceRow">
                                        	<div class="product-price">
                                            	<span class="money"></span>
                                            </div>
                                         </div>
									</div>
                                </li>
                                <li class="item">
                                	<a class="product-image" href="#">
                                    	<img src="assets/images/product-images/cape-dress-2.jpg" alt="" title="" />
                                    </a>
                                    <div class="product-details">
                                    	<a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                        <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                        <a class="pName" href="cart.html"></a>
                                        <div class="variant-cart"></div>
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                            	<span class="label">Qty:</span>
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                       	<div class="priceRow">
                                            <div class="product-price">
                                                <span class="money"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="total">
                            	<div class="total-in">
                                	<span class="label">Cart Subtotal:</span><span class="product-price"><span class="money"></span></span>
                                </div>
                                 <div class="buttonSet text-center">
                                    <a href="cart.html" class="btn btn-secondary btn--small">View Cart</a>
                                    <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a>
                                </div>
                            </div>
                        </div> 
                        <!--EndMinicart Popup-->
                     </div> 
                    </a>
                 <!-- <div class="site-header__search">
                    	<button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                    </div>  -->
                </div>
                
        	</div>
        </div>
    </div>
    <!--End Header-->
    <!--Mobile Menu-->
    <div class="mobile-nav-wrapper" role="navigation">
		<div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
        <ul id="MobileNav" class="mobile-nav">
        	<li class="lvl1 parent megamenu"><a href="index.html">Home <i class="anm"></i></a>
        </li>
        	<li class="lvl1 parent megamenu"><a href="#">Shop <i class="anm"></i></a>
        
        </li>
        
       
      
        
         
        </li>
        	<li class="lvl1 parent megamenu"><a href="#">Blog <i class="anm"></i></a>
        
        </li>
        	<li class="lvl1"><a href="#"><b>Buy Now!</b></a>
        </li>
      </ul>
	</div>
	<!--End Mobile Menu-->
    @yield('contents')
     <!--Footer-->
     <footer id="footer">
        <div class="newsletter-section">
            <div class="container">
                <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                            <div class="display-table">
                                <div class="display-table-cell footer-newsletter">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
                            <div class="footer-social">
                                <ul class="list--inline site-footer__social-icons social-icons">
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>    
        </div>
        <div class="site-footer">
        	<div class="container">
     			<!--Footer Links-->
            	<div class="footer-top">
                	<div class="row">
                    	<div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Quick Shop</h4>
                            <ul>
                            	<li><a href="#">Women</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Unisex</a></li>
                           
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Informations</h4>
                            <ul>

                            	<li><a href="{{ Route('aboutus') }}">About us</a></li>
                              <li><a href="{{ Route('faq') }}">FAQ's</a></li>
                              <li><a href="{{ Route('contactus') }}">Contact Us</a></li>
                              <li><a href="{{ Route('blog') }}">Blog</a></li>
                            	
                            </ul>
                        </div>
                  
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                        	<h4 class="h4">Contact Us</h4>
                            <ul class="addressFooter">
                            	<li><i class="icon anm anm-map-marker-al"></i><p>Cach Mang Thang 8<br>Ward 11, District 3</p></li>
                                <li class="phone"><i class="icon anm anm-phone-s"></i><p>(+84) xxxxxxxxxxx</p></li>
                                <li class="email"><i class="icon anm anm-envelope-l"></i><p>fpt@gmail.com</p></li>
                            </ul>
                        </div>
                        <div class="footer-bottom">
                	<div class="row">
                    	<!--Footer Copyright-->
	                	<div class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left"><span></span> </div>
                        <!--End Footer Copyright-->
                        <!--Footer Payment Icon-->
                        	<ul class="payment-icons list--inline">
                        		<li><i class="icon fa fa-cc-visa" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-mastercard" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-discover" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-paypal" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-cc-amex" aria-hidden="true"></i></li>
                                <li><i class="icon fa fa-credit-card" aria-hidden="true"></i></li>
                            </ul>
                        <!--End Footer Payment Icon-->
                    </div>
                </div>

                    </div>
                </div>
                <!--End Footer Links-->
              
                
            </div>
        </div>
    </footer>
    <!--End Footer-->
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->
    
    <!--Quick View popup-->

    <!--End Quick View popup-->
    
    <!-- Newsletter Popup -->
	
	<!-- End Newsletter Popup -->

     <!-- Including Jquery -->
     <script src="{{ asset('/fe/js/vendor/jquery-3.3.1.min.js') }}"></script>
     <script src="{{ asset('/fe/js/vendor/modernizr-3.6.0.min.js') }}"></script>
     <script src="{{ asset('/fe/js/vendor/jquery.cookie.js' ) }}"></script>
     <script src="{{ asset('/fe/js/vendor/wow.min.js') }}"></script>
     <!-- Including Javascript -->
     <script src="{{ asset('/fe/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('/fe/js/plugins.js') }}"></script>
     <script src="{{ asset('/fe/js/popper.min.js') }}"></script>
     <script src="{{ asset('/fe/js/lazysizes.js') }}"></script>
     <script src="{{ asset('/fe/js/main.js ' ) }}"></script>

     
     <!--For Newsletter Popup-->


  @yield('myjs')



</body>

</html>

