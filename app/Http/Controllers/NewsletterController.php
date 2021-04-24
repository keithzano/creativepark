<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
// For spatie/laravel-newsletter package 
use Newsletter;


class NewsletterController extends Controller
{
  public function store(Request $request)
  {
    // validator to redirect to an anchor with error named bag
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
  
    ]);
    if($validator->fails()){
      // if request does not contain valid email and name
      return Redirect::to(URL::previous() . "#subscribe")->withErrors($validator, 'subscribe');
    }

    if (Newsletter::isSubscribed($request->email) ) {
      //send error, already sub
      $request->session()->flash('message-for', 'subscribe');                
      $request->session()->flash('message-content', 'You are already subscribed!');
      return redirect(url()->previous() . '#subscribe');
      
    }

    // Store name and email in Mailchimp
    Newsletter::subscribe($request->email,['FNAME'=>$request->email]);
    // Add tags to subscriber
    Newsletter::addTags(['website'], $request->email);
    //include success message
    $request->session()->flash('message-for', 'subscribe');                
    $request->session()->flash('message-content', 'Thanks for subscribing ' . $request->email);
    
    return redirect(url()->previous() . '#subscribe');

  }
}
