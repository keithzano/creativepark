@extends('layouts.base')

@section('content')
	<section class="bg-two py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 my-auto py-3">
                  <h1>SEO that will get you more organic traffic to your website</h1>
                  <p>
                  	With our search engine optimization (SEO) packages we will make sure that your website appears on the top of Google results for searches relating to your industry.
                  </p>
                  <a class="btn btn-primary btn-lg" href="tel:+27610717955" role="button">061 071 7955</a>
                  <a class="btn btn-outline-primary btn-lg" href="{{ route('contact-us') }}" role="button">Get Started</a>
                </div>
                <div class="col-sm-12 col-md-6 my-auto py-3">
                  <img class="image" src="images/search-engine-optimization-(SEO).webp" alt="search engine optimization (SEO)" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 bg-one">
    	<div class="container">	
    		<div class="row">
    			<div class="col-xl-9 mx-auto text-center">
    				<h3 class="mx-auto"><strong>Search engine optimization (SEO) that will grow your business</strong></h3>
    				<p class="lead">
    					If you are looking to grow your business and reach more customers SEO is the way to go. If done correctly SEO will substantially increase traffic to your website hence increase your revenue without the need of you spending money on paid advertising.
    				</p>
    			</div>
    		</div>
    	</div>	
    </section>

    <section class="py-3 bg-two">
      <div class="container">
        <div class="row py-3 invert">
          <div class="col-sm-12 col-md-6 my-auto py-3">
            <h2>What is Search Engine Optimization (SEO)?</h2>
            <p>
              Search engine optimization (SEO) is the process of optimizing a website page and the content on it so that it has higher chances of appearing on the top results of searches relating to your website.
            </p>
           
            <a class="btn btn-primary btn-lg" href="tel:+27610717955" role="button">061 071 7955</a>
            <a class="btn btn-outline-primary btn-lg" href="mailto:info@keithzano.com" role="button">Email Us</a>
          </div>
          <div class="col-sm-12 col-md-6 my-auto py-3">
            <img class="image" src="images/social-marketing.webp" alt="search engine optimization SEO" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <section class="py-3 bg-one">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<h3><strong>Why should you care about Search engine optimization (SEO)?</strong></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<p>
						Most people search for a product or service first before they decide on making a purchase. If your website appears on the top results of searches made by your potential customers that means you have increased chances of making that searcher your customer.
					</p>
				</div>
				<div class="col-sm-12 col-md-6">
					<p>
						They are many searches made on the internet relating to your services and product, and search engine optimization (SEO) will help turn that searcher into your customer.
					</p>
				</div>
				<div class="col-sm-12 col-md-6 mb-3">
					<a class="btn btn-primary btn-lg" href="tel:+27610717955" role="button">061 071 7955</a>
                  	<a class="btn btn-outline-primary btn-lg" href="mailto:info@keithzano.com" role="button">Email Us</a>
				</div>
			</div>
		</div>
	</section>

		@include('components.get-in-touch')

	<section class="py-3 bg-one">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<h3><strong>SEO keyword research.</strong></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<p>
						<br>	
						The first thing you need to do in Search engine optimization (SEO) is to determine what you are actually optimizing the web page for. Therefore you need to carry out keyword research to understand terms that people are searching for on the internet that you want your website to rank for.
					</p>
				</div>
				<div class="col-sm-12 col-md-6">
					<ul>
						<li>
							<h5><strong>Search volume</strong></h5>
							<p>
								The first thing you need to consider is the search volume to the particular term you want to optimize for. The more people who are searching for that term, the greater the audience you can potentially reach. You don't want to target a term that no one is searching for because you will get no traffic to your website.
							</p>
						</li>
					</ul>
				</div>
				<div class="col-sm-12 col-md-6">
					<ul class="ps-0">
						<li>
							<h5><strong>Relavance</strong></h5>
							<p>
								You do not want to target a keyword just for the fact that is more searched for. You need to, first establish the relevance of the keyword you want to target to your product and services.
							</p>
						</li>
					</ul>
				</div>
				<div class="col-sm-12 col-md-6">
					<ul>
						<li>
							<h5><strong>Competition</strong></h5>
							<p>
								A keyword with a high search volume may have stiff competition as more websites are trying to rank for it. You need to first assess your competition before dive in and optimize your web page for a particular keyword.
							</p>
						</li>
					</ul>
				</div>
				<div class="col-sm-12 col-md-6 mb-3">
					<a class="btn btn-primary btn-lg" href="tel:+27610717955" role="button">061 071 7955</a>
                  	<a class="btn btn-outline-primary btn-lg" href="{{ route('contact-us') }}" role="button">Get Started</a>
				</div>
			</div>
		</div>
	</section>
	@include('components.newsletter')
@endsection