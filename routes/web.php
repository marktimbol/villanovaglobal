<?php

use App\Mail\SendInquiry;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
Route::resource('inquiries', 'InquiriesController');

Route::get('/t', function() {
	$inquiry = factory(App\Inquiry::class)->create();

	Mail::to('mark.timbol@hotmail.com')
		->send(new SendInquiry($inquiry));

	return 'done';
});

Auth::routes();

Route::get('/home', 'HomeController@index');
