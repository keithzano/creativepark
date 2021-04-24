<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyRegistration extends Model
{
    use HasFactory;
    public $fillable = [
    	'first_name', 
    	'last_name',
    	'email', 
    	'phone_number', 
    	'company_name1', 
    	'company_name2',
    	'company_name3',
    	'company_name4', 
    	'company_street_address',
    	'company_suburb',
    	'company_city',
    	'company_postal_code',
    	'director_1_first_name',
    	'director_1_last_name',
    	'director_1_email',
    	'director_1_phone_number',
    	'director_1_address',
    	'director_2_first_name',
    	'director_2_last_name',
    	'director_2_email',
    	'director_2_phone_number',
    	'director_2_address',
    	'message'
    ];
}
