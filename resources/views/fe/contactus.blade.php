@extends('fe.layout.layout')

@section('contents')

<div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width" style="margin-top:3%;">Contact Us</h1></div>
      		</div>
		</div>
        <div class="bredcrumbWrap">
            <div class="container breadcrumbs">
                <a href="{{ Route('home') }}" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>Contact Us</span>
            </div>
        </div>
        <!--End Page Title-->
        <div class="map-section map">
        	<!--<iframe src="{{ asset('fe/images/perfumeshop1.jpg') }}" height="350" allowfullscreen></iframe><!-->
            <img src="{{ asset('/fe/images/perfumeshop1.jpg') }}"  height="550" width="1500" alt="">
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
                                <td><p>55 Gallaxy Enque, 2568 steet, 23568 NY</p></td>
                                <td><p>(440) 000 000 0000</p></td>
                                <td><p>sales@yousite.com</p></td>
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