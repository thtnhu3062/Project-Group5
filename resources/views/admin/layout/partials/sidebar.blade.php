<!-- Sidebar-->
<div class="iq-sidebar">
         <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="index.html" class="header-logo">
               <img src="{{ asset('/images/logo.png') }}" class="img-fluid rounded-normal" alt="">
               <div class="logo-title">
                  <span class="text-primary text-uppercase">Fendi</span>
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
                  <li class="active active-menu"><a href="{{URL::to('/dashboard')}}" class="iq-waves-effect"><i class="las la-home iq-arrow-left"></i><span>Dashboard</span></a></li>
                
                  
                  <li>
                     <a href="#ui-elements3" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="lab la-elementor iq-arrow-left"></i><span>Category</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="ui-elements3" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="elements">
                           <a href="{{URL::to('/add-category-product')}}"><i class="lab la-wpforms"></i>Add Category</a>
                        </li>
                        <li class="form">
                           <a href="{{URL::to('/all-category-product')}}" ><i class="lab la-wpforms"></i>Category List</a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="#pages1" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-file-alt iq-arrow-left"></i><span>Brand</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="pages1" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li>
                           <a href="{{URL::to('/add-brand-product')}}" ><i class="ri-pages-line"></i><span>Add Brand</span></a>
                     
                        </li>
                        <li>
                           <a href="{{URL::to('/all-brand-product')}}"><i class="ri-pantone-line"></i><span>Brand List</span></a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="#pages2" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-file-alt iq-arrow-left"></i><span>Product</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul id="pages2" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li>
                           <a href="{{URL::to('/add-product')}}" ><i class="ri-pages-line"></i><span>Add Product</span></a>
                     
                        </li>
                        <li>
                           <a href="{{URL::to('/all-product')}}" ><i class="ri-pantone-line"></i><span>Product List</span></a>
                        </li>
                     </ul>
                  </li>
                  <li>
                           <a href="{{URL::to('/view-cus')}}"><i class="ri-pantone-line"></i><span>Customer List</span></a>
                  </li>
                  <li>
                     <a href="{{URL::to('/manager-order')}}"><i class="ri-pages-line"></i><span>Manager Order</span></a>
                     
                  </li>
               
               </ul>

            </nav>
         </div>
      </div>