@extends('fe.layout.layout')

@section('contents')
<div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center mb-0">
			<div class="page-title">
        <div>
          
        </div>
        		<div class="wrapper" ><h1 class="page-width" style="margin-top:5%;">Blog Perfume</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
	    <div class="bredcrumbWrap">
            <div class="container breadcrumbs">
                <a href="{{ Route('home') }}" title="Back to the home page">Home</a><span>></span><span>Blog Perfume</span>
            </div>
        </div>
        <div class="container">
        	<div class="row">
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                    <div class="blog--list-view">
                    	<div class="article"> 
                            <!-- Article Image --> 
                             <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="{{ asset ('/fe/images/blog/blog1.jpg') }}" src="{{ asset ('/fe/images/blog/blog1.jpg') }}" alt="It's all about how you wear"></a> 
                            <h1>Wedding Anniversary Scents</h1>
                            <ul class="publish-detail">                      
                                <li><i class="anm anm-user-al" aria-hidden="true"></i>  Melanie</li>
                                <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 06, 2023</time></li>
                            </ul>
                            <div class="rte"> 
                              <p>Following on from our feature on the first five wedding anniversary scents, based on the symbols traditionally used to mark their occasion, this week we are continuing the theme with a look at years six through to ten, each rendered in fragrant form.</p>
                              <p>Now, these scent suggestions aren’t merely for those celebrating to give each other as gifts (though of course that’s a lovely idea!) but as jumping-off points for some new perfumes everyone should explore. Which symbol and year takes your fancy in these fragrances…?</p>
                                <h3>Scent Suggestion – Electimuss Mercurial Cashmere</h3>
                                <ul class="list-items">
                                	<li>A fragrance to ride with us amidst a marriage’s moods, maybe? ‘The most popular of the gods, Mercury was adored for his irresistible charm and wit and the inspiration for this sensuous and seductive scent.’</li>
                                    <li> With an alluring character, the cloud of cardamom-flecked iris swirls to the buttered warmth of tonka and amber touched by cashmere’s creamy caress. </li>
                                    <li> Especially good at granting you backbone and strength, we say: wear this fluffy, irresistible scent and feel better for every possible perfumed mood-swing!</li>
                                </ul>
                                <h3>Salt Scent Suggestion – BDK Sel d’Argent</h3>
                                <p>Cast away thoughts of old-fashioned 90s beach scents and allow your dreams to drift to this blissful, contemporary evocation instead. </p>
                            </div>
                            <hr/>
                            <div class="social-sharing">
                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                    <i class="fa fa-facebook-square" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Share</span>
                                </a>
                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                    <i class="fa fa-twitter" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Tweet</span>
                                </a>
                                <a href="#" title="Share on google+" class="btn btn--small btn--secondary btn--share" >
                                    <i class="fa fa-google-plus" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Google+</span>
                                </a>
                                <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                    <i class="fa fa-pinterest" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Pin it</span>
                                </a>
                                <a href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Share by Email" target="_blank">
                                    <i class="fa fa-envelope" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Email</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Main Content-->
                <!--Sidebar-->
            	<div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar">
                	<div class="sidebar_tags">
                    	<div class="sidebar_widget categories">
                            <div class="widget-title"><h2>Category</h2></div>
                            <div class="widget-content">
                                <ul class="sidebar_categories">
                                	  <li class="lvl-1">Beauty</li>
                                    <li class="lvl-1 active">Fashion</li>
                                    <li class="lvl-1 ">Summer</li>
                                    <li class="lvl-1 ">Trend</li>
                                    <li class="lvl-1 ">Winter</li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar_widget">
                        	<div class="widget-title"><h2>Recent Posts</h2></div>
							          <div class="widget-content">
                                <div class="list list-sidebar-products">
                                  <div class="grid">
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image">
                                            <a class="grid-view-item__link" href="#">
                                                <img class="grid-view-item__image blur-up lazyload" data-src="{{ asset ('/fe/images/blog/blog2.jpg') }}" src="{{ asset ('/fe/images/blog/blog2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="details"> <a class="grid-view-item__title" >It's all about how you wear</a>
                                          <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:33:00Z">May 02, 2023</time></span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="{{ asset ('/fe/images/blog/blog3.jpg') }}" src="{{ asset ('/fe/images/blog/blog3.jpg') }}" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" >27 Days of Spring Fashion Recap</a>
                                          <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:33:00Z">May 02, 2023</time> </span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="{{ asset ('/fe/images/blog/blog4.jpg') }}" src="{{ asset ('/fe/images/blog/blog4.jpg') }}" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title">How to Wear The Folds Trend Four Ways</a>
                                          <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:14:00Z">May 02, 2023</time> </span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" data-src="{{ asset ('/fe/images/blog/blog5.jpg') }}" src="{{ asset ('/fe/images/blog/blog5.jpg') }}" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title">Accusantium doloremque</a>
                                          <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:12:00Z">May 02, 2023</time> </span></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          	</div>
						                </div>
                        <div class="sidebar_widget static-banner">
                        	<img src="{{ asset ('/fe/images/blog/blog6.jpg') }}" alt="">
                        </div>
						            
						</div>
                    </div>
                </div>
                <!--End Sidebar-->
            </div>
        </div>
        
    </div>

    @endsection