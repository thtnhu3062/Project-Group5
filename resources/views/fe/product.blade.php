
<div class="col-12 col-sm-9 col-md-9 col-lg-9 main-col">
                    <hr>
                    @foreach($all_product as $key => $product)
                	<div class="productList product-load-more">
                    	<!--Toolbar-->
             
                        <!--End Toolbar-->
                       
                        <div class="grid-products grid--view-items">
                            <div class="row">
                           
                                <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="#">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="{{URL::to('public/uploads/product/'.$product->product_image)}}" src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="{{URL::to('public/uploads/product/'.$product->product_image)}}" src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->

                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn btn-addto-cart" type="button">Add To Cart</button>
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
                                            <span class="price">{{number_format($product->product_price).' '.'VNĐ'}}</span>
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
                                        <!-- End Variant -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    @endforeach
                </div>

