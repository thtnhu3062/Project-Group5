@extends('fe.layout.layout')

@section('contents')
<div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width" style="margin-top:5%;">FAQs</h1></div>
      		</div>
		</div>
        <div class="bredcrumbWrap">
            <div class="container breadcrumbs">
                <a href="{{ Route('home') }}" title="Back to the home page">Home</a><span aria-hidden="true">›</span><span>FAQs</span>
            </div>
        </div>
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<div id="accordionExample">
                        <h2 class="title h2">History Of Perfume</h2>
                        <div class="faq-body">
                            <h4 class="panel-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Who first invented perfume?</h4>
                            <div id="collapseOne" class="collapse panel-content" data-parent="#accordionExample">The first perfume maker on record was a woman chemist named Tapputi. Stories of the inventor of perfume have been found on a clay tablet from Mesopotamia, suggesting that perfume was invented by Tapputi sometime during the second millennium BC.</div>
                        </div>
                        <div class="faq-body">
                            <h4 class="panel-title" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How is perfume created?</h4>
                            <div id="collapseTwo" class="collapse panel-content">Many perfumes are made by extracting scented oil from natural ingredients. These ingredients can include various plants, fruits, woods and even animal secretions. Other resources like alcohol, coal, tars and petrochemicals can be used during the manufacturing process to create perfume oil.</div>
                        </div>
                        <div class="faq-body">
                            <h4 class="panel-title" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Why is perfume attractive?</h4>
                            <div class="panel-content collapse" id="collapseThree">“Perfume has two purposes: to mask the smell of the wearer's body odor and produce an aromatic or pleasant smell”. A pleasant smell makes women's faces seem more attractive, according to researchers. They claim that odors can alter how we see attractiveness and other people.</div>
                        </div>
                        <h2 class="title h2">Other Resources About Perfume</h2>
                        <div class="faq-body">
                            <h4 class="panel-title" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">What are the four types of perfume?</h4>
                            <div class="panel-content collapse" id="collapseFour">The four main types are warm, woody, oriental and fresh, with each effect brought out by different combinations of fragrances.</div>
                        </div>
                        <div class="faq-body">
                            <h4 class="panel-title" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">What are the 3 main notes of perfume?</h4>
                            <div class="panel-content collapse" id="collapseFive">These scents are split into three distinct elements: top notes, heart notes and base notes. Together, the top, heart and base notes work together to create a beautiful fragrance.</div>
                        </div>
                        <div class="faq-body">
                            <h4 class="panel-title" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Why do people love perfumes?</h4>
                            <div class="panel-content collapse" id="collapseSix">Perfume evokes feelings.Perfumes are much more than just a smell. They have the power to evoke feelings of love, energy, power, happiness, awe, sensuality and peace. One of the most common feelings is lust</div>
                        </div>
                    </div>
               	</div>
            </div>
        </div>
        
    </div>
@endsection