<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyRegistration;
use Illuminate\Support\Facades\Mail;
use App\Mail\CompanyRegistrationMail;
use App\Mail\CompanyRegistrationMe;

class CompanyController extends Controller
{
   public function company(){

   	$data = [
        'meta' => [
            'title' => 'Company Registration in South Africa. Easy, Fast, and Reliable.',

            'description' => 'Apply online and get your company registered. Register your company from the comfort of your house or office in just three easy steps.',

            
            'keywords' => 'Company Registration, Company Registration South Africa, Business Registration, Business Registration South Africa',

        ],
        'post' => [
            'canonical' => 'https://creativepark.co.za/company-registration',

            'featured_image' => 'images/cards/company-registration.png',
        ]
    ];
    	return view('business-reg.business-registration',compact('data'));
    }

    public function register(){

    $data = [
        'meta' => [
            'title' => 'Register Company',

            'description' => 'Apply online and get your company registered. Register your company from the comfort of your house or office in just three easy steps.',

            
            'keywords' => 'Company Registration, Company Registration South Africa, Business Registration, Business Registration South Africa',

        ],
        'post' => [
            'canonical' => 'https://creativepark.co.za/company-registration',

            'featured_image' => 'images/cards/company-registration.png',
        ]
    ];
        return view('business-reg.register-company',compact('data'));
    }

     public function store(request $request){

        $data = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'director_1_first_name' => 'required',
            'director_1_last_name' => 'required',
            'director_1_email' => 'required|email',
            'director_1_phone_number' => 'required',
            'director_1_address' => 'required',
        ]);

        //  Store data in database
        $token = $request->input('g-recaptcha-response');

        if($token){
            $client = new Client();
            $response= $client ->post('https://www.google.com/recaptcha/api/siteverify',[
                'form_params' =>  array(
                    'secret' => env('RECAPTCHA_SECRET_KEY'),
                    'response' => $token
                )
            ]);
            $result= json_decode($response ->getBody()->getContents());
            if ($result->success){
                CompanyRegistration::create($request->all());

                Mail::to('keithzano@gmail.com')
                    ->queue(new CompanyRegistrationMe($data));
                Mail::to($request->email)
                    ->queue(new CompanyRegistrationMail($data));
                return back()->with('success', 'We appreciate you registering your company with us. One of our colleagues will get back in touch with you soon! Have a great day!');

            }else{
                return back()->with('errors', 'The response parameter is invalid or malformed.'); 
            }
            //  Store data in database
       
        }else{
            return back()->with('errors',' Please complete the reCAPTCHA');
        }
        
    }
}


 