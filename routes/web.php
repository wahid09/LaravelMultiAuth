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

Auth::routes(['verify' => true]);
Route::get('profile', function () {
    return 'Only verified users may enter...';
})->middleware('verified');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin', 'middleware'=>'auth:admin'], function(){
	Route::get('admin/home', 'HomeController@index')->name('admin/home');



	// Admin Login Route
	//Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	//Route::post('admin-login', 'Auth\LoginController@login');
    //Route::post('logout', 'Auth\LoginController@logout');
});

Route::group(['namespace' => 'Admin'], function(){
	//Route::get('admin/home', 'HomeController@index')->name('admin/home');



	// Admin Login Route
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout');
});