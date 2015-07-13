<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('index');
});

/* Pages */

Route::get('listing', function() {
    return view('static.listing')->with(['title' => 'Listing']);
});

Route::get('feedback', function() {
    return view('static.feedback')->with(['title' => 'Feedback']);
});

/* Ajax */

Route::group(['prefix' => 'ajax'], function ()
{

    Route::post('create', ['uses' => 'AjaxController@create']); // ajax register
    Route::post('login', ['uses' => 'AjaxController@login']); // ajax login

});

/* DashBoard */

Route::group(['middleware' => 'auth'], function ()
{

    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);
    Route::resource('dashboard/listing', 'ListingController');
    Route::resource('dashboard/applicants', 'ApplicantController');
    Route::get('dashboard/profile', ['as' => 'profile' , 'uses' => 'ProfileController@index']);
    Route::post('dashboard/profile', ['uses' => 'ProfileController@update']);

});



Route::get('logout', 'Auth\AuthController@getLogout'); // normal logout
Route::get('login', function (){
   return "To do.. :)";
});

// Email

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

/* LARAVEL AUTHS
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
*/
