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

Route::get('/landing', function () {
    return view('landing');
});


Route::prefix('users')->group(function(){
    Route::get('/',function(){
        return "Welcome Muhammed";
    });
});

Route::group(['namespace' => 'Admin'], function (){
    Route::get('first','FirstController@showString');
});


Auth::routes( ['verify'=>true] );

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
