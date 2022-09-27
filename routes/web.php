<?php

use App\Http\Controllers\Frontend\CustomerController;
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

Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
Route::post('/customer', [CustomerController::class, 'store'])->name('store.customer');

Route::get('/customer/detail', [CustomerController::class, 'detail'])->name('detail.customer');
Route::get('/customer/detail/{id}', [CustomerController::class, 'detailCustomer']);