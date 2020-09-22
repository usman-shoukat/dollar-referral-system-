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


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/wallet', [App\Http\Controllers\HomeController::class, 'wallet'])->name('wallet');
Route::get('/withdraw', [App\Http\Controllers\HomeController::class, 'withdraw'])->name('withdraw');
Route::get('/deposit', [App\Http\Controllers\HomeController::class, 'deposit'])->name('deposit');
Route::get('/referral', [App\Http\Controllers\HomeController::class, 'referral'])->name('referral');
Route::get('/sreferral', [App\Http\Controllers\HomeController::class, 'sreferral'])->name('sreferral');
Route::get('/hreferral', [App\Http\Controllers\HomeController::class, 'hreferral'])->name('hreferral');
Route::get('/plans', [App\Http\Controllers\HomeController::class, 'plans'])->name('plans');
Route::post('/plans', [App\Http\Controllers\BuypackageController::class, 'store'])->name('plans.ocean');
Route::get('/active', [App\Http\Controllers\BuypackageController::class, 'create'])->name('active');
Route::get('/withdrawsuccess', [App\Http\Controllers\WithdrawController::class, 'withdrawsuccess'])->name('withdrawsuccess');
Route::get('oceanreferral/{ref}', [App\Http\Controllers\UserReferralController::class, 'index'])->name('oceanreferral');
Route::post('oceanreferral/{ref}', [App\Http\Controllers\UserReferralController::class, 'store'])->name('ocean');
Route::get('skyreferral/{ref}', [App\Http\Controllers\SkyreferralController::class, 'index'])->name('skyreferral');
Route::post('skyreferral/{ref}', [App\Http\Controllers\SkyreferralController::class, 'store'])->name('sky.store');
Route::get('heavenreferral/{ref}', [App\Http\Controllers\HeavenreferralController::class, 'index'])->name('heavenreferral');
Route::post('heavenreferral/{ref}', [App\Http\Controllers\HeavenreferralController::class, 'store'])->name('heaven.store');
Route::post('applywithdraw', [App\Http\Controllers\WithdrawController::class, 'applywithdraw'])->name('applywithdraw');

// <------------------------------------admin route ------------------------------->

Route::prefix('admin')->group(function (){
	Route::get('/login', [App\Http\Controllers\Auth\LoginAdminController::class, 'showLoginForm'])->name('adminloginshow');
	Route::post('/login', [App\Http\Controllers\Auth\LoginAdminController::class, 'login'])->name('admin.login');
	Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
});


// <------------------------------------admin route ------------------------------->
