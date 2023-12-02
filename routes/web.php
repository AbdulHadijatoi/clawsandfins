<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\SettingsController;
use App\Models\Picture;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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
Route::get('admin/logout', [AuthController::class, 'logout'])->name('admin.logout')->middleware('auth');

Route::get('/boxpromo', [PromoController::class,'index'])->name('promo.index');
Route::get('/timeline', [PromoController::class,'timeline'])->name('promo.timeline');
Route::get('/cv', [PromoController::class,'cv'])->name('promo.cv');
Route::get('/customer-letter-of-intent', [PromoController::class,'letter_of_intent'])->name('promo.letter_of_intent');
Route::get('/boxpromo/long-version', [PromoController::class,'long_version']);
Route::get('/boxpromo/offerings', [PromoController::class,'offerings']);
Route::get('/boxpromo/crab-box-promo-video', [PromoController::class,'crab_box_promo_video']);
Route::get('/boxpromo/video-for-distributers', [PromoController::class,'video_for_distributers']);
Route::get('/boxpromo/important-notes', [PromoController::class,'important_notes']);
Route::get('/boxpromo/time-plan', [PromoController::class,'time_plan']);
Route::get('/boxpromo/who-am-i', [PromoController::class,'who_am_i']);
Route::get('/boxpromo/earlier-offering', [PromoController::class,'earlier_offering']);

// Navigation menu url routes:begins
Route::group(['middleware' => ['visitor']], function() {
    Route::get('/popup/{content}', function ($content) {
        return view('popup/index',['content'=>$content]);
    })->middleware('permission:home');
    Route::get('/soft-shelled-mudcrabs', function () {
        return view('soft-shelled-mudcrabs/index');
    })->middleware('permission:soft-shelled-mudcrabs');
    Route::get('/soft-shelled-mudcrabs/pages/{page}', function ($page) {
        return view('soft-shelled-mudcrabs/pages',['page'=>$page]);
    })->middleware('permission:soft-shelled-mudcrabs');
    Route::get('/hard-shelled-mudcrabs', function () {
        return view('hard-shelled-mudcrabs/index');
    })->middleware('permission:hard-shelled-mudcrabs');
    Route::get('/information', function () {
        return view('information/index');
    })->middleware('permission:information');
    Route::get('/contact-us', function () {
        return view('contact-us');
    })->middleware('permission:contact-us');
    Route::get('/more-about-soft-shell', function () {
        return view('more-about-soft-shell');
    })->middleware('permission:more-about-soft-shell');

    Route::get('/updates', function () {
        return view('updates');
    })->middleware('permission:updates');
    Route::get('/supply-and-auction', function () {
        return view('supply-and-auction');
    })->middleware('permission:supply-and-auction');
    Route::get('/distributor-picture-gallery', function () {
        $role = Role::where('name','distributor')->first();

        $pictures = Picture::where('role_id',$role->id)->get();
        return view('distributor-picture-gallery',compact('pictures'));
    })->middleware('permission:distributor-picture-gallery');
    Route::get('/investor-picture-gallery', function () {
        $role = Role::where('name','investor')->first();

        $pictures = Picture::where('role_id',$role->id)->get();
        return view('investor-picture-gallery',compact('pictures'));
    })->middleware('permission:investor-picture-gallery');
    Route::get('/show-gallery/{id}', function ($id) {
        $picture = Picture::find($id)->name;
        return view('show-gallery',compact('picture'));
    })->middleware('permission:investor-picture-gallery');
    Route::get('/future-ideas', function () {
        return view('future-ideas');
    })->middleware('permission:future-ideas');
    Route::get('/financial-updates', function () {
        return view('financial-updates');
    })->middleware('permission:financial-updates');
});
// Navigation menu url routes:ends

Route::post('api/fetch-cities', [HomeController::class, 'fetchCity']);
Route::post('contact-us/send', [HomeController::class, 'sendContact'])->name('contact-us.send');
Route::get('/reload-captcha', [HomeController::class, 'reloadCaptcha']);


Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::group(['middleware' => ['visitor']], function() {
        Route::get('/', 'HomeController@index')->name('home.index')->middleware('permission:home');
        Route::get('/where-to-buy', 'HomeController@whereToBuy')->name('home.where-to-buy')->middleware('permission:where-to-buy');
        Route::get('/distributors/{countryId}', 'HomeController@distributors')->name('home.distributors')->middleware('permission:where-to-buy-distributors');


        /**
         * Register Routes
         */
        // Route::get('/register', 'RegisterController@show')->name('register.show');
        // Route::post('/register', 'RegisterController@register')->name('register.perform');
        Route::get('become-distributor', [AuthController::class, 'becomeDistributor'])->name('become-distributor')->middleware('permission:become-distributor');
        Route::post('post-become-distributor', [AuthController::class, 'postBecomeDistributor'])->name('become-distributor.post');
        Route::get('become-investor', [AuthController::class, 'becomeInvestor'])->name('become-investor')->middleware('permission:become-investor');
        Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
        Route::post('post-become-investor', [AuthController::class, 'postBecomeInvestor'])->name('become-investor.post');
        Route::get('confirm-email', [AuthController::class, 'confirmEmail'])->name('confirm-email')->middleware('permission:confirm-email');
        Route::get('confirm-email/activation/{token}', [AuthController::class, 'emailActivation'])->name('confirm-email.activation');
        // Route::post('confirm-email/resend/{token}', [AuthController::class, 'resendEmailActivation'])->name('confirm-email.resend');

        /**
         * Login Routes
         */
        Route::get('login', [AuthController::class, 'login'])->name('login');
        Route::get('admin/login', [AuthController::class, 'adminLogin'])->name('admin.login');
        Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
        Route::post('admin/post-login', [AuthController::class, 'adminPostLogin'])->name('admin.login.post');


        Route::get('verification-notice', [AuthController::class, 'verificationNotice'])->name('verificationNotice')->middleware('auth');
        Route::get('verification/verified', [AuthController::class, 'getVerified'])->name('getVerified');
        Route::post('confirm-email/resend/{token}', [AuthController::class, 'resendEmailActivation'])->name('confirm-email.resend');
        // Route::get('verification-notice', function () {
        //     return view('auth.register.verification-notice');
        // })->name('verificationNotice')->middleware('auth');
        Route::group(['middleware' => ['auth']], function () {
            Route::get('/home', function () {
                if (explode('/', request()->route()->getPrefix() ?? '')[0] == 'admin' || Auth::user()->getRoleNames()[0] == 'admin') {
                    return redirect()->route('users.distributors');
                }else{
                    return redirect()->route('account-info');
                }
            });
        });
    });

    Route::group(['middleware' => ['auth','verified']], function() {
        Route::get('/account/{id?}', [UsersController::class, 'accountInfo'])->name('account-info');
        Route::post('post-edit-distributor', [AuthController::class, 'postEditDistributor'])->name('edit-distributor.post');
        Route::post('post-edit-investor', [AuthController::class, 'postEditInvestor'])->name('edit-investor.post');

        Route::get('/account/add-user', function () {
            return view('account/add-user');
        })->middleware('permission:account-add-user');
    });

    // Later will remove the distributor role and just limit access of distributor to only users
    Route::group(['middleware' => ['auth','verified', 'role:admin'],'prefix'=>'admin'], function() {

        Route::get('/change-credentials', 'Admin\UsersController@changeCredentials')->name('admin.changeCredentials');
        Route::post('/change-credentials/update', 'Admin\UsersController@updateCredentials')->name('admin.changeCredentials.update');

        Route::get('/', 'Admin\UsersController@distributors')->name('admin.home');
        Route::get('/dashboard', function () {
            return redirect()->route('users.distributors');
        });

        Route::group(['prefix' => 'settings'], function () {
            Route::get('/', [SettingsController::class, 'index'])->name('settings.index');
            Route::post('/update', [SettingsController::class, 'update'])->name('settings.update');
        });

        // Route::resource('users', \Admin\UsersController::class);


        /**
         * User Routes
         */
        Route::group(['prefix' => 'users'], function() {
            Route::get('/', 'Admin\UsersController@distributors')->name('users.home');
            Route::post('/updateRole', 'Admin\UsersController@updateUserRole')->name('users.updateRole');
            Route::get('/distributors', 'Admin\UsersController@distributors')->name('users.distributors');
            Route::get('/distributors/edit/{option?}', 'Admin\UsersController@editDistributors')->name('users.distributors.edit');
            Route::get('/investors', 'Admin\UsersController@investors')->name('users.investors');
            Route::get('/investors/edit/{option?}', 'Admin\UsersController@editInvestors')->name('users.investors.edit');
            Route::get('/create/{type}', 'Admin\UsersController@create')->name('users.create');
            Route::post('/create', 'Admin\UsersController@store')->name('users.store');
            Route::post('/add/distributor', 'Admin\UsersController@addDistributor')->name('users.addDistributor');
            Route::post('/add/investor', 'Admin\UsersController@addInvestor')->name('users.addInvestor');
            Route::get('/{user}/show', 'Admin\UsersController@show')->name('users.show');
            Route::get('/{user}/edit', 'Admin\UsersController@edit')->name('users.edit');
            Route::patch('/{user}/update', 'Admin\UsersController@update')->name('users.update');
            Route::delete('/{user}/delete', 'Admin\UsersController@destroy')->name('users.destroy');
        });

        Route::group(['prefix' => 'send-email'], function() {
            Route::get('/', [EmailController::class,'index'])->name('email.index');
            Route::get('/view/{param?}/{id?}', [EmailController::class,'index'])->name('email.view');
            Route::get('/send/{option?}/{draftId?}', [EmailController::class,'send'])->name('email.send');
            Route::get('/action/{param?}/{id?}', [EmailController::class,'action'])->name('email.action');
            Route::post('/send-email', [EmailController::class,'sendEmail'])->name('email.send-email');
        });

        Route::resource('roles', \Admin\RolesController::class);
        Route::resource('distributor-picture-gallery', \Admin\PictureGalleryDistributorController::class);
        Route::resource('investor-picture-gallery', \Admin\PictureGalleryInvestorController::class);

        Route::resource('permissions', \Admin\PermissionsController::class);
        Route::get('pages-permission', 'Admin\PermissionsController@viewPagesPermission');
        Route::post('permissions/assign-permission/{role?}/{permission?}', 'Admin\PermissionsController@assignPermissionToRole')->name('permissions.savePagePermissions');
    });
});
