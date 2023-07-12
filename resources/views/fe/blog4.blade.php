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
                             <a class="article_featured-image" href="#"><img class="blur-up lazyload" data-src="{{ asset ('/fe/images/blog/blogg4.jpg') }}" src="{{ asset ('/fe/images/blog/blogg4.jpg') }}" alt="It's all about how you wear"></a> 
                            <h1>Accusantium doloremque</h1>
                            <ul class="publish-detail">                      
                                <li><i class="anm anm-user-al" aria-hidden="true"></i>  Melanie</li>
                                <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 06, 2023</time></li>
                            </ul>
                            <div class="rte"> 
                                <p>Most importantly, they know that this fragrant memory bank is not locked away in an airtight safe – it’s something we live and breathe, and therefore can all add to, every day of our lives. So that ‘…these scents will become the basis of future memories, too.</p>
                                <p> Sometimes it takes a lifetime to learn what seems this most simple of things – understanding and tapping in to our deepest selves – but although Holly Hutchinson founded Memoize in 2016, her fragrant memory lessons began far further back</p>
                                <h3>Memoize just get it – the scented significance</h3>
                                <ul class="list-items">
                                <li>the importance of creating a perfectly harmonious balance between fragrances and how they make people fee</li>
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
                                            <a class="grid-view-item__link" href="{{ Route('blog1') }}" >
                                                <img class="grid-view-item__image blur-up lazyload" data-src="{{ asset ('/fe/images/blog/blog2.jpg') }}" src="{{ asset ('/fe/images/blog/blog2.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                        <div class="details"> <a class="grid-view-item__title" href="{{ Route('blog1') }}" >It's all about how you wear</a>
                                          <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:33:00Z">May 02, 2023</time></span></div>
                                        </div>
                                      </div>
                                    </div>
                                  
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="{{ Route('blog3') }}"><img class="grid-view-item__image blur-up lazyload" data-src="{{ asset ('/fe/images/blog/blog4.jpg') }}" src="{{ asset ('/fe/images/blog/blog4.jpg') }}" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" href="{{ Route('blog3') }}">How to Wear The Folds Trend Four Ways</a>
                                          <div class="grid-view-item__meta"><span class="article__date"> <time datetime="2017-05-02T14:14:00Z">May 02, 2023</time> </span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link"href="{{ Route('blog') }}"><img class="grid-view-item__image blur-up lazyload" data-src="{{ asset ('/fe/images/blog/ws.jpg') }}" src="{{ asset ('/fe/images/blog/ws.jpg') }}" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" href="{{ Route('blog') }}">Fragrance oil harmony between style</a>
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