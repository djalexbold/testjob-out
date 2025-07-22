<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //Получить список заказов (с фильтрами и настраиваемой пагинацией)
    public function index(Request $request)
    {
        $query = Order::query();

        if ($request->filled('search')) {
            $query->where('customer', 'LIKE', '%' . $request->search . '%');
        }

        $query->paginate(5);

        return view('orders.index');
    }

}
