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

use App\Classes;

//Route::get('/home' , 'PostController@home');
//Route::get('/' , function(){
//    return view('home');
//});

Route::auth();

Route::get('/' , 'Auth\AuthController@showLoginForm');

Route::get('/home' , 'HomeController@index');

Route::post('/search' , 'PostController@search');

Route::post('/SearchBatchPost' , 'PostController@SearchBatchPost');

Route::get('/contact' , 'PostController@contact');

Route::post('/SearchDate' , 'PostController@SearchDate');

Route::get('/post-schedule' , 'PostController@PostSchedule');

Route::get('/profile' , 'PostController@profile');

Route::get('/about' , 'PostController@about');

Route::resource('/post' , 'PostController');
