@extends('fe.layout.layout')

@section('contents')

<div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width" style="margin-top:5%;">Contact Us</h1></div>
      		</div>
		</div>
        <div class="bredcrumbWrap">
            <div class="container breadcrumbs">
                <a href="{{ Route('home') }}" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>Contact Us</span>
            </div>
        </div>
        <!--End Page Title-->
        <div class="map-section map">
        <div class="slideshow slideshow-wrapper pb-section sliderFull">
        	<div class="home-slideshow">
            	<div class="slide">
                	<div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="{{ asset('/fe/images/perfume1.jpg') }}" src="{{ asset('/fe/images/perfume1.jpg') }}" alt="Shop Our New Collection" title="Our Shop" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content bottom">
                                <div class="wrap-caption center">
                                        <h2 class="h1 mega-title slideshow__title">Our Shop</h2>
                                        <a href="{{ Route('home') }}"><span class="btn">Shop Now</span></a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide">
                	<div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img"data-src="{{ asset('/fe/images/perfume.jpg') }}" src="{{ asset('/fe/images/perfume.jpg') }}" alt="Shop Our New Collection" title="Shop Our New Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content bottom">
                                <div class="wrap-caption center">
                                    <h2 class="h1 mega-title slideshow__title">Bringing Great Experiences</h2>
                                    <span class="mega-subtitle slideshow__subtitle">Save up to 50% off this weekend only</span>
                                    <a href="{{ Route('home') }}"><span class="btn">Shop Now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
            <div class="container">
            	<div class="row">
                	<div class="map-section__overlay-wrapper">
                        <div class="map-section__overlay">
                            <div class="col-md-5 ">
                            </div class="open-hours">
                                  <h3>Our store</h3>
                    	          <strong>Opening Hours</strong><br>
						          Mon - Sat : 9am - 11pm<br>
						          Sunday: 11am - 5pm
                             </div>
                             </div>
                             <div class="col-md-5">
                             </div class="open-hours">
                             <div>
                             <tr>
                                <h3>Our address</h3>
                                <td><p>Cach Mang Thang Tam Ward 11 District 3</p></td>
                                <td><p>(+84) xxxxxxxxxxx</p></td>
                                <td><p>fpt@gmail.com</p></td>
                            </tr>
                            </div>
                            </div>
                            </div>
                        </div>
                   	</div>
                </div>
            </div>
        </div>
        
        
        
        
    </div>
@endsection