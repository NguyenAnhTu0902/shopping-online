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

//Giỏ hàng
Route::prefix('/gio-hang')->group(function () {
    Route::get('', [App\Http\Controllers\Client\CartController::class, 'index']);
    Route::get('/them-moi', [App\Http\Controllers\Client\CartController::class, 'addCart']);
    Route::get('/xoa', [App\Http\Controllers\Client\CartController::class, 'delete']);
    Route::get('/chinh-sua', [App\Http\Controllers\Client\CartController::class, 'update']);
});
//Đặt hàng
Route::prefix('/dat-hang')->group(function () {
    Route::get('', [App\Http\Controllers\Client\OrderController::class, 'index']);
    Route::post('', [App\Http\Controllers\Client\OrderController::class, 'create']);
    Route::get('/tro-ve',[App\Http\Controllers\Client\OrderController::class, 'result']);
});

Route::get('/admin', [App\Http\Controllers\Admin\HomePageController::class, 'index']);

Route::prefix('/admin')->name('.admin')->group(function () {
    Route::get('', [App\Http\Controllers\Admin\HomePageController::class, 'index']);
    Route::get('/nguoi-dung', [App\Http\Controllers\Admin\HomePageController::class, 'index'])->name('user.index');
    Route::get('/don-hang', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('order.index');
    Route::get('/san-pham', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('product.index');
});
