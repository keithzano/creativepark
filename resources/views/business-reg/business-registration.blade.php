@extends('layouts.base')

@section('content')

	<section class="bg-two py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 my-auto py-3">
                  <h1>Register your company today.</h1>
                  <p>
                  	Get your company registered today and start enjoying limited liability. <br>
                  	Register your company from the comfort of your house or office in just three easy steps.
                  </p>
                  <a class="btn btn-primary btn-lg" href="tel:+27610717955" role="button">061 071 7955</a>
                  <a class="btn btn-outline-primary btn-lg" href="{{ route('company.register') }}" role="button">Get Started</a>
                </div>
                <div class="col-sm-12 col-md-6 my-auto py-3">
                  <img class="image" src="images/company-registration.webp" alt="Company registration South africa" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <section class="py-3">
    	<div class="container">
    		<div class="row text-center pb-3">
				<div class="col-xl-9 mx-auto">
					<h2>Why register your company?</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<h3><strong>Attract bigger companies</strong></h3>
					<p>
						Most big companies prefer working with registered companies. So by registering your company, you are giving yourself a chance to be able to work with big companies.
					</p>
				</div>
				<div class="col-sm-12 col-md-6">
					<h3><strong>Limited liability</strong></h3>
					<p>
						If you register your company you will have limited liability. That means you won't the personally liable for your companies debt, and your personal property won't be at risk if you are unable to settle your companies debt.
					</p>
				</div>
				<div class="col-sm-12 col-md-6">
					<h3><strong>Reputation with customers</strong></h3>
					<p>
						Having a registered company gives your customers and clients, especially those you have never worked with, insurance that you are not just a fly-by-night operation. Customers will be comfortable spending their money with you when they know you are an established company.
					</p>
				</div>
				<div class="col-sm-12 col-md-6">
					<h3><strong>Business Loans</strong></h3>
					<p>
						For you to be able to get a business loan you need to prove that you are an established company. If you also want a credit card for your business creditors with want to see your company papers.
					</p>
				</div>
			</div>
    	</div>
    </section>

    @include('components.get-in-touch')

    <section class="py-3">
    	<div class="container">
    		<div class="row text-center pb-3">
    			<div class="col-xl-9 mx-auto">
    				<h2>Company registration process</h2>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-sm 12-col-md-4">
    				<h3><strong>1.Apply Online</strong></h3>
    				<p>
    					The first step in your company registration is to complete and fill our online form.
    				</p>
    			</div>
    			<div class="col-sm 12-col-md-4">
    				<h3><strong>2.Payment & name search</strong></h3>
    				<p>
    					You need to make a payment after which we will start the name search for your company.
    				</p>
    			</div>
    			<div class="col-sm 12-col-md-4">
    				<h3><strong>3.Submit your documents</strong></h3>
    				<p>
    					We will send you a link to upload your certified copy of your id, and that's it. Your company will be registered.
    				</p>
    			</div>
    		</div>
    	</div>
    </section>

    @include('components.newsletter')


    <section class="py-3">
    	<div class="container">
    		<div class="row text-center pb-3">
    			<div class="col-xl-9 mx-auto">
    				<h2>FAQ's</h2>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-sm 12 col-md-6">
    				<h3><strong>What documents are needed for company registration?</strong></h3>
    				<p>
    					We will need certified copies of IDs or passports for all the directors. Note the certified copies must not be older than 3 months.
    				</p>
    			</div>
    			<div class="col-sm 12 col-md-6">
    				<h3><strong>Can I register a company in South Africa as a foreigner?</strong></h3>
    				<p>
    					Yes, a foreigner can register a company in South Africa. After you have submitted your online application form we will send you a list of the requirements needed.
    				</p>
    			</div>
    			<div class="col-sm 12 col-md-6">
    				<h3><strong>Is there any other cost for my company registration?</strong></h3>
    				<p>
    					No, we do not charge any additional fees for company registrations.
    				</p>
    			</div>
    			<div class="col-sm 12 col-md-6">
    				<h3><strong>How long will the company registration process take?</strong></h3>
    				<p>
    					It all depends on the workload at the CIPC but usually, the process doesn't take more than a week.
    				</p>
    			</div>
    		</div>
    	</div>
    </section>

@endsection