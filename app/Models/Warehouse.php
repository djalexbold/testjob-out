<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\DB;

class Warehouse extends Model
{
    public $timestamps = false;
    use HasFactory;

    protected $fillable = ['name'];


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
