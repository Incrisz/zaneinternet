<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;

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
})->middleware('cache.headers:private;max_age=3600');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('cache.headers:private;max_age=3600');
// Route::get('/wallet', [App\Http\Controllers\HomeController::class, 'wallet'])->name('wallet');

//service withdraw route
Route::post('/withdraw', [App\Http\Controllers\HomeController::class, 'withdraw'])->name('withdraw')->middleware('cache.headers:private;max_age=3600');

//Transaction Route
Route::get('/transaction', [App\Http\Controllers\HomeController::class, 'transaction'])->name('transaction')->middleware('cache.headers:private;max_age=3600');

//Product Route
Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('product')->middleware('cache.headers:private;max_age=3600');

//Account Route
Route::get('/account', [App\Http\Controllers\HomeController::class, 'account'])->name('account')->middleware('cache.headers:private;max_age=3600');
Route::post('/account', [App\Http\Controllers\HomeController::class, 'updateaccount'])->name('updateaccount')->middleware('cache.headers:private;max_age=3600');


//Change password route
Route::post('/changepassword', [App\Http\Controllers\HomeController::class, 'changepassword'])->name('changepassword');



//Product Route
Route::resource('product', ProductController::class)->middleware('cache.headers:private;max_age=3600');



//Paystack Route
Route::get('/wallet', [PaymentController::class, 'wallet'])->name('wallet')->middleware('cache.headers:private;max_age=3600');
Route::post('/debit', [PaymentController::class, 'make_payment'])->name('pay')->middleware('cache.headers:private;max_age=3600');
Route::get('/pay/callback', [PaymentController::class, 'payment_callback'])->name('pay.callback')->middleware('cache.headers:private;max_age=3600');

