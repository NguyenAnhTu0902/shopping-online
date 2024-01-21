<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\OrderController;

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
});
