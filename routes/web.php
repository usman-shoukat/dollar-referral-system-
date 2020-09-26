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
Route::get('withdrawtransaction', [App\Http\Controllers\HomeController::class, 'withdrawtransaction'])->name('withdrawtransaction');
Route::get('transaction/{apply}', [App\Http\Controllers\HomeController::class, 'withdrawtransactionapply'])->name('withdraw.transaction');

// <------------------------------------admin route ------------------------------->

Route::prefix('admin')->group(function (){
	Route::get('/login', [App\Http\Controllers\Auth\LoginAdminController::class, 'showLoginForm'])->name('adminloginshow');
	Route::post('/login', [App\Http\Controllers\Auth\LoginAdminController::class, 'login'])->name('admin.login');
	Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
});
Route::get('showwithdraw', [App\Http\Controllers\AdminController::class, 'showwithdraw'])->name('showwithdraw');
Route::get('adminwithdraw/{apply}', [App\Http\Controllers\AdminController::class, 'adminwithdraw'])->name('adminwithdraw');



// <------------------------------------approved withdraw route ------------------------------->

Route::get('approvedpm/{id}', [App\Http\Controllers\AdminController::class, 'approvedpm'])->name('approvedpm');
Route::get('approvedbtc/{id}', [App\Http\Controllers\AdminController::class, 'approvedbtc'])->name('approvedbtc');
Route::get('approvedadvcash/{id}', [App\Http\Controllers\AdminController::class, 'approvedadvcash'])->name('approvedadvcash');
Route::get('approvedcashmaal/{id}', [App\Http\Controllers\AdminController::class, 'approvedcashmaal'])->name('approvedcashmaal');
Route::get('approvedjazz/{id}', [App\Http\Controllers\AdminController::class, 'approvedjazz'])->name('approvedjazz');
Route::get('approvedpaisa/{id}', [App\Http\Controllers\AdminController::class, 'approvedpaisa'])->name('approvedpaisa');
Route::get('approvedskrill/{id}', [App\Http\Controllers\AdminController::class, 'approvedskrill'])->name('approvedskrill');
Route::get('approvedpayeer/{id}', [App\Http\Controllers\AdminController::class, 'approvedpayeer'])->name('approvedpayeer');
// <------------------------------------approved withdraw route ------------------------------->


// <------------------------------------reject withdraw route ------------------------------->

Route::get('rejectdpm/{id}', [App\Http\Controllers\AdminController::class, 'rejectdpm'])->name('rejectdpm');
Route::get('rejectdbtc/{id}', [App\Http\Controllers\AdminController::class, 'rejectdbtc'])->name('rejectdbtc');
Route::get('rejectdadvcash/{id}', [App\Http\Controllers\AdminController::class, 'rejectdadvcash'])->name('rejectdadvcash');
Route::get('rejectdcashmaal/{id}', [App\Http\Controllers\AdminController::class, 'rejectdcashmaal'])->name('rejectdcashmaal');
Route::get('rejectdjazz/{id}', [App\Http\Controllers\AdminController::class, 'rejectdjazz'])->name('rejectdjazz');
Route::get('rejectdpaisa/{id}', [App\Http\Controllers\AdminController::class, 'rejectdpaisa'])->name('rejectdpaisa');
Route::get('rejectdskrill/{id}', [App\Http\Controllers\AdminController::class, 'rejectdskrill'])->name('rejectdskrill');
Route::get('rejectdpayeer/{id}', [App\Http\Controllers\AdminController::class, 'rejectdpayeer'])->name('rejectdpayeer');
// <------------------------------------reject withdraw route ------------------------------->


Route::get('oceanreq', [App\Http\Controllers\AdminController::class, 'oceanreq'])->name('oceanreq');
Route::get('skyreq', [App\Http\Controllers\AdminController::class, 'skyreq'])->name('skyreq');
Route::get('heavenreq', [App\Http\Controllers\AdminController::class, 'heavenreq'])->name('heavenreq');

Route::get('deloceanpack/{id}', [App\Http\Controllers\AdminController::class, 'deloceanpack'])->name('deloceanpack');
Route::get('appoceanpack/{id}', [App\Http\Controllers\AdminController::class, 'appoceanpack'])->name('appoceanpack');

Route::get('deloceanpack/{id}', [App\Http\Controllers\AdminController::class, 'deloceanpack'])->name('appoceanpack');
Route::get('appoceanpack/{id}', [App\Http\Controllers\AdminController::class, 'appoceanpack'])->name('appoceanpack');

Route::get('deloceanpack/{id}', [App\Http\Controllers\AdminController::class, 'deloceanpack'])->name('deloceanpack');
Route::get('appoceanpack/{id}', [App\Http\Controllers\AdminController::class, 'appoceanpack'])->name('appoceanpack');

// <------------------------------------admin route ------------------------------->
