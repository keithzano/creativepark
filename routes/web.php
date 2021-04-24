<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'PagesController@home')->name('home');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';







/*---  Contact Us ---*/
Route::get('/contact-us', 'ContactController@index')->name('contact-us');
Route::post('/contact-us', 'ContactController@store')->name('contact-us');
/*---  Contact Us ---*/

/*---  Company Registration ---*/
Route::get('/company-registration', 'CompanyController@company')->name('company.registration');
Route::get('/register-company', 'CompanyController@register')->name('company.register');
Route::post('/register-company', 'CompanyController@store')->name('company.store');
/*---  Web design ---*/

/*---  Web design ---*/
Route::get('/website-design', 'WebDesignController@design')->name('web.design');
Route::get('/web-development', 'WebDesignController@dev')->name('web.dev');
/*---  Web design ---*/

/*---  Hosting ---*/
Route::get('/web-hosting', 'HostingController@web')->name('hosting.web');
Route::get('/email-hosting', 'HostingController@email')->name('hosting.email');
Route::get('/wordpress-hosting', 'HostingController@wordpress')->name('hosting.wordpress');
Route::get('/woocommerce-hosting', 'HostingController@woocommerce')->name('hosting.woocommerce');
/*---  Hosting ---*/

/*--- Domains  ---*/
Route::get('/register-a-domain', 'DomainsController@register')->name('domains.register');
Route::get('/transfere-a-domain', 'DomainsController@transfere')->name('domains.transfere');
/*--- Domains  ---*/

/*--- SEO  ---*/
Route::get('/ppc-and-google-adwords', 'SeoController@ppc')->name('seo.ppc');
Route::get('/organinc-seo', 'SeoController@organic')->name('seo.organic');
Route::get('/on-page-seo', 'SeoController@page')->name('seo.page');
Route::get('/keyword-research', 'SeoController@keyword')->name('seo.keyword');
Route::get('/local-seo', 'SeoController@local')->name('seo.local');
/*--- SEO  ---*/

/*--- Maintenance  ---*/
Route::get('/wordpress-maintenance', 'MaintenanceController@wordpress')->name('maintenance.wordpress');
Route::get('/website-maintenance', 'MaintenanceController@website')->name('maintenance.website');
/*--- Maintenance  ---*/

/*--- Newsletter  ---*/
Route::post('/news-letter', 'NewsletterController@store')->name('news.letter');
/*--- Newsletter  ---*/



/*--- Blog   ---*/

// Get all published posts
Route::get('/blog', 'BlogController@getPosts')->name('blog.index');
 
// Get posts for a given tag
Route::get('tag/{slug}', 'BlogController@getPostsByTag')->name('blog.tag');
 
// Get posts for a given topic
Route::get('topic/{slug}', 'BlogController@getPostsByTopic')->name('blog.topic');
 
// Find a single post
Route::middleware('Canvas\Http\Middleware\Session')->get('{slug}', 'BlogController@findPostBySlug')->name('blog.post');

/*--- Blog   ---*/




