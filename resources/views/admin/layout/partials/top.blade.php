<!-- TOP Nav Bar -->

<div class="iq-top-navbar">
   <div class="iq-navbar-custom">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
         <div class="iq-menu-bt d-flex align-items-center">
            <div class="wrapper-menu">
               <div class="main-circle"><i class="las la-bars"></i></div>
            </div>
            <div class="iq-navbar-logo d-flex justify-content-between">
               <a href="#" class="header-logo">
                  <img src="{{ asset('/images/logo.png') }}" class="img-fluid rounded-normal" alt="">
                  <div class="logo-title">
                     <span class="text-primary text-uppercase">Fendi</span>
                  </div>
               </a>
            </div>
         </div>

         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
            <i class="ri-menu-3-line"></i>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-list">
               <li class="nav-item nav-icon search-content">
                  <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                     <i class="ri-search-line"></i>
                  </a>
                  <form action="#" class="search-box p-0">
                     <input type="text" class="text search-input" placeholder="Type here to search...">
                     <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                  </form>
               </li>

               <li class="line-height pt-3">
                  <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                     <img src="{{ asset('/images/user/admin1.png') }}" class="img-fluid rounded-circle mr-3" alt="user">
                  </a>
                  <div class="iq-sub-dropdown iq-user-dropdown">
                     <div class="iq-card shadow-none m-0">
                        <div class="iq-card-body p-0 ">
                           <div class="bg-primary p-3">
                              <?php
                              $name = Session::get('admin_name');
                              if ($name) {
                                 echo $name;
                              }
                              ?>
                              <h5 class="mb-0 text-white line-height">Pham Ngoc Hai</h5>
                           </div>
                           <a href="{{ Route('profile') }}" class="iq-sub-card iq-bg-primary-hover">
                              <div class="media align-items-center">
                                 <div class="rounded iq-card-icon iq-bg-primary">

                  <div class="iq-navbar-logo d-flex justify-content-between">
                     <a href="#" class="header-logo">
                        <img src="{{ asset('/images/logo.png') }}" class="img-fluid rounded-normal" alt="">
                        <div class="logo-title">
                           <span class="text-primary text-uppercase">Fendi</span>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="iq-search-bar ml-auto">
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto navbar-list">
                     <li class="nav-item nav-icon search-content">
                        <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                           <i class="ri-search-line"></i>
                        </a>
                        <form action="#" class="search-box p-0">
                           <input type="text" class="text search-input" placeholder="Type here to search...">
                           <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        </form>
                     </li>
                     
                     <li class="line-height pt-3">
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <img src="{{ asset('/images/user/admin1.png') }}" class="img-fluid rounded-circle mr-3" alt="user">
                           <span>  <h5 class="mb-0 text-white line-height">                  
                                         <?php
                                          $name = Session::get('admin_name');
                                          if ($name) {
                                             echo $name;
                                          }
                                          ?></h5></span>
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                  

                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">My Profile</h6>
                                 </div>
                              </div>
                           </a>
                           <a href="{{ Route('editprofile') }}" class="iq-sub-card iq-bg-primary-hover">
                              <div class="media align-items-center">
                                 <div class="rounded iq-card-icon iq-bg-primary">
                                    <i class="ri-profile-line"></i>
                                 </div>
                                 <div class="media-body ml-3">
                                    <h6 class="mb-0 ">Edit Profile</h6>
                                 </div>
                              </div>
                           </a>


                           <div class="d-inline-block w-100 text-center p-3">
                              <a class="bg-primary iq-sign-btn" href="{{ URL::to('/logout') }}" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </nav>
   </div>
</div>
<!-- TOP Nav Bar END -->