@extends('layouts.base')

@section('content')

	<section class="py-3 bg-two">
     <div class="container">
       <div class="row text-center">
              <div class="col-xl-9 mx-auto">
                     <h3>New Private Company Registration</h3>
                     <p class="lead">
                            Minimum of 1 director required to register a private company.
                     </p>
              </div>
       </div>
       <div class="row">
         	<div class="col-sm-12 col-md-9 mx-auto">
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
            
         		<form method="post" action="{{ route('company.store') }}">
         			@csrf
         			<div class="bg-one pl-5 pr-5 pt-5 pb-4 my-5">
                <div class="mb-4">
                  <h3><strong>Applicant Information</strong></h3>
                </div>
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
              </div>

              <div class="bg-one pl-5 pr-5 pt-5 pb-4 my-5">
                <div class="mb-4">
                  <h3><strong>Company Information</strong></h3>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"><strong>Proposed name 1 *</strong></label>
                  <div class="col-sm-9">
                    <input type="text" name="company_name1" class="form-control" value="{{ old('company_name1')}}" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"><strong>Proposed name 2</strong></label>
                  <div class="col-sm-9">
                    <input type="text" name="company_name2" class="form-control" value="{{ old('company_name2')}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"><strong>Proposed name 3</strong></label>
                  <div class="col-sm-9">
                    <input type="text" name="company_name3" class="form-control" value="{{ old('company_name3')}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"><strong>Proposed name 4</strong></label>
                  <div class="col-sm-9">
                    <input type="text" name="company_name4" class="form-control" value="{{ old('company_name4')}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"><strong>Street address</strong></label>
                  <div class="col-sm-9">
                    <input type="text" name="company_street_address" class="form-control" value="{{ old('company_street_address')}}" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"><strong>Suburb</strong></label>
                  <div class="col-sm-9">
                    <input type="text" name="company_suburb" class="form-control" value="{{ old('company_suburb')}}" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"><strong>City</strong></label>
                  <div class="col-sm-9">
                    <input type="text" name="company_city" class="form-control" value="{{ old('company_city')}}" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"><strong>Postal code</strong></label>
                  <div class="col-sm-9">
                    <input type="text" name="company_postal_code" class="form-control"  value="{{ old('company_postal_code')}}" required>
                  </div>
                </div>
               
              </div>

              <div class="bg-one pl-5 pr-5 pt-5 pb-4 my-5">
                <div class="mb-4">
                  <h3><strong>Director Information *</strong></h3>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"><strong>First name</strong></label>
                  <div class="col-sm-9">
                    <input type="text" name="director_1_first_name" class="form-control" placeholder="Jane" value="{{ old('director_1_first_name')}}" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"><strong>Last name</strong></label>
                  <div class="col-sm-9">
                    <input type="text" name="director_1_last_name" class="form-control" placeholder="Doe" value="{{ old('director_1_last_name')}}" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"><strong>Work email</strong></label>
                  <div class="col-sm-9">
                    <input type="email" name="director_1_email" class="form-control" placeholder="Janedoe@email.com" value="{{ old('director_1_email')}}" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"><strong>Work phone</strong></label>
                  <div class="col-sm-9">
                    <input type="tel" name="director_1_phone_number" class="form-control" placeholder="+27 12 345 6789" value="{{ old('director_1_phone_number')}}" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"><strong>Address</strong></label>
                  <div class="col-sm-9">
                    <textarea name="director_1_address" class="form-control" id="message-text" value="{{ old('director_1_address')}}" required></textarea>
                  </div>
                </div>
              </div>

              <div class="bg-one pl-5 pr-5 pt-5 pb-4 my-5">
                <div class="mb-4">
                  <h3><strong>Director 2 Information</strong></h3>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"><strong>First name</strong></label>
                  <div class="col-sm-9">
                    <input type="text" name="director_2_first_name" class="form-control" placeholder="Jane" value="{{ old('director_2_first_name')}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"><strong>Last name</strong></label>
                  <div class="col-sm-9">
                    <input type="text" name="director_2_last_name" class="form-control" placeholder="Doe" value="{{ old('director_2_last_name')}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"><strong>Work email</strong></label>
                  <div class="col-sm-9">
                    <input type="email" name="director_2_email" class="form-control" placeholder="Janedoe@email.com" value="{{ old('director_2_email')}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"><strong>Work phone</strong></label>
                  <div class="col-sm-9">
                    <input type="tel" name="director_2_phone_number" class="form-control" placeholder="+27 12 345 6789" value="{{ old('director_2_phone_number')}}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"><strong>Address</strong></label>
                  <div class="col-sm-9">
                    <textarea name="director_2_address" class="form-control" id="message-text" value="{{ old('director_2_address')}}"></textarea>
                  </div>
                </div>
              </div>

              <div class="bg-one pl-5 pr-5 pt-5 pb-4">
                <div class="mb-4">
                  <h3><strong>Special Instructions</strong></h3>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label"><strong>Instructions</strong></label>
                  <div class="col-sm-9">
                    <textarea name="message" class="form-control" id="message-text" value="{{ old('message')}}"></textarea>
                  </div>
                </div>
              </div>


         			<div class="row">
         				<label class="col-sm-3 col-form-label"></label>
         				<div class="col-sm-12 col-md-5">
                  <div class="g-recaptcha" data-sitekey="{{env('RECAPTCHA_SITE_KEY')}}"></div>
         					<button type="submit" class="btn btn-block btn-lg btn-primary">Register</button>
         				</div>
         			</div>
         		</form>
         	</div>
       </div>
     </div>
   </section>

@endsection