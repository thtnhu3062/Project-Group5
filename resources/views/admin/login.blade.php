<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Fendi - Login</title>
   <!-- Favicon -->
   <link rel="shortcut icon" href="{{ asset('/images/favicon1.ico')}}" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="{{ asset('/css/typography.css')}}">
   <!-- Style CSS -->
   <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="{{ asset('/css/responsive.css')}}">
</head>

<body>
   <!-- loader Start -->

   <!-- loader END -->
   <!-- Sign in Start -->
   <section class="sign-in-page">
      <div class="container">
         <div class="row justify-content-center align-items-center height-self-center">
            <div class="col-lg-5 col-md-12 align-self-center form-padding">
               <div class="sign-user_card ">
                  <div class="sign-in-page-data">
                     <div class="sign-in-from w-100 m-auto">
                        <h3 class="mb-3 text-center">Sign in</h3>
                        <?php
                  $message = Session::get('message');
                  if ($message) {
                     echo '<span style="color:red;font-weight:bold" width ="100%">' . $message . '</span>';
                     Session::put('message', null);
                  }
                  ?>
                        <form class="mt-4" action="{{URL::to('/admin-dashboard')}}" method="post">
                           @csrf
                           <div class="form-group">
                              <input type="email" name = "admin_email" class="form-control mb-0" id="exampleInputEmail2" placeholder="Enter email" autocomplete="off" maxlength="100" required="">
                           </div>
                           <div class="form-group">
                              <input type="password" name ="admin_password" class="form-control mb-0" id="exampleInputPassword2" placeholder="Password" minlength="6" maxlength="18" required="">
                           </div>
                           <div class="sign-info">
                              <button type="submit" class="btn btn-primary">Sign in</button>
                           </div>
                        </form>
                     </div>
                  </div>

               </div>
            </div>
         </div>
         <!-- Sign in END -->
         <!-- color-customizer -->
      </div>
   </section>

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->

   <script src="{{ asset('/js/jquery.min.js')}}"></script>
   <script src="{{ asset('/js/popper.min.js')}}"></script>
   <script src="{{ asset('/js/bootstrap.min.js')}}"></script>
   <!-- Appear JavaScript -->
   <script src="{{ asset('/js/jquery.appear.js')}}"></script>
   <!-- Countdown JavaScript -->
   <script src="{{ asset('/js/countdown.min.js')}}"></script>
   <!-- Counterup JavaScript -->
   <script src="{{ asset('/js/waypoints.min.js')}}"></script>
   <script src="{{ asset('/js/jquery.counterup.min.js')}}"></script>
   <!-- Wow JavaScript -->
   <script src="{{ asset('/js/wow.min.js')}}"></script>
   <!-- Slick JavaScript -->
   <script src="{{ asset('/js/slick.min.js')}}"></script>
   <!-- Owl Carousel JavaScript -->
   <script src="{{ asset('/js/owl.carousel.min.js')}}"></script>
   <!-- Magnific Popup JavaScript -->
   <script src="{{ asset('/js/jquery.magnific-popup.min.js')}}"></script>
   <!-- Smooth Scrollbar JavaScript -->
   <script src="{{ asset('/js/smooth-scrollbar.js')}}"></script>
   <!-- Chart Custom JavaScript -->
   <script src="{{ asset('/js/chart-custom.js')}}"></script>
   <!-- Custom JavaScript -->
   <script src="{{ asset('/js/custom.js')}}"></script>
</body>

</html>