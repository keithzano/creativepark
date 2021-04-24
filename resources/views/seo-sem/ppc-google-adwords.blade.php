@extends('layouts.base')

@section('content')

	<section class="bg-two py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 my-auto">
                  <h1>Reach the right customers at the right time with PPC</h1>
                  <p>
                  	With our fine-tuned pay-per-click advertising you can reach customers you never thought you could reach before. Invest in PPC and see the results instantly
                  </p>
                  <a class="btn btn-primary btn-lg" href="tel:+27610717955" role="button">061 071 7955</a>
                  <a class="btn btn-outline-primary btn-lg" href="{{ route('contact-us') }}" role="button">Get Started</a>
                </div>
                <div class="col-sm-12 col-md-6 my-auto">
                  <img class="image" src="images/pay-per-click.webp" alt="Pay Per Click (PPC)">
                </div>
            </div>
        </div>
    </section>

   

	@include('components.get-in-touch')

	<section class="py-3">
		<div class="container">
			<div class="row text-center">
				<div class="col-xl-9 mx-auto">
					<h2>Pay Per Click Advertising (PPC)</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 col-md-4">
					<h3><strong>What is PPC?</strong></h3>
					<p>
						Pay-Per-Click is a way of advertising online in which you pay a certain fee when your advert is clicked. You are essentially buying traffic to your website.
					</p>
				</div>
				<div class="col-sm-12 col-md-4">
					<h3><strong>Why should you care about PPC?</strong></h3>
					<p>
						Pay-Per-Click allows you to target a specific audience. You have the option to choose the region, gender, and age of the people you advertise to.
					</p>
				</div>
				<div class="col-sm-12 col-md-4">
					<h3><strong>Advantages of PPC</strong></h3>
					<p>
						You will be able to see the results instantly. The moment you turn on your ad campaign you will start seeing results instantly.
					</p>
				</div>
				
			</div>
		</div>
	</section>

	@include('components.newsletter')

@endsection