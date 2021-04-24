<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function ppc(){

        $data = [
            'meta' => [
                'title' => 'Pay Per Click Advertising (PPC) in South Africa',

                'description' => 'Reach your customers with paid advertising. with PPC you can reach the right customers and drive traffic to your website.',


                'keywords' => 'Pay Per Click (PPC)',

            ],

            'post' => [
                'canonical' => 'https://creativepark.co.za/ppc-and-google-adwords',

                'featured_image' => 'images/cards/seo.png',
            ]
        ];

    	return view('seo-sem.ppc-google-adwords', compact('data'));
    }

    public function organic(){
        $data = [
            'meta' => [
                'title' => 'Search engine Optimization (SEO) in South Africa',

                'description' => 'Search engine optimization (SEO) is the process of optimizing a website page and the content on it so that it has higher chances of appearing on the top results of searches relating to your website.',


                'keywords' => 'Search engine optimization (SEO',

            ],
            'post' =>[
                'canonical' => 'https://creativepark.co.za/organinc-seo',

                'featured_image' => 'images/cards/seo.png',
            ]
        ];

    	return view('seo-sem.organic-seo', compact('data'));
    }

    public function page(){
    	return view('seo-sem.on-page-seo');
    }

    public function keyword(){
    	return view('seo-sem.keyword-research');
    }

    public function lacal(){
    	return view('seo-sem.lacal-seo');
    }
}
