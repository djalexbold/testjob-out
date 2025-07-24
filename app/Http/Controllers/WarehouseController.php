<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;

class WarehouseController extends Controller
{
    //Просмотреть список складов
    public function index()
    {
        return Warehouse::all();
    }
}
