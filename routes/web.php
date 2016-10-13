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

Auth::routes();

Route::get('/home', 'HomeController@index');
