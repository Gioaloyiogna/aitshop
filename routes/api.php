<?php

use App\Http\Controllers\customer;
use App\Http\Controllers\onlineProducts;
use App\Http\Controllers\physicalProductController;
use App\Http\Controllers\productController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('products')->group(function () {
    Route::get('/', [productController::class, 'index']);
    Route::post('/Add', [productController::class, 'store']);
});
Route::prefix('customer')->group(function () {
    Route::get('/', [customer::class, 'index']);
});
Route::prefix('onlineProucts')->group(function () {
    Route::get('/', [onlineProducts::class, 'index']);
    Route::get('/view/{clientId}', [onlineProducts::class, 'show']);
    Route::get('/payment/{clientId}', [onlineProducts::class, 'payment']);
});
Route::prefix('physicalproducts')->group(function () {
    Route::get('/', [physicalProductController::class, 'index']);
    Route::get('/view/{basketTag}', [physicalProductController::class, 'show']);
});
// physicalproducts