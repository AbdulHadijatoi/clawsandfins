<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Auth;
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

Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

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
Route::get('/more-about-soft-shell', function () {
    return view('more-about-soft-shell');
});
// Route::get('/updates', function () {
//     return view('updates');
// })->middleware('permission:view-updates');
Route::get('/updates', function () {
    return view('updates');
});
Route::get('/supply-and-auction', function () {
    return view('supply-and-auction');
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
        Route::get('login', [AuthController::class, 'login'])->name('login');
        Route::get('admin/login', [AuthController::class, 'adminLogin'])->name('admin.login');
        Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
        Route::post('admin/post-login', [AuthController::class, 'adminPostLogin'])->name('admin.login.post'); 
    });

    Route::get('verification-notice', function () {
        if(Auth::check() && auth()->user()->hasVerifiedEmail()){
            return redirect()->route('home.index');
        }
        return view('auth.register.verification-notice');
    })->name('verificationNotice')->middleware('auth');
    Route::group(['middleware' => ['auth','verified']], function() {
        Route::get('/account/{id?}', [UsersController::class, 'accountInfo'])->name('account-info');
        Route::post('post-edit-distributor', [AuthController::class, 'postEditDistributor'])->name('edit-distributor.post');
        Route::post('post-edit-investor', [AuthController::class, 'postEditInvestor'])->name('edit-investor.post');
        
        Route::get('/account/add-user', function () {
            return view('account/add-user');
        });
    });

    // Later will remove the distributor role and just limit access of distributor to only users
    Route::group(['middleware' => ['auth','verified', 'role:admin'],'prefix'=>'admin'], function() {
        Route::get('/', [UsersController::class, 'index'])->name('users.index');

        Route::group(['prefix' => 'settings'], function () {
            Route::get('/', [SettingsController::class, 'index'])->name('settings.index');
            Route::post('/update', [SettingsController::class, 'update'])->name('settings.update');
        });
        
        Route::resource('users', \Admin\UsersController::class);
        Route::post('users/updateRole', [App\Http\Controllers\Admin\UsersController::class,'updateUserRole'])->name('users.updateRole');
        
        Route::group(['prefix' => 'send-email'], function() {
            Route::get('/', [EmailController::class,'index'])->name('email.index');
            Route::get('/view/{param?}/{id?}', [EmailController::class,'index'])->name('email.view');
            Route::get('/send/{option?}/{draftId?}', [EmailController::class,'send'])->name('email.send');
            Route::get('/action/{param?}/{id?}', [EmailController::class,'action'])->name('email.action');
            Route::post('/send-email', [EmailController::class,'sendEmail'])->name('email.send-email');
        });

        Route::resource('roles', \Admin\RolesController::class);
        Route::resource('permissions', \Admin\PermissionsController::class);
        Route::get('permissions/assign-permission/{role}/{permission}', 'Admin\PermissionsController@assignPermissionToRole');
    });
});