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
        		<div class="wrapper"><h1 class="page-width">Reset Password</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                    @if(session()->has('message'))
                    <div >
                        <h1> <span style="color:Green;font-weight:bold" width ="100%">{!!session()->get('message')!!}</span></h1>
                    </div>
                    @elseif(session()->has('erro'))
                    <div>
                        <h1><span style="color:red;font-weight:bold" width ="100%">{!!session()->get('erro')!!}</span></h1>   
                    </div>
                    @endif
                	<div class="mb-4">
                       <form method="post" action="{{URL::to('/recover_password')}}"  accept-charset="UTF-8" class="contact-form">	
                       @csrf
                       <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input type="email" name="email_account" placeholder="Enter your Email"  class="" autocorrect="off" autocapitalize="off" autofocus="" required="">
                                </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" class="btn mb-3" value="Send password reset link">
                                <p class="mb-4">

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