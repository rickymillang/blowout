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

Route::resource('/cart','CartController');
Route::post('/cart/delete-all','CartController@delete_all');
Route::resource('/products', 'ProductController');
Route::resource('/product_types', 'ProductTypeController');
Route::resource('/establishments','EstablishmentController');
Route::patch('establishments/{id}/approve', ['middleware' => ['auth', 'role:superadmin'], 'uses' => 'EstablishmentController@approve']);
Route::patch('establishments/{id}/deactivate', ['middleware' => ['auth', 'role:superadmin'], 'uses' => 'EstablishmentController@deactivate']);

Route::get('establishment/edit', ['middleware' => ['auth', 'role:establishment.admin'], 'uses' => 'EstablishmentController@edit']);

Route::resource('/services', 'ServiceController');

Route::group(['prefix' => 'customers', 'middleware' => ['auth', 'role:superadmin']], function() {
    Route::get('/', 'CustomerController@index');
    Route::delete('/{id}', 'CustomerController@destroy');
});

Route::group(['prefix' => 'administrators', 'middleware' => ['auth', 'role:superadmin']], function() {
    Route::get('/', 'AdministratorController@index');
    Route::delete('/{id}', 'AdministratorController@destroy');
    Route::get('/create', 'AdministratorController@create');
    Route::post('/', 'AdministratorController@store');
    Route::get('/{id}/edit', 'AdministratorController@edit');
    Route::patch('/{id}', 'AdministratorController@update');
});

Route::group(['prefix' => 'establishment_types', 'middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('/', 'EstablishmentTypeController@index');
    Route::get('/create', 'EstablishmentTypeController@create');
    Route::post('/', 'EstablishmentTypeController@store');
    Route::get('/{id}/edit', 'EstablishmentTypeController@edit');
    Route::patch('/{id}', 'EstablishmentTypeController@update');
});

Route::group(['prefix' => 'packages', 'middleware' => ['auth', 'role:establishment.admin']], function () {
    Route::get('/', 'PackageController@index');
    Route::get('/create', 'PackageController@create');
    Route::get('/{id}/edit', 'PackageController@edit');
    Route::post('/', 'PackageController@store');
});



Route::get('change_password', 'ChangePasswordController@edit');
Route::patch('change_password', 'ChangePasswordController@update');

Route::get('/notifications', 'NotificationController@index');

Route::get('ratings', 'RatingController@index');

Route::delete('profile/{user}/notifications', function(App\User $user) {
    $user->notifications->map(function($n) {
        $n->markAsRead();
    });

    return back();
});

Route::get('messages', 'MessageController@index');
Route::get('messages/{id}/show', 'MessageController@show');
Route::post('messages/{id}', 'MessageController@store');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('agreement', 'AgreementController@index');

Route::group(['prefix' => 'reports', 'middleware' => ['auth', 'role:establishment.admin,customer']], function() {

    Route::get('/create', 'ReportController@create');
    Route::post('/', 'ReportController@store');
});
Route::group(['prefix' => 'reports', 'middleware' => ['auth']], function() {
    Route::get('/', 'ReportController@index');
});