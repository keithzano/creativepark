<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostingController extends Controller
{
    public function web(){
        $data = [
            'meta' => [
                'title' => 'Fast and reliable website hosting in South Africa with unlimited bandwidth from as little as R75/month.',

                'description' => 'Host your website on fast SSD storage with unlimited bandwidth. Have the ability to host more than 1 website under one subscription. Choose your hosting package and get free business emails. From as little as R75/month.',


                'keywords' => 'Website design',

            ],
            'post' => [
                'canonical' => 'https://creativepark.co.za/web-hosting',

                'featured_image' => 'images/cards/web-hosting.png',
            ]
        ];

    	return view('hosting.web-hosting',compact('data'));
    }

    public function email(){
    	return view('hosting.email-hosting');
    }

    public function wordpress(){
    	return view('hosting.wordpress-hosting');
    }

    public function woocommerce(){
    	return view('hosting.woocommerce-hosting');
    }
}
