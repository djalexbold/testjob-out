<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WarehouseController extends Controller
{
    public function indexUp(Request $request)
    {
        $query = Warehouse::query();

        if ($request->filled('search')) {
            $query->where('name', 'LIKE', '%' . $request->search . '%');
        }
        return view('warehouses.indexUp');
    }

    public function index(): Response
    {
        return DB::table('warehouses')
            ->orderBy('name')
            ->paginate(5)
            ->through(fn($warehouse) => [
                'id' => $warehouse->id,
                'name' => $warehouse->name,
            ]);
    }
}
