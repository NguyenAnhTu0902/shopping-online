<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\BrandController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\HomePageController;
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

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [HomePageController::class, 'dashboard'])->name('dashboard');
    Route::prefix('nguoi-dung')->group(function () {
        Route::get('/list', [UserController::class, 'list'])
            ->name('list.user');
        Route::post('/add', [UserController::class, 'add'])
            ->name('add.user');
        Route::get('/{id}', [UserController::class, 'detail'])
            ->name('detail.user');
        Route::post('/update', [UserController::class, 'update'])
            ->name('update.user');
        Route::post('/delete', [UserController::class, 'delete'])
            ->name('delete.user');
    });
    Route::prefix('don-hang')->group(function () {
        Route::get('/list', [OrderController::class, 'list'])
            ->name('list.order');
        Route::get('/{id}', [OrderController::class, 'detail'])
            ->name('detail.order');
        Route::post('/update', [OrderController::class, 'update'])
            ->name('update.order');
        Route::post('/delete', [OrderController::class, 'delete'])
            ->name('delete.order');
    });
    Route::prefix('san-pham')->group(function () {
        Route::get('/list', [ProductController::class, 'list'])
            ->name('list.product');
        Route::post('/add', [ProductController::class, 'add'])
            ->name('add.product');
        Route::get('/{id}', [ProductController::class, 'detail'])
            ->name('detail.product');
        Route::post('/update', [ProductController::class, 'update'])
            ->name('update.product');
        Route::post('/delete', [ProductController::class, 'delete'])
            ->name('delete.product');
        Route::get('/showImage/{id}', [ProductController::class, 'showImage'])
            ->name('show.product');
        Route::post('/addImage', [ProductController::class, 'uploadImage'])
            ->name('add.image.product');
        Route::post('/deleteImage', [ProductController::class, 'deleteImage'])
            ->name('delete.image');
        Route::get('/showProduct/{id}', [ProductController::class, 'showDetail'])
            ->name('show.detail.product');
    });
    Route::prefix('thuong-hieu')->group(function () {
        Route::get('/list', [BrandController::class, 'list'])
            ->name('list.brand');
        Route::post('/add', [BrandController::class, 'add'])
            ->name('add.brand');
        Route::get('/{id}', [BrandController::class, 'detail'])
            ->name('detail.brand');
        Route::post('/update', [BrandController::class, 'update'])
            ->name('update.brand');
        Route::post('/delete', [BrandController::class, 'delete'])
            ->name('delete.brand');
    });

    Route::prefix('loai-san-pham')->group(function () {
        Route::get('/list', [CategoryController::class, 'list'])
            ->name('list.category');
        Route::post('/add', [CategoryController::class, 'add'])
            ->name('add.category');
        Route::get('/{id}', [CategoryController::class, 'detail'])
            ->name('detail.category');
        Route::post('/update', [CategoryController::class, 'update'])
            ->name('update.category');
        Route::post('/delete', [CategoryController::class, 'delete'])
            ->name('delete.category');
    });
});
