<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;


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
})->name('welcome')->middleware('cache.headers:private;max_age=3600');

Route::get('/shop', [ServiceController::class, 'shop'])->name('shop');

// Route::get('/shop', function () {
//     return view('shop');
// })->name('shop')->middleware('cache.headers:private;max_age=3600');


// Route::get('/status', [App\Http\Controllers\AdminController::class, 'productstatus'])->name('productstatus');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/wallet', [App\Http\Controllers\HomeController::class, 'wallet'])->name('wallet');

//service withdraw route
Route::post('/withdraw', [App\Http\Controllers\HomeController::class, 'withdraw'])->name('withdraw');

//Transaction Route
Route::get('/transaction', [App\Http\Controllers\HomeController::class, 'transaction'])->name('transaction');

//Product Route
Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('product');

//Account Route
Route::get('/account', [App\Http\Controllers\HomeController::class, 'account'])->name('account');
Route::post('/account', [App\Http\Controllers\HomeController::class, 'updateaccount'])->name('updateaccount');


//Change password route
Route::post('/changepassword', [App\Http\Controllers\HomeController::class, 'changepassword'])->name('changepassword');



//Product Route
Route::resource('product', ProductController::class);



//Paystack Route
Route::get('/wallet', [PaymentController::class, 'wallet'])->name('wallet');
Route::post('/debit', [PaymentController::class, 'make_payment'])->name('pay');
Route::get('/pay/callback', [PaymentController::class, 'payment_callback'])->name('pay.callback');





Route::controller(AdminController::class)->prefix('admin')->as('admin.')->middleware(['auth', 'isAdmin'])->group(function () {
    // Route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('', 'dashboard')->name('dashboard');
    Route::get('/users', 'user')->name('users');
    Route::get('/services', 'service')->name('services');
    Route::post('/service/status', 'servicestatus')->name('servicestatus');

    Route::get('/products', 'product')->name('products');
    Route::post('/product/status', 'productstatus')->name('productstatus');
// });

});