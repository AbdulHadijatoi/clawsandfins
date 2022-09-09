<?php

use App\Http\Controllers\Auth\AuthController;
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
    return view('index');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('become-distributor', [AuthController::class, 'becomeDistributor'])->name('become-distributor');
Route::post('post-become-distributor', [AuthController::class, 'postBecomeDistributor'])->name('become-distributor.post'); 
Route::get('become-investor', [AuthController::class, 'becomeInvestor'])->name('become-investor');
Route::get('forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
Route::post('post-become-investor', [AuthController::class, 'postBecomeInvestor'])->name('become-investor.post'); 
// Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
