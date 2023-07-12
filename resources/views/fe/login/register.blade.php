@extends('fe.layout.layout')
@section('contents')  
	<!--Collection Banner-->
    <div class="collection-header">
			<div class="collection-hero">
        		<div class="collection-hero__image"><img class="blur-up lazyload" data-src="{{asset('/fe/images/cat-women.jpg')}}" src="{{asset('/fe/images/cat-women.jpg')}}"alt="Women" title="Women" /></div>
      		</div>
		</div>
        <!--End Collection Banner-->
        
            <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Create an Account</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                	<div class="mb-4">
                       <form method="post" action="{{URL::to('/add-customer')}}" id="CustomerLoginForm" accept-charset="UTF-8" class="contact-form">	
                          @csrf
                           <div class="row">
	                          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="FirstName">Name</label>
                                    <input type="text" name="customer_name" placeholder="" id="FirstName" autofocus="" required="">
                                </div>
                               </div>
                         
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerEmail">Email</label>
                                    <input type="email" name="customer_email" placeholder="" id="CustomerEmail" class="" autocorrect="off" autocapitalize="off" autofocus="" required="">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="LastName">Phone</label>
                                    <input type="tel" pattern="[0]{1}[0-9]{9}" name="customer_phone" placeholder="" id="LastName" required="">
                                </div>
                               </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerPassword">Password</label>
                                    <input type="password" value="" name="password" placeholder="" id="1stPassword" class="" required minlength="6" maxlength="18">                        	
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="CustomerPassword">Confirm Password</label>
                                    <input type="password"   value="" name="" placeholder="" id="ConfirmPassword" class="" required minlength="6" maxlength="18">                        	
                                </div>
                            </div>
                            <span id='message'></span>
                          </div>
                          <div class="row">
                            <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="submit" id="btnSubmit" class="btn mb-3" onclick="return Validate()" value="Create">
                            </div>
                         </div>
                     </form>
                    </div>
               	</div>
            </div>
        </div>
        
    </div>
 <script type="text/javascript">
        function Validate() {
            var password = document.getElementById("1stPassword").value;
            var confirmPassword = document.getElementById("ConfirmPassword").value;
            if (password != confirmPassword) {
                alert("You first Passwords is not similar with 2nd password. Please enter same password in both");
                return false;
            }
            return true;
        }
    </script>
    <!--End Body Content-->
@endsection