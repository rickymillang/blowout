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
    return view('pages.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/establishment/list','PageController@lists');
Route::get('/about-us','PageController@about_us');
Route::get('/contact-us','PageController@contact_us');
Route::get('/meet-the-team','PageController@meet_the_team');

Route::resource('/products', 'ProductController');
Route::resource('/product_types', 'ProductTypeController');
Route::resource('/establishments','EstablishmentController');
Route::resource('/services', 'ServiceController');