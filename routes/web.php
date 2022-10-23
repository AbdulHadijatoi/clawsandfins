<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
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

// Route::get('dashboard', [AuthController::class, 'dashboard']); 



// Navigation menu url routes:begins
Route::get('/soft-shelled-mudcrabs', function () {
    return view('soft-shelled-mudcrabs/index');
});
Route::get('/soft-shelled-mudcrabs/pages/{page}', function ($page) {
    return view('soft-shelled-mudcrabs/pages',['page'=>$page]);
});
Route::get('/hard-shelled-mudcrabs', function () {
    return view('hard-shelled-mudcrabs/index');
});
Route::get('/information', function () {
    return view('information/index');
});
Route::get('/where-to-buy', function () {
    return view('where-to-buy/index');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/updates', function () {
    return view('updates');
});
Route::get('/picture-gallery', function () {
    return view('picture-gallery');
});
Route::get('/future-ideas', function () {
    return view('future-ideas');
});
Route::get('/financial-updates', function () {
    return view('financial-updates');
});
Route::get('/account/add-user', function () {
    return view('account/add-user');
});
// Navigation menu url routes:ends
Route::post('api/fetch-cities', [HomeController::class, 'fetchCity']);
Route::post('contact-us/send', [HomeController::class, 'sendMessage'])->name('contact-us.send');


Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');


    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        // Route::get('/register', 'RegisterController@show')->name('register.show');
        // Route::post('/register', 'RegisterController@register')->name('register.perform');
        Route::get('become-distributor', [AuthController::class, 'becomeDistributor'])->name('become-distributor');
        Route::post('post-become-distributor', [AuthController::class, 'postBecomeDistributor'])->name('become-distributor.post'); 
        Route::get('become-investor', [AuthController::class, 'becomeInvestor'])->name('become-investor');
        Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
        Route::post('post-become-investor', [AuthController::class, 'postBecomeInvestor'])->name('become-investor.post'); 
        Route::get('confirm-email', [AuthController::class, 'confirmEmail'])->name('confirm-email');
        Route::get('confirm-email/activation/{token}', [AuthController::class, 'emailActivation'])->name('confirm-email.activation');
        Route::post('confirm-email/resend/{token}', [AuthController::class, 'resendEmailActivation'])->name('confirm-email.resend');
        
        /**
         * Login Routes
         */
        // Route::get('/login', 'LoginController@show')->name('login.show');
        // Route::post('/login', 'LoginController@login')->name('login.perform');
        Route::get('login', [AuthController::class, 'login'])->name('login');
        Route::get('admin/login', [AuthController::class, 'adminLogin'])->name('admin.login');
        Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
        Route::post('admin/post-login', [AuthController::class, 'adminPostLogin'])->name('admin.login.post'); 
        
    });

    Route::group(['middleware' => ['auth']], function() {
        Route::get('/account/{id?}', 'UsersController@accountInfo')->name('account-info');
        Route::post('post-edit-distributor', [AuthController::class, 'postEditDistributor'])->name('edit-distributor.post');
        Route::post('post-edit-investor', [AuthController::class, 'postEditInvestor'])->name('edit-investor.post');

        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    });
    Route::group(['middleware' => ['auth', 'role:admin|distributor'],'prefix'=>'admin'], function() {
        Route::get('/', 'UsersController@index')->name('users.index');

        Route::group(['prefix' => 'settings'], function () {
            Route::get('/', 'SettingsController@index')->name('settings.index');
            Route::post('/update', 'SettingsController@update')->name('settings.update');
        });
        /**
         * Logout Routes
         */
        // Route::get('/logout', 'LogoutController@perform')->name('logout');
        
        /**
         * User Routes
         */
        Route::group(['prefix' => 'users'], function() {
            Route::get('/', 'UsersController@index')->name('users.index');
            Route::get('/create', 'UsersController@create')->name('users.create');
            Route::post('/create', 'UsersController@store')->name('users.store');
            Route::get('/{user}/show', 'UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy');
        });

        Route::resource('roles', RolesController::class);
        Route::resource('permissions', PermissionsController::class);
    });
});