<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){

    	$data =[

    		'meta' => [
    			'title' => 'Web design Company in Cape Town, South Africa',

    			'description' => 'A full-service Digital Company for all your Website designs, Website hosting, Search Engine Optimisation (SEO), and Social media marketing with a proven track record.',

    			
    			'keywords' => 'Website design',

    		],
    		'post' =>[
    			'canonical' => 'https://creativepark.co.za',

    			'featured_image' => 'images/cards/web-dev.png',
    		]
    	];

    	return view('home',compact('data'));
    }
}
