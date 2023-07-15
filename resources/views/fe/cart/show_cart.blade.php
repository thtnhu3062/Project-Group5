@extends('fe.layout.layout')
@section('contents') 
<div class="collection-header">
			<div class="collection-hero">
        		<div class="collection-hero__image"><img class="blur-up lazyload" data-src="{{asset('/fe/images/cat-women.jpg')}}" src="{{asset('/fe/images/cat-women.jpg')}}" alt="Women" title="Women" /></div>
      		</div>
</div>
<div id="page-content">
  
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Your cart</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        <?php
    $content = Cart::content();
    ?>
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">
                		<table>
                            <thead class="cart__row cart__header">
                                <tr>
                                    <th colspan="2" class="text-center">Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-right">Total</th>
                                    <th class="action">&nbsp;</th>
                                </tr>
                            </thead>
                    		<tbody>
                                @foreach($content as $cart)
                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    <td class="cart__image-wrapper cart-flex-item">
                                        <a href="#"><img class="cart__image" src="{{URL::to('public/uploads/product/'.$cart->options->image)}}" alt="Elastic Waist Dress - Navy / Small"></a>
                                    </td>
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        <div class="list-view-item__title">
                                            <a href="#">{{$cart->name}} </a>
                                        </div>
                                    
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item">
                                        <span class="money">{{$cart->price.''.'$'}} </span>
                                    </td>
                                    <td class="cart__update-wrapper cart-flex-item text-right">
                                  
                                        <div class="cart__qty text-center">
                                    
                                            <div class="qtyField">
                                            <form action="{{URL::to('/update-quantity')}}" method ="POST">
                                @csrf 
                                                <input type="number" min="1" max="20" name="cart_quantity" value="{{$cart->qty}}" >
                                                <input class="cart__qty-input qty" type="hidden"  name="rowId_cart" value="{{$cart->rowId}}">
                                                <button type="submit" name="update" class="btn--link cart-update"><i class="fa fa-refresh"></i> Update</button> 
                                            </form>
                                            </div> 
                                             
                                            
                                        </div>
                                       
                                        
                                    </td>
                                    <td class="text-right small--hide cart-price">
                                        <div><span class="money">
                                            <?php
                                            $subtotal = $cart->price * $cart->qty;
                                            echo $subtotal.''.'$';
                                            ?>
                                        </span></div>
                                    </td>
                                    <td class="text-center small--hide"><a href="{{URL::to('/delete-cart/'.$cart->rowId)}}" class="btn btn--secondary cart__remove" title="Remove tem"><i class="icon icon anm anm-times-l"></i></a>
                                   
                                </td>
                                </tr>
                            @endforeach
                            </tbody>
                    		<tfoot>
                                <tr>
                                    <td colspan="3" class="text-left"><a href="{{URL::to('/shop')}}" class="btn--link cart-continue"><i class="icon icon-arrow-circle-left"></i> Continue shopping</a></td>
                                </tr>
                            </tfoot>
                    </table>
               
               	</div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                    <div class="solid-border">
                      <div class="row">
                      	<span class="col-12 col-sm-6 cart__subtotal-title"><strong>Subtotal</strong></span>
                        <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money">{{Cart::total(0).''.'$'}}</span></span>
                      </div>
                      <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                      <!-- <p class="cart_tearm">
                        <label>
                          <input type="checkbox" name="tearm" id="cartTearm" class="checkbox" value="tearm" required="">
                           I agree with the terms and conditions</label>
                      </p> -->
                      <!-- <a href="{{URL::to('/login-checkout')}}">
                      <input name="checkout" id="cartCheckout" class="btn btn--small-wide checkout" value="Checkout" disabled="disabled">
                        </a> -->
     

                    <?php
                    $customer_id = Session::get('customer_id');
                    if($customer_id!=null){
                    ?>
                         <li><a href="{{URL::to('/payment')}}">
                      <input name="checkout" id="cartCheckout" class="btn btn--small-wide checkout" value="Checkout" disabled="disabled">
                        </a></li>
                     <?php
                     }else{
                        ?>
                         <li><a href="{{URL::to('/login-checkout')}}">
                      <input name="checkout" id="cartCheckout" class="btn btn--small-wide checkout" value="Checkout" disabled="disabled">
                        </a></li>
                         <?php
                     }                    
                        ?>
                    </div>

                </div>
            </div>
        </div>
        
    </div>


@endsection