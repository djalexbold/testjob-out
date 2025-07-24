<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
</head>
<body
    class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
<header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
    <div class="d-flex justify-content-between">
        <h2>Просмотреть список складов</h2>
        <table>
            @foreach($warehouses as $warehouse)
                <tr>
                    <td>{{ $warehouse->id }}</td>
                    <td>{{ $warehouse->name }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div>
        <h2>Просмотреть список товаров с их остатками по складам</h2>
        <table>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <div>
        <h2>Получить список заказов (с фильтрами и настраиваемой пагинацией)</h2>
        <table>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->customer }}</td>
                    <td>{{ $order->status }}</td>
                </tr>
            @endforeach
        </table>
        {{ $orders->links() }}
    </div>
</header>
@if (Route::has('login'))
    <div class="h-14.5 hidden lg:block"></div>
@endif
</body>
</html>
