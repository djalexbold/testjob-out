<?php

use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::get('/orders', 'OrderController@index');
    Route::get('/orders/{order}', 'OrderController@show');
    Route::post('/orders', 'OrderController@store');
    Route::put('/orders/{order}', 'OrderController@update');
    Route::delete('/orders/{order}', 'OrderController@delete');

    Route::get('/warehouses', 'WarehouseController@index');
