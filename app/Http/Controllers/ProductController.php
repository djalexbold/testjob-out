<?php

namespace App\Http\Controllers;


use App\Models\Product;

class ProductController extends Controller
{
    //Просмотреть список товаров
    public function index()
    {
        return Product::all();
    }
}
