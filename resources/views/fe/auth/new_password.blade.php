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
                    <div>
                        {!!session()->get('message')!!}
                    </div>
                    @elseif(session()->has('erro'))
                    <div>
                        {!!session()->get('erro')!!}
                    </div>
                    @endif
                	<div class="mb-4">
                       <form method="post" action="{{URL::to('/reset-pass')}}"  accept-charset="UTF-8" class="contact-form">	
                       @csrf
                       <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    @php
                                    $token = $_GET['token'];
                                    $email = $_GET['email'];
                                    @endphp
                                    <label for="CustomerEmail">Enter New Password</label>
                                    <input type="hidden" name ="email" value="{{$email}}">
                                    <input type="hidden" name ="token" value="{{$token}}">
                                    <input type="password" name="password_account" placeholder="" id="1stPassword1" class="" autocorrect="off" autocapitalize="off" autofocus="" required="">
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerPassword">Confirm Password</label>
                                    <input type="password"   value="" name="" placeholder="" id="ConfirmPassword1" class="" required minlength="6" maxlength="18">                        	
                                </div>
                            </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" class="btn mb-3" value="Submit" onclick="return Validate1()">
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
    <script type="text/javascript">
        function Validate1() {
            var password = document.getElementById("1stPassword1").value;
            var confirmPassword = document.getElementById("ConfirmPassword1").value;
            if (password != confirmPassword) {
                alert("You first Passwords is not similar with 2nd password. Please enter same password in both");
                return false;
            }
            return true;
        }
    </script>
    @endsection