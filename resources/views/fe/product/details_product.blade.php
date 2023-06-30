@extends('fe.layout.layout')
@section('contents') 
<div class="collection-header">
			<div class="collection-hero">
        		<div class="collection-hero__image"><img class="blur-up lazyload" data-src="{{asset('/fe/images/cat-women.jpg')}}" src="{{asset('/fe/images/cat-women.jpg')}}" alt="Women" title="Women" /></div>
      		</div>
</div>
        @foreach($details_product as $key => $details)
<div id="ProductSection-product-template" class="product-template__container prstyle2 container">
                    <!--#ProductSection-product-template-->
                    <div class="product-single product-single-1">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-details-img product-single__photos bottom">
                                    <div class="zoompro-wrap product-zoom-right pl-20">
                                        <div class="zoompro-span">
                                            <img class="blur-up lazyload zoompro" data-zoom-image="{{URL::to('public/uploads/product/'.$details->product_image)}}" alt="" src="{{URL::to('public/uploads/product/'.$details->product_image)}}" />               
                                        </div>
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span><span class="lbl pr-label1">new</span></div>
                                        <div class="product-buttons">
                                            <a href="https://www.youtube.com/watch?v=93A2jOW5Mog" class="btn popup-video" title="View Video"><i class="icon anm anm-play-r" aria-hidden="true"></i></a>
                                            <a href="#" class="btn prlightbox" title="Zoom"><i class="icon anm anm-expand-l-arrows" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-thumb product-thumb-1">
                                        <div id="gallery" class="product-dec-slider-1 product-tab-left">
                                            <a data-image="assets/images/product-detail-page/cape-dress-1.jpg" data-zoom-image="assets/images/product-detail-page/cape-dress-1.jpg" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" src="assets/images/product-detail-page/cape-dress-1.jpg" alt="" />
                                            </a>
                                            <a data-image="assets/images/product-detail-page/cape-dress-2.jpg" data-zoom-image="assets/images/product-detail-page/cape-dress-2.jpg" class="slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" src="assets/images/product-detail-page/cape-dress-2.jpg" alt="" />
                                            </a>
                                            <a data-image="assets/images/product-detail-page/cape-dress-3.jpg" data-zoom-image="assets/images/product-detail-page/cape-dress-3.jpg" class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" src="assets/images/product-detail-page/cape-dress-3.jpg" alt="" />
                                            </a>
                                            <a data-image="assets/images/product-detail-page/cape-dress-4.jpg" data-zoom-image="assets/images/product-detail-page/cape-dress-4.jpg" class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" src="assets/images/product-detail-page/cape-dress-4.jpg" alt="" />
                                            </a>
                                            <a data-image="assets/images/product-detail-page/cape-dress-5.jpg" data-zoom-image="assets/images/product-detail-page/cape-dress-5.jpg" class="slick-slide slick-cloned" data-slick-index="0" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" src="assets/images/product-detail-page/cape-dress-5.jpg" alt="" />
                                            </a>
                                            <a data-image="assets/images/product-detail-page/cape-dress-6.jpg" data-zoom-image="assets/images/product-detail-page/cape-dress-6.jpg" class="slick-slide slick-cloned" data-slick-index="1" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" src="assets/images/product-detail-page/cape-dress-6.jpg" alt="" />
                                            </a>
                                            <a data-image="assets/images/product-detail-page/cape-dress-7.jpg" data-zoom-image="assets/images/product-detail-page/cape-dress-7.jpg" class="slick-slide slick-cloned" data-slick-index="2" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" src="assets/images/product-detail-page/cape-dress-7.jpg" alt="" />
                                            </a>
                                            <a data-image="assets/images/product-detail-page/cape-dress-8.jpg" data-zoom-image="assets/images/product-detail-page/cape-dress-8.jpg" class="slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" src="assets/images/product-detail-page/cape-dress-8.jpg" alt="" />
                                            </a>
                                        </div>
                                    </div>
        
                                </div>
                                <!--Product Feature-->
                           
                                <!--End Product Feature-->
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-single__meta">
                                    <h1 class="product-single__title">{{$details->product_name}}</h1>
                                    <div class="product-single__description rte">
                                    <h3>ID: {{$details->product_id}}</h3>
                                </div>
                                <form action="{{URL::to('/save-cart')}}" method ="POST">
                                @csrf 
                                    <div class="product-nav clearfix">					
                                     
                                    </div>
                             
                                    <p class="product-single__price product-single__price-product-template">
                                        <span class="visually-hidden">Regular price</span>
                                        <s id="ComparePrice-product-template"><span class="money">{{$details->product_price}}</span></s>
                                        <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                            <span id="ProductPrice-product-template"><span class="money">{{$details->product_price}}</span></span>
                                        </span>
                                        <span class="discount-badge"> <span class="devider">|</span>&nbsp;
                                            <span>You Save</span>
                                            <span id="SaveAmount-product-template" class="product-single__save-amount">
                                            <span class="money">$100.00</span>
                                            </span>
                                            <span class="off">(<span>16</span>%)</span>
                                        </span>  
                                    </p>
                                <div class="product-single__description rte">
                                    <h3>Mô tả Sản Phẩm</h3>
                                    <p>{{$details->product_desc}}</p>
                                </div>
                                <div class="product-single__description rte">
                                    <h3>Category: {{$details->category_name}} </h3>
                                </div>
                                <div class="product-single__description rte">
                                    <h3>Brand: {{$details->brand_name}} </h3>
                                </div>
                              
                                <div class="product-action clearfix">
                            
                                        <div class="product-form__item--quantity">
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text"  name="quantity" value="1" class="product-form__input qty">
                                                    <input type="hidden"  name="productid_hidden" value="{{$details->product_id}}" class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>      
                                        
                                                        
                                        <div class="product-form__item--submit">
                                            <button  type="sunmit"type="button" name="add" class="btn product-form__cart-submit">
                                                <span>Add to cart</span>
                                            </button>
                                        </div>
                                     
                                    </div>
                           
                                <div class="display-table shareRow">
                               
                                        <div class="display-table-cell text-right">
                                            <div class="social-sharing">
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                                    <i class="fa fa-facebook-square" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Share</span>
                                                </a>
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Tweet</span>
                                                </a>
                                                <a href="#" title="Share on google+" class="btn btn--small btn--secondary btn--share" >
                                                    <i class="fa fa-google-plus" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Google+</span>
                                                </a>
                                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                                    <i class="fa fa-pinterest" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Pin it</span>
                                                </a>
                                                <a href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Share by Email" target="_blank">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Email</span>
                                                </a>
                                             </div>
                                        </div>
                                    </div>
                                
                            </div>
                            </form>
                            	<!--Product Tabs-->
                                
                                <!--End Product Tabs-->
                        	</div>
                    	</div>
                    <!--End-product-single-->
                    
                    <!--Related Product Slider-->
                  
                     
                    <!--End Related Product Slider-->
                    
                    <!--Recently Product Slider-->
                   
                	<!--#ProductSection-product-template-->
            	</div>
                @endforeach
                    @endsection