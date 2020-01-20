<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register/startup', function(){
   return view('startup');
});
Route::get('/register/mentor', function(){
    return view('mentor');
});
Route::get('/mentor/home', function(){
    return view('mentor_profile');
});
Route::get('/startups/test', function(){
    return view('test');
});

Auth::routes();

Route::get('/user', 'StartUpController@index');

Route::post('/user/add', 'StartUpController@store');

Route::post('/edit', 'StartUpController@edit');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('{path}', 'HomeController@index')->where( 'path' , '([A-z\d\-\/_.]+)?' );
