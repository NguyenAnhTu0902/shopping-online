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
Route::get('/dang-xuat',[App\Http\Controllers\Client\AuthController::class, 'logout']);
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
Route::prefix('don-hang-cua-toi')->middleware('CheckUser')->group(function (){
    Route::get('/',[App\Http\Controllers\Client\OrderController::class, 'myOrder']);
    Route::get('/{id}',[App\Http\Controllers\Client\OrderController::class, 'myOrderDetail']);
});

Route::prefix('/admin')->middleware('CheckAdmin')->name('.admin')->group(function () {
    Route::prefix('dang-nhap')->group(function () {
        Route::get('',[App\Http\Controllers\Admin\AuthController::class, 'login'])->withoutMiddleware('CheckAdmin');
        Route::post('',[App\Http\Controllers\Admin\AuthController::class, 'postLogin'])->withoutMiddleware('CheckAdmin');
    });
    Route::post('dang-xuat', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');
    Route::redirect('','admin/');
    Route::get('', [App\Http\Controllers\Admin\HomePageController::class, 'index']);
    Route::get('/nguoi-dung', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.index');
    Route::get('/don-hang', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('order.index');
    Route::get('/san-pham', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('product.index');
    Route::get('/loai-san-pham', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category.index');
    Route::get('/thuong-hieu', [App\Http\Controllers\Admin\BrandController::class, 'index'])->name('brand.index');
});
