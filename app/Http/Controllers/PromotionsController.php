<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;

use Illuminate\Support\Facades\Mail;
use App\Mail\Promotions;
use App\Mail\PromotionsMe;

class PromotionsController extends Controller
{
    public function index(){
        $data = [
            'meta' => [
                'title' => 'Get a free website for your business',

                'description' => 'Get your business online for free. Have a professional website created for you business all for free Choose your hosting package and get free business emails. From as little as R75/month.',


                'keywords' => 'Website design',

            ],
            'post' =>[
                'canonical' => 'https://creativepark.co.za/contact-us',

                'featured_image' => 'images/cards/web-hosting.png',
            ]
        ];

    	return view('promo.web-design',compact('data'));
    }

    public function store(request $request){
        

        $data = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'phone_number' =>'required'
        ]);

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
                Promotion::create($request->all());

                Mail::to('keithzano@gmail.com')
                    ->queue(new PromotionsMe($data));
                Mail::to($request->email)
                    ->queue(new Promotions($data));
                return redirect('/website-design')->with('success', 'We appreciate you contacting us. One of our colleagues will get back in touch with you soon! Have a great day!');

            }else{
                return back()->with('errors', 'The response parameter is invalid or malformed.'); 
            }
            //  Store data in database
       
        }else{
            return back()->with('errors',' Please complete the reCAPTCHA');
        }
        
    }
}
