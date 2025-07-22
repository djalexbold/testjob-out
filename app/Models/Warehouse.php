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
    protected $table = 'warehouses';
    protected $fillable = ['name'];

}
