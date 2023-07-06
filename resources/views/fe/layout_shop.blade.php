@extends('fe.layout.layout')
@section('contents') 
<div id="page-content">
    	<!--Collection Banner-->
    	<div class="collection-header">
			<div class="collection-hero">
        		<div class="collection-hero__image"><img class="blur-up lazyload" data-src="{{asset('/fe/images/cat-women.jpg')}}" src="{{asset('/fe/images/cat-women.jpg')}}" alt="Women" title="Women" /></div>
      		</div>
		</div>
        
        <!--End Collection Banner-->
        <hr>
        
        <div class="container">
            
        	<div class="row">
            	<!--Sidebar-->
            	<div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                    
                	<div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                    <div class="custom-search">
                        <form action="{{URL::to('/search')}}" method="post" class="input-group search-header search" role="search" style="position: relative;">
                            @csrf
                        <input class="search-header__input search__input input-group__field" type="search" name="keywords_submit" placeholder="Search" aria-label="Search" autocomplete="off">
                            <span class="input-group__btn"><button class="btnSearch" type="submit"> <i class="icon anm anm-search-l"></i> </button></span>
                        </form>
                    </div>
                    <div class="sidebar_tags">
                    	<!--Categories-->
                    	<div class="sidebar_widget categories filter-widget">
                            <div class="widget-title"><h2>Categories</h2></div>
                            @foreach($category as $key => $cate)
                            <div class="widget-content">
                                <ul class="sidebar_categories">
                                    <li class="lvl-1"><a href="{{URL::to('/category/'.$cate->category_id)}}" class="site-nav">{{$cate->category_name}}</a></li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                        <!--Categories-->
                        <!--Price Filter-->

                        <!--End Price Filter-->

                        <!--End Size Swatches-->
                        <!--Color Swatches-->

                        <!--End Color Swatches-->
                        <!--Brand-->
                        <div class="sidebar_widget filterBox filter-widget">
                            <div class="widget-title"><h2>Brands</h2></div>
                            @foreach($brand as $key => $brand)
                            <ul>
                                <li>
                                <li class="lvl-1"><a href="{{URL::to('/brand/'.$brand->brand_id)}}" class="site-nav">{{$brand->brand_name}}</a></li>
                            </ul>
                            @endforeach
                        </div>
                        <!--End Brand-->
                        <!--Popular Products-->
					
                        <!--End Popular Products-->
                        <!--Banner-->
                        <!--Banner-->
                        <!--Information-->

                        <!--end Information-->
                        <!--Product Tags-->

                        <!--end Product Tags-->
                    </div>
                    
                </div>
                
                <!--End Sidebar-->
                <!--Main Content-->
                @yield('product')
            </div>
          
</div>     
               
            

    @endsection
        