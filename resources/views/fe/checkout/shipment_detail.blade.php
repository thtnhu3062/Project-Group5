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
        		<div class="wrapper"> <img src="{{ asset('/fe/images/checkout.png') }}" alt="" class="khungvien"></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 main-col offset-md-3">
                </div>
            </div>
          
            <div class="row billing-fields">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 sm-margin-30px-bottom">
                    <div class="create-ac-content bg-light-gray padding-20px-all">
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
                            <div class="order-button-payment">
                                    <button class="btn" value="Place order" type="submit">Submit</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    @endsection