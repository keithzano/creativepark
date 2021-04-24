@component('mail::message')

You have a new form with the following details <br> 

<strong>Name</strong>---{{$data['first_name']}}<br>
<strong>Surname</strong>---{{$data['last_name']}} <br>
<strong>Email</strong>---{{$data['email']}} <br>
<strong>Phone number</strong>---{{$data['phone_number']}} <br>
<strong>Service</strong>---{{$data['service']}} <br>
<strong>Message</strong>---{{$data['message']}} <br>
  
@endcomponent
