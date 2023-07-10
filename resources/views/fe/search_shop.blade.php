 <!--Main Content-->
 @extends('fe.layout_shop')
@section('product')  
 <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                	<div class="productList product-load-more">
                    	<!--Toolbar-->
                        <button type="button" class="btn btn-filter d-block d-md-none d-lg-none"> Product Filters</button>
                    	<div class="toolbar">
                        	<div class="filters-toolbar-wrapper">
                            	<div class="row">
                                	<div class="col-4 col-md-4 col-lg-4 filters-toolbar__item collection-view-as d-flex justify-content-start align-items-center">
                                    	<!-- <a href="shop-left-sidebar.html" title="Grid View" class="change-view change-view--active">
                                        	<img src="assets/images/grid.jpg" alt="Grid" />
                                        </a>
                                        <a href="shop-listview.html" title="List View" class="change-view">
                                        	<img src="assets/images/list.jpg" alt="List" />
                                        </a> -->
                                    </div>

                                    <div class="col-4 col-md-4 col-lg-4 text-center filters-toolbar__item filters-toolbar__item--count d-flex justify-content-center align-items-center">
                                    <span class="filters-toolbar__product-count"><img src="{{asset('/fe/images/pro.png') }}" alt="" class="newproduct"></span>
                                    </div>
                     
                                    <div class="col-4 col-md-4 col-lg-4 text-right">
                                    	<div class="filters-toolbar__item">
                                      		<!-- <label for="SortBy" class="hidden">Sort</label>
                                      		<select name="SortBy" id="SortBy" class="filters-toolbar__input filters-toolbar__input--sort">
                                                <option value="title-ascending" selected="selected">Sort</option>
                                                <option>Best Selling</option>
                                      		</select> -->
                                      		<input class="collection-header__default-sort" type="hidden" value="manual">
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                        <!--End Toolbar-->
                        <div class="grid-products grid--view-items">
                            <div class="row">
                            @foreach($search_product as $key => $product)
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="{{URL::to('/details/'.$product->product_id)}}">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{URL::to('public/uploads/product/'.$product->product_image)}}" src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{URL::to('public/uploads/product/'.$product->product_image)}}" src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="image" title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                        
                                        <!-- countdown start -->
                                      
                                        <!-- countdown end -->
    
                                        <!-- Start product button -->
                                        <form class="variants add" action="{{URL::to('/save-cart')}}" method ="POST"> 
                                @csrf
                                        <button class="btn btn-add-to-cart" name="add-to-cart"type="sunmit" type="button">Add To Cart</button>
                                        </form>
                                        <!-- <div class="button-set">
                                            <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-r"></i>
                                            </a>
                                            <div class="wishlist-btn">
                                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                                    <i class="icon anm anm-heart-l"></i>
                                                </a>
                                            </div>
                                            <div class="compare-btn">
                                                <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                    <i class="icon anm anm-random-r"></i>
                                                </a>
                                            </div>
                                        </div> -->
                                        <!-- end product button -->
                                    </div>
                                    <!-- end product image -->
                                   
                                    <!--start product details -->
                                    
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                    
                                            <a href="#">{{$product->product_name}}</a>
                                        </div>
                                        <!-- End product name -->
                                        <!-- product price -->
                                        <div class="product-price">
                                            <span class="old-price">{{number_format($product->product_price).''.'$'}}</span>
                                            <span class="price">{{number_format($product->product_price).''.'$'}}</span>
                                        </div>
                                        <!-- End product price -->
                                        
                                        <div class="product-review">
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                        </div>
                                        <!-- Variant -->
                                        <!-- <ul class="swatches">
                                            <li class="swatch medium rounded"><img src="assets/images/product-images/variant1.jpg" alt="image" /></li>
                                            <li class="swatch medium rounded"><img src="assets/images/product-images/variant2.jpg" alt="image" /></li>
                                            <li class="swatch medium rounded"><img src="assets/images/product-images/variant3.jpg" alt="image" /></li>
                                            <li class="swatch medium rounded"><img src="assets/images/product-images/variant4.jpg" alt="image" /></li>
                                            <li class="swatch medium rounded"><img src="assets/images/product-images/variant5.jpg" alt="image" /></li>
                                            <li class="swatch medium rounded"><img src="assets/images/product-images/variant6.jpg" alt="image" /></li>
                                        </ul> -->
                                        <!-- End Variant -->
                                    </div>
                                   
                                    <!-- End product details -->
                                    <!-- countdown start -->
                
                                    <!-- countdown end -->
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="infinitpaginOuter">
                     
                    </div>
                </div>
              

                <!--End Main Content-->
@endsection