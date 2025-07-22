<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WarehouseController extends Controller
{
    //Просмотреть список складов
    public function index(Request $request)
    {
        $query = Warehouse::query();

        if ($request->filled('search')) {
            $query->where('name', 'LIKE', '%' . $request->search . '%');
        }

        $query->orderBy('name')
            ->paginate(5)
            ->through(fn($warehouse) => [
                'id' => $warehouse->id,
                'name' => $warehouse->name,
            ]);
        return view('warehouses.indexUp');
    }
}
