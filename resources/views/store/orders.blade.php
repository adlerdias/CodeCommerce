@extends('store.store')

@section('content')
<div class="container">
    <h3>Meus pedidos</h3>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Itens</th>
            <th>Valor</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>
                <ul class="list-group">
                    @foreach( $order->items as $item)
                    <li class="list-group-item">{{ $item->product->name }}</li>
                    @endforeach
                </ul>

            </td>
            <td>{{ $order->total }}</td>
            <td>{{ $order->status }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection