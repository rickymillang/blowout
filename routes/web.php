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

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/establishment/list','PageController@lists');
Route::get('/about-us','PageController@about_us');
Route::get('/contact-us','PageController@contact_us');
Route::get('/meet-the-team','PageController@meet_the_team');

Route::resource('/cart','CartController');
Route::post('/cart/delete-all','CartController@delete_all');
Route::post('/cart/get-product-details/{id}','CartController@getProductDetails');
Route::post('/cart/get-product-list/{id}','CartController@getProductList');
Route::post('/cart/get-cart-scratch-summary/{id}','CartController@getCartScratchSummary');
Route::post('/cart/get-setup-product-list/{id}','CartController@getSetUpProductList');
Route::post('/cart/get-user-scratch-information/{id}','CartController@getUserInformation');
Route::post('/cart/checkout-from-scratch/{id}','CartController@CheckoutFromScratch');
Route::post('/cart/get-cart-template-summary/{id}','CartController@getCartTemplateSummary');
Route::post('/cart/get-user-template-information/{id}','CartController@getTemplateUserInformation');
Route::post('/cart/get-checkout-from-template/{id}','CartController@getCheckoutFromTemplate');
Route::post('/cart/get-wizard-setup-product-list/{id}','CartController@getWizardSetupProductList');
Route::post('/cart/get-wizard-product-details/{id}','CartController@getWizardProductDetails');
Route::post('/cart/delete-wizard-cart-item/{id}','CartController@getDeleteWizardCartItem');
Route::post('/cart/get-cart-wizard-summary/{id}','CartController@getCartWizardSummary');
Route::post('/cart/get-wizard-user-information/{id}','CartController@getWizardUserInformation');
Route::post('/cart/checkout-from-wizard/{id}','CartController@CheckoutFromWizard');

Route::post('rate/{id}','RatingController@store');

Route::resource('reviews','ReviewController');

Route::get('messages', 'MessageController@index');
Route::get('messages/{id}/show', 'MessageController@show');
Route::post('messages/{id}', 'MessageController@store');
Route::post('message/send-message','MessageController@SendMessage');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::group(['prefix' => 'reports', 'middleware' => ['auth', 'role:establishment.admin,customer']], function() {
    Route::get('/create', 'ReportController@create');
    Route::post('/', 'ReportController@store');
});

Route::group(['middleware' => ['auth', 'role:establishment.admin']], function() {
    Route::get('calendar', 'CalendarController@index');

    Route::get('locations/edit', 'LocationController@edit');
    Route::patch('locations', 'LocationController@update');

    Route::resource('services', 'ServiceController');

    Route::resource('products', 'ProductController');

    Route::resource('product_types', 'ProductTypeController');

    Route::resource('packages', 'PackageController');


    Route::get('ratings', 'RatingController@index');

    Route::get('establishment/edit', 'EstablishmentController@edit');

    Route::get('orders', 'OrderController@index');
    Route::get('orders/{id}/edit', 'OrderController@edit');
    Route::patch('orders/{id}', 'OrderController@update');

    Route::get('payments', 'PaymentController@index');

});



Route::group(['middleware', ['auth', 'role:superadmin']], function() {
    Route::resource('establishment_types', 'EstablishmentTypeController');

    Route::resource('report_types', 'ReportTypeController');

    Route::resource('establishments', 'EstablishmentController');
    Route::patch('establishments/{id}/approve', 'EstablishmentController@approve');
    Route::patch('establishments/{id}/deactivate', 'EstablishmentController@deactivate');

    Route::resource('administrators', 'AdministratorController');

    Route::get('customers', 'CustomerController@index');
    Route::delete('customers/{id}', 'CustomerController@destroy');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('notifications', 'NotificationController@index');

    Route::get('change_password', 'ChangePasswordController@edit');
    Route::patch('change_password', 'ChangePasswordController@update');

    Route::get('agreement', 'AgreementController@index');

    Route::delete('profile/{user}/notifications', function(App\User $user) {
        $user->notifications->map(function($n) {
            $n->markAsRead();
        });

        return back();
    });

    Route::get('/reports', 'ReportController@index');

    Route::get('profile', 'ProfileController@index');
    Route::get('profile/edit', 'ProfileController@update');
});
