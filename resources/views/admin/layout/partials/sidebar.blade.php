<!-- Sidebar-->
<div class="iq-sidebar">
   <div class="iq-sidebar-logo d-flex justify-content-between">
      <a href="index.html" class="header-logo">
         <img src="{{ asset('/images/logo.png') }}" class="img-fluid rounded-normal" alt="">
         <div class="logo-title">
            <span class="text-primary text-uppercase">endi</span>
         </div>
      </a>
      <div class="iq-menu-bt-sidebar">
         <div class="iq-menu-bt align-self-center">
            <div class="wrapper-menu">
               <div class="main-circle"><i class="las la-bars"></i></div>
            </div>
         </div>
      </div>
   </div>
   <div id="sidebar-scrollbar">
      <nav class="iq-sidebar-menu">
         <ul id="iq-sidebar-toggle" class="iq-menu">
            <li class="active active-menu"><a href="index.html" class="iq-waves-effect"><i class="las la-home iq-arrow-left"></i><span>Dashboard</span></a></li>
            <li><a href="user.html" class="iq-waves-effect"><i class="las la-user-friends"></i><span>User</span></a></li>


            <li>
               <a href="#pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-file-alt iq-arrow-left"></i><span>Product</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               <ul id="pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                  <li>
                     <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pages-line"></i><span>Product List</span></a>
                  </li>
                  <li>
                     <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-pantone-line"></i><span>Extra Pages</span></a>
                  </li>
               </ul>
            </li>
         </ul>
      </nav>
   </div>
</div>