@extends('layouts.base')

@section('content')
<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

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
       <div class="row">

       	<div class="col-sm-12 my-auto">



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
          
       		<form method="post" action="{{ route('sendemail') }}">
       			@csrf

       			<div class="row mb-3">
       				<label class="col-sm-3 col-form-label"><strong>To email</strong></label>
       				<div class="col-sm-9">
       					<input type="email" name="to_email" class="form-control" placeholder="Janedoe@email.com" value="{{ old('email')}}" required>
       				</div>
       			</div>

            <div class="row mb-3">
              <label class="col-sm-3 col-form-label"><strong>Subject</strong></label>
              <div class="col-sm-9">
                <input type="subject" name="subject" class="form-control" placeholder="subject" value="{{ old('subject')}}" required>
              </div>
            </div>



       			<div class="row mb-3">
       				<label class="col-sm-3 col-form-label"><strong>Message</strong></label>
       				<div class="col-sm-9">
       					<textarea name="message" class="form-control" id="message-text" placeholder="Tell us more about your project, needs, and timeline." value="{{ old('message')}}" required></textarea>
                <script>
                        CKEDITOR.replace( 'message' );
                </script>
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