<?php

use App\Http\Controllers\customer;
use App\Http\Controllers\RouteController;
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

Route::get('/dashboard', [RouteController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
// product route

Route::get('/products', [RouteController::class, 'product'])->name('products');
//online sales 
Route::get('/onlinesales', [RouteController::class, 'onlineSales'])->name('onlinesales');
//physical sales 
Route::get('/physicalsales', [RouteController::class, 'physicalSales'])->name('physicalsales');
Route::get('/userprofile', [RouteController::class, 'userProfile'])->name('userprofile');
Route::get('/onlinesales/modals/productList/{id}', [RouteController::class, 'onlineOrders']);
Route::get('/customer', [RouteController::class, 'customer']);
require __DIR__ . '/auth.php';