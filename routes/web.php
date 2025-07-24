<?php

use App\Models\Order;
use App\Models\Product;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    $perPage = $request->integer('per_page', default: 5);
    return view('index', [
        'warehouses' => Warehouse::query()->get(),
        'products' => Product::query()->get(),
        'orders' => Order::query()->paginate(perPage: $perPage),
    ]);
});

