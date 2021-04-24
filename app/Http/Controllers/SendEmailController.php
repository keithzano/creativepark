<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use GuzzleHttp\Client;

class SendEmailController extends Controller
{
    public function index(){
        $meta = [
            'title' => 'Contact Us | Keithzano',

            'description' => 'Host your website on fast SSD storage with unlimited bandwidth. Have the ability to host more than 1 website under one subscription. Choose your hosting package and get free business emails. From as little as R75/month.',

            'canonical' => 'https://creativepark.co.za/contact-us',

            'image' => 'images/cards/web-hosting.png',
            'keywords' => 'Website design',

        ];

    	return view('sendemail.sendemail',$meta);
    }

    public function store(request $request){
        

        $data = request()->validate([
            'to_email' => 'required|email',
            'subject' => 'required',
        ]);

        Mail::to($request->to_email)
                ->queue(new SendEmail($data));
        return back()->with('success', 'We appreciate you contacting us. One of our colleagues will get back in touch with you soon! Have a great day!');

        /*

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
                Contact::create($request->all());

                Mail::to('keithzano@gmail.com')
                    ->queue(new ContactFormMe($data));
                Mail::to($request->email)
                    ->queue(new ContactFormMail($data));
                return back()->with('success', 'We appreciate you contacting us. One of our colleagues will get back in touch with you soon! Have a great day!');

            }else{
                return back()->with('errors', 'The response parameter is invalid or malformed.'); 
            }
            //  Store data in database
       
        }else{
            return back()->with('errors',' Please complete the reCAPTCHA');
        }
        */

        
    }
}
