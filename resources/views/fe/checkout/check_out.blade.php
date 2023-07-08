@extends('fe.layout.layout')
@section('contents')  
	<!--Collection Banner-->
    <div class="collection-header">
			<div class="collection-hero">
        		<div class="collection-hero__image"><img class="blur-up lazyload" data-src="{{asset('/fe/images/cat-women.jpg')}}" src="{{asset('/fe/images/cat-women.jpg')}}" alt="Women" title="Women" /></div>
      		</div>
		</div>
        <!--End Collection Banner-->
<div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">

        		<div class="wrapper"><img src="{{ asset('fe/images/checkout.png') }}" alt="" class="khungvien"></div>

        		<div class="wrapper"><h1 class="page-width">Payment</h1></div>

      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="customer-box returning-customer">
                        <h3><i class="icon anm anm-user-al"></i> Returning customer?</h3>
                     
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="customer-box customer-coupon">
                        <h3 class="font-15 xs-font-13"><i class="icon anm anm-gift-l"></i> Have a coupon? </h3>
                      
                    </div>
                </div>
            </div>
          
            <div class="row billing-fields">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">
                <div class="your-order">
                            <h2 class="order-title mb-4">Your Order</h2>
                           
                            <div class="table-responsive-sm order-table"> 
                                <table class="bg-white table table-bordered table-hover text-center">
                             
                              
                                    <tbody>
                                    <?php
                                    $shipping = DB::table('tbl_shipping')->get();
                                    ?>
                                    @foreach($shipping as $ship)
                                        <tr>
                                            <td class="text-left"><b>Full Name</b></td>
                                            <td>{{$ship->shipping_name}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left"><b>Email</b></td>
                                            <td>{{$ship->shipping_email}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left"><b>Phone</b>
                                            </td>
                                            <td>{{$ship->shipping_phone}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left"><b>Address</b></td>
                                            <td>{{$ship->shipping_address}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-left"><b>Note</b></td>
                                            <td>{{$ship->shipping_note}}</td>
                                        </tr>
                         @endforeach
                                    </tbody>
                                  
                                </table>
                            </div>
                            
                        </div>
                    <!-- <div class="create-ac-content bg-light-gray padding-20px-all">
                        <form action="{{URL::to('/save-checkout')}}" method="POST">
                        @csrf
                            <fieldset>
                                <h2 class="login-title mb-3">Billing details</h2>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-firstname"><span class="required-f">Full name</span>*</label>
                                        <input name="shipping_name" value=" " id="input-firstname" type="text">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-address-1">Address <span class="required-f">*</span></label>
                                        <input name="shipping_address" value="" id="input-address-1" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-email">E-Mail <span class="required-f">*</span></label>
                                        <input name="shipping_email" value="" id="input-email" type="email">
                                    </div>
                                    <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                        <label for="input-telephone">Telephone <span class="required-f">*</span></label>
                                        <input name="shipping_phone" value="" id="input-telephone" type="tel">
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="row">
                                    <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                        <label for="input-company">Order Notes <span class="required-f">*</span></label>
                                        <textarea name="shipping_note" class="form-control resize-both" rows="3"></textarea>
                                    </div>
                                </div>
                            </fieldset>
                            
                        </form>
                    </div> -->
                </div>
                <?php
    $content = Cart::content();
    ?>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="your-order-payment">
                        <div class="your-order">
                            <h2 class="order-title mb-4">Your Order</h2>
                           
                            <div class="table-responsive-sm order-table"> 
                                <table class="bg-white table table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    @foreach($content as $cart)
                                    <tbody>
                        
                                        <tr>


                                            <td class="text-left">{{$cart->name}}</td>
                                            <td>{{$cart->price}}$</td>
                                      
                                            <td>{{$cart->qty}}</td>
                                            <td>
                                            <?php
                                            $subtotal = $cart->price * $cart->qty;
                                            echo $subtotal.''.'$';
                                            ?>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot class="font-weight-600">
                                      
                                        <tr>
                                            <td colspan="3" class="text-right">Total</td>
                                            <td>{{Cart::total(0).''.'$'}}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            
                        </div>
                        
                        <hr />
                        <form action="{{URL::to('/order-place')}}" method="POST">
                            @csrf
                        <div class="your-payment">
                            <h2 class="payment-title mb-3">payment method</h2>
                            <p class="cart_tearm">
                        <label>
                          <input type="checkbox" name="payment_option" id="cartTearm" class="checkbox" value="tiền mặt" required="">
                           Payment in cash</label>
                      </p>
                        </div>
                        <div class="order-button-payment">
                                    <button class="btn" value="Place order" type="submit">Place order</button>
                                </div>
                        </form>
                                

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    @endsection