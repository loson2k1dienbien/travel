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
/*-------------------USER---------------------------*/
Route::group(['prefix'=>'','namespace'=>'User'],function(){
    Route::get('home','UserController@home')->name('User.home');
    Route::get('tour_details/{id}','UserController@tour_details')->name('User.tour_details');
    Route::get('blog_single','UserController@blog_single')->name('User.blog_single');
    Route::get('blog','UserController@blog')->name('User.blog');
    Route::get('about','UserController@about')->name('User.about');
    Route::get('blog','UserController@blog')->name('User.blog');
    Route::get('contact','UserController@contact')->name('User.contact');
    Route::get('faq','UserController@faq')->name('User.faq');
    Route::get('service','UserController@service')->name('User.service');
    Route::get('tour_packages','UserController@tour_packages')->name('User.tour_packages');
    Route::get('erro','UserController@erro')->name('User.erro');
    Route::get('gallery','UserController@gallery')->name('User.gallery');


});
 /*-----------------------ADMIN-------------------------*/

Route::group(['prefix'=>'admin','namespace'=>'admin'],function(){
    /*Route::get('home','adminController@home')->name('User.home');*/
     Route::resources([
         'category' => 'CategoryController',
         'tag' => 'TagController',
         'tour' => 'TourController',
         'tourImage' => 'TourImageController',

    ]);
});
