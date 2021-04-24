@extends('layouts.base')

@section('content')

	<section class="bg-two py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 my-auto">
                  <h1>Professional Website Maintenance</h1>
                  <p class="lead">
                  	Keep your website at its optimal performance. With our website maintenance packages, we will make sure that your website is always up to date with the latest plug-ins and antiviruses.
                  </p>
                  <a class="btn btn-primary btn-lg" href="tel:+27610717955" role="button">061 071 7955</a>
                  <a class="btn btn-outline-primary btn-lg" href="{{ route('contact-us') }}" role="button">Get Started</a>
                </div>
                <div class="col-sm-12 col-md-6 my-auto">
                  <img class="image" src="images/website-maintenance.webp" alt="Website Maintenance">
                </div>
            </div>
        </div>
    </section>


    <section class="py-3 bg-five">
		<div class="container">
			<div class="row text-center">
				<div class="col-xl-9 mx-auto">
					<h2>Web Maintenance Packages</h2>
				</div>
			</div>
			<div class="row">
				<ul id="lightSlider">
					<li>
						<div class="col-sm-12">
							<div class="package-plan-box">
								<div class="package-plan-box-top row text-center py-3">
									<div class="col-sm-12">
										<p>Hourly</p>
									</div>
									<div class="col-sm-12">
										<h3><strong>R750.00<small>/hr</small></strong></h3>
									</div>
								</div>

								<div class="package-plan-box-mid row mx-0">
									<a href="{{ route('contact-us') }}" class="col-sm-12 btn btn-primary py-3"><h4><strong>ORDER</strong></h4></a>
								</div>
								<div class="package-plan-box-bottom">
									<ul class="package-list">
										<li class="d-flex justify-content-between">Cost <span>750/hr</span></li>
										<li class="d-flex justify-content-between">Check errors on all of your pages <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">Review your web design  <span> can improve it</span><span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">Check graphics and images <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">WordPress Version Update <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">Review page for content accuracy <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">WordPress Plugin Updates <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">Analytics Report <span class="icon-tick"></span></li>
									</ul>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="col-sm-12">
							<div class="package-plan-box">
								<div class="package-plan-box-top row text-center py-3">
									<div class="col-sm-12">
										<p>Monthly</p>
									</div>
									<div class="col-sm-12">
										<h3><strong>R1300.00<small>/mon</small></strong></h3>
									</div>
								</div>

								<div class="package-plan-box-mid row mx-0">
									<a href="{{ route('contact-us') }}" class="col-sm-12 btn btn-primary py-3"><h4><strong>ORDER</strong></h4></a>
								</div>
								<div class="package-plan-box-bottom">
									<ul class="package-list">
										<li class="d-flex justify-content-between">Cost <span>1300/mon</span></li>
										<li class="d-flex justify-content-between">2 hours on retainer <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">Check errors on all of your pages <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">Review your web design  <span> can improve it</span><span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">Check graphics and images <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">WordPress Version Update <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">Review page for content accuracy <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">WordPress Plugin Updates <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">Analytics Report <span class="icon-tick"></span></li>
									</ul>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="col-sm-12">
							<div class="package-plan-box">
								<div class="package-plan-box-top row text-center py-3">
									<div class="col-sm-12">
										<p>Business</p>
									</div>
									<div class="col-sm-12">
										<h3><strong>R1900.00<small>/hr</small></strong></h3>
									</div>
								</div>

								<div class="package-plan-box-mid row mx-0">
									<a href="{{ route('contact-us') }}" class="col-sm-12 btn btn-primary py-3"><h4><strong>ORDER</strong></h4></a>
								</div>
								<div class="package-plan-box-bottom">
									<ul class="package-list">
										<li class="d-flex justify-content-between">Cost <span>1900/mon</span></li>
										<li class="d-flex justify-content-between">3 hours on retainer <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">Check errors on all of your pages <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">Review your web design  <span> can improve it</span><span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">Check graphics and images <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">WordPress Version Update <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">Review page for content accuracy <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">WordPress Plugin Updates <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">Analytics Report <span class="icon-tick"></span></li>
									</ul>
								</div>
							</div>
						</div>
					</li>

					<li>
						<div class="col-sm-12">
							<div class="package-plan-box">
								<div class="package-plan-box-top row text-center py-3">
									<div class="col-sm-12">
										<p>Premium</p>
									</div>
									<div class="col-sm-12">
										<h3><strong>R2450.00<small>/hr</small></strong></h3>
									</div>
								</div>

								<div class="package-plan-box-mid row mx-0">
									<a href="{{ route('contact-us') }}" class="col-sm-12 btn btn-primary py-3"><h4><strong>ORDER</strong></h4></a>
								</div>
								<div class="package-plan-box-bottom">
									<ul class="package-list">
										<li class="d-flex justify-content-between">Cost <span>2450/mon</span></li>
										<li class="d-flex justify-content-between">4 hours on retainer <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">Check errors on all of your pages <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">Review your web design  <span> can improve it</span><span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">Check graphics and images <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">WordPress Version Update <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">Review page for content accuracy <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">WordPress Plugin Updates <span class="icon-tick"></span></li>
										<li class="d-flex justify-content-between">Analytics Report <span class="icon-tick"></span></li>
									</ul>
								</div>
							</div>
						</div>
					</li>

					
				</ul>
			</div>
		</div>
	</section>


	<section class="py-3">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<h3><strong>What is Website Maintenance?</strong></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<p class="lead">
						Website maintenance is the process of checking a website for issues and errors. This process should be carried out on a regular basis to make sure that your website is always up to date and relevant.
					</p>
				</div>
				<div class="col-sm-12 col-md-6">
					<p class="lead">
						Website maintenance should be a priority if you want to run your business smoothly. With a well-maintained website, you keep a healthy traffic to your website and decrease the bounce rate.
					</p>
				</div>
			</div>
		</div>
	</section>

	@include('components.get-in-touch')

	<section class="py-3">
		<div class="container">
			<div class="row text-center">
				<div class="col-xl-9 mx-auto">
					<h3><strong>What is included in website maintenance?</strong></h3>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 col-md-4">
					<h3><strong>Website Test</strong></h3>
					<p>
						The first thing we do in website maintenance is to check each and every function of your website to see if it's working correctly.
					</p>
				</div>
				<div class="col-sm-12 col-md-4">
					<h3><strong>Broken link check</strong></h3>
					<p>
						Broken link checking is one of the most crucial things in website maintenance. Not only is it good for your users it's also good for SEO.
					</p>
				</div>
				<div class="col-sm-12 col-md-4">
					<h3><strong>Browser compatibility</strong></h3>
					<p>
						Website maintenance is no good if some users are not able to access your website. We make sure that every feature is displayed the way you want it in every browser.
					</p>
				</div>
				<div class="col-sm-12 col-md-4">
					<h3><strong>Testing Forms</strong></h3>
					<p>
						In our website maintenance process we test every form on your website to make sure that it is submitting the contents to your emails.
					</p>
				</div>
				<div class="col-sm-12 col-md-4">
					<h3><strong>Checking software updates.</strong></h3>
					<p>
						Website maintenance is not any good if your software and plugins are not kept up to date.
					</p>
				</div>
				<div class="col-sm-12 col-md-4">
					<h3><strong>Site Backup</strong></h3>
					<p>
						We will always keep a backup of your latest site after all what is website maintenance for if your website is not been backed up.
					</p>
				</div>
			</div>
		</div>
	</section>

	@include('components.newsletter')

	<section class="py-3">
		<div class="container">
			<div class="row text-center mb-5">
				<div class="col-xl-9 mx-auto">
					<h3><strong>Why should you have a website maintenance package?</strong></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-ms-12 col-md-6">
					<h3><strong>SEO</strong></h3>
					<p class="lead">
						Website maintenance is good for your SEO. If your website is kept up to date with the most relevant information search engines will reward it by ranking it higher in searches. 
					</p>
					<p class="lead">
						Regular website maintenance means broken links are removed on a regular basis which is a plus for SEO.
					</p>
				</div>
				<div class="col-ms-12 col-md-6">
					<h3><strong>Security</strong></h3>
					<p class="lead">
						This is one of the most important reasons why you should consider website maintenance. If your website is built on services like WordPress and Wix we will be on a constant lookout for security fixes and patches. A secure website is not only good for you but also for the users who browse your website.
					</p>
				</div>
				<div class="col-ms-12 col-md-6">
					<h3><strong>Brand image</strong></h3>
					<p class="lead">
						Nowadays people are checking for a business online first before they even decide to do any business with them.
					</p>
					<p class="lead">
						If you have an outdated website you probably are losing a lot of customers without you even knowing. This is why you should subscribe to one of our website maintenance packages to keep your corporate image looking good online.
					</p>
				</div>
				<div class="col-ms-12 col-md-6">
					<h3><strong>Useability</strong></h3>
					<p class="lead">
						With our website maintenance, we will make sure that your website is always kept as user friendly as possible. Studies have shown that if a potential client visits a website that is not user-friendly they will go and do business with a competitor. Our website maintenance will keep your website modern and user friendly.
					</p>
				</div>
			</div>
		</div>
	</section>

@endsection