<?php

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

Route::get('/', 'HomeController@index');
//Auth::routes();
//
Route::get('/home', 'HomeController@index');
Route::get('/register', 'HomeController@Register');
Route::get('/gairtime', 'HomeController@Airtime');
Route::get('/gpaybills', 'HomeController@Paybills');
Route::get('/gabbout', 'HomeController@About');
Route::get('/reset', 'HomeController@ResetPassword');
Route::get('/login', 'HomeController@Login');
Route::post('/register', 'HomeController@DoRegister');
Route::post('/login', 'HomeController@authenticate');
Route::get('/logout', 'HomeController@Logout');

Route::get('/client','ClientController@index');
Route::get('/cusprofile','ClientController@Profile');
Route::get('/cusfaq','ClientController@Faq');
Route::get('/service','ClientController@Category');
Route::get('/cussupport','ClientController@Support');
Route::get('/vendor','ClientController@Vendor');
Route::get('/history','ClientController@History');

Route::get('/admin','AdminController@Dashboard');
Route::get('/admin/logout','AdminController@LogOut');
Route::get('/admin/login','AdminController@Login');
Route::post('/admin/login','AdminController@DoLogin');

Route::get('/admin/cats','AdminController@Categories');
Route::post('/admin/cats/newcat','AdminController@NewCat');
Route::get('/admin/services','AdminController@Services');
Route::post('/admin/cats/editcat','AdminController@NewCat');

Route::post('/admin/service/NewService','ServicesController@NewService');

