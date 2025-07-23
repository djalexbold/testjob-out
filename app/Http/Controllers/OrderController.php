<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //Получить список заказов (с фильтрами и настраиваемой пагинацией)
    public function index()
    {
        return Order::all();
    }

    public function show(Order $order)
    {
        return $order;
    }

    //Создать заказ
    public function store(Request $request)
    {
        $order = Order::create($request->all());

        return response()->json($order);
    }

    //Обновить заказ
    public function update(Request $request, Order $order)
    {
        $order->update($request->all());

        return response()->json($order);
    }

    // удалить заказ
    public function delete(Order $order)
    {
        $order->delete();

        return response()->json(null, 204);
    }

}
