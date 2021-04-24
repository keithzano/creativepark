<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function website(){

    	$data = [
            'meta' => [
                'title' => 'Affordable Website Maintenance in Cape Town South Africa',

                'description' => 'Professional Website Maintenance Service at an affordable price.
                We keep your website updated and virus free all the time keeping it at its optimal performance. ',

                
                'keywords' => 'Website Maintenance, Web maintenance',

            ],
            'post' =>[
                'canonical' => 'https://creativepark.co.za/website-maintenance',

                'featured_image' => 'images/cards/web-maintenance.png',
            ]
        ];

    	return view('maintenance.web-maintenance', compact('data'));
    }

    public function wordpress(){
    	return view('maintenance.wordpress-maintenance');
    }
}
