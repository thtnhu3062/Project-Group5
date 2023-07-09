<div class="section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">Weekly Bestseller</h2>
                            <p>Our most popular products based on sales</p>
                        </div>
                   
						<div class="productSlider grid-products">
                        @foreach($all_new_product as $key => $product)
                            <div class="col-12 item">
                     
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="{{URL::to('/details/'.$product->product_id)}}" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="{{URL::to('public/uploads/product/'.$product->product_image)}}" src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="{{URL::to('public/uploads/product/'.$product->product_image)}}" src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- Variant Image-->
                                        <img class="grid-view-item__image hover variantImg" src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="image" title="product">
                                        <!-- Variant Image-->
                                        <!-- product label -->
                                        <div class="product-labels rounded"><span class="lbl on-sale">Sale</span> <span class="lbl pr-label1">new</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
                                    
                                    <!-- countdown start -->
                                    <!-- <div class="saleTime desktop" data-countdown="2022/03/01"></div> -->
                                    <!-- countdown end -->

                                    <!-- Start product button -->
                                    <form class="variants add" action="{{URL::to('/save-cart')}}" method ="POST"> 
                                @csrf
                                <input type="hidden"  name="qty" value="1" class="product-form__input qty"/>
                                                    <input type="hidden"  name="productid_hidden" value="{{$product->product_id}}">
                                        <button class="btn btn-add-to-cart" name="add-to-cart"type="sunmit" type="button">Add To Cart</button>
                                        </form>
                               
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <h3><b>{{$product->product_name}}</b></h3>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                            
                                            <span class="old-price">   <?php
                                            $subtotal = $product->product_price * 130/100;
                                            echo $subtotal.'$';
                                            ?></span>
                                            <span class="price">{{$product->product_price.''.'$'}}</span>
                                        </div>
                                    <!-- End product price -->
                                    <!-- Color Variant -->
                                    <div class="product-review">
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                            <i class="font-13 fa fa-star"></i>
                                        </div>
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div>
                        @endforeach
                        </div>
                    
                    </div>
            	</div>    
            </div>
</div>