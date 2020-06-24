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

Route::get('/', function () {
    return view('welcome');
});



// -----------------------admin-------------------------------
 Route::group(['prefix'=>'admin','namespace'=>'admin'],function(){
    /*Route::get('home','adminController@home')->name('User.home');*/
     Route::resources([
         'category' => 'CategoryController',
         'tag' => 'TagController',
         'tour' => 'TourController',

    ]);

 });
