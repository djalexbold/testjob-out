<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WarehouseController;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::get('/orders', function (Request $request) {
        $perPage = $request->integer('per_page', default: 5);

        return Order::query()->paginate(perPage: $perPage);
    });
    Route::get('/orders/{order}', [OrderController::class, 'show']);
    Route::post('/orders', [OrderController::class, 'store']);
    Route::put('/orders/{order}', [OrderController::class, 'update']);
    Route::delete('/orders/{order}', [OrderController::class, 'delete']);

    Route::get('/warehouses', [WarehouseController::class, 'index']);
    Route::get('/products', [ProductController::class, 'index']);
