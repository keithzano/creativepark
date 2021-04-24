@component('mail::message')

You have a new company rigister <br> 

<strong>Name</strong>---{{$data['first_name']}}<br>
<strong>Surname</strong>---{{$data['last_name']}} <br>
<strong>Email</strong>---{{$data['email']}} <br>
<strong>Phone number</strong>---{{$data['phone_number']}} <br> <br>
<strong>Director Name</strong>---{{$data['director_1_first_name']}} <br>
<strong>Director Surname</strong>---{{$data['director_1_last_name']}} <br>
  
@endcomponent
