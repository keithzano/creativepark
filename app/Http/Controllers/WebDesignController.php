<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebDesignController extends Controller
{
    public function design(){
    	$data = [
            'meta' => [
                'title' => 'Website design Company - Cape Town, South Africa',

                'description' => 'A full-service Website design Compay located in Cape Town, South Africa that offers Affordable, unique, and innovative website design solutions of varying complexities and customers all over South Africa.',


                'keywords' => 'Website design',

            ],
            'post' =>[
                'canonical' => 'https://creativepark/website-design',

                'featured_image' => 'images/cards/web-dev.png',
            ]
        ];

    	return view('web-design.web-design', compact('data'));
    }

    public function dev(){
    	$data = [
            'meta' => [
                'title' => 'Website Development Company - Cape Town, South Afica',

                'description' => 'We are a website development Company located in Cape Town, South Africa. We offer web development services using technologies like Laravel, Django React.js, and also not leaving out WordPress.',


                'keywords' => 'Website design',

            ],
            'post' => [
                'canonical' => 'https://creativepark.co.za/web-development',

                'featured_image' => 'images/cards/web-dev.png',
            ]
        ];

    	return view('web-design.web-development',compact('data'));
    }
}
