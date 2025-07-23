<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\WarehouseController;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::get('/orders', [OrderController::class, 'index']);
    Route::get('/orders/{order}', [OrderController::class, 'show']);
    Route::post('/orders', [OrderController::class, 'store']);
    Route::put('/orders/{order}', [OrderController::class, 'update']);
    Route::delete('/orders/{order}', [OrderController::class, 'delete']);


    Route::get('/warehouses', function (Request $request) {
        $perPage = $request->integer('per_page', default: 5);

        return Warehouse::query()->paginate(perPage: $perPage);
    });
    //Route::get('/warehouses', [WarehouseController::class, 'index']);
