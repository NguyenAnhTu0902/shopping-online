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

//#Homepage
Route::get('/', [App\Http\Controllers\Client\HomepageController::class, 'index']);

//#Authentication
Route::prefix('/dang-nhap')->group(function () {
    Route::get('', [App\Http\Controllers\Client\AuthController::class, 'login']);
    Route::post('', [App\Http\Controllers\Client\AuthController::class, 'checkLogin'])->name('login');
});
Route::prefix('/dang-ky')->group(function () {
    Route::get('', [App\Http\Controllers\Client\AuthController::class, 'register']);
    Route::post('', [App\Http\Controllers\Client\AuthController::class, 'checkRegister'])->name('register');
});

//Show product
Route::prefix('/san-pham')->group(function () {
    Route::get('', [App\Http\Controllers\Client\ProductController::class, 'index']);
    Route::get('/{id}', [App\Http\Controllers\Client\ProductController::class, 'show']);
});

//Cart
//Show product
Route::prefix('/gio-hang')->group(function () {
    Route::get('', [App\Http\Controllers\Client\OrderController::class, 'index']);
});
