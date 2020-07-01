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
 Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
     Route::get('/login','AdminLoginController@getlogin')->name('getlogin');
     Route::post('/login','AdminLoginController@postlogin')->name('postlogin');
     Route::get('/register', 'AdminRegisterController@getregister')->name('getregister');
     Route::post('/register', 'AdminRegisterController@postpegister')->name('postpegister');

     Route::group(['middleware' => 'checkAdminLogin'],function(){
        Route::get('/', function() {
            return view('admin/page/index');
        });
        Route::resources([
            'category' => 'CategoryController',
            'tag' => 'TagController',
            'tour' => 'TourController',
            'customer' => 'customerController',
            'role' => 'RoleController',
            'gallery' => 'GalleryController',
            'role_assignment' =>'Role_AssignmentController',
            'permission' => 'permissionController',
            'role_permission' => 'role_permissionController',
            'contact' => 'contactController',
            'customer_service' => 'CustomerServiceController',
        ]);
        Route::get('/logout','AdminLoginController@getLogout')->name('getlogout');
     });
 });
