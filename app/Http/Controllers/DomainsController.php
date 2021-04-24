<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomainsController extends Controller
{
    public function register(){
    	return view('domains.register-a-domain');
    }

    public function transfere(){
    	return view('domains.transfere-a-domain');
    }
}
