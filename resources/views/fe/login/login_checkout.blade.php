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
        		<div class="wrapper"><h1 class="page-width">Login</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        <div class="container">
        	<div class="row">
            @if(session()->has('message'))
                    <div >
                        <h1> <span style="color:Green;font-weight:bold" width ="100%">{!!session()->get('message')!!}</span></h1>
                    </div>
                    @elseif(session()->has('erro'))
                    <div>
                        <h1><span style="color:red;font-weight:bold" width ="100%">{!!session()->get('erro')!!}</span></h1>   
                    </div>
                    @endif
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                	<div class="mb-4">
                       <form method="post" action="{{URL::to('/login-customer')}}"  accept-charset="UTF-8" class="contact-form">	
                       @csrf
                       <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerEmail">Email</label>
                                    <input type="email" name="email_account" placeholder="" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" maxlength="100" autofocus="" required="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerPassword">Password</label>
                                    <input type="password" value="" name="password_account" placeholder="" class="" required minlength="6" maxlength="18" required="">                        	
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" class="btn mb-3" value="Sign In">
                                <p class="mb-4">
									<a href="{{URL::to('/forget-password')}}">Forgot your password?</a> &nbsp; | &nbsp;
								    <a href="{{URL::to('/register')}}" id="customer_register_link">Create account</a>
                                </p>
                            </div>
                         </div>
                     </form>
                    </div>
               	</div>
            </div>
        </div>
    </div>
    @endsection