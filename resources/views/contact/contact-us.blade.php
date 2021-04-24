@extends('layouts.base')

@section('content')


	<section class="py-3 bg-two">
     <div class="container">
       <div class="row text-center">
              <div class="col-xl-9 mx-auto">
                     <h2>We'd love to hear from you</h2>
                     <p class="lead">
                            Whether you have a question about website design, website hosting, SEO, or anything else our team is ready and waiting to answer all your questions. 
                     </p>
              </div>
       </div>
       <div class="row invert">
              <div class="col-sm-12 col-md-6 my-auto">
                 <img class="image" src="images/contact-us-email.svg" alt="website design">
              </div>
       	<div class="col-sm-12 col-md-6 my-auto">



          <!-- Error messages -->
          @if(Session::has('erros'))
            <div role="alert" class="alert alert-danger">
              {{Session::get('errors')}}
            </div>
          @endif
           <!-- Success message -->
          @if(Session::has('success'))
              <div class="alert alert-success">
                  {{Session::get('success')}}
              </div>
          @endif
          
       		<form method="post" action="{{ route('contact-us') }}">
       			@csrf
       			<div class="row mb-3">
       				<label class="col-sm-3 col-form-label"><strong>First name</strong></label>
       				<div class="col-sm-9">
       					<input type="text" name="first_name" class="form-control" placeholder="Jane" value="{{ old('first_name')}}" required>
       				</div>
       			</div>

       			<div class="row mb-3">
       				<label class="col-sm-3 col-form-label"><strong>Last name</strong></label>
       				<div class="col-sm-9">
       					<input type="text" name="last_name" class="form-control" placeholder="Doe" value="{{ old('last_name')}}" required>
       				</div>
       			</div>

       			<div class="row mb-3">
       				<label class="col-sm-3 col-form-label"><strong>Work email</strong></label>
       				<div class="col-sm-9">
       					<input type="email" name="email" class="form-control" placeholder="Janedoe@email.com" value="{{ old('email')}}" required>
       				</div>
       			</div>

       			<div class="row mb-3">
       				<label class="col-sm-3 col-form-label"><strong>Work phone</strong></label>
       				<div class="col-sm-9">
       					<input type="tel" name="phone_number" class="form-control" placeholder="+27 12 345 6789" value="{{ old('phone_number')}}" required>
       				</div>
       			</div>

       			<div class="row mb-3">
       				<label class="col-sm-3 col-form-label"><strong>Choose service</strong></label>
       				<div class="col-sm-9">
       					<select name="service" class="form-select">
       						<option selected>Website Design</option>
       						<option value="Website Development">Website Development</option>
       						<option value="Website Hosting">Website Hosting</option>
       						<option value="Organic SEO">Organic SEO</option>
       						<option value="Company Registration">Company Registration</option>
       						<option value="PPC & Google adwords">PPC & Google adwords</option>
       					</select>
       				</div>
       			</div>

       			<div class="row mb-3">
       				<label class="col-sm-3 col-form-label"><strong>Anything else?</strong></label>
       				<div class="col-sm-9">
       					<textarea name="message" class="form-control" id="message-text" placeholder="Tell us more about your project, needs, and timeline." value="{{ old('phone_number')}}" required></textarea>
       				</div>
       			</div>
       			<div class="row">
       				<label class="col-sm-3 col-form-label"></label>
              
       				<div class="col-sm-12 col-md-9">
                <div class="g-recaptcha" data-sitekey="{{env('RECAPTCHA_SITE_KEY')}}"></div>
       					<button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
       				</div>
       			</div>
       		</form>
       	</div>
       </div>
     </div>
   </section>

@endsection