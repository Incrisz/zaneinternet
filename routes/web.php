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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/wallet', [App\Http\Controllers\HomeController::class, 'wallet'])->name('wallet');





Route::get('/pay', [PaymentController::class, 'pay']);
Route::post('/pay', [PaymentController::class, 'make_payment'])->name('pay');
Route::get('/pay/callback', [PaymentController::class, 'payment_callback'])->name('pay.callback');

