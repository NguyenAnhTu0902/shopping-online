<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\ProductController;

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
});
